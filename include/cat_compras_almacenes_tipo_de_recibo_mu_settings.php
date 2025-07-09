<?php
$tdatacat_compras_almacenes_tipo_de_recibo_mu = array();
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".searchableFields"] = array();
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".ShortName"] = "cat_compras_almacenes_tipo_de_recibo_mu";
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".OwnerID"] = "";
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".OriginalTable"] = "cat_compras_almacenes_tipo_de_recibo_mu";


$tdatacat_compras_almacenes_tipo_de_recibo_mu[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".originalPagesByType"] = $tdatacat_compras_almacenes_tipo_de_recibo_mu[".pagesByType"];
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".originalPages"] = $tdatacat_compras_almacenes_tipo_de_recibo_mu[".pages"];
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".originalDefaultPages"] = $tdatacat_compras_almacenes_tipo_de_recibo_mu[".defaultPages"];

//	field labels
$fieldLabelscat_compras_almacenes_tipo_de_recibo_mu = array();
$fieldToolTipscat_compras_almacenes_tipo_de_recibo_mu = array();
$pageTitlescat_compras_almacenes_tipo_de_recibo_mu = array();
$placeHolderscat_compras_almacenes_tipo_de_recibo_mu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_compras_almacenes_tipo_de_recibo_mu["Spanish"] = array();
	$fieldToolTipscat_compras_almacenes_tipo_de_recibo_mu["Spanish"] = array();
	$placeHolderscat_compras_almacenes_tipo_de_recibo_mu["Spanish"] = array();
	$pageTitlescat_compras_almacenes_tipo_de_recibo_mu["Spanish"] = array();
	$fieldLabelscat_compras_almacenes_tipo_de_recibo_mu["Spanish"]["descripcion_tipo_de_recibo"] = "Descripcion Tipo De Recibo";
	$fieldToolTipscat_compras_almacenes_tipo_de_recibo_mu["Spanish"]["descripcion_tipo_de_recibo"] = "";
	$placeHolderscat_compras_almacenes_tipo_de_recibo_mu["Spanish"]["descripcion_tipo_de_recibo"] = "";
	$fieldLabelscat_compras_almacenes_tipo_de_recibo_mu["Spanish"]["cat_compras_almacenes_tipo_de_recibo_mu_id"] = "Cat Compras Almacenes Tipo De Recibo Mu Id";
	$fieldToolTipscat_compras_almacenes_tipo_de_recibo_mu["Spanish"]["cat_compras_almacenes_tipo_de_recibo_mu_id"] = "";
	$placeHolderscat_compras_almacenes_tipo_de_recibo_mu["Spanish"]["cat_compras_almacenes_tipo_de_recibo_mu_id"] = "";
	if (count($fieldToolTipscat_compras_almacenes_tipo_de_recibo_mu["Spanish"]))
		$tdatacat_compras_almacenes_tipo_de_recibo_mu[".isUseToolTips"] = true;
}





$tdatacat_compras_almacenes_tipo_de_recibo_mu[".shortTableName"] = "cat_compras_almacenes_tipo_de_recibo_mu";
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".nSecOptions"] = 0;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".mainTableOwnerID"] = "";
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".entityType"] = 0;
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_compras_almacenes_tipo_de_recibo_mu[".strOriginalTableName"] = "cat_compras_almacenes_tipo_de_recibo_mu";

	



$tdatacat_compras_almacenes_tipo_de_recibo_mu[".showAddInPopup"] = false;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".showEditInPopup"] = false;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".showViewInPopup"] = false;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".listAjax"] = false;
//	temporary
//$tdatacat_compras_almacenes_tipo_de_recibo_mu[".listAjax"] = false;

	$tdatacat_compras_almacenes_tipo_de_recibo_mu[".audit"] = false;

	$tdatacat_compras_almacenes_tipo_de_recibo_mu[".locking"] = false;


