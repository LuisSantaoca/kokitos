<?php
$tdatacat_nominas_conceptos1 = array();
$tdatacat_nominas_conceptos1[".searchableFields"] = array();
$tdatacat_nominas_conceptos1[".ShortName"] = "cat_nominas_conceptos1";
$tdatacat_nominas_conceptos1[".OwnerID"] = "";
$tdatacat_nominas_conceptos1[".OriginalTable"] = "cat_nominas_conceptos";


$tdatacat_nominas_conceptos1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_conceptos1[".originalPagesByType"] = $tdatacat_nominas_conceptos1[".pagesByType"];
$tdatacat_nominas_conceptos1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_conceptos1[".originalPages"] = $tdatacat_nominas_conceptos1[".pages"];
$tdatacat_nominas_conceptos1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_nominas_conceptos1[".originalDefaultPages"] = $tdatacat_nominas_conceptos1[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_conceptos1 = array();
$fieldToolTipscat_nominas_conceptos1 = array();
$pageTitlescat_nominas_conceptos1 = array();
$placeHolderscat_nominas_conceptos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_conceptos1["Spanish"] = array();
	$fieldToolTipscat_nominas_conceptos1["Spanish"] = array();
	$placeHolderscat_nominas_conceptos1["Spanish"] = array();
	$pageTitlescat_nominas_conceptos1["Spanish"] = array();
	$fieldLabelscat_nominas_conceptos1["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_conceptos1["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_conceptos1["Spanish"]["vigente"] = "";
	$fieldLabelscat_nominas_conceptos1["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_conceptos1["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_conceptos1["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_conceptos1["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_conceptos1["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_conceptos1["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_nominas_conceptos1["Spanish"]["descripcion_nominas_conceptos"] = "Conceptos";
	$fieldToolTipscat_nominas_conceptos1["Spanish"]["descripcion_nominas_conceptos"] = "";
	$placeHolderscat_nominas_conceptos1["Spanish"]["descripcion_nominas_conceptos"] = "";
	$fieldLabelscat_nominas_conceptos1["Spanish"]["cat_nominas_conceptos_id"] = "Id";
	$fieldToolTipscat_nominas_conceptos1["Spanish"]["cat_nominas_conceptos_id"] = "";
	$placeHolderscat_nominas_conceptos1["Spanish"]["cat_nominas_conceptos_id"] = "";
	if (count($fieldToolTipscat_nominas_conceptos1["Spanish"]))
		$tdatacat_nominas_conceptos1[".isUseToolTips"] = true;
}





$tdatacat_nominas_conceptos1[".shortTableName"] = "cat_nominas_conceptos1";
$tdatacat_nominas_conceptos1[".nSecOptions"] = 0;

$tdatacat_nominas_conceptos1[".mainTableOwnerID"] = "";
$tdatacat_nominas_conceptos1[".entityType"] = 0;
$tdatacat_nominas_conceptos1[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_conceptos1[".strOriginalTableName"] = "cat_nominas_conceptos";

	



$tdatacat_nominas_conceptos1[".showAddInPopup"] = false;

$tdatacat_nominas_conceptos1[".showEditInPopup"] = false;

$tdatacat_nominas_conceptos1[".showViewInPopup"] = false;

$tdatacat_nominas_conceptos1[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_conceptos1[".listAjax"] = false;

	$tdatacat_nominas_conceptos1[".audit"] = false;

	$tdatacat_nominas_conceptos1[".locking"] = false;


$pages = $tdatacat_nominas_conceptos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_conceptos1[".edit"] = true;
	$tdatacat_nominas_conceptos1[".afterEditAction"] = 1;
	$tdatacat_nominas_conceptos1[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_conceptos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_conceptos1[".add"] = true;
$tdatacat_nominas_conceptos1[".afterAddAction"] = 1;
$tdatacat_nominas_conceptos1[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_conceptos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_conceptos1[".list"] = true;
}



$tdatacat_nominas_conceptos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_conceptos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_conceptos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_conceptos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_conceptos1[".printFriendly"] = true;
}



$tdatacat_nominas_conceptos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_conceptos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_conceptos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_conceptos1[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_conceptos1[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_conceptos1[".buttonsAdded"] = false;

$tdatacat_nominas_conceptos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_conceptos1[".isUseTimeForSearch"] = false;


$tdatacat_nominas_conceptos1[".badgeColor"] = "E8926F";


$tdatacat_nominas_conceptos1[".allSearchFields"] = array();
$tdatacat_nominas_conceptos1[".filterFields"] = array();
$tdatacat_nominas_conceptos1[".requiredSearchFields"] = array();

$tdatacat_nominas_conceptos1[".googleLikeFields"] = array();
$tdatacat_nominas_conceptos1[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_conceptos1[".googleLikeFields"][] = "descripcion_nominas_conceptos";
$tdatacat_nominas_conceptos1[".googleLikeFields"][] = "cat_nominas_conceptos_id";
$tdatacat_nominas_conceptos1[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_conceptos1[".googleLikeFields"][] = "time_stamp";



$tdatacat_nominas_conceptos1[".tableType"] = "list";

$tdatacat_nominas_conceptos1[".printerPageOrientation"] = 0;
$tdatacat_nominas_conceptos1[".nPrinterPageScale"] = 100;

$tdatacat_nominas_conceptos1[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_conceptos1[".geocodingEnabled"] = false;





$tdatacat_nominas_conceptos1[".isResizeColumns"] = true;





$tdatacat_nominas_conceptos1[".pageSize"] = 20;

$tdatacat_nominas_conceptos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_conceptos1[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_conceptos1[".orderindexes"] = array();


$tdatacat_nominas_conceptos1[".sqlHead"] = "SELECT vigente,  descripcion_nominas_conceptos,  cat_nominas_conceptos_id,  capturista,  time_stamp";
$tdatacat_nominas_conceptos1[".sqlFrom"] = "FROM cat_nominas_conceptos";
$tdatacat_nominas_conceptos1[".sqlWhereExpr"] = "";
$tdatacat_nominas_conceptos1[".sqlTail"] = "";

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
$tdatacat_nominas_conceptos1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_conceptos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_conceptos1[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_conceptos1[".highlightSearchResults"] = true;

$tableKeyscat_nominas_conceptos1 = array();
$tableKeyscat_nominas_conceptos1[] = "cat_nominas_conceptos_id";
$tdatacat_nominas_conceptos1[".Keys"] = $tableKeyscat_nominas_conceptos1;


$tdatacat_nominas_conceptos1[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatacat_nominas_conceptos1["vigente"] = $fdata;
		$tdatacat_nominas_conceptos1[".searchableFields"][] = "vigente";
//	descripcion_nominas_conceptos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_nominas_conceptos";
	$fdata["GoodName"] = "descripcion_nominas_conceptos";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos","descripcion_nominas_conceptos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_nominas_conceptos";

		$fdata["sourceSingle"] = "descripcion_nominas_conceptos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_nominas_conceptos";

	
	
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


	$tdatacat_nominas_conceptos1["descripcion_nominas_conceptos"] = $fdata;
		$tdatacat_nominas_conceptos1[".searchableFields"][] = "descripcion_nominas_conceptos";
//	cat_nominas_conceptos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_nominas_conceptos_id";
	$fdata["GoodName"] = "cat_nominas_conceptos_id";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos","cat_nominas_conceptos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_conceptos_id";

		$fdata["sourceSingle"] = "cat_nominas_conceptos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos_id";

	
	
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


	$tdatacat_nominas_conceptos1["cat_nominas_conceptos_id"] = $fdata;
		$tdatacat_nominas_conceptos1[".searchableFields"][] = "cat_nominas_conceptos_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos","capturista");
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


	$tdatacat_nominas_conceptos1["capturista"] = $fdata;
		$tdatacat_nominas_conceptos1[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos","time_stamp");
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


	$tdatacat_nominas_conceptos1["time_stamp"] = $fdata;
		$tdatacat_nominas_conceptos1[".searchableFields"][] = "time_stamp";


$tables_data["cat_nominas_conceptos"]=&$tdatacat_nominas_conceptos1;
$field_labels["cat_nominas_conceptos"] = &$fieldLabelscat_nominas_conceptos1;
$fieldToolTips["cat_nominas_conceptos"] = &$fieldToolTipscat_nominas_conceptos1;
$placeHolders["cat_nominas_conceptos"] = &$placeHolderscat_nominas_conceptos1;
$page_titles["cat_nominas_conceptos"] = &$pageTitlescat_nominas_conceptos1;


changeTextControlsToDate( "cat_nominas_conceptos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_conceptos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_conceptos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_conceptos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigente,  descripcion_nominas_conceptos,  cat_nominas_conceptos_id,  capturista,  time_stamp";
$proto0["m_strFrom"] = "FROM cat_nominas_conceptos";
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
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "cat_nominas_conceptos"
));

$proto6["m_sql"] = "vigente";
$proto6["m_srcTableName"] = "cat_nominas_conceptos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_nominas_conceptos",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "cat_nominas_conceptos"
));

$proto8["m_sql"] = "descripcion_nominas_conceptos";
$proto8["m_srcTableName"] = "cat_nominas_conceptos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_conceptos_id",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "cat_nominas_conceptos"
));

$proto10["m_sql"] = "cat_nominas_conceptos_id";
$proto10["m_srcTableName"] = "cat_nominas_conceptos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "cat_nominas_conceptos"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_nominas_conceptos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "cat_nominas_conceptos"
));

$proto14["m_sql"] = "time_stamp";
$proto14["m_srcTableName"] = "cat_nominas_conceptos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_nominas_conceptos";
$proto17["m_srcTableName"] = "cat_nominas_conceptos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "descripcion_nominas_conceptos";
$proto17["m_columns"][] = "cat_nominas_conceptos_clasificacion_mu_id";
$proto17["m_columns"][] = "cat_nominas_conceptos_id";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_nominas_conceptos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_nominas_conceptos";
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
$proto0["m_srcTableName"]="cat_nominas_conceptos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_conceptos1 = createSqlQuery_cat_nominas_conceptos1();


	
		;

					

$tdatacat_nominas_conceptos1[".sqlquery"] = $queryData_cat_nominas_conceptos1;



$tdatacat_nominas_conceptos1[".hasEvents"] = false;

?>