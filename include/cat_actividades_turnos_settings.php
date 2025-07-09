<?php
$tdatacat_actividades_turnos = array();
$tdatacat_actividades_turnos[".searchableFields"] = array();
$tdatacat_actividades_turnos[".ShortName"] = "cat_actividades_turnos";
$tdatacat_actividades_turnos[".OwnerID"] = "";
$tdatacat_actividades_turnos[".OriginalTable"] = "cat_actividades_turnos";


$tdatacat_actividades_turnos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_actividades_turnos[".originalPagesByType"] = $tdatacat_actividades_turnos[".pagesByType"];
$tdatacat_actividades_turnos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_actividades_turnos[".originalPages"] = $tdatacat_actividades_turnos[".pages"];
$tdatacat_actividades_turnos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_actividades_turnos[".originalDefaultPages"] = $tdatacat_actividades_turnos[".defaultPages"];

//	field labels
$fieldLabelscat_actividades_turnos = array();
$fieldToolTipscat_actividades_turnos = array();
$pageTitlescat_actividades_turnos = array();
$placeHolderscat_actividades_turnos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_actividades_turnos["Spanish"] = array();
	$fieldToolTipscat_actividades_turnos["Spanish"] = array();
	$placeHolderscat_actividades_turnos["Spanish"] = array();
	$pageTitlescat_actividades_turnos["Spanish"] = array();
	$fieldLabelscat_actividades_turnos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_actividades_turnos["Spanish"]["vigente"] = "";
	$placeHolderscat_actividades_turnos["Spanish"]["vigente"] = "";
	$fieldLabelscat_actividades_turnos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_actividades_turnos["Spanish"]["capturista"] = "";
	$placeHolderscat_actividades_turnos["Spanish"]["capturista"] = "";
	$fieldLabelscat_actividades_turnos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_actividades_turnos["Spanish"]["time_stamp"] = "";
	$placeHolderscat_actividades_turnos["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_actividades_turnos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_actividades_turnos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_actividades_turnos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_actividades_turnos["Spanish"]["cat_actividades_turnos_id"] = "Id";
	$fieldToolTipscat_actividades_turnos["Spanish"]["cat_actividades_turnos_id"] = "";
	$placeHolderscat_actividades_turnos["Spanish"]["cat_actividades_turnos_id"] = "";
	$fieldLabelscat_actividades_turnos["Spanish"]["descripcion_turno"] = "Descripcion Turno";
	$fieldToolTipscat_actividades_turnos["Spanish"]["descripcion_turno"] = "";
	$placeHolderscat_actividades_turnos["Spanish"]["descripcion_turno"] = "";
	$fieldLabelscat_actividades_turnos["Spanish"]["hora_de_entrada"] = "Hora De Entrada";
	$fieldToolTipscat_actividades_turnos["Spanish"]["hora_de_entrada"] = "";
	$placeHolderscat_actividades_turnos["Spanish"]["hora_de_entrada"] = "";
	$fieldLabelscat_actividades_turnos["Spanish"]["hora_de_salida"] = "Hora De Salida";
	$fieldToolTipscat_actividades_turnos["Spanish"]["hora_de_salida"] = "";
	$placeHolderscat_actividades_turnos["Spanish"]["hora_de_salida"] = "";
	$fieldLabelscat_actividades_turnos["Spanish"]["cat_nominas_conceptos_clasificacion_mu_id"] = "ClasificacionMu";
	$fieldToolTipscat_actividades_turnos["Spanish"]["cat_nominas_conceptos_clasificacion_mu_id"] = "";
	$placeHolderscat_actividades_turnos["Spanish"]["cat_nominas_conceptos_clasificacion_mu_id"] = "";
	if (count($fieldToolTipscat_actividades_turnos["Spanish"]))
		$tdatacat_actividades_turnos[".isUseToolTips"] = true;
}





$tdatacat_actividades_turnos[".shortTableName"] = "cat_actividades_turnos";
$tdatacat_actividades_turnos[".nSecOptions"] = 0;

$tdatacat_actividades_turnos[".mainTableOwnerID"] = "";
$tdatacat_actividades_turnos[".entityType"] = 0;
$tdatacat_actividades_turnos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_actividades_turnos[".strOriginalTableName"] = "cat_actividades_turnos";

	



