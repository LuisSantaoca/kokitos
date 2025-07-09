<?php
$tdataaux_nomina_justificantes_bonos = array();
$tdataaux_nomina_justificantes_bonos[".searchableFields"] = array();
$tdataaux_nomina_justificantes_bonos[".ShortName"] = "aux_nomina_justificantes_bonos";
$tdataaux_nomina_justificantes_bonos[".OwnerID"] = "";
$tdataaux_nomina_justificantes_bonos[".OriginalTable"] = "aux_nomina_justificantes_bonos";


$tdataaux_nomina_justificantes_bonos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaux_nomina_justificantes_bonos[".originalPagesByType"] = $tdataaux_nomina_justificantes_bonos[".pagesByType"];
$tdataaux_nomina_justificantes_bonos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaux_nomina_justificantes_bonos[".originalPages"] = $tdataaux_nomina_justificantes_bonos[".pages"];
$tdataaux_nomina_justificantes_bonos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaux_nomina_justificantes_bonos[".originalDefaultPages"] = $tdataaux_nomina_justificantes_bonos[".defaultPages"];

//	field labels
$fieldLabelsaux_nomina_justificantes_bonos = array();
$fieldToolTipsaux_nomina_justificantes_bonos = array();
$pageTitlesaux_nomina_justificantes_bonos = array();
$placeHoldersaux_nomina_justificantes_bonos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaux_nomina_justificantes_bonos["Spanish"] = array();
	$fieldToolTipsaux_nomina_justificantes_bonos["Spanish"] = array();
	$placeHoldersaux_nomina_justificantes_bonos["Spanish"] = array();
	$pageTitlesaux_nomina_justificantes_bonos["Spanish"] = array();
	$fieldLabelsaux_nomina_justificantes_bonos["Spanish"]["aplica_bono"] = "Aplica Bono";
	$fieldToolTipsaux_nomina_justificantes_bonos["Spanish"]["aplica_bono"] = "";
	$placeHoldersaux_nomina_justificantes_bonos["Spanish"]["aplica_bono"] = "";
	$fieldLabelsaux_nomina_justificantes_bonos["Spanish"]["aux_nomina_justificantes_bonos_id"] = "Aux Nomina Justificantes Bonos Id";
	$fieldToolTipsaux_nomina_justificantes_bonos["Spanish"]["aux_nomina_justificantes_bonos_id"] = "";
	$placeHoldersaux_nomina_justificantes_bonos["Spanish"]["aux_nomina_justificantes_bonos_id"] = "";
	$fieldLabelsaux_nomina_justificantes_bonos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsaux_nomina_justificantes_bonos["Spanish"]["time_stamp"] = "";
	$placeHoldersaux_nomina_justificantes_bonos["Spanish"]["time_stamp"] = "";
	$fieldLabelsaux_nomina_justificantes_bonos["Spanish"]["tr_nominas_incidencias_id"] = "Tr Nominas Incidencias Id";
	$fieldToolTipsaux_nomina_justificantes_bonos["Spanish"]["tr_nominas_incidencias_id"] = "";
	$placeHoldersaux_nomina_justificantes_bonos["Spanish"]["tr_nominas_incidencias_id"] = "";
	$fieldLabelsaux_nomina_justificantes_bonos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsaux_nomina_justificantes_bonos["Spanish"]["vigente"] = "";
	$placeHoldersaux_nomina_justificantes_bonos["Spanish"]["vigente"] = "";
	if (count($fieldToolTipsaux_nomina_justificantes_bonos["Spanish"]))
		$tdataaux_nomina_justificantes_bonos[".isUseToolTips"] = true;
}


	$tdataaux_nomina_justificantes_bonos[".NCSearch"] = true;



$tdataaux_nomina_justificantes_bonos[".shortTableName"] = "aux_nomina_justificantes_bonos";
$tdataaux_nomina_justificantes_bonos[".nSecOptions"] = 0;

$tdataaux_nomina_justificantes_bonos[".mainTableOwnerID"] = "";
$tdataaux_nomina_justificantes_bonos[".entityType"] = 0;
$tdataaux_nomina_justificantes_bonos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdataaux_nomina_justificantes_bonos[".strOriginalTableName"] = "aux_nomina_justificantes_bonos";

	



$tdataaux_nomina_justificantes_bonos[".showAddInPopup"] = false;

$tdataaux_nomina_justificantes_bonos[".showEditInPopup"] = false;

$tdataaux_nomina_justificantes_bonos[".showViewInPopup"] = false;

$tdataaux_nomina_justificantes_bonos[".listAjax"] = false;
//	temporary
//$tdataaux_nomina_justificantes_bonos[".listAjax"] = false;

	$tdataaux_nomina_justificantes_bonos[".audit"] = false;

	$tdataaux_nomina_justificantes_bonos[".locking"] = false;


$pages = $tdataaux_nomina_justificantes_bonos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaux_nomina_justificantes_bonos[".edit"] = true;
	$tdataaux_nomina_justificantes_bonos[".afterEditAction"] = 1;
	$tdataaux_nomina_justificantes_bonos[".closePopupAfterEdit"] = 1;
	$tdataaux_nomina_justificantes_bonos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaux_nomina_justificantes_bonos[".add"] = true;
