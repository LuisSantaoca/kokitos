<?php
$tdatabox_cat_holding_03_empresas_unidades_productivas = array();
$tdatabox_cat_holding_03_empresas_unidades_productivas[".searchableFields"] = array();
$tdatabox_cat_holding_03_empresas_unidades_productivas[".ShortName"] = "box_cat_holding_03_empresas_unidades_productivas";
$tdatabox_cat_holding_03_empresas_unidades_productivas[".OwnerID"] = "";
$tdatabox_cat_holding_03_empresas_unidades_productivas[".OriginalTable"] = "cat_holding_03_empresas_unidades_productivas";


$tdatabox_cat_holding_03_empresas_unidades_productivas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_holding_03_empresas_unidades_productivas[".originalPagesByType"] = $tdatabox_cat_holding_03_empresas_unidades_productivas[".pagesByType"];
$tdatabox_cat_holding_03_empresas_unidades_productivas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_holding_03_empresas_unidades_productivas[".originalPages"] = $tdatabox_cat_holding_03_empresas_unidades_productivas[".pages"];
$tdatabox_cat_holding_03_empresas_unidades_productivas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_holding_03_empresas_unidades_productivas[".originalDefaultPages"] = $tdatabox_cat_holding_03_empresas_unidades_productivas[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_holding_03_empresas_unidades_productivas = array();
$fieldToolTipsbox_cat_holding_03_empresas_unidades_productivas = array();
$pageTitlesbox_cat_holding_03_empresas_unidades_productivas = array();
$placeHoldersbox_cat_holding_03_empresas_unidades_productivas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_holding_03_empresas_unidades_productivas["Spanish"] = array();
	$fieldToolTipsbox_cat_holding_03_empresas_unidades_productivas["Spanish"] = array();
	$placeHoldersbox_cat_holding_03_empresas_unidades_productivas["Spanish"] = array();
	$pageTitlesbox_cat_holding_03_empresas_unidades_productivas["Spanish"] = array();
	$fieldLabelsbox_cat_holding_03_empresas_unidades_productivas["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "Id";
	$fieldToolTipsbox_cat_holding_03_empresas_unidades_productivas["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHoldersbox_cat_holding_03_empresas_unidades_productivas["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelsbox_cat_holding_03_empresas_unidades_productivas["Spanish"]["UP"] = "UP";
	$fieldToolTipsbox_cat_holding_03_empresas_unidades_productivas["Spanish"]["UP"] = "";
	$placeHoldersbox_cat_holding_03_empresas_unidades_productivas["Spanish"]["UP"] = "";
	if (count($fieldToolTipsbox_cat_holding_03_empresas_unidades_productivas["Spanish"]))
		$tdatabox_cat_holding_03_empresas_unidades_productivas[".isUseToolTips"] = true;
}





$tdatabox_cat_holding_03_empresas_unidades_productivas[".shortTableName"] = "box_cat_holding_03_empresas_unidades_productivas";
$tdatabox_cat_holding_03_empresas_unidades_productivas[".nSecOptions"] = 0;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".mainTableOwnerID"] = "";
$tdatabox_cat_holding_03_empresas_unidades_productivas[".entityType"] = 1;
$tdatabox_cat_holding_03_empresas_unidades_productivas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_holding_03_empresas_unidades_productivas[".strOriginalTableName"] = "cat_holding_03_empresas_unidades_productivas";

	



$tdatabox_cat_holding_03_empresas_unidades_productivas[".showAddInPopup"] = false;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".showEditInPopup"] = false;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".showViewInPopup"] = false;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".listAjax"] = false;
//	temporary
//$tdatabox_cat_holding_03_empresas_unidades_productivas[".listAjax"] = false;

	$tdatabox_cat_holding_03_empresas_unidades_productivas[".audit"] = true;

	$tdatabox_cat_holding_03_empresas_unidades_productivas[".locking"] = true;


$pages = $tdatabox_cat_holding_03_empresas_unidades_productivas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_holding_03_empresas_unidades_productivas[".edit"] = true;
	$tdatabox_cat_holding_03_empresas_unidades_productivas[".afterEditAction"] = 1;
	$tdatabox_cat_holding_03_empresas_unidades_productivas[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_holding_03_empresas_unidades_productivas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_holding_03_empresas_unidades_productivas[".add"] = true;
$tdatabox_cat_holding_03_empresas_unidades_productivas[".afterAddAction"] = 1;
$tdatabox_cat_holding_03_empresas_unidades_productivas[".closePopupAfterAdd"] = 1;
$tdatabox_cat_holding_03_empresas_unidades_productivas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_holding_03_empresas_unidades_productivas[".list"] = true;
}



