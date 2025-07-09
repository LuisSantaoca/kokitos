<?php
$tdatatr_prenomina = array();
$tdatatr_prenomina[".searchableFields"] = array();
$tdatatr_prenomina[".ShortName"] = "tr_prenomina";
$tdatatr_prenomina[".OwnerID"] = "";
$tdatatr_prenomina[".OriginalTable"] = "tr_prenomina";


$tdatatr_prenomina[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatr_prenomina[".originalPagesByType"] = $tdatatr_prenomina[".pagesByType"];
$tdatatr_prenomina[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatr_prenomina[".originalPages"] = $tdatatr_prenomina[".pages"];
$tdatatr_prenomina[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatr_prenomina[".originalDefaultPages"] = $tdatatr_prenomina[".defaultPages"];

//	field labels
$fieldLabelstr_prenomina = array();
$fieldToolTipstr_prenomina = array();
$pageTitlestr_prenomina = array();
$placeHolderstr_prenomina = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_prenomina["Spanish"] = array();
	$fieldToolTipstr_prenomina["Spanish"] = array();
	$placeHolderstr_prenomina["Spanish"] = array();
	$pageTitlestr_prenomina["Spanish"] = array();
	$fieldLabelstr_prenomina["Spanish"]["cat_trabajadores_activos_periodo_id"] = "Cat Trabajadores Activos Periodo Id";
	$fieldToolTipstr_prenomina["Spanish"]["cat_trabajadores_activos_periodo_id"] = "";
	$placeHolderstr_prenomina["Spanish"]["cat_trabajadores_activos_periodo_id"] = "";
	$fieldLabelstr_prenomina["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstr_prenomina["Spanish"]["fecha"] = "";
	$placeHolderstr_prenomina["Spanish"]["fecha"] = "";
	$fieldLabelstr_prenomina["Spanish"]["dia_semana"] = "Dia";
	$fieldToolTipstr_prenomina["Spanish"]["dia_semana"] = "";
	$placeHolderstr_prenomina["Spanish"]["dia_semana"] = "";
	$fieldLabelstr_prenomina["Spanish"]["nombre_completo"] = "Nombre";
	$fieldToolTipstr_prenomina["Spanish"]["nombre_completo"] = "";
	$placeHolderstr_prenomina["Spanish"]["nombre_completo"] = "";
	$fieldLabelstr_prenomina["Spanish"]["cat_trabajadores_altas_id_empresa"] = "Id Empresa";
	$fieldToolTipstr_prenomina["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderstr_prenomina["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelstr_prenomina["Spanish"]["cat_trabajadores_altas_id"] = "Id Empleado";
	$fieldToolTipstr_prenomina["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderstr_prenomina["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelstr_prenomina["Spanish"]["cat_trabajadores_puestos_id"] = "Id Puesto";
	$fieldToolTipstr_prenomina["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$placeHolderstr_prenomina["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$fieldLabelstr_prenomina["Spanish"]["configuracion_pago"] = "Config. Pago";
	$fieldToolTipstr_prenomina["Spanish"]["configuracion_pago"] = "";
	$placeHolderstr_prenomina["Spanish"]["configuracion_pago"] = "";
	$fieldLabelstr_prenomina["Spanish"]["total_a_pagar"] = "Total A Pagar";
	$fieldToolTipstr_prenomina["Spanish"]["total_a_pagar"] = "";
	$placeHolderstr_prenomina["Spanish"]["total_a_pagar"] = "";
	$fieldLabelstr_prenomina["Spanish"]["cantidad_horas_normales"] = "Horas Normales";
	$fieldToolTipstr_prenomina["Spanish"]["cantidad_horas_normales"] = "";
	$placeHolderstr_prenomina["Spanish"]["cantidad_horas_normales"] = "";
	$fieldLabelstr_prenomina["Spanish"]["cantidad_horas_extra"] = "Horas Extra";
	$fieldToolTipstr_prenomina["Spanish"]["cantidad_horas_extra"] = "";
	$placeHolderstr_prenomina["Spanish"]["cantidad_horas_extra"] = "";
	$fieldLabelstr_prenomina["Spanish"]["cantidad_botes"] = "Total de Botes";
	$fieldToolTipstr_prenomina["Spanish"]["cantidad_botes"] = "";
	$placeHolderstr_prenomina["Spanish"]["cantidad_botes"] = "";
	$fieldLabelstr_prenomina["Spanish"]["cantidad_botes_frambuesa"] = "Botes Frambuesa";
	$fieldToolTipstr_prenomina["Spanish"]["cantidad_botes_frambuesa"] = "";
	$placeHolderstr_prenomina["Spanish"]["cantidad_botes_frambuesa"] = "";
	$fieldLabelstr_prenomina["Spanish"]["cantidad_botes_zarzamora"] = "Botes Zarzamora";
	$fieldToolTipstr_prenomina["Spanish"]["cantidad_botes_zarzamora"] = "";
	$placeHolderstr_prenomina["Spanish"]["cantidad_botes_zarzamora"] = "";
	$fieldLabelstr_prenomina["Spanish"]["cantidad_horas_vespertino"] = "Horas Vespertino";
	$fieldToolTipstr_prenomina["Spanish"]["cantidad_horas_vespertino"] = "";
	$placeHolderstr_prenomina["Spanish"]["cantidad_horas_vespertino"] = "";
	$fieldLabelstr_prenomina["Spanish"]["pago_sueldo_diario"] = "Sueldo Diario";
	$fieldToolTipstr_prenomina["Spanish"]["pago_sueldo_diario"] = "";
	$placeHolderstr_prenomina["Spanish"]["pago_sueldo_diario"] = "";
	$fieldLabelstr_prenomina["Spanish"]["pago_sueldo_variable"] = "Sueldo Variable";
	$fieldToolTipstr_prenomina["Spanish"]["pago_sueldo_variable"] = "";
	$placeHolderstr_prenomina["Spanish"]["pago_sueldo_variable"] = "";
	$fieldLabelstr_prenomina["Spanish"]["pago_sueldo_variable_cosecha"] = "Sueldo Cosecha";
	$fieldToolTipstr_prenomina["Spanish"]["pago_sueldo_variable_cosecha"] = "";
	$placeHolderstr_prenomina["Spanish"]["pago_sueldo_variable_cosecha"] = "";
	$fieldLabelstr_prenomina["Spanish"]["pago_prima"] = "Prima domingo";
	$fieldToolTipstr_prenomina["Spanish"]["pago_prima"] = "";
	$placeHolderstr_prenomina["Spanish"]["pago_prima"] = "";
	$fieldLabelstr_prenomina["Spanish"]["pago_bono"] = "Bono";
	$fieldToolTipstr_prenomina["Spanish"]["pago_bono"] = "";
	$placeHolderstr_prenomina["Spanish"]["pago_bono"] = "";
	$fieldLabelstr_prenomina["Spanish"]["pago_horas_extra"] = "Horas Extra";
	$fieldToolTipstr_prenomina["Spanish"]["pago_horas_extra"] = "";
	$placeHolderstr_prenomina["Spanish"]["pago_horas_extra"] = "";
	$fieldLabelstr_prenomina["Spanish"]["pago_turno_vespertino"] = "Pago Vespertino";
	$fieldToolTipstr_prenomina["Spanish"]["pago_turno_vespertino"] = "";
	$placeHolderstr_prenomina["Spanish"]["pago_turno_vespertino"] = "";
	$fieldLabelstr_prenomina["Spanish"]["asistencia"] = "Asistencia";
	$fieldToolTipstr_prenomina["Spanish"]["asistencia"] = "";
	$placeHolderstr_prenomina["Spanish"]["asistencia"] = "";
	$fieldLabelstr_prenomina["Spanish"]["justificado"] = "Justificado";
	$fieldToolTipstr_prenomina["Spanish"]["justificado"] = "";
	$placeHolderstr_prenomina["Spanish"]["justificado"] = "";
	$fieldLabelstr_prenomina["Spanish"]["total_de_asistencias"] = "Total Asistencias";
	$fieldToolTipstr_prenomina["Spanish"]["total_de_asistencias"] = "";
	$placeHolderstr_prenomina["Spanish"]["total_de_asistencias"] = "";
	$fieldLabelstr_prenomina["Spanish"]["es_nuevo_reingreso"] = "Nuevo Reingreso";
	$fieldToolTipstr_prenomina["Spanish"]["es_nuevo_reingreso"] = "";
	$placeHolderstr_prenomina["Spanish"]["es_nuevo_reingreso"] = "";
	$fieldLabelstr_prenomina["Spanish"]["bono_nuevo_reingreso"] = "Bono N/R";
	$fieldToolTipstr_prenomina["Spanish"]["bono_nuevo_reingreso"] = "";
	$placeHolderstr_prenomina["Spanish"]["bono_nuevo_reingreso"] = "";
	$fieldLabelstr_prenomina["Spanish"]["fecha_de_ingreso"] = "Ingreso";
	$fieldToolTipstr_prenomina["Spanish"]["fecha_de_ingreso"] = "";
	$placeHolderstr_prenomina["Spanish"]["fecha_de_ingreso"] = "";
	$fieldLabelstr_prenomina["Spanish"]["pago_festivo"] = "Pago Festivo";
	$fieldToolTipstr_prenomina["Spanish"]["pago_festivo"] = "";
	$placeHolderstr_prenomina["Spanish"]["pago_festivo"] = "";
	if (count($fieldToolTipstr_prenomina["Spanish"]))
		$tdatatr_prenomina[".isUseToolTips"] = true;
}


	$tdatatr_prenomina[".NCSearch"] = true;



$tdatatr_prenomina[".shortTableName"] = "tr_prenomina";
$tdatatr_prenomina[".nSecOptions"] = 0;

$tdatatr_prenomina[".mainTableOwnerID"] = "";
$tdatatr_prenomina[".entityType"] = 6;
$tdatatr_prenomina[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_prenomina[".strOriginalTableName"] = "tr_prenomina";

	



$tdatatr_prenomina[".showAddInPopup"] = false;

$tdatatr_prenomina[".showEditInPopup"] = false;

$tdatatr_prenomina[".showViewInPopup"] = false;

$tdatatr_prenomina[".listAjax"] = false;
//	temporary
//$tdatatr_prenomina[".listAjax"] = false;

	$tdatatr_prenomina[".audit"] = false;

	$tdatatr_prenomina[".locking"] = false;


$pages = $tdatatr_prenomina[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_prenomina[".edit"] = true;
	$tdatatr_prenomina[".afterEditAction"] = 1;
	$tdatatr_prenomina[".closePopupAfterEdit"] = 1;
	$tdatatr_prenomina[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_prenomina[".add"] = true;
$tdatatr_prenomina[".afterAddAction"] = 1;
$tdatatr_prenomina[".closePopupAfterAdd"] = 1;
$tdatatr_prenomina[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_prenomina[".list"] = true;
}



$tdatatr_prenomina[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_prenomina[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_prenomina[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_prenomina[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_prenomina[".printFriendly"] = true;
}



$tdatatr_prenomina[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_prenomina[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_prenomina[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_prenomina[".isUseAjaxSuggest"] = false;



																																																																																																																																				

$tdatatr_prenomina[".ajaxCodeSnippetAdded"] = false;

$tdatatr_prenomina[".buttonsAdded"] = false;

$tdatatr_prenomina[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_prenomina[".isUseTimeForSearch"] = false;


$tdatatr_prenomina[".badgeColor"] = "6DA5C8";


$tdatatr_prenomina[".allSearchFields"] = array();
$tdatatr_prenomina[".filterFields"] = array();
$tdatatr_prenomina[".requiredSearchFields"] = array();

$tdatatr_prenomina[".googleLikeFields"] = array();
$tdatatr_prenomina[".googleLikeFields"][] = "cat_trabajadores_activos_periodo_id";
$tdatatr_prenomina[".googleLikeFields"][] = "fecha";
$tdatatr_prenomina[".googleLikeFields"][] = "dia_semana";
$tdatatr_prenomina[".googleLikeFields"][] = "nombre_completo";
$tdatatr_prenomina[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatatr_prenomina[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatatr_prenomina[".googleLikeFields"][] = "cat_trabajadores_puestos_id";
$tdatatr_prenomina[".googleLikeFields"][] = "configuracion_pago";
$tdatatr_prenomina[".googleLikeFields"][] = "total_a_pagar";
$tdatatr_prenomina[".googleLikeFields"][] = "cantidad_horas_normales";
$tdatatr_prenomina[".googleLikeFields"][] = "cantidad_horas_extra";
$tdatatr_prenomina[".googleLikeFields"][] = "cantidad_botes";
$tdatatr_prenomina[".googleLikeFields"][] = "cantidad_botes_frambuesa";
$tdatatr_prenomina[".googleLikeFields"][] = "cantidad_botes_zarzamora";
$tdatatr_prenomina[".googleLikeFields"][] = "cantidad_horas_vespertino";
$tdatatr_prenomina[".googleLikeFields"][] = "pago_sueldo_diario";
$tdatatr_prenomina[".googleLikeFields"][] = "pago_sueldo_variable";
$tdatatr_prenomina[".googleLikeFields"][] = "pago_sueldo_variable_cosecha";
$tdatatr_prenomina[".googleLikeFields"][] = "pago_prima";
$tdatatr_prenomina[".googleLikeFields"][] = "pago_bono";
$tdatatr_prenomina[".googleLikeFields"][] = "pago_horas_extra";
$tdatatr_prenomina[".googleLikeFields"][] = "pago_turno_vespertino";
$tdatatr_prenomina[".googleLikeFields"][] = "asistencia";
$tdatatr_prenomina[".googleLikeFields"][] = "justificado";
$tdatatr_prenomina[".googleLikeFields"][] = "total_de_asistencias";
$tdatatr_prenomina[".googleLikeFields"][] = "es_nuevo_reingreso";
$tdatatr_prenomina[".googleLikeFields"][] = "bono_nuevo_reingreso";
$tdatatr_prenomina[".googleLikeFields"][] = "fecha_de_ingreso";
$tdatatr_prenomina[".googleLikeFields"][] = "pago_festivo";




$tdatatr_prenomina[".printerPageOrientation"] = 0;
$tdatatr_prenomina[".nPrinterPageScale"] = 100;

$tdatatr_prenomina[".nPrinterSplitRecords"] = 40;

$tdatatr_prenomina[".geocodingEnabled"] = false;










$tdatatr_prenomina[".pageSize"] = 20;

$tdatatr_prenomina[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_prenomina[".strOrderBy"] = $tstrOrderBy;

$tdatatr_prenomina[".orderindexes"] = array();
	foreach ( my_json_decode("[]") as $orderItem ) {
		$tdatatr_prenomina[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdatatr_prenomina[".sqlHead"] = "";
$tdatatr_prenomina[".sqlFrom"] = "";
$tdatatr_prenomina[".sqlWhereExpr"] = "";
$tdatatr_prenomina[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_prenomina[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_prenomina[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_prenomina[".highlightSearchResults"] = true;

$tableKeystr_prenomina = array();
$tableKeystr_prenomina[] = "cat_trabajadores_activos_periodo_id";
$tdatatr_prenomina[".Keys"] = $tableKeystr_prenomina;


$tdatatr_prenomina[".hideMobileList"] = array();




//	cat_trabajadores_activos_periodo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_activos_periodo_id";
	$fdata["GoodName"] = "cat_trabajadores_activos_periodo_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","cat_trabajadores_activos_periodo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_activos_periodo_id";

	
	
		$fdata["FullName"] = "cat_trabajadores_activos_periodo_id";

	
	
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


	$tdatatr_prenomina["cat_trabajadores_activos_periodo_id"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "cat_trabajadores_activos_periodo_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatr_prenomina["fecha"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "fecha";
//	dia_semana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dia_semana";
	$fdata["GoodName"] = "dia_semana";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","dia_semana");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dia_semana";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "dia_semana";

	
	
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


	$tdatatr_prenomina["dia_semana"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "dia_semana";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

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


	$tdatatr_prenomina["nombre_completo"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "nombre_completo";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","cat_trabajadores_altas_id_empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id_empresa";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

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


	$tdatatr_prenomina["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

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


	$tdatatr_prenomina["cat_trabajadores_altas_id"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "cat_trabajadores_altas_id";
//	cat_trabajadores_puestos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_trabajadores_puestos_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","cat_trabajadores_puestos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_puestos_id";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

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


	$tdatatr_prenomina["cat_trabajadores_puestos_id"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "cat_trabajadores_puestos_id";
//	configuracion_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "configuracion_pago";
	$fdata["GoodName"] = "configuracion_pago";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","configuracion_pago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "configuracion_pago";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "configuracion_pago";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "sv";
	$edata["LookupValues"][] = "svc";
	$edata["LookupValues"][] = "sd";
	$edata["LookupValues"][] = "svv";
	$edata["LookupValues"][] = "sdv";
	$edata["LookupValues"][] = "svcd";

	
		$edata["SelectSize"] = 1;

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


	$tdatatr_prenomina["configuracion_pago"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "configuracion_pago";
//	total_a_pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "total_a_pagar";
	$fdata["GoodName"] = "total_a_pagar";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","total_a_pagar");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "total_a_pagar";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "total_a_pagar";

	
	
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


	$tdatatr_prenomina["total_a_pagar"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "total_a_pagar";
//	cantidad_horas_normales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cantidad_horas_normales";
	$fdata["GoodName"] = "cantidad_horas_normales";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","cantidad_horas_normales");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "cantidad_horas_normales";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "cantidad_horas_normales";

	
	
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


	$tdatatr_prenomina["cantidad_horas_normales"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "cantidad_horas_normales";
//	cantidad_horas_extra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cantidad_horas_extra";
	$fdata["GoodName"] = "cantidad_horas_extra";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","cantidad_horas_extra");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "cantidad_horas_extra";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "cantidad_horas_extra";

	
	
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


	$tdatatr_prenomina["cantidad_horas_extra"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "cantidad_horas_extra";
//	cantidad_botes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cantidad_botes";
	$fdata["GoodName"] = "cantidad_botes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","cantidad_botes");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad_botes";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "cantidad_botes";

	
	
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


	$tdatatr_prenomina["cantidad_botes"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "cantidad_botes";
//	cantidad_botes_frambuesa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cantidad_botes_frambuesa";
	$fdata["GoodName"] = "cantidad_botes_frambuesa";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","cantidad_botes_frambuesa");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad_botes_frambuesa";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "cantidad_botes_frambuesa";

	
	
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


	$tdatatr_prenomina["cantidad_botes_frambuesa"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "cantidad_botes_frambuesa";
//	cantidad_botes_zarzamora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cantidad_botes_zarzamora";
	$fdata["GoodName"] = "cantidad_botes_zarzamora";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","cantidad_botes_zarzamora");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad_botes_zarzamora";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "cantidad_botes_zarzamora";

	
	
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


	$tdatatr_prenomina["cantidad_botes_zarzamora"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "cantidad_botes_zarzamora";
//	cantidad_horas_vespertino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cantidad_horas_vespertino";
	$fdata["GoodName"] = "cantidad_horas_vespertino";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","cantidad_horas_vespertino");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "cantidad_horas_vespertino";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "cantidad_horas_vespertino";

	
	
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


	$tdatatr_prenomina["cantidad_horas_vespertino"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "cantidad_horas_vespertino";
//	pago_sueldo_diario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "pago_sueldo_diario";
	$fdata["GoodName"] = "pago_sueldo_diario";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","pago_sueldo_diario");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "pago_sueldo_diario";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "pago_sueldo_diario";

	
	
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


	$tdatatr_prenomina["pago_sueldo_diario"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "pago_sueldo_diario";
//	pago_sueldo_variable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "pago_sueldo_variable";
	$fdata["GoodName"] = "pago_sueldo_variable";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","pago_sueldo_variable");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "pago_sueldo_variable";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "pago_sueldo_variable";

	
	
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


	$tdatatr_prenomina["pago_sueldo_variable"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "pago_sueldo_variable";
//	pago_sueldo_variable_cosecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "pago_sueldo_variable_cosecha";
	$fdata["GoodName"] = "pago_sueldo_variable_cosecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","pago_sueldo_variable_cosecha");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "pago_sueldo_variable_cosecha";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "pago_sueldo_variable_cosecha";

	
	
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


	$tdatatr_prenomina["pago_sueldo_variable_cosecha"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "pago_sueldo_variable_cosecha";
//	pago_prima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "pago_prima";
	$fdata["GoodName"] = "pago_prima";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","pago_prima");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "pago_prima";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "pago_prima";

	
	
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


	$tdatatr_prenomina["pago_prima"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "pago_prima";
//	pago_bono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "pago_bono";
	$fdata["GoodName"] = "pago_bono";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","pago_bono");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "pago_bono";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "pago_bono";

	
	
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


	$tdatatr_prenomina["pago_bono"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "pago_bono";
//	pago_horas_extra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "pago_horas_extra";
	$fdata["GoodName"] = "pago_horas_extra";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","pago_horas_extra");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "pago_horas_extra";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "pago_horas_extra";

	
	
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


	$tdatatr_prenomina["pago_horas_extra"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "pago_horas_extra";
//	pago_turno_vespertino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "pago_turno_vespertino";
	$fdata["GoodName"] = "pago_turno_vespertino";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","pago_turno_vespertino");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "pago_turno_vespertino";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "pago_turno_vespertino";

	
	
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


	$tdatatr_prenomina["pago_turno_vespertino"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "pago_turno_vespertino";
//	asistencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "asistencia";
	$fdata["GoodName"] = "asistencia";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","asistencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "asistencia";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "asistencia";

	
	
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


	$tdatatr_prenomina["asistencia"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "asistencia";
//	justificado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "justificado";
	$fdata["GoodName"] = "justificado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","justificado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "justificado";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "justificado";

	
	
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


	$tdatatr_prenomina["justificado"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "justificado";
//	total_de_asistencias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "total_de_asistencias";
	$fdata["GoodName"] = "total_de_asistencias";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","total_de_asistencias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "total_de_asistencias";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "total_de_asistencias";

	
	
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


	$tdatatr_prenomina["total_de_asistencias"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "total_de_asistencias";
//	es_nuevo_reingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "es_nuevo_reingreso";
	$fdata["GoodName"] = "es_nuevo_reingreso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","es_nuevo_reingreso");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "es_nuevo_reingreso";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "es_nuevo_reingreso";

	
	
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


	$tdatatr_prenomina["es_nuevo_reingreso"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "es_nuevo_reingreso";
//	bono_nuevo_reingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "bono_nuevo_reingreso";
	$fdata["GoodName"] = "bono_nuevo_reingreso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","bono_nuevo_reingreso");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "bono_nuevo_reingreso";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "bono_nuevo_reingreso";

	
	
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


	$tdatatr_prenomina["bono_nuevo_reingreso"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "bono_nuevo_reingreso";
//	fecha_de_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "fecha_de_ingreso";
	$fdata["GoodName"] = "fecha_de_ingreso";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","fecha_de_ingreso");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_ingreso";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "fecha_de_ingreso";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatr_prenomina["fecha_de_ingreso"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "fecha_de_ingreso";
//	pago_festivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "pago_festivo";
	$fdata["GoodName"] = "pago_festivo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_prenomina","pago_festivo");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "pago_festivo";

	
		$fdata["dateFormat"] = "YYYY-MM-DD";

		$fdata["FullName"] = "pago_festivo";

	
	
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


	$tdatatr_prenomina["pago_festivo"] = $fdata;
		$tdatatr_prenomina[".searchableFields"][] = "pago_festivo";


$tables_data["tr_prenomina"]=&$tdatatr_prenomina;
$field_labels["tr_prenomina"] = &$fieldLabelstr_prenomina;
$fieldToolTips["tr_prenomina"] = &$fieldToolTipstr_prenomina;
$placeHolders["tr_prenomina"] = &$placeHolderstr_prenomina;
$page_titles["tr_prenomina"] = &$pageTitlestr_prenomina;


changeTextControlsToDate( "tr_prenomina" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_prenomina"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_prenomina"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/tr_prenomina_ops.php" ) );



	
		;

																													

$tdatatr_prenomina[".sqlquery"] = $queryData_tr_prenomina;



$tdatatr_prenomina[".hasEvents"] = false;

?>