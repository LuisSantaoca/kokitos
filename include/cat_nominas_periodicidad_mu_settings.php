<?php
$tdatacat_nominas_periodicidad_mu = array();
$tdatacat_nominas_periodicidad_mu[".searchableFields"] = array();
$tdatacat_nominas_periodicidad_mu[".ShortName"] = "cat_nominas_periodicidad_mu";
$tdatacat_nominas_periodicidad_mu[".OwnerID"] = "";
$tdatacat_nominas_periodicidad_mu[".OriginalTable"] = "cat_nominas_periodicidad_mu";


$tdatacat_nominas_periodicidad_mu[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacat_nominas_periodicidad_mu[".originalPagesByType"] = $tdatacat_nominas_periodicidad_mu[".pagesByType"];
$tdatacat_nominas_periodicidad_mu[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacat_nominas_periodicidad_mu[".originalPages"] = $tdatacat_nominas_periodicidad_mu[".pages"];
$tdatacat_nominas_periodicidad_mu[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacat_nominas_periodicidad_mu[".originalDefaultPages"] = $tdatacat_nominas_periodicidad_mu[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_periodicidad_mu = array();
$fieldToolTipscat_nominas_periodicidad_mu = array();
$pageTitlescat_nominas_periodicidad_mu = array();
$placeHolderscat_nominas_periodicidad_mu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_periodicidad_mu["Spanish"] = array();
	$fieldToolTipscat_nominas_periodicidad_mu["Spanish"] = array();
	$placeHolderscat_nominas_periodicidad_mu["Spanish"] = array();
	$pageTitlescat_nominas_periodicidad_mu["Spanish"] = array();
	$fieldLabelscat_nominas_periodicidad_mu["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_periodicidad_mu["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_periodicidad_mu["Spanish"]["vigente"] = "";
	$fieldLabelscat_nominas_periodicidad_mu["Spanish"]["descripcion_periodicidad"] = "Descripcion Periodicidad";
	$fieldToolTipscat_nominas_periodicidad_mu["Spanish"]["descripcion_periodicidad"] = "";
	$placeHolderscat_nominas_periodicidad_mu["Spanish"]["descripcion_periodicidad"] = "";
	$fieldLabelscat_nominas_periodicidad_mu["Spanish"]["cat_nominas_periodicidad_mu_id"] = "Cat Nominas Periodicidad Mu Id";
	$fieldToolTipscat_nominas_periodicidad_mu["Spanish"]["cat_nominas_periodicidad_mu_id"] = "";
	$placeHolderscat_nominas_periodicidad_mu["Spanish"]["cat_nominas_periodicidad_mu_id"] = "";
	$fieldLabelscat_nominas_periodicidad_mu["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_periodicidad_mu["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_periodicidad_mu["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_periodicidad_mu["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_periodicidad_mu["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_periodicidad_mu["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_nominas_periodicidad_mu["Spanish"]["intervalo"] = "Intervalo";
	$fieldToolTipscat_nominas_periodicidad_mu["Spanish"]["intervalo"] = "";
	$placeHolderscat_nominas_periodicidad_mu["Spanish"]["intervalo"] = "";
	if (count($fieldToolTipscat_nominas_periodicidad_mu["Spanish"]))
		$tdatacat_nominas_periodicidad_mu[".isUseToolTips"] = true;
}





$tdatacat_nominas_periodicidad_mu[".shortTableName"] = "cat_nominas_periodicidad_mu";
$tdatacat_nominas_periodicidad_mu[".nSecOptions"] = 0;

$tdatacat_nominas_periodicidad_mu[".mainTableOwnerID"] = "";
$tdatacat_nominas_periodicidad_mu[".entityType"] = 0;
$tdatacat_nominas_periodicidad_mu[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_periodicidad_mu[".strOriginalTableName"] = "cat_nominas_periodicidad_mu";

	



$tdatacat_nominas_periodicidad_mu[".showAddInPopup"] = false;

$tdatacat_nominas_periodicidad_mu[".showEditInPopup"] = false;

$tdatacat_nominas_periodicidad_mu[".showViewInPopup"] = false;

$tdatacat_nominas_periodicidad_mu[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_periodicidad_mu[".listAjax"] = false;

	$tdatacat_nominas_periodicidad_mu[".audit"] = false;

	$tdatacat_nominas_periodicidad_mu[".locking"] = false;


$pages = $tdatacat_nominas_periodicidad_mu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_periodicidad_mu[".edit"] = true;
	$tdatacat_nominas_periodicidad_mu[".afterEditAction"] = 1;
	$tdatacat_nominas_periodicidad_mu[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_periodicidad_mu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_periodicidad_mu[".add"] = true;
$tdatacat_nominas_periodicidad_mu[".afterAddAction"] = 1;
$tdatacat_nominas_periodicidad_mu[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_periodicidad_mu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_periodicidad_mu[".list"] = true;
}



$tdatacat_nominas_periodicidad_mu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_periodicidad_mu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_periodicidad_mu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_periodicidad_mu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_periodicidad_mu[".printFriendly"] = true;
}



$tdatacat_nominas_periodicidad_mu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_periodicidad_mu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_periodicidad_mu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_periodicidad_mu[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_periodicidad_mu[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_periodicidad_mu[".buttonsAdded"] = false;

$tdatacat_nominas_periodicidad_mu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_periodicidad_mu[".isUseTimeForSearch"] = false;


$tdatacat_nominas_periodicidad_mu[".badgeColor"] = "6B8E23";


$tdatacat_nominas_periodicidad_mu[".allSearchFields"] = array();
$tdatacat_nominas_periodicidad_mu[".filterFields"] = array();
$tdatacat_nominas_periodicidad_mu[".requiredSearchFields"] = array();

$tdatacat_nominas_periodicidad_mu[".googleLikeFields"] = array();
$tdatacat_nominas_periodicidad_mu[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_periodicidad_mu[".googleLikeFields"][] = "descripcion_periodicidad";
$tdatacat_nominas_periodicidad_mu[".googleLikeFields"][] = "intervalo";
$tdatacat_nominas_periodicidad_mu[".googleLikeFields"][] = "cat_nominas_periodicidad_mu_id";
$tdatacat_nominas_periodicidad_mu[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_periodicidad_mu[".googleLikeFields"][] = "time_stamp";



$tdatacat_nominas_periodicidad_mu[".tableType"] = "list";

$tdatacat_nominas_periodicidad_mu[".printerPageOrientation"] = 0;
$tdatacat_nominas_periodicidad_mu[".nPrinterPageScale"] = 100;

$tdatacat_nominas_periodicidad_mu[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_periodicidad_mu[".geocodingEnabled"] = false;





$tdatacat_nominas_periodicidad_mu[".isResizeColumns"] = true;





$tdatacat_nominas_periodicidad_mu[".pageSize"] = 20;

$tdatacat_nominas_periodicidad_mu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_periodicidad_mu[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_periodicidad_mu[".orderindexes"] = array();


$tdatacat_nominas_periodicidad_mu[".sqlHead"] = "SELECT vigente,  	descripcion_periodicidad,  	intervalo,  	cat_nominas_periodicidad_mu_id,  	capturista,  	time_stamp";
$tdatacat_nominas_periodicidad_mu[".sqlFrom"] = "FROM cat_nominas_periodicidad_mu";
$tdatacat_nominas_periodicidad_mu[".sqlWhereExpr"] = "";
$tdatacat_nominas_periodicidad_mu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_periodicidad_mu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_periodicidad_mu[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_periodicidad_mu[".highlightSearchResults"] = true;

$tableKeyscat_nominas_periodicidad_mu = array();
$tableKeyscat_nominas_periodicidad_mu[] = "cat_nominas_periodicidad_mu_id";
$tdatacat_nominas_periodicidad_mu[".Keys"] = $tableKeyscat_nominas_periodicidad_mu;


$tdatacat_nominas_periodicidad_mu[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_periodicidad_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_periodicidad_mu","vigente");
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


	$tdatacat_nominas_periodicidad_mu["vigente"] = $fdata;
		$tdatacat_nominas_periodicidad_mu[".searchableFields"][] = "vigente";
//	descripcion_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_periodicidad";
	$fdata["GoodName"] = "descripcion_periodicidad";
	$fdata["ownerTable"] = "cat_nominas_periodicidad_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_periodicidad_mu","descripcion_periodicidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_periodicidad";

		$fdata["sourceSingle"] = "descripcion_periodicidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_periodicidad";

	
	
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


	$tdatacat_nominas_periodicidad_mu["descripcion_periodicidad"] = $fdata;
		$tdatacat_nominas_periodicidad_mu[".searchableFields"][] = "descripcion_periodicidad";
//	intervalo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "intervalo";
	$fdata["GoodName"] = "intervalo";
	$fdata["ownerTable"] = "cat_nominas_periodicidad_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_periodicidad_mu","intervalo");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "intervalo";

		$fdata["sourceSingle"] = "intervalo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "intervalo";

	
	
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


	$tdatacat_nominas_periodicidad_mu["intervalo"] = $fdata;
		$tdatacat_nominas_periodicidad_mu[".searchableFields"][] = "intervalo";
//	cat_nominas_periodicidad_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_nominas_periodicidad_mu_id";
	$fdata["GoodName"] = "cat_nominas_periodicidad_mu_id";
	$fdata["ownerTable"] = "cat_nominas_periodicidad_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_periodicidad_mu","cat_nominas_periodicidad_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_periodicidad_mu_id";

		$fdata["sourceSingle"] = "cat_nominas_periodicidad_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_periodicidad_mu_id";

	
	
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


	$tdatacat_nominas_periodicidad_mu["cat_nominas_periodicidad_mu_id"] = $fdata;
		$tdatacat_nominas_periodicidad_mu[".searchableFields"][] = "cat_nominas_periodicidad_mu_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_periodicidad_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_periodicidad_mu","capturista");
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


	$tdatacat_nominas_periodicidad_mu["capturista"] = $fdata;
		$tdatacat_nominas_periodicidad_mu[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_periodicidad_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_periodicidad_mu","time_stamp");
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


	$tdatacat_nominas_periodicidad_mu["time_stamp"] = $fdata;
		$tdatacat_nominas_periodicidad_mu[".searchableFields"][] = "time_stamp";


$tables_data["cat_nominas_periodicidad_mu"]=&$tdatacat_nominas_periodicidad_mu;
$field_labels["cat_nominas_periodicidad_mu"] = &$fieldLabelscat_nominas_periodicidad_mu;
$fieldToolTips["cat_nominas_periodicidad_mu"] = &$fieldToolTipscat_nominas_periodicidad_mu;
$placeHolders["cat_nominas_periodicidad_mu"] = &$placeHolderscat_nominas_periodicidad_mu;
$page_titles["cat_nominas_periodicidad_mu"] = &$pageTitlescat_nominas_periodicidad_mu;


changeTextControlsToDate( "cat_nominas_periodicidad_mu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_periodicidad_mu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_periodicidad_mu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_periodicidad_mu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigente,  	descripcion_periodicidad,  	intervalo,  	cat_nominas_periodicidad_mu_id,  	capturista,  	time_stamp";
$proto0["m_strFrom"] = "FROM cat_nominas_periodicidad_mu";
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
	"m_strName" => "vigente",
	"m_strTable" => "cat_nominas_periodicidad_mu",
	"m_srcTableName" => "cat_nominas_periodicidad_mu"
));

$proto6["m_sql"] = "vigente";
$proto6["m_srcTableName"] = "cat_nominas_periodicidad_mu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_periodicidad",
	"m_strTable" => "cat_nominas_periodicidad_mu",
	"m_srcTableName" => "cat_nominas_periodicidad_mu"
));

$proto8["m_sql"] = "descripcion_periodicidad";
$proto8["m_srcTableName"] = "cat_nominas_periodicidad_mu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "intervalo",
	"m_strTable" => "cat_nominas_periodicidad_mu",
	"m_srcTableName" => "cat_nominas_periodicidad_mu"
));

$proto10["m_sql"] = "intervalo";
$proto10["m_srcTableName"] = "cat_nominas_periodicidad_mu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_periodicidad_mu_id",
	"m_strTable" => "cat_nominas_periodicidad_mu",
	"m_srcTableName" => "cat_nominas_periodicidad_mu"
));

$proto12["m_sql"] = "cat_nominas_periodicidad_mu_id";
$proto12["m_srcTableName"] = "cat_nominas_periodicidad_mu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_periodicidad_mu",
	"m_srcTableName" => "cat_nominas_periodicidad_mu"
));

$proto14["m_sql"] = "capturista";
$proto14["m_srcTableName"] = "cat_nominas_periodicidad_mu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_periodicidad_mu",
	"m_srcTableName" => "cat_nominas_periodicidad_mu"
));

$proto16["m_sql"] = "time_stamp";
$proto16["m_srcTableName"] = "cat_nominas_periodicidad_mu";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_nominas_periodicidad_mu";
$proto19["m_srcTableName"] = "cat_nominas_periodicidad_mu";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "descripcion_periodicidad";
$proto19["m_columns"][] = "intervalo";
$proto19["m_columns"][] = "cat_nominas_periodicidad_mu_id";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_nominas_periodicidad_mu";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_nominas_periodicidad_mu";
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
$proto0["m_srcTableName"]="cat_nominas_periodicidad_mu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_periodicidad_mu = createSqlQuery_cat_nominas_periodicidad_mu();


	
		;

						

$tdatacat_nominas_periodicidad_mu[".sqlquery"] = $queryData_cat_nominas_periodicidad_mu;



$tdatacat_nominas_periodicidad_mu[".hasEvents"] = false;

?>