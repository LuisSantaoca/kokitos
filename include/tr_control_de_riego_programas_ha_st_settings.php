<?php
$tdatatr_control_de_riego_programas_ha_st = array();
$tdatatr_control_de_riego_programas_ha_st[".searchableFields"] = array();
$tdatatr_control_de_riego_programas_ha_st[".ShortName"] = "tr_control_de_riego_programas_ha_st";
$tdatatr_control_de_riego_programas_ha_st[".OwnerID"] = "";
$tdatatr_control_de_riego_programas_ha_st[".OriginalTable"] = "tr_control_de_riego_pulsos_01";


$tdatatr_control_de_riego_programas_ha_st[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatr_control_de_riego_programas_ha_st[".originalPagesByType"] = $tdatatr_control_de_riego_programas_ha_st[".pagesByType"];
$tdatatr_control_de_riego_programas_ha_st[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatr_control_de_riego_programas_ha_st[".originalPages"] = $tdatatr_control_de_riego_programas_ha_st[".pages"];
$tdatatr_control_de_riego_programas_ha_st[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatr_control_de_riego_programas_ha_st[".originalDefaultPages"] = $tdatatr_control_de_riego_programas_ha_st[".defaultPages"];

//	field labels
$fieldLabelstr_control_de_riego_programas_ha_st = array();
$fieldToolTipstr_control_de_riego_programas_ha_st = array();
$pageTitlestr_control_de_riego_programas_ha_st = array();
$placeHolderstr_control_de_riego_programas_ha_st = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_control_de_riego_programas_ha_st["Spanish"] = array();
	$fieldToolTipstr_control_de_riego_programas_ha_st["Spanish"] = array();
	$placeHolderstr_control_de_riego_programas_ha_st["Spanish"] = array();
	$pageTitlestr_control_de_riego_programas_ha_st["Spanish"] = array();
	$fieldLabelstr_control_de_riego_programas_ha_st["Spanish"]["cat_control_riego_programa_id"] = "Cat Control Riego Programa Id";
	$fieldToolTipstr_control_de_riego_programas_ha_st["Spanish"]["cat_control_riego_programa_id"] = "";
	$placeHolderstr_control_de_riego_programas_ha_st["Spanish"]["cat_control_riego_programa_id"] = "";
	$fieldLabelstr_control_de_riego_programas_ha_st["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "Cat Holding 04 Unidades Productivas Lotes Id";
	$fieldToolTipstr_control_de_riego_programas_ha_st["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHolderstr_control_de_riego_programas_ha_st["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$fieldLabelstr_control_de_riego_programas_ha_st["Spanish"]["cat_produccion_cultivos_03_lotes_plantas_id"] = "Cat Produccion Cultivos 03 Lotes Plantas Id";
	$fieldToolTipstr_control_de_riego_programas_ha_st["Spanish"]["cat_produccion_cultivos_03_lotes_plantas_id"] = "";
	$placeHolderstr_control_de_riego_programas_ha_st["Spanish"]["cat_produccion_cultivos_03_lotes_plantas_id"] = "";
	$fieldLabelstr_control_de_riego_programas_ha_st["Spanish"]["numero_de_plantas"] = "Numero De Plantas";
	$fieldToolTipstr_control_de_riego_programas_ha_st["Spanish"]["numero_de_plantas"] = "";
	$placeHolderstr_control_de_riego_programas_ha_st["Spanish"]["numero_de_plantas"] = "";
	$fieldLabelstr_control_de_riego_programas_ha_st["Spanish"]["superficie_sembrada"] = "Superficie Sembrada";
	$fieldToolTipstr_control_de_riego_programas_ha_st["Spanish"]["superficie_sembrada"] = "";
	$placeHolderstr_control_de_riego_programas_ha_st["Spanish"]["superficie_sembrada"] = "";
	if (count($fieldToolTipstr_control_de_riego_programas_ha_st["Spanish"]))
		$tdatatr_control_de_riego_programas_ha_st[".isUseToolTips"] = true;
}





$tdatatr_control_de_riego_programas_ha_st[".shortTableName"] = "tr_control_de_riego_programas_ha_st";
$tdatatr_control_de_riego_programas_ha_st[".nSecOptions"] = 0;

$tdatatr_control_de_riego_programas_ha_st[".mainTableOwnerID"] = "";
$tdatatr_control_de_riego_programas_ha_st[".entityType"] = 1;
$tdatatr_control_de_riego_programas_ha_st[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_control_de_riego_programas_ha_st[".strOriginalTableName"] = "tr_control_de_riego_pulsos_01";

	



$tdatatr_control_de_riego_programas_ha_st[".showAddInPopup"] = false;

$tdatatr_control_de_riego_programas_ha_st[".showEditInPopup"] = false;

$tdatatr_control_de_riego_programas_ha_st[".showViewInPopup"] = false;

$tdatatr_control_de_riego_programas_ha_st[".listAjax"] = false;
//	temporary
//$tdatatr_control_de_riego_programas_ha_st[".listAjax"] = false;

	$tdatatr_control_de_riego_programas_ha_st[".audit"] = false;

	$tdatatr_control_de_riego_programas_ha_st[".locking"] = false;


$pages = $tdatatr_control_de_riego_programas_ha_st[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_control_de_riego_programas_ha_st[".edit"] = true;
	$tdatatr_control_de_riego_programas_ha_st[".afterEditAction"] = 1;
	$tdatatr_control_de_riego_programas_ha_st[".closePopupAfterEdit"] = 1;
	$tdatatr_control_de_riego_programas_ha_st[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_control_de_riego_programas_ha_st[".add"] = true;
$tdatatr_control_de_riego_programas_ha_st[".afterAddAction"] = 1;
$tdatatr_control_de_riego_programas_ha_st[".closePopupAfterAdd"] = 1;
$tdatatr_control_de_riego_programas_ha_st[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_control_de_riego_programas_ha_st[".list"] = true;
}



$tdatatr_control_de_riego_programas_ha_st[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_control_de_riego_programas_ha_st[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_control_de_riego_programas_ha_st[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_control_de_riego_programas_ha_st[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_control_de_riego_programas_ha_st[".printFriendly"] = true;
}



$tdatatr_control_de_riego_programas_ha_st[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_control_de_riego_programas_ha_st[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_control_de_riego_programas_ha_st[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_control_de_riego_programas_ha_st[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_control_de_riego_programas_ha_st[".ajaxCodeSnippetAdded"] = false;

$tdatatr_control_de_riego_programas_ha_st[".buttonsAdded"] = false;

$tdatatr_control_de_riego_programas_ha_st[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_control_de_riego_programas_ha_st[".isUseTimeForSearch"] = false;


$tdatatr_control_de_riego_programas_ha_st[".badgeColor"] = "DB7093";


$tdatatr_control_de_riego_programas_ha_st[".allSearchFields"] = array();
$tdatatr_control_de_riego_programas_ha_st[".filterFields"] = array();
$tdatatr_control_de_riego_programas_ha_st[".requiredSearchFields"] = array();

$tdatatr_control_de_riego_programas_ha_st[".googleLikeFields"] = array();
$tdatatr_control_de_riego_programas_ha_st[".googleLikeFields"][] = "cat_control_riego_programa_id";
$tdatatr_control_de_riego_programas_ha_st[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatatr_control_de_riego_programas_ha_st[".googleLikeFields"][] = "cat_produccion_cultivos_03_lotes_plantas_id";
$tdatatr_control_de_riego_programas_ha_st[".googleLikeFields"][] = "numero_de_plantas";
$tdatatr_control_de_riego_programas_ha_st[".googleLikeFields"][] = "superficie_sembrada";



$tdatatr_control_de_riego_programas_ha_st[".tableType"] = "list";

$tdatatr_control_de_riego_programas_ha_st[".printerPageOrientation"] = 0;
$tdatatr_control_de_riego_programas_ha_st[".nPrinterPageScale"] = 100;

$tdatatr_control_de_riego_programas_ha_st[".nPrinterSplitRecords"] = 40;

$tdatatr_control_de_riego_programas_ha_st[".geocodingEnabled"] = false;





$tdatatr_control_de_riego_programas_ha_st[".isResizeColumns"] = true;





$tdatatr_control_de_riego_programas_ha_st[".pageSize"] = 20;

$tdatatr_control_de_riego_programas_ha_st[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_control_de_riego_programas_ha_st[".strOrderBy"] = $tstrOrderBy;

$tdatatr_control_de_riego_programas_ha_st[".orderindexes"] = array();


$tdatatr_control_de_riego_programas_ha_st[".sqlHead"] = "SELECT tr_control_de_riego_pulsos_01.cat_control_riego_programa_id,  tr_control_de_riego_pulsos_02_lotes.cat_holding_04_unidades_productivas_lotes_id,  cat_produccion_cultivos_03_lotes_plantas.cat_produccion_cultivos_03_lotes_plantas_id,  cat_produccion_cultivos_03_lotes_plantas.numero_de_plantas,  cat_produccion_cultivos_03_lotes_plantas.superficie_sembrada";
$tdatatr_control_de_riego_programas_ha_st[".sqlFrom"] = "FROM tr_control_de_riego_pulsos_01  LEFT OUTER JOIN tr_control_de_riego_pulsos_02_lotes ON tr_control_de_riego_pulsos_01.tr_control_de_riego_pulsos_01_uuid = tr_control_de_riego_pulsos_02_lotes.tr_control_de_riego_pulsos_01_uuid  LEFT OUTER JOIN cat_holding_04_unidades_productivas_lotes ON tr_control_de_riego_pulsos_02_lotes.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id  LEFT OUTER JOIN cat_produccion_cultivos_03_lotes_plantas ON cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id = cat_produccion_cultivos_03_lotes_plantas.cat_holding_04_unidades_productivas_lotes_id";
$tdatatr_control_de_riego_programas_ha_st[".sqlWhereExpr"] = "";
$tdatatr_control_de_riego_programas_ha_st[".sqlTail"] = "";

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
$tdatatr_control_de_riego_programas_ha_st[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_control_de_riego_programas_ha_st[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_control_de_riego_programas_ha_st[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_control_de_riego_programas_ha_st[".highlightSearchResults"] = true;

$tableKeystr_control_de_riego_programas_ha_st = array();
$tdatatr_control_de_riego_programas_ha_st[".Keys"] = $tableKeystr_control_de_riego_programas_ha_st;


$tdatatr_control_de_riego_programas_ha_st[".hideMobileList"] = array();




//	cat_control_riego_programa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_control_riego_programa_id";
	$fdata["GoodName"] = "cat_control_riego_programa_id";
	$fdata["ownerTable"] = "tr_control_de_riego_pulsos_01";
	$fdata["Label"] = GetFieldLabel("tr_control_de_riego_programas_ha_st","cat_control_riego_programa_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_control_riego_programa_id";

		$fdata["sourceSingle"] = "cat_control_riego_programa_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_control_de_riego_pulsos_01.cat_control_riego_programa_id";

	
	
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


	$tdatatr_control_de_riego_programas_ha_st["cat_control_riego_programa_id"] = $fdata;
		$tdatatr_control_de_riego_programas_ha_st[".searchableFields"][] = "cat_control_riego_programa_id";
//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "tr_control_de_riego_pulsos_02_lotes";
	$fdata["Label"] = GetFieldLabel("tr_control_de_riego_programas_ha_st","cat_holding_04_unidades_productivas_lotes_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_04_unidades_productivas_lotes_id";

		$fdata["sourceSingle"] = "cat_holding_04_unidades_productivas_lotes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_control_de_riego_pulsos_02_lotes.cat_holding_04_unidades_productivas_lotes_id";

	
	
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


	$tdatatr_control_de_riego_programas_ha_st["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatatr_control_de_riego_programas_ha_st[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
//	cat_produccion_cultivos_03_lotes_plantas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_produccion_cultivos_03_lotes_plantas_id";
	$fdata["GoodName"] = "cat_produccion_cultivos_03_lotes_plantas_id";
	$fdata["ownerTable"] = "cat_produccion_cultivos_03_lotes_plantas";
	$fdata["Label"] = GetFieldLabel("tr_control_de_riego_programas_ha_st","cat_produccion_cultivos_03_lotes_plantas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_produccion_cultivos_03_lotes_plantas_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_cultivos_03_lotes_plantas.cat_produccion_cultivos_03_lotes_plantas_id";

	
	
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


	$tdatatr_control_de_riego_programas_ha_st["cat_produccion_cultivos_03_lotes_plantas_id"] = $fdata;
		$tdatatr_control_de_riego_programas_ha_st[".searchableFields"][] = "cat_produccion_cultivos_03_lotes_plantas_id";
//	numero_de_plantas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "numero_de_plantas";
	$fdata["GoodName"] = "numero_de_plantas";
	$fdata["ownerTable"] = "cat_produccion_cultivos_03_lotes_plantas";
	$fdata["Label"] = GetFieldLabel("tr_control_de_riego_programas_ha_st","numero_de_plantas");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "numero_de_plantas";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_cultivos_03_lotes_plantas.numero_de_plantas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatatr_control_de_riego_programas_ha_st["numero_de_plantas"] = $fdata;
		$tdatatr_control_de_riego_programas_ha_st[".searchableFields"][] = "numero_de_plantas";
//	superficie_sembrada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "superficie_sembrada";
	$fdata["GoodName"] = "superficie_sembrada";
	$fdata["ownerTable"] = "cat_produccion_cultivos_03_lotes_plantas";
	$fdata["Label"] = GetFieldLabel("tr_control_de_riego_programas_ha_st","superficie_sembrada");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "superficie_sembrada";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_cultivos_03_lotes_plantas.superficie_sembrada";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatatr_control_de_riego_programas_ha_st["superficie_sembrada"] = $fdata;
		$tdatatr_control_de_riego_programas_ha_st[".searchableFields"][] = "superficie_sembrada";


$tables_data["tr_control_de_riego_programas_ha_st"]=&$tdatatr_control_de_riego_programas_ha_st;
$field_labels["tr_control_de_riego_programas_ha_st"] = &$fieldLabelstr_control_de_riego_programas_ha_st;
$fieldToolTips["tr_control_de_riego_programas_ha_st"] = &$fieldToolTipstr_control_de_riego_programas_ha_st;
$placeHolders["tr_control_de_riego_programas_ha_st"] = &$placeHolderstr_control_de_riego_programas_ha_st;
$page_titles["tr_control_de_riego_programas_ha_st"] = &$pageTitlestr_control_de_riego_programas_ha_st;


changeTextControlsToDate( "tr_control_de_riego_programas_ha_st" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_control_de_riego_programas_ha_st"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_control_de_riego_programas_ha_st"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_control_de_riego_programas_ha_st()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_control_de_riego_pulsos_01.cat_control_riego_programa_id,  tr_control_de_riego_pulsos_02_lotes.cat_holding_04_unidades_productivas_lotes_id,  cat_produccion_cultivos_03_lotes_plantas.cat_produccion_cultivos_03_lotes_plantas_id,  cat_produccion_cultivos_03_lotes_plantas.numero_de_plantas,  cat_produccion_cultivos_03_lotes_plantas.superficie_sembrada";
$proto0["m_strFrom"] = "FROM tr_control_de_riego_pulsos_01  LEFT OUTER JOIN tr_control_de_riego_pulsos_02_lotes ON tr_control_de_riego_pulsos_01.tr_control_de_riego_pulsos_01_uuid = tr_control_de_riego_pulsos_02_lotes.tr_control_de_riego_pulsos_01_uuid  LEFT OUTER JOIN cat_holding_04_unidades_productivas_lotes ON tr_control_de_riego_pulsos_02_lotes.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id  LEFT OUTER JOIN cat_produccion_cultivos_03_lotes_plantas ON cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id = cat_produccion_cultivos_03_lotes_plantas.cat_holding_04_unidades_productivas_lotes_id";
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
	"m_strName" => "cat_control_riego_programa_id",
	"m_strTable" => "tr_control_de_riego_pulsos_01",
	"m_srcTableName" => "tr_control_de_riego_programas_ha_st"
));

$proto6["m_sql"] = "tr_control_de_riego_pulsos_01.cat_control_riego_programa_id";
$proto6["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "tr_control_de_riego_pulsos_02_lotes",
	"m_srcTableName" => "tr_control_de_riego_programas_ha_st"
));

$proto8["m_sql"] = "tr_control_de_riego_pulsos_02_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto8["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_cultivos_03_lotes_plantas_id",
	"m_strTable" => "cat_produccion_cultivos_03_lotes_plantas",
	"m_srcTableName" => "tr_control_de_riego_programas_ha_st"
));

$proto10["m_sql"] = "cat_produccion_cultivos_03_lotes_plantas.cat_produccion_cultivos_03_lotes_plantas_id";
$proto10["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_de_plantas",
	"m_strTable" => "cat_produccion_cultivos_03_lotes_plantas",
	"m_srcTableName" => "tr_control_de_riego_programas_ha_st"
));

$proto12["m_sql"] = "cat_produccion_cultivos_03_lotes_plantas.numero_de_plantas";
$proto12["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "superficie_sembrada",
	"m_strTable" => "cat_produccion_cultivos_03_lotes_plantas",
	"m_srcTableName" => "tr_control_de_riego_programas_ha_st"
));

$proto14["m_sql"] = "cat_produccion_cultivos_03_lotes_plantas.superficie_sembrada";
$proto14["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tr_control_de_riego_pulsos_01";
$proto17["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "tr_control_de_riego_pulsos_01_id";
$proto17["m_columns"][] = "check_fertilizante_tr_control_de_riego_pulsos_01";
$proto17["m_columns"][] = "cat_control_riego_recetas_01_nombre_id";
$proto17["m_columns"][] = "tr_control_de_riego_pulsos_01_uuid";
$proto17["m_columns"][] = "cat_control_riego_programa_id";
$proto17["m_columns"][] = "cat_control_riego_cabezales_pulsos_id";
$proto17["m_columns"][] = "hora_pulso";
$proto17["m_columns"][] = "minutos";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "fecha_de_captura";
$proto17["m_columns"][] = "registro_detalle";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "metros_con_fertilizante";
$proto17["m_columns"][] = "metros_sin_fertilizante";
$proto17["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto17["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto17["m_columns"][] = "numero_de_riegos";
$proto17["m_columns"][] = "imei";
$proto17["m_columns"][] = "ph_tr_control_de_riego_pulsos_01";
$proto17["m_columns"][] = "ce_tr_control_de_riego_pulsos_01";
$proto17["m_columns"][] = "uuid";
$proto17["m_columns"][] = "cat_control_riego_cabezales_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tr_control_de_riego_pulsos_01";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
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
												$proto20=array();
$proto20["m_link"] = "SQLL_LEFTJOIN";
			$proto21=array();
$proto21["m_strName"] = "tr_control_de_riego_pulsos_02_lotes";
$proto21["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "tr_control_de_riego_pulsos_02_lotes_id";
$proto21["m_columns"][] = "tr_control_de_riego_pulsos_01_uuid";
$proto21["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "registro_detalle";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "LEFT OUTER JOIN tr_control_de_riego_pulsos_02_lotes ON tr_control_de_riego_pulsos_01.tr_control_de_riego_pulsos_01_uuid = tr_control_de_riego_pulsos_02_lotes.tr_control_de_riego_pulsos_01_uuid";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto22=array();
$proto22["m_sql"] = "tr_control_de_riego_pulsos_02_lotes.tr_control_de_riego_pulsos_01_uuid = tr_control_de_riego_pulsos_01.tr_control_de_riego_pulsos_01_uuid";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tr_control_de_riego_pulsos_01_uuid",
	"m_strTable" => "tr_control_de_riego_pulsos_02_lotes",
	"m_srcTableName" => "tr_control_de_riego_programas_ha_st"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= tr_control_de_riego_pulsos_01.tr_control_de_riego_pulsos_01_uuid";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_LEFTJOIN";
			$proto25=array();
$proto25["m_strName"] = "cat_holding_04_unidades_productivas_lotes";
$proto25["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto25["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto25["m_columns"][] = "cat_holding_03_empresas_registros_patronales_id";
$proto25["m_columns"][] = "cat_holding_02_empresas_id";
$proto25["m_columns"][] = "cat_holding_01_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "descripcion_lote";
$proto25["m_columns"][] = "Lat";
$proto25["m_columns"][] = "Lng";
$proto25["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_categorias_id";
$proto25["m_columns"][] = "cat_holding_03_empresas_up_group_predios_id";
$proto25["m_columns"][] = "cat_produccion_temporadas_id";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "LEFT OUTER JOIN cat_holding_04_unidades_productivas_lotes ON tr_control_de_riego_pulsos_02_lotes.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto26=array();
$proto26["m_sql"] = "cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id = tr_control_de_riego_pulsos_02_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "cat_holding_04_unidades_productivas_lotes",
	"m_srcTableName" => "tr_control_de_riego_programas_ha_st"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= tr_control_de_riego_pulsos_02_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strName"] = "cat_produccion_cultivos_03_lotes_plantas";
$proto29["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto29["m_columns"][] = "fecha_de_incio";
$proto29["m_columns"][] = "fecha_de_termino";
$proto29["m_columns"][] = "numero_de_plantas";
$proto29["m_columns"][] = "superficie_sembrada";
$proto29["m_columns"][] = "vigente";
$proto29["m_columns"][] = "cat_produccion_cultivos_03_lotes_plantas_id";
$proto29["m_columns"][] = "cat_produccion_cultivos_02_unidades_productivas_id";
$proto29["m_columns"][] = "capturista";
$proto29["m_columns"][] = "time_stamp";
$proto29["m_columns"][] = "cat_produccion_variedades_id";
$proto29["m_columns"][] = "cat_produccion_temporadas_id";
$proto29["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT OUTER JOIN cat_produccion_cultivos_03_lotes_plantas ON cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id = cat_produccion_cultivos_03_lotes_plantas.cat_holding_04_unidades_productivas_lotes_id";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "tr_control_de_riego_programas_ha_st";
$proto30=array();
$proto30["m_sql"] = "cat_produccion_cultivos_03_lotes_plantas.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "cat_produccion_cultivos_03_lotes_plantas",
	"m_srcTableName" => "tr_control_de_riego_programas_ha_st"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_control_de_riego_programas_ha_st";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_control_de_riego_programas_ha_st = createSqlQuery_tr_control_de_riego_programas_ha_st();


	
		;

					

$tdatatr_control_de_riego_programas_ha_st[".sqlquery"] = $queryData_tr_control_de_riego_programas_ha_st;



$tdatatr_control_de_riego_programas_ha_st[".hasEvents"] = false;

?>