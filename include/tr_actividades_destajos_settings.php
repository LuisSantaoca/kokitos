<?php
$tdatatr_actividades_destajos = array();
$tdatatr_actividades_destajos[".searchableFields"] = array();
$tdatatr_actividades_destajos[".ShortName"] = "tr_actividades_destajos";
$tdatatr_actividades_destajos[".OwnerID"] = "";
$tdatatr_actividades_destajos[".OriginalTable"] = "tr_actividades_destajos";


$tdatatr_actividades_destajos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_destajos[".originalPagesByType"] = $tdatatr_actividades_destajos[".pagesByType"];
$tdatatr_actividades_destajos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_destajos[".originalPages"] = $tdatatr_actividades_destajos[".pages"];
$tdatatr_actividades_destajos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatr_actividades_destajos[".originalDefaultPages"] = $tdatatr_actividades_destajos[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_destajos = array();
$fieldToolTipstr_actividades_destajos = array();
$pageTitlestr_actividades_destajos = array();
$placeHolderstr_actividades_destajos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_destajos["Spanish"] = array();
	$fieldToolTipstr_actividades_destajos["Spanish"] = array();
	$placeHolderstr_actividades_destajos["Spanish"] = array();
	$pageTitlestr_actividades_destajos["Spanish"] = array();
	$fieldLabelstr_actividades_destajos["Spanish"]["cat_trabajadores_altas_id"] = "Id Trabajadores";
	$fieldToolTipstr_actividades_destajos["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipstr_actividades_destajos["Spanish"]["cantidad"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["cantidad"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "Rancho";
	$fieldToolTipstr_actividades_destajos["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["tr_actividades_destajos_id"] = "Tr Actividades Destajos Id";
	$fieldToolTipstr_actividades_destajos["Spanish"]["tr_actividades_destajos_id"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["tr_actividades_destajos_id"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "Lote";
	$fieldToolTipstr_actividades_destajos["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["supervisor_id"] = "Supervisor Id";
	$fieldToolTipstr_actividades_destajos["Spanish"]["supervisor_id"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["supervisor_id"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["fecha_de_captura"] = "Fecha De Captura";
	$fieldToolTipstr_actividades_destajos["Spanish"]["fecha_de_captura"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["observacion"] = "Observacion";
	$fieldToolTipstr_actividades_destajos["Spanish"]["observacion"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["observacion"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["cat_actividades_unidades_de_costo_id"] = "Unidad de Costo";
	$fieldToolTipstr_actividades_destajos["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["costo"] = "Costo";
	$fieldToolTipstr_actividades_destajos["Spanish"]["costo"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["costo"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["tunel"] = "Tunel";
	$fieldToolTipstr_actividades_destajos["Spanish"]["tunel"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["tunel"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_actividades_destajos["Spanish"]["vigente"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["vigente"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_actividades_destajos["Spanish"]["capturista"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["capturista"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["cat_actividades_especificas_id"] = "Actividades";
	$fieldToolTipstr_actividades_destajos["Spanish"]["cat_actividades_especificas_id"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["cat_actividades_especificas_id"] = "";
	$fieldLabelstr_actividades_destajos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_actividades_destajos["Spanish"]["time_stamp"] = "";
	$placeHolderstr_actividades_destajos["Spanish"]["time_stamp"] = "";
	if (count($fieldToolTipstr_actividades_destajos["Spanish"]))
		$tdatatr_actividades_destajos[".isUseToolTips"] = true;
}





$tdatatr_actividades_destajos[".shortTableName"] = "tr_actividades_destajos";
$tdatatr_actividades_destajos[".nSecOptions"] = 0;

$tdatatr_actividades_destajos[".mainTableOwnerID"] = "";
$tdatatr_actividades_destajos[".entityType"] = 0;
$tdatatr_actividades_destajos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_destajos[".strOriginalTableName"] = "tr_actividades_destajos";

	



$tdatatr_actividades_destajos[".showAddInPopup"] = false;

$tdatatr_actividades_destajos[".showEditInPopup"] = false;

$tdatatr_actividades_destajos[".showViewInPopup"] = false;

$tdatatr_actividades_destajos[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_destajos[".listAjax"] = false;

	$tdatatr_actividades_destajos[".audit"] = false;

	$tdatatr_actividades_destajos[".locking"] = false;


$pages = $tdatatr_actividades_destajos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_destajos[".edit"] = true;
	$tdatatr_actividades_destajos[".afterEditAction"] = 1;
	$tdatatr_actividades_destajos[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_destajos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_destajos[".add"] = true;
$tdatatr_actividades_destajos[".afterAddAction"] = 1;
$tdatatr_actividades_destajos[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_destajos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_destajos[".list"] = true;
}



$tdatatr_actividades_destajos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_destajos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_destajos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_destajos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_destajos[".printFriendly"] = true;
}



$tdatatr_actividades_destajos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_destajos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_destajos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_destajos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_actividades_destajos[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_destajos[".buttonsAdded"] = false;

$tdatatr_actividades_destajos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_actividades_destajos[".isUseTimeForSearch"] = false;


$tdatatr_actividades_destajos[".badgeColor"] = "00C2C5";


$tdatatr_actividades_destajos[".allSearchFields"] = array();
$tdatatr_actividades_destajos[".filterFields"] = array();
$tdatatr_actividades_destajos[".requiredSearchFields"] = array();

$tdatatr_actividades_destajos[".googleLikeFields"] = array();
$tdatatr_actividades_destajos[".googleLikeFields"][] = "tr_actividades_destajos_id";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "supervisor_id";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "fecha_de_captura";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "observacion";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "cat_actividades_unidades_de_costo_id";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "cantidad";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "costo";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "tunel";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "vigente";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "capturista";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "cat_actividades_especificas_id";
$tdatatr_actividades_destajos[".googleLikeFields"][] = "time_stamp";



$tdatatr_actividades_destajos[".tableType"] = "list";

$tdatatr_actividades_destajos[".printerPageOrientation"] = 0;
$tdatatr_actividades_destajos[".nPrinterPageScale"] = 100;

$tdatatr_actividades_destajos[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_destajos[".geocodingEnabled"] = false;





$tdatatr_actividades_destajos[".isResizeColumns"] = true;





$tdatatr_actividades_destajos[".pageSize"] = 20;

$tdatatr_actividades_destajos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_actividades_destajos[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_destajos[".orderindexes"] = array();


$tdatatr_actividades_destajos[".sqlHead"] = "SELECT tr_actividades_destajos_id,  cat_holding_03_empresas_unidades_productivas_id,  cat_holding_04_unidades_productivas_lotes_id,  supervisor_id,  fecha_de_captura,  observacion,  cat_trabajadores_altas_id,  cat_actividades_unidades_de_costo_id,  cantidad,  costo,  tunel,  vigente,  capturista,  cat_actividades_especificas_id,  time_stamp";
$tdatatr_actividades_destajos[".sqlFrom"] = "FROM tr_actividades_destajos";
$tdatatr_actividades_destajos[".sqlWhereExpr"] = "";
$tdatatr_actividades_destajos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_destajos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_destajos[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_destajos[".highlightSearchResults"] = true;

$tableKeystr_actividades_destajos = array();
$tableKeystr_actividades_destajos[] = "tr_actividades_destajos_id";
$tdatatr_actividades_destajos[".Keys"] = $tableKeystr_actividades_destajos;


$tdatatr_actividades_destajos[".hideMobileList"] = array();




//	tr_actividades_destajos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_actividades_destajos_id";
	$fdata["GoodName"] = "tr_actividades_destajos_id";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","tr_actividades_destajos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_actividades_destajos_id";

		$fdata["sourceSingle"] = "tr_actividades_destajos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_destajos_id";

	
	
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


	$tdatatr_actividades_destajos["tr_actividades_destajos_id"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "tr_actividades_destajos_id";
//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","cat_holding_03_empresas_unidades_productivas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_03_empresas_unidades_productivas_id";

		$fdata["sourceSingle"] = "cat_holding_03_empresas_unidades_productivas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_03_empresas_unidades_productivas_id";

	
	
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


	$tdatatr_actividades_destajos["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","cat_holding_04_unidades_productivas_lotes_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_04_unidades_productivas_lotes_id";

		$fdata["sourceSingle"] = "cat_holding_04_unidades_productivas_lotes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_04_unidades_productivas_lotes_id";

	
	
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


	$tdatatr_actividades_destajos["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
//	supervisor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "supervisor_id";
	$fdata["GoodName"] = "supervisor_id";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","supervisor_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "supervisor_id";

		$fdata["sourceSingle"] = "supervisor_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "supervisor_id";

	
	
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


	$tdatatr_actividades_destajos["supervisor_id"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "supervisor_id";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_captura";

	
	
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


	$tdatatr_actividades_destajos["fecha_de_captura"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "fecha_de_captura";
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","observacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observacion";

		$fdata["sourceSingle"] = "observacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observacion";

	
	
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


	$tdatatr_actividades_destajos["observacion"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "observacion";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas_id";

	
	
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


	$tdatatr_actividades_destajos["cat_trabajadores_altas_id"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "cat_trabajadores_altas_id";
//	cat_actividades_unidades_de_costo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["GoodName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","cat_actividades_unidades_de_costo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_unidades_de_costo_id";

		$fdata["sourceSingle"] = "cat_actividades_unidades_de_costo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_unidades_de_costo_id";

	
	
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


	$tdatatr_actividades_destajos["cat_actividades_unidades_de_costo_id"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "cat_actividades_unidades_de_costo_id";
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","cantidad");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cantidad";

		$fdata["sourceSingle"] = "cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad";

	
	
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


	$tdatatr_actividades_destajos["cantidad"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "cantidad";
//	costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "costo";
	$fdata["GoodName"] = "costo";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","costo");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "costo";

		$fdata["sourceSingle"] = "costo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costo";

	
	
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


	$tdatatr_actividades_destajos["costo"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "costo";
//	tunel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tunel";
	$fdata["GoodName"] = "tunel";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","tunel");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tunel";

		$fdata["sourceSingle"] = "tunel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tunel";

	
	
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


	$tdatatr_actividades_destajos["tunel"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "tunel";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","vigente");
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


	$tdatatr_actividades_destajos["vigente"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","capturista");
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


	$tdatatr_actividades_destajos["capturista"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "capturista";
//	cat_actividades_especificas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cat_actividades_especificas_id";
	$fdata["GoodName"] = "cat_actividades_especificas_id";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","cat_actividades_especificas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_especificas_id";

		$fdata["sourceSingle"] = "cat_actividades_especificas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas_id";

	
	
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


	$tdatatr_actividades_destajos["cat_actividades_especificas_id"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "cat_actividades_especificas_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_actividades_destajos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_destajos","time_stamp");
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


	$tdatatr_actividades_destajos["time_stamp"] = $fdata;
		$tdatatr_actividades_destajos[".searchableFields"][] = "time_stamp";


$tables_data["tr_actividades_destajos"]=&$tdatatr_actividades_destajos;
$field_labels["tr_actividades_destajos"] = &$fieldLabelstr_actividades_destajos;
$fieldToolTips["tr_actividades_destajos"] = &$fieldToolTipstr_actividades_destajos;
$placeHolders["tr_actividades_destajos"] = &$placeHolderstr_actividades_destajos;
$page_titles["tr_actividades_destajos"] = &$pageTitlestr_actividades_destajos;


changeTextControlsToDate( "tr_actividades_destajos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_destajos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_destajos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_destajos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_actividades_destajos_id,  cat_holding_03_empresas_unidades_productivas_id,  cat_holding_04_unidades_productivas_lotes_id,  supervisor_id,  fecha_de_captura,  observacion,  cat_trabajadores_altas_id,  cat_actividades_unidades_de_costo_id,  cantidad,  costo,  tunel,  vigente,  capturista,  cat_actividades_especificas_id,  time_stamp";
$proto0["m_strFrom"] = "FROM tr_actividades_destajos";
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
	"m_strName" => "tr_actividades_destajos_id",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto6["m_sql"] = "tr_actividades_destajos_id";
$proto6["m_srcTableName"] = "tr_actividades_destajos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto8["m_sql"] = "cat_holding_03_empresas_unidades_productivas_id";
$proto8["m_srcTableName"] = "tr_actividades_destajos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto10["m_sql"] = "cat_holding_04_unidades_productivas_lotes_id";
$proto10["m_srcTableName"] = "tr_actividades_destajos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "supervisor_id",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto12["m_sql"] = "supervisor_id";
$proto12["m_srcTableName"] = "tr_actividades_destajos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto14["m_sql"] = "fecha_de_captura";
$proto14["m_srcTableName"] = "tr_actividades_destajos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto16["m_sql"] = "observacion";
$proto16["m_srcTableName"] = "tr_actividades_destajos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto18["m_sql"] = "cat_trabajadores_altas_id";
$proto18["m_srcTableName"] = "tr_actividades_destajos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_unidades_de_costo_id",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto20["m_sql"] = "cat_actividades_unidades_de_costo_id";
$proto20["m_srcTableName"] = "tr_actividades_destajos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto22["m_sql"] = "cantidad";
$proto22["m_srcTableName"] = "tr_actividades_destajos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "costo",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto24["m_sql"] = "costo";
$proto24["m_srcTableName"] = "tr_actividades_destajos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tunel",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto26["m_sql"] = "tunel";
$proto26["m_srcTableName"] = "tr_actividades_destajos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto28["m_sql"] = "vigente";
$proto28["m_srcTableName"] = "tr_actividades_destajos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto30["m_sql"] = "capturista";
$proto30["m_srcTableName"] = "tr_actividades_destajos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_especificas_id",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto32["m_sql"] = "cat_actividades_especificas_id";
$proto32["m_srcTableName"] = "tr_actividades_destajos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_actividades_destajos",
	"m_srcTableName" => "tr_actividades_destajos"
));

$proto34["m_sql"] = "time_stamp";
$proto34["m_srcTableName"] = "tr_actividades_destajos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "tr_actividades_destajos";
$proto37["m_srcTableName"] = "tr_actividades_destajos";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "tr_actividades_destajos_id";
$proto37["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto37["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto37["m_columns"][] = "supervisor_id";
$proto37["m_columns"][] = "fecha_de_captura";
$proto37["m_columns"][] = "observacion";
$proto37["m_columns"][] = "cat_trabajadores_altas_id";
$proto37["m_columns"][] = "cat_actividades_unidades_de_costo_id";
$proto37["m_columns"][] = "cantidad";
$proto37["m_columns"][] = "costo";
$proto37["m_columns"][] = "tunel";
$proto37["m_columns"][] = "vigente";
$proto37["m_columns"][] = "capturista";
$proto37["m_columns"][] = "cat_actividades_especificas_id";
$proto37["m_columns"][] = "time_stamp";
$proto37["m_columns"][] = "uuid";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "tr_actividades_destajos";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "tr_actividades_destajos";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_actividades_destajos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_destajos = createSqlQuery_tr_actividades_destajos();


	
		;

															

$tdatatr_actividades_destajos[".sqlquery"] = $queryData_tr_actividades_destajos;



$tdatatr_actividades_destajos[".hasEvents"] = false;

?>