<?php
$tdatatr_actividades_cosecha_query = array();
$tdatatr_actividades_cosecha_query[".searchableFields"] = array();
$tdatatr_actividades_cosecha_query[".ShortName"] = "tr_actividades_cosecha_query";
$tdatatr_actividades_cosecha_query[".OwnerID"] = "";
$tdatatr_actividades_cosecha_query[".OriginalTable"] = "tr_actividades_cosecha";


$tdatatr_actividades_cosecha_query[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_cosecha_query[".originalPagesByType"] = $tdatatr_actividades_cosecha_query[".pagesByType"];
$tdatatr_actividades_cosecha_query[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_cosecha_query[".originalPages"] = $tdatatr_actividades_cosecha_query[".pages"];
$tdatatr_actividades_cosecha_query[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_actividades_cosecha_query[".originalDefaultPages"] = $tdatatr_actividades_cosecha_query[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_cosecha_query = array();
$fieldToolTipstr_actividades_cosecha_query = array();
$pageTitlestr_actividades_cosecha_query = array();
$placeHolderstr_actividades_cosecha_query = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_cosecha_query["Spanish"] = array();
	$fieldToolTipstr_actividades_cosecha_query["Spanish"] = array();
	$placeHolderstr_actividades_cosecha_query["Spanish"] = array();
	$pageTitlestr_actividades_cosecha_query["Spanish"] = array();
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["calidad"] = "Calidad";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["calidad"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["calidad"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["fecha"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["fecha"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["nombre_completo"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["nombre_completo"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["consecutivo_id"] = "Consecutivo";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["consecutivo_id"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["consecutivo_id"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["tr_actividades_cosecha_id"] = "Id";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["tr_actividades_cosecha_id"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["tr_actividades_cosecha_id"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["capturista"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["capturista"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["fecha_de_captura"] = "Fecha";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["fecha_de_captura"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["cat_trabajador_altas_id"] = "Trabajador";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["cat_trabajador_altas_id"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["cat_trabajador_altas_id"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "UP";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["descripcion_unidades_productivas"] = "Descripcion Unidades Productivas";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["descripcion_unidades_productivas"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["descripcion_unidades_productivas"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "Lotes";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["descripcion_lote"] = "Descripcion Lote";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["descripcion_lote"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["descripcion_lote"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "Producto";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["descripcion_producto"] = "Descripcion Producto";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["descripcion_producto"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["descripcion_producto"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["cat_actividades_especificas_id"] = "Actividad";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["cat_actividades_especificas_id"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["cat_actividades_especificas_id"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["descripcion_actividad"] = "Descripcion Actividad";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["descripcion_actividad"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["descripcion_actividad"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["surco"] = "Surco";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["surco"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["surco"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["tunel"] = "Tunel";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["tunel"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["tunel"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["cantidad"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["cantidad"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["descuento"] = "Descuento";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["descuento"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["descuento"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["total_neto"] = "Total Neto";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["total_neto"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["total_neto"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["cat_produccion_empaques_id"] = "Cat Produccion Empaques Id";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["cat_produccion_empaques_id"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["cat_produccion_empaques_id"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["descripcion_empaque"] = "Descripcion Empaque";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["descripcion_empaque"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["descripcion_empaque"] = "";
	$fieldLabelstr_actividades_cosecha_query["Spanish"]["cat_trabajadores_altas_id"] = "Cat Trabajadores Altas Id";
	$fieldToolTipstr_actividades_cosecha_query["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderstr_actividades_cosecha_query["Spanish"]["cat_trabajadores_altas_id"] = "";
	if (count($fieldToolTipstr_actividades_cosecha_query["Spanish"]))
		$tdatatr_actividades_cosecha_query[".isUseToolTips"] = true;
}





$tdatatr_actividades_cosecha_query[".shortTableName"] = "tr_actividades_cosecha_query";
$tdatatr_actividades_cosecha_query[".nSecOptions"] = 0;

$tdatatr_actividades_cosecha_query[".mainTableOwnerID"] = "";
$tdatatr_actividades_cosecha_query[".entityType"] = 1;
$tdatatr_actividades_cosecha_query[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_cosecha_query[".strOriginalTableName"] = "tr_actividades_cosecha";

	



$tdatatr_actividades_cosecha_query[".showAddInPopup"] = false;

$tdatatr_actividades_cosecha_query[".showEditInPopup"] = false;

$tdatatr_actividades_cosecha_query[".showViewInPopup"] = false;

$tdatatr_actividades_cosecha_query[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_cosecha_query[".listAjax"] = false;

	$tdatatr_actividades_cosecha_query[".audit"] = false;

	$tdatatr_actividades_cosecha_query[".locking"] = false;


$pages = $tdatatr_actividades_cosecha_query[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_cosecha_query[".edit"] = true;
	$tdatatr_actividades_cosecha_query[".afterEditAction"] = 1;
	$tdatatr_actividades_cosecha_query[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_cosecha_query[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_cosecha_query[".add"] = true;
$tdatatr_actividades_cosecha_query[".afterAddAction"] = 1;
$tdatatr_actividades_cosecha_query[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_cosecha_query[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_cosecha_query[".list"] = true;
}



$tdatatr_actividades_cosecha_query[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_cosecha_query[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_cosecha_query[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_cosecha_query[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_cosecha_query[".printFriendly"] = true;
}



$tdatatr_actividades_cosecha_query[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_cosecha_query[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_cosecha_query[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_cosecha_query[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_actividades_cosecha_query[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_cosecha_query[".buttonsAdded"] = false;

$tdatatr_actividades_cosecha_query[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatr_actividades_cosecha_query[".isUseTimeForSearch"] = false;


$tdatatr_actividades_cosecha_query[".badgeColor"] = "E67349";


$tdatatr_actividades_cosecha_query[".allSearchFields"] = array();
$tdatatr_actividades_cosecha_query[".filterFields"] = array();
$tdatatr_actividades_cosecha_query[".requiredSearchFields"] = array();

$tdatatr_actividades_cosecha_query[".googleLikeFields"] = array();
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "consecutivo_id";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "tr_actividades_cosecha_id";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "capturista";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "fecha_de_captura";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "fecha";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "cat_trabajador_altas_id";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "nombre_completo";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "descripcion_unidades_productivas";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "descripcion_lote";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "cat_produccion_empaques_id";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "descripcion_empaque";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "cat_produccion_cultivos_01_productos_id";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "descripcion_producto";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "cat_actividades_especificas_id";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "descripcion_actividad";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "surco";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "tunel";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "calidad";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "cantidad";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "descuento";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "total_neto";
$tdatatr_actividades_cosecha_query[".googleLikeFields"][] = "cat_trabajadores_altas_id";



$tdatatr_actividades_cosecha_query[".tableType"] = "list";

$tdatatr_actividades_cosecha_query[".printerPageOrientation"] = 0;
$tdatatr_actividades_cosecha_query[".nPrinterPageScale"] = 100;

$tdatatr_actividades_cosecha_query[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_cosecha_query[".geocodingEnabled"] = false;





$tdatatr_actividades_cosecha_query[".isResizeColumns"] = true;





$tdatatr_actividades_cosecha_query[".pageSize"] = 20;

$tdatatr_actividades_cosecha_query[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_actividades_cosecha_query[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_cosecha_query[".orderindexes"] = array();


$tdatatr_actividades_cosecha_query[".sqlHead"] = "SELECT tr_actividades_cosecha.consecutivo_id,  tr_actividades_cosecha.tr_actividades_cosecha_id,  tr_actividades_cosecha.capturista,  tr_actividades_cosecha.fecha_de_captura,  DATE(tr_actividades_cosecha.fecha_de_captura) AS fecha,  tr_actividades_cosecha.cat_trabajador_altas_id,  cat_trabajadores_altas.nombre_completo AS nombre_completo,  tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id,  cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas,  tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id,  cat_holding_04_unidades_productivas_lotes.descripcion_lote,  tr_actividades_cosecha.cat_produccion_empaques_id,  cat_produccion_empaques.descripcion_empaque,  tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id,  cat_produccion_cultivos_01_productos.descripcion_producto,  tr_actividades_cosecha.cat_actividades_especificas_id,  CONCAT(COALESCE(NULLIF(cat_actividades.descripcion_actividad, ''), ' '), ' ', COALESCE(NULLIF(cat_actividades_unidades_de_costo.descripcion_unidades_de_costo, ''), ' ')) AS descripcion_actividad,  tr_actividades_cosecha.surco,  tr_actividades_cosecha.tunel,  tr_actividades_cosecha.calidad,  tr_actividades_cosecha.cantidad,  tr_actividades_cosecha.descuento,  tr_actividades_cosecha.cantidad - tr_actividades_cosecha.descuento AS total_neto,  cat_trabajadores_altas.cat_trabajadores_altas_id";
$tdatatr_actividades_cosecha_query[".sqlFrom"] = "FROM tr_actividades_cosecha  LEFT OUTER JOIN cat_trabajadores_altas ON tr_actividades_cosecha.cat_trabajador_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id  LEFT OUTER JOIN cat_holding_03_empresas_unidades_productivas ON tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id = cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id  LEFT OUTER JOIN cat_holding_04_unidades_productivas_lotes ON tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id  LEFT OUTER JOIN cat_produccion_cultivos_01_productos ON tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id = cat_produccion_cultivos_01_productos.cat_produccion_cultivos_01_productos_id  LEFT OUTER JOIN cat_actividades_especificas ON tr_actividades_cosecha.cat_actividades_especificas_id = cat_actividades_especificas.cat_actividades_especificas_id  LEFT OUTER JOIN cat_actividades ON cat_actividades_especificas.cat_actividades_id = cat_actividades.cat_actividades_id  LEFT OUTER JOIN cat_actividades_unidades_de_costo ON cat_actividades_especificas.cat_actividades_unidades_de_costo_id = cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id  LEFT OUTER JOIN cat_produccion_empaques ON tr_actividades_cosecha.cat_produccion_empaques_id = cat_produccion_empaques.cat_produccion_empaques_id";
$tdatatr_actividades_cosecha_query[".sqlWhereExpr"] = "(tr_actividades_cosecha.vigente =1) AND (cat_trabajadores_altas.cat_trabajadores_altas_id = 599)";
$tdatatr_actividades_cosecha_query[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_cosecha_query[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_cosecha_query[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_cosecha_query[".highlightSearchResults"] = true;

$tableKeystr_actividades_cosecha_query = array();
$tdatatr_actividades_cosecha_query[".Keys"] = $tableKeystr_actividades_cosecha_query;


$tdatatr_actividades_cosecha_query[".hideMobileList"] = array();




//	consecutivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "consecutivo_id";
	$fdata["GoodName"] = "consecutivo_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","consecutivo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "consecutivo_id";

		$fdata["sourceSingle"] = "consecutivo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.consecutivo_id";

	
	
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


	$tdatatr_actividades_cosecha_query["consecutivo_id"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "consecutivo_id";
//	tr_actividades_cosecha_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tr_actividades_cosecha_id";
	$fdata["GoodName"] = "tr_actividades_cosecha_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","tr_actividades_cosecha_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_actividades_cosecha_id";

		$fdata["sourceSingle"] = "tr_actividades_cosecha_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.tr_actividades_cosecha_id";

	
	
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


	$tdatatr_actividades_cosecha_query["tr_actividades_cosecha_id"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "tr_actividades_cosecha_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.capturista";

	
	
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


	$tdatatr_actividades_cosecha_query["capturista"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "capturista";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.fecha_de_captura";

	
	
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


	$tdatatr_actividades_cosecha_query["fecha_de_captura"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "fecha_de_captura";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(tr_actividades_cosecha.fecha_de_captura)";

	
	
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


	$tdatatr_actividades_cosecha_query["fecha"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "fecha";
//	cat_trabajador_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_trabajador_altas_id";
	$fdata["GoodName"] = "cat_trabajador_altas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","cat_trabajador_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajador_altas_id";

		$fdata["sourceSingle"] = "cat_trabajador_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cat_trabajador_altas_id";

	
	
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


	$tdatatr_actividades_cosecha_query["cat_trabajador_altas_id"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "cat_trabajador_altas_id";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","nombre_completo");
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


	$tdatatr_actividades_cosecha_query["nombre_completo"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "nombre_completo";
//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","cat_holding_03_empresas_unidades_productivas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_03_empresas_unidades_productivas_id";

		$fdata["sourceSingle"] = "cat_holding_03_empresas_unidades_productivas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id";

	
	
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


	$tdatatr_actividades_cosecha_query["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	descripcion_unidades_productivas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "descripcion_unidades_productivas";
	$fdata["GoodName"] = "descripcion_unidades_productivas";
	$fdata["ownerTable"] = "cat_holding_03_empresas_unidades_productivas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","descripcion_unidades_productivas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_unidades_productivas";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas";

	
	
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


	$tdatatr_actividades_cosecha_query["descripcion_unidades_productivas"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "descripcion_unidades_productivas";
//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","cat_holding_04_unidades_productivas_lotes_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_04_unidades_productivas_lotes_id";

		$fdata["sourceSingle"] = "cat_holding_04_unidades_productivas_lotes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id";

	
	
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


	$tdatatr_actividades_cosecha_query["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
//	descripcion_lote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "descripcion_lote";
	$fdata["GoodName"] = "descripcion_lote";
	$fdata["ownerTable"] = "cat_holding_04_unidades_productivas_lotes";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","descripcion_lote");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_lote";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_04_unidades_productivas_lotes.descripcion_lote";

	
	
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


	$tdatatr_actividades_cosecha_query["descripcion_lote"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "descripcion_lote";
//	cat_produccion_empaques_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cat_produccion_empaques_id";
	$fdata["GoodName"] = "cat_produccion_empaques_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","cat_produccion_empaques_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_produccion_empaques_id";

		$fdata["sourceSingle"] = "cat_produccion_empaques_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cat_produccion_empaques_id";

	
	
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


	$tdatatr_actividades_cosecha_query["cat_produccion_empaques_id"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "cat_produccion_empaques_id";
//	descripcion_empaque
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "descripcion_empaque";
	$fdata["GoodName"] = "descripcion_empaque";
	$fdata["ownerTable"] = "cat_produccion_empaques";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","descripcion_empaque");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_empaque";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_empaques.descripcion_empaque";

	
	
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


	$tdatatr_actividades_cosecha_query["descripcion_empaque"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "descripcion_empaque";
//	cat_produccion_cultivos_01_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["GoodName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","cat_produccion_cultivos_01_productos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_produccion_cultivos_01_productos_id";

		$fdata["sourceSingle"] = "cat_produccion_cultivos_01_productos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id";

	
	
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


	$tdatatr_actividades_cosecha_query["cat_produccion_cultivos_01_productos_id"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "cat_produccion_cultivos_01_productos_id";
//	descripcion_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "descripcion_producto";
	$fdata["GoodName"] = "descripcion_producto";
	$fdata["ownerTable"] = "cat_produccion_cultivos_01_productos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","descripcion_producto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_producto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_cultivos_01_productos.descripcion_producto";

	
	
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


	$tdatatr_actividades_cosecha_query["descripcion_producto"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "descripcion_producto";
//	cat_actividades_especificas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cat_actividades_especificas_id";
	$fdata["GoodName"] = "cat_actividades_especificas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","cat_actividades_especificas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_especificas_id";

		$fdata["sourceSingle"] = "cat_actividades_especificas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cat_actividades_especificas_id";

	
	
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


	$tdatatr_actividades_cosecha_query["cat_actividades_especificas_id"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "cat_actividades_especificas_id";
//	descripcion_actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "descripcion_actividad";
	$fdata["GoodName"] = "descripcion_actividad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","descripcion_actividad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_actividad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(COALESCE(NULLIF(cat_actividades.descripcion_actividad, ''), ' '), ' ', COALESCE(NULLIF(cat_actividades_unidades_de_costo.descripcion_unidades_de_costo, ''), ' '))";

	
	
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


	$tdatatr_actividades_cosecha_query["descripcion_actividad"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "descripcion_actividad";
//	surco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "surco";
	$fdata["GoodName"] = "surco";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","surco");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "surco";

		$fdata["sourceSingle"] = "surco";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.surco";

	
	
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


	$tdatatr_actividades_cosecha_query["surco"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "surco";
//	tunel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "tunel";
	$fdata["GoodName"] = "tunel";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","tunel");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tunel";

		$fdata["sourceSingle"] = "tunel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.tunel";

	
	
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


	$tdatatr_actividades_cosecha_query["tunel"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "tunel";
//	calidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "calidad";
	$fdata["GoodName"] = "calidad";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","calidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "calidad";

		$fdata["sourceSingle"] = "calidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.calidad";

	
	
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


	$tdatatr_actividades_cosecha_query["calidad"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "calidad";
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","cantidad");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "cantidad";

		$fdata["sourceSingle"] = "cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cantidad";

	
	
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


	$tdatatr_actividades_cosecha_query["cantidad"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "cantidad";
//	descuento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "descuento";
	$fdata["GoodName"] = "descuento";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","descuento");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "descuento";

		$fdata["sourceSingle"] = "descuento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.descuento";

	
	
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


	$tdatatr_actividades_cosecha_query["descuento"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "descuento";
//	total_neto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "total_neto";
	$fdata["GoodName"] = "total_neto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","total_neto");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "total_neto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cantidad - tr_actividades_cosecha.descuento";

	
	
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


	$tdatatr_actividades_cosecha_query["total_neto"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "total_neto";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_query","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";

	
	
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


	$tdatatr_actividades_cosecha_query["cat_trabajadores_altas_id"] = $fdata;
		$tdatatr_actividades_cosecha_query[".searchableFields"][] = "cat_trabajadores_altas_id";


$tables_data["tr_actividades_cosecha_query"]=&$tdatatr_actividades_cosecha_query;
$field_labels["tr_actividades_cosecha_query"] = &$fieldLabelstr_actividades_cosecha_query;
$fieldToolTips["tr_actividades_cosecha_query"] = &$fieldToolTipstr_actividades_cosecha_query;
$placeHolders["tr_actividades_cosecha_query"] = &$placeHolderstr_actividades_cosecha_query;
$page_titles["tr_actividades_cosecha_query"] = &$pageTitlestr_actividades_cosecha_query;


changeTextControlsToDate( "tr_actividades_cosecha_query" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_cosecha_query"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_cosecha_query"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_cosecha_query()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_actividades_cosecha.consecutivo_id,  tr_actividades_cosecha.tr_actividades_cosecha_id,  tr_actividades_cosecha.capturista,  tr_actividades_cosecha.fecha_de_captura,  DATE(tr_actividades_cosecha.fecha_de_captura) AS fecha,  tr_actividades_cosecha.cat_trabajador_altas_id,  cat_trabajadores_altas.nombre_completo AS nombre_completo,  tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id,  cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas,  tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id,  cat_holding_04_unidades_productivas_lotes.descripcion_lote,  tr_actividades_cosecha.cat_produccion_empaques_id,  cat_produccion_empaques.descripcion_empaque,  tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id,  cat_produccion_cultivos_01_productos.descripcion_producto,  tr_actividades_cosecha.cat_actividades_especificas_id,  CONCAT(COALESCE(NULLIF(cat_actividades.descripcion_actividad, ''), ' '), ' ', COALESCE(NULLIF(cat_actividades_unidades_de_costo.descripcion_unidades_de_costo, ''), ' ')) AS descripcion_actividad,  tr_actividades_cosecha.surco,  tr_actividades_cosecha.tunel,  tr_actividades_cosecha.calidad,  tr_actividades_cosecha.cantidad,  tr_actividades_cosecha.descuento,  tr_actividades_cosecha.cantidad - tr_actividades_cosecha.descuento AS total_neto,  cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto0["m_strFrom"] = "FROM tr_actividades_cosecha  LEFT OUTER JOIN cat_trabajadores_altas ON tr_actividades_cosecha.cat_trabajador_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id  LEFT OUTER JOIN cat_holding_03_empresas_unidades_productivas ON tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id = cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id  LEFT OUTER JOIN cat_holding_04_unidades_productivas_lotes ON tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id  LEFT OUTER JOIN cat_produccion_cultivos_01_productos ON tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id = cat_produccion_cultivos_01_productos.cat_produccion_cultivos_01_productos_id  LEFT OUTER JOIN cat_actividades_especificas ON tr_actividades_cosecha.cat_actividades_especificas_id = cat_actividades_especificas.cat_actividades_especificas_id  LEFT OUTER JOIN cat_actividades ON cat_actividades_especificas.cat_actividades_id = cat_actividades.cat_actividades_id  LEFT OUTER JOIN cat_actividades_unidades_de_costo ON cat_actividades_especificas.cat_actividades_unidades_de_costo_id = cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id  LEFT OUTER JOIN cat_produccion_empaques ON tr_actividades_cosecha.cat_produccion_empaques_id = cat_produccion_empaques.cat_produccion_empaques_id";
$proto0["m_strWhere"] = "(tr_actividades_cosecha.vigente =1) AND (cat_trabajadores_altas.cat_trabajadores_altas_id = 599)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(tr_actividades_cosecha.vigente =1) AND (cat_trabajadores_altas.cat_trabajadores_altas_id = 599)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(tr_actividades_cosecha.vigente =1) AND (cat_trabajadores_altas.cat_trabajadores_altas_id = 599)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "tr_actividades_cosecha.vigente =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id = 599";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 599";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "consecutivo_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto10["m_sql"] = "tr_actividades_cosecha.consecutivo_id";
$proto10["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_actividades_cosecha_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto12["m_sql"] = "tr_actividades_cosecha.tr_actividades_cosecha_id";
$proto12["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto14["m_sql"] = "tr_actividades_cosecha.capturista";
$proto14["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto16["m_sql"] = "tr_actividades_cosecha.fecha_de_captura";
$proto16["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tr_actividades_cosecha.fecha_de_captura"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "DATE(tr_actividades_cosecha.fecha_de_captura)";
$proto18["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "fecha";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajador_altas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto21["m_sql"] = "tr_actividades_cosecha.cat_trabajador_altas_id";
$proto21["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto23["m_sql"] = "cat_trabajadores_altas.nombre_completo";
$proto23["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "nombre_completo";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto25["m_sql"] = "tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id";
$proto25["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_unidades_productivas",
	"m_strTable" => "cat_holding_03_empresas_unidades_productivas",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto27["m_sql"] = "cat_holding_03_empresas_unidades_productivas.descripcion_unidades_productivas";
$proto27["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto29["m_sql"] = "tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id";
$proto29["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_lote",
	"m_strTable" => "cat_holding_04_unidades_productivas_lotes",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto31["m_sql"] = "cat_holding_04_unidades_productivas_lotes.descripcion_lote";
$proto31["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_empaques_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto33["m_sql"] = "tr_actividades_cosecha.cat_produccion_empaques_id";
$proto33["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_empaque",
	"m_strTable" => "cat_produccion_empaques",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto35["m_sql"] = "cat_produccion_empaques.descripcion_empaque";
$proto35["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_cultivos_01_productos_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto37["m_sql"] = "tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id";
$proto37["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_producto",
	"m_strTable" => "cat_produccion_cultivos_01_productos",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto39["m_sql"] = "cat_produccion_cultivos_01_productos.descripcion_producto";
$proto39["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_especificas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto41["m_sql"] = "tr_actividades_cosecha.cat_actividades_especificas_id";
$proto41["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$proto44=array();
$proto44["m_functiontype"] = "SQLF_CUSTOM";
$proto44["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(NULLIF(cat_actividades.descripcion_actividad, ''), ' ')"
));

$proto44["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto44["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(NULLIF(cat_actividades_unidades_de_costo.descripcion_unidades_de_costo, ''), ' ')"
));

$proto44["m_arguments"][]=$obj;
$proto44["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto44);

$proto43["m_sql"] = "CONCAT(COALESCE(NULLIF(cat_actividades.descripcion_actividad, ''), ' '), ' ', COALESCE(NULLIF(cat_actividades_unidades_de_costo.descripcion_unidades_de_costo, ''), ' '))";
$proto43["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "descripcion_actividad";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "surco",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto48["m_sql"] = "tr_actividades_cosecha.surco";
$proto48["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "tunel",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto50["m_sql"] = "tr_actividades_cosecha.tunel";
$proto50["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "calidad",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto52["m_sql"] = "tr_actividades_cosecha.calidad";
$proto52["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto54["m_sql"] = "tr_actividades_cosecha.cantidad";
$proto54["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "descuento",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto56["m_sql"] = "tr_actividades_cosecha.descuento";
$proto56["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "tr_actividades_cosecha.cantidad - tr_actividades_cosecha.descuento"
));

$proto58["m_sql"] = "tr_actividades_cosecha.cantidad - tr_actividades_cosecha.descuento";
$proto58["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "total_neto";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto60["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto60["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "tr_actividades_cosecha";
$proto63["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "tr_actividades_cosecha_id";
$proto63["m_columns"][] = "tr_actividades_cosecha_uuid";
$proto63["m_columns"][] = "time_stamp";
$proto63["m_columns"][] = "vigente";
$proto63["m_columns"][] = "capturista";
$proto63["m_columns"][] = "fecha_de_captura";
$proto63["m_columns"][] = "cat_trabajador_altas_id";
$proto63["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto63["m_columns"][] = "cantidad";
$proto63["m_columns"][] = "peso";
$proto63["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto63["m_columns"][] = "surco";
$proto63["m_columns"][] = "tunel";
$proto63["m_columns"][] = "consecutivo_id";
$proto63["m_columns"][] = "descuento";
$proto63["m_columns"][] = "Lat";
$proto63["m_columns"][] = "Lng";
$proto63["m_columns"][] = "identificador_dispositivo";
$proto63["m_columns"][] = "calidad";
$proto63["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto63["m_columns"][] = "cat_produccion_empaques_id";
$proto63["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto63["m_columns"][] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
$proto63["m_columns"][] = "cat_usuarios_licencias_id";
$proto63["m_columns"][] = "fecha";
$proto63["m_columns"][] = "numero_de_bote";
$proto63["m_columns"][] = "llave_fecha_nominas_uuid";
$proto63["m_columns"][] = "llave_fecha_trabajador_actividad";
$proto63["m_columns"][] = "llave_fecha_trabajador_catnominas02actividades";
$proto63["m_columns"][] = "llave_fecha_up_consecutivo";
$proto63["m_columns"][] = "llave_up_lote_actesp_prod";
$proto63["m_columns"][] = "llave_up_lote_actesp_prod_uuid";
$proto63["m_columns"][] = "llave_fecha_up_consecutivo_trab";
$proto63["m_columns"][] = "llave_fecha_trabajador";
$proto63["m_columns"][] = "cat_nominas_02_actividades_id";
$proto63["m_columns"][] = "cat_actividades_especificas_id";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "tr_actividades_cosecha";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
												$proto66=array();
$proto66["m_link"] = "SQLL_LEFTJOIN";
			$proto67=array();
$proto67["m_strName"] = "cat_trabajadores_altas";
$proto67["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "cat_trabajadores_altas_id";
$proto67["m_columns"][] = "time_stamp";
$proto67["m_columns"][] = "capturista";
$proto67["m_columns"][] = "vigente";
$proto67["m_columns"][] = "fecha_de_registro";
$proto67["m_columns"][] = "apellido_paterno";
$proto67["m_columns"][] = "apellido_materno";
$proto67["m_columns"][] = "primer_nombre";
$proto67["m_columns"][] = "segundo_nombre";
$proto67["m_columns"][] = "rfc";
$proto67["m_columns"][] = "curp";
$proto67["m_columns"][] = "num_seguridad_social";
$proto67["m_columns"][] = "municipio_nacimiento";
$proto67["m_columns"][] = "estado_nacimiento";
$proto67["m_columns"][] = "nacionalidad";
$proto67["m_columns"][] = "telefono_emergencia";
$proto67["m_columns"][] = "contacto_emergencia";
$proto67["m_columns"][] = "nombre_completo";
$proto67["m_columns"][] = "fecha_de_nacimiento";
$proto67["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto67["m_columns"][] = "celular_mensajes";
$proto67["m_columns"][] = "permiso_msm";
$proto67["m_columns"][] = "estatus";
$proto67["m_columns"][] = "fecha_de_captura";
$proto67["m_columns"][] = "face_id";
$proto67["m_columns"][] = "tr_tags_numero_asignado";
$proto67["m_columns"][] = "cat_trabajadores_puestos_id";
$proto67["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto67["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto67["m_columns"][] = "calle";
$proto67["m_columns"][] = "colonia";
$proto67["m_columns"][] = "municipio";
$proto67["m_columns"][] = "estado";
$proto67["m_columns"][] = "codigo_postal";
$proto67["m_columns"][] = "banco";
$proto67["m_columns"][] = "cuenta_bancaria";
$proto67["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto67["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto67["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto67["m_columns"][] = "cat_holding_02_empresas";
$proto67["m_columns"][] = "fecha_de_ingreso";
$proto67["m_columns"][] = "numero_domicilio";
$proto67["m_columns"][] = "observaciones";
$proto67["m_columns"][] = "link_foto";
$proto67["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto67["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_altas ON tr_actividades_cosecha.cat_trabajador_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto68=array();
$proto68["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id = tr_actividades_cosecha.cat_trabajador_altas_id";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= tr_actividades_cosecha.cat_trabajador_altas_id";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
												$proto70=array();
$proto70["m_link"] = "SQLL_LEFTJOIN";
			$proto71=array();
$proto71["m_strName"] = "cat_holding_03_empresas_unidades_productivas";
$proto71["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto71["m_columns"][] = "cat_holding_03_empresas_registros_patronales_id";
$proto71["m_columns"][] = "cat_holding_02_empresas_id";
$proto71["m_columns"][] = "cat_holding_01_id";
$proto71["m_columns"][] = "time_stamp";
$proto71["m_columns"][] = "vigente";
$proto71["m_columns"][] = "capturista";
$proto71["m_columns"][] = "descripcion_unidades_productivas";
$proto71["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_categorias_id";
$proto71["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_categorias_mu_id";
$proto71["m_columns"][] = "Lat";
$proto71["m_columns"][] = "Lng";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "LEFT OUTER JOIN cat_holding_03_empresas_unidades_productivas ON tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id = cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto72=array();
$proto72["m_sql"] = "cat_holding_03_empresas_unidades_productivas.cat_holding_03_empresas_unidades_productivas_id = tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "cat_holding_03_empresas_unidades_productivas",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= tr_actividades_cosecha.cat_holding_03_empresas_unidades_productivas_id";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
												$proto74=array();
$proto74["m_link"] = "SQLL_LEFTJOIN";
			$proto75=array();
$proto75["m_strName"] = "cat_holding_04_unidades_productivas_lotes";
$proto75["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto75["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto75["m_columns"][] = "cat_holding_03_empresas_registros_patronales_id";
$proto75["m_columns"][] = "cat_holding_02_empresas_id";
$proto75["m_columns"][] = "cat_holding_01_id";
$proto75["m_columns"][] = "time_stamp";
$proto75["m_columns"][] = "vigente";
$proto75["m_columns"][] = "capturista";
$proto75["m_columns"][] = "descripcion_lote";
$proto75["m_columns"][] = "Lat";
$proto75["m_columns"][] = "Lng";
$proto75["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_categorias_id";
$proto75["m_columns"][] = "cat_holding_03_empresas_up_group_predios_id";
$proto75["m_columns"][] = "cat_produccion_temporadas_id";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "LEFT OUTER JOIN cat_holding_04_unidades_productivas_lotes ON tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id = cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto76=array();
$proto76["m_sql"] = "cat_holding_04_unidades_productivas_lotes.cat_holding_04_unidades_productivas_lotes_id = tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "cat_holding_04_unidades_productivas_lotes",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "= tr_actividades_cosecha.cat_holding_04_unidades_productivas_lotes_id";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
												$proto78=array();
$proto78["m_link"] = "SQLL_LEFTJOIN";
			$proto79=array();
$proto79["m_strName"] = "cat_produccion_cultivos_01_productos";
$proto79["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto79["m_columns"][] = "descripcion_producto";
$proto79["m_columns"][] = "vigente";
$proto79["m_columns"][] = "capturista";
$proto79["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "LEFT OUTER JOIN cat_produccion_cultivos_01_productos ON tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id = cat_produccion_cultivos_01_productos.cat_produccion_cultivos_01_productos_id";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto80=array();
$proto80["m_sql"] = "cat_produccion_cultivos_01_productos.cat_produccion_cultivos_01_productos_id = tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_produccion_cultivos_01_productos_id",
	"m_strTable" => "cat_produccion_cultivos_01_productos",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
												$proto82=array();
$proto82["m_link"] = "SQLL_LEFTJOIN";
			$proto83=array();
$proto83["m_strName"] = "cat_actividades_especificas";
$proto83["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "cat_actividades_especificas_id";
$proto83["m_columns"][] = "cat_actividades_id";
$proto83["m_columns"][] = "cat_actividades_unidades_de_costo_id";
$proto83["m_columns"][] = "cat_actividades_variables_de_ejecucion_id";
$proto83["m_columns"][] = "cat_actividades_forma_de_pago_mu_id";
$proto83["m_columns"][] = "time_stamp";
$proto83["m_columns"][] = "vigente";
$proto83["m_columns"][] = "capturista";
$proto83["m_columns"][] = "llave_actividad_unidad_variable_licencia";
$proto83["m_columns"][] = "cat_nominas_conceptos_id";
$proto83["m_columns"][] = "costo_bruto_actividad";
$proto83["m_columns"][] = "cat_actividades_alcance_mu_id";
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "LEFT OUTER JOIN cat_actividades_especificas ON tr_actividades_cosecha.cat_actividades_especificas_id = cat_actividades_especificas.cat_actividades_especificas_id";
$proto82["m_alias"] = "";
$proto82["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto84=array();
$proto84["m_sql"] = "cat_actividades_especificas.cat_actividades_especificas_id = tr_actividades_cosecha.cat_actividades_especificas_id";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_actividades_especificas_id",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "= tr_actividades_cosecha.cat_actividades_especificas_id";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

$proto82["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto82);

$proto0["m_fromlist"][]=$obj;
												$proto86=array();
$proto86["m_link"] = "SQLL_LEFTJOIN";
			$proto87=array();
$proto87["m_strName"] = "cat_actividades";
$proto87["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "cat_actividades_id";
$proto87["m_columns"][] = "time_stamp";
$proto87["m_columns"][] = "vigente";
$proto87["m_columns"][] = "capturista";
$proto87["m_columns"][] = "descripcion_actividad";
$proto87["m_columns"][] = "cat_actividades_categorias_id";
$proto87["m_columns"][] = "cat_actividades_categorias_mu_id";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "LEFT OUTER JOIN cat_actividades ON cat_actividades_especificas.cat_actividades_id = cat_actividades.cat_actividades_id";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto88=array();
$proto88["m_sql"] = "cat_actividades.cat_actividades_id = cat_actividades_especificas.cat_actividades_id";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_actividades_id",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "= cat_actividades_especificas.cat_actividades_id";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
												$proto90=array();
$proto90["m_link"] = "SQLL_LEFTJOIN";
			$proto91=array();
$proto91["m_strName"] = "cat_actividades_unidades_de_costo";
$proto91["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "cat_actividades_unidades_de_costo_id";
$proto91["m_columns"][] = "time_stamp";
$proto91["m_columns"][] = "vigente";
$proto91["m_columns"][] = "capturista";
$proto91["m_columns"][] = "descripcion_unidades_de_costo";
$proto91["m_columns"][] = "factor_de_calculo";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "LEFT OUTER JOIN cat_actividades_unidades_de_costo ON cat_actividades_especificas.cat_actividades_unidades_de_costo_id = cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id";
$proto90["m_alias"] = "";
$proto90["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto92=array();
$proto92["m_sql"] = "cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id = cat_actividades_especificas.cat_actividades_unidades_de_costo_id";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_actividades_unidades_de_costo_id",
	"m_strTable" => "cat_actividades_unidades_de_costo",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= cat_actividades_especificas.cat_actividades_unidades_de_costo_id";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
												$proto94=array();
$proto94["m_link"] = "SQLL_LEFTJOIN";
			$proto95=array();
$proto95["m_strName"] = "cat_produccion_empaques";
$proto95["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto95["m_columns"] = array();
$proto95["m_columns"][] = "cat_produccion_empaques_id";
$proto95["m_columns"][] = "descripcion_empaque";
$proto95["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto95["m_columns"][] = "vigente";
$proto95["m_columns"][] = "capturista";
$proto95["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto95);

$proto94["m_table"] = $obj;
$proto94["m_sql"] = "LEFT OUTER JOIN cat_produccion_empaques ON tr_actividades_cosecha.cat_produccion_empaques_id = cat_produccion_empaques.cat_produccion_empaques_id";
$proto94["m_alias"] = "";
$proto94["m_srcTableName"] = "tr_actividades_cosecha_query";
$proto96=array();
$proto96["m_sql"] = "cat_produccion_empaques.cat_produccion_empaques_id = tr_actividades_cosecha.cat_produccion_empaques_id";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_produccion_empaques_id",
	"m_strTable" => "cat_produccion_empaques",
	"m_srcTableName" => "tr_actividades_cosecha_query"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "= tr_actividades_cosecha.cat_produccion_empaques_id";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

$proto94["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto94);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_actividades_cosecha_query";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_cosecha_query = createSqlQuery_tr_actividades_cosecha_query();


	
		;

																								

$tdatatr_actividades_cosecha_query[".sqlquery"] = $queryData_tr_actividades_cosecha_query;



include_once(getabspath("include/tr_actividades_cosecha_query_events.php"));
$tdatatr_actividades_cosecha_query[".hasEvents"] = true;

?>