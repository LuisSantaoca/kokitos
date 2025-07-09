<?php
$tdatatr_actividades_cosecha_detalle_tags = array();
$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"] = array();
$tdatatr_actividades_cosecha_detalle_tags[".ShortName"] = "tr_actividades_cosecha_detalle_tags";
$tdatatr_actividades_cosecha_detalle_tags[".OwnerID"] = "";
$tdatatr_actividades_cosecha_detalle_tags[".OriginalTable"] = "tr_actividades_cosecha_detalle_tags";


$tdatatr_actividades_cosecha_detalle_tags[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_cosecha_detalle_tags[".originalPagesByType"] = $tdatatr_actividades_cosecha_detalle_tags[".pagesByType"];
$tdatatr_actividades_cosecha_detalle_tags[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_cosecha_detalle_tags[".originalPages"] = $tdatatr_actividades_cosecha_detalle_tags[".pages"];
$tdatatr_actividades_cosecha_detalle_tags[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_actividades_cosecha_detalle_tags[".originalDefaultPages"] = $tdatatr_actividades_cosecha_detalle_tags[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_cosecha_detalle_tags = array();
$fieldToolTipstr_actividades_cosecha_detalle_tags = array();
$pageTitlestr_actividades_cosecha_detalle_tags = array();
$placeHolderstr_actividades_cosecha_detalle_tags = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"] = array();
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"] = array();
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"] = array();
	$pageTitlestr_actividades_cosecha_detalle_tags["Spanish"] = array();
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["tr_actividades_cosecha_detalle_tags_id"] = "Id";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["tr_actividades_cosecha_detalle_tags_id"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["tr_actividades_cosecha_detalle_tags_id"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["tag_uuid"] = "Tag Uuid";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["tag_uuid"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["tag_uuid"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["vigente"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["vigente"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["fecha_de_captura"] = "Fecha De Captura";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["fecha_de_captura"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["consecutivo_id"] = "Consecutivo Id";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["consecutivo_id"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["consecutivo_id"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["capturista"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["capturista"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["time_stamp"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["time_stamp"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["cat_trabajador_altas_id"] = "Trabajador";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["cat_trabajador_altas_id"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["cat_trabajador_altas_id"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "UP";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["cantidad"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["cantidad"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["peso"] = "Peso";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["peso"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["peso"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "Loges";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["surco"] = "Surco";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["surco"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["surco"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["tunel"] = "Tunel";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["tunel"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["tunel"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["descuento"] = "Descuento";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["descuento"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["descuento"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["Lat"] = "Lat";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["Lat"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["Lat"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["Lng"] = "Lng";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["Lng"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["Lng"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["identificador_dispositivo"] = "Dispositivo";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["identificador_dispositivo"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["identificador_dispositivo"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["calidad"] = "Calidad";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["calidad"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["calidad"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "Cultivo";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["llave_unica"] = "Llave Unica";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["llave_unica"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["llave_unica"] = "";
	$fieldLabelstr_actividades_cosecha_detalle_tags["Spanish"]["numero_de_bote"] = "Numero De Bote";
	$fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]["numero_de_bote"] = "";
	$placeHolderstr_actividades_cosecha_detalle_tags["Spanish"]["numero_de_bote"] = "";
	if (count($fieldToolTipstr_actividades_cosecha_detalle_tags["Spanish"]))
		$tdatatr_actividades_cosecha_detalle_tags[".isUseToolTips"] = true;
}





$tdatatr_actividades_cosecha_detalle_tags[".shortTableName"] = "tr_actividades_cosecha_detalle_tags";
$tdatatr_actividades_cosecha_detalle_tags[".nSecOptions"] = 0;

$tdatatr_actividades_cosecha_detalle_tags[".mainTableOwnerID"] = "";
$tdatatr_actividades_cosecha_detalle_tags[".entityType"] = 0;
$tdatatr_actividades_cosecha_detalle_tags[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_cosecha_detalle_tags[".strOriginalTableName"] = "tr_actividades_cosecha_detalle_tags";

	



$tdatatr_actividades_cosecha_detalle_tags[".showAddInPopup"] = false;

$tdatatr_actividades_cosecha_detalle_tags[".showEditInPopup"] = false;

$tdatatr_actividades_cosecha_detalle_tags[".showViewInPopup"] = false;

$tdatatr_actividades_cosecha_detalle_tags[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_cosecha_detalle_tags[".listAjax"] = false;

	$tdatatr_actividades_cosecha_detalle_tags[".audit"] = false;

	$tdatatr_actividades_cosecha_detalle_tags[".locking"] = false;


$pages = $tdatatr_actividades_cosecha_detalle_tags[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_cosecha_detalle_tags[".edit"] = true;
	$tdatatr_actividades_cosecha_detalle_tags[".afterEditAction"] = 1;
	$tdatatr_actividades_cosecha_detalle_tags[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_cosecha_detalle_tags[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_cosecha_detalle_tags[".add"] = true;
$tdatatr_actividades_cosecha_detalle_tags[".afterAddAction"] = 1;
$tdatatr_actividades_cosecha_detalle_tags[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_cosecha_detalle_tags[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_cosecha_detalle_tags[".list"] = true;
}



$tdatatr_actividades_cosecha_detalle_tags[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_cosecha_detalle_tags[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_cosecha_detalle_tags[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_cosecha_detalle_tags[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_cosecha_detalle_tags[".printFriendly"] = true;
}



$tdatatr_actividades_cosecha_detalle_tags[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_cosecha_detalle_tags[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_cosecha_detalle_tags[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_cosecha_detalle_tags[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_actividades_cosecha_detalle_tags[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_cosecha_detalle_tags[".buttonsAdded"] = false;

$tdatatr_actividades_cosecha_detalle_tags[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_actividades_cosecha_detalle_tags[".isUseTimeForSearch"] = false;


$tdatatr_actividades_cosecha_detalle_tags[".badgeColor"] = "BC8F8F";


$tdatatr_actividades_cosecha_detalle_tags[".allSearchFields"] = array();
$tdatatr_actividades_cosecha_detalle_tags[".filterFields"] = array();
$tdatatr_actividades_cosecha_detalle_tags[".requiredSearchFields"] = array();

$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"] = array();
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "llave_unica";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "tr_actividades_cosecha_detalle_tags_id";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "tag_uuid";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "numero_de_bote";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "vigente";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "fecha_de_captura";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "consecutivo_id";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "capturista";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "time_stamp";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "cat_trabajador_altas_id";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "cantidad";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "peso";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "surco";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "tunel";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "descuento";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "Lat";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "Lng";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "identificador_dispositivo";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "calidad";
$tdatatr_actividades_cosecha_detalle_tags[".googleLikeFields"][] = "cat_produccion_cultivos_01_productos_id";



$tdatatr_actividades_cosecha_detalle_tags[".tableType"] = "list";

$tdatatr_actividades_cosecha_detalle_tags[".printerPageOrientation"] = 0;
$tdatatr_actividades_cosecha_detalle_tags[".nPrinterPageScale"] = 100;

$tdatatr_actividades_cosecha_detalle_tags[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_cosecha_detalle_tags[".geocodingEnabled"] = false;





$tdatatr_actividades_cosecha_detalle_tags[".isResizeColumns"] = true;





$tdatatr_actividades_cosecha_detalle_tags[".pageSize"] = 20;

$tdatatr_actividades_cosecha_detalle_tags[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_actividades_cosecha_detalle_tags[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_cosecha_detalle_tags[".orderindexes"] = array();


$tdatatr_actividades_cosecha_detalle_tags[".sqlHead"] = "SELECT llave_unica,  	tr_actividades_cosecha_detalle_tags_id,  	tag_uuid,  	numero_de_bote,  	vigente,  	fecha_de_captura,  	consecutivo_id,  	capturista,  	time_stamp,  	cat_trabajador_altas_id,  	cat_holding_03_empresas_unidades_productivas_id,  	cantidad,  	peso,  	cat_holding_04_unidades_productivas_lotes_id,  	surco,  	tunel,  	descuento,  	Lat,  	Lng,  	identificador_dispositivo,  	calidad,  	cat_produccion_cultivos_01_productos_id";
$tdatatr_actividades_cosecha_detalle_tags[".sqlFrom"] = "FROM tr_actividades_cosecha_detalle_tags";
$tdatatr_actividades_cosecha_detalle_tags[".sqlWhereExpr"] = "";
$tdatatr_actividades_cosecha_detalle_tags[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_cosecha_detalle_tags[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_cosecha_detalle_tags[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_cosecha_detalle_tags[".highlightSearchResults"] = true;

$tableKeystr_actividades_cosecha_detalle_tags = array();
$tableKeystr_actividades_cosecha_detalle_tags[] = "tr_actividades_cosecha_detalle_tags_id";
$tdatatr_actividades_cosecha_detalle_tags[".Keys"] = $tableKeystr_actividades_cosecha_detalle_tags;


$tdatatr_actividades_cosecha_detalle_tags[".hideMobileList"] = array();




//	llave_unica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "llave_unica";
	$fdata["GoodName"] = "llave_unica";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","llave_unica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_unica";

		$fdata["sourceSingle"] = "llave_unica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_unica";

	
	
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


	$tdatatr_actividades_cosecha_detalle_tags["llave_unica"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "llave_unica";
//	tr_actividades_cosecha_detalle_tags_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tr_actividades_cosecha_detalle_tags_id";
	$fdata["GoodName"] = "tr_actividades_cosecha_detalle_tags_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","tr_actividades_cosecha_detalle_tags_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_actividades_cosecha_detalle_tags_id";

		$fdata["sourceSingle"] = "tr_actividades_cosecha_detalle_tags_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha_detalle_tags_id";

	
	
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


	$tdatatr_actividades_cosecha_detalle_tags["tr_actividades_cosecha_detalle_tags_id"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "tr_actividades_cosecha_detalle_tags_id";
//	tag_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tag_uuid";
	$fdata["GoodName"] = "tag_uuid";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","tag_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tag_uuid";

		$fdata["sourceSingle"] = "tag_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tag_uuid";

	
	
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


	$tdatatr_actividades_cosecha_detalle_tags["tag_uuid"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "tag_uuid";
//	numero_de_bote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "numero_de_bote";
	$fdata["GoodName"] = "numero_de_bote";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","numero_de_bote");
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


	$tdatatr_actividades_cosecha_detalle_tags["numero_de_bote"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "numero_de_bote";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","vigente");
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


	$tdatatr_actividades_cosecha_detalle_tags["vigente"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "vigente";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","fecha_de_captura");
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


	$tdatatr_actividades_cosecha_detalle_tags["fecha_de_captura"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "fecha_de_captura";
//	consecutivo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "consecutivo_id";
	$fdata["GoodName"] = "consecutivo_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","consecutivo_id");
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


	$tdatatr_actividades_cosecha_detalle_tags["consecutivo_id"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "consecutivo_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","capturista");
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


	$tdatatr_actividades_cosecha_detalle_tags["capturista"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","time_stamp");
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


	$tdatatr_actividades_cosecha_detalle_tags["time_stamp"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "time_stamp";
//	cat_trabajador_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_trabajador_altas_id";
	$fdata["GoodName"] = "cat_trabajador_altas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","cat_trabajador_altas_id");
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


	$tdatatr_actividades_cosecha_detalle_tags["cat_trabajador_altas_id"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "cat_trabajador_altas_id";
//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","cat_holding_03_empresas_unidades_productivas_id");
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


	$tdatatr_actividades_cosecha_detalle_tags["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","cantidad");
	$fdata["FieldType"] = 5;


	
	
			

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


	$tdatatr_actividades_cosecha_detalle_tags["cantidad"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "cantidad";
//	peso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "peso";
	$fdata["GoodName"] = "peso";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","peso");
	$fdata["FieldType"] = 5;


	
	
			

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


	$tdatatr_actividades_cosecha_detalle_tags["peso"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "peso";
//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","cat_holding_04_unidades_productivas_lotes_id");
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


	$tdatatr_actividades_cosecha_detalle_tags["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
//	surco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "surco";
	$fdata["GoodName"] = "surco";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","surco");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatatr_actividades_cosecha_detalle_tags["surco"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "surco";
//	tunel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "tunel";
	$fdata["GoodName"] = "tunel";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","tunel");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatatr_actividades_cosecha_detalle_tags["tunel"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "tunel";
//	descuento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "descuento";
	$fdata["GoodName"] = "descuento";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","descuento");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "descuento";

		$fdata["sourceSingle"] = "descuento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descuento";

	
	
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


	$tdatatr_actividades_cosecha_detalle_tags["descuento"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "descuento";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","Lat");
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


	$tdatatr_actividades_cosecha_detalle_tags["Lat"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","Lng");
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


	$tdatatr_actividades_cosecha_detalle_tags["Lng"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "Lng";
//	identificador_dispositivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "identificador_dispositivo";
	$fdata["GoodName"] = "identificador_dispositivo";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","identificador_dispositivo");
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


	$tdatatr_actividades_cosecha_detalle_tags["identificador_dispositivo"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "identificador_dispositivo";
//	calidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "calidad";
	$fdata["GoodName"] = "calidad";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","calidad");
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


	$tdatatr_actividades_cosecha_detalle_tags["calidad"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "calidad";
//	cat_produccion_cultivos_01_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["GoodName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha_detalle_tags";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha_detalle_tags","cat_produccion_cultivos_01_productos_id");
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


	$tdatatr_actividades_cosecha_detalle_tags["cat_produccion_cultivos_01_productos_id"] = $fdata;
		$tdatatr_actividades_cosecha_detalle_tags[".searchableFields"][] = "cat_produccion_cultivos_01_productos_id";


$tables_data["tr_actividades_cosecha_detalle_tags"]=&$tdatatr_actividades_cosecha_detalle_tags;
$field_labels["tr_actividades_cosecha_detalle_tags"] = &$fieldLabelstr_actividades_cosecha_detalle_tags;
$fieldToolTips["tr_actividades_cosecha_detalle_tags"] = &$fieldToolTipstr_actividades_cosecha_detalle_tags;
$placeHolders["tr_actividades_cosecha_detalle_tags"] = &$placeHolderstr_actividades_cosecha_detalle_tags;
$page_titles["tr_actividades_cosecha_detalle_tags"] = &$pageTitlestr_actividades_cosecha_detalle_tags;


changeTextControlsToDate( "tr_actividades_cosecha_detalle_tags" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_cosecha_detalle_tags"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_cosecha_detalle_tags"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_cosecha_detalle_tags()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "llave_unica,  	tr_actividades_cosecha_detalle_tags_id,  	tag_uuid,  	numero_de_bote,  	vigente,  	fecha_de_captura,  	consecutivo_id,  	capturista,  	time_stamp,  	cat_trabajador_altas_id,  	cat_holding_03_empresas_unidades_productivas_id,  	cantidad,  	peso,  	cat_holding_04_unidades_productivas_lotes_id,  	surco,  	tunel,  	descuento,  	Lat,  	Lng,  	identificador_dispositivo,  	calidad,  	cat_produccion_cultivos_01_productos_id";
$proto0["m_strFrom"] = "FROM tr_actividades_cosecha_detalle_tags";
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
	"m_strName" => "llave_unica",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto6["m_sql"] = "llave_unica";
$proto6["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_actividades_cosecha_detalle_tags_id",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto8["m_sql"] = "tr_actividades_cosecha_detalle_tags_id";
$proto8["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_uuid",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto10["m_sql"] = "tag_uuid";
$proto10["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_de_bote",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto12["m_sql"] = "numero_de_bote";
$proto12["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto14["m_sql"] = "vigente";
$proto14["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto16["m_sql"] = "fecha_de_captura";
$proto16["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "consecutivo_id",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto18["m_sql"] = "consecutivo_id";
$proto18["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto20["m_sql"] = "capturista";
$proto20["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto22["m_sql"] = "time_stamp";
$proto22["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajador_altas_id",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto24["m_sql"] = "cat_trabajador_altas_id";
$proto24["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto26["m_sql"] = "cat_holding_03_empresas_unidades_productivas_id";
$proto26["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto28["m_sql"] = "cantidad";
$proto28["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "peso",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto30["m_sql"] = "peso";
$proto30["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto32["m_sql"] = "cat_holding_04_unidades_productivas_lotes_id";
$proto32["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "surco",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto34["m_sql"] = "surco";
$proto34["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "tunel",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto36["m_sql"] = "tunel";
$proto36["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "descuento",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto38["m_sql"] = "descuento";
$proto38["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto40["m_sql"] = "Lat";
$proto40["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto42["m_sql"] = "Lng";
$proto42["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "identificador_dispositivo",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto44["m_sql"] = "identificador_dispositivo";
$proto44["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "calidad",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto46["m_sql"] = "calidad";
$proto46["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_cultivos_01_productos_id",
	"m_strTable" => "tr_actividades_cosecha_detalle_tags",
	"m_srcTableName" => "tr_actividades_cosecha_detalle_tags"
));

$proto48["m_sql"] = "cat_produccion_cultivos_01_productos_id";
$proto48["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "tr_actividades_cosecha_detalle_tags";
$proto51["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "llave_unica";
$proto51["m_columns"][] = "tr_actividades_cosecha_detalle_tags_id";
$proto51["m_columns"][] = "tag_uuid";
$proto51["m_columns"][] = "numero_de_bote";
$proto51["m_columns"][] = "vigente";
$proto51["m_columns"][] = "fecha_de_captura";
$proto51["m_columns"][] = "consecutivo_id";
$proto51["m_columns"][] = "capturista";
$proto51["m_columns"][] = "time_stamp";
$proto51["m_columns"][] = "cat_trabajador_altas_id";
$proto51["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto51["m_columns"][] = "cantidad";
$proto51["m_columns"][] = "peso";
$proto51["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto51["m_columns"][] = "surco";
$proto51["m_columns"][] = "tunel";
$proto51["m_columns"][] = "descuento";
$proto51["m_columns"][] = "Lat";
$proto51["m_columns"][] = "Lng";
$proto51["m_columns"][] = "identificador_dispositivo";
$proto51["m_columns"][] = "calidad";
$proto51["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "tr_actividades_cosecha_detalle_tags";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "tr_actividades_cosecha_detalle_tags";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_actividades_cosecha_detalle_tags";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_cosecha_detalle_tags = createSqlQuery_tr_actividades_cosecha_detalle_tags();


	
		;

																						

$tdatatr_actividades_cosecha_detalle_tags[".sqlquery"] = $queryData_tr_actividades_cosecha_detalle_tags;



$tdatatr_actividades_cosecha_detalle_tags[".hasEvents"] = false;

?>