$tdatacat_actividades_turnos[".showAddInPopup"] = false;

$tdatacat_actividades_turnos[".showEditInPopup"] = false;

$tdatacat_actividades_turnos[".showViewInPopup"] = false;

$tdatacat_actividades_turnos[".listAjax"] = false;
//	temporary
//$tdatacat_actividades_turnos[".listAjax"] = false;

	$tdatacat_actividades_turnos[".audit"] = false;

	$tdatacat_actividades_turnos[".locking"] = false;


$pages = $tdatacat_actividades_turnos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_actividades_turnos[".edit"] = true;
	$tdatacat_actividades_turnos[".afterEditAction"] = 1;
	$tdatacat_actividades_turnos[".closePopupAfterEdit"] = 1;
	$tdatacat_actividades_turnos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_actividades_turnos[".add"] = true;
$tdatacat_actividades_turnos[".afterAddAction"] = 1;
$tdatacat_actividades_turnos[".closePopupAfterAdd"] = 1;
$tdatacat_actividades_turnos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_actividades_turnos[".list"] = true;
}



$tdatacat_actividades_turnos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_actividades_turnos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_actividades_turnos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_actividades_turnos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_actividades_turnos[".printFriendly"] = true;
}



$tdatacat_actividades_turnos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_actividades_turnos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_actividades_turnos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_actividades_turnos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_actividades_turnos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_actividades_turnos[".buttonsAdded"] = false;

$tdatacat_actividades_turnos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_actividades_turnos[".isUseTimeForSearch"] = true;


$tdatacat_actividades_turnos[".badgeColor"] = "778899";


$tdatacat_actividades_turnos[".allSearchFields"] = array();
$tdatacat_actividades_turnos[".filterFields"] = array();
$tdatacat_actividades_turnos[".requiredSearchFields"] = array();