$tdataaux_nomina_justificantes_bonos[".afterAddAction"] = 1;
$tdataaux_nomina_justificantes_bonos[".closePopupAfterAdd"] = 1;
$tdataaux_nomina_justificantes_bonos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaux_nomina_justificantes_bonos[".list"] = true;
}



$tdataaux_nomina_justificantes_bonos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaux_nomina_justificantes_bonos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaux_nomina_justificantes_bonos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaux_nomina_justificantes_bonos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaux_nomina_justificantes_bonos[".printFriendly"] = true;
}



$tdataaux_nomina_justificantes_bonos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaux_nomina_justificantes_bonos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaux_nomina_justificantes_bonos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaux_nomina_justificantes_bonos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdataaux_nomina_justificantes_bonos[".ajaxCodeSnippetAdded"] = false;

$tdataaux_nomina_justificantes_bonos[".buttonsAdded"] = false;

$tdataaux_nomina_justificantes_bonos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaux_nomina_justificantes_bonos[".isUseTimeForSearch"] = false;


$tdataaux_nomina_justificantes_bonos[".badgeColor"] = "EDCA00";


$tdataaux_nomina_justificantes_bonos[".allSearchFields"] = array();
$tdataaux_nomina_justificantes_bonos[".filterFields"] = array();
$tdataaux_nomina_justificantes_bonos[".requiredSearchFields"] = array();

$tdataaux_nomina_justificantes_bonos[".googleLikeFields"] = array();
$tdataaux_nomina_justificantes_bonos[".googleLikeFields"][] = "aux_nomina_justificantes_bonos_id";
$tdataaux_nomina_justificantes_bonos[".googleLikeFields"][] = "tr_nominas_incidencias_id";
$tdataaux_nomina_justificantes_bonos[".googleLikeFields"][] = "vigente";
$tdataaux_nomina_justificantes_bonos[".googleLikeFields"][] = "aplica_bono";
$tdataaux_nomina_justificantes_bonos[".googleLikeFields"][] = "time_stamp";



$tdataaux_nomina_justificantes_bonos[".tableType"] = "list";

$tdataaux_nomina_justificantes_bonos[".printerPageOrientation"] = 0;
$tdataaux_nomina_justificantes_bonos[".nPrinterPageScale"] = 100;

$tdataaux_nomina_justificantes_bonos[".nPrinterSplitRecords"] = 40;

$tdataaux_nomina_justificantes_bonos[".geocodingEnabled"] = false;










$tdataaux_nomina_justificantes_bonos[".pageSize"] = 20;

$tdataaux_nomina_justificantes_bonos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaux_nomina_justificantes_bonos[".strOrderBy"] = $tstrOrderBy;

$tdataaux_nomina_justificantes_bonos[".orderindexes"] = array();


$tdataaux_nomina_justificantes_bonos[".sqlHead"] = "SELECT aux_nomina_justificantes_bonos_id,  	tr_nominas_incidencias_id,  	vigente,  	aplica_bono,  	time_stamp";
$tdataaux_nomina_justificantes_bonos[".sqlFrom"] = "FROM aux_nomina_justificantes_bonos";
$tdataaux_nomina_justificantes_bonos[".sqlWhereExpr"] = "";
$tdataaux_nomina_justificantes_bonos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaux_nomina_justificantes_bonos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaux_nomina_justificantes_bonos[".arrGroupsPerPage"] = $arrGPP;

$tdataaux_nomina_justificantes_bonos[".highlightSearchResults"] = true;

$tableKeysaux_nomina_justificantes_bonos = array();
$tableKeysaux_nomina_justificantes_bonos[] = "aux_nomina_justificantes_bonos_id";
$tdataaux_nomina_justificantes_bonos[".Keys"] = $tableKeysaux_nomina_justificantes_bonos;


$tdataaux_nomina_justificantes_bonos[".hideMobileList"] = array();




