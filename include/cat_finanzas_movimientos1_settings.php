<?php
$tdatacat_finanzas_movimientos1 = array();
$tdatacat_finanzas_movimientos1[".searchableFields"] = array();
$tdatacat_finanzas_movimientos1[".ShortName"] = "cat_finanzas_movimientos1";
$tdatacat_finanzas_movimientos1[".OwnerID"] = "";
$tdatacat_finanzas_movimientos1[".OriginalTable"] = "cat_finanzas_movimientos";


$tdatacat_finanzas_movimientos1[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_finanzas_movimientos1[".originalPagesByType"] = $tdatacat_finanzas_movimientos1[".pagesByType"];
$tdatacat_finanzas_movimientos1[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_finanzas_movimientos1[".originalPages"] = $tdatacat_finanzas_movimientos1[".pages"];
$tdatacat_finanzas_movimientos1[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_finanzas_movimientos1[".originalDefaultPages"] = $tdatacat_finanzas_movimientos1[".defaultPages"];

//	field labels
$fieldLabelscat_finanzas_movimientos1 = array();
$fieldToolTipscat_finanzas_movimientos1 = array();
$pageTitlescat_finanzas_movimientos1 = array();
$placeHolderscat_finanzas_movimientos1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_finanzas_movimientos1["Spanish"] = array();
	$fieldToolTipscat_finanzas_movimientos1["Spanish"] = array();
	$placeHolderscat_finanzas_movimientos1["Spanish"] = array();
	$pageTitlescat_finanzas_movimientos1["Spanish"] = array();
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["time_stamp"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["vigente"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["vigente"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["capturista"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["capturista"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["fecha_de_captura"] = "Fecha";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["fecha_de_captura"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_id"] = "Id";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_id"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_id"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["descripcion_movimientos"] = "Movimiento";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["descripcion_movimientos"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["descripcion_movimientos"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"] = "Naturaleza";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["cat_finanzas_cuentas_de_balance_03_mu_id"] = "Balance";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["cat_finanzas_cuentas_de_balance_03_mu_id"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["cat_finanzas_cuentas_de_balance_03_mu_id"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["id_cta_balance"] = "Id Cta Balance";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["id_cta_balance"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["id_cta_balance"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["cat_finanzas_cuentas_de_balance_04"] = "Subcuenta";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["cat_finanzas_cuentas_de_balance_04"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["cat_finanzas_cuentas_de_balance_04"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["subcuenta"] = "Clave";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["subcuenta"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["subcuenta"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_id_alias"] = "Id Alias Mov";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_id_alias"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_id_alias"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_categoria_id"] = "Categoria";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_categoria_id"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_categoria_id"] = "";
	$fieldLabelscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_categoria_sub_id"] = "SubCategoria";
	$fieldToolTipscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_categoria_sub_id"] = "";
	$placeHolderscat_finanzas_movimientos1["Spanish"]["cat_finanzas_movimientos_categoria_sub_id"] = "";
	if (count($fieldToolTipscat_finanzas_movimientos1["Spanish"]))
		$tdatacat_finanzas_movimientos1[".isUseToolTips"] = true;
}





$tdatacat_finanzas_movimientos1[".shortTableName"] = "cat_finanzas_movimientos1";
$tdatacat_finanzas_movimientos1[".nSecOptions"] = 0;

$tdatacat_finanzas_movimientos1[".mainTableOwnerID"] = "";
$tdatacat_finanzas_movimientos1[".entityType"] = 0;
$tdatacat_finanzas_movimientos1[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_finanzas_movimientos1[".strOriginalTableName"] = "cat_finanzas_movimientos";

	



$tdatacat_finanzas_movimientos1[".showAddInPopup"] = false;

$tdatacat_finanzas_movimientos1[".showEditInPopup"] = false;

$tdatacat_finanzas_movimientos1[".showViewInPopup"] = false;

$tdatacat_finanzas_movimientos1[".listAjax"] = false;
//	temporary
//$tdatacat_finanzas_movimientos1[".listAjax"] = false;

	$tdatacat_finanzas_movimientos1[".audit"] = true;

	$tdatacat_finanzas_movimientos1[".locking"] = true;


$pages = $tdatacat_finanzas_movimientos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_finanzas_movimientos1[".edit"] = true;
	$tdatacat_finanzas_movimientos1[".afterEditAction"] = 1;
	$tdatacat_finanzas_movimientos1[".closePopupAfterEdit"] = 1;
	$tdatacat_finanzas_movimientos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_finanzas_movimientos1[".add"] = true;
$tdatacat_finanzas_movimientos1[".afterAddAction"] = 1;
$tdatacat_finanzas_movimientos1[".closePopupAfterAdd"] = 1;
$tdatacat_finanzas_movimientos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_finanzas_movimientos1[".list"] = true;
}



$tdatacat_finanzas_movimientos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_finanzas_movimientos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_finanzas_movimientos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_finanzas_movimientos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_finanzas_movimientos1[".printFriendly"] = true;
}



$tdatacat_finanzas_movimientos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_finanzas_movimientos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_finanzas_movimientos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_finanzas_movimientos1[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_finanzas_movimientos1[".ajaxCodeSnippetAdded"] = false;

$tdatacat_finanzas_movimientos1[".buttonsAdded"] = false;

$tdatacat_finanzas_movimientos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_finanzas_movimientos1[".isUseTimeForSearch"] = false;


$tdatacat_finanzas_movimientos1[".badgeColor"] = "4682B4";


$tdatacat_finanzas_movimientos1[".allSearchFields"] = array();
$tdatacat_finanzas_movimientos1[".filterFields"] = array();
$tdatacat_finanzas_movimientos1[".requiredSearchFields"] = array();

$tdatacat_finanzas_movimientos1[".googleLikeFields"] = array();
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "cat_finanzas_movimientos_id";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "descripcion_movimientos";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "capturista";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "fecha_de_captura";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "vigente";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "time_stamp";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "id_cta_balance";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "cat_finanzas_cuentas_de_balance_04";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "subcuenta";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "cat_finanzas_movimientos_id_alias";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "cat_finanzas_movimientos_categoria_id";
$tdatacat_finanzas_movimientos1[".googleLikeFields"][] = "cat_finanzas_movimientos_categoria_sub_id";



$tdatacat_finanzas_movimientos1[".tableType"] = "list";

$tdatacat_finanzas_movimientos1[".printerPageOrientation"] = 0;
$tdatacat_finanzas_movimientos1[".nPrinterPageScale"] = 100;

$tdatacat_finanzas_movimientos1[".nPrinterSplitRecords"] = 40;

$tdatacat_finanzas_movimientos1[".geocodingEnabled"] = false;





$tdatacat_finanzas_movimientos1[".isResizeColumns"] = true;





$tdatacat_finanzas_movimientos1[".pageSize"] = 20;

$tdatacat_finanzas_movimientos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_finanzas_movimientos1[".strOrderBy"] = $tstrOrderBy;

$tdatacat_finanzas_movimientos1[".orderindexes"] = array();


$tdatacat_finanzas_movimientos1[".sqlHead"] = "SELECT cat_finanzas_movimientos.cat_finanzas_movimientos_id,  cat_finanzas_movimientos.descripcion_movimientos,  cat_finanzas_movimientos.capturista,  cat_finanzas_movimientos.fecha_de_captura,  cat_finanzas_movimientos.vigente,  cat_finanzas_movimientos.time_stamp,  cat_finanzas_movimientos.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id,  cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id AS id_cta_balance,  cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id,  cat_usuarios.cat_usuarios_licencias_id,  cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_04,  cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_04 AS subcuenta,  cat_finanzas_movimientos.cat_finanzas_movimientos_id_alias,  cat_finanzas_movimientos.cat_finanzas_movimientos_categoria_id,  cat_finanzas_movimientos.cat_finanzas_movimientos_categoria_sub_id";
$tdatacat_finanzas_movimientos1[".sqlFrom"] = "FROM cat_finanzas_movimientos  INNER JOIN cat_usuarios ON cat_finanzas_movimientos.capturista = cat_usuarios.usuario";
$tdatacat_finanzas_movimientos1[".sqlWhereExpr"] = "";
$tdatacat_finanzas_movimientos1[".sqlTail"] = "";

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
$tdatacat_finanzas_movimientos1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_finanzas_movimientos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_finanzas_movimientos1[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_finanzas_movimientos1[".highlightSearchResults"] = true;

$tableKeyscat_finanzas_movimientos1 = array();
$tableKeyscat_finanzas_movimientos1[] = "cat_finanzas_movimientos_id";
$tdatacat_finanzas_movimientos1[".Keys"] = $tableKeyscat_finanzas_movimientos1;


$tdatacat_finanzas_movimientos1[".hideMobileList"] = array();




//	cat_finanzas_movimientos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_movimientos_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","cat_finanzas_movimientos_id");
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


	$tdatacat_finanzas_movimientos1["cat_finanzas_movimientos_id"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "cat_finanzas_movimientos_id";
//	descripcion_movimientos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_movimientos";
	$fdata["GoodName"] = "descripcion_movimientos";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","descripcion_movimientos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_movimientos";

		$fdata["sourceSingle"] = "descripcion_movimientos";

	
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


	$tdatacat_finanzas_movimientos1["descripcion_movimientos"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "descripcion_movimientos";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.capturista";

	
	
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


	$tdatacat_finanzas_movimientos1["capturista"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "capturista";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.fecha_de_captura";

	
	
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


	$tdatacat_finanzas_movimientos1["fecha_de_captura"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "fecha_de_captura";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","vigente");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.vigente";

	
	
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


	$tdatacat_finanzas_movimientos1["vigente"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "vigente";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.time_stamp";

	
	
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


	$tdatacat_finanzas_movimientos1["time_stamp"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "time_stamp";
//	cat_finanzas_movimientos_clasificacion_naturaleza_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","cat_finanzas_movimientos_clasificacion_naturaleza_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_finanzas_movimientos_categorias_naturaleza_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "cat_finanzas_movimientos_categorias_naturaleza_mu_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion_movimientos_categorias_naturaleza";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacat_finanzas_movimientos1["cat_finanzas_movimientos_clasificacion_naturaleza_mu_id"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
//	id_cta_balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_cta_balance";
	$fdata["GoodName"] = "id_cta_balance";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","id_cta_balance");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_cuentas_de_balance_03_mu_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id";

	
	
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


	$tdatacat_finanzas_movimientos1["id_cta_balance"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "id_cta_balance";
//	cat_finanzas_cuentas_de_balance_03_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_finanzas_cuentas_de_balance_03_mu_id";
	$fdata["GoodName"] = "cat_finanzas_cuentas_de_balance_03_mu_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","cat_finanzas_cuentas_de_balance_03_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_cuentas_de_balance_03_mu_id";

		$fdata["sourceSingle"] = "cat_finanzas_cuentas_de_balance_03_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id";

	
	
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
	$edata["LookupTable"] = "box_cat_finanzas_cuentas_de_balance_03_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_finanzas_cuentas_de_balance_03_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_balance_03";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cat_finanzas_cuentas_de_balance_04";

	
	
	
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


	$tdatacat_finanzas_movimientos1["cat_finanzas_cuentas_de_balance_03_mu_id"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","cat_usuarios_licencias_id");
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


	$tdatacat_finanzas_movimientos1["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_finanzas_cuentas_de_balance_04
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cat_finanzas_cuentas_de_balance_04";
	$fdata["GoodName"] = "cat_finanzas_cuentas_de_balance_04";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","cat_finanzas_cuentas_de_balance_04");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_finanzas_cuentas_de_balance_04";

		$fdata["sourceSingle"] = "cat_finanzas_cuentas_de_balance_04";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_04";

	
	
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
	$edata["LookupTable"] = "box_cat_finanzas_cuentas_de_balance_04";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_finanzas_cuentas_de_balance_04_llave";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_balance_04";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cat_finanzas_cuentas_de_balance_03_mu_id", "lookup" => "cat_finanzas_cuentas_de_balance_03_mu_id" );

	
	

	
	
	
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


	$tdatacat_finanzas_movimientos1["cat_finanzas_cuentas_de_balance_04"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "cat_finanzas_cuentas_de_balance_04";
//	subcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "subcuenta";
	$fdata["GoodName"] = "subcuenta";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","subcuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_finanzas_cuentas_de_balance_04";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_04";

	
	
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


	$tdatacat_finanzas_movimientos1["subcuenta"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "subcuenta";
//	cat_finanzas_movimientos_id_alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cat_finanzas_movimientos_id_alias";
	$fdata["GoodName"] = "cat_finanzas_movimientos_id_alias";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","cat_finanzas_movimientos_id_alias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_id_alias";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_id_alias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_id_alias";

	
	
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
	$edata["LookupTable"] = "box_cat_finanzas_movimientos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_finanzas_movimientos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "movimiento";

	

	
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


	$tdatacat_finanzas_movimientos1["cat_finanzas_movimientos_id_alias"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "cat_finanzas_movimientos_id_alias";
//	cat_finanzas_movimientos_categoria_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cat_finanzas_movimientos_categoria_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_categoria_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","cat_finanzas_movimientos_categoria_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_categoria_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_categoria_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_categoria_id";

	
	
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
	$edata["LookupTable"] = "box_cat_finanzas_movimientos_categoria";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_finanzas_movimientos_categoria_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_categoria";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
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


	$tdatacat_finanzas_movimientos1["cat_finanzas_movimientos_categoria_id"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "cat_finanzas_movimientos_categoria_id";
//	cat_finanzas_movimientos_categoria_sub_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cat_finanzas_movimientos_categoria_sub_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_categoria_sub_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos","cat_finanzas_movimientos_categoria_sub_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_movimientos_categoria_sub_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_categoria_sub_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_categoria_sub_id";

	
	
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
	$edata["LookupTable"] = "cat_finanzas_movimientos_categoria_sub";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_finanzas_movimientos_categoria_sub_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_sub_categoria";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
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


	$tdatacat_finanzas_movimientos1["cat_finanzas_movimientos_categoria_sub_id"] = $fdata;
		$tdatacat_finanzas_movimientos1[".searchableFields"][] = "cat_finanzas_movimientos_categoria_sub_id";


$tables_data["cat_finanzas_movimientos"]=&$tdatacat_finanzas_movimientos1;
$field_labels["cat_finanzas_movimientos"] = &$fieldLabelscat_finanzas_movimientos1;
$fieldToolTips["cat_finanzas_movimientos"] = &$fieldToolTipscat_finanzas_movimientos1;
$placeHolders["cat_finanzas_movimientos"] = &$placeHolderscat_finanzas_movimientos1;
$page_titles["cat_finanzas_movimientos"] = &$pageTitlescat_finanzas_movimientos1;


changeTextControlsToDate( "cat_finanzas_movimientos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_finanzas_movimientos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_finanzas_movimientos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_finanzas_movimientos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_id,  cat_finanzas_movimientos.descripcion_movimientos,  cat_finanzas_movimientos.capturista,  cat_finanzas_movimientos.fecha_de_captura,  cat_finanzas_movimientos.vigente,  cat_finanzas_movimientos.time_stamp,  cat_finanzas_movimientos.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id,  cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id AS id_cta_balance,  cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id,  cat_usuarios.cat_usuarios_licencias_id,  cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_04,  cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_04 AS subcuenta,  cat_finanzas_movimientos.cat_finanzas_movimientos_id_alias,  cat_finanzas_movimientos.cat_finanzas_movimientos_categoria_id,  cat_finanzas_movimientos.cat_finanzas_movimientos_categoria_sub_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_movimientos  INNER JOIN cat_usuarios ON cat_finanzas_movimientos.capturista = cat_usuarios.usuario";
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
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto6["m_sql"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_id";
$proto6["m_srcTableName"] = "cat_finanzas_movimientos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_movimientos",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto8["m_sql"] = "cat_finanzas_movimientos.descripcion_movimientos";
$proto8["m_srcTableName"] = "cat_finanzas_movimientos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto10["m_sql"] = "cat_finanzas_movimientos.capturista";
$proto10["m_srcTableName"] = "cat_finanzas_movimientos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto12["m_sql"] = "cat_finanzas_movimientos.fecha_de_captura";
$proto12["m_srcTableName"] = "cat_finanzas_movimientos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto14["m_sql"] = "cat_finanzas_movimientos.vigente";
$proto14["m_srcTableName"] = "cat_finanzas_movimientos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto16["m_sql"] = "cat_finanzas_movimientos.time_stamp";
$proto16["m_srcTableName"] = "cat_finanzas_movimientos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto18["m_sql"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
$proto18["m_srcTableName"] = "cat_finanzas_movimientos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_cuentas_de_balance_03_mu_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto20["m_sql"] = "cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id";
$proto20["m_srcTableName"] = "cat_finanzas_movimientos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "id_cta_balance";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_cuentas_de_balance_03_mu_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto22["m_sql"] = "cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_03_mu_id";
$proto22["m_srcTableName"] = "cat_finanzas_movimientos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto24["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto24["m_srcTableName"] = "cat_finanzas_movimientos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_cuentas_de_balance_04",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto26["m_sql"] = "cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_04";
$proto26["m_srcTableName"] = "cat_finanzas_movimientos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_cuentas_de_balance_04",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto28["m_sql"] = "cat_finanzas_movimientos.cat_finanzas_cuentas_de_balance_04";
$proto28["m_srcTableName"] = "cat_finanzas_movimientos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "subcuenta";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_id_alias",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto30["m_sql"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_id_alias";
$proto30["m_srcTableName"] = "cat_finanzas_movimientos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_categoria_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto32["m_sql"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_categoria_id";
$proto32["m_srcTableName"] = "cat_finanzas_movimientos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_movimientos_categoria_sub_id",
	"m_strTable" => "cat_finanzas_movimientos",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto34["m_sql"] = "cat_finanzas_movimientos.cat_finanzas_movimientos_categoria_sub_id";
$proto34["m_srcTableName"] = "cat_finanzas_movimientos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "cat_finanzas_movimientos";
$proto37["m_srcTableName"] = "cat_finanzas_movimientos";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "cat_finanzas_movimientos_id";
$proto37["m_columns"][] = "descripcion_movimientos";
$proto37["m_columns"][] = "capturista";
$proto37["m_columns"][] = "fecha_de_captura";
$proto37["m_columns"][] = "vigente";
$proto37["m_columns"][] = "time_stamp";
$proto37["m_columns"][] = "cat_finanzas_movimientos_clasificacion_naturaleza_mu_id";
$proto37["m_columns"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
$proto37["m_columns"][] = "cat_finanzas_cuentas_de_balance_04";
$proto37["m_columns"][] = "cat_finanzas_movimientos_id_alias";
$proto37["m_columns"][] = "cat_finanzas_movimientos_categoria_id";
$proto37["m_columns"][] = "cat_finanzas_movimientos_categoria_sub_id";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "cat_finanzas_movimientos";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "cat_finanzas_movimientos";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "cat_usuarios";
$proto41["m_srcTableName"] = "cat_finanzas_movimientos";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "cat_usuarios_id";
$proto41["m_columns"][] = "time_stamp";
$proto41["m_columns"][] = "vigente";
$proto41["m_columns"][] = "capturista";
$proto41["m_columns"][] = "usuario";
$proto41["m_columns"][] = "cat_usuarios_licencias_id";
$proto41["m_columns"][] = "pass";
$proto41["m_columns"][] = "nombre";
$proto41["m_columns"][] = "correo";
$proto41["m_columns"][] = "cat_trabajadores_altas_id";
$proto41["m_columns"][] = "res_autorizacion";
$proto41["m_columns"][] = "session";
$proto41["m_columns"][] = "tipo";
$proto41["m_columns"][] = "session_v2";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "INNER JOIN cat_usuarios ON cat_finanzas_movimientos.capturista = cat_usuarios.usuario";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "cat_finanzas_movimientos";
$proto42=array();
$proto42["m_sql"] = "cat_usuarios.usuario = cat_finanzas_movimientos.capturista";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_movimientos"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= cat_finanzas_movimientos.capturista";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_finanzas_movimientos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_finanzas_movimientos1 = createSqlQuery_cat_finanzas_movimientos1();


	
		;

															

$tdatacat_finanzas_movimientos1[".sqlquery"] = $queryData_cat_finanzas_movimientos1;



$tdatacat_finanzas_movimientos1[".hasEvents"] = false;

?>