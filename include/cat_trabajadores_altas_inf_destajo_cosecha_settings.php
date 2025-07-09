<?php
$tdatacat_trabajadores_altas_inf_destajo_cosecha = array();
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".searchableFields"] = array();
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".ShortName"] = "cat_trabajadores_altas_inf_destajo_cosecha";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".OriginalTable"] = "cat_trabajadores_altas";


$tdatacat_trabajadores_altas_inf_destajo_cosecha[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".originalPagesByType"] = $tdatacat_trabajadores_altas_inf_destajo_cosecha[".pagesByType"];
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".originalPages"] = $tdatacat_trabajadores_altas_inf_destajo_cosecha[".pages"];
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".originalDefaultPages"] = $tdatacat_trabajadores_altas_inf_destajo_cosecha[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_altas_inf_destajo_cosecha = array();
$fieldToolTipscat_trabajadores_altas_inf_destajo_cosecha = array();
$pageTitlescat_trabajadores_altas_inf_destajo_cosecha = array();
$placeHolderscat_trabajadores_altas_inf_destajo_cosecha = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_altas_inf_destajo_cosecha["Spanish"] = array();
	$fieldToolTipscat_trabajadores_altas_inf_destajo_cosecha["Spanish"] = array();
	$placeHolderscat_trabajadores_altas_inf_destajo_cosecha["Spanish"] = array();
	$pageTitlescat_trabajadores_altas_inf_destajo_cosecha["Spanish"] = array();
	$fieldLabelscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["cat_trabajadores_altas_id"] = "trab_id";
	$fieldToolTipscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["nombre_completo"] = "";
	$placeHolderscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["nombre_completo"] = "";
	$fieldLabelscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["fecha_actividad"] = "Fecha Actividad";
	$fieldToolTipscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["fecha_actividad"] = "";
	$placeHolderscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["fecha_actividad"] = "";
	$fieldLabelscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["origen"] = "Origen";
	$fieldToolTipscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["origen"] = "";
	$placeHolderscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]["origen"] = "";
	if (count($fieldToolTipscat_trabajadores_altas_inf_destajo_cosecha["Spanish"]))
		$tdatacat_trabajadores_altas_inf_destajo_cosecha[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_altas_inf_destajo_cosecha[".shortTableName"] = "cat_trabajadores_altas_inf_destajo_cosecha";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".nSecOptions"] = 0;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".entityType"] = 1;
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_altas_inf_destajo_cosecha[".strOriginalTableName"] = "cat_trabajadores_altas";

	



$tdatacat_trabajadores_altas_inf_destajo_cosecha[".showAddInPopup"] = false;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".showEditInPopup"] = false;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".showViewInPopup"] = false;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_altas_inf_destajo_cosecha[".listAjax"] = false;

	$tdatacat_trabajadores_altas_inf_destajo_cosecha[".audit"] = true;

	$tdatacat_trabajadores_altas_inf_destajo_cosecha[".locking"] = true;


$pages = $tdatacat_trabajadores_altas_inf_destajo_cosecha[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_altas_inf_destajo_cosecha[".edit"] = true;
	$tdatacat_trabajadores_altas_inf_destajo_cosecha[".afterEditAction"] = 1;
	$tdatacat_trabajadores_altas_inf_destajo_cosecha[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_altas_inf_destajo_cosecha[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".add"] = true;
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".afterAddAction"] = 1;
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_altas_inf_destajo_cosecha[".list"] = true;
}



$tdatacat_trabajadores_altas_inf_destajo_cosecha[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".printFriendly"] = true;
}



$tdatacat_trabajadores_altas_inf_destajo_cosecha[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".buttonsAdded"] = false;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_altas_inf_destajo_cosecha[".badgeColor"] = "4169E1";


$tdatacat_trabajadores_altas_inf_destajo_cosecha[".allSearchFields"] = array();
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".filterFields"] = array();
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".requiredSearchFields"] = array();

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".googleLikeFields"] = array();
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".googleLikeFields"][] = "nombre_completo";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".googleLikeFields"][] = "fecha_actividad";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".googleLikeFields"][] = "origen";



