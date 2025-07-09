<?php
$tdatacat_finanzas_bancos = array();
$tdatacat_finanzas_bancos[".searchableFields"] = array();
$tdatacat_finanzas_bancos[".ShortName"] = "cat_finanzas_bancos";
$tdatacat_finanzas_bancos[".OwnerID"] = "";
$tdatacat_finanzas_bancos[".OriginalTable"] = "cat_finanzas_bancos";


$tdatacat_finanzas_bancos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_finanzas_bancos[".originalPagesByType"] = $tdatacat_finanzas_bancos[".pagesByType"];
$tdatacat_finanzas_bancos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_finanzas_bancos[".originalPages"] = $tdatacat_finanzas_bancos[".pages"];
$tdatacat_finanzas_bancos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_finanzas_bancos[".originalDefaultPages"] = $tdatacat_finanzas_bancos[".defaultPages"];

//	field labels
$fieldLabelscat_finanzas_bancos = array();
$fieldToolTipscat_finanzas_bancos = array();
$pageTitlescat_finanzas_bancos = array();
$placeHolderscat_finanzas_bancos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_finanzas_bancos["Spanish"] = array();
	$fieldToolTipscat_finanzas_bancos["Spanish"] = array();
	$placeHolderscat_finanzas_bancos["Spanish"] = array();
	$pageTitlescat_finanzas_bancos["Spanish"] = array();
	$fieldLabelscat_finanzas_bancos["Spanish"]["cat_finanzas_bancos_id"] = "Id";
	$fieldToolTipscat_finanzas_bancos["Spanish"]["cat_finanzas_bancos_id"] = "";
	$placeHolderscat_finanzas_bancos["Spanish"]["cat_finanzas_bancos_id"] = "";
	$fieldLabelscat_finanzas_bancos["Spanish"]["descripcion_bancos"] = "Descripcion Bancos";
	$fieldToolTipscat_finanzas_bancos["Spanish"]["descripcion_bancos"] = "";
	$placeHolderscat_finanzas_bancos["Spanish"]["descripcion_bancos"] = "";
	$fieldLabelscat_finanzas_bancos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_finanzas_bancos["Spanish"]["time_stamp"] = "";
	$placeHolderscat_finanzas_bancos["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_finanzas_bancos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_finanzas_bancos["Spanish"]["vigente"] = "";
	$placeHolderscat_finanzas_bancos["Spanish"]["vigente"] = "";
	$fieldLabelscat_finanzas_bancos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_finanzas_bancos["Spanish"]["capturista"] = "";
	$placeHolderscat_finanzas_bancos["Spanish"]["capturista"] = "";
	$fieldLabelscat_finanzas_bancos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_finanzas_bancos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_finanzas_bancos["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_finanzas_bancos["Spanish"]))
		$tdatacat_finanzas_bancos[".isUseToolTips"] = true;
}





$tdatacat_finanzas_bancos[".shortTableName"] = "cat_finanzas_bancos";
$tdatacat_finanzas_bancos[".nSecOptions"] = 0;

$tdatacat_finanzas_bancos[".mainTableOwnerID"] = "";
$tdatacat_finanzas_bancos[".entityType"] = 0;
$tdatacat_finanzas_bancos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_finanzas_bancos[".strOriginalTableName"] = "cat_finanzas_bancos";

	



$tdatacat_finanzas_bancos[".showAddInPopup"] = false;

$tdatacat_finanzas_bancos[".showEditInPopup"] = false;

$tdatacat_finanzas_bancos[".showViewInPopup"] = false;

$tdatacat_finanzas_bancos[".listAjax"] = false;
//	temporary
//$tdatacat_finanzas_bancos[".listAjax"] = false;

	$tdatacat_finanzas_bancos[".audit"] = true;

	$tdatacat_finanzas_bancos[".locking"] = true;


$pages = $tdatacat_finanzas_bancos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_finanzas_bancos[".edit"] = true;
	$tdatacat_finanzas_bancos[".afterEditAction"] = 1;
	$tdatacat_finanzas_bancos[".closePopupAfterEdit"] = 1;
	$tdatacat_finanzas_bancos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_finanzas_bancos[".add"] = true;
$tdatacat_finanzas_bancos[".afterAddAction"] = 1;
$tdatacat_finanzas_bancos[".closePopupAfterAdd"] = 1;
$tdatacat_finanzas_bancos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_finanzas_bancos[".list"] = true;
}



