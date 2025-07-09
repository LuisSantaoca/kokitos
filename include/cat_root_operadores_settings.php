<?php
$tdatacat_root_operadores = array();
$tdatacat_root_operadores[".searchableFields"] = array();
$tdatacat_root_operadores[".ShortName"] = "cat_root_operadores";
$tdatacat_root_operadores[".OwnerID"] = "";
$tdatacat_root_operadores[".OriginalTable"] = "cat_root_operadores";


$tdatacat_root_operadores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacat_root_operadores[".originalPagesByType"] = $tdatacat_root_operadores[".pagesByType"];
$tdatacat_root_operadores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacat_root_operadores[".originalPages"] = $tdatacat_root_operadores[".pages"];
$tdatacat_root_operadores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacat_root_operadores[".originalDefaultPages"] = $tdatacat_root_operadores[".defaultPages"];

//	field labels
$fieldLabelscat_root_operadores = array();
$fieldToolTipscat_root_operadores = array();
$pageTitlescat_root_operadores = array();
$placeHolderscat_root_operadores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_root_operadores["Spanish"] = array();
	$fieldToolTipscat_root_operadores["Spanish"] = array();
	$placeHolderscat_root_operadores["Spanish"] = array();
	$pageTitlescat_root_operadores["Spanish"] = array();
	$fieldLabelscat_root_operadores["Spanish"]["cat_root_operadores_id"] = "Cat Root Operadores Id";
	$fieldToolTipscat_root_operadores["Spanish"]["cat_root_operadores_id"] = "";
	$placeHolderscat_root_operadores["Spanish"]["cat_root_operadores_id"] = "";
	$fieldLabelscat_root_operadores["Spanish"]["descripcion_operador"] = "Descripcion Operador";
	$fieldToolTipscat_root_operadores["Spanish"]["descripcion_operador"] = "";
	$placeHolderscat_root_operadores["Spanish"]["descripcion_operador"] = "";
	$fieldLabelscat_root_operadores["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_root_operadores["Spanish"]["vigente"] = "";
	$placeHolderscat_root_operadores["Spanish"]["vigente"] = "";
	$fieldLabelscat_root_operadores["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_root_operadores["Spanish"]["capturista"] = "";
	$placeHolderscat_root_operadores["Spanish"]["capturista"] = "";
	$fieldLabelscat_root_operadores["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_root_operadores["Spanish"]["time_stamp"] = "";
	$placeHolderscat_root_operadores["Spanish"]["time_stamp"] = "";
	if (count($fieldToolTipscat_root_operadores["Spanish"]))
		$tdatacat_root_operadores[".isUseToolTips"] = true;
}





$tdatacat_root_operadores[".shortTableName"] = "cat_root_operadores";
$tdatacat_root_operadores[".nSecOptions"] = 0;

$tdatacat_root_operadores[".mainTableOwnerID"] = "";
$tdatacat_root_operadores[".entityType"] = 0;
$tdatacat_root_operadores[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_root_operadores[".strOriginalTableName"] = "cat_root_operadores";

	



$tdatacat_root_operadores[".showAddInPopup"] = false;

$tdatacat_root_operadores[".showEditInPopup"] = false;

$tdatacat_root_operadores[".showViewInPopup"] = false;

$tdatacat_root_operadores[".listAjax"] = false;
//	temporary
//$tdatacat_root_operadores[".listAjax"] = false;

	$tdatacat_root_operadores[".audit"] = false;

	$tdatacat_root_operadores[".locking"] = false;


$pages = $tdatacat_root_operadores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_root_operadores[".edit"] = true;
	$tdatacat_root_operadores[".afterEditAction"] = 1;
	$tdatacat_root_operadores[".closePopupAfterEdit"] = 1;
	$tdatacat_root_operadores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_root_operadores[".add"] = true;
$tdatacat_root_operadores[".afterAddAction"] = 1;
$tdatacat_root_operadores[".closePopupAfterAdd"] = 1;
$tdatacat_root_operadores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_root_operadores[".list"] = true;
}



$tdatacat_root_operadores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_root_operadores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_root_operadores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_root_operadores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_root_operadores[".printFriendly"] = true;
}



$tdatacat_root_operadores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_root_operadores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_root_operadores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_root_operadores[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_root_operadores[".ajaxCodeSnippetAdded"] = false;

$tdatacat_root_operadores[".buttonsAdded"] = false;

$tdatacat_root_operadores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_root_operadores[".isUseTimeForSearch"] = false;


$tdatacat_root_operadores[".badgeColor"] = "6493EA";


$tdatacat_root_operadores[".allSearchFields"] = array();
$tdatacat_root_operadores[".filterFields"] = array();
$tdatacat_root_operadores[".requiredSearchFields"] = array();

$tdatacat_root_operadores[".googleLikeFields"] = array();
$tdatacat_root_operadores[".googleLikeFields"][] = "cat_root_operadores_id";
$tdatacat_root_operadores[".googleLikeFields"][] = "descripcion_operador";
$tdatacat_root_operadores[".googleLikeFields"][] = "vigente";
$tdatacat_root_operadores[".googleLikeFields"][] = "capturista";
$tdatacat_root_operadores[".googleLikeFields"][] = "time_stamp";



$tdatacat_root_operadores[".tableType"] = "list";

$tdatacat_root_operadores[".printerPageOrientation"] = 0;
$tdatacat_root_operadores[".nPrinterPageScale"] = 100;

$tdatacat_root_operadores[".nPrinterSplitRecords"] = 40;

$tdatacat_root_operadores[".geocodingEnabled"] = false;





$tdatacat_root_operadores[".isResizeColumns"] = true;





$tdatacat_root_operadores[".pageSize"] = 20;

$tdatacat_root_operadores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_root_operadores[".strOrderBy"] = $tstrOrderBy;

$tdatacat_root_operadores[".orderindexes"] = array();


$tdatacat_root_operadores[".sqlHead"] = "SELECT cat_root_operadores_id,  	descripcion_operador,  	vigente,  	capturista,  	time_stamp";
$tdatacat_root_operadores[".sqlFrom"] = "FROM cat_root_operadores";
$tdatacat_root_operadores[".sqlWhereExpr"] = "";
$tdatacat_root_operadores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_root_operadores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_root_operadores[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_root_operadores[".highlightSearchResults"] = true;

$tableKeyscat_root_operadores = array();
$tableKeyscat_root_operadores[] = "cat_root_operadores_id";
$tdatacat_root_operadores[".Keys"] = $tableKeyscat_root_operadores;


$tdatacat_root_operadores[".hideMobileList"] = array();




//	cat_root_operadores_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_root_operadores_id";
	$fdata["GoodName"] = "cat_root_operadores_id";
	$fdata["ownerTable"] = "cat_root_operadores";
	$fdata["Label"] = GetFieldLabel("cat_root_operadores","cat_root_operadores_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_root_operadores_id";

		$fdata["sourceSingle"] = "cat_root_operadores_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_root_operadores_id";

	
	
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


	$tdatacat_root_operadores["cat_root_operadores_id"] = $fdata;
		$tdatacat_root_operadores[".searchableFields"][] = "cat_root_operadores_id";
//	descripcion_operador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_operador";
	$fdata["GoodName"] = "descripcion_operador";
	$fdata["ownerTable"] = "cat_root_operadores";
	$fdata["Label"] = GetFieldLabel("cat_root_operadores","descripcion_operador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_operador";

		$fdata["sourceSingle"] = "descripcion_operador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_operador";

	
	
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


	$tdatacat_root_operadores["descripcion_operador"] = $fdata;
		$tdatacat_root_operadores[".searchableFields"][] = "descripcion_operador";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_root_operadores";
	$fdata["Label"] = GetFieldLabel("cat_root_operadores","vigente");
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


	$tdatacat_root_operadores["vigente"] = $fdata;
		$tdatacat_root_operadores[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_root_operadores";
	$fdata["Label"] = GetFieldLabel("cat_root_operadores","capturista");
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


	$tdatacat_root_operadores["capturista"] = $fdata;
		$tdatacat_root_operadores[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_root_operadores";
	$fdata["Label"] = GetFieldLabel("cat_root_operadores","time_stamp");
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


	$tdatacat_root_operadores["time_stamp"] = $fdata;
		$tdatacat_root_operadores[".searchableFields"][] = "time_stamp";


$tables_data["cat_root_operadores"]=&$tdatacat_root_operadores;
$field_labels["cat_root_operadores"] = &$fieldLabelscat_root_operadores;
$fieldToolTips["cat_root_operadores"] = &$fieldToolTipscat_root_operadores;
$placeHolders["cat_root_operadores"] = &$placeHolderscat_root_operadores;
$page_titles["cat_root_operadores"] = &$pageTitlescat_root_operadores;


changeTextControlsToDate( "cat_root_operadores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_root_operadores"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_root_operadores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_root_operadores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_root_operadores_id,  	descripcion_operador,  	vigente,  	capturista,  	time_stamp";
$proto0["m_strFrom"] = "FROM cat_root_operadores";
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
	"m_strName" => "cat_root_operadores_id",
	"m_strTable" => "cat_root_operadores",
	"m_srcTableName" => "cat_root_operadores"
));

$proto6["m_sql"] = "cat_root_operadores_id";
$proto6["m_srcTableName"] = "cat_root_operadores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_operador",
	"m_strTable" => "cat_root_operadores",
	"m_srcTableName" => "cat_root_operadores"
));

$proto8["m_sql"] = "descripcion_operador";
$proto8["m_srcTableName"] = "cat_root_operadores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_root_operadores",
	"m_srcTableName" => "cat_root_operadores"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_root_operadores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_root_operadores",
	"m_srcTableName" => "cat_root_operadores"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_root_operadores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_root_operadores",
	"m_srcTableName" => "cat_root_operadores"
));

$proto14["m_sql"] = "time_stamp";
$proto14["m_srcTableName"] = "cat_root_operadores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_root_operadores";
$proto17["m_srcTableName"] = "cat_root_operadores";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_root_operadores_id";
$proto17["m_columns"][] = "descripcion_operador";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_root_operadores";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_root_operadores";
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
$proto0["m_srcTableName"]="cat_root_operadores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_root_operadores = createSqlQuery_cat_root_operadores();


	
		;

					

$tdatacat_root_operadores[".sqlquery"] = $queryData_cat_root_operadores;



$tdatacat_root_operadores[".hasEvents"] = false;

?>