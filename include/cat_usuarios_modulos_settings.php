<?php
$tdatacat_usuarios_modulos = array();
$tdatacat_usuarios_modulos[".searchableFields"] = array();
$tdatacat_usuarios_modulos[".ShortName"] = "cat_usuarios_modulos";
$tdatacat_usuarios_modulos[".OwnerID"] = "";
$tdatacat_usuarios_modulos[".OriginalTable"] = "cat_usuarios_modulos";


$tdatacat_usuarios_modulos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_usuarios_modulos[".originalPagesByType"] = $tdatacat_usuarios_modulos[".pagesByType"];
$tdatacat_usuarios_modulos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_usuarios_modulos[".originalPages"] = $tdatacat_usuarios_modulos[".pages"];
$tdatacat_usuarios_modulos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_usuarios_modulos[".originalDefaultPages"] = $tdatacat_usuarios_modulos[".defaultPages"];

//	field labels
$fieldLabelscat_usuarios_modulos = array();
$fieldToolTipscat_usuarios_modulos = array();
$pageTitlescat_usuarios_modulos = array();
$placeHolderscat_usuarios_modulos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_usuarios_modulos["Spanish"] = array();
	$fieldToolTipscat_usuarios_modulos["Spanish"] = array();
	$placeHolderscat_usuarios_modulos["Spanish"] = array();
	$pageTitlescat_usuarios_modulos["Spanish"] = array();
	$fieldLabelscat_usuarios_modulos["Spanish"]["cat_usuarios_modulos_id"] = "Cat Usuarios Modulos Id";
	$fieldToolTipscat_usuarios_modulos["Spanish"]["cat_usuarios_modulos_id"] = "";
	$placeHolderscat_usuarios_modulos["Spanish"]["cat_usuarios_modulos_id"] = "";
	$fieldLabelscat_usuarios_modulos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_usuarios_modulos["Spanish"]["time_stamp"] = "";
	$placeHolderscat_usuarios_modulos["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_usuarios_modulos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_usuarios_modulos["Spanish"]["vigente"] = "";
	$placeHolderscat_usuarios_modulos["Spanish"]["vigente"] = "";
	$fieldLabelscat_usuarios_modulos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_usuarios_modulos["Spanish"]["capturista"] = "";
	$placeHolderscat_usuarios_modulos["Spanish"]["capturista"] = "";
	$fieldLabelscat_usuarios_modulos["Spanish"]["descripcion_modulos"] = "Descripcion Modulos";
	$fieldToolTipscat_usuarios_modulos["Spanish"]["descripcion_modulos"] = "";
	$placeHolderscat_usuarios_modulos["Spanish"]["descripcion_modulos"] = "";
	if (count($fieldToolTipscat_usuarios_modulos["Spanish"]))
		$tdatacat_usuarios_modulos[".isUseToolTips"] = true;
}





$tdatacat_usuarios_modulos[".shortTableName"] = "cat_usuarios_modulos";
$tdatacat_usuarios_modulos[".nSecOptions"] = 0;

$tdatacat_usuarios_modulos[".mainTableOwnerID"] = "";
$tdatacat_usuarios_modulos[".entityType"] = 0;
$tdatacat_usuarios_modulos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_usuarios_modulos[".strOriginalTableName"] = "cat_usuarios_modulos";

	



$tdatacat_usuarios_modulos[".showAddInPopup"] = false;

$tdatacat_usuarios_modulos[".showEditInPopup"] = false;

$tdatacat_usuarios_modulos[".showViewInPopup"] = false;

$tdatacat_usuarios_modulos[".listAjax"] = false;
//	temporary
//$tdatacat_usuarios_modulos[".listAjax"] = false;

	$tdatacat_usuarios_modulos[".audit"] = true;

	$tdatacat_usuarios_modulos[".locking"] = true;


$pages = $tdatacat_usuarios_modulos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_usuarios_modulos[".edit"] = true;
	$tdatacat_usuarios_modulos[".afterEditAction"] = 1;
	$tdatacat_usuarios_modulos[".closePopupAfterEdit"] = 1;
	$tdatacat_usuarios_modulos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_usuarios_modulos[".add"] = true;
$tdatacat_usuarios_modulos[".afterAddAction"] = 1;
$tdatacat_usuarios_modulos[".closePopupAfterAdd"] = 1;
$tdatacat_usuarios_modulos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_usuarios_modulos[".list"] = true;
}



$tdatacat_usuarios_modulos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_usuarios_modulos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_usuarios_modulos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_usuarios_modulos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_usuarios_modulos[".printFriendly"] = true;
}



$tdatacat_usuarios_modulos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_usuarios_modulos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_usuarios_modulos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_usuarios_modulos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_usuarios_modulos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_usuarios_modulos[".buttonsAdded"] = false;

$tdatacat_usuarios_modulos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_usuarios_modulos[".isUseTimeForSearch"] = false;


$tdatacat_usuarios_modulos[".badgeColor"] = "2F4F4F";


$tdatacat_usuarios_modulos[".allSearchFields"] = array();
$tdatacat_usuarios_modulos[".filterFields"] = array();
$tdatacat_usuarios_modulos[".requiredSearchFields"] = array();

$tdatacat_usuarios_modulos[".googleLikeFields"] = array();
$tdatacat_usuarios_modulos[".googleLikeFields"][] = "cat_usuarios_modulos_id";
$tdatacat_usuarios_modulos[".googleLikeFields"][] = "time_stamp";
$tdatacat_usuarios_modulos[".googleLikeFields"][] = "vigente";
$tdatacat_usuarios_modulos[".googleLikeFields"][] = "capturista";
$tdatacat_usuarios_modulos[".googleLikeFields"][] = "descripcion_modulos";



