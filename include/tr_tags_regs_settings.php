<?php
$tdatatr_tags_regs = array();
$tdatatr_tags_regs[".searchableFields"] = array();
$tdatatr_tags_regs[".ShortName"] = "tr_tags_regs";
$tdatatr_tags_regs[".OwnerID"] = "";
$tdatatr_tags_regs[".OriginalTable"] = "tr_tags_regs";


$tdatatr_tags_regs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatr_tags_regs[".originalPagesByType"] = $tdatatr_tags_regs[".pagesByType"];
$tdatatr_tags_regs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatr_tags_regs[".originalPages"] = $tdatatr_tags_regs[".pages"];
$tdatatr_tags_regs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatr_tags_regs[".originalDefaultPages"] = $tdatatr_tags_regs[".defaultPages"];

//	field labels
$fieldLabelstr_tags_regs = array();
$fieldToolTipstr_tags_regs = array();
$pageTitlestr_tags_regs = array();
$placeHolderstr_tags_regs = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_tags_regs["Spanish"] = array();
	$fieldToolTipstr_tags_regs["Spanish"] = array();
	$placeHolderstr_tags_regs["Spanish"] = array();
	$pageTitlestr_tags_regs["Spanish"] = array();
	$fieldLabelstr_tags_regs["Spanish"]["tr_tags_regs_id"] = "Tr Tags Regs Id";
	$fieldToolTipstr_tags_regs["Spanish"]["tr_tags_regs_id"] = "";
	$placeHolderstr_tags_regs["Spanish"]["tr_tags_regs_id"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["uuid"] = "Uuid";
	$fieldToolTipstr_tags_regs["Spanish"]["uuid"] = "";
	$placeHolderstr_tags_regs["Spanish"]["uuid"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "Cat Holding 03 Empresas Unidades Productivas Id";
	$fieldToolTipstr_tags_regs["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderstr_tags_regs["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "Cat Holding 04 Unidades Productivas Lotes Id";
	$fieldToolTipstr_tags_regs["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHolderstr_tags_regs["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["cat_trabajadores_altas_id"] = "Cat Trabajadores Altas Id";
	$fieldToolTipstr_tags_regs["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderstr_tags_regs["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["peso"] = "Peso";
	$fieldToolTipstr_tags_regs["Spanish"]["peso"] = "";
	$placeHolderstr_tags_regs["Spanish"]["peso"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipstr_tags_regs["Spanish"]["nombre"] = "";
	$placeHolderstr_tags_regs["Spanish"]["nombre"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["Lat"] = "Lat";
	$fieldToolTipstr_tags_regs["Spanish"]["Lat"] = "";
	$placeHolderstr_tags_regs["Spanish"]["Lat"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["Lng"] = "Lng";
	$fieldToolTipstr_tags_regs["Spanish"]["Lng"] = "";
	$placeHolderstr_tags_regs["Spanish"]["Lng"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["fecha_de_captura"] = "Fecha De Captura";
	$fieldToolTipstr_tags_regs["Spanish"]["fecha_de_captura"] = "";
	$placeHolderstr_tags_regs["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["tag_numero_de_serie"] = "Tag Numero De Serie";
	$fieldToolTipstr_tags_regs["Spanish"]["tag_numero_de_serie"] = "";
	$placeHolderstr_tags_regs["Spanish"]["tag_numero_de_serie"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["tag_alias"] = "Tag Alias";
	$fieldToolTipstr_tags_regs["Spanish"]["tag_alias"] = "";
	$placeHolderstr_tags_regs["Spanish"]["tag_alias"] = "";
	$fieldLabelstr_tags_regs["Spanish"]["numero_de_bote"] = "Numero De Bote";
	$fieldToolTipstr_tags_regs["Spanish"]["numero_de_bote"] = "";
	$placeHolderstr_tags_regs["Spanish"]["numero_de_bote"] = "";
	if (count($fieldToolTipstr_tags_regs["Spanish"]))
		$tdatatr_tags_regs[".isUseToolTips"] = true;
}





$tdatatr_tags_regs[".shortTableName"] = "tr_tags_regs";
$tdatatr_tags_regs[".nSecOptions"] = 0;

$tdatatr_tags_regs[".mainTableOwnerID"] = "";
$tdatatr_tags_regs[".entityType"] = 0;
$tdatatr_tags_regs[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_tags_regs[".strOriginalTableName"] = "tr_tags_regs";

	



$tdatatr_tags_regs[".showAddInPopup"] = false;

$tdatatr_tags_regs[".showEditInPopup"] = false;

$tdatatr_tags_regs[".showViewInPopup"] = false;

$tdatatr_tags_regs[".listAjax"] = false;
//	temporary
//$tdatatr_tags_regs[".listAjax"] = false;

	$tdatatr_tags_regs[".audit"] = false;

	$tdatatr_tags_regs[".locking"] = false;


$pages = $tdatatr_tags_regs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_tags_regs[".edit"] = true;
	$tdatatr_tags_regs[".afterEditAction"] = 1;
	$tdatatr_tags_regs[".closePopupAfterEdit"] = 1;
	$tdatatr_tags_regs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_tags_regs[".add"] = true;
$tdatatr_tags_regs[".afterAddAction"] = 1;
$tdatatr_tags_regs[".closePopupAfterAdd"] = 1;
$tdatatr_tags_regs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_tags_regs[".list"] = true;
}



$tdatatr_tags_regs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_tags_regs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_tags_regs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_tags_regs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_tags_regs[".printFriendly"] = true;
}



$tdatatr_tags_regs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_tags_regs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_tags_regs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_tags_regs[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_tags_regs[".ajaxCodeSnippetAdded"] = false;

$tdatatr_tags_regs[".buttonsAdded"] = false;

$tdatatr_tags_regs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_tags_regs[".isUseTimeForSearch"] = false;


$tdatatr_tags_regs[".badgeColor"] = "00C2C5";


$tdatatr_tags_regs[".allSearchFields"] = array();
$tdatatr_tags_regs[".filterFields"] = array();
$tdatatr_tags_regs[".requiredSearchFields"] = array();

$tdatatr_tags_regs[".googleLikeFields"] = array();
$tdatatr_tags_regs[".googleLikeFields"][] = "tr_tags_regs_id";
$tdatatr_tags_regs[".googleLikeFields"][] = "uuid";
$tdatatr_tags_regs[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatatr_tags_regs[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatatr_tags_regs[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatatr_tags_regs[".googleLikeFields"][] = "peso";
$tdatatr_tags_regs[".googleLikeFields"][] = "nombre";
$tdatatr_tags_regs[".googleLikeFields"][] = "Lat";
$tdatatr_tags_regs[".googleLikeFields"][] = "Lng";
$tdatatr_tags_regs[".googleLikeFields"][] = "fecha_de_captura";
$tdatatr_tags_regs[".googleLikeFields"][] = "tag_numero_de_serie";
$tdatatr_tags_regs[".googleLikeFields"][] = "tag_alias";
$tdatatr_tags_regs[".googleLikeFields"][] = "numero_de_bote";



$tdatatr_tags_regs[".tableType"] = "list";

$tdatatr_tags_regs[".printerPageOrientation"] = 0;
$tdatatr_tags_regs[".nPrinterPageScale"] = 100;

$tdatatr_tags_regs[".nPrinterSplitRecords"] = 40;

$tdatatr_tags_regs[".geocodingEnabled"] = false;





$tdatatr_tags_regs[".isResizeColumns"] = true;





$tdatatr_tags_regs[".pageSize"] = 20;

$tdatatr_tags_regs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_tags_regs[".strOrderBy"] = $tstrOrderBy;

$tdatatr_tags_regs[".orderindexes"] = array();


$tdatatr_tags_regs[".sqlHead"] = "SELECT tr_tags_regs_id,  	uuid,  	cat_holding_03_empresas_unidades_productivas_id,  	cat_holding_04_unidades_productivas_lotes_id,  	cat_trabajadores_altas_id,  	peso,  	nombre,  	Lat,  	Lng,  	fecha_de_captura,  	tag_numero_de_serie,  	tag_alias,  	numero_de_bote";
$tdatatr_tags_regs[".sqlFrom"] = "FROM tr_tags_regs";
$tdatatr_tags_regs[".sqlWhereExpr"] = "";
$tdatatr_tags_regs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_tags_regs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_tags_regs[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_tags_regs[".highlightSearchResults"] = true;

$tableKeystr_tags_regs = array();
$tableKeystr_tags_regs[] = "tr_tags_regs_id";
$tdatatr_tags_regs[".Keys"] = $tableKeystr_tags_regs;


$tdatatr_tags_regs[".hideMobileList"] = array();




//	tr_tags_regs_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_tags_regs_id";
	$fdata["GoodName"] = "tr_tags_regs_id";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","tr_tags_regs_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_tags_regs_id";

		$fdata["sourceSingle"] = "tr_tags_regs_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags_regs_id";

	
	
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


	$tdatatr_tags_regs["tr_tags_regs_id"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "tr_tags_regs_id";
//	uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "uuid";
	$fdata["GoodName"] = "uuid";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uuid";

		$fdata["sourceSingle"] = "uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uuid";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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


	$tdatatr_tags_regs["uuid"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "uuid";
//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","cat_holding_03_empresas_unidades_productivas_id");
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


	$tdatatr_tags_regs["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","cat_holding_04_unidades_productivas_lotes_id");
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


	$tdatatr_tags_regs["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","cat_trabajadores_altas_id");
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


	$tdatatr_tags_regs["cat_trabajadores_altas_id"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "cat_trabajadores_altas_id";
//	peso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "peso";
	$fdata["GoodName"] = "peso";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","peso");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "peso";

		$fdata["sourceSingle"] = "peso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "peso";

	
	
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


	$tdatatr_tags_regs["peso"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "peso";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdatatr_tags_regs["nombre"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "nombre";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","Lat");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lat";

		$fdata["sourceSingle"] = "Lat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 7;

	
	
	
	
	
	
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


	$tdatatr_tags_regs["Lat"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","Lng");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lng";

		$fdata["sourceSingle"] = "Lng";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lng";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 7;

	
	
	
	
	
	
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


	$tdatatr_tags_regs["Lng"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "Lng";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","fecha_de_captura");
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


	$tdatatr_tags_regs["fecha_de_captura"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "fecha_de_captura";
//	tag_numero_de_serie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tag_numero_de_serie";
	$fdata["GoodName"] = "tag_numero_de_serie";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","tag_numero_de_serie");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tag_numero_de_serie";

		$fdata["sourceSingle"] = "tag_numero_de_serie";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tag_numero_de_serie";

	
	
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


	$tdatatr_tags_regs["tag_numero_de_serie"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "tag_numero_de_serie";
//	tag_alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tag_alias";
	$fdata["GoodName"] = "tag_alias";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","tag_alias");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tag_alias";

		$fdata["sourceSingle"] = "tag_alias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tag_alias";

	
	
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


	$tdatatr_tags_regs["tag_alias"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "tag_alias";
//	numero_de_bote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "numero_de_bote";
	$fdata["GoodName"] = "numero_de_bote";
	$fdata["ownerTable"] = "tr_tags_regs";
	$fdata["Label"] = GetFieldLabel("tr_tags_regs","numero_de_bote");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "numero_de_bote";

		$fdata["sourceSingle"] = "numero_de_bote";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero_de_bote";

	
	
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


	$tdatatr_tags_regs["numero_de_bote"] = $fdata;
		$tdatatr_tags_regs[".searchableFields"][] = "numero_de_bote";


$tables_data["tr_tags_regs"]=&$tdatatr_tags_regs;
$field_labels["tr_tags_regs"] = &$fieldLabelstr_tags_regs;
$fieldToolTips["tr_tags_regs"] = &$fieldToolTipstr_tags_regs;
$placeHolders["tr_tags_regs"] = &$placeHolderstr_tags_regs;
$page_titles["tr_tags_regs"] = &$pageTitlestr_tags_regs;


changeTextControlsToDate( "tr_tags_regs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_tags_regs"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_tags_regs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_tags_regs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_tags_regs_id,  	uuid,  	cat_holding_03_empresas_unidades_productivas_id,  	cat_holding_04_unidades_productivas_lotes_id,  	cat_trabajadores_altas_id,  	peso,  	nombre,  	Lat,  	Lng,  	fecha_de_captura,  	tag_numero_de_serie,  	tag_alias,  	numero_de_bote";
$proto0["m_strFrom"] = "FROM tr_tags_regs";
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
	"m_strName" => "tr_tags_regs_id",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto6["m_sql"] = "tr_tags_regs_id";
$proto6["m_srcTableName"] = "tr_tags_regs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "uuid",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto8["m_sql"] = "uuid";
$proto8["m_srcTableName"] = "tr_tags_regs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto10["m_sql"] = "cat_holding_03_empresas_unidades_productivas_id";
$proto10["m_srcTableName"] = "tr_tags_regs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto12["m_sql"] = "cat_holding_04_unidades_productivas_lotes_id";
$proto12["m_srcTableName"] = "tr_tags_regs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto14["m_sql"] = "cat_trabajadores_altas_id";
$proto14["m_srcTableName"] = "tr_tags_regs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "peso",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto16["m_sql"] = "peso";
$proto16["m_srcTableName"] = "tr_tags_regs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto18["m_sql"] = "nombre";
$proto18["m_srcTableName"] = "tr_tags_regs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto20["m_sql"] = "Lat";
$proto20["m_srcTableName"] = "tr_tags_regs";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto22["m_sql"] = "Lng";
$proto22["m_srcTableName"] = "tr_tags_regs";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto24["m_sql"] = "fecha_de_captura";
$proto24["m_srcTableName"] = "tr_tags_regs";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_numero_de_serie",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto26["m_sql"] = "tag_numero_de_serie";
$proto26["m_srcTableName"] = "tr_tags_regs";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_alias",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto28["m_sql"] = "tag_alias";
$proto28["m_srcTableName"] = "tr_tags_regs";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_de_bote",
	"m_strTable" => "tr_tags_regs",
	"m_srcTableName" => "tr_tags_regs"
));

$proto30["m_sql"] = "numero_de_bote";
$proto30["m_srcTableName"] = "tr_tags_regs";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "tr_tags_regs";
$proto33["m_srcTableName"] = "tr_tags_regs";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "tr_tags_regs_id";
$proto33["m_columns"][] = "uuid";
$proto33["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto33["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto33["m_columns"][] = "cat_trabajadores_altas_id";
$proto33["m_columns"][] = "peso";
$proto33["m_columns"][] = "nombre";
$proto33["m_columns"][] = "Lat";
$proto33["m_columns"][] = "Lng";
$proto33["m_columns"][] = "fecha_de_captura";
$proto33["m_columns"][] = "tag_numero_de_serie";
$proto33["m_columns"][] = "tag_alias";
$proto33["m_columns"][] = "numero_de_bote";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "tr_tags_regs";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "tr_tags_regs";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_tags_regs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_tags_regs = createSqlQuery_tr_tags_regs();


	
		;

													

$tdatatr_tags_regs[".sqlquery"] = $queryData_tr_tags_regs;



$tdatatr_tags_regs[".hasEvents"] = false;

?>