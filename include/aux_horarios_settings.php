<?php
$tdataaux_horarios = array();
$tdataaux_horarios[".searchableFields"] = array();
$tdataaux_horarios[".ShortName"] = "aux_horarios";
$tdataaux_horarios[".OwnerID"] = "";
$tdataaux_horarios[".OriginalTable"] = "aux_horarios";


$tdataaux_horarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataaux_horarios[".originalPagesByType"] = $tdataaux_horarios[".pagesByType"];
$tdataaux_horarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataaux_horarios[".originalPages"] = $tdataaux_horarios[".pages"];
$tdataaux_horarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataaux_horarios[".originalDefaultPages"] = $tdataaux_horarios[".defaultPages"];

//	field labels
$fieldLabelsaux_horarios = array();
$fieldToolTipsaux_horarios = array();
$pageTitlesaux_horarios = array();
$placeHoldersaux_horarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaux_horarios["Spanish"] = array();
	$fieldToolTipsaux_horarios["Spanish"] = array();
	$placeHoldersaux_horarios["Spanish"] = array();
	$pageTitlesaux_horarios["Spanish"] = array();
	$fieldLabelsaux_horarios["Spanish"]["aux_horarios_id"] = "Aux Horarios Id";
	$fieldToolTipsaux_horarios["Spanish"]["aux_horarios_id"] = "";
	$placeHoldersaux_horarios["Spanish"]["aux_horarios_id"] = "";
	$fieldLabelsaux_horarios["Spanish"]["descripcion_horario"] = "Descripcion Horario";
	$fieldToolTipsaux_horarios["Spanish"]["descripcion_horario"] = "";
	$placeHoldersaux_horarios["Spanish"]["descripcion_horario"] = "";
	$fieldLabelsaux_horarios["Spanish"]["horario_entre_semana"] = "Horario Entre Semana";
	$fieldToolTipsaux_horarios["Spanish"]["horario_entre_semana"] = "";
	$placeHoldersaux_horarios["Spanish"]["horario_entre_semana"] = "";
	$fieldLabelsaux_horarios["Spanish"]["horario_sabado"] = "Horario Sabado";
	$fieldToolTipsaux_horarios["Spanish"]["horario_sabado"] = "";
	$placeHoldersaux_horarios["Spanish"]["horario_sabado"] = "";
	$fieldLabelsaux_horarios["Spanish"]["horario_tipo"] = "Horario Tipo";
	$fieldToolTipsaux_horarios["Spanish"]["horario_tipo"] = "";
	$placeHoldersaux_horarios["Spanish"]["horario_tipo"] = "";
	$fieldLabelsaux_horarios["Spanish"]["minutos_tolerancia_entrada"] = "Minutos Tolerancia Entrada";
	$fieldToolTipsaux_horarios["Spanish"]["minutos_tolerancia_entrada"] = "";
	$placeHoldersaux_horarios["Spanish"]["minutos_tolerancia_entrada"] = "";
	$fieldLabelsaux_horarios["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsaux_horarios["Spanish"]["time_stamp"] = "";
	$placeHoldersaux_horarios["Spanish"]["time_stamp"] = "";
	$fieldLabelsaux_horarios["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsaux_horarios["Spanish"]["vigente"] = "";
	$placeHoldersaux_horarios["Spanish"]["vigente"] = "";
	if (count($fieldToolTipsaux_horarios["Spanish"]))
		$tdataaux_horarios[".isUseToolTips"] = true;
}


	$tdataaux_horarios[".NCSearch"] = true;



$tdataaux_horarios[".shortTableName"] = "aux_horarios";
$tdataaux_horarios[".nSecOptions"] = 0;

$tdataaux_horarios[".mainTableOwnerID"] = "";
$tdataaux_horarios[".entityType"] = 0;
$tdataaux_horarios[".connId"] = "wwinte_app_at_intelagro_mx";


$tdataaux_horarios[".strOriginalTableName"] = "aux_horarios";

	



$tdataaux_horarios[".showAddInPopup"] = false;

$tdataaux_horarios[".showEditInPopup"] = false;

$tdataaux_horarios[".showViewInPopup"] = false;

$tdataaux_horarios[".listAjax"] = false;
//	temporary
//$tdataaux_horarios[".listAjax"] = false;

	$tdataaux_horarios[".audit"] = false;

	$tdataaux_horarios[".locking"] = false;


$pages = $tdataaux_horarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaux_horarios[".edit"] = true;
	$tdataaux_horarios[".afterEditAction"] = 1;
	$tdataaux_horarios[".closePopupAfterEdit"] = 1;
	$tdataaux_horarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaux_horarios[".add"] = true;
$tdataaux_horarios[".afterAddAction"] = 1;
$tdataaux_horarios[".closePopupAfterAdd"] = 1;
$tdataaux_horarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaux_horarios[".list"] = true;
}



$tdataaux_horarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaux_horarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaux_horarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaux_horarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaux_horarios[".printFriendly"] = true;
}



