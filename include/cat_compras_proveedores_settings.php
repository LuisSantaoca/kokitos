<?php
$tdatacat_compras_proveedores = array();
$tdatacat_compras_proveedores[".searchableFields"] = array();
$tdatacat_compras_proveedores[".ShortName"] = "cat_compras_proveedores";
$tdatacat_compras_proveedores[".OwnerID"] = "";
$tdatacat_compras_proveedores[".OriginalTable"] = "cat_compras_proveedores";


$tdatacat_compras_proveedores[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_compras_proveedores[".originalPagesByType"] = $tdatacat_compras_proveedores[".pagesByType"];
$tdatacat_compras_proveedores[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_compras_proveedores[".originalPages"] = $tdatacat_compras_proveedores[".pages"];
$tdatacat_compras_proveedores[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_compras_proveedores[".originalDefaultPages"] = $tdatacat_compras_proveedores[".defaultPages"];

//	field labels
$fieldLabelscat_compras_proveedores = array();
$fieldToolTipscat_compras_proveedores = array();
$pageTitlescat_compras_proveedores = array();
$placeHolderscat_compras_proveedores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_compras_proveedores["Spanish"] = array();
	$fieldToolTipscat_compras_proveedores["Spanish"] = array();
	$placeHolderscat_compras_proveedores["Spanish"] = array();
	$pageTitlescat_compras_proveedores["Spanish"] = array();
	$fieldLabelscat_compras_proveedores["Spanish"]["cat_compras_proveedores_id"] = "Id";
	$fieldToolTipscat_compras_proveedores["Spanish"]["cat_compras_proveedores_id"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["cat_compras_proveedores_id"] = "";
	$fieldLabelscat_compras_proveedores["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_compras_proveedores["Spanish"]["time_stamp"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_compras_proveedores["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_compras_proveedores["Spanish"]["vigente"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["vigente"] = "";
	$fieldLabelscat_compras_proveedores["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_compras_proveedores["Spanish"]["capturista"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["capturista"] = "";
	$fieldLabelscat_compras_proveedores["Spanish"]["descripcion_proveedores"] = "Proveedor";
	$fieldToolTipscat_compras_proveedores["Spanish"]["descripcion_proveedores"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["descripcion_proveedores"] = "";
	$fieldLabelscat_compras_proveedores["Spanish"]["rfc_compras_proveedores"] = "Rfc ";
	$fieldToolTipscat_compras_proveedores["Spanish"]["rfc_compras_proveedores"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["rfc_compras_proveedores"] = "";
	$fieldLabelscat_compras_proveedores["Spanish"]["cat_compras_proveedores_categorias_id"] = "Categoria";
	$fieldToolTipscat_compras_proveedores["Spanish"]["cat_compras_proveedores_categorias_id"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["cat_compras_proveedores_categorias_id"] = "";
	$fieldLabelscat_compras_proveedores["Spanish"]["costo_check"] = "Costo Check";
	$fieldToolTipscat_compras_proveedores["Spanish"]["costo_check"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["costo_check"] = "";
	$fieldLabelscat_compras_proveedores["Spanish"]["llave_rfc_licencia"] = "Llave Rfc Licencia";
	$fieldToolTipscat_compras_proveedores["Spanish"]["llave_rfc_licencia"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["llave_rfc_licencia"] = "";
	$fieldLabelscat_compras_proveedores["Spanish"]["alias_proveedor"] = "Alias Proveedor";
	$fieldToolTipscat_compras_proveedores["Spanish"]["alias_proveedor"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["alias_proveedor"] = "";
	$fieldLabelscat_compras_proveedores["Spanish"]["id_migracion"] = "Id Migracion";
	$fieldToolTipscat_compras_proveedores["Spanish"]["id_migracion"] = "";
	$placeHolderscat_compras_proveedores["Spanish"]["id_migracion"] = "";
	if (count($fieldToolTipscat_compras_proveedores["Spanish"]))
		$tdatacat_compras_proveedores[".isUseToolTips"] = true;
}





$tdatacat_compras_proveedores[".shortTableName"] = "cat_compras_proveedores";
$tdatacat_compras_proveedores[".nSecOptions"] = 0;

$tdatacat_compras_proveedores[".mainTableOwnerID"] = "";
$tdatacat_compras_proveedores[".entityType"] = 0;
$tdatacat_compras_proveedores[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_compras_proveedores[".strOriginalTableName"] = "cat_compras_proveedores";

	



$tdatacat_compras_proveedores[".showAddInPopup"] = false;

$tdatacat_compras_proveedores[".showEditInPopup"] = false;

$tdatacat_compras_proveedores[".showViewInPopup"] = false;

$tdatacat_compras_proveedores[".listAjax"] = false;
//	temporary
//$tdatacat_compras_proveedores[".listAjax"] = false;

	$tdatacat_compras_proveedores[".audit"] = true;

	$tdatacat_compras_proveedores[".locking"] = true;


$pages = $tdatacat_compras_proveedores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_compras_proveedores[".edit"] = true;
	$tdatacat_compras_proveedores[".afterEditAction"] = 1;
	$tdatacat_compras_proveedores[".closePopupAfterEdit"] = 1;
	$tdatacat_compras_proveedores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_compras_proveedores[".add"] = true;
$tdatacat_compras_proveedores[".afterAddAction"] = 1;
$tdatacat_compras_proveedores[".closePopupAfterAdd"] = 1;
$tdatacat_compras_proveedores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_compras_proveedores[".list"] = true;
}



$tdatacat_compras_proveedores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_compras_proveedores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_compras_proveedores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_compras_proveedores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_compras_proveedores[".printFriendly"] = true;
}



$tdatacat_compras_proveedores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_compras_proveedores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_compras_proveedores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_compras_proveedores[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_compras_proveedores[".ajaxCodeSnippetAdded"] = false;

$tdatacat_compras_proveedores[".buttonsAdded"] = false;

$tdatacat_compras_proveedores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_compras_proveedores[".isUseTimeForSearch"] = false;


$tdatacat_compras_proveedores[".badgeColor"] = "2F4F4F";


$tdatacat_compras_proveedores[".allSearchFields"] = array();
$tdatacat_compras_proveedores[".filterFields"] = array();
$tdatacat_compras_proveedores[".requiredSearchFields"] = array();

$tdatacat_compras_proveedores[".googleLikeFields"] = array();
$tdatacat_compras_proveedores[".googleLikeFields"][] = "cat_compras_proveedores_id";
$tdatacat_compras_proveedores[".googleLikeFields"][] = "time_stamp";
$tdatacat_compras_proveedores[".googleLikeFields"][] = "vigente";
$tdatacat_compras_proveedores[".googleLikeFields"][] = "capturista";
$tdatacat_compras_proveedores[".googleLikeFields"][] = "descripcion_proveedores";
$tdatacat_compras_proveedores[".googleLikeFields"][] = "rfc_compras_proveedores";
$tdatacat_compras_proveedores[".googleLikeFields"][] = "cat_compras_proveedores_categorias_id";
$tdatacat_compras_proveedores[".googleLikeFields"][] = "id_migracion";
$tdatacat_compras_proveedores[".googleLikeFields"][] = "llave_rfc_licencia";
$tdatacat_compras_proveedores[".googleLikeFields"][] = "costo_check";
$tdatacat_compras_proveedores[".googleLikeFields"][] = "alias_proveedor";



$tdatacat_compras_proveedores[".tableType"] = "list";

$tdatacat_compras_proveedores[".printerPageOrientation"] = 0;
$tdatacat_compras_proveedores[".nPrinterPageScale"] = 100;

$tdatacat_compras_proveedores[".nPrinterSplitRecords"] = 40;

$tdatacat_compras_proveedores[".geocodingEnabled"] = false;





$tdatacat_compras_proveedores[".isResizeColumns"] = true;





$tdatacat_compras_proveedores[".pageSize"] = 20;

$tdatacat_compras_proveedores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_compras_proveedores[".strOrderBy"] = $tstrOrderBy;

$tdatacat_compras_proveedores[".orderindexes"] = array();


$tdatacat_compras_proveedores[".sqlHead"] = "SELECT cat_compras_proveedores_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_proveedores,  	rfc_compras_proveedores,  	cat_compras_proveedores_categorias_id,  	id_migracion,  	llave_rfc_licencia,  	costo_check,  	alias_proveedor";
$tdatacat_compras_proveedores[".sqlFrom"] = "FROM cat_compras_proveedores";
$tdatacat_compras_proveedores[".sqlWhereExpr"] = "";
$tdatacat_compras_proveedores[".sqlTail"] = "";

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
$tdatacat_compras_proveedores[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_compras_proveedores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_compras_proveedores[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_compras_proveedores[".highlightSearchResults"] = true;

$tableKeyscat_compras_proveedores = array();
$tableKeyscat_compras_proveedores[] = "cat_compras_proveedores_id";
$tdatacat_compras_proveedores[".Keys"] = $tableKeyscat_compras_proveedores;


$tdatacat_compras_proveedores[".hideMobileList"] = array();




//	cat_compras_proveedores_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_proveedores_id";
	$fdata["GoodName"] = "cat_compras_proveedores_id";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","cat_compras_proveedores_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_proveedores_id";

		$fdata["sourceSingle"] = "cat_compras_proveedores_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores_id";

	
	
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


	$tdatacat_compras_proveedores["cat_compras_proveedores_id"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "cat_compras_proveedores_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","time_stamp");
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


	$tdatacat_compras_proveedores["time_stamp"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","vigente");
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


	$tdatacat_compras_proveedores["vigente"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","capturista");
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


	$tdatacat_compras_proveedores["capturista"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "capturista";
//	descripcion_proveedores
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_proveedores";
	$fdata["GoodName"] = "descripcion_proveedores";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","descripcion_proveedores");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_proveedores";

		$fdata["sourceSingle"] = "descripcion_proveedores";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_proveedores";

	
	
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


	$tdatacat_compras_proveedores["descripcion_proveedores"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "descripcion_proveedores";
//	rfc_compras_proveedores
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rfc_compras_proveedores";
	$fdata["GoodName"] = "rfc_compras_proveedores";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","rfc_compras_proveedores");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rfc_compras_proveedores";

		$fdata["sourceSingle"] = "rfc_compras_proveedores";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rfc_compras_proveedores";

	
	
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


	$tdatacat_compras_proveedores["rfc_compras_proveedores"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "rfc_compras_proveedores";
//	cat_compras_proveedores_categorias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_compras_proveedores_categorias_id";
	$fdata["GoodName"] = "cat_compras_proveedores_categorias_id";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","cat_compras_proveedores_categorias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_proveedores_categorias_id";

		$fdata["sourceSingle"] = "cat_compras_proveedores_categorias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores_categorias_id";

	
	
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
	$edata["LookupTable"] = "cat_compras_proveedores_categorias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_proveedores_categorias_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_proveedores_categorias";

	

	
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


	$tdatacat_compras_proveedores["cat_compras_proveedores_categorias_id"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "cat_compras_proveedores_categorias_id";
//	id_migracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_migracion";
	$fdata["GoodName"] = "id_migracion";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","id_migracion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_migracion";

		$fdata["sourceSingle"] = "id_migracion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_migracion";

	
	
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


	$tdatacat_compras_proveedores["id_migracion"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "id_migracion";
//	llave_rfc_licencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "llave_rfc_licencia";
	$fdata["GoodName"] = "llave_rfc_licencia";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","llave_rfc_licencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_rfc_licencia";

		$fdata["sourceSingle"] = "llave_rfc_licencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_rfc_licencia";

	
	
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


	$tdatacat_compras_proveedores["llave_rfc_licencia"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "llave_rfc_licencia";
//	costo_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "costo_check";
	$fdata["GoodName"] = "costo_check";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","costo_check");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "costo_check";

		$fdata["sourceSingle"] = "costo_check";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costo_check";

	
	
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


	$tdatacat_compras_proveedores["costo_check"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "costo_check";
//	alias_proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "alias_proveedor";
	$fdata["GoodName"] = "alias_proveedor";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores","alias_proveedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "alias_proveedor";

		$fdata["sourceSingle"] = "alias_proveedor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alias_proveedor";

	
	
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


	$tdatacat_compras_proveedores["alias_proveedor"] = $fdata;
		$tdatacat_compras_proveedores[".searchableFields"][] = "alias_proveedor";


$tables_data["cat_compras_proveedores"]=&$tdatacat_compras_proveedores;
$field_labels["cat_compras_proveedores"] = &$fieldLabelscat_compras_proveedores;
$fieldToolTips["cat_compras_proveedores"] = &$fieldToolTipscat_compras_proveedores;
$placeHolders["cat_compras_proveedores"] = &$placeHolderscat_compras_proveedores;
$page_titles["cat_compras_proveedores"] = &$pageTitlescat_compras_proveedores;


changeTextControlsToDate( "cat_compras_proveedores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_compras_proveedores"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_compras_proveedores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_compras_proveedores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_proveedores_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_proveedores,  	rfc_compras_proveedores,  	cat_compras_proveedores_categorias_id,  	id_migracion,  	llave_rfc_licencia,  	costo_check,  	alias_proveedor";
$proto0["m_strFrom"] = "FROM cat_compras_proveedores";
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
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto6["m_sql"] = "cat_compras_proveedores_id";
$proto6["m_srcTableName"] = "cat_compras_proveedores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_compras_proveedores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_compras_proveedores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_compras_proveedores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_proveedores",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto14["m_sql"] = "descripcion_proveedores";
$proto14["m_srcTableName"] = "cat_compras_proveedores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "rfc_compras_proveedores",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto16["m_sql"] = "rfc_compras_proveedores";
$proto16["m_srcTableName"] = "cat_compras_proveedores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_proveedores_categorias_id",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto18["m_sql"] = "cat_compras_proveedores_categorias_id";
$proto18["m_srcTableName"] = "cat_compras_proveedores";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_migracion",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto20["m_sql"] = "id_migracion";
$proto20["m_srcTableName"] = "cat_compras_proveedores";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_rfc_licencia",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto22["m_sql"] = "llave_rfc_licencia";
$proto22["m_srcTableName"] = "cat_compras_proveedores";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_check",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto24["m_sql"] = "costo_check";
$proto24["m_srcTableName"] = "cat_compras_proveedores";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "alias_proveedor",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "cat_compras_proveedores"
));

$proto26["m_sql"] = "alias_proveedor";
$proto26["m_srcTableName"] = "cat_compras_proveedores";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "cat_compras_proveedores";
$proto29["m_srcTableName"] = "cat_compras_proveedores";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cat_compras_proveedores_id";
$proto29["m_columns"][] = "time_stamp";
$proto29["m_columns"][] = "vigente";
$proto29["m_columns"][] = "capturista";
$proto29["m_columns"][] = "descripcion_proveedores";
$proto29["m_columns"][] = "rfc_compras_proveedores";
$proto29["m_columns"][] = "cat_compras_proveedores_categorias_id";
$proto29["m_columns"][] = "id_migracion";
$proto29["m_columns"][] = "llave_rfc_licencia";
$proto29["m_columns"][] = "costo_check";
$proto29["m_columns"][] = "alias_proveedor";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "cat_compras_proveedores";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "cat_compras_proveedores";
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
$proto0["m_srcTableName"]="cat_compras_proveedores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_compras_proveedores = createSqlQuery_cat_compras_proveedores();


	
		;

											

$tdatacat_compras_proveedores[".sqlquery"] = $queryData_cat_compras_proveedores;



include_once(getabspath("include/cat_compras_proveedores_events.php"));
$tdatacat_compras_proveedores[".hasEvents"] = true;

?>