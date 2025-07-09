<?php
$tdatacat_ventas_productos_sku_box = array();
$tdatacat_ventas_productos_sku_box[".searchableFields"] = array();
$tdatacat_ventas_productos_sku_box[".ShortName"] = "cat_ventas_productos_sku_box";
$tdatacat_ventas_productos_sku_box[".OwnerID"] = "";
$tdatacat_ventas_productos_sku_box[".OriginalTable"] = "cat_ventas_productos_sku";


$tdatacat_ventas_productos_sku_box[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_productos_sku_box[".originalPagesByType"] = $tdatacat_ventas_productos_sku_box[".pagesByType"];
$tdatacat_ventas_productos_sku_box[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_productos_sku_box[".originalPages"] = $tdatacat_ventas_productos_sku_box[".pages"];
$tdatacat_ventas_productos_sku_box[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_ventas_productos_sku_box[".originalDefaultPages"] = $tdatacat_ventas_productos_sku_box[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_sku_box = array();
$fieldToolTipscat_ventas_productos_sku_box = array();
$pageTitlescat_ventas_productos_sku_box = array();
$placeHolderscat_ventas_productos_sku_box = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_sku_box["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_sku_box["Spanish"] = array();
	$placeHolderscat_ventas_productos_sku_box["Spanish"] = array();
	$pageTitlescat_ventas_productos_sku_box["Spanish"] = array();
	$fieldLabelscat_ventas_productos_sku_box["Spanish"]["cat_ventas_productos_sku_id"] = "Id";
	$fieldToolTipscat_ventas_productos_sku_box["Spanish"]["cat_ventas_productos_sku_id"] = "";
	$placeHolderscat_ventas_productos_sku_box["Spanish"]["cat_ventas_productos_sku_id"] = "";
	$fieldLabelscat_ventas_productos_sku_box["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_ventas_productos_sku_box["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_ventas_productos_sku_box["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_ventas_productos_sku_box["Spanish"]["sku"] = "Sku";
	$fieldToolTipscat_ventas_productos_sku_box["Spanish"]["sku"] = "";
	$placeHolderscat_ventas_productos_sku_box["Spanish"]["sku"] = "";
	if (count($fieldToolTipscat_ventas_productos_sku_box["Spanish"]))
		$tdatacat_ventas_productos_sku_box[".isUseToolTips"] = true;
}





$tdatacat_ventas_productos_sku_box[".shortTableName"] = "cat_ventas_productos_sku_box";
$tdatacat_ventas_productos_sku_box[".nSecOptions"] = 0;

$tdatacat_ventas_productos_sku_box[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_sku_box[".entityType"] = 1;
$tdatacat_ventas_productos_sku_box[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_sku_box[".strOriginalTableName"] = "cat_ventas_productos_sku";

	



$tdatacat_ventas_productos_sku_box[".showAddInPopup"] = false;

$tdatacat_ventas_productos_sku_box[".showEditInPopup"] = false;

$tdatacat_ventas_productos_sku_box[".showViewInPopup"] = false;

$tdatacat_ventas_productos_sku_box[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_sku_box[".listAjax"] = false;

	$tdatacat_ventas_productos_sku_box[".audit"] = true;

	$tdatacat_ventas_productos_sku_box[".locking"] = true;


$pages = $tdatacat_ventas_productos_sku_box[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_sku_box[".edit"] = true;
	$tdatacat_ventas_productos_sku_box[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_sku_box[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_sku_box[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_sku_box[".add"] = true;
$tdatacat_ventas_productos_sku_box[".afterAddAction"] = 1;
$tdatacat_ventas_productos_sku_box[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_sku_box[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_sku_box[".list"] = true;
}



$tdatacat_ventas_productos_sku_box[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_sku_box[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_sku_box[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_sku_box[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_sku_box[".printFriendly"] = true;
}



$tdatacat_ventas_productos_sku_box[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_sku_box[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_sku_box[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_sku_box[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_sku_box[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_sku_box[".buttonsAdded"] = false;

$tdatacat_ventas_productos_sku_box[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_sku_box[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_sku_box[".badgeColor"] = "D2AF80";


$tdatacat_ventas_productos_sku_box[".allSearchFields"] = array();
$tdatacat_ventas_productos_sku_box[".filterFields"] = array();
$tdatacat_ventas_productos_sku_box[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_sku_box[".googleLikeFields"] = array();
$tdatacat_ventas_productos_sku_box[".googleLikeFields"][] = "cat_ventas_productos_sku_id";
$tdatacat_ventas_productos_sku_box[".googleLikeFields"][] = "sku";
$tdatacat_ventas_productos_sku_box[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_ventas_productos_sku_box[".tableType"] = "list";

$tdatacat_ventas_productos_sku_box[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_sku_box[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_sku_box[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_sku_box[".geocodingEnabled"] = false;





$tdatacat_ventas_productos_sku_box[".isResizeColumns"] = true;





$tdatacat_ventas_productos_sku_box[".pageSize"] = 20;

$tdatacat_ventas_productos_sku_box[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_sku_box[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_sku_box[".orderindexes"] = array();


$tdatacat_ventas_productos_sku_box[".sqlHead"] = "SELECT cat_ventas_productos_sku.cat_ventas_productos_sku_id,  concat(cat_ventas_productos_sku.numero_sku, '-', cat_ventas_productos_sku.descripcion_ventas_productos_sku) AS sku,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_ventas_productos_sku_box[".sqlFrom"] = "FROM cat_ventas_productos_sku  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_sku.capturista = cat_usuarios.usuario";
$tdatacat_ventas_productos_sku_box[".sqlWhereExpr"] = "(cat_ventas_productos_sku.vigente =1)";
$tdatacat_ventas_productos_sku_box[".sqlTail"] = "";

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
$tdatacat_ventas_productos_sku_box[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_sku_box[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_sku_box[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_sku_box[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_sku_box = array();
$tableKeyscat_ventas_productos_sku_box[] = "cat_ventas_productos_sku_id";
$tdatacat_ventas_productos_sku_box[".Keys"] = $tableKeyscat_ventas_productos_sku_box;


$tdatacat_ventas_productos_sku_box[".hideMobileList"] = array();




//	cat_ventas_productos_sku_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_sku_id";
	$fdata["GoodName"] = "cat_ventas_productos_sku_id";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku_box","cat_ventas_productos_sku_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_sku_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_sku_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_sku.cat_ventas_productos_sku_id";

	
	
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


	$tdatacat_ventas_productos_sku_box["cat_ventas_productos_sku_id"] = $fdata;
		$tdatacat_ventas_productos_sku_box[".searchableFields"][] = "cat_ventas_productos_sku_id";
//	sku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sku";
	$fdata["GoodName"] = "sku";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku_box","sku");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sku";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(cat_ventas_productos_sku.numero_sku, '-', cat_ventas_productos_sku.descripcion_ventas_productos_sku)";

	
	
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


	$tdatacat_ventas_productos_sku_box["sku"] = $fdata;
		$tdatacat_ventas_productos_sku_box[".searchableFields"][] = "sku";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku_box","cat_usuarios_licencias_id");
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


	$tdatacat_ventas_productos_sku_box["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_ventas_productos_sku_box[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_ventas_productos_sku_box"]=&$tdatacat_ventas_productos_sku_box;
$field_labels["cat_ventas_productos_sku_box"] = &$fieldLabelscat_ventas_productos_sku_box;
$fieldToolTips["cat_ventas_productos_sku_box"] = &$fieldToolTipscat_ventas_productos_sku_box;
$placeHolders["cat_ventas_productos_sku_box"] = &$placeHolderscat_ventas_productos_sku_box;
$page_titles["cat_ventas_productos_sku_box"] = &$pageTitlescat_ventas_productos_sku_box;


changeTextControlsToDate( "cat_ventas_productos_sku_box" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_sku_box"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_sku_box"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_sku_box()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_sku.cat_ventas_productos_sku_id,  concat(cat_ventas_productos_sku.numero_sku, '-', cat_ventas_productos_sku.descripcion_ventas_productos_sku) AS sku,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_sku  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_sku.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_ventas_productos_sku.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_ventas_productos_sku.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku_box"
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
	"m_strName" => "cat_ventas_productos_sku_id",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku_box"
));

$proto6["m_sql"] = "cat_ventas_productos_sku.cat_ventas_productos_sku_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_sku_box";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_ventas_productos_sku.numero_sku"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_ventas_productos_sku.descripcion_ventas_productos_sku"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "concat(cat_ventas_productos_sku.numero_sku, '-', cat_ventas_productos_sku.descripcion_ventas_productos_sku)";
$proto8["m_srcTableName"] = "cat_ventas_productos_sku_box";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "sku";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_sku_box"
));

$proto13["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto13["m_srcTableName"] = "cat_ventas_productos_sku_box";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "cat_ventas_productos_sku";
$proto16["m_srcTableName"] = "cat_ventas_productos_sku_box";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "cat_ventas_productos_sku_id";
$proto16["m_columns"][] = "time_stamp";
$proto16["m_columns"][] = "vigente";
$proto16["m_columns"][] = "capturista";
$proto16["m_columns"][] = "cat_ventas_productos_variedades_id";
$proto16["m_columns"][] = "descripcion_ventas_productos_sku";
$proto16["m_columns"][] = "cat_ventas_productos_manejo_id";
$proto16["m_columns"][] = "upc_ventas_productos";
$proto16["m_columns"][] = "cat_ventas_productos_marcas_id";
$proto16["m_columns"][] = "numero_sku";
$proto16["m_columns"][] = "cat_ventas_clientes_id";
$proto16["m_columns"][] = "cat_ventas_productos_tipo_de_pedido_id";
$proto16["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto16["m_columns"][] = "sku_capacidad";
$proto16["m_columns"][] = "ajuste_empaque";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "cat_ventas_productos_sku";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "cat_ventas_productos_sku_box";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
												$proto19=array();
$proto19["m_link"] = "SQLL_LEFTJOIN";
			$proto20=array();
$proto20["m_strName"] = "cat_usuarios";
$proto20["m_srcTableName"] = "cat_ventas_productos_sku_box";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "cat_usuarios_id";
$proto20["m_columns"][] = "time_stamp";
$proto20["m_columns"][] = "vigente";
$proto20["m_columns"][] = "capturista";
$proto20["m_columns"][] = "usuario";
$proto20["m_columns"][] = "cat_usuarios_licencias_id";
$proto20["m_columns"][] = "pass";
$proto20["m_columns"][] = "nombre";
$proto20["m_columns"][] = "correo";
$proto20["m_columns"][] = "cat_trabajadores_altas_id";
$proto20["m_columns"][] = "res_autorizacion";
$proto20["m_columns"][] = "session";
$proto20["m_columns"][] = "tipo";
$proto20["m_columns"][] = "session_v2";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_sku.capturista = cat_usuarios.usuario";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "cat_ventas_productos_sku_box";
$proto21=array();
$proto21["m_sql"] = "cat_usuarios.usuario = cat_ventas_productos_sku.capturista";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_sku_box"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= cat_ventas_productos_sku.capturista";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_sku_box";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_sku_box = createSqlQuery_cat_ventas_productos_sku_box();


	
		;

			

$tdatacat_ventas_productos_sku_box[".sqlquery"] = $queryData_cat_ventas_productos_sku_box;



$tdatacat_ventas_productos_sku_box[".hasEvents"] = false;

?>