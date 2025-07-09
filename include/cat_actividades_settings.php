<?php
$tdatacat_actividades = array();
$tdatacat_actividades[".searchableFields"] = array();
$tdatacat_actividades[".ShortName"] = "cat_actividades";
$tdatacat_actividades[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_actividades[".OriginalTable"] = "cat_actividades";


$tdatacat_actividades[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_actividades[".originalPagesByType"] = $tdatacat_actividades[".pagesByType"];
$tdatacat_actividades[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_actividades[".originalPages"] = $tdatacat_actividades[".pages"];
$tdatacat_actividades[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_actividades[".originalDefaultPages"] = $tdatacat_actividades[".defaultPages"];

//	field labels
$fieldLabelscat_actividades = array();
$fieldToolTipscat_actividades = array();
$pageTitlescat_actividades = array();
$placeHolderscat_actividades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_actividades["Spanish"] = array();
	$fieldToolTipscat_actividades["Spanish"] = array();
	$placeHolderscat_actividades["Spanish"] = array();
	$pageTitlescat_actividades["Spanish"] = array();
	$fieldLabelscat_actividades["Spanish"]["cat_actividades_id"] = "Id";
	$fieldToolTipscat_actividades["Spanish"]["cat_actividades_id"] = "";
	$placeHolderscat_actividades["Spanish"]["cat_actividades_id"] = "";
	$fieldLabelscat_actividades["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_actividades["Spanish"]["time_stamp"] = "";
	$placeHolderscat_actividades["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_actividades["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_actividades["Spanish"]["vigente"] = "";
	$placeHolderscat_actividades["Spanish"]["vigente"] = "";
	$fieldLabelscat_actividades["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_actividades["Spanish"]["capturista"] = "";
	$placeHolderscat_actividades["Spanish"]["capturista"] = "";
	$fieldLabelscat_actividades["Spanish"]["descripcion_actividad"] = "Actividad";
	$fieldToolTipscat_actividades["Spanish"]["descripcion_actividad"] = "";
	$placeHolderscat_actividades["Spanish"]["descripcion_actividad"] = "";
	$fieldLabelscat_actividades["Spanish"]["cat_actividades_categorias_id"] = "Categoria";
	$fieldToolTipscat_actividades["Spanish"]["cat_actividades_categorias_id"] = "";
	$placeHolderscat_actividades["Spanish"]["cat_actividades_categorias_id"] = "";
	$fieldLabelscat_actividades["Spanish"]["cat_actividades_categorias_mu_id"] = "Categoria MU";
	$fieldToolTipscat_actividades["Spanish"]["cat_actividades_categorias_mu_id"] = "";
	$placeHolderscat_actividades["Spanish"]["cat_actividades_categorias_mu_id"] = "";
	if (count($fieldToolTipscat_actividades["Spanish"]))
		$tdatacat_actividades[".isUseToolTips"] = true;
}





$tdatacat_actividades[".shortTableName"] = "cat_actividades";
$tdatacat_actividades[".nSecOptions"] = 0;

$tdatacat_actividades[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_actividades[".entityType"] = 0;
$tdatacat_actividades[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_actividades[".strOriginalTableName"] = "cat_actividades";

	



$tdatacat_actividades[".showAddInPopup"] = false;

$tdatacat_actividades[".showEditInPopup"] = false;

$tdatacat_actividades[".showViewInPopup"] = false;

$tdatacat_actividades[".listAjax"] = false;
//	temporary
//$tdatacat_actividades[".listAjax"] = false;

	$tdatacat_actividades[".audit"] = true;

	$tdatacat_actividades[".locking"] = true;


$pages = $tdatacat_actividades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_actividades[".edit"] = true;
	$tdatacat_actividades[".afterEditAction"] = 1;
	$tdatacat_actividades[".closePopupAfterEdit"] = 1;
	$tdatacat_actividades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_actividades[".add"] = true;
$tdatacat_actividades[".afterAddAction"] = 1;
$tdatacat_actividades[".closePopupAfterAdd"] = 1;
$tdatacat_actividades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_actividades[".list"] = true;
}



$tdatacat_actividades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_actividades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_actividades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_actividades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_actividades[".printFriendly"] = true;
}



$tdatacat_actividades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_actividades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_actividades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_actividades[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_actividades[".ajaxCodeSnippetAdded"] = false;

$tdatacat_actividades[".buttonsAdded"] = false;

$tdatacat_actividades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_actividades[".isUseTimeForSearch"] = false;


$tdatacat_actividades[".badgeColor"] = "6493EA";


$tdatacat_actividades[".allSearchFields"] = array();
$tdatacat_actividades[".filterFields"] = array();
$tdatacat_actividades[".requiredSearchFields"] = array();

$tdatacat_actividades[".googleLikeFields"] = array();
$tdatacat_actividades[".googleLikeFields"][] = "cat_actividades_id";
$tdatacat_actividades[".googleLikeFields"][] = "time_stamp";
$tdatacat_actividades[".googleLikeFields"][] = "vigente";
$tdatacat_actividades[".googleLikeFields"][] = "capturista";
$tdatacat_actividades[".googleLikeFields"][] = "descripcion_actividad";
$tdatacat_actividades[".googleLikeFields"][] = "cat_actividades_categorias_id";
$tdatacat_actividades[".googleLikeFields"][] = "cat_actividades_categorias_mu_id";



$tdatacat_actividades[".tableType"] = "list";

$tdatacat_actividades[".printerPageOrientation"] = 0;
$tdatacat_actividades[".nPrinterPageScale"] = 100;

$tdatacat_actividades[".nPrinterSplitRecords"] = 40;

$tdatacat_actividades[".geocodingEnabled"] = false;




$tdatacat_actividades[".isDisplayLoading"] = true;

$tdatacat_actividades[".isResizeColumns"] = true;





$tdatacat_actividades[".pageSize"] = 20;

$tdatacat_actividades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_actividades[".strOrderBy"] = $tstrOrderBy;

$tdatacat_actividades[".orderindexes"] = array();


$tdatacat_actividades[".sqlHead"] = "SELECT cat_actividades_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_actividad,  	cat_actividades_categorias_id,  	cat_actividades_categorias_mu_id";
$tdatacat_actividades[".sqlFrom"] = "FROM cat_actividades";
$tdatacat_actividades[".sqlWhereExpr"] = "";
$tdatacat_actividades[".sqlTail"] = "";

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
$tdatacat_actividades[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_actividades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_actividades[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_actividades[".highlightSearchResults"] = true;

$tableKeyscat_actividades = array();
$tableKeyscat_actividades[] = "cat_actividades_id";
$tdatacat_actividades[".Keys"] = $tableKeyscat_actividades;


$tdatacat_actividades[".hideMobileList"] = array();




//	cat_actividades_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_actividades_id";
	$fdata["GoodName"] = "cat_actividades_id";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("cat_actividades","cat_actividades_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_actividades_id";

		$fdata["sourceSingle"] = "cat_actividades_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_id";

	
	
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


	$tdatacat_actividades["cat_actividades_id"] = $fdata;
		$tdatacat_actividades[".searchableFields"][] = "cat_actividades_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("cat_actividades","time_stamp");
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


	$tdatacat_actividades["time_stamp"] = $fdata;
		$tdatacat_actividades[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("cat_actividades","vigente");
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


	$tdatacat_actividades["vigente"] = $fdata;
		$tdatacat_actividades[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("cat_actividades","capturista");
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


	$tdatacat_actividades["capturista"] = $fdata;
		$tdatacat_actividades[".searchableFields"][] = "capturista";
//	descripcion_actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_actividad";
	$fdata["GoodName"] = "descripcion_actividad";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("cat_actividades","descripcion_actividad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_actividad";

		$fdata["sourceSingle"] = "descripcion_actividad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_actividad";

	
	
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


	$tdatacat_actividades["descripcion_actividad"] = $fdata;
		$tdatacat_actividades[".searchableFields"][] = "descripcion_actividad";
//	cat_actividades_categorias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_actividades_categorias_id";
	$fdata["GoodName"] = "cat_actividades_categorias_id";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("cat_actividades","cat_actividades_categorias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_categorias_id";

		$fdata["sourceSingle"] = "cat_actividades_categorias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_categorias_id";

	
	
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
	$edata["LookupTable"] = "cat_actividades_categorias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_actividades_categorias_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_actividades_categorias";

	

	
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


	$tdatacat_actividades["cat_actividades_categorias_id"] = $fdata;
		$tdatacat_actividades[".searchableFields"][] = "cat_actividades_categorias_id";
//	cat_actividades_categorias_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_actividades_categorias_mu_id";
	$fdata["GoodName"] = "cat_actividades_categorias_mu_id";
	$fdata["ownerTable"] = "cat_actividades";
	$fdata["Label"] = GetFieldLabel("cat_actividades","cat_actividades_categorias_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_categorias_mu_id";

		$fdata["sourceSingle"] = "cat_actividades_categorias_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_categorias_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_actividades_categorias_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_actividades_categorias_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_categorias_mu";

	

	
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


	$tdatacat_actividades["cat_actividades_categorias_mu_id"] = $fdata;
		$tdatacat_actividades[".searchableFields"][] = "cat_actividades_categorias_mu_id";


$tables_data["cat_actividades"]=&$tdatacat_actividades;
$field_labels["cat_actividades"] = &$fieldLabelscat_actividades;
$fieldToolTips["cat_actividades"] = &$fieldToolTipscat_actividades;
$placeHolders["cat_actividades"] = &$placeHolderscat_actividades;
$page_titles["cat_actividades"] = &$pageTitlescat_actividades;


changeTextControlsToDate( "cat_actividades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_actividades"] = array();
//	cat_actividades_especificas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cat_actividades_especificas";
		$detailsParam["dOriginalTable"] = "cat_actividades_especificas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cat_actividades_especificas1";
	$detailsParam["dCaptionTable"] = GetTableCaption("cat_actividades_especificas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cat_actividades"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cat_actividades"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cat_actividades"][$dIndex]["masterKeys"][]="cat_actividades_id";

				$detailsTablesData["cat_actividades"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cat_actividades"][$dIndex]["detailKeys"][]="cat_actividades_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_actividades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_actividades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_actividades_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_actividad,  	cat_actividades_categorias_id,  	cat_actividades_categorias_mu_id";
$proto0["m_strFrom"] = "FROM cat_actividades";
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
	"m_strName" => "cat_actividades_id",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "cat_actividades"
));

$proto6["m_sql"] = "cat_actividades_id";
$proto6["m_srcTableName"] = "cat_actividades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "cat_actividades"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_actividades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "cat_actividades"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_actividades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "cat_actividades"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_actividades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_actividad",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "cat_actividades"
));

$proto14["m_sql"] = "descripcion_actividad";
$proto14["m_srcTableName"] = "cat_actividades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_categorias_id",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "cat_actividades"
));

$proto16["m_sql"] = "cat_actividades_categorias_id";
$proto16["m_srcTableName"] = "cat_actividades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_categorias_mu_id",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "cat_actividades"
));

$proto18["m_sql"] = "cat_actividades_categorias_mu_id";
$proto18["m_srcTableName"] = "cat_actividades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "cat_actividades";
$proto21["m_srcTableName"] = "cat_actividades";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_actividades_id";
$proto21["m_columns"][] = "time_stamp";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "descripcion_actividad";
$proto21["m_columns"][] = "cat_actividades_categorias_id";
$proto21["m_columns"][] = "cat_actividades_categorias_mu_id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "cat_actividades";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "cat_actividades";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_actividades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_actividades = createSqlQuery_cat_actividades();


	
		;

							

$tdatacat_actividades[".sqlquery"] = $queryData_cat_actividades;



$tdatacat_actividades[".hasEvents"] = false;

?>