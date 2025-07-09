<?php
$tdatabox_tr_finanzas_bancos = array();
$tdatabox_tr_finanzas_bancos[".searchableFields"] = array();
$tdatabox_tr_finanzas_bancos[".ShortName"] = "box_tr_finanzas_bancos";
$tdatabox_tr_finanzas_bancos[".OwnerID"] = "";
$tdatabox_tr_finanzas_bancos[".OriginalTable"] = "tr_finanzas_bancos_01";


$tdatabox_tr_finanzas_bancos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatabox_tr_finanzas_bancos[".originalPagesByType"] = $tdatabox_tr_finanzas_bancos[".pagesByType"];
$tdatabox_tr_finanzas_bancos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatabox_tr_finanzas_bancos[".originalPages"] = $tdatabox_tr_finanzas_bancos[".pages"];
$tdatabox_tr_finanzas_bancos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatabox_tr_finanzas_bancos[".originalDefaultPages"] = $tdatabox_tr_finanzas_bancos[".defaultPages"];

//	field labels
$fieldLabelsbox_tr_finanzas_bancos = array();
$fieldToolTipsbox_tr_finanzas_bancos = array();
$pageTitlesbox_tr_finanzas_bancos = array();
$placeHoldersbox_tr_finanzas_bancos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"] = array();
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"] = array();
	$placeHoldersbox_tr_finanzas_bancos["Spanish"] = array();
	$pageTitlesbox_tr_finanzas_bancos["Spanish"] = array();
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["tr_finanzas_bancos_01_id"] = "Id";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["tr_finanzas_bancos_01_id"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["tr_finanzas_bancos_01_id"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "Cuenta";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["vigente"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["vigente"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["cat_ventas_clientes_id"] = "Clientes";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["cat_ventas_clientes_id"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["cat_ventas_clientes_id"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["cat_compras_proveedores_id"] = "Proveedores";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["cat_compras_proveedores_id"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["cat_compras_proveedores_id"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["fecha_bancos"] = "Fecha";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["fecha_bancos"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["fecha_bancos"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["concepto_general"] = "Concepto";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["concepto_general"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["concepto_general"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["ingreso"] = "Ingreso";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["ingreso"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["ingreso"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["egreso"] = "Egreso";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["egreso"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["egreso"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["poliza"] = "Poliza";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["poliza"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["poliza"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["referencia_general"] = "Referencia";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["referencia_general"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["referencia_general"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["centro_de_costos"] = "Centro De Costos";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["centro_de_costos"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["centro_de_costos"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["fecha_registro"] = "Registro";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["fecha_registro"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["fecha_registro"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["capturista"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["capturista"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["referencia_documento"] = "Ref Documento";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["referencia_documento"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["referencia_documento"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["cat_almacen_id"] = "Cat Almacen Id";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["cat_almacen_id"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["cat_almacen_id"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["poliza_contpaq"] = "Poliza Contpaq";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["poliza_contpaq"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["poliza_contpaq"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["llave_contpaq"] = "Llave Contpaq";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["llave_contpaq"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["llave_contpaq"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["cuenta_contable"] = "Cuenta Contable";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["cuenta_contable"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["cuenta_contable"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["poliza_ok"] = "Poliza";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["poliza_ok"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["poliza_ok"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["cuenta_contable_ok"] = "Cuenta Contable Ok";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["cuenta_contable_ok"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["cuenta_contable_ok"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["id_cliente"] = "Id Cliente";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["id_cliente"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["id_cliente"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["id_prov"] = "Id Prov";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["id_prov"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["id_prov"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["cat_finanzas_movimientos_id"] = "Movimiento";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["cat_finanzas_movimientos_id"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["cat_finanzas_movimientos_id"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["consecutivo_upload_id"] = "Consecutivo";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["consecutivo_upload_id"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["consecutivo_upload_id"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["id_movi"] = "Id Movi";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["id_movi"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["id_movi"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["cat_produccion_temporadas_id"] = "Temporada";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["cat_produccion_temporadas_id"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["cat_produccion_temporadas_id"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["UUID"] = "UUID";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["UUID"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["UUID"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["id_cuenta"] = "Id Cuenta";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["id_cuenta"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["id_cuenta"] = "";
	$fieldLabelsbox_tr_finanzas_bancos["Spanish"]["id_temporada"] = "Id Temporada";
	$fieldToolTipsbox_tr_finanzas_bancos["Spanish"]["id_temporada"] = "";
	$placeHoldersbox_tr_finanzas_bancos["Spanish"]["id_temporada"] = "";
	if (count($fieldToolTipsbox_tr_finanzas_bancos["Spanish"]))
		$tdatabox_tr_finanzas_bancos[".isUseToolTips"] = true;
}





$tdatabox_tr_finanzas_bancos[".shortTableName"] = "box_tr_finanzas_bancos";
$tdatabox_tr_finanzas_bancos[".nSecOptions"] = 0;

$tdatabox_tr_finanzas_bancos[".mainTableOwnerID"] = "";
$tdatabox_tr_finanzas_bancos[".entityType"] = 1;
$tdatabox_tr_finanzas_bancos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_tr_finanzas_bancos[".strOriginalTableName"] = "tr_finanzas_bancos_01";

	



$tdatabox_tr_finanzas_bancos[".showAddInPopup"] = false;

$tdatabox_tr_finanzas_bancos[".showEditInPopup"] = false;

$tdatabox_tr_finanzas_bancos[".showViewInPopup"] = false;

$tdatabox_tr_finanzas_bancos[".listAjax"] = false;
//	temporary
//$tdatabox_tr_finanzas_bancos[".listAjax"] = false;

	$tdatabox_tr_finanzas_bancos[".audit"] = true;

	$tdatabox_tr_finanzas_bancos[".locking"] = true;


$pages = $tdatabox_tr_finanzas_bancos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_tr_finanzas_bancos[".edit"] = true;
	$tdatabox_tr_finanzas_bancos[".afterEditAction"] = 1;
	$tdatabox_tr_finanzas_bancos[".closePopupAfterEdit"] = 1;
	$tdatabox_tr_finanzas_bancos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_tr_finanzas_bancos[".add"] = true;
$tdatabox_tr_finanzas_bancos[".afterAddAction"] = 1;
$tdatabox_tr_finanzas_bancos[".closePopupAfterAdd"] = 1;
$tdatabox_tr_finanzas_bancos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_tr_finanzas_bancos[".list"] = true;
}



$tdatabox_tr_finanzas_bancos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_tr_finanzas_bancos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_tr_finanzas_bancos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_tr_finanzas_bancos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_tr_finanzas_bancos[".printFriendly"] = true;
}



$tdatabox_tr_finanzas_bancos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_tr_finanzas_bancos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_tr_finanzas_bancos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_tr_finanzas_bancos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_tr_finanzas_bancos[".ajaxCodeSnippetAdded"] = false;

$tdatabox_tr_finanzas_bancos[".buttonsAdded"] = false;

$tdatabox_tr_finanzas_bancos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatabox_tr_finanzas_bancos[".isUseTimeForSearch"] = false;


$tdatabox_tr_finanzas_bancos[".badgeColor"] = "D2691E";


$tdatabox_tr_finanzas_bancos[".allSearchFields"] = array();
$tdatabox_tr_finanzas_bancos[".filterFields"] = array();
$tdatabox_tr_finanzas_bancos[".requiredSearchFields"] = array();

$tdatabox_tr_finanzas_bancos[".googleLikeFields"] = array();
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "tr_finanzas_bancos_01_id";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "id_cuenta";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "cat_finanzas_bancos_cuentas_id";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "vigente";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "id_movi";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "cat_finanzas_movimientos_id";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "id_cliente";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "cat_ventas_clientes_id";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "id_prov";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "cat_compras_proveedores_id";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "fecha_bancos";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "concepto_general";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "ingreso";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "egreso";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "poliza";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "referencia_general";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "centro_de_costos";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "fecha_registro";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "capturista";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "referencia_documento";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "cat_almacen_id";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "poliza_contpaq";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "llave_contpaq";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "cuenta_contable";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "poliza_ok";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "cuenta_contable_ok";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "consecutivo_upload_id";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "id_temporada";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "cat_produccion_temporadas_id";
$tdatabox_tr_finanzas_bancos[".googleLikeFields"][] = "UUID";



$tdatabox_tr_finanzas_bancos[".tableType"] = "list";

$tdatabox_tr_finanzas_bancos[".printerPageOrientation"] = 0;
$tdatabox_tr_finanzas_bancos[".nPrinterPageScale"] = 100;

$tdatabox_tr_finanzas_bancos[".nPrinterSplitRecords"] = 40;

$tdatabox_tr_finanzas_bancos[".geocodingEnabled"] = false;





$tdatabox_tr_finanzas_bancos[".isResizeColumns"] = true;





$tdatabox_tr_finanzas_bancos[".pageSize"] = 20;

$tdatabox_tr_finanzas_bancos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tr_finanzas_bancos_01.fecha_bancos DESC, tr_finanzas_bancos_01.consecutivo_upload_id";
$tdatabox_tr_finanzas_bancos[".strOrderBy"] = $tstrOrderBy;

$tdatabox_tr_finanzas_bancos[".orderindexes"] = array();
			$tdatabox_tr_finanzas_bancos[".orderindexes"][] = array(11, (0 ? "ASC" : "DESC"), "tr_finanzas_bancos_01.fecha_bancos");
			$tdatabox_tr_finanzas_bancos[".orderindexes"][] = array(28, (1 ? "ASC" : "DESC"), "tr_finanzas_bancos_01.consecutivo_upload_id");


$tdatabox_tr_finanzas_bancos[".sqlHead"] = "SELECT tr_finanzas_bancos_01.tr_finanzas_bancos_01_id,  tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id AS id_cuenta,  tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id,  tr_finanzas_bancos_01.vigente,  tr_finanzas_bancos_01.cat_finanzas_movimientos_id AS id_movi,  tr_finanzas_bancos_01.cat_finanzas_movimientos_id,  tr_finanzas_bancos_01.cat_ventas_clientes_id AS id_cliente,  tr_finanzas_bancos_01.cat_ventas_clientes_id,  tr_finanzas_bancos_01.cat_compras_proveedores_id AS id_prov,  tr_finanzas_bancos_01.cat_compras_proveedores_id,  tr_finanzas_bancos_01.fecha_bancos,  tr_finanzas_bancos_01.concepto_general,  tr_finanzas_bancos_01.ingreso,  tr_finanzas_bancos_01.egreso,  tr_finanzas_bancos_01.poliza,  tr_finanzas_bancos_01.referencia_general,  tr_finanzas_bancos_01.centro_de_costos,  tr_finanzas_bancos_01.fecha_registro,  tr_finanzas_bancos_01.capturista,  tr_finanzas_bancos_01.referencia_documento,  tr_finanzas_bancos_01.cat_almacen_id,  tr_finanzas_bancos_01.poliza_contpaq,  tr_finanzas_bancos_01.llave_contpaq,  tr_finanzas_bancos_01.cuenta_contable,  tr_finanzas_bancos_01.poliza_ok,  tr_finanzas_bancos_01.cuenta_contable_ok,  cat_usuarios.cat_usuarios_licencias_id,  tr_finanzas_bancos_01.consecutivo_upload_id,  tr_finanzas_bancos_01.cat_produccion_temporadas_id AS id_temporada,  tr_finanzas_bancos_01.cat_produccion_temporadas_id,  tr_finanzas_bancos_01.UUID";
$tdatabox_tr_finanzas_bancos[".sqlFrom"] = "FROM tr_finanzas_bancos_01  LEFT OUTER JOIN cat_usuarios ON tr_finanzas_bancos_01.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_compras_proveedores ON tr_finanzas_bancos_01.cat_compras_proveedores_id = cat_compras_proveedores.cat_compras_proveedores_id  LEFT OUTER JOIN tr_compras_proveedores_01_cargos_abonos ON tr_finanzas_bancos_01.tr_finanzas_bancos_01_id = tr_compras_proveedores_01_cargos_abonos.tr_finanzas_bancos_01_id";
$tdatabox_tr_finanzas_bancos[".sqlWhereExpr"] = "(tr_finanzas_bancos_01.vigente =1)";
$tdatabox_tr_finanzas_bancos[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios.cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatabox_tr_finanzas_bancos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_tr_finanzas_bancos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_tr_finanzas_bancos[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_tr_finanzas_bancos[".highlightSearchResults"] = true;

$tableKeysbox_tr_finanzas_bancos = array();
$tableKeysbox_tr_finanzas_bancos[] = "tr_finanzas_bancos_01_id";
$tdatabox_tr_finanzas_bancos[".Keys"] = $tableKeysbox_tr_finanzas_bancos;


$tdatabox_tr_finanzas_bancos[".hideMobileList"] = array();




//	tr_finanzas_bancos_01_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_finanzas_bancos_01_id";
	$fdata["GoodName"] = "tr_finanzas_bancos_01_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","tr_finanzas_bancos_01_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_finanzas_bancos_01_id";

		$fdata["sourceSingle"] = "tr_finanzas_bancos_01_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.tr_finanzas_bancos_01_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["tr_finanzas_bancos_01_id"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "tr_finanzas_bancos_01_id";
//	id_cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cuenta";
	$fdata["GoodName"] = "id_cuenta";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","id_cuenta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_bancos_cuentas_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["id_cuenta"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "id_cuenta";
//	cat_finanzas_bancos_cuentas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_finanzas_bancos_cuentas_id";
	$fdata["GoodName"] = "cat_finanzas_bancos_cuentas_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","cat_finanzas_bancos_cuentas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_bancos_cuentas_id";

		$fdata["sourceSingle"] = "cat_finanzas_bancos_cuentas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_finanzas_bancos_cuentas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_finanzas_bancos_cuentas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "numero_de_cuenta";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["cat_finanzas_bancos_cuentas_id"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "cat_finanzas_bancos_cuentas_id";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.vigente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["vigente"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "vigente";
//	id_movi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_movi";
	$fdata["GoodName"] = "id_movi";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","id_movi");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_finanzas_movimientos_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["id_movi"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "id_movi";
//	cat_finanzas_movimientos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_finanzas_movimientos_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","cat_finanzas_movimientos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_finanzas_movimientos_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_finanzas_movimientos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_finanzas_movimientos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_movimientos";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["cat_finanzas_movimientos_id"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "cat_finanzas_movimientos_id";
//	id_cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_cliente";
	$fdata["GoodName"] = "id_cliente";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","id_cliente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_clientes_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_ventas_clientes_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["id_cliente"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "id_cliente";
//	cat_ventas_clientes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_ventas_clientes_id";
	$fdata["GoodName"] = "cat_ventas_clientes_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","cat_ventas_clientes_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_clientes_id";

		$fdata["sourceSingle"] = "cat_ventas_clientes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_ventas_clientes_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_ventas_clientes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_ventas_clientes_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_cliente";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["cat_ventas_clientes_id"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "cat_ventas_clientes_id";
//	id_prov
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_prov";
	$fdata["GoodName"] = "id_prov";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","id_prov");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_proveedores_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_compras_proveedores_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["id_prov"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "id_prov";
//	cat_compras_proveedores_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_compras_proveedores_id";
	$fdata["GoodName"] = "cat_compras_proveedores_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","cat_compras_proveedores_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_proveedores_id";

		$fdata["sourceSingle"] = "cat_compras_proveedores_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_compras_proveedores_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_compras_proveedores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_proveedores_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_proveedores";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["cat_compras_proveedores_id"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "cat_compras_proveedores_id";
//	fecha_bancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_bancos";
	$fdata["GoodName"] = "fecha_bancos";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","fecha_bancos");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_bancos";

		$fdata["sourceSingle"] = "fecha_bancos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.fecha_bancos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["fecha_bancos"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "fecha_bancos";
//	concepto_general
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "concepto_general";
	$fdata["GoodName"] = "concepto_general";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","concepto_general");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "concepto_general";

		$fdata["sourceSingle"] = "concepto_general";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.concepto_general";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["concepto_general"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "concepto_general";
//	ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ingreso";
	$fdata["GoodName"] = "ingreso";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","ingreso");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ingreso";

		$fdata["sourceSingle"] = "ingreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.ingreso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["ingreso"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "ingreso";
//	egreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "egreso";
	$fdata["GoodName"] = "egreso";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","egreso");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "egreso";

		$fdata["sourceSingle"] = "egreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.egreso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["egreso"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "egreso";
//	poliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "poliza";
	$fdata["GoodName"] = "poliza";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","poliza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "poliza";

		$fdata["sourceSingle"] = "poliza";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.poliza";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=25";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["poliza"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "poliza";
//	referencia_general
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "referencia_general";
	$fdata["GoodName"] = "referencia_general";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","referencia_general");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "referencia_general";

		$fdata["sourceSingle"] = "referencia_general";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.referencia_general";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["referencia_general"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "referencia_general";
//	centro_de_costos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "centro_de_costos";
	$fdata["GoodName"] = "centro_de_costos";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","centro_de_costos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "centro_de_costos";

		$fdata["sourceSingle"] = "centro_de_costos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.centro_de_costos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["centro_de_costos"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "centro_de_costos";
//	fecha_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fecha_registro";
	$fdata["GoodName"] = "fecha_registro";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","fecha_registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_registro";

		$fdata["sourceSingle"] = "fecha_registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.fecha_registro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["fecha_registro"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "fecha_registro";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.capturista";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["capturista"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "capturista";
//	referencia_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "referencia_documento";
	$fdata["GoodName"] = "referencia_documento";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","referencia_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "referencia_documento";

		$fdata["sourceSingle"] = "referencia_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.referencia_documento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["referencia_documento"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "referencia_documento";
//	cat_almacen_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cat_almacen_id";
	$fdata["GoodName"] = "cat_almacen_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","cat_almacen_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_almacen_id";

		$fdata["sourceSingle"] = "cat_almacen_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_almacen_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["cat_almacen_id"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "cat_almacen_id";
//	poliza_contpaq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "poliza_contpaq";
	$fdata["GoodName"] = "poliza_contpaq";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","poliza_contpaq");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "poliza_contpaq";

		$fdata["sourceSingle"] = "poliza_contpaq";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.poliza_contpaq";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["poliza_contpaq"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "poliza_contpaq";
//	llave_contpaq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "llave_contpaq";
	$fdata["GoodName"] = "llave_contpaq";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","llave_contpaq");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_contpaq";

		$fdata["sourceSingle"] = "llave_contpaq";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.llave_contpaq";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["llave_contpaq"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "llave_contpaq";
//	cuenta_contable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cuenta_contable";
	$fdata["GoodName"] = "cuenta_contable";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","cuenta_contable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cuenta_contable";

		$fdata["sourceSingle"] = "cuenta_contable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cuenta_contable";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["cuenta_contable"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "cuenta_contable";
//	poliza_ok
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "poliza_ok";
	$fdata["GoodName"] = "poliza_ok";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","poliza_ok");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "poliza_ok";

		$fdata["sourceSingle"] = "poliza_ok";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.poliza_ok";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["poliza_ok"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "poliza_ok";
//	cuenta_contable_ok
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cuenta_contable_ok";
	$fdata["GoodName"] = "cuenta_contable_ok";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","cuenta_contable_ok");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cuenta_contable_ok";

		$fdata["sourceSingle"] = "cuenta_contable_ok";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cuenta_contable_ok";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["cuenta_contable_ok"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "cuenta_contable_ok";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios.cat_usuarios_licencias_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "cat_usuarios_licencias_id";
//	consecutivo_upload_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "consecutivo_upload_id";
	$fdata["GoodName"] = "consecutivo_upload_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","consecutivo_upload_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "consecutivo_upload_id";

		$fdata["sourceSingle"] = "consecutivo_upload_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.consecutivo_upload_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["consecutivo_upload_id"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "consecutivo_upload_id";
//	id_temporada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "id_temporada";
	$fdata["GoodName"] = "id_temporada";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","id_temporada");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_produccion_temporadas_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_produccion_temporadas_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["id_temporada"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "id_temporada";
//	cat_produccion_temporadas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "cat_produccion_temporadas_id";
	$fdata["GoodName"] = "cat_produccion_temporadas_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","cat_produccion_temporadas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_produccion_temporadas_id";

		$fdata["sourceSingle"] = "cat_produccion_temporadas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.cat_produccion_temporadas_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_produccion_temporadas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_produccion_temporadas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_temporada";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["cat_produccion_temporadas_id"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "cat_produccion_temporadas_id";
//	UUID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "UUID";
	$fdata["GoodName"] = "UUID";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("box_tr_finanzas_bancos","UUID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UUID";

		$fdata["sourceSingle"] = "UUID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01.UUID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatabox_tr_finanzas_bancos["UUID"] = $fdata;
		$tdatabox_tr_finanzas_bancos[".searchableFields"][] = "UUID";


$tables_data["box_tr_finanzas_bancos"]=&$tdatabox_tr_finanzas_bancos;
$field_labels["box_tr_finanzas_bancos"] = &$fieldLabelsbox_tr_finanzas_bancos;
$fieldToolTips["box_tr_finanzas_bancos"] = &$fieldToolTipsbox_tr_finanzas_bancos;
$placeHolders["box_tr_finanzas_bancos"] = &$placeHoldersbox_tr_finanzas_bancos;
$page_titles["box_tr_finanzas_bancos"] = &$pageTitlesbox_tr_finanzas_bancos;


changeTextControlsToDate( "box_tr_finanzas_bancos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_tr_finanzas_bancos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_tr_finanzas_bancos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_tr_finanzas_bancos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_finanzas_bancos_01.tr_finanzas_bancos_01_id,  tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id AS id_cuenta,  tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id,  tr_finanzas_bancos_01.vigente,  tr_finanzas_bancos_01.cat_finanzas_movimientos_id AS id_movi,  tr_finanzas_bancos_01.cat_finanzas_movimientos_id,  tr_finanzas_bancos_01.cat_ventas_clientes_id AS id_cliente,  tr_finanzas_bancos_01.cat_ventas_clientes_id,  tr_finanzas_bancos_01.cat_compras_proveedores_id AS id_prov,  tr_finanzas_bancos_01.cat_compras_proveedores_id,  tr_finanzas_bancos_01.fecha_bancos,  tr_finanzas_bancos_01.concepto_general,  tr_finanzas_bancos_01.ingreso,  tr_finanzas_bancos_01.egreso,  tr_finanzas_bancos_01.poliza,  tr_finanzas_bancos_01.referencia_general,  tr_finanzas_bancos_01.centro_de_costos,  tr_finanzas_bancos_01.fecha_registro,  tr_finanzas_bancos_01.capturista,  tr_finanzas_bancos_01.referencia_documento,  tr_finanzas_bancos_01.cat_almacen_id,  tr_finanzas_bancos_01.poliza_contpaq,  tr_finanzas_bancos_01.llave_contpaq,  tr_finanzas_bancos_01.cuenta_contable,  tr_finanzas_bancos_01.poliza_ok,  tr_finanzas_bancos_01.cuenta_contable_ok,  cat_usuarios.cat_usuarios_licencias_id,  tr_finanzas_bancos_01.consecutivo_upload_id,  tr_finanzas_bancos_01.cat_produccion_temporadas_id AS id_temporada,  tr_finanzas_bancos_01.cat_produccion_temporadas_id,  tr_finanzas_bancos_01.UUID";
$proto0["m_strFrom"] = "FROM tr_finanzas_bancos_01  LEFT OUTER JOIN cat_usuarios ON tr_finanzas_bancos_01.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_compras_proveedores ON tr_finanzas_bancos_01.cat_compras_proveedores_id = cat_compras_proveedores.cat_compras_proveedores_id  LEFT OUTER JOIN tr_compras_proveedores_01_cargos_abonos ON tr_finanzas_bancos_01.tr_finanzas_bancos_01_id = tr_compras_proveedores_01_cargos_abonos.tr_finanzas_bancos_01_id";
$proto0["m_strWhere"] = "(tr_finanzas_bancos_01.vigente =1)";
$proto0["m_strOrderBy"] = "ORDER BY tr_finanzas_bancos_01.fecha_bancos DESC, tr_finanzas_bancos_01.consecutivo_upload_id";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "tr_finanzas_bancos_01.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_finanzas_bancos_01_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto6["m_sql"] = "tr_finanzas_bancos_01.tr_finanzas_bancos_01_id";
$proto6["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_bancos_cuentas_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto8["m_sql"] = "tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id";
$proto8["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "id_cuenta";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_bancos_cuentas_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto10["m_sql"] = "tr_finanzas_bancos_01.cat_finanzas_bancos_cuentas_id";
$proto10["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto12["m_sql"] = "tr_finanzas_bancos_01.vigente";
$proto12["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto14["m_sql"] = "tr_finanzas_bancos_01.cat_finanzas_movimientos_id";
$proto14["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "id_movi";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto16["m_sql"] = "tr_finanzas_bancos_01.cat_finanzas_movimientos_id";
$proto16["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_clientes_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto18["m_sql"] = "tr_finanzas_bancos_01.cat_ventas_clientes_id";
$proto18["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "id_cliente";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_clientes_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto20["m_sql"] = "tr_finanzas_bancos_01.cat_ventas_clientes_id";
$proto20["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto22["m_sql"] = "tr_finanzas_bancos_01.cat_compras_proveedores_id";
$proto22["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "id_prov";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto24["m_sql"] = "tr_finanzas_bancos_01.cat_compras_proveedores_id";
$proto24["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_bancos",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto26["m_sql"] = "tr_finanzas_bancos_01.fecha_bancos";
$proto26["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "concepto_general",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto28["m_sql"] = "tr_finanzas_bancos_01.concepto_general";
$proto28["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ingreso",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto30["m_sql"] = "tr_finanzas_bancos_01.ingreso";
$proto30["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "egreso",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto32["m_sql"] = "tr_finanzas_bancos_01.egreso";
$proto32["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "poliza",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto34["m_sql"] = "tr_finanzas_bancos_01.poliza";
$proto34["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "referencia_general",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto36["m_sql"] = "tr_finanzas_bancos_01.referencia_general";
$proto36["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "centro_de_costos",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto38["m_sql"] = "tr_finanzas_bancos_01.centro_de_costos";
$proto38["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_registro",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto40["m_sql"] = "tr_finanzas_bancos_01.fecha_registro";
$proto40["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto42["m_sql"] = "tr_finanzas_bancos_01.capturista";
$proto42["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "referencia_documento",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto44["m_sql"] = "tr_finanzas_bancos_01.referencia_documento";
$proto44["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_almacen_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto46["m_sql"] = "tr_finanzas_bancos_01.cat_almacen_id";
$proto46["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "poliza_contpaq",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto48["m_sql"] = "tr_finanzas_bancos_01.poliza_contpaq";
$proto48["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_contpaq",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto50["m_sql"] = "tr_finanzas_bancos_01.llave_contpaq";
$proto50["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cuenta_contable",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto52["m_sql"] = "tr_finanzas_bancos_01.cuenta_contable";
$proto52["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "poliza_ok",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto54["m_sql"] = "tr_finanzas_bancos_01.poliza_ok";
$proto54["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "cuenta_contable_ok",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto56["m_sql"] = "tr_finanzas_bancos_01.cuenta_contable_ok";
$proto56["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto58["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto58["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "consecutivo_upload_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto60["m_sql"] = "tr_finanzas_bancos_01.consecutivo_upload_id";
$proto60["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_temporadas_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto62["m_sql"] = "tr_finanzas_bancos_01.cat_produccion_temporadas_id";
$proto62["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "id_temporada";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_temporadas_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto64["m_sql"] = "tr_finanzas_bancos_01.cat_produccion_temporadas_id";
$proto64["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "UUID",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto66["m_sql"] = "tr_finanzas_bancos_01.UUID";
$proto66["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "tr_finanzas_bancos_01";
$proto69["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "tr_finanzas_bancos_01_id";
$proto69["m_columns"][] = "cat_finanzas_bancos_cuentas_id";
$proto69["m_columns"][] = "vigente";
$proto69["m_columns"][] = "cat_finanzas_movimientos_id";
$proto69["m_columns"][] = "cat_ventas_clientes_id";
$proto69["m_columns"][] = "cat_compras_proveedores_id";
$proto69["m_columns"][] = "fecha_bancos";
$proto69["m_columns"][] = "concepto_general";
$proto69["m_columns"][] = "ingreso";
$proto69["m_columns"][] = "egreso";
$proto69["m_columns"][] = "poliza";
$proto69["m_columns"][] = "referencia_general";
$proto69["m_columns"][] = "centro_de_costos";
$proto69["m_columns"][] = "fecha_registro";
$proto69["m_columns"][] = "capturista";
$proto69["m_columns"][] = "referencia_documento";
$proto69["m_columns"][] = "cat_almacen_id";
$proto69["m_columns"][] = "poliza_contpaq";
$proto69["m_columns"][] = "llave_contpaq";
$proto69["m_columns"][] = "cuenta_contable";
$proto69["m_columns"][] = "poliza_ok";
$proto69["m_columns"][] = "time_stamp";
$proto69["m_columns"][] = "cuenta_contable_ok";
$proto69["m_columns"][] = "consecutivo_upload_id";
$proto69["m_columns"][] = "cat_produccion_temporadas_id";
$proto69["m_columns"][] = "UUID";
$proto69["m_columns"][] = "cat_finanzas_bancos_estatus_mu_id";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "tr_finanzas_bancos_01";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_LEFTJOIN";
			$proto73=array();
$proto73["m_strName"] = "cat_usuarios";
$proto73["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "cat_usuarios_id";
$proto73["m_columns"][] = "time_stamp";
$proto73["m_columns"][] = "vigente";
$proto73["m_columns"][] = "capturista";
$proto73["m_columns"][] = "usuario";
$proto73["m_columns"][] = "cat_usuarios_licencias_id";
$proto73["m_columns"][] = "pass";
$proto73["m_columns"][] = "nombre";
$proto73["m_columns"][] = "correo";
$proto73["m_columns"][] = "cat_trabajadores_altas_id";
$proto73["m_columns"][] = "res_autorizacion";
$proto73["m_columns"][] = "session";
$proto73["m_columns"][] = "tipo";
$proto73["m_columns"][] = "session_v2";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON tr_finanzas_bancos_01.capturista = cat_usuarios.usuario";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto74=array();
$proto74["m_sql"] = "cat_usuarios.usuario = tr_finanzas_bancos_01.capturista";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= tr_finanzas_bancos_01.capturista";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_LEFTJOIN";
			$proto77=array();
$proto77["m_strName"] = "cat_compras_proveedores";
$proto77["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "cat_compras_proveedores_id";
$proto77["m_columns"][] = "time_stamp";
$proto77["m_columns"][] = "vigente";
$proto77["m_columns"][] = "capturista";
$proto77["m_columns"][] = "descripcion_proveedores";
$proto77["m_columns"][] = "rfc_compras_proveedores";
$proto77["m_columns"][] = "cat_compras_proveedores_categorias_id";
$proto77["m_columns"][] = "id_migracion";
$proto77["m_columns"][] = "llave_rfc_licencia";
$proto77["m_columns"][] = "costo_check";
$proto77["m_columns"][] = "alias_proveedor";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "LEFT OUTER JOIN cat_compras_proveedores ON tr_finanzas_bancos_01.cat_compras_proveedores_id = cat_compras_proveedores.cat_compras_proveedores_id";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto78=array();
$proto78["m_sql"] = "cat_compras_proveedores.cat_compras_proveedores_id = tr_finanzas_bancos_01.cat_compras_proveedores_id";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= tr_finanzas_bancos_01.cat_compras_proveedores_id";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
												$proto80=array();
$proto80["m_link"] = "SQLL_LEFTJOIN";
			$proto81=array();
$proto81["m_strName"] = "tr_compras_proveedores_01_cargos_abonos";
$proto81["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "tr_compras_proveedores_01_cargos_abonos_id";
$proto81["m_columns"][] = "cat_compras_proveedores_id";
$proto81["m_columns"][] = "alias_proveedor";
$proto81["m_columns"][] = "fecha_de_compra";
$proto81["m_columns"][] = "referencia";
$proto81["m_columns"][] = "importe_abono_compra";
$proto81["m_columns"][] = "importe_cargo_pago";
$proto81["m_columns"][] = "fecha_de_pago";
$proto81["m_columns"][] = "fecha_de_vencimiento";
$proto81["m_columns"][] = "concepto";
$proto81["m_columns"][] = "cat_compras_documentos_mu_id";
$proto81["m_columns"][] = "capturista";
$proto81["m_columns"][] = "vigente";
$proto81["m_columns"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
$proto81["m_columns"][] = "cat_finanzas_cuentas_de_balance_04_llave";
$proto81["m_columns"][] = "alias_cuenta_de_balance";
$proto81["m_columns"][] = "imei";
$proto81["m_columns"][] = "uuid_sat";
$proto81["m_columns"][] = "time_stamp";
$proto81["m_columns"][] = "consecutivo_id";
$proto81["m_columns"][] = "cat_finanzas_bancos_cuentas_id";
$proto81["m_columns"][] = "cat_finanzas_cajas_chicas_id";
$proto81["m_columns"][] = "uuid_cargo_abono_compra";
$proto81["m_columns"][] = "uuid_cargo_abono_pago";
$proto81["m_columns"][] = "cat_compras_cargo_abono_mu_id";
$proto81["m_columns"][] = "alias_cuenta_de_abono_compra";
$proto81["m_columns"][] = "alias_cuenta_de_cargo_pago";
$proto81["m_columns"][] = "tr_compras_requisiciones_01_uuid";
$proto81["m_columns"][] = "tr_compras_requisiciones_01_uuid_pago";
$proto81["m_columns"][] = "orden_de_compra_proveedor";
$proto81["m_columns"][] = "referencia_bancaria";
$proto81["m_columns"][] = "observacion_abono_compra";
$proto81["m_columns"][] = "observacion_cargo_pago";
$proto81["m_columns"][] = "llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago";
$proto81["m_columns"][] = "cat_compras_estatus_mu_id";
$proto81["m_columns"][] = "fecha_de_recibo";
$proto81["m_columns"][] = "tr_compras_almacenes_01_recibo_lpn_uuid";
$proto81["m_columns"][] = "fecha_de_solicitud";
$proto81["m_columns"][] = "fecha_de_requisicion";
$proto81["m_columns"][] = "llave_uuid_compra_pago";
$proto81["m_columns"][] = "tr_finanzas_bancos_01_id";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "LEFT OUTER JOIN tr_compras_proveedores_01_cargos_abonos ON tr_finanzas_bancos_01.tr_finanzas_bancos_01_id = tr_compras_proveedores_01_cargos_abonos.tr_finanzas_bancos_01_id";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "box_tr_finanzas_bancos";
$proto82=array();
$proto82["m_sql"] = "tr_compras_proveedores_01_cargos_abonos.tr_finanzas_bancos_01_id = tr_finanzas_bancos_01.tr_finanzas_bancos_01_id";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tr_finanzas_bancos_01_id",
	"m_strTable" => "tr_compras_proveedores_01_cargos_abonos",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "= tr_finanzas_bancos_01.tr_finanzas_bancos_01_id";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto80["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto80);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto84=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha_bancos",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto84["m_column"]=$obj;
$proto84["m_bAsc"] = 0;
$proto84["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto84);

$proto0["m_orderby"][]=$obj;					
												$proto86=array();
						$obj = new SQLField(array(
	"m_strName" => "consecutivo_upload_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "box_tr_finanzas_bancos"
));

$proto86["m_column"]=$obj;
$proto86["m_bAsc"] = 1;
$proto86["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto86);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="box_tr_finanzas_bancos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_tr_finanzas_bancos = createSqlQuery_box_tr_finanzas_bancos();


	
		;

																															

$tdatabox_tr_finanzas_bancos[".sqlquery"] = $queryData_box_tr_finanzas_bancos;



include_once(getabspath("include/box_tr_finanzas_bancos_events.php"));
$tdatabox_tr_finanzas_bancos[".hasEvents"] = true;

?>