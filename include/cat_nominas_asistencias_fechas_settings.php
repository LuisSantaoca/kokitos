<?php
$tdatacat_nominas_asistencias_fechas = array();
$tdatacat_nominas_asistencias_fechas[".searchableFields"] = array();
$tdatacat_nominas_asistencias_fechas[".ShortName"] = "cat_nominas_asistencias_fechas";
$tdatacat_nominas_asistencias_fechas[".OwnerID"] = "";
$tdatacat_nominas_asistencias_fechas[".OriginalTable"] = "cat_nominas_asistencias_fechas";


$tdatacat_nominas_asistencias_fechas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_asistencias_fechas[".originalPagesByType"] = $tdatacat_nominas_asistencias_fechas[".pagesByType"];
$tdatacat_nominas_asistencias_fechas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_asistencias_fechas[".originalPages"] = $tdatacat_nominas_asistencias_fechas[".pages"];
$tdatacat_nominas_asistencias_fechas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_nominas_asistencias_fechas[".originalDefaultPages"] = $tdatacat_nominas_asistencias_fechas[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_asistencias_fechas = array();
$fieldToolTipscat_nominas_asistencias_fechas = array();
$pageTitlescat_nominas_asistencias_fechas = array();
$placeHolderscat_nominas_asistencias_fechas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"] = array();
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"] = array();
	$placeHolderscat_nominas_asistencias_fechas["Spanish"] = array();
	$pageTitlescat_nominas_asistencias_fechas["Spanish"] = array();
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["fecha"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["fecha"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["llave_fecha_licencia"] = "Llave Fecha Licencia";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["llave_fecha_licencia"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["llave_fecha_licencia"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["cat_nominas_01_generales_uuid"] = "Uuid";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["cat_nominas_01_generales_id"] = "Cat Nominas 01 Generales Id";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["cat_nominas_01_generales_id"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["cat_nominas_01_generales_id"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["dia_semana"] = "Dia Semana";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["dia_semana"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["dia_semana"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["dia_de_inicio"] = "Dia De Inicio";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["dia_de_inicio"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["dia_de_inicio"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["diferencia_factor"] = "Diferencia Factor";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["diferencia_factor"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["diferencia_factor"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["llave_dias_de_inicio"] = "Llave Dias De Inicio";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["llave_dias_de_inicio"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["llave_dias_de_inicio"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["llave_dias_de_inicio_nominas_uuid"] = "Llave Dias De Inicio Nominas Uuid";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["llave_dias_de_inicio_nominas_uuid"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["llave_dias_de_inicio_nominas_uuid"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["llave_fecha_nominas_uuid"] = "Llave Fecha Nominas Uuid";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["llave_fecha_nominas_uuid"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["llave_fecha_nominas_uuid"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["dia_inicio_consecutivo"] = "Dia Inicio Consecutivo";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["dia_inicio_consecutivo"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["dia_inicio_consecutivo"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["descripcion_nomina"] = "Descripcion";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["descripcion_nomina"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["descripcion_nomina"] = "";
	$fieldLabelscat_nominas_asistencias_fechas["Spanish"]["horas_semana_laboral"] = "Horas Semana Laboral";
	$fieldToolTipscat_nominas_asistencias_fechas["Spanish"]["horas_semana_laboral"] = "";
	$placeHolderscat_nominas_asistencias_fechas["Spanish"]["horas_semana_laboral"] = "";
	if (count($fieldToolTipscat_nominas_asistencias_fechas["Spanish"]))
		$tdatacat_nominas_asistencias_fechas[".isUseToolTips"] = true;
}





$tdatacat_nominas_asistencias_fechas[".shortTableName"] = "cat_nominas_asistencias_fechas";
$tdatacat_nominas_asistencias_fechas[".nSecOptions"] = 0;

$tdatacat_nominas_asistencias_fechas[".mainTableOwnerID"] = "";
$tdatacat_nominas_asistencias_fechas[".entityType"] = 0;
$tdatacat_nominas_asistencias_fechas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_asistencias_fechas[".strOriginalTableName"] = "cat_nominas_asistencias_fechas";

	



$tdatacat_nominas_asistencias_fechas[".showAddInPopup"] = false;

$tdatacat_nominas_asistencias_fechas[".showEditInPopup"] = false;

$tdatacat_nominas_asistencias_fechas[".showViewInPopup"] = false;

$tdatacat_nominas_asistencias_fechas[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_asistencias_fechas[".listAjax"] = false;

	$tdatacat_nominas_asistencias_fechas[".audit"] = false;

	$tdatacat_nominas_asistencias_fechas[".locking"] = false;


$pages = $tdatacat_nominas_asistencias_fechas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_asistencias_fechas[".edit"] = true;
	$tdatacat_nominas_asistencias_fechas[".afterEditAction"] = 1;
	$tdatacat_nominas_asistencias_fechas[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_asistencias_fechas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_asistencias_fechas[".add"] = true;
$tdatacat_nominas_asistencias_fechas[".afterAddAction"] = 1;
$tdatacat_nominas_asistencias_fechas[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_asistencias_fechas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_asistencias_fechas[".list"] = true;
}



$tdatacat_nominas_asistencias_fechas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_asistencias_fechas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_asistencias_fechas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_asistencias_fechas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_asistencias_fechas[".printFriendly"] = true;
}



$tdatacat_nominas_asistencias_fechas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_asistencias_fechas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_asistencias_fechas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_asistencias_fechas[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_asistencias_fechas[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_asistencias_fechas[".buttonsAdded"] = false;

$tdatacat_nominas_asistencias_fechas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_asistencias_fechas[".isUseTimeForSearch"] = false;


$tdatacat_nominas_asistencias_fechas[".badgeColor"] = "008B8B";


$tdatacat_nominas_asistencias_fechas[".allSearchFields"] = array();
$tdatacat_nominas_asistencias_fechas[".filterFields"] = array();
$tdatacat_nominas_asistencias_fechas[".requiredSearchFields"] = array();

$tdatacat_nominas_asistencias_fechas[".googleLikeFields"] = array();
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "cat_nominas_01_generales_uuid";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "fecha";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "dia_semana";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "dia_de_inicio";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "diferencia_factor";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "llave_dias_de_inicio";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "llave_dias_de_inicio_nominas_uuid";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "llave_fecha_nominas_uuid";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "llave_fecha_licencia";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "cat_nominas_01_generales_id";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "dia_inicio_consecutivo";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "descripcion_nomina";
$tdatacat_nominas_asistencias_fechas[".googleLikeFields"][] = "horas_semana_laboral";



$tdatacat_nominas_asistencias_fechas[".tableType"] = "list";

$tdatacat_nominas_asistencias_fechas[".printerPageOrientation"] = 0;
$tdatacat_nominas_asistencias_fechas[".nPrinterPageScale"] = 100;

$tdatacat_nominas_asistencias_fechas[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_asistencias_fechas[".geocodingEnabled"] = false;





$tdatacat_nominas_asistencias_fechas[".isResizeColumns"] = true;





$tdatacat_nominas_asistencias_fechas[".pageSize"] = 20;

$tdatacat_nominas_asistencias_fechas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_asistencias_fechas[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_asistencias_fechas[".orderindexes"] = array();


$tdatacat_nominas_asistencias_fechas[".sqlHead"] = "SELECT cat_nominas_01_generales.cat_nominas_01_generales_uuid,  cat_nominas_asistencias_fechas.cat_usuarios_licencias_id,  cat_nominas_asistencias_fechas.fecha,  if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w')) AS dia_semana,  cat_nominas_01_generales.dia_de_inicio,  (if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1 AS diferencia_factor,  concat(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w')), '-', cat_nominas_01_generales.dia_de_inicio, '-', (if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1) AS llave_dias_de_inicio,  concat(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w')), '-', cat_nominas_01_generales.dia_de_inicio, '-', (if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1, '-', cat_nominas_01_generales.cat_nominas_01_generales_uuid) AS llave_dias_de_inicio_nominas_uuid,  concat(cat_nominas_asistencias_fechas.fecha, '-', cat_nominas_01_generales.cat_nominas_01_generales_uuid) AS llave_fecha_nominas_uuid,  cat_nominas_asistencias_fechas.llave_fecha_licencia,  cat_nominas_01_generales.cat_nominas_01_generales_id,  1111 AS dia_inicio_consecutivo,  cat_nominas_01_generales.descripcion_nomina,  cat_nominas_01_generales.horas_semana_laboral";
$tdatacat_nominas_asistencias_fechas[".sqlFrom"] = "FROM cat_nominas_asistencias_fechas  LEFT OUTER JOIN cat_nominas_01_generales ON cat_nominas_asistencias_fechas.cat_usuarios_licencias_id = cat_nominas_01_generales.cat_usuarios_licencias_id";
$tdatacat_nominas_asistencias_fechas[".sqlWhereExpr"] = "";
$tdatacat_nominas_asistencias_fechas[".sqlTail"] = "";

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
$tdatacat_nominas_asistencias_fechas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_asistencias_fechas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_asistencias_fechas[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_asistencias_fechas[".highlightSearchResults"] = true;

$tableKeyscat_nominas_asistencias_fechas = array();
$tdatacat_nominas_asistencias_fechas[".Keys"] = $tableKeyscat_nominas_asistencias_fechas;


$tdatacat_nominas_asistencias_fechas[".hideMobileList"] = array();




//	cat_nominas_01_generales_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_nominas_01_generales_uuid";
	$fdata["GoodName"] = "cat_nominas_01_generales_uuid";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","cat_nominas_01_generales_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_nominas_01_generales_uuid";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_01_generales.cat_nominas_01_generales_uuid";

	
	
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


	$tdatacat_nominas_asistencias_fechas["cat_nominas_01_generales_uuid"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "cat_nominas_01_generales_uuid";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_nominas_asistencias_fechas";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

		$fdata["sourceSingle"] = "cat_usuarios_licencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_asistencias_fechas.cat_usuarios_licencias_id";

	
	
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


	$tdatacat_nominas_asistencias_fechas["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "cat_usuarios_licencias_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "cat_nominas_asistencias_fechas";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_asistencias_fechas.fecha";

	
	
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


	$tdatacat_nominas_asistencias_fechas["fecha"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "fecha";
//	dia_semana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dia_semana";
	$fdata["GoodName"] = "dia_semana";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","dia_semana");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dia_semana";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))";

	
	
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


	$tdatacat_nominas_asistencias_fechas["dia_semana"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "dia_semana";
//	dia_de_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dia_de_inicio";
	$fdata["GoodName"] = "dia_de_inicio";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","dia_de_inicio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dia_de_inicio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_01_generales.dia_de_inicio";

	
	
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


	$tdatacat_nominas_asistencias_fechas["dia_de_inicio"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "dia_de_inicio";
//	diferencia_factor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "diferencia_factor";
	$fdata["GoodName"] = "diferencia_factor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","diferencia_factor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "diferencia_factor";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1";

	
	
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


	$tdatacat_nominas_asistencias_fechas["diferencia_factor"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "diferencia_factor";
//	llave_dias_de_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "llave_dias_de_inicio";
	$fdata["GoodName"] = "llave_dias_de_inicio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","llave_dias_de_inicio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_dias_de_inicio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w')), '-', cat_nominas_01_generales.dia_de_inicio, '-', (if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1)";

	
	
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


	$tdatacat_nominas_asistencias_fechas["llave_dias_de_inicio"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "llave_dias_de_inicio";
//	llave_dias_de_inicio_nominas_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "llave_dias_de_inicio_nominas_uuid";
	$fdata["GoodName"] = "llave_dias_de_inicio_nominas_uuid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","llave_dias_de_inicio_nominas_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_dias_de_inicio_nominas_uuid";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w')), '-', cat_nominas_01_generales.dia_de_inicio, '-', (if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1, '-', cat_nominas_01_generales.cat_nominas_01_generales_uuid)";

	
	
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


	$tdatacat_nominas_asistencias_fechas["llave_dias_de_inicio_nominas_uuid"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "llave_dias_de_inicio_nominas_uuid";
//	llave_fecha_nominas_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "llave_fecha_nominas_uuid";
	$fdata["GoodName"] = "llave_fecha_nominas_uuid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","llave_fecha_nominas_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fecha_nominas_uuid";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(cat_nominas_asistencias_fechas.fecha, '-', cat_nominas_01_generales.cat_nominas_01_generales_uuid)";

	
	
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


	$tdatacat_nominas_asistencias_fechas["llave_fecha_nominas_uuid"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "llave_fecha_nominas_uuid";
//	llave_fecha_licencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "llave_fecha_licencia";
	$fdata["GoodName"] = "llave_fecha_licencia";
	$fdata["ownerTable"] = "cat_nominas_asistencias_fechas";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","llave_fecha_licencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fecha_licencia";

		$fdata["sourceSingle"] = "llave_fecha_licencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_asistencias_fechas.llave_fecha_licencia";

	
	
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


	$tdatacat_nominas_asistencias_fechas["llave_fecha_licencia"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "llave_fecha_licencia";
//	cat_nominas_01_generales_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cat_nominas_01_generales_id";
	$fdata["GoodName"] = "cat_nominas_01_generales_id";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","cat_nominas_01_generales_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_01_generales_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_01_generales.cat_nominas_01_generales_id";

	
	
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


	$tdatacat_nominas_asistencias_fechas["cat_nominas_01_generales_id"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "cat_nominas_01_generales_id";
//	dia_inicio_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "dia_inicio_consecutivo";
	$fdata["GoodName"] = "dia_inicio_consecutivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","dia_inicio_consecutivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dia_inicio_consecutivo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "1111";

	
	
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


	$tdatacat_nominas_asistencias_fechas["dia_inicio_consecutivo"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "dia_inicio_consecutivo";
//	descripcion_nomina
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "descripcion_nomina";
	$fdata["GoodName"] = "descripcion_nomina";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","descripcion_nomina");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_nomina";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_01_generales.descripcion_nomina";

	
	
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


	$tdatacat_nominas_asistencias_fechas["descripcion_nomina"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "descripcion_nomina";
//	horas_semana_laboral
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "horas_semana_laboral";
	$fdata["GoodName"] = "horas_semana_laboral";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_asistencias_fechas","horas_semana_laboral");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "horas_semana_laboral";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_01_generales.horas_semana_laboral";

	
	
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


	$tdatacat_nominas_asistencias_fechas["horas_semana_laboral"] = $fdata;
		$tdatacat_nominas_asistencias_fechas[".searchableFields"][] = "horas_semana_laboral";


$tables_data["cat_nominas_asistencias_fechas"]=&$tdatacat_nominas_asistencias_fechas;
$field_labels["cat_nominas_asistencias_fechas"] = &$fieldLabelscat_nominas_asistencias_fechas;
$fieldToolTips["cat_nominas_asistencias_fechas"] = &$fieldToolTipscat_nominas_asistencias_fechas;
$placeHolders["cat_nominas_asistencias_fechas"] = &$placeHolderscat_nominas_asistencias_fechas;
$page_titles["cat_nominas_asistencias_fechas"] = &$pageTitlescat_nominas_asistencias_fechas;


changeTextControlsToDate( "cat_nominas_asistencias_fechas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_asistencias_fechas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_asistencias_fechas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_asistencias_fechas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_nominas_01_generales.cat_nominas_01_generales_uuid,  cat_nominas_asistencias_fechas.cat_usuarios_licencias_id,  cat_nominas_asistencias_fechas.fecha,  if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w')) AS dia_semana,  cat_nominas_01_generales.dia_de_inicio,  (if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1 AS diferencia_factor,  concat(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w')), '-', cat_nominas_01_generales.dia_de_inicio, '-', (if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1) AS llave_dias_de_inicio,  concat(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w')), '-', cat_nominas_01_generales.dia_de_inicio, '-', (if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1, '-', cat_nominas_01_generales.cat_nominas_01_generales_uuid) AS llave_dias_de_inicio_nominas_uuid,  concat(cat_nominas_asistencias_fechas.fecha, '-', cat_nominas_01_generales.cat_nominas_01_generales_uuid) AS llave_fecha_nominas_uuid,  cat_nominas_asistencias_fechas.llave_fecha_licencia,  cat_nominas_01_generales.cat_nominas_01_generales_id,  1111 AS dia_inicio_consecutivo,  cat_nominas_01_generales.descripcion_nomina,  cat_nominas_01_generales.horas_semana_laboral";
$proto0["m_strFrom"] = "FROM cat_nominas_asistencias_fechas  LEFT OUTER JOIN cat_nominas_01_generales ON cat_nominas_asistencias_fechas.cat_usuarios_licencias_id = cat_nominas_01_generales.cat_usuarios_licencias_id";
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
	"m_strName" => "cat_nominas_01_generales_uuid",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "cat_nominas_asistencias_fechas"
));

$proto6["m_sql"] = "cat_nominas_01_generales.cat_nominas_01_generales_uuid";
$proto6["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_nominas_asistencias_fechas",
	"m_srcTableName" => "cat_nominas_asistencias_fechas"
));

$proto8["m_sql"] = "cat_nominas_asistencias_fechas.cat_usuarios_licencias_id";
$proto8["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "cat_nominas_asistencias_fechas",
	"m_srcTableName" => "cat_nominas_asistencias_fechas"
));

$proto10["m_sql"] = "cat_nominas_asistencias_fechas.fecha";
$proto10["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "7"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "date_format(cat_nominas_asistencias_fechas.fecha, '%w')"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))";
$proto12["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "dia_semana";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_de_inicio",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "cat_nominas_asistencias_fechas"
));

$proto17["m_sql"] = "cat_nominas_01_generales.dia_de_inicio";
$proto17["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1"
));

$proto19["m_sql"] = "(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1";
$proto19["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "diferencia_factor";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_nominas_01_generales.dia_de_inicio"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto22);

$proto21["m_sql"] = "concat(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w')), '-', cat_nominas_01_generales.dia_de_inicio, '-', (if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1)";
$proto21["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "llave_dias_de_inicio";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$proto29=array();
$proto29["m_functiontype"] = "SQLF_CUSTOM";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_nominas_01_generales.dia_de_inicio"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_nominas_01_generales.cat_nominas_01_generales_uuid"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto29);

$proto28["m_sql"] = "concat(if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w')), '-', cat_nominas_01_generales.dia_de_inicio, '-', (if(date_format(cat_nominas_asistencias_fechas.fecha, '%w')=0, 7, date_format(cat_nominas_asistencias_fechas.fecha, '%w'))-cat_nominas_01_generales.dia_de_inicio)+ 1, '-', cat_nominas_01_generales.cat_nominas_01_generales_uuid)";
$proto28["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "llave_dias_de_inicio_nominas_uuid";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$proto38=array();
$proto38["m_functiontype"] = "SQLF_CUSTOM";
$proto38["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_nominas_asistencias_fechas.fecha"
));

$proto38["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto38["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_nominas_01_generales.cat_nominas_01_generales_uuid"
));

$proto38["m_arguments"][]=$obj;
$proto38["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto38);

$proto37["m_sql"] = "concat(cat_nominas_asistencias_fechas.fecha, '-', cat_nominas_01_generales.cat_nominas_01_generales_uuid)";
$proto37["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "llave_fecha_nominas_uuid";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_fecha_licencia",
	"m_strTable" => "cat_nominas_asistencias_fechas",
	"m_srcTableName" => "cat_nominas_asistencias_fechas"
));

$proto42["m_sql"] = "cat_nominas_asistencias_fechas.llave_fecha_licencia";
$proto42["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_01_generales_id",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "cat_nominas_asistencias_fechas"
));

$proto44["m_sql"] = "cat_nominas_01_generales.cat_nominas_01_generales_id";
$proto44["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "1111"
));

$proto46["m_sql"] = "1111";
$proto46["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "dia_inicio_consecutivo";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_nomina",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "cat_nominas_asistencias_fechas"
));

$proto48["m_sql"] = "cat_nominas_01_generales.descripcion_nomina";
$proto48["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "horas_semana_laboral",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "cat_nominas_asistencias_fechas"
));

$proto50["m_sql"] = "cat_nominas_01_generales.horas_semana_laboral";
$proto50["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "cat_nominas_asistencias_fechas";
$proto53["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "fecha";
$proto53["m_columns"][] = "cat_usuarios_licencias_id";
$proto53["m_columns"][] = "llave_fecha_licencia";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "cat_nominas_asistencias_fechas";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_LEFTJOIN";
			$proto57=array();
$proto57["m_strName"] = "cat_nominas_01_generales";
$proto57["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "vigente";
$proto57["m_columns"][] = "descripcion_nomina";
$proto57["m_columns"][] = "dia_de_inicio";
$proto57["m_columns"][] = "fecha_de_inicio";
$proto57["m_columns"][] = "fecha_de_termino";
$proto57["m_columns"][] = "cat_nominas_01_generales_id";
$proto57["m_columns"][] = "capturista";
$proto57["m_columns"][] = "time_stamp";
$proto57["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto57["m_columns"][] = "cat_nominas_periodicidad_mu_id";
$proto57["m_columns"][] = "horas_semana_laboral";
$proto57["m_columns"][] = "cat_nominas_uuid_semana";
$proto57["m_columns"][] = "cat_usuarios_licencias_id";
$proto57["m_columns"][] = "llave_ano_semana_nominas_uuid";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "LEFT OUTER JOIN cat_nominas_01_generales ON cat_nominas_asistencias_fechas.cat_usuarios_licencias_id = cat_nominas_01_generales.cat_usuarios_licencias_id";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "cat_nominas_asistencias_fechas";
$proto58=array();
$proto58["m_sql"] = "cat_nominas_01_generales.cat_usuarios_licencias_id = cat_nominas_asistencias_fechas.cat_usuarios_licencias_id";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "cat_nominas_asistencias_fechas"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= cat_nominas_asistencias_fechas.cat_usuarios_licencias_id";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_nominas_asistencias_fechas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_asistencias_fechas = createSqlQuery_cat_nominas_asistencias_fechas();


	
		;

														

$tdatacat_nominas_asistencias_fechas[".sqlquery"] = $queryData_cat_nominas_asistencias_fechas;



$tdatacat_nominas_asistencias_fechas[".hasEvents"] = false;

?>