<?php
$tdatabox_cat_control_riego_cabezales = array();
$tdatabox_cat_control_riego_cabezales[".searchableFields"] = array();
$tdatabox_cat_control_riego_cabezales[".ShortName"] = "box_cat_control_riego_cabezales";
$tdatabox_cat_control_riego_cabezales[".OwnerID"] = "";
$tdatabox_cat_control_riego_cabezales[".OriginalTable"] = "cat_control_riego_cabezales";


$tdatabox_cat_control_riego_cabezales[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_control_riego_cabezales[".originalPagesByType"] = $tdatabox_cat_control_riego_cabezales[".pagesByType"];
$tdatabox_cat_control_riego_cabezales[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_control_riego_cabezales[".originalPages"] = $tdatabox_cat_control_riego_cabezales[".pages"];
$tdatabox_cat_control_riego_cabezales[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_control_riego_cabezales[".originalDefaultPages"] = $tdatabox_cat_control_riego_cabezales[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_control_riego_cabezales = array();
$fieldToolTipsbox_cat_control_riego_cabezales = array();
$pageTitlesbox_cat_control_riego_cabezales = array();
$placeHoldersbox_cat_control_riego_cabezales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_control_riego_cabezales["Spanish"] = array();
	$fieldToolTipsbox_cat_control_riego_cabezales["Spanish"] = array();
	$placeHoldersbox_cat_control_riego_cabezales["Spanish"] = array();
	$pageTitlesbox_cat_control_riego_cabezales["Spanish"] = array();
	$fieldLabelsbox_cat_control_riego_cabezales["Spanish"]["cat_control_riego_cabezales_id"] = "id";
	$fieldToolTipsbox_cat_control_riego_cabezales["Spanish"]["cat_control_riego_cabezales_id"] = "";
	$placeHoldersbox_cat_control_riego_cabezales["Spanish"]["cat_control_riego_cabezales_id"] = "";
	$fieldLabelsbox_cat_control_riego_cabezales["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "up";
	$fieldToolTipsbox_cat_control_riego_cabezales["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHoldersbox_cat_control_riego_cabezales["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelsbox_cat_control_riego_cabezales["Spanish"]["descripcion_cabezal"] = "Cabezal";
	$fieldToolTipsbox_cat_control_riego_cabezales["Spanish"]["descripcion_cabezal"] = "";
	$placeHoldersbox_cat_control_riego_cabezales["Spanish"]["descripcion_cabezal"] = "";
	$fieldLabelsbox_cat_control_riego_cabezales["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_control_riego_cabezales["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_control_riego_cabezales["Spanish"]["capturista"] = "";
	if (count($fieldToolTipsbox_cat_control_riego_cabezales["Spanish"]))
		$tdatabox_cat_control_riego_cabezales[".isUseToolTips"] = true;
}





$tdatabox_cat_control_riego_cabezales[".shortTableName"] = "box_cat_control_riego_cabezales";
$tdatabox_cat_control_riego_cabezales[".nSecOptions"] = 0;

$tdatabox_cat_control_riego_cabezales[".mainTableOwnerID"] = "";
$tdatabox_cat_control_riego_cabezales[".entityType"] = 1;
$tdatabox_cat_control_riego_cabezales[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_control_riego_cabezales[".strOriginalTableName"] = "cat_control_riego_cabezales";

	



$tdatabox_cat_control_riego_cabezales[".showAddInPopup"] = false;

$tdatabox_cat_control_riego_cabezales[".showEditInPopup"] = false;

$tdatabox_cat_control_riego_cabezales[".showViewInPopup"] = false;

$tdatabox_cat_control_riego_cabezales[".listAjax"] = false;
//	temporary
//$tdatabox_cat_control_riego_cabezales[".listAjax"] = false;

	$tdatabox_cat_control_riego_cabezales[".audit"] = false;

	$tdatabox_cat_control_riego_cabezales[".locking"] = false;


$pages = $tdatabox_cat_control_riego_cabezales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_control_riego_cabezales[".edit"] = true;
	$tdatabox_cat_control_riego_cabezales[".afterEditAction"] = 1;
	$tdatabox_cat_control_riego_cabezales[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_control_riego_cabezales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_control_riego_cabezales[".add"] = true;
$tdatabox_cat_control_riego_cabezales[".afterAddAction"] = 1;
$tdatabox_cat_control_riego_cabezales[".closePopupAfterAdd"] = 1;
$tdatabox_cat_control_riego_cabezales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_control_riego_cabezales[".list"] = true;
}



$tdatabox_cat_control_riego_cabezales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_control_riego_cabezales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_control_riego_cabezales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_control_riego_cabezales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_control_riego_cabezales[".printFriendly"] = true;
}



$tdatabox_cat_control_riego_cabezales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_control_riego_cabezales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_control_riego_cabezales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_control_riego_cabezales[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_control_riego_cabezales[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_control_riego_cabezales[".buttonsAdded"] = false;

$tdatabox_cat_control_riego_cabezales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_control_riego_cabezales[".isUseTimeForSearch"] = false;


$tdatabox_cat_control_riego_cabezales[".badgeColor"] = "4169E1";


$tdatabox_cat_control_riego_cabezales[".allSearchFields"] = array();
$tdatabox_cat_control_riego_cabezales[".filterFields"] = array();
$tdatabox_cat_control_riego_cabezales[".requiredSearchFields"] = array();

$tdatabox_cat_control_riego_cabezales[".googleLikeFields"] = array();
$tdatabox_cat_control_riego_cabezales[".googleLikeFields"][] = "cat_control_riego_cabezales_id";
$tdatabox_cat_control_riego_cabezales[".googleLikeFields"][] = "descripcion_cabezal";
$tdatabox_cat_control_riego_cabezales[".googleLikeFields"][] = "capturista";
$tdatabox_cat_control_riego_cabezales[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";



$tdatabox_cat_control_riego_cabezales[".tableType"] = "list";

$tdatabox_cat_control_riego_cabezales[".printerPageOrientation"] = 0;
$tdatabox_cat_control_riego_cabezales[".nPrinterPageScale"] = 100;

$tdatabox_cat_control_riego_cabezales[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_control_riego_cabezales[".geocodingEnabled"] = false;





$tdatabox_cat_control_riego_cabezales[".isResizeColumns"] = true;





$tdatabox_cat_control_riego_cabezales[".pageSize"] = 20;

$tdatabox_cat_control_riego_cabezales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_control_riego_cabezales[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_control_riego_cabezales[".orderindexes"] = array();


$tdatabox_cat_control_riego_cabezales[".sqlHead"] = "SELECT cat_control_riego_cabezales.cat_control_riego_cabezales_id,  cat_control_riego_cabezales.descripcion_cabezal,  cat_control_riego_cabezales.capturista,  cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id";
$tdatabox_cat_control_riego_cabezales[".sqlFrom"] = "FROM cat_control_riego_cabezales  INNER JOIN cat_usuarios ON cat_control_riego_cabezales.capturista = cat_usuarios.usuario";
$tdatabox_cat_control_riego_cabezales[".sqlWhereExpr"] = "(cat_control_riego_cabezales.vigente =1)";
$tdatabox_cat_control_riego_cabezales[".sqlTail"] = "";

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
$tdatabox_cat_control_riego_cabezales[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_control_riego_cabezales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_control_riego_cabezales[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_control_riego_cabezales[".highlightSearchResults"] = true;

$tableKeysbox_cat_control_riego_cabezales = array();
$tableKeysbox_cat_control_riego_cabezales[] = "cat_control_riego_cabezales_id";
$tdatabox_cat_control_riego_cabezales[".Keys"] = $tableKeysbox_cat_control_riego_cabezales;


$tdatabox_cat_control_riego_cabezales[".hideMobileList"] = array();




//	cat_control_riego_cabezales_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_control_riego_cabezales_id";
	$fdata["GoodName"] = "cat_control_riego_cabezales_id";
	$fdata["ownerTable"] = "cat_control_riego_cabezales";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales","cat_control_riego_cabezales_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_control_riego_cabezales_id";

		$fdata["sourceSingle"] = "cat_control_riego_cabezales_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales.cat_control_riego_cabezales_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_control_riego_cabezales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_control_riego_cabezales_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_cabezal";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatabox_cat_control_riego_cabezales["cat_control_riego_cabezales_id"] = $fdata;
		$tdatabox_cat_control_riego_cabezales[".searchableFields"][] = "cat_control_riego_cabezales_id";
//	descripcion_cabezal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_cabezal";
	$fdata["GoodName"] = "descripcion_cabezal";
	$fdata["ownerTable"] = "cat_control_riego_cabezales";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales","descripcion_cabezal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_cabezal";

		$fdata["sourceSingle"] = "descripcion_cabezal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales.descripcion_cabezal";

	
	
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


	$tdatabox_cat_control_riego_cabezales["descripcion_cabezal"] = $fdata;
		$tdatabox_cat_control_riego_cabezales[".searchableFields"][] = "descripcion_cabezal";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_control_riego_cabezales";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales.capturista";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatabox_cat_control_riego_cabezales["capturista"] = $fdata;
		$tdatabox_cat_control_riego_cabezales[".searchableFields"][] = "capturista";
//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "cat_control_riego_cabezales";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales","cat_holding_03_empresas_unidades_productivas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_03_empresas_unidades_productivas_id";

		$fdata["sourceSingle"] = "cat_holding_03_empresas_unidades_productivas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "box_cat_holding_03_empresas_unidades_productivas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_holding_03_empresas_unidades_productivas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "UP";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatabox_cat_control_riego_cabezales["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatabox_cat_control_riego_cabezales[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";


$tables_data["box_cat_control_riego_cabezales"]=&$tdatabox_cat_control_riego_cabezales;
$field_labels["box_cat_control_riego_cabezales"] = &$fieldLabelsbox_cat_control_riego_cabezales;
$fieldToolTips["box_cat_control_riego_cabezales"] = &$fieldToolTipsbox_cat_control_riego_cabezales;
$placeHolders["box_cat_control_riego_cabezales"] = &$placeHoldersbox_cat_control_riego_cabezales;
$page_titles["box_cat_control_riego_cabezales"] = &$pageTitlesbox_cat_control_riego_cabezales;


changeTextControlsToDate( "box_cat_control_riego_cabezales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_control_riego_cabezales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_control_riego_cabezales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_control_riego_cabezales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_control_riego_cabezales.cat_control_riego_cabezales_id,  cat_control_riego_cabezales.descripcion_cabezal,  cat_control_riego_cabezales.capturista,  cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id";
$proto0["m_strFrom"] = "FROM cat_control_riego_cabezales  INNER JOIN cat_usuarios ON cat_control_riego_cabezales.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_control_riego_cabezales.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_control_riego_cabezales.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "box_cat_control_riego_cabezales"
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
	"m_strName" => "cat_control_riego_cabezales_id",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "box_cat_control_riego_cabezales"
));

$proto6["m_sql"] = "cat_control_riego_cabezales.cat_control_riego_cabezales_id";
$proto6["m_srcTableName"] = "box_cat_control_riego_cabezales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_cabezal",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "box_cat_control_riego_cabezales"
));

$proto8["m_sql"] = "cat_control_riego_cabezales.descripcion_cabezal";
$proto8["m_srcTableName"] = "box_cat_control_riego_cabezales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "box_cat_control_riego_cabezales"
));

$proto10["m_sql"] = "cat_control_riego_cabezales.capturista";
$proto10["m_srcTableName"] = "box_cat_control_riego_cabezales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "box_cat_control_riego_cabezales"
));

$proto12["m_sql"] = "cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id";
$proto12["m_srcTableName"] = "box_cat_control_riego_cabezales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "cat_control_riego_cabezales";
$proto15["m_srcTableName"] = "box_cat_control_riego_cabezales";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "cat_control_riego_cabezales_id";
$proto15["m_columns"][] = "descripcion_cabezal";
$proto15["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto15["m_columns"][] = "vigente";
$proto15["m_columns"][] = "capturista";
$proto15["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "cat_control_riego_cabezales";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "box_cat_control_riego_cabezales";
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
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "cat_usuarios";
$proto19["m_srcTableName"] = "box_cat_control_riego_cabezales";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_usuarios_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "usuario";
$proto19["m_columns"][] = "cat_usuarios_licencias_id";
$proto19["m_columns"][] = "pass";
$proto19["m_columns"][] = "nombre";
$proto19["m_columns"][] = "correo";
$proto19["m_columns"][] = "cat_trabajadores_altas_id";
$proto19["m_columns"][] = "res_autorizacion";
$proto19["m_columns"][] = "session";
$proto19["m_columns"][] = "tipo";
$proto19["m_columns"][] = "session_v2";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN cat_usuarios ON cat_control_riego_cabezales.capturista = cat_usuarios.usuario";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "box_cat_control_riego_cabezales";
$proto20=array();
$proto20["m_sql"] = "cat_usuarios.usuario = cat_control_riego_cabezales.capturista";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_control_riego_cabezales"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= cat_control_riego_cabezales.capturista";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_control_riego_cabezales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_control_riego_cabezales = createSqlQuery_box_cat_control_riego_cabezales();


	
		;

				

$tdatabox_cat_control_riego_cabezales[".sqlquery"] = $queryData_box_cat_control_riego_cabezales;



$tdatabox_cat_control_riego_cabezales[".hasEvents"] = false;

?>