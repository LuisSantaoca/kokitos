<?php
$tdatatr_compras_requisiciones_2 = array();
$tdatatr_compras_requisiciones_2[".searchableFields"] = array();
$tdatatr_compras_requisiciones_2[".ShortName"] = "tr_compras_requisiciones_2";
$tdatatr_compras_requisiciones_2[".OwnerID"] = "";
$tdatatr_compras_requisiciones_2[".OriginalTable"] = "tr_compras_requisiciones_01";


$tdatatr_compras_requisiciones_2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatr_compras_requisiciones_2[".originalPagesByType"] = $tdatatr_compras_requisiciones_2[".pagesByType"];
$tdatatr_compras_requisiciones_2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatr_compras_requisiciones_2[".originalPages"] = $tdatatr_compras_requisiciones_2[".pages"];
$tdatatr_compras_requisiciones_2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatr_compras_requisiciones_2[".originalDefaultPages"] = $tdatatr_compras_requisiciones_2[".defaultPages"];

//	field labels
$fieldLabelstr_compras_requisiciones_2 = array();
$fieldToolTipstr_compras_requisiciones_2 = array();
$pageTitlestr_compras_requisiciones_2 = array();
$placeHolderstr_compras_requisiciones_2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_compras_requisiciones_2["Spanish"] = array();
	$fieldToolTipstr_compras_requisiciones_2["Spanish"] = array();
	$placeHolderstr_compras_requisiciones_2["Spanish"] = array();
	$pageTitlestr_compras_requisiciones_2["Spanish"] = array();
	$fieldLabelstr_compras_requisiciones_2["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_compras_requisiciones_2["Spanish"]["vigente"] = "";
	$placeHolderstr_compras_requisiciones_2["Spanish"]["vigente"] = "";
	$fieldLabelstr_compras_requisiciones_2["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_compras_requisiciones_2["Spanish"]["capturista"] = "";
	$placeHolderstr_compras_requisiciones_2["Spanish"]["capturista"] = "";
	$fieldLabelstr_compras_requisiciones_2["Spanish"]["fecha_de_compra"] = "Fecha De Compra";
	$fieldToolTipstr_compras_requisiciones_2["Spanish"]["fecha_de_compra"] = "";
	$placeHolderstr_compras_requisiciones_2["Spanish"]["fecha_de_compra"] = "";
	$fieldLabelstr_compras_requisiciones_2["Spanish"]["cat_compras_proveedores_id"] = "Proveedor";
	$fieldToolTipstr_compras_requisiciones_2["Spanish"]["cat_compras_proveedores_id"] = "";
	$placeHolderstr_compras_requisiciones_2["Spanish"]["cat_compras_proveedores_id"] = "";
	$fieldLabelstr_compras_requisiciones_2["Spanish"]["importe_abono_compra"] = "Importe compra";
	$fieldToolTipstr_compras_requisiciones_2["Spanish"]["importe_abono_compra"] = "";
	$placeHolderstr_compras_requisiciones_2["Spanish"]["importe_abono_compra"] = "";
	$fieldLabelstr_compras_requisiciones_2["Spanish"]["uuid_cargo_abono_compra"] = "Uuid Cargo Abono Compra";
	$fieldToolTipstr_compras_requisiciones_2["Spanish"]["uuid_cargo_abono_compra"] = "";
	$placeHolderstr_compras_requisiciones_2["Spanish"]["uuid_cargo_abono_compra"] = "";
	$fieldLabelstr_compras_requisiciones_2["Spanish"]["concepto"] = "Concepto";
	$fieldToolTipstr_compras_requisiciones_2["Spanish"]["concepto"] = "";
	$placeHolderstr_compras_requisiciones_2["Spanish"]["concepto"] = "";
	$fieldLabelstr_compras_requisiciones_2["Spanish"]["tr_compras_requisiciones_01_uuid"] = "Uuid";
	$fieldToolTipstr_compras_requisiciones_2["Spanish"]["tr_compras_requisiciones_01_uuid"] = "";
	$placeHolderstr_compras_requisiciones_2["Spanish"]["tr_compras_requisiciones_01_uuid"] = "";
	if (count($fieldToolTipstr_compras_requisiciones_2["Spanish"]))
		$tdatatr_compras_requisiciones_2[".isUseToolTips"] = true;
}





$tdatatr_compras_requisiciones_2[".shortTableName"] = "tr_compras_requisiciones_2";
$tdatatr_compras_requisiciones_2[".nSecOptions"] = 0;

$tdatatr_compras_requisiciones_2[".mainTableOwnerID"] = "";
$tdatatr_compras_requisiciones_2[".entityType"] = 1;
$tdatatr_compras_requisiciones_2[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_compras_requisiciones_2[".strOriginalTableName"] = "tr_compras_requisiciones_01";

	



$tdatatr_compras_requisiciones_2[".showAddInPopup"] = false;

$tdatatr_compras_requisiciones_2[".showEditInPopup"] = false;

$tdatatr_compras_requisiciones_2[".showViewInPopup"] = false;

$tdatatr_compras_requisiciones_2[".listAjax"] = false;
//	temporary
//$tdatatr_compras_requisiciones_2[".listAjax"] = false;

	$tdatatr_compras_requisiciones_2[".audit"] = true;

	$tdatatr_compras_requisiciones_2[".locking"] = true;


$pages = $tdatatr_compras_requisiciones_2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_compras_requisiciones_2[".edit"] = true;
	$tdatatr_compras_requisiciones_2[".afterEditAction"] = 1;
	$tdatatr_compras_requisiciones_2[".closePopupAfterEdit"] = 1;
	$tdatatr_compras_requisiciones_2[".afterEditActionDetTable"] = "tr_compras_requisiciones_02_productos";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_compras_requisiciones_2[".add"] = true;
$tdatatr_compras_requisiciones_2[".afterAddAction"] = 5;
$tdatatr_compras_requisiciones_2[".closePopupAfterAdd"] = 1;
$tdatatr_compras_requisiciones_2[".afterAddActionDetTable"] = "tr_compras_requisiciones_02_cotizaciones";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_compras_requisiciones_2[".list"] = true;
}



$tdatatr_compras_requisiciones_2[".strSortControlSettingsJSON"] = "";

$tdatatr_compras_requisiciones_2[".strClickActionJSON"] = "{\"fields\":{\"capturista\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_compras_documentos_mu_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_compras_estatus_mu_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_compras_intermediarios_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_compras_proveedores_asignacion_mu_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_compras_proveedores_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_usuarios_licencias_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fecha_de_captura\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fecha_de_orden_de_compra\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"importe_neto_orden_de_compra\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"llave_tr_compras_requisiciones_01\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"llave_unica_fecha_folio_imei_usuario\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"numero_de_productos\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"observaciones\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"referencia_proveedor\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"time_stamp\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tr_compras_requisiciones_01_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tr_proyectos_productivos_01_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"vigente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"tr_compras_requisiciones_02_productos\"},\"openData\":{\"how\":\"goto\",\"page\":\"details\",\"table\":\"tr_compras_requisiciones_02_productos\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatatr_compras_requisiciones_2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_compras_requisiciones_2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_compras_requisiciones_2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_compras_requisiciones_2[".printFriendly"] = true;
}



