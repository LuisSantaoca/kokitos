<?php
$tdatacat_trabajadores_tipo_de_pago = array();
$tdatacat_trabajadores_tipo_de_pago[".searchableFields"] = array();
$tdatacat_trabajadores_tipo_de_pago[".ShortName"] = "cat_trabajadores_tipo_de_pago";
$tdatacat_trabajadores_tipo_de_pago[".OwnerID"] = "";
$tdatacat_trabajadores_tipo_de_pago[".OriginalTable"] = "cat_trabajadores_tipo_de_pago";


$tdatacat_trabajadores_tipo_de_pago[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_tipo_de_pago[".originalPagesByType"] = $tdatacat_trabajadores_tipo_de_pago[".pagesByType"];
$tdatacat_trabajadores_tipo_de_pago[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_tipo_de_pago[".originalPages"] = $tdatacat_trabajadores_tipo_de_pago[".pages"];
$tdatacat_trabajadores_tipo_de_pago[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_trabajadores_tipo_de_pago[".originalDefaultPages"] = $tdatacat_trabajadores_tipo_de_pago[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_tipo_de_pago = array();
$fieldToolTipscat_trabajadores_tipo_de_pago = array();
$pageTitlescat_trabajadores_tipo_de_pago = array();
$placeHolderscat_trabajadores_tipo_de_pago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_tipo_de_pago["Spanish"] = array();
	$fieldToolTipscat_trabajadores_tipo_de_pago["Spanish"] = array();
	$placeHolderscat_trabajadores_tipo_de_pago["Spanish"] = array();
	$pageTitlescat_trabajadores_tipo_de_pago["Spanish"] = array();
	$fieldLabelscat_trabajadores_tipo_de_pago["Spanish"]["cat_trabajadores_tipo_de_pago_id"] = "Id";
	$fieldToolTipscat_trabajadores_tipo_de_pago["Spanish"]["cat_trabajadores_tipo_de_pago_id"] = "";
	$placeHolderscat_trabajadores_tipo_de_pago["Spanish"]["cat_trabajadores_tipo_de_pago_id"] = "";
	$fieldLabelscat_trabajadores_tipo_de_pago["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_trabajadores_tipo_de_pago["Spanish"]["time_stamp"] = "";
	$placeHolderscat_trabajadores_tipo_de_pago["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_trabajadores_tipo_de_pago["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_trabajadores_tipo_de_pago["Spanish"]["capturista"] = "";
	$placeHolderscat_trabajadores_tipo_de_pago["Spanish"]["capturista"] = "";
	$fieldLabelscat_trabajadores_tipo_de_pago["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_tipo_de_pago["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_tipo_de_pago["Spanish"]["vigente"] = "";
	$fieldLabelscat_trabajadores_tipo_de_pago["Spanish"]["descripcion_tipo_de_pago"] = "Tipo De Pago";
	$fieldToolTipscat_trabajadores_tipo_de_pago["Spanish"]["descripcion_tipo_de_pago"] = "";
	$placeHolderscat_trabajadores_tipo_de_pago["Spanish"]["descripcion_tipo_de_pago"] = "";
	if (count($fieldToolTipscat_trabajadores_tipo_de_pago["Spanish"]))
		$tdatacat_trabajadores_tipo_de_pago[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_tipo_de_pago[".shortTableName"] = "cat_trabajadores_tipo_de_pago";
$tdatacat_trabajadores_tipo_de_pago[".nSecOptions"] = 0;

$tdatacat_trabajadores_tipo_de_pago[".mainTableOwnerID"] = "";
$tdatacat_trabajadores_tipo_de_pago[".entityType"] = 0;
$tdatacat_trabajadores_tipo_de_pago[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_tipo_de_pago[".strOriginalTableName"] = "cat_trabajadores_tipo_de_pago";

	



$tdatacat_trabajadores_tipo_de_pago[".showAddInPopup"] = false;

$tdatacat_trabajadores_tipo_de_pago[".showEditInPopup"] = false;

$tdatacat_trabajadores_tipo_de_pago[".showViewInPopup"] = false;

$tdatacat_trabajadores_tipo_de_pago[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_tipo_de_pago[".listAjax"] = false;

	$tdatacat_trabajadores_tipo_de_pago[".audit"] = false;

	$tdatacat_trabajadores_tipo_de_pago[".locking"] = false;


$pages = $tdatacat_trabajadores_tipo_de_pago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_tipo_de_pago[".edit"] = true;
	$tdatacat_trabajadores_tipo_de_pago[".afterEditAction"] = 1;
	$tdatacat_trabajadores_tipo_de_pago[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_tipo_de_pago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_tipo_de_pago[".add"] = true;
$tdatacat_trabajadores_tipo_de_pago[".afterAddAction"] = 1;
$tdatacat_trabajadores_tipo_de_pago[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_tipo_de_pago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_tipo_de_pago[".list"] = true;
}



$tdatacat_trabajadores_tipo_de_pago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_tipo_de_pago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_tipo_de_pago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_tipo_de_pago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_tipo_de_pago[".printFriendly"] = true;
}



$tdatacat_trabajadores_tipo_de_pago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_tipo_de_pago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_tipo_de_pago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_tipo_de_pago[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_tipo_de_pago[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_tipo_de_pago[".buttonsAdded"] = false;

$tdatacat_trabajadores_tipo_de_pago[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_tipo_de_pago[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_tipo_de_pago[".badgeColor"] = "6B8E23";


$tdatacat_trabajadores_tipo_de_pago[".allSearchFields"] = array();
$tdatacat_trabajadores_tipo_de_pago[".filterFields"] = array();
$tdatacat_trabajadores_tipo_de_pago[".requiredSearchFields"] = array();

$tdatacat_trabajadores_tipo_de_pago[".googleLikeFields"] = array();
$tdatacat_trabajadores_tipo_de_pago[".googleLikeFields"][] = "cat_trabajadores_tipo_de_pago_id";
$tdatacat_trabajadores_tipo_de_pago[".googleLikeFields"][] = "time_stamp";
$tdatacat_trabajadores_tipo_de_pago[".googleLikeFields"][] = "capturista";
$tdatacat_trabajadores_tipo_de_pago[".googleLikeFields"][] = "vigente";
$tdatacat_trabajadores_tipo_de_pago[".googleLikeFields"][] = "descripcion_tipo_de_pago";



$tdatacat_trabajadores_tipo_de_pago[".tableType"] = "list";

$tdatacat_trabajadores_tipo_de_pago[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_tipo_de_pago[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_tipo_de_pago[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_tipo_de_pago[".geocodingEnabled"] = false;





$tdatacat_trabajadores_tipo_de_pago[".isResizeColumns"] = true;





$tdatacat_trabajadores_tipo_de_pago[".pageSize"] = 20;

$tdatacat_trabajadores_tipo_de_pago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_tipo_de_pago[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_tipo_de_pago[".orderindexes"] = array();


$tdatacat_trabajadores_tipo_de_pago[".sqlHead"] = "SELECT cat_trabajadores_tipo_de_pago_id,  	time_stamp,  	capturista,  	vigente,  	descripcion_tipo_de_pago";
$tdatacat_trabajadores_tipo_de_pago[".sqlFrom"] = "FROM cat_trabajadores_tipo_de_pago";
$tdatacat_trabajadores_tipo_de_pago[".sqlWhereExpr"] = "";
$tdatacat_trabajadores_tipo_de_pago[".sqlTail"] = "";

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
$tdatacat_trabajadores_tipo_de_pago[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_tipo_de_pago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_tipo_de_pago[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_tipo_de_pago[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_tipo_de_pago = array();
$tableKeyscat_trabajadores_tipo_de_pago[] = "cat_trabajadores_tipo_de_pago_id";
$tdatacat_trabajadores_tipo_de_pago[".Keys"] = $tableKeyscat_trabajadores_tipo_de_pago;


$tdatacat_trabajadores_tipo_de_pago[".hideMobileList"] = array();




//	cat_trabajadores_tipo_de_pago_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_tipo_de_pago_id";
	$fdata["GoodName"] = "cat_trabajadores_tipo_de_pago_id";
	$fdata["ownerTable"] = "cat_trabajadores_tipo_de_pago";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tipo_de_pago","cat_trabajadores_tipo_de_pago_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_tipo_de_pago_id";

		$fdata["sourceSingle"] = "cat_trabajadores_tipo_de_pago_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_tipo_de_pago_id";

	
	
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


	$tdatacat_trabajadores_tipo_de_pago["cat_trabajadores_tipo_de_pago_id"] = $fdata;
		$tdatacat_trabajadores_tipo_de_pago[".searchableFields"][] = "cat_trabajadores_tipo_de_pago_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_trabajadores_tipo_de_pago";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tipo_de_pago","time_stamp");
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


	$tdatacat_trabajadores_tipo_de_pago["time_stamp"] = $fdata;
		$tdatacat_trabajadores_tipo_de_pago[".searchableFields"][] = "time_stamp";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_trabajadores_tipo_de_pago";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tipo_de_pago","capturista");
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


	$tdatacat_trabajadores_tipo_de_pago["capturista"] = $fdata;
		$tdatacat_trabajadores_tipo_de_pago[".searchableFields"][] = "capturista";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_tipo_de_pago";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tipo_de_pago","vigente");
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


	$tdatacat_trabajadores_tipo_de_pago["vigente"] = $fdata;
		$tdatacat_trabajadores_tipo_de_pago[".searchableFields"][] = "vigente";
//	descripcion_tipo_de_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_tipo_de_pago";
	$fdata["GoodName"] = "descripcion_tipo_de_pago";
	$fdata["ownerTable"] = "cat_trabajadores_tipo_de_pago";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tipo_de_pago","descripcion_tipo_de_pago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_tipo_de_pago";

		$fdata["sourceSingle"] = "descripcion_tipo_de_pago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_tipo_de_pago";

	
	
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


	$tdatacat_trabajadores_tipo_de_pago["descripcion_tipo_de_pago"] = $fdata;
		$tdatacat_trabajadores_tipo_de_pago[".searchableFields"][] = "descripcion_tipo_de_pago";


$tables_data["cat_trabajadores_tipo_de_pago"]=&$tdatacat_trabajadores_tipo_de_pago;
$field_labels["cat_trabajadores_tipo_de_pago"] = &$fieldLabelscat_trabajadores_tipo_de_pago;
$fieldToolTips["cat_trabajadores_tipo_de_pago"] = &$fieldToolTipscat_trabajadores_tipo_de_pago;
$placeHolders["cat_trabajadores_tipo_de_pago"] = &$placeHolderscat_trabajadores_tipo_de_pago;
$page_titles["cat_trabajadores_tipo_de_pago"] = &$pageTitlescat_trabajadores_tipo_de_pago;


changeTextControlsToDate( "cat_trabajadores_tipo_de_pago" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_tipo_de_pago"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_tipo_de_pago"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_tipo_de_pago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_tipo_de_pago_id,  	time_stamp,  	capturista,  	vigente,  	descripcion_tipo_de_pago";
$proto0["m_strFrom"] = "FROM cat_trabajadores_tipo_de_pago";
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
	"m_strName" => "cat_trabajadores_tipo_de_pago_id",
	"m_strTable" => "cat_trabajadores_tipo_de_pago",
	"m_srcTableName" => "cat_trabajadores_tipo_de_pago"
));

$proto6["m_sql"] = "cat_trabajadores_tipo_de_pago_id";
$proto6["m_srcTableName"] = "cat_trabajadores_tipo_de_pago";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_tipo_de_pago",
	"m_srcTableName" => "cat_trabajadores_tipo_de_pago"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_trabajadores_tipo_de_pago";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_trabajadores_tipo_de_pago",
	"m_srcTableName" => "cat_trabajadores_tipo_de_pago"
));

$proto10["m_sql"] = "capturista";
$proto10["m_srcTableName"] = "cat_trabajadores_tipo_de_pago";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_tipo_de_pago",
	"m_srcTableName" => "cat_trabajadores_tipo_de_pago"
));

$proto12["m_sql"] = "vigente";
$proto12["m_srcTableName"] = "cat_trabajadores_tipo_de_pago";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_tipo_de_pago",
	"m_strTable" => "cat_trabajadores_tipo_de_pago",
	"m_srcTableName" => "cat_trabajadores_tipo_de_pago"
));

$proto14["m_sql"] = "descripcion_tipo_de_pago";
$proto14["m_srcTableName"] = "cat_trabajadores_tipo_de_pago";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_trabajadores_tipo_de_pago";
$proto17["m_srcTableName"] = "cat_trabajadores_tipo_de_pago";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "descripcion_tipo_de_pago";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_trabajadores_tipo_de_pago";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_trabajadores_tipo_de_pago";
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
$proto0["m_srcTableName"]="cat_trabajadores_tipo_de_pago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_tipo_de_pago = createSqlQuery_cat_trabajadores_tipo_de_pago();


	
		;

					

$tdatacat_trabajadores_tipo_de_pago[".sqlquery"] = $queryData_cat_trabajadores_tipo_de_pago;



$tdatacat_trabajadores_tipo_de_pago[".hasEvents"] = false;

?>