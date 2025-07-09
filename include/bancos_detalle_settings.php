<?php
$tdatabancos_detalle = array();
$tdatabancos_detalle[".searchableFields"] = array();
$tdatabancos_detalle[".ShortName"] = "bancos_detalle";
$tdatabancos_detalle[".OwnerID"] = "";
$tdatabancos_detalle[".OriginalTable"] = "tr_finanzas_bancos_02";


$tdatabancos_detalle[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabancos_detalle[".originalPagesByType"] = $tdatabancos_detalle[".pagesByType"];
$tdatabancos_detalle[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabancos_detalle[".originalPages"] = $tdatabancos_detalle[".pages"];
$tdatabancos_detalle[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabancos_detalle[".originalDefaultPages"] = $tdatabancos_detalle[".defaultPages"];

//	field labels
$fieldLabelsbancos_detalle = array();
$fieldToolTipsbancos_detalle = array();
$pageTitlesbancos_detalle = array();
$placeHoldersbancos_detalle = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbancos_detalle["Spanish"] = array();
	$fieldToolTipsbancos_detalle["Spanish"] = array();
	$placeHoldersbancos_detalle["Spanish"] = array();
	$pageTitlesbancos_detalle["Spanish"] = array();
	$fieldLabelsbancos_detalle["Spanish"]["tr_finanzas_bancos_02_id"] = "Tr Finanzas Bancos 02 Id";
	$fieldToolTipsbancos_detalle["Spanish"]["tr_finanzas_bancos_02_id"] = "";
	$placeHoldersbancos_detalle["Spanish"]["tr_finanzas_bancos_02_id"] = "";
	$fieldLabelsbancos_detalle["Spanish"]["tr_finanzas_bancos_01_id"] = "Folio";
	$fieldToolTipsbancos_detalle["Spanish"]["tr_finanzas_bancos_01_id"] = "";
	$placeHoldersbancos_detalle["Spanish"]["tr_finanzas_bancos_01_id"] = "";
	$fieldLabelsbancos_detalle["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbancos_detalle["Spanish"]["time_stamp"] = "";
	$placeHoldersbancos_detalle["Spanish"]["time_stamp"] = "";
	$fieldLabelsbancos_detalle["Spanish"]["capturista_user"] = "Capturista";
	$fieldToolTipsbancos_detalle["Spanish"]["capturista_user"] = "";
	$placeHoldersbancos_detalle["Spanish"]["capturista_user"] = "";
	$fieldLabelsbancos_detalle["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbancos_detalle["Spanish"]["vigente"] = "";
	$placeHoldersbancos_detalle["Spanish"]["vigente"] = "";
	$fieldLabelsbancos_detalle["Spanish"]["fecha_de_registro"] = "Fecha";
	$fieldToolTipsbancos_detalle["Spanish"]["fecha_de_registro"] = "";
	$placeHoldersbancos_detalle["Spanish"]["fecha_de_registro"] = "";
	$fieldLabelsbancos_detalle["Spanish"]["Observacion"] = "Observacion";
	$fieldToolTipsbancos_detalle["Spanish"]["Observacion"] = "";
	$placeHoldersbancos_detalle["Spanish"]["Observacion"] = "";
	$fieldLabelsbancos_detalle["Spanish"]["importe_centro_de_costos"] = "Importe";
	$fieldToolTipsbancos_detalle["Spanish"]["importe_centro_de_costos"] = "";
	$placeHoldersbancos_detalle["Spanish"]["importe_centro_de_costos"] = "";
	$fieldLabelsbancos_detalle["Spanish"]["cat_finanzas_centros_de_costos_id"] = "Cat Finanzas Centros De Costos Id";
	$fieldToolTipsbancos_detalle["Spanish"]["cat_finanzas_centros_de_costos_id"] = "";
	$placeHoldersbancos_detalle["Spanish"]["cat_finanzas_centros_de_costos_id"] = "";
	if (count($fieldToolTipsbancos_detalle["Spanish"]))
		$tdatabancos_detalle[".isUseToolTips"] = true;
}





$tdatabancos_detalle[".shortTableName"] = "bancos_detalle";
$tdatabancos_detalle[".nSecOptions"] = 0;

$tdatabancos_detalle[".mainTableOwnerID"] = "";
$tdatabancos_detalle[".entityType"] = 1;
$tdatabancos_detalle[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabancos_detalle[".strOriginalTableName"] = "tr_finanzas_bancos_02";

	



$tdatabancos_detalle[".showAddInPopup"] = false;

$tdatabancos_detalle[".showEditInPopup"] = false;

$tdatabancos_detalle[".showViewInPopup"] = false;

$tdatabancos_detalle[".listAjax"] = false;
//	temporary
//$tdatabancos_detalle[".listAjax"] = false;

	$tdatabancos_detalle[".audit"] = true;

	$tdatabancos_detalle[".locking"] = true;


$pages = $tdatabancos_detalle[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabancos_detalle[".edit"] = true;
	$tdatabancos_detalle[".afterEditAction"] = 1;
	$tdatabancos_detalle[".closePopupAfterEdit"] = 1;
	$tdatabancos_detalle[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabancos_detalle[".add"] = true;
$tdatabancos_detalle[".afterAddAction"] = 1;
$tdatabancos_detalle[".closePopupAfterAdd"] = 1;
$tdatabancos_detalle[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabancos_detalle[".list"] = true;
}



$tdatabancos_detalle[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabancos_detalle[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabancos_detalle[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabancos_detalle[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabancos_detalle[".printFriendly"] = true;
}



$tdatabancos_detalle[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabancos_detalle[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabancos_detalle[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabancos_detalle[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabancos_detalle[".ajaxCodeSnippetAdded"] = false;

$tdatabancos_detalle[".buttonsAdded"] = false;

$tdatabancos_detalle[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabancos_detalle[".isUseTimeForSearch"] = false;


$tdatabancos_detalle[".badgeColor"] = "6DA5C8";


$tdatabancos_detalle[".allSearchFields"] = array();
$tdatabancos_detalle[".filterFields"] = array();
$tdatabancos_detalle[".requiredSearchFields"] = array();

$tdatabancos_detalle[".googleLikeFields"] = array();
$tdatabancos_detalle[".googleLikeFields"][] = "tr_finanzas_bancos_02_id";
$tdatabancos_detalle[".googleLikeFields"][] = "tr_finanzas_bancos_01_id";
$tdatabancos_detalle[".googleLikeFields"][] = "time_stamp";
$tdatabancos_detalle[".googleLikeFields"][] = "capturista_user";
$tdatabancos_detalle[".googleLikeFields"][] = "vigente";
$tdatabancos_detalle[".googleLikeFields"][] = "fecha_de_registro";
$tdatabancos_detalle[".googleLikeFields"][] = "Observacion";
$tdatabancos_detalle[".googleLikeFields"][] = "cat_finanzas_centros_de_costos_id";
$tdatabancos_detalle[".googleLikeFields"][] = "importe_centro_de_costos";



$tdatabancos_detalle[".tableType"] = "list";

$tdatabancos_detalle[".printerPageOrientation"] = 0;
$tdatabancos_detalle[".nPrinterPageScale"] = 100;

$tdatabancos_detalle[".nPrinterSplitRecords"] = 40;

$tdatabancos_detalle[".geocodingEnabled"] = false;





$tdatabancos_detalle[".isResizeColumns"] = true;





$tdatabancos_detalle[".pageSize"] = 20;

$tdatabancos_detalle[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabancos_detalle[".strOrderBy"] = $tstrOrderBy;

$tdatabancos_detalle[".orderindexes"] = array();


$tdatabancos_detalle[".sqlHead"] = "SELECT tr_finanzas_bancos_02_id,  	tr_finanzas_bancos_01_id,  	time_stamp,  	capturista_user,  	vigente,  	fecha_de_registro,  	Observacion,  	cat_finanzas_centros_de_costos_id,  	importe_centro_de_costos";
$tdatabancos_detalle[".sqlFrom"] = "FROM tr_finanzas_bancos_02";
$tdatabancos_detalle[".sqlWhereExpr"] = "";
$tdatabancos_detalle[".sqlTail"] = "";

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
$tdatabancos_detalle[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabancos_detalle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabancos_detalle[".arrGroupsPerPage"] = $arrGPP;

$tdatabancos_detalle[".highlightSearchResults"] = true;

$tableKeysbancos_detalle = array();
$tableKeysbancos_detalle[] = "tr_finanzas_bancos_02_id";
$tdatabancos_detalle[".Keys"] = $tableKeysbancos_detalle;


$tdatabancos_detalle[".hideMobileList"] = array();




//	tr_finanzas_bancos_02_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_finanzas_bancos_02_id";
	$fdata["GoodName"] = "tr_finanzas_bancos_02_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("Bancos_detalle","tr_finanzas_bancos_02_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_finanzas_bancos_02_id";

		$fdata["sourceSingle"] = "tr_finanzas_bancos_02_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_02_id";

	
	
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


	$tdatabancos_detalle["tr_finanzas_bancos_02_id"] = $fdata;
		$tdatabancos_detalle[".searchableFields"][] = "tr_finanzas_bancos_02_id";
//	tr_finanzas_bancos_01_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tr_finanzas_bancos_01_id";
	$fdata["GoodName"] = "tr_finanzas_bancos_01_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("Bancos_detalle","tr_finanzas_bancos_01_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tr_finanzas_bancos_01_id";

		$fdata["sourceSingle"] = "tr_finanzas_bancos_01_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_bancos_01_id";

	
	
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


	$tdatabancos_detalle["tr_finanzas_bancos_01_id"] = $fdata;
		$tdatabancos_detalle[".searchableFields"][] = "tr_finanzas_bancos_01_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("Bancos_detalle","time_stamp");
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


	$tdatabancos_detalle["time_stamp"] = $fdata;
		$tdatabancos_detalle[".searchableFields"][] = "time_stamp";
//	capturista_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista_user";
	$fdata["GoodName"] = "capturista_user";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("Bancos_detalle","capturista_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista_user";

		$fdata["sourceSingle"] = "capturista_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capturista_user";

	
	
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


	$tdatabancos_detalle["capturista_user"] = $fdata;
		$tdatabancos_detalle[".searchableFields"][] = "capturista_user";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("Bancos_detalle","vigente");
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


	$tdatabancos_detalle["vigente"] = $fdata;
		$tdatabancos_detalle[".searchableFields"][] = "vigente";
//	fecha_de_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_de_registro";
	$fdata["GoodName"] = "fecha_de_registro";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("Bancos_detalle","fecha_de_registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_registro";

		$fdata["sourceSingle"] = "fecha_de_registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_registro";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatabancos_detalle["fecha_de_registro"] = $fdata;
		$tdatabancos_detalle[".searchableFields"][] = "fecha_de_registro";
//	Observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Observacion";
	$fdata["GoodName"] = "Observacion";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("Bancos_detalle","Observacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observacion";

		$fdata["sourceSingle"] = "Observacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observacion";

	
	
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


	$tdatabancos_detalle["Observacion"] = $fdata;
		$tdatabancos_detalle[".searchableFields"][] = "Observacion";
//	cat_finanzas_centros_de_costos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_finanzas_centros_de_costos_id";
	$fdata["GoodName"] = "cat_finanzas_centros_de_costos_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("Bancos_detalle","cat_finanzas_centros_de_costos_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_finanzas_centros_de_costos_id";

		$fdata["sourceSingle"] = "cat_finanzas_centros_de_costos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_centros_de_costos_id";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatabancos_detalle["cat_finanzas_centros_de_costos_id"] = $fdata;
		$tdatabancos_detalle[".searchableFields"][] = "cat_finanzas_centros_de_costos_id";
//	importe_centro_de_costos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "importe_centro_de_costos";
	$fdata["GoodName"] = "importe_centro_de_costos";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("Bancos_detalle","importe_centro_de_costos");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "importe_centro_de_costos";

		$fdata["sourceSingle"] = "importe_centro_de_costos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "importe_centro_de_costos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatabancos_detalle["importe_centro_de_costos"] = $fdata;
		$tdatabancos_detalle[".searchableFields"][] = "importe_centro_de_costos";


$tables_data["Bancos detalle"]=&$tdatabancos_detalle;
$field_labels["Bancos_detalle"] = &$fieldLabelsbancos_detalle;
$fieldToolTips["Bancos_detalle"] = &$fieldToolTipsbancos_detalle;
$placeHolders["Bancos_detalle"] = &$placeHoldersbancos_detalle;
$page_titles["Bancos_detalle"] = &$pageTitlesbancos_detalle;


changeTextControlsToDate( "Bancos detalle" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Bancos detalle"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Bancos detalle"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bancos_detalle()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_finanzas_bancos_02_id,  	tr_finanzas_bancos_01_id,  	time_stamp,  	capturista_user,  	vigente,  	fecha_de_registro,  	Observacion,  	cat_finanzas_centros_de_costos_id,  	importe_centro_de_costos";
$proto0["m_strFrom"] = "FROM tr_finanzas_bancos_02";
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
	"m_strName" => "tr_finanzas_bancos_02_id",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "Bancos detalle"
));

$proto6["m_sql"] = "tr_finanzas_bancos_02_id";
$proto6["m_srcTableName"] = "Bancos detalle";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_finanzas_bancos_01_id",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "Bancos detalle"
));

$proto8["m_sql"] = "tr_finanzas_bancos_01_id";
$proto8["m_srcTableName"] = "Bancos detalle";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "Bancos detalle"
));

$proto10["m_sql"] = "time_stamp";
$proto10["m_srcTableName"] = "Bancos detalle";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista_user",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "Bancos detalle"
));

$proto12["m_sql"] = "capturista_user";
$proto12["m_srcTableName"] = "Bancos detalle";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "Bancos detalle"
));

$proto14["m_sql"] = "vigente";
$proto14["m_srcTableName"] = "Bancos detalle";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_registro",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "Bancos detalle"
));

$proto16["m_sql"] = "fecha_de_registro";
$proto16["m_srcTableName"] = "Bancos detalle";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacion",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "Bancos detalle"
));

$proto18["m_sql"] = "Observacion";
$proto18["m_srcTableName"] = "Bancos detalle";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_centros_de_costos_id",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "Bancos detalle"
));

$proto20["m_sql"] = "cat_finanzas_centros_de_costos_id";
$proto20["m_srcTableName"] = "Bancos detalle";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "importe_centro_de_costos",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "Bancos detalle"
));

$proto22["m_sql"] = "importe_centro_de_costos";
$proto22["m_srcTableName"] = "Bancos detalle";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tr_finanzas_bancos_02";
$proto25["m_srcTableName"] = "Bancos detalle";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "tr_finanzas_bancos_02_id";
$proto25["m_columns"][] = "tr_finanzas_bancos_01_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "capturista_user";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "fecha_de_registro";
$proto25["m_columns"][] = "Observacion";
$proto25["m_columns"][] = "cat_finanzas_centros_de_costos_id";
$proto25["m_columns"][] = "importe_centro_de_costos";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "tr_finanzas_bancos_02";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Bancos detalle";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Bancos detalle";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bancos_detalle = createSqlQuery_bancos_detalle();


	
		;

									

$tdatabancos_detalle[".sqlquery"] = $queryData_bancos_detalle;



$tdatabancos_detalle[".hasEvents"] = false;

?>