$tdatatr_compras_requisiciones_2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_compras_requisiciones_2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_compras_requisiciones_2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_compras_requisiciones_2[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_compras_requisiciones_2[".ajaxCodeSnippetAdded"] = false;

$tdatatr_compras_requisiciones_2[".buttonsAdded"] = false;

$tdatatr_compras_requisiciones_2[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatr_compras_requisiciones_2[".isUseTimeForSearch"] = false;


$tdatatr_compras_requisiciones_2[".badgeColor"] = "E8926F";


$tdatatr_compras_requisiciones_2[".allSearchFields"] = array();
$tdatatr_compras_requisiciones_2[".filterFields"] = array();
$tdatatr_compras_requisiciones_2[".requiredSearchFields"] = array();

$tdatatr_compras_requisiciones_2[".googleLikeFields"] = array();
$tdatatr_compras_requisiciones_2[".googleLikeFields"][] = "cat_compras_proveedores_id";
$tdatatr_compras_requisiciones_2[".googleLikeFields"][] = "fecha_de_compra";
$tdatatr_compras_requisiciones_2[".googleLikeFields"][] = "importe_abono_compra";
$tdatatr_compras_requisiciones_2[".googleLikeFields"][] = "concepto";
$tdatatr_compras_requisiciones_2[".googleLikeFields"][] = "capturista";
$tdatatr_compras_requisiciones_2[".googleLikeFields"][] = "vigente";
$tdatatr_compras_requisiciones_2[".googleLikeFields"][] = "uuid_cargo_abono_compra";
$tdatatr_compras_requisiciones_2[".googleLikeFields"][] = "tr_compras_requisiciones_01_uuid";



$tdatatr_compras_requisiciones_2[".tableType"] = "list";

$tdatatr_compras_requisiciones_2[".printerPageOrientation"] = 0;
$tdatatr_compras_requisiciones_2[".nPrinterPageScale"] = 100;

$tdatatr_compras_requisiciones_2[".nPrinterSplitRecords"] = 40;

$tdatatr_compras_requisiciones_2[".geocodingEnabled"] = false;





$tdatatr_compras_requisiciones_2[".isResizeColumns"] = true;





$tdatatr_compras_requisiciones_2[".pageSize"] = 20;

$tdatatr_compras_requisiciones_2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_compras_requisiciones_2[".strOrderBy"] = $tstrOrderBy;

$tdatatr_compras_requisiciones_2[".orderindexes"] = array();


$tdatatr_compras_requisiciones_2[".sqlHead"] = "SELECT tr_compras_requisiciones_02_productos.cat_compras_proveedores_id,  tr_compras_requisiciones_02_productos.fecha_de_transaccion AS fecha_de_compra,  SUM((tr_compras_requisiciones_02_productos.precio_neto *  tr_compras_requisiciones_02_productos.cantidad)) AS importe_abono_compra,  tr_compras_requisiciones_01.observaciones AS concepto,  tr_compras_requisiciones_01.capturista,  1 AS vigente,  concat(tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid, '-', tr_compras_requisiciones_02_productos.cat_compras_productos_id) AS uuid_cargo_abono_compra,  tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid";
$tdatatr_compras_requisiciones_2[".sqlFrom"] = "FROM tr_compras_requisiciones_01  LEFT OUTER JOIN tr_compras_requisiciones_02_productos ON tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid = tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid";
$tdatatr_compras_requisiciones_2[".sqlWhereExpr"] = "(tr_compras_requisiciones_01.cat_compras_estatus_mu_id =5)";
$tdatatr_compras_requisiciones_2[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "",
	'nameType' => 'Text',
	'where' => "cat_usuarios.cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatatr_compras_requisiciones_2[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_compras_requisiciones_2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_compras_requisiciones_2[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_compras_requisiciones_2[".highlightSearchResults"] = true;

$tableKeystr_compras_requisiciones_2 = array();
$tdatatr_compras_requisiciones_2[".Keys"] = $tableKeystr_compras_requisiciones_2;


$tdatatr_compras_requisiciones_2[".hideMobileList"] = array();




//	cat_compras_proveedores_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_proveedores_id";
	$fdata["GoodName"] = "cat_compras_proveedores_id";
	$fdata["ownerTable"] = "tr_compras_requisiciones_02_productos";
	$fdata["Label"] = GetFieldLabel("tr_compras_requisiciones_2","cat_compras_proveedores_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_proveedores_id";

		$fdata["sourceSingle"] = "cat_compras_proveedores_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_compras_requisiciones_02_productos.cat_compras_proveedores_id";

	
	
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


	$tdatatr_compras_requisiciones_2["cat_compras_proveedores_id"] = $fdata;
		$tdatatr_compras_requisiciones_2[".searchableFields"][] = "cat_compras_proveedores_id";
//	fecha_de_compra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_de_compra";
	$fdata["GoodName"] = "fecha_de_compra";
	$fdata["ownerTable"] = "tr_compras_requisiciones_02_productos";
	$fdata["Label"] = GetFieldLabel("tr_compras_requisiciones_2","fecha_de_compra");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_transaccion";

		$fdata["sourceSingle"] = "fecha_de_compra";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_compras_requisiciones_02_productos.fecha_de_transaccion";

	
	
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


	$tdatatr_compras_requisiciones_2["fecha_de_compra"] = $fdata;
		$tdatatr_compras_requisiciones_2[".searchableFields"][] = "fecha_de_compra";
//	importe_abono_compra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "importe_abono_compra";
	$fdata["GoodName"] = "importe_abono_compra";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_compras_requisiciones_2","importe_abono_compra");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "importe_abono_compra";

		$fdata["sourceSingle"] = "importe_abono_compra";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM((tr_compras_requisiciones_02_productos.precio_neto *  tr_compras_requisiciones_02_productos.cantidad))";

	
	
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


	$tdatatr_compras_requisiciones_2["importe_abono_compra"] = $fdata;
		$tdatatr_compras_requisiciones_2[".searchableFields"][] = "importe_abono_compra";
//	concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "concepto";
	$fdata["GoodName"] = "concepto";
	$fdata["ownerTable"] = "tr_compras_requisiciones_01";
	$fdata["Label"] = GetFieldLabel("tr_compras_requisiciones_2","concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observaciones";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_compras_requisiciones_01.observaciones";

	
	
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


	$tdatatr_compras_requisiciones_2["concepto"] = $fdata;
		$tdatatr_compras_requisiciones_2[".searchableFields"][] = "concepto";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_compras_requisiciones_01";
	$fdata["Label"] = GetFieldLabel("tr_compras_requisiciones_2","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_compras_requisiciones_01.capturista";

	
	
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


	$tdatatr_compras_requisiciones_2["capturista"] = $fdata;
		$tdatatr_compras_requisiciones_2[".searchableFields"][] = "capturista";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_compras_requisiciones_2","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "1";

	
	
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


	$tdatatr_compras_requisiciones_2["vigente"] = $fdata;
		$tdatatr_compras_requisiciones_2[".searchableFields"][] = "vigente";
//	uuid_cargo_abono_compra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "uuid_cargo_abono_compra";
	$fdata["GoodName"] = "uuid_cargo_abono_compra";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_compras_requisiciones_2","uuid_cargo_abono_compra");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uuid_cargo_abono_compra";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid, '-', tr_compras_requisiciones_02_productos.cat_compras_productos_id)";

	
	
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


	$tdatatr_compras_requisiciones_2["uuid_cargo_abono_compra"] = $fdata;
		$tdatatr_compras_requisiciones_2[".searchableFields"][] = "uuid_cargo_abono_compra";
//	tr_compras_requisiciones_01_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tr_compras_requisiciones_01_uuid";
	$fdata["GoodName"] = "tr_compras_requisiciones_01_uuid";
	$fdata["ownerTable"] = "tr_compras_requisiciones_01";
	$fdata["Label"] = GetFieldLabel("tr_compras_requisiciones_2","tr_compras_requisiciones_01_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tr_compras_requisiciones_01_uuid";

		$fdata["sourceSingle"] = "tr_compras_requisiciones_01_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid";

	
	
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


	$tdatatr_compras_requisiciones_2["tr_compras_requisiciones_01_uuid"] = $fdata;
		$tdatatr_compras_requisiciones_2[".searchableFields"][] = "tr_compras_requisiciones_01_uuid";


$tables_data["tr_compras_requisiciones_2"]=&$tdatatr_compras_requisiciones_2;
$field_labels["tr_compras_requisiciones_2"] = &$fieldLabelstr_compras_requisiciones_2;
$fieldToolTips["tr_compras_requisiciones_2"] = &$fieldToolTipstr_compras_requisiciones_2;
$placeHolders["tr_compras_requisiciones_2"] = &$placeHolderstr_compras_requisiciones_2;
$page_titles["tr_compras_requisiciones_2"] = &$pageTitlestr_compras_requisiciones_2;


changeTextControlsToDate( "tr_compras_requisiciones_2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_compras_requisiciones_2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_compras_requisiciones_2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_compras_requisiciones_2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_compras_requisiciones_02_productos.cat_compras_proveedores_id,  tr_compras_requisiciones_02_productos.fecha_de_transaccion AS fecha_de_compra,  SUM((tr_compras_requisiciones_02_productos.precio_neto *  tr_compras_requisiciones_02_productos.cantidad)) AS importe_abono_compra,  tr_compras_requisiciones_01.observaciones AS concepto,  tr_compras_requisiciones_01.capturista,  1 AS vigente,  concat(tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid, '-', tr_compras_requisiciones_02_productos.cat_compras_productos_id) AS uuid_cargo_abono_compra,  tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid";
$proto0["m_strFrom"] = "FROM tr_compras_requisiciones_01  LEFT OUTER JOIN tr_compras_requisiciones_02_productos ON tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid = tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid";
$proto0["m_strWhere"] = "(tr_compras_requisiciones_01.cat_compras_estatus_mu_id =5)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "tr_compras_requisiciones_01.cat_compras_estatus_mu_id =5";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_estatus_mu_id",
	"m_strTable" => "tr_compras_requisiciones_01",
	"m_srcTableName" => "tr_compras_requisiciones_2"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=5";
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
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "tr_compras_requisiciones_02_productos",
	"m_srcTableName" => "tr_compras_requisiciones_2"
));

$proto6["m_sql"] = "tr_compras_requisiciones_02_productos.cat_compras_proveedores_id";
$proto6["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_transaccion",
	"m_strTable" => "tr_compras_requisiciones_02_productos",
	"m_srcTableName" => "tr_compras_requisiciones_2"
));

$proto8["m_sql"] = "tr_compras_requisiciones_02_productos.fecha_de_transaccion";
$proto8["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "fecha_de_compra";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_SUM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(tr_compras_requisiciones_02_productos.precio_neto *  tr_compras_requisiciones_02_productos.cantidad)"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM((tr_compras_requisiciones_02_productos.precio_neto *  tr_compras_requisiciones_02_productos.cantidad))";
$proto10["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "importe_abono_compra";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones",
	"m_strTable" => "tr_compras_requisiciones_01",
	"m_srcTableName" => "tr_compras_requisiciones_2"
));

$proto13["m_sql"] = "tr_compras_requisiciones_01.observaciones";
$proto13["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "concepto";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_compras_requisiciones_01",
	"m_srcTableName" => "tr_compras_requisiciones_2"
));

$proto15["m_sql"] = "tr_compras_requisiciones_01.capturista";
$proto15["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto17["m_sql"] = "1";
$proto17["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "vigente";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_CUSTOM";
$proto20["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid"
));

$proto20["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto20["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "tr_compras_requisiciones_02_productos.cat_compras_productos_id"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "concat(tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid, '-', tr_compras_requisiciones_02_productos.cat_compras_productos_id)";
$proto19["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "uuid_cargo_abono_compra";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_compras_requisiciones_01_uuid",
	"m_strTable" => "tr_compras_requisiciones_01",
	"m_srcTableName" => "tr_compras_requisiciones_2"
));

$proto24["m_sql"] = "tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid";
$proto24["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "tr_compras_requisiciones_01";
$proto27["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "capturista";
$proto27["m_columns"][] = "capturista_que_autoriza";
$proto27["m_columns"][] = "cat_compras_documentos_mu_id";
$proto27["m_columns"][] = "cat_compras_estatus_mu_id";
$proto27["m_columns"][] = "cat_compras_proveedores_id";
$proto27["m_columns"][] = "cat_finanzas_bancos_cuentas_id";
$proto27["m_columns"][] = "cat_finanzas_cajas_chicas_id";
$proto27["m_columns"][] = "cat_finanzas_cuentas_de_balance_04_llave";
$proto27["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto27["m_columns"][] = "cat_trabajadores_altas_id_solicitante";
$proto27["m_columns"][] = "check_compra_directa";
$proto27["m_columns"][] = "consecutivo_pwa_id";
$proto27["m_columns"][] = "fecha_de_captura";
$proto27["m_columns"][] = "fecha_de_compra";
$proto27["m_columns"][] = "fecha_de_orden_de_compra";
$proto27["m_columns"][] = "fecha_de_pago";
$proto27["m_columns"][] = "importe_abono_compra";
$proto27["m_columns"][] = "importe_neto_orden_de_compra";
$proto27["m_columns"][] = "observacion_abono_compra";
$proto27["m_columns"][] = "observacion_cargo_pago";
$proto27["m_columns"][] = "observaciones";
$proto27["m_columns"][] = "orden_de_compra_proveedor";
$proto27["m_columns"][] = "referencia";
$proto27["m_columns"][] = "referencia_bancaria";
$proto27["m_columns"][] = "time_stamp";
$proto27["m_columns"][] = "tr_compras_requisiciones_01_id";
$proto27["m_columns"][] = "tr_compras_requisiciones_01_uuid";
$proto27["m_columns"][] = "uuid_sat";
$proto27["m_columns"][] = "vigente";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "tr_compras_requisiciones_01";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_LEFTJOIN";
			$proto31=array();
$proto31["m_strName"] = "tr_compras_requisiciones_02_productos";
$proto31["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "alias_cuenta_de_cargo";
$proto31["m_columns"][] = "alias_proveedor";
$proto31["m_columns"][] = "autorizado_check";
$proto31["m_columns"][] = "cantidad";
$proto31["m_columns"][] = "capturista";
$proto31["m_columns"][] = "capturista_que_autoriza";
$proto31["m_columns"][] = "cat_compras_almacenes_id";
$proto31["m_columns"][] = "cat_compras_productos_id";
$proto31["m_columns"][] = "cat_compras_proveedores_id";
$proto31["m_columns"][] = "cat_finanzas_cuentas_de_balance_04_llave";
$proto31["m_columns"][] = "check_producto_pagado";
$proto31["m_columns"][] = "consecutivo_pwa_id";
$proto31["m_columns"][] = "especificacion_producto";
$proto31["m_columns"][] = "fecha_de_autorizacion_requisicion";
$proto31["m_columns"][] = "fecha_de_cotizacion";
$proto31["m_columns"][] = "fecha_de_transaccion";
$proto31["m_columns"][] = "llave_uuid_proveedor";
$proto31["m_columns"][] = "observacion";
$proto31["m_columns"][] = "observacion_autoriza";
$proto31["m_columns"][] = "orden_de_compra_proveedor";
$proto31["m_columns"][] = "precio_neto";
$proto31["m_columns"][] = "time_stamp";
$proto31["m_columns"][] = "tr_compras_requisiciones_01_uuid";
$proto31["m_columns"][] = "tr_compras_requisiciones_02_productos_id";
$proto31["m_columns"][] = "ubicacion";
$proto31["m_columns"][] = "utilizacion";
$proto31["m_columns"][] = "vigente";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "LEFT OUTER JOIN tr_compras_requisiciones_02_productos ON tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid = tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "tr_compras_requisiciones_2";
$proto32=array();
$proto32["m_sql"] = "tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid = tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tr_compras_requisiciones_01_uuid",
	"m_strTable" => "tr_compras_requisiciones_02_productos",
	"m_srcTableName" => "tr_compras_requisiciones_2"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto34=array();
						$proto35=array();
$proto35["m_functiontype"] = "SQLF_CUSTOM";
$proto35["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid"
));

$proto35["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto35["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "tr_compras_requisiciones_02_productos.cat_compras_productos_id"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto35);

$proto34["m_column"]=$obj;
$obj = new SQLGroupByItem($proto34);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_compras_requisiciones_2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_compras_requisiciones_2 = createSqlQuery_tr_compras_requisiciones_2();


	
		;

								

$tdatatr_compras_requisiciones_2[".sqlquery"] = $queryData_tr_compras_requisiciones_2;



include_once(getabspath("include/tr_compras_requisiciones_2_events.php"));
$tdatatr_compras_requisiciones_2[".hasEvents"] = true;

?>