<?php
$tdatacat_finanzas_bancos_cuentas_box = array();
$tdatacat_finanzas_bancos_cuentas_box[".searchableFields"] = array();
$tdatacat_finanzas_bancos_cuentas_box[".ShortName"] = "cat_finanzas_bancos_cuentas_box";
$tdatacat_finanzas_bancos_cuentas_box[".OwnerID"] = "";
$tdatacat_finanzas_bancos_cuentas_box[".OriginalTable"] = "cat_finanzas_bancos_cuentas";


$tdatacat_finanzas_bancos_cuentas_box[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacat_finanzas_bancos_cuentas_box[".originalPagesByType"] = $tdatacat_finanzas_bancos_cuentas_box[".pagesByType"];
$tdatacat_finanzas_bancos_cuentas_box[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacat_finanzas_bancos_cuentas_box[".originalPages"] = $tdatacat_finanzas_bancos_cuentas_box[".pages"];
$tdatacat_finanzas_bancos_cuentas_box[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacat_finanzas_bancos_cuentas_box[".originalDefaultPages"] = $tdatacat_finanzas_bancos_cuentas_box[".defaultPages"];

//	field labels
$fieldLabelscat_finanzas_bancos_cuentas_box = array();
$fieldToolTipscat_finanzas_bancos_cuentas_box = array();
$pageTitlescat_finanzas_bancos_cuentas_box = array();
$placeHolderscat_finanzas_bancos_cuentas_box = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_finanzas_bancos_cuentas_box["Spanish"] = array();
	$fieldToolTipscat_finanzas_bancos_cuentas_box["Spanish"] = array();
	$placeHolderscat_finanzas_bancos_cuentas_box["Spanish"] = array();
	$pageTitlescat_finanzas_bancos_cuentas_box["Spanish"] = array();
	$fieldLabelscat_finanzas_bancos_cuentas_box["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "Cat Finanzas Bancos Cuentas Id";
	$fieldToolTipscat_finanzas_bancos_cuentas_box["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "";
	$placeHolderscat_finanzas_bancos_cuentas_box["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "";
	$fieldLabelscat_finanzas_bancos_cuentas_box["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_finanzas_bancos_cuentas_box["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_finanzas_bancos_cuentas_box["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_finanzas_bancos_cuentas_box["Spanish"]["cuenta"] = "Cuenta";
	$fieldToolTipscat_finanzas_bancos_cuentas_box["Spanish"]["cuenta"] = "";
	$placeHolderscat_finanzas_bancos_cuentas_box["Spanish"]["cuenta"] = "";
	$fieldLabelscat_finanzas_bancos_cuentas_box["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_finanzas_bancos_cuentas_box["Spanish"]["vigente"] = "";
	$placeHolderscat_finanzas_bancos_cuentas_box["Spanish"]["vigente"] = "";
	if (count($fieldToolTipscat_finanzas_bancos_cuentas_box["Spanish"]))
		$tdatacat_finanzas_bancos_cuentas_box[".isUseToolTips"] = true;
}





$tdatacat_finanzas_bancos_cuentas_box[".shortTableName"] = "cat_finanzas_bancos_cuentas_box";
$tdatacat_finanzas_bancos_cuentas_box[".nSecOptions"] = 0;

$tdatacat_finanzas_bancos_cuentas_box[".mainTableOwnerID"] = "";
$tdatacat_finanzas_bancos_cuentas_box[".entityType"] = 1;
$tdatacat_finanzas_bancos_cuentas_box[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_finanzas_bancos_cuentas_box[".strOriginalTableName"] = "cat_finanzas_bancos_cuentas";

	



$tdatacat_finanzas_bancos_cuentas_box[".showAddInPopup"] = false;

$tdatacat_finanzas_bancos_cuentas_box[".showEditInPopup"] = false;

$tdatacat_finanzas_bancos_cuentas_box[".showViewInPopup"] = false;

$tdatacat_finanzas_bancos_cuentas_box[".listAjax"] = false;
//	temporary
//$tdatacat_finanzas_bancos_cuentas_box[".listAjax"] = false;

	$tdatacat_finanzas_bancos_cuentas_box[".audit"] = true;

	$tdatacat_finanzas_bancos_cuentas_box[".locking"] = true;


$pages = $tdatacat_finanzas_bancos_cuentas_box[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_finanzas_bancos_cuentas_box[".edit"] = true;
	$tdatacat_finanzas_bancos_cuentas_box[".afterEditAction"] = 1;
	$tdatacat_finanzas_bancos_cuentas_box[".closePopupAfterEdit"] = 1;
	$tdatacat_finanzas_bancos_cuentas_box[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_finanzas_bancos_cuentas_box[".add"] = true;
$tdatacat_finanzas_bancos_cuentas_box[".afterAddAction"] = 1;
$tdatacat_finanzas_bancos_cuentas_box[".closePopupAfterAdd"] = 1;
$tdatacat_finanzas_bancos_cuentas_box[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_finanzas_bancos_cuentas_box[".list"] = true;
}



$tdatacat_finanzas_bancos_cuentas_box[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_finanzas_bancos_cuentas_box[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_finanzas_bancos_cuentas_box[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_finanzas_bancos_cuentas_box[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_finanzas_bancos_cuentas_box[".printFriendly"] = true;
}



$tdatacat_finanzas_bancos_cuentas_box[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_finanzas_bancos_cuentas_box[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_finanzas_bancos_cuentas_box[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_finanzas_bancos_cuentas_box[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_finanzas_bancos_cuentas_box[".ajaxCodeSnippetAdded"] = false;

$tdatacat_finanzas_bancos_cuentas_box[".buttonsAdded"] = false;

$tdatacat_finanzas_bancos_cuentas_box[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_finanzas_bancos_cuentas_box[".isUseTimeForSearch"] = false;


$tdatacat_finanzas_bancos_cuentas_box[".badgeColor"] = "5F9EA0";


$tdatacat_finanzas_bancos_cuentas_box[".allSearchFields"] = array();
$tdatacat_finanzas_bancos_cuentas_box[".filterFields"] = array();
$tdatacat_finanzas_bancos_cuentas_box[".requiredSearchFields"] = array();

$tdatacat_finanzas_bancos_cuentas_box[".googleLikeFields"] = array();
$tdatacat_finanzas_bancos_cuentas_box[".googleLikeFields"][] = "cat_finanzas_bancos_cuentas_id";
$tdatacat_finanzas_bancos_cuentas_box[".googleLikeFields"][] = "cuenta";
$tdatacat_finanzas_bancos_cuentas_box[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatacat_finanzas_bancos_cuentas_box[".googleLikeFields"][] = "vigente";



$tdatacat_finanzas_bancos_cuentas_box[".tableType"] = "list";

$tdatacat_finanzas_bancos_cuentas_box[".printerPageOrientation"] = 0;
$tdatacat_finanzas_bancos_cuentas_box[".nPrinterPageScale"] = 100;

$tdatacat_finanzas_bancos_cuentas_box[".nPrinterSplitRecords"] = 40;

$tdatacat_finanzas_bancos_cuentas_box[".geocodingEnabled"] = false;





$tdatacat_finanzas_bancos_cuentas_box[".isResizeColumns"] = true;





$tdatacat_finanzas_bancos_cuentas_box[".pageSize"] = 20;

$tdatacat_finanzas_bancos_cuentas_box[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_finanzas_bancos_cuentas_box[".strOrderBy"] = $tstrOrderBy;

$tdatacat_finanzas_bancos_cuentas_box[".orderindexes"] = array();


$tdatacat_finanzas_bancos_cuentas_box[".sqlHead"] = "SELECT cat_finanzas_bancos_cuentas.cat_finanzas_bancos_cuentas_id,  concat(cat_finanzas_bancos.descripcion_bancos, '-', cat_finanzas_bancos_cuentas.numero_de_cuenta) AS cuenta,  cat_usuarios.cat_usuarios_licencias_id,  cat_finanzas_bancos_cuentas.vigente";
$tdatacat_finanzas_bancos_cuentas_box[".sqlFrom"] = "FROM cat_finanzas_bancos_cuentas  LEFT OUTER JOIN cat_finanzas_bancos ON cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id = cat_finanzas_bancos.cat_finanzas_bancos_id  LEFT OUTER JOIN cat_usuarios ON cat_finanzas_bancos_cuentas.capturista = cat_usuarios.usuario";
$tdatacat_finanzas_bancos_cuentas_box[".sqlWhereExpr"] = "(cat_finanzas_bancos_cuentas.vigente =1)";
$tdatacat_finanzas_bancos_cuentas_box[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios.cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_finanzas_bancos_cuentas_box[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_finanzas_bancos_cuentas_box[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_finanzas_bancos_cuentas_box[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_finanzas_bancos_cuentas_box[".highlightSearchResults"] = true;

$tableKeyscat_finanzas_bancos_cuentas_box = array();
$tableKeyscat_finanzas_bancos_cuentas_box[] = "cat_finanzas_bancos_cuentas_id";
$tdatacat_finanzas_bancos_cuentas_box[".Keys"] = $tableKeyscat_finanzas_bancos_cuentas_box;


$tdatacat_finanzas_bancos_cuentas_box[".hideMobileList"] = array();




//	cat_finanzas_bancos_cuentas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_bancos_cuentas_id";
	$fdata["GoodName"] = "cat_finanzas_bancos_cuentas_id";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_bancos_cuentas_box","cat_finanzas_bancos_cuentas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_bancos_cuentas_id";

		$fdata["sourceSingle"] = "cat_finanzas_bancos_cuentas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.cat_finanzas_bancos_cuentas_id";

	
	
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


	$tdatacat_finanzas_bancos_cuentas_box["cat_finanzas_bancos_cuentas_id"] = $fdata;
		$tdatacat_finanzas_bancos_cuentas_box[".searchableFields"][] = "cat_finanzas_bancos_cuentas_id";
//	cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cuenta";
	$fdata["GoodName"] = "cuenta";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_bancos_cuentas_box","cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cuenta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(cat_finanzas_bancos.descripcion_bancos, '-', cat_finanzas_bancos_cuentas.numero_de_cuenta)";

	
	
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


	$tdatacat_finanzas_bancos_cuentas_box["cuenta"] = $fdata;
		$tdatacat_finanzas_bancos_cuentas_box[".searchableFields"][] = "cuenta";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_bancos_cuentas_box","cat_usuarios_licencias_id");
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


	$tdatacat_finanzas_bancos_cuentas_box["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_finanzas_bancos_cuentas_box[".searchableFields"][] = "cat_usuarios_licencias_id";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_bancos_cuentas_box","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.vigente";

	
	
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


	$tdatacat_finanzas_bancos_cuentas_box["vigente"] = $fdata;
		$tdatacat_finanzas_bancos_cuentas_box[".searchableFields"][] = "vigente";


$tables_data["cat_finanzas_bancos_cuentas_box"]=&$tdatacat_finanzas_bancos_cuentas_box;
$field_labels["cat_finanzas_bancos_cuentas_box"] = &$fieldLabelscat_finanzas_bancos_cuentas_box;
$fieldToolTips["cat_finanzas_bancos_cuentas_box"] = &$fieldToolTipscat_finanzas_bancos_cuentas_box;
$placeHolders["cat_finanzas_bancos_cuentas_box"] = &$placeHolderscat_finanzas_bancos_cuentas_box;
$page_titles["cat_finanzas_bancos_cuentas_box"] = &$pageTitlescat_finanzas_bancos_cuentas_box;


changeTextControlsToDate( "cat_finanzas_bancos_cuentas_box" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_finanzas_bancos_cuentas_box"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_finanzas_bancos_cuentas_box"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_finanzas_bancos_cuentas_box()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_bancos_cuentas.cat_finanzas_bancos_cuentas_id,  concat(cat_finanzas_bancos.descripcion_bancos, '-', cat_finanzas_bancos_cuentas.numero_de_cuenta) AS cuenta,  cat_usuarios.cat_usuarios_licencias_id,  cat_finanzas_bancos_cuentas.vigente";
$proto0["m_strFrom"] = "FROM cat_finanzas_bancos_cuentas  LEFT OUTER JOIN cat_finanzas_bancos ON cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id = cat_finanzas_bancos.cat_finanzas_bancos_id  LEFT OUTER JOIN cat_usuarios ON cat_finanzas_bancos_cuentas.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_finanzas_bancos_cuentas.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_finanzas_bancos_cuentas.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "cat_finanzas_bancos_cuentas_box"
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
	"m_strName" => "cat_finanzas_bancos_cuentas_id",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "cat_finanzas_bancos_cuentas_box"
));

$proto6["m_sql"] = "cat_finanzas_bancos_cuentas.cat_finanzas_bancos_cuentas_id";
$proto6["m_srcTableName"] = "cat_finanzas_bancos_cuentas_box";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_finanzas_bancos.descripcion_bancos"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_finanzas_bancos_cuentas.numero_de_cuenta"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "concat(cat_finanzas_bancos.descripcion_bancos, '-', cat_finanzas_bancos_cuentas.numero_de_cuenta)";
$proto8["m_srcTableName"] = "cat_finanzas_bancos_cuentas_box";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "cuenta";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_bancos_cuentas_box"
));

$proto13["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto13["m_srcTableName"] = "cat_finanzas_bancos_cuentas_box";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "cat_finanzas_bancos_cuentas_box"
));

$proto15["m_sql"] = "cat_finanzas_bancos_cuentas.vigente";
$proto15["m_srcTableName"] = "cat_finanzas_bancos_cuentas_box";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "cat_finanzas_bancos_cuentas";
$proto18["m_srcTableName"] = "cat_finanzas_bancos_cuentas_box";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "cat_finanzas_bancos_cuentas_id";
$proto18["m_columns"][] = "cat_finanzas_bancos_id";
$proto18["m_columns"][] = "numero_de_cuenta";
$proto18["m_columns"][] = "clabe";
$proto18["m_columns"][] = "fecha_de_captura";
$proto18["m_columns"][] = "capturista";
$proto18["m_columns"][] = "cat_finanzas_monedas_mu_id";
$proto18["m_columns"][] = "time_stamp";
$proto18["m_columns"][] = "vigente";
$proto18["m_columns"][] = "descripcion_cuenta";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "cat_finanzas_bancos_cuentas";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "cat_finanzas_bancos_cuentas_box";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
												$proto21=array();
$proto21["m_link"] = "SQLL_LEFTJOIN";
			$proto22=array();
$proto22["m_strName"] = "cat_finanzas_bancos";
$proto22["m_srcTableName"] = "cat_finanzas_bancos_cuentas_box";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "cat_finanzas_bancos_id";
$proto22["m_columns"][] = "descripcion_bancos";
$proto22["m_columns"][] = "time_stamp";
$proto22["m_columns"][] = "vigente";
$proto22["m_columns"][] = "capturista";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "LEFT OUTER JOIN cat_finanzas_bancos ON cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id = cat_finanzas_bancos.cat_finanzas_bancos_id";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "cat_finanzas_bancos_cuentas_box";
$proto23=array();
$proto23["m_sql"] = "cat_finanzas_bancos.cat_finanzas_bancos_id = cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_bancos_id",
	"m_strTable" => "cat_finanzas_bancos",
	"m_srcTableName" => "cat_finanzas_bancos_cuentas_box"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "= cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_LEFTJOIN";
			$proto26=array();
$proto26["m_strName"] = "cat_usuarios";
$proto26["m_srcTableName"] = "cat_finanzas_bancos_cuentas_box";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "cat_usuarios_id";
$proto26["m_columns"][] = "time_stamp";
$proto26["m_columns"][] = "vigente";
$proto26["m_columns"][] = "capturista";
$proto26["m_columns"][] = "usuario";
$proto26["m_columns"][] = "cat_usuarios_licencias_id";
$proto26["m_columns"][] = "pass";
$proto26["m_columns"][] = "nombre";
$proto26["m_columns"][] = "correo";
$proto26["m_columns"][] = "cat_trabajadores_altas_id";
$proto26["m_columns"][] = "res_autorizacion";
$proto26["m_columns"][] = "session";
$proto26["m_columns"][] = "tipo";
$proto26["m_columns"][] = "session_v2";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_finanzas_bancos_cuentas.capturista = cat_usuarios.usuario";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "cat_finanzas_bancos_cuentas_box";
$proto27=array();
$proto27["m_sql"] = "cat_usuarios.usuario = cat_finanzas_bancos_cuentas.capturista";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_bancos_cuentas_box"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= cat_finanzas_bancos_cuentas.capturista";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_finanzas_bancos_cuentas_box";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_finanzas_bancos_cuentas_box = createSqlQuery_cat_finanzas_bancos_cuentas_box();


	
		;

				

$tdatacat_finanzas_bancos_cuentas_box[".sqlquery"] = $queryData_cat_finanzas_bancos_cuentas_box;



$tdatacat_finanzas_bancos_cuentas_box[".hasEvents"] = false;

?>