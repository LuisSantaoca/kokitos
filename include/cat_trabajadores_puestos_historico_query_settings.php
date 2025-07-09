<?php
$tdatacat_trabajadores_puestos_historico_query = array();
$tdatacat_trabajadores_puestos_historico_query[".searchableFields"] = array();
$tdatacat_trabajadores_puestos_historico_query[".ShortName"] = "cat_trabajadores_puestos_historico_query";
$tdatacat_trabajadores_puestos_historico_query[".OwnerID"] = "";
$tdatacat_trabajadores_puestos_historico_query[".OriginalTable"] = "cat_trabajadores_puestos_historico";


$tdatacat_trabajadores_puestos_historico_query[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_puestos_historico_query[".originalPagesByType"] = $tdatacat_trabajadores_puestos_historico_query[".pagesByType"];
$tdatacat_trabajadores_puestos_historico_query[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_puestos_historico_query[".originalPages"] = $tdatacat_trabajadores_puestos_historico_query[".pages"];
$tdatacat_trabajadores_puestos_historico_query[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_trabajadores_puestos_historico_query[".originalDefaultPages"] = $tdatacat_trabajadores_puestos_historico_query[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_puestos_historico_query = array();
$fieldToolTipscat_trabajadores_puestos_historico_query = array();
$pageTitlescat_trabajadores_puestos_historico_query = array();
$placeHolderscat_trabajadores_puestos_historico_query = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"] = array();
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"] = array();
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"] = array();
	$pageTitlescat_trabajadores_puestos_historico_query["Spanish"] = array();
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_altas_id"] = "Trabajador";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["fecha"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["fecha"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["nombre_completo"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["nombre_completo"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_altas_id_empresa"] = "Cat Trabajadores Altas Id Empresa";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_puestos_historico_id"] = "Cat Trabajadores Puestos Historico Id";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_puestos_historico_id"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_puestos_historico_id"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_puestos_id"] = "Puesto";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["descripcion_puesto"] = "Descripcion Puesto";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["descripcion_puesto"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["sueldo_diario"] = "Sueldo Diario";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["sueldo_diario"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["sueldo_diario"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["horas_laborales"] = "Horas Laborales";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["horas_laborales"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["horas_laborales"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["hora_extra"] = "Hora Extra";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["hora_extra"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["hora_extra"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["bono"] = "Bono";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["bono"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["bono"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["prima"] = "Prima";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["prima"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["prima"] = "";
	$fieldLabelscat_trabajadores_puestos_historico_query["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_puestos_historico_query["Spanish"]["vigente"] = "";
	if (count($fieldToolTipscat_trabajadores_puestos_historico_query["Spanish"]))
		$tdatacat_trabajadores_puestos_historico_query[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_puestos_historico_query[".shortTableName"] = "cat_trabajadores_puestos_historico_query";
$tdatacat_trabajadores_puestos_historico_query[".nSecOptions"] = 0;

$tdatacat_trabajadores_puestos_historico_query[".mainTableOwnerID"] = "";
$tdatacat_trabajadores_puestos_historico_query[".entityType"] = 1;
$tdatacat_trabajadores_puestos_historico_query[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_puestos_historico_query[".strOriginalTableName"] = "cat_trabajadores_puestos_historico";

	



$tdatacat_trabajadores_puestos_historico_query[".showAddInPopup"] = false;

$tdatacat_trabajadores_puestos_historico_query[".showEditInPopup"] = false;

$tdatacat_trabajadores_puestos_historico_query[".showViewInPopup"] = false;

$tdatacat_trabajadores_puestos_historico_query[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_puestos_historico_query[".listAjax"] = false;

	$tdatacat_trabajadores_puestos_historico_query[".audit"] = false;

	$tdatacat_trabajadores_puestos_historico_query[".locking"] = false;


$pages = $tdatacat_trabajadores_puestos_historico_query[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_puestos_historico_query[".edit"] = true;
	$tdatacat_trabajadores_puestos_historico_query[".afterEditAction"] = 1;
	$tdatacat_trabajadores_puestos_historico_query[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_puestos_historico_query[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_puestos_historico_query[".add"] = true;
$tdatacat_trabajadores_puestos_historico_query[".afterAddAction"] = 1;
$tdatacat_trabajadores_puestos_historico_query[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_puestos_historico_query[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_puestos_historico_query[".list"] = true;
}



$tdatacat_trabajadores_puestos_historico_query[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_puestos_historico_query[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_puestos_historico_query[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_puestos_historico_query[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_puestos_historico_query[".printFriendly"] = true;
}



$tdatacat_trabajadores_puestos_historico_query[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_puestos_historico_query[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_puestos_historico_query[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_puestos_historico_query[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_puestos_historico_query[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_puestos_historico_query[".buttonsAdded"] = false;

$tdatacat_trabajadores_puestos_historico_query[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_puestos_historico_query[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_puestos_historico_query[".badgeColor"] = "DC143C";


$tdatacat_trabajadores_puestos_historico_query[".allSearchFields"] = array();
$tdatacat_trabajadores_puestos_historico_query[".filterFields"] = array();
$tdatacat_trabajadores_puestos_historico_query[".requiredSearchFields"] = array();

$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"] = array();
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "cat_trabajadores_puestos_historico_id";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "fecha";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "nombre_completo";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "cat_trabajadores_puestos_id";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "descripcion_puesto";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "sueldo_diario";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "horas_laborales";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "hora_extra";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "bono";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "prima";
$tdatacat_trabajadores_puestos_historico_query[".googleLikeFields"][] = "vigente";



$tdatacat_trabajadores_puestos_historico_query[".tableType"] = "list";

$tdatacat_trabajadores_puestos_historico_query[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_puestos_historico_query[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_puestos_historico_query[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_puestos_historico_query[".geocodingEnabled"] = false;





$tdatacat_trabajadores_puestos_historico_query[".isResizeColumns"] = true;





$tdatacat_trabajadores_puestos_historico_query[".pageSize"] = 20;

$tdatacat_trabajadores_puestos_historico_query[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_puestos_historico_query[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_puestos_historico_query[".orderindexes"] = array();


$tdatacat_trabajadores_puestos_historico_query[".sqlHead"] = "SELECT cat_trabajadores_puestos_historico.cat_trabajadores_puestos_historico_id,  DATE_FORMAT(cat_trabajadores_puestos_historico.fecha_de_captura, '%Y-%m-%d') AS fecha,  cat_trabajadores_puestos_historico.cat_trabajadores_altas_id,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  cat_trabajadores_altas.nombre_completo,  cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id,  cat_trabajadores_puestos.descripcion_puesto,  cat_trabajadores_puestos_historico.sueldo_diario,  cat_trabajadores_puestos_historico.horas_laborales,  cat_trabajadores_puestos_historico.hora_extra,  cat_trabajadores_puestos_historico.bono,  cat_trabajadores_puestos_historico.prima,  cat_trabajadores_puestos_historico.vigente";
$tdatacat_trabajadores_puestos_historico_query[".sqlFrom"] = "FROM cat_trabajadores_puestos_historico  LEFT OUTER JOIN cat_trabajadores_altas ON cat_trabajadores_puestos_historico.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id  LEFT OUTER JOIN cat_trabajadores_puestos ON cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id = cat_trabajadores_puestos.cat_trabajadores_puestos_id";
$tdatacat_trabajadores_puestos_historico_query[".sqlWhereExpr"] = "(cat_trabajadores_puestos_historico.vigente =1)";
$tdatacat_trabajadores_puestos_historico_query[".sqlTail"] = "";

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
$tdatacat_trabajadores_puestos_historico_query[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_puestos_historico_query[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_puestos_historico_query[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_puestos_historico_query[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_puestos_historico_query = array();
$tdatacat_trabajadores_puestos_historico_query[".Keys"] = $tableKeyscat_trabajadores_puestos_historico_query;


$tdatacat_trabajadores_puestos_historico_query[".hideMobileList"] = array();




//	cat_trabajadores_puestos_historico_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_puestos_historico_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_historico_id";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_historico";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","cat_trabajadores_puestos_historico_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_puestos_historico_id";

		$fdata["sourceSingle"] = "cat_trabajadores_puestos_historico_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_historico.cat_trabajadores_puestos_historico_id";

	
	
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


	$tdatacat_trabajadores_puestos_historico_query["cat_trabajadores_puestos_historico_id"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "cat_trabajadores_puestos_historico_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","fecha");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fecha";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE_FORMAT(cat_trabajadores_puestos_historico.fecha_de_captura, '%Y-%m-%d')";

	
	
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


	$tdatacat_trabajadores_puestos_historico_query["fecha"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "fecha";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_historico";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_historico.cat_trabajadores_altas_id";

	
	
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


	$tdatacat_trabajadores_puestos_historico_query["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "cat_trabajadores_altas_id";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","cat_trabajadores_altas_id_empresa");
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


	$tdatacat_trabajadores_puestos_historico_query["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","nombre_completo");
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


	$tdatacat_trabajadores_puestos_historico_query["nombre_completo"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "nombre_completo";
//	cat_trabajadores_puestos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_trabajadores_puestos_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_id";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_historico";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","cat_trabajadores_puestos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_puestos_id";

		$fdata["sourceSingle"] = "cat_trabajadores_puestos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id";

	
	
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
	$edata["LookupTable"] = "cat_trabajadores_puestos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_trabajadores_puestos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_puesto";

	

	
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


	$tdatacat_trabajadores_puestos_historico_query["cat_trabajadores_puestos_id"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "cat_trabajadores_puestos_id";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","descripcion_puesto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos.descripcion_puesto";

	
	
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


	$tdatacat_trabajadores_puestos_historico_query["descripcion_puesto"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "descripcion_puesto";
//	sueldo_diario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sueldo_diario";
	$fdata["GoodName"] = "sueldo_diario";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_historico";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","sueldo_diario");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "sueldo_diario";

		$fdata["sourceSingle"] = "sueldo_diario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_historico.sueldo_diario";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacat_trabajadores_puestos_historico_query["sueldo_diario"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "sueldo_diario";
//	horas_laborales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "horas_laborales";
	$fdata["GoodName"] = "horas_laborales";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_historico";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","horas_laborales");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "horas_laborales";

		$fdata["sourceSingle"] = "horas_laborales";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_historico.horas_laborales";

	
	
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


	$tdatacat_trabajadores_puestos_historico_query["horas_laborales"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "horas_laborales";
//	hora_extra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "hora_extra";
	$fdata["GoodName"] = "hora_extra";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_historico";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","hora_extra");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "hora_extra";

		$fdata["sourceSingle"] = "hora_extra";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_historico.hora_extra";

	
	
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


	$tdatacat_trabajadores_puestos_historico_query["hora_extra"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "hora_extra";
//	bono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "bono";
	$fdata["GoodName"] = "bono";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_historico";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","bono");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "bono";

		$fdata["sourceSingle"] = "bono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_historico.bono";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacat_trabajadores_puestos_historico_query["bono"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "bono";
//	prima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "prima";
	$fdata["GoodName"] = "prima";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_historico";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","prima");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "prima";

		$fdata["sourceSingle"] = "prima";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_historico.prima";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacat_trabajadores_puestos_historico_query["prima"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "prima";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_puestos_historico";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos_historico_query","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_historico.vigente";

	
	
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


	$tdatacat_trabajadores_puestos_historico_query["vigente"] = $fdata;
		$tdatacat_trabajadores_puestos_historico_query[".searchableFields"][] = "vigente";


$tables_data["cat_trabajadores_puestos_historico_query"]=&$tdatacat_trabajadores_puestos_historico_query;
$field_labels["cat_trabajadores_puestos_historico_query"] = &$fieldLabelscat_trabajadores_puestos_historico_query;
$fieldToolTips["cat_trabajadores_puestos_historico_query"] = &$fieldToolTipscat_trabajadores_puestos_historico_query;
$placeHolders["cat_trabajadores_puestos_historico_query"] = &$placeHolderscat_trabajadores_puestos_historico_query;
$page_titles["cat_trabajadores_puestos_historico_query"] = &$pageTitlescat_trabajadores_puestos_historico_query;


changeTextControlsToDate( "cat_trabajadores_puestos_historico_query" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_puestos_historico_query"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_puestos_historico_query"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_puestos_historico_query()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_puestos_historico.cat_trabajadores_puestos_historico_id,  DATE_FORMAT(cat_trabajadores_puestos_historico.fecha_de_captura, '%Y-%m-%d') AS fecha,  cat_trabajadores_puestos_historico.cat_trabajadores_altas_id,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  cat_trabajadores_altas.nombre_completo,  cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id,  cat_trabajadores_puestos.descripcion_puesto,  cat_trabajadores_puestos_historico.sueldo_diario,  cat_trabajadores_puestos_historico.horas_laborales,  cat_trabajadores_puestos_historico.hora_extra,  cat_trabajadores_puestos_historico.bono,  cat_trabajadores_puestos_historico.prima,  cat_trabajadores_puestos_historico.vigente";
$proto0["m_strFrom"] = "FROM cat_trabajadores_puestos_historico  LEFT OUTER JOIN cat_trabajadores_altas ON cat_trabajadores_puestos_historico.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id  LEFT OUTER JOIN cat_trabajadores_puestos ON cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id = cat_trabajadores_puestos.cat_trabajadores_puestos_id";
$proto0["m_strWhere"] = "(cat_trabajadores_puestos_historico.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_trabajadores_puestos_historico.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_puestos_historico",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_strName" => "cat_trabajadores_puestos_historico_id",
	"m_strTable" => "cat_trabajadores_puestos_historico",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto6["m_sql"] = "cat_trabajadores_puestos_historico.cat_trabajadores_puestos_historico_id";
$proto6["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_trabajadores_puestos_historico.fecha_de_captura"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'%Y-%m-%d'"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "DATE_FORMAT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "DATE_FORMAT(cat_trabajadores_puestos_historico.fecha_de_captura, '%Y-%m-%d')";
$proto8["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "fecha";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_puestos_historico",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto12["m_sql"] = "cat_trabajadores_puestos_historico.cat_trabajadores_altas_id";
$proto12["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto14["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto14["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto16["m_sql"] = "cat_trabajadores_altas.nombre_completo";
$proto16["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_puestos_id",
	"m_strTable" => "cat_trabajadores_puestos_historico",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto18["m_sql"] = "cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id";
$proto18["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto20["m_sql"] = "cat_trabajadores_puestos.descripcion_puesto";
$proto20["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sueldo_diario",
	"m_strTable" => "cat_trabajadores_puestos_historico",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto22["m_sql"] = "cat_trabajadores_puestos_historico.sueldo_diario";
$proto22["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "horas_laborales",
	"m_strTable" => "cat_trabajadores_puestos_historico",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto24["m_sql"] = "cat_trabajadores_puestos_historico.horas_laborales";
$proto24["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_extra",
	"m_strTable" => "cat_trabajadores_puestos_historico",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto26["m_sql"] = "cat_trabajadores_puestos_historico.hora_extra";
$proto26["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "bono",
	"m_strTable" => "cat_trabajadores_puestos_historico",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto28["m_sql"] = "cat_trabajadores_puestos_historico.bono";
$proto28["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "prima",
	"m_strTable" => "cat_trabajadores_puestos_historico",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto30["m_sql"] = "cat_trabajadores_puestos_historico.prima";
$proto30["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_puestos_historico",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto32["m_sql"] = "cat_trabajadores_puestos_historico.vigente";
$proto32["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "cat_trabajadores_puestos_historico";
$proto35["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "cat_trabajadores_puestos_historico_id";
$proto35["m_columns"][] = "cat_trabajadores_altas_id";
$proto35["m_columns"][] = "time_stamp";
$proto35["m_columns"][] = "capturista";
$proto35["m_columns"][] = "vigente";
$proto35["m_columns"][] = "fecha_de_captura";
$proto35["m_columns"][] = "cat_trabajadores_puestos_id";
$proto35["m_columns"][] = "sueldo_diario";
$proto35["m_columns"][] = "horas_laborales";
$proto35["m_columns"][] = "hora_extra";
$proto35["m_columns"][] = "bono";
$proto35["m_columns"][] = "prima";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "cat_trabajadores_puestos_historico";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_LEFTJOIN";
			$proto39=array();
$proto39["m_strName"] = "cat_trabajadores_altas";
$proto39["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "cat_trabajadores_altas_id";
$proto39["m_columns"][] = "time_stamp";
$proto39["m_columns"][] = "capturista";
$proto39["m_columns"][] = "vigente";
$proto39["m_columns"][] = "fecha_de_registro";
$proto39["m_columns"][] = "apellido_paterno";
$proto39["m_columns"][] = "apellido_materno";
$proto39["m_columns"][] = "primer_nombre";
$proto39["m_columns"][] = "segundo_nombre";
$proto39["m_columns"][] = "rfc";
$proto39["m_columns"][] = "curp";
$proto39["m_columns"][] = "num_seguridad_social";
$proto39["m_columns"][] = "municipio_nacimiento";
$proto39["m_columns"][] = "estado_nacimiento";
$proto39["m_columns"][] = "nacionalidad";
$proto39["m_columns"][] = "telefono_emergencia";
$proto39["m_columns"][] = "contacto_emergencia";
$proto39["m_columns"][] = "nombre_completo";
$proto39["m_columns"][] = "fecha_de_nacimiento";
$proto39["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto39["m_columns"][] = "celular_mensajes";
$proto39["m_columns"][] = "permiso_msm";
$proto39["m_columns"][] = "estatus";
$proto39["m_columns"][] = "fecha_de_captura";
$proto39["m_columns"][] = "face_id";
$proto39["m_columns"][] = "tr_tags_numero_asignado";
$proto39["m_columns"][] = "cat_trabajadores_puestos_id";
$proto39["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto39["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto39["m_columns"][] = "calle";
$proto39["m_columns"][] = "colonia";
$proto39["m_columns"][] = "municipio";
$proto39["m_columns"][] = "estado";
$proto39["m_columns"][] = "codigo_postal";
$proto39["m_columns"][] = "banco";
$proto39["m_columns"][] = "cuenta_bancaria";
$proto39["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto39["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto39["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto39["m_columns"][] = "cat_holding_02_empresas";
$proto39["m_columns"][] = "fecha_de_ingreso";
$proto39["m_columns"][] = "numero_domicilio";
$proto39["m_columns"][] = "observaciones";
$proto39["m_columns"][] = "link_foto";
$proto39["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto39["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_altas ON cat_trabajadores_puestos_historico.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto40=array();
$proto40["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id = cat_trabajadores_puestos_historico.cat_trabajadores_altas_id";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= cat_trabajadores_puestos_historico.cat_trabajadores_altas_id";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_LEFTJOIN";
			$proto43=array();
$proto43["m_strName"] = "cat_trabajadores_puestos";
$proto43["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "cat_trabajadores_puestos_id";
$proto43["m_columns"][] = "time_stamp";
$proto43["m_columns"][] = "capturista";
$proto43["m_columns"][] = "vigente";
$proto43["m_columns"][] = "fecha_de_registro";
$proto43["m_columns"][] = "descripcion_puesto";
$proto43["m_columns"][] = "sueldo_diario";
$proto43["m_columns"][] = "horas_laborales";
$proto43["m_columns"][] = "hora_extra";
$proto43["m_columns"][] = "bono";
$proto43["m_columns"][] = "prima";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_puestos ON cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id = cat_trabajadores_puestos.cat_trabajadores_puestos_id";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "cat_trabajadores_puestos_historico_query";
$proto44=array();
$proto44["m_sql"] = "cat_trabajadores_puestos.cat_trabajadores_puestos_id = cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_puestos_id",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos_historico_query"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= cat_trabajadores_puestos_historico.cat_trabajadores_puestos_id";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_puestos_historico_query";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_puestos_historico_query = createSqlQuery_cat_trabajadores_puestos_historico_query();


	
		;

													

$tdatacat_trabajadores_puestos_historico_query[".sqlquery"] = $queryData_cat_trabajadores_puestos_historico_query;



$tdatacat_trabajadores_puestos_historico_query[".hasEvents"] = false;

?>