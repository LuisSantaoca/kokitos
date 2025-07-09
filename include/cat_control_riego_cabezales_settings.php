<?php
$tdatacat_control_riego_cabezales = array();
$tdatacat_control_riego_cabezales[".searchableFields"] = array();
$tdatacat_control_riego_cabezales[".ShortName"] = "cat_control_riego_cabezales";
$tdatacat_control_riego_cabezales[".OwnerID"] = "";
$tdatacat_control_riego_cabezales[".OriginalTable"] = "cat_control_riego_cabezales";


$tdatacat_control_riego_cabezales[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_control_riego_cabezales[".originalPagesByType"] = $tdatacat_control_riego_cabezales[".pagesByType"];
$tdatacat_control_riego_cabezales[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_control_riego_cabezales[".originalPages"] = $tdatacat_control_riego_cabezales[".pages"];
$tdatacat_control_riego_cabezales[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_control_riego_cabezales[".originalDefaultPages"] = $tdatacat_control_riego_cabezales[".defaultPages"];

//	field labels
$fieldLabelscat_control_riego_cabezales = array();
$fieldToolTipscat_control_riego_cabezales = array();
$pageTitlescat_control_riego_cabezales = array();
$placeHolderscat_control_riego_cabezales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_control_riego_cabezales["Spanish"] = array();
	$fieldToolTipscat_control_riego_cabezales["Spanish"] = array();
	$placeHolderscat_control_riego_cabezales["Spanish"] = array();
	$pageTitlescat_control_riego_cabezales["Spanish"] = array();
	$fieldLabelscat_control_riego_cabezales["Spanish"]["cat_control_riego_cabezales_id"] = "Id";
	$fieldToolTipscat_control_riego_cabezales["Spanish"]["cat_control_riego_cabezales_id"] = "";
	$placeHolderscat_control_riego_cabezales["Spanish"]["cat_control_riego_cabezales_id"] = "";
	$fieldLabelscat_control_riego_cabezales["Spanish"]["descripcion_cabezal"] = "Descripcion Cabezal";
	$fieldToolTipscat_control_riego_cabezales["Spanish"]["descripcion_cabezal"] = "";
	$placeHolderscat_control_riego_cabezales["Spanish"]["descripcion_cabezal"] = "";
	$fieldLabelscat_control_riego_cabezales["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "UP";
	$fieldToolTipscat_control_riego_cabezales["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderscat_control_riego_cabezales["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelscat_control_riego_cabezales["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_control_riego_cabezales["Spanish"]["vigente"] = "";
	$placeHolderscat_control_riego_cabezales["Spanish"]["vigente"] = "";
	$fieldLabelscat_control_riego_cabezales["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_control_riego_cabezales["Spanish"]["capturista"] = "";
	$placeHolderscat_control_riego_cabezales["Spanish"]["capturista"] = "";
	$fieldLabelscat_control_riego_cabezales["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_control_riego_cabezales["Spanish"]["time_stamp"] = "";
	$placeHolderscat_control_riego_cabezales["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_control_riego_cabezales["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_control_riego_cabezales["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_control_riego_cabezales["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_control_riego_cabezales["Spanish"]))
		$tdatacat_control_riego_cabezales[".isUseToolTips"] = true;
}





$tdatacat_control_riego_cabezales[".shortTableName"] = "cat_control_riego_cabezales";
$tdatacat_control_riego_cabezales[".nSecOptions"] = 0;

$tdatacat_control_riego_cabezales[".mainTableOwnerID"] = "";
$tdatacat_control_riego_cabezales[".entityType"] = 0;
$tdatacat_control_riego_cabezales[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_control_riego_cabezales[".strOriginalTableName"] = "cat_control_riego_cabezales";

	



$tdatacat_control_riego_cabezales[".showAddInPopup"] = false;

$tdatacat_control_riego_cabezales[".showEditInPopup"] = false;

$tdatacat_control_riego_cabezales[".showViewInPopup"] = false;

$tdatacat_control_riego_cabezales[".listAjax"] = false;
//	temporary
//$tdatacat_control_riego_cabezales[".listAjax"] = false;

	$tdatacat_control_riego_cabezales[".audit"] = false;

	$tdatacat_control_riego_cabezales[".locking"] = false;


$pages = $tdatacat_control_riego_cabezales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_control_riego_cabezales[".edit"] = true;
	$tdatacat_control_riego_cabezales[".afterEditAction"] = 1;
	$tdatacat_control_riego_cabezales[".closePopupAfterEdit"] = 1;
	$tdatacat_control_riego_cabezales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_control_riego_cabezales[".add"] = true;
$tdatacat_control_riego_cabezales[".afterAddAction"] = 1;
$tdatacat_control_riego_cabezales[".closePopupAfterAdd"] = 1;
$tdatacat_control_riego_cabezales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_control_riego_cabezales[".list"] = true;
}



$tdatacat_control_riego_cabezales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_control_riego_cabezales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_control_riego_cabezales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_control_riego_cabezales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_control_riego_cabezales[".printFriendly"] = true;
}



$tdatacat_control_riego_cabezales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_control_riego_cabezales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_control_riego_cabezales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_control_riego_cabezales[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_control_riego_cabezales[".ajaxCodeSnippetAdded"] = false;

$tdatacat_control_riego_cabezales[".buttonsAdded"] = false;

$tdatacat_control_riego_cabezales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_control_riego_cabezales[".isUseTimeForSearch"] = false;


$tdatacat_control_riego_cabezales[".badgeColor"] = "E67349";


$tdatacat_control_riego_cabezales[".allSearchFields"] = array();
$tdatacat_control_riego_cabezales[".filterFields"] = array();
$tdatacat_control_riego_cabezales[".requiredSearchFields"] = array();

$tdatacat_control_riego_cabezales[".googleLikeFields"] = array();
$tdatacat_control_riego_cabezales[".googleLikeFields"][] = "cat_control_riego_cabezales_id";
$tdatacat_control_riego_cabezales[".googleLikeFields"][] = "descripcion_cabezal";
$tdatacat_control_riego_cabezales[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatacat_control_riego_cabezales[".googleLikeFields"][] = "vigente";
$tdatacat_control_riego_cabezales[".googleLikeFields"][] = "capturista";
$tdatacat_control_riego_cabezales[".googleLikeFields"][] = "time_stamp";
$tdatacat_control_riego_cabezales[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_control_riego_cabezales[".tableType"] = "list";

$tdatacat_control_riego_cabezales[".printerPageOrientation"] = 0;
$tdatacat_control_riego_cabezales[".nPrinterPageScale"] = 100;

$tdatacat_control_riego_cabezales[".nPrinterSplitRecords"] = 40;

$tdatacat_control_riego_cabezales[".geocodingEnabled"] = false;





$tdatacat_control_riego_cabezales[".isResizeColumns"] = true;





$tdatacat_control_riego_cabezales[".pageSize"] = 20;

$tdatacat_control_riego_cabezales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_control_riego_cabezales[".strOrderBy"] = $tstrOrderBy;

$tdatacat_control_riego_cabezales[".orderindexes"] = array();


$tdatacat_control_riego_cabezales[".sqlHead"] = "SELECT cat_control_riego_cabezales.cat_control_riego_cabezales_id,  cat_control_riego_cabezales.descripcion_cabezal,  cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id,  cat_control_riego_cabezales.vigente,  cat_control_riego_cabezales.capturista,  cat_control_riego_cabezales.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_control_riego_cabezales[".sqlFrom"] = "FROM cat_control_riego_cabezales  INNER JOIN cat_usuarios ON cat_control_riego_cabezales.capturista = cat_usuarios.usuario";
$tdatacat_control_riego_cabezales[".sqlWhereExpr"] = "";
$tdatacat_control_riego_cabezales[".sqlTail"] = "";

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
$tdatacat_control_riego_cabezales[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_control_riego_cabezales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_control_riego_cabezales[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_control_riego_cabezales[".highlightSearchResults"] = true;

$tableKeyscat_control_riego_cabezales = array();
$tableKeyscat_control_riego_cabezales[] = "cat_control_riego_cabezales_id";
$tdatacat_control_riego_cabezales[".Keys"] = $tableKeyscat_control_riego_cabezales;


$tdatacat_control_riego_cabezales[".hideMobileList"] = array();




//	cat_control_riego_cabezales_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_control_riego_cabezales_id";
	$fdata["GoodName"] = "cat_control_riego_cabezales_id";
	$fdata["ownerTable"] = "cat_control_riego_cabezales";
	$fdata["Label"] = GetFieldLabel("cat_control_riego_cabezales","cat_control_riego_cabezales_id");
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


	$tdatacat_control_riego_cabezales["cat_control_riego_cabezales_id"] = $fdata;
		$tdatacat_control_riego_cabezales[".searchableFields"][] = "cat_control_riego_cabezales_id";
//	descripcion_cabezal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_cabezal";
	$fdata["GoodName"] = "descripcion_cabezal";
	$fdata["ownerTable"] = "cat_control_riego_cabezales";
	$fdata["Label"] = GetFieldLabel("cat_control_riego_cabezales","descripcion_cabezal");
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


	$tdatacat_control_riego_cabezales["descripcion_cabezal"] = $fdata;
		$tdatacat_control_riego_cabezales[".searchableFields"][] = "descripcion_cabezal";
//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "cat_control_riego_cabezales";
	$fdata["Label"] = GetFieldLabel("cat_control_riego_cabezales","cat_holding_03_empresas_unidades_productivas_id");
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


	$tdatacat_control_riego_cabezales["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatacat_control_riego_cabezales[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_control_riego_cabezales";
	$fdata["Label"] = GetFieldLabel("cat_control_riego_cabezales","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales.vigente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdatacat_control_riego_cabezales["vigente"] = $fdata;
		$tdatacat_control_riego_cabezales[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_control_riego_cabezales";
	$fdata["Label"] = GetFieldLabel("cat_control_riego_cabezales","capturista");
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


	$tdatacat_control_riego_cabezales["capturista"] = $fdata;
		$tdatacat_control_riego_cabezales[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_control_riego_cabezales";
	$fdata["Label"] = GetFieldLabel("cat_control_riego_cabezales","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales.time_stamp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacat_control_riego_cabezales["time_stamp"] = $fdata;
		$tdatacat_control_riego_cabezales[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_control_riego_cabezales","cat_usuarios_licencias_id");
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


	$tdatacat_control_riego_cabezales["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_control_riego_cabezales[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_control_riego_cabezales"]=&$tdatacat_control_riego_cabezales;
$field_labels["cat_control_riego_cabezales"] = &$fieldLabelscat_control_riego_cabezales;
$fieldToolTips["cat_control_riego_cabezales"] = &$fieldToolTipscat_control_riego_cabezales;
$placeHolders["cat_control_riego_cabezales"] = &$placeHolderscat_control_riego_cabezales;
$page_titles["cat_control_riego_cabezales"] = &$pageTitlescat_control_riego_cabezales;


changeTextControlsToDate( "cat_control_riego_cabezales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_control_riego_cabezales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_control_riego_cabezales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_control_riego_cabezales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_control_riego_cabezales.cat_control_riego_cabezales_id,  cat_control_riego_cabezales.descripcion_cabezal,  cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id,  cat_control_riego_cabezales.vigente,  cat_control_riego_cabezales.capturista,  cat_control_riego_cabezales.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_control_riego_cabezales  INNER JOIN cat_usuarios ON cat_control_riego_cabezales.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_control_riego_cabezales_id",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "cat_control_riego_cabezales"
));

$proto6["m_sql"] = "cat_control_riego_cabezales.cat_control_riego_cabezales_id";
$proto6["m_srcTableName"] = "cat_control_riego_cabezales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_cabezal",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "cat_control_riego_cabezales"
));

$proto8["m_sql"] = "cat_control_riego_cabezales.descripcion_cabezal";
$proto8["m_srcTableName"] = "cat_control_riego_cabezales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "cat_control_riego_cabezales"
));

$proto10["m_sql"] = "cat_control_riego_cabezales.cat_holding_03_empresas_unidades_productivas_id";
$proto10["m_srcTableName"] = "cat_control_riego_cabezales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "cat_control_riego_cabezales"
));

$proto12["m_sql"] = "cat_control_riego_cabezales.vigente";
$proto12["m_srcTableName"] = "cat_control_riego_cabezales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "cat_control_riego_cabezales"
));

$proto14["m_sql"] = "cat_control_riego_cabezales.capturista";
$proto14["m_srcTableName"] = "cat_control_riego_cabezales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_control_riego_cabezales",
	"m_srcTableName" => "cat_control_riego_cabezales"
));

$proto16["m_sql"] = "cat_control_riego_cabezales.time_stamp";
$proto16["m_srcTableName"] = "cat_control_riego_cabezales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_control_riego_cabezales"
));

$proto18["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto18["m_srcTableName"] = "cat_control_riego_cabezales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "cat_control_riego_cabezales";
$proto21["m_srcTableName"] = "cat_control_riego_cabezales";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_control_riego_cabezales_id";
$proto21["m_columns"][] = "descripcion_cabezal";
$proto21["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "cat_control_riego_cabezales";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "cat_control_riego_cabezales";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "cat_usuarios";
$proto25["m_srcTableName"] = "cat_control_riego_cabezales";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_usuarios_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "usuario";
$proto25["m_columns"][] = "cat_usuarios_licencias_id";
$proto25["m_columns"][] = "pass";
$proto25["m_columns"][] = "nombre";
$proto25["m_columns"][] = "correo";
$proto25["m_columns"][] = "cat_trabajadores_altas_id";
$proto25["m_columns"][] = "res_autorizacion";
$proto25["m_columns"][] = "session";
$proto25["m_columns"][] = "tipo";
$proto25["m_columns"][] = "session_v2";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN cat_usuarios ON cat_control_riego_cabezales.capturista = cat_usuarios.usuario";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cat_control_riego_cabezales";
$proto26=array();
$proto26["m_sql"] = "cat_usuarios.usuario = cat_control_riego_cabezales.capturista";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_control_riego_cabezales"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= cat_control_riego_cabezales.capturista";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_control_riego_cabezales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_control_riego_cabezales = createSqlQuery_cat_control_riego_cabezales();


	
		;

							

$tdatacat_control_riego_cabezales[".sqlquery"] = $queryData_cat_control_riego_cabezales;



$tdatacat_control_riego_cabezales[".hasEvents"] = false;

?>