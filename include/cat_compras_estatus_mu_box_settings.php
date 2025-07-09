<?php
$tdatacat_compras_estatus_mu_box = array();
$tdatacat_compras_estatus_mu_box[".searchableFields"] = array();
$tdatacat_compras_estatus_mu_box[".ShortName"] = "cat_compras_estatus_mu_box";
$tdatacat_compras_estatus_mu_box[".OwnerID"] = "";
$tdatacat_compras_estatus_mu_box[".OriginalTable"] = "cat_compras_estatus_mu";


$tdatacat_compras_estatus_mu_box[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_compras_estatus_mu_box[".originalPagesByType"] = $tdatacat_compras_estatus_mu_box[".pagesByType"];
$tdatacat_compras_estatus_mu_box[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_compras_estatus_mu_box[".originalPages"] = $tdatacat_compras_estatus_mu_box[".pages"];
$tdatacat_compras_estatus_mu_box[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_compras_estatus_mu_box[".originalDefaultPages"] = $tdatacat_compras_estatus_mu_box[".defaultPages"];

//	field labels
$fieldLabelscat_compras_estatus_mu_box = array();
$fieldToolTipscat_compras_estatus_mu_box = array();
$pageTitlescat_compras_estatus_mu_box = array();
$placeHolderscat_compras_estatus_mu_box = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_compras_estatus_mu_box["Spanish"] = array();
	$fieldToolTipscat_compras_estatus_mu_box["Spanish"] = array();
	$placeHolderscat_compras_estatus_mu_box["Spanish"] = array();
	$pageTitlescat_compras_estatus_mu_box["Spanish"] = array();
	$fieldLabelscat_compras_estatus_mu_box["Spanish"]["cat_compras_estatus_mu_id"] = "Id";
	$fieldToolTipscat_compras_estatus_mu_box["Spanish"]["cat_compras_estatus_mu_id"] = "";
	$placeHolderscat_compras_estatus_mu_box["Spanish"]["cat_compras_estatus_mu_id"] = "";
	$fieldLabelscat_compras_estatus_mu_box["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_compras_estatus_mu_box["Spanish"]["time_stamp"] = "";
	$placeHolderscat_compras_estatus_mu_box["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_compras_estatus_mu_box["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_compras_estatus_mu_box["Spanish"]["vigente"] = "";
	$placeHolderscat_compras_estatus_mu_box["Spanish"]["vigente"] = "";
	$fieldLabelscat_compras_estatus_mu_box["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_compras_estatus_mu_box["Spanish"]["capturista"] = "";
	$placeHolderscat_compras_estatus_mu_box["Spanish"]["capturista"] = "";
	$fieldLabelscat_compras_estatus_mu_box["Spanish"]["descripcion_compras_estatus_mu"] = "Descripcion";
	$fieldToolTipscat_compras_estatus_mu_box["Spanish"]["descripcion_compras_estatus_mu"] = "";
	$placeHolderscat_compras_estatus_mu_box["Spanish"]["descripcion_compras_estatus_mu"] = "";
	if (count($fieldToolTipscat_compras_estatus_mu_box["Spanish"]))
		$tdatacat_compras_estatus_mu_box[".isUseToolTips"] = true;
}





$tdatacat_compras_estatus_mu_box[".shortTableName"] = "cat_compras_estatus_mu_box";
$tdatacat_compras_estatus_mu_box[".nSecOptions"] = 0;

$tdatacat_compras_estatus_mu_box[".mainTableOwnerID"] = "";
$tdatacat_compras_estatus_mu_box[".entityType"] = 1;
$tdatacat_compras_estatus_mu_box[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_compras_estatus_mu_box[".strOriginalTableName"] = "cat_compras_estatus_mu";

	



$tdatacat_compras_estatus_mu_box[".showAddInPopup"] = false;

$tdatacat_compras_estatus_mu_box[".showEditInPopup"] = false;

$tdatacat_compras_estatus_mu_box[".showViewInPopup"] = false;

$tdatacat_compras_estatus_mu_box[".listAjax"] = false;
//	temporary
//$tdatacat_compras_estatus_mu_box[".listAjax"] = false;

	$tdatacat_compras_estatus_mu_box[".audit"] = true;

	$tdatacat_compras_estatus_mu_box[".locking"] = true;


$pages = $tdatacat_compras_estatus_mu_box[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_compras_estatus_mu_box[".edit"] = true;
	$tdatacat_compras_estatus_mu_box[".afterEditAction"] = 1;
	$tdatacat_compras_estatus_mu_box[".closePopupAfterEdit"] = 1;
	$tdatacat_compras_estatus_mu_box[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_compras_estatus_mu_box[".add"] = true;
$tdatacat_compras_estatus_mu_box[".afterAddAction"] = 1;
$tdatacat_compras_estatus_mu_box[".closePopupAfterAdd"] = 1;
$tdatacat_compras_estatus_mu_box[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_compras_estatus_mu_box[".list"] = true;
}



$tdatacat_compras_estatus_mu_box[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_compras_estatus_mu_box[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_compras_estatus_mu_box[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_compras_estatus_mu_box[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_compras_estatus_mu_box[".printFriendly"] = true;
}



$tdatacat_compras_estatus_mu_box[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_compras_estatus_mu_box[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_compras_estatus_mu_box[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_compras_estatus_mu_box[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_compras_estatus_mu_box[".ajaxCodeSnippetAdded"] = false;

$tdatacat_compras_estatus_mu_box[".buttonsAdded"] = false;

$tdatacat_compras_estatus_mu_box[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_compras_estatus_mu_box[".isUseTimeForSearch"] = false;


$tdatacat_compras_estatus_mu_box[".badgeColor"] = "D2691E";


$tdatacat_compras_estatus_mu_box[".allSearchFields"] = array();
$tdatacat_compras_estatus_mu_box[".filterFields"] = array();
$tdatacat_compras_estatus_mu_box[".requiredSearchFields"] = array();

$tdatacat_compras_estatus_mu_box[".googleLikeFields"] = array();
$tdatacat_compras_estatus_mu_box[".googleLikeFields"][] = "cat_compras_estatus_mu_id";
$tdatacat_compras_estatus_mu_box[".googleLikeFields"][] = "time_stamp";
$tdatacat_compras_estatus_mu_box[".googleLikeFields"][] = "vigente";
$tdatacat_compras_estatus_mu_box[".googleLikeFields"][] = "capturista";
$tdatacat_compras_estatus_mu_box[".googleLikeFields"][] = "descripcion_compras_estatus_mu";



$tdatacat_compras_estatus_mu_box[".tableType"] = "list";

$tdatacat_compras_estatus_mu_box[".printerPageOrientation"] = 0;
$tdatacat_compras_estatus_mu_box[".nPrinterPageScale"] = 100;

$tdatacat_compras_estatus_mu_box[".nPrinterSplitRecords"] = 40;

$tdatacat_compras_estatus_mu_box[".geocodingEnabled"] = false;





$tdatacat_compras_estatus_mu_box[".isResizeColumns"] = true;





$tdatacat_compras_estatus_mu_box[".pageSize"] = 20;

$tdatacat_compras_estatus_mu_box[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_compras_estatus_mu_box[".strOrderBy"] = $tstrOrderBy;

$tdatacat_compras_estatus_mu_box[".orderindexes"] = array();


$tdatacat_compras_estatus_mu_box[".sqlHead"] = "SELECT cat_compras_estatus_mu_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_compras_estatus_mu";
$tdatacat_compras_estatus_mu_box[".sqlFrom"] = "FROM cat_compras_estatus_mu";
$tdatacat_compras_estatus_mu_box[".sqlWhereExpr"] = "";
$tdatacat_compras_estatus_mu_box[".sqlTail"] = "";

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
$tdatacat_compras_estatus_mu_box[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_compras_estatus_mu_box[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_compras_estatus_mu_box[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_compras_estatus_mu_box[".highlightSearchResults"] = true;

$tableKeyscat_compras_estatus_mu_box = array();
$tableKeyscat_compras_estatus_mu_box[] = "cat_compras_estatus_mu_id";
$tdatacat_compras_estatus_mu_box[".Keys"] = $tableKeyscat_compras_estatus_mu_box;


$tdatacat_compras_estatus_mu_box[".hideMobileList"] = array();




//	cat_compras_estatus_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_estatus_mu_id";
	$fdata["GoodName"] = "cat_compras_estatus_mu_id";
	$fdata["ownerTable"] = "cat_compras_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_estatus_mu_box","cat_compras_estatus_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_estatus_mu_id";

		$fdata["sourceSingle"] = "cat_compras_estatus_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_estatus_mu_id";

	
	
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


	$tdatacat_compras_estatus_mu_box["cat_compras_estatus_mu_id"] = $fdata;
		$tdatacat_compras_estatus_mu_box[".searchableFields"][] = "cat_compras_estatus_mu_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_compras_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_estatus_mu_box","time_stamp");
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


	$tdatacat_compras_estatus_mu_box["time_stamp"] = $fdata;
		$tdatacat_compras_estatus_mu_box[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_estatus_mu_box","vigente");
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


	$tdatacat_compras_estatus_mu_box["vigente"] = $fdata;
		$tdatacat_compras_estatus_mu_box[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_estatus_mu_box","capturista");
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


	$tdatacat_compras_estatus_mu_box["capturista"] = $fdata;
		$tdatacat_compras_estatus_mu_box[".searchableFields"][] = "capturista";
//	descripcion_compras_estatus_mu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_compras_estatus_mu";
	$fdata["GoodName"] = "descripcion_compras_estatus_mu";
	$fdata["ownerTable"] = "cat_compras_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_estatus_mu_box","descripcion_compras_estatus_mu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_compras_estatus_mu";

		$fdata["sourceSingle"] = "descripcion_compras_estatus_mu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_compras_estatus_mu";

	
	
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


	$tdatacat_compras_estatus_mu_box["descripcion_compras_estatus_mu"] = $fdata;
		$tdatacat_compras_estatus_mu_box[".searchableFields"][] = "descripcion_compras_estatus_mu";


$tables_data["cat_compras_estatus_mu_box"]=&$tdatacat_compras_estatus_mu_box;
$field_labels["cat_compras_estatus_mu_box"] = &$fieldLabelscat_compras_estatus_mu_box;
$fieldToolTips["cat_compras_estatus_mu_box"] = &$fieldToolTipscat_compras_estatus_mu_box;
$placeHolders["cat_compras_estatus_mu_box"] = &$placeHolderscat_compras_estatus_mu_box;
$page_titles["cat_compras_estatus_mu_box"] = &$pageTitlescat_compras_estatus_mu_box;


changeTextControlsToDate( "cat_compras_estatus_mu_box" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_compras_estatus_mu_box"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_compras_estatus_mu_box"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_compras_estatus_mu_box()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_estatus_mu_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_compras_estatus_mu";
$proto0["m_strFrom"] = "FROM cat_compras_estatus_mu";
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
	"m_strName" => "cat_compras_estatus_mu_id",
	"m_strTable" => "cat_compras_estatus_mu",
	"m_srcTableName" => "cat_compras_estatus_mu_box"
));

$proto6["m_sql"] = "cat_compras_estatus_mu_id";
$proto6["m_srcTableName"] = "cat_compras_estatus_mu_box";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_compras_estatus_mu",
	"m_srcTableName" => "cat_compras_estatus_mu_box"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_compras_estatus_mu_box";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_estatus_mu",
	"m_srcTableName" => "cat_compras_estatus_mu_box"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_compras_estatus_mu_box";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_estatus_mu",
	"m_srcTableName" => "cat_compras_estatus_mu_box"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_compras_estatus_mu_box";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_compras_estatus_mu",
	"m_strTable" => "cat_compras_estatus_mu",
	"m_srcTableName" => "cat_compras_estatus_mu_box"
));

$proto14["m_sql"] = "descripcion_compras_estatus_mu";
$proto14["m_srcTableName"] = "cat_compras_estatus_mu_box";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_compras_estatus_mu";
$proto17["m_srcTableName"] = "cat_compras_estatus_mu_box";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_compras_estatus_mu_id";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "descripcion_compras_estatus_mu";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_compras_estatus_mu";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_compras_estatus_mu_box";
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
$proto0["m_srcTableName"]="cat_compras_estatus_mu_box";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_compras_estatus_mu_box = createSqlQuery_cat_compras_estatus_mu_box();


	
		;

					

$tdatacat_compras_estatus_mu_box[".sqlquery"] = $queryData_cat_compras_estatus_mu_box;



$tdatacat_compras_estatus_mu_box[".hasEvents"] = false;

?>