<?php
$tdatatr_finanzas_bancos_02 = array();
$tdatatr_finanzas_bancos_02[".searchableFields"] = array();
$tdatatr_finanzas_bancos_02[".ShortName"] = "tr_finanzas_bancos_02";
$tdatatr_finanzas_bancos_02[".OwnerID"] = "";
$tdatatr_finanzas_bancos_02[".OriginalTable"] = "tr_finanzas_bancos_02";


$tdatatr_finanzas_bancos_02[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_finanzas_bancos_02[".originalPagesByType"] = $tdatatr_finanzas_bancos_02[".pagesByType"];
$tdatatr_finanzas_bancos_02[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_finanzas_bancos_02[".originalPages"] = $tdatatr_finanzas_bancos_02[".pages"];
$tdatatr_finanzas_bancos_02[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_finanzas_bancos_02[".originalDefaultPages"] = $tdatatr_finanzas_bancos_02[".defaultPages"];

//	field labels
$fieldLabelstr_finanzas_bancos_02 = array();
$fieldToolTipstr_finanzas_bancos_02 = array();
$pageTitlestr_finanzas_bancos_02 = array();
$placeHolderstr_finanzas_bancos_02 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_finanzas_bancos_02["Spanish"] = array();
	$fieldToolTipstr_finanzas_bancos_02["Spanish"] = array();
	$placeHolderstr_finanzas_bancos_02["Spanish"] = array();
	$pageTitlestr_finanzas_bancos_02["Spanish"] = array();
	$fieldLabelstr_finanzas_bancos_02["Spanish"]["tr_finanzas_bancos_02_id"] = "Tr Finanzas Bancos 02 Id";
	$fieldToolTipstr_finanzas_bancos_02["Spanish"]["tr_finanzas_bancos_02_id"] = "";
	$placeHolderstr_finanzas_bancos_02["Spanish"]["tr_finanzas_bancos_02_id"] = "";
	$fieldLabelstr_finanzas_bancos_02["Spanish"]["tr_finanzas_bancos_01_id"] = "Folio";
	$fieldToolTipstr_finanzas_bancos_02["Spanish"]["tr_finanzas_bancos_01_id"] = "";
	$placeHolderstr_finanzas_bancos_02["Spanish"]["tr_finanzas_bancos_01_id"] = "";
	$fieldLabelstr_finanzas_bancos_02["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_finanzas_bancos_02["Spanish"]["time_stamp"] = "";
	$placeHolderstr_finanzas_bancos_02["Spanish"]["time_stamp"] = "";
	$fieldLabelstr_finanzas_bancos_02["Spanish"]["capturista_user"] = "Capturista";
	$fieldToolTipstr_finanzas_bancos_02["Spanish"]["capturista_user"] = "";
	$placeHolderstr_finanzas_bancos_02["Spanish"]["capturista_user"] = "";
	$fieldLabelstr_finanzas_bancos_02["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_finanzas_bancos_02["Spanish"]["vigente"] = "";
	$placeHolderstr_finanzas_bancos_02["Spanish"]["vigente"] = "";
	$fieldLabelstr_finanzas_bancos_02["Spanish"]["fecha_de_registro"] = "Fecha";
	$fieldToolTipstr_finanzas_bancos_02["Spanish"]["fecha_de_registro"] = "";
	$placeHolderstr_finanzas_bancos_02["Spanish"]["fecha_de_registro"] = "";
	$fieldLabelstr_finanzas_bancos_02["Spanish"]["Observacion"] = "Observacion";
	$fieldToolTipstr_finanzas_bancos_02["Spanish"]["Observacion"] = "";
	$placeHolderstr_finanzas_bancos_02["Spanish"]["Observacion"] = "";
	$fieldLabelstr_finanzas_bancos_02["Spanish"]["importe_centro_de_costos"] = "Importe";
	$fieldToolTipstr_finanzas_bancos_02["Spanish"]["importe_centro_de_costos"] = "";
	$placeHolderstr_finanzas_bancos_02["Spanish"]["importe_centro_de_costos"] = "";
	$fieldLabelstr_finanzas_bancos_02["Spanish"]["cat_finanzas_centros_de_costos_id"] = "CCs";
	$fieldToolTipstr_finanzas_bancos_02["Spanish"]["cat_finanzas_centros_de_costos_id"] = "";
	$placeHolderstr_finanzas_bancos_02["Spanish"]["cat_finanzas_centros_de_costos_id"] = "";
	if (count($fieldToolTipstr_finanzas_bancos_02["Spanish"]))
		$tdatatr_finanzas_bancos_02[".isUseToolTips"] = true;
}





$tdatatr_finanzas_bancos_02[".shortTableName"] = "tr_finanzas_bancos_02";
$tdatatr_finanzas_bancos_02[".nSecOptions"] = 0;

$tdatatr_finanzas_bancos_02[".mainTableOwnerID"] = "";
$tdatatr_finanzas_bancos_02[".entityType"] = 0;
$tdatatr_finanzas_bancos_02[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_finanzas_bancos_02[".strOriginalTableName"] = "tr_finanzas_bancos_02";

	



$tdatatr_finanzas_bancos_02[".showAddInPopup"] = false;

$tdatatr_finanzas_bancos_02[".showEditInPopup"] = false;

$tdatatr_finanzas_bancos_02[".showViewInPopup"] = false;

$tdatatr_finanzas_bancos_02[".listAjax"] = false;
//	temporary
//$tdatatr_finanzas_bancos_02[".listAjax"] = false;

	$tdatatr_finanzas_bancos_02[".audit"] = true;

	$tdatatr_finanzas_bancos_02[".locking"] = true;


$pages = $tdatatr_finanzas_bancos_02[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_finanzas_bancos_02[".edit"] = true;
	$tdatatr_finanzas_bancos_02[".afterEditAction"] = 1;
	$tdatatr_finanzas_bancos_02[".closePopupAfterEdit"] = 1;
	$tdatatr_finanzas_bancos_02[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_finanzas_bancos_02[".add"] = true;
$tdatatr_finanzas_bancos_02[".afterAddAction"] = 1;
$tdatatr_finanzas_bancos_02[".closePopupAfterAdd"] = 1;
$tdatatr_finanzas_bancos_02[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_finanzas_bancos_02[".list"] = true;
}



$tdatatr_finanzas_bancos_02[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_finanzas_bancos_02[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_finanzas_bancos_02[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_finanzas_bancos_02[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_finanzas_bancos_02[".printFriendly"] = true;
}



$tdatatr_finanzas_bancos_02[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_finanzas_bancos_02[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_finanzas_bancos_02[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_finanzas_bancos_02[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																								

$tdatatr_finanzas_bancos_02[".ajaxCodeSnippetAdded"] = false;

$tdatatr_finanzas_bancos_02[".buttonsAdded"] = false;

$tdatatr_finanzas_bancos_02[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_finanzas_bancos_02[".isUseTimeForSearch"] = false;


$tdatatr_finanzas_bancos_02[".badgeColor"] = "5f9ea0";


$tdatatr_finanzas_bancos_02[".allSearchFields"] = array();
$tdatatr_finanzas_bancos_02[".filterFields"] = array();
$tdatatr_finanzas_bancos_02[".requiredSearchFields"] = array();

$tdatatr_finanzas_bancos_02[".googleLikeFields"] = array();
$tdatatr_finanzas_bancos_02[".googleLikeFields"][] = "tr_finanzas_bancos_02_id";
$tdatatr_finanzas_bancos_02[".googleLikeFields"][] = "tr_finanzas_bancos_01_id";
$tdatatr_finanzas_bancos_02[".googleLikeFields"][] = "time_stamp";
$tdatatr_finanzas_bancos_02[".googleLikeFields"][] = "capturista_user";
$tdatatr_finanzas_bancos_02[".googleLikeFields"][] = "vigente";
$tdatatr_finanzas_bancos_02[".googleLikeFields"][] = "fecha_de_registro";
$tdatatr_finanzas_bancos_02[".googleLikeFields"][] = "Observacion";
$tdatatr_finanzas_bancos_02[".googleLikeFields"][] = "cat_finanzas_centros_de_costos_id";
$tdatatr_finanzas_bancos_02[".googleLikeFields"][] = "importe_centro_de_costos";



$tdatatr_finanzas_bancos_02[".tableType"] = "list";

$tdatatr_finanzas_bancos_02[".printerPageOrientation"] = 0;
$tdatatr_finanzas_bancos_02[".nPrinterPageScale"] = 100;

$tdatatr_finanzas_bancos_02[".nPrinterSplitRecords"] = 40;

$tdatatr_finanzas_bancos_02[".geocodingEnabled"] = false;





$tdatatr_finanzas_bancos_02[".isResizeColumns"] = true;





$tdatatr_finanzas_bancos_02[".pageSize"] = 20;

$tdatatr_finanzas_bancos_02[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_finanzas_bancos_02[".strOrderBy"] = $tstrOrderBy;

$tdatatr_finanzas_bancos_02[".orderindexes"] = array();


$tdatatr_finanzas_bancos_02[".sqlHead"] = "SELECT tr_finanzas_bancos_02_id,  	tr_finanzas_bancos_01_id,  	time_stamp,  	capturista_user,  	vigente,  	fecha_de_registro,  	Observacion,  	cat_finanzas_centros_de_costos_id,  	importe_centro_de_costos";
$tdatatr_finanzas_bancos_02[".sqlFrom"] = "FROM tr_finanzas_bancos_02";
$tdatatr_finanzas_bancos_02[".sqlWhereExpr"] = "";
$tdatatr_finanzas_bancos_02[".sqlTail"] = "";

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
$tdatatr_finanzas_bancos_02[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_finanzas_bancos_02[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_finanzas_bancos_02[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_finanzas_bancos_02[".highlightSearchResults"] = true;

$tableKeystr_finanzas_bancos_02 = array();
$tableKeystr_finanzas_bancos_02[] = "tr_finanzas_bancos_02_id";
$tdatatr_finanzas_bancos_02[".Keys"] = $tableKeystr_finanzas_bancos_02;


$tdatatr_finanzas_bancos_02[".hideMobileList"] = array();




//	tr_finanzas_bancos_02_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_finanzas_bancos_02_id";
	$fdata["GoodName"] = "tr_finanzas_bancos_02_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_02","tr_finanzas_bancos_02_id");
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


	$tdatatr_finanzas_bancos_02["tr_finanzas_bancos_02_id"] = $fdata;
		$tdatatr_finanzas_bancos_02[".searchableFields"][] = "tr_finanzas_bancos_02_id";
//	tr_finanzas_bancos_01_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tr_finanzas_bancos_01_id";
	$fdata["GoodName"] = "tr_finanzas_bancos_01_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_02","tr_finanzas_bancos_01_id");
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


	$tdatatr_finanzas_bancos_02["tr_finanzas_bancos_01_id"] = $fdata;
		$tdatatr_finanzas_bancos_02[".searchableFields"][] = "tr_finanzas_bancos_01_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_02","time_stamp");
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


	$tdatatr_finanzas_bancos_02["time_stamp"] = $fdata;
		$tdatatr_finanzas_bancos_02[".searchableFields"][] = "time_stamp";
//	capturista_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista_user";
	$fdata["GoodName"] = "capturista_user";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_02","capturista_user");
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


	$tdatatr_finanzas_bancos_02["capturista_user"] = $fdata;
		$tdatatr_finanzas_bancos_02[".searchableFields"][] = "capturista_user";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_02","vigente");
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


	$tdatatr_finanzas_bancos_02["vigente"] = $fdata;
		$tdatatr_finanzas_bancos_02[".searchableFields"][] = "vigente";
//	fecha_de_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_de_registro";
	$fdata["GoodName"] = "fecha_de_registro";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_02","fecha_de_registro");
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


	$tdatatr_finanzas_bancos_02["fecha_de_registro"] = $fdata;
		$tdatatr_finanzas_bancos_02[".searchableFields"][] = "fecha_de_registro";
//	Observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Observacion";
	$fdata["GoodName"] = "Observacion";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_02","Observacion");
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


	$tdatatr_finanzas_bancos_02["Observacion"] = $fdata;
		$tdatatr_finanzas_bancos_02[".searchableFields"][] = "Observacion";
//	cat_finanzas_centros_de_costos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_finanzas_centros_de_costos_id";
	$fdata["GoodName"] = "cat_finanzas_centros_de_costos_id";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_02","cat_finanzas_centros_de_costos_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "box_cat_finanzas_centros_de_costos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_finanzas_centros_de_costos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_centro_de_costos";

	

	
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


	$tdatatr_finanzas_bancos_02["cat_finanzas_centros_de_costos_id"] = $fdata;
		$tdatatr_finanzas_bancos_02[".searchableFields"][] = "cat_finanzas_centros_de_costos_id";
//	importe_centro_de_costos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "importe_centro_de_costos";
	$fdata["GoodName"] = "importe_centro_de_costos";
	$fdata["ownerTable"] = "tr_finanzas_bancos_02";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_bancos_02","importe_centro_de_costos");
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


	$tdatatr_finanzas_bancos_02["importe_centro_de_costos"] = $fdata;
		$tdatatr_finanzas_bancos_02[".searchableFields"][] = "importe_centro_de_costos";


$tables_data["tr_finanzas_bancos_02"]=&$tdatatr_finanzas_bancos_02;
$field_labels["tr_finanzas_bancos_02"] = &$fieldLabelstr_finanzas_bancos_02;
$fieldToolTips["tr_finanzas_bancos_02"] = &$fieldToolTipstr_finanzas_bancos_02;
$placeHolders["tr_finanzas_bancos_02"] = &$placeHolderstr_finanzas_bancos_02;
$page_titles["tr_finanzas_bancos_02"] = &$pageTitlestr_finanzas_bancos_02;


changeTextControlsToDate( "tr_finanzas_bancos_02" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_finanzas_bancos_02"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_finanzas_bancos_02"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tr_finanzas_bancos_01";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tr_finanzas_bancos_01";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tr_finanzas_bancos_01";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tr_finanzas_bancos_02"][0] = $masterParams;
				$masterTablesData["tr_finanzas_bancos_02"][0]["masterKeys"] = array();
	$masterTablesData["tr_finanzas_bancos_02"][0]["masterKeys"][]="tr_finanzas_bancos_01_id";
				$masterTablesData["tr_finanzas_bancos_02"][0]["detailKeys"] = array();
	$masterTablesData["tr_finanzas_bancos_02"][0]["detailKeys"][]="tr_finanzas_bancos_01_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_finanzas_bancos_02()
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
	"m_srcTableName" => "tr_finanzas_bancos_02"
));

$proto6["m_sql"] = "tr_finanzas_bancos_02_id";
$proto6["m_srcTableName"] = "tr_finanzas_bancos_02";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_finanzas_bancos_01_id",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "tr_finanzas_bancos_02"
));

$proto8["m_sql"] = "tr_finanzas_bancos_01_id";
$proto8["m_srcTableName"] = "tr_finanzas_bancos_02";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "tr_finanzas_bancos_02"
));

$proto10["m_sql"] = "time_stamp";
$proto10["m_srcTableName"] = "tr_finanzas_bancos_02";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista_user",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "tr_finanzas_bancos_02"
));

$proto12["m_sql"] = "capturista_user";
$proto12["m_srcTableName"] = "tr_finanzas_bancos_02";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "tr_finanzas_bancos_02"
));

$proto14["m_sql"] = "vigente";
$proto14["m_srcTableName"] = "tr_finanzas_bancos_02";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_registro",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "tr_finanzas_bancos_02"
));

$proto16["m_sql"] = "fecha_de_registro";
$proto16["m_srcTableName"] = "tr_finanzas_bancos_02";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacion",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "tr_finanzas_bancos_02"
));

$proto18["m_sql"] = "Observacion";
$proto18["m_srcTableName"] = "tr_finanzas_bancos_02";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_centros_de_costos_id",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "tr_finanzas_bancos_02"
));

$proto20["m_sql"] = "cat_finanzas_centros_de_costos_id";
$proto20["m_srcTableName"] = "tr_finanzas_bancos_02";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "importe_centro_de_costos",
	"m_strTable" => "tr_finanzas_bancos_02",
	"m_srcTableName" => "tr_finanzas_bancos_02"
));

$proto22["m_sql"] = "importe_centro_de_costos";
$proto22["m_srcTableName"] = "tr_finanzas_bancos_02";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "tr_finanzas_bancos_02";
$proto25["m_srcTableName"] = "tr_finanzas_bancos_02";
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
$proto24["m_srcTableName"] = "tr_finanzas_bancos_02";
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
$proto0["m_srcTableName"]="tr_finanzas_bancos_02";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_finanzas_bancos_02 = createSqlQuery_tr_finanzas_bancos_02();


	
		;

									

$tdatatr_finanzas_bancos_02[".sqlquery"] = $queryData_tr_finanzas_bancos_02;



$tdatatr_finanzas_bancos_02[".hasEvents"] = false;

?>