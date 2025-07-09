<?php
$tdatacat_nominas_02_trabajadores = array();
$tdatacat_nominas_02_trabajadores[".searchableFields"] = array();
$tdatacat_nominas_02_trabajadores[".ShortName"] = "cat_nominas_02_trabajadores";
$tdatacat_nominas_02_trabajadores[".OwnerID"] = "";
$tdatacat_nominas_02_trabajadores[".OriginalTable"] = "cat_nominas_02_trabajadores";


$tdatacat_nominas_02_trabajadores[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_02_trabajadores[".originalPagesByType"] = $tdatacat_nominas_02_trabajadores[".pagesByType"];
$tdatacat_nominas_02_trabajadores[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_02_trabajadores[".originalPages"] = $tdatacat_nominas_02_trabajadores[".pages"];
$tdatacat_nominas_02_trabajadores[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_nominas_02_trabajadores[".originalDefaultPages"] = $tdatacat_nominas_02_trabajadores[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_02_trabajadores = array();
$fieldToolTipscat_nominas_02_trabajadores = array();
$pageTitlescat_nominas_02_trabajadores = array();
$placeHolderscat_nominas_02_trabajadores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_02_trabajadores["Spanish"] = array();
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"] = array();
	$placeHolderscat_nominas_02_trabajadores["Spanish"] = array();
	$pageTitlescat_nominas_02_trabajadores["Spanish"] = array();
	$fieldLabelscat_nominas_02_trabajadores["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_02_trabajadores["Spanish"]["vigente"] = "";
	$fieldLabelscat_nominas_02_trabajadores["Spanish"]["cat_trabajadores_altas_id"] = "Trabajador";
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_nominas_02_trabajadores["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_nominas_02_trabajadores["Spanish"]["cat_nominas_02_trabajadores_id"] = "id";
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"]["cat_nominas_02_trabajadores_id"] = "";
	$placeHolderscat_nominas_02_trabajadores["Spanish"]["cat_nominas_02_trabajadores_id"] = "";
	$fieldLabelscat_nominas_02_trabajadores["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_02_trabajadores["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_02_trabajadores["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_02_trabajadores["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_nominas_02_trabajadores["Spanish"]["cat_nominas_01_generales_uuid"] = "Uuid";
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$placeHolderscat_nominas_02_trabajadores["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$fieldLabelscat_nominas_02_trabajadores["Spanish"]["check_carga_masiva"] = "Check Carga Masiva";
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"]["check_carga_masiva"] = "";
	$placeHolderscat_nominas_02_trabajadores["Spanish"]["check_carga_masiva"] = "";
	$fieldLabelscat_nominas_02_trabajadores["Spanish"]["llave_trabajador_uuid"] = "Llave Trabajador Uuid";
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"]["llave_trabajador_uuid"] = "";
	$placeHolderscat_nominas_02_trabajadores["Spanish"]["llave_trabajador_uuid"] = "";
	$fieldLabelscat_nominas_02_trabajadores["Spanish"]["cat_trabajadores_puestos_id"] = "Cat Trabajadores Puestos Id";
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$placeHolderscat_nominas_02_trabajadores["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$fieldLabelscat_nominas_02_trabajadores["Spanish"]["cat_trabajadores_altas_id_empresa"] = "Id Empresa";
	$fieldToolTipscat_nominas_02_trabajadores["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderscat_nominas_02_trabajadores["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	if (count($fieldToolTipscat_nominas_02_trabajadores["Spanish"]))
		$tdatacat_nominas_02_trabajadores[".isUseToolTips"] = true;
}





$tdatacat_nominas_02_trabajadores[".shortTableName"] = "cat_nominas_02_trabajadores";
$tdatacat_nominas_02_trabajadores[".nSecOptions"] = 0;

$tdatacat_nominas_02_trabajadores[".mainTableOwnerID"] = "";
$tdatacat_nominas_02_trabajadores[".entityType"] = 0;
$tdatacat_nominas_02_trabajadores[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_02_trabajadores[".strOriginalTableName"] = "cat_nominas_02_trabajadores";

	



$tdatacat_nominas_02_trabajadores[".showAddInPopup"] = false;

$tdatacat_nominas_02_trabajadores[".showEditInPopup"] = false;

$tdatacat_nominas_02_trabajadores[".showViewInPopup"] = false;

$tdatacat_nominas_02_trabajadores[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_02_trabajadores[".listAjax"] = false;

	$tdatacat_nominas_02_trabajadores[".audit"] = false;

	$tdatacat_nominas_02_trabajadores[".locking"] = false;


$pages = $tdatacat_nominas_02_trabajadores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_02_trabajadores[".edit"] = true;
	$tdatacat_nominas_02_trabajadores[".afterEditAction"] = 1;
	$tdatacat_nominas_02_trabajadores[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_02_trabajadores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_02_trabajadores[".add"] = true;
$tdatacat_nominas_02_trabajadores[".afterAddAction"] = 1;
$tdatacat_nominas_02_trabajadores[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_02_trabajadores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_02_trabajadores[".list"] = true;
}



$tdatacat_nominas_02_trabajadores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_02_trabajadores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_02_trabajadores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_02_trabajadores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_02_trabajadores[".printFriendly"] = true;
}



$tdatacat_nominas_02_trabajadores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_02_trabajadores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_02_trabajadores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_02_trabajadores[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																								

$tdatacat_nominas_02_trabajadores[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_02_trabajadores[".buttonsAdded"] = false;

$tdatacat_nominas_02_trabajadores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_02_trabajadores[".isUseTimeForSearch"] = false;


$tdatacat_nominas_02_trabajadores[".badgeColor"] = "daa520";


$tdatacat_nominas_02_trabajadores[".allSearchFields"] = array();
$tdatacat_nominas_02_trabajadores[".filterFields"] = array();
$tdatacat_nominas_02_trabajadores[".requiredSearchFields"] = array();

$tdatacat_nominas_02_trabajadores[".googleLikeFields"] = array();
$tdatacat_nominas_02_trabajadores[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_02_trabajadores[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_nominas_02_trabajadores[".googleLikeFields"][] = "cat_nominas_02_trabajadores_id";
$tdatacat_nominas_02_trabajadores[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_02_trabajadores[".googleLikeFields"][] = "time_stamp";
$tdatacat_nominas_02_trabajadores[".googleLikeFields"][] = "cat_nominas_01_generales_uuid";
$tdatacat_nominas_02_trabajadores[".googleLikeFields"][] = "check_carga_masiva";
$tdatacat_nominas_02_trabajadores[".googleLikeFields"][] = "llave_trabajador_uuid";
$tdatacat_nominas_02_trabajadores[".googleLikeFields"][] = "cat_trabajadores_puestos_id";
$tdatacat_nominas_02_trabajadores[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";



$tdatacat_nominas_02_trabajadores[".tableType"] = "list";

$tdatacat_nominas_02_trabajadores[".printerPageOrientation"] = 0;
$tdatacat_nominas_02_trabajadores[".nPrinterPageScale"] = 100;

$tdatacat_nominas_02_trabajadores[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_02_trabajadores[".geocodingEnabled"] = false;





$tdatacat_nominas_02_trabajadores[".isResizeColumns"] = true;





$tdatacat_nominas_02_trabajadores[".pageSize"] = 20;

$tdatacat_nominas_02_trabajadores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_02_trabajadores[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_02_trabajadores[".orderindexes"] = array();


$tdatacat_nominas_02_trabajadores[".sqlHead"] = "SELECT cat_nominas_02_trabajadores.vigente,  cat_nominas_02_trabajadores.cat_trabajadores_altas_id,  cat_nominas_02_trabajadores.cat_nominas_02_trabajadores_id,  cat_nominas_02_trabajadores.capturista,  cat_nominas_02_trabajadores.time_stamp,  cat_nominas_02_trabajadores.cat_nominas_01_generales_uuid,  cat_nominas_02_trabajadores.check_carga_masiva,  cat_nominas_02_trabajadores.llave_trabajador_uuid,  cat_nominas_02_trabajadores.cat_trabajadores_puestos_id,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$tdatacat_nominas_02_trabajadores[".sqlFrom"] = "FROM cat_nominas_02_trabajadores  INNER JOIN cat_trabajadores_altas ON cat_nominas_02_trabajadores.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$tdatacat_nominas_02_trabajadores[".sqlWhereExpr"] = "";
$tdatacat_nominas_02_trabajadores[".sqlTail"] = "";

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
$tdatacat_nominas_02_trabajadores[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_02_trabajadores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_02_trabajadores[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_02_trabajadores[".highlightSearchResults"] = true;

$tableKeyscat_nominas_02_trabajadores = array();
$tableKeyscat_nominas_02_trabajadores[] = "cat_nominas_02_trabajadores_id";
$tdatacat_nominas_02_trabajadores[".Keys"] = $tableKeyscat_nominas_02_trabajadores;


$tdatacat_nominas_02_trabajadores[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_02_trabajadores";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_trabajadores","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_trabajadores.vigente";

	
	
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


	$tdatacat_nominas_02_trabajadores["vigente"] = $fdata;
		$tdatacat_nominas_02_trabajadores[".searchableFields"][] = "vigente";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_nominas_02_trabajadores";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_trabajadores","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_trabajadores.cat_trabajadores_altas_id";

	
	
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
	$edata["LookupTable"] = "box_cat_trabajadores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_trabajadores_altas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatacat_nominas_02_trabajadores["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_nominas_02_trabajadores[".searchableFields"][] = "cat_trabajadores_altas_id";
//	cat_nominas_02_trabajadores_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_nominas_02_trabajadores_id";
	$fdata["GoodName"] = "cat_nominas_02_trabajadores_id";
	$fdata["ownerTable"] = "cat_nominas_02_trabajadores";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_trabajadores","cat_nominas_02_trabajadores_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_02_trabajadores_id";

		$fdata["sourceSingle"] = "cat_nominas_02_trabajadores_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_trabajadores.cat_nominas_02_trabajadores_id";

	
	
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


	$tdatacat_nominas_02_trabajadores["cat_nominas_02_trabajadores_id"] = $fdata;
		$tdatacat_nominas_02_trabajadores[".searchableFields"][] = "cat_nominas_02_trabajadores_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_02_trabajadores";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_trabajadores","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_trabajadores.capturista";

	
	
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


	$tdatacat_nominas_02_trabajadores["capturista"] = $fdata;
		$tdatacat_nominas_02_trabajadores[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_02_trabajadores";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_trabajadores","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_trabajadores.time_stamp";

	
	
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


	$tdatacat_nominas_02_trabajadores["time_stamp"] = $fdata;
		$tdatacat_nominas_02_trabajadores[".searchableFields"][] = "time_stamp";
//	cat_nominas_01_generales_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_nominas_01_generales_uuid";
	$fdata["GoodName"] = "cat_nominas_01_generales_uuid";
	$fdata["ownerTable"] = "cat_nominas_02_trabajadores";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_trabajadores","cat_nominas_01_generales_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_nominas_01_generales_uuid";

		$fdata["sourceSingle"] = "cat_nominas_01_generales_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_trabajadores.cat_nominas_01_generales_uuid";

	
	
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


	$tdatacat_nominas_02_trabajadores["cat_nominas_01_generales_uuid"] = $fdata;
		$tdatacat_nominas_02_trabajadores[".searchableFields"][] = "cat_nominas_01_generales_uuid";
//	check_carga_masiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "check_carga_masiva";
	$fdata["GoodName"] = "check_carga_masiva";
	$fdata["ownerTable"] = "cat_nominas_02_trabajadores";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_trabajadores","check_carga_masiva");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "check_carga_masiva";

		$fdata["sourceSingle"] = "check_carga_masiva";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_trabajadores.check_carga_masiva";

	
	
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


	$tdatacat_nominas_02_trabajadores["check_carga_masiva"] = $fdata;
		$tdatacat_nominas_02_trabajadores[".searchableFields"][] = "check_carga_masiva";
//	llave_trabajador_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "llave_trabajador_uuid";
	$fdata["GoodName"] = "llave_trabajador_uuid";
	$fdata["ownerTable"] = "cat_nominas_02_trabajadores";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_trabajadores","llave_trabajador_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_trabajador_uuid";

		$fdata["sourceSingle"] = "llave_trabajador_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_trabajadores.llave_trabajador_uuid";

	
	
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


	$tdatacat_nominas_02_trabajadores["llave_trabajador_uuid"] = $fdata;
		$tdatacat_nominas_02_trabajadores[".searchableFields"][] = "llave_trabajador_uuid";
//	cat_trabajadores_puestos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_trabajadores_puestos_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_id";
	$fdata["ownerTable"] = "cat_nominas_02_trabajadores";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_trabajadores","cat_trabajadores_puestos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_puestos_id";

		$fdata["sourceSingle"] = "cat_trabajadores_puestos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_trabajadores.cat_trabajadores_puestos_id";

	
	
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


	$tdatacat_nominas_02_trabajadores["cat_trabajadores_puestos_id"] = $fdata;
		$tdatacat_nominas_02_trabajadores[".searchableFields"][] = "cat_trabajadores_puestos_id";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_trabajadores","cat_trabajadores_altas_id_empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id_empresa";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";

	
	
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


	$tdatacat_nominas_02_trabajadores["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatacat_nominas_02_trabajadores[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";


$tables_data["cat_nominas_02_trabajadores"]=&$tdatacat_nominas_02_trabajadores;
$field_labels["cat_nominas_02_trabajadores"] = &$fieldLabelscat_nominas_02_trabajadores;
$fieldToolTips["cat_nominas_02_trabajadores"] = &$fieldToolTipscat_nominas_02_trabajadores;
$placeHolders["cat_nominas_02_trabajadores"] = &$placeHolderscat_nominas_02_trabajadores;
$page_titles["cat_nominas_02_trabajadores"] = &$pageTitlescat_nominas_02_trabajadores;


changeTextControlsToDate( "cat_nominas_02_trabajadores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_02_trabajadores"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_02_trabajadores"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cat_nominas_01_generales";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cat_nominas_01_generales";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cat_nominas_01_generales";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cat_nominas_02_trabajadores"][0] = $masterParams;
				$masterTablesData["cat_nominas_02_trabajadores"][0]["masterKeys"] = array();
	$masterTablesData["cat_nominas_02_trabajadores"][0]["masterKeys"][]="cat_nominas_01_generales_uuid";
				$masterTablesData["cat_nominas_02_trabajadores"][0]["detailKeys"] = array();
	$masterTablesData["cat_nominas_02_trabajadores"][0]["detailKeys"][]="cat_nominas_01_generales_uuid";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_02_trabajadores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_nominas_02_trabajadores.vigente,  cat_nominas_02_trabajadores.cat_trabajadores_altas_id,  cat_nominas_02_trabajadores.cat_nominas_02_trabajadores_id,  cat_nominas_02_trabajadores.capturista,  cat_nominas_02_trabajadores.time_stamp,  cat_nominas_02_trabajadores.cat_nominas_01_generales_uuid,  cat_nominas_02_trabajadores.check_carga_masiva,  cat_nominas_02_trabajadores.llave_trabajador_uuid,  cat_nominas_02_trabajadores.cat_trabajadores_puestos_id,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto0["m_strFrom"] = "FROM cat_nominas_02_trabajadores  INNER JOIN cat_trabajadores_altas ON cat_nominas_02_trabajadores.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
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
	"m_strTable" => "cat_nominas_02_trabajadores",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto6["m_sql"] = "cat_nominas_02_trabajadores.vigente";
$proto6["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_nominas_02_trabajadores",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto8["m_sql"] = "cat_nominas_02_trabajadores.cat_trabajadores_altas_id";
$proto8["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_02_trabajadores_id",
	"m_strTable" => "cat_nominas_02_trabajadores",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto10["m_sql"] = "cat_nominas_02_trabajadores.cat_nominas_02_trabajadores_id";
$proto10["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_02_trabajadores",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto12["m_sql"] = "cat_nominas_02_trabajadores.capturista";
$proto12["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_02_trabajadores",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto14["m_sql"] = "cat_nominas_02_trabajadores.time_stamp";
$proto14["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_01_generales_uuid",
	"m_strTable" => "cat_nominas_02_trabajadores",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto16["m_sql"] = "cat_nominas_02_trabajadores.cat_nominas_01_generales_uuid";
$proto16["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "check_carga_masiva",
	"m_strTable" => "cat_nominas_02_trabajadores",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto18["m_sql"] = "cat_nominas_02_trabajadores.check_carga_masiva";
$proto18["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_trabajador_uuid",
	"m_strTable" => "cat_nominas_02_trabajadores",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto20["m_sql"] = "cat_nominas_02_trabajadores.llave_trabajador_uuid";
$proto20["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_puestos_id",
	"m_strTable" => "cat_nominas_02_trabajadores",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto22["m_sql"] = "cat_nominas_02_trabajadores.cat_trabajadores_puestos_id";
$proto22["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto24["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto24["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "cat_nominas_02_trabajadores";
$proto27["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "vigente";
$proto27["m_columns"][] = "cat_trabajadores_altas_id";
$proto27["m_columns"][] = "cat_nominas_02_trabajadores_id";
$proto27["m_columns"][] = "capturista";
$proto27["m_columns"][] = "time_stamp";
$proto27["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto27["m_columns"][] = "check_carga_masiva";
$proto27["m_columns"][] = "llave_trabajador_uuid";
$proto27["m_columns"][] = "cat_trabajadores_puestos_id";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "cat_nominas_02_trabajadores";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "cat_trabajadores_altas";
$proto31["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "cat_trabajadores_altas_id";
$proto31["m_columns"][] = "time_stamp";
$proto31["m_columns"][] = "capturista";
$proto31["m_columns"][] = "vigente";
$proto31["m_columns"][] = "fecha_de_registro";
$proto31["m_columns"][] = "apellido_paterno";
$proto31["m_columns"][] = "apellido_materno";
$proto31["m_columns"][] = "primer_nombre";
$proto31["m_columns"][] = "segundo_nombre";
$proto31["m_columns"][] = "rfc";
$proto31["m_columns"][] = "curp";
$proto31["m_columns"][] = "num_seguridad_social";
$proto31["m_columns"][] = "municipio_nacimiento";
$proto31["m_columns"][] = "estado_nacimiento";
$proto31["m_columns"][] = "nacionalidad";
$proto31["m_columns"][] = "telefono_emergencia";
$proto31["m_columns"][] = "contacto_emergencia";
$proto31["m_columns"][] = "nombre_completo";
$proto31["m_columns"][] = "fecha_de_nacimiento";
$proto31["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto31["m_columns"][] = "celular_mensajes";
$proto31["m_columns"][] = "permiso_msm";
$proto31["m_columns"][] = "estatus";
$proto31["m_columns"][] = "fecha_de_captura";
$proto31["m_columns"][] = "face_id";
$proto31["m_columns"][] = "tr_tags_numero_asignado";
$proto31["m_columns"][] = "cat_trabajadores_puestos_id";
$proto31["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto31["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto31["m_columns"][] = "calle";
$proto31["m_columns"][] = "colonia";
$proto31["m_columns"][] = "municipio";
$proto31["m_columns"][] = "estado";
$proto31["m_columns"][] = "codigo_postal";
$proto31["m_columns"][] = "banco";
$proto31["m_columns"][] = "cuenta_bancaria";
$proto31["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto31["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto31["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto31["m_columns"][] = "cat_holding_02_empresas";
$proto31["m_columns"][] = "fecha_de_ingreso";
$proto31["m_columns"][] = "numero_domicilio";
$proto31["m_columns"][] = "observaciones";
$proto31["m_columns"][] = "link_foto";
$proto31["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto31["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN cat_trabajadores_altas ON cat_nominas_02_trabajadores.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "cat_nominas_02_trabajadores";
$proto32=array();
$proto32["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id = cat_nominas_02_trabajadores.cat_trabajadores_altas_id";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_nominas_02_trabajadores"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= cat_nominas_02_trabajadores.cat_trabajadores_altas_id";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_nominas_02_trabajadores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_02_trabajadores = createSqlQuery_cat_nominas_02_trabajadores();


	
		;

										

$tdatacat_nominas_02_trabajadores[".sqlquery"] = $queryData_cat_nominas_02_trabajadores;



$tdatacat_nominas_02_trabajadores[".hasEvents"] = false;

?>