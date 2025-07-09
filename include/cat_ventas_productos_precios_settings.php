<?php
$tdatacat_ventas_productos_precios = array();
$tdatacat_ventas_productos_precios[".searchableFields"] = array();
$tdatacat_ventas_productos_precios[".ShortName"] = "cat_ventas_productos_precios";
$tdatacat_ventas_productos_precios[".OwnerID"] = "";
$tdatacat_ventas_productos_precios[".OriginalTable"] = "cat_ventas_productos_precios";


$tdatacat_ventas_productos_precios[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacat_ventas_productos_precios[".originalPagesByType"] = $tdatacat_ventas_productos_precios[".pagesByType"];
$tdatacat_ventas_productos_precios[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacat_ventas_productos_precios[".originalPages"] = $tdatacat_ventas_productos_precios[".pages"];
$tdatacat_ventas_productos_precios[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacat_ventas_productos_precios[".originalDefaultPages"] = $tdatacat_ventas_productos_precios[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_precios = array();
$fieldToolTipscat_ventas_productos_precios = array();
$pageTitlescat_ventas_productos_precios = array();
$placeHolderscat_ventas_productos_precios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_precios["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_precios["Spanish"] = array();
	$placeHolderscat_ventas_productos_precios["Spanish"] = array();
	$pageTitlescat_ventas_productos_precios["Spanish"] = array();
	$fieldLabelscat_ventas_productos_precios["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_precios["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_precios["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_precios["Spanish"]["cat_finanzas_monedas_mu_id"] = "Moneda";
	$fieldToolTipscat_ventas_productos_precios["Spanish"]["cat_finanzas_monedas_mu_id"] = "";
	$placeHolderscat_ventas_productos_precios["Spanish"]["cat_finanzas_monedas_mu_id"] = "";
	$fieldLabelscat_ventas_productos_precios["Spanish"]["cat_produccion_cultivos_01"] = "Cultivos";
	$fieldToolTipscat_ventas_productos_precios["Spanish"]["cat_produccion_cultivos_01"] = "";
	$placeHolderscat_ventas_productos_precios["Spanish"]["cat_produccion_cultivos_01"] = "";
	$fieldLabelscat_ventas_productos_precios["Spanish"]["cat_ventas_productos_precios_id"] = "Cat Ventas Productos Precios Id";
	$fieldToolTipscat_ventas_productos_precios["Spanish"]["cat_ventas_productos_precios_id"] = "";
	$placeHolderscat_ventas_productos_precios["Spanish"]["cat_ventas_productos_precios_id"] = "";
	$fieldLabelscat_ventas_productos_precios["Spanish"]["cat_ventas_productos_sku_id"] = "SKU";
	$fieldToolTipscat_ventas_productos_precios["Spanish"]["cat_ventas_productos_sku_id"] = "";
	$placeHolderscat_ventas_productos_precios["Spanish"]["cat_ventas_productos_sku_id"] = "";
	$fieldLabelscat_ventas_productos_precios["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipscat_ventas_productos_precios["Spanish"]["fecha"] = "";
	$placeHolderscat_ventas_productos_precios["Spanish"]["fecha"] = "";
	$fieldLabelscat_ventas_productos_precios["Spanish"]["precio"] = "Precio";
	$fieldToolTipscat_ventas_productos_precios["Spanish"]["precio"] = "";
	$placeHolderscat_ventas_productos_precios["Spanish"]["precio"] = "";
	$fieldLabelscat_ventas_productos_precios["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_precios["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_precios["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_productos_precios["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_precios["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_precios["Spanish"]["vigente"] = "";
	if (count($fieldToolTipscat_ventas_productos_precios["Spanish"]))
		$tdatacat_ventas_productos_precios[".isUseToolTips"] = true;
}


	$tdatacat_ventas_productos_precios[".NCSearch"] = true;



$tdatacat_ventas_productos_precios[".shortTableName"] = "cat_ventas_productos_precios";
$tdatacat_ventas_productos_precios[".nSecOptions"] = 0;

$tdatacat_ventas_productos_precios[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_precios[".entityType"] = 0;
$tdatacat_ventas_productos_precios[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_precios[".strOriginalTableName"] = "cat_ventas_productos_precios";

	



$tdatacat_ventas_productos_precios[".showAddInPopup"] = false;

$tdatacat_ventas_productos_precios[".showEditInPopup"] = false;

$tdatacat_ventas_productos_precios[".showViewInPopup"] = false;

$tdatacat_ventas_productos_precios[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_precios[".listAjax"] = false;

	$tdatacat_ventas_productos_precios[".audit"] = false;

	$tdatacat_ventas_productos_precios[".locking"] = false;


$pages = $tdatacat_ventas_productos_precios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_precios[".edit"] = true;
	$tdatacat_ventas_productos_precios[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_precios[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_precios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_precios[".add"] = true;
$tdatacat_ventas_productos_precios[".afterAddAction"] = 1;
$tdatacat_ventas_productos_precios[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_precios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_precios[".list"] = true;
}



$tdatacat_ventas_productos_precios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_precios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_precios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_precios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_precios[".printFriendly"] = true;
}



$tdatacat_ventas_productos_precios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_precios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_precios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_precios[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_precios[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_precios[".buttonsAdded"] = false;

$tdatacat_ventas_productos_precios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_precios[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_precios[".badgeColor"] = "DC143C";


$tdatacat_ventas_productos_precios[".allSearchFields"] = array();
$tdatacat_ventas_productos_precios[".filterFields"] = array();
$tdatacat_ventas_productos_precios[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_precios[".googleLikeFields"] = array();
$tdatacat_ventas_productos_precios[".googleLikeFields"][] = "cat_ventas_productos_precios_id";
$tdatacat_ventas_productos_precios[".googleLikeFields"][] = "cat_ventas_productos_sku_id";
$tdatacat_ventas_productos_precios[".googleLikeFields"][] = "cat_produccion_cultivos_01";
$tdatacat_ventas_productos_precios[".googleLikeFields"][] = "precio";
$tdatacat_ventas_productos_precios[".googleLikeFields"][] = "fecha";
$tdatacat_ventas_productos_precios[".googleLikeFields"][] = "cat_finanzas_monedas_mu_id";
$tdatacat_ventas_productos_precios[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_precios[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_precios[".googleLikeFields"][] = "time_stamp";



$tdatacat_ventas_productos_precios[".tableType"] = "list";

$tdatacat_ventas_productos_precios[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_precios[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_precios[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_precios[".geocodingEnabled"] = false;










$tdatacat_ventas_productos_precios[".pageSize"] = 20;

$tdatacat_ventas_productos_precios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_precios[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_precios[".orderindexes"] = array();


$tdatacat_ventas_productos_precios[".sqlHead"] = "SELECT cat_ventas_productos_precios_id,  	cat_ventas_productos_sku_id,  	cat_produccion_cultivos_01,  	precio,  	fecha,  	cat_finanzas_monedas_mu_id,  	capturista,  	vigente,  	time_stamp";
$tdatacat_ventas_productos_precios[".sqlFrom"] = "FROM cat_ventas_productos_precios";
$tdatacat_ventas_productos_precios[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_precios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_precios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_precios[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_precios[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_precios = array();
$tableKeyscat_ventas_productos_precios[] = "cat_ventas_productos_precios_id";
$tdatacat_ventas_productos_precios[".Keys"] = $tableKeyscat_ventas_productos_precios;


$tdatacat_ventas_productos_precios[".hideMobileList"] = array();




//	cat_ventas_productos_precios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_precios_id";
	$fdata["GoodName"] = "cat_ventas_productos_precios_id";
	$fdata["ownerTable"] = "cat_ventas_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_precios","cat_ventas_productos_precios_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_precios_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_precios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_precios_id";

	
	
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


	$tdatacat_ventas_productos_precios["cat_ventas_productos_precios_id"] = $fdata;
		$tdatacat_ventas_productos_precios[".searchableFields"][] = "cat_ventas_productos_precios_id";
//	cat_ventas_productos_sku_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_ventas_productos_sku_id";
	$fdata["GoodName"] = "cat_ventas_productos_sku_id";
	$fdata["ownerTable"] = "cat_ventas_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_precios","cat_ventas_productos_sku_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_productos_sku_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_sku_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_sku_id";

	
	
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
	$edata["LookupTable"] = "cat_ventas_productos_sku";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_ventas_productos_sku_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_ventas_productos_sku";

	

	
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


	$tdatacat_ventas_productos_precios["cat_ventas_productos_sku_id"] = $fdata;
		$tdatacat_ventas_productos_precios[".searchableFields"][] = "cat_ventas_productos_sku_id";
//	cat_produccion_cultivos_01
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_produccion_cultivos_01";
	$fdata["GoodName"] = "cat_produccion_cultivos_01";
	$fdata["ownerTable"] = "cat_ventas_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_precios","cat_produccion_cultivos_01");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_produccion_cultivos_01";

		$fdata["sourceSingle"] = "cat_produccion_cultivos_01";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_cultivos_01";

	
	
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
	$edata["LookupTable"] = "cat_produccion_cultivos_01_productos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_produccion_cultivos_01_productos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_producto";

	

	
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


	$tdatacat_ventas_productos_precios["cat_produccion_cultivos_01"] = $fdata;
		$tdatacat_ventas_productos_precios[".searchableFields"][] = "cat_produccion_cultivos_01";
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "cat_ventas_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_precios","precio");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "precio";

		$fdata["sourceSingle"] = "precio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "precio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacat_ventas_productos_precios["precio"] = $fdata;
		$tdatacat_ventas_productos_precios[".searchableFields"][] = "precio";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "cat_ventas_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_precios","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
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


	$tdatacat_ventas_productos_precios["fecha"] = $fdata;
		$tdatacat_ventas_productos_precios[".searchableFields"][] = "fecha";
//	cat_finanzas_monedas_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_finanzas_monedas_mu_id";
	$fdata["GoodName"] = "cat_finanzas_monedas_mu_id";
	$fdata["ownerTable"] = "cat_ventas_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_precios","cat_finanzas_monedas_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_monedas_mu_id";

		$fdata["sourceSingle"] = "cat_finanzas_monedas_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_monedas_mu_id";

	
	
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
		$edata["LCType"] = 2;

	
		
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


	$tdatacat_ventas_productos_precios["cat_finanzas_monedas_mu_id"] = $fdata;
		$tdatacat_ventas_productos_precios[".searchableFields"][] = "cat_finanzas_monedas_mu_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_precios","capturista");
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


	$tdatacat_ventas_productos_precios["capturista"] = $fdata;
		$tdatacat_ventas_productos_precios[".searchableFields"][] = "capturista";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_precios","vigente");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatacat_ventas_productos_precios["vigente"] = $fdata;
		$tdatacat_ventas_productos_precios[".searchableFields"][] = "vigente";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_precios","time_stamp");
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


	$tdatacat_ventas_productos_precios["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_precios[".searchableFields"][] = "time_stamp";


$tables_data["cat_ventas_productos_precios"]=&$tdatacat_ventas_productos_precios;
$field_labels["cat_ventas_productos_precios"] = &$fieldLabelscat_ventas_productos_precios;
$fieldToolTips["cat_ventas_productos_precios"] = &$fieldToolTipscat_ventas_productos_precios;
$placeHolders["cat_ventas_productos_precios"] = &$placeHolderscat_ventas_productos_precios;
$page_titles["cat_ventas_productos_precios"] = &$pageTitlescat_ventas_productos_precios;


changeTextControlsToDate( "cat_ventas_productos_precios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_precios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_precios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_precios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_precios_id,  	cat_ventas_productos_sku_id,  	cat_produccion_cultivos_01,  	precio,  	fecha,  	cat_finanzas_monedas_mu_id,  	capturista,  	vigente,  	time_stamp";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_precios";
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
	"m_strName" => "cat_ventas_productos_precios_id",
	"m_strTable" => "cat_ventas_productos_precios",
	"m_srcTableName" => "cat_ventas_productos_precios"
));

$proto6["m_sql"] = "cat_ventas_productos_precios_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_precios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_sku_id",
	"m_strTable" => "cat_ventas_productos_precios",
	"m_srcTableName" => "cat_ventas_productos_precios"
));

$proto8["m_sql"] = "cat_ventas_productos_sku_id";
$proto8["m_srcTableName"] = "cat_ventas_productos_precios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_cultivos_01",
	"m_strTable" => "cat_ventas_productos_precios",
	"m_srcTableName" => "cat_ventas_productos_precios"
));

$proto10["m_sql"] = "cat_produccion_cultivos_01";
$proto10["m_srcTableName"] = "cat_ventas_productos_precios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "cat_ventas_productos_precios",
	"m_srcTableName" => "cat_ventas_productos_precios"
));

$proto12["m_sql"] = "precio";
$proto12["m_srcTableName"] = "cat_ventas_productos_precios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "cat_ventas_productos_precios",
	"m_srcTableName" => "cat_ventas_productos_precios"
));

$proto14["m_sql"] = "fecha";
$proto14["m_srcTableName"] = "cat_ventas_productos_precios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_monedas_mu_id",
	"m_strTable" => "cat_ventas_productos_precios",
	"m_srcTableName" => "cat_ventas_productos_precios"
));

$proto16["m_sql"] = "cat_finanzas_monedas_mu_id";
$proto16["m_srcTableName"] = "cat_ventas_productos_precios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_precios",
	"m_srcTableName" => "cat_ventas_productos_precios"
));

$proto18["m_sql"] = "capturista";
$proto18["m_srcTableName"] = "cat_ventas_productos_precios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_precios",
	"m_srcTableName" => "cat_ventas_productos_precios"
));

$proto20["m_sql"] = "vigente";
$proto20["m_srcTableName"] = "cat_ventas_productos_precios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_precios",
	"m_srcTableName" => "cat_ventas_productos_precios"
));

$proto22["m_sql"] = "time_stamp";
$proto22["m_srcTableName"] = "cat_ventas_productos_precios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cat_ventas_productos_precios";
$proto25["m_srcTableName"] = "cat_ventas_productos_precios";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_ventas_productos_precios_id";
$proto25["m_columns"][] = "cat_ventas_productos_sku_id";
$proto25["m_columns"][] = "cat_produccion_cultivos_01";
$proto25["m_columns"][] = "precio";
$proto25["m_columns"][] = "fecha";
$proto25["m_columns"][] = "cat_finanzas_monedas_mu_id";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cat_ventas_productos_precios";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cat_ventas_productos_precios";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_precios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_precios = createSqlQuery_cat_ventas_productos_precios();


	
		;

									

$tdatacat_ventas_productos_precios[".sqlquery"] = $queryData_cat_ventas_productos_precios;



$tdatacat_ventas_productos_precios[".hasEvents"] = false;

?>