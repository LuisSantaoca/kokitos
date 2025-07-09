<?php
$tdatacat_actividades_turnos_mu = array();
$tdatacat_actividades_turnos_mu[".searchableFields"] = array();
$tdatacat_actividades_turnos_mu[".ShortName"] = "cat_actividades_turnos_mu";
$tdatacat_actividades_turnos_mu[".OwnerID"] = "";
$tdatacat_actividades_turnos_mu[".OriginalTable"] = "cat_actividades_turnos_mu";


$tdatacat_actividades_turnos_mu[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacat_actividades_turnos_mu[".originalPagesByType"] = $tdatacat_actividades_turnos_mu[".pagesByType"];
$tdatacat_actividades_turnos_mu[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacat_actividades_turnos_mu[".originalPages"] = $tdatacat_actividades_turnos_mu[".pages"];
$tdatacat_actividades_turnos_mu[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacat_actividades_turnos_mu[".originalDefaultPages"] = $tdatacat_actividades_turnos_mu[".defaultPages"];

//	field labels
$fieldLabelscat_actividades_turnos_mu = array();
$fieldToolTipscat_actividades_turnos_mu = array();
$pageTitlescat_actividades_turnos_mu = array();
$placeHolderscat_actividades_turnos_mu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_actividades_turnos_mu["Spanish"] = array();
	$fieldToolTipscat_actividades_turnos_mu["Spanish"] = array();
	$placeHolderscat_actividades_turnos_mu["Spanish"] = array();
	$pageTitlescat_actividades_turnos_mu["Spanish"] = array();
	$fieldLabelscat_actividades_turnos_mu["Spanish"]["descripcion_turno"] = "Descripcion Turno";
	$fieldToolTipscat_actividades_turnos_mu["Spanish"]["descripcion_turno"] = "";
	$placeHolderscat_actividades_turnos_mu["Spanish"]["descripcion_turno"] = "";
	$fieldLabelscat_actividades_turnos_mu["Spanish"]["cat_actividades_turnos_mu_id"] = "Cat Actividades Turnos Mu Id";
	$fieldToolTipscat_actividades_turnos_mu["Spanish"]["cat_actividades_turnos_mu_id"] = "";
	$placeHolderscat_actividades_turnos_mu["Spanish"]["cat_actividades_turnos_mu_id"] = "";
	if (count($fieldToolTipscat_actividades_turnos_mu["Spanish"]))
		$tdatacat_actividades_turnos_mu[".isUseToolTips"] = true;
}





$tdatacat_actividades_turnos_mu[".shortTableName"] = "cat_actividades_turnos_mu";
$tdatacat_actividades_turnos_mu[".nSecOptions"] = 0;

$tdatacat_actividades_turnos_mu[".mainTableOwnerID"] = "";
$tdatacat_actividades_turnos_mu[".entityType"] = 0;
$tdatacat_actividades_turnos_mu[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_actividades_turnos_mu[".strOriginalTableName"] = "cat_actividades_turnos_mu";

	



$tdatacat_actividades_turnos_mu[".showAddInPopup"] = false;

$tdatacat_actividades_turnos_mu[".showEditInPopup"] = false;

$tdatacat_actividades_turnos_mu[".showViewInPopup"] = false;

$tdatacat_actividades_turnos_mu[".listAjax"] = false;
//	temporary
//$tdatacat_actividades_turnos_mu[".listAjax"] = false;

	$tdatacat_actividades_turnos_mu[".audit"] = true;

	$tdatacat_actividades_turnos_mu[".locking"] = true;


$pages = $tdatacat_actividades_turnos_mu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_actividades_turnos_mu[".edit"] = true;
	$tdatacat_actividades_turnos_mu[".afterEditAction"] = 1;
	$tdatacat_actividades_turnos_mu[".closePopupAfterEdit"] = 1;
	$tdatacat_actividades_turnos_mu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_actividades_turnos_mu[".add"] = true;
$tdatacat_actividades_turnos_mu[".afterAddAction"] = 1;
$tdatacat_actividades_turnos_mu[".closePopupAfterAdd"] = 1;
$tdatacat_actividades_turnos_mu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_actividades_turnos_mu[".list"] = true;
}



$tdatacat_actividades_turnos_mu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_actividades_turnos_mu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_actividades_turnos_mu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_actividades_turnos_mu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_actividades_turnos_mu[".printFriendly"] = true;
}



$tdatacat_actividades_turnos_mu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_actividades_turnos_mu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_actividades_turnos_mu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_actividades_turnos_mu[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_actividades_turnos_mu[".ajaxCodeSnippetAdded"] = false;

$tdatacat_actividades_turnos_mu[".buttonsAdded"] = false;

$tdatacat_actividades_turnos_mu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_actividades_turnos_mu[".isUseTimeForSearch"] = false;


$tdatacat_actividades_turnos_mu[".badgeColor"] = "E8926F";


$tdatacat_actividades_turnos_mu[".allSearchFields"] = array();
$tdatacat_actividades_turnos_mu[".filterFields"] = array();
$tdatacat_actividades_turnos_mu[".requiredSearchFields"] = array();

$tdatacat_actividades_turnos_mu[".googleLikeFields"] = array();
$tdatacat_actividades_turnos_mu[".googleLikeFields"][] = "cat_actividades_turnos_mu_id";
$tdatacat_actividades_turnos_mu[".googleLikeFields"][] = "descripcion_turno";



$tdatacat_actividades_turnos_mu[".tableType"] = "list";

$tdatacat_actividades_turnos_mu[".printerPageOrientation"] = 0;
$tdatacat_actividades_turnos_mu[".nPrinterPageScale"] = 100;

$tdatacat_actividades_turnos_mu[".nPrinterSplitRecords"] = 40;

$tdatacat_actividades_turnos_mu[".geocodingEnabled"] = false;





$tdatacat_actividades_turnos_mu[".isResizeColumns"] = true;





$tdatacat_actividades_turnos_mu[".pageSize"] = 20;

$tdatacat_actividades_turnos_mu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_actividades_turnos_mu[".strOrderBy"] = $tstrOrderBy;

$tdatacat_actividades_turnos_mu[".orderindexes"] = array();


$tdatacat_actividades_turnos_mu[".sqlHead"] = "SELECT cat_actividades_turnos_mu_id,  descripcion_turno";
$tdatacat_actividades_turnos_mu[".sqlFrom"] = "FROM cat_actividades_turnos_mu";
$tdatacat_actividades_turnos_mu[".sqlWhereExpr"] = "(vigente =1)";
$tdatacat_actividades_turnos_mu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_actividades_turnos_mu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_actividades_turnos_mu[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_actividades_turnos_mu[".highlightSearchResults"] = true;

$tableKeyscat_actividades_turnos_mu = array();
$tableKeyscat_actividades_turnos_mu[] = "cat_actividades_turnos_mu_id";
$tdatacat_actividades_turnos_mu[".Keys"] = $tableKeyscat_actividades_turnos_mu;


$tdatacat_actividades_turnos_mu[".hideMobileList"] = array();




//	cat_actividades_turnos_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_actividades_turnos_mu_id";
	$fdata["GoodName"] = "cat_actividades_turnos_mu_id";
	$fdata["ownerTable"] = "cat_actividades_turnos_mu";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos_mu","cat_actividades_turnos_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_actividades_turnos_mu_id";

		$fdata["sourceSingle"] = "cat_actividades_turnos_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos_mu_id";

	
	
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


	$tdatacat_actividades_turnos_mu["cat_actividades_turnos_mu_id"] = $fdata;
		$tdatacat_actividades_turnos_mu[".searchableFields"][] = "cat_actividades_turnos_mu_id";
//	descripcion_turno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_turno";
	$fdata["GoodName"] = "descripcion_turno";
	$fdata["ownerTable"] = "cat_actividades_turnos_mu";
	$fdata["Label"] = GetFieldLabel("cat_actividades_turnos_mu","descripcion_turno");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_turno";

		$fdata["sourceSingle"] = "descripcion_turno";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_turno";

	
	
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


	$tdatacat_actividades_turnos_mu["descripcion_turno"] = $fdata;
		$tdatacat_actividades_turnos_mu[".searchableFields"][] = "descripcion_turno";


$tables_data["cat_actividades_turnos_mu"]=&$tdatacat_actividades_turnos_mu;
$field_labels["cat_actividades_turnos_mu"] = &$fieldLabelscat_actividades_turnos_mu;
$fieldToolTips["cat_actividades_turnos_mu"] = &$fieldToolTipscat_actividades_turnos_mu;
$placeHolders["cat_actividades_turnos_mu"] = &$placeHolderscat_actividades_turnos_mu;
$page_titles["cat_actividades_turnos_mu"] = &$pageTitlescat_actividades_turnos_mu;


changeTextControlsToDate( "cat_actividades_turnos_mu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_actividades_turnos_mu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_actividades_turnos_mu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_actividades_turnos_mu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_actividades_turnos_mu_id,  descripcion_turno";
$proto0["m_strFrom"] = "FROM cat_actividades_turnos_mu";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_actividades_turnos_mu",
	"m_srcTableName" => "cat_actividades_turnos_mu"
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
	"m_strName" => "cat_actividades_turnos_mu_id",
	"m_strTable" => "cat_actividades_turnos_mu",
	"m_srcTableName" => "cat_actividades_turnos_mu"
));

$proto6["m_sql"] = "cat_actividades_turnos_mu_id";
$proto6["m_srcTableName"] = "cat_actividades_turnos_mu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_turno",
	"m_strTable" => "cat_actividades_turnos_mu",
	"m_srcTableName" => "cat_actividades_turnos_mu"
));

$proto8["m_sql"] = "descripcion_turno";
$proto8["m_srcTableName"] = "cat_actividades_turnos_mu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cat_actividades_turnos_mu";
$proto11["m_srcTableName"] = "cat_actividades_turnos_mu";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "vigente";
$proto11["m_columns"][] = "descripcion_turno";
$proto11["m_columns"][] = "cat_actividades_turnos_mu_id";
$proto11["m_columns"][] = "capturista";
$proto11["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cat_actividades_turnos_mu";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "cat_actividades_turnos_mu";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_actividades_turnos_mu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_actividades_turnos_mu = createSqlQuery_cat_actividades_turnos_mu();


	
		;

		

$tdatacat_actividades_turnos_mu[".sqlquery"] = $queryData_cat_actividades_turnos_mu;



$tdatacat_actividades_turnos_mu[".hasEvents"] = false;

?>