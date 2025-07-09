<?php
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu = array();
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".searchableFields"] = array();
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".ShortName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".OwnerID"] = "";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".OriginalTable"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";


$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".originalPagesByType"] = $tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".pagesByType"];
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".originalPages"] = $tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".pages"];
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".originalDefaultPages"] = $tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".defaultPages"];

//	field labels
$fieldLabelscat_control_aplicaciones_contenedores_mezcladores_mu = array();
$fieldToolTipscat_control_aplicaciones_contenedores_mezcladores_mu = array();
$pageTitlescat_control_aplicaciones_contenedores_mezcladores_mu = array();
$placeHolderscat_control_aplicaciones_contenedores_mezcladores_mu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"] = array();
	$fieldToolTipscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"] = array();
	$placeHolderscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"] = array();
	$pageTitlescat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"] = array();
	$fieldLabelscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["cat_control_aplicaciones_contenedores_mezcladores_mu_id"] = "Id";
	$fieldToolTipscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["cat_control_aplicaciones_contenedores_mezcladores_mu_id"] = "";
	$placeHolderscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["cat_control_aplicaciones_contenedores_mezcladores_mu_id"] = "";
	$fieldLabelscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["descripcion_contenedor"] = "Descripcion";
	$fieldToolTipscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["descripcion_contenedor"] = "";
	$placeHolderscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["descripcion_contenedor"] = "";
	$fieldLabelscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["vigente"] = "";
	$placeHolderscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["vigente"] = "";
	$fieldLabelscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["capturista"] = "";
	$placeHolderscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["capturista"] = "";
	$fieldLabelscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["time_stamp"] = "";
	$placeHolderscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["volumen"] = "Volumen";
	$fieldToolTipscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["volumen"] = "";
	$placeHolderscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]["volumen"] = "";
	if (count($fieldToolTipscat_control_aplicaciones_contenedores_mezcladores_mu["Spanish"]))
		$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".isUseToolTips"] = true;
}





$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".shortTableName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".nSecOptions"] = 0;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".mainTableOwnerID"] = "";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".entityType"] = 0;
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".strOriginalTableName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";

	



$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".showAddInPopup"] = false;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".showEditInPopup"] = false;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".showViewInPopup"] = false;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".listAjax"] = false;
//	temporary
//$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".listAjax"] = false;

	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".audit"] = false;

	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".locking"] = false;


$pages = $tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".edit"] = true;
	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".afterEditAction"] = 1;
	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".closePopupAfterEdit"] = 1;
	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".add"] = true;
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".afterAddAction"] = 1;
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".closePopupAfterAdd"] = 1;
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".list"] = true;
}



$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".printFriendly"] = true;
}



$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".ajaxCodeSnippetAdded"] = false;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".buttonsAdded"] = false;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".isUseTimeForSearch"] = false;


$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".badgeColor"] = "7B68EE";


$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".allSearchFields"] = array();
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".filterFields"] = array();
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".requiredSearchFields"] = array();

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".googleLikeFields"] = array();
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".googleLikeFields"][] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".googleLikeFields"][] = "descripcion_contenedor";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".googleLikeFields"][] = "volumen";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".googleLikeFields"][] = "vigente";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".googleLikeFields"][] = "capturista";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".googleLikeFields"][] = "time_stamp";



$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".tableType"] = "list";

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".printerPageOrientation"] = 0;
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".nPrinterPageScale"] = 100;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".nPrinterSplitRecords"] = 40;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".geocodingEnabled"] = false;





$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".isResizeColumns"] = true;





$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".pageSize"] = 20;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".strOrderBy"] = $tstrOrderBy;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".orderindexes"] = array();


$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".sqlHead"] = "SELECT cat_control_aplicaciones_contenedores_mezcladores_mu_id,  	descripcion_contenedor,  	volumen,  	vigente,  	capturista,  	time_stamp";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".sqlFrom"] = "FROM cat_control_aplicaciones_contenedores_mezcladores_mu";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".sqlWhereExpr"] = "";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".highlightSearchResults"] = true;

$tableKeyscat_control_aplicaciones_contenedores_mezcladores_mu = array();
$tableKeyscat_control_aplicaciones_contenedores_mezcladores_mu[] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id";
$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".Keys"] = $tableKeyscat_control_aplicaciones_contenedores_mezcladores_mu;


$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".hideMobileList"] = array();




