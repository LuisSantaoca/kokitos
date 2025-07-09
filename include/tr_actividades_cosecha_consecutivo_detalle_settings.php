<?php
$tdatatr_actividades_cosecha_consecutivo_detalle = array();
$tdatatr_actividades_cosecha_consecutivo_detalle[".searchableFields"] = array();
$tdatatr_actividades_cosecha_consecutivo_detalle[".ShortName"] = "tr_actividades_cosecha_consecutivo_detalle";
$tdatatr_actividades_cosecha_consecutivo_detalle[".OwnerID"] = "";
$tdatatr_actividades_cosecha_consecutivo_detalle[".OriginalTable"] = "tr_actividades_cosecha";


$tdatatr_actividades_cosecha_consecutivo_detalle[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_cosecha_consecutivo_detalle[".originalPagesByType"] = $tdatatr_actividades_cosecha_consecutivo_detalle[".pagesByType"];
$tdatatr_actividades_cosecha_consecutivo_detalle[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_cosecha_consecutivo_detalle[".originalPages"] = $tdatatr_actividades_cosecha_consecutivo_detalle[".pages"];
$tdatatr_actividades_cosecha_consecutivo_detalle[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatr_actividades_cosecha_consecutivo_detalle[".originalDefaultPages"] = $tdatatr_actividades_cosecha_consecutivo_detalle[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_cosecha_consecutivo_detalle = array();
$fieldToolTipstr_actividades_cosecha_consecutivo_detalle = array();
$pageTitlestr_actividades_cosecha_consecutivo_detalle = array();
$placeHolderstr_actividades_cosecha_consecutivo_detalle = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_cosecha_consecutivo_detalle["Spanish"] = array();
	$fieldToolTipstr_actividades_cosecha_consecutivo_detalle["Spanish"] = array();
	$placeHolderstr_actividades_cosecha_consecutivo_detalle["Spanish"] = array();
	$pageTitlestr_actividades_cosecha_consecutivo_detalle["Spanish"] = array();
	$fieldLabelstr_actividades_cosecha_consecutivo_detalle["Spanish"]["consecutivo_id"] = "Consecutivo";
	$fieldToolTipstr_actividades_cosecha_consecutivo_detalle["Spanish"]["consecutivo_id"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo_detalle["Spanish"]["consecutivo_id"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo_detalle["Spanish"]["cat_actividades_especificas_id"] = "Actividad";
	$fieldToolTipstr_actividades_cosecha_consecutivo_detalle["Spanish"]["cat_actividades_especificas_id"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo_detalle["Spanish"]["cat_actividades_especificas_id"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo_detalle["Spanish"]["tr_actividades_cosecha_id"] = "Id";
	$fieldToolTipstr_actividades_cosecha_consecutivo_detalle["Spanish"]["tr_actividades_cosecha_id"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo_detalle["Spanish"]["tr_actividades_cosecha_id"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo_detalle["Spanish"]["Total_Botes"] = "Total Botes";
	$fieldToolTipstr_actividades_cosecha_consecutivo_detalle["Spanish"]["Total_Botes"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo_detalle["Spanish"]["Total_Botes"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo_detalle["Spanish"]["Total_Descuento"] = "Total Descuento";
	$fieldToolTipstr_actividades_cosecha_consecutivo_detalle["Spanish"]["Total_Descuento"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo_detalle["Spanish"]["Total_Descuento"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo_detalle["Spanish"]["Botes_Neto"] = "Botes Neto";
	$fieldToolTipstr_actividades_cosecha_consecutivo_detalle["Spanish"]["Botes_Neto"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo_detalle["Spanish"]["Botes_Neto"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo_detalle["Spanish"]["llave_fcup"] = "Llave Fcup";
	$fieldToolTipstr_actividades_cosecha_consecutivo_detalle["Spanish"]["llave_fcup"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo_detalle["Spanish"]["llave_fcup"] = "";
	$fieldLabelstr_actividades_cosecha_consecutivo_detalle["Spanish"]["cat_trabajador_altas_id"] = "Trabajador";
	$fieldToolTipstr_actividades_cosecha_consecutivo_detalle["Spanish"]["cat_trabajador_altas_id"] = "";
	$placeHolderstr_actividades_cosecha_consecutivo_detalle["Spanish"]["cat_trabajador_altas_id"] = "";
	if (count($fieldToolTipstr_actividades_cosecha_consecutivo_detalle["Spanish"]))
		$tdatatr_actividades_cosecha_consecutivo_detalle[".isUseToolTips"] = true;
}





$tdatatr_actividades_cosecha_consecutivo_detalle[".shortTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
$tdatatr_actividades_cosecha_consecutivo_detalle[".nSecOptions"] = 0;

$tdatatr_actividades_cosecha_consecutivo_detalle[".mainTableOwnerID"] = "";
$tdatatr_actividades_cosecha_consecutivo_detalle[".entityType"] = 1;
$tdatatr_actividades_cosecha_consecutivo_detalle[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_cosecha_consecutivo_detalle[".strOriginalTableName"] = "tr_actividades_cosecha";

	



$tdatatr_actividades_cosecha_consecutivo_detalle[".showAddInPopup"] = false;

$tdatatr_actividades_cosecha_consecutivo_detalle[".showEditInPopup"] = false;

$tdatatr_actividades_cosecha_consecutivo_detalle[".showViewInPopup"] = false;

$tdatatr_actividades_cosecha_consecutivo_detalle[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_cosecha_consecutivo_detalle[".listAjax"] = false;

	$tdatatr_actividades_cosecha_consecutivo_detalle[".audit"] = false;

	$tdatatr_actividades_cosecha_consecutivo_detalle[".locking"] = false;


$pages = $tdatatr_actividades_cosecha_consecutivo_detalle[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_cosecha_consecutivo_detalle[".edit"] = true;
	$tdatatr_actividades_cosecha_consecutivo_detalle[".afterEditAction"] = 1;
	$tdatatr_actividades_cosecha_consecutivo_detalle[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_cosecha_consecutivo_detalle[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_cosecha_consecutivo_detalle[".add"] = true;
$tdatatr_actividades_cosecha_consecutivo_detalle[".afterAddAction"] = 1;
$tdatatr_actividades_cosecha_consecutivo_detalle[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_cosecha_consecutivo_detalle[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_cosecha_consecutivo_detalle[".list"] = true;
}



$tdatatr_actividades_cosecha_consecutivo_detalle[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_cosecha_consecutivo_detalle[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_cosecha_consecutivo_detalle[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_cosecha_consecutivo_detalle[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_cosecha_consecutivo_detalle[".printFriendly"] = true;
}



$tdatatr_actividades_cosecha_consecutivo_detalle[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_cosecha_consecutivo_detalle[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_cosecha_consecutivo_detalle[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_cosecha_consecutivo_detalle[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																								

$tdatatr_actividades_cosecha_consecutivo_detalle[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_cosecha_consecutivo_detalle[".buttonsAdded"] = false;

$tdatatr_actividades_cosecha_consecutivo_detalle[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_actividades_cosecha_consecutivo_detalle[".isUseTimeForSearch"] = false;


$tdatatr_actividades_cosecha_consecutivo_detalle[".badgeColor"] = "00ffff";


$tdatatr_actividades_cosecha_consecutivo_detalle[".allSearchFields"] = array();
$tdatatr_actividades_cosecha_consecutivo_detalle[".filterFields"] = array();
$tdatatr_actividades_cosecha_consecutivo_detalle[".requiredSearchFields"] = array();

$tdatatr_actividades_cosecha_consecutivo_detalle[".googleLikeFields"] = array();
$tdatatr_actividades_cosecha_consecutivo_detalle[".googleLikeFields"][] = "consecutivo_id";
$tdatatr_actividades_cosecha_consecutivo_detalle[".googleLikeFields"][] = "cat_actividades_especificas_id";
$tdatatr_actividades_cosecha_consecutivo_detalle[".googleLikeFields"][] = "llave_fcup";
$tdatatr_actividades_cosecha_consecutivo_detalle[".googleLikeFields"][] = "Total_Botes";
$tdatatr_actividades_cosecha_consecutivo_detalle[".googleLikeFields"][] = "Total_Descuento";
$tdatatr_actividades_cosecha_consecutivo_detalle[".googleLikeFields"][] = "Botes_Neto";
$tdatatr_actividades_cosecha_consecutivo_detalle[".googleLikeFields"][] = "tr_actividades_cosecha_id";
$tdatatr_actividades_cosecha_consecutivo_detalle[".googleLikeFields"][] = "cat_trabajador_altas_id";



$tdatatr_actividades_cosecha_consecutivo_detalle[".tableType"] = "list";

$tdatatr_actividades_cosecha_consecutivo_detalle[".printerPageOrientation"] = 0;
$tdatatr_actividades_cosecha_consecutivo_detalle[".nPrinterPageScale"] = 100;

$tdatatr_actividades_cosecha_consecutivo_detalle[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_cosecha_consecutivo_detalle[".geocodingEnabled"] = false;





$tdatatr_actividades_cosecha_consecutivo_detalle[".isResizeColumns"] = true;





$tdatatr_actividades_cosecha_consecutivo_detalle[".pageSize"] = 20;

$tdatatr_actividades_cosecha_consecutivo_detalle[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_actividades_cosecha_consecutivo_detalle[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_cosecha_consecutivo_detalle[".orderindexes"] = array();


$tdatatr_actividades_cosecha_consecutivo_detalle[".sqlHead"] = "SELECT consecutivo_id,  cat_actividades_especificas_id,  concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), ':', DATE_FORMAT(fecha_de_captura, '%H:%i'), '-', consecutivo_id, '-', cat_holding_03_empresas_unidades_productivas_id) AS llave_fcup,  SUM(cantidad) AS Total_Botes,  SUM(descuento) AS Total_Descuento,  SUM(cantidad - descuento) AS Botes_Neto,  tr_actividades_cosecha_id,  cat_trabajador_altas_id";
$tdatatr_actividades_cosecha_consecutivo_detalle[".sqlFrom"] = "FROM tr_actividades_cosecha";
$tdatatr_actividades_cosecha_consecutivo_detalle[".sqlWhereExpr"] = "";
$tdatatr_actividades_cosecha_consecutivo_detalle[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_cosecha_consecutivo_detalle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_cosecha_consecutivo_detalle[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_cosecha_consecutivo_detalle[".highlightSearchResults"] = true;

$tableKeystr_actividades_cosecha_consecutivo_detalle = array();
$tableKeystr_actividades_cosecha_consecutivo_detalle[] = "tr_actividades_cosecha_id";
$tdatatr_actividades_cosecha_consecutivo_detalle[".Keys"] = $tableKeystr_actividades_cosecha_consecutivo_detalle;


$tdatatr_actividades_cosecha_consecutivo_detalle[".hideMobileList"] = array();




//	consecutivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "consecutivo_id";
	$fdata["GoodName"] = "consecutivo_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo_detalle","consecutivo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "consecutivo_id";

		$fdata["sourceSingle"] = "consecutivo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consecutivo_id";

	
	
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


	$tdatatr_actividades_cosecha_consecutivo_detalle["consecutivo_id"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo_detalle[".searchableFields"][] = "consecutivo_id";
//	cat_actividades_especificas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_actividades_especificas_id";
	$fdata["GoodName"] = "cat_actividades_especificas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo_detalle","cat_actividades_especificas_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "box_cat_actividades_especificas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_actividades_especificas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "actividad_especifica";

	

	
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


	$tdatatr_actividades_cosecha_consecutivo_detalle["cat_actividades_especificas_id"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo_detalle[".searchableFields"][] = "cat_actividades_especificas_id";
//	llave_fcup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "llave_fcup";
	$fdata["GoodName"] = "llave_fcup";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo_detalle","llave_fcup");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fcup";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), ':', DATE_FORMAT(fecha_de_captura, '%H:%i'), '-', consecutivo_id, '-', cat_holding_03_empresas_unidades_productivas_id)";

	
	
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


	$tdatatr_actividades_cosecha_consecutivo_detalle["llave_fcup"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo_detalle[".searchableFields"][] = "llave_fcup";
//	Total_Botes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Total_Botes";
	$fdata["GoodName"] = "Total_Botes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo_detalle","Total_Botes");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Total_Botes";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(cantidad)";

	
	
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


	$tdatatr_actividades_cosecha_consecutivo_detalle["Total_Botes"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo_detalle[".searchableFields"][] = "Total_Botes";
//	Total_Descuento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Total_Descuento";
	$fdata["GoodName"] = "Total_Descuento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo_detalle","Total_Descuento");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Total_Descuento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(descuento)";

	
	
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


	$tdatatr_actividades_cosecha_consecutivo_detalle["Total_Descuento"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo_detalle[".searchableFields"][] = "Total_Descuento";
//	Botes_Neto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Botes_Neto";
	$fdata["GoodName"] = "Botes_Neto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo_detalle","Botes_Neto");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Botes_Neto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(cantidad - descuento)";

	
	
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


	$tdatatr_actividades_cosecha_consecutivo_detalle["Botes_Neto"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo_detalle[".searchableFields"][] = "Botes_Neto";
//	tr_actividades_cosecha_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tr_actividades_cosecha_id";
	$fdata["GoodName"] = "tr_actividades_cosecha_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo_detalle","tr_actividades_cosecha_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_actividades_cosecha_id";

		$fdata["sourceSingle"] = "tr_actividades_cosecha_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha_id";

	
	
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


	$tdatatr_actividades_cosecha_consecutivo_detalle["tr_actividades_cosecha_id"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo_detalle[".searchableFields"][] = "tr_actividades_cosecha_id";
//	cat_trabajador_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_trabajador_altas_id";
	$fdata["GoodName"] = "cat_trabajador_altas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_consecutivo_detalle","cat_trabajador_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajador_altas_id";

		$fdata["sourceSingle"] = "cat_trabajador_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajador_altas_id";

	
	
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


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatr_actividades_cosecha_consecutivo_detalle["cat_trabajador_altas_id"] = $fdata;
		$tdatatr_actividades_cosecha_consecutivo_detalle[".searchableFields"][] = "cat_trabajador_altas_id";


$tables_data["tr_actividades_cosecha_consecutivo_detalle"]=&$tdatatr_actividades_cosecha_consecutivo_detalle;
$field_labels["tr_actividades_cosecha_consecutivo_detalle"] = &$fieldLabelstr_actividades_cosecha_consecutivo_detalle;
$fieldToolTips["tr_actividades_cosecha_consecutivo_detalle"] = &$fieldToolTipstr_actividades_cosecha_consecutivo_detalle;
$placeHolders["tr_actividades_cosecha_consecutivo_detalle"] = &$placeHolderstr_actividades_cosecha_consecutivo_detalle;
$page_titles["tr_actividades_cosecha_consecutivo_detalle"] = &$pageTitlestr_actividades_cosecha_consecutivo_detalle;


changeTextControlsToDate( "tr_actividades_cosecha_consecutivo_detalle" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_cosecha_consecutivo_detalle"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_cosecha_consecutivo_detalle"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tr_actividades_cosecha";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tr_actividades_cosecha_consecutivo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tr_actividades_cosecha_consecutivo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tr_actividades_cosecha_consecutivo_detalle"][0] = $masterParams;
				$masterTablesData["tr_actividades_cosecha_consecutivo_detalle"][0]["masterKeys"] = array();
	$masterTablesData["tr_actividades_cosecha_consecutivo_detalle"][0]["masterKeys"][]="llave_fcup";
				$masterTablesData["tr_actividades_cosecha_consecutivo_detalle"][0]["detailKeys"] = array();
	$masterTablesData["tr_actividades_cosecha_consecutivo_detalle"][0]["detailKeys"][]="llave_fcup";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_cosecha_consecutivo_detalle()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "consecutivo_id,  cat_actividades_especificas_id,  concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), ':', DATE_FORMAT(fecha_de_captura, '%H:%i'), '-', consecutivo_id, '-', cat_holding_03_empresas_unidades_productivas_id) AS llave_fcup,  SUM(cantidad) AS Total_Botes,  SUM(descuento) AS Total_Descuento,  SUM(cantidad - descuento) AS Botes_Neto,  tr_actividades_cosecha_id,  cat_trabajador_altas_id";
$proto0["m_strFrom"] = "FROM tr_actividades_cosecha";
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
	"m_strName" => "consecutivo_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo_detalle"
));

$proto6["m_sql"] = "consecutivo_id";
$proto6["m_srcTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_especificas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo_detalle"
));

$proto8["m_sql"] = "cat_actividades_especificas_id";
$proto8["m_srcTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATE_FORMAT(fecha_de_captura, '%Y-%d-%m')"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "':'"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATE_FORMAT(fecha_de_captura, '%H:%i')"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "consecutivo_id"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_holding_03_empresas_unidades_productivas_id"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), ':', DATE_FORMAT(fecha_de_captura, '%H:%i'), '-', consecutivo_id, '-', cat_holding_03_empresas_unidades_productivas_id)";
$proto10["m_srcTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "llave_fcup";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_SUM";
$proto20["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo_detalle"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "SUM(cantidad)";
$proto19["m_srcTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "Total_Botes";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_SUM";
$proto23["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "descuento",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo_detalle"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "SUM(descuento)";
$proto22["m_srcTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "Total_Descuento";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_SUM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cantidad - descuento"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "SUM(cantidad - descuento)";
$proto25["m_srcTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "Botes_Neto";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_actividades_cosecha_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo_detalle"
));

$proto28["m_sql"] = "tr_actividades_cosecha_id";
$proto28["m_srcTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajador_altas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo_detalle"
));

$proto30["m_sql"] = "cat_trabajador_altas_id";
$proto30["m_srcTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "tr_actividades_cosecha";
$proto33["m_srcTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "tr_actividades_cosecha_id";
$proto33["m_columns"][] = "tr_actividades_cosecha_uuid";
$proto33["m_columns"][] = "time_stamp";
$proto33["m_columns"][] = "vigente";
$proto33["m_columns"][] = "capturista";
$proto33["m_columns"][] = "fecha_de_captura";
$proto33["m_columns"][] = "cat_trabajador_altas_id";
$proto33["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto33["m_columns"][] = "cantidad";
$proto33["m_columns"][] = "peso";
$proto33["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto33["m_columns"][] = "surco";
$proto33["m_columns"][] = "tunel";
$proto33["m_columns"][] = "consecutivo_id";
$proto33["m_columns"][] = "descuento";
$proto33["m_columns"][] = "Lat";
$proto33["m_columns"][] = "Lng";
$proto33["m_columns"][] = "identificador_dispositivo";
$proto33["m_columns"][] = "calidad";
$proto33["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto33["m_columns"][] = "cat_produccion_empaques_id";
$proto33["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto33["m_columns"][] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
$proto33["m_columns"][] = "cat_usuarios_licencias_id";
$proto33["m_columns"][] = "fecha";
$proto33["m_columns"][] = "numero_de_bote";
$proto33["m_columns"][] = "llave_fecha_nominas_uuid";
$proto33["m_columns"][] = "llave_fecha_trabajador_actividad";
$proto33["m_columns"][] = "llave_fecha_trabajador_catnominas02actividades";
$proto33["m_columns"][] = "llave_fecha_up_consecutivo";
$proto33["m_columns"][] = "llave_up_lote_actesp_prod";
$proto33["m_columns"][] = "llave_up_lote_actesp_prod_uuid";
$proto33["m_columns"][] = "llave_fecha_up_consecutivo_trab";
$proto33["m_columns"][] = "llave_fecha_trabajador";
$proto33["m_columns"][] = "cat_nominas_02_actividades_id";
$proto33["m_columns"][] = "cat_actividades_especificas_id";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "tr_actividades_cosecha";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "tr_actividades_cosecha_consecutivo_detalle";
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
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "tr_actividades_cosecha_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_consecutivo_detalle"
));

$proto36["m_column"]=$obj;
$obj = new SQLGroupByItem($proto36);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_actividades_cosecha_consecutivo_detalle";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_cosecha_consecutivo_detalle = createSqlQuery_tr_actividades_cosecha_consecutivo_detalle();


	
		;

								

$tdatatr_actividades_cosecha_consecutivo_detalle[".sqlquery"] = $queryData_tr_actividades_cosecha_consecutivo_detalle;



$tdatatr_actividades_cosecha_consecutivo_detalle[".hasEvents"] = false;

?>