$tdatacat_trabajadores_altas_inf_destajo_cosecha[".tableType"] = "list";

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".geocodingEnabled"] = false;





$tdatacat_trabajadores_altas_inf_destajo_cosecha[".isResizeColumns"] = true;





$tdatacat_trabajadores_altas_inf_destajo_cosecha[".pageSize"] = 20;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".orderindexes"] = array();


$tdatacat_trabajadores_altas_inf_destajo_cosecha[".sqlHead"] = "SELECT ta.cat_trabajadores_altas_id,      ta.nombre_completo,      DATE(cult.fecha_de_captura) AS fecha_actividad,      'tr_actividades_culturales_01' AS origen";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".sqlFrom"] = "FROM       cat_trabajadores_altas AS ta  JOIN       tr_actividades_culturales_01 AS cult       ON ta.cat_trabajadores_altas_id = cult.cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".sqlWhereExpr"] = "ta.vigente = 1       AND NOT EXISTS (          SELECT 1           FROM tr_actividades_asistencias_app AS asist           WHERE ta.cat_trabajadores_altas_id = asist.cat_trabajadores_altas_id                 AND DATE(cult.fecha_de_captura) = DATE(asist.fecha_de_captura)      )";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".sqlTail"] = "UNION    SELECT       ta.cat_trabajadores_altas_id,      ta.nombre_completo,      DATE(cosecha.fecha_de_captura) AS fecha_actividad,      'tr_actividades_cosecha' AS origen  FROM       cat_trabajadores_altas AS ta  JOIN       tr_actividades_cosecha AS cosecha       ON ta.cat_trabajadores_altas_id = cosecha.cat_trabajador_altas_id   WHERE       ta.vigente = 1       AND NOT EXISTS (          SELECT 1           FROM tr_actividades_asistencias_app AS asist           WHERE ta.cat_trabajadores_altas_id = asist.cat_trabajadores_altas_id                 AND DATE(cosecha.fecha_de_captura) = DATE(asist.fecha_de_captura)      )    ORDER BY fecha_actividad, cat_trabajadores_altas_id";

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
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_altas_inf_destajo_cosecha = array();
$tableKeyscat_trabajadores_altas_inf_destajo_cosecha[] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas_inf_destajo_cosecha[".Keys"] = $tableKeyscat_trabajadores_altas_inf_destajo_cosecha;


$tdatacat_trabajadores_altas_inf_destajo_cosecha[".hideMobileList"] = array();




//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_inf_destajo_cosecha","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ta.cat_trabajadores_altas_id";

	
	
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


	$tdatacat_trabajadores_altas_inf_destajo_cosecha["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_altas_inf_destajo_cosecha[".searchableFields"][] = "cat_trabajadores_altas_id";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_inf_destajo_cosecha","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

		$fdata["sourceSingle"] = "nombre_completo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ta.nombre_completo";

	
	
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


	$tdatacat_trabajadores_altas_inf_destajo_cosecha["nombre_completo"] = $fdata;
		$tdatacat_trabajadores_altas_inf_destajo_cosecha[".searchableFields"][] = "nombre_completo";
//	fecha_actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_actividad";
	$fdata["GoodName"] = "fecha_actividad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_inf_destajo_cosecha","fecha_actividad");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_actividad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(cult.fecha_de_captura)";

	
	
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


	$tdatacat_trabajadores_altas_inf_destajo_cosecha["fecha_actividad"] = $fdata;
		$tdatacat_trabajadores_altas_inf_destajo_cosecha[".searchableFields"][] = "fecha_actividad";
//	origen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "origen";
	$fdata["GoodName"] = "origen";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_inf_destajo_cosecha","origen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "origen";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'tr_actividades_culturales_01'";

	
	
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


	$tdatacat_trabajadores_altas_inf_destajo_cosecha["origen"] = $fdata;
		$tdatacat_trabajadores_altas_inf_destajo_cosecha[".searchableFields"][] = "origen";


