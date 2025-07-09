<?php
$tdatacat_ventas_productos_almacenes1 = array();
$tdatacat_ventas_productos_almacenes1[".searchableFields"] = array();
$tdatacat_ventas_productos_almacenes1[".ShortName"] = "cat_ventas_productos_almacenes1";
$tdatacat_ventas_productos_almacenes1[".OwnerID"] = "";
$tdatacat_ventas_productos_almacenes1[".OriginalTable"] = "cat_ventas_productos_almacenes";


$tdatacat_ventas_productos_almacenes1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_productos_almacenes1[".originalPagesByType"] = $tdatacat_ventas_productos_almacenes1[".pagesByType"];
$tdatacat_ventas_productos_almacenes1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_productos_almacenes1[".originalPages"] = $tdatacat_ventas_productos_almacenes1[".pages"];
$tdatacat_ventas_productos_almacenes1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_ventas_productos_almacenes1[".originalDefaultPages"] = $tdatacat_ventas_productos_almacenes1[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_almacenes1 = array();
$fieldToolTipscat_ventas_productos_almacenes1 = array();
$pageTitlescat_ventas_productos_almacenes1 = array();
$placeHolderscat_ventas_productos_almacenes1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_almacenes1["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_almacenes1["Spanish"] = array();
	$placeHolderscat_ventas_productos_almacenes1["Spanish"] = array();
	$pageTitlescat_ventas_productos_almacenes1["Spanish"] = array();
	$fieldLabelscat_ventas_productos_almacenes1["Spanish"]["cat_ventas_productos_almacenes_id"] = "Id";
	$fieldToolTipscat_ventas_productos_almacenes1["Spanish"]["cat_ventas_productos_almacenes_id"] = "";
	$placeHolderscat_ventas_productos_almacenes1["Spanish"]["cat_ventas_productos_almacenes_id"] = "";
	$fieldLabelscat_ventas_productos_almacenes1["Spanish"]["descripcion_ventas_productos_almacenes"] = "Descripcion Almacenes";
	$fieldToolTipscat_ventas_productos_almacenes1["Spanish"]["descripcion_ventas_productos_almacenes"] = "";
	$placeHolderscat_ventas_productos_almacenes1["Spanish"]["descripcion_ventas_productos_almacenes"] = "";
	$fieldLabelscat_ventas_productos_almacenes1["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_ventas_productos_almacenes1["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_ventas_productos_almacenes1["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_ventas_productos_almacenes1["Spanish"]))
		$tdatacat_ventas_productos_almacenes1[".isUseToolTips"] = true;
}





$tdatacat_ventas_productos_almacenes1[".shortTableName"] = "cat_ventas_productos_almacenes1";
$tdatacat_ventas_productos_almacenes1[".nSecOptions"] = 0;

$tdatacat_ventas_productos_almacenes1[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_almacenes1[".entityType"] = 0;
$tdatacat_ventas_productos_almacenes1[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_almacenes1[".strOriginalTableName"] = "cat_ventas_productos_almacenes";

	



$tdatacat_ventas_productos_almacenes1[".showAddInPopup"] = false;

$tdatacat_ventas_productos_almacenes1[".showEditInPopup"] = false;

$tdatacat_ventas_productos_almacenes1[".showViewInPopup"] = false;

$tdatacat_ventas_productos_almacenes1[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_almacenes1[".listAjax"] = false;

	$tdatacat_ventas_productos_almacenes1[".audit"] = true;

	$tdatacat_ventas_productos_almacenes1[".locking"] = true;


$pages = $tdatacat_ventas_productos_almacenes1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_almacenes1[".edit"] = true;
	$tdatacat_ventas_productos_almacenes1[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_almacenes1[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_almacenes1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_almacenes1[".add"] = true;
$tdatacat_ventas_productos_almacenes1[".afterAddAction"] = 1;
$tdatacat_ventas_productos_almacenes1[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_almacenes1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_almacenes1[".list"] = true;
}



$tdatacat_ventas_productos_almacenes1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_almacenes1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_almacenes1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_almacenes1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_almacenes1[".printFriendly"] = true;
}



$tdatacat_ventas_productos_almacenes1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_almacenes1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_almacenes1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_almacenes1[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_almacenes1[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_almacenes1[".buttonsAdded"] = false;

$tdatacat_ventas_productos_almacenes1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_almacenes1[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_almacenes1[".badgeColor"] = "9ACD32";


$tdatacat_ventas_productos_almacenes1[".allSearchFields"] = array();
$tdatacat_ventas_productos_almacenes1[".filterFields"] = array();
$tdatacat_ventas_productos_almacenes1[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_almacenes1[".googleLikeFields"] = array();
$tdatacat_ventas_productos_almacenes1[".googleLikeFields"][] = "cat_ventas_productos_almacenes_id";
$tdatacat_ventas_productos_almacenes1[".googleLikeFields"][] = "descripcion_ventas_productos_almacenes";
$tdatacat_ventas_productos_almacenes1[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_ventas_productos_almacenes1[".tableType"] = "list";

$tdatacat_ventas_productos_almacenes1[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_almacenes1[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_almacenes1[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_almacenes1[".geocodingEnabled"] = false;





$tdatacat_ventas_productos_almacenes1[".isResizeColumns"] = true;





$tdatacat_ventas_productos_almacenes1[".pageSize"] = 20;

$tdatacat_ventas_productos_almacenes1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_almacenes1[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_almacenes1[".orderindexes"] = array();


$tdatacat_ventas_productos_almacenes1[".sqlHead"] = "SELECT cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_id,  cat_ventas_productos_almacenes.descripcion_ventas_productos_almacenes,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_ventas_productos_almacenes1[".sqlFrom"] = "FROM cat_ventas_productos_almacenes  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_almacenes.capturista = cat_usuarios.usuario";
$tdatacat_ventas_productos_almacenes1[".sqlWhereExpr"] = "(cat_ventas_productos_almacenes.vigente =1)";
$tdatacat_ventas_productos_almacenes1[".sqlTail"] = "";

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
$tdatacat_ventas_productos_almacenes1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_almacenes1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_almacenes1[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_almacenes1[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_almacenes1 = array();
$tableKeyscat_ventas_productos_almacenes1[] = "cat_ventas_productos_almacenes_id";
$tdatacat_ventas_productos_almacenes1[".Keys"] = $tableKeyscat_ventas_productos_almacenes1;


$tdatacat_ventas_productos_almacenes1[".hideMobileList"] = array();




//	cat_ventas_productos_almacenes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_almacenes_id";
	$fdata["GoodName"] = "cat_ventas_productos_almacenes_id";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes","cat_ventas_productos_almacenes_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_almacenes_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_almacenes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_id";

	
	
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


	$tdatacat_ventas_productos_almacenes1["cat_ventas_productos_almacenes_id"] = $fdata;
		$tdatacat_ventas_productos_almacenes1[".searchableFields"][] = "cat_ventas_productos_almacenes_id";
//	descripcion_ventas_productos_almacenes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_ventas_productos_almacenes";
	$fdata["GoodName"] = "descripcion_ventas_productos_almacenes";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes","descripcion_ventas_productos_almacenes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_productos_almacenes";

		$fdata["sourceSingle"] = "descripcion_ventas_productos_almacenes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes.descripcion_ventas_productos_almacenes";

	
	
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


	$tdatacat_ventas_productos_almacenes1["descripcion_ventas_productos_almacenes"] = $fdata;
		$tdatacat_ventas_productos_almacenes1[".searchableFields"][] = "descripcion_ventas_productos_almacenes";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes","cat_usuarios_licencias_id");
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


	$tdatacat_ventas_productos_almacenes1["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_ventas_productos_almacenes1[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_ventas_productos_almacenes"]=&$tdatacat_ventas_productos_almacenes1;
$field_labels["cat_ventas_productos_almacenes"] = &$fieldLabelscat_ventas_productos_almacenes1;
$fieldToolTips["cat_ventas_productos_almacenes"] = &$fieldToolTipscat_ventas_productos_almacenes1;
$placeHolders["cat_ventas_productos_almacenes"] = &$placeHolderscat_ventas_productos_almacenes1;
$page_titles["cat_ventas_productos_almacenes"] = &$pageTitlescat_ventas_productos_almacenes1;


changeTextControlsToDate( "cat_ventas_productos_almacenes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_almacenes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_almacenes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_almacenes1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_id,  cat_ventas_productos_almacenes.descripcion_ventas_productos_almacenes,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_almacenes  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_almacenes.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_ventas_productos_almacenes.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_ventas_productos_almacenes.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_almacenes",
	"m_srcTableName" => "cat_ventas_productos_almacenes"
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
	"m_strName" => "cat_ventas_productos_almacenes_id",
	"m_strTable" => "cat_ventas_productos_almacenes",
	"m_srcTableName" => "cat_ventas_productos_almacenes"
));

$proto6["m_sql"] = "cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_almacenes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_almacenes",
	"m_strTable" => "cat_ventas_productos_almacenes",
	"m_srcTableName" => "cat_ventas_productos_almacenes"
));

$proto8["m_sql"] = "cat_ventas_productos_almacenes.descripcion_ventas_productos_almacenes";
$proto8["m_srcTableName"] = "cat_ventas_productos_almacenes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_almacenes"
));

$proto10["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto10["m_srcTableName"] = "cat_ventas_productos_almacenes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "cat_ventas_productos_almacenes";
$proto13["m_srcTableName"] = "cat_ventas_productos_almacenes";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cat_ventas_productos_almacenes_id";
$proto13["m_columns"][] = "time_stamp";
$proto13["m_columns"][] = "vigente";
$proto13["m_columns"][] = "capturista";
$proto13["m_columns"][] = "descripcion_ventas_productos_almacenes";
$proto13["m_columns"][] = "cat_ventas_productos_almacenes_categorias_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "cat_ventas_productos_almacenes";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "cat_ventas_productos_almacenes";
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
$proto17["m_srcTableName"] = "cat_ventas_productos_almacenes";
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
$proto16["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_almacenes.capturista = cat_usuarios.usuario";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_ventas_productos_almacenes";
$proto18=array();
$proto18["m_sql"] = "cat_usuarios.usuario = cat_ventas_productos_almacenes.capturista";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_almacenes"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= cat_ventas_productos_almacenes.capturista";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_almacenes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_almacenes1 = createSqlQuery_cat_ventas_productos_almacenes1();


	
		;

			

$tdatacat_ventas_productos_almacenes1[".sqlquery"] = $queryData_cat_ventas_productos_almacenes1;



$tdatacat_ventas_productos_almacenes1[".hasEvents"] = false;

?>