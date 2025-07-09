<?php
$tdatacon_licencias_filtro = array();
$tdatacon_licencias_filtro[".searchableFields"] = array();
$tdatacon_licencias_filtro[".ShortName"] = "con_licencias_filtro";
$tdatacon_licencias_filtro[".OwnerID"] = "capturista";
$tdatacon_licencias_filtro[".OriginalTable"] = "cat_usuarios";


$tdatacon_licencias_filtro[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacon_licencias_filtro[".originalPagesByType"] = $tdatacon_licencias_filtro[".pagesByType"];
$tdatacon_licencias_filtro[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacon_licencias_filtro[".originalPages"] = $tdatacon_licencias_filtro[".pages"];
$tdatacon_licencias_filtro[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacon_licencias_filtro[".originalDefaultPages"] = $tdatacon_licencias_filtro[".defaultPages"];

//	field labels
$fieldLabelscon_licencias_filtro = array();
$fieldToolTipscon_licencias_filtro = array();
$pageTitlescon_licencias_filtro = array();
$placeHolderscon_licencias_filtro = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscon_licencias_filtro["Spanish"] = array();
	$fieldToolTipscon_licencias_filtro["Spanish"] = array();
	$placeHolderscon_licencias_filtro["Spanish"] = array();
	$pageTitlescon_licencias_filtro["Spanish"] = array();
	$fieldLabelscon_licencias_filtro["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscon_licencias_filtro["Spanish"]["capturista"] = "";
	$placeHolderscon_licencias_filtro["Spanish"]["capturista"] = "";
	$fieldLabelscon_licencias_filtro["Spanish"]["licencia"] = "Licencia";
	$fieldToolTipscon_licencias_filtro["Spanish"]["licencia"] = "";
	$placeHolderscon_licencias_filtro["Spanish"]["licencia"] = "";
	if (count($fieldToolTipscon_licencias_filtro["Spanish"]))
		$tdatacon_licencias_filtro[".isUseToolTips"] = true;
}





$tdatacon_licencias_filtro[".shortTableName"] = "con_licencias_filtro";
$tdatacon_licencias_filtro[".nSecOptions"] = 0;

$tdatacon_licencias_filtro[".mainTableOwnerID"] = "capturista";
$tdatacon_licencias_filtro[".entityType"] = 1;
$tdatacon_licencias_filtro[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacon_licencias_filtro[".strOriginalTableName"] = "cat_usuarios";

	



$tdatacon_licencias_filtro[".showAddInPopup"] = false;

$tdatacon_licencias_filtro[".showEditInPopup"] = false;

$tdatacon_licencias_filtro[".showViewInPopup"] = false;

$tdatacon_licencias_filtro[".listAjax"] = false;
//	temporary
//$tdatacon_licencias_filtro[".listAjax"] = false;

	$tdatacon_licencias_filtro[".audit"] = true;

	$tdatacon_licencias_filtro[".locking"] = true;


$pages = $tdatacon_licencias_filtro[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacon_licencias_filtro[".edit"] = true;
	$tdatacon_licencias_filtro[".afterEditAction"] = 1;
	$tdatacon_licencias_filtro[".closePopupAfterEdit"] = 1;
	$tdatacon_licencias_filtro[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacon_licencias_filtro[".add"] = true;
$tdatacon_licencias_filtro[".afterAddAction"] = 1;
$tdatacon_licencias_filtro[".closePopupAfterAdd"] = 1;
$tdatacon_licencias_filtro[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacon_licencias_filtro[".list"] = true;
}



$tdatacon_licencias_filtro[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacon_licencias_filtro[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacon_licencias_filtro[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacon_licencias_filtro[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacon_licencias_filtro[".printFriendly"] = true;
}



$tdatacon_licencias_filtro[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacon_licencias_filtro[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacon_licencias_filtro[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacon_licencias_filtro[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacon_licencias_filtro[".ajaxCodeSnippetAdded"] = false;

$tdatacon_licencias_filtro[".buttonsAdded"] = false;

$tdatacon_licencias_filtro[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacon_licencias_filtro[".isUseTimeForSearch"] = false;


$tdatacon_licencias_filtro[".badgeColor"] = "E67349";


$tdatacon_licencias_filtro[".allSearchFields"] = array();
$tdatacon_licencias_filtro[".filterFields"] = array();
$tdatacon_licencias_filtro[".requiredSearchFields"] = array();

$tdatacon_licencias_filtro[".googleLikeFields"] = array();
$tdatacon_licencias_filtro[".googleLikeFields"][] = "capturista";
$tdatacon_licencias_filtro[".googleLikeFields"][] = "licencia";



$tdatacon_licencias_filtro[".tableType"] = "list";

$tdatacon_licencias_filtro[".printerPageOrientation"] = 0;
$tdatacon_licencias_filtro[".nPrinterPageScale"] = 100;

$tdatacon_licencias_filtro[".nPrinterSplitRecords"] = 40;

$tdatacon_licencias_filtro[".geocodingEnabled"] = false;





$tdatacon_licencias_filtro[".isResizeColumns"] = true;





$tdatacon_licencias_filtro[".pageSize"] = 20;

$tdatacon_licencias_filtro[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacon_licencias_filtro[".strOrderBy"] = $tstrOrderBy;

$tdatacon_licencias_filtro[".orderindexes"] = array();


$tdatacon_licencias_filtro[".sqlHead"] = "SELECT cat_usuarios.usuario AS capturista,  cat_usuarios.cat_usuarios_licencias_id AS licencia";
$tdatacon_licencias_filtro[".sqlFrom"] = "FROM cat_usuarios  LEFT OUTER JOIN cat_usuarios_licencias ON cat_usuarios.cat_usuarios_licencias_id = cat_usuarios_licencias.cat_usuarios_licencias_id";
$tdatacon_licencias_filtro[".sqlWhereExpr"] = "(cat_usuarios.cat_usuarios_licencias_id is not null) AND (cat_usuarios.vigente =1)";
$tdatacon_licencias_filtro[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacon_licencias_filtro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacon_licencias_filtro[".arrGroupsPerPage"] = $arrGPP;

$tdatacon_licencias_filtro[".highlightSearchResults"] = true;

$tableKeyscon_licencias_filtro = array();
$tdatacon_licencias_filtro[".Keys"] = $tableKeyscon_licencias_filtro;


$tdatacon_licencias_filtro[".hideMobileList"] = array();




//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("con_licencias_filtro","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios.usuario";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacon_licencias_filtro["capturista"] = $fdata;
		$tdatacon_licencias_filtro[".searchableFields"][] = "capturista";
//	licencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "licencia";
	$fdata["GoodName"] = "licencia";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("con_licencias_filtro","licencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios.cat_usuarios_licencias_id";

	
	
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


	$tdatacon_licencias_filtro["licencia"] = $fdata;
		$tdatacon_licencias_filtro[".searchableFields"][] = "licencia";


$tables_data["con_licencias_filtro"]=&$tdatacon_licencias_filtro;
$field_labels["con_licencias_filtro"] = &$fieldLabelscon_licencias_filtro;
$fieldToolTips["con_licencias_filtro"] = &$fieldToolTipscon_licencias_filtro;
$placeHolders["con_licencias_filtro"] = &$placeHolderscon_licencias_filtro;
$page_titles["con_licencias_filtro"] = &$pageTitlescon_licencias_filtro;


changeTextControlsToDate( "con_licencias_filtro" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["con_licencias_filtro"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["con_licencias_filtro"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_con_licencias_filtro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_usuarios.usuario AS capturista,  cat_usuarios.cat_usuarios_licencias_id AS licencia";
$proto0["m_strFrom"] = "FROM cat_usuarios  LEFT OUTER JOIN cat_usuarios_licencias ON cat_usuarios.cat_usuarios_licencias_id = cat_usuarios_licencias.cat_usuarios_licencias_id";
$proto0["m_strWhere"] = "(cat_usuarios.cat_usuarios_licencias_id is not null) AND (cat_usuarios.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(cat_usuarios.cat_usuarios_licencias_id is not null) AND (cat_usuarios.vigente =1)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(cat_usuarios.cat_usuarios_licencias_id is not null) AND (cat_usuarios.vigente =1)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id is not null";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "con_licencias_filtro"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "is not null";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "cat_usuarios.vigente =1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "con_licencias_filtro"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "con_licencias_filtro"
));

$proto10["m_sql"] = "cat_usuarios.usuario";
$proto10["m_srcTableName"] = "con_licencias_filtro";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "capturista";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "con_licencias_filtro"
));

$proto12["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto12["m_srcTableName"] = "con_licencias_filtro";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "licencia";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "cat_usuarios";
$proto15["m_srcTableName"] = "con_licencias_filtro";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "cat_usuarios_id";
$proto15["m_columns"][] = "time_stamp";
$proto15["m_columns"][] = "vigente";
$proto15["m_columns"][] = "capturista";
$proto15["m_columns"][] = "usuario";
$proto15["m_columns"][] = "cat_usuarios_licencias_id";
$proto15["m_columns"][] = "pass";
$proto15["m_columns"][] = "nombre";
$proto15["m_columns"][] = "correo";
$proto15["m_columns"][] = "cat_trabajadores_altas_id";
$proto15["m_columns"][] = "res_autorizacion";
$proto15["m_columns"][] = "session";
$proto15["m_columns"][] = "tipo";
$proto15["m_columns"][] = "session_v2";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "cat_usuarios";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "con_licencias_filtro";
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
$proto19["m_strName"] = "cat_usuarios_licencias";
$proto19["m_srcTableName"] = "con_licencias_filtro";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_usuarios_licencias_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_licencia";
$proto19["m_columns"][] = "fecha_inicio";
$proto19["m_columns"][] = "fecha_termino";
$proto19["m_columns"][] = "cat_apps_mu_id";
$proto19["m_columns"][] = "endpoint";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "LEFT OUTER JOIN cat_usuarios_licencias ON cat_usuarios.cat_usuarios_licencias_id = cat_usuarios_licencias.cat_usuarios_licencias_id";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "con_licencias_filtro";
$proto20=array();
$proto20["m_sql"] = "cat_usuarios_licencias.cat_usuarios_licencias_id = cat_usuarios.cat_usuarios_licencias_id";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "con_licencias_filtro"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= cat_usuarios.cat_usuarios_licencias_id";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="con_licencias_filtro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_con_licencias_filtro = createSqlQuery_con_licencias_filtro();


	
		;

		

$tdatacon_licencias_filtro[".sqlquery"] = $queryData_con_licencias_filtro;



$tdatacon_licencias_filtro[".hasEvents"] = false;

?>