<?php
$tdatacat_nominas_prestamos = array();
$tdatacat_nominas_prestamos[".searchableFields"] = array();
$tdatacat_nominas_prestamos[".ShortName"] = "cat_nominas_prestamos";
$tdatacat_nominas_prestamos[".OwnerID"] = "";
$tdatacat_nominas_prestamos[".OriginalTable"] = "cat_nominas_prestamos";


$tdatacat_nominas_prestamos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_prestamos[".originalPagesByType"] = $tdatacat_nominas_prestamos[".pagesByType"];
$tdatacat_nominas_prestamos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_prestamos[".originalPages"] = $tdatacat_nominas_prestamos[".pages"];
$tdatacat_nominas_prestamos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_nominas_prestamos[".originalDefaultPages"] = $tdatacat_nominas_prestamos[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_prestamos = array();
$fieldToolTipscat_nominas_prestamos = array();
$pageTitlescat_nominas_prestamos = array();
$placeHolderscat_nominas_prestamos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_prestamos["Spanish"] = array();
	$fieldToolTipscat_nominas_prestamos["Spanish"] = array();
	$placeHolderscat_nominas_prestamos["Spanish"] = array();
	$pageTitlescat_nominas_prestamos["Spanish"] = array();
	$fieldLabelscat_nominas_prestamos["Spanish"]["cat_nominas_prestamos_id"] = "Cat Nominas Prestamos Id";
	$fieldToolTipscat_nominas_prestamos["Spanish"]["cat_nominas_prestamos_id"] = "";
	$placeHolderscat_nominas_prestamos["Spanish"]["cat_nominas_prestamos_id"] = "";
	$fieldLabelscat_nominas_prestamos["Spanish"]["descripcion_prestamo"] = "Descripcion Prestamo";
	$fieldToolTipscat_nominas_prestamos["Spanish"]["descripcion_prestamo"] = "";
	$placeHolderscat_nominas_prestamos["Spanish"]["descripcion_prestamo"] = "";
	$fieldLabelscat_nominas_prestamos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_prestamos["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_prestamos["Spanish"]["vigente"] = "";
	$fieldLabelscat_nominas_prestamos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_prestamos["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_prestamos["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_prestamos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_prestamos["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_prestamos["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_nominas_prestamos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_nominas_prestamos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_nominas_prestamos["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_nominas_prestamos["Spanish"]))
		$tdatacat_nominas_prestamos[".isUseToolTips"] = true;
}





$tdatacat_nominas_prestamos[".shortTableName"] = "cat_nominas_prestamos";
$tdatacat_nominas_prestamos[".nSecOptions"] = 0;

$tdatacat_nominas_prestamos[".mainTableOwnerID"] = "";
$tdatacat_nominas_prestamos[".entityType"] = 0;
$tdatacat_nominas_prestamos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_prestamos[".strOriginalTableName"] = "cat_nominas_prestamos";

	



$tdatacat_nominas_prestamos[".showAddInPopup"] = false;

$tdatacat_nominas_prestamos[".showEditInPopup"] = false;

$tdatacat_nominas_prestamos[".showViewInPopup"] = false;

$tdatacat_nominas_prestamos[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_prestamos[".listAjax"] = false;

	$tdatacat_nominas_prestamos[".audit"] = false;

	$tdatacat_nominas_prestamos[".locking"] = false;


$pages = $tdatacat_nominas_prestamos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_prestamos[".edit"] = true;
	$tdatacat_nominas_prestamos[".afterEditAction"] = 1;
	$tdatacat_nominas_prestamos[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_prestamos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_prestamos[".add"] = true;
$tdatacat_nominas_prestamos[".afterAddAction"] = 1;
$tdatacat_nominas_prestamos[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_prestamos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_prestamos[".list"] = true;
}



$tdatacat_nominas_prestamos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_prestamos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_prestamos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_prestamos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_prestamos[".printFriendly"] = true;
}



$tdatacat_nominas_prestamos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_prestamos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_prestamos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_prestamos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_prestamos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_prestamos[".buttonsAdded"] = false;

$tdatacat_nominas_prestamos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_prestamos[".isUseTimeForSearch"] = false;


$tdatacat_nominas_prestamos[".badgeColor"] = "8FBC8B";


$tdatacat_nominas_prestamos[".allSearchFields"] = array();
$tdatacat_nominas_prestamos[".filterFields"] = array();
$tdatacat_nominas_prestamos[".requiredSearchFields"] = array();

$tdatacat_nominas_prestamos[".googleLikeFields"] = array();
$tdatacat_nominas_prestamos[".googleLikeFields"][] = "cat_nominas_prestamos_id";
$tdatacat_nominas_prestamos[".googleLikeFields"][] = "descripcion_prestamo";
$tdatacat_nominas_prestamos[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_prestamos[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_prestamos[".googleLikeFields"][] = "time_stamp";
$tdatacat_nominas_prestamos[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_nominas_prestamos[".tableType"] = "list";

$tdatacat_nominas_prestamos[".printerPageOrientation"] = 0;
$tdatacat_nominas_prestamos[".nPrinterPageScale"] = 100;

$tdatacat_nominas_prestamos[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_prestamos[".geocodingEnabled"] = false;





$tdatacat_nominas_prestamos[".isResizeColumns"] = true;





$tdatacat_nominas_prestamos[".pageSize"] = 20;

$tdatacat_nominas_prestamos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_prestamos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_prestamos[".orderindexes"] = array();


$tdatacat_nominas_prestamos[".sqlHead"] = "SELECT cat_nominas_prestamos.cat_nominas_prestamos_id,  cat_nominas_prestamos.descripcion_prestamo,  cat_nominas_prestamos.vigente,  cat_nominas_prestamos.capturista,  cat_nominas_prestamos.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_nominas_prestamos[".sqlFrom"] = "FROM cat_nominas_prestamos  INNER JOIN cat_usuarios ON cat_nominas_prestamos.capturista = cat_usuarios.usuario";
$tdatacat_nominas_prestamos[".sqlWhereExpr"] = "";
$tdatacat_nominas_prestamos[".sqlTail"] = "";

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
$tdatacat_nominas_prestamos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_prestamos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_prestamos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_prestamos[".highlightSearchResults"] = true;

$tableKeyscat_nominas_prestamos = array();
$tableKeyscat_nominas_prestamos[] = "cat_nominas_prestamos_id";
$tdatacat_nominas_prestamos[".Keys"] = $tableKeyscat_nominas_prestamos;


$tdatacat_nominas_prestamos[".hideMobileList"] = array();




//	cat_nominas_prestamos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_nominas_prestamos_id";
	$fdata["GoodName"] = "cat_nominas_prestamos_id";
	$fdata["ownerTable"] = "cat_nominas_prestamos";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestamos","cat_nominas_prestamos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_prestamos_id";

		$fdata["sourceSingle"] = "cat_nominas_prestamos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_prestamos.cat_nominas_prestamos_id";

	
	
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


	$tdatacat_nominas_prestamos["cat_nominas_prestamos_id"] = $fdata;
		$tdatacat_nominas_prestamos[".searchableFields"][] = "cat_nominas_prestamos_id";
//	descripcion_prestamo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_prestamo";
	$fdata["GoodName"] = "descripcion_prestamo";
	$fdata["ownerTable"] = "cat_nominas_prestamos";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestamos","descripcion_prestamo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_prestamo";

		$fdata["sourceSingle"] = "descripcion_prestamo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_prestamos.descripcion_prestamo";

	
	
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


	$tdatacat_nominas_prestamos["descripcion_prestamo"] = $fdata;
		$tdatacat_nominas_prestamos[".searchableFields"][] = "descripcion_prestamo";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_prestamos";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestamos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_prestamos.vigente";

	
	
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


	$tdatacat_nominas_prestamos["vigente"] = $fdata;
		$tdatacat_nominas_prestamos[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_prestamos";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestamos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_prestamos.capturista";

	
	
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


	$tdatacat_nominas_prestamos["capturista"] = $fdata;
		$tdatacat_nominas_prestamos[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_prestamos";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestamos","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_prestamos.time_stamp";

	
	
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


	$tdatacat_nominas_prestamos["time_stamp"] = $fdata;
		$tdatacat_nominas_prestamos[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_prestamos","cat_usuarios_licencias_id");
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


	$tdatacat_nominas_prestamos["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_nominas_prestamos[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_nominas_prestamos"]=&$tdatacat_nominas_prestamos;
$field_labels["cat_nominas_prestamos"] = &$fieldLabelscat_nominas_prestamos;
$fieldToolTips["cat_nominas_prestamos"] = &$fieldToolTipscat_nominas_prestamos;
$placeHolders["cat_nominas_prestamos"] = &$placeHolderscat_nominas_prestamos;
$page_titles["cat_nominas_prestamos"] = &$pageTitlescat_nominas_prestamos;


changeTextControlsToDate( "cat_nominas_prestamos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_prestamos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_prestamos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_prestamos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_nominas_prestamos.cat_nominas_prestamos_id,  cat_nominas_prestamos.descripcion_prestamo,  cat_nominas_prestamos.vigente,  cat_nominas_prestamos.capturista,  cat_nominas_prestamos.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_nominas_prestamos  INNER JOIN cat_usuarios ON cat_nominas_prestamos.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_nominas_prestamos_id",
	"m_strTable" => "cat_nominas_prestamos",
	"m_srcTableName" => "cat_nominas_prestamos"
));

$proto6["m_sql"] = "cat_nominas_prestamos.cat_nominas_prestamos_id";
$proto6["m_srcTableName"] = "cat_nominas_prestamos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_prestamo",
	"m_strTable" => "cat_nominas_prestamos",
	"m_srcTableName" => "cat_nominas_prestamos"
));

$proto8["m_sql"] = "cat_nominas_prestamos.descripcion_prestamo";
$proto8["m_srcTableName"] = "cat_nominas_prestamos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_nominas_prestamos",
	"m_srcTableName" => "cat_nominas_prestamos"
));

$proto10["m_sql"] = "cat_nominas_prestamos.vigente";
$proto10["m_srcTableName"] = "cat_nominas_prestamos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_prestamos",
	"m_srcTableName" => "cat_nominas_prestamos"
));

$proto12["m_sql"] = "cat_nominas_prestamos.capturista";
$proto12["m_srcTableName"] = "cat_nominas_prestamos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_prestamos",
	"m_srcTableName" => "cat_nominas_prestamos"
));

$proto14["m_sql"] = "cat_nominas_prestamos.time_stamp";
$proto14["m_srcTableName"] = "cat_nominas_prestamos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_nominas_prestamos"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_nominas_prestamos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_nominas_prestamos";
$proto19["m_srcTableName"] = "cat_nominas_prestamos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_nominas_prestamos_id";
$proto19["m_columns"][] = "descripcion_prestamo";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_nominas_prestamos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_nominas_prestamos";
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
$proto23["m_srcTableName"] = "cat_nominas_prestamos";
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
$proto22["m_sql"] = "INNER JOIN cat_usuarios ON cat_nominas_prestamos.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_nominas_prestamos";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_nominas_prestamos.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_nominas_prestamos"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_nominas_prestamos.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_nominas_prestamos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_prestamos = createSqlQuery_cat_nominas_prestamos();


	
		;

						

$tdatacat_nominas_prestamos[".sqlquery"] = $queryData_cat_nominas_prestamos;



$tdatacat_nominas_prestamos[".hasEvents"] = false;

?>