$tables_data["cat_trabajadores_altas_inf_destajo_cosecha"]=&$tdatacat_trabajadores_altas_inf_destajo_cosecha;
$field_labels["cat_trabajadores_altas_inf_destajo_cosecha"] = &$fieldLabelscat_trabajadores_altas_inf_destajo_cosecha;
$fieldToolTips["cat_trabajadores_altas_inf_destajo_cosecha"] = &$fieldToolTipscat_trabajadores_altas_inf_destajo_cosecha;
$placeHolders["cat_trabajadores_altas_inf_destajo_cosecha"] = &$placeHolderscat_trabajadores_altas_inf_destajo_cosecha;
$page_titles["cat_trabajadores_altas_inf_destajo_cosecha"] = &$pageTitlescat_trabajadores_altas_inf_destajo_cosecha;


changeTextControlsToDate( "cat_trabajadores_altas_inf_destajo_cosecha" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_altas_inf_destajo_cosecha"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_altas_inf_destajo_cosecha"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_altas_inf_destajo_cosecha()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ta.cat_trabajadores_altas_id,      ta.nombre_completo,      DATE(cult.fecha_de_captura) AS fecha_actividad,      'tr_actividades_culturales_01' AS origen";
$proto0["m_strFrom"] = "FROM       cat_trabajadores_altas AS ta  JOIN       tr_actividades_culturales_01 AS cult       ON ta.cat_trabajadores_altas_id = cult.cat_trabajadores_altas_id";
$proto0["m_strWhere"] = "ta.vigente = 1       AND NOT EXISTS (          SELECT 1           FROM tr_actividades_asistencias_app AS asist           WHERE ta.cat_trabajadores_altas_id = asist.cat_trabajadores_altas_id                 AND DATE(cult.fecha_de_captura) = DATE(asist.fecha_de_captura)      )";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "ta.vigente = 1       AND NOT EXISTS (          SELECT 1           FROM tr_actividades_asistencias_app AS asist           WHERE ta.cat_trabajadores_altas_id = asist.cat_trabajadores_altas_id                 AND DATE(cult.fecha_de_captura) = DATE(asist.fecha_de_captura)      )";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "ta.vigente = 1       AND NOT EXISTS (          SELECT 1           FROM tr_actividades_asistencias_app AS asist           WHERE ta.cat_trabajadores_altas_id = asist.cat_trabajadores_altas_id                 AND DATE(cult.fecha_de_captura) = DATE(asist.fecha_de_captura)      )"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "ta.vigente = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "ta",
	"m_srcTableName" => "cat_trabajadores_altas_inf_destajo_cosecha"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "NOT EXISTS (          SELECT 1           FROM tr_actividades_asistencias_app AS asist           WHERE ta.cat_trabajadores_altas_id = asist.cat_trabajadores_altas_id                 AND DATE(cult.fecha_de_captura) = DATE(asist.fecha_de_captura)      )";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SELECT 1           FROM tr_actividades_asistencias_app AS asist           WHERE ta.cat_trabajadores_altas_id = asist.cat_trabajadores_altas_id                 AND DATE(cult.fecha_de_captura) = DATE(asist.fecha_de_captura)"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "EXISTS";
$obj = new SQLFunctionCall($proto7);

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "NOT";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "ta",
	"m_srcTableName" => "cat_trabajadores_altas_inf_destajo_cosecha"
));

$proto11["m_sql"] = "ta.cat_trabajadores_altas_id";
$proto11["m_srcTableName"] = "cat_trabajadores_altas_inf_destajo_cosecha";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "ta",
	"m_srcTableName" => "cat_trabajadores_altas_inf_destajo_cosecha"
));

$proto13["m_sql"] = "ta.nombre_completo";
$proto13["m_srcTableName"] = "cat_trabajadores_altas_inf_destajo_cosecha";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_CUSTOM";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cult.fecha_de_captura"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "DATE(cult.fecha_de_captura)";
$proto15["m_srcTableName"] = "cat_trabajadores_altas_inf_destajo_cosecha";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "fecha_actividad";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'tr_actividades_culturales_01'"
));

