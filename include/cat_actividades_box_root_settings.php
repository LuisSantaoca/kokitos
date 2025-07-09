<?php
$tdatacat_actividades_box_root = array();
$tdatacat_actividades_box_root[".searchableFields"] = array();
$tdatacat_actividades_box_root[".ShortName"] = "cat_actividades_box_root";
$tdatacat_actividades_box_root[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_actividades_box_root[".OriginalTable"] = "cat_actividades";


$tdatacat_actividades_box_root[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_actividades_box_root[".originalPagesByType"] = $tdatacat_actividades_box_root[".pagesByType"];
$tdatacat_actividades_box_root[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_actividades_box_root[".originalPages"] = $tdatacat_actividades_box_root[".pages"];
$tdatacat_actividades_box_root[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_actividades_box_root[".originalDefaultPages"] = $tdatacat_actividades_box_root[".defaultPages"];

//	field labels
$fieldLabelscat_actividades_box_root = array();
$fieldToolTipscat_actividades_box_root = array();
$pageTitlescat_actividades_box_root = array();
$placeHolderscat_actividades_box_root = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_actividades_box_root["Spanish"] = array();
	$fieldToolTipscat_actividades_box_root["Spanish"] = array();
	$placeHolderscat_actividades_box_root["Spanish"] = array();
	$pageTitlescat_actividades_box_root["Spanish"] = array();
	$fieldLabelscat_actividades_box_root["Spanish"]["cat_actividades_id"] = "Id";
	$fieldToolTipscat_actividades_box_root["Spanish"]["cat_actividades_id"] = "";
	$placeHolderscat_actividades_box_root["Spanish"]["cat_actividades_id"] = "";
	$fieldLabelscat_actividades_box_root["Spanish"]["descripcion_actividad"] = "Actividad";
	$fieldToolTipscat_actividades_box_root["Spanish"]["descripcion_actividad"] = "";
	$placeHolderscat_actividades_box_root["Spanish"]["descripcion_actividad"] = "";
	$fieldLabelscat_actividades_box_root["Spanish"]["descripcion_licencia"] = "Descripcion Licencia";
	$fieldToolTipscat_actividades_box_root["Spanish"]["descripcion_licencia"] = "";
	$placeHolderscat_actividades_box_root["Spanish"]["descripcion_licencia"] = "";
	if (count($fieldToolTipscat_actividades_box_root["Spanish"]))
		$tdatacat_actividades_box_root[".isUseToolTips"] = true;
}





$tdatacat_actividades_box_root[".shortTableName"] = "cat_actividades_box_root";
$tdatacat_actividades_box_root[".nSecOptions"] = 0;

$tdatacat_actividades_box_root[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_actividades_box_root[".entityType"] = 1;
$tdatacat_actividades_box_root[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_actividades_box_root[".strOriginalTableName"] = "cat_actividades";

	



$tdatacat_actividades_box_root[".showAddInPopup"] = false;

$tdatacat_actividades_box_root[".showEditInPopup"] = false;

$tdatacat_actividades_box_root[".showViewInPopup"] = false;

$tdatacat_actividades_box_root[".listAjax"] = false;
//	temporary
//$tdatacat_actividades_box_root[".listAjax"] = false;

	$tdatacat_actividades_box_root[".audit"] = true;

	$tdatacat_actividades_box_root[".locking"] = true;


$pages = $tdatacat_actividades_box_root[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_actividades_box_root[".edit"] = true;
	$tdatacat_actividades_box_root[".afterEditAction"] = 1;
	$tdatacat_actividades_box_root[".closePopupAfterEdit"] = 1;
	$tdatacat_actividades_box_root[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_actividades_box_root[".add"] = true;
$tdatacat_actividades_box_root[".afterAddAction"] = 1;
$tdatacat_actividades_box_root[".closePopupAfterAdd"] = 1;
$tdatacat_actividades_box_root[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_actividades_box_root[".list"] = true;
}



$tdatacat_actividades_box_root[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_actividades_box_root[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_actividades_box_root[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_actividades_box_root[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_actividades_box_root[".printFriendly"] = true;
}



$tdatacat_actividades_box_root[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_actividades_box_root[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_actividades_box_root[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_actividades_box_root[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_actividades_box_root[".ajaxCodeSnippetAdded"] = false;

$tdatacat_actividades_box_root[".buttonsAdded"] = false;

$tdatacat_actividades_box_root[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_actividades_box_root[".isUseTimeForSearch"] = false;


$tdatacat_actividades_box_root[".badgeColor"] = "DB7093";


$tdatacat_actividades_box_root[".allSearchFields"] = array();
$tdatacat_actividades_box_root[".filterFields"] = array();
$tdatacat_actividades_box_root[".requiredSearchFields"] = array();

$tdatacat_actividades_box_root[".googleLikeFields"] = array();
$tdatacat_actividades_box_root[".googleLikeFields"][] = "cat_actividades_id";
$tdatacat_actividades_box_root[".googleLikeFields"][] = "descripcion_actividad";
$tdatacat_actividades_box_root[".googleLikeFields"][] = "descripcion_licencia";



$tdatacat_actividades_box_root[".tableType"] = "list";

$tdatacat_actividades_box_root[".printerPageOrientation"] = 0;
$tdatacat_actividades_box_root[".nPrinterPageScale"] = 100;

$tdatacat_actividades_box_root[".nPrinterSplitRecords"] = 40;

$tdatacat_actividades_box_root[".geocodingEnabled"] = false;





$tdatacat_actividades_box_root[".isResizeColumns"] = true;





$tdatacat_actividades_box_root[".pageSize"] = 20;

$tdatacat_actividades_box_root[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_actividades_box_root[".strOrderBy"] = $tstrOrderBy;

$tdatacat_actividades_box_root[".orderindexes"] = array();


$tdatacat_actividades_box_root[".sqlHead"] = "SELECT cat_actividades.cat_actividades_id,  cat_actividades.descripcion_actividad,  cat_usuarios_licencias.descripcion_licencia";
$tdatacat_actividades_box_root[".sqlFrom"] = "FROM cat_actividades  LEFT OUTER JOIN cat_usuarios ON cat_actividades.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_usuarios_licencias ON cat_usuarios.cat_usuarios_licencias_id = cat_usuarios_licencias.cat_usuarios_licencias_id";
$tdatacat_actividades_box_root[".sqlWhereExpr"] = "";
$tdatacat_actividades_box_root[".sqlTail"] = "";

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
$tdatacat_actividades_box_root[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_actividades_box_root[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_actividades_box_root[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_actividades_box_root[".highlightSearchResults"] = true;

$tableKeyscat_actividades_box_root = array();
$tableKeyscat_actividades_box_root[] = "cat_actividades_id";
$tdatacat_actividades_box_root[".Keys"] = $tableKeyscat_actividades_box_root;


$tdatacat_actividades_box_root[".hideMobileList"] = array();




//	cat_actividades_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_actividades_id";
	$fdata["GoodName"] = "cat_actividades_id";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("cat_actividades_box_root","cat_actividades_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_actividades_id";

		$fdata["sourceSingle"] = "cat_actividades_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades.cat_actividades_id";

	
	
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


	$tdatacat_actividades_box_root["cat_actividades_id"] = $fdata;
		$tdatacat_actividades_box_root[".searchableFields"][] = "cat_actividades_id";
//	descripcion_actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_actividad";
	$fdata["GoodName"] = "descripcion_actividad";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("cat_actividades_box_root","descripcion_actividad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_actividad";

		$fdata["sourceSingle"] = "descripcion_actividad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades.descripcion_actividad";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatacat_actividades_box_root["descripcion_actividad"] = $fdata;
		$tdatacat_actividades_box_root[".searchableFields"][] = "descripcion_actividad";
//	descripcion_licencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion_licencia";
	$fdata["GoodName"] = "descripcion_licencia";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_actividades_box_root","descripcion_licencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_licencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_licencias.descripcion_licencia";

	
	
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


	$tdatacat_actividades_box_root["descripcion_licencia"] = $fdata;
		$tdatacat_actividades_box_root[".searchableFields"][] = "descripcion_licencia";


$tables_data["cat_actividades_box_root"]=&$tdatacat_actividades_box_root;
$field_labels["cat_actividades_box_root"] = &$fieldLabelscat_actividades_box_root;
$fieldToolTips["cat_actividades_box_root"] = &$fieldToolTipscat_actividades_box_root;
$placeHolders["cat_actividades_box_root"] = &$placeHolderscat_actividades_box_root;
$page_titles["cat_actividades_box_root"] = &$pageTitlescat_actividades_box_root;


changeTextControlsToDate( "cat_actividades_box_root" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_actividades_box_root"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_actividades_box_root"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_actividades_box_root()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_actividades.cat_actividades_id,  cat_actividades.descripcion_actividad,  cat_usuarios_licencias.descripcion_licencia";
$proto0["m_strFrom"] = "FROM cat_actividades  LEFT OUTER JOIN cat_usuarios ON cat_actividades.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_usuarios_licencias ON cat_usuarios.cat_usuarios_licencias_id = cat_usuarios_licencias.cat_usuarios_licencias_id";
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
	"m_strName" => "cat_actividades_id",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "cat_actividades_box_root"
));

$proto6["m_sql"] = "cat_actividades.cat_actividades_id";
$proto6["m_srcTableName"] = "cat_actividades_box_root";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_actividad",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "cat_actividades_box_root"
));

$proto8["m_sql"] = "cat_actividades.descripcion_actividad";
$proto8["m_srcTableName"] = "cat_actividades_box_root";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_licencia",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_actividades_box_root"
));

$proto10["m_sql"] = "cat_usuarios_licencias.descripcion_licencia";
$proto10["m_srcTableName"] = "cat_actividades_box_root";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "cat_actividades";
$proto13["m_srcTableName"] = "cat_actividades_box_root";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cat_actividades_id";
$proto13["m_columns"][] = "time_stamp";
$proto13["m_columns"][] = "vigente";
$proto13["m_columns"][] = "capturista";
$proto13["m_columns"][] = "descripcion_actividad";
$proto13["m_columns"][] = "cat_actividades_categorias_id";
$proto13["m_columns"][] = "cat_actividades_categorias_mu_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "cat_actividades";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "cat_actividades_box_root";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
												$proto16=array();
$proto16["m_link"] = "SQLL_LEFTJOIN";
			$proto17=array();
$proto17["m_strName"] = "cat_usuarios";
$proto17["m_srcTableName"] = "cat_actividades_box_root";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_usuarios_id";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "usuario";
$proto17["m_columns"][] = "cat_usuarios_licencias_id";
$proto17["m_columns"][] = "pass";
$proto17["m_columns"][] = "nombre";
$proto17["m_columns"][] = "correo";
$proto17["m_columns"][] = "cat_trabajadores_altas_id";
$proto17["m_columns"][] = "res_autorizacion";
$proto17["m_columns"][] = "session";
$proto17["m_columns"][] = "tipo";
$proto17["m_columns"][] = "session_v2";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_actividades.capturista = cat_usuarios.usuario";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_actividades_box_root";
$proto18=array();
$proto18["m_sql"] = "cat_usuarios.usuario = cat_actividades.capturista";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_actividades_box_root"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= cat_actividades.capturista";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_LEFTJOIN";
			$proto21=array();
$proto21["m_strName"] = "cat_usuarios_licencias";
$proto21["m_srcTableName"] = "cat_actividades_box_root";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_usuarios_licencias_id";
$proto21["m_columns"][] = "time_stamp";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "descripcion_licencia";
$proto21["m_columns"][] = "fecha_inicio";
$proto21["m_columns"][] = "fecha_termino";
$proto21["m_columns"][] = "cat_apps_mu_id";
$proto21["m_columns"][] = "endpoint";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "LEFT OUTER JOIN cat_usuarios_licencias ON cat_usuarios.cat_usuarios_licencias_id = cat_usuarios_licencias.cat_usuarios_licencias_id";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "cat_actividades_box_root";
$proto22=array();
$proto22["m_sql"] = "cat_usuarios_licencias.cat_usuarios_licencias_id = cat_usuarios.cat_usuarios_licencias_id";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_actividades_box_root"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= cat_usuarios.cat_usuarios_licencias_id";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_actividades_box_root";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_actividades_box_root = createSqlQuery_cat_actividades_box_root();


	
		;

			

$tdatacat_actividades_box_root[".sqlquery"] = $queryData_cat_actividades_box_root;



$tdatacat_actividades_box_root[".hasEvents"] = false;

?>