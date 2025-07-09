<?php
$tdatabox_unidad_de_medida_compras = array();
$tdatabox_unidad_de_medida_compras[".searchableFields"] = array();
$tdatabox_unidad_de_medida_compras[".ShortName"] = "box_unidad_de_medida_compras";
$tdatabox_unidad_de_medida_compras[".OwnerID"] = "";
$tdatabox_unidad_de_medida_compras[".OriginalTable"] = "cat_compras_productos_unidad_de_medida_mu";


$tdatabox_unidad_de_medida_compras[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_unidad_de_medida_compras[".originalPagesByType"] = $tdatabox_unidad_de_medida_compras[".pagesByType"];
$tdatabox_unidad_de_medida_compras[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_unidad_de_medida_compras[".originalPages"] = $tdatabox_unidad_de_medida_compras[".pages"];
$tdatabox_unidad_de_medida_compras[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_unidad_de_medida_compras[".originalDefaultPages"] = $tdatabox_unidad_de_medida_compras[".defaultPages"];

//	field labels
$fieldLabelsbox_unidad_de_medida_compras = array();
$fieldToolTipsbox_unidad_de_medida_compras = array();
$pageTitlesbox_unidad_de_medida_compras = array();
$placeHoldersbox_unidad_de_medida_compras = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_unidad_de_medida_compras["Spanish"] = array();
	$fieldToolTipsbox_unidad_de_medida_compras["Spanish"] = array();
	$placeHoldersbox_unidad_de_medida_compras["Spanish"] = array();
	$pageTitlesbox_unidad_de_medida_compras["Spanish"] = array();
	$fieldLabelsbox_unidad_de_medida_compras["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "Id";
	$fieldToolTipsbox_unidad_de_medida_compras["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "";
	$placeHoldersbox_unidad_de_medida_compras["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "";
	$fieldLabelsbox_unidad_de_medida_compras["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbox_unidad_de_medida_compras["Spanish"]["time_stamp"] = "";
	$placeHoldersbox_unidad_de_medida_compras["Spanish"]["time_stamp"] = "";
	$fieldLabelsbox_unidad_de_medida_compras["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_unidad_de_medida_compras["Spanish"]["vigente"] = "";
	$placeHoldersbox_unidad_de_medida_compras["Spanish"]["vigente"] = "";
	$fieldLabelsbox_unidad_de_medida_compras["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_unidad_de_medida_compras["Spanish"]["capturista"] = "";
	$placeHoldersbox_unidad_de_medida_compras["Spanish"]["capturista"] = "";
	$fieldLabelsbox_unidad_de_medida_compras["Spanish"]["descripcion_cat_compras_productos_unidad_de_medida"] = "UdeM";
	$fieldToolTipsbox_unidad_de_medida_compras["Spanish"]["descripcion_cat_compras_productos_unidad_de_medida"] = "";
	$placeHoldersbox_unidad_de_medida_compras["Spanish"]["descripcion_cat_compras_productos_unidad_de_medida"] = "";
	$fieldLabelsbox_unidad_de_medida_compras["Spanish"]["cat_compras_productos_unidad_de_costo_mu_id"] = "UdeCosto";
	$fieldToolTipsbox_unidad_de_medida_compras["Spanish"]["cat_compras_productos_unidad_de_costo_mu_id"] = "";
	$placeHoldersbox_unidad_de_medida_compras["Spanish"]["cat_compras_productos_unidad_de_costo_mu_id"] = "";
	$fieldLabelsbox_unidad_de_medida_compras["Spanish"]["factor_de_conversion_costos"] = "Factor";
	$fieldToolTipsbox_unidad_de_medida_compras["Spanish"]["factor_de_conversion_costos"] = "";
	$placeHoldersbox_unidad_de_medida_compras["Spanish"]["factor_de_conversion_costos"] = "";
	if (count($fieldToolTipsbox_unidad_de_medida_compras["Spanish"]))
		$tdatabox_unidad_de_medida_compras[".isUseToolTips"] = true;
}





$tdatabox_unidad_de_medida_compras[".shortTableName"] = "box_unidad_de_medida_compras";
$tdatabox_unidad_de_medida_compras[".nSecOptions"] = 0;

$tdatabox_unidad_de_medida_compras[".mainTableOwnerID"] = "";
$tdatabox_unidad_de_medida_compras[".entityType"] = 1;
$tdatabox_unidad_de_medida_compras[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_unidad_de_medida_compras[".strOriginalTableName"] = "cat_compras_productos_unidad_de_medida_mu";

	



$tdatabox_unidad_de_medida_compras[".showAddInPopup"] = false;

$tdatabox_unidad_de_medida_compras[".showEditInPopup"] = false;

$tdatabox_unidad_de_medida_compras[".showViewInPopup"] = false;

$tdatabox_unidad_de_medida_compras[".listAjax"] = false;
//	temporary
//$tdatabox_unidad_de_medida_compras[".listAjax"] = false;

	$tdatabox_unidad_de_medida_compras[".audit"] = true;

	$tdatabox_unidad_de_medida_compras[".locking"] = true;


$pages = $tdatabox_unidad_de_medida_compras[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_unidad_de_medida_compras[".edit"] = true;
	$tdatabox_unidad_de_medida_compras[".afterEditAction"] = 1;
	$tdatabox_unidad_de_medida_compras[".closePopupAfterEdit"] = 1;
	$tdatabox_unidad_de_medida_compras[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_unidad_de_medida_compras[".add"] = true;
$tdatabox_unidad_de_medida_compras[".afterAddAction"] = 1;
$tdatabox_unidad_de_medida_compras[".closePopupAfterAdd"] = 1;
$tdatabox_unidad_de_medida_compras[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_unidad_de_medida_compras[".list"] = true;
}



$tdatabox_unidad_de_medida_compras[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_unidad_de_medida_compras[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_unidad_de_medida_compras[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_unidad_de_medida_compras[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_unidad_de_medida_compras[".printFriendly"] = true;
}



$tdatabox_unidad_de_medida_compras[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_unidad_de_medida_compras[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_unidad_de_medida_compras[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_unidad_de_medida_compras[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_unidad_de_medida_compras[".ajaxCodeSnippetAdded"] = false;

$tdatabox_unidad_de_medida_compras[".buttonsAdded"] = false;

$tdatabox_unidad_de_medida_compras[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_unidad_de_medida_compras[".isUseTimeForSearch"] = false;


$tdatabox_unidad_de_medida_compras[".badgeColor"] = "CD853F";


$tdatabox_unidad_de_medida_compras[".allSearchFields"] = array();
$tdatabox_unidad_de_medida_compras[".filterFields"] = array();
$tdatabox_unidad_de_medida_compras[".requiredSearchFields"] = array();

$tdatabox_unidad_de_medida_compras[".googleLikeFields"] = array();
$tdatabox_unidad_de_medida_compras[".googleLikeFields"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$tdatabox_unidad_de_medida_compras[".googleLikeFields"][] = "time_stamp";
$tdatabox_unidad_de_medida_compras[".googleLikeFields"][] = "vigente";
$tdatabox_unidad_de_medida_compras[".googleLikeFields"][] = "capturista";
$tdatabox_unidad_de_medida_compras[".googleLikeFields"][] = "descripcion_cat_compras_productos_unidad_de_medida";
$tdatabox_unidad_de_medida_compras[".googleLikeFields"][] = "factor_de_conversion_costos";
$tdatabox_unidad_de_medida_compras[".googleLikeFields"][] = "cat_compras_productos_unidad_de_costo_mu_id";



$tdatabox_unidad_de_medida_compras[".tableType"] = "list";

$tdatabox_unidad_de_medida_compras[".printerPageOrientation"] = 0;
$tdatabox_unidad_de_medida_compras[".nPrinterPageScale"] = 100;

$tdatabox_unidad_de_medida_compras[".nPrinterSplitRecords"] = 40;

$tdatabox_unidad_de_medida_compras[".geocodingEnabled"] = false;





$tdatabox_unidad_de_medida_compras[".isResizeColumns"] = true;





$tdatabox_unidad_de_medida_compras[".pageSize"] = 20;

$tdatabox_unidad_de_medida_compras[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_unidad_de_medida_compras[".strOrderBy"] = $tstrOrderBy;

$tdatabox_unidad_de_medida_compras[".orderindexes"] = array();


$tdatabox_unidad_de_medida_compras[".sqlHead"] = "SELECT cat_compras_productos_unidad_de_medida_mu_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_cat_compras_productos_unidad_de_medida,  	factor_de_conversion_costos,  	cat_compras_productos_unidad_de_costo_mu_id";
$tdatabox_unidad_de_medida_compras[".sqlFrom"] = "FROM cat_compras_productos_unidad_de_medida_mu";
$tdatabox_unidad_de_medida_compras[".sqlWhereExpr"] = "";
$tdatabox_unidad_de_medida_compras[".sqlTail"] = "";

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
$tdatabox_unidad_de_medida_compras[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_unidad_de_medida_compras[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_unidad_de_medida_compras[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_unidad_de_medida_compras[".highlightSearchResults"] = true;

$tableKeysbox_unidad_de_medida_compras = array();
$tableKeysbox_unidad_de_medida_compras[] = "cat_compras_productos_unidad_de_medida_mu_id";
$tdatabox_unidad_de_medida_compras[".Keys"] = $tableKeysbox_unidad_de_medida_compras;


$tdatabox_unidad_de_medida_compras[".hideMobileList"] = array();




//	cat_compras_productos_unidad_de_medida_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_productos_unidad_de_medida_mu_id";
	$fdata["GoodName"] = "cat_compras_productos_unidad_de_medida_mu_id";
	$fdata["ownerTable"] = "cat_compras_productos_unidad_de_medida_mu";
	$fdata["Label"] = GetFieldLabel("box_unidad_de_medida_compras","cat_compras_productos_unidad_de_medida_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_productos_unidad_de_medida_mu_id";

		$fdata["sourceSingle"] = "cat_compras_productos_unidad_de_medida_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_unidad_de_medida_mu_id";

	
	
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


	$tdatabox_unidad_de_medida_compras["cat_compras_productos_unidad_de_medida_mu_id"] = $fdata;
		$tdatabox_unidad_de_medida_compras[".searchableFields"][] = "cat_compras_productos_unidad_de_medida_mu_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_compras_productos_unidad_de_medida_mu";
	$fdata["Label"] = GetFieldLabel("box_unidad_de_medida_compras","time_stamp");
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


	$tdatabox_unidad_de_medida_compras["time_stamp"] = $fdata;
		$tdatabox_unidad_de_medida_compras[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_productos_unidad_de_medida_mu";
	$fdata["Label"] = GetFieldLabel("box_unidad_de_medida_compras","vigente");
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


	$tdatabox_unidad_de_medida_compras["vigente"] = $fdata;
		$tdatabox_unidad_de_medida_compras[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_productos_unidad_de_medida_mu";
	$fdata["Label"] = GetFieldLabel("box_unidad_de_medida_compras","capturista");
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


	$tdatabox_unidad_de_medida_compras["capturista"] = $fdata;
		$tdatabox_unidad_de_medida_compras[".searchableFields"][] = "capturista";
//	descripcion_cat_compras_productos_unidad_de_medida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_cat_compras_productos_unidad_de_medida";
	$fdata["GoodName"] = "descripcion_cat_compras_productos_unidad_de_medida";
	$fdata["ownerTable"] = "cat_compras_productos_unidad_de_medida_mu";
	$fdata["Label"] = GetFieldLabel("box_unidad_de_medida_compras","descripcion_cat_compras_productos_unidad_de_medida");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_cat_compras_productos_unidad_de_medida";

		$fdata["sourceSingle"] = "descripcion_cat_compras_productos_unidad_de_medida";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_cat_compras_productos_unidad_de_medida";

	
	
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


	$tdatabox_unidad_de_medida_compras["descripcion_cat_compras_productos_unidad_de_medida"] = $fdata;
		$tdatabox_unidad_de_medida_compras[".searchableFields"][] = "descripcion_cat_compras_productos_unidad_de_medida";
//	factor_de_conversion_costos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "factor_de_conversion_costos";
	$fdata["GoodName"] = "factor_de_conversion_costos";
	$fdata["ownerTable"] = "cat_compras_productos_unidad_de_medida_mu";
	$fdata["Label"] = GetFieldLabel("box_unidad_de_medida_compras","factor_de_conversion_costos");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "factor_de_conversion_costos";

		$fdata["sourceSingle"] = "factor_de_conversion_costos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "factor_de_conversion_costos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatabox_unidad_de_medida_compras["factor_de_conversion_costos"] = $fdata;
		$tdatabox_unidad_de_medida_compras[".searchableFields"][] = "factor_de_conversion_costos";
//	cat_compras_productos_unidad_de_costo_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_compras_productos_unidad_de_costo_mu_id";
	$fdata["GoodName"] = "cat_compras_productos_unidad_de_costo_mu_id";
	$fdata["ownerTable"] = "cat_compras_productos_unidad_de_medida_mu";
	$fdata["Label"] = GetFieldLabel("box_unidad_de_medida_compras","cat_compras_productos_unidad_de_costo_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_unidad_de_costo_mu_id";

		$fdata["sourceSingle"] = "cat_compras_productos_unidad_de_costo_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_unidad_de_costo_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_compras_productos_unidad_de_costo_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_productos_unidad_de_costo_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_unidad_de_costo";

	

	
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


	$tdatabox_unidad_de_medida_compras["cat_compras_productos_unidad_de_costo_mu_id"] = $fdata;
		$tdatabox_unidad_de_medida_compras[".searchableFields"][] = "cat_compras_productos_unidad_de_costo_mu_id";


$tables_data["box_unidad_de_medida_compras"]=&$tdatabox_unidad_de_medida_compras;
$field_labels["box_unidad_de_medida_compras"] = &$fieldLabelsbox_unidad_de_medida_compras;
$fieldToolTips["box_unidad_de_medida_compras"] = &$fieldToolTipsbox_unidad_de_medida_compras;
$placeHolders["box_unidad_de_medida_compras"] = &$placeHoldersbox_unidad_de_medida_compras;
$page_titles["box_unidad_de_medida_compras"] = &$pageTitlesbox_unidad_de_medida_compras;


changeTextControlsToDate( "box_unidad_de_medida_compras" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_unidad_de_medida_compras"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_unidad_de_medida_compras"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_unidad_de_medida_compras()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_productos_unidad_de_medida_mu_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_cat_compras_productos_unidad_de_medida,  	factor_de_conversion_costos,  	cat_compras_productos_unidad_de_costo_mu_id";
$proto0["m_strFrom"] = "FROM cat_compras_productos_unidad_de_medida_mu";
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
	"m_strName" => "cat_compras_productos_unidad_de_medida_mu_id",
	"m_strTable" => "cat_compras_productos_unidad_de_medida_mu",
	"m_srcTableName" => "box_unidad_de_medida_compras"
));

$proto6["m_sql"] = "cat_compras_productos_unidad_de_medida_mu_id";
$proto6["m_srcTableName"] = "box_unidad_de_medida_compras";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_compras_productos_unidad_de_medida_mu",
	"m_srcTableName" => "box_unidad_de_medida_compras"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "box_unidad_de_medida_compras";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_productos_unidad_de_medida_mu",
	"m_srcTableName" => "box_unidad_de_medida_compras"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "box_unidad_de_medida_compras";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_productos_unidad_de_medida_mu",
	"m_srcTableName" => "box_unidad_de_medida_compras"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "box_unidad_de_medida_compras";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_cat_compras_productos_unidad_de_medida",
	"m_strTable" => "cat_compras_productos_unidad_de_medida_mu",
	"m_srcTableName" => "box_unidad_de_medida_compras"
));

$proto14["m_sql"] = "descripcion_cat_compras_productos_unidad_de_medida";
$proto14["m_srcTableName"] = "box_unidad_de_medida_compras";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "factor_de_conversion_costos",
	"m_strTable" => "cat_compras_productos_unidad_de_medida_mu",
	"m_srcTableName" => "box_unidad_de_medida_compras"
));

$proto16["m_sql"] = "factor_de_conversion_costos";
$proto16["m_srcTableName"] = "box_unidad_de_medida_compras";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_unidad_de_costo_mu_id",
	"m_strTable" => "cat_compras_productos_unidad_de_medida_mu",
	"m_srcTableName" => "box_unidad_de_medida_compras"
));

$proto18["m_sql"] = "cat_compras_productos_unidad_de_costo_mu_id";
$proto18["m_srcTableName"] = "box_unidad_de_medida_compras";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "cat_compras_productos_unidad_de_medida_mu";
$proto21["m_srcTableName"] = "box_unidad_de_medida_compras";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$proto21["m_columns"][] = "time_stamp";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "descripcion_cat_compras_productos_unidad_de_medida";
$proto21["m_columns"][] = "factor_de_conversion_costos";
$proto21["m_columns"][] = "cat_compras_productos_unidad_de_costo_mu_id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "cat_compras_productos_unidad_de_medida_mu";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "box_unidad_de_medida_compras";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_unidad_de_medida_compras";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_unidad_de_medida_compras = createSqlQuery_box_unidad_de_medida_compras();


	
		;

							

$tdatabox_unidad_de_medida_compras[".sqlquery"] = $queryData_box_unidad_de_medida_compras;



$tdatabox_unidad_de_medida_compras[".hasEvents"] = false;

?>