<?php
$tdatabox_cat_finanzas_movimientos = array();
$tdatabox_cat_finanzas_movimientos[".searchableFields"] = array();
$tdatabox_cat_finanzas_movimientos[".ShortName"] = "box_cat_finanzas_movimientos";
$tdatabox_cat_finanzas_movimientos[".OwnerID"] = "";
$tdatabox_cat_finanzas_movimientos[".OriginalTable"] = "cat_finanzas_movimientos";


$tdatabox_cat_finanzas_movimientos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_finanzas_movimientos[".originalPagesByType"] = $tdatabox_cat_finanzas_movimientos[".pagesByType"];
$tdatabox_cat_finanzas_movimientos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_finanzas_movimientos[".originalPages"] = $tdatabox_cat_finanzas_movimientos[".pages"];
$tdatabox_cat_finanzas_movimientos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_finanzas_movimientos[".originalDefaultPages"] = $tdatabox_cat_finanzas_movimientos[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_finanzas_movimientos = array();
$fieldToolTipsbox_cat_finanzas_movimientos = array();
$pageTitlesbox_cat_finanzas_movimientos = array();
$placeHoldersbox_cat_finanzas_movimientos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_finanzas_movimientos["Spanish"] = array();
	$fieldToolTipsbox_cat_finanzas_movimientos["Spanish"] = array();
	$placeHoldersbox_cat_finanzas_movimientos["Spanish"] = array();
	$pageTitlesbox_cat_finanzas_movimientos["Spanish"] = array();
	$fieldLabelsbox_cat_finanzas_movimientos["Spanish"]["cat_finanzas_movimientos_id"] = "Id";
	$fieldToolTipsbox_cat_finanzas_movimientos["Spanish"]["cat_finanzas_movimientos_id"] = "";
	$placeHoldersbox_cat_finanzas_movimientos["Spanish"]["cat_finanzas_movimientos_id"] = "";
	$fieldLabelsbox_cat_finanzas_movimientos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_finanzas_movimientos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_finanzas_movimientos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_cat_finanzas_movimientos["Spanish"]["movimiento"] = "Movimiento";
	$fieldToolTipsbox_cat_finanzas_movimientos["Spanish"]["movimiento"] = "";
	$placeHoldersbox_cat_finanzas_movimientos["Spanish"]["movimiento"] = "";
	$fieldLabelsbox_cat_finanzas_movimientos["Spanish"]["balance"] = "Balance";
	$fieldToolTipsbox_cat_finanzas_movimientos["Spanish"]["balance"] = "";
	$placeHoldersbox_cat_finanzas_movimientos["Spanish"]["balance"] = "";
	$fieldLabelsbox_cat_finanzas_movimientos["Spanish"]["naturaleza"] = "Naturaleza";
	$fieldToolTipsbox_cat_finanzas_movimientos["Spanish"]["naturaleza"] = "";
	$placeHoldersbox_cat_finanzas_movimientos["Spanish"]["naturaleza"] = "";
	if (count($fieldToolTipsbox_cat_finanzas_movimientos["Spanish"]))
		$tdatabox_cat_finanzas_movimientos[".isUseToolTips"] = true;
}





$tdatabox_cat_finanzas_movimientos[".shortTableName"] = "box_cat_finanzas_movimientos";
$tdatabox_cat_finanzas_movimientos[".nSecOptions"] = 0;

$tdatabox_cat_finanzas_movimientos[".mainTableOwnerID"] = "";
$tdatabox_cat_finanzas_movimientos[".entityType"] = 1;
$tdatabox_cat_finanzas_movimientos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_finanzas_movimientos[".strOriginalTableName"] = "cat_finanzas_movimientos";

	



$tdatabox_cat_finanzas_movimientos[".showAddInPopup"] = false;

$tdatabox_cat_finanzas_movimientos[".showEditInPopup"] = false;

$tdatabox_cat_finanzas_movimientos[".showViewInPopup"] = false;

$tdatabox_cat_finanzas_movimientos[".listAjax"] = false;
//	temporary
//$tdatabox_cat_finanzas_movimientos[".listAjax"] = false;

	$tdatabox_cat_finanzas_movimientos[".audit"] = true;

	$tdatabox_cat_finanzas_movimientos[".locking"] = true;


