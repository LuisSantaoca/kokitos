<?php
$tdatacat_usuarios_02_modulos = array();
$tdatacat_usuarios_02_modulos[".searchableFields"] = array();
$tdatacat_usuarios_02_modulos[".ShortName"] = "cat_usuarios_02_modulos";
$tdatacat_usuarios_02_modulos[".OwnerID"] = "";
$tdatacat_usuarios_02_modulos[".OriginalTable"] = "cat_usuarios_02_modulos";


$tdatacat_usuarios_02_modulos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_usuarios_02_modulos[".originalPagesByType"] = $tdatacat_usuarios_02_modulos[".pagesByType"];
$tdatacat_usuarios_02_modulos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_usuarios_02_modulos[".originalPages"] = $tdatacat_usuarios_02_modulos[".pages"];
$tdatacat_usuarios_02_modulos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_usuarios_02_modulos[".originalDefaultPages"] = $tdatacat_usuarios_02_modulos[".defaultPages"];

//	field labels
$fieldLabelscat_usuarios_02_modulos = array();
$fieldToolTipscat_usuarios_02_modulos = array();
$pageTitlescat_usuarios_02_modulos = array();
$placeHolderscat_usuarios_02_modulos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_usuarios_02_modulos["Spanish"] = array();
	$fieldToolTipscat_usuarios_02_modulos["Spanish"] = array();
	$placeHolderscat_usuarios_02_modulos["Spanish"] = array();
	$pageTitlescat_usuarios_02_modulos["Spanish"] = array();
	$fieldLabelscat_usuarios_02_modulos["Spanish"]["cat_usuarios_02_modulos_id"] = " Id";
	$fieldToolTipscat_usuarios_02_modulos["Spanish"]["cat_usuarios_02_modulos_id"] = "";
	$placeHolderscat_usuarios_02_modulos["Spanish"]["cat_usuarios_02_modulos_id"] = "";
	$fieldLabelscat_usuarios_02_modulos["Spanish"]["cat_usuarios_id"] = "Usuarios";
	$fieldToolTipscat_usuarios_02_modulos["Spanish"]["cat_usuarios_id"] = "";
	$placeHolderscat_usuarios_02_modulos["Spanish"]["cat_usuarios_id"] = "";
	$fieldLabelscat_usuarios_02_modulos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_usuarios_02_modulos["Spanish"]["time_stamp"] = "";
	$placeHolderscat_usuarios_02_modulos["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_usuarios_02_modulos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_usuarios_02_modulos["Spanish"]["vigente"] = "";
	$placeHolderscat_usuarios_02_modulos["Spanish"]["vigente"] = "";
	$fieldLabelscat_usuarios_02_modulos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_usuarios_02_modulos["Spanish"]["capturista"] = "";
	$placeHolderscat_usuarios_02_modulos["Spanish"]["capturista"] = "";
	$fieldLabelscat_usuarios_02_modulos["Spanish"]["cat_usuarios_modulos_id"] = "Modulos";
	$fieldToolTipscat_usuarios_02_modulos["Spanish"]["cat_usuarios_modulos_id"] = "";
	$placeHolderscat_usuarios_02_modulos["Spanish"]["cat_usuarios_modulos_id"] = "";
	if (count($fieldToolTipscat_usuarios_02_modulos["Spanish"]))
		$tdatacat_usuarios_02_modulos[".isUseToolTips"] = true;
}





$tdatacat_usuarios_02_modulos[".shortTableName"] = "cat_usuarios_02_modulos";
$tdatacat_usuarios_02_modulos[".nSecOptions"] = 0;

$tdatacat_usuarios_02_modulos[".mainTableOwnerID"] = "";
$tdatacat_usuarios_02_modulos[".entityType"] = 0;
$tdatacat_usuarios_02_modulos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_usuarios_02_modulos[".strOriginalTableName"] = "cat_usuarios_02_modulos";

	



$tdatacat_usuarios_02_modulos[".showAddInPopup"] = false;

$tdatacat_usuarios_02_modulos[".showEditInPopup"] = false;

$tdatacat_usuarios_02_modulos[".showViewInPopup"] = false;

$tdatacat_usuarios_02_modulos[".listAjax"] = false;
//	temporary
//$tdatacat_usuarios_02_modulos[".listAjax"] = false;

	$tdatacat_usuarios_02_modulos[".audit"] = true;

	$tdatacat_usuarios_02_modulos[".locking"] = true;


$pages = $tdatacat_usuarios_02_modulos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_usuarios_02_modulos[".edit"] = true;
	$tdatacat_usuarios_02_modulos[".afterEditAction"] = 1;
	$tdatacat_usuarios_02_modulos[".closePopupAfterEdit"] = 1;
	$tdatacat_usuarios_02_modulos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_usuarios_02_modulos[".add"] = true;
