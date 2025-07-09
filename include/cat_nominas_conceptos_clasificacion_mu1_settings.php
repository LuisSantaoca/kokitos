<?php
$tdatacat_nominas_conceptos_clasificacion_mu1 = array();
$tdatacat_nominas_conceptos_clasificacion_mu1[".searchableFields"] = array();
$tdatacat_nominas_conceptos_clasificacion_mu1[".ShortName"] = "cat_nominas_conceptos_clasificacion_mu1";
$tdatacat_nominas_conceptos_clasificacion_mu1[".OwnerID"] = "";
$tdatacat_nominas_conceptos_clasificacion_mu1[".OriginalTable"] = "cat_nominas_conceptos_clasificacion_mu";


$tdatacat_nominas_conceptos_clasificacion_mu1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_conceptos_clasificacion_mu1[".originalPagesByType"] = $tdatacat_nominas_conceptos_clasificacion_mu1[".pagesByType"];
$tdatacat_nominas_conceptos_clasificacion_mu1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_conceptos_clasificacion_mu1[".originalPages"] = $tdatacat_nominas_conceptos_clasificacion_mu1[".pages"];
$tdatacat_nominas_conceptos_clasificacion_mu1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_nominas_conceptos_clasificacion_mu1[".originalDefaultPages"] = $tdatacat_nominas_conceptos_clasificacion_mu1[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_conceptos_clasificacion_mu1 = array();
$fieldToolTipscat_nominas_conceptos_clasificacion_mu1 = array();
$pageTitlescat_nominas_conceptos_clasificacion_mu1 = array();
$placeHolderscat_nominas_conceptos_clasificacion_mu1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_conceptos_clasificacion_mu1["Spanish"] = array();
	$fieldToolTipscat_nominas_conceptos_clasificacion_mu1["Spanish"] = array();
	$placeHolderscat_nominas_conceptos_clasificacion_mu1["Spanish"] = array();
	$pageTitlescat_nominas_conceptos_clasificacion_mu1["Spanish"] = array();
	$fieldLabelscat_nominas_conceptos_clasificacion_mu1["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_conceptos_clasificacion_mu1["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_conceptos_clasificacion_mu1["Spanish"]["vigente"] = "";
	$fieldLabelscat_nominas_conceptos_clasificacion_mu1["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_conceptos_clasificacion_mu1["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_conceptos_clasificacion_mu1["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_conceptos_clasificacion_mu1["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_conceptos_clasificacion_mu1["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_conceptos_clasificacion_mu1["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_nominas_conceptos_clasificacion_mu1["Spanish"]["descripcion_nominas_conceptos_clasificacion"] = "Descripcion";
	$fieldToolTipscat_nominas_conceptos_clasificacion_mu1["Spanish"]["descripcion_nominas_conceptos_clasificacion"] = "";
	$placeHolderscat_nominas_conceptos_clasificacion_mu1["Spanish"]["descripcion_nominas_conceptos_clasificacion"] = "";
	$fieldLabelscat_nominas_conceptos_clasificacion_mu1["Spanish"]["cat_nominas_conceptos_clasificacion_mu_id"] = "Id";
	$fieldToolTipscat_nominas_conceptos_clasificacion_mu1["Spanish"]["cat_nominas_conceptos_clasificacion_mu_id"] = "";
	$placeHolderscat_nominas_conceptos_clasificacion_mu1["Spanish"]["cat_nominas_conceptos_clasificacion_mu_id"] = "";
	$fieldLabelscat_nominas_conceptos_clasificacion_mu1["Spanish"]["filtro_sueldos"] = "Filtro Sueldos";
	$fieldToolTipscat_nominas_conceptos_clasificacion_mu1["Spanish"]["filtro_sueldos"] = "";
	$placeHolderscat_nominas_conceptos_clasificacion_mu1["Spanish"]["filtro_sueldos"] = "";
	if (count($fieldToolTipscat_nominas_conceptos_clasificacion_mu1["Spanish"]))
		$tdatacat_nominas_conceptos_clasificacion_mu1[".isUseToolTips"] = true;
}





$tdatacat_nominas_conceptos_clasificacion_mu1[".shortTableName"] = "cat_nominas_conceptos_clasificacion_mu1";
$tdatacat_nominas_conceptos_clasificacion_mu1[".nSecOptions"] = 0;

$tdatacat_nominas_conceptos_clasificacion_mu1[".mainTableOwnerID"] = "";
$tdatacat_nominas_conceptos_clasificacion_mu1[".entityType"] = 0;
$tdatacat_nominas_conceptos_clasificacion_mu1[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_conceptos_clasificacion_mu1[".strOriginalTableName"] = "cat_nominas_conceptos_clasificacion_mu";

	



$tdatacat_nominas_conceptos_clasificacion_mu1[".showAddInPopup"] = false;

$tdatacat_nominas_conceptos_clasificacion_mu1[".showEditInPopup"] = false;

$tdatacat_nominas_conceptos_clasificacion_mu1[".showViewInPopup"] = false;

$tdatacat_nominas_conceptos_clasificacion_mu1[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_conceptos_clasificacion_mu1[".listAjax"] = false;

	$tdatacat_nominas_conceptos_clasificacion_mu1[".audit"] = false;

	$tdatacat_nominas_conceptos_clasificacion_mu1[".locking"] = false;


$pages = $tdatacat_nominas_conceptos_clasificacion_mu1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_conceptos_clasificacion_mu1[".edit"] = true;
	$tdatacat_nominas_conceptos_clasificacion_mu1[".afterEditAction"] = 1;
	$tdatacat_nominas_conceptos_clasificacion_mu1[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_conceptos_clasificacion_mu1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_conceptos_clasificacion_mu1[".add"] = true;
$tdatacat_nominas_conceptos_clasificacion_mu1[".afterAddAction"] = 1;
$tdatacat_nominas_conceptos_clasificacion_mu1[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_conceptos_clasificacion_mu1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_conceptos_clasificacion_mu1[".list"] = true;
}



$tdatacat_nominas_conceptos_clasificacion_mu1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_conceptos_clasificacion_mu1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_conceptos_clasificacion_mu1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_conceptos_clasificacion_mu1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_conceptos_clasificacion_mu1[".printFriendly"] = true;
}



$tdatacat_nominas_conceptos_clasificacion_mu1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_conceptos_clasificacion_mu1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_conceptos_clasificacion_mu1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_conceptos_clasificacion_mu1[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_conceptos_clasificacion_mu1[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_conceptos_clasificacion_mu1[".buttonsAdded"] = false;

$tdatacat_nominas_conceptos_clasificacion_mu1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_conceptos_clasificacion_mu1[".isUseTimeForSearch"] = false;


$tdatacat_nominas_conceptos_clasificacion_mu1[".badgeColor"] = "2F4F4F";


$tdatacat_nominas_conceptos_clasificacion_mu1[".allSearchFields"] = array();
$tdatacat_nominas_conceptos_clasificacion_mu1[".filterFields"] = array();
$tdatacat_nominas_conceptos_clasificacion_mu1[".requiredSearchFields"] = array();

$tdatacat_nominas_conceptos_clasificacion_mu1[".googleLikeFields"] = array();
$tdatacat_nominas_conceptos_clasificacion_mu1[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_conceptos_clasificacion_mu1[".googleLikeFields"][] = "descripcion_nominas_conceptos_clasificacion";
$tdatacat_nominas_conceptos_clasificacion_mu1[".googleLikeFields"][] = "cat_nominas_conceptos_clasificacion_mu_id";
$tdatacat_nominas_conceptos_clasificacion_mu1[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_conceptos_clasificacion_mu1[".googleLikeFields"][] = "time_stamp";
$tdatacat_nominas_conceptos_clasificacion_mu1[".googleLikeFields"][] = "filtro_sueldos";



$tdatacat_nominas_conceptos_clasificacion_mu1[".tableType"] = "list";

$tdatacat_nominas_conceptos_clasificacion_mu1[".printerPageOrientation"] = 0;
$tdatacat_nominas_conceptos_clasificacion_mu1[".nPrinterPageScale"] = 100;

$tdatacat_nominas_conceptos_clasificacion_mu1[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_conceptos_clasificacion_mu1[".geocodingEnabled"] = false;





$tdatacat_nominas_conceptos_clasificacion_mu1[".isResizeColumns"] = true;





$tdatacat_nominas_conceptos_clasificacion_mu1[".pageSize"] = 20;

$tdatacat_nominas_conceptos_clasificacion_mu1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_conceptos_clasificacion_mu1[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_conceptos_clasificacion_mu1[".orderindexes"] = array();


$tdatacat_nominas_conceptos_clasificacion_mu1[".sqlHead"] = "SELECT vigente,  	descripcion_nominas_conceptos_clasificacion,  	cat_nominas_conceptos_clasificacion_mu_id,  	capturista,  	time_stamp,  	filtro_sueldos";
$tdatacat_nominas_conceptos_clasificacion_mu1[".sqlFrom"] = "FROM cat_nominas_conceptos_clasificacion_mu";
$tdatacat_nominas_conceptos_clasificacion_mu1[".sqlWhereExpr"] = "";
$tdatacat_nominas_conceptos_clasificacion_mu1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_conceptos_clasificacion_mu1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_conceptos_clasificacion_mu1[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_conceptos_clasificacion_mu1[".highlightSearchResults"] = true;

$tableKeyscat_nominas_conceptos_clasificacion_mu1 = array();
$tableKeyscat_nominas_conceptos_clasificacion_mu1[] = "cat_nominas_conceptos_clasificacion_mu_id";
$tdatacat_nominas_conceptos_clasificacion_mu1[".Keys"] = $tableKeyscat_nominas_conceptos_clasificacion_mu1;


$tdatacat_nominas_conceptos_clasificacion_mu1[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_conceptos_clasificacion_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos_clasificacion_mu","vigente");
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


	$tdatacat_nominas_conceptos_clasificacion_mu1["vigente"] = $fdata;
		$tdatacat_nominas_conceptos_clasificacion_mu1[".searchableFields"][] = "vigente";
//	descripcion_nominas_conceptos_clasificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_nominas_conceptos_clasificacion";
	$fdata["GoodName"] = "descripcion_nominas_conceptos_clasificacion";
	$fdata["ownerTable"] = "cat_nominas_conceptos_clasificacion_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos_clasificacion_mu","descripcion_nominas_conceptos_clasificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_nominas_conceptos_clasificacion";

		$fdata["sourceSingle"] = "descripcion_nominas_conceptos_clasificacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_nominas_conceptos_clasificacion";

	
	
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


	$tdatacat_nominas_conceptos_clasificacion_mu1["descripcion_nominas_conceptos_clasificacion"] = $fdata;
		$tdatacat_nominas_conceptos_clasificacion_mu1[".searchableFields"][] = "descripcion_nominas_conceptos_clasificacion";
//	cat_nominas_conceptos_clasificacion_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_nominas_conceptos_clasificacion_mu_id";
	$fdata["GoodName"] = "cat_nominas_conceptos_clasificacion_mu_id";
	$fdata["ownerTable"] = "cat_nominas_conceptos_clasificacion_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos_clasificacion_mu","cat_nominas_conceptos_clasificacion_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_conceptos_clasificacion_mu_id";

		$fdata["sourceSingle"] = "cat_nominas_conceptos_clasificacion_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos_clasificacion_mu_id";

	
	
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


	$tdatacat_nominas_conceptos_clasificacion_mu1["cat_nominas_conceptos_clasificacion_mu_id"] = $fdata;
		$tdatacat_nominas_conceptos_clasificacion_mu1[".searchableFields"][] = "cat_nominas_conceptos_clasificacion_mu_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_conceptos_clasificacion_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos_clasificacion_mu","capturista");
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


	$tdatacat_nominas_conceptos_clasificacion_mu1["capturista"] = $fdata;
		$tdatacat_nominas_conceptos_clasificacion_mu1[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_conceptos_clasificacion_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos_clasificacion_mu","time_stamp");
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


	$tdatacat_nominas_conceptos_clasificacion_mu1["time_stamp"] = $fdata;
		$tdatacat_nominas_conceptos_clasificacion_mu1[".searchableFields"][] = "time_stamp";
//	filtro_sueldos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "filtro_sueldos";
	$fdata["GoodName"] = "filtro_sueldos";
	$fdata["ownerTable"] = "cat_nominas_conceptos_clasificacion_mu";
	$fdata["Label"] = GetFieldLabel("cat_nominas_conceptos_clasificacion_mu","filtro_sueldos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "filtro_sueldos";

		$fdata["sourceSingle"] = "filtro_sueldos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "filtro_sueldos";

	
	
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


	$tdatacat_nominas_conceptos_clasificacion_mu1["filtro_sueldos"] = $fdata;
		$tdatacat_nominas_conceptos_clasificacion_mu1[".searchableFields"][] = "filtro_sueldos";


$tables_data["cat_nominas_conceptos_clasificacion_mu"]=&$tdatacat_nominas_conceptos_clasificacion_mu1;
$field_labels["cat_nominas_conceptos_clasificacion_mu"] = &$fieldLabelscat_nominas_conceptos_clasificacion_mu1;
$fieldToolTips["cat_nominas_conceptos_clasificacion_mu"] = &$fieldToolTipscat_nominas_conceptos_clasificacion_mu1;
$placeHolders["cat_nominas_conceptos_clasificacion_mu"] = &$placeHolderscat_nominas_conceptos_clasificacion_mu1;
$page_titles["cat_nominas_conceptos_clasificacion_mu"] = &$pageTitlescat_nominas_conceptos_clasificacion_mu1;


changeTextControlsToDate( "cat_nominas_conceptos_clasificacion_mu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_conceptos_clasificacion_mu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_conceptos_clasificacion_mu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_conceptos_clasificacion_mu1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigente,  	descripcion_nominas_conceptos_clasificacion,  	cat_nominas_conceptos_clasificacion_mu_id,  	capturista,  	time_stamp,  	filtro_sueldos";
$proto0["m_strFrom"] = "FROM cat_nominas_conceptos_clasificacion_mu";
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
	"m_strTable" => "cat_nominas_conceptos_clasificacion_mu",
	"m_srcTableName" => "cat_nominas_conceptos_clasificacion_mu"
));

$proto6["m_sql"] = "vigente";
$proto6["m_srcTableName"] = "cat_nominas_conceptos_clasificacion_mu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_nominas_conceptos_clasificacion",
	"m_strTable" => "cat_nominas_conceptos_clasificacion_mu",
	"m_srcTableName" => "cat_nominas_conceptos_clasificacion_mu"
));

$proto8["m_sql"] = "descripcion_nominas_conceptos_clasificacion";
$proto8["m_srcTableName"] = "cat_nominas_conceptos_clasificacion_mu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_conceptos_clasificacion_mu_id",
	"m_strTable" => "cat_nominas_conceptos_clasificacion_mu",
	"m_srcTableName" => "cat_nominas_conceptos_clasificacion_mu"
));

$proto10["m_sql"] = "cat_nominas_conceptos_clasificacion_mu_id";
$proto10["m_srcTableName"] = "cat_nominas_conceptos_clasificacion_mu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_conceptos_clasificacion_mu",
	"m_srcTableName" => "cat_nominas_conceptos_clasificacion_mu"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_nominas_conceptos_clasificacion_mu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_conceptos_clasificacion_mu",
	"m_srcTableName" => "cat_nominas_conceptos_clasificacion_mu"
));

$proto14["m_sql"] = "time_stamp";
$proto14["m_srcTableName"] = "cat_nominas_conceptos_clasificacion_mu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "filtro_sueldos",
	"m_strTable" => "cat_nominas_conceptos_clasificacion_mu",
	"m_srcTableName" => "cat_nominas_conceptos_clasificacion_mu"
));

$proto16["m_sql"] = "filtro_sueldos";
$proto16["m_srcTableName"] = "cat_nominas_conceptos_clasificacion_mu";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_nominas_conceptos_clasificacion_mu";
$proto19["m_srcTableName"] = "cat_nominas_conceptos_clasificacion_mu";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "descripcion_nominas_conceptos_clasificacion";
$proto19["m_columns"][] = "cat_nominas_conceptos_clasificacion_mu_id";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "filtro_sueldos";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_nominas_conceptos_clasificacion_mu";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_nominas_conceptos_clasificacion_mu";
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
$proto0["m_srcTableName"]="cat_nominas_conceptos_clasificacion_mu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_conceptos_clasificacion_mu1 = createSqlQuery_cat_nominas_conceptos_clasificacion_mu1();


	
		;

						

$tdatacat_nominas_conceptos_clasificacion_mu1[".sqlquery"] = $queryData_cat_nominas_conceptos_clasificacion_mu1;



$tdatacat_nominas_conceptos_clasificacion_mu1[".hasEvents"] = false;

?>