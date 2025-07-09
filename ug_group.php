<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

//	CSRF protection
if( !isPostRequest() )
	return;

if(!isLogged())
{ 
	return;
}
if( !Security::isAdmin() )
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "cat_trabajadores_altas";
$nonAdminTablesArr[] = "cat_usuarios_licencias";
$nonAdminTablesArr[] = "cat_actividades";
$nonAdminTablesArr[] = "cat_usuarios";
$nonAdminTablesArr[] = "con_licencias_filtro";
$nonAdminTablesArr[] = "cat_actividades_categorias";
$nonAdminTablesArr[] = "cat_trabajadores_documentos";
$nonAdminTablesArr[] = "cat_trabajadores_puestos";
$nonAdminTablesArr[] = "cat_trabajadores_puestos_areas";
$nonAdminTablesArr[] = "cat_trabajadores_puestos_categorias";
$nonAdminTablesArr[] = "cat_trabajadores_imprimir_gafete";
$nonAdminTablesArr[] = "box_cat_trabajadores";
$nonAdminTablesArr[] = "cat_actividades_unidades_de_costo";
$nonAdminTablesArr[] = "cat_trabajadores_documentos_link";
$nonAdminTablesArr[] = "tr_compras_requisiciones_01";
$nonAdminTablesArr[] = "cat_compras_productos_categorias";
$nonAdminTablesArr[] = "cat_compras_proveedores";
$nonAdminTablesArr[] = "cat_holding_01";
$nonAdminTablesArr[] = "cat_holding_02_empresas";
$nonAdminTablesArr[] = "cat_holding_03_empresas_registros_patronales";
$nonAdminTablesArr[] = "cat_compras_proveedores_categorias";
$nonAdminTablesArr[] = "tr_compras_requisiciones_02_productos";
$nonAdminTablesArr[] = "cat_compras_documentos_mu";
$nonAdminTablesArr[] = "cat_compras_estatus_mu";
$nonAdminTablesArr[] = "tr_root_audit_editing_locking";
$nonAdminTablesArr[] = "tr_root_audit_log_audit";
$nonAdminTablesArr[] = "cat_compras_productos_unidad_de_medida_mu";
$nonAdminTablesArr[] = "cat_compras_productos_presentacion_mu";
$nonAdminTablesArr[] = "cat_compras_estatus_mu_box";
$nonAdminTablesArr[] = "cat_usuarios_box";
$nonAdminTablesArr[] = "tr_compras_requisiciones_01_autorizacion";
$nonAdminTablesArr[] = "tr_compras_requisiciones_02_productos_autorizacion";
$nonAdminTablesArr[] = "cat_ventas_productos";
$nonAdminTablesArr[] = "cat_holding_03_empresas_departamentos";
$nonAdminTablesArr[] = "cat_compras_almacenes";
$nonAdminTablesArr[] = "cat_actividades_categorias_mu";
$nonAdminTablesArr[] = "cat_ventas_productos_almacenes";
$nonAdminTablesArr[] = "cat_ventas_productos_categorias";
$nonAdminTablesArr[] = "cat_ventas_productos_sku";
$nonAdminTablesArr[] = "cat_ventas_productos_presentaciones";
$nonAdminTablesArr[] = "cat_ventas_productos_manejo";
$nonAdminTablesArr[] = "cat_ventas_productos_unidades_de_medida";
$nonAdminTablesArr[] = "cat_ventas_productos_unidades_de_produccion";
$nonAdminTablesArr[] = "cat_ventas_productos_marcas";
$nonAdminTablesArr[] = "cat_ventas_productos_almacenes_categorias";
$nonAdminTablesArr[] = "cat_ventas_clientes";
$nonAdminTablesArr[] = "cat_finanzas_movimientos";
$nonAdminTablesArr[] = "cat_finanzas_centros_de_costos";
$nonAdminTablesArr[] = "cat_trabajadores_box_root";
$nonAdminTablesArr[] = "cat_actividades_box_root";
$nonAdminTablesArr[] = "cat_usuarios_02_modulos";
$nonAdminTablesArr[] = "cat_usuarios_modulos";
$nonAdminTablesArr[] = "cat_ventas_productos_unidades_de_venta";
$nonAdminTablesArr[] = "cat_ventas_productos_almacenes_box";
$nonAdminTablesArr[] = "cat_ventas_productos_sku_box";
$nonAdminTablesArr[] = "cat_holding_03_empresas_almacenes";
$nonAdminTablesArr[] = "cat_holding_03_empresas_unidades_productivas";
$nonAdminTablesArr[] = "tr_finanzas_bancos_01";
$nonAdminTablesArr[] = "tr_finanzas_bancos_02";
$nonAdminTablesArr[] = "cat_finanzas_bancos";
$nonAdminTablesArr[] = "cat_finanzas_bancos_cuentas";
$nonAdminTablesArr[] = "cat_finanzas_bancos_cuentas_box";
$nonAdminTablesArr[] = "cat_holding_03_empresas_unidades_productivas_categorias";
$nonAdminTablesArr[] = "cat_holding_03_empresas_mu_unidades_productivas_categorias";
$nonAdminTablesArr[] = "cat_holding_04_unidades_productivas_lotes";
$nonAdminTablesArr[] = "cat_holding_04_unidades_productivas_lotes_categorias";
$nonAdminTablesArr[] = "cat_holding_04_unidades_productivas_mu_lotes_categorias";
$nonAdminTablesArr[] = "tr_compras_requisiciones_01_orden_de_compra";
$nonAdminTablesArr[] = "tr_compras_requisiciones_02_productos_orden_de_compra";
$nonAdminTablesArr[] = "cat_finanzas_transacciones_box";
$nonAdminTablesArr[] = "cat_compras_productos";
$nonAdminTablesArr[] = "tr_compras_requisiciones_01_informe_intelagro";
$nonAdminTablesArr[] = "cat_finanzas_socios";
$nonAdminTablesArr[] = "box_cat_holding_03_empresas_unidades_productivas";
$nonAdminTablesArr[] = "box_cat_compras_productos";
$nonAdminTablesArr[] = "box_cat_actividades_unidades_de_costo";
$nonAdminTablesArr[] = "cat_ventas_productos_lotes";
$nonAdminTablesArr[] = "cat_finanzas_centros_de_costos_categorias_mu";
$nonAdminTablesArr[] = "box_tr_compras_requisiciones_tr_compras_almacenes_01";
$nonAdminTablesArr[] = "box_cat_compras_almacenes";
$nonAdminTablesArr[] = "box_cat_compras_proveedores";
$nonAdminTablesArr[] = "box_cat_compras_documentos_mu";
$nonAdminTablesArr[] = "cat_usuarios_box_2";
$nonAdminTablesArr[] = "tr_compras_requisiciones_01_autorizacion_user";
$nonAdminTablesArr[] = "cat_finanzas_cuentas_de_balance_04";
$nonAdminTablesArr[] = "box_cat_finanzas_cuentas_de_balance_04";
$nonAdminTablesArr[] = "cat_finanzas_cuentas_de_balance_01_mu";
$nonAdminTablesArr[] = "cat_finanzas_cuentas_de_balance_02_mu";
$nonAdminTablesArr[] = "cat_finanzas_cuentas_de_balance_03_mu";
$nonAdminTablesArr[] = "cat_actividades_turnos_mu";
$nonAdminTablesArr[] = "box_cat_holding_04_unidades_productivas_lotes";
$nonAdminTablesArr[] = "box_cat_actividades";
$nonAdminTablesArr[] = "cat_control_aplicaciones_campo_boquillas";
$nonAdminTablesArr[] = "cat_control_aplicaciones_campo_metodo_de_aplicacion";
$nonAdminTablesArr[] = "cat_control_aplicaciones_campo_tipo_de_control";
$nonAdminTablesArr[] = "box_cat_ventas_clientes";
$nonAdminTablesArr[] = "box_cat_ventas_productos_sku";
$nonAdminTablesArr[] = "box_tr_compras_facturas_sat_01";
$nonAdminTablesArr[] = "cat_compras_tipo_de_pago_mu";
$nonAdminTablesArr[] = "cat_finanzas_transacciones_categorias_mu";
$nonAdminTablesArr[] = "box_cat_finanzas_cuentas_de_balance__traspasos_almacenes";
$nonAdminTablesArr[] = "cat_compras_almacenes_estatus_mu";
$nonAdminTablesArr[] = "tr_compras_requisiciones_02_productos_edit_root";
$nonAdminTablesArr[] = "box_lotes_root";
$nonAdminTablesArr[] = "cat_trabajadores_altas_root";
$nonAdminTablesArr[] = "tr_compras_almacenes_inventario_02_productos";
$nonAdminTablesArr[] = "tr_compras_almacenes_inventario_03";
$nonAdminTablesArr[] = "cat_nominas_dias_semana_mu";
$nonAdminTablesArr[] = "cat_nominas_periodicidad_mu";
$nonAdminTablesArr[] = "tr_compras_requisiciones_01_orden_de_compra_enviada";
$nonAdminTablesArr[] = "tr_compras_requisiciones_01_orden_de_compra_pagada";
$nonAdminTablesArr[] = "ttr_compras_requisiciones_02_productos_orden_de_compra_pagos";
$nonAdminTablesArr[] = "tr_finanzas_movimientos_balance";
$nonAdminTablesArr[] = "box_cat_finanzas_cuentas_de_balance_03_mu";
$nonAdminTablesArr[] = "cat_finanzas_movimientos_categorias_naturaleza_mu";
$nonAdminTablesArr[] = "box_cat_finanzas_movimientos";
$nonAdminTablesArr[] = "cat_finanzas_monedas_mu";
$nonAdminTablesArr[] = "tr_compras_requisiciones_01_edti_root";
$nonAdminTablesArr[] = "cat_root_tablas_de_catalogos";
$nonAdminTablesArr[] = "cat_actividades_variables_de_ejecucion";
$nonAdminTablesArr[] = "cat_nominas_conceptos";
$nonAdminTablesArr[] = "cat_nominas_conceptos_clasificacion_mu";
$nonAdminTablesArr[] = "cat_nominas_02_actividades";
$nonAdminTablesArr[] = "cat_actividades_alcance_mu";
$nonAdminTablesArr[] = "cat_nominas_conceptos_factor_de_calculo_mu";
$nonAdminTablesArr[] = "cat_nominas_intervalos_mu";
$nonAdminTablesArr[] = "Bancos detalle";
$nonAdminTablesArr[] = "box_cat_finanzas_bancos_cuentas";
$nonAdminTablesArr[] = "box_cat_finanzas_centros_de_costos";
$nonAdminTablesArr[] = "cat_finanzas_cajas_chicas";
$nonAdminTablesArr[] = "box_cat_finanzas_cajas_chicas";
$nonAdminTablesArr[] = "cat_compras_productos_unidad_de_costo_mu";
$nonAdminTablesArr[] = "tr_finanzas_bancos_02_query_dolares";
$nonAdminTablesArr[] = "zz_script query";
$nonAdminTablesArr[] = "cat_control_aplicaciones_campo_productos_funcionalidad";
$nonAdminTablesArr[] = "cat_control_plagas_y_enfermedades";
$nonAdminTablesArr[] = "box_cat_control_plagas_y_enfermedades";
$nonAdminTablesArr[] = "cat_control_plagas_y_enfermedades_categorias";
$nonAdminTablesArr[] = "tr_control_de_plagas_app";
$nonAdminTablesArr[] = "box_cat_compras_productos_app";
$nonAdminTablesArr[] = "cat_compras_almacenes_productos_estatus_catalogo_mu";
$nonAdminTablesArr[] = "cat_compras_almacenes_tipo_de_recibo_mu";
$nonAdminTablesArr[] = "box_cat_compras_almacenes_tipo_de_recibo_mu";
$nonAdminTablesArr[] = "tr_control_aplicaciones_campo_planeacion_recetas_app";
$nonAdminTablesArr[] = "cat_nominas_configuracion_global";
$nonAdminTablesArr[] = "cat_produccion_temporadas";
$nonAdminTablesArr[] = "cat_control_aplicaciones_alcance_mu";
$nonAdminTablesArr[] = "box_cat_control_aplicaciones_alcance_mu";
$nonAdminTablesArr[] = "cat_control_aplicaciones_recetas_02_productos_app";
$nonAdminTablesArr[] = "cat_control_aplicaciones_recetas_cts_01_nombre";
$nonAdminTablesArr[] = "box_cat_control_aplicaciones_recetas_cts_01_nombre";
$nonAdminTablesArr[] = "tr_control_aplicaciones_campo_02_up_productos_app";
$nonAdminTablesArr[] = "tr_control_aplicaciones_campo_03_lotes_app";
$nonAdminTablesArr[] = "tr_control_aplicaciones_campo_04_trabajadores_app";
$nonAdminTablesArr[] = "tr_compras_almacenes_02_recibo_productos";
$nonAdminTablesArr[] = "cat_control_aplicaciones_recetas_cts_01_nombre_query";
$nonAdminTablesArr[] = "tr_compras_orden_de_compra_pagos_03_abonos_productos";
$nonAdminTablesArr[] = "tr_compras_facturas_sat_02_carga_masiva";
$nonAdminTablesArr[] = "cat_nominas_incidencias_mu";
$nonAdminTablesArr[] = "tr_finanzas_bancos_02_uuid_sat";
$nonAdminTablesArr[] = "tr_finanzas_aportaciones_socios_01";
$nonAdminTablesArr[] = "tr_menu_noticias";
$nonAdminTablesArr[] = "tr_menu_sugerencias";
$nonAdminTablesArr[] = "tr_actividades_asistencias_app";
$nonAdminTablesArr[] = "cat_nominas_01_generales";
$nonAdminTablesArr[] = "cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva";
$nonAdminTablesArr[] = "cat_actividades_especificas";
$nonAdminTablesArr[] = "cat_actividades_metodo_de_costeo_mu";
$nonAdminTablesArr[] = "cat_actividades_forma_de_pago_mu";
$nonAdminTablesArr[] = "box_cat_actividades_especificas";
$nonAdminTablesArr[] = "cat_nominas_variables_mu";
$nonAdminTablesArr[] = "cat_nominas_condicionantes_mu";
$nonAdminTablesArr[] = "cat_root_operadores";
$nonAdminTablesArr[] = "cat_nominas_prestaciones_especiales";
$nonAdminTablesArr[] = "cat_nominas_prestaciones_especiales_forma_de_pago_mu";
$nonAdminTablesArr[] = "cat_actividades_turnos";
$nonAdminTablesArr[] = "cat_nominas_uuid_semana";
$nonAdminTablesArr[] = "cat_nominas_prestamos";
$nonAdminTablesArr[] = "cat_nominas_prestaciones_individuales";
$nonAdminTablesArr[] = "cat_nominas_incidencias";
$nonAdminTablesArr[] = "box_cat_nominas_uuid_semana";
$nonAdminTablesArr[] = "cat_actividades_ingreso_egreso_mu";
$nonAdminTablesArr[] = "box_cat_actividades_turnos";
$nonAdminTablesArr[] = "tr_actividades_asistencias_app_semana_uuid";
$nonAdminTablesArr[] = "cat_nominas_dias_de_inicio_consecutivos";
$nonAdminTablesArr[] = "cat_nominas_asistencias_fechas";
$nonAdminTablesArr[] = "cat_nominas_asistencias_fechas_uuid_semana";
$nonAdminTablesArr[] = "cat_finanzas_movimientos_categoria";
$nonAdminTablesArr[] = "cat_finanzas_movimientos_categoria_sub";
$nonAdminTablesArr[] = "box_cat_finanzas_movimientos_categoria";
$nonAdminTablesArr[] = "box_cat_finanzas_movimientos_categoria_sub";
$nonAdminTablesArr[] = "box_cat_nominas_02_actividades";
$nonAdminTablesArr[] = "cat_control_riego_cabezales";
$nonAdminTablesArr[] = "cat_control_riego_cabezales_pulsos";
$nonAdminTablesArr[] = "tr_control_de_riego_pulsos_01";
$nonAdminTablesArr[] = "tr_control_de_riego_pulsos_02_lotes";
$nonAdminTablesArr[] = "box_cat_control_riego_cabezales";
$nonAdminTablesArr[] = "box_cat_control_riego_cabezales_pulsos";
$nonAdminTablesArr[] = "tr_finanzas_bancos_02_movimientos";
$nonAdminTablesArr[] = "tr_actividades_culturales_01";
$nonAdminTablesArr[] = "tr_actividades_culturales_02";
$nonAdminTablesArr[] = "tr_control_aplicaciones_03_trabajadores_sectores";
$nonAdminTablesArr[] = "box_unidad_de_medida_compras";
$nonAdminTablesArr[] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$nonAdminTablesArr[] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$nonAdminTablesArr[] = "cat_compras_productos_precios";
$nonAdminTablesArr[] = "cat_compras_proveedores_sat";
$nonAdminTablesArr[] = "tr_compras_proveedores_01_cargos_abonos";
$nonAdminTablesArr[] = "cat_compras_cargo_abono_mu";
$nonAdminTablesArr[] = "tr_compras_proveedores_02_saldos";
$nonAdminTablesArr[] = "tr_compras_proveedores_01_cargos_abonos_pagos";
$nonAdminTablesArr[] = "tr_compras_proveedores_01_update_proveedor_detalle";
$nonAdminTablesArr[] = "tr_finanzas_bancos_actualizar";
$nonAdminTablesArr[] = "tr_finanzas_tipo_de_cambio";
$nonAdminTablesArr[] = "tr_compras_proveedores_02_cargos_abonos_centros_de_costos";
$nonAdminTablesArr[] = "tr_compras_proveedores_02_cargos_abonos_movimientos";
$nonAdminTablesArr[] = "tr_compras_proveedores_01_cargos_abonos_update";
$nonAdminTablesArr[] = "tr_actividades_planeacion_app";
$nonAdminTablesArr[] = "tr_actividades_planeacion_app_02";
$nonAdminTablesArr[] = "tr_actividades_planeacion_tareas_app";
$nonAdminTablesArr[] = "box_root_cat_holding_03_empresas_unidades_productivas";
$nonAdminTablesArr[] = "cat_holding_03_empresas_unidades_productivas_box";
$nonAdminTablesArr[] = "cat_holding_04_unidades_productivas_lotes_box";
$nonAdminTablesArr[] = "root_box_cat_holding_03_empresas_unidades_productivas";
$nonAdminTablesArr[] = "root_box_cat_holding_04_unidades_productivas_lotes";
$nonAdminTablesArr[] = "tr_compras_requisiciones_2";
$nonAdminTablesArr[] = "tr_compras_requisiciones_02_productos_compras";
$nonAdminTablesArr[] = "tr_compras_proveedores_01_cargos_abonos_pagos_revisar";
$nonAdminTablesArr[] = "tr_compras_facturas_sat_01";
$nonAdminTablesArr[] = "tr_compras_requisiciones_01_estatus";
$nonAdminTablesArr[] = "tr_compras_requisiciones_02_productos_estatus";
$nonAdminTablesArr[] = "tr_compras_facturas_sat_02";
$nonAdminTablesArr[] = "tr_compras_proveedores_01_cargos_abonos_oc_pdf";
$nonAdminTablesArr[] = "tr_compras_facturas_sat_01_estatus";
$nonAdminTablesArr[] = "tr_compras_proveedores_01_cargos_abonos_pagos_edit";
$nonAdminTablesArr[] = "cat_finanzas_cuentas_de_balance_5";
$nonAdminTablesArr[] = "box_cat_finanzas_cuentas_de_balance_5";
$nonAdminTablesArr[] = "box_tr_finanzas_bancos";
$nonAdminTablesArr[] = "tr_tags";
$nonAdminTablesArr[] = "tr_tags_regs";
$nonAdminTablesArr[] = "tr_tags_maestro";
$nonAdminTablesArr[] = "box_cat_nominas_conceptos";
$nonAdminTablesArr[] = "tr_actividades_asistencias_app_horas_extras";
$nonAdminTablesArr[] = "cat_nominas_01_generales_llaves_st";
$nonAdminTablesArr[] = "tr_control_de_riego_programas_ha_st";
$nonAdminTablesArr[] = "tr_tags_edit";
$nonAdminTablesArr[] = "cat_trabajadores_estado_civil_mu";
$nonAdminTablesArr[] = "cat_trabajadores_local_foraneo_mu";
$nonAdminTablesArr[] = "cat_trabajadores_sangre_mu";
$nonAdminTablesArr[] = "cat_trabajadores_sexo_mu";
$nonAdminTablesArr[] = "cat_trabajadores_tipo_de_pago";
$nonAdminTablesArr[] = "tr_actividades_cosecha";
$nonAdminTablesArr[] = "cat_produccion_cultivos_01_productos";
$nonAdminTablesArr[] = "tr_actividades_cosecha_consecutivo";
$nonAdminTablesArr[] = "cat_trabajadores_tabulador";
$nonAdminTablesArr[] = "cat_holding_03_empresas_up_group_predios";
$nonAdminTablesArr[] = "cat_trabajadores_reingresos";
$nonAdminTablesArr[] = "cat_trabajadores_alta_baja_mu";
$nonAdminTablesArr[] = "cat_nominas_02_trabajadores";
$nonAdminTablesArr[] = "box_cat_nominas_01_generales";
$nonAdminTablesArr[] = "tr_actividades_cosecha_detalle_tags";
$nonAdminTablesArr[] = "tr_actividades_cosecha_ranking_01";
$nonAdminTablesArr[] = "tr_actividades_asistencias_app_inf";
$nonAdminTablesArr[] = "cat_nominas_02_horarios";
$nonAdminTablesArr[] = "tr_actividades_asistencias_app_inf_inasistencias";
$nonAdminTablesArr[] = "tr_actividades_cosecha_consecutivo_query";
$nonAdminTablesArr[] = "cat_trabajadores_puestos_historico";
$nonAdminTablesArr[] = "tr_actividades_cosecha_consecutivo_detalle";
$nonAdminTablesArr[] = "cat_produccion_variedades";
$nonAdminTablesArr[] = "tr_actividades_asistencias_app_inf_horas_extras";
$nonAdminTablesArr[] = "cat_trabajadores_altas_inf_destajo_cosecha";
$nonAdminTablesArr[] = "tr_actividades_cosecha_query";
$nonAdminTablesArr[] = "tr_actividades_destajos";
$nonAdminTablesArr[] = "tr_actividades_asistencias_app_inf_horas_turno_vespertino";
$nonAdminTablesArr[] = "tr_actividades_asistencias_app_inf_horas_extras_sab_dom";
$nonAdminTablesArr[] = "tr_actividades_asistencias_app_por_predio_query";
$nonAdminTablesArr[] = "cat_trabajadores_altas1";
$nonAdminTablesArr[] = "cat_trabajadores_puestos_historico_query";
$nonAdminTablesArr[] = "tr_actividades_cosecha1borrar";
$nonAdminTablesArr[] = "tr_compras_almacenes_01_recibo_lpn";
$nonAdminTablesArr[] = "tr_compras_almacenes_01_salida_lpn";
$nonAdminTablesArr[] = "tr_compras_almacenes_02_salida_productos";
$nonAdminTablesArr[] = "cat_trabajadores_puestos_historico1borrar";
$nonAdminTablesArr[] = "cat_compras_almacenes_tipo_de_salida_mu";
$nonAdminTablesArr[] = "tr_compras_almacenes_01_salida_lpn1borrar";
$nonAdminTablesArr[] = "tr_compras_almacenes_02_salida_productos1borrar";
$nonAdminTablesArr[] = "cat_holding_04a_unidades_productivas_lotes_historico";
$nonAdminTablesArr[] = "cat_holding_04_unidades_productivas_lotes_inf";
$nonAdminTablesArr[] = "tr_actividades_cosecha_query2borrar";
$nonAdminTablesArr[] = "tr_actividades_asistencias_app_horas_extras_borrar";
$nonAdminTablesArr[] = "cat_ventas_productos_variedades";
$nonAdminTablesArr[] = "cat_compras_productos_permitidos";
$nonAdminTablesArr[] = "cat_compras_productos1";
$nonAdminTablesArr[] = "tr_ventas_almacenes_01_up_salidas_lpn";
$nonAdminTablesArr[] = "tr_ventas_almacenes_02_up_salidas_productos";
$nonAdminTablesArr[] = "box_cat_ventas_productos_variedades";
$nonAdminTablesArr[] = "tr_actividades_cosecha_salidas_02";
$nonAdminTablesArr[] = "cat_trabajadores_altas2";
$nonAdminTablesArr[] = "tr_actividades_cosecha_salidas_01 quey glori";
$nonAdminTablesArr[] = "tr_actividades_cosecha_salidas_01";
$nonAdminTablesArr[] = "cat_ventas_productos_status_recibo";
$nonAdminTablesArr[] = "aux_puestos_horarios";
$nonAdminTablesArr[] = "aux_horarios";
$nonAdminTablesArr[] = "cat_nominas_feriados";
$nonAdminTablesArr[] = "aux_actividades_precios";
$nonAdminTablesArr[] = "aux_dias_bonos";
$nonAdminTablesArr[] = "aux_incidencias_justificables";
$nonAdminTablesArr[] = "aux_nomina_justificantes_bonos";
$nonAdminTablesArr[] = "puestos horarios";
$nonAdminTablesArr[] = "cat_produccion_proceso";
$nonAdminTablesArr[] = "tr_prenomina";
$nonAdminTablesArr[] = "cat_ventas_productos_precios";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "aaa_permisos_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "aaa_permisos_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );

		// delete records from ugmembers table	
		$dataSource = Security::getUgMembersDatasource();
		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldEquals( "GroupID", postvalue_number("id") ); 
		$dataSource->deleteSingle( $dc, false );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "aaa_permisos_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}