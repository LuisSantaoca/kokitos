<?php
$tdatabox_lotes_root = array();
$tdatabox_lotes_root[".searchableFields"] = array();
$tdatabox_lotes_root[".ShortName"] = "box_lotes_root";
$tdatabox_lotes_root[".OwnerID"] = "";
$tdatabox_lotes_root[".OriginalTable"] = "cat_holding_04_unidades_productivas_lotes";


$tdatabox_lotes_root[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatabox_lotes_root[".originalPagesByType"] = $tdatabox_lotes_root[".pagesByType"];
$tdatabox_lotes_root[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatabox_lotes_root[".originalPages"] = $tdatabox_lotes_root[".pages"];
$tdatabox_lotes_root[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatabox_lotes_root[".originalDefaultPages"] = $tdatabox_lotes_root[".defaultPages"];

//	field labels
$fieldLabelsbox_lotes_root = array();
$fieldToolTipsbox_lotes_root = array();
$pageTitlesbox_lotes_root = array();
$placeHoldersbox_lotes_root = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_lotes_root["Spanish"] = array();
	$fieldToolTipsbox_lotes_root["Spanish"] = array();
	$placeHoldersbox_lotes_root["Spanish"] = array();
	$pageTitlesbox_lotes_root["Spanish"] = array();
	$fieldLabelsbox_lotes_root["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = " Id";
	$fieldToolTipsbox_lotes_root["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHoldersbox_lotes_root["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$fieldLabelsbox_lotes_root["Spanish"]["lote"] = "Lote";
	$fieldToolTipsbox_lotes_root["Spanish"]["lote"] = "";
	$placeHoldersbox_lotes_root["Spanish"]["lote"] = "";
	if (count($fieldToolTipsbox_lotes_root["Spanish"]))
		$tdatabox_lotes_root[".isUseToolTips"] = true;
}





$tdatabox_lotes_root[".shortTableName"] = "box_lotes_root";
$tdatabox_lotes_root[".nSecOptions"] = 0;

$tdatabox_lotes_root[".mainTableOwnerID"] = "";
$tdatabox_lotes_root[".entityType"] = 1;
$tdatabox_lotes_root[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_lotes_root[".strOriginalTableName"] = "cat_holding_04_unidades_productivas_lotes";

	



$tdatabox_lotes_root[".showAddInPopup"] = false;

$tdatabox_lotes_root[".showEditInPopup"] = false;

$tdatabox_lotes_root[".showViewInPopup"] = false;

$tdatabox_lotes_root[".listAjax"] = false;
//	temporary
//$tdatabox_lotes_root[".listAjax"] = false;

	$tdatabox_lotes_root[".audit"] = true;

	$tdatabox_lotes_root[".locking"] = true;


$pages = $tdatabox_lotes_root[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_lotes_root[".edit"] = true;
	$tdatabox_lotes_root[".afterEditAction"] = 1;
	$tdatabox_lotes_root[".closePopupAfterEdit"] = 1;
	$tdatabox_lotes_root[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_lotes_root[".add"] = true;
$tdatabox_lotes_root[".afterAddAction"] = 1;
$tdatabox_lotes_root[".closePopupAfterAdd"] = 1;
$tdatabox_lotes_root[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_lotes_root[".list"] = true;
}



$tdatabox_lotes_root[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_lotes_root[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_lotes_root[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_lotes_root[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_lotes_root[".printFriendly"] = true;
}



$tdatabox_lotes_root[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_lotes_root[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_lotes_root[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_lotes_root[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_lotes_root[".ajaxCodeSnippetAdded"] = false;

$tdatabox_lotes_root[".buttonsAdded"] = false;

$tdatabox_lotes_root[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_lotes_root[".isUseTimeForSearch"] = false;


$tdatabox_lotes_root[".badgeColor"] = "4682B4";


$tdatabox_lotes_root[".allSearchFields"] = array();
$tdatabox_lotes_root[".filterFields"] = array();
$tdatabox_lotes_root[".requiredSearchFields"] = array();

$tdatabox_lotes_root[".googleLikeFields"] = array();
$tdatabox_lotes_root[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatabox_lotes_root[".googleLikeFields"][] = "lote";



$tdatabox_lotes_root[".tableType"] = "list";

$tdatabox_lotes_root[".printerPageOrientation"] = 0;
$tdatabox_lotes_root[".nPrinterPageScale"] = 100;

$tdatabox_lotes_root[".nPrinterSplitRecords"] = 40;

$tdatabox_lotes_root[".geocodingEnabled"] = false;





$tdatabox_lotes_root[".isResizeColumns"] = true;





$tdatabox_lotes_root[".pageSize"] = 20;

$tdatabox_lotes_root[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_lotes_root[".strOrderBy"] = $tstrOrderBy;

$tdatabox_lotes_root[".orderindexes"] = array();


$tdatabox_lotes_root[".sqlHead"] = "SELECT cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id,  concat(cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas,'-',cat_holding_04_unidades_productivas_lotes.descripcion_lote)as lote";
$tdatabox_lotes_root[".sqlFrom"] = "FROM cat_holding_04_unidades_productivas_lotes  LEFT OUTER JOIN cat_holding_03_empresas_unidades_productivas ON cat_holding_04_unidades_productivas_lotes.cat_holding_03_empresas_unidades_productivas_id = cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id";
$tdatabox_lotes_root[".sqlWhereExpr"] = "";
$tdatabox_lotes_root[".sqlTail"] = "";

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
$tdatabox_lotes_root[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_lotes_root[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_lotes_root[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_lotes_root[".highlightSearchResults"] = true;

$tableKeysbox_lotes_root = array();
$tableKeysbox_lotes_root[] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatabox_lotes_root[".Keys"] = $tableKeysbox_lotes_root;


$tdatabox_lotes_root[".hideMobileList"] = array();




//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "cat_holding_04_unidades_productivas_lotes";
	$fdata["Label"] = GetFieldLabel("box_lotes_root","cat_holding_04_unidades_productivas_lotes_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_holding_04_unidades_productivas_lotes_id";

		$fdata["sourceSingle"] = "cat_holding_04_unidades_productivas_lotes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id";

	
	
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


	$tdatabox_lotes_root["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatabox_lotes_root[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
//	lote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lote";
	$fdata["GoodName"] = "lote";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_lotes_root","lote");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lote";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas,'-',cat_holding_04_unidades_productivas_lotes.descripcion_lote)";

	
	
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


	$tdatabox_lotes_root["lote"] = $fdata;
		$tdatabox_lotes_root[".searchableFields"][] = "lote";


$tables_data["box_lotes_root"]=&$tdatabox_lotes_root;
$field_labels["box_lotes_root"] = &$fieldLabelsbox_lotes_root;
$fieldToolTips["box_lotes_root"] = &$fieldToolTipsbox_lotes_root;
$placeHolders["box_lotes_root"] = &$placeHoldersbox_lotes_root;
$page_titles["box_lotes_root"] = &$pageTitlesbox_lotes_root;


changeTextControlsToDate( "box_lotes_root" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_lotes_root"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_lotes_root"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_lotes_root()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id,  concat(cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas,'-',cat_holding_04_unidades_productivas_lotes.descripcion_lote)as lote";
$proto0["m_strFrom"] = "FROM cat_holding_04_unidades_productivas_lotes  LEFT OUTER JOIN cat_holding_03_empresas_unidades_productivas ON cat_holding_04_unidades_productivas_lotes.cat_holding_03_empresas_unidades_productivas_id = cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id";
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
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "cat_holding_04_unidades_productivas_lotes",
	"m_srcTableName" => "box_lotes_root"
));

$proto6["m_sql"] = "cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto6["m_srcTableName"] = "box_lotes_root";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_holding_04_unidades_productivas_lotes.descripcion_lote"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "concat(cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas,'-',cat_holding_04_unidades_productivas_lotes.descripcion_lote)";
$proto8["m_srcTableName"] = "box_lotes_root";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "lote";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "cat_holding_04_unidades_productivas_lotes";
$proto14["m_srcTableName"] = "box_lotes_root";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto14["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto14["m_columns"][] = "cat_holding_03_empresas_registros_patronales_id";
$proto14["m_columns"][] = "cat_holding_02_empresas_id";
$proto14["m_columns"][] = "cat_holding_01_id";
$proto14["m_columns"][] = "time_stamp";
$proto14["m_columns"][] = "vigente";
$proto14["m_columns"][] = "capturista";
$proto14["m_columns"][] = "descripcion_lote";
$proto14["m_columns"][] = "Lat";
$proto14["m_columns"][] = "Lng";
$proto14["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_categorias_id";
$proto14["m_columns"][] = "cat_holding_03_empresas_up_group_predios_id";
$proto14["m_columns"][] = "cat_produccion_temporadas_id";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "cat_holding_04_unidades_productivas_lotes";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "box_lotes_root";
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
$proto18["m_strName"] = "cat_holding_03_empresas_unidades_productivas";
$proto18["m_srcTableName"] = "box_lotes_root";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto18["m_columns"][] = "cat_holding_03_empresas_registros_patronales_id";
$proto18["m_columns"][] = "cat_holding_02_empresas_id";
$proto18["m_columns"][] = "cat_holding_01_id";
$proto18["m_columns"][] = "time_stamp";
$proto18["m_columns"][] = "vigente";
$proto18["m_columns"][] = "capturista";
$proto18["m_columns"][] = "descripcion_unidades_productivas";
$proto18["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_categorias_id";
$proto18["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_categorias_mu_id";
$proto18["m_columns"][] = "Lat";
$proto18["m_columns"][] = "Lng";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "LEFT OUTER JOIN cat_holding_03_empresas_unidades_productivas ON cat_holding_04_unidades_productivas_lotes.cat_holding_03_empresas_unidades_productivas_id = cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "box_lotes_root";
$proto19=array();
$proto19["m_sql"] = "cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id = cat_holding_04_unidades_productivas_lotes.cat_holding_03_empresas_unidades_productivas_id";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "cat_holding_03_empresas_unidades_productivas",
	"m_srcTableName" => "box_lotes_root"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "= cat_holding_04_unidades_productivas_lotes.cat_holding_03_empresas_unidades_productivas_id";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_lotes_root";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_lotes_root = createSqlQuery_box_lotes_root();


	
		;

		

$tdatabox_lotes_root[".sqlquery"] = $queryData_box_lotes_root;



$tdatabox_lotes_root[".hasEvents"] = false;

?>