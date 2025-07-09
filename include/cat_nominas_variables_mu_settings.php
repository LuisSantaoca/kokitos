<?php
$tdatacat_nominas_variables_mu = array();
$tdatacat_nominas_variables_mu[".searchableFields"] = array();
$tdatacat_nominas_variables_mu[".ShortName"] = "cat_nominas_variables_mu";
$tdatacat_nominas_variables_mu[".OwnerID"] = "";
$tdatacat_nominas_variables_mu[".OriginalTable"] = "cat_nominas_variables_mu";


$tdatacat_nominas_variables_mu[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_variables_mu[".originalPagesByType"] = $tdatacat_nominas_variables_mu[".pagesByType"];
$tdatacat_nominas_variables_mu[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_variables_mu[".originalPages"] = $tdatacat_nominas_variables_mu[".pages"];
$tdatacat_nominas_variables_mu[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_nominas_variables_mu[".originalDefaultPages"] = $tdatacat_nominas_variables_mu[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_variables_mu = array();
$fieldToolTipscat_nominas_variables_mu = array();
$pageTitlescat_nominas_variables_mu = array();
$placeHolderscat_nominas_variables_mu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_variables_mu["Spanish"] = array();
	$fieldToolTipscat_nominas_variables_mu["Spanish"] = array();
	$placeHolderscat_nominas_variables_mu["Spanish"] = array();
	$pageTitlescat_nominas_variables_mu["Spanish"] = array();
	$fieldLabelscat_nominas_variables_mu["Spanish"]["cat_nominas_variables_mu_id"] = "Id";
	$fieldToolTipscat_nominas_variables_mu["Spanish"]["cat_nominas_variables_mu_id"] = "";
	$placeHolderscat_nominas_variables_mu["Spanish"]["cat_nominas_variables_mu_id"] = "";
	$fieldLabelscat_nominas_variables_mu["Spanish"]["descripcion_variable"] = "Descripcion Variable";
	$fieldToolTipscat_nominas_variables_mu["Spanish"]["descripcion_variable"] = "";
	$placeHolderscat_nominas_variables_mu["Spanish"]["descripcion_variable"] = "";
	$fieldLabelscat_nominas_variables_mu["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_variables_mu["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_variables_mu["Spanish"]["vigente"] = "";
	$fieldLabelscat_nominas_variables_mu["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_variables_mu["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_variables_mu["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_variables_mu["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_variables_mu["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_variables_mu["Spanish"]["time_stamp"] = "";
	if (count($fieldToolTipscat_nominas_variables_mu["Spanish"]))
		$tdatacat_nominas_variables_mu[".isUseToolTips"] = true;
}





$tdatacat_nominas_variables_mu[".shortTableName"] = "cat_nominas_variables_mu";
$tdatacat_nominas_variables_mu[".nSecOptions"] = 0;

$tdatacat_nominas_variables_mu[".mainTableOwnerID"] = "";
$tdatacat_nominas_variables_mu[".entityType"] = 0;
$tdatacat_nominas_variables_mu[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_variables_mu[".strOriginalTableName"] = "cat_nominas_variables_mu";

	



$tdatacat_nominas_variables_mu[".showAddInPopup"] = false;

$tdatacat_nominas_variables_mu[".showEditInPopup"] = false;

$tdatacat_nominas_variables_mu[".showViewInPopup"] = false;

$tdatacat_nominas_variables_mu[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_variables_mu[".listAjax"] = false;

	$tdatacat_nominas_variables_mu[".audit"] = false;

	$tdatacat_nominas_variables_mu[".locking"] = false;


$pages = $tdatacat_nominas_variables_mu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_variables_mu[".edit"] = true;
	$tdatacat_nominas_variables_mu[".afterEditAction"] = 1;
	$tdatacat_nominas_variables_mu[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_variables_mu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_variables_mu[".add"] = true;
$tdatacat_nominas_variables_mu[".afterAddAction"] = 1;
$tdatacat_nominas_variables_mu[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_variables_mu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_variables_mu[".list"] = true;
}



$tdatacat_nominas_variables_mu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_variables_mu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_variables_mu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_variables_mu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_variables_mu[".printFriendly"] = true;
}



$tdatacat_nominas_variables_mu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_variables_mu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_variables_mu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_variables_mu[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_variables_mu[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_variables_mu[".buttonsAdded"] = false;

$tdatacat_nominas_variables_mu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_variables_mu[".isUseTimeForSearch"] = false;


$tdatacat_nominas_variables_mu[".badgeColor"] = "1E90FF";


$tdatacat_nominas_variables_mu[".allSearchFields"] = array();
$tdatacat_nominas_variables_mu[".filterFields"] = array();
$tdatacat_nominas_variables_mu[".requiredSearchFields"] = array();

$tdatacat_nominas_variables_mu[".googleLikeFields"] = array();
$tdatacat_nominas_variables_mu[".googleLikeFields"][] = "cat_nominas_variables_mu_id";
$tdatacat_nominas_variables_mu[".googleLikeFields"][] = "descripcion_variable";
$tdatacat_nominas_variables_mu[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_variables_mu[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_variables_mu[".googleLikeFields"][] = "time_stamp";



$tdatacat_nominas_variables_mu[".tableType"] = "list";

$tdatacat_nominas_variables_mu[".printerPageOrientation"] = 0;
$tdatacat_nominas_variables_mu[".nPrinterPageScale"] = 100;

$tdatacat_nominas_variables_mu[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_variables_mu[".geocodingEnabled"] = false;





$tdatacat_nominas_variables_mu[".isResizeColumns"] = true;





$tdatacat_nominas_variables_mu[".pageSize"] = 20;

$tdatacat_nominas_variables_mu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_variables_mu[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_variables_mu[".orderindexes"] = array();


$tdatacat_nominas_variables_mu[".sqlHead"] = "SELECT cat_nominas_variables_mu_id,  	descripcion_variable,  	vigente,  	capturista,  	time_stamp";
$tdatacat_nominas_variables_mu[".sqlFrom"] = "FROM cat_nominas_variables_mu";
$tdatacat_nominas_variables_mu[".sqlWhereExpr"] = "";
$tdatacat_nominas_variables_mu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_variables_mu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_variables_mu[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_variables_mu[".highlightSearchResults"] = true;

$tableKeyscat_nominas_variables_mu = array();
$tableKeyscat_nominas_variables_mu[] = "cat_nominas_variables_mu_id";
$tdatacat_nominas_variables_mu[".Keys"] = $tableKeyscat_nominas_variables_mu;


$tdatacat_nominas_variables_mu[".hideMobileList"] = array();




//	cat_nominas_variables_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_nominas_variables_mu_id";
	$fdata["GoodName"] = "cat_nominas_variables_mu_id";
	$fdata["ownerTable"] = "cat_nominas_variables_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_variables_mu","cat_nominas_variables_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_variables_mu_id";

		$fdata["sourceSingle"] = "cat_nominas_variables_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_variables_mu_id";

	
	
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


	$tdatacat_nominas_variables_mu["cat_nominas_variables_mu_id"] = $fdata;
		$tdatacat_nominas_variables_mu[".searchableFields"][] = "cat_nominas_variables_mu_id";
//	descripcion_variable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_variable";
	$fdata["GoodName"] = "descripcion_variable";
	$fdata["ownerTable"] = "cat_nominas_variables_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_variables_mu","descripcion_variable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_variable";

		$fdata["sourceSingle"] = "descripcion_variable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_variable";

	
	
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


	$tdatacat_nominas_variables_mu["descripcion_variable"] = $fdata;
		$tdatacat_nominas_variables_mu[".searchableFields"][] = "descripcion_variable";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_variables_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_variables_mu","vigente");
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


	$tdatacat_nominas_variables_mu["vigente"] = $fdata;
		$tdatacat_nominas_variables_mu[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_variables_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_variables_mu","capturista");
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


	$tdatacat_nominas_variables_mu["capturista"] = $fdata;
		$tdatacat_nominas_variables_mu[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_variables_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_variables_mu","time_stamp");
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


	$tdatacat_nominas_variables_mu["time_stamp"] = $fdata;
		$tdatacat_nominas_variables_mu[".searchableFields"][] = "time_stamp";


$tables_data["cat_nominas_variables_mu"]=&$tdatacat_nominas_variables_mu;
$field_labels["cat_nominas_variables_mu"] = &$fieldLabelscat_nominas_variables_mu;
$fieldToolTips["cat_nominas_variables_mu"] = &$fieldToolTipscat_nominas_variables_mu;
$placeHolders["cat_nominas_variables_mu"] = &$placeHolderscat_nominas_variables_mu;
$page_titles["cat_nominas_variables_mu"] = &$pageTitlescat_nominas_variables_mu;


changeTextControlsToDate( "cat_nominas_variables_mu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_variables_mu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_variables_mu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_variables_mu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_nominas_variables_mu_id,  	descripcion_variable,  	vigente,  	capturista,  	time_stamp";
$proto0["m_strFrom"] = "FROM cat_nominas_variables_mu";
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
	"m_strName" => "cat_nominas_variables_mu_id",
	"m_strTable" => "cat_nominas_variables_mu",
	"m_srcTableName" => "cat_nominas_variables_mu"
));

$proto6["m_sql"] = "cat_nominas_variables_mu_id";
$proto6["m_srcTableName"] = "cat_nominas_variables_mu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_variable",
	"m_strTable" => "cat_nominas_variables_mu",
	"m_srcTableName" => "cat_nominas_variables_mu"
));

$proto8["m_sql"] = "descripcion_variable";
$proto8["m_srcTableName"] = "cat_nominas_variables_mu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_nominas_variables_mu",
	"m_srcTableName" => "cat_nominas_variables_mu"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_nominas_variables_mu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_variables_mu",
	"m_srcTableName" => "cat_nominas_variables_mu"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_nominas_variables_mu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_variables_mu",
	"m_srcTableName" => "cat_nominas_variables_mu"
));

$proto14["m_sql"] = "time_stamp";
$proto14["m_srcTableName"] = "cat_nominas_variables_mu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_nominas_variables_mu";
$proto17["m_srcTableName"] = "cat_nominas_variables_mu";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_nominas_variables_mu_id";
$proto17["m_columns"][] = "descripcion_variable";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_nominas_variables_mu";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_nominas_variables_mu";
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
$proto0["m_srcTableName"]="cat_nominas_variables_mu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_variables_mu = createSqlQuery_cat_nominas_variables_mu();


	
		;

					

$tdatacat_nominas_variables_mu[".sqlquery"] = $queryData_cat_nominas_variables_mu;



$tdatacat_nominas_variables_mu[".hasEvents"] = false;

?>