<?php
$tdatacat_holding_03_empresas_almacenes = array();
$tdatacat_holding_03_empresas_almacenes[".searchableFields"] = array();
$tdatacat_holding_03_empresas_almacenes[".ShortName"] = "cat_holding_03_empresas_almacenes";
$tdatacat_holding_03_empresas_almacenes[".OwnerID"] = "";
$tdatacat_holding_03_empresas_almacenes[".OriginalTable"] = "cat_holding_03_empresas_almacenes";


$tdatacat_holding_03_empresas_almacenes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacat_holding_03_empresas_almacenes[".originalPagesByType"] = $tdatacat_holding_03_empresas_almacenes[".pagesByType"];
$tdatacat_holding_03_empresas_almacenes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacat_holding_03_empresas_almacenes[".originalPages"] = $tdatacat_holding_03_empresas_almacenes[".pages"];
$tdatacat_holding_03_empresas_almacenes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacat_holding_03_empresas_almacenes[".originalDefaultPages"] = $tdatacat_holding_03_empresas_almacenes[".defaultPages"];

//	field labels
$fieldLabelscat_holding_03_empresas_almacenes = array();
$fieldToolTipscat_holding_03_empresas_almacenes = array();
$pageTitlescat_holding_03_empresas_almacenes = array();
$placeHolderscat_holding_03_empresas_almacenes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_holding_03_empresas_almacenes["Spanish"] = array();
	$fieldToolTipscat_holding_03_empresas_almacenes["Spanish"] = array();
	$placeHolderscat_holding_03_empresas_almacenes["Spanish"] = array();
	$pageTitlescat_holding_03_empresas_almacenes["Spanish"] = array();
	$fieldLabelscat_holding_03_empresas_almacenes["Spanish"]["cat_holding_03_empresas_almacenes_id"] = "Cat Holding 03 Empresas Almacenes Id";
	$fieldToolTipscat_holding_03_empresas_almacenes["Spanish"]["cat_holding_03_empresas_almacenes_id"] = "";
	$placeHolderscat_holding_03_empresas_almacenes["Spanish"]["cat_holding_03_empresas_almacenes_id"] = "";
	$fieldLabelscat_holding_03_empresas_almacenes["Spanish"]["cat_holding_02_empresas_id"] = "Cat Holding 02 Empresas Id";
	$fieldToolTipscat_holding_03_empresas_almacenes["Spanish"]["cat_holding_02_empresas_id"] = "";
	$placeHolderscat_holding_03_empresas_almacenes["Spanish"]["cat_holding_02_empresas_id"] = "";
	$fieldLabelscat_holding_03_empresas_almacenes["Spanish"]["cat_holding_01_id"] = "Cat Holding 01 Id";
	$fieldToolTipscat_holding_03_empresas_almacenes["Spanish"]["cat_holding_01_id"] = "";
	$placeHolderscat_holding_03_empresas_almacenes["Spanish"]["cat_holding_01_id"] = "";
	$fieldLabelscat_holding_03_empresas_almacenes["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_holding_03_empresas_almacenes["Spanish"]["time_stamp"] = "";
	$placeHolderscat_holding_03_empresas_almacenes["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_holding_03_empresas_almacenes["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_holding_03_empresas_almacenes["Spanish"]["vigente"] = "";
	$placeHolderscat_holding_03_empresas_almacenes["Spanish"]["vigente"] = "";
	$fieldLabelscat_holding_03_empresas_almacenes["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_holding_03_empresas_almacenes["Spanish"]["capturista"] = "";
	$placeHolderscat_holding_03_empresas_almacenes["Spanish"]["capturista"] = "";
	$fieldLabelscat_holding_03_empresas_almacenes["Spanish"]["cat_almacenes_consolidados_id"] = "Cat Almacenes Consolidados Id";
	$fieldToolTipscat_holding_03_empresas_almacenes["Spanish"]["cat_almacenes_consolidados_id"] = "";
	$placeHolderscat_holding_03_empresas_almacenes["Spanish"]["cat_almacenes_consolidados_id"] = "";
	if (count($fieldToolTipscat_holding_03_empresas_almacenes["Spanish"]))
		$tdatacat_holding_03_empresas_almacenes[".isUseToolTips"] = true;
}





$tdatacat_holding_03_empresas_almacenes[".shortTableName"] = "cat_holding_03_empresas_almacenes";
$tdatacat_holding_03_empresas_almacenes[".nSecOptions"] = 0;

$tdatacat_holding_03_empresas_almacenes[".mainTableOwnerID"] = "";
$tdatacat_holding_03_empresas_almacenes[".entityType"] = 0;
$tdatacat_holding_03_empresas_almacenes[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_holding_03_empresas_almacenes[".strOriginalTableName"] = "cat_holding_03_empresas_almacenes";

	



$tdatacat_holding_03_empresas_almacenes[".showAddInPopup"] = false;

$tdatacat_holding_03_empresas_almacenes[".showEditInPopup"] = false;

$tdatacat_holding_03_empresas_almacenes[".showViewInPopup"] = false;

$tdatacat_holding_03_empresas_almacenes[".listAjax"] = false;
//	temporary
//$tdatacat_holding_03_empresas_almacenes[".listAjax"] = false;

	$tdatacat_holding_03_empresas_almacenes[".audit"] = true;

	$tdatacat_holding_03_empresas_almacenes[".locking"] = true;


$pages = $tdatacat_holding_03_empresas_almacenes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_holding_03_empresas_almacenes[".edit"] = true;
	$tdatacat_holding_03_empresas_almacenes[".afterEditAction"] = 1;
	$tdatacat_holding_03_empresas_almacenes[".closePopupAfterEdit"] = 1;
	$tdatacat_holding_03_empresas_almacenes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_holding_03_empresas_almacenes[".add"] = true;
$tdatacat_holding_03_empresas_almacenes[".afterAddAction"] = 1;
$tdatacat_holding_03_empresas_almacenes[".closePopupAfterAdd"] = 1;
$tdatacat_holding_03_empresas_almacenes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_holding_03_empresas_almacenes[".list"] = true;
}



$tdatacat_holding_03_empresas_almacenes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_holding_03_empresas_almacenes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_holding_03_empresas_almacenes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_holding_03_empresas_almacenes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_holding_03_empresas_almacenes[".printFriendly"] = true;
}



$tdatacat_holding_03_empresas_almacenes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_holding_03_empresas_almacenes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_holding_03_empresas_almacenes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_holding_03_empresas_almacenes[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_holding_03_empresas_almacenes[".ajaxCodeSnippetAdded"] = false;

$tdatacat_holding_03_empresas_almacenes[".buttonsAdded"] = false;

$tdatacat_holding_03_empresas_almacenes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_holding_03_empresas_almacenes[".isUseTimeForSearch"] = false;


$tdatacat_holding_03_empresas_almacenes[".badgeColor"] = "E8926F";


$tdatacat_holding_03_empresas_almacenes[".allSearchFields"] = array();
$tdatacat_holding_03_empresas_almacenes[".filterFields"] = array();
$tdatacat_holding_03_empresas_almacenes[".requiredSearchFields"] = array();

$tdatacat_holding_03_empresas_almacenes[".googleLikeFields"] = array();
$tdatacat_holding_03_empresas_almacenes[".googleLikeFields"][] = "cat_holding_03_empresas_almacenes_id";
$tdatacat_holding_03_empresas_almacenes[".googleLikeFields"][] = "cat_holding_02_empresas_id";
$tdatacat_holding_03_empresas_almacenes[".googleLikeFields"][] = "cat_holding_01_id";
$tdatacat_holding_03_empresas_almacenes[".googleLikeFields"][] = "time_stamp";
$tdatacat_holding_03_empresas_almacenes[".googleLikeFields"][] = "vigente";
$tdatacat_holding_03_empresas_almacenes[".googleLikeFields"][] = "capturista";
$tdatacat_holding_03_empresas_almacenes[".googleLikeFields"][] = "cat_almacenes_consolidados_id";



$tdatacat_holding_03_empresas_almacenes[".tableType"] = "list";

$tdatacat_holding_03_empresas_almacenes[".printerPageOrientation"] = 0;
$tdatacat_holding_03_empresas_almacenes[".nPrinterPageScale"] = 100;

$tdatacat_holding_03_empresas_almacenes[".nPrinterSplitRecords"] = 40;

$tdatacat_holding_03_empresas_almacenes[".geocodingEnabled"] = false;





$tdatacat_holding_03_empresas_almacenes[".isResizeColumns"] = true;





$tdatacat_holding_03_empresas_almacenes[".pageSize"] = 20;

$tdatacat_holding_03_empresas_almacenes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_holding_03_empresas_almacenes[".strOrderBy"] = $tstrOrderBy;

$tdatacat_holding_03_empresas_almacenes[".orderindexes"] = array();


$tdatacat_holding_03_empresas_almacenes[".sqlHead"] = "SELECT cat_holding_03_empresas_almacenes_id,  	cat_holding_02_empresas_id,  	cat_holding_01_id,  	time_stamp,  	vigente,  	capturista,  	cat_almacenes_consolidados_id";
$tdatacat_holding_03_empresas_almacenes[".sqlFrom"] = "FROM cat_holding_03_empresas_almacenes";
$tdatacat_holding_03_empresas_almacenes[".sqlWhereExpr"] = "";
$tdatacat_holding_03_empresas_almacenes[".sqlTail"] = "";

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
$tdatacat_holding_03_empresas_almacenes[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_holding_03_empresas_almacenes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_holding_03_empresas_almacenes[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_holding_03_empresas_almacenes[".highlightSearchResults"] = true;

$tableKeyscat_holding_03_empresas_almacenes = array();
$tableKeyscat_holding_03_empresas_almacenes[] = "cat_holding_03_empresas_almacenes_id";
$tdatacat_holding_03_empresas_almacenes[".Keys"] = $tableKeyscat_holding_03_empresas_almacenes;


$tdatacat_holding_03_empresas_almacenes[".hideMobileList"] = array();




//	cat_holding_03_empresas_almacenes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_holding_03_empresas_almacenes_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_almacenes_id";
	$fdata["ownerTable"] = "cat_holding_03_empresas_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_almacenes","cat_holding_03_empresas_almacenes_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_holding_03_empresas_almacenes_id";

		$fdata["sourceSingle"] = "cat_holding_03_empresas_almacenes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_03_empresas_almacenes_id";

	
	
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


	$tdatacat_holding_03_empresas_almacenes["cat_holding_03_empresas_almacenes_id"] = $fdata;
		$tdatacat_holding_03_empresas_almacenes[".searchableFields"][] = "cat_holding_03_empresas_almacenes_id";
//	cat_holding_02_empresas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_holding_02_empresas_id";
	$fdata["GoodName"] = "cat_holding_02_empresas_id";
	$fdata["ownerTable"] = "cat_holding_03_empresas_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_almacenes","cat_holding_02_empresas_id");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatacat_holding_03_empresas_almacenes["cat_holding_02_empresas_id"] = $fdata;
		$tdatacat_holding_03_empresas_almacenes[".searchableFields"][] = "cat_holding_02_empresas_id";
//	cat_holding_01_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_holding_01_id";
	$fdata["GoodName"] = "cat_holding_01_id";
	$fdata["ownerTable"] = "cat_holding_03_empresas_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_almacenes","cat_holding_01_id");
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


	$tdatacat_holding_03_empresas_almacenes["cat_holding_01_id"] = $fdata;
		$tdatacat_holding_03_empresas_almacenes[".searchableFields"][] = "cat_holding_01_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_holding_03_empresas_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_almacenes","time_stamp");
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


	$tdatacat_holding_03_empresas_almacenes["time_stamp"] = $fdata;
		$tdatacat_holding_03_empresas_almacenes[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_holding_03_empresas_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_almacenes","vigente");
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


	$tdatacat_holding_03_empresas_almacenes["vigente"] = $fdata;
		$tdatacat_holding_03_empresas_almacenes[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_holding_03_empresas_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_almacenes","capturista");
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


	$tdatacat_holding_03_empresas_almacenes["capturista"] = $fdata;
		$tdatacat_holding_03_empresas_almacenes[".searchableFields"][] = "capturista";
//	cat_almacenes_consolidados_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_almacenes_consolidados_id";
	$fdata["GoodName"] = "cat_almacenes_consolidados_id";
	$fdata["ownerTable"] = "cat_holding_03_empresas_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_almacenes","cat_almacenes_consolidados_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_almacenes_consolidados_id";

		$fdata["sourceSingle"] = "cat_almacenes_consolidados_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_almacenes_consolidados_id";

	
	
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


	$tdatacat_holding_03_empresas_almacenes["cat_almacenes_consolidados_id"] = $fdata;
		$tdatacat_holding_03_empresas_almacenes[".searchableFields"][] = "cat_almacenes_consolidados_id";


$tables_data["cat_holding_03_empresas_almacenes"]=&$tdatacat_holding_03_empresas_almacenes;
$field_labels["cat_holding_03_empresas_almacenes"] = &$fieldLabelscat_holding_03_empresas_almacenes;
$fieldToolTips["cat_holding_03_empresas_almacenes"] = &$fieldToolTipscat_holding_03_empresas_almacenes;
$placeHolders["cat_holding_03_empresas_almacenes"] = &$placeHolderscat_holding_03_empresas_almacenes;
$page_titles["cat_holding_03_empresas_almacenes"] = &$pageTitlescat_holding_03_empresas_almacenes;


changeTextControlsToDate( "cat_holding_03_empresas_almacenes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_holding_03_empresas_almacenes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_holding_03_empresas_almacenes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_holding_03_empresas_almacenes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_holding_03_empresas_almacenes_id,  	cat_holding_02_empresas_id,  	cat_holding_01_id,  	time_stamp,  	vigente,  	capturista,  	cat_almacenes_consolidados_id";
$proto0["m_strFrom"] = "FROM cat_holding_03_empresas_almacenes";
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
	"m_strName" => "cat_holding_03_empresas_almacenes_id",
	"m_strTable" => "cat_holding_03_empresas_almacenes",
	"m_srcTableName" => "cat_holding_03_empresas_almacenes"
));

$proto6["m_sql"] = "cat_holding_03_empresas_almacenes_id";
$proto6["m_srcTableName"] = "cat_holding_03_empresas_almacenes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_02_empresas_id",
	"m_strTable" => "cat_holding_03_empresas_almacenes",
	"m_srcTableName" => "cat_holding_03_empresas_almacenes"
));