//	aux_nomina_justificantes_bonos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aux_nomina_justificantes_bonos_id";
	$fdata["GoodName"] = "aux_nomina_justificantes_bonos_id";
	$fdata["ownerTable"] = "aux_nomina_justificantes_bonos";
	$fdata["Label"] = GetFieldLabel("aux_nomina_justificantes_bonos","aux_nomina_justificantes_bonos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "aux_nomina_justificantes_bonos_id";

		$fdata["sourceSingle"] = "aux_nomina_justificantes_bonos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aux_nomina_justificantes_bonos_id";

	
	
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


	$tdataaux_nomina_justificantes_bonos["aux_nomina_justificantes_bonos_id"] = $fdata;
		$tdataaux_nomina_justificantes_bonos[".searchableFields"][] = "aux_nomina_justificantes_bonos_id";
//	tr_nominas_incidencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tr_nominas_incidencias_id";
	$fdata["GoodName"] = "tr_nominas_incidencias_id";
	$fdata["ownerTable"] = "aux_nomina_justificantes_bonos";
	$fdata["Label"] = GetFieldLabel("aux_nomina_justificantes_bonos","tr_nominas_incidencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tr_nominas_incidencias_id";

		$fdata["sourceSingle"] = "tr_nominas_incidencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_nominas_incidencias_id";

	
	
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


	$tdataaux_nomina_justificantes_bonos["tr_nominas_incidencias_id"] = $fdata;
		$tdataaux_nomina_justificantes_bonos[".searchableFields"][] = "tr_nominas_incidencias_id";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "aux_nomina_justificantes_bonos";
	$fdata["Label"] = GetFieldLabel("aux_nomina_justificantes_bonos","vigente");
	$fdata["FieldType"] = 16;


	
	
			

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


	$tdataaux_nomina_justificantes_bonos["vigente"] = $fdata;
		$tdataaux_nomina_justificantes_bonos[".searchableFields"][] = "vigente";
//	aplica_bono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "aplica_bono";
	$fdata["GoodName"] = "aplica_bono";
	$fdata["ownerTable"] = "aux_nomina_justificantes_bonos";
	$fdata["Label"] = GetFieldLabel("aux_nomina_justificantes_bonos","aplica_bono");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "aplica_bono";

		$fdata["sourceSingle"] = "aplica_bono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aplica_bono";

	
	
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


	$tdataaux_nomina_justificantes_bonos["aplica_bono"] = $fdata;
		$tdataaux_nomina_justificantes_bonos[".searchableFields"][] = "aplica_bono";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "aux_nomina_justificantes_bonos";
	$fdata["Label"] = GetFieldLabel("aux_nomina_justificantes_bonos","time_stamp");
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


	$tdataaux_nomina_justificantes_bonos["time_stamp"] = $fdata;
		$tdataaux_nomina_justificantes_bonos[".searchableFields"][] = "time_stamp";


$tables_data["aux_nomina_justificantes_bonos"]=&$tdataaux_nomina_justificantes_bonos;
$field_labels["aux_nomina_justificantes_bonos"] = &$fieldLabelsaux_nomina_justificantes_bonos;
$fieldToolTips["aux_nomina_justificantes_bonos"] = &$fieldToolTipsaux_nomina_justificantes_bonos;
$placeHolders["aux_nomina_justificantes_bonos"] = &$placeHoldersaux_nomina_justificantes_bonos;
$page_titles["aux_nomina_justificantes_bonos"] = &$pageTitlesaux_nomina_justificantes_bonos;


changeTextControlsToDate( "aux_nomina_justificantes_bonos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aux_nomina_justificantes_bonos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aux_nomina_justificantes_bonos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aux_nomina_justificantes_bonos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aux_nomina_justificantes_bonos_id,  	tr_nominas_incidencias_id,  	vigente,  	aplica_bono,  	time_stamp";
$proto0["m_strFrom"] = "FROM aux_nomina_justificantes_bonos";
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
	"m_strName" => "aux_nomina_justificantes_bonos_id",
	"m_strTable" => "aux_nomina_justificantes_bonos",
	"m_srcTableName" => "aux_nomina_justificantes_bonos"
));

$proto6["m_sql"] = "aux_nomina_justificantes_bonos_id";
$proto6["m_srcTableName"] = "aux_nomina_justificantes_bonos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_nominas_incidencias_id",
	"m_strTable" => "aux_nomina_justificantes_bonos",
	"m_srcTableName" => "aux_nomina_justificantes_bonos"
));

$proto8["m_sql"] = "tr_nominas_incidencias_id";
$proto8["m_srcTableName"] = "aux_nomina_justificantes_bonos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "aux_nomina_justificantes_bonos",
	"m_srcTableName" => "aux_nomina_justificantes_bonos"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "aux_nomina_justificantes_bonos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "aplica_bono",
	"m_strTable" => "aux_nomina_justificantes_bonos",
	"m_srcTableName" => "aux_nomina_justificantes_bonos"
));

$proto12["m_sql"] = "aplica_bono";
$proto12["m_srcTableName"] = "aux_nomina_justificantes_bonos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "aux_nomina_justificantes_bonos",
	"m_srcTableName" => "aux_nomina_justificantes_bonos"
));

$proto14["m_sql"] = "time_stamp";
$proto14["m_srcTableName"] = "aux_nomina_justificantes_bonos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "aux_nomina_justificantes_bonos";
$proto17["m_srcTableName"] = "aux_nomina_justificantes_bonos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "aux_nomina_justificantes_bonos_id";
$proto17["m_columns"][] = "tr_nominas_incidencias_id";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "aplica_bono";
$proto17["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "aux_nomina_justificantes_bonos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "aux_nomina_justificantes_bonos";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="aux_nomina_justificantes_bonos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aux_nomina_justificantes_bonos = createSqlQuery_aux_nomina_justificantes_bonos();


	
		;

					

$tdataaux_nomina_justificantes_bonos[".sqlquery"] = $queryData_aux_nomina_justificantes_bonos;



$tdataaux_nomina_justificantes_bonos[".hasEvents"] = false;

?>