<?php
$tdatabox_cat_compras_almacenes = array();
$tdatabox_cat_compras_almacenes[".searchableFields"] = array();
$tdatabox_cat_compras_almacenes[".ShortName"] = "box_cat_compras_almacenes";
$tdatabox_cat_compras_almacenes[".OwnerID"] = "";
$tdatabox_cat_compras_almacenes[".OriginalTable"] = "cat_compras_almacenes";


$tdatabox_cat_compras_almacenes[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_compras_almacenes[".originalPagesByType"] = $tdatabox_cat_compras_almacenes[".pagesByType"];
$tdatabox_cat_compras_almacenes[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_compras_almacenes[".originalPages"] = $tdatabox_cat_compras_almacenes[".pages"];
$tdatabox_cat_compras_almacenes[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_compras_almacenes[".originalDefaultPages"] = $tdatabox_cat_compras_almacenes[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_compras_almacenes = array();
$fieldToolTipsbox_cat_compras_almacenes = array();
$pageTitlesbox_cat_compras_almacenes = array();
$placeHoldersbox_cat_compras_almacenes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_compras_almacenes["Spanish"] = array();
	$fieldToolTipsbox_cat_compras_almacenes["Spanish"] = array();
	$placeHoldersbox_cat_compras_almacenes["Spanish"] = array();
	$pageTitlesbox_cat_compras_almacenes["Spanish"] = array();
	$fieldLabelsbox_cat_compras_almacenes["Spanish"]["cat_compras_almacenes_id"] = "Id";
	$fieldToolTipsbox_cat_compras_almacenes["Spanish"]["cat_compras_almacenes_id"] = "";
	$placeHoldersbox_cat_compras_almacenes["Spanish"]["cat_compras_almacenes_id"] = "";
	$fieldLabelsbox_cat_compras_almacenes["Spanish"]["descripcion_compras_almacenes"] = "Almacen";
	$fieldToolTipsbox_cat_compras_almacenes["Spanish"]["descripcion_compras_almacenes"] = "";
	$placeHoldersbox_cat_compras_almacenes["Spanish"]["descripcion_compras_almacenes"] = "";
	if (count($fieldToolTipsbox_cat_compras_almacenes["Spanish"]))
		$tdatabox_cat_compras_almacenes[".isUseToolTips"] = true;
}





$tdatabox_cat_compras_almacenes[".shortTableName"] = "box_cat_compras_almacenes";
$tdatabox_cat_compras_almacenes[".nSecOptions"] = 0;

$tdatabox_cat_compras_almacenes[".mainTableOwnerID"] = "";
$tdatabox_cat_compras_almacenes[".entityType"] = 1;
$tdatabox_cat_compras_almacenes[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_compras_almacenes[".strOriginalTableName"] = "cat_compras_almacenes";

	



$tdatabox_cat_compras_almacenes[".showAddInPopup"] = false;

$tdatabox_cat_compras_almacenes[".showEditInPopup"] = false;

$tdatabox_cat_compras_almacenes[".showViewInPopup"] = false;

$tdatabox_cat_compras_almacenes[".listAjax"] = false;
//	temporary
//$tdatabox_cat_compras_almacenes[".listAjax"] = false;

	$tdatabox_cat_compras_almacenes[".audit"] = true;

	$tdatabox_cat_compras_almacenes[".locking"] = true;


$pages = $tdatabox_cat_compras_almacenes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_compras_almacenes[".edit"] = true;
	$tdatabox_cat_compras_almacenes[".afterEditAction"] = 1;
	$tdatabox_cat_compras_almacenes[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_compras_almacenes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_compras_almacenes[".add"] = true;
$tdatabox_cat_compras_almacenes[".afterAddAction"] = 1;
$tdatabox_cat_compras_almacenes[".closePopupAfterAdd"] = 1;
$tdatabox_cat_compras_almacenes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_compras_almacenes[".list"] = true;
}



$tdatabox_cat_compras_almacenes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_compras_almacenes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_compras_almacenes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_compras_almacenes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_compras_almacenes[".printFriendly"] = true;
}



$tdatabox_cat_compras_almacenes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_compras_almacenes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_compras_almacenes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_compras_almacenes[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_compras_almacenes[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_compras_almacenes[".buttonsAdded"] = false;

$tdatabox_cat_compras_almacenes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_compras_almacenes[".isUseTimeForSearch"] = false;


$tdatabox_cat_compras_almacenes[".badgeColor"] = "D2691E";


$tdatabox_cat_compras_almacenes[".allSearchFields"] = array();
$tdatabox_cat_compras_almacenes[".filterFields"] = array();
$tdatabox_cat_compras_almacenes[".requiredSearchFields"] = array();

$tdatabox_cat_compras_almacenes[".googleLikeFields"] = array();
$tdatabox_cat_compras_almacenes[".googleLikeFields"][] = "cat_compras_almacenes_id";
$tdatabox_cat_compras_almacenes[".googleLikeFields"][] = "descripcion_compras_almacenes";



$tdatabox_cat_compras_almacenes[".tableType"] = "list";

$tdatabox_cat_compras_almacenes[".printerPageOrientation"] = 0;
$tdatabox_cat_compras_almacenes[".nPrinterPageScale"] = 100;

$tdatabox_cat_compras_almacenes[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_compras_almacenes[".geocodingEnabled"] = false;





$tdatabox_cat_compras_almacenes[".isResizeColumns"] = true;





$tdatabox_cat_compras_almacenes[".pageSize"] = 20;

$tdatabox_cat_compras_almacenes[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY cat_compras_almacenes.descripcion_compras_almacenes";
$tdatabox_cat_compras_almacenes[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_compras_almacenes[".orderindexes"] = array();
			$tdatabox_cat_compras_almacenes[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "cat_compras_almacenes.descripcion_compras_almacenes");


$tdatabox_cat_compras_almacenes[".sqlHead"] = "SELECT cat_compras_almacenes.cat_compras_almacenes_id,  cat_compras_almacenes.descripcion_compras_almacenes";
$tdatabox_cat_compras_almacenes[".sqlFrom"] = "FROM cat_compras_almacenes  LEFT OUTER JOIN cat_usuarios ON cat_compras_almacenes.capturista = cat_usuarios.usuario";
$tdatabox_cat_compras_almacenes[".sqlWhereExpr"] = "(cat_compras_almacenes.vigente =1)";
$tdatabox_cat_compras_almacenes[".sqlTail"] = "";

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
$tdatabox_cat_compras_almacenes[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_compras_almacenes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_compras_almacenes[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_compras_almacenes[".highlightSearchResults"] = true;

$tableKeysbox_cat_compras_almacenes = array();
$tableKeysbox_cat_compras_almacenes[] = "cat_compras_almacenes_id";
$tdatabox_cat_compras_almacenes[".Keys"] = $tableKeysbox_cat_compras_almacenes;


$tdatabox_cat_compras_almacenes[".hideMobileList"] = array();




//	cat_compras_almacenes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_almacenes_id";
	$fdata["GoodName"] = "cat_compras_almacenes_id";
	$fdata["ownerTable"] = "cat_compras_almacenes";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_almacenes","cat_compras_almacenes_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_almacenes_id";

		$fdata["sourceSingle"] = "cat_compras_almacenes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_almacenes.cat_compras_almacenes_id";

	
	
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


	$tdatabox_cat_compras_almacenes["cat_compras_almacenes_id"] = $fdata;
		$tdatabox_cat_compras_almacenes[".searchableFields"][] = "cat_compras_almacenes_id";
//	descripcion_compras_almacenes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_compras_almacenes";
	$fdata["GoodName"] = "descripcion_compras_almacenes";
	$fdata["ownerTable"] = "cat_compras_almacenes";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_almacenes","descripcion_compras_almacenes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_compras_almacenes";

		$fdata["sourceSingle"] = "descripcion_compras_almacenes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_almacenes.descripcion_compras_almacenes";

	
	
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


	$tdatabox_cat_compras_almacenes["descripcion_compras_almacenes"] = $fdata;
		$tdatabox_cat_compras_almacenes[".searchableFields"][] = "descripcion_compras_almacenes";


$tables_data["box_cat_compras_almacenes"]=&$tdatabox_cat_compras_almacenes;
$field_labels["box_cat_compras_almacenes"] = &$fieldLabelsbox_cat_compras_almacenes;
$fieldToolTips["box_cat_compras_almacenes"] = &$fieldToolTipsbox_cat_compras_almacenes;
$placeHolders["box_cat_compras_almacenes"] = &$placeHoldersbox_cat_compras_almacenes;
$page_titles["box_cat_compras_almacenes"] = &$pageTitlesbox_cat_compras_almacenes;


changeTextControlsToDate( "box_cat_compras_almacenes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_compras_almacenes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_compras_almacenes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_compras_almacenes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_almacenes.cat_compras_almacenes_id,  cat_compras_almacenes.descripcion_compras_almacenes";
$proto0["m_strFrom"] = "FROM cat_compras_almacenes  LEFT OUTER JOIN cat_usuarios ON cat_compras_almacenes.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_compras_almacenes.vigente =1)";
$proto0["m_strOrderBy"] = "ORDER BY cat_compras_almacenes.descripcion_compras_almacenes";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_compras_almacenes.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_almacenes",
	"m_srcTableName" => "box_cat_compras_almacenes"
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
	"m_strName" => "cat_compras_almacenes_id",
	"m_strTable" => "cat_compras_almacenes",
	"m_srcTableName" => "box_cat_compras_almacenes"
));

$proto6["m_sql"] = "cat_compras_almacenes.cat_compras_almacenes_id";
$proto6["m_srcTableName"] = "box_cat_compras_almacenes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_compras_almacenes",
	"m_strTable" => "cat_compras_almacenes",
	"m_srcTableName" => "box_cat_compras_almacenes"
));

$proto8["m_sql"] = "cat_compras_almacenes.descripcion_compras_almacenes";
$proto8["m_srcTableName"] = "box_cat_compras_almacenes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cat_compras_almacenes";
$proto11["m_srcTableName"] = "box_cat_compras_almacenes";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cat_compras_almacenes_id";
$proto11["m_columns"][] = "time_stamp";
$proto11["m_columns"][] = "vigente";
$proto11["m_columns"][] = "capturista";
$proto11["m_columns"][] = "imei";
$proto11["m_columns"][] = "descripcion_compras_almacenes";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cat_compras_almacenes";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "box_cat_compras_almacenes";
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
												$proto14=array();
$proto14["m_link"] = "SQLL_LEFTJOIN";
			$proto15=array();
$proto15["m_strName"] = "cat_usuarios";
$proto15["m_srcTableName"] = "box_cat_compras_almacenes";
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
$proto14["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_compras_almacenes.capturista = cat_usuarios.usuario";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "box_cat_compras_almacenes";
$proto16=array();
$proto16["m_sql"] = "cat_usuarios.usuario = cat_compras_almacenes.capturista";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_compras_almacenes"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= cat_compras_almacenes.capturista";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "descripcion_compras_almacenes",
	"m_strTable" => "cat_compras_almacenes",
	"m_srcTableName" => "box_cat_compras_almacenes"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="box_cat_compras_almacenes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_compras_almacenes = createSqlQuery_box_cat_compras_almacenes();


	
		;

		

$tdatabox_cat_compras_almacenes[".sqlquery"] = $queryData_box_cat_compras_almacenes;



$tdatabox_cat_compras_almacenes[".hasEvents"] = false;

?>