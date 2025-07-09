<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblwwinte_app_at_intelagro_mx__aaa_permisos_uggroups;
	var $tblwwinte_app_at_intelagro_mx__aaa_permisos_ugmembers;
	var $tblwwinte_app_at_intelagro_mx__aaa_permisos_ugrights;
	var $tblwwinte_app_at_intelagro_mx__admin_settings;
	var $tblwwinte_app_at_intelagro_mx__aux_actividades_precios;
	var $tblwwinte_app_at_intelagro_mx__aux_dias_bonos;
	var $tblwwinte_app_at_intelagro_mx__aux_horarios;
	var $tblwwinte_app_at_intelagro_mx__aux_incidencias_justificables;
	var $tblwwinte_app_at_intelagro_mx__aux_nomina_justificantes_bonos;
	var $tblwwinte_app_at_intelagro_mx__aux_puestos_horarios;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_alcance_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_categorias_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_especificas;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_forma_de_pago_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_ingreso_egreso_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_metodo_de_costeo_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_turnos;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_turnos_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_unidades_de_costo;
	var $tblwwinte_app_at_intelagro_mx__cat_actividades_variables_de_ejecucion;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_almacenes;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_almacenes_estatus_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_almacenes_productos_estatus_catalogo_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_almacenes_tipo_de_recibo_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_almacenes_tipo_de_salida_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_cargo_abono_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_documentos_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_estatus_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_intermediarios;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_productos;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_productos_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_productos_permitidos;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_productos_precios;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_productos_presentacion_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_productos_unidad_de_costo_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_productos_unidad_de_medida_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_proveedores;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_proveedores_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_proveedores_sat;
	var $tblwwinte_app_at_intelagro_mx__cat_compras_tipo_de_pago_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_control_aplicaciones_alcance_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_boquillas;
	var $tblwwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_metodo_de_aplicacion;
	var $tblwwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_productos_funcionalidad;
	var $tblwwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_tipo_de_control;
	var $tblwwinte_app_at_intelagro_mx__cat_control_aplicaciones_contenedores_mezcladores_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_control_aplicaciones_recetas_02_productos_app;
	var $tblwwinte_app_at_intelagro_mx__cat_control_aplicaciones_recetas_cts_01_nombre;
	var $tblwwinte_app_at_intelagro_mx__cat_control_plagas_y_enfermedades;
	var $tblwwinte_app_at_intelagro_mx__cat_control_plagas_y_enfermedades_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_control_riego_cabezales;
	var $tblwwinte_app_at_intelagro_mx__cat_control_riego_cabezales_pulsos;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_bancos;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_bancos_cuentas;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_cajas_chicas;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_centros_de_costos;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_centros_de_costos_categorias_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_01_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_02_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_03_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_04;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_monedas_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_movimientos;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_movimientos_categoria;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_movimientos_categoria_sub;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_movimientos_categorias_naturaleza_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_socios;
	var $tblwwinte_app_at_intelagro_mx__cat_finanzas_transacciones_categorias_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_01;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_02_empresas;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_03_empresas_almacenes;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_03_empresas_departamentos;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_03_empresas_mu_unidades_productivas_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_03_empresas_registros_patronales;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_03_empresas_unidades_productivas;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_03_empresas_unidades_productivas_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_03_empresas_up_group_predios;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_04_unidades_productivas_lotes;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_04_unidades_productivas_lotes_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_04_unidades_productivas_mu_lotes_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_holding_04a_unidades_productivas_lotes_historico;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_01_generales;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_02_actividades;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_02_horarios;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_02_trabajadores;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_03_trabajadores_costo_bruto_conceptos;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_asistencias_fechas;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_asistencias_fechas_uuid_semana;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_conceptos;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_conceptos_clasificacion_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_conceptos_factor_de_calculo_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_condicionantes_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_configuracion_global;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_dias_de_inicio_consecutivos;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_dias_semana_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_feriados;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_incidencias;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_incidencias_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_intervalos_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_llaves_semana_uuid;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_periodicidad_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_prestaciones_especiales;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_prestaciones_especiales_forma_de_pago_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_prestaciones_individuales;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_prestamos;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_uuid_semana;
	var $tblwwinte_app_at_intelagro_mx__cat_nominas_variables_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_produccion_cultivos_01_productos;
	var $tblwwinte_app_at_intelagro_mx__cat_produccion_cultivos_03_lotes_plantas;
	var $tblwwinte_app_at_intelagro_mx__cat_produccion_empaques;
	var $tblwwinte_app_at_intelagro_mx__cat_produccion_proceso;
	var $tblwwinte_app_at_intelagro_mx__cat_produccion_temporadas;
	var $tblwwinte_app_at_intelagro_mx__cat_produccion_variedades;
	var $tblwwinte_app_at_intelagro_mx__cat_root_operadores;
	var $tblwwinte_app_at_intelagro_mx__cat_root_tablas_de_catalogos;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_alta_baja_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_altas;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_documentos;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_documentos_link;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_estado_civil_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_local_foraneo_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_puestos;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_puestos_areas;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_puestos_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_puestos_historico;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_reingresos;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_sangre_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_sexo_mu;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_tabulador;
	var $tblwwinte_app_at_intelagro_mx__cat_trabajadores_tipo_de_pago;
	var $tblwwinte_app_at_intelagro_mx__cat_usuarios;
	var $tblwwinte_app_at_intelagro_mx__cat_usuarios_02_modulos;
	var $tblwwinte_app_at_intelagro_mx__cat_usuarios_licencias;
	var $tblwwinte_app_at_intelagro_mx__cat_usuarios_modulos;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_clientes;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_almacenes;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_almacenes_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_categorias;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_lotes;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_manejo;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_marcas;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_precios;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_presentaciones;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_sku;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_status_recibo;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_unidades_de_medida;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_unidades_de_produccion;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_unidades_de_venta;
	var $tblwwinte_app_at_intelagro_mx__cat_ventas_productos_variedades;
	var $tblwwinte_app_at_intelagro_mx__tr_actividades_asistencias_app;
	var $tblwwinte_app_at_intelagro_mx__tr_actividades_cosecha;
	var $tblwwinte_app_at_intelagro_mx__tr_actividades_cosecha_detalle_tags;
	var $tblwwinte_app_at_intelagro_mx__tr_actividades_cosecha_salidas_01;
	var $tblwwinte_app_at_intelagro_mx__tr_actividades_cosecha_salidas_02;
	var $tblwwinte_app_at_intelagro_mx__tr_actividades_culturales_01;
	var $tblwwinte_app_at_intelagro_mx__tr_actividades_culturales_02;
	var $tblwwinte_app_at_intelagro_mx__tr_actividades_destajos;
	var $tblwwinte_app_at_intelagro_mx__tr_actividades_planeacion_app;
	var $tblwwinte_app_at_intelagro_mx__tr_actividades_planeacion_tareas_app;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_almacenes_01_recibo_lpn;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_almacenes_01_salida_lpn;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_almacenes_02_recibo_productos;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_almacenes_02_salida_productos;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_almacenes_inventario_02_productos;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_almacenes_inventario_03;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_facturas_sat_01;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_facturas_sat_02;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_facturas_sat_02_carga_masiva;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_proveedores_01_cargos_abonos;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_proveedores_02_cargos_abonos_centros_de_costos;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_proveedores_02_cargos_abonos_movimientos;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_requisiciones_01;
	var $tblwwinte_app_at_intelagro_mx__tr_compras_requisiciones_02_productos;
	var $tblwwinte_app_at_intelagro_mx__tr_control_aplicaciones_03_trabajadores_sectores;
	var $tblwwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_02_up_productos_app;
	var $tblwwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_03_lotes_app;
	var $tblwwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_04_trabajadores_app;
	var $tblwwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_planeacion_recetas_app;
	var $tblwwinte_app_at_intelagro_mx__tr_control_de_plagas_app;
	var $tblwwinte_app_at_intelagro_mx__tr_control_de_riego_pulsos_01;
	var $tblwwinte_app_at_intelagro_mx__tr_control_de_riego_pulsos_02_lotes;
	var $tblwwinte_app_at_intelagro_mx__tr_finanzas_aportaciones_socios_01;
	var $tblwwinte_app_at_intelagro_mx__tr_finanzas_bancos_01;
	var $tblwwinte_app_at_intelagro_mx__tr_finanzas_bancos_02;
	var $tblwwinte_app_at_intelagro_mx__tr_finanzas_bancos_02_movimientos;
	var $tblwwinte_app_at_intelagro_mx__tr_finanzas_bancos_02_uuid_sat;
	var $tblwwinte_app_at_intelagro_mx__tr_finanzas_movimientos_balance;
	var $tblwwinte_app_at_intelagro_mx__tr_finanzas_tipo_de_cambio;
	var $tblwwinte_app_at_intelagro_mx__tr_menu_noticias;
	var $tblwwinte_app_at_intelagro_mx__tr_menu_sugerencias;
	var $tblwwinte_app_at_intelagro_mx__tr_root_audit_editing_locking;
	var $tblwwinte_app_at_intelagro_mx__tr_root_audit_log_audit;
	var $tblwwinte_app_at_intelagro_mx__tr_tags;
	var $tblwwinte_app_at_intelagro_mx__tr_tags_regs;
	var $tblwwinte_app_at_intelagro_mx__tr_ventas_almacenes_01_up_salidas_lpn;
	var $tblwwinte_app_at_intelagro_mx__tr_ventas_almacenes_02_up_salidas_productos;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "aaa_permisos_uggroups", "varname" => "wwinte_app_at_intelagro_mx__aaa_permisos_uggroups", "altvarname" => "aaa_permisos_uggroups", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "aaa_permisos_ugmembers", "varname" => "wwinte_app_at_intelagro_mx__aaa_permisos_ugmembers", "altvarname" => "aaa_permisos_ugmembers", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "aaa_permisos_ugrights", "varname" => "wwinte_app_at_intelagro_mx__aaa_permisos_ugrights", "altvarname" => "aaa_permisos_ugrights", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "admin_settings", "varname" => "wwinte_app_at_intelagro_mx__admin_settings", "altvarname" => "admin_settings", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "aux_actividades_precios", "varname" => "wwinte_app_at_intelagro_mx__aux_actividades_precios", "altvarname" => "aux_actividades_precios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "aux_dias_bonos", "varname" => "wwinte_app_at_intelagro_mx__aux_dias_bonos", "altvarname" => "aux_dias_bonos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "aux_horarios", "varname" => "wwinte_app_at_intelagro_mx__aux_horarios", "altvarname" => "aux_horarios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "aux_incidencias_justificables", "varname" => "wwinte_app_at_intelagro_mx__aux_incidencias_justificables", "altvarname" => "aux_incidencias_justificables", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "aux_nomina_justificantes_bonos", "varname" => "wwinte_app_at_intelagro_mx__aux_nomina_justificantes_bonos", "altvarname" => "aux_nomina_justificantes_bonos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "aux_puestos_horarios", "varname" => "wwinte_app_at_intelagro_mx__aux_puestos_horarios", "altvarname" => "aux_puestos_horarios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades", "altvarname" => "cat_actividades", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_alcance_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_alcance_mu", "altvarname" => "cat_actividades_alcance_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_categorias", "altvarname" => "cat_actividades_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_categorias_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_categorias_mu", "altvarname" => "cat_actividades_categorias_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_especificas", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_especificas", "altvarname" => "cat_actividades_especificas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_forma_de_pago_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_forma_de_pago_mu", "altvarname" => "cat_actividades_forma_de_pago_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_ingreso_egreso_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_ingreso_egreso_mu", "altvarname" => "cat_actividades_ingreso_egreso_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_metodo_de_costeo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_metodo_de_costeo_mu", "altvarname" => "cat_actividades_metodo_de_costeo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_turnos", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_turnos", "altvarname" => "cat_actividades_turnos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_turnos_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_turnos_mu", "altvarname" => "cat_actividades_turnos_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_unidades_de_costo", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_unidades_de_costo", "altvarname" => "cat_actividades_unidades_de_costo", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_actividades_variables_de_ejecucion", "varname" => "wwinte_app_at_intelagro_mx__cat_actividades_variables_de_ejecucion", "altvarname" => "cat_actividades_variables_de_ejecucion", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_almacenes", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_almacenes", "altvarname" => "cat_compras_almacenes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_almacenes_estatus_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_almacenes_estatus_mu", "altvarname" => "cat_compras_almacenes_estatus_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_almacenes_productos_estatus_catalogo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_almacenes_productos_estatus_catalogo_mu", "altvarname" => "cat_compras_almacenes_productos_estatus_catalogo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_almacenes_tipo_de_recibo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_almacenes_tipo_de_recibo_mu", "altvarname" => "cat_compras_almacenes_tipo_de_recibo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_almacenes_tipo_de_salida_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_almacenes_tipo_de_salida_mu", "altvarname" => "cat_compras_almacenes_tipo_de_salida_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_cargo_abono_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_cargo_abono_mu", "altvarname" => "cat_compras_cargo_abono_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_documentos_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_documentos_mu", "altvarname" => "cat_compras_documentos_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_estatus_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_estatus_mu", "altvarname" => "cat_compras_estatus_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_intermediarios", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_intermediarios", "altvarname" => "cat_compras_intermediarios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_productos", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos", "altvarname" => "cat_compras_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_productos_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_categorias", "altvarname" => "cat_compras_productos_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_productos_permitidos", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_permitidos", "altvarname" => "cat_compras_productos_permitidos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_productos_precios", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_precios", "altvarname" => "cat_compras_productos_precios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_productos_presentacion_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_presentacion_mu", "altvarname" => "cat_compras_productos_presentacion_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_productos_unidad_de_costo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_unidad_de_costo_mu", "altvarname" => "cat_compras_productos_unidad_de_costo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_productos_unidad_de_medida_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_productos_unidad_de_medida_mu", "altvarname" => "cat_compras_productos_unidad_de_medida_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_proveedores", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_proveedores", "altvarname" => "cat_compras_proveedores", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_proveedores_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_proveedores_categorias", "altvarname" => "cat_compras_proveedores_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_proveedores_sat", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_proveedores_sat", "altvarname" => "cat_compras_proveedores_sat", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_compras_tipo_de_pago_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_compras_tipo_de_pago_mu", "altvarname" => "cat_compras_tipo_de_pago_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_aplicaciones_alcance_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_alcance_mu", "altvarname" => "cat_control_aplicaciones_alcance_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_aplicaciones_campo_boquillas", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_boquillas", "altvarname" => "cat_control_aplicaciones_campo_boquillas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_aplicaciones_campo_metodo_de_aplicacion", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_metodo_de_aplicacion", "altvarname" => "cat_control_aplicaciones_campo_metodo_de_aplicacion", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_aplicaciones_campo_productos_funcionalidad", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_productos_funcionalidad", "altvarname" => "cat_control_aplicaciones_campo_productos_funcionalidad", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_aplicaciones_campo_tipo_de_control", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_campo_tipo_de_control", "altvarname" => "cat_control_aplicaciones_campo_tipo_de_control", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_aplicaciones_contenedores_mezcladores_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_contenedores_mezcladores_mu", "altvarname" => "cat_control_aplicaciones_contenedores_mezcladores_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_aplicaciones_recetas_02_productos_app", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_recetas_02_productos_app", "altvarname" => "cat_control_aplicaciones_recetas_02_productos_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_aplicaciones_recetas_cts_01_nombre", "varname" => "wwinte_app_at_intelagro_mx__cat_control_aplicaciones_recetas_cts_01_nombre", "altvarname" => "cat_control_aplicaciones_recetas_cts_01_nombre", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_plagas_y_enfermedades", "varname" => "wwinte_app_at_intelagro_mx__cat_control_plagas_y_enfermedades", "altvarname" => "cat_control_plagas_y_enfermedades", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_plagas_y_enfermedades_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_control_plagas_y_enfermedades_categorias", "altvarname" => "cat_control_plagas_y_enfermedades_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_riego_cabezales", "varname" => "wwinte_app_at_intelagro_mx__cat_control_riego_cabezales", "altvarname" => "cat_control_riego_cabezales", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_control_riego_cabezales_pulsos", "varname" => "wwinte_app_at_intelagro_mx__cat_control_riego_cabezales_pulsos", "altvarname" => "cat_control_riego_cabezales_pulsos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_bancos", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_bancos", "altvarname" => "cat_finanzas_bancos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_bancos_cuentas", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_bancos_cuentas", "altvarname" => "cat_finanzas_bancos_cuentas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_cajas_chicas", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_cajas_chicas", "altvarname" => "cat_finanzas_cajas_chicas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_centros_de_costos", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_centros_de_costos", "altvarname" => "cat_finanzas_centros_de_costos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_centros_de_costos_categorias_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_centros_de_costos_categorias_mu", "altvarname" => "cat_finanzas_centros_de_costos_categorias_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_cuentas_de_balance_01_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_01_mu", "altvarname" => "cat_finanzas_cuentas_de_balance_01_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_cuentas_de_balance_02_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_02_mu", "altvarname" => "cat_finanzas_cuentas_de_balance_02_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_cuentas_de_balance_03_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_03_mu", "altvarname" => "cat_finanzas_cuentas_de_balance_03_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_cuentas_de_balance_04", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_cuentas_de_balance_04", "altvarname" => "cat_finanzas_cuentas_de_balance_04", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_monedas_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_monedas_mu", "altvarname" => "cat_finanzas_monedas_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_movimientos", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_movimientos", "altvarname" => "cat_finanzas_movimientos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_movimientos_categoria", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_movimientos_categoria", "altvarname" => "cat_finanzas_movimientos_categoria", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_movimientos_categoria_sub", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_movimientos_categoria_sub", "altvarname" => "cat_finanzas_movimientos_categoria_sub", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_movimientos_categorias_naturaleza_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_movimientos_categorias_naturaleza_mu", "altvarname" => "cat_finanzas_movimientos_categorias_naturaleza_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_socios", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_socios", "altvarname" => "cat_finanzas_socios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_finanzas_transacciones_categorias_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_finanzas_transacciones_categorias_mu", "altvarname" => "cat_finanzas_transacciones_categorias_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_01", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_01", "altvarname" => "cat_holding_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_02_empresas", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_02_empresas", "altvarname" => "cat_holding_02_empresas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_03_empresas_almacenes", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_almacenes", "altvarname" => "cat_holding_03_empresas_almacenes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_03_empresas_departamentos", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_departamentos", "altvarname" => "cat_holding_03_empresas_departamentos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_03_empresas_mu_unidades_productivas_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_mu_unidades_productivas_categorias", "altvarname" => "cat_holding_03_empresas_mu_unidades_productivas_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_03_empresas_registros_patronales", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_registros_patronales", "altvarname" => "cat_holding_03_empresas_registros_patronales", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_03_empresas_unidades_productivas", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_unidades_productivas", "altvarname" => "cat_holding_03_empresas_unidades_productivas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_03_empresas_unidades_productivas_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_unidades_productivas_categorias", "altvarname" => "cat_holding_03_empresas_unidades_productivas_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_03_empresas_up_group_predios", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_03_empresas_up_group_predios", "altvarname" => "cat_holding_03_empresas_up_group_predios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_04_unidades_productivas_lotes", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_04_unidades_productivas_lotes", "altvarname" => "cat_holding_04_unidades_productivas_lotes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_04_unidades_productivas_lotes_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_04_unidades_productivas_lotes_categorias", "altvarname" => "cat_holding_04_unidades_productivas_lotes_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_04_unidades_productivas_mu_lotes_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_04_unidades_productivas_mu_lotes_categorias", "altvarname" => "cat_holding_04_unidades_productivas_mu_lotes_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_holding_04a_unidades_productivas_lotes_historico", "varname" => "wwinte_app_at_intelagro_mx__cat_holding_04a_unidades_productivas_lotes_historico", "altvarname" => "cat_holding_04a_unidades_productivas_lotes_historico", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_01_generales", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_01_generales", "altvarname" => "cat_nominas_01_generales", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_02_actividades", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_02_actividades", "altvarname" => "cat_nominas_02_actividades", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_02_horarios", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_02_horarios", "altvarname" => "cat_nominas_02_horarios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_02_trabajadores", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_02_trabajadores", "altvarname" => "cat_nominas_02_trabajadores", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_03_trabajadores_costo_bruto_conceptos", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_03_trabajadores_costo_bruto_conceptos", "altvarname" => "cat_nominas_03_trabajadores_costo_bruto_conceptos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_asistencias_fechas", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_asistencias_fechas", "altvarname" => "cat_nominas_asistencias_fechas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_asistencias_fechas_uuid_semana", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_asistencias_fechas_uuid_semana", "altvarname" => "cat_nominas_asistencias_fechas_uuid_semana", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_conceptos", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_conceptos", "altvarname" => "cat_nominas_conceptos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_conceptos_clasificacion_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_conceptos_clasificacion_mu", "altvarname" => "cat_nominas_conceptos_clasificacion_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_conceptos_factor_de_calculo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_conceptos_factor_de_calculo_mu", "altvarname" => "cat_nominas_conceptos_factor_de_calculo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_condicionantes_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_condicionantes_mu", "altvarname" => "cat_nominas_condicionantes_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_configuracion_global", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_configuracion_global", "altvarname" => "cat_nominas_configuracion_global", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_dias_de_inicio_consecutivos", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_dias_de_inicio_consecutivos", "altvarname" => "cat_nominas_dias_de_inicio_consecutivos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_dias_semana_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_dias_semana_mu", "altvarname" => "cat_nominas_dias_semana_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_feriados", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_feriados", "altvarname" => "cat_nominas_feriados", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_incidencias", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_incidencias", "altvarname" => "cat_nominas_incidencias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_incidencias_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_incidencias_mu", "altvarname" => "cat_nominas_incidencias_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_intervalos_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_intervalos_mu", "altvarname" => "cat_nominas_intervalos_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_llaves_semana_uuid", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_llaves_semana_uuid", "altvarname" => "cat_nominas_llaves_semana_uuid", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_periodicidad_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_periodicidad_mu", "altvarname" => "cat_nominas_periodicidad_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_prestaciones_especiales", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_prestaciones_especiales", "altvarname" => "cat_nominas_prestaciones_especiales", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_prestaciones_especiales_forma_de_pago_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_prestaciones_especiales_forma_de_pago_mu", "altvarname" => "cat_nominas_prestaciones_especiales_forma_de_pago_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_prestaciones_individuales", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_prestaciones_individuales", "altvarname" => "cat_nominas_prestaciones_individuales", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_prestamos", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_prestamos", "altvarname" => "cat_nominas_prestamos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_uuid_semana", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_uuid_semana", "altvarname" => "cat_nominas_uuid_semana", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_nominas_variables_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_nominas_variables_mu", "altvarname" => "cat_nominas_variables_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_produccion_cultivos_01_productos", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_cultivos_01_productos", "altvarname" => "cat_produccion_cultivos_01_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_produccion_cultivos_03_lotes_plantas", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_cultivos_03_lotes_plantas", "altvarname" => "cat_produccion_cultivos_03_lotes_plantas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_produccion_empaques", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_empaques", "altvarname" => "cat_produccion_empaques", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_produccion_proceso", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_proceso", "altvarname" => "cat_produccion_proceso", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_produccion_temporadas", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_temporadas", "altvarname" => "cat_produccion_temporadas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_produccion_variedades", "varname" => "wwinte_app_at_intelagro_mx__cat_produccion_variedades", "altvarname" => "cat_produccion_variedades", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_root_operadores", "varname" => "wwinte_app_at_intelagro_mx__cat_root_operadores", "altvarname" => "cat_root_operadores", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_root_tablas_de_catalogos", "varname" => "wwinte_app_at_intelagro_mx__cat_root_tablas_de_catalogos", "altvarname" => "cat_root_tablas_de_catalogos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_alta_baja_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_alta_baja_mu", "altvarname" => "cat_trabajadores_alta_baja_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_altas", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_altas", "altvarname" => "cat_trabajadores_altas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_documentos", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_documentos", "altvarname" => "cat_trabajadores_documentos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_documentos_link", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_documentos_link", "altvarname" => "cat_trabajadores_documentos_link", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_estado_civil_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_estado_civil_mu", "altvarname" => "cat_trabajadores_estado_civil_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_local_foraneo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_local_foraneo_mu", "altvarname" => "cat_trabajadores_local_foraneo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_puestos", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_puestos", "altvarname" => "cat_trabajadores_puestos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_puestos_areas", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_puestos_areas", "altvarname" => "cat_trabajadores_puestos_areas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_puestos_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_puestos_categorias", "altvarname" => "cat_trabajadores_puestos_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_puestos_historico", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_puestos_historico", "altvarname" => "cat_trabajadores_puestos_historico", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_reingresos", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_reingresos", "altvarname" => "cat_trabajadores_reingresos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_sangre_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_sangre_mu", "altvarname" => "cat_trabajadores_sangre_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_sexo_mu", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_sexo_mu", "altvarname" => "cat_trabajadores_sexo_mu", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_tabulador", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_tabulador", "altvarname" => "cat_trabajadores_tabulador", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_trabajadores_tipo_de_pago", "varname" => "wwinte_app_at_intelagro_mx__cat_trabajadores_tipo_de_pago", "altvarname" => "cat_trabajadores_tipo_de_pago", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_usuarios", "varname" => "wwinte_app_at_intelagro_mx__cat_usuarios", "altvarname" => "cat_usuarios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_usuarios_02_modulos", "varname" => "wwinte_app_at_intelagro_mx__cat_usuarios_02_modulos", "altvarname" => "cat_usuarios_02_modulos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_usuarios_licencias", "varname" => "wwinte_app_at_intelagro_mx__cat_usuarios_licencias", "altvarname" => "cat_usuarios_licencias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_usuarios_modulos", "varname" => "wwinte_app_at_intelagro_mx__cat_usuarios_modulos", "altvarname" => "cat_usuarios_modulos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_clientes", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_clientes", "altvarname" => "cat_ventas_clientes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos", "altvarname" => "cat_ventas_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_almacenes", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_almacenes", "altvarname" => "cat_ventas_productos_almacenes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_almacenes_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_almacenes_categorias", "altvarname" => "cat_ventas_productos_almacenes_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_categorias", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_categorias", "altvarname" => "cat_ventas_productos_categorias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_lotes", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_lotes", "altvarname" => "cat_ventas_productos_lotes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_manejo", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_manejo", "altvarname" => "cat_ventas_productos_manejo", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_marcas", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_marcas", "altvarname" => "cat_ventas_productos_marcas", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_precios", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_precios", "altvarname" => "cat_ventas_productos_precios", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_presentaciones", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_presentaciones", "altvarname" => "cat_ventas_productos_presentaciones", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_sku", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_sku", "altvarname" => "cat_ventas_productos_sku", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_status_recibo", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_status_recibo", "altvarname" => "cat_ventas_productos_status_recibo", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_unidades_de_medida", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_unidades_de_medida", "altvarname" => "cat_ventas_productos_unidades_de_medida", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_unidades_de_produccion", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_unidades_de_produccion", "altvarname" => "cat_ventas_productos_unidades_de_produccion", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_unidades_de_venta", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_unidades_de_venta", "altvarname" => "cat_ventas_productos_unidades_de_venta", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "cat_ventas_productos_variedades", "varname" => "wwinte_app_at_intelagro_mx__cat_ventas_productos_variedades", "altvarname" => "cat_ventas_productos_variedades", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_actividades_asistencias_app", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_asistencias_app", "altvarname" => "tr_actividades_asistencias_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_actividades_cosecha", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_cosecha", "altvarname" => "tr_actividades_cosecha", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_actividades_cosecha_detalle_tags", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_cosecha_detalle_tags", "altvarname" => "tr_actividades_cosecha_detalle_tags", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_actividades_cosecha_salidas_01", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_cosecha_salidas_01", "altvarname" => "tr_actividades_cosecha_salidas_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_actividades_cosecha_salidas_02", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_cosecha_salidas_02", "altvarname" => "tr_actividades_cosecha_salidas_02", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_actividades_culturales_01", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_culturales_01", "altvarname" => "tr_actividades_culturales_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_actividades_culturales_02", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_culturales_02", "altvarname" => "tr_actividades_culturales_02", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_actividades_destajos", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_destajos", "altvarname" => "tr_actividades_destajos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_actividades_planeacion_app", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_planeacion_app", "altvarname" => "tr_actividades_planeacion_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_actividades_planeacion_tareas_app", "varname" => "wwinte_app_at_intelagro_mx__tr_actividades_planeacion_tareas_app", "altvarname" => "tr_actividades_planeacion_tareas_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_almacenes_01_recibo_lpn", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_01_recibo_lpn", "altvarname" => "tr_compras_almacenes_01_recibo_lpn", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_almacenes_01_salida_lpn", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_01_salida_lpn", "altvarname" => "tr_compras_almacenes_01_salida_lpn", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_almacenes_02_recibo_productos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_02_recibo_productos", "altvarname" => "tr_compras_almacenes_02_recibo_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_almacenes_02_salida_productos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_02_salida_productos", "altvarname" => "tr_compras_almacenes_02_salida_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_almacenes_inventario_02_productos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_inventario_02_productos", "altvarname" => "tr_compras_almacenes_inventario_02_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_almacenes_inventario_03", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_almacenes_inventario_03", "altvarname" => "tr_compras_almacenes_inventario_03", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_facturas_sat_01", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_facturas_sat_01", "altvarname" => "tr_compras_facturas_sat_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_facturas_sat_02", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_facturas_sat_02", "altvarname" => "tr_compras_facturas_sat_02", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_facturas_sat_02_carga_masiva", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_facturas_sat_02_carga_masiva", "altvarname" => "tr_compras_facturas_sat_02_carga_masiva", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_proveedores_01_cargos_abonos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_proveedores_01_cargos_abonos", "altvarname" => "tr_compras_proveedores_01_cargos_abonos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_proveedores_02_cargos_abonos_centros_de_costos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_proveedores_02_cargos_abonos_centros_de_costos", "altvarname" => "tr_compras_proveedores_02_cargos_abonos_centros_de_costos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_proveedores_02_cargos_abonos_movimientos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_proveedores_02_cargos_abonos_movimientos", "altvarname" => "tr_compras_proveedores_02_cargos_abonos_movimientos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_requisiciones_01", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_requisiciones_01", "altvarname" => "tr_compras_requisiciones_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_compras_requisiciones_02_productos", "varname" => "wwinte_app_at_intelagro_mx__tr_compras_requisiciones_02_productos", "altvarname" => "tr_compras_requisiciones_02_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_control_aplicaciones_03_trabajadores_sectores", "varname" => "wwinte_app_at_intelagro_mx__tr_control_aplicaciones_03_trabajadores_sectores", "altvarname" => "tr_control_aplicaciones_03_trabajadores_sectores", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_control_aplicaciones_campo_02_up_productos_app", "varname" => "wwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_02_up_productos_app", "altvarname" => "tr_control_aplicaciones_campo_02_up_productos_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_control_aplicaciones_campo_03_lotes_app", "varname" => "wwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_03_lotes_app", "altvarname" => "tr_control_aplicaciones_campo_03_lotes_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_control_aplicaciones_campo_04_trabajadores_app", "varname" => "wwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_04_trabajadores_app", "altvarname" => "tr_control_aplicaciones_campo_04_trabajadores_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_control_aplicaciones_campo_planeacion_recetas_app", "varname" => "wwinte_app_at_intelagro_mx__tr_control_aplicaciones_campo_planeacion_recetas_app", "altvarname" => "tr_control_aplicaciones_campo_planeacion_recetas_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_control_de_plagas_app", "varname" => "wwinte_app_at_intelagro_mx__tr_control_de_plagas_app", "altvarname" => "tr_control_de_plagas_app", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_control_de_riego_pulsos_01", "varname" => "wwinte_app_at_intelagro_mx__tr_control_de_riego_pulsos_01", "altvarname" => "tr_control_de_riego_pulsos_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_control_de_riego_pulsos_02_lotes", "varname" => "wwinte_app_at_intelagro_mx__tr_control_de_riego_pulsos_02_lotes", "altvarname" => "tr_control_de_riego_pulsos_02_lotes", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_finanzas_aportaciones_socios_01", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_aportaciones_socios_01", "altvarname" => "tr_finanzas_aportaciones_socios_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_finanzas_bancos_01", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_bancos_01", "altvarname" => "tr_finanzas_bancos_01", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_finanzas_bancos_02", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_bancos_02", "altvarname" => "tr_finanzas_bancos_02", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_finanzas_bancos_02_movimientos", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_bancos_02_movimientos", "altvarname" => "tr_finanzas_bancos_02_movimientos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_finanzas_bancos_02_uuid_sat", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_bancos_02_uuid_sat", "altvarname" => "tr_finanzas_bancos_02_uuid_sat", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_finanzas_movimientos_balance", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_movimientos_balance", "altvarname" => "tr_finanzas_movimientos_balance", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_finanzas_tipo_de_cambio", "varname" => "wwinte_app_at_intelagro_mx__tr_finanzas_tipo_de_cambio", "altvarname" => "tr_finanzas_tipo_de_cambio", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_menu_noticias", "varname" => "wwinte_app_at_intelagro_mx__tr_menu_noticias", "altvarname" => "tr_menu_noticias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_menu_sugerencias", "varname" => "wwinte_app_at_intelagro_mx__tr_menu_sugerencias", "altvarname" => "tr_menu_sugerencias", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_root_audit_editing_locking", "varname" => "wwinte_app_at_intelagro_mx__tr_root_audit_editing_locking", "altvarname" => "tr_root_audit_editing_locking", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_root_audit_log_audit", "varname" => "wwinte_app_at_intelagro_mx__tr_root_audit_log_audit", "altvarname" => "tr_root_audit_log_audit", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_tags", "varname" => "wwinte_app_at_intelagro_mx__tr_tags", "altvarname" => "tr_tags", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_tags_regs", "varname" => "wwinte_app_at_intelagro_mx__tr_tags_regs", "altvarname" => "tr_tags_regs", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_ventas_almacenes_01_up_salidas_lpn", "varname" => "wwinte_app_at_intelagro_mx__tr_ventas_almacenes_01_up_salidas_lpn", "altvarname" => "tr_ventas_almacenes_01_up_salidas_lpn", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
		$this->lstTables[] = array("name" => "tr_ventas_almacenes_02_up_salidas_productos", "varname" => "wwinte_app_at_intelagro_mx__tr_ventas_almacenes_02_up_salidas_productos", "altvarname" => "tr_ventas_almacenes_02_up_salidas_productos", "connId" => "wwinte_app_at_intelagro_mx", "schema" => "", "connName" => "kokitos at intelagro-kokitos-do-user-22133916-0.h.db.ondigitalocean.com");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>