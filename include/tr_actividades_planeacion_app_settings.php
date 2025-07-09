<?php
$tdatatr_actividades_planeacion_app = array();
$tdatatr_actividades_planeacion_app[".searchableFields"] = array();
$tdatatr_actividades_planeacion_app[".ShortName"] = "tr_actividades_planeacion_app";
$tdatatr_actividades_planeacion_app[".OwnerID"] = "";
$tdatatr_actividades_planeacion_app[".OriginalTable"] = "tr_actividades_planeacion_app";


$tdatatr_actividades_planeacion_app[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_planeacion_app[".originalPagesByType"] = $tdatatr_actividades_planeacion_app[".pagesByType"];
$tdatatr_actividades_planeacion_app[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_planeacion_app[".originalPages"] = $tdatatr_actividades_planeacion_app[".pages"];
$tdatatr_actividades_planeacion_app[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatr_actividades_planeacion_app[".originalDefaultPages"] = $tdatatr_actividades_planeacion_app[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_planeacion_app = array();
$fieldToolTipstr_actividades_planeacion_app = array();
$pageTitlestr_actividades_planeacion_app = array();
$placeHolderstr_actividades_planeacion_app = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_planeacion_app["Spanish"] = array();
	$fieldToolTipstr_actividades_planeacion_app["Spanish"] = array();
	$placeHolderstr_actividades_planeacion_app["Spanish"] = array();
	$pageTitlestr_actividades_planeacion_app["Spanish"] = array();
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["tr_actividades_planeacion_app_id"] = "Tr Actividades Planeacion App Id";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["tr_actividades_planeacion_app_id"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["tr_actividades_planeacion_app_id"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["vigente"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["vigente"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["capturista"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["capturista"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["time_stamp"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["time_stamp"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["imei"] = "Imei";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["imei"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["imei"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["fecha_programada_maestro"] = "Fecha y hora";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["fecha_programada_maestro"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["fecha_programada_maestro"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["cat_actividades_id_maestro"] = "Actividad";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["cat_actividades_id_maestro"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["cat_actividades_id_maestro"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["observaciones_maestro"] = "Observaciones";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["observaciones_maestro"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["observaciones_maestro"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "Unidad Productiva";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "Lote/sector";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["cat_actividades_unidades_de_costo_id"] = "Unidad de costo";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["uuid"] = "Uuid";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["uuid"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["uuid"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["cat_trabajadores_altas_id_supervisor"] = "Supervisor";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["cat_trabajadores_altas_id_supervisor"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["cat_trabajadores_altas_id_supervisor"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["folio_maestro"] = "Folio Maestro";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["folio_maestro"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["folio_maestro"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["estado"] = "Estado";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["estado"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["estado"] = "";
	$fieldLabelstr_actividades_planeacion_app["Spanish"]["personas_programadas"] = "Personas Programadas";
	$fieldToolTipstr_actividades_planeacion_app["Spanish"]["personas_programadas"] = "";
	$placeHolderstr_actividades_planeacion_app["Spanish"]["personas_programadas"] = "";
	if (count($fieldToolTipstr_actividades_planeacion_app["Spanish"]))
		$tdatatr_actividades_planeacion_app[".isUseToolTips"] = true;
}





$tdatatr_actividades_planeacion_app[".shortTableName"] = "tr_actividades_planeacion_app";
$tdatatr_actividades_planeacion_app[".nSecOptions"] = 0;

$tdatatr_actividades_planeacion_app[".mainTableOwnerID"] = "";
$tdatatr_actividades_planeacion_app[".entityType"] = 0;
$tdatatr_actividades_planeacion_app[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_planeacion_app[".strOriginalTableName"] = "tr_actividades_planeacion_app";

	



$tdatatr_actividades_planeacion_app[".showAddInPopup"] = false;

$tdatatr_actividades_planeacion_app[".showEditInPopup"] = false;

$tdatatr_actividades_planeacion_app[".showViewInPopup"] = false;

$tdatatr_actividades_planeacion_app[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_planeacion_app[".listAjax"] = false;

	$tdatatr_actividades_planeacion_app[".audit"] = false;

	$tdatatr_actividades_planeacion_app[".locking"] = false;


$pages = $tdatatr_actividades_planeacion_app[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_planeacion_app[".edit"] = true;
	$tdatatr_actividades_planeacion_app[".afterEditAction"] = 1;
	$tdatatr_actividades_planeacion_app[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_planeacion_app[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_planeacion_app[".add"] = true;
$tdatatr_actividades_planeacion_app[".afterAddAction"] = 1;
$tdatatr_actividades_planeacion_app[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_planeacion_app[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_planeacion_app[".list"] = true;
}



$tdatatr_actividades_planeacion_app[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_planeacion_app[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_planeacion_app[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_planeacion_app[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_planeacion_app[".printFriendly"] = true;
}



$tdatatr_actividades_planeacion_app[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_planeacion_app[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_planeacion_app[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_planeacion_app[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_actividades_planeacion_app[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_planeacion_app[".buttonsAdded"] = false;

$tdatatr_actividades_planeacion_app[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_actividades_planeacion_app[".isUseTimeForSearch"] = false;


$tdatatr_actividades_planeacion_app[".badgeColor"] = "DB7093";


$tdatatr_actividades_planeacion_app[".allSearchFields"] = array();
$tdatatr_actividades_planeacion_app[".filterFields"] = array();
$tdatatr_actividades_planeacion_app[".requiredSearchFields"] = array();

$tdatatr_actividades_planeacion_app[".googleLikeFields"] = array();
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "tr_actividades_planeacion_app_id";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "vigente";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "capturista";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "time_stamp";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "imei";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "fecha_programada_maestro";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "cat_actividades_id_maestro";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "observaciones_maestro";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "cat_actividades_unidades_de_costo_id";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "uuid";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "cat_trabajadores_altas_id_supervisor";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "folio_maestro";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "estado";
$tdatatr_actividades_planeacion_app[".googleLikeFields"][] = "personas_programadas";



$tdatatr_actividades_planeacion_app[".tableType"] = "list";

$tdatatr_actividades_planeacion_app[".printerPageOrientation"] = 0;
$tdatatr_actividades_planeacion_app[".nPrinterPageScale"] = 100;

$tdatatr_actividades_planeacion_app[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_planeacion_app[".geocodingEnabled"] = false;





$tdatatr_actividades_planeacion_app[".isResizeColumns"] = true;





$tdatatr_actividades_planeacion_app[".pageSize"] = 20;

$tdatatr_actividades_planeacion_app[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_actividades_planeacion_app[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_planeacion_app[".orderindexes"] = array();


$tdatatr_actividades_planeacion_app[".sqlHead"] = "SELECT tr_actividades_planeacion_app_id,  vigente,  capturista,  time_stamp,  imei,  fecha_programada_maestro,  cat_actividades_id_maestro,  observaciones_maestro,  cat_holding_03_empresas_unidades_productivas_id,  cat_holding_04_unidades_productivas_lotes_id,  cat_actividades_unidades_de_costo_id,  uuid,  cat_trabajadores_altas_id_supervisor,  folio_maestro,  estado,  personas_programadas";
$tdatatr_actividades_planeacion_app[".sqlFrom"] = "FROM tr_actividades_planeacion_app";
$tdatatr_actividades_planeacion_app[".sqlWhereExpr"] = "";
$tdatatr_actividades_planeacion_app[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatatr_actividades_planeacion_app[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_planeacion_app[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_planeacion_app[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_planeacion_app[".highlightSearchResults"] = true;

$tableKeystr_actividades_planeacion_app = array();
$tableKeystr_actividades_planeacion_app[] = "tr_actividades_planeacion_app_id";
$tdatatr_actividades_planeacion_app[".Keys"] = $tableKeystr_actividades_planeacion_app;


$tdatatr_actividades_planeacion_app[".hideMobileList"] = array();




//	tr_actividades_planeacion_app_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_actividades_planeacion_app_id";
	$fdata["GoodName"] = "tr_actividades_planeacion_app_id";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","tr_actividades_planeacion_app_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_actividades_planeacion_app_id";

		$fdata["sourceSingle"] = "tr_actividades_planeacion_app_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_planeacion_app_id";

	
	
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


	$tdatatr_actividades_planeacion_app["tr_actividades_planeacion_app_id"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "tr_actividades_planeacion_app_id";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","vigente");
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


	$tdatatr_actividades_planeacion_app["vigente"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","capturista");
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


	$tdatatr_actividades_planeacion_app["capturista"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","time_stamp");
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


	$tdatatr_actividades_planeacion_app["time_stamp"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "time_stamp";
//	imei
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "imei";
	$fdata["GoodName"] = "imei";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","imei");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "imei";

		$fdata["sourceSingle"] = "imei";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imei";

	
	
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


	$tdatatr_actividades_planeacion_app["imei"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "imei";
//	fecha_programada_maestro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fecha_programada_maestro";
	$fdata["GoodName"] = "fecha_programada_maestro";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","fecha_programada_maestro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_programada_maestro";

		$fdata["sourceSingle"] = "fecha_programada_maestro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_programada_maestro";

	
	
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

		$edata["ShowTime"] = true;

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


	$tdatatr_actividades_planeacion_app["fecha_programada_maestro"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "fecha_programada_maestro";
//	cat_actividades_id_maestro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_actividades_id_maestro";
	$fdata["GoodName"] = "cat_actividades_id_maestro";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","cat_actividades_id_maestro");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_id_maestro";

		$fdata["sourceSingle"] = "cat_actividades_id_maestro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_id_maestro";

	
	
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
	$edata["LookupTable"] = "box_cat_actividades";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_actividades_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cat_actividades_id";

	

	
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


	$tdatatr_actividades_planeacion_app["cat_actividades_id_maestro"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "cat_actividades_id_maestro";
//	observaciones_maestro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "observaciones_maestro";
	$fdata["GoodName"] = "observaciones_maestro";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","observaciones_maestro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observaciones_maestro";

		$fdata["sourceSingle"] = "observaciones_maestro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observaciones_maestro";

	
	
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


	$tdatatr_actividades_planeacion_app["observaciones_maestro"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "observaciones_maestro";
//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","cat_holding_03_empresas_unidades_productivas_id");
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


	$tdatatr_actividades_planeacion_app["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","cat_holding_04_unidades_productivas_lotes_id");
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


	$tdatatr_actividades_planeacion_app["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";
//	cat_actividades_unidades_de_costo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["GoodName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","cat_actividades_unidades_de_costo_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "box_cat_actividades_unidades_de_costo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_actividades_unidades_de_costo_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "unidad";

	

	
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


	$tdatatr_actividades_planeacion_app["cat_actividades_unidades_de_costo_id"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "cat_actividades_unidades_de_costo_id";
//	uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "uuid";
	$fdata["GoodName"] = "uuid";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","uuid");
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


	$tdatatr_actividades_planeacion_app["uuid"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "uuid";
//	cat_trabajadores_altas_id_supervisor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cat_trabajadores_altas_id_supervisor";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_supervisor";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","cat_trabajadores_altas_id_supervisor");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id_supervisor";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id_supervisor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas_id_supervisor";

	
	
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


	$tdatatr_actividades_planeacion_app["cat_trabajadores_altas_id_supervisor"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "cat_trabajadores_altas_id_supervisor";
//	folio_maestro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "folio_maestro";
	$fdata["GoodName"] = "folio_maestro";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","folio_maestro");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "folio_maestro";

		$fdata["sourceSingle"] = "folio_maestro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "folio_maestro";

	
	
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


	$tdatatr_actividades_planeacion_app["folio_maestro"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "folio_maestro";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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


	$tdatatr_actividades_planeacion_app["estado"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "estado";
//	personas_programadas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "personas_programadas";
	$fdata["GoodName"] = "personas_programadas";
	$fdata["ownerTable"] = "tr_actividades_planeacion_app";
	$fdata["Label"] = GetFieldLabel("tr_actividades_planeacion_app","personas_programadas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "personas_programadas";

		$fdata["sourceSingle"] = "personas_programadas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "personas_programadas";

	
	
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


	$tdatatr_actividades_planeacion_app["personas_programadas"] = $fdata;
		$tdatatr_actividades_planeacion_app[".searchableFields"][] = "personas_programadas";


$tables_data["tr_actividades_planeacion_app"]=&$tdatatr_actividades_planeacion_app;
$field_labels["tr_actividades_planeacion_app"] = &$fieldLabelstr_actividades_planeacion_app;
$fieldToolTips["tr_actividades_planeacion_app"] = &$fieldToolTipstr_actividades_planeacion_app;
$placeHolders["tr_actividades_planeacion_app"] = &$placeHolderstr_actividades_planeacion_app;
$page_titles["tr_actividades_planeacion_app"] = &$pageTitlestr_actividades_planeacion_app;


changeTextControlsToDate( "tr_actividades_planeacion_app" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_planeacion_app"] = array();
//	tr_actividades_planeacion_app_02
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tr_actividades_planeacion_app_02";
		$detailsParam["dOriginalTable"] = "tr_actividades_planeacion_app";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tr_actividades_planeacion_app_02";
	$detailsParam["dCaptionTable"] = GetTableCaption("tr_actividades_planeacion_app_02");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tr_actividades_planeacion_app"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tr_actividades_planeacion_app"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tr_actividades_planeacion_app"][$dIndex]["masterKeys"][]="uuid";

				$detailsTablesData["tr_actividades_planeacion_app"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tr_actividades_planeacion_app"][$dIndex]["detailKeys"][]="uuid";
//	tr_actividades_culturales_01
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tr_actividades_culturales_01";
		$detailsParam["dOriginalTable"] = "tr_actividades_culturales_01";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tr_actividades_culturales_01";
	$detailsParam["dCaptionTable"] = GetTableCaption("tr_actividades_culturales_01");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tr_actividades_planeacion_app"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tr_actividades_planeacion_app"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tr_actividades_planeacion_app"][$dIndex]["masterKeys"][]="uuid";

				$detailsTablesData["tr_actividades_planeacion_app"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tr_actividades_planeacion_app"][$dIndex]["detailKeys"][]="tr_actividades_culturales_01_uuid";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_planeacion_app"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_planeacion_app()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_actividades_planeacion_app_id,  vigente,  capturista,  time_stamp,  imei,  fecha_programada_maestro,  cat_actividades_id_maestro,  observaciones_maestro,  cat_holding_03_empresas_unidades_productivas_id,  cat_holding_04_unidades_productivas_lotes_id,  cat_actividades_unidades_de_costo_id,  uuid,  cat_trabajadores_altas_id_supervisor,  folio_maestro,  estado,  personas_programadas";
$proto0["m_strFrom"] = "FROM tr_actividades_planeacion_app";
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
	"m_strName" => "tr_actividades_planeacion_app_id",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto6["m_sql"] = "tr_actividades_planeacion_app_id";
$proto6["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto8["m_sql"] = "vigente";
$proto8["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto10["m_sql"] = "capturista";
$proto10["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto12["m_sql"] = "time_stamp";
$proto12["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "imei",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto14["m_sql"] = "imei";
$proto14["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_programada_maestro",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto16["m_sql"] = "fecha_programada_maestro";
$proto16["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_id_maestro",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto18["m_sql"] = "cat_actividades_id_maestro";
$proto18["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones_maestro",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto20["m_sql"] = "observaciones_maestro";
$proto20["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto22["m_sql"] = "cat_holding_03_empresas_unidades_productivas_id";
$proto22["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto24["m_sql"] = "cat_holding_04_unidades_productivas_lotes_id";
$proto24["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_unidades_de_costo_id",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto26["m_sql"] = "cat_actividades_unidades_de_costo_id";
$proto26["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "uuid",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto28["m_sql"] = "uuid";
$proto28["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_supervisor",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto30["m_sql"] = "cat_trabajadores_altas_id_supervisor";
$proto30["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "folio_maestro",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto32["m_sql"] = "folio_maestro";
$proto32["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto34["m_sql"] = "estado";
$proto34["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "personas_programadas",
	"m_strTable" => "tr_actividades_planeacion_app",
	"m_srcTableName" => "tr_actividades_planeacion_app"
));

$proto36["m_sql"] = "personas_programadas";
$proto36["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "tr_actividades_planeacion_app";
$proto39["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "tr_actividades_planeacion_app_id";
$proto39["m_columns"][] = "vigente";
$proto39["m_columns"][] = "capturista";
$proto39["m_columns"][] = "time_stamp";
$proto39["m_columns"][] = "imei";
$proto39["m_columns"][] = "fecha_programada_maestro";
$proto39["m_columns"][] = "cat_actividades_id_maestro";
$proto39["m_columns"][] = "observaciones_maestro";
$proto39["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto39["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto39["m_columns"][] = "cat_actividades_unidades_de_costo_id";
$proto39["m_columns"][] = "uuid";
$proto39["m_columns"][] = "cat_trabajadores_altas_id_supervisor";
$proto39["m_columns"][] = "folio_maestro";
$proto39["m_columns"][] = "estado";
$proto39["m_columns"][] = "personas_programadas";
$proto39["m_columns"][] = "observaciones";
$proto39["m_columns"][] = "cat_actividades_id";
$proto39["m_columns"][] = "fecha_programada";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "tr_actividades_planeacion_app";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "tr_actividades_planeacion_app";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_actividades_planeacion_app";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_planeacion_app = createSqlQuery_tr_actividades_planeacion_app();


	
		;

																

$tdatatr_actividades_planeacion_app[".sqlquery"] = $queryData_tr_actividades_planeacion_app;



$tdatatr_actividades_planeacion_app[".hasEvents"] = false;

?>