<?php
$tdatacat_actividades_unidades_de_costo = array();
$tdatacat_actividades_unidades_de_costo[".searchableFields"] = array();
$tdatacat_actividades_unidades_de_costo[".ShortName"] = "cat_actividades_unidades_de_costo";
$tdatacat_actividades_unidades_de_costo[".OwnerID"] = "";
$tdatacat_actividades_unidades_de_costo[".OriginalTable"] = "cat_actividades_unidades_de_costo";


$tdatacat_actividades_unidades_de_costo[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_actividades_unidades_de_costo[".originalPagesByType"] = $tdatacat_actividades_unidades_de_costo[".pagesByType"];
$tdatacat_actividades_unidades_de_costo[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_actividades_unidades_de_costo[".originalPages"] = $tdatacat_actividades_unidades_de_costo[".pages"];
$tdatacat_actividades_unidades_de_costo[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_actividades_unidades_de_costo[".originalDefaultPages"] = $tdatacat_actividades_unidades_de_costo[".defaultPages"];

//	field labels
$fieldLabelscat_actividades_unidades_de_costo = array();
$fieldToolTipscat_actividades_unidades_de_costo = array();
$pageTitlescat_actividades_unidades_de_costo = array();
$placeHolderscat_actividades_unidades_de_costo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_actividades_unidades_de_costo["Spanish"] = array();
	$fieldToolTipscat_actividades_unidades_de_costo["Spanish"] = array();
	$placeHolderscat_actividades_unidades_de_costo["Spanish"] = array();
	$pageTitlescat_actividades_unidades_de_costo["Spanish"] = array();
	$fieldLabelscat_actividades_unidades_de_costo["Spanish"]["cat_actividades_unidades_de_costo_id"] = "Id";
	$fieldToolTipscat_actividades_unidades_de_costo["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$placeHolderscat_actividades_unidades_de_costo["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$fieldLabelscat_actividades_unidades_de_costo["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_actividades_unidades_de_costo["Spanish"]["time_stamp"] = "";
	$placeHolderscat_actividades_unidades_de_costo["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_actividades_unidades_de_costo["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_actividades_unidades_de_costo["Spanish"]["vigente"] = "";
	$placeHolderscat_actividades_unidades_de_costo["Spanish"]["vigente"] = "";
	$fieldLabelscat_actividades_unidades_de_costo["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_actividades_unidades_de_costo["Spanish"]["capturista"] = "";
	$placeHolderscat_actividades_unidades_de_costo["Spanish"]["capturista"] = "";
	$fieldLabelscat_actividades_unidades_de_costo["Spanish"]["descripcion_unidades_de_costo"] = "Unidades";
	$fieldToolTipscat_actividades_unidades_de_costo["Spanish"]["descripcion_unidades_de_costo"] = "";
	$placeHolderscat_actividades_unidades_de_costo["Spanish"]["descripcion_unidades_de_costo"] = "";
	$fieldLabelscat_actividades_unidades_de_costo["Spanish"]["factor_de_calculo"] = "Factor De Calculo";
	$fieldToolTipscat_actividades_unidades_de_costo["Spanish"]["factor_de_calculo"] = "";
	$placeHolderscat_actividades_unidades_de_costo["Spanish"]["factor_de_calculo"] = "";
	if (count($fieldToolTipscat_actividades_unidades_de_costo["Spanish"]))
		$tdatacat_actividades_unidades_de_costo[".isUseToolTips"] = true;
}





$tdatacat_actividades_unidades_de_costo[".shortTableName"] = "cat_actividades_unidades_de_costo";
$tdatacat_actividades_unidades_de_costo[".nSecOptions"] = 0;

$tdatacat_actividades_unidades_de_costo[".mainTableOwnerID"] = "";
$tdatacat_actividades_unidades_de_costo[".entityType"] = 0;
$tdatacat_actividades_unidades_de_costo[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_actividades_unidades_de_costo[".strOriginalTableName"] = "cat_actividades_unidades_de_costo";

	



$tdatacat_actividades_unidades_de_costo[".showAddInPopup"] = false;

$tdatacat_actividades_unidades_de_costo[".showEditInPopup"] = false;

$tdatacat_actividades_unidades_de_costo[".showViewInPopup"] = false;

$tdatacat_actividades_unidades_de_costo[".listAjax"] = false;
//	temporary
//$tdatacat_actividades_unidades_de_costo[".listAjax"] = false;

	$tdatacat_actividades_unidades_de_costo[".audit"] = true;

	$tdatacat_actividades_unidades_de_costo[".locking"] = true;


$pages = $tdatacat_actividades_unidades_de_costo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_actividades_unidades_de_costo[".edit"] = true;
	$tdatacat_actividades_unidades_de_costo[".afterEditAction"] = 1;
	$tdatacat_actividades_unidades_de_costo[".closePopupAfterEdit"] = 1;
	$tdatacat_actividades_unidades_de_costo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_actividades_unidades_de_costo[".add"] = true;
$tdatacat_actividades_unidades_de_costo[".afterAddAction"] = 1;
$tdatacat_actividades_unidades_de_costo[".closePopupAfterAdd"] = 1;
$tdatacat_actividades_unidades_de_costo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_actividades_unidades_de_costo[".list"] = true;
}



$tdatacat_actividades_unidades_de_costo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_actividades_unidades_de_costo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_actividades_unidades_de_costo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_actividades_unidades_de_costo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_actividades_unidades_de_costo[".printFriendly"] = true;
}



$tdatacat_actividades_unidades_de_costo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_actividades_unidades_de_costo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_actividades_unidades_de_costo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_actividades_unidades_de_costo[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_actividades_unidades_de_costo[".ajaxCodeSnippetAdded"] = false;

$tdatacat_actividades_unidades_de_costo[".buttonsAdded"] = false;

$tdatacat_actividades_unidades_de_costo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_actividades_unidades_de_costo[".isUseTimeForSearch"] = false;


$tdatacat_actividades_unidades_de_costo[".badgeColor"] = "6B8E23";


$tdatacat_actividades_unidades_de_costo[".allSearchFields"] = array();
$tdatacat_actividades_unidades_de_costo[".filterFields"] = array();
$tdatacat_actividades_unidades_de_costo[".requiredSearchFields"] = array();

$tdatacat_actividades_unidades_de_costo[".googleLikeFields"] = array();
$tdatacat_actividades_unidades_de_costo[".googleLikeFields"][] = "cat_actividades_unidades_de_costo_id";
$tdatacat_actividades_unidades_de_costo[".googleLikeFields"][] = "time_stamp";
$tdatacat_actividades_unidades_de_costo[".googleLikeFields"][] = "vigente";
$tdatacat_actividades_unidades_de_costo[".googleLikeFields"][] = "capturista";
$tdatacat_actividades_unidades_de_costo[".googleLikeFields"][] = "descripcion_unidades_de_costo";
$tdatacat_actividades_unidades_de_costo[".googleLikeFields"][] = "factor_de_calculo";



$tdatacat_actividades_unidades_de_costo[".tableType"] = "list";

$tdatacat_actividades_unidades_de_costo[".printerPageOrientation"] = 0;
$tdatacat_actividades_unidades_de_costo[".nPrinterPageScale"] = 100;

$tdatacat_actividades_unidades_de_costo[".nPrinterSplitRecords"] = 40;

$tdatacat_actividades_unidades_de_costo[".geocodingEnabled"] = false;





$tdatacat_actividades_unidades_de_costo[".isResizeColumns"] = true;





$tdatacat_actividades_unidades_de_costo[".pageSize"] = 20;

$tdatacat_actividades_unidades_de_costo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_actividades_unidades_de_costo[".strOrderBy"] = $tstrOrderBy;

$tdatacat_actividades_unidades_de_costo[".orderindexes"] = array();


$tdatacat_actividades_unidades_de_costo[".sqlHead"] = "SELECT cat_actividades_unidades_de_costo_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_unidades_de_costo,  	factor_de_calculo";
$tdatacat_actividades_unidades_de_costo[".sqlFrom"] = "FROM cat_actividades_unidades_de_costo";
$tdatacat_actividades_unidades_de_costo[".sqlWhereExpr"] = "";
$tdatacat_actividades_unidades_de_costo[".sqlTail"] = "";

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
$tdatacat_actividades_unidades_de_costo[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_actividades_unidades_de_costo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_actividades_unidades_de_costo[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_actividades_unidades_de_costo[".highlightSearchResults"] = true;

$tableKeyscat_actividades_unidades_de_costo = array();
$tableKeyscat_actividades_unidades_de_costo[] = "cat_actividades_unidades_de_costo_id";
$tdatacat_actividades_unidades_de_costo[".Keys"] = $tableKeyscat_actividades_unidades_de_costo;


$tdatacat_actividades_unidades_de_costo[".hideMobileList"] = array();




//	cat_actividades_unidades_de_costo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["GoodName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["ownerTable"] = "cat_actividades_unidades_de_costo";
	$fdata["Label"] = GetFieldLabel("cat_actividades_unidades_de_costo","cat_actividades_unidades_de_costo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_actividades_unidades_de_costo_id";

		$fdata["sourceSingle"] = "cat_actividades_unidades_de_costo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_unidades_de_costo_id";

	
	
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


	$tdatacat_actividades_unidades_de_costo["cat_actividades_unidades_de_costo_id"] = $fdata;
		$tdatacat_actividades_unidades_de_costo[".searchableFields"][] = "cat_actividades_unidades_de_costo_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_actividades_unidades_de_costo";
	$fdata["Label"] = GetFieldLabel("cat_actividades_unidades_de_costo","time_stamp");
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


	$tdatacat_actividades_unidades_de_costo["time_stamp"] = $fdata;
		$tdatacat_actividades_unidades_de_costo[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_actividades_unidades_de_costo";
	$fdata["Label"] = GetFieldLabel("cat_actividades_unidades_de_costo","vigente");
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


	$tdatacat_actividades_unidades_de_costo["vigente"] = $fdata;
		$tdatacat_actividades_unidades_de_costo[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_actividades_unidades_de_costo";
	$fdata["Label"] = GetFieldLabel("cat_actividades_unidades_de_costo","capturista");
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


	$tdatacat_actividades_unidades_de_costo["capturista"] = $fdata;
		$tdatacat_actividades_unidades_de_costo[".searchableFields"][] = "capturista";
//	descripcion_unidades_de_costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_unidades_de_costo";
	$fdata["GoodName"] = "descripcion_unidades_de_costo";
	$fdata["ownerTable"] = "cat_actividades_unidades_de_costo";
	$fdata["Label"] = GetFieldLabel("cat_actividades_unidades_de_costo","descripcion_unidades_de_costo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_unidades_de_costo";

		$fdata["sourceSingle"] = "descripcion_unidades_de_costo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_unidades_de_costo";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacat_actividades_unidades_de_costo["descripcion_unidades_de_costo"] = $fdata;
		$tdatacat_actividades_unidades_de_costo[".searchableFields"][] = "descripcion_unidades_de_costo";
//	factor_de_calculo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "factor_de_calculo";
	$fdata["GoodName"] = "factor_de_calculo";
	$fdata["ownerTable"] = "cat_actividades_unidades_de_costo";
	$fdata["Label"] = GetFieldLabel("cat_actividades_unidades_de_costo","factor_de_calculo");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "factor_de_calculo";

		$fdata["sourceSingle"] = "factor_de_calculo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "factor_de_calculo";

	
	
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


	$tdatacat_actividades_unidades_de_costo["factor_de_calculo"] = $fdata;
		$tdatacat_actividades_unidades_de_costo[".searchableFields"][] = "factor_de_calculo";


$tables_data["cat_actividades_unidades_de_costo"]=&$tdatacat_actividades_unidades_de_costo;
$field_labels["cat_actividades_unidades_de_costo"] = &$fieldLabelscat_actividades_unidades_de_costo;
$fieldToolTips["cat_actividades_unidades_de_costo"] = &$fieldToolTipscat_actividades_unidades_de_costo;
$placeHolders["cat_actividades_unidades_de_costo"] = &$placeHolderscat_actividades_unidades_de_costo;
$page_titles["cat_actividades_unidades_de_costo"] = &$pageTitlescat_actividades_unidades_de_costo;


changeTextControlsToDate( "cat_actividades_unidades_de_costo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_actividades_unidades_de_costo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_actividades_unidades_de_costo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_actividades_unidades_de_costo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_actividades_unidades_de_costo_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_unidades_de_costo,  	factor_de_calculo";
$proto0["m_strFrom"] = "FROM cat_actividades_unidades_de_costo";
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
	"m_strName" => "cat_actividades_unidades_de_costo_id",
	"m_strTable" => "cat_actividades_unidades_de_costo",
	"m_srcTableName" => "cat_actividades_unidades_de_costo"
));

$proto6["m_sql"] = "cat_actividades_unidades_de_costo_id";
$proto6["m_srcTableName"] = "cat_actividades_unidades_de_costo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_actividades_unidades_de_costo",
	"m_srcTableName" => "cat_actividades_unidades_de_costo"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_actividades_unidades_de_costo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_actividades_unidades_de_costo",
	"m_srcTableName" => "cat_actividades_unidades_de_costo"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_actividades_unidades_de_costo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_actividades_unidades_de_costo",
	"m_srcTableName" => "cat_actividades_unidades_de_costo"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_actividades_unidades_de_costo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_unidades_de_costo",
	"m_strTable" => "cat_actividades_unidades_de_costo",
	"m_srcTableName" => "cat_actividades_unidades_de_costo"
));

$proto14["m_sql"] = "descripcion_unidades_de_costo";
$proto14["m_srcTableName"] = "cat_actividades_unidades_de_costo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "factor_de_calculo",
	"m_strTable" => "cat_actividades_unidades_de_costo",
	"m_srcTableName" => "cat_actividades_unidades_de_costo"
));

$proto16["m_sql"] = "factor_de_calculo";
$proto16["m_srcTableName"] = "cat_actividades_unidades_de_costo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_actividades_unidades_de_costo";
$proto19["m_srcTableName"] = "cat_actividades_unidades_de_costo";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_actividades_unidades_de_costo_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_unidades_de_costo";
$proto19["m_columns"][] = "factor_de_calculo";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_actividades_unidades_de_costo";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_actividades_unidades_de_costo";
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
$proto0["m_srcTableName"]="cat_actividades_unidades_de_costo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_actividades_unidades_de_costo = createSqlQuery_cat_actividades_unidades_de_costo();


	
		;

						

$tdatacat_actividades_unidades_de_costo[".sqlquery"] = $queryData_cat_actividades_unidades_de_costo;



$tdatacat_actividades_unidades_de_costo[".hasEvents"] = false;

?>