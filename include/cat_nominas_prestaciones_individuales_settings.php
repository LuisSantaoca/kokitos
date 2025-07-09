<?php
$tdatacat_nominas_prestaciones_individuales = array();
$tdatacat_nominas_prestaciones_individuales[".searchableFields"] = array();
$tdatacat_nominas_prestaciones_individuales[".ShortName"] = "cat_nominas_prestaciones_individuales";
$tdatacat_nominas_prestaciones_individuales[".OwnerID"] = "";
$tdatacat_nominas_prestaciones_individuales[".OriginalTable"] = "cat_nominas_prestaciones_individuales";


$tdatacat_nominas_prestaciones_individuales[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_prestaciones_individuales[".originalPagesByType"] = $tdatacat_nominas_prestaciones_individuales[".pagesByType"];
$tdatacat_nominas_prestaciones_individuales[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_prestaciones_individuales[".originalPages"] = $tdatacat_nominas_prestaciones_individuales[".pages"];
$tdatacat_nominas_prestaciones_individuales[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_nominas_prestaciones_individuales[".originalDefaultPages"] = $tdatacat_nominas_prestaciones_individuales[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_prestaciones_individuales = array();
$fieldToolTipscat_nominas_prestaciones_individuales = array();
$pageTitlescat_nominas_prestaciones_individuales = array();
$placeHolderscat_nominas_prestaciones_individuales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_prestaciones_individuales["Spanish"] = array();
	$fieldToolTipscat_nominas_prestaciones_individuales["Spanish"] = array();
	$placeHolderscat_nominas_prestaciones_individuales["Spanish"] = array();
	$pageTitlescat_nominas_prestaciones_individuales["Spanish"] = array();
	$fieldLabelscat_nominas_prestaciones_individuales["Spanish"]["cat_nominas_prestaciones_individuales_id"] = "Cat Nominas Prestaciones Individuales Id";
	$fieldToolTipscat_nominas_prestaciones_individuales["Spanish"]["cat_nominas_prestaciones_individuales_id"] = "";
	$placeHolderscat_nominas_prestaciones_individuales["Spanish"]["cat_nominas_prestaciones_individuales_id"] = "";
	$fieldLabelscat_nominas_prestaciones_individuales["Spanish"]["descripcion_prestacion_individual"] = "Prestacion Individual";
	$fieldToolTipscat_nominas_prestaciones_individuales["Spanish"]["descripcion_prestacion_individual"] = "";
	$placeHolderscat_nominas_prestaciones_individuales["Spanish"]["descripcion_prestacion_individual"] = "";
	$fieldLabelscat_nominas_prestaciones_individuales["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_prestaciones_individuales["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_prestaciones_individuales["Spanish"]["vigente"] = "";
	$fieldLabelscat_nominas_prestaciones_individuales["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_prestaciones_individuales["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_prestaciones_individuales["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_prestaciones_individuales["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_prestaciones_individuales["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_prestaciones_individuales["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_nominas_prestaciones_individuales["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_nominas_prestaciones_individuales["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_nominas_prestaciones_individuales["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_nominas_prestaciones_individuales["Spanish"]))
		$tdatacat_nominas_prestaciones_individuales[".isUseToolTips"] = true;
}





$tdatacat_nominas_prestaciones_individuales[".shortTableName"] = "cat_nominas_prestaciones_individuales";
$tdatacat_nominas_prestaciones_individuales[".nSecOptions"] = 0;

$tdatacat_nominas_prestaciones_individuales[".mainTableOwnerID"] = "";
$tdatacat_nominas_prestaciones_individuales[".entityType"] = 0;
$tdatacat_nominas_prestaciones_individuales[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_prestaciones_individuales[".strOriginalTableName"] = "cat_nominas_prestaciones_individuales";

	



$tdatacat_nominas_prestaciones_individuales[".showAddInPopup"] = false;

$tdatacat_nominas_prestaciones_individuales[".showEditInPopup"] = false;

$tdatacat_nominas_prestaciones_individuales[".showViewInPopup"] = false;

$tdatacat_nominas_prestaciones_individuales[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_prestaciones_individuales[".listAjax"] = false;

	$tdatacat_nominas_prestaciones_individuales[".audit"] = false;

	$tdatacat_nominas_prestaciones_individuales[".locking"] = false;


$pages = $tdatacat_nominas_prestaciones_individuales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_prestaciones_individuales[".edit"] = true;
	$tdatacat_nominas_prestaciones_individuales[".afterEditAction"] = 1;
	$tdatacat_nominas_prestaciones_individuales[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_prestaciones_individuales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_prestaciones_individuales[".add"] = true;
$tdatacat_nominas_prestaciones_individuales[".afterAddAction"] = 1;
$tdatacat_nominas_prestaciones_individuales[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_prestaciones_individuales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_prestaciones_individuales[".list"] = true;
}



$tdatacat_nominas_prestaciones_individuales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_prestaciones_individuales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_prestaciones_individuales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_prestaciones_individuales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_prestaciones_individuales[".printFriendly"] = true;
}



$tdatacat_nominas_prestaciones_individuales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_prestaciones_individuales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_prestaciones_individuales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_prestaciones_individuales[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_prestaciones_individuales[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_prestaciones_individuales[".buttonsAdded"] = false;

$tdatacat_nominas_prestaciones_individuales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_prestaciones_individuales[".isUseTimeForSearch"] = false;


$tdatacat_nominas_prestaciones_individuales[".badgeColor"] = "6B8E23";


$tdatacat_nominas_prestaciones_individuales[".allSearchFields"] = array();
$tdatacat_nominas_prestaciones_individuales[".filterFields"] = array();
$tdatacat_nominas_prestaciones_individuales[".requiredSearchFields"] = array();

$tdatacat_nominas_prestaciones_individuales[".googleLikeFields"] = array();
$tdatacat_nominas_prestaciones_individuales[".googleLikeFields"][] = "cat_nominas_prestaciones_individuales_id";
$tdatacat_nominas_prestaciones_individuales[".googleLikeFields"][] = "descripcion_prestacion_individual";
$tdatacat_nominas_prestaciones_individuales[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_prestaciones_individuales[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_prestaciones_individuales[".googleLikeFields"][] = "time_stamp";
$tdatacat_nominas_prestaciones_individuales[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_nominas_prestaciones_individuales[".tableType"] = "list";

$tdatacat_nominas_prestaciones_individuales[".printerPageOrientation"] = 0;
$tdatacat_nominas_prestaciones_individuales[".nPrinterPageScale"] = 100;

$tdatacat_nominas_prestaciones_individuales[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_prestaciones_individuales[".geocodingEnabled"] = false;





$tdatacat_nominas_prestaciones_individuales[".isResizeColumns"] = true;





$tdatacat_nominas_prestaciones_individuales[".pageSize"] = 20;

$tdatacat_nominas_prestaciones_individuales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_prestaciones_individuales[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_prestaciones_individuales[".orderindexes"] = array();


$tdatacat_nominas_prestaciones_individuales[".sqlHead"] = "SELECT cat_nominas_prestaciones_individuales.cat_nominas_prestaciones_individuales_id,  cat_nominas_prestaciones_individuales.descripcion_prestacion_individual,  cat_nominas_prestaciones_individuales.vigente,  cat_nominas_prestaciones_individuales.capturista,  cat_nominas_prestaciones_individuales.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_nominas_prestaciones_individuales[".sqlFrom"] = "FROM cat_nominas_prestaciones_individuales  INNER JOIN cat_usuarios ON cat_nominas_prestaciones_individuales.capturista = cat_usuarios.usuario";
$tdatacat_nominas_prestaciones_individuales[".sqlWhereExpr"] = "";
$tdatacat_nominas_prestaciones_individuales[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios.cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_nominas_prestaciones_individuales[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_prestaciones_individuales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_prestaciones_individuales[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_prestaciones_individuales[".highlightSearchResults"] = true;

$tableKeyscat_nominas_prestaciones_individuales = array();
$tableKeyscat_nominas_prestaciones_individuales[] = "cat_nominas_prestaciones_individuales_id";
$tdatacat_nominas_prestaciones_individuales[".Keys"] = $tableKeyscat_nominas_prestaciones_individuales;


$tdatacat_nominas_prestaciones_individuales[".hideMobileList"] = array();




//	cat_nominas_prestaciones_individuales_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_nominas_prestaciones_individuales_id";
	$fdata["GoodName"] = "cat_nominas_prestaciones_individuales_id";
	$fdata["ownerTable"] = "cat_nominas_prestaciones_individuales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestaciones_individuales","cat_nominas_prestaciones_individuales_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_prestaciones_individuales_id";

		$fdata["sourceSingle"] = "cat_nominas_prestaciones_individuales_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_prestaciones_individuales.cat_nominas_prestaciones_individuales_id";

	
	
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


	$tdatacat_nominas_prestaciones_individuales["cat_nominas_prestaciones_individuales_id"] = $fdata;
		$tdatacat_nominas_prestaciones_individuales[".searchableFields"][] = "cat_nominas_prestaciones_individuales_id";
//	descripcion_prestacion_individual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_prestacion_individual";
	$fdata["GoodName"] = "descripcion_prestacion_individual";
	$fdata["ownerTable"] = "cat_nominas_prestaciones_individuales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestaciones_individuales","descripcion_prestacion_individual");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_prestacion_individual";

		$fdata["sourceSingle"] = "descripcion_prestacion_individual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_prestaciones_individuales.descripcion_prestacion_individual";

	
	
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


	$tdatacat_nominas_prestaciones_individuales["descripcion_prestacion_individual"] = $fdata;
		$tdatacat_nominas_prestaciones_individuales[".searchableFields"][] = "descripcion_prestacion_individual";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_prestaciones_individuales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestaciones_individuales","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_prestaciones_individuales.vigente";

	
	
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


	$tdatacat_nominas_prestaciones_individuales["vigente"] = $fdata;
		$tdatacat_nominas_prestaciones_individuales[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_prestaciones_individuales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestaciones_individuales","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_prestaciones_individuales.capturista";

	
	
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


	$tdatacat_nominas_prestaciones_individuales["capturista"] = $fdata;
		$tdatacat_nominas_prestaciones_individuales[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_prestaciones_individuales";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestaciones_individuales","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_prestaciones_individuales.time_stamp";

	
	
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


	$tdatacat_nominas_prestaciones_individuales["time_stamp"] = $fdata;
		$tdatacat_nominas_prestaciones_individuales[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestaciones_individuales","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios.cat_usuarios_licencias_id";

	
	
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


	$tdatacat_nominas_prestaciones_individuales["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_nominas_prestaciones_individuales[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_nominas_prestaciones_individuales"]=&$tdatacat_nominas_prestaciones_individuales;
$field_labels["cat_nominas_prestaciones_individuales"] = &$fieldLabelscat_nominas_prestaciones_individuales;
$fieldToolTips["cat_nominas_prestaciones_individuales"] = &$fieldToolTipscat_nominas_prestaciones_individuales;
$placeHolders["cat_nominas_prestaciones_individuales"] = &$placeHolderscat_nominas_prestaciones_individuales;
$page_titles["cat_nominas_prestaciones_individuales"] = &$pageTitlescat_nominas_prestaciones_individuales;


changeTextControlsToDate( "cat_nominas_prestaciones_individuales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_prestaciones_individuales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_prestaciones_individuales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_prestaciones_individuales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_nominas_prestaciones_individuales.cat_nominas_prestaciones_individuales_id,  cat_nominas_prestaciones_individuales.descripcion_prestacion_individual,  cat_nominas_prestaciones_individuales.vigente,  cat_nominas_prestaciones_individuales.capturista,  cat_nominas_prestaciones_individuales.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_nominas_prestaciones_individuales  INNER JOIN cat_usuarios ON cat_nominas_prestaciones_individuales.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_nominas_prestaciones_individuales_id",
	"m_strTable" => "cat_nominas_prestaciones_individuales",
	"m_srcTableName" => "cat_nominas_prestaciones_individuales"
));

$proto6["m_sql"] = "cat_nominas_prestaciones_individuales.cat_nominas_prestaciones_individuales_id";
$proto6["m_srcTableName"] = "cat_nominas_prestaciones_individuales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_prestacion_individual",
	"m_strTable" => "cat_nominas_prestaciones_individuales",
	"m_srcTableName" => "cat_nominas_prestaciones_individuales"
));

$proto8["m_sql"] = "cat_nominas_prestaciones_individuales.descripcion_prestacion_individual";
$proto8["m_srcTableName"] = "cat_nominas_prestaciones_individuales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_nominas_prestaciones_individuales",
	"m_srcTableName" => "cat_nominas_prestaciones_individuales"
));

$proto10["m_sql"] = "cat_nominas_prestaciones_individuales.vigente";
$proto10["m_srcTableName"] = "cat_nominas_prestaciones_individuales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_prestaciones_individuales",
	"m_srcTableName" => "cat_nominas_prestaciones_individuales"
));

$proto12["m_sql"] = "cat_nominas_prestaciones_individuales.capturista";
$proto12["m_srcTableName"] = "cat_nominas_prestaciones_individuales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_prestaciones_individuales",
	"m_srcTableName" => "cat_nominas_prestaciones_individuales"
));

$proto14["m_sql"] = "cat_nominas_prestaciones_individuales.time_stamp";
$proto14["m_srcTableName"] = "cat_nominas_prestaciones_individuales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_nominas_prestaciones_individuales"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_nominas_prestaciones_individuales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_nominas_prestaciones_individuales";
$proto19["m_srcTableName"] = "cat_nominas_prestaciones_individuales";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_nominas_prestaciones_individuales_id";
$proto19["m_columns"][] = "descripcion_prestacion_individual";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_nominas_prestaciones_individuales";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_nominas_prestaciones_individuales";
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
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "cat_usuarios";
$proto23["m_srcTableName"] = "cat_nominas_prestaciones_individuales";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "cat_usuarios_id";
$proto23["m_columns"][] = "time_stamp";
$proto23["m_columns"][] = "vigente";
$proto23["m_columns"][] = "capturista";
$proto23["m_columns"][] = "usuario";
$proto23["m_columns"][] = "cat_usuarios_licencias_id";
$proto23["m_columns"][] = "pass";
$proto23["m_columns"][] = "nombre";
$proto23["m_columns"][] = "correo";
$proto23["m_columns"][] = "cat_trabajadores_altas_id";
$proto23["m_columns"][] = "res_autorizacion";
$proto23["m_columns"][] = "session";
$proto23["m_columns"][] = "tipo";
$proto23["m_columns"][] = "session_v2";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN cat_usuarios ON cat_nominas_prestaciones_individuales.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_nominas_prestaciones_individuales";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_nominas_prestaciones_individuales.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_nominas_prestaciones_individuales"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_nominas_prestaciones_individuales.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_nominas_prestaciones_individuales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_prestaciones_individuales = createSqlQuery_cat_nominas_prestaciones_individuales();


	
		;

						

$tdatacat_nominas_prestaciones_individuales[".sqlquery"] = $queryData_cat_nominas_prestaciones_individuales;



$tdatacat_nominas_prestaciones_individuales[".hasEvents"] = false;

?>