$pages = $tdatacat_compras_almacenes_tipo_de_recibo_mu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_compras_almacenes_tipo_de_recibo_mu[".edit"] = true;
	$tdatacat_compras_almacenes_tipo_de_recibo_mu[".afterEditAction"] = 1;
	$tdatacat_compras_almacenes_tipo_de_recibo_mu[".closePopupAfterEdit"] = 1;
	$tdatacat_compras_almacenes_tipo_de_recibo_mu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".add"] = true;
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".afterAddAction"] = 1;
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".closePopupAfterAdd"] = 1;
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_compras_almacenes_tipo_de_recibo_mu[".list"] = true;
}



$tdatacat_compras_almacenes_tipo_de_recibo_mu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".printFriendly"] = true;
}



$tdatacat_compras_almacenes_tipo_de_recibo_mu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".ajaxCodeSnippetAdded"] = false;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".buttonsAdded"] = false;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".isUseTimeForSearch"] = false;


$tdatacat_compras_almacenes_tipo_de_recibo_mu[".badgeColor"] = "CFAE83";


$tdatacat_compras_almacenes_tipo_de_recibo_mu[".allSearchFields"] = array();
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".filterFields"] = array();
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".requiredSearchFields"] = array();

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".googleLikeFields"] = array();
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".googleLikeFields"][] = "descripcion_tipo_de_recibo";
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".googleLikeFields"][] = "cat_compras_almacenes_tipo_de_recibo_mu_id";



$tdatacat_compras_almacenes_tipo_de_recibo_mu[".tableType"] = "list";

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".printerPageOrientation"] = 0;
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".nPrinterPageScale"] = 100;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".nPrinterSplitRecords"] = 40;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".geocodingEnabled"] = false;





$tdatacat_compras_almacenes_tipo_de_recibo_mu[".isResizeColumns"] = true;





$tdatacat_compras_almacenes_tipo_de_recibo_mu[".pageSize"] = 20;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".strOrderBy"] = $tstrOrderBy;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".orderindexes"] = array();


$tdatacat_compras_almacenes_tipo_de_recibo_mu[".sqlHead"] = "SELECT descripcion_tipo_de_recibo,  cat_compras_almacenes_tipo_de_recibo_mu_id";
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".sqlFrom"] = "FROM cat_compras_almacenes_tipo_de_recibo_mu";
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".sqlWhereExpr"] = "(vigente =1)";
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".highlightSearchResults"] = true;

$tableKeyscat_compras_almacenes_tipo_de_recibo_mu = array();
$tableKeyscat_compras_almacenes_tipo_de_recibo_mu[] = "cat_compras_almacenes_tipo_de_recibo_mu_id";
$tdatacat_compras_almacenes_tipo_de_recibo_mu[".Keys"] = $tableKeyscat_compras_almacenes_tipo_de_recibo_mu;


$tdatacat_compras_almacenes_tipo_de_recibo_mu[".hideMobileList"] = array();




//	descripcion_tipo_de_recibo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "descripcion_tipo_de_recibo";
	$fdata["GoodName"] = "descripcion_tipo_de_recibo";
	$fdata["ownerTable"] = "cat_compras_almacenes_tipo_de_recibo_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes_tipo_de_recibo_mu","descripcion_tipo_de_recibo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_tipo_de_recibo";

		$fdata["sourceSingle"] = "descripcion_tipo_de_recibo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_tipo_de_recibo";

	
	
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


	$tdatacat_compras_almacenes_tipo_de_recibo_mu["descripcion_tipo_de_recibo"] = $fdata;
		$tdatacat_compras_almacenes_tipo_de_recibo_mu[".searchableFields"][] = "descripcion_tipo_de_recibo";
