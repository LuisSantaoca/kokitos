<?php
$tdatabox_cat_control_plagas_y_enfermedades = array();
$tdatabox_cat_control_plagas_y_enfermedades[".searchableFields"] = array();
$tdatabox_cat_control_plagas_y_enfermedades[".ShortName"] = "box_cat_control_plagas_y_enfermedades";
$tdatabox_cat_control_plagas_y_enfermedades[".OwnerID"] = "";
$tdatabox_cat_control_plagas_y_enfermedades[".OriginalTable"] = "cat_control_plagas_y_enfermedades";


$tdatabox_cat_control_plagas_y_enfermedades[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_control_plagas_y_enfermedades[".originalPagesByType"] = $tdatabox_cat_control_plagas_y_enfermedades[".pagesByType"];
$tdatabox_cat_control_plagas_y_enfermedades[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_control_plagas_y_enfermedades[".originalPages"] = $tdatabox_cat_control_plagas_y_enfermedades[".pages"];
$tdatabox_cat_control_plagas_y_enfermedades[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_control_plagas_y_enfermedades[".originalDefaultPages"] = $tdatabox_cat_control_plagas_y_enfermedades[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_control_plagas_y_enfermedades = array();
$fieldToolTipsbox_cat_control_plagas_y_enfermedades = array();
$pageTitlesbox_cat_control_plagas_y_enfermedades = array();
$placeHoldersbox_cat_control_plagas_y_enfermedades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_control_plagas_y_enfermedades["Spanish"] = array();
	$fieldToolTipsbox_cat_control_plagas_y_enfermedades["Spanish"] = array();
	$placeHoldersbox_cat_control_plagas_y_enfermedades["Spanish"] = array();
	$pageTitlesbox_cat_control_plagas_y_enfermedades["Spanish"] = array();
	$fieldLabelsbox_cat_control_plagas_y_enfermedades["Spanish"]["cat_control_plagas_y_enfermedades_id"] = "Id";
	$fieldToolTipsbox_cat_control_plagas_y_enfermedades["Spanish"]["cat_control_plagas_y_enfermedades_id"] = "";
	$placeHoldersbox_cat_control_plagas_y_enfermedades["Spanish"]["cat_control_plagas_y_enfermedades_id"] = "";
	$fieldLabelsbox_cat_control_plagas_y_enfermedades["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_control_plagas_y_enfermedades["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_control_plagas_y_enfermedades["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_cat_control_plagas_y_enfermedades["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsbox_cat_control_plagas_y_enfermedades["Spanish"]["descripcion"] = "";
	$placeHoldersbox_cat_control_plagas_y_enfermedades["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsbox_cat_control_plagas_y_enfermedades["Spanish"]))
		$tdatabox_cat_control_plagas_y_enfermedades[".isUseToolTips"] = true;
}





$tdatabox_cat_control_plagas_y_enfermedades[".shortTableName"] = "box_cat_control_plagas_y_enfermedades";
$tdatabox_cat_control_plagas_y_enfermedades[".nSecOptions"] = 0;

$tdatabox_cat_control_plagas_y_enfermedades[".mainTableOwnerID"] = "";
$tdatabox_cat_control_plagas_y_enfermedades[".entityType"] = 1;
$tdatabox_cat_control_plagas_y_enfermedades[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_control_plagas_y_enfermedades[".strOriginalTableName"] = "cat_control_plagas_y_enfermedades";

	



$tdatabox_cat_control_plagas_y_enfermedades[".showAddInPopup"] = false;

$tdatabox_cat_control_plagas_y_enfermedades[".showEditInPopup"] = false;

$tdatabox_cat_control_plagas_y_enfermedades[".showViewInPopup"] = false;

$tdatabox_cat_control_plagas_y_enfermedades[".listAjax"] = false;
//	temporary
//$tdatabox_cat_control_plagas_y_enfermedades[".listAjax"] = false;

	$tdatabox_cat_control_plagas_y_enfermedades[".audit"] = false;

	$tdatabox_cat_control_plagas_y_enfermedades[".locking"] = false;


$pages = $tdatabox_cat_control_plagas_y_enfermedades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_control_plagas_y_enfermedades[".edit"] = true;
	$tdatabox_cat_control_plagas_y_enfermedades[".afterEditAction"] = 1;
	$tdatabox_cat_control_plagas_y_enfermedades[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_control_plagas_y_enfermedades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_control_plagas_y_enfermedades[".add"] = true;
$tdatabox_cat_control_plagas_y_enfermedades[".afterAddAction"] = 1;
$tdatabox_cat_control_plagas_y_enfermedades[".closePopupAfterAdd"] = 1;
$tdatabox_cat_control_plagas_y_enfermedades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_control_plagas_y_enfermedades[".list"] = true;
}



$tdatabox_cat_control_plagas_y_enfermedades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_control_plagas_y_enfermedades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_control_plagas_y_enfermedades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_control_plagas_y_enfermedades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_control_plagas_y_enfermedades[".printFriendly"] = true;
}



$tdatabox_cat_control_plagas_y_enfermedades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_control_plagas_y_enfermedades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_control_plagas_y_enfermedades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_control_plagas_y_enfermedades[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_control_plagas_y_enfermedades[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_control_plagas_y_enfermedades[".buttonsAdded"] = false;

$tdatabox_cat_control_plagas_y_enfermedades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_control_plagas_y_enfermedades[".isUseTimeForSearch"] = false;


$tdatabox_cat_control_plagas_y_enfermedades[".badgeColor"] = "5F9EA0";


$tdatabox_cat_control_plagas_y_enfermedades[".allSearchFields"] = array();
$tdatabox_cat_control_plagas_y_enfermedades[".filterFields"] = array();
$tdatabox_cat_control_plagas_y_enfermedades[".requiredSearchFields"] = array();

$tdatabox_cat_control_plagas_y_enfermedades[".googleLikeFields"] = array();
$tdatabox_cat_control_plagas_y_enfermedades[".googleLikeFields"][] = "descripcion";
$tdatabox_cat_control_plagas_y_enfermedades[".googleLikeFields"][] = "cat_control_plagas_y_enfermedades_id";
$tdatabox_cat_control_plagas_y_enfermedades[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_control_plagas_y_enfermedades[".tableType"] = "list";

$tdatabox_cat_control_plagas_y_enfermedades[".printerPageOrientation"] = 0;
$tdatabox_cat_control_plagas_y_enfermedades[".nPrinterPageScale"] = 100;

$tdatabox_cat_control_plagas_y_enfermedades[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_control_plagas_y_enfermedades[".geocodingEnabled"] = false;





$tdatabox_cat_control_plagas_y_enfermedades[".isResizeColumns"] = true;





$tdatabox_cat_control_plagas_y_enfermedades[".pageSize"] = 20;

$tdatabox_cat_control_plagas_y_enfermedades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_control_plagas_y_enfermedades[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_control_plagas_y_enfermedades[".orderindexes"] = array();


$tdatabox_cat_control_plagas_y_enfermedades[".sqlHead"] = "SELECT concat(cat_control_plagas_y_enfermedades.descripcion_plaga_enfermedad, '-', cat_control_plagas_y_enfermedades_categorias.descripcion_categoria_plaga_enfermedad) AS descripcion,  cat_control_plagas_y_enfermedades.cat_control_plagas_y_enfermedades_id,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_cat_control_plagas_y_enfermedades[".sqlFrom"] = "FROM cat_control_plagas_y_enfermedades  INNER JOIN cat_usuarios ON cat_control_plagas_y_enfermedades.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_control_plagas_y_enfermedades_categorias ON cat_control_plagas_y_enfermedades.cat_control_plagas_y_enfermedades_categorias_id = cat_control_plagas_y_enfermedades_categorias.cat_control_plagas_y_enfermedades_categorias_id";
$tdatabox_cat_control_plagas_y_enfermedades[".sqlWhereExpr"] = "(cat_control_plagas_y_enfermedades.vigente =1)";
$tdatabox_cat_control_plagas_y_enfermedades[".sqlTail"] = "";

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
$tdatabox_cat_control_plagas_y_enfermedades[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_control_plagas_y_enfermedades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_control_plagas_y_enfermedades[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_control_plagas_y_enfermedades[".highlightSearchResults"] = true;

$tableKeysbox_cat_control_plagas_y_enfermedades = array();
$tableKeysbox_cat_control_plagas_y_enfermedades[] = "cat_control_plagas_y_enfermedades_id";
$tdatabox_cat_control_plagas_y_enfermedades[".Keys"] = $tableKeysbox_cat_control_plagas_y_enfermedades;


$tdatabox_cat_control_plagas_y_enfermedades[".hideMobileList"] = array();




//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_cat_control_plagas_y_enfermedades","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(cat_control_plagas_y_enfermedades.descripcion_plaga_enfermedad, '-', cat_control_plagas_y_enfermedades_categorias.descripcion_categoria_plaga_enfermedad)";

	
	
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


	$tdatabox_cat_control_plagas_y_enfermedades["descripcion"] = $fdata;
		$tdatabox_cat_control_plagas_y_enfermedades[".searchableFields"][] = "descripcion";
//	cat_control_plagas_y_enfermedades_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_control_plagas_y_enfermedades_id";
	$fdata["GoodName"] = "cat_control_plagas_y_enfermedades_id";
	$fdata["ownerTable"] = "cat_control_plagas_y_enfermedades";
	$fdata["Label"] = GetFieldLabel("box_cat_control_plagas_y_enfermedades","cat_control_plagas_y_enfermedades_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_control_plagas_y_enfermedades_id";

		$fdata["sourceSingle"] = "cat_control_plagas_y_enfermedades_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_plagas_y_enfermedades.cat_control_plagas_y_enfermedades_id";

	
	
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


	$tdatabox_cat_control_plagas_y_enfermedades["cat_control_plagas_y_enfermedades_id"] = $fdata;
		$tdatabox_cat_control_plagas_y_enfermedades[".searchableFields"][] = "cat_control_plagas_y_enfermedades_id";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_control_plagas_y_enfermedades","cat_usuarios_licencias_id");
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


	$tdatabox_cat_control_plagas_y_enfermedades["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_control_plagas_y_enfermedades[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_control_plagas_y_enfermedades"]=&$tdatabox_cat_control_plagas_y_enfermedades;
$field_labels["box_cat_control_plagas_y_enfermedades"] = &$fieldLabelsbox_cat_control_plagas_y_enfermedades;
$fieldToolTips["box_cat_control_plagas_y_enfermedades"] = &$fieldToolTipsbox_cat_control_plagas_y_enfermedades;
$placeHolders["box_cat_control_plagas_y_enfermedades"] = &$placeHoldersbox_cat_control_plagas_y_enfermedades;
$page_titles["box_cat_control_plagas_y_enfermedades"] = &$pageTitlesbox_cat_control_plagas_y_enfermedades;


changeTextControlsToDate( "box_cat_control_plagas_y_enfermedades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_control_plagas_y_enfermedades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_control_plagas_y_enfermedades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_control_plagas_y_enfermedades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(cat_control_plagas_y_enfermedades.descripcion_plaga_enfermedad, '-', cat_control_plagas_y_enfermedades_categorias.descripcion_categoria_plaga_enfermedad) AS descripcion,  cat_control_plagas_y_enfermedades.cat_control_plagas_y_enfermedades_id,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_control_plagas_y_enfermedades  INNER JOIN cat_usuarios ON cat_control_plagas_y_enfermedades.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_control_plagas_y_enfermedades_categorias ON cat_control_plagas_y_enfermedades.cat_control_plagas_y_enfermedades_categorias_id = cat_control_plagas_y_enfermedades_categorias.cat_control_plagas_y_enfermedades_categorias_id";
$proto0["m_strWhere"] = "(cat_control_plagas_y_enfermedades.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_control_plagas_y_enfermedades.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_plagas_y_enfermedades",
	"m_srcTableName" => "box_cat_control_plagas_y_enfermedades"
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_control_plagas_y_enfermedades.descripcion_plaga_enfermedad"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_control_plagas_y_enfermedades_categorias.descripcion_categoria_plaga_enfermedad"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "concat(cat_control_plagas_y_enfermedades.descripcion_plaga_enfermedad, '-', cat_control_plagas_y_enfermedades_categorias.descripcion_categoria_plaga_enfermedad)";
$proto6["m_srcTableName"] = "box_cat_control_plagas_y_enfermedades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "descripcion";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_control_plagas_y_enfermedades_id",
	"m_strTable" => "cat_control_plagas_y_enfermedades",
	"m_srcTableName" => "box_cat_control_plagas_y_enfermedades"
));

$proto11["m_sql"] = "cat_control_plagas_y_enfermedades.cat_control_plagas_y_enfermedades_id";
$proto11["m_srcTableName"] = "box_cat_control_plagas_y_enfermedades";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_control_plagas_y_enfermedades"
));

$proto13["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto13["m_srcTableName"] = "box_cat_control_plagas_y_enfermedades";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "cat_control_plagas_y_enfermedades";
$proto16["m_srcTableName"] = "box_cat_control_plagas_y_enfermedades";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "vigente";
$proto16["m_columns"][] = "descripcion_plaga_enfermedad";
$proto16["m_columns"][] = "cat_control_plagas_y_enfermedades_categorias_id";
$proto16["m_columns"][] = "cat_control_plagas_y_enfermedades_id";
$proto16["m_columns"][] = "capturista";
$proto16["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "cat_control_plagas_y_enfermedades";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "box_cat_control_plagas_y_enfermedades";
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
$proto19["m_link"] = "SQLL_INNERJOIN";
			$proto20=array();
$proto20["m_strName"] = "cat_usuarios";
$proto20["m_srcTableName"] = "box_cat_control_plagas_y_enfermedades";
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
$proto19["m_sql"] = "INNER JOIN cat_usuarios ON cat_control_plagas_y_enfermedades.capturista = cat_usuarios.usuario";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "box_cat_control_plagas_y_enfermedades";
$proto21=array();
$proto21["m_sql"] = "cat_usuarios.usuario = cat_control_plagas_y_enfermedades.capturista";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_control_plagas_y_enfermedades"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "= cat_control_plagas_y_enfermedades.capturista";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
												$proto23=array();
$proto23["m_link"] = "SQLL_LEFTJOIN";
			$proto24=array();
$proto24["m_strName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto24["m_srcTableName"] = "box_cat_control_plagas_y_enfermedades";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "vigente";
$proto24["m_columns"][] = "descripcion_categoria_plaga_enfermedad";
$proto24["m_columns"][] = "cat_control_plagas_y_enfermedades_categorias_id";
$proto24["m_columns"][] = "capturista";
$proto24["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "LEFT OUTER JOIN cat_control_plagas_y_enfermedades_categorias ON cat_control_plagas_y_enfermedades.cat_control_plagas_y_enfermedades_categorias_id = cat_control_plagas_y_enfermedades_categorias.cat_control_plagas_y_enfermedades_categorias_id";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "box_cat_control_plagas_y_enfermedades";
$proto25=array();
$proto25["m_sql"] = "cat_control_plagas_y_enfermedades_categorias.cat_control_plagas_y_enfermedades_categorias_id = cat_control_plagas_y_enfermedades.cat_control_plagas_y_enfermedades_categorias_id";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_control_plagas_y_enfermedades_categorias_id",
	"m_strTable" => "cat_control_plagas_y_enfermedades_categorias",
	"m_srcTableName" => "box_cat_control_plagas_y_enfermedades"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "= cat_control_plagas_y_enfermedades.cat_control_plagas_y_enfermedades_categorias_id";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_control_plagas_y_enfermedades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_control_plagas_y_enfermedades = createSqlQuery_box_cat_control_plagas_y_enfermedades();


	
		;

			

$tdatabox_cat_control_plagas_y_enfermedades[".sqlquery"] = $queryData_box_cat_control_plagas_y_enfermedades;



$tdatabox_cat_control_plagas_y_enfermedades[".hasEvents"] = false;

?>