$tdatacat_finanzas_bancos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_finanzas_bancos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_finanzas_bancos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_finanzas_bancos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_finanzas_bancos[".printFriendly"] = true;
}



$tdatacat_finanzas_bancos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_finanzas_bancos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_finanzas_bancos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_finanzas_bancos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_finanzas_bancos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_finanzas_bancos[".buttonsAdded"] = false;

$tdatacat_finanzas_bancos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_finanzas_bancos[".isUseTimeForSearch"] = false;


$tdatacat_finanzas_bancos[".badgeColor"] = "EDCA00";


$tdatacat_finanzas_bancos[".allSearchFields"] = array();
$tdatacat_finanzas_bancos[".filterFields"] = array();
$tdatacat_finanzas_bancos[".requiredSearchFields"] = array();

$tdatacat_finanzas_bancos[".googleLikeFields"] = array();
$tdatacat_finanzas_bancos[".googleLikeFields"][] = "cat_finanzas_bancos_id";
$tdatacat_finanzas_bancos[".googleLikeFields"][] = "descripcion_bancos";
$tdatacat_finanzas_bancos[".googleLikeFields"][] = "time_stamp";
$tdatacat_finanzas_bancos[".googleLikeFields"][] = "vigente";
$tdatacat_finanzas_bancos[".googleLikeFields"][] = "capturista";
$tdatacat_finanzas_bancos[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_finanzas_bancos[".tableType"] = "list";

$tdatacat_finanzas_bancos[".printerPageOrientation"] = 0;
$tdatacat_finanzas_bancos[".nPrinterPageScale"] = 100;

$tdatacat_finanzas_bancos[".nPrinterSplitRecords"] = 40;

$tdatacat_finanzas_bancos[".geocodingEnabled"] = false;





$tdatacat_finanzas_bancos[".isResizeColumns"] = true;





$tdatacat_finanzas_bancos[".pageSize"] = 20;

$tdatacat_finanzas_bancos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_finanzas_bancos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_finanzas_bancos[".orderindexes"] = array();


$tdatacat_finanzas_bancos[".sqlHead"] = "SELECT cat_finanzas_bancos.cat_finanzas_bancos_id,  cat_finanzas_bancos.descripcion_bancos,  cat_finanzas_bancos.time_stamp,  cat_finanzas_bancos.vigente,  cat_finanzas_bancos.capturista,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_finanzas_bancos[".sqlFrom"] = "FROM cat_finanzas_bancos  INNER JOIN cat_usuarios ON cat_finanzas_bancos.capturista = cat_usuarios.usuario";
$tdatacat_finanzas_bancos[".sqlWhereExpr"] = "";
$tdatacat_finanzas_bancos[".sqlTail"] = "";

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
$tdatacat_finanzas_bancos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_finanzas_bancos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_finanzas_bancos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_finanzas_bancos[".highlightSearchResults"] = true;

$tableKeyscat_finanzas_bancos = array();
$tableKeyscat_finanzas_bancos[] = "cat_finanzas_bancos_id";
$tdatacat_finanzas_bancos[".Keys"] = $tableKeyscat_finanzas_bancos;


$tdatacat_finanzas_bancos[".hideMobileList"] = array();




//	cat_finanzas_bancos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_bancos_id";
	$fdata["GoodName"] = "cat_finanzas_bancos_id";
	$fdata["ownerTable"] = "cat_finanzas_bancos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_bancos","cat_finanzas_bancos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_bancos_id";

		$fdata["sourceSingle"] = "cat_finanzas_bancos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos.cat_finanzas_bancos_id";

	
	
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


	$tdatacat_finanzas_bancos["cat_finanzas_bancos_id"] = $fdata;
		$tdatacat_finanzas_bancos[".searchableFields"][] = "cat_finanzas_bancos_id";
//	descripcion_bancos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_bancos";
	$fdata["GoodName"] = "descripcion_bancos";
	$fdata["ownerTable"] = "cat_finanzas_bancos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_bancos","descripcion_bancos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_bancos";

		$fdata["sourceSingle"] = "descripcion_bancos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos.descripcion_bancos";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatacat_finanzas_bancos["descripcion_bancos"] = $fdata;
		$tdatacat_finanzas_bancos[".searchableFields"][] = "descripcion_bancos";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_finanzas_bancos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_bancos","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos.time_stamp";

	
	
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


	$tdatacat_finanzas_bancos["time_stamp"] = $fdata;
		$tdatacat_finanzas_bancos[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_bancos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_bancos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos.vigente";

	
	
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


	$tdatacat_finanzas_bancos["vigente"] = $fdata;
		$tdatacat_finanzas_bancos[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_finanzas_bancos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_bancos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_bancos.capturista";

	
	
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


	$tdatacat_finanzas_bancos["capturista"] = $fdata;
		$tdatacat_finanzas_bancos[".searchableFields"][] = "capturista";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_bancos","cat_usuarios_licencias_id");
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


	$tdatacat_finanzas_bancos["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_finanzas_bancos[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_finanzas_bancos"]=&$tdatacat_finanzas_bancos;
$field_labels["cat_finanzas_bancos"] = &$fieldLabelscat_finanzas_bancos;
$fieldToolTips["cat_finanzas_bancos"] = &$fieldToolTipscat_finanzas_bancos;
$placeHolders["cat_finanzas_bancos"] = &$placeHolderscat_finanzas_bancos;
$page_titles["cat_finanzas_bancos"] = &$pageTitlescat_finanzas_bancos;


changeTextControlsToDate( "cat_finanzas_bancos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_finanzas_bancos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_finanzas_bancos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_finanzas_bancos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_bancos.cat_finanzas_bancos_id,  cat_finanzas_bancos.descripcion_bancos,  cat_finanzas_bancos.time_stamp,  cat_finanzas_bancos.vigente,  cat_finanzas_bancos.capturista,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_bancos  INNER JOIN cat_usuarios ON cat_finanzas_bancos.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_finanzas_bancos_id",
	"m_strTable" => "cat_finanzas_bancos",
	"m_srcTableName" => "cat_finanzas_bancos"
));

$proto6["m_sql"] = "cat_finanzas_bancos.cat_finanzas_bancos_id";
$proto6["m_srcTableName"] = "cat_finanzas_bancos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_bancos",
	"m_strTable" => "cat_finanzas_bancos",
	"m_srcTableName" => "cat_finanzas_bancos"
));

