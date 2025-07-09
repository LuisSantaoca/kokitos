<?php
$tdatacat_finanzas_cajas_chicas = array();
$tdatacat_finanzas_cajas_chicas[".searchableFields"] = array();
$tdatacat_finanzas_cajas_chicas[".ShortName"] = "cat_finanzas_cajas_chicas";
$tdatacat_finanzas_cajas_chicas[".OwnerID"] = "";
$tdatacat_finanzas_cajas_chicas[".OriginalTable"] = "cat_finanzas_cajas_chicas";


$tdatacat_finanzas_cajas_chicas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_finanzas_cajas_chicas[".originalPagesByType"] = $tdatacat_finanzas_cajas_chicas[".pagesByType"];
$tdatacat_finanzas_cajas_chicas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_finanzas_cajas_chicas[".originalPages"] = $tdatacat_finanzas_cajas_chicas[".pages"];
$tdatacat_finanzas_cajas_chicas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_finanzas_cajas_chicas[".originalDefaultPages"] = $tdatacat_finanzas_cajas_chicas[".defaultPages"];

//	field labels
$fieldLabelscat_finanzas_cajas_chicas = array();
$fieldToolTipscat_finanzas_cajas_chicas = array();
$pageTitlescat_finanzas_cajas_chicas = array();
$placeHolderscat_finanzas_cajas_chicas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_finanzas_cajas_chicas["Spanish"] = array();
	$fieldToolTipscat_finanzas_cajas_chicas["Spanish"] = array();
	$placeHolderscat_finanzas_cajas_chicas["Spanish"] = array();
	$pageTitlescat_finanzas_cajas_chicas["Spanish"] = array();
	$fieldLabelscat_finanzas_cajas_chicas["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_finanzas_cajas_chicas["Spanish"]["vigente"] = "";
	$placeHolderscat_finanzas_cajas_chicas["Spanish"]["vigente"] = "";
	$fieldLabelscat_finanzas_cajas_chicas["Spanish"]["descripcion_caja_chica"] = "Descripcion";
	$fieldToolTipscat_finanzas_cajas_chicas["Spanish"]["descripcion_caja_chica"] = "";
	$placeHolderscat_finanzas_cajas_chicas["Spanish"]["descripcion_caja_chica"] = "";
	$fieldLabelscat_finanzas_cajas_chicas["Spanish"]["cat_finanzas_cajas_chicas_id"] = "Id";
	$fieldToolTipscat_finanzas_cajas_chicas["Spanish"]["cat_finanzas_cajas_chicas_id"] = "";
	$placeHolderscat_finanzas_cajas_chicas["Spanish"]["cat_finanzas_cajas_chicas_id"] = "";
	$fieldLabelscat_finanzas_cajas_chicas["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_finanzas_cajas_chicas["Spanish"]["capturista"] = "";
	$placeHolderscat_finanzas_cajas_chicas["Spanish"]["capturista"] = "";
	$fieldLabelscat_finanzas_cajas_chicas["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_finanzas_cajas_chicas["Spanish"]["time_stamp"] = "";
	$placeHolderscat_finanzas_cajas_chicas["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_finanzas_cajas_chicas["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_finanzas_cajas_chicas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_finanzas_cajas_chicas["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_finanzas_cajas_chicas["Spanish"]))
		$tdatacat_finanzas_cajas_chicas[".isUseToolTips"] = true;
}





$tdatacat_finanzas_cajas_chicas[".shortTableName"] = "cat_finanzas_cajas_chicas";
$tdatacat_finanzas_cajas_chicas[".nSecOptions"] = 0;

$tdatacat_finanzas_cajas_chicas[".mainTableOwnerID"] = "";
$tdatacat_finanzas_cajas_chicas[".entityType"] = 0;
$tdatacat_finanzas_cajas_chicas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_finanzas_cajas_chicas[".strOriginalTableName"] = "cat_finanzas_cajas_chicas";

	



$tdatacat_finanzas_cajas_chicas[".showAddInPopup"] = false;

$tdatacat_finanzas_cajas_chicas[".showEditInPopup"] = false;

$tdatacat_finanzas_cajas_chicas[".showViewInPopup"] = false;

$tdatacat_finanzas_cajas_chicas[".listAjax"] = false;
//	temporary
//$tdatacat_finanzas_cajas_chicas[".listAjax"] = false;

	$tdatacat_finanzas_cajas_chicas[".audit"] = false;

	$tdatacat_finanzas_cajas_chicas[".locking"] = false;


$pages = $tdatacat_finanzas_cajas_chicas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_finanzas_cajas_chicas[".edit"] = true;
	$tdatacat_finanzas_cajas_chicas[".afterEditAction"] = 1;
	$tdatacat_finanzas_cajas_chicas[".closePopupAfterEdit"] = 1;
	$tdatacat_finanzas_cajas_chicas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_finanzas_cajas_chicas[".add"] = true;
$tdatacat_finanzas_cajas_chicas[".afterAddAction"] = 1;
$tdatacat_finanzas_cajas_chicas[".closePopupAfterAdd"] = 1;
$tdatacat_finanzas_cajas_chicas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_finanzas_cajas_chicas[".list"] = true;
}



$tdatacat_finanzas_cajas_chicas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_finanzas_cajas_chicas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_finanzas_cajas_chicas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_finanzas_cajas_chicas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_finanzas_cajas_chicas[".printFriendly"] = true;
}



$tdatacat_finanzas_cajas_chicas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_finanzas_cajas_chicas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_finanzas_cajas_chicas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_finanzas_cajas_chicas[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_finanzas_cajas_chicas[".ajaxCodeSnippetAdded"] = false;

$tdatacat_finanzas_cajas_chicas[".buttonsAdded"] = false;

$tdatacat_finanzas_cajas_chicas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_finanzas_cajas_chicas[".isUseTimeForSearch"] = false;


$tdatacat_finanzas_cajas_chicas[".badgeColor"] = "D2691E";


$tdatacat_finanzas_cajas_chicas[".allSearchFields"] = array();
$tdatacat_finanzas_cajas_chicas[".filterFields"] = array();
$tdatacat_finanzas_cajas_chicas[".requiredSearchFields"] = array();

$tdatacat_finanzas_cajas_chicas[".googleLikeFields"] = array();
$tdatacat_finanzas_cajas_chicas[".googleLikeFields"][] = "vigente";
$tdatacat_finanzas_cajas_chicas[".googleLikeFields"][] = "descripcion_caja_chica";
$tdatacat_finanzas_cajas_chicas[".googleLikeFields"][] = "cat_finanzas_cajas_chicas_id";
$tdatacat_finanzas_cajas_chicas[".googleLikeFields"][] = "capturista";
$tdatacat_finanzas_cajas_chicas[".googleLikeFields"][] = "time_stamp";
$tdatacat_finanzas_cajas_chicas[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_finanzas_cajas_chicas[".tableType"] = "list";

$tdatacat_finanzas_cajas_chicas[".printerPageOrientation"] = 0;
$tdatacat_finanzas_cajas_chicas[".nPrinterPageScale"] = 100;

$tdatacat_finanzas_cajas_chicas[".nPrinterSplitRecords"] = 40;

$tdatacat_finanzas_cajas_chicas[".geocodingEnabled"] = false;





$tdatacat_finanzas_cajas_chicas[".isResizeColumns"] = true;





$tdatacat_finanzas_cajas_chicas[".pageSize"] = 20;

$tdatacat_finanzas_cajas_chicas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_finanzas_cajas_chicas[".strOrderBy"] = $tstrOrderBy;

$tdatacat_finanzas_cajas_chicas[".orderindexes"] = array();


$tdatacat_finanzas_cajas_chicas[".sqlHead"] = "SELECT cat_finanzas_cajas_chicas.vigente,  cat_finanzas_cajas_chicas.descripcion_caja_chica,  cat_finanzas_cajas_chicas.cat_finanzas_cajas_chicas_id,  cat_finanzas_cajas_chicas.capturista,  cat_finanzas_cajas_chicas.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_finanzas_cajas_chicas[".sqlFrom"] = "FROM cat_finanzas_cajas_chicas  INNER JOIN cat_usuarios ON cat_finanzas_cajas_chicas.capturista = cat_usuarios.usuario";
$tdatacat_finanzas_cajas_chicas[".sqlWhereExpr"] = "";
$tdatacat_finanzas_cajas_chicas[".sqlTail"] = "";

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
$tdatacat_finanzas_cajas_chicas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_finanzas_cajas_chicas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_finanzas_cajas_chicas[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_finanzas_cajas_chicas[".highlightSearchResults"] = true;

$tableKeyscat_finanzas_cajas_chicas = array();
$tableKeyscat_finanzas_cajas_chicas[] = "cat_finanzas_cajas_chicas_id";
$tdatacat_finanzas_cajas_chicas[".Keys"] = $tableKeyscat_finanzas_cajas_chicas;


$tdatacat_finanzas_cajas_chicas[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_cajas_chicas";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_cajas_chicas","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_cajas_chicas.vigente";

	
	
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


	$tdatacat_finanzas_cajas_chicas["vigente"] = $fdata;
		$tdatacat_finanzas_cajas_chicas[".searchableFields"][] = "vigente";
//	descripcion_caja_chica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_caja_chica";
	$fdata["GoodName"] = "descripcion_caja_chica";
	$fdata["ownerTable"] = "cat_finanzas_cajas_chicas";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_cajas_chicas","descripcion_caja_chica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_caja_chica";

		$fdata["sourceSingle"] = "descripcion_caja_chica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_cajas_chicas.descripcion_caja_chica";

	
	
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


	$tdatacat_finanzas_cajas_chicas["descripcion_caja_chica"] = $fdata;
		$tdatacat_finanzas_cajas_chicas[".searchableFields"][] = "descripcion_caja_chica";
//	cat_finanzas_cajas_chicas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_finanzas_cajas_chicas_id";
	$fdata["GoodName"] = "cat_finanzas_cajas_chicas_id";
	$fdata["ownerTable"] = "cat_finanzas_cajas_chicas";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_cajas_chicas","cat_finanzas_cajas_chicas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_cajas_chicas_id";

		$fdata["sourceSingle"] = "cat_finanzas_cajas_chicas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_cajas_chicas.cat_finanzas_cajas_chicas_id";

	
	
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


	$tdatacat_finanzas_cajas_chicas["cat_finanzas_cajas_chicas_id"] = $fdata;
		$tdatacat_finanzas_cajas_chicas[".searchableFields"][] = "cat_finanzas_cajas_chicas_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_finanzas_cajas_chicas";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_cajas_chicas","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_cajas_chicas.capturista";

	
	
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


	$tdatacat_finanzas_cajas_chicas["capturista"] = $fdata;
		$tdatacat_finanzas_cajas_chicas[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_finanzas_cajas_chicas";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_cajas_chicas","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_cajas_chicas.time_stamp";

	
	
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


	$tdatacat_finanzas_cajas_chicas["time_stamp"] = $fdata;
		$tdatacat_finanzas_cajas_chicas[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_cajas_chicas","cat_usuarios_licencias_id");
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


	$tdatacat_finanzas_cajas_chicas["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_finanzas_cajas_chicas[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_finanzas_cajas_chicas"]=&$tdatacat_finanzas_cajas_chicas;
$field_labels["cat_finanzas_cajas_chicas"] = &$fieldLabelscat_finanzas_cajas_chicas;
$fieldToolTips["cat_finanzas_cajas_chicas"] = &$fieldToolTipscat_finanzas_cajas_chicas;
$placeHolders["cat_finanzas_cajas_chicas"] = &$placeHolderscat_finanzas_cajas_chicas;
$page_titles["cat_finanzas_cajas_chicas"] = &$pageTitlescat_finanzas_cajas_chicas;


changeTextControlsToDate( "cat_finanzas_cajas_chicas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_finanzas_cajas_chicas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_finanzas_cajas_chicas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_finanzas_cajas_chicas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_cajas_chicas.vigente,  cat_finanzas_cajas_chicas.descripcion_caja_chica,  cat_finanzas_cajas_chicas.cat_finanzas_cajas_chicas_id,  cat_finanzas_cajas_chicas.capturista,  cat_finanzas_cajas_chicas.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_cajas_chicas  INNER JOIN cat_usuarios ON cat_finanzas_cajas_chicas.capturista = cat_usuarios.usuario";
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
	"m_strTable" => "cat_finanzas_cajas_chicas",
	"m_srcTableName" => "cat_finanzas_cajas_chicas"
));

$proto6["m_sql"] = "cat_finanzas_cajas_chicas.vigente";
$proto6["m_srcTableName"] = "cat_finanzas_cajas_chicas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_caja_chica",
	"m_strTable" => "cat_finanzas_cajas_chicas",
	"m_srcTableName" => "cat_finanzas_cajas_chicas"
));

$proto8["m_sql"] = "cat_finanzas_cajas_chicas.descripcion_caja_chica";
$proto8["m_srcTableName"] = "cat_finanzas_cajas_chicas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_cajas_chicas_id",
	"m_strTable" => "cat_finanzas_cajas_chicas",
	"m_srcTableName" => "cat_finanzas_cajas_chicas"
));

$proto10["m_sql"] = "cat_finanzas_cajas_chicas.cat_finanzas_cajas_chicas_id";
$proto10["m_srcTableName"] = "cat_finanzas_cajas_chicas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_finanzas_cajas_chicas",
	"m_srcTableName" => "cat_finanzas_cajas_chicas"
));

$proto12["m_sql"] = "cat_finanzas_cajas_chicas.capturista";
$proto12["m_srcTableName"] = "cat_finanzas_cajas_chicas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_finanzas_cajas_chicas",
	"m_srcTableName" => "cat_finanzas_cajas_chicas"
));

$proto14["m_sql"] = "cat_finanzas_cajas_chicas.time_stamp";
$proto14["m_srcTableName"] = "cat_finanzas_cajas_chicas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_cajas_chicas"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_finanzas_cajas_chicas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_finanzas_cajas_chicas";
$proto19["m_srcTableName"] = "cat_finanzas_cajas_chicas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "descripcion_caja_chica";
$proto19["m_columns"][] = "cat_finanzas_cajas_chicas_id";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_finanzas_cajas_chicas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_finanzas_cajas_chicas";
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
$proto23["m_srcTableName"] = "cat_finanzas_cajas_chicas";
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
$proto22["m_sql"] = "INNER JOIN cat_usuarios ON cat_finanzas_cajas_chicas.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_finanzas_cajas_chicas";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_finanzas_cajas_chicas.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_cajas_chicas"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_finanzas_cajas_chicas.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_finanzas_cajas_chicas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_finanzas_cajas_chicas = createSqlQuery_cat_finanzas_cajas_chicas();


	
		;

						

$tdatacat_finanzas_cajas_chicas[".sqlquery"] = $queryData_cat_finanzas_cajas_chicas;



$tdatacat_finanzas_cajas_chicas[".hasEvents"] = false;

?>