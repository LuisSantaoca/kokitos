<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"] ) ) {
			$lookupTableLinks["cat_trabajadores_puestos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_altas.cat_trabajadores_puestos_id"] )) {
			$lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_altas.cat_trabajadores_puestos_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_altas.cat_trabajadores_puestos_id"]["edit"] = array("table" => "cat_trabajadores_altas", "field" => "cat_trabajadores_puestos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_sexo_mu"] ) ) {
			$lookupTableLinks["cat_trabajadores_sexo_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_sexo_mu"]["cat_trabajadores_altas.cat_trabajadores_sexo_mu_id"] )) {
			$lookupTableLinks["cat_trabajadores_sexo_mu"]["cat_trabajadores_altas.cat_trabajadores_sexo_mu_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_sexo_mu"]["cat_trabajadores_altas.cat_trabajadores_sexo_mu_id"]["edit"] = array("table" => "cat_trabajadores_altas", "field" => "cat_trabajadores_sexo_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_estado_civil_mu"] ) ) {
			$lookupTableLinks["cat_trabajadores_estado_civil_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_estado_civil_mu"]["cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id"] )) {
			$lookupTableLinks["cat_trabajadores_estado_civil_mu"]["cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_estado_civil_mu"]["cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id"]["edit"] = array("table" => "cat_trabajadores_altas", "field" => "cat_trabajadores_estado_civil_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_sangre_mu"] ) ) {
			$lookupTableLinks["cat_trabajadores_sangre_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_sangre_mu"]["cat_trabajadores_altas.cat_trabajadores_sangre_mu_id"] )) {
			$lookupTableLinks["cat_trabajadores_sangre_mu"]["cat_trabajadores_altas.cat_trabajadores_sangre_mu_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_sangre_mu"]["cat_trabajadores_altas.cat_trabajadores_sangre_mu_id"]["edit"] = array("table" => "cat_trabajadores_altas", "field" => "cat_trabajadores_sangre_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_local_foraneo_mu"] ) ) {
			$lookupTableLinks["cat_trabajadores_local_foraneo_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_local_foraneo_mu"]["cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id"] )) {
			$lookupTableLinks["cat_trabajadores_local_foraneo_mu"]["cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_local_foraneo_mu"]["cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id"]["edit"] = array("table" => "cat_trabajadores_altas", "field" => "cat_trabajadores_local_foraneo_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_forma_de_pago_mu"] ) ) {
			$lookupTableLinks["cat_actividades_forma_de_pago_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_forma_de_pago_mu"]["cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id"] )) {
			$lookupTableLinks["cat_actividades_forma_de_pago_mu"]["cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id"] = array();
		}
		$lookupTableLinks["cat_actividades_forma_de_pago_mu"]["cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id"]["edit"] = array("table" => "cat_trabajadores_altas", "field" => "cat_trabajadores_tipo_de_pago_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_02_empresas"] ) ) {
			$lookupTableLinks["cat_holding_02_empresas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_02_empresas"]["cat_trabajadores_altas.cat_holding_02_empresas"] )) {
			$lookupTableLinks["cat_holding_02_empresas"]["cat_trabajadores_altas.cat_holding_02_empresas"] = array();
		}
		$lookupTableLinks["cat_holding_02_empresas"]["cat_trabajadores_altas.cat_holding_02_empresas"]["edit"] = array("table" => "cat_trabajadores_altas", "field" => "cat_holding_02_empresas", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_nominas_01_generales"] ) ) {
			$lookupTableLinks["box_cat_nominas_01_generales"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_nominas_01_generales"]["cat_trabajadores_altas.cat_nominas_01_generales_uuid"] )) {
			$lookupTableLinks["box_cat_nominas_01_generales"]["cat_trabajadores_altas.cat_nominas_01_generales_uuid"] = array();
		}
		$lookupTableLinks["box_cat_nominas_01_generales"]["cat_trabajadores_altas.cat_nominas_01_generales_uuid"]["edit"] = array("table" => "cat_trabajadores_altas", "field" => "cat_nominas_01_generales_uuid", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_categorias"] ) ) {
			$lookupTableLinks["cat_actividades_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_categorias"]["cat_actividades.cat_actividades_categorias_id"] )) {
			$lookupTableLinks["cat_actividades_categorias"]["cat_actividades.cat_actividades_categorias_id"] = array();
		}
		$lookupTableLinks["cat_actividades_categorias"]["cat_actividades.cat_actividades_categorias_id"]["edit"] = array("table" => "cat_actividades", "field" => "cat_actividades_categorias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_categorias_mu"] ) ) {
			$lookupTableLinks["cat_actividades_categorias_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_categorias_mu"]["cat_actividades.cat_actividades_categorias_mu_id"] )) {
			$lookupTableLinks["cat_actividades_categorias_mu"]["cat_actividades.cat_actividades_categorias_mu_id"] = array();
		}
		$lookupTableLinks["cat_actividades_categorias_mu"]["cat_actividades.cat_actividades_categorias_mu_id"]["edit"] = array("table" => "cat_actividades", "field" => "cat_actividades_categorias_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_licencias"] ) ) {
			$lookupTableLinks["cat_usuarios_licencias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_licencias"]["cat_usuarios.cat_usuarios_licencias_id"] )) {
			$lookupTableLinks["cat_usuarios_licencias"]["cat_usuarios.cat_usuarios_licencias_id"] = array();
		}
		$lookupTableLinks["cat_usuarios_licencias"]["cat_usuarios.cat_usuarios_licencias_id"]["edit"] = array("table" => "cat_usuarios", "field" => "cat_usuarios_licencias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["cat_usuarios.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["cat_usuarios.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["cat_usuarios.cat_trabajadores_altas_id"]["edit"] = array("table" => "cat_usuarios", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_box"] ) ) {
			$lookupTableLinks["cat_usuarios_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01.capturista_que_autoriza"] )) {
			$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01.capturista_que_autoriza"] = array();
		}
		$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01.capturista_que_autoriza"]["edit"] = array("table" => "tr_compras_requisiciones_01", "field" => "capturista_que_autoriza", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01.cat_trabajadores_altas_id_solicitante"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01.cat_trabajadores_altas_id_solicitante"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01.cat_trabajadores_altas_id_solicitante"]["edit"] = array("table" => "tr_compras_requisiciones_01", "field" => "cat_trabajadores_altas_id_solicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_01.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_01.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_01.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_compras_requisiciones_01", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_01", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_01.cat_finanzas_cuentas_de_balance_04_llave"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_01.cat_finanzas_cuentas_de_balance_04_llave"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_01.cat_finanzas_cuentas_de_balance_04_llave"]["edit"] = array("table" => "tr_compras_requisiciones_01", "field" => "cat_finanzas_cuentas_de_balance_04_llave", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_requisiciones_01.cat_finanzas_bancos_cuentas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_requisiciones_01.cat_finanzas_bancos_cuentas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_requisiciones_01.cat_finanzas_bancos_cuentas_id"]["edit"] = array("table" => "tr_compras_requisiciones_01", "field" => "cat_finanzas_bancos_cuentas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_requisiciones_01.cat_finanzas_cajas_chicas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_requisiciones_01.cat_finanzas_cajas_chicas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_requisiciones_01.cat_finanzas_cajas_chicas_id"]["edit"] = array("table" => "tr_compras_requisiciones_01", "field" => "cat_finanzas_cajas_chicas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores_categorias"] ) ) {
			$lookupTableLinks["cat_compras_proveedores_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores_categorias"]["cat_compras_proveedores.cat_compras_proveedores_categorias_id"] )) {
			$lookupTableLinks["cat_compras_proveedores_categorias"]["cat_compras_proveedores.cat_compras_proveedores_categorias_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores_categorias"]["cat_compras_proveedores.cat_compras_proveedores_categorias_id"]["edit"] = array("table" => "cat_compras_proveedores", "field" => "cat_compras_proveedores_categorias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_01"] ) ) {
			$lookupTableLinks["cat_holding_01"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_01"]["cat_holding_03_empresas_registros_patronales.cat_holding_01_id"] )) {
			$lookupTableLinks["cat_holding_01"]["cat_holding_03_empresas_registros_patronales.cat_holding_01_id"] = array();
		}
		$lookupTableLinks["cat_holding_01"]["cat_holding_03_empresas_registros_patronales.cat_holding_01_id"]["edit"] = array("table" => "cat_holding_03_empresas_registros_patronales", "field" => "cat_holding_01_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos.cat_finanzas_cuentas_de_balance_04_llave"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos.cat_finanzas_cuentas_de_balance_04_llave"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos.cat_finanzas_cuentas_de_balance_04_llave"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos", "field" => "cat_finanzas_cuentas_de_balance_04_llave", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_licencias"] ) ) {
			$lookupTableLinks["cat_usuarios_licencias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_licencias"]["cat_usuarios_box.cat_usuarios_licencias_id"] )) {
			$lookupTableLinks["cat_usuarios_licencias"]["cat_usuarios_box.cat_usuarios_licencias_id"] = array();
		}
		$lookupTableLinks["cat_usuarios_licencias"]["cat_usuarios_box.cat_usuarios_licencias_id"]["edit"] = array("table" => "cat_usuarios_box", "field" => "cat_usuarios_licencias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["cat_usuarios_box.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["cat_usuarios_box.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["cat_usuarios_box.cat_trabajadores_altas_id"]["edit"] = array("table" => "cat_usuarios_box", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_autorizacion.cat_compras_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_autorizacion.cat_compras_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_autorizacion.cat_compras_estatus_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_autorizacion", "field" => "cat_compras_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_box"] ) ) {
			$lookupTableLinks["cat_usuarios_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_autorizacion.capturista_que_autoriza"] )) {
			$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_autorizacion.capturista_que_autoriza"] = array();
		}
		$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_autorizacion.capturista_que_autoriza"]["edit"] = array("table" => "tr_compras_requisiciones_01_autorizacion", "field" => "capturista_que_autoriza", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_autorizacion.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_autorizacion.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_autorizacion.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_autorizacion", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_autorizacion.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_autorizacion.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_autorizacion.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_autorizacion", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_autorizacion.cat_finanzas_cuentas_de_balance_04_llave"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_autorizacion.cat_finanzas_cuentas_de_balance_04_llave"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_autorizacion.cat_finanzas_cuentas_de_balance_04_llave"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_autorizacion", "field" => "cat_finanzas_cuentas_de_balance_04_llave", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos_categorias"] ) ) {
			$lookupTableLinks["cat_ventas_productos_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos_categorias"]["cat_ventas_productos.cat_ventas_productos_categorias_id"] )) {
			$lookupTableLinks["cat_ventas_productos_categorias"]["cat_ventas_productos.cat_ventas_productos_categorias_id"] = array();
		}
		$lookupTableLinks["cat_ventas_productos_categorias"]["cat_ventas_productos.cat_ventas_productos_categorias_id"]["edit"] = array("table" => "cat_ventas_productos", "field" => "cat_ventas_productos_categorias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_02_empresas"] ) ) {
			$lookupTableLinks["cat_holding_02_empresas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_02_empresas"]["cat_holding_03_empresas_departamentos.cat_holding_02_empresas_id"] )) {
			$lookupTableLinks["cat_holding_02_empresas"]["cat_holding_03_empresas_departamentos.cat_holding_02_empresas_id"] = array();
		}
		$lookupTableLinks["cat_holding_02_empresas"]["cat_holding_03_empresas_departamentos.cat_holding_02_empresas_id"]["edit"] = array("table" => "cat_holding_03_empresas_departamentos", "field" => "cat_holding_02_empresas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_01"] ) ) {
			$lookupTableLinks["cat_holding_01"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_01"]["cat_holding_03_empresas_departamentos.cat_holding_01_id"] )) {
			$lookupTableLinks["cat_holding_01"]["cat_holding_03_empresas_departamentos.cat_holding_01_id"] = array();
		}
		$lookupTableLinks["cat_holding_01"]["cat_holding_03_empresas_departamentos.cat_holding_01_id"]["edit"] = array("table" => "cat_holding_03_empresas_departamentos", "field" => "cat_holding_01_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos_variedades"] ) ) {
			$lookupTableLinks["cat_ventas_productos_variedades"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos_variedades"]["cat_ventas_productos_sku.cat_ventas_productos_variedades_id"] )) {
			$lookupTableLinks["cat_ventas_productos_variedades"]["cat_ventas_productos_sku.cat_ventas_productos_variedades_id"] = array();
		}
		$lookupTableLinks["cat_ventas_productos_variedades"]["cat_ventas_productos_sku.cat_ventas_productos_variedades_id"]["edit"] = array("table" => "cat_ventas_productos_sku", "field" => "cat_ventas_productos_variedades_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos_manejo"] ) ) {
			$lookupTableLinks["cat_ventas_productos_manejo"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos_manejo"]["cat_ventas_productos_sku.cat_ventas_productos_manejo_id"] )) {
			$lookupTableLinks["cat_ventas_productos_manejo"]["cat_ventas_productos_sku.cat_ventas_productos_manejo_id"] = array();
		}
		$lookupTableLinks["cat_ventas_productos_manejo"]["cat_ventas_productos_sku.cat_ventas_productos_manejo_id"]["edit"] = array("table" => "cat_ventas_productos_sku", "field" => "cat_ventas_productos_manejo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos_marcas"] ) ) {
			$lookupTableLinks["cat_ventas_productos_marcas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos_marcas"]["cat_ventas_productos_sku.cat_ventas_productos_marcas_id"] )) {
			$lookupTableLinks["cat_ventas_productos_marcas"]["cat_ventas_productos_sku.cat_ventas_productos_marcas_id"] = array();
		}
		$lookupTableLinks["cat_ventas_productos_marcas"]["cat_ventas_productos_sku.cat_ventas_productos_marcas_id"]["edit"] = array("table" => "cat_ventas_productos_sku", "field" => "cat_ventas_productos_marcas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_ventas_clientes"] ) ) {
			$lookupTableLinks["box_cat_ventas_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_ventas_clientes"]["cat_ventas_productos_sku.cat_ventas_clientes_id"] )) {
			$lookupTableLinks["box_cat_ventas_clientes"]["cat_ventas_productos_sku.cat_ventas_clientes_id"] = array();
		}
		$lookupTableLinks["box_cat_ventas_clientes"]["cat_ventas_productos_sku.cat_ventas_clientes_id"]["edit"] = array("table" => "cat_ventas_productos_sku", "field" => "cat_ventas_clientes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos_categorias_naturaleza_mu"] ) ) {
			$lookupTableLinks["cat_finanzas_movimientos_categorias_naturaleza_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos_categorias_naturaleza_mu"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"] )) {
			$lookupTableLinks["cat_finanzas_movimientos_categorias_naturaleza_mu"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_movimientos_categorias_naturaleza_mu"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"]["edit"] = array("table" => "cat_finanzas_movimientos", "field" => "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["cat_finanzas_movimientos1.cat_finanzas_cuentas_de_balance_03_mu_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["cat_finanzas_movimientos1.cat_finanzas_cuentas_de_balance_03_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["cat_finanzas_movimientos1.cat_finanzas_cuentas_de_balance_03_mu_id"]["edit"] = array("table" => "cat_finanzas_movimientos", "field" => "cat_finanzas_cuentas_de_balance_03_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["cat_finanzas_movimientos1.cat_finanzas_cuentas_de_balance_04"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["cat_finanzas_movimientos1.cat_finanzas_cuentas_de_balance_04"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["cat_finanzas_movimientos1.cat_finanzas_cuentas_de_balance_04"]["edit"] = array("table" => "cat_finanzas_movimientos", "field" => "cat_finanzas_cuentas_de_balance_04", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos"] ) ) {
			$lookupTableLinks["box_cat_finanzas_movimientos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_id_alias"] )) {
			$lookupTableLinks["box_cat_finanzas_movimientos"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_id_alias"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_movimientos"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_id_alias"]["edit"] = array("table" => "cat_finanzas_movimientos", "field" => "cat_finanzas_movimientos_id_alias", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos_categoria"] ) ) {
			$lookupTableLinks["box_cat_finanzas_movimientos_categoria"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos_categoria"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_categoria_id"] )) {
			$lookupTableLinks["box_cat_finanzas_movimientos_categoria"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_categoria_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_movimientos_categoria"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_categoria_id"]["edit"] = array("table" => "cat_finanzas_movimientos", "field" => "cat_finanzas_movimientos_categoria_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos_categoria_sub"] ) ) {
			$lookupTableLinks["cat_finanzas_movimientos_categoria_sub"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos_categoria_sub"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_categoria_sub_id"] )) {
			$lookupTableLinks["cat_finanzas_movimientos_categoria_sub"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_categoria_sub_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_movimientos_categoria_sub"]["cat_finanzas_movimientos1.cat_finanzas_movimientos_categoria_sub_id"]["edit"] = array("table" => "cat_finanzas_movimientos", "field" => "cat_finanzas_movimientos_categoria_sub_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios"] ) ) {
			$lookupTableLinks["cat_usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios"]["cat_usuarios_02_modulos.cat_usuarios_id"] )) {
			$lookupTableLinks["cat_usuarios"]["cat_usuarios_02_modulos.cat_usuarios_id"] = array();
		}
		$lookupTableLinks["cat_usuarios"]["cat_usuarios_02_modulos.cat_usuarios_id"]["edit"] = array("table" => "cat_usuarios_02_modulos", "field" => "cat_usuarios_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_modulos"] ) ) {
			$lookupTableLinks["cat_usuarios_modulos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_modulos"]["cat_usuarios_02_modulos.cat_usuarios_modulos_id"] )) {
			$lookupTableLinks["cat_usuarios_modulos"]["cat_usuarios_02_modulos.cat_usuarios_modulos_id"] = array();
		}
		$lookupTableLinks["cat_usuarios_modulos"]["cat_usuarios_02_modulos.cat_usuarios_modulos_id"]["edit"] = array("table" => "cat_usuarios_02_modulos", "field" => "cat_usuarios_modulos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos_almacenes_categorias"] ) ) {
			$lookupTableLinks["cat_ventas_productos_almacenes_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos_almacenes_categorias"]["cat_ventas_productos_almacenes_box.cat_ventas_productos_almacenes_categorias_id"] )) {
			$lookupTableLinks["cat_ventas_productos_almacenes_categorias"]["cat_ventas_productos_almacenes_box.cat_ventas_productos_almacenes_categorias_id"] = array();
		}
		$lookupTableLinks["cat_ventas_productos_almacenes_categorias"]["cat_ventas_productos_almacenes_box.cat_ventas_productos_almacenes_categorias_id"]["edit"] = array("table" => "cat_ventas_productos_almacenes_box", "field" => "cat_ventas_productos_almacenes_categorias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_unidades_productivas_categorias"] ) ) {
			$lookupTableLinks["cat_holding_03_empresas_unidades_productivas_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_unidades_productivas_categorias"]["cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_id"] )) {
			$lookupTableLinks["cat_holding_03_empresas_unidades_productivas_categorias"]["cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_id"] = array();
		}
		$lookupTableLinks["cat_holding_03_empresas_unidades_productivas_categorias"]["cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_id"]["edit"] = array("table" => "cat_holding_03_empresas_unidades_productivas", "field" => "cat_holding_03_empresas_unidades_productivas_categorias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_mu_unidades_productivas_categorias"] ) ) {
			$lookupTableLinks["cat_holding_03_empresas_mu_unidades_productivas_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_mu_unidades_productivas_categorias"]["cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_mu_id"] )) {
			$lookupTableLinks["cat_holding_03_empresas_mu_unidades_productivas_categorias"]["cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_mu_id"] = array();
		}
		$lookupTableLinks["cat_holding_03_empresas_mu_unidades_productivas_categorias"]["cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_mu_id"]["edit"] = array("table" => "cat_holding_03_empresas_unidades_productivas", "field" => "cat_holding_03_empresas_unidades_productivas_categorias_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_bancos_cuentas"] ) ) {
			$lookupTableLinks["cat_finanzas_bancos_cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_bancos_cuentas"]["tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id"] )) {
			$lookupTableLinks["cat_finanzas_bancos_cuentas"]["tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_bancos_cuentas"]["tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id"]["edit"] = array("table" => "tr_finanzas_bancos_01", "field" => "cat_finanzas_bancos_cuentas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos"] ) ) {
			$lookupTableLinks["cat_finanzas_movimientos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos"]["tr_finanzas_bancos_01.cat_finanzas_movimientos_id"] )) {
			$lookupTableLinks["cat_finanzas_movimientos"]["tr_finanzas_bancos_01.cat_finanzas_movimientos_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_movimientos"]["tr_finanzas_bancos_01.cat_finanzas_movimientos_id"]["edit"] = array("table" => "tr_finanzas_bancos_01", "field" => "cat_finanzas_movimientos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_clientes"] ) ) {
			$lookupTableLinks["cat_ventas_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_clientes"]["tr_finanzas_bancos_01.cat_ventas_clientes_id"] )) {
			$lookupTableLinks["cat_ventas_clientes"]["tr_finanzas_bancos_01.cat_ventas_clientes_id"] = array();
		}
		$lookupTableLinks["cat_ventas_clientes"]["tr_finanzas_bancos_01.cat_ventas_clientes_id"]["edit"] = array("table" => "tr_finanzas_bancos_01", "field" => "cat_ventas_clientes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_finanzas_bancos_01.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_finanzas_bancos_01.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_finanzas_bancos_01.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_finanzas_bancos_01", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_temporadas"] ) ) {
			$lookupTableLinks["cat_produccion_temporadas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_temporadas"]["tr_finanzas_bancos_01.cat_produccion_temporadas_id"] )) {
			$lookupTableLinks["cat_produccion_temporadas"]["tr_finanzas_bancos_01.cat_produccion_temporadas_id"] = array();
		}
		$lookupTableLinks["cat_produccion_temporadas"]["tr_finanzas_bancos_01.cat_produccion_temporadas_id"]["edit"] = array("table" => "tr_finanzas_bancos_01", "field" => "cat_produccion_temporadas_id", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["tr_finanzas_bancos_01.cat_finanzas_bancos_estatus_mu_id"] )) {
			$lookupTableLinks[""]["tr_finanzas_bancos_01.cat_finanzas_bancos_estatus_mu_id"] = array();
		}
		$lookupTableLinks[""]["tr_finanzas_bancos_01.cat_finanzas_bancos_estatus_mu_id"]["edit"] = array("table" => "tr_finanzas_bancos_01", "field" => "cat_finanzas_bancos_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_centros_de_costos"] ) ) {
			$lookupTableLinks["box_cat_finanzas_centros_de_costos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_centros_de_costos"]["tr_finanzas_bancos_02.cat_finanzas_centros_de_costos_id"] )) {
			$lookupTableLinks["box_cat_finanzas_centros_de_costos"]["tr_finanzas_bancos_02.cat_finanzas_centros_de_costos_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_centros_de_costos"]["tr_finanzas_bancos_02.cat_finanzas_centros_de_costos_id"]["edit"] = array("table" => "tr_finanzas_bancos_02", "field" => "cat_finanzas_centros_de_costos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_bancos"] ) ) {
			$lookupTableLinks["cat_finanzas_bancos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_bancos"]["cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id"] )) {
			$lookupTableLinks["cat_finanzas_bancos"]["cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_bancos"]["cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id"]["edit"] = array("table" => "cat_finanzas_bancos_cuentas", "field" => "cat_finanzas_bancos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_monedas_mu"] ) ) {
			$lookupTableLinks["cat_finanzas_monedas_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_monedas_mu"]["cat_finanzas_bancos_cuentas.cat_finanzas_monedas_mu_id"] )) {
			$lookupTableLinks["cat_finanzas_monedas_mu"]["cat_finanzas_bancos_cuentas.cat_finanzas_monedas_mu_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_monedas_mu"]["cat_finanzas_bancos_cuentas.cat_finanzas_monedas_mu_id"]["edit"] = array("table" => "cat_finanzas_bancos_cuentas", "field" => "cat_finanzas_monedas_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_mu_unidades_productivas_categorias"] ) ) {
			$lookupTableLinks["cat_holding_03_empresas_mu_unidades_productivas_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_mu_unidades_productivas_categorias"]["cat_holding_03_empresas_unidades_productivas_categorias1.cat_holding_03_empresas_unidades_productivas_categorias_mu_id"] )) {
			$lookupTableLinks["cat_holding_03_empresas_mu_unidades_productivas_categorias"]["cat_holding_03_empresas_unidades_productivas_categorias1.cat_holding_03_empresas_unidades_productivas_categorias_mu_id"] = array();
		}
		$lookupTableLinks["cat_holding_03_empresas_mu_unidades_productivas_categorias"]["cat_holding_03_empresas_unidades_productivas_categorias1.cat_holding_03_empresas_unidades_productivas_categorias_mu_id"]["edit"] = array("table" => "cat_holding_03_empresas_unidades_productivas_categorias", "field" => "cat_holding_03_empresas_unidades_productivas_categorias_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_04_unidades_productivas_lotes_categorias"] ) ) {
			$lookupTableLinks["cat_holding_04_unidades_productivas_lotes_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_04_unidades_productivas_lotes_categorias"]["cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_categorias_id"] )) {
			$lookupTableLinks["cat_holding_04_unidades_productivas_lotes_categorias"]["cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_categorias_id"] = array();
		}
		$lookupTableLinks["cat_holding_04_unidades_productivas_lotes_categorias"]["cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_categorias_id"]["edit"] = array("table" => "cat_holding_04_unidades_productivas_lotes", "field" => "cat_holding_04_unidades_productivas_lotes_categorias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_04_unidades_productivas_mu_lotes_categorias"] ) ) {
			$lookupTableLinks["cat_holding_04_unidades_productivas_mu_lotes_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_04_unidades_productivas_mu_lotes_categorias"]["cat_holding_04_unidades_productivas_lotes_categorias.cat_holding_04_unidades_productivas_mu_lotes_categorias_id"] )) {
			$lookupTableLinks["cat_holding_04_unidades_productivas_mu_lotes_categorias"]["cat_holding_04_unidades_productivas_lotes_categorias.cat_holding_04_unidades_productivas_mu_lotes_categorias_id"] = array();
		}
		$lookupTableLinks["cat_holding_04_unidades_productivas_mu_lotes_categorias"]["cat_holding_04_unidades_productivas_lotes_categorias.cat_holding_04_unidades_productivas_mu_lotes_categorias_id"]["edit"] = array("table" => "cat_holding_04_unidades_productivas_lotes_categorias", "field" => "cat_holding_04_unidades_productivas_mu_lotes_categorias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_orden_de_compra.cat_compras_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_orden_de_compra.cat_compras_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_orden_de_compra.cat_compras_estatus_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra", "field" => "cat_compras_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_box"] ) ) {
			$lookupTableLinks["cat_usuarios_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_orden_de_compra.capturista_que_autoriza"] )) {
			$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_orden_de_compra.capturista_que_autoriza"] = array();
		}
		$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_orden_de_compra.capturista_que_autoriza"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra", "field" => "capturista_que_autoriza", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_01_orden_de_compra.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_01_orden_de_compra.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_01_orden_de_compra.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_orden_de_compra.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_orden_de_compra.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_orden_de_compra.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_orden_de_compra", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_orden_de_compra", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_orden_de_compra", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_productos_presentacion_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_productos_presentacion_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_presentacion_mu"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_productos_presentacion_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_orden_de_compra", "field" => "cat_compras_productos_presentacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_requisiciones_02_productos_orden_de_compra.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_orden_de_compra", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_categorias"] ) ) {
			$lookupTableLinks["cat_compras_productos_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_categorias"]["cat_compras_productos.cat_compras_productos_categorias_id"] )) {
			$lookupTableLinks["cat_compras_productos_categorias"]["cat_compras_productos.cat_compras_productos_categorias_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_categorias"]["cat_compras_productos.cat_compras_productos_categorias_id"]["edit"] = array("table" => "cat_compras_productos", "field" => "cat_compras_productos_categorias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["cat_compras_productos.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["cat_compras_productos.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["cat_compras_productos.cat_compras_proveedores_id"]["edit"] = array("table" => "cat_compras_productos", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"]["cat_compras_productos.cat_compras_productos_presentacion_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"]["cat_compras_productos.cat_compras_productos_presentacion_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_presentacion_mu"]["cat_compras_productos.cat_compras_productos_presentacion_mu_id"]["edit"] = array("table" => "cat_compras_productos", "field" => "cat_compras_productos_presentacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "cat_compras_productos", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_permitidos"] ) ) {
			$lookupTableLinks["cat_compras_productos_permitidos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_permitidos"]["cat_compras_productos.cat_compras_productos_permitidos_id"] )) {
			$lookupTableLinks["cat_compras_productos_permitidos"]["cat_compras_productos.cat_compras_productos_permitidos_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_permitidos"]["cat_compras_productos.cat_compras_productos_permitidos_id"]["edit"] = array("table" => "cat_compras_productos", "field" => "cat_compras_productos_permitidos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_control_aplicaciones_campo_tipo_de_control"] ) ) {
			$lookupTableLinks["cat_control_aplicaciones_campo_tipo_de_control"] = array();
		}
		if( !isset( $lookupTableLinks["cat_control_aplicaciones_campo_tipo_de_control"]["cat_compras_productos.cat_control_aplicaciones_campo_tipo_de_control_id"] )) {
			$lookupTableLinks["cat_control_aplicaciones_campo_tipo_de_control"]["cat_compras_productos.cat_control_aplicaciones_campo_tipo_de_control_id"] = array();
		}
		$lookupTableLinks["cat_control_aplicaciones_campo_tipo_de_control"]["cat_compras_productos.cat_control_aplicaciones_campo_tipo_de_control_id"]["edit"] = array("table" => "cat_compras_productos", "field" => "cat_control_aplicaciones_campo_tipo_de_control_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"]["box_cat_compras_productos.cat_compras_productos_presentacion_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"]["box_cat_compras_productos.cat_compras_productos_presentacion_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_presentacion_mu"]["box_cat_compras_productos.cat_compras_productos_presentacion_mu_id"]["edit"] = array("table" => "box_cat_compras_productos", "field" => "cat_compras_productos_presentacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["box_cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["box_cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["box_cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "box_cat_compras_productos", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_licencias"] ) ) {
			$lookupTableLinks["cat_usuarios_licencias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_licencias"]["cat_usuarios_box_2.cat_usuarios_licencias_id"] )) {
			$lookupTableLinks["cat_usuarios_licencias"]["cat_usuarios_box_2.cat_usuarios_licencias_id"] = array();
		}
		$lookupTableLinks["cat_usuarios_licencias"]["cat_usuarios_box_2.cat_usuarios_licencias_id"]["edit"] = array("table" => "cat_usuarios_box_2", "field" => "cat_usuarios_licencias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["cat_usuarios_box_2.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["cat_usuarios_box_2.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["cat_usuarios_box_2.cat_trabajadores_altas_id"]["edit"] = array("table" => "cat_usuarios_box_2", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_autorizacion_user.cat_compras_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_autorizacion_user.cat_compras_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_autorizacion_user.cat_compras_estatus_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_autorizacion_user", "field" => "cat_compras_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_box"] ) ) {
			$lookupTableLinks["cat_usuarios_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_autorizacion_user.capturista_que_autoriza"] )) {
			$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_autorizacion_user.capturista_que_autoriza"] = array();
		}
		$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_autorizacion_user.capturista_que_autoriza"]["edit"] = array("table" => "tr_compras_requisiciones_01_autorizacion_user", "field" => "capturista_que_autoriza", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_autorizacion_user.cat_trabajadores_altas_id_solicitante"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_autorizacion_user.cat_trabajadores_altas_id_solicitante"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_autorizacion_user.cat_trabajadores_altas_id_solicitante"]["edit"] = array("table" => "tr_compras_requisiciones_01_autorizacion_user", "field" => "cat_trabajadores_altas_id_solicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_cuentas_de_balance_03_mu"] ) ) {
			$lookupTableLinks["cat_finanzas_cuentas_de_balance_03_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_cuentas_de_balance_03_mu"]["cat_finanzas_cuentas_de_balance_04.cat_finanzas_cuentas_de_balance_03_mu_id"] )) {
			$lookupTableLinks["cat_finanzas_cuentas_de_balance_03_mu"]["cat_finanzas_cuentas_de_balance_04.cat_finanzas_cuentas_de_balance_03_mu_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_cuentas_de_balance_03_mu"]["cat_finanzas_cuentas_de_balance_04.cat_finanzas_cuentas_de_balance_03_mu_id"]["edit"] = array("table" => "cat_finanzas_cuentas_de_balance_04", "field" => "cat_finanzas_cuentas_de_balance_03_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu"]["box_tr_compras_facturas_sat_01.estatus"] )) {
			$lookupTableLinks["cat_compras_estatus_mu"]["box_tr_compras_facturas_sat_01.estatus"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu"]["box_tr_compras_facturas_sat_01.estatus"]["edit"] = array("table" => "box_tr_compras_facturas_sat_01", "field" => "estatus", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["cat_finanzas_transacciones_categorias_mu.cat_finanzas_transacciones_categorias_naturaleza_mu_id"] )) {
			$lookupTableLinks[""]["cat_finanzas_transacciones_categorias_mu.cat_finanzas_transacciones_categorias_naturaleza_mu_id"] = array();
		}
		$lookupTableLinks[""]["cat_finanzas_transacciones_categorias_mu.cat_finanzas_transacciones_categorias_naturaleza_mu_id"]["edit"] = array("table" => "cat_finanzas_transacciones_categorias_mu", "field" => "cat_finanzas_transacciones_categorias_naturaleza_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_transacciones_categorias_mu"] ) ) {
			$lookupTableLinks["cat_finanzas_transacciones_categorias_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_transacciones_categorias_mu"]["cat_finanzas_transacciones_categorias_mu.cat_finanzas_transacciones_categorias_mu_id"] )) {
			$lookupTableLinks["cat_finanzas_transacciones_categorias_mu"]["cat_finanzas_transacciones_categorias_mu.cat_finanzas_transacciones_categorias_mu_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_transacciones_categorias_mu"]["cat_finanzas_transacciones_categorias_mu.cat_finanzas_transacciones_categorias_mu_id"]["edit"] = array("table" => "cat_finanzas_transacciones_categorias_mu", "field" => "cat_finanzas_transacciones_categorias_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_edit_root", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_edit_root", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_02_productos_edit_root.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_02_productos_edit_root.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_02_productos_edit_root.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_edit_root", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_02_productos_edit_root.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_02_productos_edit_root.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_02_productos_edit_root.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_edit_root", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_productos_presentacion_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_productos_presentacion_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_presentacion_mu"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_productos_presentacion_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_edit_root", "field" => "cat_compras_productos_presentacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_requisiciones_02_productos_edit_root.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_edit_root", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_edit_root.llave_idbalance03_idcatalogos_cargo"] )) {
			$lookupTableLinks["cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_edit_root.llave_idbalance03_idcatalogos_cargo"] = array();
		}
		$lookupTableLinks["cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_edit_root.llave_idbalance03_idcatalogos_cargo"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_edit_root", "field" => "llave_idbalance03_idcatalogos_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_edit_root.llave_idbalance03_idcatalogos_abono"] )) {
			$lookupTableLinks["cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_edit_root.llave_idbalance03_idcatalogos_abono"] = array();
		}
		$lookupTableLinks["cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_edit_root.llave_idbalance03_idcatalogos_abono"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_edit_root", "field" => "llave_idbalance03_idcatalogos_abono", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_inventario_02_productos.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_inventario_02_productos.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_inventario_02_productos.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_almacenes_inventario_02_productos", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_inventario_03.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_inventario_03.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_inventario_03.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_almacenes_inventario_03", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_almacenes_estatus_mu"] ) ) {
			$lookupTableLinks["cat_compras_almacenes_estatus_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_almacenes_estatus_mu"]["tr_compras_almacenes_inventario_03.cat_compras_almacenes_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_almacenes_estatus_mu"]["tr_compras_almacenes_inventario_03.cat_compras_almacenes_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_almacenes_estatus_mu"]["tr_compras_almacenes_inventario_03.cat_compras_almacenes_estatus_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_inventario_03", "field" => "cat_compras_almacenes_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_enviada", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_intermediarios_id"] )) {
			$lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_intermediarios_id"] = array();
		}
		$lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_intermediarios_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_enviada", "field" => "cat_compras_intermediarios_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_estatus_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_enviada", "field" => "cat_compras_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_enviada", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_proveedores_asignacion_mu_id"] )) {
			$lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_proveedores_asignacion_mu_id"] = array();
		}
		$lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_enviada.cat_compras_proveedores_asignacion_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_enviada", "field" => "cat_compras_proveedores_asignacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_box"] ) ) {
			$lookupTableLinks["cat_usuarios_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_orden_de_compra_enviada.capturista_que_autoriza"] )) {
			$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_orden_de_compra_enviada.capturista_que_autoriza"] = array();
		}
		$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_orden_de_compra_enviada.capturista_que_autoriza"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_enviada", "field" => "capturista_que_autoriza", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_pagada", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_intermediarios_id"] )) {
			$lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_intermediarios_id"] = array();
		}
		$lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_intermediarios_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_pagada", "field" => "cat_compras_intermediarios_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_estatus_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_pagada", "field" => "cat_compras_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_pagada", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_proveedores_asignacion_mu_id"] )) {
			$lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_proveedores_asignacion_mu_id"] = array();
		}
		$lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_proveedores_asignacion_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_pagada", "field" => "cat_compras_proveedores_asignacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_box"] ) ) {
			$lookupTableLinks["cat_usuarios_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_orden_de_compra_pagada.capturista_que_autoriza"] )) {
			$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_orden_de_compra_pagada.capturista_que_autoriza"] = array();
		}
		$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_orden_de_compra_pagada.capturista_que_autoriza"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_pagada", "field" => "capturista_que_autoriza", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_finanzas_transacciones_id"] )) {
			$lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_finanzas_transacciones_id"] = array();
		}
		$lookupTableLinks[""]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_finanzas_transacciones_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_pagada", "field" => "cat_finanzas_transacciones_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_tipo_de_pago_mu"] ) ) {
			$lookupTableLinks["cat_compras_tipo_de_pago_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_tipo_de_pago_mu"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_tipo_de_pago_mu_id"] )) {
			$lookupTableLinks["cat_compras_tipo_de_pago_mu"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_tipo_de_pago_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_tipo_de_pago_mu"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_compras_tipo_de_pago_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_pagada", "field" => "cat_compras_tipo_de_pago_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_trabajadores_altas_id_solicitante"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_trabajadores_altas_id_solicitante"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_orden_de_compra_pagada.cat_trabajadores_altas_id_solicitante"]["edit"] = array("table" => "tr_compras_requisiciones_01_orden_de_compra_pagada", "field" => "cat_trabajadores_altas_id_solicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["ttr_compras_requisiciones_02_productos_orden_de_compra_pagos.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["ttr_compras_requisiciones_02_productos_orden_de_compra_pagos.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["ttr_compras_requisiciones_02_productos_orden_de_compra_pagos.cat_compras_proveedores_id"]["edit"] = array("table" => "ttr_compras_requisiciones_02_productos_orden_de_compra_pagos", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["ttr_compras_requisiciones_02_productos_orden_de_compra_pagos.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["ttr_compras_requisiciones_02_productos_orden_de_compra_pagos.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["ttr_compras_requisiciones_02_productos_orden_de_compra_pagos.cat_compras_productos_id"]["edit"] = array("table" => "ttr_compras_requisiciones_02_productos_orden_de_compra_pagos", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_finanzas_movimientos_balance1.cat_finanzas_cuentas_de_balance_03_mu_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_finanzas_movimientos_balance1.cat_finanzas_cuentas_de_balance_03_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_finanzas_movimientos_balance1.cat_finanzas_cuentas_de_balance_03_mu_id"]["edit"] = array("table" => "tr_finanzas_movimientos_balance", "field" => "cat_finanzas_cuentas_de_balance_03_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos_categorias_naturaleza_mu"] ) ) {
			$lookupTableLinks["cat_finanzas_movimientos_categorias_naturaleza_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos_categorias_naturaleza_mu"]["tr_finanzas_movimientos_balance1.cat_finanzas_movimientos_categorias_naturaleza_mu_id"] )) {
			$lookupTableLinks["cat_finanzas_movimientos_categorias_naturaleza_mu"]["tr_finanzas_movimientos_balance1.cat_finanzas_movimientos_categorias_naturaleza_mu_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_movimientos_categorias_naturaleza_mu"]["tr_finanzas_movimientos_balance1.cat_finanzas_movimientos_categorias_naturaleza_mu_id"]["edit"] = array("table" => "tr_finanzas_movimientos_balance", "field" => "cat_finanzas_movimientos_categorias_naturaleza_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_edti_root.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_edti_root.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_edti_root.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_edti_root", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_edti_root.cat_compras_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_edti_root.cat_compras_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu_box"]["tr_compras_requisiciones_01_edti_root.cat_compras_estatus_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_edti_root", "field" => "cat_compras_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_edti_root.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_edti_root.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_edti_root.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_edti_root", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["tr_compras_requisiciones_01_edti_root.cat_compras_proveedores_asignacion_mu_id"] )) {
			$lookupTableLinks[""]["tr_compras_requisiciones_01_edti_root.cat_compras_proveedores_asignacion_mu_id"] = array();
		}
		$lookupTableLinks[""]["tr_compras_requisiciones_01_edti_root.cat_compras_proveedores_asignacion_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_edti_root", "field" => "cat_compras_proveedores_asignacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_box"] ) ) {
			$lookupTableLinks["cat_usuarios_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_edti_root.capturista_que_autoriza"] )) {
			$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_edti_root.capturista_que_autoriza"] = array();
		}
		$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_edti_root.capturista_que_autoriza"]["edit"] = array("table" => "tr_compras_requisiciones_01_edti_root", "field" => "capturista_que_autoriza", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_edti_root.cat_trabajadores_altas_id_solicitante"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_edti_root.cat_trabajadores_altas_id_solicitante"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_edti_root.cat_trabajadores_altas_id_solicitante"]["edit"] = array("table" => "tr_compras_requisiciones_01_edti_root", "field" => "cat_trabajadores_altas_id_solicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos"] ) ) {
			$lookupTableLinks["box_cat_finanzas_movimientos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos"]["tr_compras_requisiciones_01_edti_root.cat_finanzas_movimientos_id"] )) {
			$lookupTableLinks["box_cat_finanzas_movimientos"]["tr_compras_requisiciones_01_edti_root.cat_finanzas_movimientos_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_movimientos"]["tr_compras_requisiciones_01_edti_root.cat_finanzas_movimientos_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_edti_root", "field" => "cat_finanzas_movimientos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"] ) ) {
			$lookupTableLinks["box_cat_actividades_especificas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"]["cat_nominas_02_actividades.cat_actividades_especificas_id"] )) {
			$lookupTableLinks["box_cat_actividades_especificas"]["cat_nominas_02_actividades.cat_actividades_especificas_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_especificas"]["cat_nominas_02_actividades.cat_actividades_especificas_id"]["edit"] = array("table" => "cat_nominas_02_actividades", "field" => "cat_actividades_especificas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_alcance_mu"] ) ) {
			$lookupTableLinks["cat_actividades_alcance_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_alcance_mu"]["cat_nominas_02_actividades.cat_actividades_alcance_mu_id"] )) {
			$lookupTableLinks["cat_actividades_alcance_mu"]["cat_nominas_02_actividades.cat_actividades_alcance_mu_id"] = array();
		}
		$lookupTableLinks["cat_actividades_alcance_mu"]["cat_nominas_02_actividades.cat_actividades_alcance_mu_id"]["edit"] = array("table" => "cat_nominas_02_actividades", "field" => "cat_actividades_alcance_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_nominas_conceptos"] ) ) {
			$lookupTableLinks["box_cat_nominas_conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_nominas_conceptos"]["cat_nominas_02_actividades.cat_nominas_conceptos_id"] )) {
			$lookupTableLinks["box_cat_nominas_conceptos"]["cat_nominas_02_actividades.cat_nominas_conceptos_id"] = array();
		}
		$lookupTableLinks["box_cat_nominas_conceptos"]["cat_nominas_02_actividades.cat_nominas_conceptos_id"]["edit"] = array("table" => "cat_nominas_02_actividades", "field" => "cat_nominas_conceptos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["cat_nominas_02_actividades.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["cat_nominas_02_actividades.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["cat_nominas_02_actividades.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "cat_nominas_02_actividades", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["cat_nominas_02_actividades.cat_produccion_cultivos_01_productos_id"] )) {
			$lookupTableLinks[""]["cat_nominas_02_actividades.cat_produccion_cultivos_01_productos_id"] = array();
		}
		$lookupTableLinks[""]["cat_nominas_02_actividades.cat_produccion_cultivos_01_productos_id"]["edit"] = array("table" => "cat_nominas_02_actividades", "field" => "cat_produccion_cultivos_01_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["cat_nominas_02_actividades.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["cat_nominas_02_actividades.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["cat_nominas_02_actividades.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "cat_nominas_02_actividades", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_bancos"] ) ) {
			$lookupTableLinks["cat_finanzas_bancos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_bancos"]["box_cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id"] )) {
			$lookupTableLinks["cat_finanzas_bancos"]["box_cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_bancos"]["box_cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id"]["edit"] = array("table" => "box_cat_finanzas_bancos_cuentas", "field" => "cat_finanzas_bancos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_monedas_mu"] ) ) {
			$lookupTableLinks["cat_finanzas_monedas_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_monedas_mu"]["box_cat_finanzas_bancos_cuentas.cat_finanzas_monedas_mu_id"] )) {
			$lookupTableLinks["cat_finanzas_monedas_mu"]["box_cat_finanzas_bancos_cuentas.cat_finanzas_monedas_mu_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_monedas_mu"]["box_cat_finanzas_bancos_cuentas.cat_finanzas_monedas_mu_id"]["edit"] = array("table" => "box_cat_finanzas_bancos_cuentas", "field" => "cat_finanzas_monedas_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_bancos_cuentas"] ) ) {
			$lookupTableLinks["cat_finanzas_bancos_cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_bancos_cuentas"]["tr_finanzas_bancos_02_query_dolares.cat_finanzas_bancos_cuentas_id"] )) {
			$lookupTableLinks["cat_finanzas_bancos_cuentas"]["tr_finanzas_bancos_02_query_dolares.cat_finanzas_bancos_cuentas_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_bancos_cuentas"]["tr_finanzas_bancos_02_query_dolares.cat_finanzas_bancos_cuentas_id"]["edit"] = array("table" => "tr_finanzas_bancos_02_query_dolares", "field" => "cat_finanzas_bancos_cuentas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos"] ) ) {
			$lookupTableLinks["cat_finanzas_movimientos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos"]["tr_finanzas_bancos_02_query_dolares.cat_finanzas_movimientos_id"] )) {
			$lookupTableLinks["cat_finanzas_movimientos"]["tr_finanzas_bancos_02_query_dolares.cat_finanzas_movimientos_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_movimientos"]["tr_finanzas_bancos_02_query_dolares.cat_finanzas_movimientos_id"]["edit"] = array("table" => "tr_finanzas_bancos_02_query_dolares", "field" => "cat_finanzas_movimientos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_clientes"] ) ) {
			$lookupTableLinks["cat_ventas_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_clientes"]["tr_finanzas_bancos_02_query_dolares.cat_ventas_clientes_id"] )) {
			$lookupTableLinks["cat_ventas_clientes"]["tr_finanzas_bancos_02_query_dolares.cat_ventas_clientes_id"] = array();
		}
		$lookupTableLinks["cat_ventas_clientes"]["tr_finanzas_bancos_02_query_dolares.cat_ventas_clientes_id"]["edit"] = array("table" => "tr_finanzas_bancos_02_query_dolares", "field" => "cat_ventas_clientes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_finanzas_bancos_02_query_dolares.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_finanzas_bancos_02_query_dolares.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_finanzas_bancos_02_query_dolares.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_finanzas_bancos_02_query_dolares", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_control_de_plagas_app.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_control_de_plagas_app.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_control_de_plagas_app.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_control_de_plagas_app", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_control_plagas_y_enfermedades"] ) ) {
			$lookupTableLinks["box_cat_control_plagas_y_enfermedades"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_control_plagas_y_enfermedades"]["tr_control_de_plagas_app.cat_control_plagas_y_enfermedades_id"] )) {
			$lookupTableLinks["box_cat_control_plagas_y_enfermedades"]["tr_control_de_plagas_app.cat_control_plagas_y_enfermedades_id"] = array();
		}
		$lookupTableLinks["box_cat_control_plagas_y_enfermedades"]["tr_control_de_plagas_app.cat_control_plagas_y_enfermedades_id"]["edit"] = array("table" => "tr_control_de_plagas_app", "field" => "cat_control_plagas_y_enfermedades_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["cat_control_aplicaciones_recetas_02_productos_app.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["cat_control_aplicaciones_recetas_02_productos_app.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["cat_control_aplicaciones_recetas_02_productos_app.cat_compras_productos_id"]["edit"] = array("table" => "cat_control_aplicaciones_recetas_02_productos_app", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["cat_control_aplicaciones_recetas_02_productos_app.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["cat_control_aplicaciones_recetas_02_productos_app.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["cat_control_aplicaciones_recetas_02_productos_app.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "cat_control_aplicaciones_recetas_02_productos_app", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_control_aplicaciones_alcance_mu"] ) ) {
			$lookupTableLinks["cat_control_aplicaciones_alcance_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_control_aplicaciones_alcance_mu"]["cat_control_aplicaciones_recetas_02_productos_app.cat_control_aplicaciones_alcance_mu_id"] )) {
			$lookupTableLinks["cat_control_aplicaciones_alcance_mu"]["cat_control_aplicaciones_recetas_02_productos_app.cat_control_aplicaciones_alcance_mu_id"] = array();
		}
		$lookupTableLinks["cat_control_aplicaciones_alcance_mu"]["cat_control_aplicaciones_recetas_02_productos_app.cat_control_aplicaciones_alcance_mu_id"]["edit"] = array("table" => "cat_control_aplicaciones_recetas_02_productos_app", "field" => "cat_control_aplicaciones_alcance_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_control_aplicaciones_campo_02_up_productos_app.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_control_aplicaciones_campo_02_up_productos_app.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_control_aplicaciones_campo_02_up_productos_app.cat_compras_productos_id"]["edit"] = array("table" => "tr_control_aplicaciones_campo_02_up_productos_app", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_control_aplicaciones_campo_02_up_productos_app.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_control_aplicaciones_campo_02_up_productos_app.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_control_aplicaciones_campo_02_up_productos_app.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "tr_control_aplicaciones_campo_02_up_productos_app", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_control_aplicaciones_campo_productos_funcionalidad"] ) ) {
			$lookupTableLinks["cat_control_aplicaciones_campo_productos_funcionalidad"] = array();
		}
		if( !isset( $lookupTableLinks["cat_control_aplicaciones_campo_productos_funcionalidad"]["tr_control_aplicaciones_campo_02_up_productos_app.cat_control_aplicaciones_campo_productos_funcionalidad_id"] )) {
			$lookupTableLinks["cat_control_aplicaciones_campo_productos_funcionalidad"]["tr_control_aplicaciones_campo_02_up_productos_app.cat_control_aplicaciones_campo_productos_funcionalidad_id"] = array();
		}
		$lookupTableLinks["cat_control_aplicaciones_campo_productos_funcionalidad"]["tr_control_aplicaciones_campo_02_up_productos_app.cat_control_aplicaciones_campo_productos_funcionalidad_id"]["edit"] = array("table" => "tr_control_aplicaciones_campo_02_up_productos_app", "field" => "cat_control_aplicaciones_campo_productos_funcionalidad_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_04_unidades_productivas_lotes"]["tr_control_aplicaciones_campo_03_lotes_app.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["cat_holding_04_unidades_productivas_lotes"]["tr_control_aplicaciones_campo_03_lotes_app.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["cat_holding_04_unidades_productivas_lotes"]["tr_control_aplicaciones_campo_03_lotes_app.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_control_aplicaciones_campo_03_lotes_app", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_control_aplicaciones_campo_04_trabajadores_app.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_control_aplicaciones_campo_04_trabajadores_app.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_control_aplicaciones_campo_04_trabajadores_app.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_control_aplicaciones_campo_04_trabajadores_app", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_02_recibo_productos.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_02_recibo_productos.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_02_recibo_productos.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_almacenes_02_recibo_productos", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_almacenes_02_recibo_productos.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_almacenes_02_recibo_productos.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_almacenes_02_recibo_productos.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_02_recibo_productos", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_orden_de_compra_pagos_03_abonos_productos", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_orden_de_compra_pagos_03_abonos_productos", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_compras_orden_de_compra_pagos_03_abonos_productos", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_compras_orden_de_compra_pagos_03_abonos_productos", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_productos_presentacion_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_productos_presentacion_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_presentacion_mu"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_productos_presentacion_mu_id"]["edit"] = array("table" => "tr_compras_orden_de_compra_pagos_03_abonos_productos", "field" => "cat_compras_productos_presentacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_orden_de_compra_pagos_03_abonos_productos.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "tr_compras_orden_de_compra_pagos_03_abonos_productos", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_socios"] ) ) {
			$lookupTableLinks["cat_finanzas_socios"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_socios"]["tr_finanzas_aportaciones_socios_01.cat_finanzas_socios_id"] )) {
			$lookupTableLinks["cat_finanzas_socios"]["tr_finanzas_aportaciones_socios_01.cat_finanzas_socios_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_socios"]["tr_finanzas_aportaciones_socios_01.cat_finanzas_socios_id"]["edit"] = array("table" => "tr_finanzas_aportaciones_socios_01", "field" => "cat_finanzas_socios_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos"] ) ) {
			$lookupTableLinks["box_cat_finanzas_movimientos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos"]["tr_finanzas_aportaciones_socios_01.cat_finanzas_movimientos_id"] )) {
			$lookupTableLinks["box_cat_finanzas_movimientos"]["tr_finanzas_aportaciones_socios_01.cat_finanzas_movimientos_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_movimientos"]["tr_finanzas_aportaciones_socios_01.cat_finanzas_movimientos_id"]["edit"] = array("table" => "tr_finanzas_aportaciones_socios_01", "field" => "cat_finanzas_movimientos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["box_cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_documentos_mu"]["tr_finanzas_aportaciones_socios_01.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["box_cat_compras_documentos_mu"]["tr_finanzas_aportaciones_socios_01.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_documentos_mu"]["tr_finanzas_aportaciones_socios_01.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_finanzas_aportaciones_socios_01", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"] ) ) {
			$lookupTableLinks["box_cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"]["tr_finanzas_aportaciones_socios_01.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["box_cat_compras_proveedores"]["tr_finanzas_aportaciones_socios_01.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_proveedores"]["tr_finanzas_aportaciones_socios_01.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_finanzas_aportaciones_socios_01", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_turnos"] ) ) {
			$lookupTableLinks["box_cat_actividades_turnos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_turnos"]["tr_actividades_asistencias_app.cat_actividades_turnos_id"] )) {
			$lookupTableLinks["box_cat_actividades_turnos"]["tr_actividades_asistencias_app.cat_actividades_turnos_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_turnos"]["tr_actividades_asistencias_app.cat_actividades_turnos_id"]["edit"] = array("table" => "tr_actividades_asistencias_app", "field" => "cat_actividades_turnos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"] ) ) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app.cat_actividades_ingreso_egreso_mu"] )) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app.cat_actividades_ingreso_egreso_mu"] = array();
		}
		$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app.cat_actividades_ingreso_egreso_mu"]["edit"] = array("table" => "tr_actividades_asistencias_app", "field" => "cat_actividades_ingreso_egreso_mu", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_up_group_predios"] ) ) {
			$lookupTableLinks["cat_holding_03_empresas_up_group_predios"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_up_group_predios"]["tr_actividades_asistencias_app.cat_holding_03_empresas_up_group_predios_id"] )) {
			$lookupTableLinks["cat_holding_03_empresas_up_group_predios"]["tr_actividades_asistencias_app.cat_holding_03_empresas_up_group_predios_id"] = array();
		}
		$lookupTableLinks["cat_holding_03_empresas_up_group_predios"]["tr_actividades_asistencias_app.cat_holding_03_empresas_up_group_predios_id"]["edit"] = array("table" => "tr_actividades_asistencias_app", "field" => "cat_holding_03_empresas_up_group_predios_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_nominas_dias_semana_mu"] ) ) {
			$lookupTableLinks["cat_nominas_dias_semana_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_nominas_dias_semana_mu"]["cat_nominas_01_generales.dia_de_inicio"] )) {
			$lookupTableLinks["cat_nominas_dias_semana_mu"]["cat_nominas_01_generales.dia_de_inicio"] = array();
		}
		$lookupTableLinks["cat_nominas_dias_semana_mu"]["cat_nominas_01_generales.dia_de_inicio"]["edit"] = array("table" => "cat_nominas_01_generales", "field" => "dia_de_inicio", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_nominas_periodicidad_mu"] ) ) {
			$lookupTableLinks["cat_nominas_periodicidad_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_nominas_periodicidad_mu"]["cat_nominas_01_generales.cat_nominas_periodicidad_mu_id"] )) {
			$lookupTableLinks["cat_nominas_periodicidad_mu"]["cat_nominas_01_generales.cat_nominas_periodicidad_mu_id"] = array();
		}
		$lookupTableLinks["cat_nominas_periodicidad_mu"]["cat_nominas_01_generales.cat_nominas_periodicidad_mu_id"]["edit"] = array("table" => "cat_nominas_01_generales", "field" => "cat_nominas_periodicidad_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_nominas_uuid_semana"] ) ) {
			$lookupTableLinks["box_cat_nominas_uuid_semana"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_nominas_uuid_semana"]["cat_nominas_01_generales.cat_nominas_uuid_semana"] )) {
			$lookupTableLinks["box_cat_nominas_uuid_semana"]["cat_nominas_01_generales.cat_nominas_uuid_semana"] = array();
		}
		$lookupTableLinks["box_cat_nominas_uuid_semana"]["cat_nominas_01_generales.cat_nominas_uuid_semana"]["edit"] = array("table" => "cat_nominas_01_generales", "field" => "cat_nominas_uuid_semana", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_nominas_uuid_semana"] ) ) {
			$lookupTableLinks["box_cat_nominas_uuid_semana"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_nominas_uuid_semana"]["cat_nominas_01_generales.llave_ano_semana_nominas_uuid"] )) {
			$lookupTableLinks["box_cat_nominas_uuid_semana"]["cat_nominas_01_generales.llave_ano_semana_nominas_uuid"] = array();
		}
		$lookupTableLinks["box_cat_nominas_uuid_semana"]["cat_nominas_01_generales.llave_ano_semana_nominas_uuid"]["edit"] = array("table" => "cat_nominas_01_generales", "field" => "llave_ano_semana_nominas_uuid", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"] ) ) {
			$lookupTableLinks["box_cat_actividades_especificas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_actividades_especificas_id"] )) {
			$lookupTableLinks["box_cat_actividades_especificas"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_actividades_especificas_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_especificas"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_actividades_especificas_id"]["edit"] = array("table" => "cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva", "field" => "cat_actividades_especificas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_alcance_mu"] ) ) {
			$lookupTableLinks["cat_actividades_alcance_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_alcance_mu"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_actividades_alcance_mu_id"] )) {
			$lookupTableLinks["cat_actividades_alcance_mu"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_actividades_alcance_mu_id"] = array();
		}
		$lookupTableLinks["cat_actividades_alcance_mu"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_actividades_alcance_mu_id"]["edit"] = array("table" => "cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva", "field" => "cat_actividades_alcance_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_nominas_conceptos"] ) ) {
			$lookupTableLinks["cat_nominas_conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_nominas_conceptos"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_nominas_conceptos_id"] )) {
			$lookupTableLinks["cat_nominas_conceptos"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_nominas_conceptos_id"] = array();
		}
		$lookupTableLinks["cat_nominas_conceptos"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_nominas_conceptos_id"]["edit"] = array("table" => "cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva", "field" => "cat_nominas_conceptos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_trabajadores_altas_id"]["edit"] = array("table" => "cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"] ) ) {
			$lookupTableLinks["cat_trabajadores_puestos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_trabajadores_puestos_id"] )) {
			$lookupTableLinks["cat_trabajadores_puestos"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_trabajadores_puestos_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_puestos"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_trabajadores_puestos_id"]["edit"] = array("table" => "cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva", "field" => "cat_trabajadores_puestos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_root_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_root_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_root_cat_holding_03_empresas_unidades_productivas"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_root_cat_holding_03_empresas_unidades_productivas"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_root_cat_holding_03_empresas_unidades_productivas"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades"] ) ) {
			$lookupTableLinks["box_cat_actividades"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades"]["cat_actividades_especificas1.cat_actividades_id"] )) {
			$lookupTableLinks["box_cat_actividades"]["cat_actividades_especificas1.cat_actividades_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades"]["cat_actividades_especificas1.cat_actividades_id"]["edit"] = array("table" => "cat_actividades_especificas", "field" => "cat_actividades_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_unidades_de_costo"] ) ) {
			$lookupTableLinks["cat_actividades_unidades_de_costo"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_unidades_de_costo"]["cat_actividades_especificas1.cat_actividades_unidades_de_costo_id"] )) {
			$lookupTableLinks["cat_actividades_unidades_de_costo"]["cat_actividades_especificas1.cat_actividades_unidades_de_costo_id"] = array();
		}
		$lookupTableLinks["cat_actividades_unidades_de_costo"]["cat_actividades_especificas1.cat_actividades_unidades_de_costo_id"]["edit"] = array("table" => "cat_actividades_especificas", "field" => "cat_actividades_unidades_de_costo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_variables_de_ejecucion"] ) ) {
			$lookupTableLinks["cat_actividades_variables_de_ejecucion"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_variables_de_ejecucion"]["cat_actividades_especificas1.cat_actividades_variables_de_ejecucion_id"] )) {
			$lookupTableLinks["cat_actividades_variables_de_ejecucion"]["cat_actividades_especificas1.cat_actividades_variables_de_ejecucion_id"] = array();
		}
		$lookupTableLinks["cat_actividades_variables_de_ejecucion"]["cat_actividades_especificas1.cat_actividades_variables_de_ejecucion_id"]["edit"] = array("table" => "cat_actividades_especificas", "field" => "cat_actividades_variables_de_ejecucion_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_forma_de_pago_mu"] ) ) {
			$lookupTableLinks["cat_actividades_forma_de_pago_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_forma_de_pago_mu"]["cat_actividades_especificas1.cat_actividades_forma_de_pago_mu_id"] )) {
			$lookupTableLinks["cat_actividades_forma_de_pago_mu"]["cat_actividades_especificas1.cat_actividades_forma_de_pago_mu_id"] = array();
		}
		$lookupTableLinks["cat_actividades_forma_de_pago_mu"]["cat_actividades_especificas1.cat_actividades_forma_de_pago_mu_id"]["edit"] = array("table" => "cat_actividades_especificas", "field" => "cat_actividades_forma_de_pago_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_nominas_conceptos"] ) ) {
			$lookupTableLinks["cat_nominas_conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_nominas_conceptos"]["cat_actividades_especificas1.cat_nominas_conceptos_id"] )) {
			$lookupTableLinks["cat_nominas_conceptos"]["cat_actividades_especificas1.cat_nominas_conceptos_id"] = array();
		}
		$lookupTableLinks["cat_nominas_conceptos"]["cat_actividades_especificas1.cat_nominas_conceptos_id"]["edit"] = array("table" => "cat_actividades_especificas", "field" => "cat_nominas_conceptos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_alcance_mu"] ) ) {
			$lookupTableLinks["cat_actividades_alcance_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_alcance_mu"]["cat_actividades_especificas1.cat_actividades_alcance_mu_id"] )) {
			$lookupTableLinks["cat_actividades_alcance_mu"]["cat_actividades_especificas1.cat_actividades_alcance_mu_id"] = array();
		}
		$lookupTableLinks["cat_actividades_alcance_mu"]["cat_actividades_especificas1.cat_actividades_alcance_mu_id"]["edit"] = array("table" => "cat_actividades_especificas", "field" => "cat_actividades_alcance_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades"] ) ) {
			$lookupTableLinks["box_cat_actividades"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades"]["box_cat_actividades_especificas.cat_actividades_id"] )) {
			$lookupTableLinks["box_cat_actividades"]["box_cat_actividades_especificas.cat_actividades_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades"]["box_cat_actividades_especificas.cat_actividades_id"]["edit"] = array("table" => "box_cat_actividades_especificas", "field" => "cat_actividades_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_unidades_de_costo"] ) ) {
			$lookupTableLinks["cat_actividades_unidades_de_costo"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_unidades_de_costo"]["box_cat_actividades_especificas.cat_actividades_unidades_de_costo_id"] )) {
			$lookupTableLinks["cat_actividades_unidades_de_costo"]["box_cat_actividades_especificas.cat_actividades_unidades_de_costo_id"] = array();
		}
		$lookupTableLinks["cat_actividades_unidades_de_costo"]["box_cat_actividades_especificas.cat_actividades_unidades_de_costo_id"]["edit"] = array("table" => "box_cat_actividades_especificas", "field" => "cat_actividades_unidades_de_costo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_variables_de_ejecucion"] ) ) {
			$lookupTableLinks["cat_actividades_variables_de_ejecucion"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_variables_de_ejecucion"]["box_cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id"] )) {
			$lookupTableLinks["cat_actividades_variables_de_ejecucion"]["box_cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id"] = array();
		}
		$lookupTableLinks["cat_actividades_variables_de_ejecucion"]["box_cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id"]["edit"] = array("table" => "box_cat_actividades_especificas", "field" => "cat_actividades_variables_de_ejecucion_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_forma_de_pago_mu"] ) ) {
			$lookupTableLinks["cat_actividades_forma_de_pago_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_forma_de_pago_mu"]["box_cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id"] )) {
			$lookupTableLinks["cat_actividades_forma_de_pago_mu"]["box_cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id"] = array();
		}
		$lookupTableLinks["cat_actividades_forma_de_pago_mu"]["box_cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id"]["edit"] = array("table" => "box_cat_actividades_especificas", "field" => "cat_actividades_forma_de_pago_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_nominas_conceptos_clasificacion_mu"] ) ) {
			$lookupTableLinks["cat_nominas_conceptos_clasificacion_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_nominas_conceptos_clasificacion_mu"]["cat_actividades_turnos.cat_nominas_conceptos_clasificacion_mu_id"] )) {
			$lookupTableLinks["cat_nominas_conceptos_clasificacion_mu"]["cat_actividades_turnos.cat_nominas_conceptos_clasificacion_mu_id"] = array();
		}
		$lookupTableLinks["cat_nominas_conceptos_clasificacion_mu"]["cat_actividades_turnos.cat_nominas_conceptos_clasificacion_mu_id"]["edit"] = array("table" => "cat_actividades_turnos", "field" => "cat_nominas_conceptos_clasificacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app_semana_uuid.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app_semana_uuid.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app_semana_uuid.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_semana_uuid", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_turnos"] ) ) {
			$lookupTableLinks["box_cat_actividades_turnos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_turnos"]["tr_actividades_asistencias_app_semana_uuid.cat_actividades_turnos_id"] )) {
			$lookupTableLinks["box_cat_actividades_turnos"]["tr_actividades_asistencias_app_semana_uuid.cat_actividades_turnos_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_turnos"]["tr_actividades_asistencias_app_semana_uuid.cat_actividades_turnos_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_semana_uuid", "field" => "cat_actividades_turnos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"] ) ) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_semana_uuid.cat_actividades_ingreso_egreso_mu"] )) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_semana_uuid.cat_actividades_ingreso_egreso_mu"] = array();
		}
		$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_semana_uuid.cat_actividades_ingreso_egreso_mu"]["edit"] = array("table" => "tr_actividades_asistencias_app_semana_uuid", "field" => "cat_actividades_ingreso_egreso_mu", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_semana_uuid.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_semana_uuid.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_semana_uuid.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_semana_uuid", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"] ) ) {
			$lookupTableLinks["box_cat_actividades_especificas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"]["box_cat_nominas_02_actividades.cat_actividades_especificas_id"] )) {
			$lookupTableLinks["box_cat_actividades_especificas"]["box_cat_nominas_02_actividades.cat_actividades_especificas_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_especificas"]["box_cat_nominas_02_actividades.cat_actividades_especificas_id"]["edit"] = array("table" => "box_cat_nominas_02_actividades", "field" => "cat_actividades_especificas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_alcance_mu"] ) ) {
			$lookupTableLinks["cat_actividades_alcance_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_alcance_mu"]["box_cat_nominas_02_actividades.cat_actividades_alcance_mu_id"] )) {
			$lookupTableLinks["cat_actividades_alcance_mu"]["box_cat_nominas_02_actividades.cat_actividades_alcance_mu_id"] = array();
		}
		$lookupTableLinks["cat_actividades_alcance_mu"]["box_cat_nominas_02_actividades.cat_actividades_alcance_mu_id"]["edit"] = array("table" => "box_cat_nominas_02_actividades", "field" => "cat_actividades_alcance_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "cat_control_riego_cabezales", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_control_riego_cabezales"] ) ) {
			$lookupTableLinks["box_cat_control_riego_cabezales"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_control_riego_cabezales"]["cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_id"] )) {
			$lookupTableLinks["box_cat_control_riego_cabezales"]["cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_id"] = array();
		}
		$lookupTableLinks["box_cat_control_riego_cabezales"]["cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_id"]["edit"] = array("table" => "cat_control_riego_cabezales_pulsos", "field" => "cat_control_riego_cabezales_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_control_riego_cabezales_pulsos"] ) ) {
			$lookupTableLinks["box_cat_control_riego_cabezales_pulsos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_control_riego_cabezales_pulsos"]["tr_control_de_riego_pulsos_01.cat_control_riego_cabezales_pulsos_id"] )) {
			$lookupTableLinks["box_cat_control_riego_cabezales_pulsos"]["tr_control_de_riego_pulsos_01.cat_control_riego_cabezales_pulsos_id"] = array();
		}
		$lookupTableLinks["box_cat_control_riego_cabezales_pulsos"]["tr_control_de_riego_pulsos_01.cat_control_riego_cabezales_pulsos_id"]["edit"] = array("table" => "tr_control_de_riego_pulsos_01", "field" => "cat_control_riego_cabezales_pulsos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_control_riego_cabezales"] ) ) {
			$lookupTableLinks["cat_control_riego_cabezales"] = array();
		}
		if( !isset( $lookupTableLinks["cat_control_riego_cabezales"]["box_cat_control_riego_cabezales.cat_control_riego_cabezales_id"] )) {
			$lookupTableLinks["cat_control_riego_cabezales"]["box_cat_control_riego_cabezales.cat_control_riego_cabezales_id"] = array();
		}
		$lookupTableLinks["cat_control_riego_cabezales"]["box_cat_control_riego_cabezales.cat_control_riego_cabezales_id"]["edit"] = array("table" => "box_cat_control_riego_cabezales", "field" => "cat_control_riego_cabezales_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["box_cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["box_cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["box_cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "box_cat_control_riego_cabezales", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_control_riego_cabezales"] ) ) {
			$lookupTableLinks["box_cat_control_riego_cabezales"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_control_riego_cabezales"]["box_cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_id"] )) {
			$lookupTableLinks["box_cat_control_riego_cabezales"]["box_cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_id"] = array();
		}
		$lookupTableLinks["box_cat_control_riego_cabezales"]["box_cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_id"]["edit"] = array("table" => "box_cat_control_riego_cabezales_pulsos", "field" => "cat_control_riego_cabezales_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos"] ) ) {
			$lookupTableLinks["box_cat_finanzas_movimientos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos"]["tr_finanzas_bancos_02_movimientos.cat_finanzas_movimientos_id"] )) {
			$lookupTableLinks["box_cat_finanzas_movimientos"]["tr_finanzas_bancos_02_movimientos.cat_finanzas_movimientos_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_movimientos"]["tr_finanzas_bancos_02_movimientos.cat_finanzas_movimientos_id"]["edit"] = array("table" => "tr_finanzas_bancos_02_movimientos", "field" => "cat_finanzas_movimientos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_culturales_01.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_culturales_01.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_culturales_01.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_culturales_01", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"] ) ) {
			$lookupTableLinks["box_cat_actividades_especificas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_culturales_01.cat_actividades_especificas_id"] )) {
			$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_culturales_01.cat_actividades_especificas_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_culturales_01.cat_actividades_especificas_id"]["edit"] = array("table" => "tr_actividades_culturales_01", "field" => "cat_actividades_especificas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_culturales_01.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_culturales_01.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_culturales_01.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_culturales_01", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_culturales_02.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_culturales_02.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_culturales_02.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_actividades_culturales_02", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_control_aplicaciones_03_trabajadores_sectores.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_control_aplicaciones_03_trabajadores_sectores.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_control_aplicaciones_03_trabajadores_sectores.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_control_aplicaciones_03_trabajadores_sectores", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_costo_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_costo_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_costo_mu"]["box_unidad_de_medida_compras.cat_compras_productos_unidad_de_costo_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_costo_mu"]["box_unidad_de_medida_compras.cat_compras_productos_unidad_de_costo_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_costo_mu"]["box_unidad_de_medida_compras.cat_compras_productos_unidad_de_costo_mu_id"]["edit"] = array("table" => "box_unidad_de_medida_compras", "field" => "cat_compras_productos_unidad_de_costo_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["cat_compras_productos_precios.id_producto"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["cat_compras_productos_precios.id_producto"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["cat_compras_productos_precios.id_producto"]["edit"] = array("table" => "cat_compras_productos_precios", "field" => "id_producto", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"] ) ) {
			$lookupTableLinks["box_cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["box_cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_cuentas_de_balance_03_mu_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_cuentas_de_balance_03_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_cuentas_de_balance_03_mu_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos", "field" => "cat_finanzas_cuentas_de_balance_03_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_cuentas_de_balance_04_llave"] )) {
			$lookupTableLinks["cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_cuentas_de_balance_04_llave"] = array();
		}
		$lookupTableLinks["cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_cuentas_de_balance_04_llave"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos", "field" => "cat_finanzas_cuentas_de_balance_04_llave", "page" => "edit");
		if( !isset( $lookupTableLinks["box_tr_compras_facturas_sat_01"] ) ) {
			$lookupTableLinks["box_tr_compras_facturas_sat_01"] = array();
		}
		if( !isset( $lookupTableLinks["box_tr_compras_facturas_sat_01"]["tr_compras_proveedores_01_cargos_abonos.uuid_sat"] )) {
			$lookupTableLinks["box_tr_compras_facturas_sat_01"]["tr_compras_proveedores_01_cargos_abonos.uuid_sat"] = array();
		}
		$lookupTableLinks["box_tr_compras_facturas_sat_01"]["tr_compras_proveedores_01_cargos_abonos.uuid_sat"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos", "field" => "uuid_sat", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_bancos_cuentas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_bancos_cuentas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_bancos_cuentas_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos", "field" => "cat_finanzas_bancos_cuentas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_cajas_chicas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_cajas_chicas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos.cat_finanzas_cajas_chicas_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos", "field" => "cat_finanzas_cajas_chicas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_proveedores_01_cargos_abonos.cat_compras_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_proveedores_01_cargos_abonos.cat_compras_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_proveedores_01_cargos_abonos.cat_compras_estatus_mu_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos", "field" => "cat_compras_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"] ) ) {
			$lookupTableLinks["box_cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_02_saldos.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_02_saldos.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_02_saldos.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_proveedores_02_saldos", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"] ) ) {
			$lookupTableLinks["box_cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_pagos.id_prov"] )) {
			$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_pagos.id_prov"] = array();
		}
		$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_pagos.id_prov"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos", "field" => "id_prov", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["box_cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_cuentas_de_balance_03_mu_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_cuentas_de_balance_03_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_cuentas_de_balance_03_mu_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos", "field" => "cat_finanzas_cuentas_de_balance_03_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_cuentas_de_balance_04_llave"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_cuentas_de_balance_04_llave"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_cuentas_de_balance_04_llave"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos", "field" => "cat_finanzas_cuentas_de_balance_04_llave", "page" => "edit");
		if( !isset( $lookupTableLinks["box_tr_compras_facturas_sat_01"] ) ) {
			$lookupTableLinks["box_tr_compras_facturas_sat_01"] = array();
		}
		if( !isset( $lookupTableLinks["box_tr_compras_facturas_sat_01"]["tr_compras_proveedores_01_cargos_abonos_pagos.uuid_sat"] )) {
			$lookupTableLinks["box_tr_compras_facturas_sat_01"]["tr_compras_proveedores_01_cargos_abonos_pagos.uuid_sat"] = array();
		}
		$lookupTableLinks["box_tr_compras_facturas_sat_01"]["tr_compras_proveedores_01_cargos_abonos_pagos.uuid_sat"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos", "field" => "uuid_sat", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_bancos_cuentas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_bancos_cuentas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_bancos_cuentas_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos", "field" => "cat_finanzas_bancos_cuentas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_cajas_chicas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_cajas_chicas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_finanzas_cajas_chicas_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos", "field" => "cat_finanzas_cajas_chicas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_compras_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_compras_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos.cat_compras_estatus_mu_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos", "field" => "cat_compras_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_tr_finanzas_bancos"] ) ) {
			$lookupTableLinks["box_tr_finanzas_bancos"] = array();
		}
		if( !isset( $lookupTableLinks["box_tr_finanzas_bancos"]["tr_compras_proveedores_01_cargos_abonos_pagos.tr_finanzas_bancos_01_id"] )) {
			$lookupTableLinks["box_tr_finanzas_bancos"]["tr_compras_proveedores_01_cargos_abonos_pagos.tr_finanzas_bancos_01_id"] = array();
		}
		$lookupTableLinks["box_tr_finanzas_bancos"]["tr_compras_proveedores_01_cargos_abonos_pagos.tr_finanzas_bancos_01_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos", "field" => "tr_finanzas_bancos_01_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"] ) ) {
			$lookupTableLinks["box_cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_update_proveedor_detalle.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_update_proveedor_detalle.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_update_proveedor_detalle.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_proveedores_01_update_proveedor_detalle", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_bancos_cuentas"] ) ) {
			$lookupTableLinks["cat_finanzas_bancos_cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_bancos_cuentas"]["tr_finanzas_bancos_actualizar.cat_finanzas_bancos_cuentas_id"] )) {
			$lookupTableLinks["cat_finanzas_bancos_cuentas"]["tr_finanzas_bancos_actualizar.cat_finanzas_bancos_cuentas_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_bancos_cuentas"]["tr_finanzas_bancos_actualizar.cat_finanzas_bancos_cuentas_id"]["edit"] = array("table" => "tr_finanzas_bancos_actualizar", "field" => "cat_finanzas_bancos_cuentas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos"] ) ) {
			$lookupTableLinks["cat_finanzas_movimientos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos"]["tr_finanzas_bancos_actualizar.cat_finanzas_movimientos_id"] )) {
			$lookupTableLinks["cat_finanzas_movimientos"]["tr_finanzas_bancos_actualizar.cat_finanzas_movimientos_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_movimientos"]["tr_finanzas_bancos_actualizar.cat_finanzas_movimientos_id"]["edit"] = array("table" => "tr_finanzas_bancos_actualizar", "field" => "cat_finanzas_movimientos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_clientes"] ) ) {
			$lookupTableLinks["cat_ventas_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_clientes"]["tr_finanzas_bancos_actualizar.cat_ventas_clientes_id"] )) {
			$lookupTableLinks["cat_ventas_clientes"]["tr_finanzas_bancos_actualizar.cat_ventas_clientes_id"] = array();
		}
		$lookupTableLinks["cat_ventas_clientes"]["tr_finanzas_bancos_actualizar.cat_ventas_clientes_id"]["edit"] = array("table" => "tr_finanzas_bancos_actualizar", "field" => "cat_ventas_clientes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_finanzas_bancos_actualizar.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_finanzas_bancos_actualizar.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_finanzas_bancos_actualizar.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_finanzas_bancos_actualizar", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_temporadas"] ) ) {
			$lookupTableLinks["cat_produccion_temporadas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_temporadas"]["tr_finanzas_bancos_actualizar.cat_produccion_temporadas_id"] )) {
			$lookupTableLinks["cat_produccion_temporadas"]["tr_finanzas_bancos_actualizar.cat_produccion_temporadas_id"] = array();
		}
		$lookupTableLinks["cat_produccion_temporadas"]["tr_finanzas_bancos_actualizar.cat_produccion_temporadas_id"]["edit"] = array("table" => "tr_finanzas_bancos_actualizar", "field" => "cat_produccion_temporadas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_centros_de_costos"] ) ) {
			$lookupTableLinks["box_cat_finanzas_centros_de_costos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_centros_de_costos"]["tr_compras_proveedores_02_cargos_abonos_centros_de_costos.cat_finanzas_centros_de_costos_id"] )) {
			$lookupTableLinks["box_cat_finanzas_centros_de_costos"]["tr_compras_proveedores_02_cargos_abonos_centros_de_costos.cat_finanzas_centros_de_costos_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_centros_de_costos"]["tr_compras_proveedores_02_cargos_abonos_centros_de_costos.cat_finanzas_centros_de_costos_id"]["edit"] = array("table" => "tr_compras_proveedores_02_cargos_abonos_centros_de_costos", "field" => "cat_finanzas_centros_de_costos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos"] ) ) {
			$lookupTableLinks["box_cat_finanzas_movimientos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_movimientos"]["tr_compras_proveedores_02_cargos_abonos_movimientos.cat_finanzas_movimientos_id"] )) {
			$lookupTableLinks["box_cat_finanzas_movimientos"]["tr_compras_proveedores_02_cargos_abonos_movimientos.cat_finanzas_movimientos_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_movimientos"]["tr_compras_proveedores_02_cargos_abonos_movimientos.cat_finanzas_movimientos_id"]["edit"] = array("table" => "tr_compras_proveedores_02_cargos_abonos_movimientos", "field" => "cat_finanzas_movimientos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"] ) ) {
			$lookupTableLinks["box_cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_update.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_update.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_update.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_update", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["box_cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos_update.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos_update.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos_update.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_update", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_cuentas_de_balance_03_mu_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_cuentas_de_balance_03_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_cuentas_de_balance_03_mu_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_update", "field" => "cat_finanzas_cuentas_de_balance_03_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_cuentas_de_balance_04_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_cuentas_de_balance_04_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_cuentas_de_balance_04_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_update", "field" => "cat_finanzas_cuentas_de_balance_04_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_bancos_cuentas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_bancos_cuentas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_bancos_cuentas_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_update", "field" => "cat_finanzas_bancos_cuentas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_cajas_chicas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_cajas_chicas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos_update.cat_finanzas_cajas_chicas_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_update", "field" => "cat_finanzas_cajas_chicas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades"] ) ) {
			$lookupTableLinks["box_cat_actividades"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades"]["tr_actividades_planeacion_app.cat_actividades_id_maestro"] )) {
			$lookupTableLinks["box_cat_actividades"]["tr_actividades_planeacion_app.cat_actividades_id_maestro"] = array();
		}
		$lookupTableLinks["box_cat_actividades"]["tr_actividades_planeacion_app.cat_actividades_id_maestro"]["edit"] = array("table" => "tr_actividades_planeacion_app", "field" => "cat_actividades_id_maestro", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_planeacion_app.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_planeacion_app.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_planeacion_app.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_planeacion_app", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_planeacion_app.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_planeacion_app.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_planeacion_app.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_actividades_planeacion_app", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_unidades_de_costo"] ) ) {
			$lookupTableLinks["box_cat_actividades_unidades_de_costo"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_unidades_de_costo"]["tr_actividades_planeacion_app.cat_actividades_unidades_de_costo_id"] )) {
			$lookupTableLinks["box_cat_actividades_unidades_de_costo"]["tr_actividades_planeacion_app.cat_actividades_unidades_de_costo_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_unidades_de_costo"]["tr_actividades_planeacion_app.cat_actividades_unidades_de_costo_id"]["edit"] = array("table" => "tr_actividades_planeacion_app", "field" => "cat_actividades_unidades_de_costo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_app.cat_trabajadores_altas_id_supervisor"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_app.cat_trabajadores_altas_id_supervisor"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_app.cat_trabajadores_altas_id_supervisor"]["edit"] = array("table" => "tr_actividades_planeacion_app", "field" => "cat_trabajadores_altas_id_supervisor", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades"] ) ) {
			$lookupTableLinks["box_cat_actividades"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades"]["tr_actividades_planeacion_app_02.cat_actividades_id_maestro"] )) {
			$lookupTableLinks["box_cat_actividades"]["tr_actividades_planeacion_app_02.cat_actividades_id_maestro"] = array();
		}
		$lookupTableLinks["box_cat_actividades"]["tr_actividades_planeacion_app_02.cat_actividades_id_maestro"]["edit"] = array("table" => "tr_actividades_planeacion_app_02", "field" => "cat_actividades_id_maestro", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_planeacion_app_02.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_planeacion_app_02.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_planeacion_app_02.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_planeacion_app_02", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_planeacion_app_02.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_planeacion_app_02.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_planeacion_app_02.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_actividades_planeacion_app_02", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_unidades_de_costo"] ) ) {
			$lookupTableLinks["box_cat_actividades_unidades_de_costo"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_unidades_de_costo"]["tr_actividades_planeacion_app_02.cat_actividades_unidades_de_costo_id"] )) {
			$lookupTableLinks["box_cat_actividades_unidades_de_costo"]["tr_actividades_planeacion_app_02.cat_actividades_unidades_de_costo_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_unidades_de_costo"]["tr_actividades_planeacion_app_02.cat_actividades_unidades_de_costo_id"]["edit"] = array("table" => "tr_actividades_planeacion_app_02", "field" => "cat_actividades_unidades_de_costo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_app_02.cat_trabajadores_altas_id_supervisor"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_app_02.cat_trabajadores_altas_id_supervisor"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_app_02.cat_trabajadores_altas_id_supervisor"]["edit"] = array("table" => "tr_actividades_planeacion_app_02", "field" => "cat_trabajadores_altas_id_supervisor", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_planeacion_tareas_app.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_planeacion_tareas_app.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_planeacion_tareas_app.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_actividades_planeacion_tareas_app", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_tareas_app.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_tareas_app.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_tareas_app.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_planeacion_tareas_app", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_unidades_de_costo"] ) ) {
			$lookupTableLinks["cat_actividades_unidades_de_costo"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_unidades_de_costo"]["tr_actividades_planeacion_tareas_app.cat_actividades_unidades_de_costo_id"] )) {
			$lookupTableLinks["cat_actividades_unidades_de_costo"]["tr_actividades_planeacion_tareas_app.cat_actividades_unidades_de_costo_id"] = array();
		}
		$lookupTableLinks["cat_actividades_unidades_de_costo"]["tr_actividades_planeacion_tareas_app.cat_actividades_unidades_de_costo_id"]["edit"] = array("table" => "tr_actividades_planeacion_tareas_app", "field" => "cat_actividades_unidades_de_costo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades"] ) ) {
			$lookupTableLinks["box_cat_actividades"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades"]["tr_actividades_planeacion_tareas_app.cat_actividades_id"] )) {
			$lookupTableLinks["box_cat_actividades"]["tr_actividades_planeacion_tareas_app.cat_actividades_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades"]["tr_actividades_planeacion_tareas_app.cat_actividades_id"]["edit"] = array("table" => "tr_actividades_planeacion_tareas_app", "field" => "cat_actividades_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_tareas_app.cat_trabajadores_altas_id_supervisor"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_tareas_app.cat_trabajadores_altas_id_supervisor"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_planeacion_tareas_app.cat_trabajadores_altas_id_supervisor"]["edit"] = array("table" => "tr_actividades_planeacion_tareas_app", "field" => "cat_trabajadores_altas_id_supervisor", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_planeacion_tareas_app.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_planeacion_tareas_app.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_planeacion_tareas_app.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_planeacion_tareas_app", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_2.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_2.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_2.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_2", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_compras.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_compras.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_compras.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_compras", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_compras.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_compras.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_compras.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_compras", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_compras.cat_finanzas_cuentas_de_balance_04_llave"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_compras.cat_finanzas_cuentas_de_balance_04_llave"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_compras.cat_finanzas_cuentas_de_balance_04_llave"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_compras", "field" => "cat_finanzas_cuentas_de_balance_04_llave", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["box_cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_documentos_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos_revisar", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_cuentas_de_balance_03_mu_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_cuentas_de_balance_03_mu_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_03_mu"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_cuentas_de_balance_03_mu_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos_revisar", "field" => "cat_finanzas_cuentas_de_balance_03_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_cuentas_de_balance_04_llave"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_cuentas_de_balance_04_llave"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_cuentas_de_balance_04_llave"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos_revisar", "field" => "cat_finanzas_cuentas_de_balance_04_llave", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_bancos_cuentas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_bancos_cuentas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_bancos_cuentas_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos_revisar", "field" => "cat_finanzas_bancos_cuentas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_cajas_chicas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_cajas_chicas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar.cat_finanzas_cajas_chicas_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos_revisar", "field" => "cat_finanzas_cajas_chicas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_facturas_sat_01.cat_compras_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_facturas_sat_01.cat_compras_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_facturas_sat_01.cat_compras_estatus_mu_id"]["edit"] = array("table" => "tr_compras_facturas_sat_01", "field" => "cat_compras_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_facturas_sat_01.cat_finanzas_cuentas_de_balance_04_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_facturas_sat_01.cat_finanzas_cuentas_de_balance_04_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_facturas_sat_01.cat_finanzas_cuentas_de_balance_04_id"]["edit"] = array("table" => "tr_compras_facturas_sat_01", "field" => "cat_finanzas_cuentas_de_balance_04_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_usuarios_box"] ) ) {
			$lookupTableLinks["cat_usuarios_box"] = array();
		}
		if( !isset( $lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_estatus.capturista_que_autoriza"] )) {
			$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_estatus.capturista_que_autoriza"] = array();
		}
		$lookupTableLinks["cat_usuarios_box"]["tr_compras_requisiciones_01_estatus.capturista_que_autoriza"]["edit"] = array("table" => "tr_compras_requisiciones_01_estatus", "field" => "capturista_que_autoriza", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_estatus.cat_trabajadores_altas_id_solicitante"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_estatus.cat_trabajadores_altas_id_solicitante"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_compras_requisiciones_01_estatus.cat_trabajadores_altas_id_solicitante"]["edit"] = array("table" => "tr_compras_requisiciones_01_estatus", "field" => "cat_trabajadores_altas_id_solicitante", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_01_estatus.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_01_estatus.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_compras_requisiciones_01_estatus.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_estatus", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_estatus.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_estatus.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_01_estatus.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_estatus", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_01_estatus.cat_finanzas_cuentas_de_balance_04_llave"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_01_estatus.cat_finanzas_cuentas_de_balance_04_llave"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_01_estatus.cat_finanzas_cuentas_de_balance_04_llave"]["edit"] = array("table" => "tr_compras_requisiciones_01_estatus", "field" => "cat_finanzas_cuentas_de_balance_04_llave", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_requisiciones_01_estatus.cat_finanzas_bancos_cuentas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_requisiciones_01_estatus.cat_finanzas_bancos_cuentas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_bancos_cuentas"]["tr_compras_requisiciones_01_estatus.cat_finanzas_bancos_cuentas_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_estatus", "field" => "cat_finanzas_bancos_cuentas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_requisiciones_01_estatus.cat_finanzas_cajas_chicas_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_requisiciones_01_estatus.cat_finanzas_cajas_chicas_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cajas_chicas"]["tr_compras_requisiciones_01_estatus.cat_finanzas_cajas_chicas_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_estatus", "field" => "cat_finanzas_cajas_chicas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_estatus.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_estatus.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_requisiciones_01_estatus.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_requisiciones_01_estatus", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_estatus.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_estatus.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_requisiciones_02_productos_estatus.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_estatus", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_estatus.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_estatus.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_requisiciones_02_productos_estatus.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_estatus", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_estatus.cat_finanzas_cuentas_de_balance_04_llave"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_estatus.cat_finanzas_cuentas_de_balance_04_llave"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_requisiciones_02_productos_estatus.cat_finanzas_cuentas_de_balance_04_llave"]["edit"] = array("table" => "tr_compras_requisiciones_02_productos_estatus", "field" => "cat_finanzas_cuentas_de_balance_04_llave", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu"] ) ) {
			$lookupTableLinks["cat_compras_estatus_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_facturas_sat_01_estatus.cat_compras_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_facturas_sat_01_estatus.cat_compras_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_estatus_mu"]["tr_compras_facturas_sat_01_estatus.cat_compras_estatus_mu_id"]["edit"] = array("table" => "tr_compras_facturas_sat_01_estatus", "field" => "cat_compras_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_facturas_sat_01_estatus.cat_finanzas_cuentas_de_balance_04_id"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_facturas_sat_01_estatus.cat_finanzas_cuentas_de_balance_04_id"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_facturas_sat_01_estatus.cat_finanzas_cuentas_de_balance_04_id"]["edit"] = array("table" => "tr_compras_facturas_sat_01_estatus", "field" => "cat_finanzas_cuentas_de_balance_04_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"] ) ) {
			$lookupTableLinks["box_cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos_edit", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"] ) ) {
			$lookupTableLinks["box_cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.nombre_proveedor"] )) {
			$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.nombre_proveedor"] = array();
		}
		$lookupTableLinks["box_cat_compras_proveedores"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.nombre_proveedor"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos_edit", "field" => "nombre_proveedor", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] ) ) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.cat_finanzas_cuentas_de_balance_04_llave"] )) {
			$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.cat_finanzas_cuentas_de_balance_04_llave"] = array();
		}
		$lookupTableLinks["box_cat_finanzas_cuentas_de_balance_04"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.cat_finanzas_cuentas_de_balance_04_llave"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos_edit", "field" => "cat_finanzas_cuentas_de_balance_04_llave", "page" => "edit");
		if( !isset( $lookupTableLinks["box_tr_compras_facturas_sat_01"] ) ) {
			$lookupTableLinks["box_tr_compras_facturas_sat_01"] = array();
		}
		if( !isset( $lookupTableLinks["box_tr_compras_facturas_sat_01"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.uuid_sat"] )) {
			$lookupTableLinks["box_tr_compras_facturas_sat_01"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.uuid_sat"] = array();
		}
		$lookupTableLinks["box_tr_compras_facturas_sat_01"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.uuid_sat"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos_edit", "field" => "uuid_sat", "page" => "edit");
		if( !isset( $lookupTableLinks["box_tr_finanzas_bancos"] ) ) {
			$lookupTableLinks["box_tr_finanzas_bancos"] = array();
		}
		if( !isset( $lookupTableLinks["box_tr_finanzas_bancos"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.tr_finanzas_bancos_01_id"] )) {
			$lookupTableLinks["box_tr_finanzas_bancos"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.tr_finanzas_bancos_01_id"] = array();
		}
		$lookupTableLinks["box_tr_finanzas_bancos"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit.tr_finanzas_bancos_01_id"]["edit"] = array("table" => "tr_compras_proveedores_01_cargos_abonos_pagos_edit", "field" => "tr_finanzas_bancos_01_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_cuentas_de_balance_03_mu"] ) ) {
			$lookupTableLinks["cat_finanzas_cuentas_de_balance_03_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_cuentas_de_balance_03_mu"]["cat_finanzas_cuentas_de_balance_5.cat_finanzas_cuentas_de_balance_03_mu_id"] )) {
			$lookupTableLinks["cat_finanzas_cuentas_de_balance_03_mu"]["cat_finanzas_cuentas_de_balance_5.cat_finanzas_cuentas_de_balance_03_mu_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_cuentas_de_balance_03_mu"]["cat_finanzas_cuentas_de_balance_5.cat_finanzas_cuentas_de_balance_03_mu_id"]["edit"] = array("table" => "cat_finanzas_cuentas_de_balance_5", "field" => "cat_finanzas_cuentas_de_balance_03_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_bancos_cuentas"] ) ) {
			$lookupTableLinks["cat_finanzas_bancos_cuentas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_bancos_cuentas"]["box_tr_finanzas_bancos.cat_finanzas_bancos_cuentas_id"] )) {
			$lookupTableLinks["cat_finanzas_bancos_cuentas"]["box_tr_finanzas_bancos.cat_finanzas_bancos_cuentas_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_bancos_cuentas"]["box_tr_finanzas_bancos.cat_finanzas_bancos_cuentas_id"]["edit"] = array("table" => "box_tr_finanzas_bancos", "field" => "cat_finanzas_bancos_cuentas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos"] ) ) {
			$lookupTableLinks["cat_finanzas_movimientos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_movimientos"]["box_tr_finanzas_bancos.cat_finanzas_movimientos_id"] )) {
			$lookupTableLinks["cat_finanzas_movimientos"]["box_tr_finanzas_bancos.cat_finanzas_movimientos_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_movimientos"]["box_tr_finanzas_bancos.cat_finanzas_movimientos_id"]["edit"] = array("table" => "box_tr_finanzas_bancos", "field" => "cat_finanzas_movimientos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_clientes"] ) ) {
			$lookupTableLinks["cat_ventas_clientes"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_clientes"]["box_tr_finanzas_bancos.cat_ventas_clientes_id"] )) {
			$lookupTableLinks["cat_ventas_clientes"]["box_tr_finanzas_bancos.cat_ventas_clientes_id"] = array();
		}
		$lookupTableLinks["cat_ventas_clientes"]["box_tr_finanzas_bancos.cat_ventas_clientes_id"]["edit"] = array("table" => "box_tr_finanzas_bancos", "field" => "cat_ventas_clientes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["box_tr_finanzas_bancos.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["box_tr_finanzas_bancos.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["box_tr_finanzas_bancos.cat_compras_proveedores_id"]["edit"] = array("table" => "box_tr_finanzas_bancos", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_temporadas"] ) ) {
			$lookupTableLinks["cat_produccion_temporadas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_temporadas"]["box_tr_finanzas_bancos.cat_produccion_temporadas_id"] )) {
			$lookupTableLinks["cat_produccion_temporadas"]["box_tr_finanzas_bancos.cat_produccion_temporadas_id"] = array();
		}
		$lookupTableLinks["cat_produccion_temporadas"]["box_tr_finanzas_bancos.cat_produccion_temporadas_id"]["edit"] = array("table" => "box_tr_finanzas_bancos", "field" => "cat_produccion_temporadas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_tags.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_tags.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_tags.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_tags", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_nominas_conceptos_clasificacion_mu"] ) ) {
			$lookupTableLinks["cat_nominas_conceptos_clasificacion_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_nominas_conceptos_clasificacion_mu"]["box_cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id"] )) {
			$lookupTableLinks["cat_nominas_conceptos_clasificacion_mu"]["box_cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id"] = array();
		}
		$lookupTableLinks["cat_nominas_conceptos_clasificacion_mu"]["box_cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id"]["edit"] = array("table" => "box_cat_nominas_conceptos", "field" => "cat_nominas_conceptos_clasificacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_horas_extras.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_horas_extras.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_horas_extras.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_horas_extras", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app_horas_extras.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app_horas_extras.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app_horas_extras.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_horas_extras", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_turnos"] ) ) {
			$lookupTableLinks["cat_actividades_turnos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_turnos"]["tr_actividades_asistencias_app_horas_extras.cat_actividades_turnos_id"] )) {
			$lookupTableLinks["cat_actividades_turnos"]["tr_actividades_asistencias_app_horas_extras.cat_actividades_turnos_id"] = array();
		}
		$lookupTableLinks["cat_actividades_turnos"]["tr_actividades_asistencias_app_horas_extras.cat_actividades_turnos_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_horas_extras", "field" => "cat_actividades_turnos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"] ) ) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_horas_extras.cat_actividades_ingreso_egreso_mu"] )) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_horas_extras.cat_actividades_ingreso_egreso_mu"] = array();
		}
		$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_horas_extras.cat_actividades_ingreso_egreso_mu"]["edit"] = array("table" => "tr_actividades_asistencias_app_horas_extras", "field" => "cat_actividades_ingreso_egreso_mu", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_tags_edit.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_tags_edit.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_tags_edit.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_tags_edit", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha.cat_trabajador_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha.cat_trabajador_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha.cat_trabajador_altas_id"]["edit"] = array("table" => "tr_actividades_cosecha", "field" => "cat_trabajador_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_cosecha", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_actividades_cosecha", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"] ) ) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id"] )) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id"] = array();
		}
		$lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id"]["edit"] = array("table" => "tr_actividades_cosecha", "field" => "cat_produccion_cultivos_01_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"] ) ) {
			$lookupTableLinks["box_cat_actividades_especificas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha.cat_actividades_especificas_id"] )) {
			$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha.cat_actividades_especificas_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha.cat_actividades_especificas_id"]["edit"] = array("table" => "tr_actividades_cosecha", "field" => "cat_actividades_especificas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_consecutivo.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_consecutivo.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_consecutivo.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_cosecha_consecutivo", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_consecutivo.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_consecutivo.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_consecutivo.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_actividades_cosecha_consecutivo", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"] ) ) {
			$lookupTableLinks["box_cat_actividades_especificas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_consecutivo.cat_actividades_especificas_id"] )) {
			$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_consecutivo.cat_actividades_especificas_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_consecutivo.cat_actividades_especificas_id"]["edit"] = array("table" => "tr_actividades_cosecha_consecutivo", "field" => "cat_actividades_especificas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_tabulador.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_tabulador.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_tabulador.cat_trabajadores_altas_id"]["edit"] = array("table" => "cat_trabajadores_tabulador", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_nominas_conceptos"] ) ) {
			$lookupTableLinks["box_cat_nominas_conceptos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_nominas_conceptos"]["cat_trabajadores_tabulador.cat_nominas_conceptos_id"] )) {
			$lookupTableLinks["box_cat_nominas_conceptos"]["cat_trabajadores_tabulador.cat_nominas_conceptos_id"] = array();
		}
		$lookupTableLinks["box_cat_nominas_conceptos"]["cat_trabajadores_tabulador.cat_nominas_conceptos_id"]["edit"] = array("table" => "cat_trabajadores_tabulador", "field" => "cat_nominas_conceptos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_02_empresas"] ) ) {
			$lookupTableLinks["cat_holding_02_empresas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_02_empresas"]["cat_trabajadores_tabulador.cat_holding_02_empresas_id"] )) {
			$lookupTableLinks["cat_holding_02_empresas"]["cat_trabajadores_tabulador.cat_holding_02_empresas_id"] = array();
		}
		$lookupTableLinks["cat_holding_02_empresas"]["cat_trabajadores_tabulador.cat_holding_02_empresas_id"]["edit"] = array("table" => "cat_trabajadores_tabulador", "field" => "cat_holding_02_empresas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_reingresos.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_reingresos.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_reingresos.cat_trabajadores_altas_id"]["edit"] = array("table" => "cat_trabajadores_reingresos", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_alta_baja_mu"] ) ) {
			$lookupTableLinks["cat_trabajadores_alta_baja_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_alta_baja_mu"]["cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id"] )) {
			$lookupTableLinks["cat_trabajadores_alta_baja_mu"]["cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_alta_baja_mu"]["cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id"]["edit"] = array("table" => "cat_trabajadores_reingresos", "field" => "cat_trabajadores_alta_baja_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["cat_nominas_02_trabajadores.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["cat_nominas_02_trabajadores.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["cat_nominas_02_trabajadores.cat_trabajadores_altas_id"]["edit"] = array("table" => "cat_nominas_02_trabajadores", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_nominas_dias_semana_mu"] ) ) {
			$lookupTableLinks["cat_nominas_dias_semana_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_nominas_dias_semana_mu"]["box_cat_nominas_01_generales.dia_de_inicio"] )) {
			$lookupTableLinks["cat_nominas_dias_semana_mu"]["box_cat_nominas_01_generales.dia_de_inicio"] = array();
		}
		$lookupTableLinks["cat_nominas_dias_semana_mu"]["box_cat_nominas_01_generales.dia_de_inicio"]["edit"] = array("table" => "box_cat_nominas_01_generales", "field" => "dia_de_inicio", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_nominas_periodicidad_mu"] ) ) {
			$lookupTableLinks["cat_nominas_periodicidad_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_nominas_periodicidad_mu"]["box_cat_nominas_01_generales.cat_nominas_periodicidad_mu_id"] )) {
			$lookupTableLinks["cat_nominas_periodicidad_mu"]["box_cat_nominas_01_generales.cat_nominas_periodicidad_mu_id"] = array();
		}
		$lookupTableLinks["cat_nominas_periodicidad_mu"]["box_cat_nominas_01_generales.cat_nominas_periodicidad_mu_id"]["edit"] = array("table" => "box_cat_nominas_01_generales", "field" => "cat_nominas_periodicidad_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_nominas_uuid_semana"] ) ) {
			$lookupTableLinks["box_cat_nominas_uuid_semana"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_nominas_uuid_semana"]["box_cat_nominas_01_generales.cat_nominas_uuid_semana"] )) {
			$lookupTableLinks["box_cat_nominas_uuid_semana"]["box_cat_nominas_01_generales.cat_nominas_uuid_semana"] = array();
		}
		$lookupTableLinks["box_cat_nominas_uuid_semana"]["box_cat_nominas_01_generales.cat_nominas_uuid_semana"]["edit"] = array("table" => "box_cat_nominas_01_generales", "field" => "cat_nominas_uuid_semana", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_nominas_uuid_semana"] ) ) {
			$lookupTableLinks["box_cat_nominas_uuid_semana"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_nominas_uuid_semana"]["box_cat_nominas_01_generales.llave_ano_semana_nominas_uuid"] )) {
			$lookupTableLinks["box_cat_nominas_uuid_semana"]["box_cat_nominas_01_generales.llave_ano_semana_nominas_uuid"] = array();
		}
		$lookupTableLinks["box_cat_nominas_uuid_semana"]["box_cat_nominas_01_generales.llave_ano_semana_nominas_uuid"]["edit"] = array("table" => "box_cat_nominas_01_generales", "field" => "llave_ano_semana_nominas_uuid", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_inf", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_inasistencias.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_inasistencias.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_inasistencias.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_inf_inasistencias", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_consecutivo_query.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_consecutivo_query.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_consecutivo_query.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_cosecha_consecutivo_query", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_consecutivo_query.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_consecutivo_query.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_consecutivo_query.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_actividades_cosecha_consecutivo_query", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"] ) ) {
			$lookupTableLinks["box_cat_actividades_especificas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_consecutivo_query.cat_actividades_especificas_id"] )) {
			$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_consecutivo_query.cat_actividades_especificas_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_consecutivo_query.cat_actividades_especificas_id"]["edit"] = array("table" => "tr_actividades_cosecha_consecutivo_query", "field" => "cat_actividades_especificas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_puestos_historico.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_puestos_historico.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_puestos_historico.cat_trabajadores_altas_id"]["edit"] = array("table" => "cat_trabajadores_puestos_historico", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"] ) ) {
			$lookupTableLinks["cat_trabajadores_puestos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id"] )) {
			$lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id"]["edit"] = array("table" => "cat_trabajadores_puestos_historico", "field" => "cat_trabajadores_puestos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"] ) ) {
			$lookupTableLinks["box_cat_actividades_especificas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_consecutivo_detalle.cat_actividades_especificas_id"] )) {
			$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_consecutivo_detalle.cat_actividades_especificas_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_consecutivo_detalle.cat_actividades_especificas_id"]["edit"] = array("table" => "tr_actividades_cosecha_consecutivo_detalle", "field" => "cat_actividades_especificas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha_consecutivo_detalle.cat_trabajador_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha_consecutivo_detalle.cat_trabajador_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha_consecutivo_detalle.cat_trabajador_altas_id"]["edit"] = array("table" => "tr_actividades_cosecha_consecutivo_detalle", "field" => "cat_trabajador_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_horas_extras.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_horas_extras.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_horas_extras.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_inf_horas_extras", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"] ) ) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_inf_horas_extras.cat_actividades_ingreso_egreso_mu"] )) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_inf_horas_extras.cat_actividades_ingreso_egreso_mu"] = array();
		}
		$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_inf_horas_extras.cat_actividades_ingreso_egreso_mu"]["edit"] = array("table" => "tr_actividades_asistencias_app_inf_horas_extras", "field" => "cat_actividades_ingreso_egreso_mu", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha_query.cat_trabajador_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha_query.cat_trabajador_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha_query.cat_trabajador_altas_id"]["edit"] = array("table" => "tr_actividades_cosecha_query", "field" => "cat_trabajador_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_query.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_query.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_query.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_cosecha_query", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_query.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_query.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_query.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_actividades_cosecha_query", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"] ) ) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha_query.cat_produccion_cultivos_01_productos_id"] )) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha_query.cat_produccion_cultivos_01_productos_id"] = array();
		}
		$lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha_query.cat_produccion_cultivos_01_productos_id"]["edit"] = array("table" => "tr_actividades_cosecha_query", "field" => "cat_produccion_cultivos_01_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"] ) ) {
			$lookupTableLinks["box_cat_actividades_especificas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_query.cat_actividades_especificas_id"] )) {
			$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_query.cat_actividades_especificas_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_especificas"]["tr_actividades_cosecha_query.cat_actividades_especificas_id"]["edit"] = array("table" => "tr_actividades_cosecha_query", "field" => "cat_actividades_especificas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_horas_turno_vespertino.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_horas_turno_vespertino.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_horas_turno_vespertino.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_inf_horas_turno_vespertino", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_horas_extras_sab_dom.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_horas_extras_sab_dom.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_inf_horas_extras_sab_dom.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_inf_horas_extras_sab_dom", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"] ) ) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_inf_horas_extras_sab_dom.cat_actividades_ingreso_egreso_mu"] )) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_inf_horas_extras_sab_dom.cat_actividades_ingreso_egreso_mu"] = array();
		}
		$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_inf_horas_extras_sab_dom.cat_actividades_ingreso_egreso_mu"]["edit"] = array("table" => "tr_actividades_asistencias_app_inf_horas_extras_sab_dom", "field" => "cat_actividades_ingreso_egreso_mu", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_por_predio_query.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_por_predio_query.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_por_predio_query.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_por_predio_query", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app_por_predio_query.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app_por_predio_query.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_asistencias_app_por_predio_query.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_por_predio_query", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_actividades_turnos"] ) ) {
			$lookupTableLinks["box_cat_actividades_turnos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_actividades_turnos"]["tr_actividades_asistencias_app_por_predio_query.cat_actividades_turnos_id"] )) {
			$lookupTableLinks["box_cat_actividades_turnos"]["tr_actividades_asistencias_app_por_predio_query.cat_actividades_turnos_id"] = array();
		}
		$lookupTableLinks["box_cat_actividades_turnos"]["tr_actividades_asistencias_app_por_predio_query.cat_actividades_turnos_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_por_predio_query", "field" => "cat_actividades_turnos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"] ) ) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_por_predio_query.cat_actividades_ingreso_egreso_mu"] )) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_por_predio_query.cat_actividades_ingreso_egreso_mu"] = array();
		}
		$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_por_predio_query.cat_actividades_ingreso_egreso_mu"]["edit"] = array("table" => "tr_actividades_asistencias_app_por_predio_query", "field" => "cat_actividades_ingreso_egreso_mu", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_up_group_predios"] ) ) {
			$lookupTableLinks["cat_holding_03_empresas_up_group_predios"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_up_group_predios"]["tr_actividades_asistencias_app_por_predio_query.cat_holding_03_empresas_up_group_predios_id"] )) {
			$lookupTableLinks["cat_holding_03_empresas_up_group_predios"]["tr_actividades_asistencias_app_por_predio_query.cat_holding_03_empresas_up_group_predios_id"] = array();
		}
		$lookupTableLinks["cat_holding_03_empresas_up_group_predios"]["tr_actividades_asistencias_app_por_predio_query.cat_holding_03_empresas_up_group_predios_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_por_predio_query", "field" => "cat_holding_03_empresas_up_group_predios_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"] ) ) {
			$lookupTableLinks["cat_trabajadores_puestos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_altas1.cat_trabajadores_puestos_id"] )) {
			$lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_altas1.cat_trabajadores_puestos_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_altas1.cat_trabajadores_puestos_id"]["edit"] = array("table" => "cat_trabajadores_altas1", "field" => "cat_trabajadores_puestos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_sexo_mu"] ) ) {
			$lookupTableLinks["cat_trabajadores_sexo_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_sexo_mu"]["cat_trabajadores_altas1.cat_trabajadores_sexo_mu_id"] )) {
			$lookupTableLinks["cat_trabajadores_sexo_mu"]["cat_trabajadores_altas1.cat_trabajadores_sexo_mu_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_sexo_mu"]["cat_trabajadores_altas1.cat_trabajadores_sexo_mu_id"]["edit"] = array("table" => "cat_trabajadores_altas1", "field" => "cat_trabajadores_sexo_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_estado_civil_mu"] ) ) {
			$lookupTableLinks["cat_trabajadores_estado_civil_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_estado_civil_mu"]["cat_trabajadores_altas1.cat_trabajadores_estado_civil_mu_id"] )) {
			$lookupTableLinks["cat_trabajadores_estado_civil_mu"]["cat_trabajadores_altas1.cat_trabajadores_estado_civil_mu_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_estado_civil_mu"]["cat_trabajadores_altas1.cat_trabajadores_estado_civil_mu_id"]["edit"] = array("table" => "cat_trabajadores_altas1", "field" => "cat_trabajadores_estado_civil_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_sangre_mu"] ) ) {
			$lookupTableLinks["cat_trabajadores_sangre_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_sangre_mu"]["cat_trabajadores_altas1.cat_trabajadores_sangre_mu_id"] )) {
			$lookupTableLinks["cat_trabajadores_sangre_mu"]["cat_trabajadores_altas1.cat_trabajadores_sangre_mu_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_sangre_mu"]["cat_trabajadores_altas1.cat_trabajadores_sangre_mu_id"]["edit"] = array("table" => "cat_trabajadores_altas1", "field" => "cat_trabajadores_sangre_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_local_foraneo_mu"] ) ) {
			$lookupTableLinks["cat_trabajadores_local_foraneo_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_local_foraneo_mu"]["cat_trabajadores_altas1.cat_trabajadores_local_foraneo_mu_id"] )) {
			$lookupTableLinks["cat_trabajadores_local_foraneo_mu"]["cat_trabajadores_altas1.cat_trabajadores_local_foraneo_mu_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_local_foraneo_mu"]["cat_trabajadores_altas1.cat_trabajadores_local_foraneo_mu_id"]["edit"] = array("table" => "cat_trabajadores_altas1", "field" => "cat_trabajadores_local_foraneo_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_forma_de_pago_mu"] ) ) {
			$lookupTableLinks["cat_actividades_forma_de_pago_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_forma_de_pago_mu"]["cat_trabajadores_altas1.cat_trabajadores_tipo_de_pago_id"] )) {
			$lookupTableLinks["cat_actividades_forma_de_pago_mu"]["cat_trabajadores_altas1.cat_trabajadores_tipo_de_pago_id"] = array();
		}
		$lookupTableLinks["cat_actividades_forma_de_pago_mu"]["cat_trabajadores_altas1.cat_trabajadores_tipo_de_pago_id"]["edit"] = array("table" => "cat_trabajadores_altas1", "field" => "cat_trabajadores_tipo_de_pago_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_02_empresas"] ) ) {
			$lookupTableLinks["cat_holding_02_empresas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_02_empresas"]["cat_trabajadores_altas1.cat_holding_02_empresas"] )) {
			$lookupTableLinks["cat_holding_02_empresas"]["cat_trabajadores_altas1.cat_holding_02_empresas"] = array();
		}
		$lookupTableLinks["cat_holding_02_empresas"]["cat_trabajadores_altas1.cat_holding_02_empresas"]["edit"] = array("table" => "cat_trabajadores_altas1", "field" => "cat_holding_02_empresas", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_nominas_01_generales"] ) ) {
			$lookupTableLinks["box_cat_nominas_01_generales"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_nominas_01_generales"]["cat_trabajadores_altas1.cat_nominas_01_generales_uuid"] )) {
			$lookupTableLinks["box_cat_nominas_01_generales"]["cat_trabajadores_altas1.cat_nominas_01_generales_uuid"] = array();
		}
		$lookupTableLinks["box_cat_nominas_01_generales"]["cat_trabajadores_altas1.cat_nominas_01_generales_uuid"]["edit"] = array("table" => "cat_trabajadores_altas1", "field" => "cat_nominas_01_generales_uuid", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_puestos_historico_query.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_puestos_historico_query.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_puestos_historico_query.cat_trabajadores_altas_id"]["edit"] = array("table" => "cat_trabajadores_puestos_historico_query", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"] ) ) {
			$lookupTableLinks["cat_trabajadores_puestos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_puestos_historico_query.cat_trabajadores_puestos_id"] )) {
			$lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_puestos_historico_query.cat_trabajadores_puestos_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_puestos_historico_query.cat_trabajadores_puestos_id"]["edit"] = array("table" => "cat_trabajadores_puestos_historico_query", "field" => "cat_trabajadores_puestos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha1borrar.cat_trabajador_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha1borrar.cat_trabajador_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha1borrar.cat_trabajador_altas_id"]["edit"] = array("table" => "tr_actividades_cosecha1borrar", "field" => "cat_trabajador_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"] ) ) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha1borrar.cat_produccion_cultivos_01_productos_id"] )) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha1borrar.cat_produccion_cultivos_01_productos_id"] = array();
		}
		$lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha1borrar.cat_produccion_cultivos_01_productos_id"]["edit"] = array("table" => "tr_actividades_cosecha1borrar", "field" => "cat_produccion_cultivos_01_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_almacenes"] ) ) {
			$lookupTableLinks["cat_compras_almacenes"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_almacenes_id"] )) {
			$lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_almacenes_id"] = array();
		}
		$lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_almacenes_id"]["edit"] = array("table" => "tr_compras_almacenes_01_recibo_lpn", "field" => "cat_compras_almacenes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_proveedores_id"]["edit"] = array("table" => "tr_compras_almacenes_01_recibo_lpn", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_01_recibo_lpn", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_almacenes_estatus_mu"] ) ) {
			$lookupTableLinks["cat_compras_almacenes_estatus_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_almacenes_estatus_mu"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_almacenes_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_almacenes_estatus_mu"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_almacenes_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_almacenes_estatus_mu"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_almacenes_estatus_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_01_recibo_lpn", "field" => "cat_compras_almacenes_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_almacenes_tipo_de_recibo_mu"] ) ) {
			$lookupTableLinks["cat_compras_almacenes_tipo_de_recibo_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_almacenes_tipo_de_recibo_mu"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_almacenes_tipo_de_recibo_mu_id"] )) {
			$lookupTableLinks["cat_compras_almacenes_tipo_de_recibo_mu"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_almacenes_tipo_de_recibo_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_almacenes_tipo_de_recibo_mu"]["tr_compras_almacenes_01_recibo_lpn.cat_compras_almacenes_tipo_de_recibo_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_01_recibo_lpn", "field" => "cat_compras_almacenes_tipo_de_recibo_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_almacenes"] ) ) {
			$lookupTableLinks["cat_compras_almacenes"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_id"] )) {
			$lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_id"] = array();
		}
		$lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_id"]["edit"] = array("table" => "tr_compras_almacenes_01_salida_lpn", "field" => "cat_compras_almacenes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_almacenes_01_salida_lpn.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_almacenes_01_salida_lpn.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_almacenes_01_salida_lpn.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_01_salida_lpn", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_almacenes_estatus_mu"] ) ) {
			$lookupTableLinks["cat_compras_almacenes_estatus_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_almacenes_estatus_mu"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_estatus_mu_id"] )) {
			$lookupTableLinks["cat_compras_almacenes_estatus_mu"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_estatus_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_almacenes_estatus_mu"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_estatus_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_01_salida_lpn", "field" => "cat_compras_almacenes_estatus_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_almacenes_tipo_de_salida_mu"] ) ) {
			$lookupTableLinks["cat_compras_almacenes_tipo_de_salida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_almacenes_tipo_de_salida_mu"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_tipo_de_salida_mu_id"] )) {
			$lookupTableLinks["cat_compras_almacenes_tipo_de_salida_mu"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_tipo_de_salida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_almacenes_tipo_de_salida_mu"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_tipo_de_salida_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_01_salida_lpn", "field" => "cat_compras_almacenes_tipo_de_salida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_almacenes"] ) ) {
			$lookupTableLinks["cat_compras_almacenes"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_id_destino"] )) {
			$lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_id_destino"] = array();
		}
		$lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_salida_lpn.cat_compras_almacenes_id_destino"]["edit"] = array("table" => "tr_compras_almacenes_01_salida_lpn", "field" => "cat_compras_almacenes_id_destino", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_02_salida_productos.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_02_salida_productos.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_02_salida_productos.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_almacenes_02_salida_productos", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_almacenes_02_salida_productos.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_almacenes_02_salida_productos.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_almacenes_02_salida_productos.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_02_salida_productos", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_puestos_historico1borrar.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_puestos_historico1borrar.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["cat_trabajadores_puestos_historico1borrar.cat_trabajadores_altas_id"]["edit"] = array("table" => "cat_trabajadores_puestos_historico1borrar", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"] ) ) {
			$lookupTableLinks["cat_trabajadores_puestos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_puestos_historico1borrar.cat_trabajadores_puestos_id"] )) {
			$lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_puestos_historico1borrar.cat_trabajadores_puestos_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_puestos"]["cat_trabajadores_puestos_historico1borrar.cat_trabajadores_puestos_id"]["edit"] = array("table" => "cat_trabajadores_puestos_historico1borrar", "field" => "cat_trabajadores_puestos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"] ) ) {
			$lookupTableLinks["cat_compras_documentos_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_almacenes_01_salida_lpn1borrar.cat_compras_documentos_mu_id"] )) {
			$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_almacenes_01_salida_lpn1borrar.cat_compras_documentos_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_documentos_mu"]["tr_compras_almacenes_01_salida_lpn1borrar.cat_compras_documentos_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_01_salida_lpn1borrar", "field" => "cat_compras_documentos_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_almacenes"] ) ) {
			$lookupTableLinks["cat_compras_almacenes"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_salida_lpn1borrar.cat_compras_almacenes_id_destino"] )) {
			$lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_salida_lpn1borrar.cat_compras_almacenes_id_destino"] = array();
		}
		$lookupTableLinks["cat_compras_almacenes"]["tr_compras_almacenes_01_salida_lpn1borrar.cat_compras_almacenes_id_destino"]["edit"] = array("table" => "tr_compras_almacenes_01_salida_lpn1borrar", "field" => "cat_compras_almacenes_id_destino", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_compras_productos"] ) ) {
			$lookupTableLinks["box_cat_compras_productos"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_02_salida_productos1borrar.cat_compras_productos_id"] )) {
			$lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_02_salida_productos1borrar.cat_compras_productos_id"] = array();
		}
		$lookupTableLinks["box_cat_compras_productos"]["tr_compras_almacenes_02_salida_productos1borrar.cat_compras_productos_id"]["edit"] = array("table" => "tr_compras_almacenes_02_salida_productos1borrar", "field" => "cat_compras_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_almacenes_02_salida_productos1borrar.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_almacenes_02_salida_productos1borrar.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["tr_compras_almacenes_02_salida_productos1borrar.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "tr_compras_almacenes_02_salida_productos1borrar", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"] ) ) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"]["cat_holding_04a_unidades_productivas_lotes_historico.cat_produccion_cultivos_01_productos_id"] )) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"]["cat_holding_04a_unidades_productivas_lotes_historico.cat_produccion_cultivos_01_productos_id"] = array();
		}
		$lookupTableLinks["cat_produccion_cultivos_01_productos"]["cat_holding_04a_unidades_productivas_lotes_historico.cat_produccion_cultivos_01_productos_id"]["edit"] = array("table" => "cat_holding_04a_unidades_productivas_lotes_historico", "field" => "cat_produccion_cultivos_01_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_variedades"] ) ) {
			$lookupTableLinks["cat_produccion_variedades"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_variedades"]["cat_holding_04a_unidades_productivas_lotes_historico.cat_produccion_cultivos_01_variedades_id"] )) {
			$lookupTableLinks["cat_produccion_variedades"]["cat_holding_04a_unidades_productivas_lotes_historico.cat_produccion_cultivos_01_variedades_id"] = array();
		}
		$lookupTableLinks["cat_produccion_variedades"]["cat_holding_04a_unidades_productivas_lotes_historico.cat_produccion_cultivos_01_variedades_id"]["edit"] = array("table" => "cat_holding_04a_unidades_productivas_lotes_historico", "field" => "cat_produccion_cultivos_01_variedades_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_04_unidades_productivas_lotes"]["cat_holding_04a_unidades_productivas_lotes_historico.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["cat_holding_04_unidades_productivas_lotes"]["cat_holding_04a_unidades_productivas_lotes_historico.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["cat_holding_04_unidades_productivas_lotes"]["cat_holding_04a_unidades_productivas_lotes_historico.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "cat_holding_04a_unidades_productivas_lotes_historico", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"] ) ) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_horas_extras_borrar.cat_actividades_ingreso_egreso_mu"] )) {
			$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_horas_extras_borrar.cat_actividades_ingreso_egreso_mu"] = array();
		}
		$lookupTableLinks["cat_actividades_ingreso_egreso_mu"]["tr_actividades_asistencias_app_horas_extras_borrar.cat_actividades_ingreso_egreso_mu"]["edit"] = array("table" => "tr_actividades_asistencias_app_horas_extras_borrar", "field" => "cat_actividades_ingreso_egreso_mu", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_horas_extras_borrar.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_horas_extras_borrar.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_asistencias_app_horas_extras_borrar.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_asistencias_app_horas_extras_borrar", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos"] ) ) {
			$lookupTableLinks["cat_ventas_productos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos"]["cat_ventas_productos_variedades.cat_ventas_productos_id"] )) {
			$lookupTableLinks["cat_ventas_productos"]["cat_ventas_productos_variedades.cat_ventas_productos_id"] = array();
		}
		$lookupTableLinks["cat_ventas_productos"]["cat_ventas_productos_variedades.cat_ventas_productos_id"]["edit"] = array("table" => "cat_ventas_productos_variedades", "field" => "cat_ventas_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_categorias"] ) ) {
			$lookupTableLinks["cat_compras_productos_categorias"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_categorias"]["cat_compras_productos1.cat_compras_productos_categorias_id"] )) {
			$lookupTableLinks["cat_compras_productos_categorias"]["cat_compras_productos1.cat_compras_productos_categorias_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_categorias"]["cat_compras_productos1.cat_compras_productos_categorias_id"]["edit"] = array("table" => "cat_compras_productos1", "field" => "cat_compras_productos_categorias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_proveedores"] ) ) {
			$lookupTableLinks["cat_compras_proveedores"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_proveedores"]["cat_compras_productos1.cat_compras_proveedores_id"] )) {
			$lookupTableLinks["cat_compras_proveedores"]["cat_compras_productos1.cat_compras_proveedores_id"] = array();
		}
		$lookupTableLinks["cat_compras_proveedores"]["cat_compras_productos1.cat_compras_proveedores_id"]["edit"] = array("table" => "cat_compras_productos1", "field" => "cat_compras_proveedores_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_presentacion_mu"]["cat_compras_productos1.cat_compras_productos_presentacion_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_presentacion_mu"]["cat_compras_productos1.cat_compras_productos_presentacion_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_presentacion_mu"]["cat_compras_productos1.cat_compras_productos_presentacion_mu_id"]["edit"] = array("table" => "cat_compras_productos1", "field" => "cat_compras_productos_presentacion_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] ) ) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["cat_compras_productos1.cat_compras_productos_unidad_de_medida_mu_id"] )) {
			$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["cat_compras_productos1.cat_compras_productos_unidad_de_medida_mu_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_unidad_de_medida_mu"]["cat_compras_productos1.cat_compras_productos_unidad_de_medida_mu_id"]["edit"] = array("table" => "cat_compras_productos1", "field" => "cat_compras_productos_unidad_de_medida_mu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_compras_productos_permitidos"] ) ) {
			$lookupTableLinks["cat_compras_productos_permitidos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_compras_productos_permitidos"]["cat_compras_productos1.cat_compras_productos_permitidos_id"] )) {
			$lookupTableLinks["cat_compras_productos_permitidos"]["cat_compras_productos1.cat_compras_productos_permitidos_id"] = array();
		}
		$lookupTableLinks["cat_compras_productos_permitidos"]["cat_compras_productos1.cat_compras_productos_permitidos_id"]["edit"] = array("table" => "cat_compras_productos1", "field" => "cat_compras_productos_permitidos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_control_aplicaciones_campo_tipo_de_control"] ) ) {
			$lookupTableLinks["cat_control_aplicaciones_campo_tipo_de_control"] = array();
		}
		if( !isset( $lookupTableLinks["cat_control_aplicaciones_campo_tipo_de_control"]["cat_compras_productos1.cat_control_aplicaciones_campo_tipo_de_control_id"] )) {
			$lookupTableLinks["cat_control_aplicaciones_campo_tipo_de_control"]["cat_compras_productos1.cat_control_aplicaciones_campo_tipo_de_control_id"] = array();
		}
		$lookupTableLinks["cat_control_aplicaciones_campo_tipo_de_control"]["cat_compras_productos1.cat_control_aplicaciones_campo_tipo_de_control_id"]["edit"] = array("table" => "cat_compras_productos1", "field" => "cat_control_aplicaciones_campo_tipo_de_control_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_ventas_almacenes_01_up_salidas_lpn.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_ventas_almacenes_01_up_salidas_lpn.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_ventas_almacenes_01_up_salidas_lpn.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_ventas_almacenes_01_up_salidas_lpn", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_ventas_almacenes_01_up_salidas_lpn.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_ventas_almacenes_01_up_salidas_lpn.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_ventas_almacenes_01_up_salidas_lpn.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_ventas_almacenes_01_up_salidas_lpn", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos"] ) ) {
			$lookupTableLinks["cat_ventas_productos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos"]["box_cat_ventas_productos_variedades.cat_ventas_productos_id"] )) {
			$lookupTableLinks["cat_ventas_productos"]["box_cat_ventas_productos_variedades.cat_ventas_productos_id"] = array();
		}
		$lookupTableLinks["cat_ventas_productos"]["box_cat_ventas_productos_variedades.cat_ventas_productos_id"]["edit"] = array("table" => "box_cat_ventas_productos_variedades", "field" => "cat_ventas_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_up_group_predios"] ) ) {
			$lookupTableLinks["cat_holding_03_empresas_up_group_predios"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_up_group_predios"]["tr_actividades_cosecha_salidas_02.cat_holding_03_empresas_up_group_predios_id"] )) {
			$lookupTableLinks["cat_holding_03_empresas_up_group_predios"]["tr_actividades_cosecha_salidas_02.cat_holding_03_empresas_up_group_predios_id"] = array();
		}
		$lookupTableLinks["cat_holding_03_empresas_up_group_predios"]["tr_actividades_cosecha_salidas_02.cat_holding_03_empresas_up_group_predios_id"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_02", "field" => "cat_holding_03_empresas_up_group_predios_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_salidas_02.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_salidas_02.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_salidas_02.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_02", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] ) ) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_salidas_02.cat_holding_04_unidades_productivas_lotes_id"] )) {
			$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_salidas_02.cat_holding_04_unidades_productivas_lotes_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_04_unidades_productivas_lotes"]["tr_actividades_cosecha_salidas_02.cat_holding_04_unidades_productivas_lotes_id"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_02", "field" => "cat_holding_04_unidades_productivas_lotes_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos_sku"] ) ) {
			$lookupTableLinks["cat_ventas_productos_sku"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos_sku"]["tr_actividades_cosecha_salidas_02.cat_ventas_productos_sku_id"] )) {
			$lookupTableLinks["cat_ventas_productos_sku"]["tr_actividades_cosecha_salidas_02.cat_ventas_productos_sku_id"] = array();
		}
		$lookupTableLinks["cat_ventas_productos_sku"]["tr_actividades_cosecha_salidas_02.cat_ventas_productos_sku_id"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_02", "field" => "cat_ventas_productos_sku_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"] ) ) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha_salidas_02.cat_produccion_cultivos_01_productos_id"] )) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha_salidas_02.cat_produccion_cultivos_01_productos_id"] = array();
		}
		$lookupTableLinks["cat_produccion_cultivos_01_productos"]["tr_actividades_cosecha_salidas_02.cat_produccion_cultivos_01_productos_id"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_02", "field" => "cat_produccion_cultivos_01_productos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_variedades"] ) ) {
			$lookupTableLinks["cat_produccion_variedades"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_variedades"]["tr_actividades_cosecha_salidas_02.cat_produccion_variedades_id"] )) {
			$lookupTableLinks["cat_produccion_variedades"]["tr_actividades_cosecha_salidas_02.cat_produccion_variedades_id"] = array();
		}
		$lookupTableLinks["cat_produccion_variedades"]["tr_actividades_cosecha_salidas_02.cat_produccion_variedades_id"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_02", "field" => "cat_produccion_variedades_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos_status_recibo"] ) ) {
			$lookupTableLinks["cat_ventas_productos_status_recibo"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos_status_recibo"]["tr_actividades_cosecha_salidas_02.status_recibo"] )) {
			$lookupTableLinks["cat_ventas_productos_status_recibo"]["tr_actividades_cosecha_salidas_02.status_recibo"] = array();
		}
		$lookupTableLinks["cat_ventas_productos_status_recibo"]["tr_actividades_cosecha_salidas_02.status_recibo"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_02", "field" => "status_recibo", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos_status_recibo"] ) ) {
			$lookupTableLinks["cat_ventas_productos_status_recibo"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos_status_recibo"]["tr_actividades_cosecha_salidas_02.status_recibo_motivo"] )) {
			$lookupTableLinks["cat_ventas_productos_status_recibo"]["tr_actividades_cosecha_salidas_02.status_recibo_motivo"] = array();
		}
		$lookupTableLinks["cat_ventas_productos_status_recibo"]["tr_actividades_cosecha_salidas_02.status_recibo_motivo"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_02", "field" => "status_recibo_motivo", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_salidas_01_quey_glori.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_salidas_01_quey_glori.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["box_cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_salidas_01_quey_glori.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_01 quey glori", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["box_cat_trabajadores"] ) ) {
			$lookupTableLinks["box_cat_trabajadores"] = array();
		}
		if( !isset( $lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha_salidas_01_quey_glori.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha_salidas_01_quey_glori.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["box_cat_trabajadores"]["tr_actividades_cosecha_salidas_01_quey_glori.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_01 quey glori", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_unidades_productivas"] ) ) {
			$lookupTableLinks["cat_holding_03_empresas_unidades_productivas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_salidas_01.cat_holding_03_empresas_unidades_productivas_id"] )) {
			$lookupTableLinks["cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_salidas_01.cat_holding_03_empresas_unidades_productivas_id"] = array();
		}
		$lookupTableLinks["cat_holding_03_empresas_unidades_productivas"]["tr_actividades_cosecha_salidas_01.cat_holding_03_empresas_unidades_productivas_id"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_01", "field" => "cat_holding_03_empresas_unidades_productivas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_altas"] ) ) {
			$lookupTableLinks["cat_trabajadores_altas"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_altas"]["tr_actividades_cosecha_salidas_01.cat_trabajadores_altas_id"] )) {
			$lookupTableLinks["cat_trabajadores_altas"]["tr_actividades_cosecha_salidas_01.cat_trabajadores_altas_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_altas"]["tr_actividades_cosecha_salidas_01.cat_trabajadores_altas_id"]["edit"] = array("table" => "tr_actividades_cosecha_salidas_01", "field" => "cat_trabajadores_altas_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"] ) ) {
			$lookupTableLinks["cat_trabajadores_puestos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"]["aux_puestos_horarios.cat_trabajadores_puestos_id"] )) {
			$lookupTableLinks["cat_trabajadores_puestos"]["aux_puestos_horarios.cat_trabajadores_puestos_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_puestos"]["aux_puestos_horarios.cat_trabajadores_puestos_id"]["edit"] = array("table" => "aux_puestos_horarios", "field" => "cat_trabajadores_puestos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["aux_horarios"] ) ) {
			$lookupTableLinks["aux_horarios"] = array();
		}
		if( !isset( $lookupTableLinks["aux_horarios"]["aux_puestos_horarios.aux_horarios_id"] )) {
			$lookupTableLinks["aux_horarios"]["aux_puestos_horarios.aux_horarios_id"] = array();
		}
		$lookupTableLinks["aux_horarios"]["aux_puestos_horarios.aux_horarios_id"]["edit"] = array("table" => "aux_puestos_horarios", "field" => "aux_horarios_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_nominas_incidencias_mu"] ) ) {
			$lookupTableLinks["cat_nominas_incidencias_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_nominas_incidencias_mu"]["aux_incidencias_justificables.cat_nominas_incidencias_id"] )) {
			$lookupTableLinks["cat_nominas_incidencias_mu"]["aux_incidencias_justificables.cat_nominas_incidencias_id"] = array();
		}
		$lookupTableLinks["cat_nominas_incidencias_mu"]["aux_incidencias_justificables.cat_nominas_incidencias_id"]["edit"] = array("table" => "aux_incidencias_justificables", "field" => "cat_nominas_incidencias_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"] ) ) {
			$lookupTableLinks["cat_trabajadores_puestos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_trabajadores_puestos"]["puestos_horarios.cat_trabajadores_puestos_id"] )) {
			$lookupTableLinks["cat_trabajadores_puestos"]["puestos_horarios.cat_trabajadores_puestos_id"] = array();
		}
		$lookupTableLinks["cat_trabajadores_puestos"]["puestos_horarios.cat_trabajadores_puestos_id"]["edit"] = array("table" => "puestos horarios", "field" => "cat_trabajadores_puestos_id", "page" => "edit");
		if( !isset( $lookupTableLinks["aux_horarios"] ) ) {
			$lookupTableLinks["aux_horarios"] = array();
		}
		if( !isset( $lookupTableLinks["aux_horarios"]["puestos_horarios.aux_horarios_id"] )) {
			$lookupTableLinks["aux_horarios"]["puestos_horarios.aux_horarios_id"] = array();
		}
		$lookupTableLinks["aux_horarios"]["puestos_horarios.aux_horarios_id"]["edit"] = array("table" => "puestos horarios", "field" => "aux_horarios_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_ventas_productos_sku"] ) ) {
			$lookupTableLinks["cat_ventas_productos_sku"] = array();
		}
		if( !isset( $lookupTableLinks["cat_ventas_productos_sku"]["cat_ventas_productos_precios.cat_ventas_productos_sku_id"] )) {
			$lookupTableLinks["cat_ventas_productos_sku"]["cat_ventas_productos_precios.cat_ventas_productos_sku_id"] = array();
		}
		$lookupTableLinks["cat_ventas_productos_sku"]["cat_ventas_productos_precios.cat_ventas_productos_sku_id"]["edit"] = array("table" => "cat_ventas_productos_precios", "field" => "cat_ventas_productos_sku_id", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"] ) ) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"] = array();
		}
		if( !isset( $lookupTableLinks["cat_produccion_cultivos_01_productos"]["cat_ventas_productos_precios.cat_produccion_cultivos_01"] )) {
			$lookupTableLinks["cat_produccion_cultivos_01_productos"]["cat_ventas_productos_precios.cat_produccion_cultivos_01"] = array();
		}
		$lookupTableLinks["cat_produccion_cultivos_01_productos"]["cat_ventas_productos_precios.cat_produccion_cultivos_01"]["edit"] = array("table" => "cat_ventas_productos_precios", "field" => "cat_produccion_cultivos_01", "page" => "edit");
		if( !isset( $lookupTableLinks["cat_finanzas_monedas_mu"] ) ) {
			$lookupTableLinks["cat_finanzas_monedas_mu"] = array();
		}
		if( !isset( $lookupTableLinks["cat_finanzas_monedas_mu"]["cat_ventas_productos_precios.cat_finanzas_monedas_mu_id"] )) {
			$lookupTableLinks["cat_finanzas_monedas_mu"]["cat_ventas_productos_precios.cat_finanzas_monedas_mu_id"] = array();
		}
		$lookupTableLinks["cat_finanzas_monedas_mu"]["cat_ventas_productos_precios.cat_finanzas_monedas_mu_id"]["edit"] = array("table" => "cat_ventas_productos_precios", "field" => "cat_finanzas_monedas_mu_id", "page" => "edit");
}

?>