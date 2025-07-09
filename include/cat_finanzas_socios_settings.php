<?php
$tdatacat_finanzas_socios = array();
$tdatacat_finanzas_socios[".searchableFields"] = array();
$tdatacat_finanzas_socios[".ShortName"] = "cat_finanzas_socios";
$tdatacat_finanzas_socios[".OwnerID"] = "";
$tdatacat_finanzas_socios[".OriginalTable"] = "cat_finanzas_socios";


$tdatacat_finanzas_socios[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_finanzas_socios[".originalPagesByType"] = $tdatacat_finanzas_socios[".pagesByType"];
$tdatacat_finanzas_socios[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_finanzas_socios[".originalPages"] = $tdatacat_finanzas_socios[".pages"];
$tdatacat_finanzas_socios[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_finanzas_socios[".originalDefaultPages"] = $tdatacat_finanzas_socios[".defaultPages"];

//	field labels
$fieldLabelscat_finanzas_socios = array();
$fieldToolTipscat_finanzas_socios = array();
$pageTitlescat_finanzas_socios = array();
$placeHolderscat_finanzas_socios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_finanzas_socios["Spanish"] = array();
	$fieldToolTipscat_finanzas_socios["Spanish"] = array();
	$placeHolderscat_finanzas_socios["Spanish"] = array();
	$pageTitlescat_finanzas_socios["Spanish"] = array();
	$fieldLabelscat_finanzas_socios["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_finanzas_socios["Spanish"]["vigente"] = "";
	$placeHolderscat_finanzas_socios["Spanish"]["vigente"] = "";
	$fieldLabelscat_finanzas_socios["Spanish"]["nombre_socio"] = "Nombre Socio";
	$fieldToolTipscat_finanzas_socios["Spanish"]["nombre_socio"] = "";
	$placeHolderscat_finanzas_socios["Spanish"]["nombre_socio"] = "";
	$fieldLabelscat_finanzas_socios["Spanish"]["cat_finanzas_socios_id"] = "Id";
	$fieldToolTipscat_finanzas_socios["Spanish"]["cat_finanzas_socios_id"] = "";
	$placeHolderscat_finanzas_socios["Spanish"]["cat_finanzas_socios_id"] = "";
	$fieldLabelscat_finanzas_socios["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_finanzas_socios["Spanish"]["capturista"] = "";
	$placeHolderscat_finanzas_socios["Spanish"]["capturista"] = "";
	$fieldLabelscat_finanzas_socios["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_finanzas_socios["Spanish"]["time_stamp"] = "";
	$placeHolderscat_finanzas_socios["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_finanzas_socios["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_finanzas_socios["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_finanzas_socios["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_finanzas_socios["Spanish"]))
		$tdatacat_finanzas_socios[".isUseToolTips"] = true;
}





$tdatacat_finanzas_socios[".shortTableName"] = "cat_finanzas_socios";
$tdatacat_finanzas_socios[".nSecOptions"] = 0;

$tdatacat_finanzas_socios[".mainTableOwnerID"] = "";
$tdatacat_finanzas_socios[".entityType"] = 0;
$tdatacat_finanzas_socios[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_finanzas_socios[".strOriginalTableName"] = "cat_finanzas_socios";

	



$tdatacat_finanzas_socios[".showAddInPopup"] = false;

$tdatacat_finanzas_socios[".showEditInPopup"] = false;

$tdatacat_finanzas_socios[".showViewInPopup"] = false;

$tdatacat_finanzas_socios[".listAjax"] = false;
//	temporary
//$tdatacat_finanzas_socios[".listAjax"] = false;

	$tdatacat_finanzas_socios[".audit"] = true;

	$tdatacat_finanzas_socios[".locking"] = true;


$pages = $tdatacat_finanzas_socios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_finanzas_socios[".edit"] = true;
	$tdatacat_finanzas_socios[".afterEditAction"] = 1;
	$tdatacat_finanzas_socios[".closePopupAfterEdit"] = 1;
	$tdatacat_finanzas_socios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_finanzas_socios[".add"] = true;
$tdatacat_finanzas_socios[".afterAddAction"] = 1;
$tdatacat_finanzas_socios[".closePopupAfterAdd"] = 1;
$tdatacat_finanzas_socios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_finanzas_socios[".list"] = true;
}



$tdatacat_finanzas_socios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_finanzas_socios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_finanzas_socios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_finanzas_socios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_finanzas_socios[".printFriendly"] = true;
}



$tdatacat_finanzas_socios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_finanzas_socios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_finanzas_socios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_finanzas_socios[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_finanzas_socios[".ajaxCodeSnippetAdded"] = false;

$tdatacat_finanzas_socios[".buttonsAdded"] = false;

$tdatacat_finanzas_socios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_finanzas_socios[".isUseTimeForSearch"] = false;


$tdatacat_finanzas_socios[".badgeColor"] = "E67349";


$tdatacat_finanzas_socios[".allSearchFields"] = array();
$tdatacat_finanzas_socios[".filterFields"] = array();
$tdatacat_finanzas_socios[".requiredSearchFields"] = array();

$tdatacat_finanzas_socios[".googleLikeFields"] = array();
$tdatacat_finanzas_socios[".googleLikeFields"][] = "vigente";
$tdatacat_finanzas_socios[".googleLikeFields"][] = "nombre_socio";
$tdatacat_finanzas_socios[".googleLikeFields"][] = "cat_finanzas_socios_id";
$tdatacat_finanzas_socios[".googleLikeFields"][] = "capturista";
$tdatacat_finanzas_socios[".googleLikeFields"][] = "time_stamp";
$tdatacat_finanzas_socios[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_finanzas_socios[".tableType"] = "list";

$tdatacat_finanzas_socios[".printerPageOrientation"] = 0;
$tdatacat_finanzas_socios[".nPrinterPageScale"] = 100;

$tdatacat_finanzas_socios[".nPrinterSplitRecords"] = 40;

$tdatacat_finanzas_socios[".geocodingEnabled"] = false;





$tdatacat_finanzas_socios[".isResizeColumns"] = true;





$tdatacat_finanzas_socios[".pageSize"] = 20;

$tdatacat_finanzas_socios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_finanzas_socios[".strOrderBy"] = $tstrOrderBy;

$tdatacat_finanzas_socios[".orderindexes"] = array();


$tdatacat_finanzas_socios[".sqlHead"] = "SELECT cat_finanzas_socios.vigente,  cat_finanzas_socios.nombre_socio,  cat_finanzas_socios.cat_finanzas_socios_id,  cat_finanzas_socios.capturista,  cat_finanzas_socios.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_finanzas_socios[".sqlFrom"] = "FROM cat_finanzas_socios  LEFT OUTER JOIN cat_usuarios ON cat_finanzas_socios.capturista = cat_usuarios.usuario";
$tdatacat_finanzas_socios[".sqlWhereExpr"] = "";
$tdatacat_finanzas_socios[".sqlTail"] = "";

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
$tdatacat_finanzas_socios[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_finanzas_socios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_finanzas_socios[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_finanzas_socios[".highlightSearchResults"] = true;

$tableKeyscat_finanzas_socios = array();
$tableKeyscat_finanzas_socios[] = "cat_finanzas_socios_id";
$tdatacat_finanzas_socios[".Keys"] = $tableKeyscat_finanzas_socios;


$tdatacat_finanzas_socios[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_socios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_socios","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_socios.vigente";

	
	
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


	$tdatacat_finanzas_socios["vigente"] = $fdata;
		$tdatacat_finanzas_socios[".searchableFields"][] = "vigente";
//	nombre_socio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_socio";
	$fdata["GoodName"] = "nombre_socio";
	$fdata["ownerTable"] = "cat_finanzas_socios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_socios","nombre_socio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_socio";

		$fdata["sourceSingle"] = "nombre_socio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_socios.nombre_socio";

	
	
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


	$tdatacat_finanzas_socios["nombre_socio"] = $fdata;
		$tdatacat_finanzas_socios[".searchableFields"][] = "nombre_socio";
//	cat_finanzas_socios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_finanzas_socios_id";
	$fdata["GoodName"] = "cat_finanzas_socios_id";
	$fdata["ownerTable"] = "cat_finanzas_socios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_socios","cat_finanzas_socios_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_socios_id";

		$fdata["sourceSingle"] = "cat_finanzas_socios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_socios.cat_finanzas_socios_id";

	
	
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


	$tdatacat_finanzas_socios["cat_finanzas_socios_id"] = $fdata;
		$tdatacat_finanzas_socios[".searchableFields"][] = "cat_finanzas_socios_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_finanzas_socios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_socios","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_socios.capturista";

	
	
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


	$tdatacat_finanzas_socios["capturista"] = $fdata;
		$tdatacat_finanzas_socios[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_finanzas_socios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_socios","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_socios.time_stamp";

	
	
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


	$tdatacat_finanzas_socios["time_stamp"] = $fdata;
		$tdatacat_finanzas_socios[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_socios","cat_usuarios_licencias_id");
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


	$tdatacat_finanzas_socios["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_finanzas_socios[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_finanzas_socios"]=&$tdatacat_finanzas_socios;
$field_labels["cat_finanzas_socios"] = &$fieldLabelscat_finanzas_socios;
$fieldToolTips["cat_finanzas_socios"] = &$fieldToolTipscat_finanzas_socios;
$placeHolders["cat_finanzas_socios"] = &$placeHolderscat_finanzas_socios;
$page_titles["cat_finanzas_socios"] = &$pageTitlescat_finanzas_socios;


changeTextControlsToDate( "cat_finanzas_socios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_finanzas_socios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_finanzas_socios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_finanzas_socios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_socios.vigente,  cat_finanzas_socios.nombre_socio,  cat_finanzas_socios.cat_finanzas_socios_id,  cat_finanzas_socios.capturista,  cat_finanzas_socios.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_socios  LEFT OUTER JOIN cat_usuarios ON cat_finanzas_socios.capturista = cat_usuarios.usuario";
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
	"m_strTable" => "cat_finanzas_socios",
	"m_srcTableName" => "cat_finanzas_socios"
));

$proto6["m_sql"] = "cat_finanzas_socios.vigente";
$proto6["m_srcTableName"] = "cat_finanzas_socios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_socio",
	"m_strTable" => "cat_finanzas_socios",
	"m_srcTableName" => "cat_finanzas_socios"
));

$proto8["m_sql"] = "cat_finanzas_socios.nombre_socio";
$proto8["m_srcTableName"] = "cat_finanzas_socios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_socios_id",
	"m_strTable" => "cat_finanzas_socios",
	"m_srcTableName" => "cat_finanzas_socios"
));

$proto10["m_sql"] = "cat_finanzas_socios.cat_finanzas_socios_id";
$proto10["m_srcTableName"] = "cat_finanzas_socios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_finanzas_socios",
	"m_srcTableName" => "cat_finanzas_socios"
));

$proto12["m_sql"] = "cat_finanzas_socios.capturista";
$proto12["m_srcTableName"] = "cat_finanzas_socios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_finanzas_socios",
	"m_srcTableName" => "cat_finanzas_socios"
));

$proto14["m_sql"] = "cat_finanzas_socios.time_stamp";
$proto14["m_srcTableName"] = "cat_finanzas_socios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_socios"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_finanzas_socios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_finanzas_socios";
$proto19["m_srcTableName"] = "cat_finanzas_socios";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "nombre_socio";
$proto19["m_columns"][] = "rfc_socio";
$proto19["m_columns"][] = "cat_finanzas_socios_id";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_finanzas_socios";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_finanzas_socios";
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
$proto23["m_srcTableName"] = "cat_finanzas_socios";
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
$proto22["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_finanzas_socios.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_finanzas_socios";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_finanzas_socios.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_socios"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_finanzas_socios.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_finanzas_socios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_finanzas_socios = createSqlQuery_cat_finanzas_socios();


	
		;

						

$tdatacat_finanzas_socios[".sqlquery"] = $queryData_cat_finanzas_socios;



$tdatacat_finanzas_socios[".hasEvents"] = false;

?>