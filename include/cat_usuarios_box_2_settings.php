<?php
$tdatacat_usuarios_box_2 = array();
$tdatacat_usuarios_box_2[".searchableFields"] = array();
$tdatacat_usuarios_box_2[".ShortName"] = "cat_usuarios_box_2";
$tdatacat_usuarios_box_2[".OwnerID"] = "cat_usuarios_id";
$tdatacat_usuarios_box_2[".OriginalTable"] = "cat_usuarios";


$tdatacat_usuarios_box_2[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_usuarios_box_2[".originalPagesByType"] = $tdatacat_usuarios_box_2[".pagesByType"];
$tdatacat_usuarios_box_2[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_usuarios_box_2[".originalPages"] = $tdatacat_usuarios_box_2[".pages"];
$tdatacat_usuarios_box_2[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_usuarios_box_2[".originalDefaultPages"] = $tdatacat_usuarios_box_2[".defaultPages"];

//	field labels
$fieldLabelscat_usuarios_box_2 = array();
$fieldToolTipscat_usuarios_box_2 = array();
$pageTitlescat_usuarios_box_2 = array();
$placeHolderscat_usuarios_box_2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_usuarios_box_2["Spanish"] = array();
	$fieldToolTipscat_usuarios_box_2["Spanish"] = array();
	$placeHolderscat_usuarios_box_2["Spanish"] = array();
	$pageTitlescat_usuarios_box_2["Spanish"] = array();
	$fieldLabelscat_usuarios_box_2["Spanish"]["cat_usuarios_id"] = "id";
	$fieldToolTipscat_usuarios_box_2["Spanish"]["cat_usuarios_id"] = "";
	$placeHolderscat_usuarios_box_2["Spanish"]["cat_usuarios_id"] = "";
	$fieldLabelscat_usuarios_box_2["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_usuarios_box_2["Spanish"]["time_stamp"] = "";
	$placeHolderscat_usuarios_box_2["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_usuarios_box_2["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_usuarios_box_2["Spanish"]["vigente"] = "";
	$placeHolderscat_usuarios_box_2["Spanish"]["vigente"] = "";
	$fieldLabelscat_usuarios_box_2["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_usuarios_box_2["Spanish"]["capturista"] = "";
	$placeHolderscat_usuarios_box_2["Spanish"]["capturista"] = "";
	$fieldLabelscat_usuarios_box_2["Spanish"]["usuario"] = "Usuario";
	$fieldToolTipscat_usuarios_box_2["Spanish"]["usuario"] = "";
	$placeHolderscat_usuarios_box_2["Spanish"]["usuario"] = "";
	$fieldLabelscat_usuarios_box_2["Spanish"]["pass"] = "Pass";
	$fieldToolTipscat_usuarios_box_2["Spanish"]["pass"] = "";
	$placeHolderscat_usuarios_box_2["Spanish"]["pass"] = "";
	$fieldLabelscat_usuarios_box_2["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscat_usuarios_box_2["Spanish"]["nombre"] = "";
	$placeHolderscat_usuarios_box_2["Spanish"]["nombre"] = "";
	$fieldLabelscat_usuarios_box_2["Spanish"]["correo"] = "Correo";
	$fieldToolTipscat_usuarios_box_2["Spanish"]["correo"] = "";
	$placeHolderscat_usuarios_box_2["Spanish"]["correo"] = "";
	$fieldLabelscat_usuarios_box_2["Spanish"]["cat_usuarios_licencias_id"] = "Licencias";
	$fieldToolTipscat_usuarios_box_2["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_usuarios_box_2["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_usuarios_box_2["Spanish"]["cat_trabajadores_altas_id"] = "Trabajador";
	$fieldToolTipscat_usuarios_box_2["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_usuarios_box_2["Spanish"]["cat_trabajadores_altas_id"] = "";
	if (count($fieldToolTipscat_usuarios_box_2["Spanish"]))
		$tdatacat_usuarios_box_2[".isUseToolTips"] = true;
}





$tdatacat_usuarios_box_2[".shortTableName"] = "cat_usuarios_box_2";
$tdatacat_usuarios_box_2[".nSecOptions"] = 0;

$tdatacat_usuarios_box_2[".mainTableOwnerID"] = "cat_usuarios_id";
$tdatacat_usuarios_box_2[".entityType"] = 1;
$tdatacat_usuarios_box_2[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_usuarios_box_2[".strOriginalTableName"] = "cat_usuarios";

	



$tdatacat_usuarios_box_2[".showAddInPopup"] = false;

$tdatacat_usuarios_box_2[".showEditInPopup"] = false;

$tdatacat_usuarios_box_2[".showViewInPopup"] = false;

$tdatacat_usuarios_box_2[".listAjax"] = false;
//	temporary
//$tdatacat_usuarios_box_2[".listAjax"] = false;

	$tdatacat_usuarios_box_2[".audit"] = true;

	$tdatacat_usuarios_box_2[".locking"] = true;


$pages = $tdatacat_usuarios_box_2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_usuarios_box_2[".edit"] = true;
	$tdatacat_usuarios_box_2[".afterEditAction"] = 1;
	$tdatacat_usuarios_box_2[".closePopupAfterEdit"] = 1;
	$tdatacat_usuarios_box_2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_usuarios_box_2[".add"] = true;
$tdatacat_usuarios_box_2[".afterAddAction"] = 1;
$tdatacat_usuarios_box_2[".closePopupAfterAdd"] = 1;
$tdatacat_usuarios_box_2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_usuarios_box_2[".list"] = true;
}



$tdatacat_usuarios_box_2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_usuarios_box_2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_usuarios_box_2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_usuarios_box_2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_usuarios_box_2[".printFriendly"] = true;
}



$tdatacat_usuarios_box_2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_usuarios_box_2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_usuarios_box_2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_usuarios_box_2[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_usuarios_box_2[".ajaxCodeSnippetAdded"] = false;

$tdatacat_usuarios_box_2[".buttonsAdded"] = false;

$tdatacat_usuarios_box_2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_usuarios_box_2[".isUseTimeForSearch"] = false;


$tdatacat_usuarios_box_2[".badgeColor"] = "4682B4";


$tdatacat_usuarios_box_2[".allSearchFields"] = array();
$tdatacat_usuarios_box_2[".filterFields"] = array();
$tdatacat_usuarios_box_2[".requiredSearchFields"] = array();

$tdatacat_usuarios_box_2[".googleLikeFields"] = array();
$tdatacat_usuarios_box_2[".googleLikeFields"][] = "cat_usuarios_id";
$tdatacat_usuarios_box_2[".googleLikeFields"][] = "time_stamp";
$tdatacat_usuarios_box_2[".googleLikeFields"][] = "vigente";
$tdatacat_usuarios_box_2[".googleLikeFields"][] = "capturista";
$tdatacat_usuarios_box_2[".googleLikeFields"][] = "usuario";
$tdatacat_usuarios_box_2[".googleLikeFields"][] = "pass";
$tdatacat_usuarios_box_2[".googleLikeFields"][] = "nombre";
$tdatacat_usuarios_box_2[".googleLikeFields"][] = "correo";
$tdatacat_usuarios_box_2[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatacat_usuarios_box_2[".googleLikeFields"][] = "cat_trabajadores_altas_id";



$tdatacat_usuarios_box_2[".tableType"] = "list";

$tdatacat_usuarios_box_2[".printerPageOrientation"] = 0;
$tdatacat_usuarios_box_2[".nPrinterPageScale"] = 100;

$tdatacat_usuarios_box_2[".nPrinterSplitRecords"] = 40;

$tdatacat_usuarios_box_2[".geocodingEnabled"] = false;





$tdatacat_usuarios_box_2[".isResizeColumns"] = true;





$tdatacat_usuarios_box_2[".pageSize"] = 20;

$tdatacat_usuarios_box_2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_usuarios_box_2[".strOrderBy"] = $tstrOrderBy;

$tdatacat_usuarios_box_2[".orderindexes"] = array();


$tdatacat_usuarios_box_2[".sqlHead"] = "SELECT cat_usuarios_id,  time_stamp,  vigente,  capturista,  usuario,  pass,  nombre,  correo,  cat_usuarios_licencias_id,  cat_trabajadores_altas_id";
$tdatacat_usuarios_box_2[".sqlFrom"] = "FROM cat_usuarios";
$tdatacat_usuarios_box_2[".sqlWhereExpr"] = "(vigente =1)and (cat_usuarios_id = 20)or(cat_usuarios_id = 5)";
$tdatacat_usuarios_box_2[".sqlTail"] = "";

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
$tdatacat_usuarios_box_2[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_usuarios_box_2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_usuarios_box_2[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_usuarios_box_2[".highlightSearchResults"] = true;

$tableKeyscat_usuarios_box_2 = array();
$tableKeyscat_usuarios_box_2[] = "cat_usuarios_id";
$tdatacat_usuarios_box_2[".Keys"] = $tableKeyscat_usuarios_box_2;


$tdatacat_usuarios_box_2[".hideMobileList"] = array();




//	cat_usuarios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_usuarios_id";
	$fdata["GoodName"] = "cat_usuarios_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box_2","cat_usuarios_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_usuarios_id";

		$fdata["sourceSingle"] = "cat_usuarios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_id";

	
	
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


	$tdatacat_usuarios_box_2["cat_usuarios_id"] = $fdata;
		$tdatacat_usuarios_box_2[".searchableFields"][] = "cat_usuarios_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box_2","time_stamp");
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


	$tdatacat_usuarios_box_2["time_stamp"] = $fdata;
		$tdatacat_usuarios_box_2[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box_2","vigente");
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


	$tdatacat_usuarios_box_2["vigente"] = $fdata;
		$tdatacat_usuarios_box_2[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box_2","capturista");
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


	$tdatacat_usuarios_box_2["capturista"] = $fdata;
		$tdatacat_usuarios_box_2[".searchableFields"][] = "capturista";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box_2","usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario";

		$fdata["sourceSingle"] = "usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario";

	
	
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


	$tdatacat_usuarios_box_2["usuario"] = $fdata;
		$tdatacat_usuarios_box_2[".searchableFields"][] = "usuario";
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box_2","pass");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pass";

		$fdata["sourceSingle"] = "pass";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pass";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacat_usuarios_box_2["pass"] = $fdata;
		$tdatacat_usuarios_box_2[".searchableFields"][] = "pass";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box_2","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdatacat_usuarios_box_2["nombre"] = $fdata;
		$tdatacat_usuarios_box_2[".searchableFields"][] = "nombre";
//	correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "correo";
	$fdata["GoodName"] = "correo";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box_2","correo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "correo";

		$fdata["sourceSingle"] = "correo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correo";

	
	
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


	$tdatacat_usuarios_box_2["correo"] = $fdata;
		$tdatacat_usuarios_box_2[".searchableFields"][] = "correo";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box_2","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_usuarios_licencias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_usuarios_licencias_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_licencia";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacat_usuarios_box_2["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_usuarios_box_2[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box_2","cat_trabajadores_altas_id");
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


	$tdatacat_usuarios_box_2["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_usuarios_box_2[".searchableFields"][] = "cat_trabajadores_altas_id";


$tables_data["cat_usuarios_box_2"]=&$tdatacat_usuarios_box_2;
$field_labels["cat_usuarios_box_2"] = &$fieldLabelscat_usuarios_box_2;
$fieldToolTips["cat_usuarios_box_2"] = &$fieldToolTipscat_usuarios_box_2;
$placeHolders["cat_usuarios_box_2"] = &$placeHolderscat_usuarios_box_2;
$page_titles["cat_usuarios_box_2"] = &$pageTitlescat_usuarios_box_2;


changeTextControlsToDate( "cat_usuarios_box_2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_usuarios_box_2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_usuarios_box_2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_usuarios_box_2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_usuarios_id,  time_stamp,  vigente,  capturista,  usuario,  pass,  nombre,  correo,  cat_usuarios_licencias_id,  cat_trabajadores_altas_id";
$proto0["m_strFrom"] = "FROM cat_usuarios";
$proto0["m_strWhere"] = "(vigente =1)and (cat_usuarios_id = 20)or(cat_usuarios_id = 5)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(vigente =1)and (cat_usuarios_id = 20)or(cat_usuarios_id = 5)";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(vigente =1)and (cat_usuarios_id = 20)or(cat_usuarios_id = 5)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "(vigente =1)and (cat_usuarios_id = 20)";
$proto4["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(vigente =1)and (cat_usuarios_id = 20)"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "vigente =1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "cat_usuarios_id = 20";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 20";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "cat_usuarios_id = 5";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 5";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto14["m_sql"] = "cat_usuarios_id";
$proto14["m_srcTableName"] = "cat_usuarios_box_2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto16["m_sql"] = "time_stamp";
$proto16["m_srcTableName"] = "cat_usuarios_box_2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto18["m_sql"] = "vigente";
$proto18["m_srcTableName"] = "cat_usuarios_box_2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto20["m_sql"] = "capturista";
$proto20["m_srcTableName"] = "cat_usuarios_box_2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto22["m_sql"] = "usuario";
$proto22["m_srcTableName"] = "cat_usuarios_box_2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "pass",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto24["m_sql"] = "pass";
$proto24["m_srcTableName"] = "cat_usuarios_box_2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto26["m_sql"] = "nombre";
$proto26["m_srcTableName"] = "cat_usuarios_box_2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "correo",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto28["m_sql"] = "correo";
$proto28["m_srcTableName"] = "cat_usuarios_box_2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto30["m_sql"] = "cat_usuarios_licencias_id";
$proto30["m_srcTableName"] = "cat_usuarios_box_2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box_2"
));

$proto32["m_sql"] = "cat_trabajadores_altas_id";
$proto32["m_srcTableName"] = "cat_usuarios_box_2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "cat_usuarios";
$proto35["m_srcTableName"] = "cat_usuarios_box_2";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "cat_usuarios_id";
$proto35["m_columns"][] = "time_stamp";
$proto35["m_columns"][] = "vigente";
$proto35["m_columns"][] = "capturista";
$proto35["m_columns"][] = "usuario";
$proto35["m_columns"][] = "cat_usuarios_licencias_id";
$proto35["m_columns"][] = "pass";
$proto35["m_columns"][] = "nombre";
$proto35["m_columns"][] = "correo";
$proto35["m_columns"][] = "cat_trabajadores_altas_id";
$proto35["m_columns"][] = "res_autorizacion";
$proto35["m_columns"][] = "session";
$proto35["m_columns"][] = "tipo";
$proto35["m_columns"][] = "session_v2";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "cat_usuarios";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "cat_usuarios_box_2";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_usuarios_box_2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_usuarios_box_2 = createSqlQuery_cat_usuarios_box_2();


	
		;

										

$tdatacat_usuarios_box_2[".sqlquery"] = $queryData_cat_usuarios_box_2;



$tdatacat_usuarios_box_2[".hasEvents"] = false;

?>