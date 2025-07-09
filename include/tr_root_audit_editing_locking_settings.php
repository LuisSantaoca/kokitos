<?php
$tdatatr_root_audit_editing_locking = array();
$tdatatr_root_audit_editing_locking[".searchableFields"] = array();
$tdatatr_root_audit_editing_locking[".ShortName"] = "tr_root_audit_editing_locking";
$tdatatr_root_audit_editing_locking[".OwnerID"] = "";
$tdatatr_root_audit_editing_locking[".OriginalTable"] = "tr_root_audit_editing_locking";


$tdatatr_root_audit_editing_locking[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatr_root_audit_editing_locking[".originalPagesByType"] = $tdatatr_root_audit_editing_locking[".pagesByType"];
$tdatatr_root_audit_editing_locking[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatr_root_audit_editing_locking[".originalPages"] = $tdatatr_root_audit_editing_locking[".pages"];
$tdatatr_root_audit_editing_locking[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatr_root_audit_editing_locking[".originalDefaultPages"] = $tdatatr_root_audit_editing_locking[".defaultPages"];

//	field labels
$fieldLabelstr_root_audit_editing_locking = array();
$fieldToolTipstr_root_audit_editing_locking = array();
$pageTitlestr_root_audit_editing_locking = array();
$placeHolderstr_root_audit_editing_locking = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_root_audit_editing_locking["Spanish"] = array();
	$fieldToolTipstr_root_audit_editing_locking["Spanish"] = array();
	$placeHolderstr_root_audit_editing_locking["Spanish"] = array();
	$pageTitlestr_root_audit_editing_locking["Spanish"] = array();
	$fieldLabelstr_root_audit_editing_locking["Spanish"]["id"] = "Id";
	$fieldToolTipstr_root_audit_editing_locking["Spanish"]["id"] = "";
	$placeHolderstr_root_audit_editing_locking["Spanish"]["id"] = "";
	$fieldLabelstr_root_audit_editing_locking["Spanish"]["table"] = "Table";
	$fieldToolTipstr_root_audit_editing_locking["Spanish"]["table"] = "";
	$placeHolderstr_root_audit_editing_locking["Spanish"]["table"] = "";
	$fieldLabelstr_root_audit_editing_locking["Spanish"]["startdatetime"] = "Startdatetime";
	$fieldToolTipstr_root_audit_editing_locking["Spanish"]["startdatetime"] = "";
	$placeHolderstr_root_audit_editing_locking["Spanish"]["startdatetime"] = "";
	$fieldLabelstr_root_audit_editing_locking["Spanish"]["confirmdatetime"] = "Confirmdatetime";
	$fieldToolTipstr_root_audit_editing_locking["Spanish"]["confirmdatetime"] = "";
	$placeHolderstr_root_audit_editing_locking["Spanish"]["confirmdatetime"] = "";
	$fieldLabelstr_root_audit_editing_locking["Spanish"]["keys"] = "Keys";
	$fieldToolTipstr_root_audit_editing_locking["Spanish"]["keys"] = "";
	$placeHolderstr_root_audit_editing_locking["Spanish"]["keys"] = "";
	$fieldLabelstr_root_audit_editing_locking["Spanish"]["sessionid"] = "Sessionid";
	$fieldToolTipstr_root_audit_editing_locking["Spanish"]["sessionid"] = "";
	$placeHolderstr_root_audit_editing_locking["Spanish"]["sessionid"] = "";
	$fieldLabelstr_root_audit_editing_locking["Spanish"]["userid"] = "Userid";
	$fieldToolTipstr_root_audit_editing_locking["Spanish"]["userid"] = "";
	$placeHolderstr_root_audit_editing_locking["Spanish"]["userid"] = "";
	$fieldLabelstr_root_audit_editing_locking["Spanish"]["action"] = "Action";
	$fieldToolTipstr_root_audit_editing_locking["Spanish"]["action"] = "";
	$placeHolderstr_root_audit_editing_locking["Spanish"]["action"] = "";
	$fieldLabelstr_root_audit_editing_locking["Spanish"]["datatime"] = "Datatime";
	$fieldToolTipstr_root_audit_editing_locking["Spanish"]["datatime"] = "";
	$placeHolderstr_root_audit_editing_locking["Spanish"]["datatime"] = "";
	if (count($fieldToolTipstr_root_audit_editing_locking["Spanish"]))
		$tdatatr_root_audit_editing_locking[".isUseToolTips"] = true;
}





$tdatatr_root_audit_editing_locking[".shortTableName"] = "tr_root_audit_editing_locking";
$tdatatr_root_audit_editing_locking[".nSecOptions"] = 0;

$tdatatr_root_audit_editing_locking[".mainTableOwnerID"] = "";
$tdatatr_root_audit_editing_locking[".entityType"] = 0;
$tdatatr_root_audit_editing_locking[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_root_audit_editing_locking[".strOriginalTableName"] = "tr_root_audit_editing_locking";

	



$tdatatr_root_audit_editing_locking[".showAddInPopup"] = false;

$tdatatr_root_audit_editing_locking[".showEditInPopup"] = false;

$tdatatr_root_audit_editing_locking[".showViewInPopup"] = false;

$tdatatr_root_audit_editing_locking[".listAjax"] = false;
//	temporary
//$tdatatr_root_audit_editing_locking[".listAjax"] = false;

	$tdatatr_root_audit_editing_locking[".audit"] = false;

	$tdatatr_root_audit_editing_locking[".locking"] = false;


$pages = $tdatatr_root_audit_editing_locking[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_root_audit_editing_locking[".edit"] = true;
	$tdatatr_root_audit_editing_locking[".afterEditAction"] = 1;
	$tdatatr_root_audit_editing_locking[".closePopupAfterEdit"] = 1;
	$tdatatr_root_audit_editing_locking[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_root_audit_editing_locking[".add"] = true;
$tdatatr_root_audit_editing_locking[".afterAddAction"] = 1;
$tdatatr_root_audit_editing_locking[".closePopupAfterAdd"] = 1;
$tdatatr_root_audit_editing_locking[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_root_audit_editing_locking[".list"] = true;
}



$tdatatr_root_audit_editing_locking[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_root_audit_editing_locking[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_root_audit_editing_locking[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_root_audit_editing_locking[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_root_audit_editing_locking[".printFriendly"] = true;
}



$tdatatr_root_audit_editing_locking[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_root_audit_editing_locking[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_root_audit_editing_locking[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_root_audit_editing_locking[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_root_audit_editing_locking[".ajaxCodeSnippetAdded"] = false;

$tdatatr_root_audit_editing_locking[".buttonsAdded"] = false;

$tdatatr_root_audit_editing_locking[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_root_audit_editing_locking[".isUseTimeForSearch"] = false;


$tdatatr_root_audit_editing_locking[".badgeColor"] = "DB7093";


$tdatatr_root_audit_editing_locking[".allSearchFields"] = array();
$tdatatr_root_audit_editing_locking[".filterFields"] = array();
$tdatatr_root_audit_editing_locking[".requiredSearchFields"] = array();

$tdatatr_root_audit_editing_locking[".googleLikeFields"] = array();
$tdatatr_root_audit_editing_locking[".googleLikeFields"][] = "id";
$tdatatr_root_audit_editing_locking[".googleLikeFields"][] = "table";
$tdatatr_root_audit_editing_locking[".googleLikeFields"][] = "startdatetime";
$tdatatr_root_audit_editing_locking[".googleLikeFields"][] = "confirmdatetime";
$tdatatr_root_audit_editing_locking[".googleLikeFields"][] = "keys";
$tdatatr_root_audit_editing_locking[".googleLikeFields"][] = "sessionid";
$tdatatr_root_audit_editing_locking[".googleLikeFields"][] = "userid";
$tdatatr_root_audit_editing_locking[".googleLikeFields"][] = "action";
$tdatatr_root_audit_editing_locking[".googleLikeFields"][] = "datatime";



$tdatatr_root_audit_editing_locking[".tableType"] = "list";

$tdatatr_root_audit_editing_locking[".printerPageOrientation"] = 0;
$tdatatr_root_audit_editing_locking[".nPrinterPageScale"] = 100;

$tdatatr_root_audit_editing_locking[".nPrinterSplitRecords"] = 40;

$tdatatr_root_audit_editing_locking[".geocodingEnabled"] = false;





$tdatatr_root_audit_editing_locking[".isResizeColumns"] = true;





$tdatatr_root_audit_editing_locking[".pageSize"] = 20;

$tdatatr_root_audit_editing_locking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_root_audit_editing_locking[".strOrderBy"] = $tstrOrderBy;

$tdatatr_root_audit_editing_locking[".orderindexes"] = array();


$tdatatr_root_audit_editing_locking[".sqlHead"] = "SELECT id,  	`table`,  	startdatetime,  	confirmdatetime,  	`keys`,  	sessionid,  	userid,  	`action`,  	datatime";
$tdatatr_root_audit_editing_locking[".sqlFrom"] = "FROM tr_root_audit_editing_locking";
$tdatatr_root_audit_editing_locking[".sqlWhereExpr"] = "";
$tdatatr_root_audit_editing_locking[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_root_audit_editing_locking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_root_audit_editing_locking[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_root_audit_editing_locking[".highlightSearchResults"] = true;

$tableKeystr_root_audit_editing_locking = array();
$tableKeystr_root_audit_editing_locking[] = "id";
$tdatatr_root_audit_editing_locking[".Keys"] = $tableKeystr_root_audit_editing_locking;


$tdatatr_root_audit_editing_locking[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tr_root_audit_editing_locking";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_editing_locking","id");
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


	$tdatatr_root_audit_editing_locking["id"] = $fdata;
		$tdatatr_root_audit_editing_locking[".searchableFields"][] = "id";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "tr_root_audit_editing_locking";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_editing_locking","table");
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


	$tdatatr_root_audit_editing_locking["table"] = $fdata;
		$tdatatr_root_audit_editing_locking[".searchableFields"][] = "table";
//	startdatetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "startdatetime";
	$fdata["GoodName"] = "startdatetime";
	$fdata["ownerTable"] = "tr_root_audit_editing_locking";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_editing_locking","startdatetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "startdatetime";

		$fdata["sourceSingle"] = "startdatetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "startdatetime";

	
	
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


	$tdatatr_root_audit_editing_locking["startdatetime"] = $fdata;
		$tdatatr_root_audit_editing_locking[".searchableFields"][] = "startdatetime";
//	confirmdatetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "confirmdatetime";
	$fdata["GoodName"] = "confirmdatetime";
	$fdata["ownerTable"] = "tr_root_audit_editing_locking";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_editing_locking","confirmdatetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "confirmdatetime";

		$fdata["sourceSingle"] = "confirmdatetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "confirmdatetime";

	
	
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


	$tdatatr_root_audit_editing_locking["confirmdatetime"] = $fdata;
		$tdatatr_root_audit_editing_locking[".searchableFields"][] = "confirmdatetime";
//	keys
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keys";
	$fdata["GoodName"] = "keys";
	$fdata["ownerTable"] = "tr_root_audit_editing_locking";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_editing_locking","keys");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "keys";

		$fdata["sourceSingle"] = "keys";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`keys`";

	
	
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


	$tdatatr_root_audit_editing_locking["keys"] = $fdata;
		$tdatatr_root_audit_editing_locking[".searchableFields"][] = "keys";
//	sessionid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sessionid";
	$fdata["GoodName"] = "sessionid";
	$fdata["ownerTable"] = "tr_root_audit_editing_locking";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_editing_locking","sessionid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sessionid";

		$fdata["sourceSingle"] = "sessionid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sessionid";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatr_root_audit_editing_locking["sessionid"] = $fdata;
		$tdatatr_root_audit_editing_locking[".searchableFields"][] = "sessionid";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "tr_root_audit_editing_locking";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_editing_locking","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

		$fdata["sourceSingle"] = "userid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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


	$tdatatr_root_audit_editing_locking["userid"] = $fdata;
		$tdatatr_root_audit_editing_locking[".searchableFields"][] = "userid";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "tr_root_audit_editing_locking";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_editing_locking","action");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatatr_root_audit_editing_locking["action"] = $fdata;
		$tdatatr_root_audit_editing_locking[".searchableFields"][] = "action";
//	datatime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "datatime";
	$fdata["GoodName"] = "datatime";
	$fdata["ownerTable"] = "tr_root_audit_editing_locking";
	$fdata["Label"] = GetFieldLabel("tr_root_audit_editing_locking","datatime");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "datatime";

		$fdata["sourceSingle"] = "datatime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datatime";

	
	
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


	$tdatatr_root_audit_editing_locking["datatime"] = $fdata;
		$tdatatr_root_audit_editing_locking[".searchableFields"][] = "datatime";


$tables_data["tr_root_audit_editing_locking"]=&$tdatatr_root_audit_editing_locking;
$field_labels["tr_root_audit_editing_locking"] = &$fieldLabelstr_root_audit_editing_locking;
$fieldToolTips["tr_root_audit_editing_locking"] = &$fieldToolTipstr_root_audit_editing_locking;
$placeHolders["tr_root_audit_editing_locking"] = &$placeHolderstr_root_audit_editing_locking;
$page_titles["tr_root_audit_editing_locking"] = &$pageTitlestr_root_audit_editing_locking;


changeTextControlsToDate( "tr_root_audit_editing_locking" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_root_audit_editing_locking"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_root_audit_editing_locking"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_root_audit_editing_locking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`table`,  	startdatetime,  	confirmdatetime,  	`keys`,  	sessionid,  	userid,  	`action`,  	datatime";
$proto0["m_strFrom"] = "FROM tr_root_audit_editing_locking";
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
	"m_strTable" => "tr_root_audit_editing_locking",
	"m_srcTableName" => "tr_root_audit_editing_locking"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "tr_root_audit_editing_locking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "tr_root_audit_editing_locking",
	"m_srcTableName" => "tr_root_audit_editing_locking"
));

$proto8["m_sql"] = "`table`";
$proto8["m_srcTableName"] = "tr_root_audit_editing_locking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "startdatetime",
	"m_strTable" => "tr_root_audit_editing_locking",
	"m_srcTableName" => "tr_root_audit_editing_locking"
));

$proto10["m_sql"] = "startdatetime";
$proto10["m_srcTableName"] = "tr_root_audit_editing_locking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "confirmdatetime",
	"m_strTable" => "tr_root_audit_editing_locking",
	"m_srcTableName" => "tr_root_audit_editing_locking"
));

$proto12["m_sql"] = "confirmdatetime";
$proto12["m_srcTableName"] = "tr_root_audit_editing_locking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keys",
	"m_strTable" => "tr_root_audit_editing_locking",
	"m_srcTableName" => "tr_root_audit_editing_locking"
));

$proto14["m_sql"] = "`keys`";
$proto14["m_srcTableName"] = "tr_root_audit_editing_locking";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sessionid",
	"m_strTable" => "tr_root_audit_editing_locking",
	"m_srcTableName" => "tr_root_audit_editing_locking"
));

$proto16["m_sql"] = "sessionid";
$proto16["m_srcTableName"] = "tr_root_audit_editing_locking";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "tr_root_audit_editing_locking",
	"m_srcTableName" => "tr_root_audit_editing_locking"
));

$proto18["m_sql"] = "userid";
$proto18["m_srcTableName"] = "tr_root_audit_editing_locking";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "tr_root_audit_editing_locking",
	"m_srcTableName" => "tr_root_audit_editing_locking"
));

$proto20["m_sql"] = "`action`";
$proto20["m_srcTableName"] = "tr_root_audit_editing_locking";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "datatime",
	"m_strTable" => "tr_root_audit_editing_locking",
	"m_srcTableName" => "tr_root_audit_editing_locking"
));

$proto22["m_sql"] = "datatime";
$proto22["m_srcTableName"] = "tr_root_audit_editing_locking";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tr_root_audit_editing_locking";
$proto25["m_srcTableName"] = "tr_root_audit_editing_locking";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "table";
$proto25["m_columns"][] = "startdatetime";
$proto25["m_columns"][] = "confirmdatetime";
$proto25["m_columns"][] = "keys";
$proto25["m_columns"][] = "sessionid";
$proto25["m_columns"][] = "userid";
$proto25["m_columns"][] = "action";
$proto25["m_columns"][] = "datatime";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tr_root_audit_editing_locking";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tr_root_audit_editing_locking";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_root_audit_editing_locking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_root_audit_editing_locking = createSqlQuery_tr_root_audit_editing_locking();


	
		;

									

$tdatatr_root_audit_editing_locking[".sqlquery"] = $queryData_tr_root_audit_editing_locking;



$tdatatr_root_audit_editing_locking[".hasEvents"] = false;

?>