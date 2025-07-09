<?php
$tdatacat_produccion_proceso = array();
$tdatacat_produccion_proceso[".searchableFields"] = array();
$tdatacat_produccion_proceso[".ShortName"] = "cat_produccion_proceso";
$tdatacat_produccion_proceso[".OwnerID"] = "";
$tdatacat_produccion_proceso[".OriginalTable"] = "cat_produccion_proceso";


$tdatacat_produccion_proceso[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacat_produccion_proceso[".originalPagesByType"] = $tdatacat_produccion_proceso[".pagesByType"];
$tdatacat_produccion_proceso[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacat_produccion_proceso[".originalPages"] = $tdatacat_produccion_proceso[".pages"];
$tdatacat_produccion_proceso[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacat_produccion_proceso[".originalDefaultPages"] = $tdatacat_produccion_proceso[".defaultPages"];

//	field labels
$fieldLabelscat_produccion_proceso = array();
$fieldToolTipscat_produccion_proceso = array();
$pageTitlescat_produccion_proceso = array();
$placeHolderscat_produccion_proceso = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_produccion_proceso["Spanish"] = array();
	$fieldToolTipscat_produccion_proceso["Spanish"] = array();
	$placeHolderscat_produccion_proceso["Spanish"] = array();
	$pageTitlescat_produccion_proceso["Spanish"] = array();
	$fieldLabelscat_produccion_proceso["Spanish"]["descripcion_calidad"] = "Descripcion Calidad";
	$fieldToolTipscat_produccion_proceso["Spanish"]["descripcion_calidad"] = "";
	$placeHolderscat_produccion_proceso["Spanish"]["descripcion_calidad"] = "";
	$fieldLabelscat_produccion_proceso["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_produccion_proceso["Spanish"]["vigente"] = "";
	$placeHolderscat_produccion_proceso["Spanish"]["vigente"] = "";
	$fieldLabelscat_produccion_proceso["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_produccion_proceso["Spanish"]["time_stamp"] = "";
	$placeHolderscat_produccion_proceso["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_produccion_proceso["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_produccion_proceso["Spanish"]["capturista"] = "";
	$placeHolderscat_produccion_proceso["Spanish"]["capturista"] = "";
	$fieldLabelscat_produccion_proceso["Spanish"]["cat_produccion_proceso_id"] = "Cat Produccion Proceso Id";
	$fieldToolTipscat_produccion_proceso["Spanish"]["cat_produccion_proceso_id"] = "";
	$placeHolderscat_produccion_proceso["Spanish"]["cat_produccion_proceso_id"] = "";
	if (count($fieldToolTipscat_produccion_proceso["Spanish"]))
		$tdatacat_produccion_proceso[".isUseToolTips"] = true;
}


	$tdatacat_produccion_proceso[".NCSearch"] = true;



$tdatacat_produccion_proceso[".shortTableName"] = "cat_produccion_proceso";
$tdatacat_produccion_proceso[".nSecOptions"] = 0;

$tdatacat_produccion_proceso[".mainTableOwnerID"] = "";
$tdatacat_produccion_proceso[".entityType"] = 0;
$tdatacat_produccion_proceso[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_produccion_proceso[".strOriginalTableName"] = "cat_produccion_proceso";

	



$tdatacat_produccion_proceso[".showAddInPopup"] = false;

$tdatacat_produccion_proceso[".showEditInPopup"] = false;

$tdatacat_produccion_proceso[".showViewInPopup"] = false;

$tdatacat_produccion_proceso[".listAjax"] = false;
//	temporary
//$tdatacat_produccion_proceso[".listAjax"] = false;

	$tdatacat_produccion_proceso[".audit"] = false;

	$tdatacat_produccion_proceso[".locking"] = false;


$pages = $tdatacat_produccion_proceso[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_produccion_proceso[".edit"] = true;
	$tdatacat_produccion_proceso[".afterEditAction"] = 1;
	$tdatacat_produccion_proceso[".closePopupAfterEdit"] = 1;
	$tdatacat_produccion_proceso[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_produccion_proceso[".add"] = true;
$tdatacat_produccion_proceso[".afterAddAction"] = 1;
$tdatacat_produccion_proceso[".closePopupAfterAdd"] = 1;
$tdatacat_produccion_proceso[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_produccion_proceso[".list"] = true;
}



$tdatacat_produccion_proceso[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_produccion_proceso[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_produccion_proceso[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_produccion_proceso[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_produccion_proceso[".printFriendly"] = true;
}



$tdatacat_produccion_proceso[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_produccion_proceso[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_produccion_proceso[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_produccion_proceso[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_produccion_proceso[".ajaxCodeSnippetAdded"] = false;

$tdatacat_produccion_proceso[".buttonsAdded"] = false;

$tdatacat_produccion_proceso[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_produccion_proceso[".isUseTimeForSearch"] = false;


$tdatacat_produccion_proceso[".badgeColor"] = "DAA520";


$tdatacat_produccion_proceso[".allSearchFields"] = array();
$tdatacat_produccion_proceso[".filterFields"] = array();
$tdatacat_produccion_proceso[".requiredSearchFields"] = array();

$tdatacat_produccion_proceso[".googleLikeFields"] = array();
$tdatacat_produccion_proceso[".googleLikeFields"][] = "cat_produccion_proceso_id";
$tdatacat_produccion_proceso[".googleLikeFields"][] = "descripcion_calidad";
$tdatacat_produccion_proceso[".googleLikeFields"][] = "vigente";
$tdatacat_produccion_proceso[".googleLikeFields"][] = "time_stamp";
$tdatacat_produccion_proceso[".googleLikeFields"][] = "capturista";



$tdatacat_produccion_proceso[".tableType"] = "list";

$tdatacat_produccion_proceso[".printerPageOrientation"] = 0;
$tdatacat_produccion_proceso[".nPrinterPageScale"] = 100;

$tdatacat_produccion_proceso[".nPrinterSplitRecords"] = 40;

$tdatacat_produccion_proceso[".geocodingEnabled"] = false;










$tdatacat_produccion_proceso[".pageSize"] = 20;

$tdatacat_produccion_proceso[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_produccion_proceso[".strOrderBy"] = $tstrOrderBy;

$tdatacat_produccion_proceso[".orderindexes"] = array();


$tdatacat_produccion_proceso[".sqlHead"] = "SELECT cat_produccion_proceso_id,  	descripcion_calidad,  	vigente,  	time_stamp,  	capturista";
$tdatacat_produccion_proceso[".sqlFrom"] = "FROM cat_produccion_proceso";
$tdatacat_produccion_proceso[".sqlWhereExpr"] = "";
$tdatacat_produccion_proceso[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_produccion_proceso[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_produccion_proceso[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_produccion_proceso[".highlightSearchResults"] = true;

$tableKeyscat_produccion_proceso = array();
$tdatacat_produccion_proceso[".Keys"] = $tableKeyscat_produccion_proceso;


$tdatacat_produccion_proceso[".hideMobileList"] = array();




//	cat_produccion_proceso_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_produccion_proceso_id";
	$fdata["GoodName"] = "cat_produccion_proceso_id";
	$fdata["ownerTable"] = "cat_produccion_proceso";
	$fdata["Label"] = GetFieldLabel("cat_produccion_proceso","cat_produccion_proceso_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_produccion_proceso_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_proceso_id";

	
	
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


	$tdatacat_produccion_proceso["cat_produccion_proceso_id"] = $fdata;
		$tdatacat_produccion_proceso[".searchableFields"][] = "cat_produccion_proceso_id";
//	descripcion_calidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_calidad";
	$fdata["GoodName"] = "descripcion_calidad";
	$fdata["ownerTable"] = "cat_produccion_proceso";
	$fdata["Label"] = GetFieldLabel("cat_produccion_proceso","descripcion_calidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_calidad";

		$fdata["sourceSingle"] = "descripcion_calidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_calidad";

	
	
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


	$tdatacat_produccion_proceso["descripcion_calidad"] = $fdata;
		$tdatacat_produccion_proceso[".searchableFields"][] = "descripcion_calidad";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_produccion_proceso";
	$fdata["Label"] = GetFieldLabel("cat_produccion_proceso","vigente");
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


	$tdatacat_produccion_proceso["vigente"] = $fdata;
		$tdatacat_produccion_proceso[".searchableFields"][] = "vigente";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_produccion_proceso";
	$fdata["Label"] = GetFieldLabel("cat_produccion_proceso","time_stamp");
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


	$tdatacat_produccion_proceso["time_stamp"] = $fdata;
		$tdatacat_produccion_proceso[".searchableFields"][] = "time_stamp";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_produccion_proceso";
	$fdata["Label"] = GetFieldLabel("cat_produccion_proceso","capturista");
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


	$tdatacat_produccion_proceso["capturista"] = $fdata;
		$tdatacat_produccion_proceso[".searchableFields"][] = "capturista";


$tables_data["cat_produccion_proceso"]=&$tdatacat_produccion_proceso;
$field_labels["cat_produccion_proceso"] = &$fieldLabelscat_produccion_proceso;
$fieldToolTips["cat_produccion_proceso"] = &$fieldToolTipscat_produccion_proceso;
$placeHolders["cat_produccion_proceso"] = &$placeHolderscat_produccion_proceso;
$page_titles["cat_produccion_proceso"] = &$pageTitlescat_produccion_proceso;


changeTextControlsToDate( "cat_produccion_proceso" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_produccion_proceso"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_produccion_proceso"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_produccion_proceso()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_produccion_proceso_id,  	descripcion_calidad,  	vigente,  	time_stamp,  	capturista";
$proto0["m_strFrom"] = "FROM cat_produccion_proceso";
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
	"m_strName" => "cat_produccion_proceso_id",
	"m_strTable" => "cat_produccion_proceso",
	"m_srcTableName" => "cat_produccion_proceso"
));

$proto6["m_sql"] = "cat_produccion_proceso_id";
$proto6["m_srcTableName"] = "cat_produccion_proceso";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_calidad",
	"m_strTable" => "cat_produccion_proceso",
	"m_srcTableName" => "cat_produccion_proceso"
));

$proto8["m_sql"] = "descripcion_calidad";
$proto8["m_srcTableName"] = "cat_produccion_proceso";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_produccion_proceso",
	"m_srcTableName" => "cat_produccion_proceso"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_produccion_proceso";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_produccion_proceso",
	"m_srcTableName" => "cat_produccion_proceso"
));

$proto12["m_sql"] = "time_stamp";
$proto12["m_srcTableName"] = "cat_produccion_proceso";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_produccion_proceso",
	"m_srcTableName" => "cat_produccion_proceso"
));

$proto14["m_sql"] = "capturista";
$proto14["m_srcTableName"] = "cat_produccion_proceso";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_produccion_proceso";
$proto17["m_srcTableName"] = "cat_produccion_proceso";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_produccion_proceso_id";
$proto17["m_columns"][] = "descripcion_calidad";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "capturista";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_produccion_proceso";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_produccion_proceso";
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
$proto0["m_srcTableName"]="cat_produccion_proceso";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_produccion_proceso = createSqlQuery_cat_produccion_proceso();


	
		;

					

$tdatacat_produccion_proceso[".sqlquery"] = $queryData_cat_produccion_proceso;



$tdatacat_produccion_proceso[".hasEvents"] = false;

?>