//	cat_compras_almacenes_tipo_de_recibo_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_compras_almacenes_tipo_de_recibo_mu_id";
	$fdata["GoodName"] = "cat_compras_almacenes_tipo_de_recibo_mu_id";
	$fdata["ownerTable"] = "cat_compras_almacenes_tipo_de_recibo_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes_tipo_de_recibo_mu","cat_compras_almacenes_tipo_de_recibo_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_almacenes_tipo_de_recibo_mu_id";

		$fdata["sourceSingle"] = "cat_compras_almacenes_tipo_de_recibo_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_almacenes_tipo_de_recibo_mu_id";

	
	
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


	$tdatacat_compras_almacenes_tipo_de_recibo_mu["cat_compras_almacenes_tipo_de_recibo_mu_id"] = $fdata;
		$tdatacat_compras_almacenes_tipo_de_recibo_mu[".searchableFields"][] = "cat_compras_almacenes_tipo_de_recibo_mu_id";


$tables_data["cat_compras_almacenes_tipo_de_recibo_mu"]=&$tdatacat_compras_almacenes_tipo_de_recibo_mu;
$field_labels["cat_compras_almacenes_tipo_de_recibo_mu"] = &$fieldLabelscat_compras_almacenes_tipo_de_recibo_mu;
$fieldToolTips["cat_compras_almacenes_tipo_de_recibo_mu"] = &$fieldToolTipscat_compras_almacenes_tipo_de_recibo_mu;
$placeHolders["cat_compras_almacenes_tipo_de_recibo_mu"] = &$placeHolderscat_compras_almacenes_tipo_de_recibo_mu;
$page_titles["cat_compras_almacenes_tipo_de_recibo_mu"] = &$pageTitlescat_compras_almacenes_tipo_de_recibo_mu;


changeTextControlsToDate( "cat_compras_almacenes_tipo_de_recibo_mu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_compras_almacenes_tipo_de_recibo_mu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_compras_almacenes_tipo_de_recibo_mu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_compras_almacenes_tipo_de_recibo_mu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "descripcion_tipo_de_recibo,  cat_compras_almacenes_tipo_de_recibo_mu_id";
$proto0["m_strFrom"] = "FROM cat_compras_almacenes_tipo_de_recibo_mu";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_almacenes_tipo_de_recibo_mu",
	"m_srcTableName" => "cat_compras_almacenes_tipo_de_recibo_mu"
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
	"m_strName" => "descripcion_tipo_de_recibo",
	"m_strTable" => "cat_compras_almacenes_tipo_de_recibo_mu",
	"m_srcTableName" => "cat_compras_almacenes_tipo_de_recibo_mu"
));

$proto6["m_sql"] = "descripcion_tipo_de_recibo";
$proto6["m_srcTableName"] = "cat_compras_almacenes_tipo_de_recibo_mu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_almacenes_tipo_de_recibo_mu_id",
	"m_strTable" => "cat_compras_almacenes_tipo_de_recibo_mu",
	"m_srcTableName" => "cat_compras_almacenes_tipo_de_recibo_mu"
));

$proto8["m_sql"] = "cat_compras_almacenes_tipo_de_recibo_mu_id";
$proto8["m_srcTableName"] = "cat_compras_almacenes_tipo_de_recibo_mu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cat_compras_almacenes_tipo_de_recibo_mu";
$proto11["m_srcTableName"] = "cat_compras_almacenes_tipo_de_recibo_mu";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "vigente";
$proto11["m_columns"][] = "descripcion_tipo_de_recibo";
$proto11["m_columns"][] = "cat_compras_almacenes_tipo_de_recibo_mu_id";
$proto11["m_columns"][] = "capturista";
$proto11["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cat_compras_almacenes_tipo_de_recibo_mu";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "cat_compras_almacenes_tipo_de_recibo_mu";
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
$proto0["m_srcTableName"]="cat_compras_almacenes_tipo_de_recibo_mu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_compras_almacenes_tipo_de_recibo_mu = createSqlQuery_cat_compras_almacenes_tipo_de_recibo_mu();


	
		;

		

$tdatacat_compras_almacenes_tipo_de_recibo_mu[".sqlquery"] = $queryData_cat_compras_almacenes_tipo_de_recibo_mu;



$tdatacat_compras_almacenes_tipo_de_recibo_mu[".hasEvents"] = false;

?>