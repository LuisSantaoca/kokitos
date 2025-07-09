<?php
$tdataaux_incidencias_justificables = array();
$tdataaux_incidencias_justificables[".searchableFields"] = array();
$tdataaux_incidencias_justificables[".ShortName"] = "aux_incidencias_justificables";
$tdataaux_incidencias_justificables[".OwnerID"] = "";
$tdataaux_incidencias_justificables[".OriginalTable"] = "aux_incidencias_justificables";


$tdataaux_incidencias_justificables[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaux_incidencias_justificables[".originalPagesByType"] = $tdataaux_incidencias_justificables[".pagesByType"];
$tdataaux_incidencias_justificables[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaux_incidencias_justificables[".originalPages"] = $tdataaux_incidencias_justificables[".pages"];
$tdataaux_incidencias_justificables[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaux_incidencias_justificables[".originalDefaultPages"] = $tdataaux_incidencias_justificables[".defaultPages"];

//	field labels
$fieldLabelsaux_incidencias_justificables = array();
$fieldToolTipsaux_incidencias_justificables = array();
$pageTitlesaux_incidencias_justificables = array();
$placeHoldersaux_incidencias_justificables = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaux_incidencias_justificables["Spanish"] = array();
	$fieldToolTipsaux_incidencias_justificables["Spanish"] = array();
	$placeHoldersaux_incidencias_justificables["Spanish"] = array();
	$pageTitlesaux_incidencias_justificables["Spanish"] = array();
	$fieldLabelsaux_incidencias_justificables["Spanish"]["aux_incidencias_justificables_id"] = "Incidencias Justificables Id";
	$fieldToolTipsaux_incidencias_justificables["Spanish"]["aux_incidencias_justificables_id"] = "";
	$placeHoldersaux_incidencias_justificables["Spanish"]["aux_incidencias_justificables_id"] = "";
	$fieldLabelsaux_incidencias_justificables["Spanish"]["cat_nominas_incidencias_id"] = "Cat Nominas Incidencias Id";
	$fieldToolTipsaux_incidencias_justificables["Spanish"]["cat_nominas_incidencias_id"] = "";
	$placeHoldersaux_incidencias_justificables["Spanish"]["cat_nominas_incidencias_id"] = "";
	$fieldLabelsaux_incidencias_justificables["Spanish"]["justificable"] = "Justificable";
	$fieldToolTipsaux_incidencias_justificables["Spanish"]["justificable"] = "";
	$placeHoldersaux_incidencias_justificables["Spanish"]["justificable"] = "";
	$fieldLabelsaux_incidencias_justificables["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsaux_incidencias_justificables["Spanish"]["time_stamp"] = "";
	$placeHoldersaux_incidencias_justificables["Spanish"]["time_stamp"] = "";
	$fieldLabelsaux_incidencias_justificables["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsaux_incidencias_justificables["Spanish"]["vigente"] = "";
	$placeHoldersaux_incidencias_justificables["Spanish"]["vigente"] = "";
	if (count($fieldToolTipsaux_incidencias_justificables["Spanish"]))
		$tdataaux_incidencias_justificables[".isUseToolTips"] = true;
}


	$tdataaux_incidencias_justificables[".NCSearch"] = true;



$tdataaux_incidencias_justificables[".shortTableName"] = "aux_incidencias_justificables";
$tdataaux_incidencias_justificables[".nSecOptions"] = 0;

$tdataaux_incidencias_justificables[".mainTableOwnerID"] = "";
$tdataaux_incidencias_justificables[".entityType"] = 0;
$tdataaux_incidencias_justificables[".connId"] = "wwinte_app_at_intelagro_mx";


$tdataaux_incidencias_justificables[".strOriginalTableName"] = "aux_incidencias_justificables";

	



$tdataaux_incidencias_justificables[".showAddInPopup"] = false;

$tdataaux_incidencias_justificables[".showEditInPopup"] = false;

$tdataaux_incidencias_justificables[".showViewInPopup"] = false;

$tdataaux_incidencias_justificables[".listAjax"] = false;
//	temporary
//$tdataaux_incidencias_justificables[".listAjax"] = false;

	$tdataaux_incidencias_justificables[".audit"] = false;

	$tdataaux_incidencias_justificables[".locking"] = false;


$pages = $tdataaux_incidencias_justificables[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaux_incidencias_justificables[".edit"] = true;
	$tdataaux_incidencias_justificables[".afterEditAction"] = 1;
	$tdataaux_incidencias_justificables[".closePopupAfterEdit"] = 1;
	$tdataaux_incidencias_justificables[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaux_incidencias_justificables[".add"] = true;
$tdataaux_incidencias_justificables[".afterAddAction"] = 1;
$tdataaux_incidencias_justificables[".closePopupAfterAdd"] = 1;
$tdataaux_incidencias_justificables[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaux_incidencias_justificables[".list"] = true;
}



$tdataaux_incidencias_justificables[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaux_incidencias_justificables[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaux_incidencias_justificables[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaux_incidencias_justificables[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaux_incidencias_justificables[".printFriendly"] = true;
}



$tdataaux_incidencias_justificables[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaux_incidencias_justificables[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaux_incidencias_justificables[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaux_incidencias_justificables[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdataaux_incidencias_justificables[".ajaxCodeSnippetAdded"] = false;

$tdataaux_incidencias_justificables[".buttonsAdded"] = false;

$tdataaux_incidencias_justificables[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaux_incidencias_justificables[".isUseTimeForSearch"] = false;


$tdataaux_incidencias_justificables[".badgeColor"] = "E8926F";


$tdataaux_incidencias_justificables[".allSearchFields"] = array();
$tdataaux_incidencias_justificables[".filterFields"] = array();
$tdataaux_incidencias_justificables[".requiredSearchFields"] = array();

$tdataaux_incidencias_justificables[".googleLikeFields"] = array();
$tdataaux_incidencias_justificables[".googleLikeFields"][] = "aux_incidencias_justificables_id";
$tdataaux_incidencias_justificables[".googleLikeFields"][] = "cat_nominas_incidencias_id";
$tdataaux_incidencias_justificables[".googleLikeFields"][] = "vigente";
$tdataaux_incidencias_justificables[".googleLikeFields"][] = "justificable";
$tdataaux_incidencias_justificables[".googleLikeFields"][] = "time_stamp";



$tdataaux_incidencias_justificables[".tableType"] = "list";

$tdataaux_incidencias_justificables[".printerPageOrientation"] = 0;
$tdataaux_incidencias_justificables[".nPrinterPageScale"] = 100;

$tdataaux_incidencias_justificables[".nPrinterSplitRecords"] = 40;

$tdataaux_incidencias_justificables[".geocodingEnabled"] = false;










$tdataaux_incidencias_justificables[".pageSize"] = 20;

$tdataaux_incidencias_justificables[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaux_incidencias_justificables[".strOrderBy"] = $tstrOrderBy;

$tdataaux_incidencias_justificables[".orderindexes"] = array();


$tdataaux_incidencias_justificables[".sqlHead"] = "SELECT aux_incidencias_justificables_id,  	cat_nominas_incidencias_id,  	vigente,  	justificable,  	time_stamp";
$tdataaux_incidencias_justificables[".sqlFrom"] = "FROM aux_incidencias_justificables";
$tdataaux_incidencias_justificables[".sqlWhereExpr"] = "";
$tdataaux_incidencias_justificables[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaux_incidencias_justificables[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaux_incidencias_justificables[".arrGroupsPerPage"] = $arrGPP;

$tdataaux_incidencias_justificables[".highlightSearchResults"] = true;

$tableKeysaux_incidencias_justificables = array();
$tableKeysaux_incidencias_justificables[] = "aux_incidencias_justificables_id";
$tdataaux_incidencias_justificables[".Keys"] = $tableKeysaux_incidencias_justificables;


$tdataaux_incidencias_justificables[".hideMobileList"] = array();




//	aux_incidencias_justificables_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aux_incidencias_justificables_id";
	$fdata["GoodName"] = "aux_incidencias_justificables_id";
	$fdata["ownerTable"] = "aux_incidencias_justificables";
	$fdata["Label"] = GetFieldLabel("aux_incidencias_justificables","aux_incidencias_justificables_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "aux_incidencias_justificables_id";

		$fdata["sourceSingle"] = "aux_incidencias_justificables_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aux_incidencias_justificables_id";

	
	
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


	$tdataaux_incidencias_justificables["aux_incidencias_justificables_id"] = $fdata;
		$tdataaux_incidencias_justificables[".searchableFields"][] = "aux_incidencias_justificables_id";
//	cat_nominas_incidencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_nominas_incidencias_id";
	$fdata["GoodName"] = "cat_nominas_incidencias_id";
	$fdata["ownerTable"] = "aux_incidencias_justificables";
	$fdata["Label"] = GetFieldLabel("aux_incidencias_justificables","cat_nominas_incidencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_incidencias_id";

		$fdata["sourceSingle"] = "cat_nominas_incidencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_incidencias_id";

	
	
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
	$edata["LookupTable"] = "cat_nominas_incidencias_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_nominas_incidencias_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cat_nominas_incidencias_mu_id";

	

	
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


	$tdataaux_incidencias_justificables["cat_nominas_incidencias_id"] = $fdata;
		$tdataaux_incidencias_justificables[".searchableFields"][] = "cat_nominas_incidencias_id";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "aux_incidencias_justificables";
	$fdata["Label"] = GetFieldLabel("aux_incidencias_justificables","vigente");
	$fdata["FieldType"] = 16;


	
	
			

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


	$tdataaux_incidencias_justificables["vigente"] = $fdata;
		$tdataaux_incidencias_justificables[".searchableFields"][] = "vigente";
//	justificable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "justificable";
	$fdata["GoodName"] = "justificable";
	$fdata["ownerTable"] = "aux_incidencias_justificables";
	$fdata["Label"] = GetFieldLabel("aux_incidencias_justificables","justificable");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "justificable";

		$fdata["sourceSingle"] = "justificable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "justificable";

	
	
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


	$tdataaux_incidencias_justificables["justificable"] = $fdata;
		$tdataaux_incidencias_justificables[".searchableFields"][] = "justificable";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "aux_incidencias_justificables";
	$fdata["Label"] = GetFieldLabel("aux_incidencias_justificables","time_stamp");
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


	$tdataaux_incidencias_justificables["time_stamp"] = $fdata;
		$tdataaux_incidencias_justificables[".searchableFields"][] = "time_stamp";


$tables_data["aux_incidencias_justificables"]=&$tdataaux_incidencias_justificables;
$field_labels["aux_incidencias_justificables"] = &$fieldLabelsaux_incidencias_justificables;
$fieldToolTips["aux_incidencias_justificables"] = &$fieldToolTipsaux_incidencias_justificables;
$placeHolders["aux_incidencias_justificables"] = &$placeHoldersaux_incidencias_justificables;
$page_titles["aux_incidencias_justificables"] = &$pageTitlesaux_incidencias_justificables;


changeTextControlsToDate( "aux_incidencias_justificables" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aux_incidencias_justificables"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aux_incidencias_justificables"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aux_incidencias_justificables()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aux_incidencias_justificables_id,  	cat_nominas_incidencias_id,  	vigente,  	justificable,  	time_stamp";
$proto0["m_strFrom"] = "FROM aux_incidencias_justificables";
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
	"m_strName" => "aux_incidencias_justificables_id",
	"m_strTable" => "aux_incidencias_justificables",
	"m_srcTableName" => "aux_incidencias_justificables"
));

$proto6["m_sql"] = "aux_incidencias_justificables_id";
$proto6["m_srcTableName"] = "aux_incidencias_justificables";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_incidencias_id",
	"m_strTable" => "aux_incidencias_justificables",
	"m_srcTableName" => "aux_incidencias_justificables"
));

$proto8["m_sql"] = "cat_nominas_incidencias_id";
$proto8["m_srcTableName"] = "aux_incidencias_justificables";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "aux_incidencias_justificables",
	"m_srcTableName" => "aux_incidencias_justificables"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "aux_incidencias_justificables";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "justificable",
	"m_strTable" => "aux_incidencias_justificables",
	"m_srcTableName" => "aux_incidencias_justificables"
));

$proto12["m_sql"] = "justificable";
$proto12["m_srcTableName"] = "aux_incidencias_justificables";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "aux_incidencias_justificables",
	"m_srcTableName" => "aux_incidencias_justificables"
));

$proto14["m_sql"] = "time_stamp";
$proto14["m_srcTableName"] = "aux_incidencias_justificables";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "aux_incidencias_justificables";
$proto17["m_srcTableName"] = "aux_incidencias_justificables";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "aux_incidencias_justificables_id";
$proto17["m_columns"][] = "cat_nominas_incidencias_id";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "justificable";
$proto17["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "aux_incidencias_justificables";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "aux_incidencias_justificables";
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
$proto0["m_srcTableName"]="aux_incidencias_justificables";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aux_incidencias_justificables = createSqlQuery_aux_incidencias_justificables();


	
		;

					

$tdataaux_incidencias_justificables[".sqlquery"] = $queryData_aux_incidencias_justificables;



$tdataaux_incidencias_justificables[".hasEvents"] = false;

?>