<?php
$tdatatr_root_audit_log_audit = array();
$tdatatr_root_audit_log_audit[".searchableFields"] = array();
$tdatatr_root_audit_log_audit[".ShortName"] = "tr_root_audit_log_audit";
$tdatatr_root_audit_log_audit[".OwnerID"] = "";
$tdatatr_root_audit_log_audit[".OriginalTable"] = "tr_root_audit_log_audit";


$tdatatr_root_audit_log_audit[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatr_root_audit_log_audit[".originalPagesByType"] = $tdatatr_root_audit_log_audit[".pagesByType"];
$tdatatr_root_audit_log_audit[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatr_root_audit_log_audit[".originalPages"] = $tdatatr_root_audit_log_audit[".pages"];
$tdatatr_root_audit_log_audit[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatr_root_audit_log_audit[".originalDefaultPages"] = $tdatatr_root_audit_log_audit[".defaultPages"];

//	field labels
$fieldLabelstr_root_audit_log_audit = array();
$fieldToolTipstr_root_audit_log_audit = array();
$pageTitlestr_root_audit_log_audit = array();
$placeHolderstr_root_audit_log_audit = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_root_audit_log_audit["Spanish"] = array();
	$fieldToolTipstr_root_audit_log_audit["Spanish"] = array();
	$placeHolderstr_root_audit_log_audit["Spanish"] = array();
	$pageTitlestr_root_audit_log_audit["Spanish"] = array();
	$fieldLabelstr_root_audit_log_audit["Spanish"]["id"] = "Id";
	$fieldToolTipstr_root_audit_log_audit["Spanish"]["id"] = "";
	$placeHolderstr_root_audit_log_audit["Spanish"]["id"] = "";
	$fieldLabelstr_root_audit_log_audit["Spanish"]["datetime"] = "Datetime";
	$fieldToolTipstr_root_audit_log_audit["Spanish"]["datetime"] = "";
	$placeHolderstr_root_audit_log_audit["Spanish"]["datetime"] = "";
	$fieldLabelstr_root_audit_log_audit["Spanish"]["ip"] = "Ip";
	$fieldToolTipstr_root_audit_log_audit["Spanish"]["ip"] = "";
	$placeHolderstr_root_audit_log_audit["Spanish"]["ip"] = "";
	$fieldLabelstr_root_audit_log_audit["Spanish"]["user"] = "User";
	$fieldToolTipstr_root_audit_log_audit["Spanish"]["user"] = "";
	$placeHolderstr_root_audit_log_audit["Spanish"]["user"] = "";
	$fieldLabelstr_root_audit_log_audit["Spanish"]["table"] = "Table";
	$fieldToolTipstr_root_audit_log_audit["Spanish"]["table"] = "";
	$placeHolderstr_root_audit_log_audit["Spanish"]["table"] = "";
	$fieldLabelstr_root_audit_log_audit["Spanish"]["action"] = "Action";
	$fieldToolTipstr_root_audit_log_audit["Spanish"]["action"] = "";
	$placeHolderstr_root_audit_log_audit["Spanish"]["action"] = "";
	$fieldLabelstr_root_audit_log_audit["Spanish"]["description"] = "Description";
	$fieldToolTipstr_root_audit_log_audit["Spanish"]["description"] = "";
	$placeHolderstr_root_audit_log_audit["Spanish"]["description"] = "";
	if (count($fieldToolTipstr_root_audit_log_audit["Spanish"]))
		$tdatatr_root_audit_log_audit[".isUseToolTips"] = true;
}





$tdatatr_root_audit_log_audit[".shortTableName"] = "tr_root_audit_log_audit";
$tdatatr_root_audit_log_audit[".nSecOptions"] = 0;

$tdatatr_root_audit_log_audit[".mainTableOwnerID"] = "";
$tdatatr_root_audit_log_audit[".entityType"] = 0;
$tdatatr_root_audit_log_audit[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_root_audit_log_audit[".strOriginalTableName"] = "tr_root_audit_log_audit";

	



$tdatatr_root_audit_log_audit[".showAddInPopup"] = false;

$tdatatr_root_audit_log_audit[".showEditInPopup"] = false;

$tdatatr_root_audit_log_audit[".showViewInPopup"] = false;

$tdatatr_root_audit_log_audit[".listAjax"] = false;
//	temporary
//$tdatatr_root_audit_log_audit[".listAjax"] = false;

	$tdatatr_root_audit_log_audit[".audit"] = false;

	$tdatatr_root_audit_log_audit[".locking"] = false;


$pages = $tdatatr_root_audit_log_audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_root_audit_log_audit[".edit"] = true;
	$tdatatr_root_audit_log_audit[".afterEditAction"] = 1;
	$tdatatr_root_audit_log_audit[".closePopupAfterEdit"] = 1;
	$tdatatr_root_audit_log_audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_root_audit_log_audit[".add"] = true;
$tdatatr_root_audit_log_audit[".afterAddAction"] = 1;
$tdatatr_root_audit_log_audit[".closePopupAfterAdd"] = 1;
$tdatatr_root_audit_log_audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_root_audit_log_audit[".list"] = true;
}



$tdatatr_root_audit_log_audit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_root_audit_log_audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_root_audit_log_audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_root_audit_log_audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_root_audit_log_audit[".printFriendly"] = true;
}



$tdatatr_root_audit_log_audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_root_audit_log_audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_root_audit_log_audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_root_audit_log_audit[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_root_audit_log_audit[".ajaxCodeSnippetAdded"] = false;

$tdatatr_root_audit_log_audit[".buttonsAdded"] = false;

$tdatatr_root_audit_log_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_root_audit_log_audit[".isUseTimeForSearch"] = false;


$tdatatr_root_audit_log_audit[".badgeColor"] = "6B8E23";


$tdatatr_root_audit_log_audit[".allSearchFields"] = array();
$tdatatr_root_audit_log_audit[".filterFields"] = array();
$tdatatr_root_audit_log_audit[".requiredSearchFields"] = array();

$tdatatr_root_audit_log_audit[".googleLikeFields"] = array();
$tdatatr_root_audit_log_audit[".googleLikeFields"][] = "id";
$tdatatr_root_audit_log_audit[".googleLikeFields"][] = "datetime";
$tdatatr_root_audit_log_audit[".googleLikeFields"][] = "ip";
$tdatatr_root_audit_log_audit[".googleLikeFields"][] = "user";
$tdatatr_root_audit_log_audit[".googleLikeFields"][] = "table";
$tdatatr_root_audit_log_audit[".googleLikeFields"][] = "action";
$tdatatr_root_audit_log_audit[".googleLikeFields"][] = "description";



$tdatatr_root_audit_log_audit[".tableType"] = "list";

$tdatatr_root_audit_log_audit[".printerPageOrientation"] = 0;
$tdatatr_root_audit_log_audit[".nPrinterPageScale"] = 100;

$tdatatr_root_audit_log_audit[".nPrinterSplitRecords"] = 40;

$tdatatr_root_audit_log_audit[".geocodingEnabled"] = false;





$tdatatr_root_audit_log_audit[".isResizeColumns"] = true;





$tdatatr_root_audit_log_audit[".pageSize"] = 20;

$tdatatr_root_audit_log_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_root_audit_log_audit[".strOrderBy"] = $tstrOrderBy;

$tdatatr_root_audit_log_audit[".orderindexes"] = array();


$tdatatr_root_audit_log_audit[".sqlHead"] = "SELECT id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$tdatatr_root_audit_log_audit[".sqlFrom"] = "FROM tr_root_audit_log_audit";
$tdatatr_root_audit_log_audit[".sqlWhereExpr"] = "";
$tdatatr_root_audit_log_audit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_root_audit_log_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_root_audit_log_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_root_audit_log_audit[".highlightSearchResults"] = true;

$tableKeystr_root_audit_log_audit = array();
$tableKeystr_root_audit_log_audit[] = "id";
$tdatatr_root_audit_log_audit[".Keys"] = $tableKeystr_root_audit_log_audit;


$tdatatr_root_audit_log_audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tr_root_audit_log_audit";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_log_audit","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatatr_root_audit_log_audit["id"] = $fdata;
		$tdatatr_root_audit_log_audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "tr_root_audit_log_audit";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_log_audit","datetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "datetime";

		$fdata["sourceSingle"] = "datetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`datetime`";

	
	
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


	$tdatatr_root_audit_log_audit["datetime"] = $fdata;
		$tdatatr_root_audit_log_audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "tr_root_audit_log_audit";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_log_audit","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

		$fdata["sourceSingle"] = "ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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


	$tdatatr_root_audit_log_audit["ip"] = $fdata;
		$tdatatr_root_audit_log_audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "tr_root_audit_log_audit";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_log_audit","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

		$fdata["sourceSingle"] = "user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatatr_root_audit_log_audit["user"] = $fdata;
		$tdatatr_root_audit_log_audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "tr_root_audit_log_audit";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_log_audit","table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "table";

		$fdata["sourceSingle"] = "table";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`table`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatatr_root_audit_log_audit["table"] = $fdata;
		$tdatatr_root_audit_log_audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "tr_root_audit_log_audit";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_log_audit","action");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "action";

		$fdata["sourceSingle"] = "action";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`action`";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatatr_root_audit_log_audit["action"] = $fdata;
		$tdatatr_root_audit_log_audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "tr_root_audit_log_audit";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_log_audit","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatatr_root_audit_log_audit["description"] = $fdata;
		$tdatatr_root_audit_log_audit[".searchableFields"][] = "description";


$tables_data["tr_root_audit_log_audit"]=&$tdatatr_root_audit_log_audit;
$field_labels["tr_root_audit_log_audit"] = &$fieldLabelstr_root_audit_log_audit;
$fieldToolTips["tr_root_audit_log_audit"] = &$fieldToolTipstr_root_audit_log_audit;
$placeHolders["tr_root_audit_log_audit"] = &$placeHolderstr_root_audit_log_audit;
$page_titles["tr_root_audit_log_audit"] = &$pageTitlestr_root_audit_log_audit;


changeTextControlsToDate( "tr_root_audit_log_audit" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_root_audit_log_audit"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_root_audit_log_audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_root_audit_log_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`datetime`,  	ip,  	`user`,  	`table`,  	`action`,  	description";
$proto0["m_strFrom"] = "FROM tr_root_audit_log_audit";
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
	"m_strName" => "id",
	"m_strTable" => "tr_root_audit_log_audit",
	"m_srcTableName" => "tr_root_audit_log_audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tr_root_audit_log_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "tr_root_audit_log_audit",
	"m_srcTableName" => "tr_root_audit_log_audit"
));

$proto8["m_sql"] = "`datetime`";
$proto8["m_srcTableName"] = "tr_root_audit_log_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "tr_root_audit_log_audit",
	"m_srcTableName" => "tr_root_audit_log_audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "tr_root_audit_log_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "tr_root_audit_log_audit",
	"m_srcTableName" => "tr_root_audit_log_audit"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "tr_root_audit_log_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "tr_root_audit_log_audit",
	"m_srcTableName" => "tr_root_audit_log_audit"
));

$proto14["m_sql"] = "`table`";
$proto14["m_srcTableName"] = "tr_root_audit_log_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "tr_root_audit_log_audit",
	"m_srcTableName" => "tr_root_audit_log_audit"
));

$proto16["m_sql"] = "`action`";
$proto16["m_srcTableName"] = "tr_root_audit_log_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "tr_root_audit_log_audit",
	"m_srcTableName" => "tr_root_audit_log_audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "tr_root_audit_log_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tr_root_audit_log_audit";
$proto21["m_srcTableName"] = "tr_root_audit_log_audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tr_root_audit_log_audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tr_root_audit_log_audit";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_root_audit_log_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_root_audit_log_audit = createSqlQuery_tr_root_audit_log_audit();


	
		;

							

$tdatatr_root_audit_log_audit[".sqlquery"] = $queryData_tr_root_audit_log_audit;



$tdatatr_root_audit_log_audit[".hasEvents"] = false;

?>