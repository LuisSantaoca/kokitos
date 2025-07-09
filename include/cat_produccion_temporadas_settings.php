<?php
$tdatacat_produccion_temporadas = array();
$tdatacat_produccion_temporadas[".searchableFields"] = array();
$tdatacat_produccion_temporadas[".ShortName"] = "cat_produccion_temporadas";
$tdatacat_produccion_temporadas[".OwnerID"] = "";
$tdatacat_produccion_temporadas[".OriginalTable"] = "cat_produccion_temporadas";


$tdatacat_produccion_temporadas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_produccion_temporadas[".originalPagesByType"] = $tdatacat_produccion_temporadas[".pagesByType"];
$tdatacat_produccion_temporadas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_produccion_temporadas[".originalPages"] = $tdatacat_produccion_temporadas[".pages"];
$tdatacat_produccion_temporadas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_produccion_temporadas[".originalDefaultPages"] = $tdatacat_produccion_temporadas[".defaultPages"];

//	field labels
$fieldLabelscat_produccion_temporadas = array();
$fieldToolTipscat_produccion_temporadas = array();
$pageTitlescat_produccion_temporadas = array();
$placeHolderscat_produccion_temporadas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_produccion_temporadas["Spanish"] = array();
	$fieldToolTipscat_produccion_temporadas["Spanish"] = array();
	$placeHolderscat_produccion_temporadas["Spanish"] = array();
	$pageTitlescat_produccion_temporadas["Spanish"] = array();
	$fieldLabelscat_produccion_temporadas["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_produccion_temporadas["Spanish"]["vigente"] = "";
	$placeHolderscat_produccion_temporadas["Spanish"]["vigente"] = "";
	$fieldLabelscat_produccion_temporadas["Spanish"]["descripcion_temporada"] = "Descripcion Temporada";
	$fieldToolTipscat_produccion_temporadas["Spanish"]["descripcion_temporada"] = "";
	$placeHolderscat_produccion_temporadas["Spanish"]["descripcion_temporada"] = "";
	$fieldLabelscat_produccion_temporadas["Spanish"]["cat_produccion_temporadas_id"] = "Id";
	$fieldToolTipscat_produccion_temporadas["Spanish"]["cat_produccion_temporadas_id"] = "";
	$placeHolderscat_produccion_temporadas["Spanish"]["cat_produccion_temporadas_id"] = "";
	$fieldLabelscat_produccion_temporadas["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_produccion_temporadas["Spanish"]["capturista"] = "";
	$placeHolderscat_produccion_temporadas["Spanish"]["capturista"] = "";
	$fieldLabelscat_produccion_temporadas["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_produccion_temporadas["Spanish"]["time_stamp"] = "";
	$placeHolderscat_produccion_temporadas["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_produccion_temporadas["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_produccion_temporadas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_produccion_temporadas["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_produccion_temporadas["Spanish"]))
		$tdatacat_produccion_temporadas[".isUseToolTips"] = true;
}





$tdatacat_produccion_temporadas[".shortTableName"] = "cat_produccion_temporadas";
$tdatacat_produccion_temporadas[".nSecOptions"] = 0;

$tdatacat_produccion_temporadas[".mainTableOwnerID"] = "";
$tdatacat_produccion_temporadas[".entityType"] = 0;
$tdatacat_produccion_temporadas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_produccion_temporadas[".strOriginalTableName"] = "cat_produccion_temporadas";

	



$tdatacat_produccion_temporadas[".showAddInPopup"] = false;

$tdatacat_produccion_temporadas[".showEditInPopup"] = false;

$tdatacat_produccion_temporadas[".showViewInPopup"] = false;

$tdatacat_produccion_temporadas[".listAjax"] = false;
//	temporary
//$tdatacat_produccion_temporadas[".listAjax"] = false;

	$tdatacat_produccion_temporadas[".audit"] = false;

	$tdatacat_produccion_temporadas[".locking"] = false;


$pages = $tdatacat_produccion_temporadas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_produccion_temporadas[".edit"] = true;
	$tdatacat_produccion_temporadas[".afterEditAction"] = 1;
	$tdatacat_produccion_temporadas[".closePopupAfterEdit"] = 1;
	$tdatacat_produccion_temporadas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_produccion_temporadas[".add"] = true;
$tdatacat_produccion_temporadas[".afterAddAction"] = 1;
$tdatacat_produccion_temporadas[".closePopupAfterAdd"] = 1;
$tdatacat_produccion_temporadas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_produccion_temporadas[".list"] = true;
}



$tdatacat_produccion_temporadas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_produccion_temporadas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_produccion_temporadas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_produccion_temporadas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_produccion_temporadas[".printFriendly"] = true;
}



$tdatacat_produccion_temporadas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_produccion_temporadas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_produccion_temporadas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_produccion_temporadas[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_produccion_temporadas[".ajaxCodeSnippetAdded"] = false;

$tdatacat_produccion_temporadas[".buttonsAdded"] = false;

$tdatacat_produccion_temporadas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_produccion_temporadas[".isUseTimeForSearch"] = false;


$tdatacat_produccion_temporadas[".badgeColor"] = "DB7093";


$tdatacat_produccion_temporadas[".allSearchFields"] = array();
$tdatacat_produccion_temporadas[".filterFields"] = array();
$tdatacat_produccion_temporadas[".requiredSearchFields"] = array();

$tdatacat_produccion_temporadas[".googleLikeFields"] = array();
$tdatacat_produccion_temporadas[".googleLikeFields"][] = "vigente";
$tdatacat_produccion_temporadas[".googleLikeFields"][] = "descripcion_temporada";
$tdatacat_produccion_temporadas[".googleLikeFields"][] = "cat_produccion_temporadas_id";
$tdatacat_produccion_temporadas[".googleLikeFields"][] = "capturista";
$tdatacat_produccion_temporadas[".googleLikeFields"][] = "time_stamp";
$tdatacat_produccion_temporadas[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_produccion_temporadas[".tableType"] = "list";

$tdatacat_produccion_temporadas[".printerPageOrientation"] = 0;
$tdatacat_produccion_temporadas[".nPrinterPageScale"] = 100;

$tdatacat_produccion_temporadas[".nPrinterSplitRecords"] = 40;

$tdatacat_produccion_temporadas[".geocodingEnabled"] = false;





$tdatacat_produccion_temporadas[".isResizeColumns"] = true;





$tdatacat_produccion_temporadas[".pageSize"] = 20;

$tdatacat_produccion_temporadas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_produccion_temporadas[".strOrderBy"] = $tstrOrderBy;

$tdatacat_produccion_temporadas[".orderindexes"] = array();


$tdatacat_produccion_temporadas[".sqlHead"] = "SELECT cat_produccion_temporadas.vigente,  cat_produccion_temporadas.descripcion_temporada,  cat_produccion_temporadas.cat_produccion_temporadas_id,  cat_produccion_temporadas.capturista,  cat_produccion_temporadas.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_produccion_temporadas[".sqlFrom"] = "FROM cat_produccion_temporadas  INNER JOIN cat_usuarios ON cat_produccion_temporadas.capturista = cat_usuarios.usuario";
$tdatacat_produccion_temporadas[".sqlWhereExpr"] = "";
$tdatacat_produccion_temporadas[".sqlTail"] = "";

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
$tdatacat_produccion_temporadas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_produccion_temporadas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_produccion_temporadas[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_produccion_temporadas[".highlightSearchResults"] = true;

$tableKeyscat_produccion_temporadas = array();
$tableKeyscat_produccion_temporadas[] = "cat_produccion_temporadas_id";
$tdatacat_produccion_temporadas[".Keys"] = $tableKeyscat_produccion_temporadas;


$tdatacat_produccion_temporadas[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_produccion_temporadas";
	$fdata["Label"] = GetFieldLabel("cat_produccion_temporadas","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_temporadas.vigente";

	
	
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


	$tdatacat_produccion_temporadas["vigente"] = $fdata;
		$tdatacat_produccion_temporadas[".searchableFields"][] = "vigente";
//	descripcion_temporada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_temporada";
	$fdata["GoodName"] = "descripcion_temporada";
	$fdata["ownerTable"] = "cat_produccion_temporadas";
	$fdata["Label"] = GetFieldLabel("cat_produccion_temporadas","descripcion_temporada");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_temporada";

		$fdata["sourceSingle"] = "descripcion_temporada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_temporadas.descripcion_temporada";

	
	
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


	$tdatacat_produccion_temporadas["descripcion_temporada"] = $fdata;
		$tdatacat_produccion_temporadas[".searchableFields"][] = "descripcion_temporada";
//	cat_produccion_temporadas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_produccion_temporadas_id";
	$fdata["GoodName"] = "cat_produccion_temporadas_id";
	$fdata["ownerTable"] = "cat_produccion_temporadas";
	$fdata["Label"] = GetFieldLabel("cat_produccion_temporadas","cat_produccion_temporadas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_produccion_temporadas_id";

		$fdata["sourceSingle"] = "cat_produccion_temporadas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_temporadas.cat_produccion_temporadas_id";

	
	
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


	$tdatacat_produccion_temporadas["cat_produccion_temporadas_id"] = $fdata;
		$tdatacat_produccion_temporadas[".searchableFields"][] = "cat_produccion_temporadas_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_produccion_temporadas";
	$fdata["Label"] = GetFieldLabel("cat_produccion_temporadas","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_temporadas.capturista";

	
	
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


	$tdatacat_produccion_temporadas["capturista"] = $fdata;
		$tdatacat_produccion_temporadas[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_produccion_temporadas";
	$fdata["Label"] = GetFieldLabel("cat_produccion_temporadas","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_temporadas.time_stamp";

	
	
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


	$tdatacat_produccion_temporadas["time_stamp"] = $fdata;
		$tdatacat_produccion_temporadas[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_produccion_temporadas","cat_usuarios_licencias_id");
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


	$tdatacat_produccion_temporadas["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_produccion_temporadas[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_produccion_temporadas"]=&$tdatacat_produccion_temporadas;
$field_labels["cat_produccion_temporadas"] = &$fieldLabelscat_produccion_temporadas;
$fieldToolTips["cat_produccion_temporadas"] = &$fieldToolTipscat_produccion_temporadas;
$placeHolders["cat_produccion_temporadas"] = &$placeHolderscat_produccion_temporadas;
$page_titles["cat_produccion_temporadas"] = &$pageTitlescat_produccion_temporadas;


changeTextControlsToDate( "cat_produccion_temporadas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_produccion_temporadas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_produccion_temporadas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_produccion_temporadas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_produccion_temporadas.vigente,  cat_produccion_temporadas.descripcion_temporada,  cat_produccion_temporadas.cat_produccion_temporadas_id,  cat_produccion_temporadas.capturista,  cat_produccion_temporadas.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_produccion_temporadas  INNER JOIN cat_usuarios ON cat_produccion_temporadas.capturista = cat_usuarios.usuario";
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
	"m_strTable" => "cat_produccion_temporadas",
	"m_srcTableName" => "cat_produccion_temporadas"
));

$proto6["m_sql"] = "cat_produccion_temporadas.vigente";
$proto6["m_srcTableName"] = "cat_produccion_temporadas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_temporada",
	"m_strTable" => "cat_produccion_temporadas",
	"m_srcTableName" => "cat_produccion_temporadas"
));

$proto8["m_sql"] = "cat_produccion_temporadas.descripcion_temporada";
$proto8["m_srcTableName"] = "cat_produccion_temporadas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_temporadas_id",
	"m_strTable" => "cat_produccion_temporadas",
	"m_srcTableName" => "cat_produccion_temporadas"
));

$proto10["m_sql"] = "cat_produccion_temporadas.cat_produccion_temporadas_id";
$proto10["m_srcTableName"] = "cat_produccion_temporadas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_produccion_temporadas",
	"m_srcTableName" => "cat_produccion_temporadas"
));

$proto12["m_sql"] = "cat_produccion_temporadas.capturista";
$proto12["m_srcTableName"] = "cat_produccion_temporadas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_produccion_temporadas",
	"m_srcTableName" => "cat_produccion_temporadas"
));

$proto14["m_sql"] = "cat_produccion_temporadas.time_stamp";
$proto14["m_srcTableName"] = "cat_produccion_temporadas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_produccion_temporadas"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_produccion_temporadas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_produccion_temporadas";
$proto19["m_srcTableName"] = "cat_produccion_temporadas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "descripcion_temporada";
$proto19["m_columns"][] = "cat_produccion_temporadas_id";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_produccion_temporadas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_produccion_temporadas";
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
$proto23["m_srcTableName"] = "cat_produccion_temporadas";
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
$proto22["m_sql"] = "INNER JOIN cat_usuarios ON cat_produccion_temporadas.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_produccion_temporadas";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_produccion_temporadas.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_produccion_temporadas"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_produccion_temporadas.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_produccion_temporadas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_produccion_temporadas = createSqlQuery_cat_produccion_temporadas();


	
		;

						

$tdatacat_produccion_temporadas[".sqlquery"] = $queryData_cat_produccion_temporadas;



$tdatacat_produccion_temporadas[".hasEvents"] = false;

?>