<?php
$tdatabox_cat_actividades = array();
$tdatabox_cat_actividades[".searchableFields"] = array();
$tdatabox_cat_actividades[".ShortName"] = "box_cat_actividades";
$tdatabox_cat_actividades[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatabox_cat_actividades[".OriginalTable"] = "cat_actividades";


$tdatabox_cat_actividades[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_actividades[".originalPagesByType"] = $tdatabox_cat_actividades[".pagesByType"];
$tdatabox_cat_actividades[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_actividades[".originalPages"] = $tdatabox_cat_actividades[".pages"];
$tdatabox_cat_actividades[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_actividades[".originalDefaultPages"] = $tdatabox_cat_actividades[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_actividades = array();
$fieldToolTipsbox_cat_actividades = array();
$pageTitlesbox_cat_actividades = array();
$placeHoldersbox_cat_actividades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_actividades["Spanish"] = array();
	$fieldToolTipsbox_cat_actividades["Spanish"] = array();
	$placeHoldersbox_cat_actividades["Spanish"] = array();
	$pageTitlesbox_cat_actividades["Spanish"] = array();
	$fieldLabelsbox_cat_actividades["Spanish"]["cat_actividades_id"] = "Id";
	$fieldToolTipsbox_cat_actividades["Spanish"]["cat_actividades_id"] = "";
	$placeHoldersbox_cat_actividades["Spanish"]["cat_actividades_id"] = "";
	$fieldLabelsbox_cat_actividades["Spanish"]["descripcion_actividad"] = "Actividad";
	$fieldToolTipsbox_cat_actividades["Spanish"]["descripcion_actividad"] = "";
	$placeHoldersbox_cat_actividades["Spanish"]["descripcion_actividad"] = "";
	if (count($fieldToolTipsbox_cat_actividades["Spanish"]))
		$tdatabox_cat_actividades[".isUseToolTips"] = true;
}





$tdatabox_cat_actividades[".shortTableName"] = "box_cat_actividades";
$tdatabox_cat_actividades[".nSecOptions"] = 0;

$tdatabox_cat_actividades[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatabox_cat_actividades[".entityType"] = 1;
$tdatabox_cat_actividades[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_actividades[".strOriginalTableName"] = "cat_actividades";

	



$tdatabox_cat_actividades[".showAddInPopup"] = false;

$tdatabox_cat_actividades[".showEditInPopup"] = false;

$tdatabox_cat_actividades[".showViewInPopup"] = false;

$tdatabox_cat_actividades[".listAjax"] = false;
//	temporary
//$tdatabox_cat_actividades[".listAjax"] = false;

	$tdatabox_cat_actividades[".audit"] = true;

	$tdatabox_cat_actividades[".locking"] = true;


$pages = $tdatabox_cat_actividades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_actividades[".edit"] = true;
	$tdatabox_cat_actividades[".afterEditAction"] = 1;
	$tdatabox_cat_actividades[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_actividades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_actividades[".add"] = true;
$tdatabox_cat_actividades[".afterAddAction"] = 1;
$tdatabox_cat_actividades[".closePopupAfterAdd"] = 1;
$tdatabox_cat_actividades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_actividades[".list"] = true;
}



$tdatabox_cat_actividades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_actividades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_actividades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_actividades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_actividades[".printFriendly"] = true;
}



$tdatabox_cat_actividades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_actividades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_actividades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_actividades[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_actividades[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_actividades[".buttonsAdded"] = false;

$tdatabox_cat_actividades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_actividades[".isUseTimeForSearch"] = false;


$tdatabox_cat_actividades[".badgeColor"] = "6B8E23";


$tdatabox_cat_actividades[".allSearchFields"] = array();
$tdatabox_cat_actividades[".filterFields"] = array();
$tdatabox_cat_actividades[".requiredSearchFields"] = array();

$tdatabox_cat_actividades[".googleLikeFields"] = array();
$tdatabox_cat_actividades[".googleLikeFields"][] = "cat_actividades_id";
$tdatabox_cat_actividades[".googleLikeFields"][] = "descripcion_actividad";



$tdatabox_cat_actividades[".tableType"] = "list";

$tdatabox_cat_actividades[".printerPageOrientation"] = 0;
$tdatabox_cat_actividades[".nPrinterPageScale"] = 100;

$tdatabox_cat_actividades[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_actividades[".geocodingEnabled"] = false;





$tdatabox_cat_actividades[".isResizeColumns"] = true;





$tdatabox_cat_actividades[".pageSize"] = 20;

$tdatabox_cat_actividades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_actividades[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_actividades[".orderindexes"] = array();


$tdatabox_cat_actividades[".sqlHead"] = "SELECT cat_actividades_id,  cat_actividades.descripcion_actividad";
$tdatabox_cat_actividades[".sqlFrom"] = "FROM cat_actividades";
$tdatabox_cat_actividades[".sqlWhereExpr"] = "(vigente =1)";
$tdatabox_cat_actividades[".sqlTail"] = "";

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
$tdatabox_cat_actividades[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_actividades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_actividades[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_actividades[".highlightSearchResults"] = true;

$tableKeysbox_cat_actividades = array();
$tableKeysbox_cat_actividades[] = "cat_actividades_id";
$tdatabox_cat_actividades[".Keys"] = $tableKeysbox_cat_actividades;


$tdatabox_cat_actividades[".hideMobileList"] = array();




//	cat_actividades_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_actividades_id";
	$fdata["GoodName"] = "cat_actividades_id";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades","cat_actividades_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_actividades_id";

		$fdata["sourceSingle"] = "cat_actividades_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_id";

	
	
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


	$tdatabox_cat_actividades["cat_actividades_id"] = $fdata;
		$tdatabox_cat_actividades[".searchableFields"][] = "cat_actividades_id";
//	descripcion_actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_actividad";
	$fdata["GoodName"] = "descripcion_actividad";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades","descripcion_actividad");
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


	$tdatabox_cat_actividades["descripcion_actividad"] = $fdata;
		$tdatabox_cat_actividades[".searchableFields"][] = "descripcion_actividad";


$tables_data["box_cat_actividades"]=&$tdatabox_cat_actividades;
$field_labels["box_cat_actividades"] = &$fieldLabelsbox_cat_actividades;
$fieldToolTips["box_cat_actividades"] = &$fieldToolTipsbox_cat_actividades;
$placeHolders["box_cat_actividades"] = &$placeHoldersbox_cat_actividades;
$page_titles["box_cat_actividades"] = &$pageTitlesbox_cat_actividades;


changeTextControlsToDate( "box_cat_actividades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_actividades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_actividades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_actividades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_actividades_id,  cat_actividades.descripcion_actividad";
$proto0["m_strFrom"] = "FROM cat_actividades";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "box_cat_actividades"
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
	"m_strName" => "cat_actividades_id",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "box_cat_actividades"
));

$proto6["m_sql"] = "cat_actividades_id";
$proto6["m_srcTableName"] = "box_cat_actividades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_actividad",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "box_cat_actividades"
));

$proto8["m_sql"] = "cat_actividades.descripcion_actividad";
$proto8["m_srcTableName"] = "box_cat_actividades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cat_actividades";
$proto11["m_srcTableName"] = "box_cat_actividades";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "cat_actividades_id";
$proto11["m_columns"][] = "time_stamp";
$proto11["m_columns"][] = "vigente";
$proto11["m_columns"][] = "capturista";
$proto11["m_columns"][] = "descripcion_actividad";
$proto11["m_columns"][] = "cat_actividades_categorias_id";
$proto11["m_columns"][] = "cat_actividades_categorias_mu_id";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cat_actividades";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "box_cat_actividades";
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
$proto0["m_srcTableName"]="box_cat_actividades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_actividades = createSqlQuery_box_cat_actividades();


	
		;

		

$tdatabox_cat_actividades[".sqlquery"] = $queryData_box_cat_actividades;



$tdatabox_cat_actividades[".hasEvents"] = false;

?>