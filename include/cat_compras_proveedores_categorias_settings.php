<?php
$tdatacat_compras_proveedores_categorias = array();
$tdatacat_compras_proveedores_categorias[".searchableFields"] = array();
$tdatacat_compras_proveedores_categorias[".ShortName"] = "cat_compras_proveedores_categorias";
$tdatacat_compras_proveedores_categorias[".OwnerID"] = "";
$tdatacat_compras_proveedores_categorias[".OriginalTable"] = "cat_compras_proveedores_categorias";


$tdatacat_compras_proveedores_categorias[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_compras_proveedores_categorias[".originalPagesByType"] = $tdatacat_compras_proveedores_categorias[".pagesByType"];
$tdatacat_compras_proveedores_categorias[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_compras_proveedores_categorias[".originalPages"] = $tdatacat_compras_proveedores_categorias[".pages"];
$tdatacat_compras_proveedores_categorias[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_compras_proveedores_categorias[".originalDefaultPages"] = $tdatacat_compras_proveedores_categorias[".defaultPages"];

//	field labels
$fieldLabelscat_compras_proveedores_categorias = array();
$fieldToolTipscat_compras_proveedores_categorias = array();
$pageTitlescat_compras_proveedores_categorias = array();
$placeHolderscat_compras_proveedores_categorias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_compras_proveedores_categorias["Spanish"] = array();
	$fieldToolTipscat_compras_proveedores_categorias["Spanish"] = array();
	$placeHolderscat_compras_proveedores_categorias["Spanish"] = array();
	$pageTitlescat_compras_proveedores_categorias["Spanish"] = array();
	$fieldLabelscat_compras_proveedores_categorias["Spanish"]["cat_compras_proveedores_categorias_id"] = "id";
	$fieldToolTipscat_compras_proveedores_categorias["Spanish"]["cat_compras_proveedores_categorias_id"] = "";
	$placeHolderscat_compras_proveedores_categorias["Spanish"]["cat_compras_proveedores_categorias_id"] = "";
	$fieldLabelscat_compras_proveedores_categorias["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_compras_proveedores_categorias["Spanish"]["time_stamp"] = "";
	$placeHolderscat_compras_proveedores_categorias["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_compras_proveedores_categorias["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_compras_proveedores_categorias["Spanish"]["vigente"] = "";
	$placeHolderscat_compras_proveedores_categorias["Spanish"]["vigente"] = "";
	$fieldLabelscat_compras_proveedores_categorias["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_compras_proveedores_categorias["Spanish"]["capturista"] = "";
	$placeHolderscat_compras_proveedores_categorias["Spanish"]["capturista"] = "";
	$fieldLabelscat_compras_proveedores_categorias["Spanish"]["descripcion_proveedores_categorias"] = "Proveedores Categorias";
	$fieldToolTipscat_compras_proveedores_categorias["Spanish"]["descripcion_proveedores_categorias"] = "";
	$placeHolderscat_compras_proveedores_categorias["Spanish"]["descripcion_proveedores_categorias"] = "";
	$fieldLabelscat_compras_proveedores_categorias["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_compras_proveedores_categorias["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_compras_proveedores_categorias["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_compras_proveedores_categorias["Spanish"]))
		$tdatacat_compras_proveedores_categorias[".isUseToolTips"] = true;
}





$tdatacat_compras_proveedores_categorias[".shortTableName"] = "cat_compras_proveedores_categorias";
$tdatacat_compras_proveedores_categorias[".nSecOptions"] = 0;

$tdatacat_compras_proveedores_categorias[".mainTableOwnerID"] = "";
$tdatacat_compras_proveedores_categorias[".entityType"] = 0;
$tdatacat_compras_proveedores_categorias[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_compras_proveedores_categorias[".strOriginalTableName"] = "cat_compras_proveedores_categorias";

	



$tdatacat_compras_proveedores_categorias[".showAddInPopup"] = false;

$tdatacat_compras_proveedores_categorias[".showEditInPopup"] = false;

$tdatacat_compras_proveedores_categorias[".showViewInPopup"] = false;

$tdatacat_compras_proveedores_categorias[".listAjax"] = false;
//	temporary
//$tdatacat_compras_proveedores_categorias[".listAjax"] = false;

	$tdatacat_compras_proveedores_categorias[".audit"] = true;

	$tdatacat_compras_proveedores_categorias[".locking"] = true;


$pages = $tdatacat_compras_proveedores_categorias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_compras_proveedores_categorias[".edit"] = true;
	$tdatacat_compras_proveedores_categorias[".afterEditAction"] = 1;
	$tdatacat_compras_proveedores_categorias[".closePopupAfterEdit"] = 1;
	$tdatacat_compras_proveedores_categorias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_compras_proveedores_categorias[".add"] = true;
$tdatacat_compras_proveedores_categorias[".afterAddAction"] = 1;
$tdatacat_compras_proveedores_categorias[".closePopupAfterAdd"] = 1;
$tdatacat_compras_proveedores_categorias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_compras_proveedores_categorias[".list"] = true;
}



$tdatacat_compras_proveedores_categorias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_compras_proveedores_categorias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_compras_proveedores_categorias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_compras_proveedores_categorias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_compras_proveedores_categorias[".printFriendly"] = true;
}



$tdatacat_compras_proveedores_categorias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_compras_proveedores_categorias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_compras_proveedores_categorias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_compras_proveedores_categorias[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_compras_proveedores_categorias[".ajaxCodeSnippetAdded"] = false;

$tdatacat_compras_proveedores_categorias[".buttonsAdded"] = false;

$tdatacat_compras_proveedores_categorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_compras_proveedores_categorias[".isUseTimeForSearch"] = false;


$tdatacat_compras_proveedores_categorias[".badgeColor"] = "6DA5C8";


$tdatacat_compras_proveedores_categorias[".allSearchFields"] = array();
$tdatacat_compras_proveedores_categorias[".filterFields"] = array();
$tdatacat_compras_proveedores_categorias[".requiredSearchFields"] = array();

$tdatacat_compras_proveedores_categorias[".googleLikeFields"] = array();
$tdatacat_compras_proveedores_categorias[".googleLikeFields"][] = "cat_compras_proveedores_categorias_id";
$tdatacat_compras_proveedores_categorias[".googleLikeFields"][] = "time_stamp";
$tdatacat_compras_proveedores_categorias[".googleLikeFields"][] = "vigente";
$tdatacat_compras_proveedores_categorias[".googleLikeFields"][] = "capturista";
$tdatacat_compras_proveedores_categorias[".googleLikeFields"][] = "descripcion_proveedores_categorias";
$tdatacat_compras_proveedores_categorias[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_compras_proveedores_categorias[".tableType"] = "list";

$tdatacat_compras_proveedores_categorias[".printerPageOrientation"] = 0;
$tdatacat_compras_proveedores_categorias[".nPrinterPageScale"] = 100;

$tdatacat_compras_proveedores_categorias[".nPrinterSplitRecords"] = 40;

$tdatacat_compras_proveedores_categorias[".geocodingEnabled"] = false;





$tdatacat_compras_proveedores_categorias[".isResizeColumns"] = true;





$tdatacat_compras_proveedores_categorias[".pageSize"] = 20;

$tdatacat_compras_proveedores_categorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_compras_proveedores_categorias[".strOrderBy"] = $tstrOrderBy;

$tdatacat_compras_proveedores_categorias[".orderindexes"] = array();


$tdatacat_compras_proveedores_categorias[".sqlHead"] = "SELECT cat_compras_proveedores_categorias.cat_compras_proveedores_categorias_id,  cat_compras_proveedores_categorias.time_stamp,  cat_compras_proveedores_categorias.vigente,  cat_compras_proveedores_categorias.capturista,  cat_compras_proveedores_categorias.descripcion_proveedores_categorias,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_compras_proveedores_categorias[".sqlFrom"] = "FROM cat_compras_proveedores_categorias  LEFT OUTER JOIN cat_usuarios ON cat_compras_proveedores_categorias.capturista = cat_usuarios.usuario";
$tdatacat_compras_proveedores_categorias[".sqlWhereExpr"] = "";
$tdatacat_compras_proveedores_categorias[".sqlTail"] = "";

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
$tdatacat_compras_proveedores_categorias[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_compras_proveedores_categorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_compras_proveedores_categorias[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_compras_proveedores_categorias[".highlightSearchResults"] = true;

$tableKeyscat_compras_proveedores_categorias = array();
$tableKeyscat_compras_proveedores_categorias[] = "cat_compras_proveedores_categorias_id";
$tdatacat_compras_proveedores_categorias[".Keys"] = $tableKeyscat_compras_proveedores_categorias;


$tdatacat_compras_proveedores_categorias[".hideMobileList"] = array();




//	cat_compras_proveedores_categorias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_proveedores_categorias_id";
	$fdata["GoodName"] = "cat_compras_proveedores_categorias_id";
	$fdata["ownerTable"] = "cat_compras_proveedores_categorias";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores_categorias","cat_compras_proveedores_categorias_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_proveedores_categorias_id";

		$fdata["sourceSingle"] = "cat_compras_proveedores_categorias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores_categorias.cat_compras_proveedores_categorias_id";

	
	
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


	$tdatacat_compras_proveedores_categorias["cat_compras_proveedores_categorias_id"] = $fdata;
		$tdatacat_compras_proveedores_categorias[".searchableFields"][] = "cat_compras_proveedores_categorias_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_compras_proveedores_categorias";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores_categorias","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores_categorias.time_stamp";

	
	
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


	$tdatacat_compras_proveedores_categorias["time_stamp"] = $fdata;
		$tdatacat_compras_proveedores_categorias[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_proveedores_categorias";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores_categorias","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores_categorias.vigente";

	
	
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


	$tdatacat_compras_proveedores_categorias["vigente"] = $fdata;
		$tdatacat_compras_proveedores_categorias[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_proveedores_categorias";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores_categorias","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores_categorias.capturista";

	
	
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


	$tdatacat_compras_proveedores_categorias["capturista"] = $fdata;
		$tdatacat_compras_proveedores_categorias[".searchableFields"][] = "capturista";
//	descripcion_proveedores_categorias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_proveedores_categorias";
	$fdata["GoodName"] = "descripcion_proveedores_categorias";
	$fdata["ownerTable"] = "cat_compras_proveedores_categorias";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores_categorias","descripcion_proveedores_categorias");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_proveedores_categorias";

		$fdata["sourceSingle"] = "descripcion_proveedores_categorias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores_categorias.descripcion_proveedores_categorias";

	
	
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


	$tdatacat_compras_proveedores_categorias["descripcion_proveedores_categorias"] = $fdata;
		$tdatacat_compras_proveedores_categorias[".searchableFields"][] = "descripcion_proveedores_categorias";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_compras_proveedores_categorias","cat_usuarios_licencias_id");
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


	$tdatacat_compras_proveedores_categorias["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_compras_proveedores_categorias[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_compras_proveedores_categorias"]=&$tdatacat_compras_proveedores_categorias;
$field_labels["cat_compras_proveedores_categorias"] = &$fieldLabelscat_compras_proveedores_categorias;
$fieldToolTips["cat_compras_proveedores_categorias"] = &$fieldToolTipscat_compras_proveedores_categorias;
$placeHolders["cat_compras_proveedores_categorias"] = &$placeHolderscat_compras_proveedores_categorias;
$page_titles["cat_compras_proveedores_categorias"] = &$pageTitlescat_compras_proveedores_categorias;


changeTextControlsToDate( "cat_compras_proveedores_categorias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_compras_proveedores_categorias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_compras_proveedores_categorias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_compras_proveedores_categorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_proveedores_categorias.cat_compras_proveedores_categorias_id,  cat_compras_proveedores_categorias.time_stamp,  cat_compras_proveedores_categorias.vigente,  cat_compras_proveedores_categorias.capturista,  cat_compras_proveedores_categorias.descripcion_proveedores_categorias,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_compras_proveedores_categorias  LEFT OUTER JOIN cat_usuarios ON cat_compras_proveedores_categorias.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_compras_proveedores_categorias_id",
	"m_strTable" => "cat_compras_proveedores_categorias",
	"m_srcTableName" => "cat_compras_proveedores_categorias"
));

$proto6["m_sql"] = "cat_compras_proveedores_categorias.cat_compras_proveedores_categorias_id";
$proto6["m_srcTableName"] = "cat_compras_proveedores_categorias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_compras_proveedores_categorias",
	"m_srcTableName" => "cat_compras_proveedores_categorias"
));

$proto8["m_sql"] = "cat_compras_proveedores_categorias.time_stamp";
$proto8["m_srcTableName"] = "cat_compras_proveedores_categorias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_proveedores_categorias",
	"m_srcTableName" => "cat_compras_proveedores_categorias"
));

$proto10["m_sql"] = "cat_compras_proveedores_categorias.vigente";
$proto10["m_srcTableName"] = "cat_compras_proveedores_categorias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_proveedores_categorias",
	"m_srcTableName" => "cat_compras_proveedores_categorias"
));

$proto12["m_sql"] = "cat_compras_proveedores_categorias.capturista";
$proto12["m_srcTableName"] = "cat_compras_proveedores_categorias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_proveedores_categorias",
	"m_strTable" => "cat_compras_proveedores_categorias",
	"m_srcTableName" => "cat_compras_proveedores_categorias"
));

$proto14["m_sql"] = "cat_compras_proveedores_categorias.descripcion_proveedores_categorias";
$proto14["m_srcTableName"] = "cat_compras_proveedores_categorias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_compras_proveedores_categorias"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_compras_proveedores_categorias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_compras_proveedores_categorias";
$proto19["m_srcTableName"] = "cat_compras_proveedores_categorias";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_compras_proveedores_categorias_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_proveedores_categorias";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_compras_proveedores_categorias";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_compras_proveedores_categorias";
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
$proto23["m_srcTableName"] = "cat_compras_proveedores_categorias";
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
$proto22["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_compras_proveedores_categorias.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_compras_proveedores_categorias";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_compras_proveedores_categorias.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_compras_proveedores_categorias"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_compras_proveedores_categorias.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_compras_proveedores_categorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_compras_proveedores_categorias = createSqlQuery_cat_compras_proveedores_categorias();


	
		;

						

$tdatacat_compras_proveedores_categorias[".sqlquery"] = $queryData_cat_compras_proveedores_categorias;



$tdatacat_compras_proveedores_categorias[".hasEvents"] = false;

?>