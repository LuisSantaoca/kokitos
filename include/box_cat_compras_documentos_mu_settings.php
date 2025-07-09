<?php
$tdatabox_cat_compras_documentos_mu = array();
$tdatabox_cat_compras_documentos_mu[".searchableFields"] = array();
$tdatabox_cat_compras_documentos_mu[".ShortName"] = "box_cat_compras_documentos_mu";
$tdatabox_cat_compras_documentos_mu[".OwnerID"] = "";
$tdatabox_cat_compras_documentos_mu[".OriginalTable"] = "cat_compras_documentos_mu";


$tdatabox_cat_compras_documentos_mu[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_compras_documentos_mu[".originalPagesByType"] = $tdatabox_cat_compras_documentos_mu[".pagesByType"];
$tdatabox_cat_compras_documentos_mu[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_compras_documentos_mu[".originalPages"] = $tdatabox_cat_compras_documentos_mu[".pages"];
$tdatabox_cat_compras_documentos_mu[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_compras_documentos_mu[".originalDefaultPages"] = $tdatabox_cat_compras_documentos_mu[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_compras_documentos_mu = array();
$fieldToolTipsbox_cat_compras_documentos_mu = array();
$pageTitlesbox_cat_compras_documentos_mu = array();
$placeHoldersbox_cat_compras_documentos_mu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_compras_documentos_mu["Spanish"] = array();
	$fieldToolTipsbox_cat_compras_documentos_mu["Spanish"] = array();
	$placeHoldersbox_cat_compras_documentos_mu["Spanish"] = array();
	$pageTitlesbox_cat_compras_documentos_mu["Spanish"] = array();
	$fieldLabelsbox_cat_compras_documentos_mu["Spanish"]["cat_compras_documentos_mu_id"] = "Id";
	$fieldToolTipsbox_cat_compras_documentos_mu["Spanish"]["cat_compras_documentos_mu_id"] = "";
	$placeHoldersbox_cat_compras_documentos_mu["Spanish"]["cat_compras_documentos_mu_id"] = "";
	$fieldLabelsbox_cat_compras_documentos_mu["Spanish"]["descripcion_compras_documentos_mu"] = "Descripcion Compras Documentos Mu";
	$fieldToolTipsbox_cat_compras_documentos_mu["Spanish"]["descripcion_compras_documentos_mu"] = "";
	$placeHoldersbox_cat_compras_documentos_mu["Spanish"]["descripcion_compras_documentos_mu"] = "";
	if (count($fieldToolTipsbox_cat_compras_documentos_mu["Spanish"]))
		$tdatabox_cat_compras_documentos_mu[".isUseToolTips"] = true;
}





$tdatabox_cat_compras_documentos_mu[".shortTableName"] = "box_cat_compras_documentos_mu";
$tdatabox_cat_compras_documentos_mu[".nSecOptions"] = 0;

$tdatabox_cat_compras_documentos_mu[".mainTableOwnerID"] = "";
$tdatabox_cat_compras_documentos_mu[".entityType"] = 1;
$tdatabox_cat_compras_documentos_mu[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_compras_documentos_mu[".strOriginalTableName"] = "cat_compras_documentos_mu";

	



$tdatabox_cat_compras_documentos_mu[".showAddInPopup"] = false;

$tdatabox_cat_compras_documentos_mu[".showEditInPopup"] = false;

$tdatabox_cat_compras_documentos_mu[".showViewInPopup"] = false;

$tdatabox_cat_compras_documentos_mu[".listAjax"] = false;
//	temporary
//$tdatabox_cat_compras_documentos_mu[".listAjax"] = false;

	$tdatabox_cat_compras_documentos_mu[".audit"] = true;

	$tdatabox_cat_compras_documentos_mu[".locking"] = true;


$pages = $tdatabox_cat_compras_documentos_mu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_compras_documentos_mu[".edit"] = true;
	$tdatabox_cat_compras_documentos_mu[".afterEditAction"] = 1;
	$tdatabox_cat_compras_documentos_mu[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_compras_documentos_mu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_compras_documentos_mu[".add"] = true;
$tdatabox_cat_compras_documentos_mu[".afterAddAction"] = 1;
$tdatabox_cat_compras_documentos_mu[".closePopupAfterAdd"] = 1;
$tdatabox_cat_compras_documentos_mu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_compras_documentos_mu[".list"] = true;
}



$tdatabox_cat_compras_documentos_mu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_compras_documentos_mu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_compras_documentos_mu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_compras_documentos_mu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_compras_documentos_mu[".printFriendly"] = true;
}



$tdatabox_cat_compras_documentos_mu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_compras_documentos_mu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_compras_documentos_mu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_compras_documentos_mu[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_compras_documentos_mu[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_compras_documentos_mu[".buttonsAdded"] = false;

$tdatabox_cat_compras_documentos_mu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_compras_documentos_mu[".isUseTimeForSearch"] = false;


$tdatabox_cat_compras_documentos_mu[".badgeColor"] = "6493EA";


$tdatabox_cat_compras_documentos_mu[".allSearchFields"] = array();
$tdatabox_cat_compras_documentos_mu[".filterFields"] = array();
$tdatabox_cat_compras_documentos_mu[".requiredSearchFields"] = array();

$tdatabox_cat_compras_documentos_mu[".googleLikeFields"] = array();
$tdatabox_cat_compras_documentos_mu[".googleLikeFields"][] = "cat_compras_documentos_mu_id";
$tdatabox_cat_compras_documentos_mu[".googleLikeFields"][] = "descripcion_compras_documentos_mu";



$tdatabox_cat_compras_documentos_mu[".tableType"] = "list";

$tdatabox_cat_compras_documentos_mu[".printerPageOrientation"] = 0;
$tdatabox_cat_compras_documentos_mu[".nPrinterPageScale"] = 100;

$tdatabox_cat_compras_documentos_mu[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_compras_documentos_mu[".geocodingEnabled"] = false;





$tdatabox_cat_compras_documentos_mu[".isResizeColumns"] = true;





$tdatabox_cat_compras_documentos_mu[".pageSize"] = 20;

$tdatabox_cat_compras_documentos_mu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_compras_documentos_mu[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_compras_documentos_mu[".orderindexes"] = array();


$tdatabox_cat_compras_documentos_mu[".sqlHead"] = "SELECT cat_compras_documentos_mu_id,  descripcion_compras_documentos_mu";
$tdatabox_cat_compras_documentos_mu[".sqlFrom"] = "FROM cat_compras_documentos_mu";
$tdatabox_cat_compras_documentos_mu[".sqlWhereExpr"] = "(vigente =1)";
$tdatabox_cat_compras_documentos_mu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_compras_documentos_mu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_compras_documentos_mu[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_compras_documentos_mu[".highlightSearchResults"] = true;

$tableKeysbox_cat_compras_documentos_mu = array();
$tableKeysbox_cat_compras_documentos_mu[] = "cat_compras_documentos_mu_id";
$tdatabox_cat_compras_documentos_mu[".Keys"] = $tableKeysbox_cat_compras_documentos_mu;


$tdatabox_cat_compras_documentos_mu[".hideMobileList"] = array();




//	cat_compras_documentos_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_documentos_mu_id";
	$fdata["GoodName"] = "cat_compras_documentos_mu_id";
	$fdata["ownerTable"] = "cat_compras_documentos_mu";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_documentos_mu","cat_compras_documentos_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_documentos_mu_id";

		$fdata["sourceSingle"] = "cat_compras_documentos_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_documentos_mu_id";

	
	
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


	$tdatabox_cat_compras_documentos_mu["cat_compras_documentos_mu_id"] = $fdata;
		$tdatabox_cat_compras_documentos_mu[".searchableFields"][] = "cat_compras_documentos_mu_id";
//	descripcion_compras_documentos_mu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_compras_documentos_mu";
	$fdata["GoodName"] = "descripcion_compras_documentos_mu";
	$fdata["ownerTable"] = "cat_compras_documentos_mu";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_documentos_mu","descripcion_compras_documentos_mu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_compras_documentos_mu";

		$fdata["sourceSingle"] = "descripcion_compras_documentos_mu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_compras_documentos_mu";

	
	
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


	$tdatabox_cat_compras_documentos_mu["descripcion_compras_documentos_mu"] = $fdata;
		$tdatabox_cat_compras_documentos_mu[".searchableFields"][] = "descripcion_compras_documentos_mu";


$tables_data["box_cat_compras_documentos_mu"]=&$tdatabox_cat_compras_documentos_mu;
$field_labels["box_cat_compras_documentos_mu"] = &$fieldLabelsbox_cat_compras_documentos_mu;
$fieldToolTips["box_cat_compras_documentos_mu"] = &$fieldToolTipsbox_cat_compras_documentos_mu;
$placeHolders["box_cat_compras_documentos_mu"] = &$placeHoldersbox_cat_compras_documentos_mu;
$page_titles["box_cat_compras_documentos_mu"] = &$pageTitlesbox_cat_compras_documentos_mu;


changeTextControlsToDate( "box_cat_compras_documentos_mu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_compras_documentos_mu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_compras_documentos_mu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_compras_documentos_mu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_documentos_mu_id,  descripcion_compras_documentos_mu";
$proto0["m_strFrom"] = "FROM cat_compras_documentos_mu";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_documentos_mu",
	"m_srcTableName" => "box_cat_compras_documentos_mu"
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
	"m_strName" => "cat_compras_documentos_mu_id",
	"m_strTable" => "cat_compras_documentos_mu",
	"m_srcTableName" => "box_cat_compras_documentos_mu"
));

$proto6["m_sql"] = "cat_compras_documentos_mu_id";
$proto6["m_srcTableName"] = "box_cat_compras_documentos_mu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_compras_documentos_mu",
	"m_strTable" => "cat_compras_documentos_mu",
	"m_srcTableName" => "box_cat_compras_documentos_mu"
));

$proto8["m_sql"] = "descripcion_compras_documentos_mu";
$proto8["m_srcTableName"] = "box_cat_compras_documentos_mu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cat_compras_documentos_mu";
$proto11["m_srcTableName"] = "box_cat_compras_documentos_mu";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cat_compras_documentos_mu_id";
$proto11["m_columns"][] = "time_stamp";
$proto11["m_columns"][] = "vigente";
$proto11["m_columns"][] = "capturista";
$proto11["m_columns"][] = "imei";
$proto11["m_columns"][] = "descripcion_compras_documentos_mu";
$proto11["m_columns"][] = "filtro_documentos_caja";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cat_compras_documentos_mu";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "box_cat_compras_documentos_mu";
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
$proto0["m_srcTableName"]="box_cat_compras_documentos_mu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_compras_documentos_mu = createSqlQuery_box_cat_compras_documentos_mu();


	
		;

		

$tdatabox_cat_compras_documentos_mu[".sqlquery"] = $queryData_box_cat_compras_documentos_mu;



$tdatabox_cat_compras_documentos_mu[".hasEvents"] = false;

?>