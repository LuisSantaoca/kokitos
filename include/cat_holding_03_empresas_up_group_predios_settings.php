<?php
$tdatacat_holding_03_empresas_up_group_predios = array();
$tdatacat_holding_03_empresas_up_group_predios[".searchableFields"] = array();
$tdatacat_holding_03_empresas_up_group_predios[".ShortName"] = "cat_holding_03_empresas_up_group_predios";
$tdatacat_holding_03_empresas_up_group_predios[".OwnerID"] = "";
$tdatacat_holding_03_empresas_up_group_predios[".OriginalTable"] = "cat_holding_03_empresas_up_group_predios";


$tdatacat_holding_03_empresas_up_group_predios[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_holding_03_empresas_up_group_predios[".originalPagesByType"] = $tdatacat_holding_03_empresas_up_group_predios[".pagesByType"];
$tdatacat_holding_03_empresas_up_group_predios[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_holding_03_empresas_up_group_predios[".originalPages"] = $tdatacat_holding_03_empresas_up_group_predios[".pages"];
$tdatacat_holding_03_empresas_up_group_predios[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_holding_03_empresas_up_group_predios[".originalDefaultPages"] = $tdatacat_holding_03_empresas_up_group_predios[".defaultPages"];

//	field labels
$fieldLabelscat_holding_03_empresas_up_group_predios = array();
$fieldToolTipscat_holding_03_empresas_up_group_predios = array();
$pageTitlescat_holding_03_empresas_up_group_predios = array();
$placeHolderscat_holding_03_empresas_up_group_predios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_holding_03_empresas_up_group_predios["Spanish"] = array();
	$fieldToolTipscat_holding_03_empresas_up_group_predios["Spanish"] = array();
	$placeHolderscat_holding_03_empresas_up_group_predios["Spanish"] = array();
	$pageTitlescat_holding_03_empresas_up_group_predios["Spanish"] = array();
	$fieldLabelscat_holding_03_empresas_up_group_predios["Spanish"]["cat_holding_03_empresas_up_group_predios_id"] = "Id";
	$fieldToolTipscat_holding_03_empresas_up_group_predios["Spanish"]["cat_holding_03_empresas_up_group_predios_id"] = "";
	$placeHolderscat_holding_03_empresas_up_group_predios["Spanish"]["cat_holding_03_empresas_up_group_predios_id"] = "";
	$fieldLabelscat_holding_03_empresas_up_group_predios["Spanish"]["descripcion_predio"] = "Descripcion Predio";
	$fieldToolTipscat_holding_03_empresas_up_group_predios["Spanish"]["descripcion_predio"] = "";
	$placeHolderscat_holding_03_empresas_up_group_predios["Spanish"]["descripcion_predio"] = "";
	$fieldLabelscat_holding_03_empresas_up_group_predios["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_holding_03_empresas_up_group_predios["Spanish"]["vigente"] = "";
	$placeHolderscat_holding_03_empresas_up_group_predios["Spanish"]["vigente"] = "";
	$fieldLabelscat_holding_03_empresas_up_group_predios["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_holding_03_empresas_up_group_predios["Spanish"]["capturista"] = "";
	$placeHolderscat_holding_03_empresas_up_group_predios["Spanish"]["capturista"] = "";
	$fieldLabelscat_holding_03_empresas_up_group_predios["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_holding_03_empresas_up_group_predios["Spanish"]["time_stamp"] = "";
	$placeHolderscat_holding_03_empresas_up_group_predios["Spanish"]["time_stamp"] = "";
	if (count($fieldToolTipscat_holding_03_empresas_up_group_predios["Spanish"]))
		$tdatacat_holding_03_empresas_up_group_predios[".isUseToolTips"] = true;
}





$tdatacat_holding_03_empresas_up_group_predios[".shortTableName"] = "cat_holding_03_empresas_up_group_predios";
$tdatacat_holding_03_empresas_up_group_predios[".nSecOptions"] = 0;

$tdatacat_holding_03_empresas_up_group_predios[".mainTableOwnerID"] = "";
$tdatacat_holding_03_empresas_up_group_predios[".entityType"] = 0;
$tdatacat_holding_03_empresas_up_group_predios[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_holding_03_empresas_up_group_predios[".strOriginalTableName"] = "cat_holding_03_empresas_up_group_predios";

	



$tdatacat_holding_03_empresas_up_group_predios[".showAddInPopup"] = false;

$tdatacat_holding_03_empresas_up_group_predios[".showEditInPopup"] = false;

$tdatacat_holding_03_empresas_up_group_predios[".showViewInPopup"] = false;

$tdatacat_holding_03_empresas_up_group_predios[".listAjax"] = false;
//	temporary
//$tdatacat_holding_03_empresas_up_group_predios[".listAjax"] = false;

	$tdatacat_holding_03_empresas_up_group_predios[".audit"] = false;

	$tdatacat_holding_03_empresas_up_group_predios[".locking"] = false;


$pages = $tdatacat_holding_03_empresas_up_group_predios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_holding_03_empresas_up_group_predios[".edit"] = true;
	$tdatacat_holding_03_empresas_up_group_predios[".afterEditAction"] = 1;
	$tdatacat_holding_03_empresas_up_group_predios[".closePopupAfterEdit"] = 1;
	$tdatacat_holding_03_empresas_up_group_predios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_holding_03_empresas_up_group_predios[".add"] = true;
$tdatacat_holding_03_empresas_up_group_predios[".afterAddAction"] = 1;
$tdatacat_holding_03_empresas_up_group_predios[".closePopupAfterAdd"] = 1;
$tdatacat_holding_03_empresas_up_group_predios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_holding_03_empresas_up_group_predios[".list"] = true;
}



$tdatacat_holding_03_empresas_up_group_predios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_holding_03_empresas_up_group_predios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_holding_03_empresas_up_group_predios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_holding_03_empresas_up_group_predios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_holding_03_empresas_up_group_predios[".printFriendly"] = true;
}



$tdatacat_holding_03_empresas_up_group_predios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_holding_03_empresas_up_group_predios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_holding_03_empresas_up_group_predios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_holding_03_empresas_up_group_predios[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_holding_03_empresas_up_group_predios[".ajaxCodeSnippetAdded"] = false;

$tdatacat_holding_03_empresas_up_group_predios[".buttonsAdded"] = false;

$tdatacat_holding_03_empresas_up_group_predios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_holding_03_empresas_up_group_predios[".isUseTimeForSearch"] = false;


$tdatacat_holding_03_empresas_up_group_predios[".badgeColor"] = "DC143C";


$tdatacat_holding_03_empresas_up_group_predios[".allSearchFields"] = array();
$tdatacat_holding_03_empresas_up_group_predios[".filterFields"] = array();
$tdatacat_holding_03_empresas_up_group_predios[".requiredSearchFields"] = array();

$tdatacat_holding_03_empresas_up_group_predios[".googleLikeFields"] = array();
$tdatacat_holding_03_empresas_up_group_predios[".googleLikeFields"][] = "cat_holding_03_empresas_up_group_predios_id";
$tdatacat_holding_03_empresas_up_group_predios[".googleLikeFields"][] = "descripcion_predio";
$tdatacat_holding_03_empresas_up_group_predios[".googleLikeFields"][] = "vigente";
$tdatacat_holding_03_empresas_up_group_predios[".googleLikeFields"][] = "capturista";
$tdatacat_holding_03_empresas_up_group_predios[".googleLikeFields"][] = "time_stamp";



$tdatacat_holding_03_empresas_up_group_predios[".tableType"] = "list";

$tdatacat_holding_03_empresas_up_group_predios[".printerPageOrientation"] = 0;
$tdatacat_holding_03_empresas_up_group_predios[".nPrinterPageScale"] = 100;

$tdatacat_holding_03_empresas_up_group_predios[".nPrinterSplitRecords"] = 40;

$tdatacat_holding_03_empresas_up_group_predios[".geocodingEnabled"] = false;





$tdatacat_holding_03_empresas_up_group_predios[".isResizeColumns"] = true;





$tdatacat_holding_03_empresas_up_group_predios[".pageSize"] = 20;

$tdatacat_holding_03_empresas_up_group_predios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_holding_03_empresas_up_group_predios[".strOrderBy"] = $tstrOrderBy;

$tdatacat_holding_03_empresas_up_group_predios[".orderindexes"] = array();


$tdatacat_holding_03_empresas_up_group_predios[".sqlHead"] = "SELECT cat_holding_03_empresas_up_group_predios_id,  descripcion_predio,  vigente,  capturista,  time_stamp";
$tdatacat_holding_03_empresas_up_group_predios[".sqlFrom"] = "FROM cat_holding_03_empresas_up_group_predios";
$tdatacat_holding_03_empresas_up_group_predios[".sqlWhereExpr"] = "(vigente =1)";
$tdatacat_holding_03_empresas_up_group_predios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_holding_03_empresas_up_group_predios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_holding_03_empresas_up_group_predios[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_holding_03_empresas_up_group_predios[".highlightSearchResults"] = true;

$tableKeyscat_holding_03_empresas_up_group_predios = array();
$tableKeyscat_holding_03_empresas_up_group_predios[] = "cat_holding_03_empresas_up_group_predios_id";
$tdatacat_holding_03_empresas_up_group_predios[".Keys"] = $tableKeyscat_holding_03_empresas_up_group_predios;


$tdatacat_holding_03_empresas_up_group_predios[".hideMobileList"] = array();




//	cat_holding_03_empresas_up_group_predios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_holding_03_empresas_up_group_predios_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_up_group_predios_id";
	$fdata["ownerTable"] = "cat_holding_03_empresas_up_group_predios";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_up_group_predios","cat_holding_03_empresas_up_group_predios_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_holding_03_empresas_up_group_predios_id";

		$fdata["sourceSingle"] = "cat_holding_03_empresas_up_group_predios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_03_empresas_up_group_predios_id";

	
	
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


	$tdatacat_holding_03_empresas_up_group_predios["cat_holding_03_empresas_up_group_predios_id"] = $fdata;
		$tdatacat_holding_03_empresas_up_group_predios[".searchableFields"][] = "cat_holding_03_empresas_up_group_predios_id";
//	descripcion_predio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_predio";
	$fdata["GoodName"] = "descripcion_predio";
	$fdata["ownerTable"] = "cat_holding_03_empresas_up_group_predios";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_up_group_predios","descripcion_predio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_predio";

		$fdata["sourceSingle"] = "descripcion_predio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_predio";

	
	
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


	$tdatacat_holding_03_empresas_up_group_predios["descripcion_predio"] = $fdata;
		$tdatacat_holding_03_empresas_up_group_predios[".searchableFields"][] = "descripcion_predio";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_holding_03_empresas_up_group_predios";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_up_group_predios","vigente");
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


	$tdatacat_holding_03_empresas_up_group_predios["vigente"] = $fdata;
		$tdatacat_holding_03_empresas_up_group_predios[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_holding_03_empresas_up_group_predios";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_up_group_predios","capturista");
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


	$tdatacat_holding_03_empresas_up_group_predios["capturista"] = $fdata;
		$tdatacat_holding_03_empresas_up_group_predios[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_holding_03_empresas_up_group_predios";
	$fdata["Label"] = GetFieldLabel("cat_holding_03_empresas_up_group_predios","time_stamp");
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


	$tdatacat_holding_03_empresas_up_group_predios["time_stamp"] = $fdata;
		$tdatacat_holding_03_empresas_up_group_predios[".searchableFields"][] = "time_stamp";


$tables_data["cat_holding_03_empresas_up_group_predios"]=&$tdatacat_holding_03_empresas_up_group_predios;
$field_labels["cat_holding_03_empresas_up_group_predios"] = &$fieldLabelscat_holding_03_empresas_up_group_predios;
$fieldToolTips["cat_holding_03_empresas_up_group_predios"] = &$fieldToolTipscat_holding_03_empresas_up_group_predios;
$placeHolders["cat_holding_03_empresas_up_group_predios"] = &$placeHolderscat_holding_03_empresas_up_group_predios;
$page_titles["cat_holding_03_empresas_up_group_predios"] = &$pageTitlescat_holding_03_empresas_up_group_predios;


changeTextControlsToDate( "cat_holding_03_empresas_up_group_predios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_holding_03_empresas_up_group_predios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_holding_03_empresas_up_group_predios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_holding_03_empresas_up_group_predios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_holding_03_empresas_up_group_predios_id,  descripcion_predio,  vigente,  capturista,  time_stamp";
$proto0["m_strFrom"] = "FROM cat_holding_03_empresas_up_group_predios";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_holding_03_empresas_up_group_predios",
	"m_srcTableName" => "cat_holding_03_empresas_up_group_predios"
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
	"m_strName" => "cat_holding_03_empresas_up_group_predios_id",
	"m_strTable" => "cat_holding_03_empresas_up_group_predios",
	"m_srcTableName" => "cat_holding_03_empresas_up_group_predios"
));

$proto6["m_sql"] = "cat_holding_03_empresas_up_group_predios_id";
$proto6["m_srcTableName"] = "cat_holding_03_empresas_up_group_predios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_predio",
	"m_strTable" => "cat_holding_03_empresas_up_group_predios",
	"m_srcTableName" => "cat_holding_03_empresas_up_group_predios"
));

$proto8["m_sql"] = "descripcion_predio";
$proto8["m_srcTableName"] = "cat_holding_03_empresas_up_group_predios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_holding_03_empresas_up_group_predios",
	"m_srcTableName" => "cat_holding_03_empresas_up_group_predios"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_holding_03_empresas_up_group_predios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_holding_03_empresas_up_group_predios",
	"m_srcTableName" => "cat_holding_03_empresas_up_group_predios"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_holding_03_empresas_up_group_predios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_holding_03_empresas_up_group_predios",
	"m_srcTableName" => "cat_holding_03_empresas_up_group_predios"
));

$proto14["m_sql"] = "time_stamp";
$proto14["m_srcTableName"] = "cat_holding_03_empresas_up_group_predios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_holding_03_empresas_up_group_predios";
$proto17["m_srcTableName"] = "cat_holding_03_empresas_up_group_predios";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_holding_03_empresas_up_group_predios_id";
$proto17["m_columns"][] = "descripcion_predio";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_holding_03_empresas_up_group_predios";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_holding_03_empresas_up_group_predios";
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
$proto0["m_srcTableName"]="cat_holding_03_empresas_up_group_predios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_holding_03_empresas_up_group_predios = createSqlQuery_cat_holding_03_empresas_up_group_predios();


	
		;

					

$tdatacat_holding_03_empresas_up_group_predios[".sqlquery"] = $queryData_cat_holding_03_empresas_up_group_predios;



$tdatacat_holding_03_empresas_up_group_predios[".hasEvents"] = false;

?>