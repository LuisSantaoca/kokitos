<?php
$tdatacat_holding_02_empresas = array();
$tdatacat_holding_02_empresas[".searchableFields"] = array();
$tdatacat_holding_02_empresas[".ShortName"] = "cat_holding_02_empresas";
$tdatacat_holding_02_empresas[".OwnerID"] = "";
$tdatacat_holding_02_empresas[".OriginalTable"] = "cat_holding_02_empresas";


$tdatacat_holding_02_empresas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_holding_02_empresas[".originalPagesByType"] = $tdatacat_holding_02_empresas[".pagesByType"];
$tdatacat_holding_02_empresas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_holding_02_empresas[".originalPages"] = $tdatacat_holding_02_empresas[".pages"];
$tdatacat_holding_02_empresas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_holding_02_empresas[".originalDefaultPages"] = $tdatacat_holding_02_empresas[".defaultPages"];

//	field labels
$fieldLabelscat_holding_02_empresas = array();
$fieldToolTipscat_holding_02_empresas = array();
$pageTitlescat_holding_02_empresas = array();
$placeHolderscat_holding_02_empresas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_holding_02_empresas["Spanish"] = array();
	$fieldToolTipscat_holding_02_empresas["Spanish"] = array();
	$placeHolderscat_holding_02_empresas["Spanish"] = array();
	$pageTitlescat_holding_02_empresas["Spanish"] = array();
	$fieldLabelscat_holding_02_empresas["Spanish"]["cat_holding_02_empresas_id"] = " Id";
	$fieldToolTipscat_holding_02_empresas["Spanish"]["cat_holding_02_empresas_id"] = "";
	$placeHolderscat_holding_02_empresas["Spanish"]["cat_holding_02_empresas_id"] = "";
	$fieldLabelscat_holding_02_empresas["Spanish"]["cat_holding_01_id"] = "01 Id";
	$fieldToolTipscat_holding_02_empresas["Spanish"]["cat_holding_01_id"] = "";
	$placeHolderscat_holding_02_empresas["Spanish"]["cat_holding_01_id"] = "";
	$fieldLabelscat_holding_02_empresas["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_holding_02_empresas["Spanish"]["time_stamp"] = "";
	$placeHolderscat_holding_02_empresas["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_holding_02_empresas["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_holding_02_empresas["Spanish"]["vigente"] = "";
	$placeHolderscat_holding_02_empresas["Spanish"]["vigente"] = "";
	$fieldLabelscat_holding_02_empresas["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_holding_02_empresas["Spanish"]["capturista"] = "";
	$placeHolderscat_holding_02_empresas["Spanish"]["capturista"] = "";
	$fieldLabelscat_holding_02_empresas["Spanish"]["descripcion_empresas"] = "Empresa";
	$fieldToolTipscat_holding_02_empresas["Spanish"]["descripcion_empresas"] = "";
	$placeHolderscat_holding_02_empresas["Spanish"]["descripcion_empresas"] = "";
	if (count($fieldToolTipscat_holding_02_empresas["Spanish"]))
		$tdatacat_holding_02_empresas[".isUseToolTips"] = true;
}





$tdatacat_holding_02_empresas[".shortTableName"] = "cat_holding_02_empresas";
$tdatacat_holding_02_empresas[".nSecOptions"] = 0;

$tdatacat_holding_02_empresas[".mainTableOwnerID"] = "";
$tdatacat_holding_02_empresas[".entityType"] = 0;
$tdatacat_holding_02_empresas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_holding_02_empresas[".strOriginalTableName"] = "cat_holding_02_empresas";

	



$tdatacat_holding_02_empresas[".showAddInPopup"] = false;

$tdatacat_holding_02_empresas[".showEditInPopup"] = false;

$tdatacat_holding_02_empresas[".showViewInPopup"] = false;

$tdatacat_holding_02_empresas[".listAjax"] = false;
//	temporary
//$tdatacat_holding_02_empresas[".listAjax"] = false;

	$tdatacat_holding_02_empresas[".audit"] = true;

	$tdatacat_holding_02_empresas[".locking"] = true;


$pages = $tdatacat_holding_02_empresas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_holding_02_empresas[".edit"] = true;
	$tdatacat_holding_02_empresas[".afterEditAction"] = 1;
	$tdatacat_holding_02_empresas[".closePopupAfterEdit"] = 1;
	$tdatacat_holding_02_empresas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_holding_02_empresas[".add"] = true;
$tdatacat_holding_02_empresas[".afterAddAction"] = 1;
$tdatacat_holding_02_empresas[".closePopupAfterAdd"] = 1;
$tdatacat_holding_02_empresas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_holding_02_empresas[".list"] = true;
}



$tdatacat_holding_02_empresas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_holding_02_empresas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_holding_02_empresas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_holding_02_empresas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_holding_02_empresas[".printFriendly"] = true;
}



