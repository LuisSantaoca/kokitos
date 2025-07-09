<?php
$tdatacat_holding_01 = array();
$tdatacat_holding_01[".searchableFields"] = array();
$tdatacat_holding_01[".ShortName"] = "cat_holding_01";
$tdatacat_holding_01[".OwnerID"] = "";
$tdatacat_holding_01[".OriginalTable"] = "cat_holding_01";


$tdatacat_holding_01[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_holding_01[".originalPagesByType"] = $tdatacat_holding_01[".pagesByType"];
$tdatacat_holding_01[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_holding_01[".originalPages"] = $tdatacat_holding_01[".pages"];
$tdatacat_holding_01[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_holding_01[".originalDefaultPages"] = $tdatacat_holding_01[".defaultPages"];

//	field labels
$fieldLabelscat_holding_01 = array();
$fieldToolTipscat_holding_01 = array();
$pageTitlescat_holding_01 = array();
$placeHolderscat_holding_01 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_holding_01["Spanish"] = array();
	$fieldToolTipscat_holding_01["Spanish"] = array();
	$placeHolderscat_holding_01["Spanish"] = array();
	$pageTitlescat_holding_01["Spanish"] = array();
	$fieldLabelscat_holding_01["Spanish"]["cat_holding_01_id"] = "id";
	$fieldToolTipscat_holding_01["Spanish"]["cat_holding_01_id"] = "";
	$placeHolderscat_holding_01["Spanish"]["cat_holding_01_id"] = "";
	$fieldLabelscat_holding_01["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_holding_01["Spanish"]["time_stamp"] = "";
	$placeHolderscat_holding_01["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_holding_01["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_holding_01["Spanish"]["vigente"] = "";
	$placeHolderscat_holding_01["Spanish"]["vigente"] = "";
	$fieldLabelscat_holding_01["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_holding_01["Spanish"]["capturista"] = "";
	$placeHolderscat_holding_01["Spanish"]["capturista"] = "";
	$fieldLabelscat_holding_01["Spanish"]["descripcion_holding"] = "Descripcion Holding";
	$fieldToolTipscat_holding_01["Spanish"]["descripcion_holding"] = "";
	$placeHolderscat_holding_01["Spanish"]["descripcion_holding"] = "";
	if (count($fieldToolTipscat_holding_01["Spanish"]))
		$tdatacat_holding_01[".isUseToolTips"] = true;
}





$tdatacat_holding_01[".shortTableName"] = "cat_holding_01";
$tdatacat_holding_01[".nSecOptions"] = 0;

$tdatacat_holding_01[".mainTableOwnerID"] = "";
$tdatacat_holding_01[".entityType"] = 0;
$tdatacat_holding_01[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_holding_01[".strOriginalTableName"] = "cat_holding_01";

	



$tdatacat_holding_01[".showAddInPopup"] = false;

$tdatacat_holding_01[".showEditInPopup"] = false;

$tdatacat_holding_01[".showViewInPopup"] = false;

$tdatacat_holding_01[".listAjax"] = false;
//	temporary
//$tdatacat_holding_01[".listAjax"] = false;

	$tdatacat_holding_01[".audit"] = true;

	$tdatacat_holding_01[".locking"] = true;


$pages = $tdatacat_holding_01[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_holding_01[".edit"] = true;
	$tdatacat_holding_01[".afterEditAction"] = 1;
	$tdatacat_holding_01[".closePopupAfterEdit"] = 1;
	$tdatacat_holding_01[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_holding_01[".add"] = true;
$tdatacat_holding_01[".afterAddAction"] = 1;
$tdatacat_holding_01[".closePopupAfterAdd"] = 1;
$tdatacat_holding_01[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_holding_01[".list"] = true;
}



$tdatacat_holding_01[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_holding_01[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_holding_01[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_holding_01[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_holding_01[".printFriendly"] = true;
}



$tdatacat_holding_01[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_holding_01[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_holding_01[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_holding_01[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_holding_01[".ajaxCodeSnippetAdded"] = false;

$tdatacat_holding_01[".buttonsAdded"] = false;

$tdatacat_holding_01[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_holding_01[".isUseTimeForSearch"] = false;


$tdatacat_holding_01[".badgeColor"] = "3CB371";


$tdatacat_holding_01[".allSearchFields"] = array();
$tdatacat_holding_01[".filterFields"] = array();
$tdatacat_holding_01[".requiredSearchFields"] = array();

$tdatacat_holding_01[".googleLikeFields"] = array();
$tdatacat_holding_01[".googleLikeFields"][] = "cat_holding_01_id";
$tdatacat_holding_01[".googleLikeFields"][] = "time_stamp";
$tdatacat_holding_01[".googleLikeFields"][] = "vigente";
$tdatacat_holding_01[".googleLikeFields"][] = "capturista";
$tdatacat_holding_01[".googleLikeFields"][] = "descripcion_holding";



$tdatacat_holding_01[".tableType"] = "list";

$tdatacat_holding_01[".printerPageOrientation"] = 0;
$tdatacat_holding_01[".nPrinterPageScale"] = 100;

$tdatacat_holding_01[".nPrinterSplitRecords"] = 40;

$tdatacat_holding_01[".geocodingEnabled"] = false;





$tdatacat_holding_01[".isResizeColumns"] = true;





$tdatacat_holding_01[".pageSize"] = 20;

$tdatacat_holding_01[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_holding_01[".strOrderBy"] = $tstrOrderBy;

$tdatacat_holding_01[".orderindexes"] = array();


$tdatacat_holding_01[".sqlHead"] = "SELECT cat_holding_01_id,  time_stamp,  vigente,  capturista,  descripcion_holding";
$tdatacat_holding_01[".sqlFrom"] = "FROM cat_holding_01";
$tdatacat_holding_01[".sqlWhereExpr"] = "(vigente =1)";
$tdatacat_holding_01[".sqlTail"] = "";

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
$tdatacat_holding_01[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_holding_01[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_holding_01[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_holding_01[".highlightSearchResults"] = true;

$tableKeyscat_holding_01 = array();
$tableKeyscat_holding_01[] = "cat_holding_01_id";
$tdatacat_holding_01[".Keys"] = $tableKeyscat_holding_01;


$tdatacat_holding_01[".hideMobileList"] = array();




//	cat_holding_01_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_holding_01_id";
	$fdata["GoodName"] = "cat_holding_01_id";
	$fdata["ownerTable"] = "cat_holding_01";
	$fdata["Label"] = GetFieldLabel("cat_holding_01","cat_holding_01_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_holding_01_id";

		$fdata["sourceSingle"] = "cat_holding_01_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_01_id";

	
	
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


	$tdatacat_holding_01["cat_holding_01_id"] = $fdata;
		$tdatacat_holding_01[".searchableFields"][] = "cat_holding_01_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_holding_01";
	$fdata["Label"] = GetFieldLabel("cat_holding_01","time_stamp");
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


	$tdatacat_holding_01["time_stamp"] = $fdata;
		$tdatacat_holding_01[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_holding_01";
	$fdata["Label"] = GetFieldLabel("cat_holding_01","vigente");
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


	$tdatacat_holding_01["vigente"] = $fdata;
		$tdatacat_holding_01[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_holding_01";
	$fdata["Label"] = GetFieldLabel("cat_holding_01","capturista");
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


	$tdatacat_holding_01["capturista"] = $fdata;
		$tdatacat_holding_01[".searchableFields"][] = "capturista";
//	descripcion_holding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_holding";
	$fdata["GoodName"] = "descripcion_holding";
	$fdata["ownerTable"] = "cat_holding_01";
	$fdata["Label"] = GetFieldLabel("cat_holding_01","descripcion_holding");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_holding";

		$fdata["sourceSingle"] = "descripcion_holding";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_holding";

	
	
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


	$tdatacat_holding_01["descripcion_holding"] = $fdata;
		$tdatacat_holding_01[".searchableFields"][] = "descripcion_holding";


$tables_data["cat_holding_01"]=&$tdatacat_holding_01;
$field_labels["cat_holding_01"] = &$fieldLabelscat_holding_01;
$fieldToolTips["cat_holding_01"] = &$fieldToolTipscat_holding_01;
$placeHolders["cat_holding_01"] = &$placeHolderscat_holding_01;
$page_titles["cat_holding_01"] = &$pageTitlescat_holding_01;


changeTextControlsToDate( "cat_holding_01" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_holding_01"] = array();
//	cat_holding_02_empresas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cat_holding_02_empresas";
		$detailsParam["dOriginalTable"] = "cat_holding_02_empresas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cat_holding_02_empresas";
	$detailsParam["dCaptionTable"] = GetTableCaption("cat_holding_02_empresas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cat_holding_01"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cat_holding_01"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cat_holding_01"][$dIndex]["masterKeys"][]="cat_holding_01_id";

				$detailsTablesData["cat_holding_01"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cat_holding_01"][$dIndex]["detailKeys"][]="cat_holding_01_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_holding_01"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_holding_01()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_holding_01_id,  time_stamp,  vigente,  capturista,  descripcion_holding";
$proto0["m_strFrom"] = "FROM cat_holding_01";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_holding_01",
	"m_srcTableName" => "cat_holding_01"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_strName" => "cat_holding_01_id",
	"m_strTable" => "cat_holding_01",
	"m_srcTableName" => "cat_holding_01"
));

$proto6["m_sql"] = "cat_holding_01_id";
$proto6["m_srcTableName"] = "cat_holding_01";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_holding_01",
	"m_srcTableName" => "cat_holding_01"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_holding_01";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_holding_01",
	"m_srcTableName" => "cat_holding_01"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_holding_01";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_holding_01",
	"m_srcTableName" => "cat_holding_01"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_holding_01";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_holding",
	"m_strTable" => "cat_holding_01",
	"m_srcTableName" => "cat_holding_01"
));

$proto14["m_sql"] = "descripcion_holding";
$proto14["m_srcTableName"] = "cat_holding_01";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_holding_01";
$proto17["m_srcTableName"] = "cat_holding_01";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_holding_01_id";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "descripcion_holding";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_holding_01";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_holding_01";
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
$proto0["m_srcTableName"]="cat_holding_01";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_holding_01 = createSqlQuery_cat_holding_01();


	
		;

					

$tdatacat_holding_01[".sqlquery"] = $queryData_cat_holding_01;



$tdatacat_holding_01[".hasEvents"] = false;

?>