$tdatacat_actividades_turnos[".googleLikeFields"] = array();
$tdatacat_actividades_turnos[".googleLikeFields"][] = "vigente";
$tdatacat_actividades_turnos[".googleLikeFields"][] = "descripcion_turno";
$tdatacat_actividades_turnos[".googleLikeFields"][] = "hora_de_entrada";
$tdatacat_actividades_turnos[".googleLikeFields"][] = "hora_de_salida";
$tdatacat_actividades_turnos[".googleLikeFields"][] = "capturista";
$tdatacat_actividades_turnos[".googleLikeFields"][] = "time_stamp";
$tdatacat_actividades_turnos[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatacat_actividades_turnos[".googleLikeFields"][] = "cat_actividades_turnos_id";
$tdatacat_actividades_turnos[".googleLikeFields"][] = "cat_nominas_conceptos_clasificacion_mu_id";



$tdatacat_actividades_turnos[".tableType"] = "list";

$tdatacat_actividades_turnos[".printerPageOrientation"] = 0;
$tdatacat_actividades_turnos[".nPrinterPageScale"] = 100;

$tdatacat_actividades_turnos[".nPrinterSplitRecords"] = 40;

$tdatacat_actividades_turnos[".geocodingEnabled"] = false;





$tdatacat_actividades_turnos[".isResizeColumns"] = true;





$tdatacat_actividades_turnos[".pageSize"] = 20;

$tdatacat_actividades_turnos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_actividades_turnos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_actividades_turnos[".orderindexes"] = array();


$tdatacat_actividades_turnos[".sqlHead"] = "SELECT cat_actividades_turnos.vigente,  cat_actividades_turnos.descripcion_turno,  cat_actividades_turnos.hora_de_entrada,  cat_actividades_turnos.hora_de_salida,  cat_actividades_turnos.capturista,  cat_actividades_turnos.time_stamp,  cat_usuarios.cat_usuarios_licencias_id,  cat_actividades_turnos.cat_actividades_turnos_id,  cat_actividades_turnos.cat_nominas_conceptos_clasificacion_mu_id";
$tdatacat_actividades_turnos[".sqlFrom"] = "FROM cat_actividades_turnos  INNER JOIN cat_usuarios ON cat_actividades_turnos.capturista = cat_usuarios.usuario";
$tdatacat_actividades_turnos[".sqlWhereExpr"] = "";
$tdatacat_actividades_turnos[".sqlTail"] = "";

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
$tdatacat_actividades_turnos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_actividades_turnos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_actividades_turnos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_actividades_turnos[".highlightSearchResults"] = true;

$tableKeyscat_actividades_turnos = array();
$tableKeyscat_actividades_turnos[] = "cat_actividades_turnos_id";
$tdatacat_actividades_turnos[".Keys"] = $tableKeyscat_actividades_turnos;


$tdatacat_actividades_turnos[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.vigente";

	
	
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


	$tdatacat_actividades_turnos["vigente"] = $fdata;
		$tdatacat_actividades_turnos[".searchableFields"][] = "vigente";
//	descripcion_turno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_turno";
	$fdata["GoodName"] = "descripcion_turno";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos","descripcion_turno");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_turno";

		$fdata["sourceSingle"] = "descripcion_turno";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.descripcion_turno";

	
	
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


	$tdatacat_actividades_turnos["descripcion_turno"] = $fdata;
		$tdatacat_actividades_turnos[".searchableFields"][] = "descripcion_turno";
//	hora_de_entrada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "hora_de_entrada";
	$fdata["GoodName"] = "hora_de_entrada";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos","hora_de_entrada");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "hora_de_entrada";

		$fdata["sourceSingle"] = "hora_de_entrada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.hora_de_entrada";

	
	
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

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatacat_actividades_turnos["hora_de_entrada"] = $fdata;
		$tdatacat_actividades_turnos[".searchableFields"][] = "hora_de_entrada";
//	hora_de_salida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hora_de_salida";
	$fdata["GoodName"] = "hora_de_salida";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos","hora_de_salida");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "hora_de_salida";

		$fdata["sourceSingle"] = "hora_de_salida";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.hora_de_salida";

	
	
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

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatacat_actividades_turnos["hora_de_salida"] = $fdata;
		$tdatacat_actividades_turnos[".searchableFields"][] = "hora_de_salida";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.capturista";

	
	
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


	$tdatacat_actividades_turnos["capturista"] = $fdata;
		$tdatacat_actividades_turnos[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.time_stamp";

	
	
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


	$tdatacat_actividades_turnos["time_stamp"] = $fdata;
		$tdatacat_actividades_turnos[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos","cat_usuarios_licencias_id");
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


	$tdatacat_actividades_turnos["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_actividades_turnos[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_actividades_turnos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_actividades_turnos_id";
	$fdata["GoodName"] = "cat_actividades_turnos_id";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos","cat_actividades_turnos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_actividades_turnos_id";

		$fdata["sourceSingle"] = "cat_actividades_turnos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.cat_actividades_turnos_id";

	
	
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


	$tdatacat_actividades_turnos["cat_actividades_turnos_id"] = $fdata;
		$tdatacat_actividades_turnos[".searchableFields"][] = "cat_actividades_turnos_id";
//	cat_nominas_conceptos_clasificacion_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_nominas_conceptos_clasificacion_mu_id";
	$fdata["GoodName"] = "cat_nominas_conceptos_clasificacion_mu_id";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos","cat_nominas_conceptos_clasificacion_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_conceptos_clasificacion_mu_id";

		$fdata["sourceSingle"] = "cat_nominas_conceptos_clasificacion_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.cat_nominas_conceptos_clasificacion_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_nominas_conceptos_clasificacion_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_nominas_conceptos_clasificacion_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_nominas_conceptos_clasificacion";

	

	
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


	$tdatacat_actividades_turnos["cat_nominas_conceptos_clasificacion_mu_id"] = $fdata;
		$tdatacat_actividades_turnos[".searchableFields"][] = "cat_nominas_conceptos_clasificacion_mu_id";


$tables_data["cat_actividades_turnos"]=&$tdatacat_actividades_turnos;
$field_labels["cat_actividades_turnos"] = &$fieldLabelscat_actividades_turnos;
$fieldToolTips["cat_actividades_turnos"] = &$fieldToolTipscat_actividades_turnos;
$placeHolders["cat_actividades_turnos"] = &$placeHolderscat_actividades_turnos;
$page_titles["cat_actividades_turnos"] = &$pageTitlescat_actividades_turnos;


changeTextControlsToDate( "cat_actividades_turnos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_actividades_turnos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_actividades_turnos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_actividades_turnos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_actividades_turnos.vigente,  cat_actividades_turnos.descripcion_turno,  cat_actividades_turnos.hora_de_entrada,  cat_actividades_turnos.hora_de_salida,  cat_actividades_turnos.capturista,  cat_actividades_turnos.time_stamp,  cat_usuarios.cat_usuarios_licencias_id,  cat_actividades_turnos.cat_actividades_turnos_id,  cat_actividades_turnos.cat_nominas_conceptos_clasificacion_mu_id";
$proto0["m_strFrom"] = "FROM cat_actividades_turnos  INNER JOIN cat_usuarios ON cat_actividades_turnos.capturista = cat_usuarios.usuario";
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
	"m_strName" => "vigente",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "cat_actividades_turnos"
));

$proto6["m_sql"] = "cat_actividades_turnos.vigente";
$proto6["m_srcTableName"] = "cat_actividades_turnos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_turno",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "cat_actividades_turnos"
));

$proto8["m_sql"] = "cat_actividades_turnos.descripcion_turno";
$proto8["m_srcTableName"] = "cat_actividades_turnos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_de_entrada",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "cat_actividades_turnos"
));