$tdatacat_holding_02_empresas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_holding_02_empresas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_holding_02_empresas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_holding_02_empresas[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																								

$tdatacat_holding_02_empresas[".ajaxCodeSnippetAdded"] = false;

$tdatacat_holding_02_empresas[".buttonsAdded"] = false;

$tdatacat_holding_02_empresas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_holding_02_empresas[".isUseTimeForSearch"] = false;


$tdatacat_holding_02_empresas[".badgeColor"] = "6493ea";


$tdatacat_holding_02_empresas[".allSearchFields"] = array();
$tdatacat_holding_02_empresas[".filterFields"] = array();
$tdatacat_holding_02_empresas[".requiredSearchFields"] = array();

$tdatacat_holding_02_empresas[".googleLikeFields"] = array();
$tdatacat_holding_02_empresas[".googleLikeFields"][] = "cat_holding_02_empresas_id";
$tdatacat_holding_02_empresas[".googleLikeFields"][] = "cat_holding_01_id";
$tdatacat_holding_02_empresas[".googleLikeFields"][] = "time_stamp";
$tdatacat_holding_02_empresas[".googleLikeFields"][] = "vigente";
$tdatacat_holding_02_empresas[".googleLikeFields"][] = "capturista";
$tdatacat_holding_02_empresas[".googleLikeFields"][] = "descripcion_empresas";



$tdatacat_holding_02_empresas[".tableType"] = "list";

$tdatacat_holding_02_empresas[".printerPageOrientation"] = 0;
$tdatacat_holding_02_empresas[".nPrinterPageScale"] = 100;

$tdatacat_holding_02_empresas[".nPrinterSplitRecords"] = 40;

$tdatacat_holding_02_empresas[".geocodingEnabled"] = false;





$tdatacat_holding_02_empresas[".isResizeColumns"] = true;





$tdatacat_holding_02_empresas[".pageSize"] = 20;

$tdatacat_holding_02_empresas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_holding_02_empresas[".strOrderBy"] = $tstrOrderBy;

$tdatacat_holding_02_empresas[".orderindexes"] = array();


$tdatacat_holding_02_empresas[".sqlHead"] = "SELECT cat_holding_02_empresas_id,  cat_holding_01_id,  time_stamp,  vigente,  capturista,  descripcion_empresas";
$tdatacat_holding_02_empresas[".sqlFrom"] = "FROM cat_holding_02_empresas";
$tdatacat_holding_02_empresas[".sqlWhereExpr"] = "(vigente =1)";
$tdatacat_holding_02_empresas[".sqlTail"] = "";

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
$tdatacat_holding_02_empresas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_holding_02_empresas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_holding_02_empresas[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_holding_02_empresas[".highlightSearchResults"] = true;

$tableKeyscat_holding_02_empresas = array();
$tableKeyscat_holding_02_empresas[] = "cat_holding_02_empresas_id";
$tdatacat_holding_02_empresas[".Keys"] = $tableKeyscat_holding_02_empresas;


$tdatacat_holding_02_empresas[".hideMobileList"] = array();




//	cat_holding_02_empresas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_holding_02_empresas_id";
	$fdata["GoodName"] = "cat_holding_02_empresas_id";
	$fdata["ownerTable"] = "cat_holding_02_empresas";
	$fdata["Label"] = GetFieldLabel("cat_holding_02_empresas","cat_holding_02_empresas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_holding_02_empresas_id";

		$fdata["sourceSingle"] = "cat_holding_02_empresas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_02_empresas_id";

	
	
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


	$tdatacat_holding_02_empresas["cat_holding_02_empresas_id"] = $fdata;
		$tdatacat_holding_02_empresas[".searchableFields"][] = "cat_holding_02_empresas_id";
//	cat_holding_01_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_holding_01_id";
	$fdata["GoodName"] = "cat_holding_01_id";
	$fdata["ownerTable"] = "cat_holding_02_empresas";
	$fdata["Label"] = GetFieldLabel("cat_holding_02_empresas","cat_holding_01_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_01_id";

		$fdata["sourceSingle"] = "cat_holding_01_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_01_id";

	
	
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


	$tdatacat_holding_02_empresas["cat_holding_01_id"] = $fdata;
		$tdatacat_holding_02_empresas[".searchableFields"][] = "cat_holding_01_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_holding_02_empresas";
	$fdata["Label"] = GetFieldLabel("cat_holding_02_empresas","time_stamp");
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


	$tdatacat_holding_02_empresas["time_stamp"] = $fdata;
		$tdatacat_holding_02_empresas[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_holding_02_empresas";
	$fdata["Label"] = GetFieldLabel("cat_holding_02_empresas","vigente");
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


	$tdatacat_holding_02_empresas["vigente"] = $fdata;
		$tdatacat_holding_02_empresas[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_holding_02_empresas";
	$fdata["Label"] = GetFieldLabel("cat_holding_02_empresas","capturista");
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


	$tdatacat_holding_02_empresas["capturista"] = $fdata;
		$tdatacat_holding_02_empresas[".searchableFields"][] = "capturista";
//	descripcion_empresas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descripcion_empresas";
	$fdata["GoodName"] = "descripcion_empresas";
	$fdata["ownerTable"] = "cat_holding_02_empresas";
	$fdata["Label"] = GetFieldLabel("cat_holding_02_empresas","descripcion_empresas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_empresas";

		$fdata["sourceSingle"] = "descripcion_empresas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_empresas";

	
	
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


	$tdatacat_holding_02_empresas["descripcion_empresas"] = $fdata;
		$tdatacat_holding_02_empresas[".searchableFields"][] = "descripcion_empresas";


$tables_data["cat_holding_02_empresas"]=&$tdatacat_holding_02_empresas;
$field_labels["cat_holding_02_empresas"] = &$fieldLabelscat_holding_02_empresas;
$fieldToolTips["cat_holding_02_empresas"] = &$fieldToolTipscat_holding_02_empresas;
$placeHolders["cat_holding_02_empresas"] = &$placeHolderscat_holding_02_empresas;
$page_titles["cat_holding_02_empresas"] = &$pageTitlescat_holding_02_empresas;


changeTextControlsToDate( "cat_holding_02_empresas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_holding_02_empresas"] = array();
//	cat_holding_03_empresas_departamentos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cat_holding_03_empresas_departamentos";
		$detailsParam["dOriginalTable"] = "cat_holding_03_empresas_departamentos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cat_holding_03_empresas_departamentos";
	$detailsParam["dCaptionTable"] = GetTableCaption("cat_holding_03_empresas_departamentos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cat_holding_02_empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cat_holding_02_empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cat_holding_02_empresas"][$dIndex]["masterKeys"][]="cat_holding_02_empresas_id";

	$detailsTablesData["cat_holding_02_empresas"][$dIndex]["masterKeys"][]="cat_holding_01_id";

				$detailsTablesData["cat_holding_02_empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cat_holding_02_empresas"][$dIndex]["detailKeys"][]="cat_holding_02_empresas_id";

		
	$detailsTablesData["cat_holding_02_empresas"][$dIndex]["detailKeys"][]="cat_holding_01_id";
//	cat_holding_03_empresas_unidades_productivas
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cat_holding_03_empresas_unidades_productivas";
		$detailsParam["dOriginalTable"] = "cat_holding_03_empresas_unidades_productivas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cat_holding_03_empresas_unidades_productivas";
	$detailsParam["dCaptionTable"] = GetTableCaption("cat_holding_03_empresas_unidades_productivas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cat_holding_02_empresas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cat_holding_02_empresas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cat_holding_02_empresas"][$dIndex]["masterKeys"][]="cat_holding_02_empresas_id";

				$detailsTablesData["cat_holding_02_empresas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cat_holding_02_empresas"][$dIndex]["detailKeys"][]="cat_holding_02_empresas_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_holding_02_empresas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cat_holding_01";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cat_holding_01";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cat_holding_01";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cat_holding_02_empresas"][0] = $masterParams;
				$masterTablesData["cat_holding_02_empresas"][0]["masterKeys"] = array();
	$masterTablesData["cat_holding_02_empresas"][0]["masterKeys"][]="cat_holding_01_id";
				$masterTablesData["cat_holding_02_empresas"][0]["detailKeys"] = array();
	$masterTablesData["cat_holding_02_empresas"][0]["detailKeys"][]="cat_holding_01_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_holding_02_empresas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_holding_02_empresas_id,  cat_holding_01_id,  time_stamp,  vigente,  capturista,  descripcion_empresas";
$proto0["m_strFrom"] = "FROM cat_holding_02_empresas";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "cat_holding_02_empresas"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_strName" => "cat_holding_02_empresas_id",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "cat_holding_02_empresas"
));

$proto6["m_sql"] = "cat_holding_02_empresas_id";
$proto6["m_srcTableName"] = "cat_holding_02_empresas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_01_id",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "cat_holding_02_empresas"
));

$proto8["m_sql"] = "cat_holding_01_id";
$proto8["m_srcTableName"] = "cat_holding_02_empresas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "cat_holding_02_empresas"
));

$proto10["m_sql"] = "time_stamp";
$proto10["m_srcTableName"] = "cat_holding_02_empresas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "cat_holding_02_empresas"
));

$proto12["m_sql"] = "vigente";
$proto12["m_srcTableName"] = "cat_holding_02_empresas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "cat_holding_02_empresas"
));

$proto14["m_sql"] = "capturista";
$proto14["m_srcTableName"] = "cat_holding_02_empresas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_empresas",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "cat_holding_02_empresas"
));

$proto16["m_sql"] = "descripcion_empresas";
$proto16["m_srcTableName"] = "cat_holding_02_empresas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_holding_02_empresas";
$proto19["m_srcTableName"] = "cat_holding_02_empresas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_holding_02_empresas_id";
$proto19["m_columns"][] = "cat_holding_01_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_empresas";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_holding_02_empresas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_holding_02_empresas";
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
$proto0["m_srcTableName"]="cat_holding_02_empresas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_holding_02_empresas = createSqlQuery_cat_holding_02_empresas();


	
		;

						

$tdatacat_holding_02_empresas[".sqlquery"] = $queryData_cat_holding_02_empresas;



$tdatacat_holding_02_empresas[".hasEvents"] = false;

?>