$tdatacat_usuarios_modulos[".tableType"] = "list";

$tdatacat_usuarios_modulos[".printerPageOrientation"] = 0;
$tdatacat_usuarios_modulos[".nPrinterPageScale"] = 100;

$tdatacat_usuarios_modulos[".nPrinterSplitRecords"] = 40;

$tdatacat_usuarios_modulos[".geocodingEnabled"] = false;





$tdatacat_usuarios_modulos[".isResizeColumns"] = true;





$tdatacat_usuarios_modulos[".pageSize"] = 20;

$tdatacat_usuarios_modulos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_usuarios_modulos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_usuarios_modulos[".orderindexes"] = array();


$tdatacat_usuarios_modulos[".sqlHead"] = "SELECT cat_usuarios_modulos_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_modulos";
$tdatacat_usuarios_modulos[".sqlFrom"] = "FROM cat_usuarios_modulos";
$tdatacat_usuarios_modulos[".sqlWhereExpr"] = "";
$tdatacat_usuarios_modulos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_usuarios_modulos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_usuarios_modulos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_usuarios_modulos[".highlightSearchResults"] = true;

$tableKeyscat_usuarios_modulos = array();
$tableKeyscat_usuarios_modulos[] = "cat_usuarios_modulos_id";
$tdatacat_usuarios_modulos[".Keys"] = $tableKeyscat_usuarios_modulos;


$tdatacat_usuarios_modulos[".hideMobileList"] = array();




//	cat_usuarios_modulos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_usuarios_modulos_id";
	$fdata["GoodName"] = "cat_usuarios_modulos_id";
	$fdata["ownerTable"] = "cat_usuarios_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_modulos","cat_usuarios_modulos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_usuarios_modulos_id";

		$fdata["sourceSingle"] = "cat_usuarios_modulos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_modulos_id";

	
	
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


	$tdatacat_usuarios_modulos["cat_usuarios_modulos_id"] = $fdata;
		$tdatacat_usuarios_modulos[".searchableFields"][] = "cat_usuarios_modulos_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_usuarios_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_modulos","time_stamp");
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


	$tdatacat_usuarios_modulos["time_stamp"] = $fdata;
		$tdatacat_usuarios_modulos[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_usuarios_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_modulos","vigente");
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


	$tdatacat_usuarios_modulos["vigente"] = $fdata;
		$tdatacat_usuarios_modulos[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_usuarios_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_modulos","capturista");
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


	$tdatacat_usuarios_modulos["capturista"] = $fdata;
		$tdatacat_usuarios_modulos[".searchableFields"][] = "capturista";
//	descripcion_modulos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_modulos";
	$fdata["GoodName"] = "descripcion_modulos";
	$fdata["ownerTable"] = "cat_usuarios_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_modulos","descripcion_modulos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_modulos";

		$fdata["sourceSingle"] = "descripcion_modulos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_modulos";

	
	
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


	$tdatacat_usuarios_modulos["descripcion_modulos"] = $fdata;
		$tdatacat_usuarios_modulos[".searchableFields"][] = "descripcion_modulos";


$tables_data["cat_usuarios_modulos"]=&$tdatacat_usuarios_modulos;
$field_labels["cat_usuarios_modulos"] = &$fieldLabelscat_usuarios_modulos;
$fieldToolTips["cat_usuarios_modulos"] = &$fieldToolTipscat_usuarios_modulos;
$placeHolders["cat_usuarios_modulos"] = &$placeHolderscat_usuarios_modulos;
$page_titles["cat_usuarios_modulos"] = &$pageTitlescat_usuarios_modulos;


changeTextControlsToDate( "cat_usuarios_modulos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_usuarios_modulos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_usuarios_modulos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_usuarios_modulos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_usuarios_modulos_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_modulos";
$proto0["m_strFrom"] = "FROM cat_usuarios_modulos";
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
	"m_strName" => "cat_usuarios_modulos_id",
	"m_strTable" => "cat_usuarios_modulos",
	"m_srcTableName" => "cat_usuarios_modulos"
));

$proto6["m_sql"] = "cat_usuarios_modulos_id";
$proto6["m_srcTableName"] = "cat_usuarios_modulos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_usuarios_modulos",
	"m_srcTableName" => "cat_usuarios_modulos"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_usuarios_modulos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_usuarios_modulos",
	"m_srcTableName" => "cat_usuarios_modulos"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_usuarios_modulos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_usuarios_modulos",
	"m_srcTableName" => "cat_usuarios_modulos"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_usuarios_modulos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_modulos",
	"m_strTable" => "cat_usuarios_modulos",
	"m_srcTableName" => "cat_usuarios_modulos"
));

$proto14["m_sql"] = "descripcion_modulos";
$proto14["m_srcTableName"] = "cat_usuarios_modulos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_usuarios_modulos";
$proto17["m_srcTableName"] = "cat_usuarios_modulos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_usuarios_modulos_id";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "descripcion_modulos";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_usuarios_modulos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_usuarios_modulos";
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
$proto0["m_srcTableName"]="cat_usuarios_modulos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_usuarios_modulos = createSqlQuery_cat_usuarios_modulos();


	
		;

					

$tdatacat_usuarios_modulos[".sqlquery"] = $queryData_cat_usuarios_modulos;



$tdatacat_usuarios_modulos[".hasEvents"] = false;

?>