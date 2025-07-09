<?php
$tdatatr_actividades_cosecha_consecutivo = array();
$tdatatr_actividades_cosecha_consecutivo[".searchableFields"] = array();
$tdatatr_actividades_cosecha_consecutivo[".ShortName"] = "tr_actividades_cosecha_consecutivo";
$tdatatr_actividades_cosecha_consecutivo[".OwnerID"] = "";
$tdatatr_actividades_cosecha_consecutivo[".OriginalTable"] = "tr_actividades_cosecha";


$tdatatr_actividades_cosecha_consecutivo[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_cosecha_consecutivo[".originalPagesByType"] = $tdatatr_actividades_cosecha_consecutivo[".pagesByType"];
$tdatatr_actividades_cosecha_consecutivo[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_cosecha_consecutivo[".originalPages"] = $tdatatr_actividades_cosecha_consecutivo[".pages"];
$tdatatr_actividades_cosecha_consecutivo[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatr_actividades_cosecha_consecutivo[".originalDefaultPages"] = $tdatatr_actividades_cosecha_consecutivo[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_cosecha_consecutivo = array();
$fieldToolTipstr_actividades_cosecha_consecutivo = array();
$pageTitlestr_actividades_cosecha_consecutivo = array();
$placeHolderstr_actividades_cosecha_consecutivo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"] = array();
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"] = array();
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"] = array();
	$pageTitlestr_actividades_cosecha_consecutivo["Spanish"] = array();
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["fecha_de_captura"] = "Fecha";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["fecha_de_captura"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "UP";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "Lotes";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["consecutivo_id"] = "Consecutivo";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["consecutivo_id"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["consecutivo_id"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["identificador_dispositivo"] = "Dispositivo";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["identificador_dispositivo"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["identificador_dispositivo"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["cat_actividades_especificas_id"] = "Actividad";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["cat_actividades_especificas_id"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["cat_actividades_especificas_id"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["hora"] = "Hora";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["hora"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["hora"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["tr_actividades_cosecha_id"] = "Id";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["tr_actividades_cosecha_id"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["tr_actividades_cosecha_id"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["Total_Botes"] = "Total Botes";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["Total_Botes"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["Total_Botes"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["Total_Descuento"] = "Total Descuento";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["Total_Descuento"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["Total_Descuento"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["Botes_Neto"] = "Botes Neto";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["Botes_Neto"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["Botes_Neto"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["capturista"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["capturista"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["llave_fcup"] = "Llave Fcup";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["llave_fcup"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["llave_fcup"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]["time_stamp"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo["Spanish"]["time_stamp"] = "";
	if (count($fieldToolTipstr_actividades_cosecha_consecutivo["Spanish"]))
		$tdatatr_actividades_cosecha_consecutivo[".isUseToolTips"] = true;
}





$tdatatr_actividades_cosecha_consecutivo[".shortTableName"] = "tr_actividades_cosecha_consecutivo";
$tdatatr_actividades_cosecha_consecutivo[".nSecOptions"] = 0;

$tdatatr_actividades_cosecha_consecutivo[".mainTableOwnerID"] = "";
$tdatatr_actividades_cosecha_consecutivo[".entityType"] = 1;
$tdatatr_actividades_cosecha_consecutivo[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_cosecha_consecutivo[".strOriginalTableName"] = "tr_actividades_cosecha";

	



$tdatatr_actividades_cosecha_consecutivo[".showAddInPopup"] = false;

$tdatatr_actividades_cosecha_consecutivo[".showEditInPopup"] = false;

$tdatatr_actividades_cosecha_consecutivo[".showViewInPopup"] = false;

$tdatatr_actividades_cosecha_consecutivo[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_cosecha_consecutivo[".listAjax"] = false;

	$tdatatr_actividades_cosecha_consecutivo[".audit"] = false;

	$tdatatr_actividades_cosecha_consecutivo[".locking"] = false;


$pages = $tdatatr_actividades_cosecha_consecutivo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_cosecha_consecutivo[".edit"] = true;
	$tdatatr_actividades_cosecha_consecutivo[".afterEditAction"] = 1;
	$tdatatr_actividades_cosecha_consecutivo[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_cosecha_consecutivo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_cosecha_consecutivo[".add"] = true;
$tdatatr_actividades_cosecha_consecutivo[".afterAddAction"] = 1;
$tdatatr_actividades_cosecha_consecutivo[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_cosecha_consecutivo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_cosecha_consecutivo[".list"] = true;
}



$tdatatr_actividades_cosecha_consecutivo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_cosecha_consecutivo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_cosecha_consecutivo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_cosecha_consecutivo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_cosecha_consecutivo[".printFriendly"] = true;
}



$tdatatr_actividades_cosecha_consecutivo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_cosecha_consecutivo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_cosecha_consecutivo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_cosecha_consecutivo[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_actividades_cosecha_consecutivo[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_cosecha_consecutivo[".buttonsAdded"] = false;

$tdatatr_actividades_cosecha_consecutivo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_actividades_cosecha_consecutivo[".isUseTimeForSearch"] = false;


$tdatatr_actividades_cosecha_consecutivo[".badgeColor"] = "778899";


$tdatatr_actividades_cosecha_consecutivo[".allSearchFields"] = array();
$tdatatr_actividades_cosecha_consecutivo[".filterFields"] = array();
$tdatatr_actividades_cosecha_consecutivo[".requiredSearchFields"] = array();

$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"] = array();
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "consecutivo_id";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "fecha_de_captura";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "hora";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "cat_actividades_especificas_id";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "identificador_dispositivo";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "llave_fcup";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "Total_Botes";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "Total_Descuento";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "Botes_Neto";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "tr_actividades_cosecha_id";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "capturista";
$tdatatr_actividades_cosecha_consecutivo[".googleLikeFields"][] = "time_stamp";



$tdatatr_actividades_cosecha_consecutivo[".tableType"] = "list";

$tdatatr_actividades_cosecha_consecutivo[".printerPageOrientation"] = 0;
$tdatatr_actividades_cosecha_consecutivo[".nPrinterPageScale"] = 100;

$tdatatr_actividades_cosecha_consecutivo[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_cosecha_consecutivo[".geocodingEnabled"] = false;





$tdatatr_actividades_cosecha_consecutivo[".isResizeColumns"] = true;





$tdatatr_actividades_cosecha_consecutivo[".pageSize"] = 20;

$tdatatr_actividades_cosecha_consecutivo[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tr_actividades_cosecha_id DESC";
$tdatatr_actividades_cosecha_consecutivo[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_cosecha_consecutivo[".orderindexes"] = array();
			$tdatatr_actividades_cosecha_consecutivo[".orderindexes"][] = array(12, (0 ? "ASC" : "DESC"), "tr_actividades_cosecha_id");


$tdatatr_actividades_cosecha_consecutivo[".sqlHead"] = "SELECT consecutivo_id,  fecha_de_captura,  fecha_de_captura AS hora,  cat_holding_03_empresas_unidades_productivas_id,  cat_holding_04_unidades_productivas_lotes_id,  cat_actividades_especificas_id,  identificador_dispositivo,  concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), ':', DATE_FORMAT(fecha_de_captura, '%H:%i'), '-', consecutivo_id, '-', cat_holding_03_empresas_unidades_productivas_id) AS llave_fcup,  SUM(cantidad) AS Total_Botes,  SUM(descuento) AS Total_Descuento,  SUM(cantidad - descuento) AS Botes_Neto,  tr_actividades_cosecha_id,  capturista,  time_stamp";
$tdatatr_actividades_cosecha_consecutivo[".sqlFrom"] = "FROM tr_actividades_cosecha";
$tdatatr_actividades_cosecha_consecutivo[".sqlWhereExpr"] = "";
$tdatatr_actividades_cosecha_consecutivo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_cosecha_consecutivo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_cosecha_consecutivo[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_cosecha_consecutivo[".highlightSearchResults"] = true;

$tableKeystr_actividades_cosecha_consecutivo = array();
$tableKeystr_actividades_cosecha_consecutivo[] = "tr_actividades_cosecha_id";
$tdatatr_actividades_cosecha_consecutivo[".Keys"] = $tableKeystr_actividades_cosecha_consecutivo;


$tdatatr_actividades_cosecha_consecutivo[".hideMobileList"] = array();




//	consecutivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "consecutivo_id";
	$fdata["GoodName"] = "consecutivo_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","consecutivo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "consecutivo_id";

		$fdata["sourceSingle"] = "consecutivo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consecutivo_id";

	
	
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


	$tdatatr_actividades_cosecha_consecutivo["consecutivo_id"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "consecutivo_id";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_captura";

	
	
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


	$tdatatr_actividades_cosecha_consecutivo["fecha_de_captura"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "fecha_de_captura";
//	hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hora";
	$fdata["GoodName"] = "hora";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","hora");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_captura";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);

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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatatr_actividades_cosecha_consecutivo["hora"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "hora";
//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","cat_holding_03_empresas_unidades_productivas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_03_empresas_unidades_productivas_id";

		$fdata["sourceSingle"] = "cat_holding_03_empresas_unidades_productivas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_03_empresas_unidades_productivas_id";

	
	
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
	$edata["LookupTable"] = "box_cat_holding_03_empresas_unidades_productivas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_holding_03_empresas_unidades_productivas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "UP";

	

	
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


	$tdatatr_actividades_cosecha_consecutivo["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","cat_holding_04_unidades_productivas_lotes_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_04_unidades_productivas_lotes_id";

		$fdata["sourceSingle"] = "cat_holding_04_unidades_productivas_lotes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_04_unidades_productivas_lotes_id";

	
	
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
	$edata["LookupTable"] = "box_cat_holding_04_unidades_productivas_lotes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_holding_04_unidades_productivas_lotes_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "lote";

	

	
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


	$tdatatr_actividades_cosecha_consecutivo["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
//	cat_actividades_especificas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_actividades_especificas_id";
	$fdata["GoodName"] = "cat_actividades_especificas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","cat_actividades_especificas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_especificas_id";

		$fdata["sourceSingle"] = "cat_actividades_especificas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas_id";

	
	
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
	$edata["LookupTable"] = "box_cat_actividades_especificas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_actividades_especificas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "actividad_especifica";

	

	
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


	$tdatatr_actividades_cosecha_consecutivo["cat_actividades_especificas_id"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "cat_actividades_especificas_id";
//	identificador_dispositivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "identificador_dispositivo";
	$fdata["GoodName"] = "identificador_dispositivo";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","identificador_dispositivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "identificador_dispositivo";

		$fdata["sourceSingle"] = "identificador_dispositivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identificador_dispositivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 10;

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


	$tdatatr_actividades_cosecha_consecutivo["identificador_dispositivo"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "identificador_dispositivo";
//	llave_fcup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "llave_fcup";
	$fdata["GoodName"] = "llave_fcup";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","llave_fcup");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fcup";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), ':', DATE_FORMAT(fecha_de_captura, '%H:%i'), '-', consecutivo_id, '-', cat_holding_03_empresas_unidades_productivas_id)";

	
	
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


	$tdatatr_actividades_cosecha_consecutivo["llave_fcup"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "llave_fcup";
//	Total_Botes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Total_Botes";
	$fdata["GoodName"] = "Total_Botes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","Total_Botes");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Total_Botes";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(cantidad)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatatr_actividades_cosecha_consecutivo["Total_Botes"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "Total_Botes";
//	Total_Descuento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Total_Descuento";
	$fdata["GoodName"] = "Total_Descuento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","Total_Descuento");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Total_Descuento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(descuento)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatatr_actividades_cosecha_consecutivo["Total_Descuento"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "Total_Descuento";
//	Botes_Neto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Botes_Neto";
	$fdata["GoodName"] = "Botes_Neto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","Botes_Neto");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Botes_Neto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(cantidad - descuento)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatatr_actividades_cosecha_consecutivo["Botes_Neto"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "Botes_Neto";
//	tr_actividades_cosecha_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tr_actividades_cosecha_id";
	$fdata["GoodName"] = "tr_actividades_cosecha_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","tr_actividades_cosecha_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_actividades_cosecha_id";

		$fdata["sourceSingle"] = "tr_actividades_cosecha_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha_id";

	
	
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


	$tdatatr_actividades_cosecha_consecutivo["tr_actividades_cosecha_id"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "tr_actividades_cosecha_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","capturista");
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


	$tdatatr_actividades_cosecha_consecutivo["capturista"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "time_stamp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatatr_actividades_cosecha_consecutivo["time_stamp"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo[".searchableFields"][] = "time_stamp";


$tables_data["tr_actividades_cosecha_consecutivo"]=&$tdatatr_actividades_cosecha_consecutivo;
$field_labels["tr_actividades_cosecha_consecutivo"] = &$fieldLabelstr_actividades_cosecha_consecutivo;
$fieldToolTips["tr_actividades_cosecha_consecutivo"] = &$fieldToolTipstr_actividades_cosecha_consecutivo;
$placeHolders["tr_actividades_cosecha_consecutivo"] = &$placeHolderstr_actividades_cosecha_consecutivo;
$page_titles["tr_actividades_cosecha_consecutivo"] = &$pageTitlestr_actividades_cosecha_consecutivo;


changeTextControlsToDate( "tr_actividades_cosecha_consecutivo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_cosecha_consecutivo"] = array();
//	tr_actividades_cosecha_consecutivo_detalle
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tr_actividades_cosecha_consecutivo_detalle";
		$detailsParam["dOriginalTable"] = "tr_actividades_cosecha";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tr_actividades_cosecha_consecutivo_detalle";
	$detailsParam["dCaptionTable"] = GetTableCaption("tr_actividades_cosecha_consecutivo_detalle");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tr_actividades_cosecha_consecutivo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tr_actividades_cosecha_consecutivo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tr_actividades_cosecha_consecutivo"][$dIndex]["masterKeys"][]="llave_fcup";

				$detailsTablesData["tr_actividades_cosecha_consecutivo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tr_actividades_cosecha_consecutivo"][$dIndex]["detailKeys"][]="llave_fcup";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_cosecha_consecutivo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_cosecha_consecutivo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "consecutivo_id,  fecha_de_captura,  fecha_de_captura AS hora,  cat_holding_03_empresas_unidades_productivas_id,  cat_holding_04_unidades_productivas_lotes_id,  cat_actividades_especificas_id,  identificador_dispositivo,  concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), ':', DATE_FORMAT(fecha_de_captura, '%H:%i'), '-', consecutivo_id, '-', cat_holding_03_empresas_unidades_productivas_id) AS llave_fcup,  SUM(cantidad) AS Total_Botes,  SUM(descuento) AS Total_Descuento,  SUM(cantidad - descuento) AS Botes_Neto,  tr_actividades_cosecha_id,  capturista,  time_stamp";
$proto0["m_strFrom"] = "FROM tr_actividades_cosecha";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tr_actividades_cosecha_id DESC";
	
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
	"m_strName" => "consecutivo_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto6["m_sql"] = "consecutivo_id";
$proto6["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto8["m_sql"] = "fecha_de_captura";
$proto8["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto10["m_sql"] = "fecha_de_captura";
$proto10["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "hora";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto12["m_sql"] = "cat_holding_03_empresas_unidades_productivas_id";
$proto12["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto14["m_sql"] = "cat_holding_04_unidades_productivas_lotes_id";
$proto14["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_especificas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto16["m_sql"] = "cat_actividades_especificas_id";
$proto16["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "identificador_dispositivo",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto18["m_sql"] = "identificador_dispositivo";
$proto18["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATE_FORMAT(fecha_de_captura, '%Y-%d-%m')"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "':'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATE_FORMAT(fecha_de_captura, '%H:%i')"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "consecutivo_id"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_holding_03_empresas_unidades_productivas_id"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), ':', DATE_FORMAT(fecha_de_captura, '%H:%i'), '-', consecutivo_id, '-', cat_holding_03_empresas_unidades_productivas_id)";
$proto20["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "llave_fcup";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$proto30=array();
$proto30["m_functiontype"] = "SQLF_SUM";
$proto30["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto30);

$proto29["m_sql"] = "SUM(cantidad)";
$proto29["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "Total_Botes";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$proto33=array();
$proto33["m_functiontype"] = "SQLF_SUM";
$proto33["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "descuento",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto33["m_arguments"][]=$obj;
$proto33["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto33);

$proto32["m_sql"] = "SUM(descuento)";
$proto32["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "Total_Descuento";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$proto36=array();
$proto36["m_functiontype"] = "SQLF_SUM";
$proto36["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cantidad - descuento"
));

$proto36["m_arguments"][]=$obj;
$proto36["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto36);

$proto35["m_sql"] = "SUM(cantidad - descuento)";
$proto35["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "Botes_Neto";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_actividades_cosecha_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto38["m_sql"] = "tr_actividades_cosecha_id";
$proto38["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto40["m_sql"] = "capturista";
$proto40["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto42["m_sql"] = "time_stamp";
$proto42["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "tr_actividades_cosecha";
$proto45["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "calidad";
$proto45["m_columns"][] = "cantidad";
$proto45["m_columns"][] = "capturista";
$proto45["m_columns"][] = "cat_actividades_especificas_id";
$proto45["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto45["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto45["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto45["m_columns"][] = "cat_nominas_02_actividades_id";
$proto45["m_columns"][] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
$proto45["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto45["m_columns"][] = "cat_produccion_empaques_id";
$proto45["m_columns"][] = "cat_trabajador_altas_id";
$proto45["m_columns"][] = "cat_usuarios_licencias_id";
$proto45["m_columns"][] = "consecutivo_id";
$proto45["m_columns"][] = "descuento";
$proto45["m_columns"][] = "fecha";
$proto45["m_columns"][] = "fecha_de_captura";
$proto45["m_columns"][] = "identificador_dispositivo";
$proto45["m_columns"][] = "Lat";
$proto45["m_columns"][] = "llave_fecha_nominas_uuid";
$proto45["m_columns"][] = "llave_fecha_trabajador";
$proto45["m_columns"][] = "llave_fecha_trabajador_actividad";
$proto45["m_columns"][] = "llave_fecha_trabajador_catnominas02actividades";
$proto45["m_columns"][] = "llave_fecha_up_consecutivo";
$proto45["m_columns"][] = "llave_fecha_up_consecutivo_trab";
$proto45["m_columns"][] = "llave_up_lote_actesp_prod";
$proto45["m_columns"][] = "llave_up_lote_actesp_prod_uuid";
$proto45["m_columns"][] = "Lng";
$proto45["m_columns"][] = "numero_de_bote";
$proto45["m_columns"][] = "peso";
$proto45["m_columns"][] = "surco";
$proto45["m_columns"][] = "time_stamp";
$proto45["m_columns"][] = "tr_actividades_cosecha_id";
$proto45["m_columns"][] = "tr_actividades_cosecha_uuid";
$proto45["m_columns"][] = "tunel";
$proto45["m_columns"][] = "vigente";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "tr_actividades_cosecha";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "tr_actividades_cosecha_consecutivo";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "consecutivo_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto50["m_column"]=$obj;
$obj = new SQLGroupByItem($proto50);

$proto0["m_groupby"][]=$obj;
												$proto52=array();
						$proto53=array();
$proto53["m_functiontype"] = "SQLF_CUSTOM";
$proto53["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "fecha_de_captura"
));

$proto53["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'%Y-%d-%m'"
));

$proto53["m_arguments"][]=$obj;
$proto53["m_strFunctionName"] = "DATE_FORMAT";
$obj = new SQLFunctionCall($proto53);

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "tr_actividades_cosecha_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo"
));

$proto56["m_column"]=$obj;
$proto56["m_bAsc"] = 0;
$proto56["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto56);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tr_actividades_cosecha_consecutivo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_cosecha_consecutivo = createSqlQuery_tr_actividades_cosecha_consecutivo();


	
		;

														

$tdatatr_actividades_cosecha_consecutivo[".sqlquery"] = $queryData_tr_actividades_cosecha_consecutivo;



$tdatatr_actividades_cosecha_consecutivo[".hasEvents"] = false;

?>