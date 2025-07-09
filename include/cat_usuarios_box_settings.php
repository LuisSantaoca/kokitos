<?php
$tdatacat_usuarios_box = array();
$tdatacat_usuarios_box[".searchableFields"] = array();
$tdatacat_usuarios_box[".ShortName"] = "cat_usuarios_box";
$tdatacat_usuarios_box[".OwnerID"] = "cat_usuarios_id";
$tdatacat_usuarios_box[".OriginalTable"] = "cat_usuarios";


$tdatacat_usuarios_box[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_usuarios_box[".originalPagesByType"] = $tdatacat_usuarios_box[".pagesByType"];
$tdatacat_usuarios_box[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_usuarios_box[".originalPages"] = $tdatacat_usuarios_box[".pages"];
$tdatacat_usuarios_box[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_usuarios_box[".originalDefaultPages"] = $tdatacat_usuarios_box[".defaultPages"];

//	field labels
$fieldLabelscat_usuarios_box = array();
$fieldToolTipscat_usuarios_box = array();
$pageTitlescat_usuarios_box = array();
$placeHolderscat_usuarios_box = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_usuarios_box["Spanish"] = array();
	$fieldToolTipscat_usuarios_box["Spanish"] = array();
	$placeHolderscat_usuarios_box["Spanish"] = array();
	$pageTitlescat_usuarios_box["Spanish"] = array();
	$fieldLabelscat_usuarios_box["Spanish"]["cat_usuarios_id"] = "id";
	$fieldToolTipscat_usuarios_box["Spanish"]["cat_usuarios_id"] = "";
	$placeHolderscat_usuarios_box["Spanish"]["cat_usuarios_id"] = "";
	$fieldLabelscat_usuarios_box["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_usuarios_box["Spanish"]["time_stamp"] = "";
	$placeHolderscat_usuarios_box["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_usuarios_box["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_usuarios_box["Spanish"]["vigente"] = "";
	$placeHolderscat_usuarios_box["Spanish"]["vigente"] = "";
	$fieldLabelscat_usuarios_box["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_usuarios_box["Spanish"]["capturista"] = "";
	$placeHolderscat_usuarios_box["Spanish"]["capturista"] = "";
	$fieldLabelscat_usuarios_box["Spanish"]["usuario"] = "Usuario";
	$fieldToolTipscat_usuarios_box["Spanish"]["usuario"] = "";
	$placeHolderscat_usuarios_box["Spanish"]["usuario"] = "";
	$fieldLabelscat_usuarios_box["Spanish"]["pass"] = "Pass";
	$fieldToolTipscat_usuarios_box["Spanish"]["pass"] = "";
	$placeHolderscat_usuarios_box["Spanish"]["pass"] = "";
	$fieldLabelscat_usuarios_box["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscat_usuarios_box["Spanish"]["nombre"] = "";
	$placeHolderscat_usuarios_box["Spanish"]["nombre"] = "";
	$fieldLabelscat_usuarios_box["Spanish"]["correo"] = "Correo";
	$fieldToolTipscat_usuarios_box["Spanish"]["correo"] = "";
	$placeHolderscat_usuarios_box["Spanish"]["correo"] = "";
	$fieldLabelscat_usuarios_box["Spanish"]["cat_usuarios_licencias_id"] = "Licencias";
	$fieldToolTipscat_usuarios_box["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_usuarios_box["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_usuarios_box["Spanish"]["cat_trabajadores_altas_id"] = "Trabajador";
	$fieldToolTipscat_usuarios_box["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_usuarios_box["Spanish"]["cat_trabajadores_altas_id"] = "";
	if (count($fieldToolTipscat_usuarios_box["Spanish"]))
		$tdatacat_usuarios_box[".isUseToolTips"] = true;
}





$tdatacat_usuarios_box[".shortTableName"] = "cat_usuarios_box";
$tdatacat_usuarios_box[".nSecOptions"] = 0;

$tdatacat_usuarios_box[".mainTableOwnerID"] = "cat_usuarios_id";
$tdatacat_usuarios_box[".entityType"] = 1;
$tdatacat_usuarios_box[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_usuarios_box[".strOriginalTableName"] = "cat_usuarios";

	



$tdatacat_usuarios_box[".showAddInPopup"] = false;

$tdatacat_usuarios_box[".showEditInPopup"] = false;

$tdatacat_usuarios_box[".showViewInPopup"] = false;

$tdatacat_usuarios_box[".listAjax"] = false;
//	temporary
//$tdatacat_usuarios_box[".listAjax"] = false;

	$tdatacat_usuarios_box[".audit"] = true;

	$tdatacat_usuarios_box[".locking"] = true;


$pages = $tdatacat_usuarios_box[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_usuarios_box[".edit"] = true;
	$tdatacat_usuarios_box[".afterEditAction"] = 1;
	$tdatacat_usuarios_box[".closePopupAfterEdit"] = 1;
	$tdatacat_usuarios_box[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_usuarios_box[".add"] = true;
$tdatacat_usuarios_box[".afterAddAction"] = 1;
$tdatacat_usuarios_box[".closePopupAfterAdd"] = 1;
$tdatacat_usuarios_box[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_usuarios_box[".list"] = true;
}



$tdatacat_usuarios_box[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_usuarios_box[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_usuarios_box[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_usuarios_box[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_usuarios_box[".printFriendly"] = true;
}



$tdatacat_usuarios_box[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_usuarios_box[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_usuarios_box[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_usuarios_box[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_usuarios_box[".ajaxCodeSnippetAdded"] = false;

$tdatacat_usuarios_box[".buttonsAdded"] = false;

$tdatacat_usuarios_box[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_usuarios_box[".isUseTimeForSearch"] = false;


$tdatacat_usuarios_box[".badgeColor"] = "E8926F";


$tdatacat_usuarios_box[".allSearchFields"] = array();
$tdatacat_usuarios_box[".filterFields"] = array();
$tdatacat_usuarios_box[".requiredSearchFields"] = array();

$tdatacat_usuarios_box[".googleLikeFields"] = array();
$tdatacat_usuarios_box[".googleLikeFields"][] = "cat_usuarios_id";
$tdatacat_usuarios_box[".googleLikeFields"][] = "time_stamp";
$tdatacat_usuarios_box[".googleLikeFields"][] = "vigente";
$tdatacat_usuarios_box[".googleLikeFields"][] = "capturista";
$tdatacat_usuarios_box[".googleLikeFields"][] = "usuario";
$tdatacat_usuarios_box[".googleLikeFields"][] = "pass";
$tdatacat_usuarios_box[".googleLikeFields"][] = "nombre";
$tdatacat_usuarios_box[".googleLikeFields"][] = "correo";
$tdatacat_usuarios_box[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatacat_usuarios_box[".googleLikeFields"][] = "cat_trabajadores_altas_id";



$tdatacat_usuarios_box[".tableType"] = "list";

$tdatacat_usuarios_box[".printerPageOrientation"] = 0;
$tdatacat_usuarios_box[".nPrinterPageScale"] = 100;

$tdatacat_usuarios_box[".nPrinterSplitRecords"] = 40;

$tdatacat_usuarios_box[".geocodingEnabled"] = false;





$tdatacat_usuarios_box[".isResizeColumns"] = true;





$tdatacat_usuarios_box[".pageSize"] = 20;

$tdatacat_usuarios_box[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_usuarios_box[".strOrderBy"] = $tstrOrderBy;

$tdatacat_usuarios_box[".orderindexes"] = array();


$tdatacat_usuarios_box[".sqlHead"] = "SELECT cat_usuarios_id,  time_stamp,  vigente,  capturista,  usuario,  pass,  nombre,  correo,  cat_usuarios_licencias_id,  cat_trabajadores_altas_id";
$tdatacat_usuarios_box[".sqlFrom"] = "FROM cat_usuarios";
$tdatacat_usuarios_box[".sqlWhereExpr"] = "(vigente =1)";
$tdatacat_usuarios_box[".sqlTail"] = "";

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
$tdatacat_usuarios_box[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_usuarios_box[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_usuarios_box[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_usuarios_box[".highlightSearchResults"] = true;

$tableKeyscat_usuarios_box = array();
$tableKeyscat_usuarios_box[] = "cat_usuarios_id";
$tdatacat_usuarios_box[".Keys"] = $tableKeyscat_usuarios_box;


$tdatacat_usuarios_box[".hideMobileList"] = array();




//	cat_usuarios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_usuarios_id";
	$fdata["GoodName"] = "cat_usuarios_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box","cat_usuarios_id");
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


	$tdatacat_usuarios_box["cat_usuarios_id"] = $fdata;
		$tdatacat_usuarios_box[".searchableFields"][] = "cat_usuarios_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box","time_stamp");
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


	$tdatacat_usuarios_box["time_stamp"] = $fdata;
		$tdatacat_usuarios_box[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box","vigente");
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


	$tdatacat_usuarios_box["vigente"] = $fdata;
		$tdatacat_usuarios_box[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box","capturista");
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


	$tdatacat_usuarios_box["capturista"] = $fdata;
		$tdatacat_usuarios_box[".searchableFields"][] = "capturista";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box","usuario");
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


	$tdatacat_usuarios_box["usuario"] = $fdata;
		$tdatacat_usuarios_box[".searchableFields"][] = "usuario";
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box","pass");
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


	$tdatacat_usuarios_box["pass"] = $fdata;
		$tdatacat_usuarios_box[".searchableFields"][] = "pass";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box","nombre");
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


	$tdatacat_usuarios_box["nombre"] = $fdata;
		$tdatacat_usuarios_box[".searchableFields"][] = "nombre";
//	correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "correo";
	$fdata["GoodName"] = "correo";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box","correo");
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


	$tdatacat_usuarios_box["correo"] = $fdata;
		$tdatacat_usuarios_box[".searchableFields"][] = "correo";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box","cat_usuarios_licencias_id");
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


	$tdatacat_usuarios_box["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_usuarios_box[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios_box","cat_trabajadores_altas_id");
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


	$tdatacat_usuarios_box["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_usuarios_box[".searchableFields"][] = "cat_trabajadores_altas_id";


$tables_data["cat_usuarios_box"]=&$tdatacat_usuarios_box;
$field_labels["cat_usuarios_box"] = &$fieldLabelscat_usuarios_box;
$fieldToolTips["cat_usuarios_box"] = &$fieldToolTipscat_usuarios_box;
$placeHolders["cat_usuarios_box"] = &$placeHolderscat_usuarios_box;
$page_titles["cat_usuarios_box"] = &$pageTitlescat_usuarios_box;


changeTextControlsToDate( "cat_usuarios_box" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_usuarios_box"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_usuarios_box"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_usuarios_box()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_usuarios_id,  time_stamp,  vigente,  capturista,  usuario,  pass,  nombre,  correo,  cat_usuarios_licencias_id,  cat_trabajadores_altas_id";
$proto0["m_strFrom"] = "FROM cat_usuarios";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_strName" => "cat_usuarios_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto6["m_sql"] = "cat_usuarios_id";
$proto6["m_srcTableName"] = "cat_usuarios_box";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_usuarios_box";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_usuarios_box";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_usuarios_box";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto14["m_sql"] = "usuario";
$proto14["m_srcTableName"] = "cat_usuarios_box";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pass",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto16["m_sql"] = "pass";
$proto16["m_srcTableName"] = "cat_usuarios_box";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto18["m_sql"] = "nombre";
$proto18["m_srcTableName"] = "cat_usuarios_box";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "correo",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto20["m_sql"] = "correo";
$proto20["m_srcTableName"] = "cat_usuarios_box";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto22["m_sql"] = "cat_usuarios_licencias_id";
$proto22["m_srcTableName"] = "cat_usuarios_box";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios_box"
));

$proto24["m_sql"] = "cat_trabajadores_altas_id";
$proto24["m_srcTableName"] = "cat_usuarios_box";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "cat_usuarios";
$proto27["m_srcTableName"] = "cat_usuarios_box";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "cat_usuarios_id";
$proto27["m_columns"][] = "time_stamp";
$proto27["m_columns"][] = "vigente";
$proto27["m_columns"][] = "capturista";
$proto27["m_columns"][] = "usuario";
$proto27["m_columns"][] = "cat_usuarios_licencias_id";
$proto27["m_columns"][] = "pass";
$proto27["m_columns"][] = "nombre";
$proto27["m_columns"][] = "correo";
$proto27["m_columns"][] = "cat_trabajadores_altas_id";
$proto27["m_columns"][] = "res_autorizacion";
$proto27["m_columns"][] = "session";
$proto27["m_columns"][] = "tipo";
$proto27["m_columns"][] = "session_v2";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "cat_usuarios";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "cat_usuarios_box";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_usuarios_box";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_usuarios_box = createSqlQuery_cat_usuarios_box();


	
		;

										

$tdatacat_usuarios_box[".sqlquery"] = $queryData_cat_usuarios_box;



$tdatacat_usuarios_box[".hasEvents"] = false;

?>