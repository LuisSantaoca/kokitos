<?php
$tdatacat_finanzas_transacciones_box = array();
$tdatacat_finanzas_transacciones_box[".searchableFields"] = array();
$tdatacat_finanzas_transacciones_box[".ShortName"] = "cat_finanzas_transacciones_box";
$tdatacat_finanzas_transacciones_box[".OwnerID"] = "";
$tdatacat_finanzas_transacciones_box[".OriginalTable"] = "cat_finanzas_movimientos";


$tdatacat_finanzas_transacciones_box[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_finanzas_transacciones_box[".originalPagesByType"] = $tdatacat_finanzas_transacciones_box[".pagesByType"];
$tdatacat_finanzas_transacciones_box[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_finanzas_transacciones_box[".originalPages"] = $tdatacat_finanzas_transacciones_box[".pages"];
$tdatacat_finanzas_transacciones_box[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_finanzas_transacciones_box[".originalDefaultPages"] = $tdatacat_finanzas_transacciones_box[".defaultPages"];

//	field labels
$fieldLabelscat_finanzas_transacciones_box = array();
$fieldToolTipscat_finanzas_transacciones_box = array();
$pageTitlescat_finanzas_transacciones_box = array();
$placeHolderscat_finanzas_transacciones_box = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_finanzas_transacciones_box["Spanish"] = array();
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"] = array();
	$placeHolderscat_finanzas_transacciones_box["Spanish"] = array();
	$pageTitlescat_finanzas_transacciones_box["Spanish"] = array();
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["capturista"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["capturista"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["fecha_de_captura"] = "Fecha De Captura";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["fecha_de_captura"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["vigente"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["vigente"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["time_stamp"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_cuentas_de_balance_03_mu_id"] = "Cat Finanzas Cuentas De Balance 03 Mu Id";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_cuentas_de_balance_03_mu_id"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_cuentas_de_balance_03_mu_id"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_id"] = "Cat Finanzas Movimientos Id";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_id"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_id"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["descripcion_movimientos"] = "Descripcion Movimientos";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["descripcion_movimientos"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["descripcion_movimientos"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"] = "Cat Finanzas Movimientos Clasificacion Naturaleza Mu Id";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_cuentas_de_balance_04"] = "Cat Finanzas Cuentas De Balance 04";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_cuentas_de_balance_04"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_cuentas_de_balance_04"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_id_alias"] = "Cat Finanzas Movimientos Id Alias";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_id_alias"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_id_alias"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_categoria_id"] = "Cat Finanzas Movimientos Categoria Id";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_categoria_id"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_categoria_id"] = "";
	$fieldLabelscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_categoria_sub_id"] = "Cat Finanzas Movimientos Categoria Sub Id";
	$fieldToolTipscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_categoria_sub_id"] = "";
	$placeHolderscat_finanzas_transacciones_box["Spanish"]["cat_finanzas_movimientos_categoria_sub_id"] = "";
	if (count($fieldToolTipscat_finanzas_transacciones_box["Spanish"]))
		$tdatacat_finanzas_transacciones_box[".isUseToolTips"] = true;
}





$tdatacat_finanzas_transacciones_box[".shortTableName"] = "cat_finanzas_transacciones_box";
$tdatacat_finanzas_transacciones_box[".nSecOptions"] = 0;

$tdatacat_finanzas_transacciones_box[".mainTableOwnerID"] = "";
$tdatacat_finanzas_transacciones_box[".entityType"] = 1;
$tdatacat_finanzas_transacciones_box[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_finanzas_transacciones_box[".strOriginalTableName"] = "cat_finanzas_movimientos";

	



$tdatacat_finanzas_transacciones_box[".showAddInPopup"] = false;

$tdatacat_finanzas_transacciones_box[".showEditInPopup"] = false;

$tdatacat_finanzas_transacciones_box[".showViewInPopup"] = false;

$tdatacat_finanzas_transacciones_box[".listAjax"] = false;
//	temporary
//$tdatacat_finanzas_transacciones_box[".listAjax"] = false;

	$tdatacat_finanzas_transacciones_box[".audit"] = true;

	$tdatacat_finanzas_transacciones_box[".locking"] = true;


$pages = $tdatacat_finanzas_transacciones_box[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_finanzas_transacciones_box[".edit"] = true;
	$tdatacat_finanzas_transacciones_box[".afterEditAction"] = 1;
	$tdatacat_finanzas_transacciones_box[".closePopupAfterEdit"] = 1;
	$tdatacat_finanzas_transacciones_box[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_finanzas_transacciones_box[".add"] = true;
$tdatacat_finanzas_transacciones_box[".afterAddAction"] = 1;
$tdatacat_finanzas_transacciones_box[".closePopupAfterAdd"] = 1;
$tdatacat_finanzas_transacciones_box[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_finanzas_transacciones_box[".list"] = true;
}



$tdatacat_finanzas_transacciones_box[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_finanzas_transacciones_box[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_finanzas_transacciones_box[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_finanzas_transacciones_box[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_finanzas_transacciones_box[".printFriendly"] = true;
}



$tdatacat_finanzas_transacciones_box[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_finanzas_transacciones_box[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_finanzas_transacciones_box[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_finanzas_transacciones_box[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_finanzas_transacciones_box[".ajaxCodeSnippetAdded"] = false;

$tdatacat_finanzas_transacciones_box[".buttonsAdded"] = false;

$tdatacat_finanzas_transacciones_box[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_finanzas_transacciones_box[".isUseTimeForSearch"] = false;


$tdatacat_finanzas_transacciones_box[".badgeColor"] = "CD5C5C";


$tdatacat_finanzas_transacciones_box[".allSearchFields"] = array();
$tdatacat_finanzas_transacciones_box[".filterFields"] = array();
$tdatacat_finanzas_transacciones_box[".requiredSearchFields"] = array();

$tdatacat_finanzas_transacciones_box[".googleLikeFields"] = array();
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "cat_finanzas_movimientos_id";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "descripcion_movimientos";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "capturista";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "fecha_de_captura";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "vigente";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "time_stamp";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "cat_finanzas_cuentas_de_balance_04";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "cat_finanzas_movimientos_id_alias";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "cat_finanzas_movimientos_categoria_id";
$tdatacat_finanzas_transacciones_box[".googleLikeFields"][] = "cat_finanzas_movimientos_categoria_sub_id";



$tdatacat_finanzas_transacciones_box[".tableType"] = "list";

$tdatacat_finanzas_transacciones_box[".printerPageOrientation"] = 0;
$tdatacat_finanzas_transacciones_box[".nPrinterPageScale"] = 100;

$tdatacat_finanzas_transacciones_box[".nPrinterSplitRecords"] = 40;

$tdatacat_finanzas_transacciones_box[".geocodingEnabled"] = false;





$tdatacat_finanzas_transacciones_box[".isResizeColumns"] = true;





$tdatacat_finanzas_transacciones_box[".pageSize"] = 20;

$tdatacat_finanzas_transacciones_box[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_finanzas_transacciones_box[".strOrderBy"] = $tstrOrderBy;

$tdatacat_finanzas_transacciones_box[".orderindexes"] = array();


$tdatacat_finanzas_transacciones_box[".sqlHead"] = "SELECT cat_finanzas_movimientos_id,  	descripcion_movimientos,  	capturista,  	fecha_de_captura,  	vigente,  	time_stamp,  	cat_finanzas_movimientos_clasificacion_naturaleza_mu_id,  	cat_finanzas_cuentas_de_balance_03_mu_id,  	cat_finanzas_cuentas_de_balance_04,  	cat_finanzas_movimientos_id_alias,  	cat_finanzas_movimientos_categoria_id,  	cat_finanzas_movimientos_categoria_sub_id";
$tdatacat_finanzas_transacciones_box[".sqlFrom"] = "FROM cat_finanzas_movimientos";
$tdatacat_finanzas_transacciones_box[".sqlWhereExpr"] = "";
$tdatacat_finanzas_transacciones_box[".sqlTail"] = "";

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
$tdatacat_finanzas_transacciones_box[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_finanzas_transacciones_box[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_finanzas_transacciones_box[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_finanzas_transacciones_box[".highlightSearchResults"] = true;

$tableKeyscat_finanzas_transacciones_box = array();
$tdatacat_finanzas_transacciones_box[".Keys"] = $tableKeyscat_finanzas_transacciones_box;


$tdatacat_finanzas_transacciones_box[".hideMobileList"] = array();




//	cat_finanzas_movimientos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_movimientos_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","cat_finanzas_movimientos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_movimientos_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_id";

	
	
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


	$tdatacat_finanzas_transacciones_box["cat_finanzas_movimientos_id"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "cat_finanzas_movimientos_id";
//	descripcion_movimientos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_movimientos";
	$fdata["GoodName"] = "descripcion_movimientos";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","descripcion_movimientos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_movimientos";

		$fdata["sourceSingle"] = "descripcion_movimientos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_movimientos";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatacat_finanzas_transacciones_box["descripcion_movimientos"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "descripcion_movimientos";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capturista";

	
	
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


	$tdatacat_finanzas_transacciones_box["capturista"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "capturista";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_captura";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatacat_finanzas_transacciones_box["fecha_de_captura"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "fecha_de_captura";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","vigente");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigente";

	
	
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


	$tdatacat_finanzas_transacciones_box["vigente"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "vigente";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "time_stamp";

	
	
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


	$tdatacat_finanzas_transacciones_box["time_stamp"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "time_stamp";
//	cat_finanzas_movimientos_clasificacion_naturaleza_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","cat_finanzas_movimientos_clasificacion_naturaleza_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";

	
	
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


	$tdatacat_finanzas_transacciones_box["cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
//	cat_finanzas_cuentas_de_balance_03_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_finanzas_cuentas_de_balance_03_mu_id";
	$fdata["GoodName"] = "cat_finanzas_cuentas_de_balance_03_mu_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","cat_finanzas_cuentas_de_balance_03_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_cuentas_de_balance_03_mu_id";

		$fdata["sourceSingle"] = "cat_finanzas_cuentas_de_balance_03_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_cuentas_de_balance_03_mu_id";

	
	
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


	$tdatacat_finanzas_transacciones_box["cat_finanzas_cuentas_de_balance_03_mu_id"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
//	cat_finanzas_cuentas_de_balance_04
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_finanzas_cuentas_de_balance_04";
	$fdata["GoodName"] = "cat_finanzas_cuentas_de_balance_04";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","cat_finanzas_cuentas_de_balance_04");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_finanzas_cuentas_de_balance_04";

		$fdata["sourceSingle"] = "cat_finanzas_cuentas_de_balance_04";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_cuentas_de_balance_04";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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


	$tdatacat_finanzas_transacciones_box["cat_finanzas_cuentas_de_balance_04"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "cat_finanzas_cuentas_de_balance_04";
//	cat_finanzas_movimientos_id_alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_finanzas_movimientos_id_alias";
	$fdata["GoodName"] = "cat_finanzas_movimientos_id_alias";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","cat_finanzas_movimientos_id_alias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_id_alias";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_id_alias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_id_alias";

	
	
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


	$tdatacat_finanzas_transacciones_box["cat_finanzas_movimientos_id_alias"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "cat_finanzas_movimientos_id_alias";
//	cat_finanzas_movimientos_categoria_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cat_finanzas_movimientos_categoria_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_categoria_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","cat_finanzas_movimientos_categoria_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_categoria_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_categoria_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria_id";

	
	
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


	$tdatacat_finanzas_transacciones_box["cat_finanzas_movimientos_categoria_id"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "cat_finanzas_movimientos_categoria_id";
//	cat_finanzas_movimientos_categoria_sub_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cat_finanzas_movimientos_categoria_sub_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_categoria_sub_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_box","cat_finanzas_movimientos_categoria_sub_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_categoria_sub_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_categoria_sub_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria_sub_id";

	
	
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


	$tdatacat_finanzas_transacciones_box["cat_finanzas_movimientos_categoria_sub_id"] = $fdata;
		$tdatacat_finanzas_transacciones_box[".searchableFields"][] = "cat_finanzas_movimientos_categoria_sub_id";


$tables_data["cat_finanzas_transacciones_box"]=&$tdatacat_finanzas_transacciones_box;
$field_labels["cat_finanzas_transacciones_box"] = &$fieldLabelscat_finanzas_transacciones_box;
$fieldToolTips["cat_finanzas_transacciones_box"] = &$fieldToolTipscat_finanzas_transacciones_box;
$placeHolders["cat_finanzas_transacciones_box"] = &$placeHolderscat_finanzas_transacciones_box;
$page_titles["cat_finanzas_transacciones_box"] = &$pageTitlescat_finanzas_transacciones_box;


changeTextControlsToDate( "cat_finanzas_transacciones_box" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_finanzas_transacciones_box"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_finanzas_transacciones_box"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_finanzas_transacciones_box()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_movimientos_id,  	descripcion_movimientos,  	capturista,  	fecha_de_captura,  	vigente,  	time_stamp,  	cat_finanzas_movimientos_clasificacion_naturaleza_mu_id,  	cat_finanzas_cuentas_de_balance_03_mu_id,  	cat_finanzas_cuentas_de_balance_04,  	cat_finanzas_movimientos_id_alias,  	cat_finanzas_movimientos_categoria_id,  	cat_finanzas_movimientos_categoria_sub_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_movimientos";
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
	"m_strName" => "cat_finanzas_movimientos_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto6["m_sql"] = "cat_finanzas_movimientos_id";
$proto6["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_movimientos",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto8["m_sql"] = "descripcion_movimientos";
$proto8["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto10["m_sql"] = "capturista";
$proto10["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto12["m_sql"] = "fecha_de_captura";
$proto12["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto14["m_sql"] = "vigente";
$proto14["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto16["m_sql"] = "time_stamp";
$proto16["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto18["m_sql"] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
$proto18["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_cuentas_de_balance_03_mu_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto20["m_sql"] = "cat_finanzas_cuentas_de_balance_03_mu_id";
$proto20["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_cuentas_de_balance_04",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto22["m_sql"] = "cat_finanzas_cuentas_de_balance_04";
$proto22["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_id_alias",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto24["m_sql"] = "cat_finanzas_movimientos_id_alias";
$proto24["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_categoria_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto26["m_sql"] = "cat_finanzas_movimientos_categoria_id";
$proto26["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_categoria_sub_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_transacciones_box"
));

$proto28["m_sql"] = "cat_finanzas_movimientos_categoria_sub_id";
$proto28["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "cat_finanzas_movimientos";
$proto31["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "cat_finanzas_movimientos_id";
$proto31["m_columns"][] = "descripcion_movimientos";
$proto31["m_columns"][] = "capturista";
$proto31["m_columns"][] = "fecha_de_captura";
$proto31["m_columns"][] = "vigente";
$proto31["m_columns"][] = "time_stamp";
$proto31["m_columns"][] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
$proto31["m_columns"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
$proto31["m_columns"][] = "cat_finanzas_cuentas_de_balance_04";
$proto31["m_columns"][] = "cat_finanzas_movimientos_id_alias";
$proto31["m_columns"][] = "cat_finanzas_movimientos_categoria_id";
$proto31["m_columns"][] = "cat_finanzas_movimientos_categoria_sub_id";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "cat_finanzas_movimientos";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "cat_finanzas_transacciones_box";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_finanzas_transacciones_box";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_finanzas_transacciones_box = createSqlQuery_cat_finanzas_transacciones_box();


	
		;

												

$tdatacat_finanzas_transacciones_box[".sqlquery"] = $queryData_cat_finanzas_transacciones_box;



$tdatacat_finanzas_transacciones_box[".hasEvents"] = false;

?>