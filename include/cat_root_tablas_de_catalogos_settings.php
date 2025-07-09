<?php
$tdatacat_root_tablas_de_catalogos = array();
$tdatacat_root_tablas_de_catalogos[".searchableFields"] = array();
$tdatacat_root_tablas_de_catalogos[".ShortName"] = "cat_root_tablas_de_catalogos";
$tdatacat_root_tablas_de_catalogos[".OwnerID"] = "";
$tdatacat_root_tablas_de_catalogos[".OriginalTable"] = "cat_root_tablas_de_catalogos";


$tdatacat_root_tablas_de_catalogos[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_root_tablas_de_catalogos[".originalPagesByType"] = $tdatacat_root_tablas_de_catalogos[".pagesByType"];
$tdatacat_root_tablas_de_catalogos[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_root_tablas_de_catalogos[".originalPages"] = $tdatacat_root_tablas_de_catalogos[".pages"];
$tdatacat_root_tablas_de_catalogos[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_root_tablas_de_catalogos[".originalDefaultPages"] = $tdatacat_root_tablas_de_catalogos[".defaultPages"];

//	field labels
$fieldLabelscat_root_tablas_de_catalogos = array();
$fieldToolTipscat_root_tablas_de_catalogos = array();
$pageTitlescat_root_tablas_de_catalogos = array();
$placeHolderscat_root_tablas_de_catalogos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_root_tablas_de_catalogos["Spanish"] = array();
	$fieldToolTipscat_root_tablas_de_catalogos["Spanish"] = array();
	$placeHolderscat_root_tablas_de_catalogos["Spanish"] = array();
	$pageTitlescat_root_tablas_de_catalogos["Spanish"] = array();
	$fieldLabelscat_root_tablas_de_catalogos["Spanish"]["descripcion_tabla"] = "Descripcion Tabla";
	$fieldToolTipscat_root_tablas_de_catalogos["Spanish"]["descripcion_tabla"] = "";
	$placeHolderscat_root_tablas_de_catalogos["Spanish"]["descripcion_tabla"] = "";
	if (count($fieldToolTipscat_root_tablas_de_catalogos["Spanish"]))
		$tdatacat_root_tablas_de_catalogos[".isUseToolTips"] = true;
}





$tdatacat_root_tablas_de_catalogos[".shortTableName"] = "cat_root_tablas_de_catalogos";
$tdatacat_root_tablas_de_catalogos[".nSecOptions"] = 0;

$tdatacat_root_tablas_de_catalogos[".mainTableOwnerID"] = "";
$tdatacat_root_tablas_de_catalogos[".entityType"] = 0;
$tdatacat_root_tablas_de_catalogos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_root_tablas_de_catalogos[".strOriginalTableName"] = "cat_root_tablas_de_catalogos";

	



$tdatacat_root_tablas_de_catalogos[".showAddInPopup"] = false;

$tdatacat_root_tablas_de_catalogos[".showEditInPopup"] = false;

$tdatacat_root_tablas_de_catalogos[".showViewInPopup"] = false;

$tdatacat_root_tablas_de_catalogos[".listAjax"] = false;
//	temporary
//$tdatacat_root_tablas_de_catalogos[".listAjax"] = false;

	$tdatacat_root_tablas_de_catalogos[".audit"] = false;

	$tdatacat_root_tablas_de_catalogos[".locking"] = false;


$pages = $tdatacat_root_tablas_de_catalogos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_root_tablas_de_catalogos[".edit"] = true;
	$tdatacat_root_tablas_de_catalogos[".afterEditAction"] = 1;
	$tdatacat_root_tablas_de_catalogos[".closePopupAfterEdit"] = 1;
	$tdatacat_root_tablas_de_catalogos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_root_tablas_de_catalogos[".add"] = true;
$tdatacat_root_tablas_de_catalogos[".afterAddAction"] = 1;
$tdatacat_root_tablas_de_catalogos[".closePopupAfterAdd"] = 1;
$tdatacat_root_tablas_de_catalogos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_root_tablas_de_catalogos[".list"] = true;
}



$tdatacat_root_tablas_de_catalogos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_root_tablas_de_catalogos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_root_tablas_de_catalogos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_root_tablas_de_catalogos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_root_tablas_de_catalogos[".printFriendly"] = true;
}



$tdatacat_root_tablas_de_catalogos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_root_tablas_de_catalogos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_root_tablas_de_catalogos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_root_tablas_de_catalogos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_root_tablas_de_catalogos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_root_tablas_de_catalogos[".buttonsAdded"] = false;

$tdatacat_root_tablas_de_catalogos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_root_tablas_de_catalogos[".isUseTimeForSearch"] = false;


