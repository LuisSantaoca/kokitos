<?php
$tdatacat_compras_almacenes_estatus_mu = array();
$tdatacat_compras_almacenes_estatus_mu[".searchableFields"] = array();
$tdatacat_compras_almacenes_estatus_mu[".ShortName"] = "cat_compras_almacenes_estatus_mu";
$tdatacat_compras_almacenes_estatus_mu[".OwnerID"] = "";
$tdatacat_compras_almacenes_estatus_mu[".OriginalTable"] = "cat_compras_almacenes_estatus_mu";


$tdatacat_compras_almacenes_estatus_mu[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_compras_almacenes_estatus_mu[".originalPagesByType"] = $tdatacat_compras_almacenes_estatus_mu[".pagesByType"];
$tdatacat_compras_almacenes_estatus_mu[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_compras_almacenes_estatus_mu[".originalPages"] = $tdatacat_compras_almacenes_estatus_mu[".pages"];
$tdatacat_compras_almacenes_estatus_mu[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_compras_almacenes_estatus_mu[".originalDefaultPages"] = $tdatacat_compras_almacenes_estatus_mu[".defaultPages"];

//	field labels
$fieldLabelscat_compras_almacenes_estatus_mu = array();
$fieldToolTipscat_compras_almacenes_estatus_mu = array();
$pageTitlescat_compras_almacenes_estatus_mu = array();
$placeHolderscat_compras_almacenes_estatus_mu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_compras_almacenes_estatus_mu["Spanish"] = array();
	$fieldToolTipscat_compras_almacenes_estatus_mu["Spanish"] = array();
	$placeHolderscat_compras_almacenes_estatus_mu["Spanish"] = array();
	$pageTitlescat_compras_almacenes_estatus_mu["Spanish"] = array();
	$fieldLabelscat_compras_almacenes_estatus_mu["Spanish"]["cat_compras_almacenes_estatus_mu_id"] = "Id";
	$fieldToolTipscat_compras_almacenes_estatus_mu["Spanish"]["cat_compras_almacenes_estatus_mu_id"] = "";
	$placeHolderscat_compras_almacenes_estatus_mu["Spanish"]["cat_compras_almacenes_estatus_mu_id"] = "";
	$fieldLabelscat_compras_almacenes_estatus_mu["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_compras_almacenes_estatus_mu["Spanish"]["time_stamp"] = "";
	$placeHolderscat_compras_almacenes_estatus_mu["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_compras_almacenes_estatus_mu["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_compras_almacenes_estatus_mu["Spanish"]["vigente"] = "";
	$placeHolderscat_compras_almacenes_estatus_mu["Spanish"]["vigente"] = "";
	$fieldLabelscat_compras_almacenes_estatus_mu["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_compras_almacenes_estatus_mu["Spanish"]["capturista"] = "";
	$placeHolderscat_compras_almacenes_estatus_mu["Spanish"]["capturista"] = "";
	$fieldLabelscat_compras_almacenes_estatus_mu["Spanish"]["descripcion_compras_almacenes_estatus_mu"] = "Descripcion Compras Almacenes Estatus Mu";
	$fieldToolTipscat_compras_almacenes_estatus_mu["Spanish"]["descripcion_compras_almacenes_estatus_mu"] = "";
	$placeHolderscat_compras_almacenes_estatus_mu["Spanish"]["descripcion_compras_almacenes_estatus_mu"] = "";
	$fieldLabelscat_compras_almacenes_estatus_mu["Spanish"]["filtro"] = "Filtro";
	$fieldToolTipscat_compras_almacenes_estatus_mu["Spanish"]["filtro"] = "";
	$placeHolderscat_compras_almacenes_estatus_mu["Spanish"]["filtro"] = "";
	if (count($fieldToolTipscat_compras_almacenes_estatus_mu["Spanish"]))
		$tdatacat_compras_almacenes_estatus_mu[".isUseToolTips"] = true;
}





$tdatacat_compras_almacenes_estatus_mu[".shortTableName"] = "cat_compras_almacenes_estatus_mu";
$tdatacat_compras_almacenes_estatus_mu[".nSecOptions"] = 0;

$tdatacat_compras_almacenes_estatus_mu[".mainTableOwnerID"] = "";
$tdatacat_compras_almacenes_estatus_mu[".entityType"] = 0;
$tdatacat_compras_almacenes_estatus_mu[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_compras_almacenes_estatus_mu[".strOriginalTableName"] = "cat_compras_almacenes_estatus_mu";

	



$tdatacat_compras_almacenes_estatus_mu[".showAddInPopup"] = false;

$tdatacat_compras_almacenes_estatus_mu[".showEditInPopup"] = false;

$tdatacat_compras_almacenes_estatus_mu[".showViewInPopup"] = false;

$tdatacat_compras_almacenes_estatus_mu[".listAjax"] = false;
//	temporary
//$tdatacat_compras_almacenes_estatus_mu[".listAjax"] = false;

	$tdatacat_compras_almacenes_estatus_mu[".audit"] = false;

	$tdatacat_compras_almacenes_estatus_mu[".locking"] = false;


$pages = $tdatacat_compras_almacenes_estatus_mu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_compras_almacenes_estatus_mu[".edit"] = true;
	$tdatacat_compras_almacenes_estatus_mu[".afterEditAction"] = 1;
	$tdatacat_compras_almacenes_estatus_mu[".closePopupAfterEdit"] = 1;
	$tdatacat_compras_almacenes_estatus_mu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_compras_almacenes_estatus_mu[".add"] = true;
$tdatacat_compras_almacenes_estatus_mu[".afterAddAction"] = 1;
$tdatacat_compras_almacenes_estatus_mu[".closePopupAfterAdd"] = 1;
$tdatacat_compras_almacenes_estatus_mu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_compras_almacenes_estatus_mu[".list"] = true;
}



$tdatacat_compras_almacenes_estatus_mu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_compras_almacenes_estatus_mu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_compras_almacenes_estatus_mu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_compras_almacenes_estatus_mu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_compras_almacenes_estatus_mu[".printFriendly"] = true;
}



$tdatacat_compras_almacenes_estatus_mu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_compras_almacenes_estatus_mu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_compras_almacenes_estatus_mu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_compras_almacenes_estatus_mu[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_compras_almacenes_estatus_mu[".ajaxCodeSnippetAdded"] = false;

$tdatacat_compras_almacenes_estatus_mu[".buttonsAdded"] = false;

$tdatacat_compras_almacenes_estatus_mu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_compras_almacenes_estatus_mu[".isUseTimeForSearch"] = false;


$tdatacat_compras_almacenes_estatus_mu[".badgeColor"] = "D2AF80";


$tdatacat_compras_almacenes_estatus_mu[".allSearchFields"] = array();
$tdatacat_compras_almacenes_estatus_mu[".filterFields"] = array();
$tdatacat_compras_almacenes_estatus_mu[".requiredSearchFields"] = array();

$tdatacat_compras_almacenes_estatus_mu[".googleLikeFields"] = array();
$tdatacat_compras_almacenes_estatus_mu[".googleLikeFields"][] = "cat_compras_almacenes_estatus_mu_id";
$tdatacat_compras_almacenes_estatus_mu[".googleLikeFields"][] = "time_stamp";
$tdatacat_compras_almacenes_estatus_mu[".googleLikeFields"][] = "vigente";
$tdatacat_compras_almacenes_estatus_mu[".googleLikeFields"][] = "capturista";
$tdatacat_compras_almacenes_estatus_mu[".googleLikeFields"][] = "descripcion_compras_almacenes_estatus_mu";
$tdatacat_compras_almacenes_estatus_mu[".googleLikeFields"][] = "filtro";



$tdatacat_compras_almacenes_estatus_mu[".tableType"] = "list";

$tdatacat_compras_almacenes_estatus_mu[".printerPageOrientation"] = 0;
$tdatacat_compras_almacenes_estatus_mu[".nPrinterPageScale"] = 100;

$tdatacat_compras_almacenes_estatus_mu[".nPrinterSplitRecords"] = 40;

$tdatacat_compras_almacenes_estatus_mu[".geocodingEnabled"] = false;





$tdatacat_compras_almacenes_estatus_mu[".isResizeColumns"] = true;





$tdatacat_compras_almacenes_estatus_mu[".pageSize"] = 20;

$tdatacat_compras_almacenes_estatus_mu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_compras_almacenes_estatus_mu[".strOrderBy"] = $tstrOrderBy;

$tdatacat_compras_almacenes_estatus_mu[".orderindexes"] = array();


$tdatacat_compras_almacenes_estatus_mu[".sqlHead"] = "SELECT cat_compras_almacenes_estatus_mu_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_compras_almacenes_estatus_mu,  	filtro";
$tdatacat_compras_almacenes_estatus_mu[".sqlFrom"] = "FROM cat_compras_almacenes_estatus_mu";
$tdatacat_compras_almacenes_estatus_mu[".sqlWhereExpr"] = "";
$tdatacat_compras_almacenes_estatus_mu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_compras_almacenes_estatus_mu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_compras_almacenes_estatus_mu[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_compras_almacenes_estatus_mu[".highlightSearchResults"] = true;

$tableKeyscat_compras_almacenes_estatus_mu = array();
$tableKeyscat_compras_almacenes_estatus_mu[] = "cat_compras_almacenes_estatus_mu_id";
$tdatacat_compras_almacenes_estatus_mu[".Keys"] = $tableKeyscat_compras_almacenes_estatus_mu;


$tdatacat_compras_almacenes_estatus_mu[".hideMobileList"] = array();




//	cat_compras_almacenes_estatus_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_almacenes_estatus_mu_id";
	$fdata["GoodName"] = "cat_compras_almacenes_estatus_mu_id";
	$fdata["ownerTable"] = "cat_compras_almacenes_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes_estatus_mu","cat_compras_almacenes_estatus_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_almacenes_estatus_mu_id";

		$fdata["sourceSingle"] = "cat_compras_almacenes_estatus_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_almacenes_estatus_mu_id";

	
	
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


	$tdatacat_compras_almacenes_estatus_mu["cat_compras_almacenes_estatus_mu_id"] = $fdata;
		$tdatacat_compras_almacenes_estatus_mu[".searchableFields"][] = "cat_compras_almacenes_estatus_mu_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_compras_almacenes_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes_estatus_mu","time_stamp");
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


	$tdatacat_compras_almacenes_estatus_mu["time_stamp"] = $fdata;
		$tdatacat_compras_almacenes_estatus_mu[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_almacenes_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes_estatus_mu","vigente");
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


	$tdatacat_compras_almacenes_estatus_mu["vigente"] = $fdata;
		$tdatacat_compras_almacenes_estatus_mu[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_almacenes_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes_estatus_mu","capturista");
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


	$tdatacat_compras_almacenes_estatus_mu["capturista"] = $fdata;
		$tdatacat_compras_almacenes_estatus_mu[".searchableFields"][] = "capturista";
//	descripcion_compras_almacenes_estatus_mu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_compras_almacenes_estatus_mu";
	$fdata["GoodName"] = "descripcion_compras_almacenes_estatus_mu";
	$fdata["ownerTable"] = "cat_compras_almacenes_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes_estatus_mu","descripcion_compras_almacenes_estatus_mu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_compras_almacenes_estatus_mu";

		$fdata["sourceSingle"] = "descripcion_compras_almacenes_estatus_mu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_compras_almacenes_estatus_mu";

	
	
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


	$tdatacat_compras_almacenes_estatus_mu["descripcion_compras_almacenes_estatus_mu"] = $fdata;
		$tdatacat_compras_almacenes_estatus_mu[".searchableFields"][] = "descripcion_compras_almacenes_estatus_mu";
//	filtro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "filtro";
	$fdata["GoodName"] = "filtro";
	$fdata["ownerTable"] = "cat_compras_almacenes_estatus_mu";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes_estatus_mu","filtro");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "filtro";

		$fdata["sourceSingle"] = "filtro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "filtro";

	
	
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


	$tdatacat_compras_almacenes_estatus_mu["filtro"] = $fdata;
		$tdatacat_compras_almacenes_estatus_mu[".searchableFields"][] = "filtro";


$tables_data["cat_compras_almacenes_estatus_mu"]=&$tdatacat_compras_almacenes_estatus_mu;
$field_labels["cat_compras_almacenes_estatus_mu"] = &$fieldLabelscat_compras_almacenes_estatus_mu;
$fieldToolTips["cat_compras_almacenes_estatus_mu"] = &$fieldToolTipscat_compras_almacenes_estatus_mu;
$placeHolders["cat_compras_almacenes_estatus_mu"] = &$placeHolderscat_compras_almacenes_estatus_mu;
$page_titles["cat_compras_almacenes_estatus_mu"] = &$pageTitlescat_compras_almacenes_estatus_mu;


changeTextControlsToDate( "cat_compras_almacenes_estatus_mu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_compras_almacenes_estatus_mu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_compras_almacenes_estatus_mu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_compras_almacenes_estatus_mu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_almacenes_estatus_mu_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_compras_almacenes_estatus_mu,  	filtro";
$proto0["m_strFrom"] = "FROM cat_compras_almacenes_estatus_mu";
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
	"m_strName" => "cat_compras_almacenes_estatus_mu_id",
	"m_strTable" => "cat_compras_almacenes_estatus_mu",
	"m_srcTableName" => "cat_compras_almacenes_estatus_mu"
));

$proto6["m_sql"] = "cat_compras_almacenes_estatus_mu_id";
$proto6["m_srcTableName"] = "cat_compras_almacenes_estatus_mu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_compras_almacenes_estatus_mu",
	"m_srcTableName" => "cat_compras_almacenes_estatus_mu"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_compras_almacenes_estatus_mu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_almacenes_estatus_mu",
	"m_srcTableName" => "cat_compras_almacenes_estatus_mu"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_compras_almacenes_estatus_mu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_almacenes_estatus_mu",
	"m_srcTableName" => "cat_compras_almacenes_estatus_mu"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_compras_almacenes_estatus_mu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_compras_almacenes_estatus_mu",
	"m_strTable" => "cat_compras_almacenes_estatus_mu",
	"m_srcTableName" => "cat_compras_almacenes_estatus_mu"
));

$proto14["m_sql"] = "descripcion_compras_almacenes_estatus_mu";
$proto14["m_srcTableName"] = "cat_compras_almacenes_estatus_mu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "filtro",
	"m_strTable" => "cat_compras_almacenes_estatus_mu",
	"m_srcTableName" => "cat_compras_almacenes_estatus_mu"
));

$proto16["m_sql"] = "filtro";
$proto16["m_srcTableName"] = "cat_compras_almacenes_estatus_mu";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_compras_almacenes_estatus_mu";
$proto19["m_srcTableName"] = "cat_compras_almacenes_estatus_mu";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_compras_almacenes_estatus_mu_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_compras_almacenes_estatus_mu";
$proto19["m_columns"][] = "filtro";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_compras_almacenes_estatus_mu";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_compras_almacenes_estatus_mu";
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
$proto0["m_srcTableName"]="cat_compras_almacenes_estatus_mu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_compras_almacenes_estatus_mu = createSqlQuery_cat_compras_almacenes_estatus_mu();


	
		;

						

$tdatacat_compras_almacenes_estatus_mu[".sqlquery"] = $queryData_cat_compras_almacenes_estatus_mu;



$tdatacat_compras_almacenes_estatus_mu[".hasEvents"] = false;

?>