<?php
$tdatacat_compras_almacenes = array();
$tdatacat_compras_almacenes[".searchableFields"] = array();
$tdatacat_compras_almacenes[".ShortName"] = "cat_compras_almacenes";
$tdatacat_compras_almacenes[".OwnerID"] = "";
$tdatacat_compras_almacenes[".OriginalTable"] = "cat_compras_almacenes";


$tdatacat_compras_almacenes[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_compras_almacenes[".originalPagesByType"] = $tdatacat_compras_almacenes[".pagesByType"];
$tdatacat_compras_almacenes[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_compras_almacenes[".originalPages"] = $tdatacat_compras_almacenes[".pages"];
$tdatacat_compras_almacenes[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_compras_almacenes[".originalDefaultPages"] = $tdatacat_compras_almacenes[".defaultPages"];

//	field labels
$fieldLabelscat_compras_almacenes = array();
$fieldToolTipscat_compras_almacenes = array();
$pageTitlescat_compras_almacenes = array();
$placeHolderscat_compras_almacenes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_compras_almacenes["Spanish"] = array();
	$fieldToolTipscat_compras_almacenes["Spanish"] = array();
	$placeHolderscat_compras_almacenes["Spanish"] = array();
	$pageTitlescat_compras_almacenes["Spanish"] = array();
	$fieldLabelscat_compras_almacenes["Spanish"]["cat_compras_almacenes_id"] = "Id";
	$fieldToolTipscat_compras_almacenes["Spanish"]["cat_compras_almacenes_id"] = "";
	$placeHolderscat_compras_almacenes["Spanish"]["cat_compras_almacenes_id"] = "";
	$fieldLabelscat_compras_almacenes["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_compras_almacenes["Spanish"]["time_stamp"] = "";
	$placeHolderscat_compras_almacenes["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_compras_almacenes["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_compras_almacenes["Spanish"]["vigente"] = "";
	$placeHolderscat_compras_almacenes["Spanish"]["vigente"] = "";
	$fieldLabelscat_compras_almacenes["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_compras_almacenes["Spanish"]["capturista"] = "";
	$placeHolderscat_compras_almacenes["Spanish"]["capturista"] = "";
	$fieldLabelscat_compras_almacenes["Spanish"]["imei"] = "Imei";
	$fieldToolTipscat_compras_almacenes["Spanish"]["imei"] = "";
	$placeHolderscat_compras_almacenes["Spanish"]["imei"] = "";
	$fieldLabelscat_compras_almacenes["Spanish"]["descripcion_compras_almacenes"] = "Almacen";
	$fieldToolTipscat_compras_almacenes["Spanish"]["descripcion_compras_almacenes"] = "";
	$placeHolderscat_compras_almacenes["Spanish"]["descripcion_compras_almacenes"] = "";
	if (count($fieldToolTipscat_compras_almacenes["Spanish"]))
		$tdatacat_compras_almacenes[".isUseToolTips"] = true;
}





$tdatacat_compras_almacenes[".shortTableName"] = "cat_compras_almacenes";
$tdatacat_compras_almacenes[".nSecOptions"] = 0;

$tdatacat_compras_almacenes[".mainTableOwnerID"] = "";
$tdatacat_compras_almacenes[".entityType"] = 0;
$tdatacat_compras_almacenes[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_compras_almacenes[".strOriginalTableName"] = "cat_compras_almacenes";

	



$tdatacat_compras_almacenes[".showAddInPopup"] = false;

$tdatacat_compras_almacenes[".showEditInPopup"] = false;

$tdatacat_compras_almacenes[".showViewInPopup"] = false;

$tdatacat_compras_almacenes[".listAjax"] = false;
//	temporary
//$tdatacat_compras_almacenes[".listAjax"] = false;

	$tdatacat_compras_almacenes[".audit"] = true;

	$tdatacat_compras_almacenes[".locking"] = true;


$pages = $tdatacat_compras_almacenes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_compras_almacenes[".edit"] = true;
	$tdatacat_compras_almacenes[".afterEditAction"] = 1;
	$tdatacat_compras_almacenes[".closePopupAfterEdit"] = 1;
	$tdatacat_compras_almacenes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_compras_almacenes[".add"] = true;
$tdatacat_compras_almacenes[".afterAddAction"] = 1;
$tdatacat_compras_almacenes[".closePopupAfterAdd"] = 1;
$tdatacat_compras_almacenes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_compras_almacenes[".list"] = true;
}



$tdatacat_compras_almacenes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_compras_almacenes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_compras_almacenes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_compras_almacenes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_compras_almacenes[".printFriendly"] = true;
}



$tdatacat_compras_almacenes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_compras_almacenes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_compras_almacenes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_compras_almacenes[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_compras_almacenes[".ajaxCodeSnippetAdded"] = false;

$tdatacat_compras_almacenes[".buttonsAdded"] = false;

$tdatacat_compras_almacenes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_compras_almacenes[".isUseTimeForSearch"] = false;


$tdatacat_compras_almacenes[".badgeColor"] = "D2AF80";


$tdatacat_compras_almacenes[".allSearchFields"] = array();
$tdatacat_compras_almacenes[".filterFields"] = array();
$tdatacat_compras_almacenes[".requiredSearchFields"] = array();

$tdatacat_compras_almacenes[".googleLikeFields"] = array();
$tdatacat_compras_almacenes[".googleLikeFields"][] = "cat_compras_almacenes_id";
$tdatacat_compras_almacenes[".googleLikeFields"][] = "time_stamp";
$tdatacat_compras_almacenes[".googleLikeFields"][] = "vigente";
$tdatacat_compras_almacenes[".googleLikeFields"][] = "capturista";
$tdatacat_compras_almacenes[".googleLikeFields"][] = "imei";
$tdatacat_compras_almacenes[".googleLikeFields"][] = "descripcion_compras_almacenes";



$tdatacat_compras_almacenes[".tableType"] = "list";

$tdatacat_compras_almacenes[".printerPageOrientation"] = 0;
$tdatacat_compras_almacenes[".nPrinterPageScale"] = 100;

$tdatacat_compras_almacenes[".nPrinterSplitRecords"] = 40;

$tdatacat_compras_almacenes[".geocodingEnabled"] = false;





$tdatacat_compras_almacenes[".isResizeColumns"] = true;





$tdatacat_compras_almacenes[".pageSize"] = 20;

$tdatacat_compras_almacenes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_compras_almacenes[".strOrderBy"] = $tstrOrderBy;

$tdatacat_compras_almacenes[".orderindexes"] = array();


$tdatacat_compras_almacenes[".sqlHead"] = "SELECT cat_compras_almacenes_id,  	time_stamp,  	vigente,  	capturista,  	imei,  	descripcion_compras_almacenes";
$tdatacat_compras_almacenes[".sqlFrom"] = "FROM cat_compras_almacenes";
$tdatacat_compras_almacenes[".sqlWhereExpr"] = "";
$tdatacat_compras_almacenes[".sqlTail"] = "";

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
$tdatacat_compras_almacenes[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_compras_almacenes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_compras_almacenes[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_compras_almacenes[".highlightSearchResults"] = true;

$tableKeyscat_compras_almacenes = array();
$tableKeyscat_compras_almacenes[] = "cat_compras_almacenes_id";
$tdatacat_compras_almacenes[".Keys"] = $tableKeyscat_compras_almacenes;


$tdatacat_compras_almacenes[".hideMobileList"] = array();




//	cat_compras_almacenes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_almacenes_id";
	$fdata["GoodName"] = "cat_compras_almacenes_id";
	$fdata["ownerTable"] = "cat_compras_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes","cat_compras_almacenes_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_almacenes_id";

		$fdata["sourceSingle"] = "cat_compras_almacenes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_almacenes_id";

	
	
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


	$tdatacat_compras_almacenes["cat_compras_almacenes_id"] = $fdata;
		$tdatacat_compras_almacenes[".searchableFields"][] = "cat_compras_almacenes_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_compras_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes","time_stamp");
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


	$tdatacat_compras_almacenes["time_stamp"] = $fdata;
		$tdatacat_compras_almacenes[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes","vigente");
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


	$tdatacat_compras_almacenes["vigente"] = $fdata;
		$tdatacat_compras_almacenes[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes","capturista");
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


	$tdatacat_compras_almacenes["capturista"] = $fdata;
		$tdatacat_compras_almacenes[".searchableFields"][] = "capturista";
//	imei
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "imei";
	$fdata["GoodName"] = "imei";
	$fdata["ownerTable"] = "cat_compras_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes","imei");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "imei";

		$fdata["sourceSingle"] = "imei";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imei";

	
	
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


	$tdatacat_compras_almacenes["imei"] = $fdata;
		$tdatacat_compras_almacenes[".searchableFields"][] = "imei";
//	descripcion_compras_almacenes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descripcion_compras_almacenes";
	$fdata["GoodName"] = "descripcion_compras_almacenes";
	$fdata["ownerTable"] = "cat_compras_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_compras_almacenes","descripcion_compras_almacenes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_compras_almacenes";

		$fdata["sourceSingle"] = "descripcion_compras_almacenes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_compras_almacenes";

	
	
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


	$tdatacat_compras_almacenes["descripcion_compras_almacenes"] = $fdata;
		$tdatacat_compras_almacenes[".searchableFields"][] = "descripcion_compras_almacenes";


$tables_data["cat_compras_almacenes"]=&$tdatacat_compras_almacenes;
$field_labels["cat_compras_almacenes"] = &$fieldLabelscat_compras_almacenes;
$fieldToolTips["cat_compras_almacenes"] = &$fieldToolTipscat_compras_almacenes;
$placeHolders["cat_compras_almacenes"] = &$placeHolderscat_compras_almacenes;
$page_titles["cat_compras_almacenes"] = &$pageTitlescat_compras_almacenes;


changeTextControlsToDate( "cat_compras_almacenes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_compras_almacenes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_compras_almacenes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_compras_almacenes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_almacenes_id,  	time_stamp,  	vigente,  	capturista,  	imei,  	descripcion_compras_almacenes";
$proto0["m_strFrom"] = "FROM cat_compras_almacenes";
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
	"m_strName" => "cat_compras_almacenes_id",
	"m_strTable" => "cat_compras_almacenes",
	"m_srcTableName" => "cat_compras_almacenes"
));

$proto6["m_sql"] = "cat_compras_almacenes_id";
$proto6["m_srcTableName"] = "cat_compras_almacenes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_compras_almacenes",
	"m_srcTableName" => "cat_compras_almacenes"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_compras_almacenes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_almacenes",
	"m_srcTableName" => "cat_compras_almacenes"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_compras_almacenes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_almacenes",
	"m_srcTableName" => "cat_compras_almacenes"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_compras_almacenes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "imei",
	"m_strTable" => "cat_compras_almacenes",
	"m_srcTableName" => "cat_compras_almacenes"
));

$proto14["m_sql"] = "imei";
$proto14["m_srcTableName"] = "cat_compras_almacenes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_compras_almacenes",
	"m_strTable" => "cat_compras_almacenes",
	"m_srcTableName" => "cat_compras_almacenes"
));

$proto16["m_sql"] = "descripcion_compras_almacenes";
$proto16["m_srcTableName"] = "cat_compras_almacenes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_compras_almacenes";
$proto19["m_srcTableName"] = "cat_compras_almacenes";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_compras_almacenes_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "imei";
$proto19["m_columns"][] = "descripcion_compras_almacenes";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_compras_almacenes";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_compras_almacenes";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_compras_almacenes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_compras_almacenes = createSqlQuery_cat_compras_almacenes();


	
		;

						

$tdatacat_compras_almacenes[".sqlquery"] = $queryData_cat_compras_almacenes;



$tdatacat_compras_almacenes[".hasEvents"] = false;

?>