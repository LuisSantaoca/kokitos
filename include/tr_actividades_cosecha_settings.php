<?php
$tdatatr_actividades_cosecha = array();
$tdatatr_actividades_cosecha[".searchableFields"] = array();
$tdatatr_actividades_cosecha[".ShortName"] = "tr_actividades_cosecha";
$tdatatr_actividades_cosecha[".OwnerID"] = "";
$tdatatr_actividades_cosecha[".OriginalTable"] = "tr_actividades_cosecha";


$tdatatr_actividades_cosecha[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_cosecha[".originalPagesByType"] = $tdatatr_actividades_cosecha[".pagesByType"];
$tdatatr_actividades_cosecha[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_cosecha[".originalPages"] = $tdatatr_actividades_cosecha[".pages"];
$tdatatr_actividades_cosecha[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_actividades_cosecha[".originalDefaultPages"] = $tdatatr_actividades_cosecha[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_cosecha = array();
$fieldToolTipstr_actividades_cosecha = array();
$pageTitlestr_actividades_cosecha = array();
$placeHolderstr_actividades_cosecha = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_cosecha["Spanish"] = array();
	$fieldToolTipstr_actividades_cosecha["Spanish"] = array();
	$placeHolderstr_actividades_cosecha["Spanish"] = array();
	$pageTitlestr_actividades_cosecha["Spanish"] = array();
	$fieldLabelstr_actividades_cosecha["Spanish"]["fecha_de_captura"] = "Fecha";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["fecha_de_captura"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "UP";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "Lotes";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["consecutivo_id"] = "Consecutivo";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["consecutivo_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["consecutivo_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["identificador_dispositivo"] = "Dispositivo";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["identificador_dispositivo"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["identificador_dispositivo"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cat_actividades_especificas_id"] = "Actividad";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cat_actividades_especificas_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cat_actividades_especificas_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["hora"] = "Hora";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["hora"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["hora"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["tr_actividades_cosecha_id"] = "Id";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["tr_actividades_cosecha_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["tr_actividades_cosecha_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["tr_actividades_cosecha_uuid"] = "Uuid";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["tr_actividades_cosecha_uuid"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["tr_actividades_cosecha_uuid"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["time_stamp"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["time_stamp"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["vigente"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["vigente"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["capturista"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["capturista"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cat_trabajador_altas_id"] = "Trabajador";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cat_trabajador_altas_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cat_trabajador_altas_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cantidad"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cantidad"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["peso"] = "Peso";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["peso"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["peso"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["surco"] = "Surco";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["surco"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["surco"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["tunel"] = "Tunel";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["tunel"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["tunel"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["descuento"] = "Descuento";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["descuento"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["descuento"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["Lat"] = "Lat";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["Lat"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["Lat"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["Lng"] = "Lng";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["Lng"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["Lng"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["calidad"] = "Calidad";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["calidad"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["calidad"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "Producto";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cat_produccion_empaques_id"] = "Cat Produccion Empaques Id";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cat_produccion_empaques_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cat_produccion_empaques_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cat_nominas_01_generales_uuid"] = "Cat Nominas 01 Generales Uuid";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cat_nominas_tabulador_actividades_sueldos_variables_id"] = "Cat Nominas Tabulador Actividades Sueldos Variables Id";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cat_nominas_tabulador_actividades_sueldos_variables_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cat_nominas_tabulador_actividades_sueldos_variables_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["fecha"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["fecha"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["llave_fecha_nominas_uuid"] = "Llave Fecha Nominas Uuid";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["llave_fecha_nominas_uuid"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["llave_fecha_nominas_uuid"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["llave_fecha_trabajador_actividad"] = "Llave Fecha Trabajador Actividad";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["llave_fecha_trabajador_actividad"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["llave_fecha_trabajador_actividad"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["llave_fecha_trabajador_catnominas02actividades"] = "Llave Fecha Trabajador Catnominas02actividades";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["llave_fecha_trabajador_catnominas02actividades"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["llave_fecha_trabajador_catnominas02actividades"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["llave_fecha_up_consecutivo"] = "Llave Fecha Up Consecutivo";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["llave_fecha_up_consecutivo"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["llave_fecha_up_consecutivo"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["llave_up_lote_actesp_prod"] = "Llave Up Lote Actesp Prod";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["llave_up_lote_actesp_prod"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["llave_up_lote_actesp_prod"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["llave_up_lote_actesp_prod_uuid"] = "Llave Up Lote Actesp Prod Uuid";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["llave_up_lote_actesp_prod_uuid"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["llave_up_lote_actesp_prod_uuid"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["llave_fecha_up_consecutivo_trab"] = "Llave Fecha Up Consecutivo Trab";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["llave_fecha_up_consecutivo_trab"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["llave_fecha_up_consecutivo_trab"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["llave_fecha_trabajador"] = "Llave Fecha Trabajador";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["llave_fecha_trabajador"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["llave_fecha_trabajador"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["cat_nominas_02_actividades_id"] = "Cat Nominas 02 Actividades Id";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["cat_nominas_02_actividades_id"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["cat_nominas_02_actividades_id"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["llave_fcup"] = "Llave Fcup";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["llave_fcup"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["llave_fcup"] = "";
	$fieldLabelstr_actividades_cosecha["Spanish"]["numero_de_bote"] = "Numero De Bote";
	$fieldToolTipstr_actividades_cosecha["Spanish"]["numero_de_bote"] = "";
	$placeHolderstr_actividades_cosecha["Spanish"]["numero_de_bote"] = "";
	if (count($fieldToolTipstr_actividades_cosecha["Spanish"]))
		$tdatatr_actividades_cosecha[".isUseToolTips"] = true;
}





$tdatatr_actividades_cosecha[".shortTableName"] = "tr_actividades_cosecha";
$tdatatr_actividades_cosecha[".nSecOptions"] = 0;

$tdatatr_actividades_cosecha[".mainTableOwnerID"] = "";
$tdatatr_actividades_cosecha[".entityType"] = 0;
$tdatatr_actividades_cosecha[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_cosecha[".strOriginalTableName"] = "tr_actividades_cosecha";

	



$tdatatr_actividades_cosecha[".showAddInPopup"] = false;

$tdatatr_actividades_cosecha[".showEditInPopup"] = false;

$tdatatr_actividades_cosecha[".showViewInPopup"] = false;

$tdatatr_actividades_cosecha[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_cosecha[".listAjax"] = false;

	$tdatatr_actividades_cosecha[".audit"] = false;

	$tdatatr_actividades_cosecha[".locking"] = false;


$pages = $tdatatr_actividades_cosecha[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_cosecha[".edit"] = true;
	$tdatatr_actividades_cosecha[".afterEditAction"] = 1;
	$tdatatr_actividades_cosecha[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_cosecha[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_cosecha[".add"] = true;
$tdatatr_actividades_cosecha[".afterAddAction"] = 1;
$tdatatr_actividades_cosecha[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_cosecha[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_cosecha[".list"] = true;
}



$tdatatr_actividades_cosecha[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_cosecha[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_cosecha[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_cosecha[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_cosecha[".printFriendly"] = true;
}



$tdatatr_actividades_cosecha[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_cosecha[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_cosecha[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_cosecha[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_actividades_cosecha[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_cosecha[".buttonsAdded"] = false;

$tdatatr_actividades_cosecha[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatr_actividades_cosecha[".isUseTimeForSearch"] = false;


$tdatatr_actividades_cosecha[".badgeColor"] = "6da5c8";


$tdatatr_actividades_cosecha[".allSearchFields"] = array();
$tdatatr_actividades_cosecha[".filterFields"] = array();
$tdatatr_actividades_cosecha[".requiredSearchFields"] = array();

$tdatatr_actividades_cosecha[".googleLikeFields"] = array();
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "tr_actividades_cosecha_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "tr_actividades_cosecha_uuid";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "time_stamp";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "vigente";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "capturista";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "fecha_de_captura";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "hora";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cat_trabajador_altas_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cantidad";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "peso";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "surco";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "tunel";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "consecutivo_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "descuento";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "Lat";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "Lng";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "identificador_dispositivo";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "calidad";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cat_produccion_cultivos_01_productos_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cat_produccion_empaques_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cat_nominas_01_generales_uuid";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "fecha";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "numero_de_bote";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "llave_fecha_nominas_uuid";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "llave_fecha_trabajador_actividad";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "llave_fecha_trabajador_catnominas02actividades";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "llave_fecha_up_consecutivo";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "llave_up_lote_actesp_prod";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "llave_up_lote_actesp_prod_uuid";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "llave_fecha_up_consecutivo_trab";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "llave_fecha_trabajador";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cat_nominas_02_actividades_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "cat_actividades_especificas_id";
$tdatatr_actividades_cosecha[".googleLikeFields"][] = "llave_fcup";



$tdatatr_actividades_cosecha[".tableType"] = "list";

$tdatatr_actividades_cosecha[".printerPageOrientation"] = 0;
$tdatatr_actividades_cosecha[".nPrinterPageScale"] = 100;

$tdatatr_actividades_cosecha[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_cosecha[".geocodingEnabled"] = false;





$tdatatr_actividades_cosecha[".isResizeColumns"] = true;





$tdatatr_actividades_cosecha[".pageSize"] = 20;

$tdatatr_actividades_cosecha[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY tr_actividades_cosecha_id DESC";
$tdatatr_actividades_cosecha[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_cosecha[".orderindexes"] = array();
			$tdatatr_actividades_cosecha[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "tr_actividades_cosecha_id");


$tdatatr_actividades_cosecha[".sqlHead"] = "SELECT tr_actividades_cosecha_id,  tr_actividades_cosecha_uuid,  time_stamp,  vigente,  capturista,  fecha_de_captura,  fecha_de_captura as hora,  cat_trabajador_altas_id,  cat_holding_03_empresas_unidades_productivas_id,  cantidad,  peso,  cat_holding_04_unidades_productivas_lotes_id,  surco,  tunel,  consecutivo_id,  descuento,  Lat,  Lng,  identificador_dispositivo,  calidad,  cat_produccion_cultivos_01_productos_id,  cat_produccion_empaques_id,  cat_nominas_01_generales_uuid,  cat_nominas_tabulador_actividades_sueldos_variables_id,  cat_usuarios_licencias_id,  fecha,  numero_de_bote,  llave_fecha_nominas_uuid,  llave_fecha_trabajador_actividad,  llave_fecha_trabajador_catnominas02actividades,  llave_fecha_up_consecutivo,  llave_up_lote_actesp_prod,  llave_up_lote_actesp_prod_uuid,  llave_fecha_up_consecutivo_trab,  llave_fecha_trabajador,  cat_nominas_02_actividades_id,  cat_actividades_especificas_id,  concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), '-', consecutivo_id,'-', cat_holding_03_empresas_unidades_productivas_id ) as llave_fcup";
$tdatatr_actividades_cosecha[".sqlFrom"] = "FROM tr_actividades_cosecha";
$tdatatr_actividades_cosecha[".sqlWhereExpr"] = "";
$tdatatr_actividades_cosecha[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_cosecha[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_cosecha[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_cosecha[".highlightSearchResults"] = true;

$tableKeystr_actividades_cosecha = array();
$tableKeystr_actividades_cosecha[] = "tr_actividades_cosecha_id";
$tdatatr_actividades_cosecha[".Keys"] = $tableKeystr_actividades_cosecha;


$tdatatr_actividades_cosecha[".hideMobileList"] = array();




//	tr_actividades_cosecha_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_actividades_cosecha_id";
	$fdata["GoodName"] = "tr_actividades_cosecha_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","tr_actividades_cosecha_id");
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


	$tdatatr_actividades_cosecha["tr_actividades_cosecha_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "tr_actividades_cosecha_id";
//	tr_actividades_cosecha_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tr_actividades_cosecha_uuid";
	$fdata["GoodName"] = "tr_actividades_cosecha_uuid";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","tr_actividades_cosecha_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tr_actividades_cosecha_uuid";

		$fdata["sourceSingle"] = "tr_actividades_cosecha_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha_uuid";

	
	
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


	$tdatatr_actividades_cosecha["tr_actividades_cosecha_uuid"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "tr_actividades_cosecha_uuid";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "time_stamp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatatr_actividades_cosecha["time_stamp"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","vigente");
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


	$tdatatr_actividades_cosecha["vigente"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","capturista");
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


	$tdatatr_actividades_cosecha["capturista"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "capturista";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","fecha_de_captura");
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


	$tdatatr_actividades_cosecha["fecha_de_captura"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "fecha_de_captura";
//	hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "hora";
	$fdata["GoodName"] = "hora";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","hora");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_captura";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);

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


	$tdatatr_actividades_cosecha["hora"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "hora";
//	cat_trabajador_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_trabajador_altas_id";
	$fdata["GoodName"] = "cat_trabajador_altas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cat_trabajador_altas_id");
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


	$tdatatr_actividades_cosecha["cat_trabajador_altas_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cat_trabajador_altas_id";
//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cat_holding_03_empresas_unidades_productivas_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "box_cat_holding_03_empresas_unidades_productivas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_holding_03_empresas_unidades_productivas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "UP";

	

	
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


	$tdatatr_actividades_cosecha["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cantidad");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cantidad";

		$fdata["sourceSingle"] = "cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidad";

	
	
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


	$tdatatr_actividades_cosecha["cantidad"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cantidad";
//	peso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "peso";
	$fdata["GoodName"] = "peso";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","peso");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "peso";

		$fdata["sourceSingle"] = "peso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "peso";

	
	
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


	$tdatatr_actividades_cosecha["peso"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "peso";
//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cat_holding_04_unidades_productivas_lotes_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "box_cat_holding_04_unidades_productivas_lotes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_holding_04_unidades_productivas_lotes_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "lote";

	

	
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


	$tdatatr_actividades_cosecha["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
//	surco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "surco";
	$fdata["GoodName"] = "surco";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","surco");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "surco";

		$fdata["sourceSingle"] = "surco";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surco";

	
	
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


	$tdatatr_actividades_cosecha["surco"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "surco";
//	tunel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "tunel";
	$fdata["GoodName"] = "tunel";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","tunel");
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


	$tdatatr_actividades_cosecha["tunel"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "tunel";
//	consecutivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "consecutivo_id";
	$fdata["GoodName"] = "consecutivo_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","consecutivo_id");
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


	$tdatatr_actividades_cosecha["consecutivo_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "consecutivo_id";
//	descuento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "descuento";
	$fdata["GoodName"] = "descuento";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","descuento");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "descuento";

		$fdata["sourceSingle"] = "descuento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descuento";

	
	
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


	$tdatatr_actividades_cosecha["descuento"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "descuento";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","Lat");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lat";

		$fdata["sourceSingle"] = "Lat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdatatr_actividades_cosecha["Lat"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","Lng");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lng";

		$fdata["sourceSingle"] = "Lng";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lng";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdatatr_actividades_cosecha["Lng"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "Lng";
//	identificador_dispositivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "identificador_dispositivo";
	$fdata["GoodName"] = "identificador_dispositivo";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","identificador_dispositivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "identificador_dispositivo";

		$fdata["sourceSingle"] = "identificador_dispositivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identificador_dispositivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 10;

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


	$tdatatr_actividades_cosecha["identificador_dispositivo"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "identificador_dispositivo";
//	calidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "calidad";
	$fdata["GoodName"] = "calidad";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","calidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "calidad";

		$fdata["sourceSingle"] = "calidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calidad";

	
	
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


	$tdatatr_actividades_cosecha["calidad"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "calidad";
//	cat_produccion_cultivos_01_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["GoodName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cat_produccion_cultivos_01_productos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_produccion_cultivos_01_productos_id";

		$fdata["sourceSingle"] = "cat_produccion_cultivos_01_productos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_cultivos_01_productos_id";

	
	
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
	$edata["LookupTable"] = "cat_produccion_cultivos_01_productos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_produccion_cultivos_01_productos_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion_producto";

	

	
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


	$tdatatr_actividades_cosecha["cat_produccion_cultivos_01_productos_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cat_produccion_cultivos_01_productos_id";
//	cat_produccion_empaques_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cat_produccion_empaques_id";
	$fdata["GoodName"] = "cat_produccion_empaques_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cat_produccion_empaques_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_produccion_empaques_id";

		$fdata["sourceSingle"] = "cat_produccion_empaques_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_empaques_id";

	
	
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


	$tdatatr_actividades_cosecha["cat_produccion_empaques_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cat_produccion_empaques_id";
//	cat_nominas_01_generales_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cat_nominas_01_generales_uuid";
	$fdata["GoodName"] = "cat_nominas_01_generales_uuid";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cat_nominas_01_generales_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_nominas_01_generales_uuid";

		$fdata["sourceSingle"] = "cat_nominas_01_generales_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_01_generales_uuid";

	
	
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


	$tdatatr_actividades_cosecha["cat_nominas_01_generales_uuid"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cat_nominas_01_generales_uuid";
//	cat_nominas_tabulador_actividades_sueldos_variables_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
	$fdata["GoodName"] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cat_nominas_tabulador_actividades_sueldos_variables_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_tabulador_actividades_sueldos_variables_id";

		$fdata["sourceSingle"] = "cat_nominas_tabulador_actividades_sueldos_variables_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_tabulador_actividades_sueldos_variables_id";

	
	
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


	$tdatatr_actividades_cosecha["cat_nominas_tabulador_actividades_sueldos_variables_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

		$fdata["sourceSingle"] = "cat_usuarios_licencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_licencias_id";

	
	
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


	$tdatatr_actividades_cosecha["cat_usuarios_licencias_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cat_usuarios_licencias_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatatr_actividades_cosecha["fecha"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "fecha";
//	numero_de_bote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "numero_de_bote";
	$fdata["GoodName"] = "numero_de_bote";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","numero_de_bote");
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


	$tdatatr_actividades_cosecha["numero_de_bote"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "numero_de_bote";
//	llave_fecha_nominas_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "llave_fecha_nominas_uuid";
	$fdata["GoodName"] = "llave_fecha_nominas_uuid";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","llave_fecha_nominas_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fecha_nominas_uuid";

		$fdata["sourceSingle"] = "llave_fecha_nominas_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_fecha_nominas_uuid";

	
	
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


	$tdatatr_actividades_cosecha["llave_fecha_nominas_uuid"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "llave_fecha_nominas_uuid";
//	llave_fecha_trabajador_actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "llave_fecha_trabajador_actividad";
	$fdata["GoodName"] = "llave_fecha_trabajador_actividad";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","llave_fecha_trabajador_actividad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fecha_trabajador_actividad";

		$fdata["sourceSingle"] = "llave_fecha_trabajador_actividad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_fecha_trabajador_actividad";

	
	
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


	$tdatatr_actividades_cosecha["llave_fecha_trabajador_actividad"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "llave_fecha_trabajador_actividad";
//	llave_fecha_trabajador_catnominas02actividades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "llave_fecha_trabajador_catnominas02actividades";
	$fdata["GoodName"] = "llave_fecha_trabajador_catnominas02actividades";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","llave_fecha_trabajador_catnominas02actividades");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fecha_trabajador_catnominas02actividades";

		$fdata["sourceSingle"] = "llave_fecha_trabajador_catnominas02actividades";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_fecha_trabajador_catnominas02actividades";

	
	
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


	$tdatatr_actividades_cosecha["llave_fecha_trabajador_catnominas02actividades"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "llave_fecha_trabajador_catnominas02actividades";
//	llave_fecha_up_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "llave_fecha_up_consecutivo";
	$fdata["GoodName"] = "llave_fecha_up_consecutivo";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","llave_fecha_up_consecutivo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fecha_up_consecutivo";

		$fdata["sourceSingle"] = "llave_fecha_up_consecutivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_fecha_up_consecutivo";

	
	
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


	$tdatatr_actividades_cosecha["llave_fecha_up_consecutivo"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "llave_fecha_up_consecutivo";
//	llave_up_lote_actesp_prod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "llave_up_lote_actesp_prod";
	$fdata["GoodName"] = "llave_up_lote_actesp_prod";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","llave_up_lote_actesp_prod");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_up_lote_actesp_prod";

		$fdata["sourceSingle"] = "llave_up_lote_actesp_prod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_up_lote_actesp_prod";

	
	
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


	$tdatatr_actividades_cosecha["llave_up_lote_actesp_prod"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "llave_up_lote_actesp_prod";
//	llave_up_lote_actesp_prod_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "llave_up_lote_actesp_prod_uuid";
	$fdata["GoodName"] = "llave_up_lote_actesp_prod_uuid";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","llave_up_lote_actesp_prod_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_up_lote_actesp_prod_uuid";

		$fdata["sourceSingle"] = "llave_up_lote_actesp_prod_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_up_lote_actesp_prod_uuid";

	
	
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


	$tdatatr_actividades_cosecha["llave_up_lote_actesp_prod_uuid"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "llave_up_lote_actesp_prod_uuid";
//	llave_fecha_up_consecutivo_trab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "llave_fecha_up_consecutivo_trab";
	$fdata["GoodName"] = "llave_fecha_up_consecutivo_trab";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","llave_fecha_up_consecutivo_trab");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fecha_up_consecutivo_trab";

		$fdata["sourceSingle"] = "llave_fecha_up_consecutivo_trab";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_fecha_up_consecutivo_trab";

	
	
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


	$tdatatr_actividades_cosecha["llave_fecha_up_consecutivo_trab"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "llave_fecha_up_consecutivo_trab";
//	llave_fecha_trabajador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "llave_fecha_trabajador";
	$fdata["GoodName"] = "llave_fecha_trabajador";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","llave_fecha_trabajador");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fecha_trabajador";

		$fdata["sourceSingle"] = "llave_fecha_trabajador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_fecha_trabajador";

	
	
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


	$tdatatr_actividades_cosecha["llave_fecha_trabajador"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "llave_fecha_trabajador";
//	cat_nominas_02_actividades_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cat_nominas_02_actividades_id";
	$fdata["GoodName"] = "cat_nominas_02_actividades_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cat_nominas_02_actividades_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_02_actividades_id";

		$fdata["sourceSingle"] = "cat_nominas_02_actividades_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades_id";

	
	
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


	$tdatatr_actividades_cosecha["cat_nominas_02_actividades_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cat_nominas_02_actividades_id";
//	cat_actividades_especificas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cat_actividades_especificas_id";
	$fdata["GoodName"] = "cat_actividades_especificas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","cat_actividades_especificas_id");
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


	$tdatatr_actividades_cosecha["cat_actividades_especificas_id"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "cat_actividades_especificas_id";
//	llave_fcup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "llave_fcup";
	$fdata["GoodName"] = "llave_fcup";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha","llave_fcup");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_fcup";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), '-', consecutivo_id,'-', cat_holding_03_empresas_unidades_productivas_id )";

	
	
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


	$tdatatr_actividades_cosecha["llave_fcup"] = $fdata;
		$tdatatr_actividades_cosecha[".searchableFields"][] = "llave_fcup";


$tables_data["tr_actividades_cosecha"]=&$tdatatr_actividades_cosecha;
$field_labels["tr_actividades_cosecha"] = &$fieldLabelstr_actividades_cosecha;
$fieldToolTips["tr_actividades_cosecha"] = &$fieldToolTipstr_actividades_cosecha;
$placeHolders["tr_actividades_cosecha"] = &$placeHolderstr_actividades_cosecha;
$page_titles["tr_actividades_cosecha"] = &$pageTitlestr_actividades_cosecha;


changeTextControlsToDate( "tr_actividades_cosecha" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_cosecha"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_cosecha"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_cosecha()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_actividades_cosecha_id,  tr_actividades_cosecha_uuid,  time_stamp,  vigente,  capturista,  fecha_de_captura,  fecha_de_captura as hora,  cat_trabajador_altas_id,  cat_holding_03_empresas_unidades_productivas_id,  cantidad,  peso,  cat_holding_04_unidades_productivas_lotes_id,  surco,  tunel,  consecutivo_id,  descuento,  Lat,  Lng,  identificador_dispositivo,  calidad,  cat_produccion_cultivos_01_productos_id,  cat_produccion_empaques_id,  cat_nominas_01_generales_uuid,  cat_nominas_tabulador_actividades_sueldos_variables_id,  cat_usuarios_licencias_id,  fecha,  numero_de_bote,  llave_fecha_nominas_uuid,  llave_fecha_trabajador_actividad,  llave_fecha_trabajador_catnominas02actividades,  llave_fecha_up_consecutivo,  llave_up_lote_actesp_prod,  llave_up_lote_actesp_prod_uuid,  llave_fecha_up_consecutivo_trab,  llave_fecha_trabajador,  cat_nominas_02_actividades_id,  cat_actividades_especificas_id,  concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), '-', consecutivo_id,'-', cat_holding_03_empresas_unidades_productivas_id ) as llave_fcup";
$proto0["m_strFrom"] = "FROM tr_actividades_cosecha";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tr_actividades_cosecha_id DESC";
	
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
	"m_strName" => "tr_actividades_cosecha_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto6["m_sql"] = "tr_actividades_cosecha_id";
$proto6["m_srcTableName"] = "tr_actividades_cosecha";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_actividades_cosecha_uuid",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto8["m_sql"] = "tr_actividades_cosecha_uuid";
$proto8["m_srcTableName"] = "tr_actividades_cosecha";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto10["m_sql"] = "time_stamp";
$proto10["m_srcTableName"] = "tr_actividades_cosecha";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto12["m_sql"] = "vigente";
$proto12["m_srcTableName"] = "tr_actividades_cosecha";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto14["m_sql"] = "capturista";
$proto14["m_srcTableName"] = "tr_actividades_cosecha";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto16["m_sql"] = "fecha_de_captura";
$proto16["m_srcTableName"] = "tr_actividades_cosecha";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto18["m_sql"] = "fecha_de_captura";
$proto18["m_srcTableName"] = "tr_actividades_cosecha";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "hora";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajador_altas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto20["m_sql"] = "cat_trabajador_altas_id";
$proto20["m_srcTableName"] = "tr_actividades_cosecha";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto22["m_sql"] = "cat_holding_03_empresas_unidades_productivas_id";
$proto22["m_srcTableName"] = "tr_actividades_cosecha";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto24["m_sql"] = "cantidad";
$proto24["m_srcTableName"] = "tr_actividades_cosecha";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "peso",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto26["m_sql"] = "peso";
$proto26["m_srcTableName"] = "tr_actividades_cosecha";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto28["m_sql"] = "cat_holding_04_unidades_productivas_lotes_id";
$proto28["m_srcTableName"] = "tr_actividades_cosecha";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "surco",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto30["m_sql"] = "surco";
$proto30["m_srcTableName"] = "tr_actividades_cosecha";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "tunel",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto32["m_sql"] = "tunel";
$proto32["m_srcTableName"] = "tr_actividades_cosecha";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "consecutivo_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto34["m_sql"] = "consecutivo_id";
$proto34["m_srcTableName"] = "tr_actividades_cosecha";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "descuento",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto36["m_sql"] = "descuento";
$proto36["m_srcTableName"] = "tr_actividades_cosecha";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto38["m_sql"] = "Lat";
$proto38["m_srcTableName"] = "tr_actividades_cosecha";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto40["m_sql"] = "Lng";
$proto40["m_srcTableName"] = "tr_actividades_cosecha";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "identificador_dispositivo",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto42["m_sql"] = "identificador_dispositivo";
$proto42["m_srcTableName"] = "tr_actividades_cosecha";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "calidad",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto44["m_sql"] = "calidad";
$proto44["m_srcTableName"] = "tr_actividades_cosecha";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_cultivos_01_productos_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto46["m_sql"] = "cat_produccion_cultivos_01_productos_id";
$proto46["m_srcTableName"] = "tr_actividades_cosecha";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_empaques_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto48["m_sql"] = "cat_produccion_empaques_id";
$proto48["m_srcTableName"] = "tr_actividades_cosecha";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_01_generales_uuid",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto50["m_sql"] = "cat_nominas_01_generales_uuid";
$proto50["m_srcTableName"] = "tr_actividades_cosecha";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_tabulador_actividades_sueldos_variables_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto52["m_sql"] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
$proto52["m_srcTableName"] = "tr_actividades_cosecha";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto54["m_sql"] = "cat_usuarios_licencias_id";
$proto54["m_srcTableName"] = "tr_actividades_cosecha";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto56["m_sql"] = "fecha";
$proto56["m_srcTableName"] = "tr_actividades_cosecha";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_de_bote",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto58["m_sql"] = "numero_de_bote";
$proto58["m_srcTableName"] = "tr_actividades_cosecha";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_fecha_nominas_uuid",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto60["m_sql"] = "llave_fecha_nominas_uuid";
$proto60["m_srcTableName"] = "tr_actividades_cosecha";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_fecha_trabajador_actividad",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto62["m_sql"] = "llave_fecha_trabajador_actividad";
$proto62["m_srcTableName"] = "tr_actividades_cosecha";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_fecha_trabajador_catnominas02actividades",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto64["m_sql"] = "llave_fecha_trabajador_catnominas02actividades";
$proto64["m_srcTableName"] = "tr_actividades_cosecha";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_fecha_up_consecutivo",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto66["m_sql"] = "llave_fecha_up_consecutivo";
$proto66["m_srcTableName"] = "tr_actividades_cosecha";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_up_lote_actesp_prod",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto68["m_sql"] = "llave_up_lote_actesp_prod";
$proto68["m_srcTableName"] = "tr_actividades_cosecha";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_up_lote_actesp_prod_uuid",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto70["m_sql"] = "llave_up_lote_actesp_prod_uuid";
$proto70["m_srcTableName"] = "tr_actividades_cosecha";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_fecha_up_consecutivo_trab",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto72["m_sql"] = "llave_fecha_up_consecutivo_trab";
$proto72["m_srcTableName"] = "tr_actividades_cosecha";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_fecha_trabajador",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto74["m_sql"] = "llave_fecha_trabajador";
$proto74["m_srcTableName"] = "tr_actividades_cosecha";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_02_actividades_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto76["m_sql"] = "cat_nominas_02_actividades_id";
$proto76["m_srcTableName"] = "tr_actividades_cosecha";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_especificas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto78["m_sql"] = "cat_actividades_especificas_id";
$proto78["m_srcTableName"] = "tr_actividades_cosecha";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$proto81=array();
$proto81["m_functiontype"] = "SQLF_CUSTOM";
$proto81["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATE_FORMAT(fecha_de_captura, '%Y-%d-%m')"
));

$proto81["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto81["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "consecutivo_id"
));

$proto81["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto81["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_holding_03_empresas_unidades_productivas_id"
));

$proto81["m_arguments"][]=$obj;
$proto81["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto81);

$proto80["m_sql"] = "concat(DATE_FORMAT(fecha_de_captura, '%Y-%d-%m'), '-', consecutivo_id,'-', cat_holding_03_empresas_unidades_productivas_id )";
$proto80["m_srcTableName"] = "tr_actividades_cosecha";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "llave_fcup";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto87=array();
$proto87["m_link"] = "SQLL_MAIN";
			$proto88=array();
$proto88["m_strName"] = "tr_actividades_cosecha";
$proto88["m_srcTableName"] = "tr_actividades_cosecha";
$proto88["m_columns"] = array();
$proto88["m_columns"][] = "tr_actividades_cosecha_id";
$proto88["m_columns"][] = "tr_actividades_cosecha_uuid";
$proto88["m_columns"][] = "time_stamp";
$proto88["m_columns"][] = "vigente";
$proto88["m_columns"][] = "capturista";
$proto88["m_columns"][] = "fecha_de_captura";
$proto88["m_columns"][] = "cat_trabajador_altas_id";
$proto88["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto88["m_columns"][] = "cantidad";
$proto88["m_columns"][] = "peso";
$proto88["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto88["m_columns"][] = "surco";
$proto88["m_columns"][] = "tunel";
$proto88["m_columns"][] = "consecutivo_id";
$proto88["m_columns"][] = "descuento";
$proto88["m_columns"][] = "Lat";
$proto88["m_columns"][] = "Lng";
$proto88["m_columns"][] = "identificador_dispositivo";
$proto88["m_columns"][] = "calidad";
$proto88["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto88["m_columns"][] = "cat_produccion_empaques_id";
$proto88["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto88["m_columns"][] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
$proto88["m_columns"][] = "cat_usuarios_licencias_id";
$proto88["m_columns"][] = "fecha";
$proto88["m_columns"][] = "numero_de_bote";
$proto88["m_columns"][] = "llave_fecha_nominas_uuid";
$proto88["m_columns"][] = "llave_fecha_trabajador_actividad";
$proto88["m_columns"][] = "llave_fecha_trabajador_catnominas02actividades";
$proto88["m_columns"][] = "llave_fecha_up_consecutivo";
$proto88["m_columns"][] = "llave_up_lote_actesp_prod";
$proto88["m_columns"][] = "llave_up_lote_actesp_prod_uuid";
$proto88["m_columns"][] = "llave_fecha_up_consecutivo_trab";
$proto88["m_columns"][] = "llave_fecha_trabajador";
$proto88["m_columns"][] = "cat_nominas_02_actividades_id";
$proto88["m_columns"][] = "cat_actividades_especificas_id";
$obj = new SQLTable($proto88);

$proto87["m_table"] = $obj;
$proto87["m_sql"] = "tr_actividades_cosecha";
$proto87["m_alias"] = "";
$proto87["m_srcTableName"] = "tr_actividades_cosecha";
$proto89=array();
$proto89["m_sql"] = "";
$proto89["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto89["m_column"]=$obj;
$proto89["m_contained"] = array();
$proto89["m_strCase"] = "";
$proto89["m_havingmode"] = false;
$proto89["m_inBrackets"] = false;
$proto89["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto89);

$proto87["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto87);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto91=array();
						$obj = new SQLField(array(
	"m_strName" => "tr_actividades_cosecha_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha"
));

$proto91["m_column"]=$obj;
$proto91["m_bAsc"] = 0;
$proto91["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto91);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tr_actividades_cosecha";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_cosecha = createSqlQuery_tr_actividades_cosecha();


	
		;

																																						

$tdatatr_actividades_cosecha[".sqlquery"] = $queryData_tr_actividades_cosecha;



include_once(getabspath("include/tr_actividades_cosecha_events.php"));
$tdatatr_actividades_cosecha[".hasEvents"] = true;

?>