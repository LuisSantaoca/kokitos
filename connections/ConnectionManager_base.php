<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "wwinte_app_at_intelagro_mx" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "wwinte_app_at_intelagro_mx";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "wwinte_app_at_intelagro_mx" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "wwinte_app_at_intelagro_mx" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "wwinte_app_at_intelagro_mx";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "wwinte_app_at_intelagro_mx";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "wwinte_app_at_intelagro_mx";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["cat_trabajadores_altas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["admin_rights"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["admin_members"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_usuarios_licencias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_usuarios"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["con_licencias_filtro"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_documentos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_puestos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_puestos_areas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_puestos_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_imprimir_gafete"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_trabajadores"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_unidades_de_costo"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_documentos_link"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_productos_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_proveedores"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_02_empresas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_03_empresas_registros_patronales"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_proveedores_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_02_productos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_documentos_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_estatus_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_root_audit_editing_locking"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_root_audit_log_audit"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_productos_unidad_de_medida_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_productos_presentacion_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_estatus_mu_box"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_usuarios_box"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_01_autorizacion"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_02_productos_autorizacion"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_03_empresas_departamentos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_almacenes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_categorias_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_almacenes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_sku"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_presentaciones"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_manejo"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_unidades_de_medida"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_unidades_de_produccion"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_marcas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_almacenes_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_clientes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_movimientos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_centros_de_costos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_box_root"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_box_root"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_usuarios_02_modulos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_usuarios_modulos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_unidades_de_venta"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_almacenes_box"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_sku_box"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_03_empresas_almacenes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_03_empresas_unidades_productivas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_finanzas_bancos_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_finanzas_bancos_02"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_bancos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_bancos_cuentas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_bancos_cuentas_box"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_03_empresas_unidades_productivas_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_03_empresas_mu_unidades_productivas_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_04_unidades_productivas_lotes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["admin_users"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_04_unidades_productivas_lotes_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_04_unidades_productivas_mu_lotes_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_01_orden_de_compra"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_02_productos_orden_de_compra"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_transacciones_box"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_productos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_01_informe_intelagro"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_socios"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_holding_03_empresas_unidades_productivas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_compras_productos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_actividades_unidades_de_costo"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_lotes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_centros_de_costos_categorias_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_tr_compras_requisiciones_tr_compras_almacenes_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_compras_almacenes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_compras_proveedores"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_compras_documentos_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_usuarios_box_2"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_01_autorizacion_user"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_cuentas_de_balance_04"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_finanzas_cuentas_de_balance_04"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_cuentas_de_balance_01_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_cuentas_de_balance_02_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_cuentas_de_balance_03_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_turnos_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_holding_04_unidades_productivas_lotes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_actividades"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_aplicaciones_campo_boquillas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_aplicaciones_campo_metodo_de_aplicacion"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_aplicaciones_campo_tipo_de_control"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_ventas_clientes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_ventas_productos_sku"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_tr_compras_facturas_sat_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_tipo_de_pago_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_transacciones_categorias_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_finanzas_cuentas_de_balance__traspasos_almacenes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_almacenes_estatus_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_02_productos_edit_root"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_lotes_root"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_altas_root"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_almacenes_inventario_02_productos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_almacenes_inventario_03"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_dias_semana_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_periodicidad_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_01_orden_de_compra_enviada"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_01_orden_de_compra_pagada"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["ttr_compras_requisiciones_02_productos_orden_de_compra_pagos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_finanzas_movimientos_balance"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_finanzas_cuentas_de_balance_03_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_movimientos_categorias_naturaleza_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_finanzas_movimientos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_monedas_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_01_edti_root"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_root_tablas_de_catalogos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_variables_de_ejecucion"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_conceptos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_conceptos_clasificacion_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_02_actividades"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_alcance_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_conceptos_factor_de_calculo_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_intervalos_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["Bancos detalle"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_finanzas_bancos_cuentas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_finanzas_centros_de_costos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_cajas_chicas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_finanzas_cajas_chicas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_productos_unidad_de_costo_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_finanzas_bancos_02_query_dolares"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["zz_script query"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_aplicaciones_campo_productos_funcionalidad"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_plagas_y_enfermedades"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_control_plagas_y_enfermedades"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_plagas_y_enfermedades_categorias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_control_de_plagas_app"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_compras_productos_app"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_almacenes_productos_estatus_catalogo_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_almacenes_tipo_de_recibo_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_compras_almacenes_tipo_de_recibo_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_control_aplicaciones_campo_planeacion_recetas_app"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_configuracion_global"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_produccion_temporadas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_aplicaciones_alcance_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_control_aplicaciones_alcance_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_aplicaciones_recetas_02_productos_app"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_aplicaciones_recetas_cts_01_nombre"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_control_aplicaciones_recetas_cts_01_nombre"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_control_aplicaciones_campo_02_up_productos_app"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_control_aplicaciones_campo_03_lotes_app"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_control_aplicaciones_campo_04_trabajadores_app"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_almacenes_02_recibo_productos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_aplicaciones_recetas_cts_01_nombre_query"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_orden_de_compra_pagos_03_abonos_productos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_facturas_sat_02_carga_masiva"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_incidencias_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_finanzas_bancos_02_uuid_sat"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_finanzas_aportaciones_socios_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_menu_noticias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_menu_sugerencias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_asistencias_app"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_01_generales"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_especificas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_metodo_de_costeo_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_forma_de_pago_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_actividades_especificas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_variables_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_condicionantes_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_root_operadores"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_prestaciones_especiales"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_prestaciones_especiales_forma_de_pago_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_turnos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_uuid_semana"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_prestamos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_prestaciones_individuales"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_incidencias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_nominas_uuid_semana"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_actividades_ingreso_egreso_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_actividades_turnos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_asistencias_app_semana_uuid"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_dias_de_inicio_consecutivos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_asistencias_fechas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_asistencias_fechas_uuid_semana"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_movimientos_categoria"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_movimientos_categoria_sub"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_finanzas_movimientos_categoria"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_finanzas_movimientos_categoria_sub"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_nominas_02_actividades"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_riego_cabezales"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_riego_cabezales_pulsos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_control_de_riego_pulsos_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_control_de_riego_pulsos_02_lotes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_control_riego_cabezales"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_control_riego_cabezales_pulsos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_finanzas_bancos_02_movimientos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_culturales_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_culturales_02"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_control_aplicaciones_03_trabajadores_sectores"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_unidad_de_medida_compras"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_control_aplicaciones_campo_tipo_de_control"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_control_aplicaciones_contenedores_mezcladores_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_productos_precios"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_proveedores_sat"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_proveedores_01_cargos_abonos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_cargo_abono_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_proveedores_02_saldos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_proveedores_01_cargos_abonos_pagos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_proveedores_01_update_proveedor_detalle"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_finanzas_bancos_actualizar"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_finanzas_tipo_de_cambio"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_proveedores_02_cargos_abonos_centros_de_costos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_proveedores_02_cargos_abonos_movimientos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_proveedores_01_cargos_abonos_update"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_planeacion_app"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_planeacion_app_02"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_planeacion_tareas_app"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_root_cat_holding_03_empresas_unidades_productivas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_03_empresas_unidades_productivas_box"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_04_unidades_productivas_lotes_box"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["root_box_cat_holding_03_empresas_unidades_productivas"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["root_box_cat_holding_04_unidades_productivas_lotes"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_2"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_02_productos_compras"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_proveedores_01_cargos_abonos_pagos_revisar"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_facturas_sat_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_01_estatus"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_requisiciones_02_productos_estatus"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_facturas_sat_02"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_proveedores_01_cargos_abonos_oc_pdf"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_facturas_sat_01_estatus"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_proveedores_01_cargos_abonos_pagos_edit"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_finanzas_cuentas_de_balance_5"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_finanzas_cuentas_de_balance_5"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_tr_finanzas_bancos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_tags"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_tags_regs"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_tags_maestro"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_nominas_conceptos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_asistencias_app_horas_extras"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_01_generales_llaves_st"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_control_de_riego_programas_ha_st"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_tags_edit"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_estado_civil_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_local_foraneo_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_sangre_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_sexo_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_tipo_de_pago"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_produccion_cultivos_01_productos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha_consecutivo"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_tabulador"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_03_empresas_up_group_predios"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_reingresos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_alta_baja_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_02_trabajadores"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_nominas_01_generales"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha_detalle_tags"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha_ranking_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_asistencias_app_inf"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_02_horarios"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_asistencias_app_inf_inasistencias"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha_consecutivo_query"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_puestos_historico"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha_consecutivo_detalle"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_produccion_variedades"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_asistencias_app_inf_horas_extras"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_altas_inf_destajo_cosecha"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha_query"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_destajos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_asistencias_app_inf_horas_turno_vespertino"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_asistencias_app_inf_horas_extras_sab_dom"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_asistencias_app_por_predio_query"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_altas1"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_puestos_historico_query"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha1borrar"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_almacenes_01_recibo_lpn"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_almacenes_01_salida_lpn"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_almacenes_02_salida_productos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_puestos_historico1borrar"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_almacenes_tipo_de_salida_mu"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_almacenes_01_salida_lpn1borrar"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_compras_almacenes_02_salida_productos1borrar"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_04a_unidades_productivas_lotes_historico"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_holding_04_unidades_productivas_lotes_inf"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha_query2borrar"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_asistencias_app_horas_extras_borrar"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_variedades"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_productos_permitidos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_compras_productos1"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_ventas_almacenes_01_up_salidas_lpn"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_ventas_almacenes_02_up_salidas_productos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["box_cat_ventas_productos_variedades"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha_salidas_02"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_trabajadores_altas2"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha_salidas_01 quey glori"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_actividades_cosecha_salidas_01"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_status_recibo"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["aux_puestos_horarios"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["aux_horarios"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_nominas_feriados"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["aux_actividades_precios"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["aux_dias_bonos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["aux_incidencias_justificables"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["aux_nomina_justificantes_bonos"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["puestos horarios"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_produccion_proceso"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["tr_prenomina"] = "wwinte_app_at_intelagro_mx";
		$connectionsIds["cat_ventas_productos_precios"] = "wwinte_app_at_intelagro_mx";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>