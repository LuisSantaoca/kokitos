<?php
$tdatacat_ventas_productos_status_recibo = array();
$tdatacat_ventas_productos_status_recibo[".searchableFields"] = array();
$tdatacat_ventas_productos_status_recibo[".ShortName"] = "cat_ventas_productos_status_recibo";
$tdatacat_ventas_productos_status_recibo[".OwnerID"] = "";
$tdatacat_ventas_productos_status_recibo[".OriginalTable"] = "cat_ventas_productos_status_recibo";


$tdatacat_ventas_productos_status_recibo[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatacat_ventas_productos_status_recibo[".originalPagesByType"] = $tdatacat_ventas_productos_status_recibo[".pagesByType"];
$tdatacat_ventas_productos_status_recibo[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatacat_ventas_productos_status_recibo[".originalPages"] = $tdatacat_ventas_productos_status_recibo[".pages"];
$tdatacat_ventas_productos_status_recibo[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatacat_ventas_productos_status_recibo[".originalDefaultPages"] = $tdatacat_ventas_productos_status_recibo[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_status_recibo = array();
$fieldToolTipscat_ventas_productos_status_recibo = array();
$pageTitlescat_ventas_productos_status_recibo = array();
$placeHolderscat_ventas_productos_status_recibo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_status_recibo["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_status_recibo["Spanish"] = array();
	$placeHolderscat_ventas_productos_status_recibo["Spanish"] = array();
	$pageTitlescat_ventas_productos_status_recibo["Spanish"] = array();
	$fieldLabelscat_ventas_productos_status_recibo["Spanish"]["cat_ventas_productos_status_recibo_id"] = "Cat Ventas Productos Status Recibo Id";
	$fieldToolTipscat_ventas_productos_status_recibo["Spanish"]["cat_ventas_productos_status_recibo_id"] = "";
	$placeHolderscat_ventas_productos_status_recibo["Spanish"]["cat_ventas_productos_status_recibo_id"] = "";
	$fieldLabelscat_ventas_productos_status_recibo["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_status_recibo["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_status_recibo["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_productos_status_recibo["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_status_recibo["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_status_recibo["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_productos_status_recibo["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_status_recibo["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_status_recibo["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_status_recibo["Spanish"]["descripcion_ventas_status_recibo"] = "Descripcion Ventas Status Recibo";
	$fieldToolTipscat_ventas_productos_status_recibo["Spanish"]["descripcion_ventas_status_recibo"] = "";
	$placeHolderscat_ventas_productos_status_recibo["Spanish"]["descripcion_ventas_status_recibo"] = "";
	if (count($fieldToolTipscat_ventas_productos_status_recibo["Spanish"]))
		$tdatacat_ventas_productos_status_recibo[".isUseToolTips"] = true;
}


	$tdatacat_ventas_productos_status_recibo[".NCSearch"] = true;



$tdatacat_ventas_productos_status_recibo[".shortTableName"] = "cat_ventas_productos_status_recibo";
$tdatacat_ventas_productos_status_recibo[".nSecOptions"] = 0;

$tdatacat_ventas_productos_status_recibo[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_status_recibo[".entityType"] = 0;
$tdatacat_ventas_productos_status_recibo[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_status_recibo[".strOriginalTableName"] = "cat_ventas_productos_status_recibo";

	



$tdatacat_ventas_productos_status_recibo[".showAddInPopup"] = false;

$tdatacat_ventas_productos_status_recibo[".showEditInPopup"] = false;

$tdatacat_ventas_productos_status_recibo[".showViewInPopup"] = false;

$tdatacat_ventas_productos_status_recibo[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_status_recibo[".listAjax"] = false;

	$tdatacat_ventas_productos_status_recibo[".audit"] = false;

	$tdatacat_ventas_productos_status_recibo[".locking"] = false;


$pages = $tdatacat_ventas_productos_status_recibo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_status_recibo[".edit"] = true;
	$tdatacat_ventas_productos_status_recibo[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_status_recibo[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_status_recibo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_status_recibo[".add"] = true;
$tdatacat_ventas_productos_status_recibo[".afterAddAction"] = 1;
$tdatacat_ventas_productos_status_recibo[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_status_recibo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_status_recibo[".list"] = true;
}



$tdatacat_ventas_productos_status_recibo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_status_recibo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_status_recibo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_status_recibo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_status_recibo[".printFriendly"] = true;
}



$tdatacat_ventas_productos_status_recibo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_status_recibo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_status_recibo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_status_recibo[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_status_recibo[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_status_recibo[".buttonsAdded"] = false;

$tdatacat_ventas_productos_status_recibo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_status_recibo[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_status_recibo[".badgeColor"] = "3CB371";


$tdatacat_ventas_productos_status_recibo[".allSearchFields"] = array();
$tdatacat_ventas_productos_status_recibo[".filterFields"] = array();
$tdatacat_ventas_productos_status_recibo[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_status_recibo[".googleLikeFields"] = array();
$tdatacat_ventas_productos_status_recibo[".googleLikeFields"][] = "cat_ventas_productos_status_recibo_id";
$tdatacat_ventas_productos_status_recibo[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_productos_status_recibo[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_status_recibo[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_status_recibo[".googleLikeFields"][] = "descripcion_ventas_status_recibo";



$tdatacat_ventas_productos_status_recibo[".tableType"] = "list";

$tdatacat_ventas_productos_status_recibo[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_status_recibo[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_status_recibo[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_status_recibo[".geocodingEnabled"] = false;










$tdatacat_ventas_productos_status_recibo[".pageSize"] = 20;

$tdatacat_ventas_productos_status_recibo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_status_recibo[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_status_recibo[".orderindexes"] = array();


$tdatacat_ventas_productos_status_recibo[".sqlHead"] = "SELECT cat_ventas_productos_status_recibo_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_ventas_status_recibo";
$tdatacat_ventas_productos_status_recibo[".sqlFrom"] = "FROM cat_ventas_productos_status_recibo";
$tdatacat_ventas_productos_status_recibo[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_status_recibo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_status_recibo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_status_recibo[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_status_recibo[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_status_recibo = array();
$tableKeyscat_ventas_productos_status_recibo[] = "cat_ventas_productos_status_recibo_id";
$tdatacat_ventas_productos_status_recibo[".Keys"] = $tableKeyscat_ventas_productos_status_recibo;


$tdatacat_ventas_productos_status_recibo[".hideMobileList"] = array();




//	cat_ventas_productos_status_recibo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_status_recibo_id";
	$fdata["GoodName"] = "cat_ventas_productos_status_recibo_id";
	$fdata["ownerTable"] = "cat_ventas_productos_status_recibo";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_status_recibo","cat_ventas_productos_status_recibo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_status_recibo_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_status_recibo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_status_recibo_id";

	
	
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


	$tdatacat_ventas_productos_status_recibo["cat_ventas_productos_status_recibo_id"] = $fdata;
		$tdatacat_ventas_productos_status_recibo[".searchableFields"][] = "cat_ventas_productos_status_recibo_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_status_recibo";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_status_recibo","time_stamp");
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


	$tdatacat_ventas_productos_status_recibo["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_status_recibo[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_status_recibo";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_status_recibo","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigente";

	
	
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


	$tdatacat_ventas_productos_status_recibo["vigente"] = $fdata;
		$tdatacat_ventas_productos_status_recibo[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_status_recibo";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_status_recibo","capturista");
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


	$tdatacat_ventas_productos_status_recibo["capturista"] = $fdata;
		$tdatacat_ventas_productos_status_recibo[".searchableFields"][] = "capturista";
//	descripcion_ventas_status_recibo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_ventas_status_recibo";
	$fdata["GoodName"] = "descripcion_ventas_status_recibo";
	$fdata["ownerTable"] = "cat_ventas_productos_status_recibo";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_status_recibo","descripcion_ventas_status_recibo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_status_recibo";

		$fdata["sourceSingle"] = "descripcion_ventas_status_recibo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_ventas_status_recibo";

	
	
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


	$tdatacat_ventas_productos_status_recibo["descripcion_ventas_status_recibo"] = $fdata;
		$tdatacat_ventas_productos_status_recibo[".searchableFields"][] = "descripcion_ventas_status_recibo";


$tables_data["cat_ventas_productos_status_recibo"]=&$tdatacat_ventas_productos_status_recibo;
$field_labels["cat_ventas_productos_status_recibo"] = &$fieldLabelscat_ventas_productos_status_recibo;
$fieldToolTips["cat_ventas_productos_status_recibo"] = &$fieldToolTipscat_ventas_productos_status_recibo;
$placeHolders["cat_ventas_productos_status_recibo"] = &$placeHolderscat_ventas_productos_status_recibo;
$page_titles["cat_ventas_productos_status_recibo"] = &$pageTitlescat_ventas_productos_status_recibo;


changeTextControlsToDate( "cat_ventas_productos_status_recibo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_status_recibo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_status_recibo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_status_recibo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_status_recibo_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_ventas_status_recibo";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_status_recibo";
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
	"m_strName" => "cat_ventas_productos_status_recibo_id",
	"m_strTable" => "cat_ventas_productos_status_recibo",
	"m_srcTableName" => "cat_ventas_productos_status_recibo"
));

$proto6["m_sql"] = "cat_ventas_productos_status_recibo_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_status_recibo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_status_recibo",
	"m_srcTableName" => "cat_ventas_productos_status_recibo"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_ventas_productos_status_recibo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_status_recibo",
	"m_srcTableName" => "cat_ventas_productos_status_recibo"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_ventas_productos_status_recibo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_status_recibo",
	"m_srcTableName" => "cat_ventas_productos_status_recibo"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_ventas_productos_status_recibo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_status_recibo",
	"m_strTable" => "cat_ventas_productos_status_recibo",
	"m_srcTableName" => "cat_ventas_productos_status_recibo"
));

$proto14["m_sql"] = "descripcion_ventas_status_recibo";
$proto14["m_srcTableName"] = "cat_ventas_productos_status_recibo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_ventas_productos_status_recibo";
$proto17["m_srcTableName"] = "cat_ventas_productos_status_recibo";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_ventas_productos_status_recibo_id";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "descripcion_ventas_status_recibo";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_ventas_productos_status_recibo";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_ventas_productos_status_recibo";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_status_recibo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_status_recibo = createSqlQuery_cat_ventas_productos_status_recibo();


	
		;

					

$tdatacat_ventas_productos_status_recibo[".sqlquery"] = $queryData_cat_ventas_productos_status_recibo;



$tdatacat_ventas_productos_status_recibo[".hasEvents"] = false;

?>