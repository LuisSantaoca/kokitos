<?php
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre = array();
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".searchableFields"] = array();
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".ShortName"] = "box_cat_control_aplicaciones_recetas_cts_01_nombre";
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".OwnerID"] = "";
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".OriginalTable"] = "cat_control_aplicaciones_recetas_cts_01_nombre";


$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".originalPagesByType"] = $tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".pagesByType"];
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".originalPages"] = $tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".pages"];
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".originalDefaultPages"] = $tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_control_aplicaciones_recetas_cts_01_nombre = array();
$fieldToolTipsbox_cat_control_aplicaciones_recetas_cts_01_nombre = array();
$pageTitlesbox_cat_control_aplicaciones_recetas_cts_01_nombre = array();
$placeHoldersbox_cat_control_aplicaciones_recetas_cts_01_nombre = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"] = array();
	$fieldToolTipsbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"] = array();
	$placeHoldersbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"] = array();
	$pageTitlesbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"] = array();
	$fieldLabelsbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"]["descripcion_receta"] = "Descripcion Receta";
	$fieldToolTipsbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"]["descripcion_receta"] = "";
	$placeHoldersbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"]["descripcion_receta"] = "";
	$fieldLabelsbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"]["uuid_recetas_app"] = "Uuid Recetas App";
	$fieldToolTipsbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"]["uuid_recetas_app"] = "";
	$placeHoldersbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"]["uuid_recetas_app"] = "";
	$fieldLabelsbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipsbox_cat_control_aplicaciones_recetas_cts_01_nombre["Spanish"]))
		$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".isUseToolTips"] = true;
}





$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".shortTableName"] = "box_cat_control_aplicaciones_recetas_cts_01_nombre";
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".nSecOptions"] = 0;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".mainTableOwnerID"] = "";
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".entityType"] = 1;
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".strOriginalTableName"] = "cat_control_aplicaciones_recetas_cts_01_nombre";

	



$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".showAddInPopup"] = false;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".showEditInPopup"] = false;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".showViewInPopup"] = false;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".listAjax"] = false;
//	temporary
//$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".listAjax"] = false;

	$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".audit"] = false;

	$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".locking"] = false;


$pages = $tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".edit"] = true;
	$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".afterEditAction"] = 1;
	$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".add"] = true;
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".afterAddAction"] = 1;
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".closePopupAfterAdd"] = 1;
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".list"] = true;
}



$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".printFriendly"] = true;
}



$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".buttonsAdded"] = false;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".isUseTimeForSearch"] = false;


$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".badgeColor"] = "E8926F";


$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".allSearchFields"] = array();
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".filterFields"] = array();
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".requiredSearchFields"] = array();

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".googleLikeFields"] = array();
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".googleLikeFields"][] = "descripcion_receta";
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".googleLikeFields"][] = "uuid_recetas_app";
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".tableType"] = "list";

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".printerPageOrientation"] = 0;
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".nPrinterPageScale"] = 100;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".geocodingEnabled"] = false;





$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".isResizeColumns"] = true;





$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".pageSize"] = 20;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".orderindexes"] = array();


$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".sqlHead"] = "SELECT descripcion_receta,  uuid_recetas_app,  cat_usuarios_licencias_id";
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".sqlFrom"] = "FROM cat_control_aplicaciones_recetas_cts_01_nombre";
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".sqlWhereExpr"] = "(vigente =1)";
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".highlightSearchResults"] = true;

$tableKeysbox_cat_control_aplicaciones_recetas_cts_01_nombre = array();
$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".Keys"] = $tableKeysbox_cat_control_aplicaciones_recetas_cts_01_nombre;


$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".hideMobileList"] = array();




//	descripcion_receta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "descripcion_receta";
	$fdata["GoodName"] = "descripcion_receta";
	$fdata["ownerTable"] = "cat_control_aplicaciones_recetas_cts_01_nombre";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_recetas_cts_01_nombre","descripcion_receta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_receta";

		$fdata["sourceSingle"] = "descripcion_receta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_receta";

	
	
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


	$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre["descripcion_receta"] = $fdata;
		$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".searchableFields"][] = "descripcion_receta";