$proto8["m_sql"] = "cat_finanzas_bancos.descripcion_bancos";
$proto8["m_srcTableName"] = "cat_finanzas_bancos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_finanzas_bancos",
	"m_srcTableName" => "cat_finanzas_bancos"
));

$proto10["m_sql"] = "cat_finanzas_bancos.time_stamp";
$proto10["m_srcTableName"] = "cat_finanzas_bancos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_bancos",
	"m_srcTableName" => "cat_finanzas_bancos"
));

$proto12["m_sql"] = "cat_finanzas_bancos.vigente";
$proto12["m_srcTableName"] = "cat_finanzas_bancos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_finanzas_bancos",
	"m_srcTableName" => "cat_finanzas_bancos"
));

$proto14["m_sql"] = "cat_finanzas_bancos.capturista";
$proto14["m_srcTableName"] = "cat_finanzas_bancos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_bancos"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_finanzas_bancos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_finanzas_bancos";
$proto19["m_srcTableName"] = "cat_finanzas_bancos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_finanzas_bancos_id";
$proto19["m_columns"][] = "descripcion_bancos";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_finanzas_bancos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_finanzas_bancos";
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
$proto23["m_srcTableName"] = "cat_finanzas_bancos";
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
$proto22["m_sql"] = "INNER JOIN cat_usuarios ON cat_finanzas_bancos.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_finanzas_bancos";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_finanzas_bancos.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_bancos"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_finanzas_bancos.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_finanzas_bancos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_finanzas_bancos = createSqlQuery_cat_finanzas_bancos();


	
		;

						

$tdatacat_finanzas_bancos[".sqlquery"] = $queryData_cat_finanzas_bancos;



$tdatacat_finanzas_bancos[".hasEvents"] = false;

?>