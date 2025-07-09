<?php
$tdatacat_ventas_productos_lotes = array();
$tdatacat_ventas_productos_lotes[".searchableFields"] = array();
$tdatacat_ventas_productos_lotes[".ShortName"] = "cat_ventas_productos_lotes";
$tdatacat_ventas_productos_lotes[".OwnerID"] = "";
$tdatacat_ventas_productos_lotes[".OriginalTable"] = "cat_ventas_productos_lotes";


$tdatacat_ventas_productos_lotes[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatacat_ventas_productos_lotes[".originalPagesByType"] = $tdatacat_ventas_productos_lotes[".pagesByType"];
$tdatacat_ventas_productos_lotes[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatacat_ventas_productos_lotes[".originalPages"] = $tdatacat_ventas_productos_lotes[".pages"];
$tdatacat_ventas_productos_lotes[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatacat_ventas_productos_lotes[".originalDefaultPages"] = $tdatacat_ventas_productos_lotes[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_lotes = array();
$fieldToolTipscat_ventas_productos_lotes = array();
$pageTitlescat_ventas_productos_lotes = array();
$placeHolderscat_ventas_productos_lotes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_lotes["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_lotes["Spanish"] = array();
	$placeHolderscat_ventas_productos_lotes["Spanish"] = array();
	$pageTitlescat_ventas_productos_lotes["Spanish"] = array();
	$fieldLabelscat_ventas_productos_lotes["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_lotes["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_lotes["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_productos_lotes["Spanish"]["cat_ventas_productos_sku_id"] = "Cat Ventas Productos Sku Id";
	$fieldToolTipscat_ventas_productos_lotes["Spanish"]["cat_ventas_productos_sku_id"] = "";
	$placeHolderscat_ventas_productos_lotes["Spanish"]["cat_ventas_productos_sku_id"] = "";
	$fieldLabelscat_ventas_productos_lotes["Spanish"]["descripcion_ventas_lotes"] = "Descripcion Ventas Lotes";
	$fieldToolTipscat_ventas_productos_lotes["Spanish"]["descripcion_ventas_lotes"] = "";
	$placeHolderscat_ventas_productos_lotes["Spanish"]["descripcion_ventas_lotes"] = "";
	$fieldLabelscat_ventas_productos_lotes["Spanish"]["fecha_de_inicio"] = "Fecha De Inicio";
	$fieldToolTipscat_ventas_productos_lotes["Spanish"]["fecha_de_inicio"] = "";
	$placeHolderscat_ventas_productos_lotes["Spanish"]["fecha_de_inicio"] = "";
	$fieldLabelscat_ventas_productos_lotes["Spanish"]["fecha_de_termino"] = "Fecha De Termino";
	$fieldToolTipscat_ventas_productos_lotes["Spanish"]["fecha_de_termino"] = "";
	$placeHolderscat_ventas_productos_lotes["Spanish"]["fecha_de_termino"] = "";
	$fieldLabelscat_ventas_productos_lotes["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_lotes["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_lotes["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_productos_lotes["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_lotes["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_lotes["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_lotes["Spanish"]["cat_ventas_productos_lotes_id"] = "Cat Ventas Productos Lotes Id";
	$fieldToolTipscat_ventas_productos_lotes["Spanish"]["cat_ventas_productos_lotes_id"] = "";
	$placeHolderscat_ventas_productos_lotes["Spanish"]["cat_ventas_productos_lotes_id"] = "";
	if (count($fieldToolTipscat_ventas_productos_lotes["Spanish"]))
		$tdatacat_ventas_productos_lotes[".isUseToolTips"] = true;
}





$tdatacat_ventas_productos_lotes[".shortTableName"] = "cat_ventas_productos_lotes";
$tdatacat_ventas_productos_lotes[".nSecOptions"] = 0;

$tdatacat_ventas_productos_lotes[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_lotes[".entityType"] = 0;
$tdatacat_ventas_productos_lotes[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_lotes[".strOriginalTableName"] = "cat_ventas_productos_lotes";

	



$tdatacat_ventas_productos_lotes[".showAddInPopup"] = false;

$tdatacat_ventas_productos_lotes[".showEditInPopup"] = false;

$tdatacat_ventas_productos_lotes[".showViewInPopup"] = false;

$tdatacat_ventas_productos_lotes[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_lotes[".listAjax"] = false;

	$tdatacat_ventas_productos_lotes[".audit"] = true;

	$tdatacat_ventas_productos_lotes[".locking"] = true;


$pages = $tdatacat_ventas_productos_lotes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_lotes[".edit"] = true;
	$tdatacat_ventas_productos_lotes[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_lotes[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_lotes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_lotes[".add"] = true;
$tdatacat_ventas_productos_lotes[".afterAddAction"] = 1;
$tdatacat_ventas_productos_lotes[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_lotes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_lotes[".list"] = true;
}



$tdatacat_ventas_productos_lotes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_lotes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_lotes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_lotes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_lotes[".printFriendly"] = true;
}



$tdatacat_ventas_productos_lotes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_lotes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_lotes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_lotes[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_lotes[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_lotes[".buttonsAdded"] = false;

$tdatacat_ventas_productos_lotes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_lotes[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_lotes[".badgeColor"] = "6B8E23";


$tdatacat_ventas_productos_lotes[".allSearchFields"] = array();
$tdatacat_ventas_productos_lotes[".filterFields"] = array();
$tdatacat_ventas_productos_lotes[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_lotes[".googleLikeFields"] = array();
$tdatacat_ventas_productos_lotes[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_lotes[".googleLikeFields"][] = "cat_ventas_productos_sku_id";
$tdatacat_ventas_productos_lotes[".googleLikeFields"][] = "descripcion_ventas_lotes";
$tdatacat_ventas_productos_lotes[".googleLikeFields"][] = "fecha_de_inicio";
$tdatacat_ventas_productos_lotes[".googleLikeFields"][] = "fecha_de_termino";
$tdatacat_ventas_productos_lotes[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_productos_lotes[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_lotes[".googleLikeFields"][] = "cat_ventas_productos_lotes_id";



$tdatacat_ventas_productos_lotes[".tableType"] = "list";

$tdatacat_ventas_productos_lotes[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_lotes[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_lotes[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_lotes[".geocodingEnabled"] = false;





$tdatacat_ventas_productos_lotes[".isResizeColumns"] = true;





$tdatacat_ventas_productos_lotes[".pageSize"] = 20;

$tdatacat_ventas_productos_lotes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_lotes[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_lotes[".orderindexes"] = array();


$tdatacat_ventas_productos_lotes[".sqlHead"] = "SELECT vigente,  	cat_ventas_productos_sku_id,  	descripcion_ventas_lotes,  	fecha_de_inicio,  	fecha_de_termino,  	time_stamp,  	capturista,  	cat_ventas_productos_lotes_id";
$tdatacat_ventas_productos_lotes[".sqlFrom"] = "FROM cat_ventas_productos_lotes";
$tdatacat_ventas_productos_lotes[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_lotes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_lotes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_lotes[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_lotes[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_lotes = array();
$tableKeyscat_ventas_productos_lotes[] = "cat_ventas_productos_lotes_id";
$tdatacat_ventas_productos_lotes[".Keys"] = $tableKeyscat_ventas_productos_lotes;


$tdatacat_ventas_productos_lotes[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_lotes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_lotes","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigente";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacat_ventas_productos_lotes["vigente"] = $fdata;
		$tdatacat_ventas_productos_lotes[".searchableFields"][] = "vigente";
//	cat_ventas_productos_sku_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_ventas_productos_sku_id";
	$fdata["GoodName"] = "cat_ventas_productos_sku_id";
	$fdata["ownerTable"] = "cat_ventas_productos_lotes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_lotes","cat_ventas_productos_sku_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_productos_sku_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_sku_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_sku_id";

	
	
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


	$tdatacat_ventas_productos_lotes["cat_ventas_productos_sku_id"] = $fdata;
		$tdatacat_ventas_productos_lotes[".searchableFields"][] = "cat_ventas_productos_sku_id";
//	descripcion_ventas_lotes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion_ventas_lotes";
	$fdata["GoodName"] = "descripcion_ventas_lotes";
	$fdata["ownerTable"] = "cat_ventas_productos_lotes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_lotes","descripcion_ventas_lotes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_lotes";

		$fdata["sourceSingle"] = "descripcion_ventas_lotes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_ventas_lotes";

	
	
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


	$tdatacat_ventas_productos_lotes["descripcion_ventas_lotes"] = $fdata;
		$tdatacat_ventas_productos_lotes[".searchableFields"][] = "descripcion_ventas_lotes";
//	fecha_de_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_de_inicio";
	$fdata["GoodName"] = "fecha_de_inicio";
	$fdata["ownerTable"] = "cat_ventas_productos_lotes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_lotes","fecha_de_inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_inicio";

		$fdata["sourceSingle"] = "fecha_de_inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_inicio";

	
	
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


	$tdatacat_ventas_productos_lotes["fecha_de_inicio"] = $fdata;
		$tdatacat_ventas_productos_lotes[".searchableFields"][] = "fecha_de_inicio";
//	fecha_de_termino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_de_termino";
	$fdata["GoodName"] = "fecha_de_termino";
	$fdata["ownerTable"] = "cat_ventas_productos_lotes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_lotes","fecha_de_termino");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_termino";

		$fdata["sourceSingle"] = "fecha_de_termino";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_termino";

	
	
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


	$tdatacat_ventas_productos_lotes["fecha_de_termino"] = $fdata;
		$tdatacat_ventas_productos_lotes[".searchableFields"][] = "fecha_de_termino";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_lotes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_lotes","time_stamp");
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


	$tdatacat_ventas_productos_lotes["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_lotes[".searchableFields"][] = "time_stamp";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_lotes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_lotes","capturista");
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


	$tdatacat_ventas_productos_lotes["capturista"] = $fdata;
		$tdatacat_ventas_productos_lotes[".searchableFields"][] = "capturista";
//	cat_ventas_productos_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_ventas_productos_lotes_id";
	$fdata["GoodName"] = "cat_ventas_productos_lotes_id";
	$fdata["ownerTable"] = "cat_ventas_productos_lotes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_lotes","cat_ventas_productos_lotes_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_lotes_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_lotes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_lotes_id";

	
	
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


	$tdatacat_ventas_productos_lotes["cat_ventas_productos_lotes_id"] = $fdata;
		$tdatacat_ventas_productos_lotes[".searchableFields"][] = "cat_ventas_productos_lotes_id";


$tables_data["cat_ventas_productos_lotes"]=&$tdatacat_ventas_productos_lotes;
$field_labels["cat_ventas_productos_lotes"] = &$fieldLabelscat_ventas_productos_lotes;
$fieldToolTips["cat_ventas_productos_lotes"] = &$fieldToolTipscat_ventas_productos_lotes;
$placeHolders["cat_ventas_productos_lotes"] = &$placeHolderscat_ventas_productos_lotes;
$page_titles["cat_ventas_productos_lotes"] = &$pageTitlescat_ventas_productos_lotes;


changeTextControlsToDate( "cat_ventas_productos_lotes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_lotes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_lotes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_lotes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigente,  	cat_ventas_productos_sku_id,  	descripcion_ventas_lotes,  	fecha_de_inicio,  	fecha_de_termino,  	time_stamp,  	capturista,  	cat_ventas_productos_lotes_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_lotes";
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
	"m_strTable" => "cat_ventas_productos_lotes",
	"m_srcTableName" => "cat_ventas_productos_lotes"
));

$proto6["m_sql"] = "vigente";
$proto6["m_srcTableName"] = "cat_ventas_productos_lotes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_sku_id",
	"m_strTable" => "cat_ventas_productos_lotes",
	"m_srcTableName" => "cat_ventas_productos_lotes"
));

$proto8["m_sql"] = "cat_ventas_productos_sku_id";
$proto8["m_srcTableName"] = "cat_ventas_productos_lotes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_lotes",
	"m_strTable" => "cat_ventas_productos_lotes",
	"m_srcTableName" => "cat_ventas_productos_lotes"
));

$proto10["m_sql"] = "descripcion_ventas_lotes";
$proto10["m_srcTableName"] = "cat_ventas_productos_lotes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_inicio",
	"m_strTable" => "cat_ventas_productos_lotes",
	"m_srcTableName" => "cat_ventas_productos_lotes"
));

$proto12["m_sql"] = "fecha_de_inicio";
$proto12["m_srcTableName"] = "cat_ventas_productos_lotes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_termino",
	"m_strTable" => "cat_ventas_productos_lotes",
	"m_srcTableName" => "cat_ventas_productos_lotes"
));

$proto14["m_sql"] = "fecha_de_termino";
$proto14["m_srcTableName"] = "cat_ventas_productos_lotes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_lotes",
	"m_srcTableName" => "cat_ventas_productos_lotes"
));

$proto16["m_sql"] = "time_stamp";
$proto16["m_srcTableName"] = "cat_ventas_productos_lotes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_lotes",
	"m_srcTableName" => "cat_ventas_productos_lotes"
));

$proto18["m_sql"] = "capturista";
$proto18["m_srcTableName"] = "cat_ventas_productos_lotes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_lotes_id",
	"m_strTable" => "cat_ventas_productos_lotes",
	"m_srcTableName" => "cat_ventas_productos_lotes"
));

$proto20["m_sql"] = "cat_ventas_productos_lotes_id";
$proto20["m_srcTableName"] = "cat_ventas_productos_lotes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "cat_ventas_productos_lotes";
$proto23["m_srcTableName"] = "cat_ventas_productos_lotes";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "vigente";
$proto23["m_columns"][] = "cat_ventas_productos_sku_id";
$proto23["m_columns"][] = "descripcion_ventas_lotes";
$proto23["m_columns"][] = "fecha_de_inicio";
$proto23["m_columns"][] = "fecha_de_termino";
$proto23["m_columns"][] = "time_stamp";
$proto23["m_columns"][] = "capturista";
$proto23["m_columns"][] = "cat_ventas_productos_lotes_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "cat_ventas_productos_lotes";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_ventas_productos_lotes";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_lotes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_lotes = createSqlQuery_cat_ventas_productos_lotes();


	
		;

								

$tdatacat_ventas_productos_lotes[".sqlquery"] = $queryData_cat_ventas_productos_lotes;



$tdatacat_ventas_productos_lotes[".hasEvents"] = false;

?>