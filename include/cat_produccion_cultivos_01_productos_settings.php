<?php
$tdatacat_produccion_cultivos_01_productos = array();
$tdatacat_produccion_cultivos_01_productos[".searchableFields"] = array();
$tdatacat_produccion_cultivos_01_productos[".ShortName"] = "cat_produccion_cultivos_01_productos";
$tdatacat_produccion_cultivos_01_productos[".OwnerID"] = "";
$tdatacat_produccion_cultivos_01_productos[".OriginalTable"] = "cat_produccion_cultivos_01_productos";


$tdatacat_produccion_cultivos_01_productos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatacat_produccion_cultivos_01_productos[".originalPagesByType"] = $tdatacat_produccion_cultivos_01_productos[".pagesByType"];
$tdatacat_produccion_cultivos_01_productos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatacat_produccion_cultivos_01_productos[".originalPages"] = $tdatacat_produccion_cultivos_01_productos[".pages"];
$tdatacat_produccion_cultivos_01_productos[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatacat_produccion_cultivos_01_productos[".originalDefaultPages"] = $tdatacat_produccion_cultivos_01_productos[".defaultPages"];

//	field labels
$fieldLabelscat_produccion_cultivos_01_productos = array();
$fieldToolTipscat_produccion_cultivos_01_productos = array();
$pageTitlescat_produccion_cultivos_01_productos = array();
$placeHolderscat_produccion_cultivos_01_productos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_produccion_cultivos_01_productos["Spanish"] = array();
	$fieldToolTipscat_produccion_cultivos_01_productos["Spanish"] = array();
	$placeHolderscat_produccion_cultivos_01_productos["Spanish"] = array();
	$pageTitlescat_produccion_cultivos_01_productos["Spanish"] = array();
	$fieldLabelscat_produccion_cultivos_01_productos["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "Id";
	$fieldToolTipscat_produccion_cultivos_01_productos["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$placeHolderscat_produccion_cultivos_01_productos["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$fieldLabelscat_produccion_cultivos_01_productos["Spanish"]["descripcion_producto"] = "Producto";
	$fieldToolTipscat_produccion_cultivos_01_productos["Spanish"]["descripcion_producto"] = "";
	$placeHolderscat_produccion_cultivos_01_productos["Spanish"]["descripcion_producto"] = "";
	$fieldLabelscat_produccion_cultivos_01_productos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_produccion_cultivos_01_productos["Spanish"]["vigente"] = "";
	$placeHolderscat_produccion_cultivos_01_productos["Spanish"]["vigente"] = "";
	$fieldLabelscat_produccion_cultivos_01_productos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_produccion_cultivos_01_productos["Spanish"]["capturista"] = "";
	$placeHolderscat_produccion_cultivos_01_productos["Spanish"]["capturista"] = "";
	$fieldLabelscat_produccion_cultivos_01_productos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_produccion_cultivos_01_productos["Spanish"]["time_stamp"] = "";
	$placeHolderscat_produccion_cultivos_01_productos["Spanish"]["time_stamp"] = "";
	if (count($fieldToolTipscat_produccion_cultivos_01_productos["Spanish"]))
		$tdatacat_produccion_cultivos_01_productos[".isUseToolTips"] = true;
}





$tdatacat_produccion_cultivos_01_productos[".shortTableName"] = "cat_produccion_cultivos_01_productos";
$tdatacat_produccion_cultivos_01_productos[".nSecOptions"] = 0;

$tdatacat_produccion_cultivos_01_productos[".mainTableOwnerID"] = "";
$tdatacat_produccion_cultivos_01_productos[".entityType"] = 0;
$tdatacat_produccion_cultivos_01_productos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_produccion_cultivos_01_productos[".strOriginalTableName"] = "cat_produccion_cultivos_01_productos";

	



$tdatacat_produccion_cultivos_01_productos[".showAddInPopup"] = false;

$tdatacat_produccion_cultivos_01_productos[".showEditInPopup"] = false;

$tdatacat_produccion_cultivos_01_productos[".showViewInPopup"] = false;

$tdatacat_produccion_cultivos_01_productos[".listAjax"] = false;
//	temporary
//$tdatacat_produccion_cultivos_01_productos[".listAjax"] = false;

	$tdatacat_produccion_cultivos_01_productos[".audit"] = false;

	$tdatacat_produccion_cultivos_01_productos[".locking"] = false;


$pages = $tdatacat_produccion_cultivos_01_productos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_produccion_cultivos_01_productos[".edit"] = true;
	$tdatacat_produccion_cultivos_01_productos[".afterEditAction"] = 1;
	$tdatacat_produccion_cultivos_01_productos[".closePopupAfterEdit"] = 1;
	$tdatacat_produccion_cultivos_01_productos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_produccion_cultivos_01_productos[".add"] = true;
$tdatacat_produccion_cultivos_01_productos[".afterAddAction"] = 1;
$tdatacat_produccion_cultivos_01_productos[".closePopupAfterAdd"] = 1;
$tdatacat_produccion_cultivos_01_productos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_produccion_cultivos_01_productos[".list"] = true;
}



$tdatacat_produccion_cultivos_01_productos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_produccion_cultivos_01_productos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_produccion_cultivos_01_productos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_produccion_cultivos_01_productos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_produccion_cultivos_01_productos[".printFriendly"] = true;
}