//	uuid_recetas_app
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "uuid_recetas_app";
	$fdata["GoodName"] = "uuid_recetas_app";
	$fdata["ownerTable"] = "cat_control_aplicaciones_recetas_cts_01_nombre";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_recetas_cts_01_nombre","uuid_recetas_app");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uuid_recetas_app";

		$fdata["sourceSingle"] = "uuid_recetas_app";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uuid_recetas_app";

	
	
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


	$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre["uuid_recetas_app"] = $fdata;
		$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".searchableFields"][] = "uuid_recetas_app";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_control_aplicaciones_recetas_cts_01_nombre";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_recetas_cts_01_nombre","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

		$fdata["sourceSingle"] = "cat_usuarios_licencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_licencias_id";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_control_aplicaciones_recetas_cts_01_nombre"]=&$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre;
$field_labels["box_cat_control_aplicaciones_recetas_cts_01_nombre"] = &$fieldLabelsbox_cat_control_aplicaciones_recetas_cts_01_nombre;
$fieldToolTips["box_cat_control_aplicaciones_recetas_cts_01_nombre"] = &$fieldToolTipsbox_cat_control_aplicaciones_recetas_cts_01_nombre;
$placeHolders["box_cat_control_aplicaciones_recetas_cts_01_nombre"] = &$placeHoldersbox_cat_control_aplicaciones_recetas_cts_01_nombre;
$page_titles["box_cat_control_aplicaciones_recetas_cts_01_nombre"] = &$pageTitlesbox_cat_control_aplicaciones_recetas_cts_01_nombre;


changeTextControlsToDate( "box_cat_control_aplicaciones_recetas_cts_01_nombre" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_control_aplicaciones_recetas_cts_01_nombre"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_control_aplicaciones_recetas_cts_01_nombre"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_control_aplicaciones_recetas_cts_01_nombre()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "descripcion_receta,  uuid_recetas_app,  cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_control_aplicaciones_recetas_cts_01_nombre";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_aplicaciones_recetas_cts_01_nombre",
	"m_srcTableName" => "box_cat_control_aplicaciones_recetas_cts_01_nombre"
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
	"m_strName" => "descripcion_receta",
	"m_strTable" => "cat_control_aplicaciones_recetas_cts_01_nombre",
	"m_srcTableName" => "box_cat_control_aplicaciones_recetas_cts_01_nombre"
));

$proto6["m_sql"] = "descripcion_receta";
$proto6["m_srcTableName"] = "box_cat_control_aplicaciones_recetas_cts_01_nombre";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "uuid_recetas_app",
	"m_strTable" => "cat_control_aplicaciones_recetas_cts_01_nombre",
	"m_srcTableName" => "box_cat_control_aplicaciones_recetas_cts_01_nombre"
));

$proto8["m_sql"] = "uuid_recetas_app";
$proto8["m_srcTableName"] = "box_cat_control_aplicaciones_recetas_cts_01_nombre";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_control_aplicaciones_recetas_cts_01_nombre",
	"m_srcTableName" => "box_cat_control_aplicaciones_recetas_cts_01_nombre"
));

$proto10["m_sql"] = "cat_usuarios_licencias_id";
$proto10["m_srcTableName"] = "box_cat_control_aplicaciones_recetas_cts_01_nombre";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "cat_control_aplicaciones_recetas_cts_01_nombre";
$proto13["m_srcTableName"] = "box_cat_control_aplicaciones_recetas_cts_01_nombre";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cat_control_aplicaciones_recetas_cts_01_nombre_id";
$proto13["m_columns"][] = "uuid_recetas_app";
$proto13["m_columns"][] = "descripcion_receta";
$proto13["m_columns"][] = "cat_control_aplicaciones_alcance_mu_id";
$proto13["m_columns"][] = "cat_usuarios_licencias_id";
$proto13["m_columns"][] = "capturista";
$proto13["m_columns"][] = "vigente";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "cat_control_aplicaciones_recetas_cts_01_nombre";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "box_cat_control_aplicaciones_recetas_cts_01_nombre";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_control_aplicaciones_recetas_cts_01_nombre";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_control_aplicaciones_recetas_cts_01_nombre = createSqlQuery_box_cat_control_aplicaciones_recetas_cts_01_nombre();


	
		;

			

$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".sqlquery"] = $queryData_box_cat_control_aplicaciones_recetas_cts_01_nombre;



$tdatabox_cat_control_aplicaciones_recetas_cts_01_nombre[".hasEvents"] = false;

?>