<?php
$tdatacat_nominas_02_horarios = array();
$tdatacat_nominas_02_horarios[".searchableFields"] = array();
$tdatacat_nominas_02_horarios[".ShortName"] = "cat_nominas_02_horarios";
$tdatacat_nominas_02_horarios[".OwnerID"] = "";
$tdatacat_nominas_02_horarios[".OriginalTable"] = "cat_nominas_02_horarios";


$tdatacat_nominas_02_horarios[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_02_horarios[".originalPagesByType"] = $tdatacat_nominas_02_horarios[".pagesByType"];
$tdatacat_nominas_02_horarios[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_02_horarios[".originalPages"] = $tdatacat_nominas_02_horarios[".pages"];
$tdatacat_nominas_02_horarios[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_nominas_02_horarios[".originalDefaultPages"] = $tdatacat_nominas_02_horarios[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_02_horarios = array();
$fieldToolTipscat_nominas_02_horarios = array();
$pageTitlescat_nominas_02_horarios = array();
$placeHolderscat_nominas_02_horarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_02_horarios["Spanish"] = array();
	$fieldToolTipscat_nominas_02_horarios["Spanish"] = array();
	$placeHolderscat_nominas_02_horarios["Spanish"] = array();
	$pageTitlescat_nominas_02_horarios["Spanish"] = array();
	$fieldLabelscat_nominas_02_horarios["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_02_horarios["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_02_horarios["Spanish"]["vigente"] = "";
	$fieldLabelscat_nominas_02_horarios["Spanish"]["cat_nominas_02_horarios_id"] = "Cat Nominas 02 Horarios Id";
	$fieldToolTipscat_nominas_02_horarios["Spanish"]["cat_nominas_02_horarios_id"] = "";
	$placeHolderscat_nominas_02_horarios["Spanish"]["cat_nominas_02_horarios_id"] = "";
	$fieldLabelscat_nominas_02_horarios["Spanish"]["cat_nominas_dias_semana_mu_id"] = "Cat Nominas Dias Semana Mu Id";
	$fieldToolTipscat_nominas_02_horarios["Spanish"]["cat_nominas_dias_semana_mu_id"] = "";
	$placeHolderscat_nominas_02_horarios["Spanish"]["cat_nominas_dias_semana_mu_id"] = "";
	$fieldLabelscat_nominas_02_horarios["Spanish"]["horario_de_entrada"] = "Horario De Entrada";
	$fieldToolTipscat_nominas_02_horarios["Spanish"]["horario_de_entrada"] = "";
	$placeHolderscat_nominas_02_horarios["Spanish"]["horario_de_entrada"] = "";
	$fieldLabelscat_nominas_02_horarios["Spanish"]["horario_de_salida"] = "Horario De Salida";
	$fieldToolTipscat_nominas_02_horarios["Spanish"]["horario_de_salida"] = "";
	$placeHolderscat_nominas_02_horarios["Spanish"]["horario_de_salida"] = "";
	$fieldLabelscat_nominas_02_horarios["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_02_horarios["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_02_horarios["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_02_horarios["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_02_horarios["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_02_horarios["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_nominas_02_horarios["Spanish"]["cat_nominas_01_generales_uuid"] = "Cat Nominas 01 Generales Uuid";
	$fieldToolTipscat_nominas_02_horarios["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$placeHolderscat_nominas_02_horarios["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$fieldLabelscat_nominas_02_horarios["Spanish"]["llave_dia_uuid"] = "Llave Dia Uuid";
	$fieldToolTipscat_nominas_02_horarios["Spanish"]["llave_dia_uuid"] = "";
	$placeHolderscat_nominas_02_horarios["Spanish"]["llave_dia_uuid"] = "";
	$fieldLabelscat_nominas_02_horarios["Spanish"]["check_dia_siguiente"] = "Check Dia Siguiente";
	$fieldToolTipscat_nominas_02_horarios["Spanish"]["check_dia_siguiente"] = "";
	$placeHolderscat_nominas_02_horarios["Spanish"]["check_dia_siguiente"] = "";
	if (count($fieldToolTipscat_nominas_02_horarios["Spanish"]))
		$tdatacat_nominas_02_horarios[".isUseToolTips"] = true;
}





$tdatacat_nominas_02_horarios[".shortTableName"] = "cat_nominas_02_horarios";
$tdatacat_nominas_02_horarios[".nSecOptions"] = 0;

$tdatacat_nominas_02_horarios[".mainTableOwnerID"] = "";
$tdatacat_nominas_02_horarios[".entityType"] = 0;
$tdatacat_nominas_02_horarios[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_02_horarios[".strOriginalTableName"] = "cat_nominas_02_horarios";

	



$tdatacat_nominas_02_horarios[".showAddInPopup"] = false;

$tdatacat_nominas_02_horarios[".showEditInPopup"] = false;

$tdatacat_nominas_02_horarios[".showViewInPopup"] = false;

$tdatacat_nominas_02_horarios[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_02_horarios[".listAjax"] = false;

	$tdatacat_nominas_02_horarios[".audit"] = false;

	$tdatacat_nominas_02_horarios[".locking"] = false;


$pages = $tdatacat_nominas_02_horarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_02_horarios[".edit"] = true;
	$tdatacat_nominas_02_horarios[".afterEditAction"] = 1;
	$tdatacat_nominas_02_horarios[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_02_horarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_02_horarios[".add"] = true;
$tdatacat_nominas_02_horarios[".afterAddAction"] = 1;
$tdatacat_nominas_02_horarios[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_02_horarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_02_horarios[".list"] = true;
}



$tdatacat_nominas_02_horarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_02_horarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_02_horarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_02_horarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_02_horarios[".printFriendly"] = true;
}



$tdatacat_nominas_02_horarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_02_horarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_02_horarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_02_horarios[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																								

$tdatacat_nominas_02_horarios[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_02_horarios[".buttonsAdded"] = false;

$tdatacat_nominas_02_horarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_02_horarios[".isUseTimeForSearch"] = false;


$tdatacat_nominas_02_horarios[".badgeColor"] = "7b68ee";


$tdatacat_nominas_02_horarios[".allSearchFields"] = array();
$tdatacat_nominas_02_horarios[".filterFields"] = array();
$tdatacat_nominas_02_horarios[".requiredSearchFields"] = array();

$tdatacat_nominas_02_horarios[".googleLikeFields"] = array();
$tdatacat_nominas_02_horarios[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_02_horarios[".googleLikeFields"][] = "cat_nominas_02_horarios_id";
$tdatacat_nominas_02_horarios[".googleLikeFields"][] = "cat_nominas_dias_semana_mu_id";
$tdatacat_nominas_02_horarios[".googleLikeFields"][] = "horario_de_entrada";
$tdatacat_nominas_02_horarios[".googleLikeFields"][] = "horario_de_salida";
$tdatacat_nominas_02_horarios[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_02_horarios[".googleLikeFields"][] = "time_stamp";
$tdatacat_nominas_02_horarios[".googleLikeFields"][] = "cat_nominas_01_generales_uuid";
$tdatacat_nominas_02_horarios[".googleLikeFields"][] = "llave_dia_uuid";
$tdatacat_nominas_02_horarios[".googleLikeFields"][] = "check_dia_siguiente";



$tdatacat_nominas_02_horarios[".tableType"] = "list";

$tdatacat_nominas_02_horarios[".printerPageOrientation"] = 0;
$tdatacat_nominas_02_horarios[".nPrinterPageScale"] = 100;

$tdatacat_nominas_02_horarios[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_02_horarios[".geocodingEnabled"] = false;





$tdatacat_nominas_02_horarios[".isResizeColumns"] = true;





$tdatacat_nominas_02_horarios[".pageSize"] = 20;

$tdatacat_nominas_02_horarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_02_horarios[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_02_horarios[".orderindexes"] = array();


$tdatacat_nominas_02_horarios[".sqlHead"] = "SELECT vigente,  	cat_nominas_02_horarios_id,  	cat_nominas_dias_semana_mu_id,  	horario_de_entrada,  	horario_de_salida,  	capturista,  	time_stamp,  	cat_nominas_01_generales_uuid,  	llave_dia_uuid,  	check_dia_siguiente";
$tdatacat_nominas_02_horarios[".sqlFrom"] = "FROM cat_nominas_02_horarios";
$tdatacat_nominas_02_horarios[".sqlWhereExpr"] = "";
$tdatacat_nominas_02_horarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_02_horarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_02_horarios[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_02_horarios[".highlightSearchResults"] = true;

$tableKeyscat_nominas_02_horarios = array();
$tableKeyscat_nominas_02_horarios[] = "cat_nominas_02_horarios_id";
$tdatacat_nominas_02_horarios[".Keys"] = $tableKeyscat_nominas_02_horarios;


$tdatacat_nominas_02_horarios[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_02_horarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_horarios","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigente";

	
	
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


	$tdatacat_nominas_02_horarios["vigente"] = $fdata;
		$tdatacat_nominas_02_horarios[".searchableFields"][] = "vigente";
//	cat_nominas_02_horarios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_nominas_02_horarios_id";
	$fdata["GoodName"] = "cat_nominas_02_horarios_id";
	$fdata["ownerTable"] = "cat_nominas_02_horarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_horarios","cat_nominas_02_horarios_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_02_horarios_id";

		$fdata["sourceSingle"] = "cat_nominas_02_horarios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_horarios_id";

	
	
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


	$tdatacat_nominas_02_horarios["cat_nominas_02_horarios_id"] = $fdata;
		$tdatacat_nominas_02_horarios[".searchableFields"][] = "cat_nominas_02_horarios_id";
//	cat_nominas_dias_semana_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_nominas_dias_semana_mu_id";
	$fdata["GoodName"] = "cat_nominas_dias_semana_mu_id";
	$fdata["ownerTable"] = "cat_nominas_02_horarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_horarios","cat_nominas_dias_semana_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_dias_semana_mu_id";

		$fdata["sourceSingle"] = "cat_nominas_dias_semana_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_dias_semana_mu_id";

	
	
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


	$tdatacat_nominas_02_horarios["cat_nominas_dias_semana_mu_id"] = $fdata;
		$tdatacat_nominas_02_horarios[".searchableFields"][] = "cat_nominas_dias_semana_mu_id";
//	horario_de_entrada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "horario_de_entrada";
	$fdata["GoodName"] = "horario_de_entrada";
	$fdata["ownerTable"] = "cat_nominas_02_horarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_horarios","horario_de_entrada");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "horario_de_entrada";

		$fdata["sourceSingle"] = "horario_de_entrada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "horario_de_entrada";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

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
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
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


	$tdatacat_nominas_02_horarios["horario_de_entrada"] = $fdata;
		$tdatacat_nominas_02_horarios[".searchableFields"][] = "horario_de_entrada";
//	horario_de_salida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "horario_de_salida";
	$fdata["GoodName"] = "horario_de_salida";
	$fdata["ownerTable"] = "cat_nominas_02_horarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_horarios","horario_de_salida");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "horario_de_salida";

		$fdata["sourceSingle"] = "horario_de_salida";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "horario_de_salida";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

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
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
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


	$tdatacat_nominas_02_horarios["horario_de_salida"] = $fdata;
		$tdatacat_nominas_02_horarios[".searchableFields"][] = "horario_de_salida";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_02_horarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_horarios","capturista");
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


	$tdatacat_nominas_02_horarios["capturista"] = $fdata;
		$tdatacat_nominas_02_horarios[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_02_horarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_horarios","time_stamp");
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


	$tdatacat_nominas_02_horarios["time_stamp"] = $fdata;
		$tdatacat_nominas_02_horarios[".searchableFields"][] = "time_stamp";
//	cat_nominas_01_generales_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_nominas_01_generales_uuid";
	$fdata["GoodName"] = "cat_nominas_01_generales_uuid";
	$fdata["ownerTable"] = "cat_nominas_02_horarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_horarios","cat_nominas_01_generales_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_nominas_01_generales_uuid";

		$fdata["sourceSingle"] = "cat_nominas_01_generales_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_01_generales_uuid";

	
	
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


	$tdatacat_nominas_02_horarios["cat_nominas_01_generales_uuid"] = $fdata;
		$tdatacat_nominas_02_horarios[".searchableFields"][] = "cat_nominas_01_generales_uuid";
//	llave_dia_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "llave_dia_uuid";
	$fdata["GoodName"] = "llave_dia_uuid";
	$fdata["ownerTable"] = "cat_nominas_02_horarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_horarios","llave_dia_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_dia_uuid";

		$fdata["sourceSingle"] = "llave_dia_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_dia_uuid";

	
	
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


	$tdatacat_nominas_02_horarios["llave_dia_uuid"] = $fdata;
		$tdatacat_nominas_02_horarios[".searchableFields"][] = "llave_dia_uuid";
//	check_dia_siguiente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "check_dia_siguiente";
	$fdata["GoodName"] = "check_dia_siguiente";
	$fdata["ownerTable"] = "cat_nominas_02_horarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_horarios","check_dia_siguiente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "check_dia_siguiente";

		$fdata["sourceSingle"] = "check_dia_siguiente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "check_dia_siguiente";

	
	
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


	$tdatacat_nominas_02_horarios["check_dia_siguiente"] = $fdata;
		$tdatacat_nominas_02_horarios[".searchableFields"][] = "check_dia_siguiente";


$tables_data["cat_nominas_02_horarios"]=&$tdatacat_nominas_02_horarios;
$field_labels["cat_nominas_02_horarios"] = &$fieldLabelscat_nominas_02_horarios;
$fieldToolTips["cat_nominas_02_horarios"] = &$fieldToolTipscat_nominas_02_horarios;
$placeHolders["cat_nominas_02_horarios"] = &$placeHolderscat_nominas_02_horarios;
$page_titles["cat_nominas_02_horarios"] = &$pageTitlescat_nominas_02_horarios;


changeTextControlsToDate( "cat_nominas_02_horarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_02_horarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_02_horarios"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cat_nominas_01_generales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cat_nominas_01_generales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cat_nominas_01_generales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cat_nominas_02_horarios"][0] = $masterParams;
				$masterTablesData["cat_nominas_02_horarios"][0]["masterKeys"] = array();
	$masterTablesData["cat_nominas_02_horarios"][0]["masterKeys"][]="cat_nominas_01_generales_uuid";
				$masterTablesData["cat_nominas_02_horarios"][0]["detailKeys"] = array();
	$masterTablesData["cat_nominas_02_horarios"][0]["detailKeys"][]="cat_nominas_01_generales_uuid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_02_horarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigente,  	cat_nominas_02_horarios_id,  	cat_nominas_dias_semana_mu_id,  	horario_de_entrada,  	horario_de_salida,  	capturista,  	time_stamp,  	cat_nominas_01_generales_uuid,  	llave_dia_uuid,  	check_dia_siguiente";
$proto0["m_strFrom"] = "FROM cat_nominas_02_horarios";
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
	"m_strTable" => "cat_nominas_02_horarios",
	"m_srcTableName" => "cat_nominas_02_horarios"
));

$proto6["m_sql"] = "vigente";
$proto6["m_srcTableName"] = "cat_nominas_02_horarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_02_horarios_id",
	"m_strTable" => "cat_nominas_02_horarios",
	"m_srcTableName" => "cat_nominas_02_horarios"
));

$proto8["m_sql"] = "cat_nominas_02_horarios_id";
$proto8["m_srcTableName"] = "cat_nominas_02_horarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_dias_semana_mu_id",
	"m_strTable" => "cat_nominas_02_horarios",
	"m_srcTableName" => "cat_nominas_02_horarios"
));

$proto10["m_sql"] = "cat_nominas_dias_semana_mu_id";
$proto10["m_srcTableName"] = "cat_nominas_02_horarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "horario_de_entrada",
	"m_strTable" => "cat_nominas_02_horarios",
	"m_srcTableName" => "cat_nominas_02_horarios"
));

$proto12["m_sql"] = "horario_de_entrada";
$proto12["m_srcTableName"] = "cat_nominas_02_horarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "horario_de_salida",
	"m_strTable" => "cat_nominas_02_horarios",
	"m_srcTableName" => "cat_nominas_02_horarios"
));

$proto14["m_sql"] = "horario_de_salida";
$proto14["m_srcTableName"] = "cat_nominas_02_horarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_02_horarios",
	"m_srcTableName" => "cat_nominas_02_horarios"
));

$proto16["m_sql"] = "capturista";
$proto16["m_srcTableName"] = "cat_nominas_02_horarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_02_horarios",
	"m_srcTableName" => "cat_nominas_02_horarios"
));

$proto18["m_sql"] = "time_stamp";
$proto18["m_srcTableName"] = "cat_nominas_02_horarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_01_generales_uuid",
	"m_strTable" => "cat_nominas_02_horarios",
	"m_srcTableName" => "cat_nominas_02_horarios"
));

$proto20["m_sql"] = "cat_nominas_01_generales_uuid";
$proto20["m_srcTableName"] = "cat_nominas_02_horarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_dia_uuid",
	"m_strTable" => "cat_nominas_02_horarios",
	"m_srcTableName" => "cat_nominas_02_horarios"
));

