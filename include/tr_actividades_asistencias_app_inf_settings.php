<?php
$tdatatr_actividades_asistencias_app_inf = array();
$tdatatr_actividades_asistencias_app_inf[".searchableFields"] = array();
$tdatatr_actividades_asistencias_app_inf[".ShortName"] = "tr_actividades_asistencias_app_inf";
$tdatatr_actividades_asistencias_app_inf[".OwnerID"] = "";
$tdatatr_actividades_asistencias_app_inf[".OriginalTable"] = "tr_actividades_asistencias_app";


$tdatatr_actividades_asistencias_app_inf[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_asistencias_app_inf[".originalPagesByType"] = $tdatatr_actividades_asistencias_app_inf[".pagesByType"];
$tdatatr_actividades_asistencias_app_inf[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_asistencias_app_inf[".originalPages"] = $tdatatr_actividades_asistencias_app_inf[".pages"];
$tdatatr_actividades_asistencias_app_inf[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_actividades_asistencias_app_inf[".originalDefaultPages"] = $tdatatr_actividades_asistencias_app_inf[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_asistencias_app_inf = array();
$fieldToolTipstr_actividades_asistencias_app_inf = array();
$pageTitlestr_actividades_asistencias_app_inf = array();
$placeHolderstr_actividades_asistencias_app_inf = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_asistencias_app_inf["Spanish"] = array();
	$fieldToolTipstr_actividades_asistencias_app_inf["Spanish"] = array();
	$placeHolderstr_actividades_asistencias_app_inf["Spanish"] = array();
	$pageTitlestr_actividades_asistencias_app_inf["Spanish"] = array();
	$fieldLabelstr_actividades_asistencias_app_inf["Spanish"]["cat_trabajadores_altas_id"] = "Nombre";
	$fieldToolTipstr_actividades_asistencias_app_inf["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderstr_actividades_asistencias_app_inf["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelstr_actividades_asistencias_app_inf["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstr_actividades_asistencias_app_inf["Spanish"]["fecha"] = "";
	$placeHolderstr_actividades_asistencias_app_inf["Spanish"]["fecha"] = "";
	$fieldLabelstr_actividades_asistencias_app_inf["Spanish"]["nombre_completo"] = "Nombre";
	$fieldToolTipstr_actividades_asistencias_app_inf["Spanish"]["nombre_completo"] = "";
	$placeHolderstr_actividades_asistencias_app_inf["Spanish"]["nombre_completo"] = "";
	$fieldLabelstr_actividades_asistencias_app_inf["Spanish"]["cat_trabajadores_altas_id_empresa"] = "Id Empresa";
	$fieldToolTipstr_actividades_asistencias_app_inf["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderstr_actividades_asistencias_app_inf["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelstr_actividades_asistencias_app_inf["Spanish"]["descripcion_empresas"] = "Empresas";
	$fieldToolTipstr_actividades_asistencias_app_inf["Spanish"]["descripcion_empresas"] = "";
	$placeHolderstr_actividades_asistencias_app_inf["Spanish"]["descripcion_empresas"] = "";
	$fieldLabelstr_actividades_asistencias_app_inf["Spanish"]["descripcion_predio"] = "Predio";
	$fieldToolTipstr_actividades_asistencias_app_inf["Spanish"]["descripcion_predio"] = "";
	$placeHolderstr_actividades_asistencias_app_inf["Spanish"]["descripcion_predio"] = "";
	if (count($fieldToolTipstr_actividades_asistencias_app_inf["Spanish"]))
		$tdatatr_actividades_asistencias_app_inf[".isUseToolTips"] = true;
}





$tdatatr_actividades_asistencias_app_inf[".shortTableName"] = "tr_actividades_asistencias_app_inf";
$tdatatr_actividades_asistencias_app_inf[".nSecOptions"] = 0;

$tdatatr_actividades_asistencias_app_inf[".mainTableOwnerID"] = "";
$tdatatr_actividades_asistencias_app_inf[".entityType"] = 1;
$tdatatr_actividades_asistencias_app_inf[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_asistencias_app_inf[".strOriginalTableName"] = "tr_actividades_asistencias_app";

	



$tdatatr_actividades_asistencias_app_inf[".showAddInPopup"] = false;

$tdatatr_actividades_asistencias_app_inf[".showEditInPopup"] = false;

$tdatatr_actividades_asistencias_app_inf[".showViewInPopup"] = false;

$tdatatr_actividades_asistencias_app_inf[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_asistencias_app_inf[".listAjax"] = false;

	$tdatatr_actividades_asistencias_app_inf[".audit"] = false;

	$tdatatr_actividades_asistencias_app_inf[".locking"] = false;


$pages = $tdatatr_actividades_asistencias_app_inf[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_asistencias_app_inf[".edit"] = true;
	$tdatatr_actividades_asistencias_app_inf[".afterEditAction"] = 1;
	$tdatatr_actividades_asistencias_app_inf[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_asistencias_app_inf[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_asistencias_app_inf[".add"] = true;
$tdatatr_actividades_asistencias_app_inf[".afterAddAction"] = 1;
$tdatatr_actividades_asistencias_app_inf[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_asistencias_app_inf[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_asistencias_app_inf[".list"] = true;
}



$tdatatr_actividades_asistencias_app_inf[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_asistencias_app_inf[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_asistencias_app_inf[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_asistencias_app_inf[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_asistencias_app_inf[".printFriendly"] = true;
}



$tdatatr_actividades_asistencias_app_inf[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_asistencias_app_inf[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_asistencias_app_inf[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_asistencias_app_inf[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_actividades_asistencias_app_inf[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_asistencias_app_inf[".buttonsAdded"] = false;

$tdatatr_actividades_asistencias_app_inf[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_actividades_asistencias_app_inf[".isUseTimeForSearch"] = false;


$tdatatr_actividades_asistencias_app_inf[".badgeColor"] = "E07878";


$tdatatr_actividades_asistencias_app_inf[".allSearchFields"] = array();
$tdatatr_actividades_asistencias_app_inf[".filterFields"] = array();
$tdatatr_actividades_asistencias_app_inf[".requiredSearchFields"] = array();

$tdatatr_actividades_asistencias_app_inf[".googleLikeFields"] = array();
$tdatatr_actividades_asistencias_app_inf[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatatr_actividades_asistencias_app_inf[".googleLikeFields"][] = "nombre_completo";
$tdatatr_actividades_asistencias_app_inf[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatatr_actividades_asistencias_app_inf[".googleLikeFields"][] = "descripcion_empresas";
$tdatatr_actividades_asistencias_app_inf[".googleLikeFields"][] = "fecha";
$tdatatr_actividades_asistencias_app_inf[".googleLikeFields"][] = "descripcion_predio";



$tdatatr_actividades_asistencias_app_inf[".tableType"] = "list";

$tdatatr_actividades_asistencias_app_inf[".printerPageOrientation"] = 0;
$tdatatr_actividades_asistencias_app_inf[".nPrinterPageScale"] = 100;

$tdatatr_actividades_asistencias_app_inf[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_asistencias_app_inf[".geocodingEnabled"] = false;





$tdatatr_actividades_asistencias_app_inf[".isResizeColumns"] = true;





$tdatatr_actividades_asistencias_app_inf[".pageSize"] = 20;

$tdatatr_actividades_asistencias_app_inf[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY 
    fecha DESC, cat_trabajadores_altas.cat_trabajadores_altas_id";
$tdatatr_actividades_asistencias_app_inf[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_asistencias_app_inf[".orderindexes"] = array();
			$tdatatr_actividades_asistencias_app_inf[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "DATE_FORMAT(fechas.fecha, '%d/%m/%Y')");
			$tdatatr_actividades_asistencias_app_inf[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "cat_trabajadores_altas.cat_trabajadores_altas_id");


$tdatatr_actividades_asistencias_app_inf[".sqlHead"] = "SELECT cat_trabajadores_altas.cat_trabajadores_altas_id,      cat_trabajadores_altas.nombre_completo,      cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,      cat_holding_02_empresas.descripcion_empresas,      DATE_FORMAT(fechas.fecha, '%d/%m/%Y') AS fecha,        predios.descripcion_predio";
$tdatatr_actividades_asistencias_app_inf[".sqlFrom"] = "FROM       cat_trabajadores_altas  LEFT JOIN       (SELECT DISTINCT fecha FROM tr_actividades_asistencias_app) AS fechas ON 1=1  LEFT JOIN      tr_actividades_asistencias_app ON       cat_trabajadores_altas.cat_trabajadores_altas_id = tr_actividades_asistencias_app.cat_trabajadores_altas_id      AND fechas.fecha = tr_actividades_asistencias_app.fecha  LEFT JOIN      cat_holding_03_empresas_up_group_predios AS predios ON       tr_actividades_asistencias_app.cat_holding_03_empresas_up_group_predios_id = predios.cat_holding_03_empresas_up_group_predios_id  LEFT JOIN      cat_holding_02_empresas ON       cat_trabajadores_altas.cat_holding_02_empresas = cat_holding_02_empresas.cat_holding_02_empresas_id";
$tdatatr_actividades_asistencias_app_inf[".sqlWhereExpr"] = "cat_trabajadores_altas.vigente = 1      AND tr_actividades_asistencias_app.cat_trabajadores_altas_id IS NOT NULL";
$tdatatr_actividades_asistencias_app_inf[".sqlTail"] = "";

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
$tdatatr_actividades_asistencias_app_inf[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_asistencias_app_inf[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_asistencias_app_inf[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_asistencias_app_inf[".highlightSearchResults"] = true;

$tableKeystr_actividades_asistencias_app_inf = array();
$tableKeystr_actividades_asistencias_app_inf[] = "fecha";
$tdatatr_actividades_asistencias_app_inf[".Keys"] = $tableKeystr_actividades_asistencias_app_inf;


$tdatatr_actividades_asistencias_app_inf[".hideMobileList"] = array();




//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_asistencias_app_inf","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
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


	$tdatatr_actividades_asistencias_app_inf["cat_trabajadores_altas_id"] = $fdata;
		$tdatatr_actividades_asistencias_app_inf[".searchableFields"][] = "cat_trabajadores_altas_id";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_asistencias_app_inf","nombre_completo");
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


	$tdatatr_actividades_asistencias_app_inf["nombre_completo"] = $fdata;
		$tdatatr_actividades_asistencias_app_inf[".searchableFields"][] = "nombre_completo";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_asistencias_app_inf","cat_trabajadores_altas_id_empresa");
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


	$tdatatr_actividades_asistencias_app_inf["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatatr_actividades_asistencias_app_inf[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	descripcion_empresas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "descripcion_empresas";
	$fdata["GoodName"] = "descripcion_empresas";
	$fdata["ownerTable"] = "cat_holding_02_empresas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_asistencias_app_inf","descripcion_empresas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_empresas";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_02_empresas.descripcion_empresas";

	
	
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


	$tdatatr_actividades_asistencias_app_inf["descripcion_empresas"] = $fdata;
		$tdatatr_actividades_asistencias_app_inf[".searchableFields"][] = "descripcion_empresas";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_asistencias_app_inf","fecha");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE_FORMAT(fechas.fecha, '%d/%m/%Y')";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatatr_actividades_asistencias_app_inf["fecha"] = $fdata;
		$tdatatr_actividades_asistencias_app_inf[".searchableFields"][] = "fecha";
//	descripcion_predio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descripcion_predio";
	$fdata["GoodName"] = "descripcion_predio";
	$fdata["ownerTable"] = "cat_holding_03_empresas_up_group_predios";
	$fdata["Label"] = GetFieldLabel("tr_actividades_asistencias_app_inf","descripcion_predio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_predio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "predios.descripcion_predio";

	
	
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


	$tdatatr_actividades_asistencias_app_inf["descripcion_predio"] = $fdata;
		$tdatatr_actividades_asistencias_app_inf[".searchableFields"][] = "descripcion_predio";


$tables_data["tr_actividades_asistencias_app_inf"]=&$tdatatr_actividades_asistencias_app_inf;
$field_labels["tr_actividades_asistencias_app_inf"] = &$fieldLabelstr_actividades_asistencias_app_inf;
$fieldToolTips["tr_actividades_asistencias_app_inf"] = &$fieldToolTipstr_actividades_asistencias_app_inf;
$placeHolders["tr_actividades_asistencias_app_inf"] = &$placeHolderstr_actividades_asistencias_app_inf;
$page_titles["tr_actividades_asistencias_app_inf"] = &$pageTitlestr_actividades_asistencias_app_inf;


changeTextControlsToDate( "tr_actividades_asistencias_app_inf" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_asistencias_app_inf"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_asistencias_app_inf"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_asistencias_app_inf()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_altas.cat_trabajadores_altas_id,      cat_trabajadores_altas.nombre_completo,      cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,      cat_holding_02_empresas.descripcion_empresas,      DATE_FORMAT(fechas.fecha, '%d/%m/%Y') AS fecha,        predios.descripcion_predio";
$proto0["m_strFrom"] = "FROM       cat_trabajadores_altas  LEFT JOIN       (SELECT DISTINCT fecha FROM tr_actividades_asistencias_app) AS fechas ON 1=1  LEFT JOIN      tr_actividades_asistencias_app ON       cat_trabajadores_altas.cat_trabajadores_altas_id = tr_actividades_asistencias_app.cat_trabajadores_altas_id      AND fechas.fecha = tr_actividades_asistencias_app.fecha  LEFT JOIN      cat_holding_03_empresas_up_group_predios AS predios ON       tr_actividades_asistencias_app.cat_holding_03_empresas_up_group_predios_id = predios.cat_holding_03_empresas_up_group_predios_id  LEFT JOIN      cat_holding_02_empresas ON       cat_trabajadores_altas.cat_holding_02_empresas = cat_holding_02_empresas.cat_holding_02_empresas_id";
$proto0["m_strWhere"] = "cat_trabajadores_altas.vigente = 1      AND tr_actividades_asistencias_app.cat_trabajadores_altas_id IS NOT NULL";
$proto0["m_strOrderBy"] = "ORDER BY       fecha DESC, cat_trabajadores_altas.cat_trabajadores_altas_id";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_trabajadores_altas.vigente = 1      AND tr_actividades_asistencias_app.cat_trabajadores_altas_id IS NOT NULL";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "cat_trabajadores_altas.vigente = 1      AND tr_actividades_asistencias_app.cat_trabajadores_altas_id IS NOT NULL"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "cat_trabajadores_altas.vigente = 1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "tr_actividades_asistencias_app.cat_trabajadores_altas_id IS NOT NULL";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "tr_actividades_asistencias_app",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "IS NOT NULL";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
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
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto10["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto10["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto12["m_sql"] = "cat_trabajadores_altas.nombre_completo";
$proto12["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto14["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto14["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_empresas",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto16["m_sql"] = "cat_holding_02_empresas.descripcion_empresas";
$proto16["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "fechas.fecha"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'%d/%m/%Y'"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "DATE_FORMAT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "DATE_FORMAT(fechas.fecha, '%d/%m/%Y')";
$proto18["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "fecha";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_predio",
	"m_strTable" => "predios",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto22["m_sql"] = "predios.descripcion_predio";
$proto22["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cat_trabajadores_altas";
$proto25["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_trabajadores_altas_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "fecha_de_registro";
$proto25["m_columns"][] = "apellido_paterno";
$proto25["m_columns"][] = "apellido_materno";
$proto25["m_columns"][] = "primer_nombre";
$proto25["m_columns"][] = "segundo_nombre";
$proto25["m_columns"][] = "rfc";
$proto25["m_columns"][] = "curp";
$proto25["m_columns"][] = "num_seguridad_social";
$proto25["m_columns"][] = "municipio_nacimiento";
$proto25["m_columns"][] = "estado_nacimiento";
$proto25["m_columns"][] = "nacionalidad";
$proto25["m_columns"][] = "telefono_emergencia";
$proto25["m_columns"][] = "contacto_emergencia";
$proto25["m_columns"][] = "nombre_completo";
$proto25["m_columns"][] = "fecha_de_nacimiento";
$proto25["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto25["m_columns"][] = "celular_mensajes";
$proto25["m_columns"][] = "permiso_msm";
$proto25["m_columns"][] = "estatus";
$proto25["m_columns"][] = "fecha_de_captura";
$proto25["m_columns"][] = "face_id";
$proto25["m_columns"][] = "tr_tags_numero_asignado";
$proto25["m_columns"][] = "cat_trabajadores_puestos_id";
$proto25["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto25["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto25["m_columns"][] = "calle";
$proto25["m_columns"][] = "colonia";
$proto25["m_columns"][] = "municipio";
$proto25["m_columns"][] = "estado";
$proto25["m_columns"][] = "codigo_postal";
$proto25["m_columns"][] = "banco";
$proto25["m_columns"][] = "cuenta_bancaria";
$proto25["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto25["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto25["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto25["m_columns"][] = "cat_holding_02_empresas";
$proto25["m_columns"][] = "fecha_de_ingreso";
$proto25["m_columns"][] = "numero_domicilio";
$proto25["m_columns"][] = "observaciones";
$proto25["m_columns"][] = "link_foto";
$proto25["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto25["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cat_trabajadores_altas";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strHead"] = "SELECT DISTINCT";
$proto29["m_strFieldList"] = "fecha";
$proto29["m_strFrom"] = "FROM tr_actividades_asistencias_app";
$proto29["m_strWhere"] = "";
$proto29["m_strOrderBy"] = "";
	
		;
			$proto29["cipherer"] = null;
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_where"] = $obj;
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto29["m_having"] = $obj;
$proto29["m_fieldlist"] = array();
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "tr_actividades_asistencias_app",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto35["m_sql"] = "fecha";
$proto35["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto29["m_fieldlist"][]=$obj;
$proto29["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "tr_actividades_asistencias_app";
$proto38["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "tr_actividades_asistencias_app_id";
$proto38["m_columns"][] = "tr_actividades_asistencias_app_uuid";
$proto38["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto38["m_columns"][] = "cat_actividades_turnos_id";
$proto38["m_columns"][] = "cat_actividades_ingreso_egreso_mu";
$proto38["m_columns"][] = "cat_trabajadores_altas_id";
$proto38["m_columns"][] = "fecha_de_captura";
$proto38["m_columns"][] = "vigente";
$proto38["m_columns"][] = "capturista";
$proto38["m_columns"][] = "imei";
$proto38["m_columns"][] = "registro_detalle";
$proto38["m_columns"][] = "Lat";
$proto38["m_columns"][] = "Lng";
$proto38["m_columns"][] = "time_stamp";
$proto38["m_columns"][] = "cat_usuarios_licencias_id";
$proto38["m_columns"][] = "llave_fecha_trabajador";
$proto38["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto38["m_columns"][] = "cat_nominas_conceptos_clasificacion_mu_id";
$proto38["m_columns"][] = "fecha";
$proto38["m_columns"][] = "observaciones";
$proto38["m_columns"][] = "llave_FechaTrabActConUpLote";
$proto38["m_columns"][] = "llave_Up_Tur_IE_Trab_Fecha";
$proto38["m_columns"][] = "llave_UuidActEsp";
$proto38["m_columns"][] = "cat_holding_03_empresas_up_group_predios_id";
$proto38["m_columns"][] = "llave_UpTurIeTrabFechaPred";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "tr_actividades_asistencias_app";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto29["m_fromlist"][]=$obj;
$proto29["m_groupby"] = array();
$proto29["m_orderby"] = array();
$proto29["m_srcTableName"]="tr_actividades_asistencias_app_inf";		
$obj = new SQLQuery($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT JOIN       (SELECT DISTINCT fecha FROM tr_actividades_asistencias_app) AS fechas ON 1=1";
$proto28["m_alias"] = "fechas";
$proto28["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto41=array();
$proto41["m_sql"] = "1=1";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "=1";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_LEFTJOIN";
			$proto44=array();
$proto44["m_strName"] = "tr_actividades_asistencias_app";
$proto44["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "tr_actividades_asistencias_app_id";
$proto44["m_columns"][] = "tr_actividades_asistencias_app_uuid";
$proto44["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto44["m_columns"][] = "cat_actividades_turnos_id";
$proto44["m_columns"][] = "cat_actividades_ingreso_egreso_mu";
$proto44["m_columns"][] = "cat_trabajadores_altas_id";
$proto44["m_columns"][] = "fecha_de_captura";
$proto44["m_columns"][] = "vigente";
$proto44["m_columns"][] = "capturista";
$proto44["m_columns"][] = "imei";
$proto44["m_columns"][] = "registro_detalle";
$proto44["m_columns"][] = "Lat";
$proto44["m_columns"][] = "Lng";
$proto44["m_columns"][] = "time_stamp";
$proto44["m_columns"][] = "cat_usuarios_licencias_id";
$proto44["m_columns"][] = "llave_fecha_trabajador";
$proto44["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto44["m_columns"][] = "cat_nominas_conceptos_clasificacion_mu_id";
$proto44["m_columns"][] = "fecha";
$proto44["m_columns"][] = "observaciones";
$proto44["m_columns"][] = "llave_FechaTrabActConUpLote";
$proto44["m_columns"][] = "llave_Up_Tur_IE_Trab_Fecha";
$proto44["m_columns"][] = "llave_UuidActEsp";
$proto44["m_columns"][] = "cat_holding_03_empresas_up_group_predios_id";
$proto44["m_columns"][] = "llave_UpTurIeTrabFechaPred";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "LEFT JOIN      tr_actividades_asistencias_app ON       cat_trabajadores_altas.cat_trabajadores_altas_id = tr_actividades_asistencias_app.cat_trabajadores_altas_id      AND fechas.fecha = tr_actividades_asistencias_app.fecha";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto45=array();
$proto45["m_sql"] = "tr_actividades_asistencias_app.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id AND tr_actividades_asistencias_app.fecha = fechas.fecha";
$proto45["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "tr_actividades_asistencias_app.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id AND tr_actividades_asistencias_app.fecha = fechas.fecha"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
						$proto47=array();
$proto47["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id = tr_actividades_asistencias_app.cat_trabajadores_altas_id";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= tr_actividades_asistencias_app.cat_trabajadores_altas_id";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

			$proto45["m_contained"][]=$obj;
						$proto49=array();
$proto49["m_sql"] = "fechas.fecha = tr_actividades_asistencias_app.fecha";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "fechas",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "= tr_actividades_asistencias_app.fecha";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

			$proto45["m_contained"][]=$obj;
						$proto51=array();
$proto51["m_sql"] = "tr_actividades_asistencias_app.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "tr_actividades_asistencias_app",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

			$proto45["m_contained"][]=$obj;
						$proto53=array();
$proto53["m_sql"] = "tr_actividades_asistencias_app.fecha = fechas.fecha";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "tr_actividades_asistencias_app",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= fechas.fecha";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

			$proto45["m_contained"][]=$obj;
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
												$proto55=array();
$proto55["m_link"] = "SQLL_LEFTJOIN";
			$proto56=array();
$proto56["m_strName"] = "cat_holding_03_empresas_up_group_predios";
$proto56["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "cat_holding_03_empresas_up_group_predios_id";
$proto56["m_columns"][] = "descripcion_predio";
$proto56["m_columns"][] = "vigente";
$proto56["m_columns"][] = "capturista";
$proto56["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "LEFT JOIN      cat_holding_03_empresas_up_group_predios AS predios ON       tr_actividades_asistencias_app.cat_holding_03_empresas_up_group_predios_id = predios.cat_holding_03_empresas_up_group_predios_id";
$proto55["m_alias"] = "predios";
$proto55["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto57=array();
$proto57["m_sql"] = "predios.cat_holding_03_empresas_up_group_predios_id = tr_actividades_asistencias_app.cat_holding_03_empresas_up_group_predios_id";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_up_group_predios_id",
	"m_strTable" => "predios",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "= tr_actividades_asistencias_app.cat_holding_03_empresas_up_group_predios_id";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
												$proto59=array();
$proto59["m_link"] = "SQLL_LEFTJOIN";
			$proto60=array();
$proto60["m_strName"] = "cat_holding_02_empresas";
$proto60["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "cat_holding_02_empresas_id";
$proto60["m_columns"][] = "cat_holding_01_id";
$proto60["m_columns"][] = "time_stamp";
$proto60["m_columns"][] = "vigente";
$proto60["m_columns"][] = "capturista";
$proto60["m_columns"][] = "descripcion_empresas";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_sql"] = "LEFT JOIN      cat_holding_02_empresas ON       cat_trabajadores_altas.cat_holding_02_empresas = cat_holding_02_empresas.cat_holding_02_empresas_id";
$proto59["m_alias"] = "";
$proto59["m_srcTableName"] = "tr_actividades_asistencias_app_inf";
$proto61=array();
$proto61["m_sql"] = "cat_holding_02_empresas.cat_holding_02_empresas_id = cat_trabajadores_altas.cat_holding_02_empresas";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_02_empresas_id",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "= cat_trabajadores_altas.cat_holding_02_empresas";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto63=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "fecha"
));

$proto63["m_column"]=$obj;
$proto63["m_bAsc"] = 0;
$proto63["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto63);

$proto0["m_orderby"][]=$obj;					
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_asistencias_app_inf"
));

$proto65["m_column"]=$obj;
$proto65["m_bAsc"] = 1;
$proto65["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto65);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="tr_actividades_asistencias_app_inf";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_asistencias_app_inf = createSqlQuery_tr_actividades_asistencias_app_inf();


	
		;

						

$tdatatr_actividades_asistencias_app_inf[".sqlquery"] = $queryData_tr_actividades_asistencias_app_inf;



$tdatatr_actividades_asistencias_app_inf[".hasEvents"] = false;

?>