<?php
$tdatabox_cat_finanzas_centros_de_costos = array();
$tdatabox_cat_finanzas_centros_de_costos[".searchableFields"] = array();
$tdatabox_cat_finanzas_centros_de_costos[".ShortName"] = "box_cat_finanzas_centros_de_costos";
$tdatabox_cat_finanzas_centros_de_costos[".OwnerID"] = "";
$tdatabox_cat_finanzas_centros_de_costos[".OriginalTable"] = "cat_finanzas_centros_de_costos";


$tdatabox_cat_finanzas_centros_de_costos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_finanzas_centros_de_costos[".originalPagesByType"] = $tdatabox_cat_finanzas_centros_de_costos[".pagesByType"];
$tdatabox_cat_finanzas_centros_de_costos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_finanzas_centros_de_costos[".originalPages"] = $tdatabox_cat_finanzas_centros_de_costos[".pages"];
$tdatabox_cat_finanzas_centros_de_costos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_finanzas_centros_de_costos[".originalDefaultPages"] = $tdatabox_cat_finanzas_centros_de_costos[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_finanzas_centros_de_costos = array();
$fieldToolTipsbox_cat_finanzas_centros_de_costos = array();
$pageTitlesbox_cat_finanzas_centros_de_costos = array();
$placeHoldersbox_cat_finanzas_centros_de_costos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_finanzas_centros_de_costos["Spanish"] = array();
	$fieldToolTipsbox_cat_finanzas_centros_de_costos["Spanish"] = array();
	$placeHoldersbox_cat_finanzas_centros_de_costos["Spanish"] = array();
	$pageTitlesbox_cat_finanzas_centros_de_costos["Spanish"] = array();
	$fieldLabelsbox_cat_finanzas_centros_de_costos["Spanish"]["cat_finanzas_centros_de_costos_id"] = "Id";
	$fieldToolTipsbox_cat_finanzas_centros_de_costos["Spanish"]["cat_finanzas_centros_de_costos_id"] = "";
	$placeHoldersbox_cat_finanzas_centros_de_costos["Spanish"]["cat_finanzas_centros_de_costos_id"] = "";
	$fieldLabelsbox_cat_finanzas_centros_de_costos["Spanish"]["descripcion_centro_de_costos"] = "Descripcion CCs";
	$fieldToolTipsbox_cat_finanzas_centros_de_costos["Spanish"]["descripcion_centro_de_costos"] = "";
	$placeHoldersbox_cat_finanzas_centros_de_costos["Spanish"]["descripcion_centro_de_costos"] = "";
	$fieldLabelsbox_cat_finanzas_centros_de_costos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_finanzas_centros_de_costos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_finanzas_centros_de_costos["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipsbox_cat_finanzas_centros_de_costos["Spanish"]))
		$tdatabox_cat_finanzas_centros_de_costos[".isUseToolTips"] = true;
}





$tdatabox_cat_finanzas_centros_de_costos[".shortTableName"] = "box_cat_finanzas_centros_de_costos";
$tdatabox_cat_finanzas_centros_de_costos[".nSecOptions"] = 0;

$tdatabox_cat_finanzas_centros_de_costos[".mainTableOwnerID"] = "";
$tdatabox_cat_finanzas_centros_de_costos[".entityType"] = 1;
$tdatabox_cat_finanzas_centros_de_costos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_finanzas_centros_de_costos[".strOriginalTableName"] = "cat_finanzas_centros_de_costos";

	



$tdatabox_cat_finanzas_centros_de_costos[".showAddInPopup"] = false;

$tdatabox_cat_finanzas_centros_de_costos[".showEditInPopup"] = false;

$tdatabox_cat_finanzas_centros_de_costos[".showViewInPopup"] = false;

$tdatabox_cat_finanzas_centros_de_costos[".listAjax"] = false;
//	temporary
//$tdatabox_cat_finanzas_centros_de_costos[".listAjax"] = false;

	$tdatabox_cat_finanzas_centros_de_costos[".audit"] = true;

	$tdatabox_cat_finanzas_centros_de_costos[".locking"] = true;


$pages = $tdatabox_cat_finanzas_centros_de_costos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_finanzas_centros_de_costos[".edit"] = true;
	$tdatabox_cat_finanzas_centros_de_costos[".afterEditAction"] = 1;
	$tdatabox_cat_finanzas_centros_de_costos[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_finanzas_centros_de_costos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_finanzas_centros_de_costos[".add"] = true;
$tdatabox_cat_finanzas_centros_de_costos[".afterAddAction"] = 1;
$tdatabox_cat_finanzas_centros_de_costos[".closePopupAfterAdd"] = 1;
$tdatabox_cat_finanzas_centros_de_costos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_finanzas_centros_de_costos[".list"] = true;
}



$tdatabox_cat_finanzas_centros_de_costos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_finanzas_centros_de_costos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_finanzas_centros_de_costos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_finanzas_centros_de_costos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_finanzas_centros_de_costos[".printFriendly"] = true;
}