$tdatacat_root_tablas_de_catalogos[".badgeColor"] = "CD5C5C";


$tdatacat_root_tablas_de_catalogos[".allSearchFields"] = array();
$tdatacat_root_tablas_de_catalogos[".filterFields"] = array();
$tdatacat_root_tablas_de_catalogos[".requiredSearchFields"] = array();

$tdatacat_root_tablas_de_catalogos[".googleLikeFields"] = array();
$tdatacat_root_tablas_de_catalogos[".googleLikeFields"][] = "descripcion_tabla";



$tdatacat_root_tablas_de_catalogos[".tableType"] = "list";

$tdatacat_root_tablas_de_catalogos[".printerPageOrientation"] = 0;
$tdatacat_root_tablas_de_catalogos[".nPrinterPageScale"] = 100;

$tdatacat_root_tablas_de_catalogos[".nPrinterSplitRecords"] = 40;

$tdatacat_root_tablas_de_catalogos[".geocodingEnabled"] = false;





$tdatacat_root_tablas_de_catalogos[".isResizeColumns"] = true;





$tdatacat_root_tablas_de_catalogos[".pageSize"] = 20;

$tdatacat_root_tablas_de_catalogos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_root_tablas_de_catalogos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_root_tablas_de_catalogos[".orderindexes"] = array();


$tdatacat_root_tablas_de_catalogos[".sqlHead"] = "SELECT descripcion_tabla";
$tdatacat_root_tablas_de_catalogos[".sqlFrom"] = "FROM cat_root_tablas_de_catalogos";
$tdatacat_root_tablas_de_catalogos[".sqlWhereExpr"] = "";
$tdatacat_root_tablas_de_catalogos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_root_tablas_de_catalogos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_root_tablas_de_catalogos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_root_tablas_de_catalogos[".highlightSearchResults"] = true;

$tableKeyscat_root_tablas_de_catalogos = array();
$tableKeyscat_root_tablas_de_catalogos[] = "descripcion_tabla";
$tdatacat_root_tablas_de_catalogos[".Keys"] = $tableKeyscat_root_tablas_de_catalogos;


$tdatacat_root_tablas_de_catalogos[".hideMobileList"] = array();




//	descripcion_tabla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "descripcion_tabla";
	$fdata["GoodName"] = "descripcion_tabla";
	$fdata["ownerTable"] = "cat_root_tablas_de_catalogos";
	$fdata["Label"] = GetFieldLabel("cat_root_tablas_de_catalogos","descripcion_tabla");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_tabla";

		$fdata["sourceSingle"] = "descripcion_tabla";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_tabla";

	
	
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


	$tdatacat_root_tablas_de_catalogos["descripcion_tabla"] = $fdata;
		$tdatacat_root_tablas_de_catalogos[".searchableFields"][] = "descripcion_tabla";


$tables_data["cat_root_tablas_de_catalogos"]=&$tdatacat_root_tablas_de_catalogos;
$field_labels["cat_root_tablas_de_catalogos"] = &$fieldLabelscat_root_tablas_de_catalogos;
$fieldToolTips["cat_root_tablas_de_catalogos"] = &$fieldToolTipscat_root_tablas_de_catalogos;
$placeHolders["cat_root_tablas_de_catalogos"] = &$placeHolderscat_root_tablas_de_catalogos;
$page_titles["cat_root_tablas_de_catalogos"] = &$pageTitlescat_root_tablas_de_catalogos;


changeTextControlsToDate( "cat_root_tablas_de_catalogos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_root_tablas_de_catalogos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_root_tablas_de_catalogos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_root_tablas_de_catalogos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "descripcion_tabla";
$proto0["m_strFrom"] = "FROM cat_root_tablas_de_catalogos";
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
	"m_strName" => "descripcion_tabla",
	"m_strTable" => "cat_root_tablas_de_catalogos",
	"m_srcTableName" => "cat_root_tablas_de_catalogos"
));

$proto6["m_sql"] = "descripcion_tabla";
$proto6["m_srcTableName"] = "cat_root_tablas_de_catalogos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "cat_root_tablas_de_catalogos";
$proto9["m_srcTableName"] = "cat_root_tablas_de_catalogos";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "descripcion_tabla";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "cat_root_tablas_de_catalogos";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "cat_root_tablas_de_catalogos";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_root_tablas_de_catalogos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_root_tablas_de_catalogos = createSqlQuery_cat_root_tablas_de_catalogos();


	
		;

	

$tdatacat_root_tablas_de_catalogos[".sqlquery"] = $queryData_cat_root_tablas_de_catalogos;



include_once(getabspath("include/cat_root_tablas_de_catalogos_events.php"));
$tdatacat_root_tablas_de_catalogos[".hasEvents"] = true;

?>