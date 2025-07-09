<?php
$tdatabox_cat_finanzas_bancos_cuentas = array();
$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"] = array();
$tdatabox_cat_finanzas_bancos_cuentas[".ShortName"] = "box_cat_finanzas_bancos_cuentas";
$tdatabox_cat_finanzas_bancos_cuentas[".OwnerID"] = "";
$tdatabox_cat_finanzas_bancos_cuentas[".OriginalTable"] = "cat_finanzas_bancos_cuentas";


$tdatabox_cat_finanzas_bancos_cuentas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_finanzas_bancos_cuentas[".originalPagesByType"] = $tdatabox_cat_finanzas_bancos_cuentas[".pagesByType"];
$tdatabox_cat_finanzas_bancos_cuentas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_finanzas_bancos_cuentas[".originalPages"] = $tdatabox_cat_finanzas_bancos_cuentas[".pages"];
$tdatabox_cat_finanzas_bancos_cuentas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_finanzas_bancos_cuentas[".originalDefaultPages"] = $tdatabox_cat_finanzas_bancos_cuentas[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_finanzas_bancos_cuentas = array();
$fieldToolTipsbox_cat_finanzas_bancos_cuentas = array();
$pageTitlesbox_cat_finanzas_bancos_cuentas = array();
$placeHoldersbox_cat_finanzas_bancos_cuentas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"] = array();
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"] = array();
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"] = array();
	$pageTitlesbox_cat_finanzas_bancos_cuentas["Spanish"] = array();
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "Id";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_finanzas_bancos_cuentas_id"] = "";
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_finanzas_bancos_id"] = "Banco";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_finanzas_bancos_id"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_finanzas_bancos_id"] = "";
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["numero_de_cuenta"] = "Numero De Cuenta";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["numero_de_cuenta"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["numero_de_cuenta"] = "";
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["clabe"] = "Clabe";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["clabe"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["clabe"] = "";
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["fecha_de_captura"] = "Fecha";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["fecha_de_captura"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["time_stamp"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["time_stamp"] = "";
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["descripcion_cuenta"] = "Descripcion Cuenta";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["descripcion_cuenta"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["descripcion_cuenta"] = "";
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_finanzas_monedas_mu_id"] = "Moneda";
	$fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_finanzas_monedas_mu_id"] = "";
	$placeHoldersbox_cat_finanzas_bancos_cuentas["Spanish"]["cat_finanzas_monedas_mu_id"] = "";
	if (count($fieldToolTipsbox_cat_finanzas_bancos_cuentas["Spanish"]))
		$tdatabox_cat_finanzas_bancos_cuentas[".isUseToolTips"] = true;
}





$tdatabox_cat_finanzas_bancos_cuentas[".shortTableName"] = "box_cat_finanzas_bancos_cuentas";
$tdatabox_cat_finanzas_bancos_cuentas[".nSecOptions"] = 0;

$tdatabox_cat_finanzas_bancos_cuentas[".mainTableOwnerID"] = "";
$tdatabox_cat_finanzas_bancos_cuentas[".entityType"] = 1;
$tdatabox_cat_finanzas_bancos_cuentas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_finanzas_bancos_cuentas[".strOriginalTableName"] = "cat_finanzas_bancos_cuentas";

	



$tdatabox_cat_finanzas_bancos_cuentas[".showAddInPopup"] = false;

$tdatabox_cat_finanzas_bancos_cuentas[".showEditInPopup"] = false;

$tdatabox_cat_finanzas_bancos_cuentas[".showViewInPopup"] = false;

$tdatabox_cat_finanzas_bancos_cuentas[".listAjax"] = false;
//	temporary
//$tdatabox_cat_finanzas_bancos_cuentas[".listAjax"] = false;

	$tdatabox_cat_finanzas_bancos_cuentas[".audit"] = true;

	$tdatabox_cat_finanzas_bancos_cuentas[".locking"] = true;


$pages = $tdatabox_cat_finanzas_bancos_cuentas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_finanzas_bancos_cuentas[".edit"] = true;
	$tdatabox_cat_finanzas_bancos_cuentas[".afterEditAction"] = 1;
	$tdatabox_cat_finanzas_bancos_cuentas[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_finanzas_bancos_cuentas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_finanzas_bancos_cuentas[".add"] = true;
$tdatabox_cat_finanzas_bancos_cuentas[".afterAddAction"] = 1;
$tdatabox_cat_finanzas_bancos_cuentas[".closePopupAfterAdd"] = 1;
$tdatabox_cat_finanzas_bancos_cuentas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_finanzas_bancos_cuentas[".list"] = true;
}



$tdatabox_cat_finanzas_bancos_cuentas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_finanzas_bancos_cuentas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_finanzas_bancos_cuentas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_finanzas_bancos_cuentas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_finanzas_bancos_cuentas[".printFriendly"] = true;
}



$tdatabox_cat_finanzas_bancos_cuentas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_finanzas_bancos_cuentas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_finanzas_bancos_cuentas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_finanzas_bancos_cuentas[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_finanzas_bancos_cuentas[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_finanzas_bancos_cuentas[".buttonsAdded"] = false;

$tdatabox_cat_finanzas_bancos_cuentas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_finanzas_bancos_cuentas[".isUseTimeForSearch"] = false;


$tdatabox_cat_finanzas_bancos_cuentas[".badgeColor"] = "EDCA00";


$tdatabox_cat_finanzas_bancos_cuentas[".allSearchFields"] = array();
$tdatabox_cat_finanzas_bancos_cuentas[".filterFields"] = array();
$tdatabox_cat_finanzas_bancos_cuentas[".requiredSearchFields"] = array();

$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"] = array();
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "cat_finanzas_bancos_cuentas_id";
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "cat_finanzas_bancos_id";
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "numero_de_cuenta";
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "clabe";
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "fecha_de_captura";
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "capturista";
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "time_stamp";
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "vigente";
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "descripcion_cuenta";
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatabox_cat_finanzas_bancos_cuentas[".googleLikeFields"][] = "cat_finanzas_monedas_mu_id";



$tdatabox_cat_finanzas_bancos_cuentas[".tableType"] = "list";

$tdatabox_cat_finanzas_bancos_cuentas[".printerPageOrientation"] = 0;
$tdatabox_cat_finanzas_bancos_cuentas[".nPrinterPageScale"] = 100;

$tdatabox_cat_finanzas_bancos_cuentas[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_finanzas_bancos_cuentas[".geocodingEnabled"] = false;





$tdatabox_cat_finanzas_bancos_cuentas[".isResizeColumns"] = true;





$tdatabox_cat_finanzas_bancos_cuentas[".pageSize"] = 20;

$tdatabox_cat_finanzas_bancos_cuentas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_finanzas_bancos_cuentas[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_finanzas_bancos_cuentas[".orderindexes"] = array();


$tdatabox_cat_finanzas_bancos_cuentas[".sqlHead"] = "SELECT cat_finanzas_bancos_cuentas.cat_finanzas_bancos_cuentas_id,  cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id,  cat_finanzas_bancos_cuentas.numero_de_cuenta,  cat_finanzas_bancos_cuentas.clabe,  cat_finanzas_bancos_cuentas.fecha_de_captura,  cat_finanzas_bancos_cuentas.capturista,  cat_finanzas_bancos_cuentas.time_stamp,  cat_finanzas_bancos_cuentas.vigente,  cat_finanzas_bancos_cuentas.descripcion_cuenta,  cat_usuarios.cat_usuarios_licencias_id,  cat_finanzas_bancos_cuentas.cat_finanzas_monedas_mu_id";
$tdatabox_cat_finanzas_bancos_cuentas[".sqlFrom"] = "FROM cat_finanzas_bancos_cuentas  LEFT OUTER JOIN cat_usuarios ON cat_finanzas_bancos_cuentas.capturista = cat_usuarios.usuario";
$tdatabox_cat_finanzas_bancos_cuentas[".sqlWhereExpr"] = "";
$tdatabox_cat_finanzas_bancos_cuentas[".sqlTail"] = "";

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
$tdatabox_cat_finanzas_bancos_cuentas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_finanzas_bancos_cuentas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_finanzas_bancos_cuentas[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_finanzas_bancos_cuentas[".highlightSearchResults"] = true;

$tableKeysbox_cat_finanzas_bancos_cuentas = array();
$tableKeysbox_cat_finanzas_bancos_cuentas[] = "cat_finanzas_bancos_cuentas_id";
$tdatabox_cat_finanzas_bancos_cuentas[".Keys"] = $tableKeysbox_cat_finanzas_bancos_cuentas;


$tdatabox_cat_finanzas_bancos_cuentas[".hideMobileList"] = array();




//	cat_finanzas_bancos_cuentas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_bancos_cuentas_id";
	$fdata["GoodName"] = "cat_finanzas_bancos_cuentas_id";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","cat_finanzas_bancos_cuentas_id");
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


	$tdatabox_cat_finanzas_bancos_cuentas["cat_finanzas_bancos_cuentas_id"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "cat_finanzas_bancos_cuentas_id";
//	cat_finanzas_bancos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_finanzas_bancos_id";
	$fdata["GoodName"] = "cat_finanzas_bancos_id";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","cat_finanzas_bancos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_bancos_id";

		$fdata["sourceSingle"] = "cat_finanzas_bancos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id";

	
	
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
	$edata["LookupTable"] = "cat_finanzas_bancos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cat_finanzas_bancos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_bancos";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatabox_cat_finanzas_bancos_cuentas["cat_finanzas_bancos_id"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "cat_finanzas_bancos_id";
//	numero_de_cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero_de_cuenta";
	$fdata["GoodName"] = "numero_de_cuenta";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","numero_de_cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numero_de_cuenta";

		$fdata["sourceSingle"] = "numero_de_cuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.numero_de_cuenta";

	
	
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


	$tdatabox_cat_finanzas_bancos_cuentas["numero_de_cuenta"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "numero_de_cuenta";
//	clabe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "clabe";
	$fdata["GoodName"] = "clabe";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","clabe");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "clabe";

		$fdata["sourceSingle"] = "clabe";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.clabe";

	
	
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


	$tdatabox_cat_finanzas_bancos_cuentas["clabe"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "clabe";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.fecha_de_captura";

	
	
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


	$tdatabox_cat_finanzas_bancos_cuentas["fecha_de_captura"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "fecha_de_captura";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.capturista";

	
	
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


	$tdatabox_cat_finanzas_bancos_cuentas["capturista"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.time_stamp";

	
	
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


	$tdatabox_cat_finanzas_bancos_cuentas["time_stamp"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.vigente";

	
	
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


	$tdatabox_cat_finanzas_bancos_cuentas["vigente"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "vigente";
//	descripcion_cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "descripcion_cuenta";
	$fdata["GoodName"] = "descripcion_cuenta";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","descripcion_cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_cuenta";

		$fdata["sourceSingle"] = "descripcion_cuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.descripcion_cuenta";

	
	
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


	$tdatabox_cat_finanzas_bancos_cuentas["descripcion_cuenta"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "descripcion_cuenta";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","cat_usuarios_licencias_id");
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


	$tdatabox_cat_finanzas_bancos_cuentas["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_finanzas_monedas_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cat_finanzas_monedas_mu_id";
	$fdata["GoodName"] = "cat_finanzas_monedas_mu_id";
	$fdata["ownerTable"] = "cat_finanzas_bancos_cuentas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_bancos_cuentas","cat_finanzas_monedas_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_monedas_mu_id";

		$fdata["sourceSingle"] = "cat_finanzas_monedas_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos_cuentas.cat_finanzas_monedas_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_finanzas_monedas_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "cat_finanzas_monedas_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_moneda";

	

	
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


	$tdatabox_cat_finanzas_bancos_cuentas["cat_finanzas_monedas_mu_id"] = $fdata;
		$tdatabox_cat_finanzas_bancos_cuentas[".searchableFields"][] = "cat_finanzas_monedas_mu_id";


$tables_data["box_cat_finanzas_bancos_cuentas"]=&$tdatabox_cat_finanzas_bancos_cuentas;
$field_labels["box_cat_finanzas_bancos_cuentas"] = &$fieldLabelsbox_cat_finanzas_bancos_cuentas;
$fieldToolTips["box_cat_finanzas_bancos_cuentas"] = &$fieldToolTipsbox_cat_finanzas_bancos_cuentas;
$placeHolders["box_cat_finanzas_bancos_cuentas"] = &$placeHoldersbox_cat_finanzas_bancos_cuentas;
$page_titles["box_cat_finanzas_bancos_cuentas"] = &$pageTitlesbox_cat_finanzas_bancos_cuentas;


changeTextControlsToDate( "box_cat_finanzas_bancos_cuentas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_finanzas_bancos_cuentas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_finanzas_bancos_cuentas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_finanzas_bancos_cuentas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_bancos_cuentas.cat_finanzas_bancos_cuentas_id,  cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id,  cat_finanzas_bancos_cuentas.numero_de_cuenta,  cat_finanzas_bancos_cuentas.clabe,  cat_finanzas_bancos_cuentas.fecha_de_captura,  cat_finanzas_bancos_cuentas.capturista,  cat_finanzas_bancos_cuentas.time_stamp,  cat_finanzas_bancos_cuentas.vigente,  cat_finanzas_bancos_cuentas.descripcion_cuenta,  cat_usuarios.cat_usuarios_licencias_id,  cat_finanzas_bancos_cuentas.cat_finanzas_monedas_mu_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_bancos_cuentas  LEFT OUTER JOIN cat_usuarios ON cat_finanzas_bancos_cuentas.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_finanzas_bancos_cuentas_id",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto6["m_sql"] = "cat_finanzas_bancos_cuentas.cat_finanzas_bancos_cuentas_id";
$proto6["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_bancos_id",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto8["m_sql"] = "cat_finanzas_bancos_cuentas.cat_finanzas_bancos_id";
$proto8["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_de_cuenta",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto10["m_sql"] = "cat_finanzas_bancos_cuentas.numero_de_cuenta";
$proto10["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "clabe",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto12["m_sql"] = "cat_finanzas_bancos_cuentas.clabe";
$proto12["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto14["m_sql"] = "cat_finanzas_bancos_cuentas.fecha_de_captura";
$proto14["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto16["m_sql"] = "cat_finanzas_bancos_cuentas.capturista";
$proto16["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto18["m_sql"] = "cat_finanzas_bancos_cuentas.time_stamp";
$proto18["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto20["m_sql"] = "cat_finanzas_bancos_cuentas.vigente";
$proto20["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_cuenta",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto22["m_sql"] = "cat_finanzas_bancos_cuentas.descripcion_cuenta";
$proto22["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto24["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto24["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_monedas_mu_id",
	"m_strTable" => "cat_finanzas_bancos_cuentas",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto26["m_sql"] = "cat_finanzas_bancos_cuentas.cat_finanzas_monedas_mu_id";
$proto26["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "cat_finanzas_bancos_cuentas";
$proto29["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cat_finanzas_bancos_cuentas_id";
$proto29["m_columns"][] = "cat_finanzas_bancos_id";
$proto29["m_columns"][] = "numero_de_cuenta";
$proto29["m_columns"][] = "clabe";
$proto29["m_columns"][] = "fecha_de_captura";
$proto29["m_columns"][] = "capturista";
$proto29["m_columns"][] = "cat_finanzas_monedas_mu_id";
$proto29["m_columns"][] = "time_stamp";
$proto29["m_columns"][] = "vigente";
$proto29["m_columns"][] = "descripcion_cuenta";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "cat_finanzas_bancos_cuentas";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_LEFTJOIN";
			$proto33=array();
$proto33["m_strName"] = "cat_usuarios";
$proto33["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "cat_usuarios_id";
$proto33["m_columns"][] = "time_stamp";
$proto33["m_columns"][] = "vigente";
$proto33["m_columns"][] = "capturista";
$proto33["m_columns"][] = "usuario";
$proto33["m_columns"][] = "cat_usuarios_licencias_id";
$proto33["m_columns"][] = "pass";
$proto33["m_columns"][] = "nombre";
$proto33["m_columns"][] = "correo";
$proto33["m_columns"][] = "cat_trabajadores_altas_id";
$proto33["m_columns"][] = "res_autorizacion";
$proto33["m_columns"][] = "session";
$proto33["m_columns"][] = "tipo";
$proto33["m_columns"][] = "session_v2";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_finanzas_bancos_cuentas.capturista = cat_usuarios.usuario";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "box_cat_finanzas_bancos_cuentas";
$proto34=array();
$proto34["m_sql"] = "cat_usuarios.usuario = cat_finanzas_bancos_cuentas.capturista";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_finanzas_bancos_cuentas"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= cat_finanzas_bancos_cuentas.capturista";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_finanzas_bancos_cuentas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_finanzas_bancos_cuentas = createSqlQuery_box_cat_finanzas_bancos_cuentas();


	
		;

											

$tdatabox_cat_finanzas_bancos_cuentas[".sqlquery"] = $queryData_box_cat_finanzas_bancos_cuentas;



$tdatabox_cat_finanzas_bancos_cuentas[".hasEvents"] = false;

?>