<?php
$tdatatr_actividades_cosecha_ranking_01 = array();
$tdatatr_actividades_cosecha_ranking_01[".searchableFields"] = array();
$tdatatr_actividades_cosecha_ranking_01[".ShortName"] = "tr_actividades_cosecha_ranking_01";
$tdatatr_actividades_cosecha_ranking_01[".OwnerID"] = "";
$tdatatr_actividades_cosecha_ranking_01[".OriginalTable"] = "tr_actividades_cosecha";


$tdatatr_actividades_cosecha_ranking_01[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_cosecha_ranking_01[".originalPagesByType"] = $tdatatr_actividades_cosecha_ranking_01[".pagesByType"];
$tdatatr_actividades_cosecha_ranking_01[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_cosecha_ranking_01[".originalPages"] = $tdatatr_actividades_cosecha_ranking_01[".pages"];
$tdatatr_actividades_cosecha_ranking_01[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_actividades_cosecha_ranking_01[".originalDefaultPages"] = $tdatatr_actividades_cosecha_ranking_01[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_cosecha_ranking_01 = array();
$fieldToolTipstr_actividades_cosecha_ranking_01 = array();
$pageTitlestr_actividades_cosecha_ranking_01 = array();
$placeHolderstr_actividades_cosecha_ranking_01 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_cosecha_ranking_01["Spanish"] = array();
	$fieldToolTipstr_actividades_cosecha_ranking_01["Spanish"] = array();
	$placeHolderstr_actividades_cosecha_ranking_01["Spanish"] = array();
	$pageTitlestr_actividades_cosecha_ranking_01["Spanish"] = array();
	$fieldLabelstr_actividades_cosecha_ranking_01["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipstr_actividades_cosecha_ranking_01["Spanish"]["cantidad"] = "";
	$placeHolderstr_actividades_cosecha_ranking_01["Spanish"]["cantidad"] = "";
	$fieldLabelstr_actividades_cosecha_ranking_01["Spanish"]["descuento"] = "Descuento";
	$fieldToolTipstr_actividades_cosecha_ranking_01["Spanish"]["descuento"] = "";
	$placeHolderstr_actividades_cosecha_ranking_01["Spanish"]["descuento"] = "";
	$fieldLabelstr_actividades_cosecha_ranking_01["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstr_actividades_cosecha_ranking_01["Spanish"]["fecha"] = "";
	$placeHolderstr_actividades_cosecha_ranking_01["Spanish"]["fecha"] = "";
	$fieldLabelstr_actividades_cosecha_ranking_01["Spanish"]["nombre_completo"] = "Nombre";
	$fieldToolTipstr_actividades_cosecha_ranking_01["Spanish"]["nombre_completo"] = "";
	$placeHolderstr_actividades_cosecha_ranking_01["Spanish"]["nombre_completo"] = "";
	$fieldLabelstr_actividades_cosecha_ranking_01["Spanish"]["cat_trabajadores_altas_id_empresa"] = "Id Empresa";
	$fieldToolTipstr_actividades_cosecha_ranking_01["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderstr_actividades_cosecha_ranking_01["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelstr_actividades_cosecha_ranking_01["Spanish"]["total"] = "Total";
	$fieldToolTipstr_actividades_cosecha_ranking_01["Spanish"]["total"] = "";
	$placeHolderstr_actividades_cosecha_ranking_01["Spanish"]["total"] = "";
	if (count($fieldToolTipstr_actividades_cosecha_ranking_01["Spanish"]))
		$tdatatr_actividades_cosecha_ranking_01[".isUseToolTips"] = true;
}





$tdatatr_actividades_cosecha_ranking_01[".shortTableName"] = "tr_actividades_cosecha_ranking_01";
$tdatatr_actividades_cosecha_ranking_01[".nSecOptions"] = 0;

$tdatatr_actividades_cosecha_ranking_01[".mainTableOwnerID"] = "";
$tdatatr_actividades_cosecha_ranking_01[".entityType"] = 1;
$tdatatr_actividades_cosecha_ranking_01[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_cosecha_ranking_01[".strOriginalTableName"] = "tr_actividades_cosecha";

	



$tdatatr_actividades_cosecha_ranking_01[".showAddInPopup"] = false;

$tdatatr_actividades_cosecha_ranking_01[".showEditInPopup"] = false;

$tdatatr_actividades_cosecha_ranking_01[".showViewInPopup"] = false;

$tdatatr_actividades_cosecha_ranking_01[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_cosecha_ranking_01[".listAjax"] = false;

	$tdatatr_actividades_cosecha_ranking_01[".audit"] = false;

	$tdatatr_actividades_cosecha_ranking_01[".locking"] = false;


$pages = $tdatatr_actividades_cosecha_ranking_01[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_cosecha_ranking_01[".edit"] = true;
	$tdatatr_actividades_cosecha_ranking_01[".afterEditAction"] = 1;
	$tdatatr_actividades_cosecha_ranking_01[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_cosecha_ranking_01[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_cosecha_ranking_01[".add"] = true;
$tdatatr_actividades_cosecha_ranking_01[".afterAddAction"] = 1;
$tdatatr_actividades_cosecha_ranking_01[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_cosecha_ranking_01[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_cosecha_ranking_01[".list"] = true;
}



$tdatatr_actividades_cosecha_ranking_01[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_cosecha_ranking_01[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_cosecha_ranking_01[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_cosecha_ranking_01[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_cosecha_ranking_01[".printFriendly"] = true;
}



$tdatatr_actividades_cosecha_ranking_01[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_cosecha_ranking_01[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_cosecha_ranking_01[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_cosecha_ranking_01[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_actividades_cosecha_ranking_01[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_cosecha_ranking_01[".buttonsAdded"] = false;

$tdatatr_actividades_cosecha_ranking_01[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_actividades_cosecha_ranking_01[".isUseTimeForSearch"] = false;


$tdatatr_actividades_cosecha_ranking_01[".badgeColor"] = "778899";


$tdatatr_actividades_cosecha_ranking_01[".allSearchFields"] = array();
$tdatatr_actividades_cosecha_ranking_01[".filterFields"] = array();
$tdatatr_actividades_cosecha_ranking_01[".requiredSearchFields"] = array();

$tdatatr_actividades_cosecha_ranking_01[".googleLikeFields"] = array();
$tdatatr_actividades_cosecha_ranking_01[".googleLikeFields"][] = "nombre_completo";
$tdatatr_actividades_cosecha_ranking_01[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatatr_actividades_cosecha_ranking_01[".googleLikeFields"][] = "fecha";
$tdatatr_actividades_cosecha_ranking_01[".googleLikeFields"][] = "cantidad";
$tdatatr_actividades_cosecha_ranking_01[".googleLikeFields"][] = "descuento";
$tdatatr_actividades_cosecha_ranking_01[".googleLikeFields"][] = "total";



$tdatatr_actividades_cosecha_ranking_01[".tableType"] = "list";

$tdatatr_actividades_cosecha_ranking_01[".printerPageOrientation"] = 0;
$tdatatr_actividades_cosecha_ranking_01[".nPrinterPageScale"] = 100;

$tdatatr_actividades_cosecha_ranking_01[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_cosecha_ranking_01[".geocodingEnabled"] = false;





$tdatatr_actividades_cosecha_ranking_01[".isResizeColumns"] = true;





$tdatatr_actividades_cosecha_ranking_01[".pageSize"] = 20;

$tdatatr_actividades_cosecha_ranking_01[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tr_actividades_cosecha.tr_actividades_cosecha_id DESC, tr_actividades_cosecha.fecha DESC";
$tdatatr_actividades_cosecha_ranking_01[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_cosecha_ranking_01[".orderindexes"] = array();


$tdatatr_actividades_cosecha_ranking_01[".sqlHead"] = "SELECT cat_trabajadores_altas.nombre_completo,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  tr_actividades_cosecha.fecha,  SUM(tr_actividades_cosecha.cantidad) AS cantidad,  SUM(tr_actividades_cosecha.descuento) AS descuento,  SUM(tr_actividades_cosecha.cantidad -tr_actividades_cosecha.descuento) AS total";
$tdatatr_actividades_cosecha_ranking_01[".sqlFrom"] = "FROM tr_actividades_cosecha  LEFT OUTER JOIN cat_trabajadores_altas ON tr_actividades_cosecha.cat_trabajador_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$tdatatr_actividades_cosecha_ranking_01[".sqlWhereExpr"] = "";
$tdatatr_actividades_cosecha_ranking_01[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_cosecha_ranking_01[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_cosecha_ranking_01[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_cosecha_ranking_01[".highlightSearchResults"] = true;

$tableKeystr_actividades_cosecha_ranking_01 = array();
$tdatatr_actividades_cosecha_ranking_01[".Keys"] = $tableKeystr_actividades_cosecha_ranking_01;


$tdatatr_actividades_cosecha_ranking_01[".hideMobileList"] = array();




//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_ranking_01","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.nombre_completo";

	
	
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


	$tdatatr_actividades_cosecha_ranking_01["nombre_completo"] = $fdata;
		$tdatatr_actividades_cosecha_ranking_01[".searchableFields"][] = "nombre_completo";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_ranking_01","cat_trabajadores_altas_id_empresa");
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


	$tdatatr_actividades_cosecha_ranking_01["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatatr_actividades_cosecha_ranking_01[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_ranking_01","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.fecha";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatr_actividades_cosecha_ranking_01["fecha"] = $fdata;
		$tdatatr_actividades_cosecha_ranking_01[".searchableFields"][] = "fecha";
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_ranking_01","cantidad");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cantidad";

		$fdata["sourceSingle"] = "cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(tr_actividades_cosecha.cantidad)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatatr_actividades_cosecha_ranking_01["cantidad"] = $fdata;
		$tdatatr_actividades_cosecha_ranking_01[".searchableFields"][] = "cantidad";
//	descuento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descuento";
	$fdata["GoodName"] = "descuento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_ranking_01","descuento");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "descuento";

		$fdata["sourceSingle"] = "descuento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(tr_actividades_cosecha.descuento)";

	
	
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


	$tdatatr_actividades_cosecha_ranking_01["descuento"] = $fdata;
		$tdatatr_actividades_cosecha_ranking_01[".searchableFields"][] = "descuento";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_ranking_01","total");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "total";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(tr_actividades_cosecha.cantidad -tr_actividades_cosecha.descuento)";

	
	
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


	$tdatatr_actividades_cosecha_ranking_01["total"] = $fdata;
		$tdatatr_actividades_cosecha_ranking_01[".searchableFields"][] = "total";


$tables_data["tr_actividades_cosecha_ranking_01"]=&$tdatatr_actividades_cosecha_ranking_01;
$field_labels["tr_actividades_cosecha_ranking_01"] = &$fieldLabelstr_actividades_cosecha_ranking_01;
$fieldToolTips["tr_actividades_cosecha_ranking_01"] = &$fieldToolTipstr_actividades_cosecha_ranking_01;
$placeHolders["tr_actividades_cosecha_ranking_01"] = &$placeHolderstr_actividades_cosecha_ranking_01;
$page_titles["tr_actividades_cosecha_ranking_01"] = &$pageTitlestr_actividades_cosecha_ranking_01;


changeTextControlsToDate( "tr_actividades_cosecha_ranking_01" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_cosecha_ranking_01"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_cosecha_ranking_01"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_cosecha_ranking_01()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_altas.nombre_completo,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  tr_actividades_cosecha.fecha,  SUM(tr_actividades_cosecha.cantidad) AS cantidad,  SUM(tr_actividades_cosecha.descuento) AS descuento,  SUM(tr_actividades_cosecha.cantidad -tr_actividades_cosecha.descuento) AS total";
$proto0["m_strFrom"] = "FROM tr_actividades_cosecha  LEFT OUTER JOIN cat_trabajadores_altas ON tr_actividades_cosecha.cat_trabajador_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tr_actividades_cosecha.tr_actividades_cosecha_id DESC, tr_actividades_cosecha.fecha DESC";
	
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
	"m_strName" => "nombre_completo",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_cosecha_ranking_01"
));

$proto6["m_sql"] = "cat_trabajadores_altas.nombre_completo";
$proto6["m_srcTableName"] = "tr_actividades_cosecha_ranking_01";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_cosecha_ranking_01"
));

$proto8["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto8["m_srcTableName"] = "tr_actividades_cosecha_ranking_01";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_ranking_01"
));

$proto10["m_sql"] = "tr_actividades_cosecha.fecha";
$proto10["m_srcTableName"] = "tr_actividades_cosecha_ranking_01";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_SUM";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_ranking_01"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "SUM(tr_actividades_cosecha.cantidad)";
$proto12["m_srcTableName"] = "tr_actividades_cosecha_ranking_01";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "cantidad";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_SUM";
$proto16["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "descuento",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_ranking_01"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "SUM(tr_actividades_cosecha.descuento)";
$proto15["m_srcTableName"] = "tr_actividades_cosecha_ranking_01";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "descuento";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_SUM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tr_actividades_cosecha.cantidad -tr_actividades_cosecha.descuento"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "SUM(tr_actividades_cosecha.cantidad -tr_actividades_cosecha.descuento)";
$proto18["m_srcTableName"] = "tr_actividades_cosecha_ranking_01";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "total";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "tr_actividades_cosecha";
$proto22["m_srcTableName"] = "tr_actividades_cosecha_ranking_01";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "calidad";
$proto22["m_columns"][] = "cantidad";
$proto22["m_columns"][] = "capturista";
$proto22["m_columns"][] = "cat_actividades_especificas_id";
$proto22["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto22["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto22["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto22["m_columns"][] = "cat_nominas_02_actividades_id";
$proto22["m_columns"][] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
$proto22["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto22["m_columns"][] = "cat_produccion_empaques_id";
$proto22["m_columns"][] = "cat_trabajador_altas_id";
$proto22["m_columns"][] = "cat_usuarios_licencias_id";
$proto22["m_columns"][] = "consecutivo_id";
$proto22["m_columns"][] = "descuento";
$proto22["m_columns"][] = "fecha";
$proto22["m_columns"][] = "fecha_de_captura";
$proto22["m_columns"][] = "identificador_dispositivo";
$proto22["m_columns"][] = "Lat";
$proto22["m_columns"][] = "llave_fecha_nominas_uuid";
$proto22["m_columns"][] = "llave_fecha_trabajador";
$proto22["m_columns"][] = "llave_fecha_trabajador_actividad";
$proto22["m_columns"][] = "llave_fecha_trabajador_catnominas02actividades";
$proto22["m_columns"][] = "llave_fecha_up_consecutivo";
$proto22["m_columns"][] = "llave_fecha_up_consecutivo_trab";
$proto22["m_columns"][] = "llave_up_lote_actesp_prod";
$proto22["m_columns"][] = "llave_up_lote_actesp_prod_uuid";
$proto22["m_columns"][] = "Lng";
$proto22["m_columns"][] = "numero_de_bote";
$proto22["m_columns"][] = "peso";
$proto22["m_columns"][] = "surco";
$proto22["m_columns"][] = "time_stamp";
$proto22["m_columns"][] = "tr_actividades_cosecha_id";
$proto22["m_columns"][] = "tr_actividades_cosecha_uuid";
$proto22["m_columns"][] = "tunel";
$proto22["m_columns"][] = "vigente";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "tr_actividades_cosecha";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "tr_actividades_cosecha_ranking_01";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
												$proto25=array();
$proto25["m_link"] = "SQLL_LEFTJOIN";
			$proto26=array();
$proto26["m_strName"] = "cat_trabajadores_altas";
$proto26["m_srcTableName"] = "tr_actividades_cosecha_ranking_01";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "apellido_materno";
$proto26["m_columns"][] = "apellido_paterno";
$proto26["m_columns"][] = "banco";
$proto26["m_columns"][] = "calle";
$proto26["m_columns"][] = "capturista";
$proto26["m_columns"][] = "cat_holding_02_empresas";
$proto26["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto26["m_columns"][] = "cat_trabajadores_altas_id";
$proto26["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto26["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$proto26["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto26["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto26["m_columns"][] = "cat_trabajadores_puestos_id";
$proto26["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto26["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto26["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto26["m_columns"][] = "celular_mensajes";
$proto26["m_columns"][] = "codigo_postal";
$proto26["m_columns"][] = "colonia";
$proto26["m_columns"][] = "contacto_emergencia";
$proto26["m_columns"][] = "cuenta_bancaria";
$proto26["m_columns"][] = "curp";
$proto26["m_columns"][] = "estado";
$proto26["m_columns"][] = "estado_nacimiento";
$proto26["m_columns"][] = "estatus";
$proto26["m_columns"][] = "face_id";
$proto26["m_columns"][] = "fecha_de_captura";
$proto26["m_columns"][] = "fecha_de_ingreso";
$proto26["m_columns"][] = "fecha_de_nacimiento";
$proto26["m_columns"][] = "fecha_de_registro";
$proto26["m_columns"][] = "link_foto";
$proto26["m_columns"][] = "municipio";
$proto26["m_columns"][] = "municipio_nacimiento";
$proto26["m_columns"][] = "nacionalidad";
$proto26["m_columns"][] = "nombre_completo";
$proto26["m_columns"][] = "num_seguridad_social";
$proto26["m_columns"][] = "numero_domicilio";
$proto26["m_columns"][] = "observaciones";
$proto26["m_columns"][] = "permiso_msm";
$proto26["m_columns"][] = "primer_nombre";
$proto26["m_columns"][] = "rfc";
$proto26["m_columns"][] = "segundo_nombre";
$proto26["m_columns"][] = "telefono_emergencia";
$proto26["m_columns"][] = "time_stamp";
$proto26["m_columns"][] = "tr_tags_numero_asignado";
$proto26["m_columns"][] = "vigente";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_altas ON tr_actividades_cosecha.cat_trabajador_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "tr_actividades_cosecha_ranking_01";
$proto27=array();
$proto27["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id = tr_actividades_cosecha.cat_trabajador_altas_id";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_cosecha_ranking_01"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= tr_actividades_cosecha.cat_trabajador_altas_id";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_ranking_01"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajador_altas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_ranking_01"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "tr_actividades_cosecha_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_ranking_01"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 0;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_ranking_01"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 0;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tr_actividades_cosecha_ranking_01";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_cosecha_ranking_01 = createSqlQuery_tr_actividades_cosecha_ranking_01();


	
		;

						

$tdatatr_actividades_cosecha_ranking_01[".sqlquery"] = $queryData_tr_actividades_cosecha_ranking_01;



$tdatatr_actividades_cosecha_ranking_01[".hasEvents"] = false;

?>