$tdatacat_usuarios_02_modulos[".afterAddAction"] = 1;
$tdatacat_usuarios_02_modulos[".closePopupAfterAdd"] = 1;
$tdatacat_usuarios_02_modulos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_usuarios_02_modulos[".list"] = true;
}



$tdatacat_usuarios_02_modulos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_usuarios_02_modulos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_usuarios_02_modulos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_usuarios_02_modulos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_usuarios_02_modulos[".printFriendly"] = true;
}



$tdatacat_usuarios_02_modulos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_usuarios_02_modulos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_usuarios_02_modulos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_usuarios_02_modulos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																								

$tdatacat_usuarios_02_modulos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_usuarios_02_modulos[".buttonsAdded"] = false;

$tdatacat_usuarios_02_modulos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_usuarios_02_modulos[".isUseTimeForSearch"] = false;


$tdatacat_usuarios_02_modulos[".badgeColor"] = "9acd32";


$tdatacat_usuarios_02_modulos[".allSearchFields"] = array();
$tdatacat_usuarios_02_modulos[".filterFields"] = array();
$tdatacat_usuarios_02_modulos[".requiredSearchFields"] = array();

$tdatacat_usuarios_02_modulos[".googleLikeFields"] = array();
$tdatacat_usuarios_02_modulos[".googleLikeFields"][] = "cat_usuarios_02_modulos_id";
$tdatacat_usuarios_02_modulos[".googleLikeFields"][] = "cat_usuarios_id";
$tdatacat_usuarios_02_modulos[".googleLikeFields"][] = "time_stamp";
$tdatacat_usuarios_02_modulos[".googleLikeFields"][] = "vigente";
$tdatacat_usuarios_02_modulos[".googleLikeFields"][] = "capturista";
$tdatacat_usuarios_02_modulos[".googleLikeFields"][] = "cat_usuarios_modulos_id";



$tdatacat_usuarios_02_modulos[".tableType"] = "list";

$tdatacat_usuarios_02_modulos[".printerPageOrientation"] = 0;
$tdatacat_usuarios_02_modulos[".nPrinterPageScale"] = 100;

$tdatacat_usuarios_02_modulos[".nPrinterSplitRecords"] = 40;

$tdatacat_usuarios_02_modulos[".geocodingEnabled"] = false;





$tdatacat_usuarios_02_modulos[".isResizeColumns"] = true;





$tdatacat_usuarios_02_modulos[".pageSize"] = 20;

$tdatacat_usuarios_02_modulos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_usuarios_02_modulos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_usuarios_02_modulos[".orderindexes"] = array();


$tdatacat_usuarios_02_modulos[".sqlHead"] = "SELECT cat_usuarios_02_modulos_id,  	cat_usuarios_id,  	time_stamp,  	vigente,  	capturista,  	cat_usuarios_modulos_id";
$tdatacat_usuarios_02_modulos[".sqlFrom"] = "FROM cat_usuarios_02_modulos";
$tdatacat_usuarios_02_modulos[".sqlWhereExpr"] = "";
$tdatacat_usuarios_02_modulos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_usuarios_02_modulos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_usuarios_02_modulos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_usuarios_02_modulos[".highlightSearchResults"] = true;

$tableKeyscat_usuarios_02_modulos = array();
$tableKeyscat_usuarios_02_modulos[] = "cat_usuarios_02_modulos_id";
$tdatacat_usuarios_02_modulos[".Keys"] = $tableKeyscat_usuarios_02_modulos;


$tdatacat_usuarios_02_modulos[".hideMobileList"] = array();




//	cat_usuarios_02_modulos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_usuarios_02_modulos_id";
	$fdata["GoodName"] = "cat_usuarios_02_modulos_id";
	$fdata["ownerTable"] = "cat_usuarios_02_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_02_modulos","cat_usuarios_02_modulos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_usuarios_02_modulos_id";

		$fdata["sourceSingle"] = "cat_usuarios_02_modulos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_02_modulos_id";

	
	
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


	$tdatacat_usuarios_02_modulos["cat_usuarios_02_modulos_id"] = $fdata;
		$tdatacat_usuarios_02_modulos[".searchableFields"][] = "cat_usuarios_02_modulos_id";