$proto18["m_sql"] = "'tr_actividades_culturales_01'";
$proto18["m_srcTableName"] = "cat_trabajadores_altas_inf_destajo_cosecha";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "origen";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "cat_trabajadores_altas";
$proto21["m_srcTableName"] = "cat_trabajadores_altas_inf_destajo_cosecha";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_trabajadores_altas_id";
$proto21["m_columns"][] = "time_stamp";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "fecha_de_registro";
$proto21["m_columns"][] = "apellido_paterno";
$proto21["m_columns"][] = "apellido_materno";
$proto21["m_columns"][] = "primer_nombre";
$proto21["m_columns"][] = "segundo_nombre";
$proto21["m_columns"][] = "rfc";
$proto21["m_columns"][] = "curp";
$proto21["m_columns"][] = "num_seguridad_social";
$proto21["m_columns"][] = "municipio_nacimiento";
$proto21["m_columns"][] = "estado_nacimiento";
$proto21["m_columns"][] = "nacionalidad";
$proto21["m_columns"][] = "telefono_emergencia";
$proto21["m_columns"][] = "contacto_emergencia";
$proto21["m_columns"][] = "nombre_completo";
$proto21["m_columns"][] = "fecha_de_nacimiento";
$proto21["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto21["m_columns"][] = "celular_mensajes";
$proto21["m_columns"][] = "permiso_msm";
$proto21["m_columns"][] = "estatus";
$proto21["m_columns"][] = "fecha_de_captura";
$proto21["m_columns"][] = "face_id";
$proto21["m_columns"][] = "tr_tags_numero_asignado";
$proto21["m_columns"][] = "cat_trabajadores_puestos_id";
$proto21["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto21["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto21["m_columns"][] = "calle";
$proto21["m_columns"][] = "colonia";
$proto21["m_columns"][] = "municipio";
$proto21["m_columns"][] = "estado";
$proto21["m_columns"][] = "codigo_postal";
$proto21["m_columns"][] = "banco";
$proto21["m_columns"][] = "cuenta_bancaria";
$proto21["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto21["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto21["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto21["m_columns"][] = "cat_holding_02_empresas";
$proto21["m_columns"][] = "fecha_de_ingreso";
$proto21["m_columns"][] = "numero_domicilio";
$proto21["m_columns"][] = "observaciones";
$proto21["m_columns"][] = "link_foto";
$proto21["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto21["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "cat_trabajadores_altas AS ta";
$proto20["m_alias"] = "ta";
$proto20["m_srcTableName"] = "cat_trabajadores_altas_inf_destajo_cosecha";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "tr_actividades_culturales_01";
$proto25["m_srcTableName"] = "cat_trabajadores_altas_inf_destajo_cosecha";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "tr_actividades_culturales_01_id";
$proto25["m_columns"][] = "tr_actividades_culturales_01_uuid";
$proto25["m_columns"][] = "consecutivo_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "fecha_de_captura";
$proto25["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto25["m_columns"][] = "cat_actividades_especificas_id";
$proto25["m_columns"][] = "cantidad";
$proto25["m_columns"][] = "cat_actividades_unidades_de_costo_id";
$proto25["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto25["m_columns"][] = "surco";
$proto25["m_columns"][] = "tunel";
$proto25["m_columns"][] = "Lat";
$proto25["m_columns"][] = "Lng";
$proto25["m_columns"][] = "cat_nominas_02_actividades_id";
$proto25["m_columns"][] = "cat_trabajadores_altas_id";
$proto25["m_columns"][] = "costo_bruto";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "JOIN       tr_actividades_culturales_01 AS cult       ON ta.cat_trabajadores_altas_id = cult.cat_trabajadores_altas_id";
$proto24["m_alias"] = "cult";
$proto24["m_srcTableName"] = "cat_trabajadores_altas_inf_destajo_cosecha";
$proto26=array();
$proto26["m_sql"] = "cult.cat_trabajadores_altas_id = ta.cat_trabajadores_altas_id";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cult",
	"m_srcTableName" => "cat_trabajadores_altas_inf_destajo_cosecha"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= ta.cat_trabajadores_altas_id";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_altas_inf_destajo_cosecha";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_altas_inf_destajo_cosecha = createSqlQuery_cat_trabajadores_altas_inf_destajo_cosecha();


	
		;

				

$tdatacat_trabajadores_altas_inf_destajo_cosecha[".sqlquery"] = $queryData_cat_trabajadores_altas_inf_destajo_cosecha;



$tdatacat_trabajadores_altas_inf_destajo_cosecha[".hasEvents"] = false;

?>