$proto10["m_sql"] = "cat_actividades_turnos.hora_de_entrada";
$proto10["m_srcTableName"] = "cat_actividades_turnos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_de_salida",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "cat_actividades_turnos"
));

$proto12["m_sql"] = "cat_actividades_turnos.hora_de_salida";
$proto12["m_srcTableName"] = "cat_actividades_turnos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "cat_actividades_turnos"
));

$proto14["m_sql"] = "cat_actividades_turnos.capturista";
$proto14["m_srcTableName"] = "cat_actividades_turnos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "cat_actividades_turnos"
));

$proto16["m_sql"] = "cat_actividades_turnos.time_stamp";
$proto16["m_srcTableName"] = "cat_actividades_turnos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_actividades_turnos"
));

$proto18["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto18["m_srcTableName"] = "cat_actividades_turnos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_turnos_id",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "cat_actividades_turnos"
));

$proto20["m_sql"] = "cat_actividades_turnos.cat_actividades_turnos_id";
$proto20["m_srcTableName"] = "cat_actividades_turnos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_conceptos_clasificacion_mu_id",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "cat_actividades_turnos"
));

$proto22["m_sql"] = "cat_actividades_turnos.cat_nominas_conceptos_clasificacion_mu_id";
$proto22["m_srcTableName"] = "cat_actividades_turnos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cat_actividades_turnos";
$proto25["m_srcTableName"] = "cat_actividades_turnos";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "descripcion_turno";
$proto25["m_columns"][] = "hora_de_entrada";
$proto25["m_columns"][] = "hora_de_salida";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "cat_nominas_conceptos_id";
$proto25["m_columns"][] = "cat_actividades_turnos_id";
$proto25["m_columns"][] = "cat_nominas_conceptos_clasificacion_mu_id";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cat_actividades_turnos";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cat_actividades_turnos";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "cat_usuarios";
$proto29["m_srcTableName"] = "cat_actividades_turnos";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cat_usuarios_id";
$proto29["m_columns"][] = "time_stamp";
$proto29["m_columns"][] = "vigente";
$proto29["m_columns"][] = "capturista";
$proto29["m_columns"][] = "usuario";
$proto29["m_columns"][] = "cat_usuarios_licencias_id";
$proto29["m_columns"][] = "pass";
$proto29["m_columns"][] = "nombre";
$proto29["m_columns"][] = "correo";
$proto29["m_columns"][] = "cat_trabajadores_altas_id";
$proto29["m_columns"][] = "res_autorizacion";
$proto29["m_columns"][] = "session";
$proto29["m_columns"][] = "tipo";
$proto29["m_columns"][] = "session_v2";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN cat_usuarios ON cat_actividades_turnos.capturista = cat_usuarios.usuario";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "cat_actividades_turnos";
$proto30=array();
$proto30["m_sql"] = "cat_usuarios.usuario = cat_actividades_turnos.capturista";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_actividades_turnos"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= cat_actividades_turnos.capturista";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_actividades_turnos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_actividades_turnos = createSqlQuery_cat_actividades_turnos();


	
		;

									

$tdatacat_actividades_turnos[".sqlquery"] = $queryData_cat_actividades_turnos;



$tdatacat_actividades_turnos[".hasEvents"] = false;

?>