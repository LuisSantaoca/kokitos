<?php
$tdatacat_trabajadores_reingresos = array();
$tdatacat_trabajadores_reingresos[".searchableFields"] = array();
$tdatacat_trabajadores_reingresos[".ShortName"] = "cat_trabajadores_reingresos";
$tdatacat_trabajadores_reingresos[".OwnerID"] = "";
$tdatacat_trabajadores_reingresos[".OriginalTable"] = "cat_trabajadores_reingresos";


$tdatacat_trabajadores_reingresos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_reingresos[".originalPagesByType"] = $tdatacat_trabajadores_reingresos[".pagesByType"];
$tdatacat_trabajadores_reingresos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_reingresos[".originalPages"] = $tdatacat_trabajadores_reingresos[".pages"];
$tdatacat_trabajadores_reingresos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_trabajadores_reingresos[".originalDefaultPages"] = $tdatacat_trabajadores_reingresos[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_reingresos = array();
$fieldToolTipscat_trabajadores_reingresos = array();
$pageTitlescat_trabajadores_reingresos = array();
$placeHolderscat_trabajadores_reingresos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_reingresos["Spanish"] = array();
	$fieldToolTipscat_trabajadores_reingresos["Spanish"] = array();
	$placeHolderscat_trabajadores_reingresos["Spanish"] = array();
	$pageTitlescat_trabajadores_reingresos["Spanish"] = array();
	$fieldLabelscat_trabajadores_reingresos["Spanish"]["cat_trabajadores_reingresos_id"] = " Id";
	$fieldToolTipscat_trabajadores_reingresos["Spanish"]["cat_trabajadores_reingresos_id"] = "";
	$placeHolderscat_trabajadores_reingresos["Spanish"]["cat_trabajadores_reingresos_id"] = "";
	$fieldLabelscat_trabajadores_reingresos["Spanish"]["cat_trabajadores_altas_id"] = "Trabajador";
	$fieldToolTipscat_trabajadores_reingresos["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_reingresos["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_reingresos["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipscat_trabajadores_reingresos["Spanish"]["fecha"] = "";
	$placeHolderscat_trabajadores_reingresos["Spanish"]["fecha"] = "";
	$fieldLabelscat_trabajadores_reingresos["Spanish"]["cat_trabajadores_alta_baja_mu_id"] = "Alta/Baja";
	$fieldToolTipscat_trabajadores_reingresos["Spanish"]["cat_trabajadores_alta_baja_mu_id"] = "";
	$placeHolderscat_trabajadores_reingresos["Spanish"]["cat_trabajadores_alta_baja_mu_id"] = "";
	$fieldLabelscat_trabajadores_reingresos["Spanish"]["observaciones"] = "Observaciones";
	$fieldToolTipscat_trabajadores_reingresos["Spanish"]["observaciones"] = "";
	$placeHolderscat_trabajadores_reingresos["Spanish"]["observaciones"] = "";
	$fieldLabelscat_trabajadores_reingresos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_reingresos["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_reingresos["Spanish"]["vigente"] = "";
	$fieldLabelscat_trabajadores_reingresos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_trabajadores_reingresos["Spanish"]["capturista"] = "";
	$placeHolderscat_trabajadores_reingresos["Spanish"]["capturista"] = "";
	$fieldLabelscat_trabajadores_reingresos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_trabajadores_reingresos["Spanish"]["time_stamp"] = "";
	$placeHolderscat_trabajadores_reingresos["Spanish"]["time_stamp"] = "";
	$pageTitlescat_trabajadores_reingresos["Spanish"]["list"] = "Reingresos";
	if (count($fieldToolTipscat_trabajadores_reingresos["Spanish"]))
		$tdatacat_trabajadores_reingresos[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_reingresos[".shortTableName"] = "cat_trabajadores_reingresos";
$tdatacat_trabajadores_reingresos[".nSecOptions"] = 0;

$tdatacat_trabajadores_reingresos[".mainTableOwnerID"] = "";
$tdatacat_trabajadores_reingresos[".entityType"] = 0;
$tdatacat_trabajadores_reingresos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_reingresos[".strOriginalTableName"] = "cat_trabajadores_reingresos";

	



$tdatacat_trabajadores_reingresos[".showAddInPopup"] = false;

$tdatacat_trabajadores_reingresos[".showEditInPopup"] = false;

$tdatacat_trabajadores_reingresos[".showViewInPopup"] = false;

$tdatacat_trabajadores_reingresos[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_reingresos[".listAjax"] = false;

	$tdatacat_trabajadores_reingresos[".audit"] = false;

	$tdatacat_trabajadores_reingresos[".locking"] = false;


$pages = $tdatacat_trabajadores_reingresos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_reingresos[".edit"] = true;
	$tdatacat_trabajadores_reingresos[".afterEditAction"] = 1;
	$tdatacat_trabajadores_reingresos[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_reingresos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_reingresos[".add"] = true;
$tdatacat_trabajadores_reingresos[".afterAddAction"] = 1;
$tdatacat_trabajadores_reingresos[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_reingresos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_reingresos[".list"] = true;
}



$tdatacat_trabajadores_reingresos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_reingresos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_reingresos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_reingresos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_reingresos[".printFriendly"] = true;
}



$tdatacat_trabajadores_reingresos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_reingresos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_reingresos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_reingresos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																								

$tdatacat_trabajadores_reingresos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_reingresos[".buttonsAdded"] = false;

$tdatacat_trabajadores_reingresos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_reingresos[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_reingresos[".badgeColor"] = "cd853f";


$tdatacat_trabajadores_reingresos[".allSearchFields"] = array();
$tdatacat_trabajadores_reingresos[".filterFields"] = array();
$tdatacat_trabajadores_reingresos[".requiredSearchFields"] = array();

$tdatacat_trabajadores_reingresos[".googleLikeFields"] = array();
$tdatacat_trabajadores_reingresos[".googleLikeFields"][] = "cat_trabajadores_reingresos_id";
$tdatacat_trabajadores_reingresos[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_reingresos[".googleLikeFields"][] = "fecha";
$tdatacat_trabajadores_reingresos[".googleLikeFields"][] = "cat_trabajadores_alta_baja_mu_id";
$tdatacat_trabajadores_reingresos[".googleLikeFields"][] = "observaciones";
$tdatacat_trabajadores_reingresos[".googleLikeFields"][] = "vigente";
$tdatacat_trabajadores_reingresos[".googleLikeFields"][] = "capturista";
$tdatacat_trabajadores_reingresos[".googleLikeFields"][] = "time_stamp";



$tdatacat_trabajadores_reingresos[".tableType"] = "list";

$tdatacat_trabajadores_reingresos[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_reingresos[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_reingresos[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_reingresos[".geocodingEnabled"] = false;





$tdatacat_trabajadores_reingresos[".isResizeColumns"] = true;





$tdatacat_trabajadores_reingresos[".pageSize"] = 20;

$tdatacat_trabajadores_reingresos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_reingresos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_reingresos[".orderindexes"] = array();


$tdatacat_trabajadores_reingresos[".sqlHead"] = "SELECT cat_trabajadores_reingresos_id,  	cat_trabajadores_altas_id,  	fecha,  	cat_trabajadores_alta_baja_mu_id,  	observaciones,  	vigente,  	capturista,  	time_stamp";
$tdatacat_trabajadores_reingresos[".sqlFrom"] = "FROM cat_trabajadores_reingresos";
$tdatacat_trabajadores_reingresos[".sqlWhereExpr"] = "";
$tdatacat_trabajadores_reingresos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_reingresos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_reingresos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_reingresos[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_reingresos = array();
$tableKeyscat_trabajadores_reingresos[] = "cat_trabajadores_reingresos_id";
$tdatacat_trabajadores_reingresos[".Keys"] = $tableKeyscat_trabajadores_reingresos;


$tdatacat_trabajadores_reingresos[".hideMobileList"] = array();




//	cat_trabajadores_reingresos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_reingresos_id";
	$fdata["GoodName"] = "cat_trabajadores_reingresos_id";
	$fdata["ownerTable"] = "cat_trabajadores_reingresos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_reingresos","cat_trabajadores_reingresos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_reingresos_id";

		$fdata["sourceSingle"] = "cat_trabajadores_reingresos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_reingresos_id";

	
	
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


	$tdatacat_trabajadores_reingresos["cat_trabajadores_reingresos_id"] = $fdata;
		$tdatacat_trabajadores_reingresos[".searchableFields"][] = "cat_trabajadores_reingresos_id";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_reingresos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_reingresos","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas_id";

	
	
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
	$edata["LookupTable"] = "box_cat_trabajadores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_trabajadores_altas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdatacat_trabajadores_reingresos["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_reingresos[".searchableFields"][] = "cat_trabajadores_altas_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "cat_trabajadores_reingresos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_reingresos","fecha");
	$fdata["FieldType"] = 7;


	
	
			

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


	$tdatacat_trabajadores_reingresos["fecha"] = $fdata;
		$tdatacat_trabajadores_reingresos[".searchableFields"][] = "fecha";
//	cat_trabajadores_alta_baja_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_trabajadores_alta_baja_mu_id";
	$fdata["GoodName"] = "cat_trabajadores_alta_baja_mu_id";
	$fdata["ownerTable"] = "cat_trabajadores_reingresos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_reingresos","cat_trabajadores_alta_baja_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_alta_baja_mu_id";

		$fdata["sourceSingle"] = "cat_trabajadores_alta_baja_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_alta_baja_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_trabajadores_alta_baja_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "cat_trabajadores_alta_baja_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_alta_baja";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdatacat_trabajadores_reingresos["cat_trabajadores_alta_baja_mu_id"] = $fdata;
		$tdatacat_trabajadores_reingresos[".searchableFields"][] = "cat_trabajadores_alta_baja_mu_id";
//	observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "observaciones";
	$fdata["GoodName"] = "observaciones";
	$fdata["ownerTable"] = "cat_trabajadores_reingresos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_reingresos","observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observaciones";

		$fdata["sourceSingle"] = "observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observaciones";

	
	
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


	$tdatacat_trabajadores_reingresos["observaciones"] = $fdata;
		$tdatacat_trabajadores_reingresos[".searchableFields"][] = "observaciones";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_reingresos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_reingresos","vigente");
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


	$tdatacat_trabajadores_reingresos["vigente"] = $fdata;
		$tdatacat_trabajadores_reingresos[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_trabajadores_reingresos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_reingresos","capturista");
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


	$tdatacat_trabajadores_reingresos["capturista"] = $fdata;
		$tdatacat_trabajadores_reingresos[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_trabajadores_reingresos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_reingresos","time_stamp");
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


	$tdatacat_trabajadores_reingresos["time_stamp"] = $fdata;
		$tdatacat_trabajadores_reingresos[".searchableFields"][] = "time_stamp";


$tables_data["cat_trabajadores_reingresos"]=&$tdatacat_trabajadores_reingresos;
$field_labels["cat_trabajadores_reingresos"] = &$fieldLabelscat_trabajadores_reingresos;
$fieldToolTips["cat_trabajadores_reingresos"] = &$fieldToolTipscat_trabajadores_reingresos;
$placeHolders["cat_trabajadores_reingresos"] = &$placeHolderscat_trabajadores_reingresos;
$page_titles["cat_trabajadores_reingresos"] = &$pageTitlescat_trabajadores_reingresos;


changeTextControlsToDate( "cat_trabajadores_reingresos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_reingresos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_reingresos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cat_trabajadores_altas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cat_trabajadores_altas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cat_trabajadores_altas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cat_trabajadores_reingresos"][0] = $masterParams;
				$masterTablesData["cat_trabajadores_reingresos"][0]["masterKeys"] = array();
	$masterTablesData["cat_trabajadores_reingresos"][0]["masterKeys"][]="cat_trabajadores_altas_id";
				$masterTablesData["cat_trabajadores_reingresos"][0]["detailKeys"] = array();
	$masterTablesData["cat_trabajadores_reingresos"][0]["detailKeys"][]="cat_trabajadores_altas_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_reingresos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_reingresos_id,  	cat_trabajadores_altas_id,  	fecha,  	cat_trabajadores_alta_baja_mu_id,  	observaciones,  	vigente,  	capturista,  	time_stamp";
$proto0["m_strFrom"] = "FROM cat_trabajadores_reingresos";
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
	"m_strName" => "cat_trabajadores_reingresos_id",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_reingresos"
));

$proto6["m_sql"] = "cat_trabajadores_reingresos_id";
$proto6["m_srcTableName"] = "cat_trabajadores_reingresos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_reingresos"
));

$proto8["m_sql"] = "cat_trabajadores_altas_id";
$proto8["m_srcTableName"] = "cat_trabajadores_reingresos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_reingresos"
));

$proto10["m_sql"] = "fecha";
$proto10["m_srcTableName"] = "cat_trabajadores_reingresos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_alta_baja_mu_id",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_reingresos"
));

$proto12["m_sql"] = "cat_trabajadores_alta_baja_mu_id";
$proto12["m_srcTableName"] = "cat_trabajadores_reingresos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_reingresos"
));

$proto14["m_sql"] = "observaciones";
$proto14["m_srcTableName"] = "cat_trabajadores_reingresos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_reingresos"
));

$proto16["m_sql"] = "vigente";
$proto16["m_srcTableName"] = "cat_trabajadores_reingresos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_reingresos"
));

$proto18["m_sql"] = "capturista";
$proto18["m_srcTableName"] = "cat_trabajadores_reingresos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_reingresos"
));

$proto20["m_sql"] = "time_stamp";
$proto20["m_srcTableName"] = "cat_trabajadores_reingresos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "cat_trabajadores_reingresos";
$proto23["m_srcTableName"] = "cat_trabajadores_reingresos";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "cat_trabajadores_reingresos_id";
$proto23["m_columns"][] = "cat_trabajadores_altas_id";
$proto23["m_columns"][] = "fecha";
$proto23["m_columns"][] = "cat_trabajadores_alta_baja_mu_id";
$proto23["m_columns"][] = "observaciones";
$proto23["m_columns"][] = "vigente";
$proto23["m_columns"][] = "capturista";
$proto23["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "cat_trabajadores_reingresos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_trabajadores_reingresos";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_reingresos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_reingresos = createSqlQuery_cat_trabajadores_reingresos();


	
		;

								

$tdatacat_trabajadores_reingresos[".sqlquery"] = $queryData_cat_trabajadores_reingresos;



$tdatacat_trabajadores_reingresos[".hasEvents"] = false;

?>