$tdatacat_produccion_cultivos_01_productos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_produccion_cultivos_01_productos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_produccion_cultivos_01_productos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_produccion_cultivos_01_productos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_produccion_cultivos_01_productos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_produccion_cultivos_01_productos[".buttonsAdded"] = false;

$tdatacat_produccion_cultivos_01_productos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_produccion_cultivos_01_productos[".isUseTimeForSearch"] = false;


$tdatacat_produccion_cultivos_01_productos[".badgeColor"] = "6493EA";


$tdatacat_produccion_cultivos_01_productos[".allSearchFields"] = array();
$tdatacat_produccion_cultivos_01_productos[".filterFields"] = array();
$tdatacat_produccion_cultivos_01_productos[".requiredSearchFields"] = array();

$tdatacat_produccion_cultivos_01_productos[".googleLikeFields"] = array();
$tdatacat_produccion_cultivos_01_productos[".googleLikeFields"][] = "cat_produccion_cultivos_01_productos_id";
$tdatacat_produccion_cultivos_01_productos[".googleLikeFields"][] = "descripcion_producto";
$tdatacat_produccion_cultivos_01_productos[".googleLikeFields"][] = "vigente";
$tdatacat_produccion_cultivos_01_productos[".googleLikeFields"][] = "capturista";
$tdatacat_produccion_cultivos_01_productos[".googleLikeFields"][] = "time_stamp";



$tdatacat_produccion_cultivos_01_productos[".tableType"] = "list";

$tdatacat_produccion_cultivos_01_productos[".printerPageOrientation"] = 0;
$tdatacat_produccion_cultivos_01_productos[".nPrinterPageScale"] = 100;

$tdatacat_produccion_cultivos_01_productos[".nPrinterSplitRecords"] = 40;

$tdatacat_produccion_cultivos_01_productos[".geocodingEnabled"] = false;





$tdatacat_produccion_cultivos_01_productos[".isResizeColumns"] = true;





$tdatacat_produccion_cultivos_01_productos[".pageSize"] = 20;

$tdatacat_produccion_cultivos_01_productos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_produccion_cultivos_01_productos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_produccion_cultivos_01_productos[".orderindexes"] = array();


$tdatacat_produccion_cultivos_01_productos[".sqlHead"] = "SELECT cat_produccion_cultivos_01_productos_id,  	descripcion_producto,  	vigente,  	capturista,  	time_stamp";
$tdatacat_produccion_cultivos_01_productos[".sqlFrom"] = "FROM cat_produccion_cultivos_01_productos";
$tdatacat_produccion_cultivos_01_productos[".sqlWhereExpr"] = "";
$tdatacat_produccion_cultivos_01_productos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_produccion_cultivos_01_productos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_produccion_cultivos_01_productos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_produccion_cultivos_01_productos[".highlightSearchResults"] = true;

$tableKeyscat_produccion_cultivos_01_productos = array();
$tableKeyscat_produccion_cultivos_01_productos[] = "cat_produccion_cultivos_01_productos_id";
$tdatacat_produccion_cultivos_01_productos[".Keys"] = $tableKeyscat_produccion_cultivos_01_productos;


$tdatacat_produccion_cultivos_01_productos[".hideMobileList"] = array();