$tdataaux_horarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaux_horarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaux_horarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaux_horarios[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdataaux_horarios[".ajaxCodeSnippetAdded"] = false;

$tdataaux_horarios[".buttonsAdded"] = false;

$tdataaux_horarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaux_horarios[".isUseTimeForSearch"] = false;


$tdataaux_horarios[".badgeColor"] = "008B8B";


$tdataaux_horarios[".allSearchFields"] = array();
$tdataaux_horarios[".filterFields"] = array();
$tdataaux_horarios[".requiredSearchFields"] = array();

$tdataaux_horarios[".googleLikeFields"] = array();
$tdataaux_horarios[".googleLikeFields"][] = "aux_horarios_id";
$tdataaux_horarios[".googleLikeFields"][] = "descripcion_horario";
$tdataaux_horarios[".googleLikeFields"][] = "horario_tipo";
$tdataaux_horarios[".googleLikeFields"][] = "horario_entre_semana";
$tdataaux_horarios[".googleLikeFields"][] = "horario_sabado";
$tdataaux_horarios[".googleLikeFields"][] = "time_stamp";
$tdataaux_horarios[".googleLikeFields"][] = "vigente";
$tdataaux_horarios[".googleLikeFields"][] = "minutos_tolerancia_entrada";



$tdataaux_horarios[".tableType"] = "list";

$tdataaux_horarios[".printerPageOrientation"] = 0;
$tdataaux_horarios[".nPrinterPageScale"] = 100;

$tdataaux_horarios[".nPrinterSplitRecords"] = 40;

$tdataaux_horarios[".geocodingEnabled"] = false;










$tdataaux_horarios[".pageSize"] = 20;

$tdataaux_horarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaux_horarios[".strOrderBy"] = $tstrOrderBy;

$tdataaux_horarios[".orderindexes"] = array();


$tdataaux_horarios[".sqlHead"] = "SELECT `aux_horarios_id`,  	`descripcion_horario`,  	`horario_tipo`,  	`horario_entre_semana`,  	`horario_sabado`,  	`time_stamp`,  	`vigente`,  	`minutos_tolerancia_entrada`";
$tdataaux_horarios[".sqlFrom"] = "FROM `aux_horarios`";
$tdataaux_horarios[".sqlWhereExpr"] = "";
$tdataaux_horarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaux_horarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaux_horarios[".arrGroupsPerPage"] = $arrGPP;

$tdataaux_horarios[".highlightSearchResults"] = true;

$tableKeysaux_horarios = array();
$tableKeysaux_horarios[] = "aux_horarios_id";
$tdataaux_horarios[".Keys"] = $tableKeysaux_horarios;


$tdataaux_horarios[".hideMobileList"] = array();




//	aux_horarios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aux_horarios_id";
	$fdata["GoodName"] = "aux_horarios_id";
	$fdata["ownerTable"] = "aux_horarios";
	$fdata["Label"] = GetFieldLabel("aux_horarios","aux_horarios_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "aux_horarios_id";

		$fdata["sourceSingle"] = "aux_horarios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aux_horarios_id`";

	
	
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


	$tdataaux_horarios["aux_horarios_id"] = $fdata;
		$tdataaux_horarios[".searchableFields"][] = "aux_horarios_id";
//	descripcion_horario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_horario";
	$fdata["GoodName"] = "descripcion_horario";
	$fdata["ownerTable"] = "aux_horarios";
	$fdata["Label"] = GetFieldLabel("aux_horarios","descripcion_horario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_horario";

		$fdata["sourceSingle"] = "descripcion_horario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`descripcion_horario`";

	
	
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


	$tdataaux_horarios["descripcion_horario"] = $fdata;
		$tdataaux_horarios[".searchableFields"][] = "descripcion_horario";
//	horario_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "horario_tipo";
	$fdata["GoodName"] = "horario_tipo";
	$fdata["ownerTable"] = "aux_horarios";
	$fdata["Label"] = GetFieldLabel("aux_horarios","horario_tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "horario_tipo";

		$fdata["sourceSingle"] = "horario_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`horario_tipo`";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdataaux_horarios["horario_tipo"] = $fdata;
		$tdataaux_horarios[".searchableFields"][] = "horario_tipo";
//	horario_entre_semana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "horario_entre_semana";
	$fdata["GoodName"] = "horario_entre_semana";
	$fdata["ownerTable"] = "aux_horarios";
	$fdata["Label"] = GetFieldLabel("aux_horarios","horario_entre_semana");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "horario_entre_semana";

		$fdata["sourceSingle"] = "horario_entre_semana";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`horario_entre_semana`";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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


	$tdataaux_horarios["horario_entre_semana"] = $fdata;
		$tdataaux_horarios[".searchableFields"][] = "horario_entre_semana";
//	horario_sabado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "horario_sabado";
	$fdata["GoodName"] = "horario_sabado";
	$fdata["ownerTable"] = "aux_horarios";
	$fdata["Label"] = GetFieldLabel("aux_horarios","horario_sabado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "horario_sabado";

		$fdata["sourceSingle"] = "horario_sabado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`horario_sabado`";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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


	$tdataaux_horarios["horario_sabado"] = $fdata;
		$tdataaux_horarios[".searchableFields"][] = "horario_sabado";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "aux_horarios";
	$fdata["Label"] = GetFieldLabel("aux_horarios","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`time_stamp`";

	
	
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


	$tdataaux_horarios["time_stamp"] = $fdata;
		$tdataaux_horarios[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "aux_horarios";
	$fdata["Label"] = GetFieldLabel("aux_horarios","vigente");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vigente`";

	
	
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


	$tdataaux_horarios["vigente"] = $fdata;
		$tdataaux_horarios[".searchableFields"][] = "vigente";
//	minutos_tolerancia_entrada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "minutos_tolerancia_entrada";
	$fdata["GoodName"] = "minutos_tolerancia_entrada";
	$fdata["ownerTable"] = "aux_horarios";
	$fdata["Label"] = GetFieldLabel("aux_horarios","minutos_tolerancia_entrada");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "minutos_tolerancia_entrada";

		$fdata["sourceSingle"] = "minutos_tolerancia_entrada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`minutos_tolerancia_entrada`";

	
	
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


	$tdataaux_horarios["minutos_tolerancia_entrada"] = $fdata;
		$tdataaux_horarios[".searchableFields"][] = "minutos_tolerancia_entrada";


$tables_data["aux_horarios"]=&$tdataaux_horarios;
$field_labels["aux_horarios"] = &$fieldLabelsaux_horarios;
$fieldToolTips["aux_horarios"] = &$fieldToolTipsaux_horarios;
$placeHolders["aux_horarios"] = &$placeHoldersaux_horarios;
$page_titles["aux_horarios"] = &$pageTitlesaux_horarios;


changeTextControlsToDate( "aux_horarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aux_horarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aux_horarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aux_horarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`aux_horarios_id`,  	`descripcion_horario`,  	`horario_tipo`,  	`horario_entre_semana`,  	`horario_sabado`,  	`time_stamp`,  	`vigente`,  	`minutos_tolerancia_entrada`";
$proto0["m_strFrom"] = "FROM `aux_horarios`";
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
	"m_strName" => "aux_horarios_id",
	"m_strTable" => "aux_horarios",
	"m_srcTableName" => "aux_horarios"
));

$proto6["m_sql"] = "`aux_horarios_id`";
$proto6["m_srcTableName"] = "aux_horarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_horario",
	"m_strTable" => "aux_horarios",
	"m_srcTableName" => "aux_horarios"
));

$proto8["m_sql"] = "`descripcion_horario`";
$proto8["m_srcTableName"] = "aux_horarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "horario_tipo",
	"m_strTable" => "aux_horarios",
	"m_srcTableName" => "aux_horarios"
));

$proto10["m_sql"] = "`horario_tipo`";
$proto10["m_srcTableName"] = "aux_horarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "horario_entre_semana",
	"m_strTable" => "aux_horarios",
	"m_srcTableName" => "aux_horarios"
));

$proto12["m_sql"] = "`horario_entre_semana`";
$proto12["m_srcTableName"] = "aux_horarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "horario_sabado",
	"m_strTable" => "aux_horarios",
	"m_srcTableName" => "aux_horarios"
));

$proto14["m_sql"] = "`horario_sabado`";
$proto14["m_srcTableName"] = "aux_horarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "aux_horarios",
	"m_srcTableName" => "aux_horarios"
));

$proto16["m_sql"] = "`time_stamp`";
$proto16["m_srcTableName"] = "aux_horarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "aux_horarios",
	"m_srcTableName" => "aux_horarios"
));

$proto18["m_sql"] = "`vigente`";
$proto18["m_srcTableName"] = "aux_horarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "minutos_tolerancia_entrada",
	"m_strTable" => "aux_horarios",
	"m_srcTableName" => "aux_horarios"
));

$proto20["m_sql"] = "`minutos_tolerancia_entrada`";
$proto20["m_srcTableName"] = "aux_horarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "aux_horarios";
$proto23["m_srcTableName"] = "aux_horarios";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "aux_horarios_id";
$proto23["m_columns"][] = "descripcion_horario";
$proto23["m_columns"][] = "horario_tipo";
$proto23["m_columns"][] = "horario_entre_semana";
$proto23["m_columns"][] = "horario_sabado";
$proto23["m_columns"][] = "time_stamp";
$proto23["m_columns"][] = "vigente";
$proto23["m_columns"][] = "minutos_tolerancia_entrada";
$proto23["m_columns"][] = "minutos_tolerancia_salida";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`aux_horarios`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "aux_horarios";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="aux_horarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aux_horarios = createSqlQuery_aux_horarios();


	
		;

								

$tdataaux_horarios[".sqlquery"] = $queryData_aux_horarios;



$tdataaux_horarios[".hasEvents"] = false;

?>