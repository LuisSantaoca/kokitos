<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}
	/**
	 * @param Array $userOrders array("field1", "field2") -> ORDER BY field1, field2
	 * array( array( "field1", "d" ), "field2" ) -> ORDER BY field1 DESC, field2
	 * array( array( "field1", "a" ), array( "field2", "d" ) ) -> ORDER BY field1 ASC, field2 DESC
	*/
	public static function Select( $table, $userConditions = array(), $userOrders = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;

		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$dc->order = array();

		foreach( $userOrders as $userOrder ){
			if( is_array( $userOrder ) ){
				$orderClause = array( "column" => $userOrder[0] );
				$dir = $userOrder[1];
				switch ( $dir ) {
					case "a":
						$orderClause["dir"] = "ASC";
						break;
					case "d":
						$orderClause["dir"] = "DESC";
						break;
				}
			}
			else
				$orderClause = array( "column" => $userOrder );

			$dc->order[] = $orderClause;
		}
		$queryResult = $dataSource->getList( $dc );
		return $queryResult;
	}

	public static function SelectValue( $field, $table, $userConditions = array(), $order = array() ){
		$rs = DB::Select( $table, $userConditions, $order );
		if( !$rs )
			return false;
		$data = $rs->fetchAssoc();
		if( $data[ $field ] )
			return $data[ $field ];
		return false;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;

		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$prep = $dataSource->prepareSQL( $dc );
		if( $prep["where"] == "" )
			return false;
		$ret = $dataSource->deleteSingle( $dc, false );
		return $ret;
	}

	public static function Insert($table, $data)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$result = $dataSource->insertSingle( $dc );
		return !!$result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		if( !$userConditions ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$result = $dataSource->updateSingle( $dc, false );
		return !!$result;
	}

	public static function Count( $table, $userConditions = array() ){
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
        if( !$dataSource )
            return false;
        $dc = new DsCommand();
        $dc->filter = DB::_createFilterCondition( $userConditions );
        $count = $dataSource->getCount( $dc );
        return $count;
	}
	protected static function _createFilterCondition( $userConditions )
	{
		if( !is_array( $userConditions ) ) {
			return DataCondition::SQLCondition( $userConditions );
		}

		$conditions = array();
		foreach($userConditions as $fieldName => $value)
		{
			if ( is_null($value) ) {
				$conditions[] = DataCondition::FieldIs( $fieldName, dsopEMPTY, '' );
			} else {
				$conditions[] = DataCondition::FieldEquals( $fieldName, $value );
			}
		}
		return DataCondition::_And( $conditions );
	}


	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo, $autoincField = null)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes, $autoincField );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	public static function _findDalTable( $table, $conn = null )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList( $conn );

		//	exact match
		foreach( $dalTables[$conn->connId] as $t ) {
			if( ( !$tableName["schema"] || $t["schema"] == $tableName["schema"] )
				&& $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( ( !$tableName["schema"] || strtoupper( $t["schema"] ) == $tableName["schema"] )
				&& strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	public static function _getTableInfo($table, $connId = null )
	{
		global $dal_info, $tableinfo_cache, $cman;
		if( !$connId )
			$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table, $cman->byId( $connId ) );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList( $conn )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		if( isset($dalTables[ $conn->connId ]) )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "wwinte_app_at_intelagro_mx" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "aaa_permisos_uggroups", "varname" => "wwinte_app_at_intelagro_mx__aaa_permisos_uggroups", "altvarname" => "aaa_permisos_uggroups", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "aaa_permisos_ugmembers", "varname" => "wwinte_app_at_intelagro_mx__aaa_permisos_ugmembers", "altvarname" => "aaa_permisos_ugmembers", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "aaa_permisos_ugrights", "varname" => "wwinte_app_at_intelagro_mx__aaa_permisos_ugrights", "altvarname" => "aaa_permisos_ugrights", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "admin_settings", "varname" => "wwinte_app_at_intelagro_mx__admin_settings", "altvarname" => "admin_settings", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "aux_actividades_precios", "varname" => "wwinte_app_at_intelagro_mx__aux_actividades_precios", "altvarname" => "aux_actividades_precios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "aux_dias_bonos", "varname" => "wwinte_app_at_intelagro_mx__aux_dias_bonos", "altvarname" => "aux_dias_bonos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "aux_horarios", "varname" => "wwinte_app_at_intelagro_mx__aux_horarios", "altvarname" => "aux_horarios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "aux_incidencias_justificables", "varname" => "wwinte_app_at_intelagro_mx__aux_incidencias_justificables", "altvarname" => "aux_incidencias_justificables", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "aux_nomina_justificantes_bonos", "varname" => "wwinte_app_at_intelagro_mx__aux_nomina_justificantes_bonos", "altvarname" => "aux_nomina_justificantes_bonos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "aux_puestos_horarios", "varname" => "wwinte_app_at_intelagro_mx__aux_puestos_horarios", "altvarname" => "aux_puestos_horarios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades", "altvarname" => "cat_actividades", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_alcance_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_alcance_mu", "altvarname" => "cat_actividades_alcance_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_categorias", "altvarname" => "cat_actividades_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_categorias_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_categorias_mu", "altvarname" => "cat_actividades_categorias_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_especificas", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_especificas", "altvarname" => "cat_actividades_especificas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_forma_de_pago_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_forma_de_pago_mu", "altvarname" => "cat_actividades_forma_de_pago_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_ingreso_egreso_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_ingreso_egreso_mu", "altvarname" => "cat_actividades_ingreso_egreso_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_metodo_de_costeo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_metodo_de_costeo_mu", "altvarname" => "cat_actividades_metodo_de_costeo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_turnos", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_turnos", "altvarname" => "cat_actividades_turnos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_turnos_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_turnos_mu", "altvarname" => "cat_actividades_turnos_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_unidades_de_costo", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_unidades_de_costo", "altvarname" => "cat_actividades_unidades_de_costo", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_actividades_variables_de_ejecucion", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_variables_de_ejecucion", "altvarname" => "cat_actividades_variables_de_ejecucion", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_almacenes", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_almacenes", "altvarname" => "cat_compras_almacenes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_almacenes_estatus_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_almacenes_estatus_mu", "altvarname" => "cat_compras_almacenes_estatus_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_almacenes_productos_estatus_catalogo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_almacenes_productos_estatus_catalogo_mu", "altvarname" => "cat_compras_almacenes_productos_estatus_catalogo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_almacenes_tipo_de_recibo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_almacenes_tipo_de_recibo_mu", "altvarname" => "cat_compras_almacenes_tipo_de_recibo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_almacenes_tipo_de_salida_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_almacenes_tipo_de_salida_mu", "altvarname" => "cat_compras_almacenes_tipo_de_salida_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_cargo_abono_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_cargo_abono_mu", "altvarname" => "cat_compras_cargo_abono_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_documentos_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_documentos_mu", "altvarname" => "cat_compras_documentos_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_estatus_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_estatus_mu", "altvarname" => "cat_compras_estatus_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_intermediarios", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_intermediarios", "altvarname" => "cat_compras_intermediarios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_productos", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos", "altvarname" => "cat_compras_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_productos_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_categorias", "altvarname" => "cat_compras_productos_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_productos_permitidos", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_permitidos", "altvarname" => "cat_compras_productos_permitidos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_productos_precios", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_precios", "altvarname" => "cat_compras_productos_precios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_productos_presentacion_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_presentacion_mu", "altvarname" => "cat_compras_productos_presentacion_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_productos_unidad_de_costo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_unidad_de_costo_mu", "altvarname" => "cat_compras_productos_unidad_de_costo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_productos_unidad_de_medida_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_unidad_de_medida_mu", "altvarname" => "cat_compras_productos_unidad_de_medida_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_proveedores", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_proveedores", "altvarname" => "cat_compras_proveedores", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_proveedores_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_proveedores_categorias", "altvarname" => "cat_compras_proveedores_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_proveedores_sat", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_proveedores_sat", "altvarname" => "cat_compras_proveedores_sat", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_compras_tipo_de_pago_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_tipo_de_pago_mu", "altvarname" => "cat_compras_tipo_de_pago_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_aplicaciones_alcance_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_alcance_mu", "altvarname" => "cat_control_aplicaciones_alcance_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_aplicaciones_campo_boquillas", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_boquillas", "altvarname" => "cat_control_aplicaciones_campo_boquillas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_aplicaciones_campo_metodo_de_aplicacion", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_metodo_de_aplicacion", "altvarname" => "cat_control_aplicaciones_campo_metodo_de_aplicacion", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_aplicaciones_campo_productos_funcionalidad", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_productos_funcionalidad", "altvarname" => "cat_control_aplicaciones_campo_productos_funcionalidad", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_aplicaciones_campo_tipo_de_control", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_tipo_de_control", "altvarname" => "cat_control_aplicaciones_campo_tipo_de_control", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_aplicaciones_contenedores_mezcladores_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_contenedores_mezcladores_mu", "altvarname" => "cat_control_aplicaciones_contenedores_mezcladores_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_aplicaciones_recetas_02_productos_app", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_recetas_02_productos_app", "altvarname" => "cat_control_aplicaciones_recetas_02_productos_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_aplicaciones_recetas_cts_01_nombre", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_recetas_cts_01_nombre", "altvarname" => "cat_control_aplicaciones_recetas_cts_01_nombre", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_plagas_y_enfermedades", "varname" => "wwinte_app_at_intelagro_mx__cat_control_plagas_y_enfermedades", "altvarname" => "cat_control_plagas_y_enfermedades", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_plagas_y_enfermedades_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_control_plagas_y_enfermedades_categorias", "altvarname" => "cat_control_plagas_y_enfermedades_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_riego_cabezales", "varname" => "wwinte_app_at_intelagro_mx__cat_control_riego_cabezales", "altvarname" => "cat_control_riego_cabezales", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_control_riego_cabezales_pulsos", "varname" => "wwinte_app_at_intelagro_mx__cat_control_riego_cabezales_pulsos", "altvarname" => "cat_control_riego_cabezales_pulsos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_bancos", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_bancos", "altvarname" => "cat_finanzas_bancos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_bancos_cuentas", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_bancos_cuentas", "altvarname" => "cat_finanzas_bancos_cuentas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_cajas_chicas", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_cajas_chicas", "altvarname" => "cat_finanzas_cajas_chicas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_centros_de_costos", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_centros_de_costos", "altvarname" => "cat_finanzas_centros_de_costos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_centros_de_costos_categorias_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_centros_de_costos_categorias_mu", "altvarname" => "cat_finanzas_centros_de_costos_categorias_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_cuentas_de_balance_01_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_01_mu", "altvarname" => "cat_finanzas_cuentas_de_balance_01_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_cuentas_de_balance_02_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_02_mu", "altvarname" => "cat_finanzas_cuentas_de_balance_02_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_cuentas_de_balance_03_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_03_mu", "altvarname" => "cat_finanzas_cuentas_de_balance_03_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_cuentas_de_balance_04", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_04", "altvarname" => "cat_finanzas_cuentas_de_balance_04", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_monedas_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_monedas_mu", "altvarname" => "cat_finanzas_monedas_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_movimientos", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_movimientos", "altvarname" => "cat_finanzas_movimientos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_movimientos_categoria", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_movimientos_categoria", "altvarname" => "cat_finanzas_movimientos_categoria", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_movimientos_categoria_sub", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_movimientos_categoria_sub", "altvarname" => "cat_finanzas_movimientos_categoria_sub", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_movimientos_categorias_naturaleza_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_movimientos_categorias_naturaleza_mu", "altvarname" => "cat_finanzas_movimientos_categorias_naturaleza_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_socios", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_socios", "altvarname" => "cat_finanzas_socios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_finanzas_transacciones_categorias_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_transacciones_categorias_mu", "altvarname" => "cat_finanzas_transacciones_categorias_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_01", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_01", "altvarname" => "cat_holding_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_02_empresas", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_02_empresas", "altvarname" => "cat_holding_02_empresas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_03_empresas_almacenes", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_almacenes", "altvarname" => "cat_holding_03_empresas_almacenes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_03_empresas_departamentos", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_departamentos", "altvarname" => "cat_holding_03_empresas_departamentos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_03_empresas_mu_unidades_productivas_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_mu_unidades_productivas_categorias", "altvarname" => "cat_holding_03_empresas_mu_unidades_productivas_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_03_empresas_registros_patronales", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_registros_patronales", "altvarname" => "cat_holding_03_empresas_registros_patronales", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_03_empresas_unidades_productivas", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_unidades_productivas", "altvarname" => "cat_holding_03_empresas_unidades_productivas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_03_empresas_unidades_productivas_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_unidades_productivas_categorias", "altvarname" => "cat_holding_03_empresas_unidades_productivas_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_03_empresas_up_group_predios", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_up_group_predios", "altvarname" => "cat_holding_03_empresas_up_group_predios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_04_unidades_productivas_lotes", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_04_unidades_productivas_lotes", "altvarname" => "cat_holding_04_unidades_productivas_lotes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_04_unidades_productivas_lotes_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_04_unidades_productivas_lotes_categorias", "altvarname" => "cat_holding_04_unidades_productivas_lotes_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_04_unidades_productivas_mu_lotes_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_04_unidades_productivas_mu_lotes_categorias", "altvarname" => "cat_holding_04_unidades_productivas_mu_lotes_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_holding_04a_unidades_productivas_lotes_historico", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_04a_unidades_productivas_lotes_historico", "altvarname" => "cat_holding_04a_unidades_productivas_lotes_historico", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_01_generales", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_01_generales", "altvarname" => "cat_nominas_01_generales", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_02_actividades", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_02_actividades", "altvarname" => "cat_nominas_02_actividades", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_02_horarios", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_02_horarios", "altvarname" => "cat_nominas_02_horarios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_02_trabajadores", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_02_trabajadores", "altvarname" => "cat_nominas_02_trabajadores", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_03_trabajadores_costo_bruto_conceptos", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_03_trabajadores_costo_bruto_conceptos", "altvarname" => "cat_nominas_03_trabajadores_costo_bruto_conceptos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_asistencias_fechas", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_asistencias_fechas", "altvarname" => "cat_nominas_asistencias_fechas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_asistencias_fechas_uuid_semana", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_asistencias_fechas_uuid_semana", "altvarname" => "cat_nominas_asistencias_fechas_uuid_semana", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_conceptos", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_conceptos", "altvarname" => "cat_nominas_conceptos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_conceptos_clasificacion_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_conceptos_clasificacion_mu", "altvarname" => "cat_nominas_conceptos_clasificacion_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_conceptos_factor_de_calculo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_conceptos_factor_de_calculo_mu", "altvarname" => "cat_nominas_conceptos_factor_de_calculo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_condicionantes_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_condicionantes_mu", "altvarname" => "cat_nominas_condicionantes_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_configuracion_global", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_configuracion_global", "altvarname" => "cat_nominas_configuracion_global", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_dias_de_inicio_consecutivos", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_dias_de_inicio_consecutivos", "altvarname" => "cat_nominas_dias_de_inicio_consecutivos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_dias_semana_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_dias_semana_mu", "altvarname" => "cat_nominas_dias_semana_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_feriados", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_feriados", "altvarname" => "cat_nominas_feriados", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_incidencias", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_incidencias", "altvarname" => "cat_nominas_incidencias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_incidencias_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_incidencias_mu", "altvarname" => "cat_nominas_incidencias_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_intervalos_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_intervalos_mu", "altvarname" => "cat_nominas_intervalos_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_llaves_semana_uuid", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_llaves_semana_uuid", "altvarname" => "cat_nominas_llaves_semana_uuid", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_periodicidad_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_periodicidad_mu", "altvarname" => "cat_nominas_periodicidad_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_prestaciones_especiales", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_prestaciones_especiales", "altvarname" => "cat_nominas_prestaciones_especiales", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_prestaciones_especiales_forma_de_pago_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_prestaciones_especiales_forma_de_pago_mu", "altvarname" => "cat_nominas_prestaciones_especiales_forma_de_pago_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_prestaciones_individuales", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_prestaciones_individuales", "altvarname" => "cat_nominas_prestaciones_individuales", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_prestamos", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_prestamos", "altvarname" => "cat_nominas_prestamos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_uuid_semana", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_uuid_semana", "altvarname" => "cat_nominas_uuid_semana", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_nominas_variables_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_variables_mu", "altvarname" => "cat_nominas_variables_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_produccion_cultivos_01_productos", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_cultivos_01_productos", "altvarname" => "cat_produccion_cultivos_01_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_produccion_cultivos_03_lotes_plantas", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_cultivos_03_lotes_plantas", "altvarname" => "cat_produccion_cultivos_03_lotes_plantas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_produccion_empaques", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_empaques", "altvarname" => "cat_produccion_empaques", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_produccion_proceso", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_proceso", "altvarname" => "cat_produccion_proceso", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_produccion_temporadas", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_temporadas", "altvarname" => "cat_produccion_temporadas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_produccion_variedades", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_variedades", "altvarname" => "cat_produccion_variedades", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_root_operadores", "varname" => "wwinte_app_at_intelagro_mx__cat_root_operadores", "altvarname" => "cat_root_operadores", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_root_tablas_de_catalogos", "varname" => "wwinte_app_at_intelagro_mx__cat_root_tablas_de_catalogos", "altvarname" => "cat_root_tablas_de_catalogos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_alta_baja_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_alta_baja_mu", "altvarname" => "cat_trabajadores_alta_baja_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_altas", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_altas", "altvarname" => "cat_trabajadores_altas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_documentos", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_documentos", "altvarname" => "cat_trabajadores_documentos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_documentos_link", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_documentos_link", "altvarname" => "cat_trabajadores_documentos_link", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_estado_civil_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_estado_civil_mu", "altvarname" => "cat_trabajadores_estado_civil_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_local_foraneo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_local_foraneo_mu", "altvarname" => "cat_trabajadores_local_foraneo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_puestos", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_puestos", "altvarname" => "cat_trabajadores_puestos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_puestos_areas", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_puestos_areas", "altvarname" => "cat_trabajadores_puestos_areas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_puestos_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_puestos_categorias", "altvarname" => "cat_trabajadores_puestos_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_puestos_historico", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_puestos_historico", "altvarname" => "cat_trabajadores_puestos_historico", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_reingresos", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_reingresos", "altvarname" => "cat_trabajadores_reingresos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_sangre_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_sangre_mu", "altvarname" => "cat_trabajadores_sangre_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_sexo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_sexo_mu", "altvarname" => "cat_trabajadores_sexo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_tabulador", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_tabulador", "altvarname" => "cat_trabajadores_tabulador", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_trabajadores_tipo_de_pago", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_tipo_de_pago", "altvarname" => "cat_trabajadores_tipo_de_pago", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_usuarios", "varname" => "wwinte_app_at_intelagro_mx__cat_usuarios", "altvarname" => "cat_usuarios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_usuarios_02_modulos", "varname" => "wwinte_app_at_intelagro_mx__cat_usuarios_02_modulos", "altvarname" => "cat_usuarios_02_modulos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_usuarios_licencias", "varname" => "wwinte_app_at_intelagro_mx__cat_usuarios_licencias", "altvarname" => "cat_usuarios_licencias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_usuarios_modulos", "varname" => "wwinte_app_at_intelagro_mx__cat_usuarios_modulos", "altvarname" => "cat_usuarios_modulos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_clientes", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_clientes", "altvarname" => "cat_ventas_clientes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos", "altvarname" => "cat_ventas_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_almacenes", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_almacenes", "altvarname" => "cat_ventas_productos_almacenes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_almacenes_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_almacenes_categorias", "altvarname" => "cat_ventas_productos_almacenes_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_categorias", "altvarname" => "cat_ventas_productos_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_lotes", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_lotes", "altvarname" => "cat_ventas_productos_lotes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_manejo", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_manejo", "altvarname" => "cat_ventas_productos_manejo", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_marcas", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_marcas", "altvarname" => "cat_ventas_productos_marcas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_precios", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_precios", "altvarname" => "cat_ventas_productos_precios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_presentaciones", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_presentaciones", "altvarname" => "cat_ventas_productos_presentaciones", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_sku", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_sku", "altvarname" => "cat_ventas_productos_sku", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_status_recibo", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_status_recibo", "altvarname" => "cat_ventas_productos_status_recibo", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_unidades_de_medida", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_unidades_de_medida", "altvarname" => "cat_ventas_productos_unidades_de_medida", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_unidades_de_produccion", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_unidades_de_produccion", "altvarname" => "cat_ventas_productos_unidades_de_produccion", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_unidades_de_venta", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_unidades_de_venta", "altvarname" => "cat_ventas_productos_unidades_de_venta", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "cat_ventas_productos_variedades", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_variedades", "altvarname" => "cat_ventas_productos_variedades", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_actividades_asistencias_app", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_asistencias_app", "altvarname" => "tr_actividades_asistencias_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_actividades_cosecha", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_cosecha", "altvarname" => "tr_actividades_cosecha", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_actividades_cosecha_detalle_tags", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_cosecha_detalle_tags", "altvarname" => "tr_actividades_cosecha_detalle_tags", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_actividades_cosecha_salidas_01", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_cosecha_salidas_01", "altvarname" => "tr_actividades_cosecha_salidas_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_actividades_cosecha_salidas_02", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_cosecha_salidas_02", "altvarname" => "tr_actividades_cosecha_salidas_02", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_actividades_culturales_01", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_culturales_01", "altvarname" => "tr_actividades_culturales_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_actividades_culturales_02", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_culturales_02", "altvarname" => "tr_actividades_culturales_02", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_actividades_destajos", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_destajos", "altvarname" => "tr_actividades_destajos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_actividades_planeacion_app", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_planeacion_app", "altvarname" => "tr_actividades_planeacion_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_actividades_planeacion_tareas_app", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_planeacion_tareas_app", "altvarname" => "tr_actividades_planeacion_tareas_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_almacenes_01_recibo_lpn", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_01_recibo_lpn", "altvarname" => "tr_compras_almacenes_01_recibo_lpn", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_almacenes_01_salida_lpn", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_01_salida_lpn", "altvarname" => "tr_compras_almacenes_01_salida_lpn", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_almacenes_02_recibo_productos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_02_recibo_productos", "altvarname" => "tr_compras_almacenes_02_recibo_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_almacenes_02_salida_productos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_02_salida_productos", "altvarname" => "tr_compras_almacenes_02_salida_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_almacenes_inventario_02_productos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_inventario_02_productos", "altvarname" => "tr_compras_almacenes_inventario_02_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_almacenes_inventario_03", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_inventario_03", "altvarname" => "tr_compras_almacenes_inventario_03", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_facturas_sat_01", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_facturas_sat_01", "altvarname" => "tr_compras_facturas_sat_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_facturas_sat_02", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_facturas_sat_02", "altvarname" => "tr_compras_facturas_sat_02", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_facturas_sat_02_carga_masiva", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_facturas_sat_02_carga_masiva", "altvarname" => "tr_compras_facturas_sat_02_carga_masiva", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_proveedores_01_cargos_abonos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_proveedores_01_cargos_abonos", "altvarname" => "tr_compras_proveedores_01_cargos_abonos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_proveedores_02_cargos_abonos_centros_de_costos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_proveedores_02_cargos_abonos_centros_de_costos", "altvarname" => "tr_compras_proveedores_02_cargos_abonos_centros_de_costos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_proveedores_02_cargos_abonos_movimientos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_proveedores_02_cargos_abonos_movimientos", "altvarname" => "tr_compras_proveedores_02_cargos_abonos_movimientos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_requisiciones_01", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_requisiciones_01", "altvarname" => "tr_compras_requisiciones_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_compras_requisiciones_02_productos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_requisiciones_02_productos", "altvarname" => "tr_compras_requisiciones_02_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_control_aplicaciones_03_trabajadores_sectores", "varname" => "wwinte_app_at_intelagro_mx__tr_control_aplicaciones_03_trabajadores_sectores", "altvarname" => "tr_control_aplicaciones_03_trabajadores_sectores", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_control_aplicaciones_campo_02_up_productos_app", "varname" => "wwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_02_up_productos_app", "altvarname" => "tr_control_aplicaciones_campo_02_up_productos_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_control_aplicaciones_campo_03_lotes_app", "varname" => "wwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_03_lotes_app", "altvarname" => "tr_control_aplicaciones_campo_03_lotes_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_control_aplicaciones_campo_04_trabajadores_app", "varname" => "wwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_04_trabajadores_app", "altvarname" => "tr_control_aplicaciones_campo_04_trabajadores_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_control_aplicaciones_campo_planeacion_recetas_app", "varname" => "wwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_planeacion_recetas_app", "altvarname" => "tr_control_aplicaciones_campo_planeacion_recetas_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_control_de_plagas_app", "varname" => "wwinte_app_at_intelagro_mx__tr_control_de_plagas_app", "altvarname" => "tr_control_de_plagas_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_control_de_riego_pulsos_01", "varname" => "wwinte_app_at_intelagro_mx__tr_control_de_riego_pulsos_01", "altvarname" => "tr_control_de_riego_pulsos_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_control_de_riego_pulsos_02_lotes", "varname" => "wwinte_app_at_intelagro_mx__tr_control_de_riego_pulsos_02_lotes", "altvarname" => "tr_control_de_riego_pulsos_02_lotes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_finanzas_aportaciones_socios_01", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_aportaciones_socios_01", "altvarname" => "tr_finanzas_aportaciones_socios_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_finanzas_bancos_01", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_bancos_01", "altvarname" => "tr_finanzas_bancos_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_finanzas_bancos_02", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_bancos_02", "altvarname" => "tr_finanzas_bancos_02", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_finanzas_bancos_02_movimientos", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_bancos_02_movimientos", "altvarname" => "tr_finanzas_bancos_02_movimientos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_finanzas_bancos_02_uuid_sat", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_bancos_02_uuid_sat", "altvarname" => "tr_finanzas_bancos_02_uuid_sat", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_finanzas_movimientos_balance", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_movimientos_balance", "altvarname" => "tr_finanzas_movimientos_balance", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_finanzas_tipo_de_cambio", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_tipo_de_cambio", "altvarname" => "tr_finanzas_tipo_de_cambio", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_menu_noticias", "varname" => "wwinte_app_at_intelagro_mx__tr_menu_noticias", "altvarname" => "tr_menu_noticias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_menu_sugerencias", "varname" => "wwinte_app_at_intelagro_mx__tr_menu_sugerencias", "altvarname" => "tr_menu_sugerencias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_root_audit_editing_locking", "varname" => "wwinte_app_at_intelagro_mx__tr_root_audit_editing_locking", "altvarname" => "tr_root_audit_editing_locking", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_root_audit_log_audit", "varname" => "wwinte_app_at_intelagro_mx__tr_root_audit_log_audit", "altvarname" => "tr_root_audit_log_audit", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_tags", "varname" => "wwinte_app_at_intelagro_mx__tr_tags", "altvarname" => "tr_tags", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_tags_regs", "varname" => "wwinte_app_at_intelagro_mx__tr_tags_regs", "altvarname" => "tr_tags_regs", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_ventas_almacenes_01_up_salidas_lpn", "varname" => "wwinte_app_at_intelagro_mx__tr_ventas_almacenes_01_up_salidas_lpn", "altvarname" => "tr_ventas_almacenes_01_up_salidas_lpn", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
			$dalTables[$conn->connId][] = array("name" => "tr_ventas_almacenes_02_up_salidas_productos", "varname" => "wwinte_app_at_intelagro_mx__tr_ventas_almacenes_02_up_salidas_productos", "altvarname" => "tr_ventas_almacenes_02_up_salidas_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		}
	}

	public static function PrepareConnectionSQL( $conn, $sql,
		$arg1 = null,
		$arg2 = null,
		$arg3 = null,
		$arg4 = null,
		$arg5 = null,
		$arg6 = null,
		$arg7 = null,
		$arg8 = null,
		$arg9 = null,
		$arg10 = null ) {

		$prevConn = DB::CurrentConnection();
		DB::SetConnection( $conn );
		$result = DB::PrepareSQL( $sql, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10 );
		DB::SetConnection( $prevConn );
		return $result;
	}

	public static function PrepareSQL( $sql )
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);

			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = RunnerContext::getValue($token);
			}


			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			 $inQuotes = $conn->positionQuoted( $sql, $offset );
			 if( is_array( $val ) ) {
				$_values = array();
				foreach( $val as $v ) {
					if ( $inQuotes ) {
						$_values[] = '\''.$conn->addSlashes( $v ).'\'';
					} else {
						$_values[] = DB::prepareNumberValue( $v );
					}
				}
				$glued = implode( ",", $_values );
				$repl["insert"] = $inQuotes ? substr( $glued, 1, strlen( $glued ) - 2 ) : $glued;
			} else {
				if( $inQuotes ) {
					$repl["insert"] = $conn->addSlashes( $val );
				} else {
					$repl["insert"] = DB::prepareNumberValue( $val );
				}
			}

			$replacements[] = $repl;
		}

		//	do replacements
		return RunnerContext::doReplacements( $sql, $replacements );
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	public static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{([^\:]*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';

		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				// first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}

	public static function scanNewTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = "/\\\${[^\\s\{\\}]+}/";


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			$match = $m["match"];
			if ( $match != "" ) {
				$matches[] = $match;
				$tokens[] = substr( $match, 2, strlen( $match ) - 3 );
				$offsets[] = $m["offset"];
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = str_replace( ",", ".", (string)$value );
		if( is_numeric($strvalue) )
			return $strvalue;
		return 0;
	}

	public static function Lookup( $sql ) {
		$result = DB::Query( $sql );
		if( !$result ) {
			return null;
		}
		$data = $result->fetchNumeric();
		if( !$data ) {
			return null;
		}
		return $data[0];
	}

	public static function DBLookup( $sql ) {
		return DB::Lookup( $sql );
	}

}

?>