$proto8["m_sql"] = "cat_holding_02_empresas_id";
$proto8["m_srcTableName"] = "cat_holding_03_empresas_almacenes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_01_id",
	"m_strTable" => "cat_holding_03_empresas_almacenes",
	"m_srcTableName" => "cat_holding_03_empresas_almacenes"
));

$proto10["m_sql"] = "cat_holding_01_id";
$proto10["m_srcTableName"] = "cat_holding_03_empresas_almacenes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_holding_03_empresas_almacenes",
	"m_srcTableName" => "cat_holding_03_empresas_almacenes"
));

$proto12["m_sql"] = "time_stamp";
$proto12["m_srcTableName"] = "cat_holding_03_empresas_almacenes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_holding_03_empresas_almacenes",
	"m_srcTableName" => "cat_holding_03_empresas_almacenes"
));

$proto14["m_sql"] = "vigente";
$proto14["m_srcTableName"] = "cat_holding_03_empresas_almacenes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_holding_03_empresas_almacenes",
	"m_srcTableName" => "cat_holding_03_empresas_almacenes"
));

$proto16["m_sql"] = "capturista";
$proto16["m_srcTableName"] = "cat_holding_03_empresas_almacenes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_almacenes_consolidados_id",
	"m_strTable" => "cat_holding_03_empresas_almacenes",
	"m_srcTableName" => "cat_holding_03_empresas_almacenes"
));

$proto18["m_sql"] = "cat_almacenes_consolidados_id";
$proto18["m_srcTableName"] = "cat_holding_03_empresas_almacenes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "cat_holding_03_empresas_almacenes";
$proto21["m_srcTableName"] = "cat_holding_03_empresas_almacenes";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_holding_03_empresas_almacenes_id";
$proto21["m_columns"][] = "cat_holding_02_empresas_id";
$proto21["m_columns"][] = "cat_holding_01_id";
$proto21["m_columns"][] = "time_stamp";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "cat_almacenes_consolidados_id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "cat_holding_03_empresas_almacenes";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "cat_holding_03_empresas_almacenes";
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
$proto0["m_srcTableName"]="cat_holding_03_empresas_almacenes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_holding_03_empresas_almacenes = createSqlQuery_cat_holding_03_empresas_almacenes();


	
		;

							

$tdatacat_holding_03_empresas_almacenes[".sqlquery"] = $queryData_cat_holding_03_empresas_almacenes;



$tdatacat_holding_03_empresas_almacenes[".hasEvents"] = false;

?>