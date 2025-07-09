<?php
$tdatacat_trabajadores_documentos_link = array();
$tdatacat_trabajadores_documentos_link[".searchableFields"] = array();
$tdatacat_trabajadores_documentos_link[".ShortName"] = "cat_trabajadores_documentos_link";
$tdatacat_trabajadores_documentos_link[".OwnerID"] = "";
$tdatacat_trabajadores_documentos_link[".OriginalTable"] = "cat_trabajadores_documentos_link";


$tdatacat_trabajadores_documentos_link[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacat_trabajadores_documentos_link[".originalPagesByType"] = $tdatacat_trabajadores_documentos_link[".pagesByType"];
$tdatacat_trabajadores_documentos_link[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacat_trabajadores_documentos_link[".originalPages"] = $tdatacat_trabajadores_documentos_link[".pages"];
$tdatacat_trabajadores_documentos_link[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacat_trabajadores_documentos_link[".originalDefaultPages"] = $tdatacat_trabajadores_documentos_link[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_documentos_link = array();
$fieldToolTipscat_trabajadores_documentos_link = array();
$pageTitlescat_trabajadores_documentos_link = array();
$placeHolderscat_trabajadores_documentos_link = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_documentos_link["Spanish"] = array();
	$fieldToolTipscat_trabajadores_documentos_link["Spanish"] = array();
	$placeHolderscat_trabajadores_documentos_link["Spanish"] = array();
	$pageTitlescat_trabajadores_documentos_link["Spanish"] = array();
	$fieldLabelscat_trabajadores_documentos_link["Spanish"]["cat_documentos_link_id"] = "Cat Documentos Link Id";
	$fieldToolTipscat_trabajadores_documentos_link["Spanish"]["cat_documentos_link_id"] = "";
	$placeHolderscat_trabajadores_documentos_link["Spanish"]["cat_documentos_link_id"] = "";
	$fieldLabelscat_trabajadores_documentos_link["Spanish"]["cat_trabajadores_documentos_id"] = "Cat Trabajadores Documentos Id";
	$fieldToolTipscat_trabajadores_documentos_link["Spanish"]["cat_trabajadores_documentos_id"] = "";
	$placeHolderscat_trabajadores_documentos_link["Spanish"]["cat_trabajadores_documentos_id"] = "";
	$fieldLabelscat_trabajadores_documentos_link["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_trabajadores_documentos_link["Spanish"]["time_stamp"] = "";
	$placeHolderscat_trabajadores_documentos_link["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_trabajadores_documentos_link["Spanish"]["link_documentos"] = "Link Documentos";
	$fieldToolTipscat_trabajadores_documentos_link["Spanish"]["link_documentos"] = "";
	$placeHolderscat_trabajadores_documentos_link["Spanish"]["link_documentos"] = "";
	if (count($fieldToolTipscat_trabajadores_documentos_link["Spanish"]))
		$tdatacat_trabajadores_documentos_link[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_documentos_link[".shortTableName"] = "cat_trabajadores_documentos_link";
$tdatacat_trabajadores_documentos_link[".nSecOptions"] = 0;

$tdatacat_trabajadores_documentos_link[".mainTableOwnerID"] = "";
$tdatacat_trabajadores_documentos_link[".entityType"] = 0;
$tdatacat_trabajadores_documentos_link[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_documentos_link[".strOriginalTableName"] = "cat_trabajadores_documentos_link";

	



$tdatacat_trabajadores_documentos_link[".showAddInPopup"] = false;

$tdatacat_trabajadores_documentos_link[".showEditInPopup"] = false;

$tdatacat_trabajadores_documentos_link[".showViewInPopup"] = false;

$tdatacat_trabajadores_documentos_link[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_documentos_link[".listAjax"] = false;

	$tdatacat_trabajadores_documentos_link[".audit"] = true;

	$tdatacat_trabajadores_documentos_link[".locking"] = true;


$pages = $tdatacat_trabajadores_documentos_link[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_documentos_link[".edit"] = true;
	$tdatacat_trabajadores_documentos_link[".afterEditAction"] = 1;
	$tdatacat_trabajadores_documentos_link[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_documentos_link[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_documentos_link[".add"] = true;
$tdatacat_trabajadores_documentos_link[".afterAddAction"] = 1;
$tdatacat_trabajadores_documentos_link[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_documentos_link[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_documentos_link[".list"] = true;
}



$tdatacat_trabajadores_documentos_link[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_documentos_link[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_documentos_link[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_documentos_link[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_documentos_link[".printFriendly"] = true;
}



$tdatacat_trabajadores_documentos_link[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_documentos_link[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_documentos_link[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_documentos_link[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_documentos_link[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_documentos_link[".buttonsAdded"] = false;

$tdatacat_trabajadores_documentos_link[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_documentos_link[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_documentos_link[".badgeColor"] = "D2691E";


$tdatacat_trabajadores_documentos_link[".allSearchFields"] = array();
$tdatacat_trabajadores_documentos_link[".filterFields"] = array();
$tdatacat_trabajadores_documentos_link[".requiredSearchFields"] = array();

$tdatacat_trabajadores_documentos_link[".googleLikeFields"] = array();
$tdatacat_trabajadores_documentos_link[".googleLikeFields"][] = "cat_documentos_link_id";
$tdatacat_trabajadores_documentos_link[".googleLikeFields"][] = "cat_trabajadores_documentos_id";
$tdatacat_trabajadores_documentos_link[".googleLikeFields"][] = "time_stamp";
$tdatacat_trabajadores_documentos_link[".googleLikeFields"][] = "link_documentos";



$tdatacat_trabajadores_documentos_link[".tableType"] = "list";

$tdatacat_trabajadores_documentos_link[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_documentos_link[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_documentos_link[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_documentos_link[".geocodingEnabled"] = false;





$tdatacat_trabajadores_documentos_link[".isResizeColumns"] = true;





$tdatacat_trabajadores_documentos_link[".pageSize"] = 20;

$tdatacat_trabajadores_documentos_link[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_documentos_link[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_documentos_link[".orderindexes"] = array();


$tdatacat_trabajadores_documentos_link[".sqlHead"] = "SELECT cat_documentos_link_id,  	cat_trabajadores_documentos_id,  	time_stamp,  	link_documentos";
$tdatacat_trabajadores_documentos_link[".sqlFrom"] = "FROM cat_trabajadores_documentos_link";
$tdatacat_trabajadores_documentos_link[".sqlWhereExpr"] = "";
$tdatacat_trabajadores_documentos_link[".sqlTail"] = "";

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
$tdatacat_trabajadores_documentos_link[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_documentos_link[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_documentos_link[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_documentos_link[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_documentos_link = array();
$tableKeyscat_trabajadores_documentos_link[] = "cat_documentos_link_id";
$tdatacat_trabajadores_documentos_link[".Keys"] = $tableKeyscat_trabajadores_documentos_link;


$tdatacat_trabajadores_documentos_link[".hideMobileList"] = array();




//	cat_documentos_link_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_documentos_link_id";
	$fdata["GoodName"] = "cat_documentos_link_id";
	$fdata["ownerTable"] = "cat_trabajadores_documentos_link";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos_link","cat_documentos_link_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_documentos_link_id";

		$fdata["sourceSingle"] = "cat_documentos_link_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_documentos_link_id";

	
	
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


	$tdatacat_trabajadores_documentos_link["cat_documentos_link_id"] = $fdata;
		$tdatacat_trabajadores_documentos_link[".searchableFields"][] = "cat_documentos_link_id";
//	cat_trabajadores_documentos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_trabajadores_documentos_id";
	$fdata["GoodName"] = "cat_trabajadores_documentos_id";
	$fdata["ownerTable"] = "cat_trabajadores_documentos_link";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos_link","cat_trabajadores_documentos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_documentos_id";

		$fdata["sourceSingle"] = "cat_trabajadores_documentos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos_id";

	
	
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


	$tdatacat_trabajadores_documentos_link["cat_trabajadores_documentos_id"] = $fdata;
		$tdatacat_trabajadores_documentos_link[".searchableFields"][] = "cat_trabajadores_documentos_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_trabajadores_documentos_link";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos_link","time_stamp");
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


	$tdatacat_trabajadores_documentos_link["time_stamp"] = $fdata;
		$tdatacat_trabajadores_documentos_link[".searchableFields"][] = "time_stamp";
//	link_documentos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "link_documentos";
	$fdata["GoodName"] = "link_documentos";
	$fdata["ownerTable"] = "cat_trabajadores_documentos_link";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos_link","link_documentos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "link_documentos";

		$fdata["sourceSingle"] = "link_documentos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_documentos";

	
	
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


	$tdatacat_trabajadores_documentos_link["link_documentos"] = $fdata;
		$tdatacat_trabajadores_documentos_link[".searchableFields"][] = "link_documentos";


$tables_data["cat_trabajadores_documentos_link"]=&$tdatacat_trabajadores_documentos_link;
$field_labels["cat_trabajadores_documentos_link"] = &$fieldLabelscat_trabajadores_documentos_link;
$fieldToolTips["cat_trabajadores_documentos_link"] = &$fieldToolTipscat_trabajadores_documentos_link;
$placeHolders["cat_trabajadores_documentos_link"] = &$placeHolderscat_trabajadores_documentos_link;
$page_titles["cat_trabajadores_documentos_link"] = &$pageTitlescat_trabajadores_documentos_link;


changeTextControlsToDate( "cat_trabajadores_documentos_link" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_documentos_link"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_documentos_link"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_documentos_link()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_documentos_link_id,  	cat_trabajadores_documentos_id,  	time_stamp,  	link_documentos";
$proto0["m_strFrom"] = "FROM cat_trabajadores_documentos_link";
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
	"m_strName" => "cat_documentos_link_id",
	"m_strTable" => "cat_trabajadores_documentos_link",
	"m_srcTableName" => "cat_trabajadores_documentos_link"
));

$proto6["m_sql"] = "cat_documentos_link_id";
$proto6["m_srcTableName"] = "cat_trabajadores_documentos_link";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_documentos_id",
	"m_strTable" => "cat_trabajadores_documentos_link",
	"m_srcTableName" => "cat_trabajadores_documentos_link"
));

$proto8["m_sql"] = "cat_trabajadores_documentos_id";
$proto8["m_srcTableName"] = "cat_trabajadores_documentos_link";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_documentos_link",
	"m_srcTableName" => "cat_trabajadores_documentos_link"
));

$proto10["m_sql"] = "time_stamp";
$proto10["m_srcTableName"] = "cat_trabajadores_documentos_link";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "link_documentos",
	"m_strTable" => "cat_trabajadores_documentos_link",
	"m_srcTableName" => "cat_trabajadores_documentos_link"
));

$proto12["m_sql"] = "link_documentos";
$proto12["m_srcTableName"] = "cat_trabajadores_documentos_link";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "cat_trabajadores_documentos_link";
$proto15["m_srcTableName"] = "cat_trabajadores_documentos_link";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "cat_documentos_link_id";
$proto15["m_columns"][] = "cat_trabajadores_documentos_id";
$proto15["m_columns"][] = "time_stamp";
$proto15["m_columns"][] = "link_documentos";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "cat_trabajadores_documentos_link";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "cat_trabajadores_documentos_link";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_documentos_link";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_documentos_link = createSqlQuery_cat_trabajadores_documentos_link();


	
		;

				

$tdatacat_trabajadores_documentos_link[".sqlquery"] = $queryData_cat_trabajadores_documentos_link;



$tdatacat_trabajadores_documentos_link[".hasEvents"] = false;

?>