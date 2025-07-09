<?php
$tdatacat_holding_03_empresas_unidades_productivas_box = array();
$tdatacat_holding_03_empresas_unidades_productivas_box[".searchableFields"] = array();
$tdatacat_holding_03_empresas_unidades_productivas_box[".ShortName"] = "cat_holding_03_empresas_unidades_productivas_box";
$tdatacat_holding_03_empresas_unidades_productivas_box[".OwnerID"] = "";
$tdatacat_holding_03_empresas_unidades_productivas_box[".OriginalTable"] = "cat_holding_03_empresas_unidades_productivas";


$tdatacat_holding_03_empresas_unidades_productivas_box[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_holding_03_empresas_unidades_productivas_box[".originalPagesByType"] = $tdatacat_holding_03_empresas_unidades_productivas_box[".pagesByType"];
$tdatacat_holding_03_empresas_unidades_productivas_box[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_holding_03_empresas_unidades_productivas_box[".originalPages"] = $tdatacat_holding_03_empresas_unidades_productivas_box[".pages"];
$tdatacat_holding_03_empresas_unidades_productivas_box[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_holding_03_empresas_unidades_productivas_box[".originalDefaultPages"] = $tdatacat_holding_03_empresas_unidades_productivas_box[".defaultPages"];

//	field labels
$fieldLabelscat_holding_03_empresas_unidades_productivas_box = array();
$fieldToolTipscat_holding_03_empresas_unidades_productivas_box = array();
$pageTitlescat_holding_03_empresas_unidades_productivas_box = array();
$placeHolderscat_holding_03_empresas_unidades_productivas_box = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_holding_03_empresas_unidades_productivas_box["Spanish"] = array();
	$fieldToolTipscat_holding_03_empresas_unidades_productivas_box["Spanish"] = array();
	$placeHolderscat_holding_03_empresas_unidades_productivas_box["Spanish"] = array();
	$pageTitlescat_holding_03_empresas_unidades_productivas_box["Spanish"] = array();
	$fieldLabelscat_holding_03_empresas_unidades_productivas_box["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "Id";
	$fieldToolTipscat_holding_03_empresas_unidades_productivas_box["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderscat_holding_03_empresas_unidades_productivas_box["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelscat_holding_03_empresas_unidades_productivas_box["Spanish"]["UP"] = "UP";
	$fieldToolTipscat_holding_03_empresas_unidades_productivas_box["Spanish"]["UP"] = "";
	$placeHolderscat_holding_03_empresas_unidades_productivas_box["Spanish"]["UP"] = "";
	if (count($fieldToolTipscat_holding_03_empresas_unidades_productivas_box["Spanish"]))
		$tdatacat_holding_03_empresas_unidades_productivas_box[".isUseToolTips"] = true;
}





$tdatacat_holding_03_empresas_unidades_productivas_box[".shortTableName"] = "cat_holding_03_empresas_unidades_productivas_box";
$tdatacat_holding_03_empresas_unidades_productivas_box[".nSecOptions"] = 0;

$tdatacat_holding_03_empresas_unidades_productivas_box[".mainTableOwnerID"] = "";
$tdatacat_holding_03_empresas_unidades_productivas_box[".entityType"] = 1;
$tdatacat_holding_03_empresas_unidades_productivas_box[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_holding_03_empresas_unidades_productivas_box[".strOriginalTableName"] = "cat_holding_03_empresas_unidades_productivas";

	



$tdatacat_holding_03_empresas_unidades_productivas_box[".showAddInPopup"] = false;

$tdatacat_holding_03_empresas_unidades_productivas_box[".showEditInPopup"] = false;

$tdatacat_holding_03_empresas_unidades_productivas_box[".showViewInPopup"] = false;

$tdatacat_holding_03_empresas_unidades_productivas_box[".listAjax"] = false;
//	temporary
//$tdatacat_holding_03_empresas_unidades_productivas_box[".listAjax"] = false;

	$tdatacat_holding_03_empresas_unidades_productivas_box[".audit"] = true;

	$tdatacat_holding_03_empresas_unidades_productivas_box[".locking"] = true;


$pages = $tdatacat_holding_03_empresas_unidades_productivas_box[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_holding_03_empresas_unidades_productivas_box[".edit"] = true;
	$tdatacat_holding_03_empresas_unidades_productivas_box[".afterEditAction"] = 1;
	$tdatacat_holding_03_empresas_unidades_productivas_box[".closePopupAfterEdit"] = 1;
	$tdatacat_holding_03_empresas_unidades_productivas_box[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_holding_03_empresas_unidades_productivas_box[".add"] = true;
$tdatacat_holding_03_empresas_unidades_productivas_box[".afterAddAction"] = 1;
$tdatacat_holding_03_empresas_unidades_productivas_box[".closePopupAfterAdd"] = 1;
$tdatacat_holding_03_empresas_unidades_productivas_box[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_holding_03_empresas_unidades_productivas_box[".list"] = true;
}



$tdatacat_holding_03_empresas_unidades_productivas_box[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_holding_03_empresas_unidades_productivas_box[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_holding_03_empresas_unidades_productivas_box[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_holding_03_empresas_unidades_productivas_box[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_holding_03_empresas_unidades_productivas_box[".printFriendly"] = true;
}



$tdatacat_holding_03_empresas_unidades_productivas_box[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_holding_03_empresas_unidades_productivas_box[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_holding_03_empresas_unidades_productivas_box[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_holding_03_empresas_unidades_productivas_box[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_holding_03_empresas_unidades_productivas_box[".ajaxCodeSnippetAdded"] = false;

$tdatacat_holding_03_empresas_unidades_productivas_box[".buttonsAdded"] = false;

$tdatacat_holding_03_empresas_unidades_productivas_box[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_holding_03_empresas_unidades_productivas_box[".isUseTimeForSearch"] = false;


$tdatacat_holding_03_empresas_unidades_productivas_box[".badgeColor"] = "B22222";


$tdatacat_holding_03_empresas_unidades_productivas_box[".allSearchFields"] = array();
$tdatacat_holding_03_empresas_unidades_productivas_box[".filterFields"] = array();
$tdatacat_holding_03_empresas_unidades_productivas_box[".requiredSearchFields"] = array();

$tdatacat_holding_03_empresas_unidades_productivas_box[".googleLikeFields"] = array();
$tdatacat_holding_03_empresas_unidades_productivas_box[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatacat_holding_03_empresas_unidades_productivas_box[".googleLikeFields"][] = "UP";



$tdatacat_holding_03_empresas_unidades_productivas_box[".tableType"] = "list";

$tdatacat_holding_03_empresas_unidades_productivas_box[".printerPageOrientation"] = 0;
$tdatacat_holding_03_empresas_unidades_productivas_box[".nPrinterPageScale"] = 100;

$tdatacat_holding_03_empresas_unidades_productivas_box[".nPrinterSplitRecords"] = 40;

$tdatacat_holding_03_empresas_unidades_productivas_box[".geocodingEnabled"] = false;





$tdatacat_holding_03_empresas_unidades_productivas_box[".isResizeColumns"] = true;





$tdatacat_holding_03_empresas_unidades_productivas_box[".pageSize"] = 20;

$tdatacat_holding_03_empresas_unidades_productivas_box[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_holding_03_empresas_unidades_productivas_box[".strOrderBy"] = $tstrOrderBy;

$tdatacat_holding_03_empresas_unidades_productivas_box[".orderindexes"] = array();


$tdatacat_holding_03_empresas_unidades_productivas_box[".sqlHead"] = "SELECT cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id,  concat(cat_holding_03_empresas_unidades_productivas_categorias.descripcion_unidades_productivas_categorias, ' :', cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas) AS UP";
$tdatacat_holding_03_empresas_unidades_productivas_box[".sqlFrom"] = "FROM cat_holding_03_empresas_unidades_productivas  LEFT OUTER JOIN cat_holding_03_empresas_unidades_productivas_categorias ON cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_id = cat_holding_03_empresas_unidades_productivas_categorias.cat_holding_03_empresas_unidades_productivas_categorias_id";
$tdatacat_holding_03_empresas_unidades_productivas_box[".sqlWhereExpr"] = "(cat_holding_03_empresas_unidades_productivas.vigente =1)";
$tdatacat_holding_03_empresas_unidades_productivas_box[".sqlTail"] = "";

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
$tdatacat_holding_03_empresas_unidades_productivas_box[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_holding_03_empresas_unidades_productivas_box[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_holding_03_empresas_unidades_productivas_box[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_holding_03_empresas_unidades_productivas_box[".highlightSearchResults"] = true;

$tableKeyscat_holding_03_empresas_unidades_productivas_box = array();
$tableKeyscat_holding_03_empresas_unidades_productivas_box[] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatacat_holding_03_empresas_unidades_productivas_box[".Keys"] = $tableKeyscat_holding_03_empresas_unidades_productivas_box;


$tdatacat_holding_03_empresas_unidades_productivas_box[".hideMobileList"] = array();




//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "cat_holding_03_empresas_unidades_productivas";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_unidades_productivas_box","cat_holding_03_empresas_unidades_productivas_id");
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


	$tdatacat_holding_03_empresas_unidades_productivas_box["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatacat_holding_03_empresas_unidades_productivas_box[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	UP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UP";
	$fdata["GoodName"] = "UP";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_unidades_productivas_box","UP");
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


	$tdatacat_holding_03_empresas_unidades_productivas_box["UP"] = $fdata;
		$tdatacat_holding_03_empresas_unidades_productivas_box[".searchableFields"][] = "UP";


$tables_data["cat_holding_03_empresas_unidades_productivas_box"]=&$tdatacat_holding_03_empresas_unidades_productivas_box;
$field_labels["cat_holding_03_empresas_unidades_productivas_box"] = &$fieldLabelscat_holding_03_empresas_unidades_productivas_box;
$fieldToolTips["cat_holding_03_empresas_unidades_productivas_box"] = &$fieldToolTipscat_holding_03_empresas_unidades_productivas_box;
$placeHolders["cat_holding_03_empresas_unidades_productivas_box"] = &$placeHolderscat_holding_03_empresas_unidades_productivas_box;
$page_titles["cat_holding_03_empresas_unidades_productivas_box"] = &$pageTitlescat_holding_03_empresas_unidades_productivas_box;


changeTextControlsToDate( "cat_holding_03_empresas_unidades_productivas_box" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_holding_03_empresas_unidades_productivas_box"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_holding_03_empresas_unidades_productivas_box"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_holding_03_empresas_unidades_productivas_box()
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
	"m_srcTableName" => "cat_holding_03_empresas_unidades_productivas_box"
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
	"m_srcTableName" => "cat_holding_03_empresas_unidades_productivas_box"
));

$proto6["m_sql"] = "cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id";
$proto6["m_srcTableName"] = "cat_holding_03_empresas_unidades_productivas_box";
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
$proto8["m_srcTableName"] = "cat_holding_03_empresas_unidades_productivas_box";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "UP";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "cat_holding_03_empresas_unidades_productivas";
$proto14["m_srcTableName"] = "cat_holding_03_empresas_unidades_productivas_box";
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
$proto13["m_srcTableName"] = "cat_holding_03_empresas_unidades_productivas_box";
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
$proto18["m_srcTableName"] = "cat_holding_03_empresas_unidades_productivas_box";
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
$proto17["m_srcTableName"] = "cat_holding_03_empresas_unidades_productivas_box";
$proto19=array();
$proto19["m_sql"] = "cat_holding_03_empresas_unidades_productivas_categorias.cat_holding_03_empresas_unidades_productivas_categorias_id = cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_categorias_id";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_categorias_id",
	"m_strTable" => "cat_holding_03_empresas_unidades_productivas_categorias",
	"m_srcTableName" => "cat_holding_03_empresas_unidades_productivas_box"
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
$proto0["m_srcTableName"]="cat_holding_03_empresas_unidades_productivas_box";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_holding_03_empresas_unidades_productivas_box = createSqlQuery_cat_holding_03_empresas_unidades_productivas_box();


	
		;

		

$tdatacat_holding_03_empresas_unidades_productivas_box[".sqlquery"] = $queryData_cat_holding_03_empresas_unidades_productivas_box;



$tdatacat_holding_03_empresas_unidades_productivas_box[".hasEvents"] = false;

?>