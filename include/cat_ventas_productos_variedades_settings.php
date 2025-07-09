<?php
$tdatacat_ventas_productos_variedades = array();
$tdatacat_ventas_productos_variedades[".searchableFields"] = array();
$tdatacat_ventas_productos_variedades[".ShortName"] = "cat_ventas_productos_variedades";
$tdatacat_ventas_productos_variedades[".OwnerID"] = "";
$tdatacat_ventas_productos_variedades[".OriginalTable"] = "cat_ventas_productos_variedades";


$tdatacat_ventas_productos_variedades[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_productos_variedades[".originalPagesByType"] = $tdatacat_ventas_productos_variedades[".pagesByType"];
$tdatacat_ventas_productos_variedades[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_productos_variedades[".originalPages"] = $tdatacat_ventas_productos_variedades[".pages"];
$tdatacat_ventas_productos_variedades[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_ventas_productos_variedades[".originalDefaultPages"] = $tdatacat_ventas_productos_variedades[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_variedades = array();
$fieldToolTipscat_ventas_productos_variedades = array();
$pageTitlescat_ventas_productos_variedades = array();
$placeHolderscat_ventas_productos_variedades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_variedades["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_variedades["Spanish"] = array();
	$placeHolderscat_ventas_productos_variedades["Spanish"] = array();
	$pageTitlescat_ventas_productos_variedades["Spanish"] = array();
	$fieldLabelscat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_variedades_id"] = "Id";
	$fieldToolTipscat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_variedades_id"] = "";
	$placeHolderscat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_variedades_id"] = "";
	$fieldLabelscat_ventas_productos_variedades["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_variedades["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_variedades["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_productos_variedades["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_variedades["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_variedades["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_variedades["Spanish"]["descripcion_ventas_productos_variedad"] = "Variedad";
	$fieldToolTipscat_ventas_productos_variedades["Spanish"]["descripcion_ventas_productos_variedad"] = "";
	$placeHolderscat_ventas_productos_variedades["Spanish"]["descripcion_ventas_productos_variedad"] = "";
	$fieldLabelscat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_id"] = "Producto";
	$fieldToolTipscat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_id"] = "";
	$placeHolderscat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_id"] = "";
	$fieldLabelscat_ventas_productos_variedades["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_variedades["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_variedades["Spanish"]["time_stamp"] = "";
	if (count($fieldToolTipscat_ventas_productos_variedades["Spanish"]))
		$tdatacat_ventas_productos_variedades[".isUseToolTips"] = true;
}


	$tdatacat_ventas_productos_variedades[".NCSearch"] = true;



$tdatacat_ventas_productos_variedades[".shortTableName"] = "cat_ventas_productos_variedades";
$tdatacat_ventas_productos_variedades[".nSecOptions"] = 0;

$tdatacat_ventas_productos_variedades[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_variedades[".entityType"] = 0;
$tdatacat_ventas_productos_variedades[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_variedades[".strOriginalTableName"] = "cat_ventas_productos_variedades";

	



$tdatacat_ventas_productos_variedades[".showAddInPopup"] = false;

$tdatacat_ventas_productos_variedades[".showEditInPopup"] = false;

$tdatacat_ventas_productos_variedades[".showViewInPopup"] = false;

$tdatacat_ventas_productos_variedades[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_variedades[".listAjax"] = false;

	$tdatacat_ventas_productos_variedades[".audit"] = false;

	$tdatacat_ventas_productos_variedades[".locking"] = false;


$pages = $tdatacat_ventas_productos_variedades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_variedades[".edit"] = true;
	$tdatacat_ventas_productos_variedades[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_variedades[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_variedades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_variedades[".add"] = true;
$tdatacat_ventas_productos_variedades[".afterAddAction"] = 1;
$tdatacat_ventas_productos_variedades[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_variedades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_variedades[".list"] = true;
}



$tdatacat_ventas_productos_variedades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_variedades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_variedades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_variedades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_variedades[".printFriendly"] = true;
}



$tdatacat_ventas_productos_variedades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_variedades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_variedades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_variedades[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_variedades[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_variedades[".buttonsAdded"] = false;

$tdatacat_ventas_productos_variedades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_variedades[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_variedades[".badgeColor"] = "DB7093";


$tdatacat_ventas_productos_variedades[".allSearchFields"] = array();
$tdatacat_ventas_productos_variedades[".filterFields"] = array();
$tdatacat_ventas_productos_variedades[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_variedades[".googleLikeFields"] = array();
$tdatacat_ventas_productos_variedades[".googleLikeFields"][] = "cat_ventas_productos_variedades_id";
$tdatacat_ventas_productos_variedades[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_productos_variedades[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_variedades[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_variedades[".googleLikeFields"][] = "descripcion_ventas_productos_variedad";
$tdatacat_ventas_productos_variedades[".googleLikeFields"][] = "cat_ventas_productos_id";



$tdatacat_ventas_productos_variedades[".tableType"] = "list";

$tdatacat_ventas_productos_variedades[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_variedades[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_variedades[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_variedades[".geocodingEnabled"] = false;










$tdatacat_ventas_productos_variedades[".pageSize"] = 20;

$tdatacat_ventas_productos_variedades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_variedades[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_variedades[".orderindexes"] = array();


$tdatacat_ventas_productos_variedades[".sqlHead"] = "SELECT cat_ventas_productos_variedades_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_ventas_productos_variedad,  	cat_ventas_productos_id";
$tdatacat_ventas_productos_variedades[".sqlFrom"] = "FROM cat_ventas_productos_variedades";
$tdatacat_ventas_productos_variedades[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_variedades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_variedades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_variedades[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_variedades[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_variedades = array();
$tableKeyscat_ventas_productos_variedades[] = "cat_ventas_productos_variedades_id";
$tdatacat_ventas_productos_variedades[".Keys"] = $tableKeyscat_ventas_productos_variedades;


$tdatacat_ventas_productos_variedades[".hideMobileList"] = array();




//	cat_ventas_productos_variedades_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_variedades_id";
	$fdata["GoodName"] = "cat_ventas_productos_variedades_id";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_variedades","cat_ventas_productos_variedades_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatacat_ventas_productos_variedades["cat_ventas_productos_variedades_id"] = $fdata;
		$tdatacat_ventas_productos_variedades[".searchableFields"][] = "cat_ventas_productos_variedades_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_variedades","time_stamp");
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


	$tdatacat_ventas_productos_variedades["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_variedades[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_variedades","vigente");
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


	$tdatacat_ventas_productos_variedades["vigente"] = $fdata;
		$tdatacat_ventas_productos_variedades[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_variedades","capturista");
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


	$tdatacat_ventas_productos_variedades["capturista"] = $fdata;
		$tdatacat_ventas_productos_variedades[".searchableFields"][] = "capturista";
//	descripcion_ventas_productos_variedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_ventas_productos_variedad";
	$fdata["GoodName"] = "descripcion_ventas_productos_variedad";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_variedades","descripcion_ventas_productos_variedad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_productos_variedad";

		$fdata["sourceSingle"] = "descripcion_ventas_productos_variedad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_ventas_productos_variedad";

	
	
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


	$tdatacat_ventas_productos_variedades["descripcion_ventas_productos_variedad"] = $fdata;
		$tdatacat_ventas_productos_variedades[".searchableFields"][] = "descripcion_ventas_productos_variedad";
//	cat_ventas_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_ventas_productos_id";
	$fdata["GoodName"] = "cat_ventas_productos_id";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_variedades","cat_ventas_productos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_productos_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_id";

	
	
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
	$edata["LookupTable"] = "cat_ventas_productos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cat_ventas_productos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_ventas_producto";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatacat_ventas_productos_variedades["cat_ventas_productos_id"] = $fdata;
		$tdatacat_ventas_productos_variedades[".searchableFields"][] = "cat_ventas_productos_id";


$tables_data["cat_ventas_productos_variedades"]=&$tdatacat_ventas_productos_variedades;
$field_labels["cat_ventas_productos_variedades"] = &$fieldLabelscat_ventas_productos_variedades;
$fieldToolTips["cat_ventas_productos_variedades"] = &$fieldToolTipscat_ventas_productos_variedades;
$placeHolders["cat_ventas_productos_variedades"] = &$placeHolderscat_ventas_productos_variedades;
$page_titles["cat_ventas_productos_variedades"] = &$pageTitlescat_ventas_productos_variedades;


changeTextControlsToDate( "cat_ventas_productos_variedades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_variedades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_variedades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_variedades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_variedades_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_ventas_productos_variedad,  	cat_ventas_productos_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_variedades";
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
	"m_strName" => "cat_ventas_productos_variedades_id",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "cat_ventas_productos_variedades"
));

$proto6["m_sql"] = "cat_ventas_productos_variedades_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_variedades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "cat_ventas_productos_variedades"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_ventas_productos_variedades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "cat_ventas_productos_variedades"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_ventas_productos_variedades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "cat_ventas_productos_variedades"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_ventas_productos_variedades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_variedad",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "cat_ventas_productos_variedades"
));

$proto14["m_sql"] = "descripcion_ventas_productos_variedad";
$proto14["m_srcTableName"] = "cat_ventas_productos_variedades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_id",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "cat_ventas_productos_variedades"
));

$proto16["m_sql"] = "cat_ventas_productos_id";
$proto16["m_srcTableName"] = "cat_ventas_productos_variedades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_ventas_productos_variedades";
$proto19["m_srcTableName"] = "cat_ventas_productos_variedades";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_ventas_productos_variedades_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_ventas_productos_variedad";
$proto19["m_columns"][] = "cat_ventas_productos_id";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_ventas_productos_variedades";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_ventas_productos_variedades";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_variedades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_variedades = createSqlQuery_cat_ventas_productos_variedades();


	
		;

						

$tdatacat_ventas_productos_variedades[".sqlquery"] = $queryData_cat_ventas_productos_variedades;



$tdatacat_ventas_productos_variedades[".hasEvents"] = false;

?>