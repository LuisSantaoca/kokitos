<?php
$tdatabox_cat_actividades_unidades_de_costo = array();
$tdatabox_cat_actividades_unidades_de_costo[".searchableFields"] = array();
$tdatabox_cat_actividades_unidades_de_costo[".ShortName"] = "box_cat_actividades_unidades_de_costo";
$tdatabox_cat_actividades_unidades_de_costo[".OwnerID"] = "";
$tdatabox_cat_actividades_unidades_de_costo[".OriginalTable"] = "cat_actividades_unidades_de_costo";


$tdatabox_cat_actividades_unidades_de_costo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_actividades_unidades_de_costo[".originalPagesByType"] = $tdatabox_cat_actividades_unidades_de_costo[".pagesByType"];
$tdatabox_cat_actividades_unidades_de_costo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_actividades_unidades_de_costo[".originalPages"] = $tdatabox_cat_actividades_unidades_de_costo[".pages"];
$tdatabox_cat_actividades_unidades_de_costo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_actividades_unidades_de_costo[".originalDefaultPages"] = $tdatabox_cat_actividades_unidades_de_costo[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_actividades_unidades_de_costo = array();
$fieldToolTipsbox_cat_actividades_unidades_de_costo = array();
$pageTitlesbox_cat_actividades_unidades_de_costo = array();
$placeHoldersbox_cat_actividades_unidades_de_costo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_actividades_unidades_de_costo["Spanish"] = array();
	$fieldToolTipsbox_cat_actividades_unidades_de_costo["Spanish"] = array();
	$placeHoldersbox_cat_actividades_unidades_de_costo["Spanish"] = array();
	$pageTitlesbox_cat_actividades_unidades_de_costo["Spanish"] = array();
	$fieldLabelsbox_cat_actividades_unidades_de_costo["Spanish"]["cat_actividades_unidades_de_costo_id"] = "Id";
	$fieldToolTipsbox_cat_actividades_unidades_de_costo["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$placeHoldersbox_cat_actividades_unidades_de_costo["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$fieldLabelsbox_cat_actividades_unidades_de_costo["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_actividades_unidades_de_costo["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_actividades_unidades_de_costo["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_cat_actividades_unidades_de_costo["Spanish"]["unidad"] = "Unidad";
	$fieldToolTipsbox_cat_actividades_unidades_de_costo["Spanish"]["unidad"] = "";
	$placeHoldersbox_cat_actividades_unidades_de_costo["Spanish"]["unidad"] = "";
	if (count($fieldToolTipsbox_cat_actividades_unidades_de_costo["Spanish"]))
		$tdatabox_cat_actividades_unidades_de_costo[".isUseToolTips"] = true;
}





$tdatabox_cat_actividades_unidades_de_costo[".shortTableName"] = "box_cat_actividades_unidades_de_costo";
$tdatabox_cat_actividades_unidades_de_costo[".nSecOptions"] = 0;

$tdatabox_cat_actividades_unidades_de_costo[".mainTableOwnerID"] = "";
$tdatabox_cat_actividades_unidades_de_costo[".entityType"] = 1;
$tdatabox_cat_actividades_unidades_de_costo[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_actividades_unidades_de_costo[".strOriginalTableName"] = "cat_actividades_unidades_de_costo";

	



$tdatabox_cat_actividades_unidades_de_costo[".showAddInPopup"] = false;

$tdatabox_cat_actividades_unidades_de_costo[".showEditInPopup"] = false;

$tdatabox_cat_actividades_unidades_de_costo[".showViewInPopup"] = false;

$tdatabox_cat_actividades_unidades_de_costo[".listAjax"] = false;
//	temporary
//$tdatabox_cat_actividades_unidades_de_costo[".listAjax"] = false;

	$tdatabox_cat_actividades_unidades_de_costo[".audit"] = true;

	$tdatabox_cat_actividades_unidades_de_costo[".locking"] = true;


$pages = $tdatabox_cat_actividades_unidades_de_costo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_actividades_unidades_de_costo[".edit"] = true;
	$tdatabox_cat_actividades_unidades_de_costo[".afterEditAction"] = 1;
	$tdatabox_cat_actividades_unidades_de_costo[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_actividades_unidades_de_costo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_actividades_unidades_de_costo[".add"] = true;
$tdatabox_cat_actividades_unidades_de_costo[".afterAddAction"] = 1;
$tdatabox_cat_actividades_unidades_de_costo[".closePopupAfterAdd"] = 1;
$tdatabox_cat_actividades_unidades_de_costo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_actividades_unidades_de_costo[".list"] = true;
}



$tdatabox_cat_actividades_unidades_de_costo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_actividades_unidades_de_costo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_actividades_unidades_de_costo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_actividades_unidades_de_costo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_actividades_unidades_de_costo[".printFriendly"] = true;
}



$tdatabox_cat_actividades_unidades_de_costo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_actividades_unidades_de_costo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_actividades_unidades_de_costo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_actividades_unidades_de_costo[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_actividades_unidades_de_costo[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_actividades_unidades_de_costo[".buttonsAdded"] = false;

$tdatabox_cat_actividades_unidades_de_costo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_actividades_unidades_de_costo[".isUseTimeForSearch"] = false;


$tdatabox_cat_actividades_unidades_de_costo[".badgeColor"] = "7B68EE";


$tdatabox_cat_actividades_unidades_de_costo[".allSearchFields"] = array();
$tdatabox_cat_actividades_unidades_de_costo[".filterFields"] = array();
$tdatabox_cat_actividades_unidades_de_costo[".requiredSearchFields"] = array();

$tdatabox_cat_actividades_unidades_de_costo[".googleLikeFields"] = array();
$tdatabox_cat_actividades_unidades_de_costo[".googleLikeFields"][] = "cat_actividades_unidades_de_costo_id";
$tdatabox_cat_actividades_unidades_de_costo[".googleLikeFields"][] = "unidad";
$tdatabox_cat_actividades_unidades_de_costo[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_actividades_unidades_de_costo[".tableType"] = "list";

$tdatabox_cat_actividades_unidades_de_costo[".printerPageOrientation"] = 0;
$tdatabox_cat_actividades_unidades_de_costo[".nPrinterPageScale"] = 100;

$tdatabox_cat_actividades_unidades_de_costo[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_actividades_unidades_de_costo[".geocodingEnabled"] = false;





$tdatabox_cat_actividades_unidades_de_costo[".isResizeColumns"] = true;





$tdatabox_cat_actividades_unidades_de_costo[".pageSize"] = 20;

$tdatabox_cat_actividades_unidades_de_costo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_actividades_unidades_de_costo[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_actividades_unidades_de_costo[".orderindexes"] = array();


$tdatabox_cat_actividades_unidades_de_costo[".sqlHead"] = "SELECT cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id,  concat(cat_actividades_unidades_de_costo.factor_de_calculo, '-', cat_actividades_unidades_de_costo.descripcion_unidades_de_costo) AS unidad,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_cat_actividades_unidades_de_costo[".sqlFrom"] = "FROM cat_actividades_unidades_de_costo  LEFT OUTER JOIN cat_usuarios ON cat_actividades_unidades_de_costo.capturista = cat_usuarios.usuario";
$tdatabox_cat_actividades_unidades_de_costo[".sqlWhereExpr"] = "(cat_actividades_unidades_de_costo.vigente =1)";
$tdatabox_cat_actividades_unidades_de_costo[".sqlTail"] = "";

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
$tdatabox_cat_actividades_unidades_de_costo[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_actividades_unidades_de_costo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_actividades_unidades_de_costo[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_actividades_unidades_de_costo[".highlightSearchResults"] = true;

$tableKeysbox_cat_actividades_unidades_de_costo = array();
$tableKeysbox_cat_actividades_unidades_de_costo[] = "cat_actividades_unidades_de_costo_id";
$tdatabox_cat_actividades_unidades_de_costo[".Keys"] = $tableKeysbox_cat_actividades_unidades_de_costo;


$tdatabox_cat_actividades_unidades_de_costo[".hideMobileList"] = array();




//	cat_actividades_unidades_de_costo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["GoodName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["ownerTable"] = "cat_actividades_unidades_de_costo";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_unidades_de_costo","cat_actividades_unidades_de_costo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_actividades_unidades_de_costo_id";

		$fdata["sourceSingle"] = "cat_actividades_unidades_de_costo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id";

	
	
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


	$tdatabox_cat_actividades_unidades_de_costo["cat_actividades_unidades_de_costo_id"] = $fdata;
		$tdatabox_cat_actividades_unidades_de_costo[".searchableFields"][] = "cat_actividades_unidades_de_costo_id";
//	unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "unidad";
	$fdata["GoodName"] = "unidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_unidades_de_costo","unidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "unidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(cat_actividades_unidades_de_costo.factor_de_calculo, '-', cat_actividades_unidades_de_costo.descripcion_unidades_de_costo)";

	
	
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


	$tdatabox_cat_actividades_unidades_de_costo["unidad"] = $fdata;
		$tdatabox_cat_actividades_unidades_de_costo[".searchableFields"][] = "unidad";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_unidades_de_costo","cat_usuarios_licencias_id");
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


	$tdatabox_cat_actividades_unidades_de_costo["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_actividades_unidades_de_costo[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_actividades_unidades_de_costo"]=&$tdatabox_cat_actividades_unidades_de_costo;
$field_labels["box_cat_actividades_unidades_de_costo"] = &$fieldLabelsbox_cat_actividades_unidades_de_costo;
$fieldToolTips["box_cat_actividades_unidades_de_costo"] = &$fieldToolTipsbox_cat_actividades_unidades_de_costo;
$placeHolders["box_cat_actividades_unidades_de_costo"] = &$placeHoldersbox_cat_actividades_unidades_de_costo;
$page_titles["box_cat_actividades_unidades_de_costo"] = &$pageTitlesbox_cat_actividades_unidades_de_costo;


changeTextControlsToDate( "box_cat_actividades_unidades_de_costo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_actividades_unidades_de_costo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_actividades_unidades_de_costo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_actividades_unidades_de_costo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id,  concat(cat_actividades_unidades_de_costo.factor_de_calculo, '-', cat_actividades_unidades_de_costo.descripcion_unidades_de_costo) AS unidad,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_actividades_unidades_de_costo  LEFT OUTER JOIN cat_usuarios ON cat_actividades_unidades_de_costo.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_actividades_unidades_de_costo.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_actividades_unidades_de_costo.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_actividades_unidades_de_costo",
	"m_srcTableName" => "box_cat_actividades_unidades_de_costo"
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
	"m_strName" => "cat_actividades_unidades_de_costo_id",
	"m_strTable" => "cat_actividades_unidades_de_costo",
	"m_srcTableName" => "box_cat_actividades_unidades_de_costo"
));

$proto6["m_sql"] = "cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id";
$proto6["m_srcTableName"] = "box_cat_actividades_unidades_de_costo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_actividades_unidades_de_costo.factor_de_calculo"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_actividades_unidades_de_costo.descripcion_unidades_de_costo"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "concat(cat_actividades_unidades_de_costo.factor_de_calculo, '-', cat_actividades_unidades_de_costo.descripcion_unidades_de_costo)";
$proto8["m_srcTableName"] = "box_cat_actividades_unidades_de_costo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "unidad";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_actividades_unidades_de_costo"
));

$proto13["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto13["m_srcTableName"] = "box_cat_actividades_unidades_de_costo";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "cat_actividades_unidades_de_costo";
$proto16["m_srcTableName"] = "box_cat_actividades_unidades_de_costo";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "cat_actividades_unidades_de_costo_id";
$proto16["m_columns"][] = "time_stamp";
$proto16["m_columns"][] = "vigente";
$proto16["m_columns"][] = "capturista";
$proto16["m_columns"][] = "descripcion_unidades_de_costo";
$proto16["m_columns"][] = "factor_de_calculo";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "cat_actividades_unidades_de_costo";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "box_cat_actividades_unidades_de_costo";
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
$proto20["m_srcTableName"] = "box_cat_actividades_unidades_de_costo";
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
$proto19["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_actividades_unidades_de_costo.capturista = cat_usuarios.usuario";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "box_cat_actividades_unidades_de_costo";
$proto21=array();
$proto21["m_sql"] = "cat_usuarios.usuario = cat_actividades_unidades_de_costo.capturista";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_actividades_unidades_de_costo"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= cat_actividades_unidades_de_costo.capturista";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_actividades_unidades_de_costo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_actividades_unidades_de_costo = createSqlQuery_box_cat_actividades_unidades_de_costo();


	
		;

			

$tdatabox_cat_actividades_unidades_de_costo[".sqlquery"] = $queryData_box_cat_actividades_unidades_de_costo;



$tdatabox_cat_actividades_unidades_de_costo[".hasEvents"] = false;

?>