//	cat_control_aplicaciones_contenedores_mezcladores_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id";
	$fdata["GoodName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id";
	$fdata["ownerTable"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_contenedores_mezcladores_mu","cat_control_aplicaciones_contenedores_mezcladores_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id";

		$fdata["sourceSingle"] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id";

	
	
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


	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu["cat_control_aplicaciones_contenedores_mezcladores_mu_id"] = $fdata;
		$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".searchableFields"][] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id";
//	descripcion_contenedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_contenedor";
	$fdata["GoodName"] = "descripcion_contenedor";
	$fdata["ownerTable"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_contenedores_mezcladores_mu","descripcion_contenedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_contenedor";

		$fdata["sourceSingle"] = "descripcion_contenedor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_contenedor";

	
	
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


	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu["descripcion_contenedor"] = $fdata;
		$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".searchableFields"][] = "descripcion_contenedor";
//	volumen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "volumen";
	$fdata["GoodName"] = "volumen";
	$fdata["ownerTable"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_contenedores_mezcladores_mu","volumen");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "volumen";

		$fdata["sourceSingle"] = "volumen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "volumen";

	
	
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


	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu["volumen"] = $fdata;
		$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".searchableFields"][] = "volumen";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_contenedores_mezcladores_mu","vigente");
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


	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu["vigente"] = $fdata;
		$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_contenedores_mezcladores_mu","capturista");
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


	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu["capturista"] = $fdata;
		$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_contenedores_mezcladores_mu","time_stamp");
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


	$tdatacat_control_aplicaciones_contenedores_mezcladores_mu["time_stamp"] = $fdata;
		$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".searchableFields"][] = "time_stamp";


$tables_data["cat_control_aplicaciones_contenedores_mezcladores_mu"]=&$tdatacat_control_aplicaciones_contenedores_mezcladores_mu;
$field_labels["cat_control_aplicaciones_contenedores_mezcladores_mu"] = &$fieldLabelscat_control_aplicaciones_contenedores_mezcladores_mu;
$fieldToolTips["cat_control_aplicaciones_contenedores_mezcladores_mu"] = &$fieldToolTipscat_control_aplicaciones_contenedores_mezcladores_mu;
$placeHolders["cat_control_aplicaciones_contenedores_mezcladores_mu"] = &$placeHolderscat_control_aplicaciones_contenedores_mezcladores_mu;
$page_titles["cat_control_aplicaciones_contenedores_mezcladores_mu"] = &$pageTitlescat_control_aplicaciones_contenedores_mezcladores_mu;


changeTextControlsToDate( "cat_control_aplicaciones_contenedores_mezcladores_mu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_control_aplicaciones_contenedores_mezcladores_mu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_control_aplicaciones_contenedores_mezcladores_mu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_control_aplicaciones_contenedores_mezcladores_mu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id,  	descripcion_contenedor,  	volumen,  	vigente,  	capturista,  	time_stamp";
$proto0["m_strFrom"] = "FROM cat_control_aplicaciones_contenedores_mezcladores_mu";
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
	"m_strName" => "cat_control_aplicaciones_contenedores_mezcladores_mu_id",
	"m_strTable" => "cat_control_aplicaciones_contenedores_mezcladores_mu",
	"m_srcTableName" => "cat_control_aplicaciones_contenedores_mezcladores_mu"
));

$proto6["m_sql"] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id";
$proto6["m_srcTableName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_contenedor",
	"m_strTable" => "cat_control_aplicaciones_contenedores_mezcladores_mu",
	"m_srcTableName" => "cat_control_aplicaciones_contenedores_mezcladores_mu"
));

$proto8["m_sql"] = "descripcion_contenedor";
$proto8["m_srcTableName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "volumen",
	"m_strTable" => "cat_control_aplicaciones_contenedores_mezcladores_mu",
	"m_srcTableName" => "cat_control_aplicaciones_contenedores_mezcladores_mu"
));

$proto10["m_sql"] = "volumen";
$proto10["m_srcTableName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_aplicaciones_contenedores_mezcladores_mu",
	"m_srcTableName" => "cat_control_aplicaciones_contenedores_mezcladores_mu"
));

$proto12["m_sql"] = "vigente";
$proto12["m_srcTableName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_control_aplicaciones_contenedores_mezcladores_mu",
	"m_srcTableName" => "cat_control_aplicaciones_contenedores_mezcladores_mu"
));

$proto14["m_sql"] = "capturista";
$proto14["m_srcTableName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_control_aplicaciones_contenedores_mezcladores_mu",
	"m_srcTableName" => "cat_control_aplicaciones_contenedores_mezcladores_mu"
));

$proto16["m_sql"] = "time_stamp";
$proto16["m_srcTableName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$proto19["m_srcTableName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_control_aplicaciones_contenedores_mezcladores_mu_id";
$proto19["m_columns"][] = "descripcion_contenedor";
$proto19["m_columns"][] = "volumen";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_control_aplicaciones_contenedores_mezcladores_mu";
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
$proto0["m_srcTableName"]="cat_control_aplicaciones_contenedores_mezcladores_mu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_control_aplicaciones_contenedores_mezcladores_mu = createSqlQuery_cat_control_aplicaciones_contenedores_mezcladores_mu();


	
		;

						

$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".sqlquery"] = $queryData_cat_control_aplicaciones_contenedores_mezcladores_mu;



$tdatacat_control_aplicaciones_contenedores_mezcladores_mu[".hasEvents"] = false;

?>