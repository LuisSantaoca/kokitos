<?php
$tdatatr_menu_noticias1 = array();
$tdatatr_menu_noticias1[".searchableFields"] = array();
$tdatatr_menu_noticias1[".ShortName"] = "tr_menu_noticias1";
$tdatatr_menu_noticias1[".OwnerID"] = "";
$tdatatr_menu_noticias1[".OriginalTable"] = "tr_menu_noticias";


$tdatatr_menu_noticias1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_menu_noticias1[".originalPagesByType"] = $tdatatr_menu_noticias1[".pagesByType"];
$tdatatr_menu_noticias1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_menu_noticias1[".originalPages"] = $tdatatr_menu_noticias1[".pages"];
$tdatatr_menu_noticias1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_menu_noticias1[".originalDefaultPages"] = $tdatatr_menu_noticias1[".defaultPages"];

//	field labels
$fieldLabelstr_menu_noticias1 = array();
$fieldToolTipstr_menu_noticias1 = array();
$pageTitlestr_menu_noticias1 = array();
$placeHolderstr_menu_noticias1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_menu_noticias1["Spanish"] = array();
	$fieldToolTipstr_menu_noticias1["Spanish"] = array();
	$placeHolderstr_menu_noticias1["Spanish"] = array();
	$pageTitlestr_menu_noticias1["Spanish"] = array();
	$fieldLabelstr_menu_noticias1["Spanish"]["tr_noticias"] = "id";
	$fieldToolTipstr_menu_noticias1["Spanish"]["tr_noticias"] = "";
	$placeHolderstr_menu_noticias1["Spanish"]["tr_noticias"] = "";
	$fieldLabelstr_menu_noticias1["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstr_menu_noticias1["Spanish"]["fecha"] = "";
	$placeHolderstr_menu_noticias1["Spanish"]["fecha"] = "";
	$fieldLabelstr_menu_noticias1["Spanish"]["noticia"] = "Noticia";
	$fieldToolTipstr_menu_noticias1["Spanish"]["noticia"] = "";
	$placeHolderstr_menu_noticias1["Spanish"]["noticia"] = "";
	$fieldLabelstr_menu_noticias1["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_menu_noticias1["Spanish"]["vigente"] = "";
	$placeHolderstr_menu_noticias1["Spanish"]["vigente"] = "";
	$fieldLabelstr_menu_noticias1["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_menu_noticias1["Spanish"]["capturista"] = "";
	$placeHolderstr_menu_noticias1["Spanish"]["capturista"] = "";
	$fieldLabelstr_menu_noticias1["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_menu_noticias1["Spanish"]["time_stamp"] = "";
	$placeHolderstr_menu_noticias1["Spanish"]["time_stamp"] = "";
	if (count($fieldToolTipstr_menu_noticias1["Spanish"]))
		$tdatatr_menu_noticias1[".isUseToolTips"] = true;
}





$tdatatr_menu_noticias1[".shortTableName"] = "tr_menu_noticias1";
$tdatatr_menu_noticias1[".nSecOptions"] = 0;

$tdatatr_menu_noticias1[".mainTableOwnerID"] = "";
$tdatatr_menu_noticias1[".entityType"] = 0;
$tdatatr_menu_noticias1[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_menu_noticias1[".strOriginalTableName"] = "tr_menu_noticias";

	



$tdatatr_menu_noticias1[".showAddInPopup"] = false;

$tdatatr_menu_noticias1[".showEditInPopup"] = false;

$tdatatr_menu_noticias1[".showViewInPopup"] = false;

$tdatatr_menu_noticias1[".listAjax"] = false;
//	temporary
//$tdatatr_menu_noticias1[".listAjax"] = false;

	$tdatatr_menu_noticias1[".audit"] = false;

	$tdatatr_menu_noticias1[".locking"] = false;


$pages = $tdatatr_menu_noticias1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_menu_noticias1[".edit"] = true;
	$tdatatr_menu_noticias1[".afterEditAction"] = 1;
	$tdatatr_menu_noticias1[".closePopupAfterEdit"] = 1;
	$tdatatr_menu_noticias1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_menu_noticias1[".add"] = true;
$tdatatr_menu_noticias1[".afterAddAction"] = 1;
$tdatatr_menu_noticias1[".closePopupAfterAdd"] = 1;
$tdatatr_menu_noticias1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_menu_noticias1[".list"] = true;
}



$tdatatr_menu_noticias1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_menu_noticias1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_menu_noticias1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_menu_noticias1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_menu_noticias1[".printFriendly"] = true;
}



$tdatatr_menu_noticias1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_menu_noticias1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_menu_noticias1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_menu_noticias1[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_menu_noticias1[".ajaxCodeSnippetAdded"] = false;

$tdatatr_menu_noticias1[".buttonsAdded"] = false;

$tdatatr_menu_noticias1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_menu_noticias1[".isUseTimeForSearch"] = false;


$tdatatr_menu_noticias1[".badgeColor"] = "6DA5C8";


$tdatatr_menu_noticias1[".allSearchFields"] = array();
$tdatatr_menu_noticias1[".filterFields"] = array();
$tdatatr_menu_noticias1[".requiredSearchFields"] = array();

$tdatatr_menu_noticias1[".googleLikeFields"] = array();
$tdatatr_menu_noticias1[".googleLikeFields"][] = "tr_noticias";
$tdatatr_menu_noticias1[".googleLikeFields"][] = "fecha";
$tdatatr_menu_noticias1[".googleLikeFields"][] = "noticia";
$tdatatr_menu_noticias1[".googleLikeFields"][] = "vigente";
$tdatatr_menu_noticias1[".googleLikeFields"][] = "capturista";
$tdatatr_menu_noticias1[".googleLikeFields"][] = "time_stamp";



$tdatatr_menu_noticias1[".tableType"] = "list";

$tdatatr_menu_noticias1[".printerPageOrientation"] = 0;
$tdatatr_menu_noticias1[".nPrinterPageScale"] = 100;

$tdatatr_menu_noticias1[".nPrinterSplitRecords"] = 40;

$tdatatr_menu_noticias1[".geocodingEnabled"] = false;





$tdatatr_menu_noticias1[".isResizeColumns"] = true;





$tdatatr_menu_noticias1[".pageSize"] = 20;

$tdatatr_menu_noticias1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_menu_noticias1[".strOrderBy"] = $tstrOrderBy;

$tdatatr_menu_noticias1[".orderindexes"] = array();


$tdatatr_menu_noticias1[".sqlHead"] = "SELECT tr_noticias,  	fecha,  	noticia,  	vigente,  	capturista,  	time_stamp";
$tdatatr_menu_noticias1[".sqlFrom"] = "FROM tr_menu_noticias";
$tdatatr_menu_noticias1[".sqlWhereExpr"] = "";
$tdatatr_menu_noticias1[".sqlTail"] = "";

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
$tdatatr_menu_noticias1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_menu_noticias1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_menu_noticias1[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_menu_noticias1[".highlightSearchResults"] = true;

$tableKeystr_menu_noticias1 = array();
$tableKeystr_menu_noticias1[] = "tr_noticias";
$tdatatr_menu_noticias1[".Keys"] = $tableKeystr_menu_noticias1;


$tdatatr_menu_noticias1[".hideMobileList"] = array();




//	tr_noticias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_noticias";
	$fdata["GoodName"] = "tr_noticias";
	$fdata["ownerTable"] = "tr_menu_noticias";
	$fdata["Label"] = GetFieldLabel("tr_menu_noticias","tr_noticias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tr_noticias";

		$fdata["sourceSingle"] = "tr_noticias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_noticias";

	
	
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


	$tdatatr_menu_noticias1["tr_noticias"] = $fdata;
		$tdatatr_menu_noticias1[".searchableFields"][] = "tr_noticias";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "tr_menu_noticias";
	$fdata["Label"] = GetFieldLabel("tr_menu_noticias","fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatr_menu_noticias1["fecha"] = $fdata;
		$tdatatr_menu_noticias1[".searchableFields"][] = "fecha";
//	noticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "noticia";
	$fdata["GoodName"] = "noticia";
	$fdata["ownerTable"] = "tr_menu_noticias";
	$fdata["Label"] = GetFieldLabel("tr_menu_noticias","noticia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "noticia";

		$fdata["sourceSingle"] = "noticia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noticia";

	
	
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


	$tdatatr_menu_noticias1["noticia"] = $fdata;
		$tdatatr_menu_noticias1[".searchableFields"][] = "noticia";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_menu_noticias";
	$fdata["Label"] = GetFieldLabel("tr_menu_noticias","vigente");
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


	$tdatatr_menu_noticias1["vigente"] = $fdata;
		$tdatatr_menu_noticias1[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_menu_noticias";
	$fdata["Label"] = GetFieldLabel("tr_menu_noticias","capturista");
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


	$tdatatr_menu_noticias1["capturista"] = $fdata;
		$tdatatr_menu_noticias1[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_menu_noticias";
	$fdata["Label"] = GetFieldLabel("tr_menu_noticias","time_stamp");
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


	$tdatatr_menu_noticias1["time_stamp"] = $fdata;
		$tdatatr_menu_noticias1[".searchableFields"][] = "time_stamp";


$tables_data["tr_menu_noticias"]=&$tdatatr_menu_noticias1;
$field_labels["tr_menu_noticias"] = &$fieldLabelstr_menu_noticias1;
$fieldToolTips["tr_menu_noticias"] = &$fieldToolTipstr_menu_noticias1;
$placeHolders["tr_menu_noticias"] = &$placeHolderstr_menu_noticias1;
$page_titles["tr_menu_noticias"] = &$pageTitlestr_menu_noticias1;


changeTextControlsToDate( "tr_menu_noticias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_menu_noticias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_menu_noticias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_menu_noticias1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_noticias,  	fecha,  	noticia,  	vigente,  	capturista,  	time_stamp";
$proto0["m_strFrom"] = "FROM tr_menu_noticias";
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
	"m_strName" => "tr_noticias",
	"m_strTable" => "tr_menu_noticias",
	"m_srcTableName" => "tr_menu_noticias"
));

$proto6["m_sql"] = "tr_noticias";
$proto6["m_srcTableName"] = "tr_menu_noticias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "tr_menu_noticias",
	"m_srcTableName" => "tr_menu_noticias"
));

$proto8["m_sql"] = "fecha";
$proto8["m_srcTableName"] = "tr_menu_noticias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "noticia",
	"m_strTable" => "tr_menu_noticias",
	"m_srcTableName" => "tr_menu_noticias"
));

$proto10["m_sql"] = "noticia";
$proto10["m_srcTableName"] = "tr_menu_noticias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_menu_noticias",
	"m_srcTableName" => "tr_menu_noticias"
));

$proto12["m_sql"] = "vigente";
$proto12["m_srcTableName"] = "tr_menu_noticias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_menu_noticias",
	"m_srcTableName" => "tr_menu_noticias"
));

$proto14["m_sql"] = "capturista";
$proto14["m_srcTableName"] = "tr_menu_noticias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_menu_noticias",
	"m_srcTableName" => "tr_menu_noticias"
));

$proto16["m_sql"] = "time_stamp";
$proto16["m_srcTableName"] = "tr_menu_noticias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tr_menu_noticias";
$proto19["m_srcTableName"] = "tr_menu_noticias";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "tr_noticias";
$proto19["m_columns"][] = "fecha";
$proto19["m_columns"][] = "noticia";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tr_menu_noticias";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tr_menu_noticias";
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
$proto0["m_srcTableName"]="tr_menu_noticias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_menu_noticias1 = createSqlQuery_tr_menu_noticias1();


	
		;

						

$tdatatr_menu_noticias1[".sqlquery"] = $queryData_tr_menu_noticias1;



$tdatatr_menu_noticias1[".hasEvents"] = false;

?>