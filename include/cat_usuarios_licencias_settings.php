<?php
$tdatacat_usuarios_licencias = array();
$tdatacat_usuarios_licencias[".searchableFields"] = array();
$tdatacat_usuarios_licencias[".ShortName"] = "cat_usuarios_licencias";
$tdatacat_usuarios_licencias[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_usuarios_licencias[".OriginalTable"] = "cat_usuarios_licencias";


$tdatacat_usuarios_licencias[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_usuarios_licencias[".originalPagesByType"] = $tdatacat_usuarios_licencias[".pagesByType"];
$tdatacat_usuarios_licencias[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_usuarios_licencias[".originalPages"] = $tdatacat_usuarios_licencias[".pages"];
$tdatacat_usuarios_licencias[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_usuarios_licencias[".originalDefaultPages"] = $tdatacat_usuarios_licencias[".defaultPages"];

//	field labels
$fieldLabelscat_usuarios_licencias = array();
$fieldToolTipscat_usuarios_licencias = array();
$pageTitlescat_usuarios_licencias = array();
$placeHolderscat_usuarios_licencias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_usuarios_licencias["Spanish"] = array();
	$fieldToolTipscat_usuarios_licencias["Spanish"] = array();
	$placeHolderscat_usuarios_licencias["Spanish"] = array();
	$pageTitlescat_usuarios_licencias["Spanish"] = array();
	$fieldLabelscat_usuarios_licencias["Spanish"]["cat_usuarios_licencias_id"] = "Licencia";
	$fieldToolTipscat_usuarios_licencias["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_usuarios_licencias["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_usuarios_licencias["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_usuarios_licencias["Spanish"]["time_stamp"] = "";
	$placeHolderscat_usuarios_licencias["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_usuarios_licencias["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_usuarios_licencias["Spanish"]["vigente"] = "";
	$placeHolderscat_usuarios_licencias["Spanish"]["vigente"] = "";
	$fieldLabelscat_usuarios_licencias["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_usuarios_licencias["Spanish"]["capturista"] = "";
	$placeHolderscat_usuarios_licencias["Spanish"]["capturista"] = "";
	$fieldLabelscat_usuarios_licencias["Spanish"]["descripcion_licencia"] = "Descripcion";
	$fieldToolTipscat_usuarios_licencias["Spanish"]["descripcion_licencia"] = "";
	$placeHolderscat_usuarios_licencias["Spanish"]["descripcion_licencia"] = "";
	$fieldLabelscat_usuarios_licencias["Spanish"]["fecha_inicio"] = "Fecha Inicio";
	$fieldToolTipscat_usuarios_licencias["Spanish"]["fecha_inicio"] = "";
	$placeHolderscat_usuarios_licencias["Spanish"]["fecha_inicio"] = "";
	$fieldLabelscat_usuarios_licencias["Spanish"]["fecha_termino"] = "Fecha Termino";
	$fieldToolTipscat_usuarios_licencias["Spanish"]["fecha_termino"] = "";
	$placeHolderscat_usuarios_licencias["Spanish"]["fecha_termino"] = "";
	$fieldLabelscat_usuarios_licencias["Spanish"]["cat_apps_mu_id"] = "Cat Apps Mu Id";
	$fieldToolTipscat_usuarios_licencias["Spanish"]["cat_apps_mu_id"] = "";
	$placeHolderscat_usuarios_licencias["Spanish"]["cat_apps_mu_id"] = "";
	$fieldLabelscat_usuarios_licencias["Spanish"]["endpoint"] = "Endpoint/base de datos";
	$fieldToolTipscat_usuarios_licencias["Spanish"]["endpoint"] = "";
	$placeHolderscat_usuarios_licencias["Spanish"]["endpoint"] = "";
	if (count($fieldToolTipscat_usuarios_licencias["Spanish"]))
		$tdatacat_usuarios_licencias[".isUseToolTips"] = true;
}





$tdatacat_usuarios_licencias[".shortTableName"] = "cat_usuarios_licencias";
$tdatacat_usuarios_licencias[".nSecOptions"] = 0;

$tdatacat_usuarios_licencias[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_usuarios_licencias[".entityType"] = 0;
$tdatacat_usuarios_licencias[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_usuarios_licencias[".strOriginalTableName"] = "cat_usuarios_licencias";

	



$tdatacat_usuarios_licencias[".showAddInPopup"] = false;

$tdatacat_usuarios_licencias[".showEditInPopup"] = false;

$tdatacat_usuarios_licencias[".showViewInPopup"] = false;

$tdatacat_usuarios_licencias[".listAjax"] = false;
//	temporary
//$tdatacat_usuarios_licencias[".listAjax"] = false;

	$tdatacat_usuarios_licencias[".audit"] = true;

	$tdatacat_usuarios_licencias[".locking"] = true;


$pages = $tdatacat_usuarios_licencias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_usuarios_licencias[".edit"] = true;
	$tdatacat_usuarios_licencias[".afterEditAction"] = 1;
	$tdatacat_usuarios_licencias[".closePopupAfterEdit"] = 1;
	$tdatacat_usuarios_licencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_usuarios_licencias[".add"] = true;
$tdatacat_usuarios_licencias[".afterAddAction"] = 1;
$tdatacat_usuarios_licencias[".closePopupAfterAdd"] = 1;
$tdatacat_usuarios_licencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_usuarios_licencias[".list"] = true;
}



$tdatacat_usuarios_licencias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_usuarios_licencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_usuarios_licencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_usuarios_licencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_usuarios_licencias[".printFriendly"] = true;
}



$tdatacat_usuarios_licencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_usuarios_licencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_usuarios_licencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_usuarios_licencias[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_usuarios_licencias[".ajaxCodeSnippetAdded"] = false;

$tdatacat_usuarios_licencias[".buttonsAdded"] = false;

$tdatacat_usuarios_licencias[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacat_usuarios_licencias[".isUseTimeForSearch"] = false;


$tdatacat_usuarios_licencias[".badgeColor"] = "4682B4";


$tdatacat_usuarios_licencias[".allSearchFields"] = array();
$tdatacat_usuarios_licencias[".filterFields"] = array();
$tdatacat_usuarios_licencias[".requiredSearchFields"] = array();

$tdatacat_usuarios_licencias[".googleLikeFields"] = array();
$tdatacat_usuarios_licencias[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatacat_usuarios_licencias[".googleLikeFields"][] = "time_stamp";
$tdatacat_usuarios_licencias[".googleLikeFields"][] = "vigente";
$tdatacat_usuarios_licencias[".googleLikeFields"][] = "capturista";
$tdatacat_usuarios_licencias[".googleLikeFields"][] = "descripcion_licencia";
$tdatacat_usuarios_licencias[".googleLikeFields"][] = "fecha_inicio";
$tdatacat_usuarios_licencias[".googleLikeFields"][] = "fecha_termino";
$tdatacat_usuarios_licencias[".googleLikeFields"][] = "cat_apps_mu_id";
$tdatacat_usuarios_licencias[".googleLikeFields"][] = "endpoint";



$tdatacat_usuarios_licencias[".tableType"] = "list";

$tdatacat_usuarios_licencias[".printerPageOrientation"] = 0;
$tdatacat_usuarios_licencias[".nPrinterPageScale"] = 100;

$tdatacat_usuarios_licencias[".nPrinterSplitRecords"] = 40;

$tdatacat_usuarios_licencias[".geocodingEnabled"] = false;





$tdatacat_usuarios_licencias[".isResizeColumns"] = true;





$tdatacat_usuarios_licencias[".pageSize"] = 20;

$tdatacat_usuarios_licencias[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY cat_usuarios_licencias_id DESC";
$tdatacat_usuarios_licencias[".strOrderBy"] = $tstrOrderBy;

$tdatacat_usuarios_licencias[".orderindexes"] = array();
			$tdatacat_usuarios_licencias[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "cat_usuarios_licencias_id");


$tdatacat_usuarios_licencias[".sqlHead"] = "SELECT cat_usuarios_licencias_id,  time_stamp,  vigente,  capturista,  descripcion_licencia,  fecha_inicio,  fecha_termino,  cat_apps_mu_id,  endpoint";
$tdatacat_usuarios_licencias[".sqlFrom"] = "FROM cat_usuarios_licencias";
$tdatacat_usuarios_licencias[".sqlWhereExpr"] = "";
$tdatacat_usuarios_licencias[".sqlTail"] = "";

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
$tdatacat_usuarios_licencias[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_usuarios_licencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_usuarios_licencias[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_usuarios_licencias[".highlightSearchResults"] = true;

$tableKeyscat_usuarios_licencias = array();
$tableKeyscat_usuarios_licencias[] = "cat_usuarios_licencias_id";
$tdatacat_usuarios_licencias[".Keys"] = $tableKeyscat_usuarios_licencias;


$tdatacat_usuarios_licencias[".hideMobileList"] = array();




//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_licencias","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

		$fdata["sourceSingle"] = "cat_usuarios_licencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_licencias_id";

	
	
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


	$tdatacat_usuarios_licencias["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_usuarios_licencias[".searchableFields"][] = "cat_usuarios_licencias_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_licencias","time_stamp");
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


	$tdatacat_usuarios_licencias["time_stamp"] = $fdata;
		$tdatacat_usuarios_licencias[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_licencias","vigente");
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


	$tdatacat_usuarios_licencias["vigente"] = $fdata;
		$tdatacat_usuarios_licencias[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_licencias","capturista");
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


	$tdatacat_usuarios_licencias["capturista"] = $fdata;
		$tdatacat_usuarios_licencias[".searchableFields"][] = "capturista";
//	descripcion_licencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_licencia";
	$fdata["GoodName"] = "descripcion_licencia";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_licencias","descripcion_licencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_licencia";

		$fdata["sourceSingle"] = "descripcion_licencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_licencia";

	
	
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


	$tdatacat_usuarios_licencias["descripcion_licencia"] = $fdata;
		$tdatacat_usuarios_licencias[".searchableFields"][] = "descripcion_licencia";
//	fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_inicio";
	$fdata["GoodName"] = "fecha_inicio";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_licencias","fecha_inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_inicio";

		$fdata["sourceSingle"] = "fecha_inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_inicio";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatacat_usuarios_licencias["fecha_inicio"] = $fdata;
		$tdatacat_usuarios_licencias[".searchableFields"][] = "fecha_inicio";
//	fecha_termino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_termino";
	$fdata["GoodName"] = "fecha_termino";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_licencias","fecha_termino");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_termino";

		$fdata["sourceSingle"] = "fecha_termino";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_termino";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatacat_usuarios_licencias["fecha_termino"] = $fdata;
		$tdatacat_usuarios_licencias[".searchableFields"][] = "fecha_termino";
//	cat_apps_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_apps_mu_id";
	$fdata["GoodName"] = "cat_apps_mu_id";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_licencias","cat_apps_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_apps_mu_id";

		$fdata["sourceSingle"] = "cat_apps_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_apps_mu_id";

	
	
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


	$tdatacat_usuarios_licencias["cat_apps_mu_id"] = $fdata;
		$tdatacat_usuarios_licencias[".searchableFields"][] = "cat_apps_mu_id";
//	endpoint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "endpoint";
	$fdata["GoodName"] = "endpoint";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_licencias","endpoint");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "endpoint";

		$fdata["sourceSingle"] = "endpoint";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "endpoint";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Password");
							
	
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


	$tdatacat_usuarios_licencias["endpoint"] = $fdata;
		$tdatacat_usuarios_licencias[".searchableFields"][] = "endpoint";


$tables_data["cat_usuarios_licencias"]=&$tdatacat_usuarios_licencias;
$field_labels["cat_usuarios_licencias"] = &$fieldLabelscat_usuarios_licencias;
$fieldToolTips["cat_usuarios_licencias"] = &$fieldToolTipscat_usuarios_licencias;
$placeHolders["cat_usuarios_licencias"] = &$placeHolderscat_usuarios_licencias;
$page_titles["cat_usuarios_licencias"] = &$pageTitlescat_usuarios_licencias;


changeTextControlsToDate( "cat_usuarios_licencias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_usuarios_licencias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_usuarios_licencias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_usuarios_licencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_usuarios_licencias_id,  time_stamp,  vigente,  capturista,  descripcion_licencia,  fecha_inicio,  fecha_termino,  cat_apps_mu_id,  endpoint";
$proto0["m_strFrom"] = "FROM cat_usuarios_licencias";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY cat_usuarios_licencias_id DESC";
	
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
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_usuarios_licencias"
));

$proto6["m_sql"] = "cat_usuarios_licencias_id";
$proto6["m_srcTableName"] = "cat_usuarios_licencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_usuarios_licencias"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_usuarios_licencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_usuarios_licencias"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_usuarios_licencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_usuarios_licencias"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_usuarios_licencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_licencia",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_usuarios_licencias"
));

$proto14["m_sql"] = "descripcion_licencia";
$proto14["m_srcTableName"] = "cat_usuarios_licencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_inicio",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_usuarios_licencias"
));

$proto16["m_sql"] = "fecha_inicio";
$proto16["m_srcTableName"] = "cat_usuarios_licencias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_termino",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_usuarios_licencias"
));

$proto18["m_sql"] = "fecha_termino";
$proto18["m_srcTableName"] = "cat_usuarios_licencias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_apps_mu_id",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_usuarios_licencias"
));

$proto20["m_sql"] = "cat_apps_mu_id";
$proto20["m_srcTableName"] = "cat_usuarios_licencias";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "endpoint",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_usuarios_licencias"
));

$proto22["m_sql"] = "endpoint";
$proto22["m_srcTableName"] = "cat_usuarios_licencias";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cat_usuarios_licencias";
$proto25["m_srcTableName"] = "cat_usuarios_licencias";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_usuarios_licencias_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "descripcion_licencia";
$proto25["m_columns"][] = "fecha_inicio";
$proto25["m_columns"][] = "fecha_termino";
$proto25["m_columns"][] = "cat_apps_mu_id";
$proto25["m_columns"][] = "endpoint";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cat_usuarios_licencias";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cat_usuarios_licencias";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_usuarios_licencias"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="cat_usuarios_licencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_usuarios_licencias = createSqlQuery_cat_usuarios_licencias();


	
		;

									

$tdatacat_usuarios_licencias[".sqlquery"] = $queryData_cat_usuarios_licencias;



include_once(getabspath("include/cat_usuarios_licencias_events.php"));
$tdatacat_usuarios_licencias[".hasEvents"] = true;

?>