<?php
$tdatacat_ventas_productos_presentaciones = array();
$tdatacat_ventas_productos_presentaciones[".searchableFields"] = array();
$tdatacat_ventas_productos_presentaciones[".ShortName"] = "cat_ventas_productos_presentaciones";
$tdatacat_ventas_productos_presentaciones[".OwnerID"] = "";
$tdatacat_ventas_productos_presentaciones[".OriginalTable"] = "cat_ventas_productos_presentaciones";


$tdatacat_ventas_productos_presentaciones[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_productos_presentaciones[".originalPagesByType"] = $tdatacat_ventas_productos_presentaciones[".pagesByType"];
$tdatacat_ventas_productos_presentaciones[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_productos_presentaciones[".originalPages"] = $tdatacat_ventas_productos_presentaciones[".pages"];
$tdatacat_ventas_productos_presentaciones[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_ventas_productos_presentaciones[".originalDefaultPages"] = $tdatacat_ventas_productos_presentaciones[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_presentaciones = array();
$fieldToolTipscat_ventas_productos_presentaciones = array();
$pageTitlescat_ventas_productos_presentaciones = array();
$placeHolderscat_ventas_productos_presentaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_presentaciones["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_presentaciones["Spanish"] = array();
	$placeHolderscat_ventas_productos_presentaciones["Spanish"] = array();
	$pageTitlescat_ventas_productos_presentaciones["Spanish"] = array();
	$fieldLabelscat_ventas_productos_presentaciones["Spanish"]["cat_ventas_productos_presentaciones_id"] = "Id";
	$fieldToolTipscat_ventas_productos_presentaciones["Spanish"]["cat_ventas_productos_presentaciones_id"] = "";
	$placeHolderscat_ventas_productos_presentaciones["Spanish"]["cat_ventas_productos_presentaciones_id"] = "";
	$fieldLabelscat_ventas_productos_presentaciones["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_presentaciones["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_presentaciones["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_productos_presentaciones["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_presentaciones["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_presentaciones["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_productos_presentaciones["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_presentaciones["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_presentaciones["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_presentaciones["Spanish"]["descripcion_productos_presentaciones"] = "Descripcion Productos Presentaciones";
	$fieldToolTipscat_ventas_productos_presentaciones["Spanish"]["descripcion_productos_presentaciones"] = "";
	$placeHolderscat_ventas_productos_presentaciones["Spanish"]["descripcion_productos_presentaciones"] = "";
	$fieldLabelscat_ventas_productos_presentaciones["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_ventas_productos_presentaciones["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_ventas_productos_presentaciones["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_ventas_productos_presentaciones["Spanish"]))
		$tdatacat_ventas_productos_presentaciones[".isUseToolTips"] = true;
}





$tdatacat_ventas_productos_presentaciones[".shortTableName"] = "cat_ventas_productos_presentaciones";
$tdatacat_ventas_productos_presentaciones[".nSecOptions"] = 0;

$tdatacat_ventas_productos_presentaciones[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_presentaciones[".entityType"] = 0;
$tdatacat_ventas_productos_presentaciones[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_presentaciones[".strOriginalTableName"] = "cat_ventas_productos_presentaciones";

	



$tdatacat_ventas_productos_presentaciones[".showAddInPopup"] = false;

$tdatacat_ventas_productos_presentaciones[".showEditInPopup"] = false;

$tdatacat_ventas_productos_presentaciones[".showViewInPopup"] = false;

$tdatacat_ventas_productos_presentaciones[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_presentaciones[".listAjax"] = false;

	$tdatacat_ventas_productos_presentaciones[".audit"] = true;

	$tdatacat_ventas_productos_presentaciones[".locking"] = true;


$pages = $tdatacat_ventas_productos_presentaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_presentaciones[".edit"] = true;
	$tdatacat_ventas_productos_presentaciones[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_presentaciones[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_presentaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_presentaciones[".add"] = true;
$tdatacat_ventas_productos_presentaciones[".afterAddAction"] = 1;
$tdatacat_ventas_productos_presentaciones[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_presentaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_presentaciones[".list"] = true;
}



$tdatacat_ventas_productos_presentaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_presentaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_presentaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_presentaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_presentaciones[".printFriendly"] = true;
}



$tdatacat_ventas_productos_presentaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_presentaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_presentaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_presentaciones[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_presentaciones[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_presentaciones[".buttonsAdded"] = false;

$tdatacat_ventas_productos_presentaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_presentaciones[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_presentaciones[".badgeColor"] = "CFAE83";


$tdatacat_ventas_productos_presentaciones[".allSearchFields"] = array();
$tdatacat_ventas_productos_presentaciones[".filterFields"] = array();
$tdatacat_ventas_productos_presentaciones[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_presentaciones[".googleLikeFields"] = array();
$tdatacat_ventas_productos_presentaciones[".googleLikeFields"][] = "cat_ventas_productos_presentaciones_id";
$tdatacat_ventas_productos_presentaciones[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_productos_presentaciones[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_presentaciones[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_presentaciones[".googleLikeFields"][] = "descripcion_productos_presentaciones";
$tdatacat_ventas_productos_presentaciones[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_ventas_productos_presentaciones[".tableType"] = "list";

$tdatacat_ventas_productos_presentaciones[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_presentaciones[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_presentaciones[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_presentaciones[".geocodingEnabled"] = false;





$tdatacat_ventas_productos_presentaciones[".isResizeColumns"] = true;





$tdatacat_ventas_productos_presentaciones[".pageSize"] = 20;

$tdatacat_ventas_productos_presentaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_presentaciones[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_presentaciones[".orderindexes"] = array();


$tdatacat_ventas_productos_presentaciones[".sqlHead"] = "SELECT cat_ventas_productos_presentaciones.cat_ventas_productos_presentaciones_id,  cat_ventas_productos_presentaciones.time_stamp,  cat_ventas_productos_presentaciones.vigente,  cat_ventas_productos_presentaciones.capturista,  cat_ventas_productos_presentaciones.descripcion_productos_presentaciones,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_ventas_productos_presentaciones[".sqlFrom"] = "FROM cat_ventas_productos_presentaciones  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_presentaciones.capturista = cat_usuarios.usuario";
$tdatacat_ventas_productos_presentaciones[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_presentaciones[".sqlTail"] = "";

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
$tdatacat_ventas_productos_presentaciones[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_presentaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_presentaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_presentaciones[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_presentaciones = array();
$tableKeyscat_ventas_productos_presentaciones[] = "cat_ventas_productos_presentaciones_id";
$tdatacat_ventas_productos_presentaciones[".Keys"] = $tableKeyscat_ventas_productos_presentaciones;


$tdatacat_ventas_productos_presentaciones[".hideMobileList"] = array();




//	cat_ventas_productos_presentaciones_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_presentaciones_id";
	$fdata["GoodName"] = "cat_ventas_productos_presentaciones_id";
	$fdata["ownerTable"] = "cat_ventas_productos_presentaciones";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_presentaciones","cat_ventas_productos_presentaciones_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_presentaciones_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_presentaciones_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_presentaciones.cat_ventas_productos_presentaciones_id";

	
	
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


	$tdatacat_ventas_productos_presentaciones["cat_ventas_productos_presentaciones_id"] = $fdata;
		$tdatacat_ventas_productos_presentaciones[".searchableFields"][] = "cat_ventas_productos_presentaciones_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_presentaciones";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_presentaciones","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_presentaciones.time_stamp";

	
	
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


	$tdatacat_ventas_productos_presentaciones["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_presentaciones[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_presentaciones";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_presentaciones","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_presentaciones.vigente";

	
	
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


	$tdatacat_ventas_productos_presentaciones["vigente"] = $fdata;
		$tdatacat_ventas_productos_presentaciones[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_presentaciones";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_presentaciones","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_presentaciones.capturista";

	
	
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


	$tdatacat_ventas_productos_presentaciones["capturista"] = $fdata;
		$tdatacat_ventas_productos_presentaciones[".searchableFields"][] = "capturista";
//	descripcion_productos_presentaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_productos_presentaciones";
	$fdata["GoodName"] = "descripcion_productos_presentaciones";
	$fdata["ownerTable"] = "cat_ventas_productos_presentaciones";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_presentaciones","descripcion_productos_presentaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_productos_presentaciones";

		$fdata["sourceSingle"] = "descripcion_productos_presentaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_presentaciones.descripcion_productos_presentaciones";

	
	
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


	$tdatacat_ventas_productos_presentaciones["descripcion_productos_presentaciones"] = $fdata;
		$tdatacat_ventas_productos_presentaciones[".searchableFields"][] = "descripcion_productos_presentaciones";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_presentaciones","cat_usuarios_licencias_id");
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


	$tdatacat_ventas_productos_presentaciones["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_ventas_productos_presentaciones[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_ventas_productos_presentaciones"]=&$tdatacat_ventas_productos_presentaciones;
$field_labels["cat_ventas_productos_presentaciones"] = &$fieldLabelscat_ventas_productos_presentaciones;
$fieldToolTips["cat_ventas_productos_presentaciones"] = &$fieldToolTipscat_ventas_productos_presentaciones;
$placeHolders["cat_ventas_productos_presentaciones"] = &$placeHolderscat_ventas_productos_presentaciones;
$page_titles["cat_ventas_productos_presentaciones"] = &$pageTitlescat_ventas_productos_presentaciones;


changeTextControlsToDate( "cat_ventas_productos_presentaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_presentaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_presentaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_presentaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_presentaciones.cat_ventas_productos_presentaciones_id,  cat_ventas_productos_presentaciones.time_stamp,  cat_ventas_productos_presentaciones.vigente,  cat_ventas_productos_presentaciones.capturista,  cat_ventas_productos_presentaciones.descripcion_productos_presentaciones,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_presentaciones  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_presentaciones.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_ventas_productos_presentaciones_id",
	"m_strTable" => "cat_ventas_productos_presentaciones",
	"m_srcTableName" => "cat_ventas_productos_presentaciones"
));

$proto6["m_sql"] = "cat_ventas_productos_presentaciones.cat_ventas_productos_presentaciones_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_presentaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_presentaciones",
	"m_srcTableName" => "cat_ventas_productos_presentaciones"
));

$proto8["m_sql"] = "cat_ventas_productos_presentaciones.time_stamp";
$proto8["m_srcTableName"] = "cat_ventas_productos_presentaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_presentaciones",
	"m_srcTableName" => "cat_ventas_productos_presentaciones"
));

$proto10["m_sql"] = "cat_ventas_productos_presentaciones.vigente";
$proto10["m_srcTableName"] = "cat_ventas_productos_presentaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_presentaciones",
	"m_srcTableName" => "cat_ventas_productos_presentaciones"
));

$proto12["m_sql"] = "cat_ventas_productos_presentaciones.capturista";
$proto12["m_srcTableName"] = "cat_ventas_productos_presentaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_productos_presentaciones",
	"m_strTable" => "cat_ventas_productos_presentaciones",
	"m_srcTableName" => "cat_ventas_productos_presentaciones"
));

$proto14["m_sql"] = "cat_ventas_productos_presentaciones.descripcion_productos_presentaciones";
$proto14["m_srcTableName"] = "cat_ventas_productos_presentaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_presentaciones"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_ventas_productos_presentaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_ventas_productos_presentaciones";
$proto19["m_srcTableName"] = "cat_ventas_productos_presentaciones";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_ventas_productos_presentaciones_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_productos_presentaciones";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_ventas_productos_presentaciones";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_ventas_productos_presentaciones";
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
$proto23["m_srcTableName"] = "cat_ventas_productos_presentaciones";
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
$proto22["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_presentaciones.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_ventas_productos_presentaciones";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_ventas_productos_presentaciones.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_presentaciones"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_ventas_productos_presentaciones.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_presentaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_presentaciones = createSqlQuery_cat_ventas_productos_presentaciones();


	
		;

						

$tdatacat_ventas_productos_presentaciones[".sqlquery"] = $queryData_cat_ventas_productos_presentaciones;



$tdatacat_ventas_productos_presentaciones[".hasEvents"] = false;

?>