//	cat_usuarios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_usuarios_id";
	$fdata["GoodName"] = "cat_usuarios_id";
	$fdata["ownerTable"] = "cat_usuarios_02_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_02_modulos","cat_usuarios_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_id";

		$fdata["sourceSingle"] = "cat_usuarios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_id";

	
	
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
	$edata["LookupTable"] = "cat_usuarios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "usuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usuario";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacat_usuarios_02_modulos["cat_usuarios_id"] = $fdata;
		$tdatacat_usuarios_02_modulos[".searchableFields"][] = "cat_usuarios_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_usuarios_02_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_02_modulos","time_stamp");
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


	$tdatacat_usuarios_02_modulos["time_stamp"] = $fdata;
		$tdatacat_usuarios_02_modulos[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_usuarios_02_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_02_modulos","vigente");
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


	$tdatacat_usuarios_02_modulos["vigente"] = $fdata;
		$tdatacat_usuarios_02_modulos[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_usuarios_02_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_02_modulos","capturista");
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


	$tdatacat_usuarios_02_modulos["capturista"] = $fdata;
		$tdatacat_usuarios_02_modulos[".searchableFields"][] = "capturista";
//	cat_usuarios_modulos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_modulos_id";
	$fdata["GoodName"] = "cat_usuarios_modulos_id";
	$fdata["ownerTable"] = "cat_usuarios_02_modulos";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_02_modulos","cat_usuarios_modulos_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_usuarios_modulos_id";

		$fdata["sourceSingle"] = "cat_usuarios_modulos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_modulos_id";

	
	
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
	$edata["LookupTable"] = "cat_usuarios_modulos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_usuarios_modulos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_modulos";

	

	
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


	$tdatacat_usuarios_02_modulos["cat_usuarios_modulos_id"] = $fdata;
		$tdatacat_usuarios_02_modulos[".searchableFields"][] = "cat_usuarios_modulos_id";


$tables_data["cat_usuarios_02_modulos"]=&$tdatacat_usuarios_02_modulos;
$field_labels["cat_usuarios_02_modulos"] = &$fieldLabelscat_usuarios_02_modulos;
$fieldToolTips["cat_usuarios_02_modulos"] = &$fieldToolTipscat_usuarios_02_modulos;
$placeHolders["cat_usuarios_02_modulos"] = &$placeHolderscat_usuarios_02_modulos;
$page_titles["cat_usuarios_02_modulos"] = &$pageTitlescat_usuarios_02_modulos;


changeTextControlsToDate( "cat_usuarios_02_modulos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_usuarios_02_modulos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_usuarios_02_modulos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cat_usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cat_usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cat_usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cat_usuarios_02_modulos"][0] = $masterParams;
				$masterTablesData["cat_usuarios_02_modulos"][0]["masterKeys"] = array();
	$masterTablesData["cat_usuarios_02_modulos"][0]["masterKeys"][]="cat_usuarios_id";
				$masterTablesData["cat_usuarios_02_modulos"][0]["detailKeys"] = array();
	$masterTablesData["cat_usuarios_02_modulos"][0]["detailKeys"][]="cat_usuarios_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_usuarios_02_modulos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_usuarios_02_modulos_id,  	cat_usuarios_id,  	time_stamp,  	vigente,  	capturista,  	cat_usuarios_modulos_id";
$proto0["m_strFrom"] = "FROM cat_usuarios_02_modulos";
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
	"m_strName" => "cat_usuarios_02_modulos_id",
	"m_strTable" => "cat_usuarios_02_modulos",
	"m_srcTableName" => "cat_usuarios_02_modulos"
));

$proto6["m_sql"] = "cat_usuarios_02_modulos_id";
$proto6["m_srcTableName"] = "cat_usuarios_02_modulos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_id",
	"m_strTable" => "cat_usuarios_02_modulos",
	"m_srcTableName" => "cat_usuarios_02_modulos"
));

$proto8["m_sql"] = "cat_usuarios_id";
$proto8["m_srcTableName"] = "cat_usuarios_02_modulos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_usuarios_02_modulos",
	"m_srcTableName" => "cat_usuarios_02_modulos"
));

$proto10["m_sql"] = "time_stamp";
$proto10["m_srcTableName"] = "cat_usuarios_02_modulos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_usuarios_02_modulos",
	"m_srcTableName" => "cat_usuarios_02_modulos"
));

$proto12["m_sql"] = "vigente";
$proto12["m_srcTableName"] = "cat_usuarios_02_modulos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_usuarios_02_modulos",
	"m_srcTableName" => "cat_usuarios_02_modulos"
));

$proto14["m_sql"] = "capturista";
$proto14["m_srcTableName"] = "cat_usuarios_02_modulos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_modulos_id",
	"m_strTable" => "cat_usuarios_02_modulos",
	"m_srcTableName" => "cat_usuarios_02_modulos"
));

$proto16["m_sql"] = "cat_usuarios_modulos_id";
$proto16["m_srcTableName"] = "cat_usuarios_02_modulos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_usuarios_02_modulos";
$proto19["m_srcTableName"] = "cat_usuarios_02_modulos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_usuarios_02_modulos_id";
$proto19["m_columns"][] = "cat_usuarios_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "cat_usuarios_modulos_id";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_usuarios_02_modulos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_usuarios_02_modulos";
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
$proto0["m_srcTableName"]="cat_usuarios_02_modulos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_usuarios_02_modulos = createSqlQuery_cat_usuarios_02_modulos();


	
		;

						

$tdatacat_usuarios_02_modulos[".sqlquery"] = $queryData_cat_usuarios_02_modulos;



include_once(getabspath("include/cat_usuarios_02_modulos_events.php"));
$tdatacat_usuarios_02_modulos[".hasEvents"] = true;

?>