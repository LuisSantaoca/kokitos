<?php
$tdatacat_trabajadores_puestos_areas = array();
$tdatacat_trabajadores_puestos_areas[".searchableFields"] = array();
$tdatacat_trabajadores_puestos_areas[".ShortName"] = "cat_trabajadores_puestos_areas";
$tdatacat_trabajadores_puestos_areas[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_puestos_areas[".OriginalTable"] = "cat_trabajadores_puestos_areas";


$tdatacat_trabajadores_puestos_areas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_puestos_areas[".originalPagesByType"] = $tdatacat_trabajadores_puestos_areas[".pagesByType"];
$tdatacat_trabajadores_puestos_areas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_puestos_areas[".originalPages"] = $tdatacat_trabajadores_puestos_areas[".pages"];
$tdatacat_trabajadores_puestos_areas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_trabajadores_puestos_areas[".originalDefaultPages"] = $tdatacat_trabajadores_puestos_areas[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_puestos_areas = array();
$fieldToolTipscat_trabajadores_puestos_areas = array();
$pageTitlescat_trabajadores_puestos_areas = array();
$placeHolderscat_trabajadores_puestos_areas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_puestos_areas["Spanish"] = array();
	$fieldToolTipscat_trabajadores_puestos_areas["Spanish"] = array();
	$placeHolderscat_trabajadores_puestos_areas["Spanish"] = array();
	$pageTitlescat_trabajadores_puestos_areas["Spanish"] = array();
	$fieldLabelscat_trabajadores_puestos_areas["Spanish"]["cat_trabajadores_puestos_areas_id"] = "Id";
	$fieldToolTipscat_trabajadores_puestos_areas["Spanish"]["cat_trabajadores_puestos_areas_id"] = "";
	$placeHolderscat_trabajadores_puestos_areas["Spanish"]["cat_trabajadores_puestos_areas_id"] = "";
	$fieldLabelscat_trabajadores_puestos_areas["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_trabajadores_puestos_areas["Spanish"]["time_stamp"] = "";
	$placeHolderscat_trabajadores_puestos_areas["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_trabajadores_puestos_areas["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_puestos_areas["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_puestos_areas["Spanish"]["vigente"] = "";
	$fieldLabelscat_trabajadores_puestos_areas["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_trabajadores_puestos_areas["Spanish"]["capturista"] = "";
	$placeHolderscat_trabajadores_puestos_areas["Spanish"]["capturista"] = "";
	$fieldLabelscat_trabajadores_puestos_areas["Spanish"]["descripcion_puesto_area"] = "Descripcion Puesto Area";
	$fieldToolTipscat_trabajadores_puestos_areas["Spanish"]["descripcion_puesto_area"] = "";
	$placeHolderscat_trabajadores_puestos_areas["Spanish"]["descripcion_puesto_area"] = "";
	$fieldLabelscat_trabajadores_puestos_areas["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_trabajadores_puestos_areas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_trabajadores_puestos_areas["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_trabajadores_puestos_areas["Spanish"]))
		$tdatacat_trabajadores_puestos_areas[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_puestos_areas[".shortTableName"] = "cat_trabajadores_puestos_areas";
$tdatacat_trabajadores_puestos_areas[".nSecOptions"] = 0;

$tdatacat_trabajadores_puestos_areas[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_puestos_areas[".entityType"] = 0;
$tdatacat_trabajadores_puestos_areas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_puestos_areas[".strOriginalTableName"] = "cat_trabajadores_puestos_areas";

	



$tdatacat_trabajadores_puestos_areas[".showAddInPopup"] = false;

$tdatacat_trabajadores_puestos_areas[".showEditInPopup"] = false;

$tdatacat_trabajadores_puestos_areas[".showViewInPopup"] = false;

$tdatacat_trabajadores_puestos_areas[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_puestos_areas[".listAjax"] = false;

	$tdatacat_trabajadores_puestos_areas[".audit"] = true;

	$tdatacat_trabajadores_puestos_areas[".locking"] = true;


$pages = $tdatacat_trabajadores_puestos_areas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_puestos_areas[".edit"] = true;
	$tdatacat_trabajadores_puestos_areas[".afterEditAction"] = 1;
	$tdatacat_trabajadores_puestos_areas[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_puestos_areas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_puestos_areas[".add"] = true;
$tdatacat_trabajadores_puestos_areas[".afterAddAction"] = 1;
$tdatacat_trabajadores_puestos_areas[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_puestos_areas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_puestos_areas[".list"] = true;
}



$tdatacat_trabajadores_puestos_areas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_puestos_areas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_puestos_areas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_puestos_areas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_puestos_areas[".printFriendly"] = true;
}



$tdatacat_trabajadores_puestos_areas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_puestos_areas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_puestos_areas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_puestos_areas[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_puestos_areas[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_puestos_areas[".buttonsAdded"] = false;

$tdatacat_trabajadores_puestos_areas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_puestos_areas[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_puestos_areas[".badgeColor"] = "CD5C5C";


$tdatacat_trabajadores_puestos_areas[".allSearchFields"] = array();
$tdatacat_trabajadores_puestos_areas[".filterFields"] = array();
$tdatacat_trabajadores_puestos_areas[".requiredSearchFields"] = array();

$tdatacat_trabajadores_puestos_areas[".googleLikeFields"] = array();
$tdatacat_trabajadores_puestos_areas[".googleLikeFields"][] = "cat_trabajadores_puestos_areas_id";
$tdatacat_trabajadores_puestos_areas[".googleLikeFields"][] = "time_stamp";
$tdatacat_trabajadores_puestos_areas[".googleLikeFields"][] = "vigente";
$tdatacat_trabajadores_puestos_areas[".googleLikeFields"][] = "capturista";
$tdatacat_trabajadores_puestos_areas[".googleLikeFields"][] = "descripcion_puesto_area";
$tdatacat_trabajadores_puestos_areas[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_trabajadores_puestos_areas[".tableType"] = "list";

$tdatacat_trabajadores_puestos_areas[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_puestos_areas[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_puestos_areas[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_puestos_areas[".geocodingEnabled"] = false;





$tdatacat_trabajadores_puestos_areas[".isResizeColumns"] = true;





$tdatacat_trabajadores_puestos_areas[".pageSize"] = 20;

$tdatacat_trabajadores_puestos_areas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_puestos_areas[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_puestos_areas[".orderindexes"] = array();


$tdatacat_trabajadores_puestos_areas[".sqlHead"] = "SELECT cat_trabajadores_puestos_areas.cat_trabajadores_puestos_areas_id,  cat_trabajadores_puestos_areas.time_stamp,  cat_trabajadores_puestos_areas.vigente,  cat_trabajadores_puestos_areas.capturista,  cat_trabajadores_puestos_areas.descripcion_puesto_area,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_trabajadores_puestos_areas[".sqlFrom"] = "FROM cat_trabajadores_puestos_areas  LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_puestos_areas.capturista = cat_usuarios.usuario";
$tdatacat_trabajadores_puestos_areas[".sqlWhereExpr"] = "";
$tdatacat_trabajadores_puestos_areas[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_trabajadores_puestos_areas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_puestos_areas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_puestos_areas[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_puestos_areas[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_puestos_areas = array();
$tableKeyscat_trabajadores_puestos_areas[] = "cat_trabajadores_puestos_areas_id";
$tdatacat_trabajadores_puestos_areas[".Keys"] = $tableKeyscat_trabajadores_puestos_areas;


$tdatacat_trabajadores_puestos_areas[".hideMobileList"] = array();




//	cat_trabajadores_puestos_areas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_puestos_areas_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_areas_id";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_areas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_areas","cat_trabajadores_puestos_areas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_puestos_areas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_puestos_areas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_areas.cat_trabajadores_puestos_areas_id";

	
	
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


	$tdatacat_trabajadores_puestos_areas["cat_trabajadores_puestos_areas_id"] = $fdata;
		$tdatacat_trabajadores_puestos_areas[".searchableFields"][] = "cat_trabajadores_puestos_areas_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_areas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_areas","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_areas.time_stamp";

	
	
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


	$tdatacat_trabajadores_puestos_areas["time_stamp"] = $fdata;
		$tdatacat_trabajadores_puestos_areas[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_areas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_areas","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_areas.vigente";

	
	
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


	$tdatacat_trabajadores_puestos_areas["vigente"] = $fdata;
		$tdatacat_trabajadores_puestos_areas[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_areas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_areas","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_areas.capturista";

	
	
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


	$tdatacat_trabajadores_puestos_areas["capturista"] = $fdata;
		$tdatacat_trabajadores_puestos_areas[".searchableFields"][] = "capturista";
//	descripcion_puesto_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_puesto_area";
	$fdata["GoodName"] = "descripcion_puesto_area";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_areas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_areas","descripcion_puesto_area");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_puesto_area";

		$fdata["sourceSingle"] = "descripcion_puesto_area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_areas.descripcion_puesto_area";

	
	
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


	$tdatacat_trabajadores_puestos_areas["descripcion_puesto_area"] = $fdata;
		$tdatacat_trabajadores_puestos_areas[".searchableFields"][] = "descripcion_puesto_area";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_areas","cat_usuarios_licencias_id");
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


	$tdatacat_trabajadores_puestos_areas["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_trabajadores_puestos_areas[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_trabajadores_puestos_areas"]=&$tdatacat_trabajadores_puestos_areas;
$field_labels["cat_trabajadores_puestos_areas"] = &$fieldLabelscat_trabajadores_puestos_areas;
$fieldToolTips["cat_trabajadores_puestos_areas"] = &$fieldToolTipscat_trabajadores_puestos_areas;
$placeHolders["cat_trabajadores_puestos_areas"] = &$placeHolderscat_trabajadores_puestos_areas;
$page_titles["cat_trabajadores_puestos_areas"] = &$pageTitlescat_trabajadores_puestos_areas;


changeTextControlsToDate( "cat_trabajadores_puestos_areas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_puestos_areas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_puestos_areas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_puestos_areas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_puestos_areas.cat_trabajadores_puestos_areas_id,  cat_trabajadores_puestos_areas.time_stamp,  cat_trabajadores_puestos_areas.vigente,  cat_trabajadores_puestos_areas.capturista,  cat_trabajadores_puestos_areas.descripcion_puesto_area,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_trabajadores_puestos_areas  LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_puestos_areas.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_trabajadores_puestos_areas_id",
	"m_strTable" => "cat_trabajadores_puestos_areas",
	"m_srcTableName" => "cat_trabajadores_puestos_areas"
));

$proto6["m_sql"] = "cat_trabajadores_puestos_areas.cat_trabajadores_puestos_areas_id";
$proto6["m_srcTableName"] = "cat_trabajadores_puestos_areas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_puestos_areas",
	"m_srcTableName" => "cat_trabajadores_puestos_areas"
));

$proto8["m_sql"] = "cat_trabajadores_puestos_areas.time_stamp";
$proto8["m_srcTableName"] = "cat_trabajadores_puestos_areas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_puestos_areas",
	"m_srcTableName" => "cat_trabajadores_puestos_areas"
));

$proto10["m_sql"] = "cat_trabajadores_puestos_areas.vigente";
$proto10["m_srcTableName"] = "cat_trabajadores_puestos_areas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_trabajadores_puestos_areas",
	"m_srcTableName" => "cat_trabajadores_puestos_areas"
));

$proto12["m_sql"] = "cat_trabajadores_puestos_areas.capturista";
$proto12["m_srcTableName"] = "cat_trabajadores_puestos_areas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto_area",
	"m_strTable" => "cat_trabajadores_puestos_areas",
	"m_srcTableName" => "cat_trabajadores_puestos_areas"
));

$proto14["m_sql"] = "cat_trabajadores_puestos_areas.descripcion_puesto_area";
$proto14["m_srcTableName"] = "cat_trabajadores_puestos_areas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_trabajadores_puestos_areas"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_trabajadores_puestos_areas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_trabajadores_puestos_areas";
$proto19["m_srcTableName"] = "cat_trabajadores_puestos_areas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_trabajadores_puestos_areas_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_puesto_area";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_trabajadores_puestos_areas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_trabajadores_puestos_areas";
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
$proto22["m_link"] = "SQLL_LEFTJOIN";
			$proto23=array();
$proto23["m_strName"] = "cat_usuarios";
$proto23["m_srcTableName"] = "cat_trabajadores_puestos_areas";
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
$proto22["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_puestos_areas.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_trabajadores_puestos_areas";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_trabajadores_puestos_areas.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_trabajadores_puestos_areas"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_trabajadores_puestos_areas.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_puestos_areas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_puestos_areas = createSqlQuery_cat_trabajadores_puestos_areas();


	
		;

						

$tdatacat_trabajadores_puestos_areas[".sqlquery"] = $queryData_cat_trabajadores_puestos_areas;



$tdatacat_trabajadores_puestos_areas[".hasEvents"] = false;

?>