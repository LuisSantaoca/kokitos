<?php
$tdatazz_script_query = array();
$tdatazz_script_query[".searchableFields"] = array();
$tdatazz_script_query[".ShortName"] = "zz_script_query";
$tdatazz_script_query[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatazz_script_query[".OriginalTable"] = "cat_actividades";


$tdatazz_script_query[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatazz_script_query[".originalPagesByType"] = $tdatazz_script_query[".pagesByType"];
$tdatazz_script_query[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatazz_script_query[".originalPages"] = $tdatazz_script_query[".pages"];
$tdatazz_script_query[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatazz_script_query[".originalDefaultPages"] = $tdatazz_script_query[".defaultPages"];

//	field labels
$fieldLabelszz_script_query = array();
$fieldToolTipszz_script_query = array();
$pageTitleszz_script_query = array();
$placeHolderszz_script_query = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelszz_script_query["Spanish"] = array();
	$fieldToolTipszz_script_query["Spanish"] = array();
	$placeHolderszz_script_query["Spanish"] = array();
	$pageTitleszz_script_query["Spanish"] = array();
	$fieldLabelszz_script_query["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "Cat Holding 03 Empresas Unidades Productivas Id";
	$fieldToolTipszz_script_query["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderszz_script_query["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelszz_script_query["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "Cat Holding 04 Unidades Productivas Lotes Id";
	$fieldToolTipszz_script_query["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHolderszz_script_query["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$fieldLabelszz_script_query["Spanish"]["lote"] = "Lote";
	$fieldToolTipszz_script_query["Spanish"]["lote"] = "";
	$placeHolderszz_script_query["Spanish"]["lote"] = "";
	$fieldLabelszz_script_query["Spanish"]["hectareas"] = "Hectareas";
	$fieldToolTipszz_script_query["Spanish"]["hectareas"] = "";
	$placeHolderszz_script_query["Spanish"]["hectareas"] = "";
	if (count($fieldToolTipszz_script_query["Spanish"]))
		$tdatazz_script_query[".isUseToolTips"] = true;
}





$tdatazz_script_query[".shortTableName"] = "zz_script_query";
$tdatazz_script_query[".nSecOptions"] = 0;

$tdatazz_script_query[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatazz_script_query[".entityType"] = 1;
$tdatazz_script_query[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatazz_script_query[".strOriginalTableName"] = "cat_actividades";

	



$tdatazz_script_query[".showAddInPopup"] = false;

$tdatazz_script_query[".showEditInPopup"] = false;

$tdatazz_script_query[".showViewInPopup"] = false;

$tdatazz_script_query[".listAjax"] = false;
//	temporary
//$tdatazz_script_query[".listAjax"] = false;

	$tdatazz_script_query[".audit"] = true;

	$tdatazz_script_query[".locking"] = true;


$pages = $tdatazz_script_query[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatazz_script_query[".edit"] = true;
	$tdatazz_script_query[".afterEditAction"] = 1;
	$tdatazz_script_query[".closePopupAfterEdit"] = 1;
	$tdatazz_script_query[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatazz_script_query[".add"] = true;
$tdatazz_script_query[".afterAddAction"] = 1;
$tdatazz_script_query[".closePopupAfterAdd"] = 1;
$tdatazz_script_query[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatazz_script_query[".list"] = true;
}



$tdatazz_script_query[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatazz_script_query[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatazz_script_query[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatazz_script_query[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatazz_script_query[".printFriendly"] = true;
}



$tdatazz_script_query[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatazz_script_query[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatazz_script_query[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatazz_script_query[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatazz_script_query[".ajaxCodeSnippetAdded"] = false;

$tdatazz_script_query[".buttonsAdded"] = false;

$tdatazz_script_query[".addPageEvents"] = false;

// use timepicker for search panel
$tdatazz_script_query[".isUseTimeForSearch"] = false;


$tdatazz_script_query[".badgeColor"] = "6493EA";


$tdatazz_script_query[".allSearchFields"] = array();
$tdatazz_script_query[".filterFields"] = array();
$tdatazz_script_query[".requiredSearchFields"] = array();

$tdatazz_script_query[".googleLikeFields"] = array();
$tdatazz_script_query[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatazz_script_query[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatazz_script_query[".googleLikeFields"][] = "lote";
$tdatazz_script_query[".googleLikeFields"][] = "hectareas";



$tdatazz_script_query[".tableType"] = "list";

$tdatazz_script_query[".printerPageOrientation"] = 0;
$tdatazz_script_query[".nPrinterPageScale"] = 100;

$tdatazz_script_query[".nPrinterSplitRecords"] = 40;

$tdatazz_script_query[".geocodingEnabled"] = false;





$tdatazz_script_query[".isResizeColumns"] = true;





$tdatazz_script_query[".pageSize"] = 20;

$tdatazz_script_query[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatazz_script_query[".strOrderBy"] = $tstrOrderBy;

$tdatazz_script_query[".orderindexes"] = array();


$tdatazz_script_query[".sqlHead"] = "SELECT cat_holding_04_unidades_productivas_lotes.cat_holding_03_empresas_unidades_productivas_id,  cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id,  cat_holding_04_unidades_productivas_lotes.descripcion_lote AS lote,  cat_holding_04a_unidades_productivas_lotes_historico.hectareas";
$tdatazz_script_query[".sqlFrom"] = "FROM cat_holding_04_unidades_productivas_lotes  LEFT OUTER JOIN cat_holding_04a_unidades_productivas_lotes_historico ON cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04a_unidades_productivas_lotes_historico.cat_holding_04_unidades_productivas_lotes_id";
$tdatazz_script_query[".sqlWhereExpr"] = "(cat_holding_04_unidades_productivas_lotes.vigente =1)";
$tdatazz_script_query[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios.cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatazz_script_query[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatazz_script_query[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatazz_script_query[".arrGroupsPerPage"] = $arrGPP;

$tdatazz_script_query[".highlightSearchResults"] = true;

$tableKeyszz_script_query = array();
$tdatazz_script_query[".Keys"] = $tableKeyszz_script_query;


$tdatazz_script_query[".hideMobileList"] = array();




//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "cat_holding_04_unidades_productivas_lotes";
	$fdata["Label"] = GetFieldLabel("zz_script_query","cat_holding_03_empresas_unidades_productivas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_03_empresas_unidades_productivas_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_04_unidades_productivas_lotes.cat_holding_03_empresas_unidades_productivas_id";

	
	
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


	$tdatazz_script_query["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatazz_script_query[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "cat_holding_04_unidades_productivas_lotes";
	$fdata["Label"] = GetFieldLabel("zz_script_query","cat_holding_04_unidades_productivas_lotes_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_holding_04_unidades_productivas_lotes_id";

	
	
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


	$tdatazz_script_query["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatazz_script_query[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
//	lote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lote";
	$fdata["GoodName"] = "lote";
	$fdata["ownerTable"] = "cat_holding_04_unidades_productivas_lotes";
	$fdata["Label"] = GetFieldLabel("zz_script_query","lote");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_lote";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_04_unidades_productivas_lotes.descripcion_lote";

	
	
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


	$tdatazz_script_query["lote"] = $fdata;
		$tdatazz_script_query[".searchableFields"][] = "lote";
//	hectareas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hectareas";
	$fdata["GoodName"] = "hectareas";
	$fdata["ownerTable"] = "cat_holding_04a_unidades_productivas_lotes_historico";
	$fdata["Label"] = GetFieldLabel("zz_script_query","hectareas");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "hectareas";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_04a_unidades_productivas_lotes_historico.hectareas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatazz_script_query["hectareas"] = $fdata;
		$tdatazz_script_query[".searchableFields"][] = "hectareas";


$tables_data["zz_script query"]=&$tdatazz_script_query;
$field_labels["zz_script_query"] = &$fieldLabelszz_script_query;
$fieldToolTips["zz_script_query"] = &$fieldToolTipszz_script_query;
$placeHolders["zz_script_query"] = &$placeHolderszz_script_query;
$page_titles["zz_script_query"] = &$pageTitleszz_script_query;


changeTextControlsToDate( "zz_script query" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["zz_script query"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["zz_script query"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_zz_script_query()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_holding_04_unidades_productivas_lotes.cat_holding_03_empresas_unidades_productivas_id,  cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id,  cat_holding_04_unidades_productivas_lotes.descripcion_lote AS lote,  cat_holding_04a_unidades_productivas_lotes_historico.hectareas";
$proto0["m_strFrom"] = "FROM cat_holding_04_unidades_productivas_lotes  LEFT OUTER JOIN cat_holding_04a_unidades_productivas_lotes_historico ON cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04a_unidades_productivas_lotes_historico.cat_holding_04_unidades_productivas_lotes_id";
$proto0["m_strWhere"] = "(cat_holding_04_unidades_productivas_lotes.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_holding_04_unidades_productivas_lotes.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_holding_04_unidades_productivas_lotes",
	"m_srcTableName" => "zz_script query"
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
	"m_strTable" => "cat_holding_04_unidades_productivas_lotes",
	"m_srcTableName" => "zz_script query"
));

$proto6["m_sql"] = "cat_holding_04_unidades_productivas_lotes.cat_holding_03_empresas_unidades_productivas_id";
$proto6["m_srcTableName"] = "zz_script query";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "cat_holding_04_unidades_productivas_lotes",
	"m_srcTableName" => "zz_script query"
));

$proto8["m_sql"] = "cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto8["m_srcTableName"] = "zz_script query";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_lote",
	"m_strTable" => "cat_holding_04_unidades_productivas_lotes",
	"m_srcTableName" => "zz_script query"
));

$proto10["m_sql"] = "cat_holding_04_unidades_productivas_lotes.descripcion_lote";
$proto10["m_srcTableName"] = "zz_script query";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "lote";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hectareas",
	"m_strTable" => "cat_holding_04a_unidades_productivas_lotes_historico",
	"m_srcTableName" => "zz_script query"
));

$proto12["m_sql"] = "cat_holding_04a_unidades_productivas_lotes_historico.hectareas";
$proto12["m_srcTableName"] = "zz_script query";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "cat_holding_04_unidades_productivas_lotes";
$proto15["m_srcTableName"] = "zz_script query";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto15["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto15["m_columns"][] = "cat_holding_03_empresas_registros_patronales_id";
$proto15["m_columns"][] = "cat_holding_02_empresas_id";
$proto15["m_columns"][] = "cat_holding_01_id";
$proto15["m_columns"][] = "time_stamp";
$proto15["m_columns"][] = "vigente";
$proto15["m_columns"][] = "capturista";
$proto15["m_columns"][] = "descripcion_lote";
$proto15["m_columns"][] = "Lat";
$proto15["m_columns"][] = "Lng";
$proto15["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_categorias_id";
$proto15["m_columns"][] = "cat_holding_03_empresas_up_group_predios_id";
$proto15["m_columns"][] = "cat_produccion_temporadas_id";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "cat_holding_04_unidades_productivas_lotes";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "zz_script query";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
												$proto18=array();
$proto18["m_link"] = "SQLL_LEFTJOIN";
			$proto19=array();
$proto19["m_strName"] = "cat_holding_04a_unidades_productivas_lotes_historico";
$proto19["m_srcTableName"] = "zz_script query";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_holding_04a_unidades_productivas_lotes_historico_id";
$proto19["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto19["m_columns"][] = "cat_produccion_cultivos_01_variedades_id";
$proto19["m_columns"][] = "hectareas";
$proto19["m_columns"][] = "acres";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_lote";
$proto19["m_columns"][] = "Lat";
$proto19["m_columns"][] = "Lng";
$proto19["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto19["m_columns"][] = "llave";
$proto19["m_columns"][] = "surcos";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "LEFT OUTER JOIN cat_holding_04a_unidades_productivas_lotes_historico ON cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04a_unidades_productivas_lotes_historico.cat_holding_04_unidades_productivas_lotes_id";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "zz_script query";
$proto20=array();
$proto20["m_sql"] = "cat_holding_04a_unidades_productivas_lotes_historico.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "cat_holding_04a_unidades_productivas_lotes_historico",
	"m_srcTableName" => "zz_script query"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="zz_script query";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_zz_script_query = createSqlQuery_zz_script_query();


	
		;

				

$tdatazz_script_query[".sqlquery"] = $queryData_zz_script_query;



$tdatazz_script_query[".hasEvents"] = false;

?>