$tdatabox_cat_finanzas_centros_de_costos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_finanzas_centros_de_costos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_finanzas_centros_de_costos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_finanzas_centros_de_costos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_finanzas_centros_de_costos[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_finanzas_centros_de_costos[".buttonsAdded"] = false;

$tdatabox_cat_finanzas_centros_de_costos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatabox_cat_finanzas_centros_de_costos[".isUseTimeForSearch"] = false;


$tdatabox_cat_finanzas_centros_de_costos[".badgeColor"] = "6493EA";


$tdatabox_cat_finanzas_centros_de_costos[".allSearchFields"] = array();
$tdatabox_cat_finanzas_centros_de_costos[".filterFields"] = array();
$tdatabox_cat_finanzas_centros_de_costos[".requiredSearchFields"] = array();

$tdatabox_cat_finanzas_centros_de_costos[".googleLikeFields"] = array();
$tdatabox_cat_finanzas_centros_de_costos[".googleLikeFields"][] = "cat_finanzas_centros_de_costos_id";
$tdatabox_cat_finanzas_centros_de_costos[".googleLikeFields"][] = "descripcion_centro_de_costos";
$tdatabox_cat_finanzas_centros_de_costos[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_finanzas_centros_de_costos[".tableType"] = "list";

$tdatabox_cat_finanzas_centros_de_costos[".printerPageOrientation"] = 0;
$tdatabox_cat_finanzas_centros_de_costos[".nPrinterPageScale"] = 100;

$tdatabox_cat_finanzas_centros_de_costos[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_finanzas_centros_de_costos[".geocodingEnabled"] = false;





$tdatabox_cat_finanzas_centros_de_costos[".isResizeColumns"] = true;





$tdatabox_cat_finanzas_centros_de_costos[".pageSize"] = 20;

$tdatabox_cat_finanzas_centros_de_costos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_finanzas_centros_de_costos[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_finanzas_centros_de_costos[".orderindexes"] = array();


$tdatabox_cat_finanzas_centros_de_costos[".sqlHead"] = "SELECT cat_finanzas_centros_de_costos.cat_finanzas_centros_de_costos_id,  cat_finanzas_centros_de_costos.descripcion_centro_de_costos,  cat_usuarios.cat_usuarios_licencias_id AS cat_usuarios_licencias_id";
$tdatabox_cat_finanzas_centros_de_costos[".sqlFrom"] = "FROM cat_finanzas_centros_de_costos  INNER JOIN cat_usuarios ON cat_finanzas_centros_de_costos.capturista = cat_usuarios.usuario";
$tdatabox_cat_finanzas_centros_de_costos[".sqlWhereExpr"] = "(cat_finanzas_centros_de_costos.vigente =1)";
$tdatabox_cat_finanzas_centros_de_costos[".sqlTail"] = "";

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
$tdatabox_cat_finanzas_centros_de_costos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_finanzas_centros_de_costos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_finanzas_centros_de_costos[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_finanzas_centros_de_costos[".highlightSearchResults"] = true;

$tableKeysbox_cat_finanzas_centros_de_costos = array();
$tableKeysbox_cat_finanzas_centros_de_costos[] = "cat_finanzas_centros_de_costos_id";
$tdatabox_cat_finanzas_centros_de_costos[".Keys"] = $tableKeysbox_cat_finanzas_centros_de_costos;


$tdatabox_cat_finanzas_centros_de_costos[".hideMobileList"] = array();




//	cat_finanzas_centros_de_costos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_centros_de_costos_id";
	$fdata["GoodName"] = "cat_finanzas_centros_de_costos_id";
	$fdata["ownerTable"] = "cat_finanzas_centros_de_costos";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_centros_de_costos","cat_finanzas_centros_de_costos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_centros_de_costos_id";

		$fdata["sourceSingle"] = "cat_finanzas_centros_de_costos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_centros_de_costos.cat_finanzas_centros_de_costos_id";

	
	
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


	$tdatabox_cat_finanzas_centros_de_costos["cat_finanzas_centros_de_costos_id"] = $fdata;
		$tdatabox_cat_finanzas_centros_de_costos[".searchableFields"][] = "cat_finanzas_centros_de_costos_id";
//	descripcion_centro_de_costos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_centro_de_costos";
	$fdata["GoodName"] = "descripcion_centro_de_costos";
	$fdata["ownerTable"] = "cat_finanzas_centros_de_costos";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_centros_de_costos","descripcion_centro_de_costos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_centro_de_costos";

		$fdata["sourceSingle"] = "descripcion_centro_de_costos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_centros_de_costos.descripcion_centro_de_costos";

	
	
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


	$tdatabox_cat_finanzas_centros_de_costos["descripcion_centro_de_costos"] = $fdata;
		$tdatabox_cat_finanzas_centros_de_costos[".searchableFields"][] = "descripcion_centro_de_costos";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_centros_de_costos","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

		$fdata["sourceSingle"] = "cat_usuarios_licencias_id";

	
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


	$tdatabox_cat_finanzas_centros_de_costos["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_finanzas_centros_de_costos[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_finanzas_centros_de_costos"]=&$tdatabox_cat_finanzas_centros_de_costos;
$field_labels["box_cat_finanzas_centros_de_costos"] = &$fieldLabelsbox_cat_finanzas_centros_de_costos;
$fieldToolTips["box_cat_finanzas_centros_de_costos"] = &$fieldToolTipsbox_cat_finanzas_centros_de_costos;
$placeHolders["box_cat_finanzas_centros_de_costos"] = &$placeHoldersbox_cat_finanzas_centros_de_costos;
$page_titles["box_cat_finanzas_centros_de_costos"] = &$pageTitlesbox_cat_finanzas_centros_de_costos;


changeTextControlsToDate( "box_cat_finanzas_centros_de_costos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_finanzas_centros_de_costos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_finanzas_centros_de_costos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_finanzas_centros_de_costos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_centros_de_costos.cat_finanzas_centros_de_costos_id,  cat_finanzas_centros_de_costos.descripcion_centro_de_costos,  cat_usuarios.cat_usuarios_licencias_id AS cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_centros_de_costos  INNER JOIN cat_usuarios ON cat_finanzas_centros_de_costos.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_finanzas_centros_de_costos.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_finanzas_centros_de_costos.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_centros_de_costos",
	"m_srcTableName" => "box_cat_finanzas_centros_de_costos"
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
	"m_strName" => "cat_finanzas_centros_de_costos_id",
	"m_strTable" => "cat_finanzas_centros_de_costos",
	"m_srcTableName" => "box_cat_finanzas_centros_de_costos"
));

$proto6["m_sql"] = "cat_finanzas_centros_de_costos.cat_finanzas_centros_de_costos_id";
$proto6["m_srcTableName"] = "box_cat_finanzas_centros_de_costos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_centro_de_costos",
	"m_strTable" => "cat_finanzas_centros_de_costos",
	"m_srcTableName" => "box_cat_finanzas_centros_de_costos"
));

$proto8["m_sql"] = "cat_finanzas_centros_de_costos.descripcion_centro_de_costos";
$proto8["m_srcTableName"] = "box_cat_finanzas_centros_de_costos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_finanzas_centros_de_costos"
));

