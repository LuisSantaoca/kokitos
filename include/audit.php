<?php
class AuditTrailTable
{
	var $logTableName="tr_root_audit_log_audit";
	var $params;

	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $strUserinfo="change userinfo";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength;

	/**
	 * @type Connection
	 */
	protected $connection;

	function __construct()
	{
		global $cman;
		global $auditMaxFieldLength;

		$this->connection = $cman->getForAudit();
		$this->attLogin=3;
		$this->timeLogin=5;
		$userid="";
		if( Security::getUserName())
			$userid = Security::getUserName();

		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);

		$this->maxFieldLength = $auditMaxFieldLength;
	}

    function LogLogin($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$this->params[1]=$pUsername;
		$arr=array();
		$this->params=array($_SERVER["REMOTE_ADDR"], Security::getUserName() );
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strLogin, "");
		}
		return $retval;
    }

    function LogLoginFailed($pUsername)
    {
		global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strFailLogin, "");
		}
		$this->params=array($_SERVER["REMOTE_ADDR"],"");
		return $retval;
    }

    function LogLogout()
    {
	global $globalEvents;
	if( Security::getUserName() !="" )
	{
		$retval=true;
		$table=Security::loginTable();
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strLogout, "");
		}
		return $retval;
	}
    }

    function LogChPassword( $username )
    {
		global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$arr=array();
		$this->params[ 1 ] = $username;
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $table, $this->strChPass, "");
		}
		return $retval;
    }

    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;

			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strAdd, $str);
		}
		return $retval;
	}
	
	/**
	* not used yet 
	* format audit values as a string
	 * @param Array $newValues
	 * @param Array $oldValues
	 * @param Array include - list of fields to include into return value
	 * @return String
	 */
	function formatChangedValues( $pSet, $newValues, $oldValues, $include = null ) {
		
		$strings = array();
		foreach($newValues as $kefieldy => $value )
		{
			if( $include ) {
				//	ASP
				if( !isset( $include[ $field ] ) ) {
					continue;
				}
			}

			$type = $pSet->getFieldType( $field );
			if( IsBinaryType($type) )
				continue;
			
			if( IsDateFieldType($type) ) {
				$newValue = format_datetime_custom(db2time( $newValues[$field] ),"yyyy-MM-dd HH:mm:ss");
				$oldValue = format_datetime_custom(db2time( $oldValues[$field] ),"yyyy-MM-dd HH:mm:ss");
			} else {
				$newValue = $newValues[$field];
				$oldValue = $oldValues[$field];
			}
			
			if( $newValue == $oldValue ) {
				continue;
			}
			
			$strOld = $field . " [old]: " . $this->formatValue( $type, $oldValue );
			$strNew = $field . " [new]: " . $this->formatValue( $type, $newValue );
			$string[] = $strOld . "\r\n" . $strNew;

		}
		return implode( "\r\n", $strings );
	}

	function formatValue( $type, $value ) {
		if(IsBinaryType($type)) {
			return "<binary value>"; 
		} else {
			$value = str_replace(array("\r\n","\n","\t")," ", $value );
			return $this->getMaxLengthSubstr( $value );
		}
	}

    function LogEdit($str_table,$newvalues,$oldvalues, $keys )
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";

						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$newvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;

			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strEdit, $str);
		}
		return $retval;
    }

    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;

			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strDelete, $str);
		}
		return $retval;
    }

    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $stable, $message, $description);
		}
		return $retval;
    }

    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]).
				" AND " .$this->connection->addFieldWrappers("action"). "=" .$this->connection->prepareString($this->strAccess);
			$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where;

			$this->connection->exec( $sql );
		}

    }

    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->insert(now(), $_SERVER["REMOTE_ADDR"], $pUsername, "", $this->strAccess, "");
		}
    }

	function LoginAccess()
	{
		if( $this->attLogin > 0 && $this->timeLogin > 0 )
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]).
				" AND " .$this->connection->addFieldWrappers("action"). "=".$this->connection->prepareString("access");
			$orderBy = $this->connection->addFieldWrappers("id")." asc";
			$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;

			$qResult = $this->connection->query( $sql );

			$i = 0;
			while( $data = $qResult->fetchAssoc() )
			{
				if( secondsPassedFrom($data["datetime"]) / 60 <= $this->timeLogin )
				{
					if($i==0)
						$firstAccess=$data["datetime"];
					$i+=1;
				}
			}

			if( $i >= $this->attLogin )
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess) / 60);
		}

		return false;
	}

	function logValueEnable($table)
	{
		if($table=="cat_trabajadores_altas")
		{
			return true;
		}
		if($table=="admin_rights")
		{
			return true;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="cat_usuarios_licencias")
		{
			return true;
		}
		if($table=="cat_actividades")
		{
			return true;
		}
		if($table=="cat_usuarios")
		{
			return true;
		}
		if($table=="con_licencias_filtro")
		{
			return true;
		}
		if($table=="cat_actividades_categorias")
		{
			return true;
		}
		if($table=="cat_trabajadores_documentos")
		{
			return true;
		}
		if($table=="cat_trabajadores_puestos")
		{
			return true;
		}
		if($table=="cat_trabajadores_puestos_areas")
		{
			return true;
		}
		if($table=="cat_trabajadores_puestos_categorias")
		{
			return true;
		}
		if($table=="cat_trabajadores_imprimir_gafete")
		{
			return true;
		}
		if($table=="box_cat_trabajadores")
		{
			return true;
		}
		if($table=="cat_actividades_unidades_de_costo")
		{
			return true;
		}
		if($table=="cat_trabajadores_documentos_link")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01")
		{
			return true;
		}
		if($table=="cat_compras_productos_categorias")
		{
			return true;
		}
		if($table=="cat_compras_proveedores")
		{
			return true;
		}
		if($table=="cat_holding_01")
		{
			return true;
		}
		if($table=="cat_holding_02_empresas")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_registros_patronales")
		{
			return true;
		}
		if($table=="cat_compras_proveedores_categorias")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_02_productos")
		{
			return true;
		}
		if($table=="cat_compras_documentos_mu")
		{
			return true;
		}
		if($table=="cat_compras_estatus_mu")
		{
			return true;
		}
		if($table=="tr_root_audit_editing_locking")
		{
			return false;
		}
		if($table=="tr_root_audit_log_audit")
		{
			return false;
		}
		if($table=="cat_compras_productos_unidad_de_medida_mu")
		{
			return true;
		}
		if($table=="cat_compras_productos_presentacion_mu")
		{
			return true;
		}
		if($table=="cat_compras_estatus_mu_box")
		{
			return true;
		}
		if($table=="cat_usuarios_box")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01_autorizacion")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_02_productos_autorizacion")
		{
			return true;
		}
		if($table=="cat_ventas_productos")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_departamentos")
		{
			return true;
		}
		if($table=="cat_compras_almacenes")
		{
			return true;
		}
		if($table=="cat_actividades_categorias_mu")
		{
			return true;
		}
		if($table=="cat_ventas_productos_almacenes")
		{
			return true;
		}
		if($table=="cat_ventas_productos_categorias")
		{
			return true;
		}
		if($table=="cat_ventas_productos_sku")
		{
			return true;
		}
		if($table=="cat_ventas_productos_presentaciones")
		{
			return true;
		}
		if($table=="cat_ventas_productos_manejo")
		{
			return true;
		}
		if($table=="cat_ventas_productos_unidades_de_medida")
		{
			return true;
		}
		if($table=="cat_ventas_productos_unidades_de_produccion")
		{
			return true;
		}
		if($table=="cat_ventas_productos_marcas")
		{
			return true;
		}
		if($table=="cat_ventas_productos_almacenes_categorias")
		{
			return true;
		}
		if($table=="cat_ventas_clientes")
		{
			return true;
		}
		if($table=="cat_finanzas_movimientos")
		{
			return true;
		}
		if($table=="cat_finanzas_centros_de_costos")
		{
			return true;
		}
		if($table=="cat_trabajadores_box_root")
		{
			return true;
		}
		if($table=="cat_actividades_box_root")
		{
			return true;
		}
		if($table=="cat_usuarios_02_modulos")
		{
			return true;
		}
		if($table=="cat_usuarios_modulos")
		{
			return true;
		}
		if($table=="cat_ventas_productos_unidades_de_venta")
		{
			return true;
		}
		if($table=="cat_ventas_productos_almacenes_box")
		{
			return true;
		}
		if($table=="cat_ventas_productos_sku_box")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_almacenes")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_unidades_productivas")
		{
			return true;
		}
		if($table=="tr_finanzas_bancos_01")
		{
			return true;
		}
		if($table=="tr_finanzas_bancos_02")
		{
			return true;
		}
		if($table=="cat_finanzas_bancos")
		{
			return true;
		}
		if($table=="cat_finanzas_bancos_cuentas")
		{
			return true;
		}
		if($table=="cat_finanzas_bancos_cuentas_box")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_unidades_productivas_categorias")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_mu_unidades_productivas_categorias")
		{
			return true;
		}
		if($table=="cat_holding_04_unidades_productivas_lotes")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="cat_holding_04_unidades_productivas_lotes_categorias")
		{
			return true;
		}
		if($table=="cat_holding_04_unidades_productivas_mu_lotes_categorias")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01_orden_de_compra")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_02_productos_orden_de_compra")
		{
			return true;
		}
		if($table=="cat_finanzas_transacciones_box")
		{
			return true;
		}
		if($table=="cat_compras_productos")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01_informe_intelagro")
		{
			return true;
		}
		if($table=="cat_finanzas_socios")
		{
			return true;
		}
		if($table=="box_cat_holding_03_empresas_unidades_productivas")
		{
			return true;
		}
		if($table=="box_cat_compras_productos")
		{
			return true;
		}
		if($table=="box_cat_actividades_unidades_de_costo")
		{
			return true;
		}
		if($table=="cat_ventas_productos_lotes")
		{
			return true;
		}
		if($table=="cat_finanzas_centros_de_costos_categorias_mu")
		{
			return true;
		}
		if($table=="box_tr_compras_requisiciones_tr_compras_almacenes_01")
		{
			return true;
		}
		if($table=="box_cat_compras_almacenes")
		{
			return true;
		}
		if($table=="box_cat_compras_proveedores")
		{
			return true;
		}
		if($table=="box_cat_compras_documentos_mu")
		{
			return true;
		}
		if($table=="cat_usuarios_box_2")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01_autorizacion_user")
		{
			return true;
		}
		if($table=="cat_finanzas_cuentas_de_balance_04")
		{
			return true;
		}
		if($table=="box_cat_finanzas_cuentas_de_balance_04")
		{
			return true;
		}
		if($table=="cat_finanzas_cuentas_de_balance_01_mu")
		{
			return true;
		}
		if($table=="cat_finanzas_cuentas_de_balance_02_mu")
		{
			return true;
		}
		if($table=="cat_finanzas_cuentas_de_balance_03_mu")
		{
			return true;
		}
		if($table=="cat_actividades_turnos_mu")
		{
			return true;
		}
		if($table=="box_cat_holding_04_unidades_productivas_lotes")
		{
			return true;
		}
		if($table=="box_cat_actividades")
		{
			return true;
		}
		if($table=="cat_control_aplicaciones_campo_boquillas")
		{
			return true;
		}
		if($table=="cat_control_aplicaciones_campo_metodo_de_aplicacion")
		{
			return true;
		}
		if($table=="cat_control_aplicaciones_campo_tipo_de_control")
		{
			return true;
		}
		if($table=="box_cat_ventas_clientes")
		{
			return true;
		}
		if($table=="box_cat_ventas_productos_sku")
		{
			return true;
		}
		if($table=="box_tr_compras_facturas_sat_01")
		{
			return true;
		}
		if($table=="cat_compras_tipo_de_pago_mu")
		{
			return false;
		}
		if($table=="cat_finanzas_transacciones_categorias_mu")
		{
			return false;
		}
		if($table=="box_cat_finanzas_cuentas_de_balance__traspasos_almacenes")
		{
			return true;
		}
		if($table=="cat_compras_almacenes_estatus_mu")
		{
			return false;
		}
		if($table=="tr_compras_requisiciones_02_productos_edit_root")
		{
			return true;
		}
		if($table=="box_lotes_root")
		{
			return true;
		}
		if($table=="cat_trabajadores_altas_root")
		{
			return true;
		}
		if($table=="tr_compras_almacenes_inventario_02_productos")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_inventario_03")
		{
			return false;
		}
		if($table=="cat_nominas_dias_semana_mu")
		{
			return false;
		}
		if($table=="cat_nominas_periodicidad_mu")
		{
			return false;
		}
		if($table=="tr_compras_requisiciones_01_orden_de_compra_enviada")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01_orden_de_compra_pagada")
		{
			return true;
		}
		if($table=="ttr_compras_requisiciones_02_productos_orden_de_compra_pagos")
		{
			return true;
		}
		if($table=="tr_finanzas_movimientos_balance")
		{
			return false;
		}
		if($table=="box_cat_finanzas_cuentas_de_balance_03_mu")
		{
			return true;
		}
		if($table=="cat_finanzas_movimientos_categorias_naturaleza_mu")
		{
			return false;
		}
		if($table=="box_cat_finanzas_movimientos")
		{
			return true;
		}
		if($table=="cat_finanzas_monedas_mu")
		{
			return false;
		}
		if($table=="tr_compras_requisiciones_01_edti_root")
		{
			return true;
		}
		if($table=="cat_root_tablas_de_catalogos")
		{
			return false;
		}
		if($table=="cat_actividades_variables_de_ejecucion")
		{
			return false;
		}
		if($table=="cat_nominas_conceptos")
		{
			return false;
		}
		if($table=="cat_nominas_conceptos_clasificacion_mu")
		{
			return false;
		}
		if($table=="cat_nominas_02_actividades")
		{
			return false;
		}
		if($table=="cat_actividades_alcance_mu")
		{
			return false;
		}
		if($table=="cat_nominas_conceptos_factor_de_calculo_mu")
		{
			return false;
		}
		if($table=="cat_nominas_intervalos_mu")
		{
			return false;
		}
		if($table=="Bancos detalle")
		{
			return true;
		}
		if($table=="box_cat_finanzas_bancos_cuentas")
		{
			return true;
		}
		if($table=="box_cat_finanzas_centros_de_costos")
		{
			return true;
		}
		if($table=="cat_finanzas_cajas_chicas")
		{
			return false;
		}
		if($table=="box_cat_finanzas_cajas_chicas")
		{
			return false;
		}
		if($table=="cat_compras_productos_unidad_de_costo_mu")
		{
			return false;
		}
		if($table=="tr_finanzas_bancos_02_query_dolares")
		{
			return true;
		}
		if($table=="zz_script query")
		{
			return true;
		}
		if($table=="cat_control_aplicaciones_campo_productos_funcionalidad")
		{
			return false;
		}
		if($table=="cat_control_plagas_y_enfermedades")
		{
			return false;
		}
		if($table=="box_cat_control_plagas_y_enfermedades")
		{
			return false;
		}
		if($table=="cat_control_plagas_y_enfermedades_categorias")
		{
			return false;
		}
		if($table=="tr_control_de_plagas_app")
		{
			return false;
		}
		if($table=="box_cat_compras_productos_app")
		{
			return true;
		}
		if($table=="cat_compras_almacenes_productos_estatus_catalogo_mu")
		{
			return false;
		}
		if($table=="cat_compras_almacenes_tipo_de_recibo_mu")
		{
			return false;
		}
		if($table=="box_cat_compras_almacenes_tipo_de_recibo_mu")
		{
			return false;
		}
		if($table=="tr_control_aplicaciones_campo_planeacion_recetas_app")
		{
			return false;
		}
		if($table=="cat_nominas_configuracion_global")
		{
			return false;
		}
		if($table=="cat_produccion_temporadas")
		{
			return false;
		}
		if($table=="cat_control_aplicaciones_alcance_mu")
		{
			return false;
		}
		if($table=="box_cat_control_aplicaciones_alcance_mu")
		{
			return false;
		}
		if($table=="cat_control_aplicaciones_recetas_02_productos_app")
		{
			return false;
		}
		if($table=="cat_control_aplicaciones_recetas_cts_01_nombre")
		{
			return false;
		}
		if($table=="box_cat_control_aplicaciones_recetas_cts_01_nombre")
		{
			return false;
		}
		if($table=="tr_control_aplicaciones_campo_02_up_productos_app")
		{
			return false;
		}
		if($table=="tr_control_aplicaciones_campo_03_lotes_app")
		{
			return false;
		}
		if($table=="tr_control_aplicaciones_campo_04_trabajadores_app")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_02_recibo_productos")
		{
			return false;
		}
		if($table=="cat_control_aplicaciones_recetas_cts_01_nombre_query")
		{
			return false;
		}
		if($table=="tr_compras_orden_de_compra_pagos_03_abonos_productos")
		{
			return true;
		}
		if($table=="tr_compras_facturas_sat_02_carga_masiva")
		{
			return false;
		}
		if($table=="cat_nominas_incidencias_mu")
		{
			return false;
		}
		if($table=="tr_finanzas_bancos_02_uuid_sat")
		{
			return false;
		}
		if($table=="tr_finanzas_aportaciones_socios_01")
		{
			return false;
		}
		if($table=="tr_menu_noticias")
		{
			return false;
		}
		if($table=="tr_menu_sugerencias")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app")
		{
			return false;
		}
		if($table=="cat_nominas_01_generales")
		{
			return false;
		}
		if($table=="cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva")
		{
			return false;
		}
		if($table=="cat_actividades_especificas")
		{
			return false;
		}
		if($table=="cat_actividades_metodo_de_costeo_mu")
		{
			return false;
		}
		if($table=="cat_actividades_forma_de_pago_mu")
		{
			return false;
		}
		if($table=="box_cat_actividades_especificas")
		{
			return false;
		}
		if($table=="cat_nominas_variables_mu")
		{
			return false;
		}
		if($table=="cat_nominas_condicionantes_mu")
		{
			return false;
		}
		if($table=="cat_root_operadores")
		{
			return false;
		}
		if($table=="cat_nominas_prestaciones_especiales")
		{
			return false;
		}
		if($table=="cat_nominas_prestaciones_especiales_forma_de_pago_mu")
		{
			return false;
		}
		if($table=="cat_actividades_turnos")
		{
			return false;
		}
		if($table=="cat_nominas_uuid_semana")
		{
			return false;
		}
		if($table=="cat_nominas_prestamos")
		{
			return false;
		}
		if($table=="cat_nominas_prestaciones_individuales")
		{
			return false;
		}
		if($table=="cat_nominas_incidencias")
		{
			return false;
		}
		if($table=="box_cat_nominas_uuid_semana")
		{
			return false;
		}
		if($table=="cat_actividades_ingreso_egreso_mu")
		{
			return false;
		}
		if($table=="box_cat_actividades_turnos")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_semana_uuid")
		{
			return false;
		}
		if($table=="cat_nominas_dias_de_inicio_consecutivos")
		{
			return false;
		}
		if($table=="cat_nominas_asistencias_fechas")
		{
			return false;
		}
		if($table=="cat_nominas_asistencias_fechas_uuid_semana")
		{
			return false;
		}
		if($table=="cat_finanzas_movimientos_categoria")
		{
			return false;
		}
		if($table=="cat_finanzas_movimientos_categoria_sub")
		{
			return false;
		}
		if($table=="box_cat_finanzas_movimientos_categoria")
		{
			return false;
		}
		if($table=="box_cat_finanzas_movimientos_categoria_sub")
		{
			return false;
		}
		if($table=="box_cat_nominas_02_actividades")
		{
			return false;
		}
		if($table=="cat_control_riego_cabezales")
		{
			return false;
		}
		if($table=="cat_control_riego_cabezales_pulsos")
		{
			return false;
		}
		if($table=="tr_control_de_riego_pulsos_01")
		{
			return false;
		}
		if($table=="tr_control_de_riego_pulsos_02_lotes")
		{
			return false;
		}
		if($table=="box_cat_control_riego_cabezales")
		{
			return false;
		}
		if($table=="box_cat_control_riego_cabezales_pulsos")
		{
			return false;
		}
		if($table=="tr_finanzas_bancos_02_movimientos")
		{
			return false;
		}
		if($table=="tr_actividades_culturales_01")
		{
			return false;
		}
		if($table=="tr_actividades_culturales_02")
		{
			return false;
		}
		if($table=="tr_control_aplicaciones_03_trabajadores_sectores")
		{
			return false;
		}
		if($table=="box_unidad_de_medida_compras")
		{
			return true;
		}
		if($table=="box_cat_control_aplicaciones_campo_tipo_de_control")
		{
			return true;
		}
		if($table=="cat_control_aplicaciones_contenedores_mezcladores_mu")
		{
			return false;
		}
		if($table=="cat_compras_productos_precios")
		{
			return false;
		}
		if($table=="cat_compras_proveedores_sat")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos")
		{
			return false;
		}
		if($table=="cat_compras_cargo_abono_mu")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_02_saldos")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos_pagos")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_update_proveedor_detalle")
		{
			return false;
		}
		if($table=="tr_finanzas_bancos_actualizar")
		{
			return true;
		}
		if($table=="tr_finanzas_tipo_de_cambio")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_02_cargos_abonos_centros_de_costos")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_02_cargos_abonos_movimientos")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos_update")
		{
			return false;
		}
		if($table=="tr_actividades_planeacion_app")
		{
			return false;
		}
		if($table=="tr_actividades_planeacion_app_02")
		{
			return false;
		}
		if($table=="tr_actividades_planeacion_tareas_app")
		{
			return false;
		}
		if($table=="box_root_cat_holding_03_empresas_unidades_productivas")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_unidades_productivas_box")
		{
			return true;
		}
		if($table=="cat_holding_04_unidades_productivas_lotes_box")
		{
			return true;
		}
		if($table=="root_box_cat_holding_03_empresas_unidades_productivas")
		{
			return true;
		}
		if($table=="root_box_cat_holding_04_unidades_productivas_lotes")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_2")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_02_productos_compras")
		{
			return true;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos_pagos_revisar")
		{
			return false;
		}
		if($table=="tr_compras_facturas_sat_01")
		{
			return false;
		}
		if($table=="tr_compras_requisiciones_01_estatus")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_02_productos_estatus")
		{
			return true;
		}
		if($table=="tr_compras_facturas_sat_02")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos_oc_pdf")
		{
			return false;
		}
		if($table=="tr_compras_facturas_sat_01_estatus")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos_pagos_edit")
		{
			return false;
		}
		if($table=="cat_finanzas_cuentas_de_balance_5")
		{
			return true;
		}
		if($table=="box_cat_finanzas_cuentas_de_balance_5")
		{
			return true;
		}
		if($table=="box_tr_finanzas_bancos")
		{
			return true;
		}
		if($table=="tr_tags")
		{
			return false;
		}
		if($table=="tr_tags_regs")
		{
			return false;
		}
		if($table=="tr_tags_maestro")
		{
			return false;
		}
		if($table=="box_cat_nominas_conceptos")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_horas_extras")
		{
			return false;
		}
		if($table=="cat_nominas_01_generales_llaves_st")
		{
			return false;
		}
		if($table=="tr_control_de_riego_programas_ha_st")
		{
			return false;
		}
		if($table=="tr_tags_edit")
		{
			return false;
		}
		if($table=="cat_trabajadores_estado_civil_mu")
		{
			return false;
		}
		if($table=="cat_trabajadores_local_foraneo_mu")
		{
			return false;
		}
		if($table=="cat_trabajadores_sangre_mu")
		{
			return false;
		}
		if($table=="cat_trabajadores_sexo_mu")
		{
			return false;
		}
		if($table=="cat_trabajadores_tipo_de_pago")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha")
		{
			return false;
		}
		if($table=="cat_produccion_cultivos_01_productos")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_consecutivo")
		{
			return false;
		}
		if($table=="cat_trabajadores_tabulador")
		{
			return false;
		}
		if($table=="cat_holding_03_empresas_up_group_predios")
		{
			return false;
		}
		if($table=="cat_trabajadores_reingresos")
		{
			return false;
		}
		if($table=="cat_trabajadores_alta_baja_mu")
		{
			return false;
		}
		if($table=="cat_nominas_02_trabajadores")
		{
			return false;
		}
		if($table=="box_cat_nominas_01_generales")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_detalle_tags")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_ranking_01")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_inf")
		{
			return false;
		}
		if($table=="cat_nominas_02_horarios")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_inf_inasistencias")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_consecutivo_query")
		{
			return false;
		}
		if($table=="cat_trabajadores_puestos_historico")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_consecutivo_detalle")
		{
			return false;
		}
		if($table=="cat_produccion_variedades")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_inf_horas_extras")
		{
			return false;
		}
		if($table=="cat_trabajadores_altas_inf_destajo_cosecha")
		{
			return true;
		}
		if($table=="tr_actividades_cosecha_query")
		{
			return false;
		}
		if($table=="tr_actividades_destajos")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_inf_horas_turno_vespertino")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_inf_horas_extras_sab_dom")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_por_predio_query")
		{
			return false;
		}
		if($table=="cat_trabajadores_altas1")
		{
			return true;
		}
		if($table=="cat_trabajadores_puestos_historico_query")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha1borrar")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_01_recibo_lpn")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_01_salida_lpn")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_02_salida_productos")
		{
			return false;
		}
		if($table=="cat_trabajadores_puestos_historico1borrar")
		{
			return false;
		}
		if($table=="cat_compras_almacenes_tipo_de_salida_mu")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_01_salida_lpn1borrar")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_02_salida_productos1borrar")
		{
			return false;
		}
		if($table=="cat_holding_04a_unidades_productivas_lotes_historico")
		{
			return false;
		}
		if($table=="cat_holding_04_unidades_productivas_lotes_inf")
		{
			return true;
		}
		if($table=="tr_actividades_cosecha_query2borrar")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_horas_extras_borrar")
		{
			return false;
		}
		if($table=="cat_ventas_productos_variedades")
		{
			return false;
		}
		if($table=="cat_compras_productos_permitidos")
		{
			return false;
		}
		if($table=="cat_compras_productos1")
		{
			return true;
		}
		if($table=="tr_ventas_almacenes_01_up_salidas_lpn")
		{
			return false;
		}
		if($table=="tr_ventas_almacenes_02_up_salidas_productos")
		{
			return false;
		}
		if($table=="box_cat_ventas_productos_variedades")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_salidas_02")
		{
			return false;
		}
		if($table=="cat_trabajadores_altas2")
		{
			return true;
		}
		if($table=="tr_actividades_cosecha_salidas_01 quey glori")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_salidas_01")
		{
			return false;
		}
		if($table=="cat_ventas_productos_status_recibo")
		{
			return false;
		}
		if($table=="aux_puestos_horarios")
		{
			return false;
		}
		if($table=="aux_horarios")
		{
			return false;
		}
		if($table=="cat_nominas_feriados")
		{
			return false;
		}
		if($table=="aux_actividades_precios")
		{
			return false;
		}
		if($table=="aux_dias_bonos")
		{
			return false;
		}
		if($table=="aux_incidencias_justificables")
		{
			return false;
		}
		if($table=="aux_nomina_justificantes_bonos")
		{
			return false;
		}
		if($table=="puestos horarios")
		{
			return false;
		}
		if($table=="cat_produccion_proceso")
		{
			return false;
		}
		if($table=="tr_prenomina")
		{
			return false;
		}
		if($table=="cat_ventas_productos_precios")
		{
			return false;
		}
	}

	protected function insert($datetime, $ip, $user, $table, $action, $description)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->logTableName ).
			" (" .$this->connection->addFieldWrappers("datetime").
			"," .$this->connection->addFieldWrappers("ip").
			"," .$this->connection->addFieldWrappers("user").
			"," .$this->connection->addFieldWrappers("table").
			"," .$this->connection->addFieldWrappers("action").
			"," .$this->connection->addFieldWrappers("description").
			") VALUES (" .$this->connection->addDateQuotes($datetime).
			"," .$this->connection->prepareString($ip).
			"," .$this->connection->prepareString($user).
			"," .$this->connection->prepareString($table).
			"," .$this->connection->prepareString($action).
			"," .$this->connection->prepareString($description).
			")";

		return $this->connection->exec( $sql );
	}

	protected function getMaxLengthSubstr( $value )
	{
		if( $this->maxFieldLength && strlen($value) > $this->maxFieldLength )
			return runner_substr($value, 0, $this->maxFieldLength);

		return $value;
	}
}

