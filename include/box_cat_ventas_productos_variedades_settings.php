<?php
$tdatabox_cat_ventas_productos_variedades = array();
$tdatabox_cat_ventas_productos_variedades[".searchableFields"] = array();
$tdatabox_cat_ventas_productos_variedades[".ShortName"] = "box_cat_ventas_productos_variedades";
$tdatabox_cat_ventas_productos_variedades[".OwnerID"] = "";
$tdatabox_cat_ventas_productos_variedades[".OriginalTable"] = "cat_ventas_productos_variedades";


$tdatabox_cat_ventas_productos_variedades[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"]}" );
$tdatabox_cat_ventas_productos_variedades[".originalPagesByType"] = $tdatabox_cat_ventas_productos_variedades[".pagesByType"];
$tdatabox_cat_ventas_productos_variedades[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"]}" ) );
$tdatabox_cat_ventas_productos_variedades[".originalPages"] = $tdatabox_cat_ventas_productos_variedades[".pages"];
$tdatabox_cat_ventas_productos_variedades[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\"}" );
$tdatabox_cat_ventas_productos_variedades[".originalDefaultPages"] = $tdatabox_cat_ventas_productos_variedades[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_ventas_productos_variedades = array();
$fieldToolTipsbox_cat_ventas_productos_variedades = array();
$pageTitlesbox_cat_ventas_productos_variedades = array();
$placeHoldersbox_cat_ventas_productos_variedades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_ventas_productos_variedades["Spanish"] = array();
	$fieldToolTipsbox_cat_ventas_productos_variedades["Spanish"] = array();
	$placeHoldersbox_cat_ventas_productos_variedades["Spanish"] = array();
	$pageTitlesbox_cat_ventas_productos_variedades["Spanish"] = array();
	$fieldLabelsbox_cat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_variedades_id"] = "Id";
	$fieldToolTipsbox_cat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_variedades_id"] = "";
	$placeHoldersbox_cat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_variedades_id"] = "";
	$fieldLabelsbox_cat_ventas_productos_variedades["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbox_cat_ventas_productos_variedades["Spanish"]["time_stamp"] = "";
	$placeHoldersbox_cat_ventas_productos_variedades["Spanish"]["time_stamp"] = "";
	$fieldLabelsbox_cat_ventas_productos_variedades["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_ventas_productos_variedades["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_ventas_productos_variedades["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_ventas_productos_variedades["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_ventas_productos_variedades["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_ventas_productos_variedades["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_ventas_productos_variedades["Spanish"]["descripcion_ventas_productos_variedad"] = "Variedad";
	$fieldToolTipsbox_cat_ventas_productos_variedades["Spanish"]["descripcion_ventas_productos_variedad"] = "";
	$placeHoldersbox_cat_ventas_productos_variedades["Spanish"]["descripcion_ventas_productos_variedad"] = "";
	$fieldLabelsbox_cat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_id"] = "Producto";
	$fieldToolTipsbox_cat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_id"] = "";
	$placeHoldersbox_cat_ventas_productos_variedades["Spanish"]["cat_ventas_productos_id"] = "";
	if (count($fieldToolTipsbox_cat_ventas_productos_variedades["Spanish"]))
		$tdatabox_cat_ventas_productos_variedades[".isUseToolTips"] = true;
}


	$tdatabox_cat_ventas_productos_variedades[".NCSearch"] = true;



$tdatabox_cat_ventas_productos_variedades[".shortTableName"] = "box_cat_ventas_productos_variedades";
$tdatabox_cat_ventas_productos_variedades[".nSecOptions"] = 0;

$tdatabox_cat_ventas_productos_variedades[".mainTableOwnerID"] = "";
$tdatabox_cat_ventas_productos_variedades[".entityType"] = 1;
$tdatabox_cat_ventas_productos_variedades[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_ventas_productos_variedades[".strOriginalTableName"] = "cat_ventas_productos_variedades";

	



$tdatabox_cat_ventas_productos_variedades[".showAddInPopup"] = false;

$tdatabox_cat_ventas_productos_variedades[".showEditInPopup"] = false;

$tdatabox_cat_ventas_productos_variedades[".showViewInPopup"] = false;

$tdatabox_cat_ventas_productos_variedades[".listAjax"] = false;
//	temporary
//$tdatabox_cat_ventas_productos_variedades[".listAjax"] = false;

	$tdatabox_cat_ventas_productos_variedades[".audit"] = false;

	$tdatabox_cat_ventas_productos_variedades[".locking"] = false;


$pages = $tdatabox_cat_ventas_productos_variedades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_ventas_productos_variedades[".edit"] = true;
	$tdatabox_cat_ventas_productos_variedades[".afterEditAction"] = 1;
	$tdatabox_cat_ventas_productos_variedades[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_ventas_productos_variedades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_ventas_productos_variedades[".add"] = true;
$tdatabox_cat_ventas_productos_variedades[".afterAddAction"] = 1;
$tdatabox_cat_ventas_productos_variedades[".closePopupAfterAdd"] = 1;
$tdatabox_cat_ventas_productos_variedades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_ventas_productos_variedades[".list"] = true;
}



$tdatabox_cat_ventas_productos_variedades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_ventas_productos_variedades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_ventas_productos_variedades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_ventas_productos_variedades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_ventas_productos_variedades[".printFriendly"] = true;
}



$tdatabox_cat_ventas_productos_variedades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_ventas_productos_variedades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_ventas_productos_variedades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_ventas_productos_variedades[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_ventas_productos_variedades[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_ventas_productos_variedades[".buttonsAdded"] = false;

$tdatabox_cat_ventas_productos_variedades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_ventas_productos_variedades[".isUseTimeForSearch"] = false;


$tdatabox_cat_ventas_productos_variedades[".badgeColor"] = "CD5C5C";


$tdatabox_cat_ventas_productos_variedades[".allSearchFields"] = array();
$tdatabox_cat_ventas_productos_variedades[".filterFields"] = array();
$tdatabox_cat_ventas_productos_variedades[".requiredSearchFields"] = array();

$tdatabox_cat_ventas_productos_variedades[".googleLikeFields"] = array();
$tdatabox_cat_ventas_productos_variedades[".googleLikeFields"][] = "cat_ventas_productos_variedades_id";
$tdatabox_cat_ventas_productos_variedades[".googleLikeFields"][] = "time_stamp";
$tdatabox_cat_ventas_productos_variedades[".googleLikeFields"][] = "vigente";
$tdatabox_cat_ventas_productos_variedades[".googleLikeFields"][] = "capturista";
$tdatabox_cat_ventas_productos_variedades[".googleLikeFields"][] = "descripcion_ventas_productos_variedad";
$tdatabox_cat_ventas_productos_variedades[".googleLikeFields"][] = "cat_ventas_productos_id";



$tdatabox_cat_ventas_productos_variedades[".tableType"] = "list";

$tdatabox_cat_ventas_productos_variedades[".printerPageOrientation"] = 0;
$tdatabox_cat_ventas_productos_variedades[".nPrinterPageScale"] = 100;

$tdatabox_cat_ventas_productos_variedades[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_ventas_productos_variedades[".geocodingEnabled"] = false;










$tdatabox_cat_ventas_productos_variedades[".pageSize"] = 20;

$tdatabox_cat_ventas_productos_variedades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_ventas_productos_variedades[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_ventas_productos_variedades[".orderindexes"] = array();


$tdatabox_cat_ventas_productos_variedades[".sqlHead"] = "SELECT cat_ventas_productos_variedades_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_ventas_productos_variedad,  	cat_ventas_productos_id";
$tdatabox_cat_ventas_productos_variedades[".sqlFrom"] = "FROM cat_ventas_productos_variedades";
$tdatabox_cat_ventas_productos_variedades[".sqlWhereExpr"] = "";
$tdatabox_cat_ventas_productos_variedades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_ventas_productos_variedades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_ventas_productos_variedades[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_ventas_productos_variedades[".highlightSearchResults"] = true;

$tableKeysbox_cat_ventas_productos_variedades = array();
$tableKeysbox_cat_ventas_productos_variedades[] = "cat_ventas_productos_variedades_id";
$tdatabox_cat_ventas_productos_variedades[".Keys"] = $tableKeysbox_cat_ventas_productos_variedades;


$tdatabox_cat_ventas_productos_variedades[".hideMobileList"] = array();




//	cat_ventas_productos_variedades_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_variedades_id";
	$fdata["GoodName"] = "cat_ventas_productos_variedades_id";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_variedades","cat_ventas_productos_variedades_id");
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


	$tdatabox_cat_ventas_productos_variedades["cat_ventas_productos_variedades_id"] = $fdata;
		$tdatabox_cat_ventas_productos_variedades[".searchableFields"][] = "cat_ventas_productos_variedades_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_variedades","time_stamp");
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


	$tdatabox_cat_ventas_productos_variedades["time_stamp"] = $fdata;
		$tdatabox_cat_ventas_productos_variedades[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_variedades","vigente");
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


	$tdatabox_cat_ventas_productos_variedades["vigente"] = $fdata;
		$tdatabox_cat_ventas_productos_variedades[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_variedades","capturista");
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


	$tdatabox_cat_ventas_productos_variedades["capturista"] = $fdata;
		$tdatabox_cat_ventas_productos_variedades[".searchableFields"][] = "capturista";
//	descripcion_ventas_productos_variedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_ventas_productos_variedad";
	$fdata["GoodName"] = "descripcion_ventas_productos_variedad";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_variedades","descripcion_ventas_productos_variedad");
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


	$tdatabox_cat_ventas_productos_variedades["descripcion_ventas_productos_variedad"] = $fdata;
		$tdatabox_cat_ventas_productos_variedades[".searchableFields"][] = "descripcion_ventas_productos_variedad";
//	cat_ventas_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_ventas_productos_id";
	$fdata["GoodName"] = "cat_ventas_productos_id";
	$fdata["ownerTable"] = "cat_ventas_productos_variedades";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_variedades","cat_ventas_productos_id");
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


	$tdatabox_cat_ventas_productos_variedades["cat_ventas_productos_id"] = $fdata;
		$tdatabox_cat_ventas_productos_variedades[".searchableFields"][] = "cat_ventas_productos_id";


$tables_data["box_cat_ventas_productos_variedades"]=&$tdatabox_cat_ventas_productos_variedades;
$field_labels["box_cat_ventas_productos_variedades"] = &$fieldLabelsbox_cat_ventas_productos_variedades;
$fieldToolTips["box_cat_ventas_productos_variedades"] = &$fieldToolTipsbox_cat_ventas_productos_variedades;
$placeHolders["box_cat_ventas_productos_variedades"] = &$placeHoldersbox_cat_ventas_productos_variedades;
$page_titles["box_cat_ventas_productos_variedades"] = &$pageTitlesbox_cat_ventas_productos_variedades;


changeTextControlsToDate( "box_cat_ventas_productos_variedades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_ventas_productos_variedades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_ventas_productos_variedades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_ventas_productos_variedades()
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
	"m_srcTableName" => "box_cat_ventas_productos_variedades"
));

$proto6["m_sql"] = "cat_ventas_productos_variedades_id";
$proto6["m_srcTableName"] = "box_cat_ventas_productos_variedades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "box_cat_ventas_productos_variedades"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "box_cat_ventas_productos_variedades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "box_cat_ventas_productos_variedades"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "box_cat_ventas_productos_variedades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "box_cat_ventas_productos_variedades"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "box_cat_ventas_productos_variedades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_variedad",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "box_cat_ventas_productos_variedades"
));

$proto14["m_sql"] = "descripcion_ventas_productos_variedad";
$proto14["m_srcTableName"] = "box_cat_ventas_productos_variedades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_id",
	"m_strTable" => "cat_ventas_productos_variedades",
	"m_srcTableName" => "box_cat_ventas_productos_variedades"
));

$proto16["m_sql"] = "cat_ventas_productos_id";
$proto16["m_srcTableName"] = "box_cat_ventas_productos_variedades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_ventas_productos_variedades";
$proto19["m_srcTableName"] = "box_cat_ventas_productos_variedades";
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
$proto18["m_srcTableName"] = "box_cat_ventas_productos_variedades";
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
$proto0["m_srcTableName"]="box_cat_ventas_productos_variedades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_ventas_productos_variedades = createSqlQuery_box_cat_ventas_productos_variedades();


	
		;

						

$tdatabox_cat_ventas_productos_variedades[".sqlquery"] = $queryData_box_cat_ventas_productos_variedades;



$tdatabox_cat_ventas_productos_variedades[".hasEvents"] = false;

?>