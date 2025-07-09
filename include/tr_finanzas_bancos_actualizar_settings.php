<?php
$tdatatr_finanzas_bancos_actualizar = array();
$tdatatr_finanzas_bancos_actualizar[".searchableFields"] = array();
$tdatatr_finanzas_bancos_actualizar[".ShortName"] = "tr_finanzas_bancos_actualizar";
$tdatatr_finanzas_bancos_actualizar[".OwnerID"] = "";
$tdatatr_finanzas_bancos_actualizar[".OriginalTable"] = "tr_finanzas_bancos_01";


$tdatatr_finanzas_bancos_actualizar[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatr_finanzas_bancos_actualizar[".originalPagesByType"] = $tdatatr_finanzas_bancos_actualizar[".pagesByType"];
$tdatatr_finanzas_bancos_actualizar[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatr_finanzas_bancos_actualizar[".originalPages"] = $tdatatr_finanzas_bancos_actualizar[".pages"];
$tdatatr_finanzas_bancos_actualizar[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatr_finanzas_bancos_actualizar[".originalDefaultPages"] = $tdatatr_finanzas_bancos_actualizar[".defaultPages"];

//	field labels
$fieldLabelstr_finanzas_bancos_actualizar = array();
$fieldToolTipstr_finanzas_bancos_actualizar = array();
$pageTitlestr_finanzas_bancos_actualizar = array();
$placeHolderstr_finanzas_bancos_actualizar = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"] = array();
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"] = array();
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"] = array();
	$pageTitlestr_finanzas_bancos_actualizar["Spanish"] = array();
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["tr_finanzas_bancos_01_id"] = "Id";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["tr_finanzas_bancos_01_id"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["tr_finanzas_bancos_01_id"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "Cuenta";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["vigente"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["vigente"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["cat_ventas_clientes_id"] = "Clientes";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["cat_ventas_clientes_id"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["cat_ventas_clientes_id"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["cat_compras_proveedores_id"] = "Proveedores";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["cat_compras_proveedores_id"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["cat_compras_proveedores_id"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["fecha_bancos"] = "Fecha";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["fecha_bancos"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["fecha_bancos"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["concepto_general"] = "Concepto";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["concepto_general"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["concepto_general"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["ingreso"] = "Ingreso";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["ingreso"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["ingreso"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["egreso"] = "Egreso";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["egreso"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["egreso"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["poliza"] = "Poliza";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["poliza"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["poliza"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["referencia_general"] = "Referencia";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["referencia_general"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["referencia_general"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["centro_de_costos"] = "Centro De Costos";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["centro_de_costos"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["centro_de_costos"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["fecha_registro"] = "Registro";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["fecha_registro"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["fecha_registro"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["capturista"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["capturista"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["referencia_documento"] = "Ref Documento";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["referencia_documento"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["referencia_documento"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["cat_almacen_id"] = "Cat Almacen Id";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["cat_almacen_id"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["cat_almacen_id"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["poliza_contpaq"] = "Poliza Contpaq";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["poliza_contpaq"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["poliza_contpaq"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["llave_contpaq"] = "Llave Contpaq";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["llave_contpaq"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["llave_contpaq"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["cuenta_contable"] = "Cuenta Contable";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["cuenta_contable"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["cuenta_contable"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["poliza_ok"] = "Poliza";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["poliza_ok"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["poliza_ok"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["cuenta_contable_ok"] = "Cuenta Contable Ok";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["cuenta_contable_ok"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["cuenta_contable_ok"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["cat_finanzas_movimientos_id"] = "Movimiento";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["cat_finanzas_movimientos_id"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["cat_finanzas_movimientos_id"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["consecutivo_upload_id"] = "Consecutivo";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["consecutivo_upload_id"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["consecutivo_upload_id"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["cat_produccion_temporadas_id"] = "Temporada";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["cat_produccion_temporadas_id"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["cat_produccion_temporadas_id"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["UUID"] = "UUID";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["UUID"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["UUID"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["time_stamp"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["time_stamp"] = "";
	$fieldLabelstr_finanzas_bancos_actualizar["Spanish"]["cat_finanzas_bancos_estatus_mu_id"] = "Cat Finanzas Bancos Estatus Mu Id";
	$fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]["cat_finanzas_bancos_estatus_mu_id"] = "";
	$placeHolderstr_finanzas_bancos_actualizar["Spanish"]["cat_finanzas_bancos_estatus_mu_id"] = "";
	if (count($fieldToolTipstr_finanzas_bancos_actualizar["Spanish"]))
		$tdatatr_finanzas_bancos_actualizar[".isUseToolTips"] = true;
}





$tdatatr_finanzas_bancos_actualizar[".shortTableName"] = "tr_finanzas_bancos_actualizar";
$tdatatr_finanzas_bancos_actualizar[".nSecOptions"] = 0;

$tdatatr_finanzas_bancos_actualizar[".mainTableOwnerID"] = "";
$tdatatr_finanzas_bancos_actualizar[".entityType"] = 1;
$tdatatr_finanzas_bancos_actualizar[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_finanzas_bancos_actualizar[".strOriginalTableName"] = "tr_finanzas_bancos_01";

	



$tdatatr_finanzas_bancos_actualizar[".showAddInPopup"] = false;

$tdatatr_finanzas_bancos_actualizar[".showEditInPopup"] = false;

$tdatatr_finanzas_bancos_actualizar[".showViewInPopup"] = false;

$tdatatr_finanzas_bancos_actualizar[".listAjax"] = false;
//	temporary
//$tdatatr_finanzas_bancos_actualizar[".listAjax"] = false;

	$tdatatr_finanzas_bancos_actualizar[".audit"] = true;

	$tdatatr_finanzas_bancos_actualizar[".locking"] = true;


$pages = $tdatatr_finanzas_bancos_actualizar[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_finanzas_bancos_actualizar[".edit"] = true;
	$tdatatr_finanzas_bancos_actualizar[".afterEditAction"] = 1;
	$tdatatr_finanzas_bancos_actualizar[".closePopupAfterEdit"] = 1;
	$tdatatr_finanzas_bancos_actualizar[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_finanzas_bancos_actualizar[".add"] = true;
$tdatatr_finanzas_bancos_actualizar[".afterAddAction"] = 1;
$tdatatr_finanzas_bancos_actualizar[".closePopupAfterAdd"] = 1;
$tdatatr_finanzas_bancos_actualizar[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_finanzas_bancos_actualizar[".list"] = true;
}



$tdatatr_finanzas_bancos_actualizar[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_finanzas_bancos_actualizar[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_finanzas_bancos_actualizar[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_finanzas_bancos_actualizar[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_finanzas_bancos_actualizar[".printFriendly"] = true;
}



$tdatatr_finanzas_bancos_actualizar[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_finanzas_bancos_actualizar[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_finanzas_bancos_actualizar[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_finanzas_bancos_actualizar[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_finanzas_bancos_actualizar[".ajaxCodeSnippetAdded"] = false;

$tdatatr_finanzas_bancos_actualizar[".buttonsAdded"] = false;

$tdatatr_finanzas_bancos_actualizar[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatr_finanzas_bancos_actualizar[".isUseTimeForSearch"] = false;


$tdatatr_finanzas_bancos_actualizar[".badgeColor"] = "D2691E";


$tdatatr_finanzas_bancos_actualizar[".allSearchFields"] = array();
$tdatatr_finanzas_bancos_actualizar[".filterFields"] = array();
$tdatatr_finanzas_bancos_actualizar[".requiredSearchFields"] = array();

$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"] = array();
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "tr_finanzas_bancos_01_id";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "cat_finanzas_bancos_cuentas_id";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "vigente";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "cat_finanzas_movimientos_id";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "cat_ventas_clientes_id";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "cat_compras_proveedores_id";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "fecha_bancos";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "concepto_general";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "ingreso";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "egreso";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "poliza";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "referencia_general";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "centro_de_costos";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "fecha_registro";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "capturista";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "referencia_documento";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "cat_almacen_id";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "poliza_contpaq";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "llave_contpaq";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "cuenta_contable";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "poliza_ok";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "time_stamp";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "cuenta_contable_ok";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "consecutivo_upload_id";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "cat_produccion_temporadas_id";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "UUID";
$tdatatr_finanzas_bancos_actualizar[".googleLikeFields"][] = "cat_finanzas_bancos_estatus_mu_id";



$tdatatr_finanzas_bancos_actualizar[".tableType"] = "list";

$tdatatr_finanzas_bancos_actualizar[".printerPageOrientation"] = 0;
$tdatatr_finanzas_bancos_actualizar[".nPrinterPageScale"] = 100;

$tdatatr_finanzas_bancos_actualizar[".nPrinterSplitRecords"] = 40;

$tdatatr_finanzas_bancos_actualizar[".geocodingEnabled"] = false;





$tdatatr_finanzas_bancos_actualizar[".isResizeColumns"] = true;





$tdatatr_finanzas_bancos_actualizar[".pageSize"] = 20;

$tdatatr_finanzas_bancos_actualizar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_finanzas_bancos_actualizar[".strOrderBy"] = $tstrOrderBy;

$tdatatr_finanzas_bancos_actualizar[".orderindexes"] = array();


$tdatatr_finanzas_bancos_actualizar[".sqlHead"] = "SELECT tr_finanzas_bancos_01_id,  	cat_finanzas_bancos_cuentas_id,  	vigente,  	cat_finanzas_movimientos_id,  	cat_ventas_clientes_id,  	cat_compras_proveedores_id,  	fecha_bancos,  	concepto_general,  	ingreso,  	egreso,  	poliza,  	referencia_general,  	centro_de_costos,  	fecha_registro,  	capturista,  	referencia_documento,  	cat_almacen_id,  	poliza_contpaq,  	llave_contpaq,  	cuenta_contable,  	poliza_ok,  	time_stamp,  	cuenta_contable_ok,  	consecutivo_upload_id,  	cat_produccion_temporadas_id,  	UUID,  	cat_finanzas_bancos_estatus_mu_id";
$tdatatr_finanzas_bancos_actualizar[".sqlFrom"] = "FROM tr_finanzas_bancos_01";
$tdatatr_finanzas_bancos_actualizar[".sqlWhereExpr"] = "";
$tdatatr_finanzas_bancos_actualizar[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatatr_finanzas_bancos_actualizar[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_finanzas_bancos_actualizar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_finanzas_bancos_actualizar[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_finanzas_bancos_actualizar[".highlightSearchResults"] = true;

$tableKeystr_finanzas_bancos_actualizar = array();
$tableKeystr_finanzas_bancos_actualizar[] = "tr_finanzas_bancos_01_id";
$tdatatr_finanzas_bancos_actualizar[".Keys"] = $tableKeystr_finanzas_bancos_actualizar;


$tdatatr_finanzas_bancos_actualizar[".hideMobileList"] = array();




//	tr_finanzas_bancos_01_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_finanzas_bancos_01_id";
	$fdata["GoodName"] = "tr_finanzas_bancos_01_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","tr_finanzas_bancos_01_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_finanzas_bancos_01_id";

		$fdata["sourceSingle"] = "tr_finanzas_bancos_01_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01_id";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["tr_finanzas_bancos_01_id"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "tr_finanzas_bancos_01_id";
//	cat_finanzas_bancos_cuentas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_finanzas_bancos_cuentas_id";
	$fdata["GoodName"] = "cat_finanzas_bancos_cuentas_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","cat_finanzas_bancos_cuentas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_bancos_cuentas_id";

		$fdata["sourceSingle"] = "cat_finanzas_bancos_cuentas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas_id";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["cat_finanzas_bancos_cuentas_id"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "cat_finanzas_bancos_cuentas_id";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigente";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["vigente"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "vigente";
//	cat_finanzas_movimientos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_finanzas_movimientos_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","cat_finanzas_movimientos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_id";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["cat_finanzas_movimientos_id"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "cat_finanzas_movimientos_id";
//	cat_ventas_clientes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_ventas_clientes_id";
	$fdata["GoodName"] = "cat_ventas_clientes_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","cat_ventas_clientes_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_clientes_id";

		$fdata["sourceSingle"] = "cat_ventas_clientes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes_id";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["cat_ventas_clientes_id"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "cat_ventas_clientes_id";
//	cat_compras_proveedores_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_compras_proveedores_id";
	$fdata["GoodName"] = "cat_compras_proveedores_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","cat_compras_proveedores_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_proveedores_id";

		$fdata["sourceSingle"] = "cat_compras_proveedores_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores_id";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["cat_compras_proveedores_id"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "cat_compras_proveedores_id";
//	fecha_bancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_bancos";
	$fdata["GoodName"] = "fecha_bancos";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","fecha_bancos");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_bancos";

		$fdata["sourceSingle"] = "fecha_bancos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_bancos";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["fecha_bancos"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "fecha_bancos";
//	concepto_general
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "concepto_general";
	$fdata["GoodName"] = "concepto_general";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","concepto_general");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "concepto_general";

		$fdata["sourceSingle"] = "concepto_general";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concepto_general";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["concepto_general"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "concepto_general";
//	ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ingreso";
	$fdata["GoodName"] = "ingreso";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","ingreso");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ingreso";

		$fdata["sourceSingle"] = "ingreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ingreso";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["ingreso"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "ingreso";
//	egreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "egreso";
	$fdata["GoodName"] = "egreso";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","egreso");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "egreso";

		$fdata["sourceSingle"] = "egreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "egreso";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["egreso"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "egreso";
//	poliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "poliza";
	$fdata["GoodName"] = "poliza";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","poliza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "poliza";

		$fdata["sourceSingle"] = "poliza";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poliza";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["poliza"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "poliza";
//	referencia_general
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "referencia_general";
	$fdata["GoodName"] = "referencia_general";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","referencia_general");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "referencia_general";

		$fdata["sourceSingle"] = "referencia_general";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "referencia_general";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["referencia_general"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "referencia_general";
//	centro_de_costos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "centro_de_costos";
	$fdata["GoodName"] = "centro_de_costos";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","centro_de_costos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "centro_de_costos";

		$fdata["sourceSingle"] = "centro_de_costos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "centro_de_costos";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["centro_de_costos"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "centro_de_costos";
//	fecha_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fecha_registro";
	$fdata["GoodName"] = "fecha_registro";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","fecha_registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_registro";

		$fdata["sourceSingle"] = "fecha_registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_registro";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["fecha_registro"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "fecha_registro";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capturista";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["capturista"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "capturista";
//	referencia_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "referencia_documento";
	$fdata["GoodName"] = "referencia_documento";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","referencia_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "referencia_documento";

		$fdata["sourceSingle"] = "referencia_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "referencia_documento";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["referencia_documento"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "referencia_documento";
//	cat_almacen_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cat_almacen_id";
	$fdata["GoodName"] = "cat_almacen_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","cat_almacen_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_almacen_id";

		$fdata["sourceSingle"] = "cat_almacen_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_almacen_id";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["cat_almacen_id"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "cat_almacen_id";
//	poliza_contpaq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "poliza_contpaq";
	$fdata["GoodName"] = "poliza_contpaq";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","poliza_contpaq");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "poliza_contpaq";

		$fdata["sourceSingle"] = "poliza_contpaq";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poliza_contpaq";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["poliza_contpaq"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "poliza_contpaq";
//	llave_contpaq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "llave_contpaq";
	$fdata["GoodName"] = "llave_contpaq";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","llave_contpaq");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_contpaq";

		$fdata["sourceSingle"] = "llave_contpaq";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_contpaq";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["llave_contpaq"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "llave_contpaq";
//	cuenta_contable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cuenta_contable";
	$fdata["GoodName"] = "cuenta_contable";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","cuenta_contable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cuenta_contable";

		$fdata["sourceSingle"] = "cuenta_contable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cuenta_contable";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["cuenta_contable"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "cuenta_contable";
//	poliza_ok
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "poliza_ok";
	$fdata["GoodName"] = "poliza_ok";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","poliza_ok");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "poliza_ok";

		$fdata["sourceSingle"] = "poliza_ok";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poliza_ok";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["poliza_ok"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "poliza_ok";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "time_stamp";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatatr_finanzas_bancos_actualizar["time_stamp"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "time_stamp";
//	cuenta_contable_ok
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cuenta_contable_ok";
	$fdata["GoodName"] = "cuenta_contable_ok";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","cuenta_contable_ok");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cuenta_contable_ok";

		$fdata["sourceSingle"] = "cuenta_contable_ok";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cuenta_contable_ok";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["cuenta_contable_ok"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "cuenta_contable_ok";
//	consecutivo_upload_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "consecutivo_upload_id";
	$fdata["GoodName"] = "consecutivo_upload_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","consecutivo_upload_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "consecutivo_upload_id";

		$fdata["sourceSingle"] = "consecutivo_upload_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consecutivo_upload_id";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["consecutivo_upload_id"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "consecutivo_upload_id";
//	cat_produccion_temporadas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cat_produccion_temporadas_id";
	$fdata["GoodName"] = "cat_produccion_temporadas_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","cat_produccion_temporadas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_produccion_temporadas_id";

		$fdata["sourceSingle"] = "cat_produccion_temporadas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_temporadas_id";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["cat_produccion_temporadas_id"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "cat_produccion_temporadas_id";
//	UUID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "UUID";
	$fdata["GoodName"] = "UUID";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","UUID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UUID";

		$fdata["sourceSingle"] = "UUID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UUID";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["UUID"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "UUID";
//	cat_finanzas_bancos_estatus_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cat_finanzas_bancos_estatus_mu_id";
	$fdata["GoodName"] = "cat_finanzas_bancos_estatus_mu_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_01";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_actualizar","cat_finanzas_bancos_estatus_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_bancos_estatus_mu_id";

		$fdata["sourceSingle"] = "cat_finanzas_bancos_estatus_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_estatus_mu_id";

	
	
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


	$tdatatr_finanzas_bancos_actualizar["cat_finanzas_bancos_estatus_mu_id"] = $fdata;
		$tdatatr_finanzas_bancos_actualizar[".searchableFields"][] = "cat_finanzas_bancos_estatus_mu_id";


$tables_data["tr_finanzas_bancos_actualizar"]=&$tdatatr_finanzas_bancos_actualizar;
$field_labels["tr_finanzas_bancos_actualizar"] = &$fieldLabelstr_finanzas_bancos_actualizar;
$fieldToolTips["tr_finanzas_bancos_actualizar"] = &$fieldToolTipstr_finanzas_bancos_actualizar;
$placeHolders["tr_finanzas_bancos_actualizar"] = &$placeHolderstr_finanzas_bancos_actualizar;
$page_titles["tr_finanzas_bancos_actualizar"] = &$pageTitlestr_finanzas_bancos_actualizar;


changeTextControlsToDate( "tr_finanzas_bancos_actualizar" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_finanzas_bancos_actualizar"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_finanzas_bancos_actualizar"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_finanzas_bancos_actualizar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_finanzas_bancos_01_id,  	cat_finanzas_bancos_cuentas_id,  	vigente,  	cat_finanzas_movimientos_id,  	cat_ventas_clientes_id,  	cat_compras_proveedores_id,  	fecha_bancos,  	concepto_general,  	ingreso,  	egreso,  	poliza,  	referencia_general,  	centro_de_costos,  	fecha_registro,  	capturista,  	referencia_documento,  	cat_almacen_id,  	poliza_contpaq,  	llave_contpaq,  	cuenta_contable,  	poliza_ok,  	time_stamp,  	cuenta_contable_ok,  	consecutivo_upload_id,  	cat_produccion_temporadas_id,  	UUID,  	cat_finanzas_bancos_estatus_mu_id";
$proto0["m_strFrom"] = "FROM tr_finanzas_bancos_01";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto6["m_sql"] = "tr_finanzas_bancos_01_id";
$proto6["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_bancos_cuentas_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto8["m_sql"] = "cat_finanzas_bancos_cuentas_id";
$proto8["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto12["m_sql"] = "cat_finanzas_movimientos_id";
$proto12["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_clientes_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto14["m_sql"] = "cat_ventas_clientes_id";
$proto14["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto16["m_sql"] = "cat_compras_proveedores_id";
$proto16["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_bancos",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto18["m_sql"] = "fecha_bancos";
$proto18["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "concepto_general",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto20["m_sql"] = "concepto_general";
$proto20["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ingreso",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto22["m_sql"] = "ingreso";
$proto22["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "egreso",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto24["m_sql"] = "egreso";
$proto24["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "poliza",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto26["m_sql"] = "poliza";
$proto26["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "referencia_general",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto28["m_sql"] = "referencia_general";
$proto28["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "centro_de_costos",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto30["m_sql"] = "centro_de_costos";
$proto30["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_registro",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto32["m_sql"] = "fecha_registro";
$proto32["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto34["m_sql"] = "capturista";
$proto34["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "referencia_documento",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto36["m_sql"] = "referencia_documento";
$proto36["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_almacen_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto38["m_sql"] = "cat_almacen_id";
$proto38["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "poliza_contpaq",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto40["m_sql"] = "poliza_contpaq";
$proto40["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_contpaq",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto42["m_sql"] = "llave_contpaq";
$proto42["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cuenta_contable",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto44["m_sql"] = "cuenta_contable";
$proto44["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "poliza_ok",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto46["m_sql"] = "poliza_ok";
$proto46["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto48["m_sql"] = "time_stamp";
$proto48["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "cuenta_contable_ok",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto50["m_sql"] = "cuenta_contable_ok";
$proto50["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "consecutivo_upload_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto52["m_sql"] = "consecutivo_upload_id";
$proto52["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_temporadas_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto54["m_sql"] = "cat_produccion_temporadas_id";
$proto54["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "UUID",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto56["m_sql"] = "UUID";
$proto56["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_bancos_estatus_mu_id",
	"m_strTable" => "tr_finanzas_bancos_01",
	"m_srcTableName" => "tr_finanzas_bancos_actualizar"
));

$proto58["m_sql"] = "cat_finanzas_bancos_estatus_mu_id";
$proto58["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "tr_finanzas_bancos_01";
$proto61["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "tr_finanzas_bancos_01_id";
$proto61["m_columns"][] = "cat_finanzas_bancos_cuentas_id";
$proto61["m_columns"][] = "vigente";
$proto61["m_columns"][] = "cat_finanzas_movimientos_id";
$proto61["m_columns"][] = "cat_ventas_clientes_id";
$proto61["m_columns"][] = "cat_compras_proveedores_id";
$proto61["m_columns"][] = "fecha_bancos";
$proto61["m_columns"][] = "concepto_general";
$proto61["m_columns"][] = "ingreso";
$proto61["m_columns"][] = "egreso";
$proto61["m_columns"][] = "poliza";
$proto61["m_columns"][] = "referencia_general";
$proto61["m_columns"][] = "centro_de_costos";
$proto61["m_columns"][] = "fecha_registro";
$proto61["m_columns"][] = "capturista";
$proto61["m_columns"][] = "referencia_documento";
$proto61["m_columns"][] = "cat_almacen_id";
$proto61["m_columns"][] = "poliza_contpaq";
$proto61["m_columns"][] = "llave_contpaq";
$proto61["m_columns"][] = "cuenta_contable";
$proto61["m_columns"][] = "poliza_ok";
$proto61["m_columns"][] = "time_stamp";
$proto61["m_columns"][] = "cuenta_contable_ok";
$proto61["m_columns"][] = "consecutivo_upload_id";
$proto61["m_columns"][] = "cat_produccion_temporadas_id";
$proto61["m_columns"][] = "UUID";
$proto61["m_columns"][] = "cat_finanzas_bancos_estatus_mu_id";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "tr_finanzas_bancos_01";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "tr_finanzas_bancos_actualizar";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_finanzas_bancos_actualizar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_finanzas_bancos_actualizar = createSqlQuery_tr_finanzas_bancos_actualizar();


	
		;

																											

$tdatatr_finanzas_bancos_actualizar[".sqlquery"] = $queryData_tr_finanzas_bancos_actualizar;



include_once(getabspath("include/tr_finanzas_bancos_actualizar_events.php"));
$tdatatr_finanzas_bancos_actualizar[".hasEvents"] = true;

?>