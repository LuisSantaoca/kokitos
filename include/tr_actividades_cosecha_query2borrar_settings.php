<?php
$tdatatr_actividades_cosecha_query2borrar = array();
$tdatatr_actividades_cosecha_query2borrar[".searchableFields"] = array();
$tdatatr_actividades_cosecha_query2borrar[".ShortName"] = "tr_actividades_cosecha_query2borrar";
$tdatatr_actividades_cosecha_query2borrar[".OwnerID"] = "";
$tdatatr_actividades_cosecha_query2borrar[".OriginalTable"] = "tr_actividades_cosecha";


$tdatatr_actividades_cosecha_query2borrar[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_cosecha_query2borrar[".originalPagesByType"] = $tdatatr_actividades_cosecha_query2borrar[".pagesByType"];
$tdatatr_actividades_cosecha_query2borrar[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_cosecha_query2borrar[".originalPages"] = $tdatatr_actividades_cosecha_query2borrar[".pages"];
$tdatatr_actividades_cosecha_query2borrar[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_actividades_cosecha_query2borrar[".originalDefaultPages"] = $tdatatr_actividades_cosecha_query2borrar[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_cosecha_query2borrar = array();
$fieldToolTipstr_actividades_cosecha_query2borrar = array();
$pageTitlestr_actividades_cosecha_query2borrar = array();
$placeHolderstr_actividades_cosecha_query2borrar = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_cosecha_query2borrar["Spanish"] = array();
	$fieldToolTipstr_actividades_cosecha_query2borrar["Spanish"] = array();
	$placeHolderstr_actividades_cosecha_query2borrar["Spanish"] = array();
	$pageTitlestr_actividades_cosecha_query2borrar["Spanish"] = array();
	$fieldLabelstr_actividades_cosecha_query2borrar["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstr_actividades_cosecha_query2borrar["Spanish"]["fecha"] = "";
	$placeHolderstr_actividades_cosecha_query2borrar["Spanish"]["fecha"] = "";
	$fieldLabelstr_actividades_cosecha_query2borrar["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipstr_actividades_cosecha_query2borrar["Spanish"]["nombre_completo"] = "";
	$placeHolderstr_actividades_cosecha_query2borrar["Spanish"]["nombre_completo"] = "";
	$fieldLabelstr_actividades_cosecha_query2borrar["Spanish"]["fecha_de_captura"] = "Fecha";
	$fieldToolTipstr_actividades_cosecha_query2borrar["Spanish"]["fecha_de_captura"] = "";
	$placeHolderstr_actividades_cosecha_query2borrar["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelstr_actividades_cosecha_query2borrar["Spanish"]["cat_trabajadores_altas_id_empresa"] = "Cat Trabajadores Altas Id Empresa";
	$fieldToolTipstr_actividades_cosecha_query2borrar["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderstr_actividades_cosecha_query2borrar["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelstr_actividades_cosecha_query2borrar["Spanish"]["cat_trabajadores_altas_id"] = "Cat Trabajadores Altas Id";
	$fieldToolTipstr_actividades_cosecha_query2borrar["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderstr_actividades_cosecha_query2borrar["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelstr_actividades_cosecha_query2borrar["Spanish"]["cat_trabajadores_puestos_id"] = "Cat Trabajadores Puestos Id";
	$fieldToolTipstr_actividades_cosecha_query2borrar["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$placeHolderstr_actividades_cosecha_query2borrar["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$fieldLabelstr_actividades_cosecha_query2borrar["Spanish"]["descripcion_puesto"] = "Descripcion Puesto";
	$fieldToolTipstr_actividades_cosecha_query2borrar["Spanish"]["descripcion_puesto"] = "";
	$placeHolderstr_actividades_cosecha_query2borrar["Spanish"]["descripcion_puesto"] = "";
	if (count($fieldToolTipstr_actividades_cosecha_query2borrar["Spanish"]))
		$tdatatr_actividades_cosecha_query2borrar[".isUseToolTips"] = true;
}





$tdatatr_actividades_cosecha_query2borrar[".shortTableName"] = "tr_actividades_cosecha_query2borrar";
$tdatatr_actividades_cosecha_query2borrar[".nSecOptions"] = 0;

$tdatatr_actividades_cosecha_query2borrar[".mainTableOwnerID"] = "";
$tdatatr_actividades_cosecha_query2borrar[".entityType"] = 1;
$tdatatr_actividades_cosecha_query2borrar[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_cosecha_query2borrar[".strOriginalTableName"] = "tr_actividades_cosecha";

	



$tdatatr_actividades_cosecha_query2borrar[".showAddInPopup"] = false;

$tdatatr_actividades_cosecha_query2borrar[".showEditInPopup"] = false;

$tdatatr_actividades_cosecha_query2borrar[".showViewInPopup"] = false;

$tdatatr_actividades_cosecha_query2borrar[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_cosecha_query2borrar[".listAjax"] = false;

	$tdatatr_actividades_cosecha_query2borrar[".audit"] = false;

	$tdatatr_actividades_cosecha_query2borrar[".locking"] = false;


$pages = $tdatatr_actividades_cosecha_query2borrar[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_cosecha_query2borrar[".edit"] = true;
	$tdatatr_actividades_cosecha_query2borrar[".afterEditAction"] = 1;
	$tdatatr_actividades_cosecha_query2borrar[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_cosecha_query2borrar[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_cosecha_query2borrar[".add"] = true;
$tdatatr_actividades_cosecha_query2borrar[".afterAddAction"] = 1;
$tdatatr_actividades_cosecha_query2borrar[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_cosecha_query2borrar[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_cosecha_query2borrar[".list"] = true;
}



$tdatatr_actividades_cosecha_query2borrar[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_cosecha_query2borrar[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_cosecha_query2borrar[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_cosecha_query2borrar[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_cosecha_query2borrar[".printFriendly"] = true;
}



$tdatatr_actividades_cosecha_query2borrar[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_cosecha_query2borrar[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_cosecha_query2borrar[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_cosecha_query2borrar[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_actividades_cosecha_query2borrar[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_cosecha_query2borrar[".buttonsAdded"] = false;

$tdatatr_actividades_cosecha_query2borrar[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatr_actividades_cosecha_query2borrar[".isUseTimeForSearch"] = false;


$tdatatr_actividades_cosecha_query2borrar[".badgeColor"] = "7B68EE";


$tdatatr_actividades_cosecha_query2borrar[".allSearchFields"] = array();
$tdatatr_actividades_cosecha_query2borrar[".filterFields"] = array();
$tdatatr_actividades_cosecha_query2borrar[".requiredSearchFields"] = array();

$tdatatr_actividades_cosecha_query2borrar[".googleLikeFields"] = array();
$tdatatr_actividades_cosecha_query2borrar[".googleLikeFields"][] = "fecha";
$tdatatr_actividades_cosecha_query2borrar[".googleLikeFields"][] = "nombre_completo";
$tdatatr_actividades_cosecha_query2borrar[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatatr_actividades_cosecha_query2borrar[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatatr_actividades_cosecha_query2borrar[".googleLikeFields"][] = "cat_trabajadores_puestos_id";
$tdatatr_actividades_cosecha_query2borrar[".googleLikeFields"][] = "descripcion_puesto";
$tdatatr_actividades_cosecha_query2borrar[".googleLikeFields"][] = "fecha_de_captura";



$tdatatr_actividades_cosecha_query2borrar[".tableType"] = "list";

$tdatatr_actividades_cosecha_query2borrar[".printerPageOrientation"] = 0;
$tdatatr_actividades_cosecha_query2borrar[".nPrinterPageScale"] = 100;

$tdatatr_actividades_cosecha_query2borrar[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_cosecha_query2borrar[".geocodingEnabled"] = false;





$tdatatr_actividades_cosecha_query2borrar[".isResizeColumns"] = true;





$tdatatr_actividades_cosecha_query2borrar[".pageSize"] = 20;

$tdatatr_actividades_cosecha_query2borrar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_actividades_cosecha_query2borrar[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_cosecha_query2borrar[".orderindexes"] = array();


$tdatatr_actividades_cosecha_query2borrar[".sqlHead"] = "";
$tdatatr_actividades_cosecha_query2borrar[".sqlFrom"] = "";
$tdatatr_actividades_cosecha_query2borrar[".sqlWhereExpr"] = "";
$tdatatr_actividades_cosecha_query2borrar[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_cosecha_query2borrar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_cosecha_query2borrar[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_cosecha_query2borrar[".highlightSearchResults"] = true;

$tableKeystr_actividades_cosecha_query2borrar = array();
$tdatatr_actividades_cosecha_query2borrar[".Keys"] = $tableKeystr_actividades_cosecha_query2borrar;


$tdatatr_actividades_cosecha_query2borrar[".hideMobileList"] = array();




//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query2borrar","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["FullName"] = "fecha";

	
	
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


	$tdatatr_actividades_cosecha_query2borrar["fecha"] = $fdata;
		$tdatatr_actividades_cosecha_query2borrar[".searchableFields"][] = "fecha";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query2borrar","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

	
	
		$fdata["FullName"] = "nombre_completo";

	
	
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


	$tdatatr_actividades_cosecha_query2borrar["nombre_completo"] = $fdata;
		$tdatatr_actividades_cosecha_query2borrar[".searchableFields"][] = "nombre_completo";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query2borrar","cat_trabajadores_altas_id_empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id_empresa";

	
	
		$fdata["FullName"] = "cat_trabajadores_altas_id_empresa";

	
	
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


	$tdatatr_actividades_cosecha_query2borrar["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatatr_actividades_cosecha_query2borrar[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query2borrar","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

	
	
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


	$tdatatr_actividades_cosecha_query2borrar["cat_trabajadores_altas_id"] = $fdata;
		$tdatatr_actividades_cosecha_query2borrar[".searchableFields"][] = "cat_trabajadores_altas_id";
//	cat_trabajadores_puestos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_trabajadores_puestos_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query2borrar","cat_trabajadores_puestos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_puestos_id";

	
	
		$fdata["FullName"] = "cat_trabajadores_puestos_id";

	
	
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


	$tdatatr_actividades_cosecha_query2borrar["cat_trabajadores_puestos_id"] = $fdata;
		$tdatatr_actividades_cosecha_query2borrar[".searchableFields"][] = "cat_trabajadores_puestos_id";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query2borrar","descripcion_puesto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

	
	
		$fdata["FullName"] = "descripcion_puesto";

	
	
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


	$tdatatr_actividades_cosecha_query2borrar["descripcion_puesto"] = $fdata;
		$tdatatr_actividades_cosecha_query2borrar[".searchableFields"][] = "descripcion_puesto";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query2borrar","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
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


	$tdatatr_actividades_cosecha_query2borrar["fecha_de_captura"] = $fdata;
		$tdatatr_actividades_cosecha_query2borrar[".searchableFields"][] = "fecha_de_captura";


$tables_data["tr_actividades_cosecha_query2borrar"]=&$tdatatr_actividades_cosecha_query2borrar;
$field_labels["tr_actividades_cosecha_query2borrar"] = &$fieldLabelstr_actividades_cosecha_query2borrar;
$fieldToolTips["tr_actividades_cosecha_query2borrar"] = &$fieldToolTipstr_actividades_cosecha_query2borrar;
$placeHolders["tr_actividades_cosecha_query2borrar"] = &$placeHolderstr_actividades_cosecha_query2borrar;
$page_titles["tr_actividades_cosecha_query2borrar"] = &$pageTitlestr_actividades_cosecha_query2borrar;


changeTextControlsToDate( "tr_actividades_cosecha_query2borrar" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_cosecha_query2borrar"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_cosecha_query2borrar"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_cosecha_query2borrar()
{
$proto0=array();
$proto0["m_strHead"] = "";
$proto0["m_strFieldList"] = "";
$proto0["m_strFrom"] = "";
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
$proto0["m_fromlist"] = array();
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_actividades_cosecha_query2borrar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_cosecha_query2borrar = createSqlQuery_tr_actividades_cosecha_query2borrar();


	
		;

							

$tdatatr_actividades_cosecha_query2borrar[".sqlquery"] = $queryData_tr_actividades_cosecha_query2borrar;



include_once(getabspath("include/tr_actividades_cosecha_query2borrar_events.php"));
$tdatatr_actividades_cosecha_query2borrar[".hasEvents"] = true;

?>