$tdatabox_cat_holding_03_empresas_unidades_productivas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_holding_03_empresas_unidades_productivas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_holding_03_empresas_unidades_productivas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_holding_03_empresas_unidades_productivas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_holding_03_empresas_unidades_productivas[".printFriendly"] = true;
}



$tdatabox_cat_holding_03_empresas_unidades_productivas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_holding_03_empresas_unidades_productivas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_holding_03_empresas_unidades_productivas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_holding_03_empresas_unidades_productivas[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_holding_03_empresas_unidades_productivas[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".buttonsAdded"] = false;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_holding_03_empresas_unidades_productivas[".isUseTimeForSearch"] = false;


$tdatabox_cat_holding_03_empresas_unidades_productivas[".badgeColor"] = "008B8B";


$tdatabox_cat_holding_03_empresas_unidades_productivas[".allSearchFields"] = array();
$tdatabox_cat_holding_03_empresas_unidades_productivas[".filterFields"] = array();
$tdatabox_cat_holding_03_empresas_unidades_productivas[".requiredSearchFields"] = array();

$tdatabox_cat_holding_03_empresas_unidades_productivas[".googleLikeFields"] = array();
$tdatabox_cat_holding_03_empresas_unidades_productivas[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatabox_cat_holding_03_empresas_unidades_productivas[".googleLikeFields"][] = "UP";



$tdatabox_cat_holding_03_empresas_unidades_productivas[".tableType"] = "list";

$tdatabox_cat_holding_03_empresas_unidades_productivas[".printerPageOrientation"] = 0;
$tdatabox_cat_holding_03_empresas_unidades_productivas[".nPrinterPageScale"] = 100;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".geocodingEnabled"] = false;





$tdatabox_cat_holding_03_empresas_unidades_productivas[".isResizeColumns"] = true;





$tdatabox_cat_holding_03_empresas_unidades_productivas[".pageSize"] = 20;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_holding_03_empresas_unidades_productivas[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".orderindexes"] = array();


$tdatabox_cat_holding_03_empresas_unidades_productivas[".sqlHead"] = "SELECT cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id,  concat(cat_holding_03_empresas_unidades_productivas_categorias.descripcion_unidades_productivas_categorias, ' :', cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas) AS UP";
$tdatabox_cat_holding_03_empresas_unidades_productivas[".sqlFrom"] = "FROM cat_holding_03_empresas_unidades_productivas  LEFT OUTER JOIN cat_holding_03_empresas_unidades_productivas_categorias ON cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_id = cat_holding_03_empresas_unidades_productivas_categorias.cat_holding_03_empresas_unidades_productivas_categorias_id";
$tdatabox_cat_holding_03_empresas_unidades_productivas[".sqlWhereExpr"] = "(cat_holding_03_empresas_unidades_productivas.vigente =1)";
$tdatabox_cat_holding_03_empresas_unidades_productivas[".sqlTail"] = "";

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
$tdatabox_cat_holding_03_empresas_unidades_productivas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_holding_03_empresas_unidades_productivas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_holding_03_empresas_unidades_productivas[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_holding_03_empresas_unidades_productivas[".highlightSearchResults"] = true;

$tableKeysbox_cat_holding_03_empresas_unidades_productivas = array();
$tableKeysbox_cat_holding_03_empresas_unidades_productivas[] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatabox_cat_holding_03_empresas_unidades_productivas[".Keys"] = $tableKeysbox_cat_holding_03_empresas_unidades_productivas;


$tdatabox_cat_holding_03_empresas_unidades_productivas[".hideMobileList"] = array();




//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "cat_holding_03_empresas_unidades_productivas";
	$fdata["Label"] = GetFieldLabel("box_cat_holding_03_empresas_unidades_productivas","cat_holding_03_empresas_unidades_productivas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_holding_03_empresas_unidades_productivas_id";

		$fdata["sourceSingle"] = "cat_holding_03_empresas_unidades_productivas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id";

	
	
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


	$tdatabox_cat_holding_03_empresas_unidades_productivas["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatabox_cat_holding_03_empresas_unidades_productivas[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	UP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UP";
	$fdata["GoodName"] = "UP";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_cat_holding_03_empresas_unidades_productivas","UP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UP";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(cat_holding_03_empresas_unidades_productivas_categorias.descripcion_unidades_productivas_categorias, ' :', cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas)";

	
	
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


	$tdatabox_cat_holding_03_empresas_unidades_productivas["UP"] = $fdata;
		$tdatabox_cat_holding_03_empresas_unidades_productivas[".searchableFields"][] = "UP";


$tables_data["box_cat_holding_03_empresas_unidades_productivas"]=&$tdatabox_cat_holding_03_empresas_unidades_productivas;
$field_labels["box_cat_holding_03_empresas_unidades_productivas"] = &$fieldLabelsbox_cat_holding_03_empresas_unidades_productivas;
$fieldToolTips["box_cat_holding_03_empresas_unidades_productivas"] = &$fieldToolTipsbox_cat_holding_03_empresas_unidades_productivas;
$placeHolders["box_cat_holding_03_empresas_unidades_productivas"] = &$placeHoldersbox_cat_holding_03_empresas_unidades_productivas;
$page_titles["box_cat_holding_03_empresas_unidades_productivas"] = &$pageTitlesbox_cat_holding_03_empresas_unidades_productivas;


changeTextControlsToDate( "box_cat_holding_03_empresas_unidades_productivas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_holding_03_empresas_unidades_productivas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_holding_03_empresas_unidades_productivas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_holding_03_empresas_unidades_productivas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id,  concat(cat_holding_03_empresas_unidades_productivas_categorias.descripcion_unidades_productivas_categorias, ' :', cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas) AS UP";
$proto0["m_strFrom"] = "FROM cat_holding_03_empresas_unidades_productivas  LEFT OUTER JOIN cat_holding_03_empresas_unidades_productivas_categorias ON cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_id = cat_holding_03_empresas_unidades_productivas_categorias.cat_holding_03_empresas_unidades_productivas_categorias_id";
$proto0["m_strWhere"] = "(cat_holding_03_empresas_unidades_productivas.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_holding_03_empresas_unidades_productivas.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_holding_03_empresas_unidades_productivas",
	"m_srcTableName" => "box_cat_holding_03_empresas_unidades_productivas"
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
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "cat_holding_03_empresas_unidades_productivas",
	"m_srcTableName" => "box_cat_holding_03_empresas_unidades_productivas"
));

$proto6["m_sql"] = "cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id";
$proto6["m_srcTableName"] = "box_cat_holding_03_empresas_unidades_productivas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_holding_03_empresas_unidades_productivas_categorias.descripcion_unidades_productivas_categorias"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' :'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "concat(cat_holding_03_empresas_unidades_productivas_categorias.descripcion_unidades_productivas_categorias, ' :', cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas)";
$proto8["m_srcTableName"] = "box_cat_holding_03_empresas_unidades_productivas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "UP";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "cat_holding_03_empresas_unidades_productivas";
$proto14["m_srcTableName"] = "box_cat_holding_03_empresas_unidades_productivas";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto14["m_columns"][] = "cat_holding_03_empresas_registros_patronales_id";
$proto14["m_columns"][] = "cat_holding_02_empresas_id";
$proto14["m_columns"][] = "cat_holding_01_id";
$proto14["m_columns"][] = "time_stamp";
$proto14["m_columns"][] = "vigente";
$proto14["m_columns"][] = "capturista";
$proto14["m_columns"][] = "descripcion_unidades_productivas";
$proto14["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_categorias_id";
$proto14["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_categorias_mu_id";
$proto14["m_columns"][] = "Lat";
$proto14["m_columns"][] = "Lng";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "cat_holding_03_empresas_unidades_productivas";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "box_cat_holding_03_empresas_unidades_productivas";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
												$proto17=array();
$proto17["m_link"] = "SQLL_LEFTJOIN";
			$proto18=array();
$proto18["m_strName"] = "cat_holding_03_empresas_unidades_productivas_categorias";
$proto18["m_srcTableName"] = "box_cat_holding_03_empresas_unidades_productivas";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_categorias_id";
$proto18["m_columns"][] = "time_stamp";
$proto18["m_columns"][] = "vigente";
$proto18["m_columns"][] = "capturista";
$proto18["m_columns"][] = "descripcion_unidades_productivas_categorias";
$proto18["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_categorias_mu_id";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "LEFT OUTER JOIN cat_holding_03_empresas_unidades_productivas_categorias ON cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_id = cat_holding_03_empresas_unidades_productivas_categorias.cat_holding_03_empresas_unidades_productivas_categorias_id";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "box_cat_holding_03_empresas_unidades_productivas";
$proto19=array();
$proto19["m_sql"] = "cat_holding_03_empresas_unidades_productivas_categorias.cat_holding_03_empresas_unidades_productivas_categorias_id = cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_id";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_categorias_id",
	"m_strTable" => "cat_holding_03_empresas_unidades_productivas_categorias",
	"m_srcTableName" => "box_cat_holding_03_empresas_unidades_productivas"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "= cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_id";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_holding_03_empresas_unidades_productivas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_holding_03_empresas_unidades_productivas = createSqlQuery_box_cat_holding_03_empresas_unidades_productivas();


	
		;

		

$tdatabox_cat_holding_03_empresas_unidades_productivas[".sqlquery"] = $queryData_box_cat_holding_03_empresas_unidades_productivas;



$tdatabox_cat_holding_03_empresas_unidades_productivas[".hasEvents"] = false;

?>