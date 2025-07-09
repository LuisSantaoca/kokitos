<?php
$tdatacat_nominas_01_generales_llaves_st = array();
$tdatacat_nominas_01_generales_llaves_st[".searchableFields"] = array();
$tdatacat_nominas_01_generales_llaves_st[".ShortName"] = "cat_nominas_01_generales_llaves_st";
$tdatacat_nominas_01_generales_llaves_st[".OwnerID"] = "";
$tdatacat_nominas_01_generales_llaves_st[".OriginalTable"] = "cat_nominas_01_generales";


$tdatacat_nominas_01_generales_llaves_st[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_01_generales_llaves_st[".originalPagesByType"] = $tdatacat_nominas_01_generales_llaves_st[".pagesByType"];
$tdatacat_nominas_01_generales_llaves_st[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_01_generales_llaves_st[".originalPages"] = $tdatacat_nominas_01_generales_llaves_st[".pages"];
$tdatacat_nominas_01_generales_llaves_st[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_nominas_01_generales_llaves_st[".originalDefaultPages"] = $tdatacat_nominas_01_generales_llaves_st[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_01_generales_llaves_st = array();
$fieldToolTipscat_nominas_01_generales_llaves_st = array();
$pageTitlescat_nominas_01_generales_llaves_st = array();
$placeHolderscat_nominas_01_generales_llaves_st = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_01_generales_llaves_st["Spanish"] = array();
	$fieldToolTipscat_nominas_01_generales_llaves_st["Spanish"] = array();
	$placeHolderscat_nominas_01_generales_llaves_st["Spanish"] = array();
	$pageTitlescat_nominas_01_generales_llaves_st["Spanish"] = array();
	$fieldLabelscat_nominas_01_generales_llaves_st["Spanish"]["cat_nominas_01_generales_uuid"] = "Uuid";
	$fieldToolTipscat_nominas_01_generales_llaves_st["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$placeHolderscat_nominas_01_generales_llaves_st["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	if (count($fieldToolTipscat_nominas_01_generales_llaves_st["Spanish"]))
		$tdatacat_nominas_01_generales_llaves_st[".isUseToolTips"] = true;
}





$tdatacat_nominas_01_generales_llaves_st[".shortTableName"] = "cat_nominas_01_generales_llaves_st";
$tdatacat_nominas_01_generales_llaves_st[".nSecOptions"] = 0;

$tdatacat_nominas_01_generales_llaves_st[".mainTableOwnerID"] = "";
$tdatacat_nominas_01_generales_llaves_st[".entityType"] = 1;
$tdatacat_nominas_01_generales_llaves_st[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_01_generales_llaves_st[".strOriginalTableName"] = "cat_nominas_01_generales";

	



$tdatacat_nominas_01_generales_llaves_st[".showAddInPopup"] = false;

$tdatacat_nominas_01_generales_llaves_st[".showEditInPopup"] = false;

$tdatacat_nominas_01_generales_llaves_st[".showViewInPopup"] = false;

$tdatacat_nominas_01_generales_llaves_st[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_01_generales_llaves_st[".listAjax"] = false;

	$tdatacat_nominas_01_generales_llaves_st[".audit"] = false;

	$tdatacat_nominas_01_generales_llaves_st[".locking"] = false;


$pages = $tdatacat_nominas_01_generales_llaves_st[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_01_generales_llaves_st[".edit"] = true;
	$tdatacat_nominas_01_generales_llaves_st[".afterEditAction"] = 1;
	$tdatacat_nominas_01_generales_llaves_st[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_01_generales_llaves_st[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_01_generales_llaves_st[".add"] = true;
$tdatacat_nominas_01_generales_llaves_st[".afterAddAction"] = 1;
$tdatacat_nominas_01_generales_llaves_st[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_01_generales_llaves_st[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_01_generales_llaves_st[".list"] = true;
}



$tdatacat_nominas_01_generales_llaves_st[".strSortControlSettingsJSON"] = "";

$tdatacat_nominas_01_generales_llaves_st[".strClickActionJSON"] = "{\"fields\":{\"capturista\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_nominas_01_generales_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_nominas_01_generales_uuid\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_nominas_periodicidad_mu_id\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"cat_nominas_02_actividades\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"cat_nominas_02_actividades\",\"url\":\"\"}},\"cat_nominas_uuid_semana\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_usuarios_licencias_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_usuarios_licencias_id1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"descripcion_nomina\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dia_de_inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fecha_de_inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fecha_de_termino\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"horas_semana_laboral\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"llave_ano_semana_nominas_uuid\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"cat_nominas_02_actividades\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"cat_nominas_02_actividades\",\"url\":\"\"}},\"time_stamp\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"vigente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"cat_nominas_02_actividades\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"cat_nominas_02_actividades\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_01_generales_llaves_st[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_01_generales_llaves_st[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_01_generales_llaves_st[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_01_generales_llaves_st[".printFriendly"] = true;
}



$tdatacat_nominas_01_generales_llaves_st[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_01_generales_llaves_st[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_01_generales_llaves_st[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_01_generales_llaves_st[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_01_generales_llaves_st[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_01_generales_llaves_st[".buttonsAdded"] = false;

$tdatacat_nominas_01_generales_llaves_st[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacat_nominas_01_generales_llaves_st[".isUseTimeForSearch"] = false;


$tdatacat_nominas_01_generales_llaves_st[".badgeColor"] = "4169E1";


$tdatacat_nominas_01_generales_llaves_st[".allSearchFields"] = array();
$tdatacat_nominas_01_generales_llaves_st[".filterFields"] = array();
$tdatacat_nominas_01_generales_llaves_st[".requiredSearchFields"] = array();

$tdatacat_nominas_01_generales_llaves_st[".googleLikeFields"] = array();
$tdatacat_nominas_01_generales_llaves_st[".googleLikeFields"][] = "cat_nominas_01_generales_uuid";



$tdatacat_nominas_01_generales_llaves_st[".tableType"] = "list";

$tdatacat_nominas_01_generales_llaves_st[".printerPageOrientation"] = 0;
$tdatacat_nominas_01_generales_llaves_st[".nPrinterPageScale"] = 100;

$tdatacat_nominas_01_generales_llaves_st[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_01_generales_llaves_st[".geocodingEnabled"] = false;





$tdatacat_nominas_01_generales_llaves_st[".isResizeColumns"] = true;





$tdatacat_nominas_01_generales_llaves_st[".pageSize"] = 20;

$tdatacat_nominas_01_generales_llaves_st[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_01_generales_llaves_st[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_01_generales_llaves_st[".orderindexes"] = array();


$tdatacat_nominas_01_generales_llaves_st[".sqlHead"] = "SELECT cat_nominas_01_generales.cat_nominas_01_generales_uuid";
$tdatacat_nominas_01_generales_llaves_st[".sqlFrom"] = "FROM cat_nominas_01_generales  LEFT OUTER JOIN cat_nominas_02_actividades ON cat_nominas_01_generales.cat_nominas_01_generales_uuid = cat_nominas_02_actividades.cat_nominas_01_generales_uuid";
$tdatacat_nominas_01_generales_llaves_st[".sqlWhereExpr"] = "";
$tdatacat_nominas_01_generales_llaves_st[".sqlTail"] = "";

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
$tdatacat_nominas_01_generales_llaves_st[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_01_generales_llaves_st[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_01_generales_llaves_st[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_01_generales_llaves_st[".highlightSearchResults"] = true;

$tableKeyscat_nominas_01_generales_llaves_st = array();
$tdatacat_nominas_01_generales_llaves_st[".Keys"] = $tableKeyscat_nominas_01_generales_llaves_st;


$tdatacat_nominas_01_generales_llaves_st[".hideMobileList"] = array();




//	cat_nominas_01_generales_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_nominas_01_generales_uuid";
	$fdata["GoodName"] = "cat_nominas_01_generales_uuid";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_01_generales_llaves_st","cat_nominas_01_generales_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_nominas_01_generales_uuid";

		$fdata["sourceSingle"] = "cat_nominas_01_generales_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_01_generales.cat_nominas_01_generales_uuid";

	
	
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


	$tdatacat_nominas_01_generales_llaves_st["cat_nominas_01_generales_uuid"] = $fdata;
		$tdatacat_nominas_01_generales_llaves_st[".searchableFields"][] = "cat_nominas_01_generales_uuid";


$tables_data["cat_nominas_01_generales_llaves_st"]=&$tdatacat_nominas_01_generales_llaves_st;
$field_labels["cat_nominas_01_generales_llaves_st"] = &$fieldLabelscat_nominas_01_generales_llaves_st;
$fieldToolTips["cat_nominas_01_generales_llaves_st"] = &$fieldToolTipscat_nominas_01_generales_llaves_st;
$placeHolders["cat_nominas_01_generales_llaves_st"] = &$placeHolderscat_nominas_01_generales_llaves_st;
$page_titles["cat_nominas_01_generales_llaves_st"] = &$pageTitlescat_nominas_01_generales_llaves_st;


changeTextControlsToDate( "cat_nominas_01_generales_llaves_st" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_01_generales_llaves_st"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_01_generales_llaves_st"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_01_generales_llaves_st()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_nominas_01_generales.cat_nominas_01_generales_uuid";
$proto0["m_strFrom"] = "FROM cat_nominas_01_generales  LEFT OUTER JOIN cat_nominas_02_actividades ON cat_nominas_01_generales.cat_nominas_01_generales_uuid = cat_nominas_02_actividades.cat_nominas_01_generales_uuid";
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
	"m_strName" => "cat_nominas_01_generales_uuid",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "cat_nominas_01_generales_llaves_st"
));

$proto6["m_sql"] = "cat_nominas_01_generales.cat_nominas_01_generales_uuid";
$proto6["m_srcTableName"] = "cat_nominas_01_generales_llaves_st";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "cat_nominas_01_generales";
$proto9["m_srcTableName"] = "cat_nominas_01_generales_llaves_st";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "vigente";
$proto9["m_columns"][] = "descripcion_nomina";
$proto9["m_columns"][] = "dia_de_inicio";
$proto9["m_columns"][] = "fecha_de_inicio";
$proto9["m_columns"][] = "fecha_de_termino";
$proto9["m_columns"][] = "cat_nominas_01_generales_id";
$proto9["m_columns"][] = "capturista";
$proto9["m_columns"][] = "time_stamp";
$proto9["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto9["m_columns"][] = "cat_nominas_periodicidad_mu_id";
$proto9["m_columns"][] = "horas_semana_laboral";
$proto9["m_columns"][] = "cat_nominas_uuid_semana";
$proto9["m_columns"][] = "cat_usuarios_licencias_id";
$proto9["m_columns"][] = "llave_ano_semana_nominas_uuid";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "cat_nominas_01_generales";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "cat_nominas_01_generales_llaves_st";
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
												$proto12=array();
$proto12["m_link"] = "SQLL_LEFTJOIN";
			$proto13=array();
$proto13["m_strName"] = "cat_nominas_02_actividades";
$proto13["m_srcTableName"] = "cat_nominas_01_generales_llaves_st";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "vigente";
$proto13["m_columns"][] = "cat_actividades_especificas_id";
$proto13["m_columns"][] = "cat_nominas_02_actividades_id";
$proto13["m_columns"][] = "capturista";
$proto13["m_columns"][] = "time_stamp";
$proto13["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto13["m_columns"][] = "cat_actividades_alcance_mu_id";
$proto13["m_columns"][] = "limite_inferior";
$proto13["m_columns"][] = "limite_superior";
$proto13["m_columns"][] = "costo_bruto_primera";
$proto13["m_columns"][] = "costo_bruto_segunda";
$proto13["m_columns"][] = "cat_nominas_conceptos_id";
$proto13["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto13["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto13["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto13["m_columns"][] = "llave_up_lote_actesp_prod_uuid";
$proto13["m_columns"][] = "llave_up_lote_actesp_prod";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "LEFT OUTER JOIN cat_nominas_02_actividades ON cat_nominas_01_generales.cat_nominas_01_generales_uuid = cat_nominas_02_actividades.cat_nominas_01_generales_uuid";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "cat_nominas_01_generales_llaves_st";
$proto14=array();
$proto14["m_sql"] = "cat_nominas_02_actividades.cat_nominas_01_generales_uuid = cat_nominas_01_generales.cat_nominas_01_generales_uuid";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_nominas_01_generales_uuid",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_01_generales_llaves_st"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "= cat_nominas_01_generales.cat_nominas_01_generales_uuid";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_nominas_01_generales_llaves_st";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_01_generales_llaves_st = createSqlQuery_cat_nominas_01_generales_llaves_st();


	
		;

	

$tdatacat_nominas_01_generales_llaves_st[".sqlquery"] = $queryData_cat_nominas_01_generales_llaves_st;



include_once(getabspath("include/cat_nominas_01_generales_llaves_st_events.php"));
$tdatacat_nominas_01_generales_llaves_st[".hasEvents"] = true;

?>