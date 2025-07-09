<?php
$tdatacat_nominas_incidencias = array();
$tdatacat_nominas_incidencias[".searchableFields"] = array();
$tdatacat_nominas_incidencias[".ShortName"] = "cat_nominas_incidencias";
$tdatacat_nominas_incidencias[".OwnerID"] = "";
$tdatacat_nominas_incidencias[".OriginalTable"] = "cat_nominas_incidencias";


$tdatacat_nominas_incidencias[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_incidencias[".originalPagesByType"] = $tdatacat_nominas_incidencias[".pagesByType"];
$tdatacat_nominas_incidencias[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_incidencias[".originalPages"] = $tdatacat_nominas_incidencias[".pages"];
$tdatacat_nominas_incidencias[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_nominas_incidencias[".originalDefaultPages"] = $tdatacat_nominas_incidencias[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_incidencias = array();
$fieldToolTipscat_nominas_incidencias = array();
$pageTitlescat_nominas_incidencias = array();
$placeHolderscat_nominas_incidencias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_incidencias["Spanish"] = array();
	$fieldToolTipscat_nominas_incidencias["Spanish"] = array();
	$placeHolderscat_nominas_incidencias["Spanish"] = array();
	$pageTitlescat_nominas_incidencias["Spanish"] = array();
	$fieldLabelscat_nominas_incidencias["Spanish"]["cat_nominas_incidencias_id"] = "Cat Nominas Incidencias Id";
	$fieldToolTipscat_nominas_incidencias["Spanish"]["cat_nominas_incidencias_id"] = "";
	$placeHolderscat_nominas_incidencias["Spanish"]["cat_nominas_incidencias_id"] = "";
	$fieldLabelscat_nominas_incidencias["Spanish"]["descripcion_incidencia"] = "Incidencia";
	$fieldToolTipscat_nominas_incidencias["Spanish"]["descripcion_incidencia"] = "";
	$placeHolderscat_nominas_incidencias["Spanish"]["descripcion_incidencia"] = "";
	$fieldLabelscat_nominas_incidencias["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_incidencias["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_incidencias["Spanish"]["vigente"] = "";
	$fieldLabelscat_nominas_incidencias["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_incidencias["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_incidencias["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_incidencias["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_incidencias["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_incidencias["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_nominas_incidencias["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_nominas_incidencias["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_nominas_incidencias["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_nominas_incidencias["Spanish"]))
		$tdatacat_nominas_incidencias[".isUseToolTips"] = true;
}





$tdatacat_nominas_incidencias[".shortTableName"] = "cat_nominas_incidencias";
$tdatacat_nominas_incidencias[".nSecOptions"] = 0;

$tdatacat_nominas_incidencias[".mainTableOwnerID"] = "";
$tdatacat_nominas_incidencias[".entityType"] = 0;
$tdatacat_nominas_incidencias[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_incidencias[".strOriginalTableName"] = "cat_nominas_incidencias";

	



$tdatacat_nominas_incidencias[".showAddInPopup"] = false;

$tdatacat_nominas_incidencias[".showEditInPopup"] = false;

$tdatacat_nominas_incidencias[".showViewInPopup"] = false;

$tdatacat_nominas_incidencias[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_incidencias[".listAjax"] = false;

	$tdatacat_nominas_incidencias[".audit"] = false;

	$tdatacat_nominas_incidencias[".locking"] = false;


$pages = $tdatacat_nominas_incidencias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_incidencias[".edit"] = true;
	$tdatacat_nominas_incidencias[".afterEditAction"] = 1;
	$tdatacat_nominas_incidencias[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_incidencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_incidencias[".add"] = true;
$tdatacat_nominas_incidencias[".afterAddAction"] = 1;
$tdatacat_nominas_incidencias[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_incidencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_incidencias[".list"] = true;
}



$tdatacat_nominas_incidencias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_incidencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_incidencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_incidencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_incidencias[".printFriendly"] = true;
}



$tdatacat_nominas_incidencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_incidencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_incidencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_incidencias[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_incidencias[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_incidencias[".buttonsAdded"] = false;

$tdatacat_nominas_incidencias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_incidencias[".isUseTimeForSearch"] = false;


$tdatacat_nominas_incidencias[".badgeColor"] = "BC8F8F";


$tdatacat_nominas_incidencias[".allSearchFields"] = array();
$tdatacat_nominas_incidencias[".filterFields"] = array();
$tdatacat_nominas_incidencias[".requiredSearchFields"] = array();

$tdatacat_nominas_incidencias[".googleLikeFields"] = array();
$tdatacat_nominas_incidencias[".googleLikeFields"][] = "cat_nominas_incidencias_id";
$tdatacat_nominas_incidencias[".googleLikeFields"][] = "descripcion_incidencia";
$tdatacat_nominas_incidencias[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_incidencias[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_incidencias[".googleLikeFields"][] = "time_stamp";
$tdatacat_nominas_incidencias[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_nominas_incidencias[".tableType"] = "list";

$tdatacat_nominas_incidencias[".printerPageOrientation"] = 0;
$tdatacat_nominas_incidencias[".nPrinterPageScale"] = 100;

$tdatacat_nominas_incidencias[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_incidencias[".geocodingEnabled"] = false;





$tdatacat_nominas_incidencias[".isResizeColumns"] = true;





$tdatacat_nominas_incidencias[".pageSize"] = 20;

$tdatacat_nominas_incidencias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_incidencias[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_incidencias[".orderindexes"] = array();


$tdatacat_nominas_incidencias[".sqlHead"] = "SELECT cat_nominas_incidencias.cat_nominas_incidencias_id,  cat_nominas_incidencias.descripcion_incidencia,  cat_nominas_incidencias.vigente,  cat_nominas_incidencias.capturista,  cat_nominas_incidencias.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_nominas_incidencias[".sqlFrom"] = "FROM cat_nominas_incidencias  INNER JOIN cat_usuarios ON cat_nominas_incidencias.capturista = cat_usuarios.usuario";
$tdatacat_nominas_incidencias[".sqlWhereExpr"] = "";
$tdatacat_nominas_incidencias[".sqlTail"] = "";

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
$tdatacat_nominas_incidencias[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_incidencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_incidencias[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_incidencias[".highlightSearchResults"] = true;

$tableKeyscat_nominas_incidencias = array();
$tableKeyscat_nominas_incidencias[] = "cat_nominas_incidencias_id";
$tdatacat_nominas_incidencias[".Keys"] = $tableKeyscat_nominas_incidencias;


$tdatacat_nominas_incidencias[".hideMobileList"] = array();




//	cat_nominas_incidencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_nominas_incidencias_id";
	$fdata["GoodName"] = "cat_nominas_incidencias_id";
	$fdata["ownerTable"] = "cat_nominas_incidencias";
	$fdata["Label"] = GetFieldLabel("cat_nominas_incidencias","cat_nominas_incidencias_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_incidencias_id";

		$fdata["sourceSingle"] = "cat_nominas_incidencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_incidencias.cat_nominas_incidencias_id";

	
	
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


	$tdatacat_nominas_incidencias["cat_nominas_incidencias_id"] = $fdata;
		$tdatacat_nominas_incidencias[".searchableFields"][] = "cat_nominas_incidencias_id";
//	descripcion_incidencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_incidencia";
	$fdata["GoodName"] = "descripcion_incidencia";
	$fdata["ownerTable"] = "cat_nominas_incidencias";
	$fdata["Label"] = GetFieldLabel("cat_nominas_incidencias","descripcion_incidencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_incidencia";

		$fdata["sourceSingle"] = "descripcion_incidencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_incidencias.descripcion_incidencia";

	
	
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


	$tdatacat_nominas_incidencias["descripcion_incidencia"] = $fdata;
		$tdatacat_nominas_incidencias[".searchableFields"][] = "descripcion_incidencia";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_incidencias";
	$fdata["Label"] = GetFieldLabel("cat_nominas_incidencias","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_incidencias.vigente";

	
	
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


	$tdatacat_nominas_incidencias["vigente"] = $fdata;
		$tdatacat_nominas_incidencias[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_incidencias";
	$fdata["Label"] = GetFieldLabel("cat_nominas_incidencias","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_incidencias.capturista";

	
	
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


	$tdatacat_nominas_incidencias["capturista"] = $fdata;
		$tdatacat_nominas_incidencias[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_incidencias";
	$fdata["Label"] = GetFieldLabel("cat_nominas_incidencias","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_incidencias.time_stamp";

	
	
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


	$tdatacat_nominas_incidencias["time_stamp"] = $fdata;
		$tdatacat_nominas_incidencias[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_incidencias","cat_usuarios_licencias_id");
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


	$tdatacat_nominas_incidencias["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_nominas_incidencias[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_nominas_incidencias"]=&$tdatacat_nominas_incidencias;
$field_labels["cat_nominas_incidencias"] = &$fieldLabelscat_nominas_incidencias;
$fieldToolTips["cat_nominas_incidencias"] = &$fieldToolTipscat_nominas_incidencias;
$placeHolders["cat_nominas_incidencias"] = &$placeHolderscat_nominas_incidencias;
$page_titles["cat_nominas_incidencias"] = &$pageTitlescat_nominas_incidencias;


changeTextControlsToDate( "cat_nominas_incidencias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_incidencias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_incidencias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_incidencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_nominas_incidencias.cat_nominas_incidencias_id,  cat_nominas_incidencias.descripcion_incidencia,  cat_nominas_incidencias.vigente,  cat_nominas_incidencias.capturista,  cat_nominas_incidencias.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_nominas_incidencias  INNER JOIN cat_usuarios ON cat_nominas_incidencias.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_nominas_incidencias_id",
	"m_strTable" => "cat_nominas_incidencias",
	"m_srcTableName" => "cat_nominas_incidencias"
));

$proto6["m_sql"] = "cat_nominas_incidencias.cat_nominas_incidencias_id";
$proto6["m_srcTableName"] = "cat_nominas_incidencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_incidencia",
	"m_strTable" => "cat_nominas_incidencias",
	"m_srcTableName" => "cat_nominas_incidencias"
));

$proto8["m_sql"] = "cat_nominas_incidencias.descripcion_incidencia";
$proto8["m_srcTableName"] = "cat_nominas_incidencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_nominas_incidencias",
	"m_srcTableName" => "cat_nominas_incidencias"
));

$proto10["m_sql"] = "cat_nominas_incidencias.vigente";
$proto10["m_srcTableName"] = "cat_nominas_incidencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_incidencias",
	"m_srcTableName" => "cat_nominas_incidencias"
));

$proto12["m_sql"] = "cat_nominas_incidencias.capturista";
$proto12["m_srcTableName"] = "cat_nominas_incidencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_incidencias",
	"m_srcTableName" => "cat_nominas_incidencias"
));

$proto14["m_sql"] = "cat_nominas_incidencias.time_stamp";
$proto14["m_srcTableName"] = "cat_nominas_incidencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_nominas_incidencias"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_nominas_incidencias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_nominas_incidencias";
$proto19["m_srcTableName"] = "cat_nominas_incidencias";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_nominas_incidencias_id";
$proto19["m_columns"][] = "descripcion_incidencia";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_nominas_incidencias";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_nominas_incidencias";
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
$proto23["m_srcTableName"] = "cat_nominas_incidencias";
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
$proto22["m_sql"] = "INNER JOIN cat_usuarios ON cat_nominas_incidencias.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_nominas_incidencias";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_nominas_incidencias.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_nominas_incidencias"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_nominas_incidencias.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_nominas_incidencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_incidencias = createSqlQuery_cat_nominas_incidencias();


	
		;

						

$tdatacat_nominas_incidencias[".sqlquery"] = $queryData_cat_nominas_incidencias;



$tdatacat_nominas_incidencias[".hasEvents"] = false;

?>