class AuditTrailFile
{
	var $logfile="audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength;

	function __construct()
	{
		global $auditMaxFieldLength;

		$userid = "";
		if(@Security::getUserName())
			$userid = Security::getUserName();

		$this->params = array($_SERVER["REMOTE_ADDR"], $userid);

		$this->maxFieldLength = $auditMaxFieldLength;
	}

    function LogLogin($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogin."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }

    function LogLoginFailed($pUsername)
    {
				global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$this->params[1]=$pUsername;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strFailLogin, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strFailLogin."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }

    function LogLogout()
    {
		global $globalEvents;
		if(Security::getUserName() != "" )
		{
			$retval=true;
			$table=Security::loginTable();
			$arr=array();
			if($globalEvents->exists("OnAuditLog"))
				$retval=$globalEvents->OnAuditLog($this->strLogout, $this->params, $table, $arr, $arr, $arr);
			if($retval)
			{
				$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strLogout."\r\n";
				$this->writeToLogFile( $str );
			}
			return $retval;
		}
    }

    function LogChPassword( $username )
    {
		global $globalEvents;
		$retval=true;
		$table=Security::loginTable();
		$arr=array();
		$this->params[ 1 ] = $username;
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strChPass, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strChPass."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }

    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";

			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }

    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1 = str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}

						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2 = str_replace(array("\r\n","\n","\t")," ",$newvalue);
							$v2 = $this->getMaxLengthSubstr( $v2 );
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }

    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v = str_replace(array("\r\n","\n","\t")," ",$val);
						$v = $this->getMaxLengthSubstr( $v );
					}
					$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";

			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }

	function writeToLogFile( $str )
	{
		$p=strrpos($this->logfile,".");
		$logfileName=runner_substr($this->logfile,0,$p);
		$logfileExt=runner_substr($this->logfile,$p+1, strlen($this->logfile)-1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;

		$fullname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fullname)){
			$fsize = filesize($fullname);
		}
		$str_to_append = "";
		if( !$fsize )
		{
			$str_to_append = $this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
		}
		$str_to_append .= $str;
		append_to_file( $fullname, $str_to_append );

	}

	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }

    function LoginAccess()
	{
		return false;
	}

	function LoginSuccessful()
    {
		return true;
    }

    function LoginUnsuccessful($pUsername)
    {
		return true;
	}

	function logValueEnable($table)
	{
		if($table=="cat_trabajadores_altas")
		{
			return true;
		}
		if($table=="admin_rights")
		{
			return true;
		}
		if($table=="admin_members")
		{
			return true;
		}
		if($table=="cat_usuarios_licencias")
		{
			return true;
		}
		if($table=="cat_actividades")
		{
			return true;
		}
		if($table=="cat_usuarios")
		{
			return true;
		}
		if($table=="con_licencias_filtro")
		{
			return true;
		}
		if($table=="cat_actividades_categorias")
		{
			return true;
		}
		if($table=="cat_trabajadores_documentos")
		{
			return true;
		}
		if($table=="cat_trabajadores_puestos")
		{
			return true;
		}
		if($table=="cat_trabajadores_puestos_areas")
		{
			return true;
		}
		if($table=="cat_trabajadores_puestos_categorias")
		{
			return true;
		}
		if($table=="cat_trabajadores_imprimir_gafete")
		{
			return true;
		}
		if($table=="box_cat_trabajadores")
		{
			return true;
		}
		if($table=="cat_actividades_unidades_de_costo")
		{
			return true;
		}
		if($table=="cat_trabajadores_documentos_link")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01")
		{
			return true;
		}
		if($table=="cat_compras_productos_categorias")
		{
			return true;
		}
		if($table=="cat_compras_proveedores")
		{
			return true;
		}
		if($table=="cat_holding_01")
		{
			return true;
		}
		if($table=="cat_holding_02_empresas")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_registros_patronales")
		{
			return true;
		}
		if($table=="cat_compras_proveedores_categorias")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_02_productos")
		{
			return true;
		}
		if($table=="cat_compras_documentos_mu")
		{
			return true;
		}
		if($table=="cat_compras_estatus_mu")
		{
			return true;
		}
		if($table=="tr_root_audit_editing_locking")
		{
			return false;
		}
		if($table=="tr_root_audit_log_audit")
		{
			return false;
		}
		if($table=="cat_compras_productos_unidad_de_medida_mu")
		{
			return true;
		}
		if($table=="cat_compras_productos_presentacion_mu")
		{
			return true;
		}
		if($table=="cat_compras_estatus_mu_box")
		{
			return true;
		}
		if($table=="cat_usuarios_box")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01_autorizacion")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_02_productos_autorizacion")
		{
			return true;
		}
		if($table=="cat_ventas_productos")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_departamentos")
		{
			return true;
		}
		if($table=="cat_compras_almacenes")
		{
			return true;
		}
		if($table=="cat_actividades_categorias_mu")
		{
			return true;
		}
		if($table=="cat_ventas_productos_almacenes")
		{
			return true;
		}
		if($table=="cat_ventas_productos_categorias")
		{
			return true;
		}
		if($table=="cat_ventas_productos_sku")
		{
			return true;
		}
		if($table=="cat_ventas_productos_presentaciones")
		{
			return true;
		}
		if($table=="cat_ventas_productos_manejo")
		{
			return true;
		}
		if($table=="cat_ventas_productos_unidades_de_medida")
		{
			return true;
		}
		if($table=="cat_ventas_productos_unidades_de_produccion")
		{
			return true;
		}
		if($table=="cat_ventas_productos_marcas")
		{
			return true;
		}
		if($table=="cat_ventas_productos_almacenes_categorias")
		{
			return true;
		}
		if($table=="cat_ventas_clientes")
		{
			return true;
		}
		if($table=="cat_finanzas_movimientos")
		{
			return true;
		}
		if($table=="cat_finanzas_centros_de_costos")
		{
			return true;
		}
		if($table=="cat_trabajadores_box_root")
		{
			return true;
		}
		if($table=="cat_actividades_box_root")
		{
			return true;
		}
		if($table=="cat_usuarios_02_modulos")
		{
			return true;
		}
		if($table=="cat_usuarios_modulos")
		{
			return true;
		}
		if($table=="cat_ventas_productos_unidades_de_venta")
		{
			return true;
		}
		if($table=="cat_ventas_productos_almacenes_box")
		{
			return true;
		}
		if($table=="cat_ventas_productos_sku_box")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_almacenes")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_unidades_productivas")
		{
			return true;
		}
		if($table=="tr_finanzas_bancos_01")
		{
			return true;
		}
		if($table=="tr_finanzas_bancos_02")
		{
			return true;
		}
		if($table=="cat_finanzas_bancos")
		{
			return true;
		}
		if($table=="cat_finanzas_bancos_cuentas")
		{
			return true;
		}
		if($table=="cat_finanzas_bancos_cuentas_box")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_unidades_productivas_categorias")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_mu_unidades_productivas_categorias")
		{
			return true;
		}
		if($table=="cat_holding_04_unidades_productivas_lotes")
		{
			return true;
		}
		if($table=="admin_users")
		{
			return true;
		}
		if($table=="cat_holding_04_unidades_productivas_lotes_categorias")
		{
			return true;
		}
		if($table=="cat_holding_04_unidades_productivas_mu_lotes_categorias")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01_orden_de_compra")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_02_productos_orden_de_compra")
		{
			return true;
		}
		if($table=="cat_finanzas_transacciones_box")
		{
			return true;
		}
		if($table=="cat_compras_productos")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01_informe_intelagro")
		{
			return true;
		}
		if($table=="cat_finanzas_socios")
		{
			return true;
		}
		if($table=="box_cat_holding_03_empresas_unidades_productivas")
		{
			return true;
		}
		if($table=="box_cat_compras_productos")
		{
			return true;
		}
		if($table=="box_cat_actividades_unidades_de_costo")
		{
			return true;
		}
		if($table=="cat_ventas_productos_lotes")
		{
			return true;
		}
		if($table=="cat_finanzas_centros_de_costos_categorias_mu")
		{
			return true;
		}
		if($table=="box_tr_compras_requisiciones_tr_compras_almacenes_01")
		{
			return true;
		}
		if($table=="box_cat_compras_almacenes")
		{
			return true;
		}
		if($table=="box_cat_compras_proveedores")
		{
			return true;
		}
		if($table=="box_cat_compras_documentos_mu")
		{
			return true;
		}
		if($table=="cat_usuarios_box_2")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01_autorizacion_user")
		{
			return true;
		}
		if($table=="cat_finanzas_cuentas_de_balance_04")
		{
			return true;
		}
		if($table=="box_cat_finanzas_cuentas_de_balance_04")
		{
			return true;
		}
		if($table=="cat_finanzas_cuentas_de_balance_01_mu")
		{
			return true;
		}
		if($table=="cat_finanzas_cuentas_de_balance_02_mu")
		{
			return true;
		}
		if($table=="cat_finanzas_cuentas_de_balance_03_mu")
		{
			return true;
		}
		if($table=="cat_actividades_turnos_mu")
		{
			return true;
		}
		if($table=="box_cat_holding_04_unidades_productivas_lotes")
		{
			return true;
		}
		if($table=="box_cat_actividades")
		{
			return true;
		}
		if($table=="cat_control_aplicaciones_campo_boquillas")
		{
			return true;
		}
		if($table=="cat_control_aplicaciones_campo_metodo_de_aplicacion")
		{
			return true;
		}
		if($table=="cat_control_aplicaciones_campo_tipo_de_control")
		{
			return true;
		}
		if($table=="box_cat_ventas_clientes")
		{
			return true;
		}
		if($table=="box_cat_ventas_productos_sku")
		{
			return true;
		}
		if($table=="box_tr_compras_facturas_sat_01")
		{
			return true;
		}
		if($table=="cat_compras_tipo_de_pago_mu")
		{
			return false;
		}
		if($table=="cat_finanzas_transacciones_categorias_mu")
		{
			return false;
		}
		if($table=="box_cat_finanzas_cuentas_de_balance__traspasos_almacenes")
		{
			return true;
		}
		if($table=="cat_compras_almacenes_estatus_mu")
		{
			return false;
		}
		if($table=="tr_compras_requisiciones_02_productos_edit_root")
		{
			return true;
		}
		if($table=="box_lotes_root")
		{
			return true;
		}
		if($table=="cat_trabajadores_altas_root")
		{
			return true;
		}
		if($table=="tr_compras_almacenes_inventario_02_productos")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_inventario_03")
		{
			return false;
		}
		if($table=="cat_nominas_dias_semana_mu")
		{
			return false;
		}
		if($table=="cat_nominas_periodicidad_mu")
		{
			return false;
		}
		if($table=="tr_compras_requisiciones_01_orden_de_compra_enviada")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_01_orden_de_compra_pagada")
		{
			return true;
		}
		if($table=="ttr_compras_requisiciones_02_productos_orden_de_compra_pagos")
		{
			return true;
		}
		if($table=="tr_finanzas_movimientos_balance")
		{
			return false;
		}
		if($table=="box_cat_finanzas_cuentas_de_balance_03_mu")
		{
			return true;
		}
		if($table=="cat_finanzas_movimientos_categorias_naturaleza_mu")
		{
			return false;
		}
		if($table=="box_cat_finanzas_movimientos")
		{
			return true;
		}
		if($table=="cat_finanzas_monedas_mu")
		{
			return false;
		}
		if($table=="tr_compras_requisiciones_01_edti_root")
		{
			return true;
		}
		if($table=="cat_root_tablas_de_catalogos")
		{
			return false;
		}
		if($table=="cat_actividades_variables_de_ejecucion")
		{
			return false;
		}
		if($table=="cat_nominas_conceptos")
		{
			return false;
		}
		if($table=="cat_nominas_conceptos_clasificacion_mu")
		{
			return false;
		}
		if($table=="cat_nominas_02_actividades")
		{
			return false;
		}
		if($table=="cat_actividades_alcance_mu")
		{
			return false;
		}
		if($table=="cat_nominas_conceptos_factor_de_calculo_mu")
		{
			return false;
		}
		if($table=="cat_nominas_intervalos_mu")
		{
			return false;
		}
		if($table=="Bancos detalle")
		{
			return true;
		}
		if($table=="box_cat_finanzas_bancos_cuentas")
		{
			return true;
		}
		if($table=="box_cat_finanzas_centros_de_costos")
		{
			return true;
		}
		if($table=="cat_finanzas_cajas_chicas")
		{
			return false;
		}
		if($table=="box_cat_finanzas_cajas_chicas")
		{
			return false;
		}
		if($table=="cat_compras_productos_unidad_de_costo_mu")
		{
			return false;
		}
		if($table=="tr_finanzas_bancos_02_query_dolares")
		{
			return true;
		}
		if($table=="zz_script query")
		{
			return true;
		}
		if($table=="cat_control_aplicaciones_campo_productos_funcionalidad")
		{
			return false;
		}
		if($table=="cat_control_plagas_y_enfermedades")
		{
			return false;
		}
		if($table=="box_cat_control_plagas_y_enfermedades")
		{
			return false;
		}
		if($table=="cat_control_plagas_y_enfermedades_categorias")
		{
			return false;
		}
		if($table=="tr_control_de_plagas_app")
		{
			return false;
		}
		if($table=="box_cat_compras_productos_app")
		{
			return true;
		}
		if($table=="cat_compras_almacenes_productos_estatus_catalogo_mu")
		{
			return false;
		}
		if($table=="cat_compras_almacenes_tipo_de_recibo_mu")
		{
			return false;
		}
		if($table=="box_cat_compras_almacenes_tipo_de_recibo_mu")
		{
			return false;
		}
		if($table=="tr_control_aplicaciones_campo_planeacion_recetas_app")
		{
			return false;
		}
		if($table=="cat_nominas_configuracion_global")
		{
			return false;
		}
		if($table=="cat_produccion_temporadas")
		{
			return false;
		}
		if($table=="cat_control_aplicaciones_alcance_mu")
		{
			return false;
		}
		if($table=="box_cat_control_aplicaciones_alcance_mu")
		{
			return false;
		}
		if($table=="cat_control_aplicaciones_recetas_02_productos_app")
		{
			return false;
		}
		if($table=="cat_control_aplicaciones_recetas_cts_01_nombre")
		{
			return false;
		}
		if($table=="box_cat_control_aplicaciones_recetas_cts_01_nombre")
		{
			return false;
		}
		if($table=="tr_control_aplicaciones_campo_02_up_productos_app")
		{
			return false;
		}
		if($table=="tr_control_aplicaciones_campo_03_lotes_app")
		{
			return false;
		}
		if($table=="tr_control_aplicaciones_campo_04_trabajadores_app")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_02_recibo_productos")
		{
			return false;
		}
		if($table=="cat_control_aplicaciones_recetas_cts_01_nombre_query")
		{
			return false;
		}
		if($table=="tr_compras_orden_de_compra_pagos_03_abonos_productos")
		{
			return true;
		}
		if($table=="tr_compras_facturas_sat_02_carga_masiva")
		{
			return false;
		}
		if($table=="cat_nominas_incidencias_mu")
		{
			return false;
		}
		if($table=="tr_finanzas_bancos_02_uuid_sat")
		{
			return false;
		}
		if($table=="tr_finanzas_aportaciones_socios_01")
		{
			return false;
		}
		if($table=="tr_menu_noticias")
		{
			return false;
		}
		if($table=="tr_menu_sugerencias")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app")
		{
			return false;
		}
		if($table=="cat_nominas_01_generales")
		{
			return false;
		}
		if($table=="cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva")
		{
			return false;
		}
		if($table=="cat_actividades_especificas")
		{
			return false;
		}
		if($table=="cat_actividades_metodo_de_costeo_mu")
		{
			return false;
		}
		if($table=="cat_actividades_forma_de_pago_mu")
		{
			return false;
		}
		if($table=="box_cat_actividades_especificas")
		{
			return false;
		}
		if($table=="cat_nominas_variables_mu")
		{
			return false;
		}
		if($table=="cat_nominas_condicionantes_mu")
		{
			return false;
		}
		if($table=="cat_root_operadores")
		{
			return false;
		}
		if($table=="cat_nominas_prestaciones_especiales")
		{
			return false;
		}
		if($table=="cat_nominas_prestaciones_especiales_forma_de_pago_mu")
		{
			return false;
		}
		if($table=="cat_actividades_turnos")
		{
			return false;
		}
		if($table=="cat_nominas_uuid_semana")
		{
			return false;
		}
		if($table=="cat_nominas_prestamos")
		{
			return false;
		}
		if($table=="cat_nominas_prestaciones_individuales")
		{
			return false;
		}
		if($table=="cat_nominas_incidencias")
		{
			return false;
		}
		if($table=="box_cat_nominas_uuid_semana")
		{
			return false;
		}
		if($table=="cat_actividades_ingreso_egreso_mu")
		{
			return false;
		}
		if($table=="box_cat_actividades_turnos")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_semana_uuid")
		{
			return false;
		}
		if($table=="cat_nominas_dias_de_inicio_consecutivos")
		{
			return false;
		}
		if($table=="cat_nominas_asistencias_fechas")
		{
			return false;
		}
		if($table=="cat_nominas_asistencias_fechas_uuid_semana")
		{
			return false;
		}
		if($table=="cat_finanzas_movimientos_categoria")
		{
			return false;
		}
		if($table=="cat_finanzas_movimientos_categoria_sub")
		{
			return false;
		}
		if($table=="box_cat_finanzas_movimientos_categoria")
		{
			return false;
		}
		if($table=="box_cat_finanzas_movimientos_categoria_sub")
		{
			return false;
		}
		if($table=="box_cat_nominas_02_actividades")
		{
			return false;
		}
		if($table=="cat_control_riego_cabezales")
		{
			return false;
		}
		if($table=="cat_control_riego_cabezales_pulsos")
		{
			return false;
		}
		if($table=="tr_control_de_riego_pulsos_01")
		{
			return false;
		}
		if($table=="tr_control_de_riego_pulsos_02_lotes")
		{
			return false;
		}
		if($table=="box_cat_control_riego_cabezales")
		{
			return false;
		}
		if($table=="box_cat_control_riego_cabezales_pulsos")
		{
			return false;
		}
		if($table=="tr_finanzas_bancos_02_movimientos")
		{
			return false;
		}
		if($table=="tr_actividades_culturales_01")
		{
			return false;
		}
		if($table=="tr_actividades_culturales_02")
		{
			return false;
		}
		if($table=="tr_control_aplicaciones_03_trabajadores_sectores")
		{
			return false;
		}
		if($table=="box_unidad_de_medida_compras")
		{
			return true;
		}
		if($table=="box_cat_control_aplicaciones_campo_tipo_de_control")
		{
			return true;
		}
		if($table=="cat_control_aplicaciones_contenedores_mezcladores_mu")
		{
			return false;
		}
		if($table=="cat_compras_productos_precios")
		{
			return false;
		}
		if($table=="cat_compras_proveedores_sat")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos")
		{
			return false;
		}
		if($table=="cat_compras_cargo_abono_mu")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_02_saldos")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos_pagos")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_update_proveedor_detalle")
		{
			return false;
		}
		if($table=="tr_finanzas_bancos_actualizar")
		{
			return true;
		}
		if($table=="tr_finanzas_tipo_de_cambio")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_02_cargos_abonos_centros_de_costos")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_02_cargos_abonos_movimientos")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos_update")
		{
			return false;
		}
		if($table=="tr_actividades_planeacion_app")
		{
			return false;
		}
		if($table=="tr_actividades_planeacion_app_02")
		{
			return false;
		}
		if($table=="tr_actividades_planeacion_tareas_app")
		{
			return false;
		}
		if($table=="box_root_cat_holding_03_empresas_unidades_productivas")
		{
			return true;
		}
		if($table=="cat_holding_03_empresas_unidades_productivas_box")
		{
			return true;
		}
		if($table=="cat_holding_04_unidades_productivas_lotes_box")
		{
			return true;
		}
		if($table=="root_box_cat_holding_03_empresas_unidades_productivas")
		{
			return true;
		}
		if($table=="root_box_cat_holding_04_unidades_productivas_lotes")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_2")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_02_productos_compras")
		{
			return true;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos_pagos_revisar")
		{
			return false;
		}
		if($table=="tr_compras_facturas_sat_01")
		{
			return false;
		}
		if($table=="tr_compras_requisiciones_01_estatus")
		{
			return true;
		}
		if($table=="tr_compras_requisiciones_02_productos_estatus")
		{
			return true;
		}
		if($table=="tr_compras_facturas_sat_02")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos_oc_pdf")
		{
			return false;
		}
		if($table=="tr_compras_facturas_sat_01_estatus")
		{
			return false;
		}
		if($table=="tr_compras_proveedores_01_cargos_abonos_pagos_edit")
		{
			return false;
		}
		if($table=="cat_finanzas_cuentas_de_balance_5")
		{
			return true;
		}
		if($table=="box_cat_finanzas_cuentas_de_balance_5")
		{
			return true;
		}
		if($table=="box_tr_finanzas_bancos")
		{
			return true;
		}
		if($table=="tr_tags")
		{
			return false;
		}
		if($table=="tr_tags_regs")
		{
			return false;
		}
		if($table=="tr_tags_maestro")
		{
			return false;
		}
		if($table=="box_cat_nominas_conceptos")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_horas_extras")
		{
			return false;
		}
		if($table=="cat_nominas_01_generales_llaves_st")
		{
			return false;
		}
		if($table=="tr_control_de_riego_programas_ha_st")
		{
			return false;
		}
		if($table=="tr_tags_edit")
		{
			return false;
		}
		if($table=="cat_trabajadores_estado_civil_mu")
		{
			return false;
		}
		if($table=="cat_trabajadores_local_foraneo_mu")
		{
			return false;
		}
		if($table=="cat_trabajadores_sangre_mu")
		{
			return false;
		}
		if($table=="cat_trabajadores_sexo_mu")
		{
			return false;
		}
		if($table=="cat_trabajadores_tipo_de_pago")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha")
		{
			return false;
		}
		if($table=="cat_produccion_cultivos_01_productos")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_consecutivo")
		{
			return false;
		}
		if($table=="cat_trabajadores_tabulador")
		{
			return false;
		}
		if($table=="cat_holding_03_empresas_up_group_predios")
		{
			return false;
		}
		if($table=="cat_trabajadores_reingresos")
		{
			return false;
		}
		if($table=="cat_trabajadores_alta_baja_mu")
		{
			return false;
		}
		if($table=="cat_nominas_02_trabajadores")
		{
			return false;
		}
		if($table=="box_cat_nominas_01_generales")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_detalle_tags")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_ranking_01")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_inf")
		{
			return false;
		}
		if($table=="cat_nominas_02_horarios")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_inf_inasistencias")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_consecutivo_query")
		{
			return false;
		}
		if($table=="cat_trabajadores_puestos_historico")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_consecutivo_detalle")
		{
			return false;
		}
		if($table=="cat_produccion_variedades")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_inf_horas_extras")
		{
			return false;
		}
		if($table=="cat_trabajadores_altas_inf_destajo_cosecha")
		{
			return true;
		}
		if($table=="tr_actividades_cosecha_query")
		{
			return false;
		}
		if($table=="tr_actividades_destajos")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_inf_horas_turno_vespertino")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_inf_horas_extras_sab_dom")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_por_predio_query")
		{
			return false;
		}
		if($table=="cat_trabajadores_altas1")
		{
			return true;
		}
		if($table=="cat_trabajadores_puestos_historico_query")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha1borrar")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_01_recibo_lpn")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_01_salida_lpn")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_02_salida_productos")
		{
			return false;
		}
		if($table=="cat_trabajadores_puestos_historico1borrar")
		{
			return false;
		}
		if($table=="cat_compras_almacenes_tipo_de_salida_mu")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_01_salida_lpn1borrar")
		{
			return false;
		}
		if($table=="tr_compras_almacenes_02_salida_productos1borrar")
		{
			return false;
		}
		if($table=="cat_holding_04a_unidades_productivas_lotes_historico")
		{
			return false;
		}
		if($table=="cat_holding_04_unidades_productivas_lotes_inf")
		{
			return true;
		}
		if($table=="tr_actividades_cosecha_query2borrar")
		{
			return false;
		}
		if($table=="tr_actividades_asistencias_app_horas_extras_borrar")
		{
			return false;
		}
		if($table=="cat_ventas_productos_variedades")
		{
			return false;
		}
		if($table=="cat_compras_productos_permitidos")
		{
			return false;
		}
		if($table=="cat_compras_productos1")
		{
			return true;
		}
		if($table=="tr_ventas_almacenes_01_up_salidas_lpn")
		{
			return false;
		}
		if($table=="tr_ventas_almacenes_02_up_salidas_productos")
		{
			return false;
		}
		if($table=="box_cat_ventas_productos_variedades")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_salidas_02")
		{
			return false;
		}
		if($table=="cat_trabajadores_altas2")
		{
			return true;
		}
		if($table=="tr_actividades_cosecha_salidas_01 quey glori")
		{
			return false;
		}
		if($table=="tr_actividades_cosecha_salidas_01")
		{
			return false;
		}
		if($table=="cat_ventas_productos_status_recibo")
		{
			return false;
		}
		if($table=="aux_puestos_horarios")
		{
			return false;
		}
		if($table=="aux_horarios")
		{
			return false;
		}
		if($table=="cat_nominas_feriados")
		{
			return false;
		}
		if($table=="aux_actividades_precios")
		{
			return false;
		}
		if($table=="aux_dias_bonos")
		{
			return false;
		}
		if($table=="aux_incidencias_justificables")
		{
			return false;
		}
		if($table=="aux_nomina_justificantes_bonos")
		{
			return false;
		}
		if($table=="puestos horarios")
		{
			return false;
		}
		if($table=="cat_produccion_proceso")
		{
			return false;
		}
		if($table=="tr_prenomina")
		{
			return false;
		}
		if($table=="cat_ventas_productos_precios")
		{
			return false;
		}
	}

	protected function getMaxLengthSubstr( $value )
	{
		if( $this->maxFieldLength && strlen($value) > $this->maxFieldLength )
			return runner_substr($value, 0, $this->maxFieldLength);

		return $value;
	}
}
?>