$proto10["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto10["m_srcTableName"] = "box_cat_finanzas_centros_de_costos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "cat_usuarios_licencias_id";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "cat_finanzas_centros_de_costos";
$proto13["m_srcTableName"] = "box_cat_finanzas_centros_de_costos";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "cat_finanzas_centros_de_costos_id";
$proto13["m_columns"][] = "time_stamp";
$proto13["m_columns"][] = "vigente";
$proto13["m_columns"][] = "capturista";
$proto13["m_columns"][] = "descripcion_centro_de_costos";
$proto13["m_columns"][] = "cat_holding_01_id";
$proto13["m_columns"][] = "cat_holding_02_empresas_id";
$proto13["m_columns"][] = "cat_holding_03_empresas_departamentos_id";
$proto13["m_columns"][] = "cat_holding_03_empresas_registros_patronales_id";
$proto13["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto13["m_columns"][] = "cat_holding_03_empresas_almacenes_id";
$proto13["m_columns"][] = "cat_ventas_productos_id";
$proto13["m_columns"][] = "cat_ventas_productos_lotes_id";
$proto13["m_columns"][] = "cat_ventas_clientes_id";
$proto13["m_columns"][] = "cat_ventas_productos_sku_id";
$proto13["m_columns"][] = "llave_hedruaplcs_fi_ff";
$proto13["m_columns"][] = "cat_usuarios_licencias_id";
$proto13["m_columns"][] = "fecha_de_incio";
$proto13["m_columns"][] = "fecha_final";
$proto13["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto13["m_columns"][] = "cat_finanzas_centros_de_costos_categorias_mu_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "cat_finanzas_centros_de_costos";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "box_cat_finanzas_centros_de_costos";
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
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "cat_usuarios";
$proto17["m_srcTableName"] = "box_cat_finanzas_centros_de_costos";
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
$proto16["m_sql"] = "INNER JOIN cat_usuarios ON cat_finanzas_centros_de_costos.capturista = cat_usuarios.usuario";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "box_cat_finanzas_centros_de_costos";
$proto18=array();
$proto18["m_sql"] = "cat_usuarios.usuario = cat_finanzas_centros_de_costos.capturista";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_finanzas_centros_de_costos"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= cat_finanzas_centros_de_costos.capturista";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_finanzas_centros_de_costos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_finanzas_centros_de_costos = createSqlQuery_box_cat_finanzas_centros_de_costos();


	
		;

			

$tdatabox_cat_finanzas_centros_de_costos[".sqlquery"] = $queryData_box_cat_finanzas_centros_de_costos;



include_once(getabspath("include/box_cat_finanzas_centros_de_costos_events.php"));
$tdatabox_cat_finanzas_centros_de_costos[".hasEvents"] = true;

?>