$proto22["m_sql"] = "llave_dia_uuid";
$proto22["m_srcTableName"] = "cat_nominas_02_horarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "check_dia_siguiente",
	"m_strTable" => "cat_nominas_02_horarios",
	"m_srcTableName" => "cat_nominas_02_horarios"
));

$proto24["m_sql"] = "check_dia_siguiente";
$proto24["m_srcTableName"] = "cat_nominas_02_horarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "cat_nominas_02_horarios";
$proto27["m_srcTableName"] = "cat_nominas_02_horarios";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "vigente";
$proto27["m_columns"][] = "cat_nominas_02_horarios_id";
$proto27["m_columns"][] = "cat_nominas_dias_semana_mu_id";
$proto27["m_columns"][] = "horario_de_entrada";
$proto27["m_columns"][] = "horario_de_salida";
$proto27["m_columns"][] = "capturista";
$proto27["m_columns"][] = "time_stamp";
$proto27["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto27["m_columns"][] = "llave_dia_uuid";
$proto27["m_columns"][] = "check_dia_siguiente";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "cat_nominas_02_horarios";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "cat_nominas_02_horarios";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_nominas_02_horarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_02_horarios = createSqlQuery_cat_nominas_02_horarios();


	
		;

										

$tdatacat_nominas_02_horarios[".sqlquery"] = $queryData_cat_nominas_02_horarios;



$tdatacat_nominas_02_horarios[".hasEvents"] = false;

?>