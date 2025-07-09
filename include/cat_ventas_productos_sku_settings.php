<?php
$tdatacat_ventas_productos_sku = array();
$tdatacat_ventas_productos_sku[".searchableFields"] = array();
$tdatacat_ventas_productos_sku[".ShortName"] = "cat_ventas_productos_sku";
$tdatacat_ventas_productos_sku[".OwnerID"] = "";
$tdatacat_ventas_productos_sku[".OriginalTable"] = "cat_ventas_productos_sku";


$tdatacat_ventas_productos_sku[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_productos_sku[".originalPagesByType"] = $tdatacat_ventas_productos_sku[".pagesByType"];
$tdatacat_ventas_productos_sku[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_productos_sku[".originalPages"] = $tdatacat_ventas_productos_sku[".pages"];
$tdatacat_ventas_productos_sku[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_ventas_productos_sku[".originalDefaultPages"] = $tdatacat_ventas_productos_sku[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_sku = array();
$fieldToolTipscat_ventas_productos_sku = array();
$pageTitlescat_ventas_productos_sku = array();
$placeHolderscat_ventas_productos_sku = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_sku["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_sku["Spanish"] = array();
	$placeHolderscat_ventas_productos_sku["Spanish"] = array();
	$pageTitlescat_ventas_productos_sku["Spanish"] = array();
	$fieldLabelscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_sku_id"] = "Id";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_sku_id"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_sku_id"] = "";
	$fieldLabelscat_ventas_productos_sku["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_productos_sku["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_productos_sku["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_sku["Spanish"]["descripcion_ventas_productos_sku"] = "Descripción SKU";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["descripcion_ventas_productos_sku"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["descripcion_ventas_productos_sku"] = "";
	$fieldLabelscat_ventas_productos_sku["Spanish"]["upc_ventas_productos"] = "Upc";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["upc_ventas_productos"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["upc_ventas_productos"] = "";
	$fieldLabelscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_manejo_id"] = "Manejo";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_manejo_id"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_manejo_id"] = "";
	$fieldLabelscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_marcas_id"] = "Marca";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_marcas_id"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_marcas_id"] = "";
	$fieldLabelscat_ventas_productos_sku["Spanish"]["numero_sku"] = "Numero Sku";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["numero_sku"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["numero_sku"] = "";
	$fieldLabelscat_ventas_productos_sku["Spanish"]["cat_ventas_clientes_id"] = "Cliente";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["cat_ventas_clientes_id"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["cat_ventas_clientes_id"] = "";
	$fieldLabelscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_variedades_id"] = "Variedades Id";
	$fieldToolTipscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_variedades_id"] = "";
	$placeHolderscat_ventas_productos_sku["Spanish"]["cat_ventas_productos_variedades_id"] = "";
	if (count($fieldToolTipscat_ventas_productos_sku["Spanish"]))
		$tdatacat_ventas_productos_sku[".isUseToolTips"] = true;
}





$tdatacat_ventas_productos_sku[".shortTableName"] = "cat_ventas_productos_sku";
$tdatacat_ventas_productos_sku[".nSecOptions"] = 0;

$tdatacat_ventas_productos_sku[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_sku[".entityType"] = 0;
$tdatacat_ventas_productos_sku[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_sku[".strOriginalTableName"] = "cat_ventas_productos_sku";

	



$tdatacat_ventas_productos_sku[".showAddInPopup"] = false;

$tdatacat_ventas_productos_sku[".showEditInPopup"] = false;

$tdatacat_ventas_productos_sku[".showViewInPopup"] = false;

$tdatacat_ventas_productos_sku[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_sku[".listAjax"] = false;

	$tdatacat_ventas_productos_sku[".audit"] = true;

	$tdatacat_ventas_productos_sku[".locking"] = true;


$pages = $tdatacat_ventas_productos_sku[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_sku[".edit"] = true;
	$tdatacat_ventas_productos_sku[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_sku[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_sku[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_sku[".add"] = true;
$tdatacat_ventas_productos_sku[".afterAddAction"] = 1;
$tdatacat_ventas_productos_sku[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_sku[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_sku[".list"] = true;
}



$tdatacat_ventas_productos_sku[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_sku[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_sku[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_sku[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_sku[".printFriendly"] = true;
}



$tdatacat_ventas_productos_sku[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_sku[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_sku[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_sku[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_sku[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_sku[".buttonsAdded"] = false;

$tdatacat_ventas_productos_sku[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_sku[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_sku[".badgeColor"] = "778899";


$tdatacat_ventas_productos_sku[".allSearchFields"] = array();
$tdatacat_ventas_productos_sku[".filterFields"] = array();
$tdatacat_ventas_productos_sku[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_sku[".googleLikeFields"] = array();
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "cat_ventas_productos_sku_id";
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "cat_ventas_productos_variedades_id";
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "descripcion_ventas_productos_sku";
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "cat_ventas_productos_manejo_id";
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "upc_ventas_productos";
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "cat_ventas_productos_marcas_id";
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "numero_sku";
$tdatacat_ventas_productos_sku[".googleLikeFields"][] = "cat_ventas_clientes_id";



$tdatacat_ventas_productos_sku[".tableType"] = "list";

$tdatacat_ventas_productos_sku[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_sku[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_sku[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_sku[".geocodingEnabled"] = false;





$tdatacat_ventas_productos_sku[".isResizeColumns"] = true;





$tdatacat_ventas_productos_sku[".pageSize"] = 20;

$tdatacat_ventas_productos_sku[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_sku[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_sku[".orderindexes"] = array();


$tdatacat_ventas_productos_sku[".sqlHead"] = "SELECT cat_ventas_productos_sku_id,  	time_stamp,  	vigente,  	capturista,  	cat_ventas_productos_variedades_id,  	descripcion_ventas_productos_sku,  	cat_ventas_productos_manejo_id,  	upc_ventas_productos,  	cat_ventas_productos_marcas_id,  	numero_sku,  	cat_ventas_clientes_id";
$tdatacat_ventas_productos_sku[".sqlFrom"] = "FROM cat_ventas_productos_sku";
$tdatacat_ventas_productos_sku[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_sku[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_ventas_productos_sku[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_sku[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_sku[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_sku[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_sku = array();
$tableKeyscat_ventas_productos_sku[] = "cat_ventas_productos_sku_id";
$tdatacat_ventas_productos_sku[".Keys"] = $tableKeyscat_ventas_productos_sku;


$tdatacat_ventas_productos_sku[".hideMobileList"] = array();




//	cat_ventas_productos_sku_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_sku_id";
	$fdata["GoodName"] = "cat_ventas_productos_sku_id";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","cat_ventas_productos_sku_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatacat_ventas_productos_sku["cat_ventas_productos_sku_id"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "cat_ventas_productos_sku_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","time_stamp");
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


	$tdatacat_ventas_productos_sku["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","vigente");
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


	$tdatacat_ventas_productos_sku["vigente"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","capturista");
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


	$tdatacat_ventas_productos_sku["capturista"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "capturista";
//	cat_ventas_productos_variedades_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_ventas_productos_variedades_id";
	$fdata["GoodName"] = "cat_ventas_productos_variedades_id";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","cat_ventas_productos_variedades_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_productos_variedades_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_variedades_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_variedades_id";

	
	
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
	$edata["LookupTable"] = "cat_ventas_productos_variedades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_ventas_productos_variedades_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion_ventas_productos_variedad";

	

	
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


	$tdatacat_ventas_productos_sku["cat_ventas_productos_variedades_id"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "cat_ventas_productos_variedades_id";
//	descripcion_ventas_productos_sku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descripcion_ventas_productos_sku";
	$fdata["GoodName"] = "descripcion_ventas_productos_sku";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","descripcion_ventas_productos_sku");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_productos_sku";

		$fdata["sourceSingle"] = "descripcion_ventas_productos_sku";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_ventas_productos_sku";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacat_ventas_productos_sku["descripcion_ventas_productos_sku"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "descripcion_ventas_productos_sku";
//	cat_ventas_productos_manejo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_ventas_productos_manejo_id";
	$fdata["GoodName"] = "cat_ventas_productos_manejo_id";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","cat_ventas_productos_manejo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_productos_manejo_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_manejo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_manejo_id";

	
	
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
	$edata["LookupTable"] = "cat_ventas_productos_manejo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_ventas_productos_manejo_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_productos_manejo";

	

	
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


	$tdatacat_ventas_productos_sku["cat_ventas_productos_manejo_id"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "cat_ventas_productos_manejo_id";
//	upc_ventas_productos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "upc_ventas_productos";
	$fdata["GoodName"] = "upc_ventas_productos";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","upc_ventas_productos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "upc_ventas_productos";

		$fdata["sourceSingle"] = "upc_ventas_productos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upc_ventas_productos";

	
	
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


	$tdatacat_ventas_productos_sku["upc_ventas_productos"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "upc_ventas_productos";
//	cat_ventas_productos_marcas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_ventas_productos_marcas_id";
	$fdata["GoodName"] = "cat_ventas_productos_marcas_id";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","cat_ventas_productos_marcas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_productos_marcas_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_marcas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_marcas_id";

	
	
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
	$edata["LookupTable"] = "cat_ventas_productos_marcas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_ventas_productos_marcas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_ventas_productos_marcas";

	

	
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


	$tdatacat_ventas_productos_sku["cat_ventas_productos_marcas_id"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "cat_ventas_productos_marcas_id";
//	numero_sku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "numero_sku";
	$fdata["GoodName"] = "numero_sku";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","numero_sku");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numero_sku";

		$fdata["sourceSingle"] = "numero_sku";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero_sku";

	
	
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


	$tdatacat_ventas_productos_sku["numero_sku"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "numero_sku";
//	cat_ventas_clientes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cat_ventas_clientes_id";
	$fdata["GoodName"] = "cat_ventas_clientes_id";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_sku","cat_ventas_clientes_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_clientes_id";

		$fdata["sourceSingle"] = "cat_ventas_clientes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes_id";

	
	
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
	$edata["LookupTable"] = "box_cat_ventas_clientes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_ventas_clientes_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_cliente";

	

	
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


	$tdatacat_ventas_productos_sku["cat_ventas_clientes_id"] = $fdata;
		$tdatacat_ventas_productos_sku[".searchableFields"][] = "cat_ventas_clientes_id";


$tables_data["cat_ventas_productos_sku"]=&$tdatacat_ventas_productos_sku;
$field_labels["cat_ventas_productos_sku"] = &$fieldLabelscat_ventas_productos_sku;
$fieldToolTips["cat_ventas_productos_sku"] = &$fieldToolTipscat_ventas_productos_sku;
$placeHolders["cat_ventas_productos_sku"] = &$placeHolderscat_ventas_productos_sku;
$page_titles["cat_ventas_productos_sku"] = &$pageTitlescat_ventas_productos_sku;


changeTextControlsToDate( "cat_ventas_productos_sku" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_sku"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_sku"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_sku()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_sku_id,  	time_stamp,  	vigente,  	capturista,  	cat_ventas_productos_variedades_id,  	descripcion_ventas_productos_sku,  	cat_ventas_productos_manejo_id,  	upc_ventas_productos,  	cat_ventas_productos_marcas_id,  	numero_sku,  	cat_ventas_clientes_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_sku";
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
	"m_strName" => "cat_ventas_productos_sku_id",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto6["m_sql"] = "cat_ventas_productos_sku_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_sku";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_ventas_productos_sku";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_ventas_productos_sku";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_ventas_productos_sku";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_variedades_id",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto14["m_sql"] = "cat_ventas_productos_variedades_id";
$proto14["m_srcTableName"] = "cat_ventas_productos_sku";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_sku",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto16["m_sql"] = "descripcion_ventas_productos_sku";
$proto16["m_srcTableName"] = "cat_ventas_productos_sku";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_manejo_id",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto18["m_sql"] = "cat_ventas_productos_manejo_id";
$proto18["m_srcTableName"] = "cat_ventas_productos_sku";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "upc_ventas_productos",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto20["m_sql"] = "upc_ventas_productos";
$proto20["m_srcTableName"] = "cat_ventas_productos_sku";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_marcas_id",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto22["m_sql"] = "cat_ventas_productos_marcas_id";
$proto22["m_srcTableName"] = "cat_ventas_productos_sku";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_sku",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto24["m_sql"] = "numero_sku";
$proto24["m_srcTableName"] = "cat_ventas_productos_sku";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_clientes_id",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "cat_ventas_productos_sku"
));

$proto26["m_sql"] = "cat_ventas_clientes_id";
$proto26["m_srcTableName"] = "cat_ventas_productos_sku";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "cat_ventas_productos_sku";
$proto29["m_srcTableName"] = "cat_ventas_productos_sku";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cat_ventas_productos_sku_id";
$proto29["m_columns"][] = "time_stamp";
$proto29["m_columns"][] = "vigente";
$proto29["m_columns"][] = "capturista";
$proto29["m_columns"][] = "cat_ventas_productos_variedades_id";
$proto29["m_columns"][] = "descripcion_ventas_productos_sku";
$proto29["m_columns"][] = "cat_ventas_productos_manejo_id";
$proto29["m_columns"][] = "upc_ventas_productos";
$proto29["m_columns"][] = "cat_ventas_productos_marcas_id";
$proto29["m_columns"][] = "numero_sku";
$proto29["m_columns"][] = "cat_ventas_clientes_id";
$proto29["m_columns"][] = "cat_ventas_productos_tipo_de_pedido_id";
$proto29["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto29["m_columns"][] = "sku_capacidad";
$proto29["m_columns"][] = "ajuste_empaque";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "cat_ventas_productos_sku";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "cat_ventas_productos_sku";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_sku";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_sku = createSqlQuery_cat_ventas_productos_sku();


	
		;

											

$tdatacat_ventas_productos_sku[".sqlquery"] = $queryData_cat_ventas_productos_sku;



$tdatacat_ventas_productos_sku[".hasEvents"] = false;

?>