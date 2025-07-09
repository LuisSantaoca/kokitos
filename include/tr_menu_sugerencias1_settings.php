<?php
$tdatatr_menu_sugerencias1 = array();
$tdatatr_menu_sugerencias1[".searchableFields"] = array();
$tdatatr_menu_sugerencias1[".ShortName"] = "tr_menu_sugerencias1";
$tdatatr_menu_sugerencias1[".OwnerID"] = "";
$tdatatr_menu_sugerencias1[".OriginalTable"] = "tr_menu_sugerencias";


$tdatatr_menu_sugerencias1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_menu_sugerencias1[".originalPagesByType"] = $tdatatr_menu_sugerencias1[".pagesByType"];
$tdatatr_menu_sugerencias1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_menu_sugerencias1[".originalPages"] = $tdatatr_menu_sugerencias1[".pages"];
$tdatatr_menu_sugerencias1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_menu_sugerencias1[".originalDefaultPages"] = $tdatatr_menu_sugerencias1[".defaultPages"];

//	field labels
$fieldLabelstr_menu_sugerencias1 = array();
$fieldToolTipstr_menu_sugerencias1 = array();
$pageTitlestr_menu_sugerencias1 = array();
$placeHolderstr_menu_sugerencias1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_menu_sugerencias1["Spanish"] = array();
	$fieldToolTipstr_menu_sugerencias1["Spanish"] = array();
	$placeHolderstr_menu_sugerencias1["Spanish"] = array();
	$pageTitlestr_menu_sugerencias1["Spanish"] = array();
	$fieldLabelstr_menu_sugerencias1["Spanish"]["tr_sugerencias"] = "Tr Sugerencias";
	$fieldToolTipstr_menu_sugerencias1["Spanish"]["tr_sugerencias"] = "";
	$placeHolderstr_menu_sugerencias1["Spanish"]["tr_sugerencias"] = "";
	$fieldLabelstr_menu_sugerencias1["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstr_menu_sugerencias1["Spanish"]["fecha"] = "";
	$placeHolderstr_menu_sugerencias1["Spanish"]["fecha"] = "";
	$fieldLabelstr_menu_sugerencias1["Spanish"]["sugerencia"] = "Sugerencia";
	$fieldToolTipstr_menu_sugerencias1["Spanish"]["sugerencia"] = "";
	$placeHolderstr_menu_sugerencias1["Spanish"]["sugerencia"] = "";
	$fieldLabelstr_menu_sugerencias1["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_menu_sugerencias1["Spanish"]["vigente"] = "";
	$placeHolderstr_menu_sugerencias1["Spanish"]["vigente"] = "";
	$fieldLabelstr_menu_sugerencias1["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_menu_sugerencias1["Spanish"]["capturista"] = "";
	$placeHolderstr_menu_sugerencias1["Spanish"]["capturista"] = "";
	$fieldLabelstr_menu_sugerencias1["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_menu_sugerencias1["Spanish"]["time_stamp"] = "";
	$placeHolderstr_menu_sugerencias1["Spanish"]["time_stamp"] = "";
	$fieldLabelstr_menu_sugerencias1["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipstr_menu_sugerencias1["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderstr_menu_sugerencias1["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipstr_menu_sugerencias1["Spanish"]))
		$tdatatr_menu_sugerencias1[".isUseToolTips"] = true;
}





$tdatatr_menu_sugerencias1[".shortTableName"] = "tr_menu_sugerencias1";
$tdatatr_menu_sugerencias1[".nSecOptions"] = 0;

$tdatatr_menu_sugerencias1[".mainTableOwnerID"] = "";
$tdatatr_menu_sugerencias1[".entityType"] = 0;
$tdatatr_menu_sugerencias1[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_menu_sugerencias1[".strOriginalTableName"] = "tr_menu_sugerencias";

	



$tdatatr_menu_sugerencias1[".showAddInPopup"] = false;

$tdatatr_menu_sugerencias1[".showEditInPopup"] = false;

$tdatatr_menu_sugerencias1[".showViewInPopup"] = false;

$tdatatr_menu_sugerencias1[".listAjax"] = false;
//	temporary
//$tdatatr_menu_sugerencias1[".listAjax"] = false;

	$tdatatr_menu_sugerencias1[".audit"] = false;

	$tdatatr_menu_sugerencias1[".locking"] = false;


$pages = $tdatatr_menu_sugerencias1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_menu_sugerencias1[".edit"] = true;
	$tdatatr_menu_sugerencias1[".afterEditAction"] = 1;
	$tdatatr_menu_sugerencias1[".closePopupAfterEdit"] = 1;
	$tdatatr_menu_sugerencias1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_menu_sugerencias1[".add"] = true;
$tdatatr_menu_sugerencias1[".afterAddAction"] = 1;
$tdatatr_menu_sugerencias1[".closePopupAfterAdd"] = 1;
$tdatatr_menu_sugerencias1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_menu_sugerencias1[".list"] = true;
}



$tdatatr_menu_sugerencias1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_menu_sugerencias1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_menu_sugerencias1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_menu_sugerencias1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_menu_sugerencias1[".printFriendly"] = true;
}



$tdatatr_menu_sugerencias1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_menu_sugerencias1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_menu_sugerencias1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_menu_sugerencias1[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_menu_sugerencias1[".ajaxCodeSnippetAdded"] = false;

$tdatatr_menu_sugerencias1[".buttonsAdded"] = false;

$tdatatr_menu_sugerencias1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_menu_sugerencias1[".isUseTimeForSearch"] = false;


$tdatatr_menu_sugerencias1[".badgeColor"] = "7B68EE";


$tdatatr_menu_sugerencias1[".allSearchFields"] = array();
$tdatatr_menu_sugerencias1[".filterFields"] = array();
$tdatatr_menu_sugerencias1[".requiredSearchFields"] = array();

$tdatatr_menu_sugerencias1[".googleLikeFields"] = array();
$tdatatr_menu_sugerencias1[".googleLikeFields"][] = "tr_sugerencias";
$tdatatr_menu_sugerencias1[".googleLikeFields"][] = "fecha";
$tdatatr_menu_sugerencias1[".googleLikeFields"][] = "sugerencia";
$tdatatr_menu_sugerencias1[".googleLikeFields"][] = "vigente";
$tdatatr_menu_sugerencias1[".googleLikeFields"][] = "capturista";
$tdatatr_menu_sugerencias1[".googleLikeFields"][] = "time_stamp";
$tdatatr_menu_sugerencias1[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatatr_menu_sugerencias1[".tableType"] = "list";

$tdatatr_menu_sugerencias1[".printerPageOrientation"] = 0;
$tdatatr_menu_sugerencias1[".nPrinterPageScale"] = 100;

$tdatatr_menu_sugerencias1[".nPrinterSplitRecords"] = 40;

$tdatatr_menu_sugerencias1[".geocodingEnabled"] = false;





$tdatatr_menu_sugerencias1[".isResizeColumns"] = true;





$tdatatr_menu_sugerencias1[".pageSize"] = 20;

$tdatatr_menu_sugerencias1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_menu_sugerencias1[".strOrderBy"] = $tstrOrderBy;

$tdatatr_menu_sugerencias1[".orderindexes"] = array();


$tdatatr_menu_sugerencias1[".sqlHead"] = "SELECT tr_menu_sugerencias.tr_sugerencias,  tr_menu_sugerencias.fecha,  tr_menu_sugerencias.sugerencia,  tr_menu_sugerencias.vigente,  tr_menu_sugerencias.capturista,  tr_menu_sugerencias.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatatr_menu_sugerencias1[".sqlFrom"] = "FROM tr_menu_sugerencias  INNER JOIN cat_usuarios ON tr_menu_sugerencias.capturista = cat_usuarios.usuario";
$tdatatr_menu_sugerencias1[".sqlWhereExpr"] = "";
$tdatatr_menu_sugerencias1[".sqlTail"] = "";

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
$tdatatr_menu_sugerencias1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_menu_sugerencias1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_menu_sugerencias1[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_menu_sugerencias1[".highlightSearchResults"] = true;

$tableKeystr_menu_sugerencias1 = array();
$tableKeystr_menu_sugerencias1[] = "tr_sugerencias";
$tdatatr_menu_sugerencias1[".Keys"] = $tableKeystr_menu_sugerencias1;


$tdatatr_menu_sugerencias1[".hideMobileList"] = array();




//	tr_sugerencias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_sugerencias";
	$fdata["GoodName"] = "tr_sugerencias";
	$fdata["ownerTable"] = "tr_menu_sugerencias";
	$fdata["Label"] = GetFieldLabel("tr_menu_sugerencias","tr_sugerencias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tr_sugerencias";

		$fdata["sourceSingle"] = "tr_sugerencias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_menu_sugerencias.tr_sugerencias";

	
	
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


	$tdatatr_menu_sugerencias1["tr_sugerencias"] = $fdata;
		$tdatatr_menu_sugerencias1[".searchableFields"][] = "tr_sugerencias";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "tr_menu_sugerencias";
	$fdata["Label"] = GetFieldLabel("tr_menu_sugerencias","fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_menu_sugerencias.fecha";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatatr_menu_sugerencias1["fecha"] = $fdata;
		$tdatatr_menu_sugerencias1[".searchableFields"][] = "fecha";
//	sugerencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sugerencia";
	$fdata["GoodName"] = "sugerencia";
	$fdata["ownerTable"] = "tr_menu_sugerencias";
	$fdata["Label"] = GetFieldLabel("tr_menu_sugerencias","sugerencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sugerencia";

		$fdata["sourceSingle"] = "sugerencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_menu_sugerencias.sugerencia";

	
	
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


	$tdatatr_menu_sugerencias1["sugerencia"] = $fdata;
		$tdatatr_menu_sugerencias1[".searchableFields"][] = "sugerencia";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_menu_sugerencias";
	$fdata["Label"] = GetFieldLabel("tr_menu_sugerencias","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_menu_sugerencias.vigente";

	
	
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


	$tdatatr_menu_sugerencias1["vigente"] = $fdata;
		$tdatatr_menu_sugerencias1[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_menu_sugerencias";
	$fdata["Label"] = GetFieldLabel("tr_menu_sugerencias","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_menu_sugerencias.capturista";

	
	
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


	$tdatatr_menu_sugerencias1["capturista"] = $fdata;
		$tdatatr_menu_sugerencias1[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_menu_sugerencias";
	$fdata["Label"] = GetFieldLabel("tr_menu_sugerencias","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_menu_sugerencias.time_stamp";

	
	
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


	$tdatatr_menu_sugerencias1["time_stamp"] = $fdata;
		$tdatatr_menu_sugerencias1[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("tr_menu_sugerencias","cat_usuarios_licencias_id");
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


	$tdatatr_menu_sugerencias1["cat_usuarios_licencias_id"] = $fdata;
		$tdatatr_menu_sugerencias1[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["tr_menu_sugerencias"]=&$tdatatr_menu_sugerencias1;
$field_labels["tr_menu_sugerencias"] = &$fieldLabelstr_menu_sugerencias1;
$fieldToolTips["tr_menu_sugerencias"] = &$fieldToolTipstr_menu_sugerencias1;
$placeHolders["tr_menu_sugerencias"] = &$placeHolderstr_menu_sugerencias1;
$page_titles["tr_menu_sugerencias"] = &$pageTitlestr_menu_sugerencias1;


changeTextControlsToDate( "tr_menu_sugerencias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_menu_sugerencias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_menu_sugerencias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_menu_sugerencias1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_menu_sugerencias.tr_sugerencias,  tr_menu_sugerencias.fecha,  tr_menu_sugerencias.sugerencia,  tr_menu_sugerencias.vigente,  tr_menu_sugerencias.capturista,  tr_menu_sugerencias.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM tr_menu_sugerencias  INNER JOIN cat_usuarios ON tr_menu_sugerencias.capturista = cat_usuarios.usuario";
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
	"m_strName" => "tr_sugerencias",
	"m_strTable" => "tr_menu_sugerencias",
	"m_srcTableName" => "tr_menu_sugerencias"
));

$proto6["m_sql"] = "tr_menu_sugerencias.tr_sugerencias";
$proto6["m_srcTableName"] = "tr_menu_sugerencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "tr_menu_sugerencias",
	"m_srcTableName" => "tr_menu_sugerencias"
));

$proto8["m_sql"] = "tr_menu_sugerencias.fecha";
$proto8["m_srcTableName"] = "tr_menu_sugerencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sugerencia",
	"m_strTable" => "tr_menu_sugerencias",
	"m_srcTableName" => "tr_menu_sugerencias"
));

$proto10["m_sql"] = "tr_menu_sugerencias.sugerencia";
$proto10["m_srcTableName"] = "tr_menu_sugerencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_menu_sugerencias",
	"m_srcTableName" => "tr_menu_sugerencias"
));

$proto12["m_sql"] = "tr_menu_sugerencias.vigente";
$proto12["m_srcTableName"] = "tr_menu_sugerencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_menu_sugerencias",
	"m_srcTableName" => "tr_menu_sugerencias"
));

$proto14["m_sql"] = "tr_menu_sugerencias.capturista";
$proto14["m_srcTableName"] = "tr_menu_sugerencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_menu_sugerencias",
	"m_srcTableName" => "tr_menu_sugerencias"
));

$proto16["m_sql"] = "tr_menu_sugerencias.time_stamp";
$proto16["m_srcTableName"] = "tr_menu_sugerencias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "tr_menu_sugerencias"
));

$proto18["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto18["m_srcTableName"] = "tr_menu_sugerencias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tr_menu_sugerencias";
$proto21["m_srcTableName"] = "tr_menu_sugerencias";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "tr_sugerencias";
$proto21["m_columns"][] = "fecha";
$proto21["m_columns"][] = "sugerencia";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "tr_menu_sugerencias";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tr_menu_sugerencias";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "cat_usuarios";
$proto25["m_srcTableName"] = "tr_menu_sugerencias";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_usuarios_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "usuario";
$proto25["m_columns"][] = "cat_usuarios_licencias_id";
$proto25["m_columns"][] = "pass";
$proto25["m_columns"][] = "nombre";
$proto25["m_columns"][] = "correo";
$proto25["m_columns"][] = "cat_trabajadores_altas_id";
$proto25["m_columns"][] = "res_autorizacion";
$proto25["m_columns"][] = "session";
$proto25["m_columns"][] = "tipo";
$proto25["m_columns"][] = "session_v2";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN cat_usuarios ON tr_menu_sugerencias.capturista = cat_usuarios.usuario";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tr_menu_sugerencias";
$proto26=array();
$proto26["m_sql"] = "cat_usuarios.usuario = tr_menu_sugerencias.capturista";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "tr_menu_sugerencias"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= tr_menu_sugerencias.capturista";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_menu_sugerencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_menu_sugerencias1 = createSqlQuery_tr_menu_sugerencias1();


	
		;

							

$tdatatr_menu_sugerencias1[".sqlquery"] = $queryData_tr_menu_sugerencias1;



$tdatatr_menu_sugerencias1[".hasEvents"] = false;

?>