$pages = $tdatabox_cat_finanzas_movimientos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_finanzas_movimientos[".edit"] = true;
	$tdatabox_cat_finanzas_movimientos[".afterEditAction"] = 1;
	$tdatabox_cat_finanzas_movimientos[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_finanzas_movimientos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_finanzas_movimientos[".add"] = true;
$tdatabox_cat_finanzas_movimientos[".afterAddAction"] = 1;
$tdatabox_cat_finanzas_movimientos[".closePopupAfterAdd"] = 1;
$tdatabox_cat_finanzas_movimientos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_finanzas_movimientos[".list"] = true;
}



$tdatabox_cat_finanzas_movimientos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_finanzas_movimientos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_finanzas_movimientos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_finanzas_movimientos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_finanzas_movimientos[".printFriendly"] = true;
}



$tdatabox_cat_finanzas_movimientos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_finanzas_movimientos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_finanzas_movimientos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_finanzas_movimientos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_finanzas_movimientos[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_finanzas_movimientos[".buttonsAdded"] = false;

$tdatabox_cat_finanzas_movimientos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_finanzas_movimientos[".isUseTimeForSearch"] = false;


$tdatabox_cat_finanzas_movimientos[".badgeColor"] = "CFAE83";


$tdatabox_cat_finanzas_movimientos[".allSearchFields"] = array();
$tdatabox_cat_finanzas_movimientos[".filterFields"] = array();
$tdatabox_cat_finanzas_movimientos[".requiredSearchFields"] = array();

$tdatabox_cat_finanzas_movimientos[".googleLikeFields"] = array();
$tdatabox_cat_finanzas_movimientos[".googleLikeFields"][] = "cat_finanzas_movimientos_id";
$tdatabox_cat_finanzas_movimientos[".googleLikeFields"][] = "movimiento";
$tdatabox_cat_finanzas_movimientos[".googleLikeFields"][] = "balance";
$tdatabox_cat_finanzas_movimientos[".googleLikeFields"][] = "naturaleza";
$tdatabox_cat_finanzas_movimientos[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_finanzas_movimientos[".tableType"] = "list";

$tdatabox_cat_finanzas_movimientos[".printerPageOrientation"] = 0;
$tdatabox_cat_finanzas_movimientos[".nPrinterPageScale"] = 100;

$tdatabox_cat_finanzas_movimientos[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_finanzas_movimientos[".geocodingEnabled"] = false;





$tdatabox_cat_finanzas_movimientos[".isResizeColumns"] = true;





$tdatabox_cat_finanzas_movimientos[".pageSize"] = 20;

$tdatabox_cat_finanzas_movimientos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_finanzas_movimientos[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_finanzas_movimientos[".orderindexes"] = array();


$tdatabox_cat_finanzas_movimientos[".sqlHead"] = "SELECT cat_finanzas_movimientos.cat_finanzas_movimientos_id,  cat_finanzas_movimientos.descripcion_movimientos as movimiento,  cat_finanzas_cuentas_de_balance_03_mu.descripcion_balance_03 as balance,  cat_finanzas_movimientos_categorias_naturaleza_mu.descripcion_movimientos_categorias_naturaleza as naturaleza,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_cat_finanzas_movimientos[".sqlFrom"] = "FROM cat_finanzas_movimientos  INNER JOIN cat_usuarios ON cat_finanzas_movimientos.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_finanzas_movimientos_categorias_naturaleza_mu ON cat_finanzas_movimientos.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id = cat_finanzas_movimientos_categorias_naturaleza_mu.cat_finanzas_movimientos_categorias_naturaleza_mu_id  LEFT OUTER JOIN cat_finanzas_cuentas_de_balance_03_mu ON cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id = cat_finanzas_cuentas_de_balance_03_mu.cat_finanzas_cuentas_de_balance_03_mu_id";
$tdatabox_cat_finanzas_movimientos[".sqlWhereExpr"] = "(cat_finanzas_movimientos.vigente =1)";
$tdatabox_cat_finanzas_movimientos[".sqlTail"] = "";

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
$tdatabox_cat_finanzas_movimientos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_finanzas_movimientos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_finanzas_movimientos[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_finanzas_movimientos[".highlightSearchResults"] = true;

$tableKeysbox_cat_finanzas_movimientos = array();
$tableKeysbox_cat_finanzas_movimientos[] = "cat_finanzas_movimientos_id";
$tdatabox_cat_finanzas_movimientos[".Keys"] = $tableKeysbox_cat_finanzas_movimientos;


$tdatabox_cat_finanzas_movimientos[".hideMobileList"] = array();




//	cat_finanzas_movimientos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_movimientos_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos","cat_finanzas_movimientos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_movimientos_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_id";

	
	
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


	$tdatabox_cat_finanzas_movimientos["cat_finanzas_movimientos_id"] = $fdata;
		$tdatabox_cat_finanzas_movimientos[".searchableFields"][] = "cat_finanzas_movimientos_id";
//	movimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "movimiento";
	$fdata["GoodName"] = "movimiento";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos","movimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_movimientos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.descripcion_movimientos";

	
	
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


	$tdatabox_cat_finanzas_movimientos["movimiento"] = $fdata;
		$tdatabox_cat_finanzas_movimientos[".searchableFields"][] = "movimiento";
//	balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "balance";
	$fdata["GoodName"] = "balance";
	$fdata["ownerTable"] = "cat_finanzas_cuentas_de_balance_03_mu";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos","balance");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_balance_03";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_cuentas_de_balance_03_mu.descripcion_balance_03";

	
	
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


	$tdatabox_cat_finanzas_movimientos["balance"] = $fdata;
		$tdatabox_cat_finanzas_movimientos[".searchableFields"][] = "balance";
//	naturaleza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "naturaleza";
	$fdata["GoodName"] = "naturaleza";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categorias_naturaleza_mu";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos","naturaleza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_movimientos_categorias_naturaleza";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categorias_naturaleza_mu.descripcion_movimientos_categorias_naturaleza";

	
	
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


	$tdatabox_cat_finanzas_movimientos["naturaleza"] = $fdata;
		$tdatabox_cat_finanzas_movimientos[".searchableFields"][] = "naturaleza";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos","cat_usuarios_licencias_id");
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


	$tdatabox_cat_finanzas_movimientos["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_finanzas_movimientos[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_finanzas_movimientos"]=&$tdatabox_cat_finanzas_movimientos;
$field_labels["box_cat_finanzas_movimientos"] = &$fieldLabelsbox_cat_finanzas_movimientos;
$fieldToolTips["box_cat_finanzas_movimientos"] = &$fieldToolTipsbox_cat_finanzas_movimientos;
$placeHolders["box_cat_finanzas_movimientos"] = &$placeHoldersbox_cat_finanzas_movimientos;
$page_titles["box_cat_finanzas_movimientos"] = &$pageTitlesbox_cat_finanzas_movimientos;


changeTextControlsToDate( "box_cat_finanzas_movimientos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_finanzas_movimientos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_finanzas_movimientos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_finanzas_movimientos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_id,  cat_finanzas_movimientos.descripcion_movimientos as movimiento,  cat_finanzas_cuentas_de_balance_03_mu.descripcion_balance_03 as balance,  cat_finanzas_movimientos_categorias_naturaleza_mu.descripcion_movimientos_categorias_naturaleza as naturaleza,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_movimientos  INNER JOIN cat_usuarios ON cat_finanzas_movimientos.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_finanzas_movimientos_categorias_naturaleza_mu ON cat_finanzas_movimientos.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id = cat_finanzas_movimientos_categorias_naturaleza_mu.cat_finanzas_movimientos_categorias_naturaleza_mu_id  LEFT OUTER JOIN cat_finanzas_cuentas_de_balance_03_mu ON cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id = cat_finanzas_cuentas_de_balance_03_mu.cat_finanzas_cuentas_de_balance_03_mu_id";
$proto0["m_strWhere"] = "(cat_finanzas_movimientos.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_finanzas_movimientos.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "box_cat_finanzas_movimientos"
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
	"m_strName" => "cat_finanzas_movimientos_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "box_cat_finanzas_movimientos"
));

$proto6["m_sql"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_id";
$proto6["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_movimientos",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "box_cat_finanzas_movimientos"
));

$proto8["m_sql"] = "cat_finanzas_movimientos.descripcion_movimientos";
$proto8["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "movimiento";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_balance_03",
	"m_strTable" => "cat_finanzas_cuentas_de_balance_03_mu",
	"m_srcTableName" => "box_cat_finanzas_movimientos"
));

$proto10["m_sql"] = "cat_finanzas_cuentas_de_balance_03_mu.descripcion_balance_03";
$proto10["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "balance";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_movimientos_categorias_naturaleza",
	"m_strTable" => "cat_finanzas_movimientos_categorias_naturaleza_mu",
	"m_srcTableName" => "box_cat_finanzas_movimientos"
));

$proto12["m_sql"] = "cat_finanzas_movimientos_categorias_naturaleza_mu.descripcion_movimientos_categorias_naturaleza";
$proto12["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "naturaleza";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_finanzas_movimientos"
));

$proto14["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto14["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_finanzas_movimientos";
$proto17["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_finanzas_movimientos_id";
$proto17["m_columns"][] = "descripcion_movimientos";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "fecha_de_captura";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
$proto17["m_columns"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
$proto17["m_columns"][] = "cat_finanzas_cuentas_de_balance_04";
$proto17["m_columns"][] = "cat_finanzas_movimientos_id_alias";
$proto17["m_columns"][] = "cat_finanzas_movimientos_categoria_id";
$proto17["m_columns"][] = "cat_finanzas_movimientos_categoria_sub_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_finanzas_movimientos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "cat_usuarios";
$proto21["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_usuarios_id";
$proto21["m_columns"][] = "time_stamp";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "usuario";
$proto21["m_columns"][] = "cat_usuarios_licencias_id";
$proto21["m_columns"][] = "pass";
$proto21["m_columns"][] = "nombre";
$proto21["m_columns"][] = "correo";
$proto21["m_columns"][] = "cat_trabajadores_altas_id";
$proto21["m_columns"][] = "res_autorizacion";
$proto21["m_columns"][] = "session";
$proto21["m_columns"][] = "tipo";
$proto21["m_columns"][] = "session_v2";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN cat_usuarios ON cat_finanzas_movimientos.capturista = cat_usuarios.usuario";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto22=array();
$proto22["m_sql"] = "cat_usuarios.usuario = cat_finanzas_movimientos.capturista";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_finanzas_movimientos"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= cat_finanzas_movimientos.capturista";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_LEFTJOIN";
			$proto25=array();
$proto25["m_strName"] = "cat_finanzas_movimientos_categorias_naturaleza_mu";
$proto25["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "descripcion_movimientos_categorias_naturaleza";
$proto25["m_columns"][] = "cat_finanzas_movimientos_categorias_naturaleza_mu_id";
$proto25["m_columns"][] = "observacion";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "LEFT OUTER JOIN cat_finanzas_movimientos_categorias_naturaleza_mu ON cat_finanzas_movimientos.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id = cat_finanzas_movimientos_categorias_naturaleza_mu.cat_finanzas_movimientos_categorias_naturaleza_mu_id";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto26=array();
$proto26["m_sql"] = "cat_finanzas_movimientos_categorias_naturaleza_mu.cat_finanzas_movimientos_categorias_naturaleza_mu_id = cat_finanzas_movimientos.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_categorias_naturaleza_mu_id",
	"m_strTable" => "cat_finanzas_movimientos_categorias_naturaleza_mu",
	"m_srcTableName" => "box_cat_finanzas_movimientos"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= cat_finanzas_movimientos.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strName"] = "cat_finanzas_cuentas_de_balance_03_mu";
$proto29["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "vigente";
$proto29["m_columns"][] = "descripcion_balance_03";
$proto29["m_columns"][] = "fecha_de_captura";
$proto29["m_columns"][] = "capturista";
$proto29["m_columns"][] = "time_stamp";
$proto29["m_columns"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
$proto29["m_columns"][] = "cat_finanzas_cuentas_de_balance_02_mu_id";
$proto29["m_columns"][] = "cat_finanzas_cuentas_de_balance_01_mu_id";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT OUTER JOIN cat_finanzas_cuentas_de_balance_03_mu ON cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id = cat_finanzas_cuentas_de_balance_03_mu.cat_finanzas_cuentas_de_balance_03_mu_id";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "box_cat_finanzas_movimientos";
$proto30=array();
$proto30["m_sql"] = "cat_finanzas_cuentas_de_balance_03_mu.cat_finanzas_cuentas_de_balance_03_mu_id = cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_cuentas_de_balance_03_mu_id",
	"m_strTable" => "cat_finanzas_cuentas_de_balance_03_mu",
	"m_srcTableName" => "box_cat_finanzas_movimientos"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_finanzas_movimientos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_finanzas_movimientos = createSqlQuery_box_cat_finanzas_movimientos();


	
		;

					

$tdatabox_cat_finanzas_movimientos[".sqlquery"] = $queryData_box_cat_finanzas_movimientos;



$tdatabox_cat_finanzas_movimientos[".hasEvents"] = false;

?>