//	cat_produccion_cultivos_01_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["GoodName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["ownerTable"] = "cat_produccion_cultivos_01_productos";
	$fdata["Label"] = GetFieldLabel("cat_produccion_cultivos_01_productos","cat_produccion_cultivos_01_productos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_produccion_cultivos_01_productos_id";

		$fdata["sourceSingle"] = "cat_produccion_cultivos_01_productos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_cultivos_01_productos_id";

	
	
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


	$tdatacat_produccion_cultivos_01_productos["cat_produccion_cultivos_01_productos_id"] = $fdata;
		$tdatacat_produccion_cultivos_01_productos[".searchableFields"][] = "cat_produccion_cultivos_01_productos_id";
//	descripcion_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_producto";
	$fdata["GoodName"] = "descripcion_producto";
	$fdata["ownerTable"] = "cat_produccion_cultivos_01_productos";
	$fdata["Label"] = GetFieldLabel("cat_produccion_cultivos_01_productos","descripcion_producto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_producto";

		$fdata["sourceSingle"] = "descripcion_producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_producto";

	
	
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


	$tdatacat_produccion_cultivos_01_productos["descripcion_producto"] = $fdata;
		$tdatacat_produccion_cultivos_01_productos[".searchableFields"][] = "descripcion_producto";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_produccion_cultivos_01_productos";
	$fdata["Label"] = GetFieldLabel("cat_produccion_cultivos_01_productos","vigente");
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


	$tdatacat_produccion_cultivos_01_productos["vigente"] = $fdata;
		$tdatacat_produccion_cultivos_01_productos[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_produccion_cultivos_01_productos";
	$fdata["Label"] = GetFieldLabel("cat_produccion_cultivos_01_productos","capturista");
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


	$tdatacat_produccion_cultivos_01_productos["capturista"] = $fdata;
		$tdatacat_produccion_cultivos_01_productos[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_produccion_cultivos_01_productos";
	$fdata["Label"] = GetFieldLabel("cat_produccion_cultivos_01_productos","time_stamp");
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


	$tdatacat_produccion_cultivos_01_productos["time_stamp"] = $fdata;
		$tdatacat_produccion_cultivos_01_productos[".searchableFields"][] = "time_stamp";


$tables_data["cat_produccion_cultivos_01_productos"]=&$tdatacat_produccion_cultivos_01_productos;
$field_labels["cat_produccion_cultivos_01_productos"] = &$fieldLabelscat_produccion_cultivos_01_productos;
$fieldToolTips["cat_produccion_cultivos_01_productos"] = &$fieldToolTipscat_produccion_cultivos_01_productos;
$placeHolders["cat_produccion_cultivos_01_productos"] = &$placeHolderscat_produccion_cultivos_01_productos;
$page_titles["cat_produccion_cultivos_01_productos"] = &$pageTitlescat_produccion_cultivos_01_productos;


changeTextControlsToDate( "cat_produccion_cultivos_01_productos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_produccion_cultivos_01_productos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_produccion_cultivos_01_productos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_produccion_cultivos_01_productos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_produccion_cultivos_01_productos_id,  	descripcion_producto,  	vigente,  	capturista,  	time_stamp";
$proto0["m_strFrom"] = "FROM cat_produccion_cultivos_01_productos";
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
	"m_strName" => "cat_produccion_cultivos_01_productos_id",
	"m_strTable" => "cat_produccion_cultivos_01_productos",
	"m_srcTableName" => "cat_produccion_cultivos_01_productos"
));

$proto6["m_sql"] = "cat_produccion_cultivos_01_productos_id";
$proto6["m_srcTableName"] = "cat_produccion_cultivos_01_productos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_producto",
	"m_strTable" => "cat_produccion_cultivos_01_productos",
	"m_srcTableName" => "cat_produccion_cultivos_01_productos"
));

$proto8["m_sql"] = "descripcion_producto";
$proto8["m_srcTableName"] = "cat_produccion_cultivos_01_productos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_produccion_cultivos_01_productos",
	"m_srcTableName" => "cat_produccion_cultivos_01_productos"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_produccion_cultivos_01_productos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_produccion_cultivos_01_productos",
	"m_srcTableName" => "cat_produccion_cultivos_01_productos"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_produccion_cultivos_01_productos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_produccion_cultivos_01_productos",
	"m_srcTableName" => "cat_produccion_cultivos_01_productos"
));

$proto14["m_sql"] = "time_stamp";
$proto14["m_srcTableName"] = "cat_produccion_cultivos_01_productos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_produccion_cultivos_01_productos";
$proto17["m_srcTableName"] = "cat_produccion_cultivos_01_productos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto17["m_columns"][] = "descripcion_producto";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_produccion_cultivos_01_productos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_produccion_cultivos_01_productos";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_produccion_cultivos_01_productos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_produccion_cultivos_01_productos = createSqlQuery_cat_produccion_cultivos_01_productos();


	
		;

					

$tdatacat_produccion_cultivos_01_productos[".sqlquery"] = $queryData_cat_produccion_cultivos_01_productos;



$tdatacat_produccion_cultivos_01_productos[".hasEvents"] = false;

?>