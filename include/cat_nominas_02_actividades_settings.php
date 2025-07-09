<?php
$tdatacat_nominas_02_actividades = array();
$tdatacat_nominas_02_actividades[".searchableFields"] = array();
$tdatacat_nominas_02_actividades[".ShortName"] = "cat_nominas_02_actividades";
$tdatacat_nominas_02_actividades[".OwnerID"] = "";
$tdatacat_nominas_02_actividades[".OriginalTable"] = "cat_nominas_02_actividades";


$tdatacat_nominas_02_actividades[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_nominas_02_actividades[".originalPagesByType"] = $tdatacat_nominas_02_actividades[".pagesByType"];
$tdatacat_nominas_02_actividades[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_nominas_02_actividades[".originalPages"] = $tdatacat_nominas_02_actividades[".pages"];
$tdatacat_nominas_02_actividades[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_nominas_02_actividades[".originalDefaultPages"] = $tdatacat_nominas_02_actividades[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_02_actividades = array();
$fieldToolTipscat_nominas_02_actividades = array();
$pageTitlescat_nominas_02_actividades = array();
$placeHolderscat_nominas_02_actividades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_02_actividades["Spanish"] = array();
	$fieldToolTipscat_nominas_02_actividades["Spanish"] = array();
	$placeHolderscat_nominas_02_actividades["Spanish"] = array();
	$pageTitlescat_nominas_02_actividades["Spanish"] = array();
	$fieldLabelscat_nominas_02_actividades["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["vigente"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["cat_nominas_02_actividades_id"] = "id";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["cat_nominas_02_actividades_id"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["cat_nominas_02_actividades_id"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["cat_nominas_01_generales_uuid"] = "Uuid";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["cat_actividades_especificas_id"] = "Actividad especifica";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["cat_actividades_especificas_id"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["cat_actividades_especificas_id"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["cat_actividades_alcance_mu_id"] = "Alcance";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["cat_actividades_alcance_mu_id"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["cat_actividades_alcance_mu_id"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["limite_inferior"] = "Limite Inferior";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["limite_inferior"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["limite_inferior"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["limite_superior"] = "Limite Superior";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["limite_superior"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["limite_superior"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["costo_bruto_primera"] = "Costo  bruto";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["costo_bruto_primera"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["costo_bruto_primera"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["costo_bruto_segunda"] = "Costo Segunda";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["costo_bruto_segunda"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["costo_bruto_segunda"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["cat_nominas_conceptos_id"] = "Concepto";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["cat_nominas_conceptos_id"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["cat_nominas_conceptos_id"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "UP";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["cat_holding_03_empresas_unidades_productivas_id"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "Cultivo";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$fieldLabelscat_nominas_02_actividades["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "Lote";
	$fieldToolTipscat_nominas_02_actividades["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	$placeHolderscat_nominas_02_actividades["Spanish"]["cat_holding_04_unidades_productivas_lotes_id"] = "";
	if (count($fieldToolTipscat_nominas_02_actividades["Spanish"]))
		$tdatacat_nominas_02_actividades[".isUseToolTips"] = true;
}





$tdatacat_nominas_02_actividades[".shortTableName"] = "cat_nominas_02_actividades";
$tdatacat_nominas_02_actividades[".nSecOptions"] = 0;

$tdatacat_nominas_02_actividades[".mainTableOwnerID"] = "";
$tdatacat_nominas_02_actividades[".entityType"] = 0;
$tdatacat_nominas_02_actividades[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_02_actividades[".strOriginalTableName"] = "cat_nominas_02_actividades";

	



$tdatacat_nominas_02_actividades[".showAddInPopup"] = false;

$tdatacat_nominas_02_actividades[".showEditInPopup"] = false;

$tdatacat_nominas_02_actividades[".showViewInPopup"] = false;

$tdatacat_nominas_02_actividades[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_02_actividades[".listAjax"] = false;

	$tdatacat_nominas_02_actividades[".audit"] = false;

	$tdatacat_nominas_02_actividades[".locking"] = false;


$pages = $tdatacat_nominas_02_actividades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_02_actividades[".edit"] = true;
	$tdatacat_nominas_02_actividades[".afterEditAction"] = 1;
	$tdatacat_nominas_02_actividades[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_02_actividades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_02_actividades[".add"] = true;
$tdatacat_nominas_02_actividades[".afterAddAction"] = 1;
$tdatacat_nominas_02_actividades[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_02_actividades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_02_actividades[".list"] = true;
}



$tdatacat_nominas_02_actividades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_02_actividades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_02_actividades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_02_actividades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_02_actividades[".printFriendly"] = true;
}



$tdatacat_nominas_02_actividades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_02_actividades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_02_actividades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_02_actividades[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_02_actividades[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_02_actividades[".buttonsAdded"] = false;

$tdatacat_nominas_02_actividades[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacat_nominas_02_actividades[".isUseTimeForSearch"] = false;


$tdatacat_nominas_02_actividades[".badgeColor"] = "6b8e23";


$tdatacat_nominas_02_actividades[".allSearchFields"] = array();
$tdatacat_nominas_02_actividades[".filterFields"] = array();
$tdatacat_nominas_02_actividades[".requiredSearchFields"] = array();

$tdatacat_nominas_02_actividades[".googleLikeFields"] = array();
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "cat_actividades_especificas_id";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "cat_nominas_02_actividades_id";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "time_stamp";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "cat_nominas_01_generales_uuid";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "cat_actividades_alcance_mu_id";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "limite_inferior";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "limite_superior";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "costo_bruto_primera";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "costo_bruto_segunda";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "cat_nominas_conceptos_id";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "cat_produccion_cultivos_01_productos_id";
$tdatacat_nominas_02_actividades[".googleLikeFields"][] = "cat_holding_04_unidades_productivas_lotes_id";



$tdatacat_nominas_02_actividades[".tableType"] = "list";

$tdatacat_nominas_02_actividades[".printerPageOrientation"] = 0;
$tdatacat_nominas_02_actividades[".nPrinterPageScale"] = 100;

$tdatacat_nominas_02_actividades[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_02_actividades[".geocodingEnabled"] = false;





$tdatacat_nominas_02_actividades[".isResizeColumns"] = true;





$tdatacat_nominas_02_actividades[".pageSize"] = 20;

$tdatacat_nominas_02_actividades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_02_actividades[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_02_actividades[".orderindexes"] = array();


$tdatacat_nominas_02_actividades[".sqlHead"] = "SELECT cat_nominas_02_actividades.vigente,  cat_nominas_02_actividades.cat_actividades_especificas_id,  cat_nominas_02_actividades.cat_nominas_02_actividades_id,  cat_nominas_02_actividades.capturista,  cat_nominas_02_actividades.time_stamp,  cat_nominas_02_actividades.cat_nominas_01_generales_uuid,  cat_nominas_02_actividades.cat_actividades_alcance_mu_id,  cat_nominas_02_actividades.limite_inferior,  cat_nominas_02_actividades.limite_superior,  cat_nominas_02_actividades.costo_bruto_primera,  cat_nominas_02_actividades.costo_bruto_segunda,  cat_usuarios.cat_usuarios_licencias_id,  cat_nominas_02_actividades.cat_nominas_conceptos_id,  cat_nominas_02_actividades.cat_holding_03_empresas_unidades_productivas_id,  cat_nominas_02_actividades.cat_produccion_cultivos_01_productos_id,  cat_nominas_02_actividades.cat_holding_04_unidades_productivas_lotes_id";
$tdatacat_nominas_02_actividades[".sqlFrom"] = "FROM cat_nominas_02_actividades  INNER JOIN cat_usuarios ON cat_nominas_02_actividades.capturista = cat_usuarios.usuario";
$tdatacat_nominas_02_actividades[".sqlWhereExpr"] = "";
$tdatacat_nominas_02_actividades[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios.cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_nominas_02_actividades[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_02_actividades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_02_actividades[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_02_actividades[".highlightSearchResults"] = true;

$tableKeyscat_nominas_02_actividades = array();
$tableKeyscat_nominas_02_actividades[] = "cat_nominas_02_actividades_id";
$tdatacat_nominas_02_actividades[".Keys"] = $tableKeyscat_nominas_02_actividades;


$tdatacat_nominas_02_actividades[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.vigente";

	
	
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


	$tdatacat_nominas_02_actividades["vigente"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "vigente";
//	cat_actividades_especificas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_actividades_especificas_id";
	$fdata["GoodName"] = "cat_actividades_especificas_id";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","cat_actividades_especificas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_especificas_id";

		$fdata["sourceSingle"] = "cat_actividades_especificas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.cat_actividades_especificas_id";

	
	
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


	$tdatacat_nominas_02_actividades["cat_actividades_especificas_id"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "cat_actividades_especificas_id";
//	cat_nominas_02_actividades_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_nominas_02_actividades_id";
	$fdata["GoodName"] = "cat_nominas_02_actividades_id";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","cat_nominas_02_actividades_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_02_actividades_id";

		$fdata["sourceSingle"] = "cat_nominas_02_actividades_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.cat_nominas_02_actividades_id";

	
	
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


	$tdatacat_nominas_02_actividades["cat_nominas_02_actividades_id"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "cat_nominas_02_actividades_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.capturista";

	
	
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


	$tdatacat_nominas_02_actividades["capturista"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.time_stamp";

	
	
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


	$tdatacat_nominas_02_actividades["time_stamp"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "time_stamp";
//	cat_nominas_01_generales_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_nominas_01_generales_uuid";
	$fdata["GoodName"] = "cat_nominas_01_generales_uuid";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","cat_nominas_01_generales_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_nominas_01_generales_uuid";

		$fdata["sourceSingle"] = "cat_nominas_01_generales_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.cat_nominas_01_generales_uuid";

	
	
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


	$tdatacat_nominas_02_actividades["cat_nominas_01_generales_uuid"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "cat_nominas_01_generales_uuid";
//	cat_actividades_alcance_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_actividades_alcance_mu_id";
	$fdata["GoodName"] = "cat_actividades_alcance_mu_id";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","cat_actividades_alcance_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_alcance_mu_id";

		$fdata["sourceSingle"] = "cat_actividades_alcance_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.cat_actividades_alcance_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_actividades_alcance_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "cat_actividades_alcance_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_alcance";

	

	
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


	$tdatacat_nominas_02_actividades["cat_actividades_alcance_mu_id"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "cat_actividades_alcance_mu_id";
//	limite_inferior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "limite_inferior";
	$fdata["GoodName"] = "limite_inferior";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","limite_inferior");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "limite_inferior";

		$fdata["sourceSingle"] = "limite_inferior";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.limite_inferior";

	
	
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


	$tdatacat_nominas_02_actividades["limite_inferior"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "limite_inferior";
//	limite_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "limite_superior";
	$fdata["GoodName"] = "limite_superior";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","limite_superior");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "limite_superior";

		$fdata["sourceSingle"] = "limite_superior";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.limite_superior";

	
	
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


	$tdatacat_nominas_02_actividades["limite_superior"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "limite_superior";
//	costo_bruto_primera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "costo_bruto_primera";
	$fdata["GoodName"] = "costo_bruto_primera";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","costo_bruto_primera");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "costo_bruto_primera";

		$fdata["sourceSingle"] = "costo_bruto_primera";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.costo_bruto_primera";

	
	
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


	$tdatacat_nominas_02_actividades["costo_bruto_primera"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "costo_bruto_primera";
//	costo_bruto_segunda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "costo_bruto_segunda";
	$fdata["GoodName"] = "costo_bruto_segunda";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","costo_bruto_segunda");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "costo_bruto_segunda";

		$fdata["sourceSingle"] = "costo_bruto_segunda";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.costo_bruto_segunda";

	
	
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


	$tdatacat_nominas_02_actividades["costo_bruto_segunda"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "costo_bruto_segunda";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios.cat_usuarios_licencias_id";

	
	
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


	$tdatacat_nominas_02_actividades["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_nominas_conceptos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cat_nominas_conceptos_id";
	$fdata["GoodName"] = "cat_nominas_conceptos_id";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","cat_nominas_conceptos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_conceptos_id";

		$fdata["sourceSingle"] = "cat_nominas_conceptos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.cat_nominas_conceptos_id";

	
	
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
	$edata["LookupTable"] = "box_cat_nominas_conceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cat_nominas_conceptos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_nominas_conceptos";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatacat_nominas_02_actividades["cat_nominas_conceptos_id"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "cat_nominas_conceptos_id";
//	cat_holding_03_empresas_unidades_productivas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["GoodName"] = "cat_holding_03_empresas_unidades_productivas_id";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","cat_holding_03_empresas_unidades_productivas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_03_empresas_unidades_productivas_id";

		$fdata["sourceSingle"] = "cat_holding_03_empresas_unidades_productivas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.cat_holding_03_empresas_unidades_productivas_id";

	
	
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
		$edata["LCType"] = 4;

	
		
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


	$tdatacat_nominas_02_actividades["cat_holding_03_empresas_unidades_productivas_id"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "cat_holding_03_empresas_unidades_productivas_id";
//	cat_produccion_cultivos_01_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["GoodName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","cat_produccion_cultivos_01_productos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_produccion_cultivos_01_productos_id";

		$fdata["sourceSingle"] = "cat_produccion_cultivos_01_productos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.cat_produccion_cultivos_01_productos_id";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_produccion_cultivos_01_productos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_producto";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
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


	$tdatacat_nominas_02_actividades["cat_produccion_cultivos_01_productos_id"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "cat_produccion_cultivos_01_productos_id";
//	cat_holding_04_unidades_productivas_lotes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["GoodName"] = "cat_holding_04_unidades_productivas_lotes_id";
	$fdata["ownerTable"] = "cat_nominas_02_actividades";
	$fdata["Label"] = GetFieldLabel("cat_nominas_02_actividades","cat_holding_04_unidades_productivas_lotes_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_04_unidades_productivas_lotes_id";

		$fdata["sourceSingle"] = "cat_holding_04_unidades_productivas_lotes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_02_actividades.cat_holding_04_unidades_productivas_lotes_id";

	
	
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


	$tdatacat_nominas_02_actividades["cat_holding_04_unidades_productivas_lotes_id"] = $fdata;
		$tdatacat_nominas_02_actividades[".searchableFields"][] = "cat_holding_04_unidades_productivas_lotes_id";


$tables_data["cat_nominas_02_actividades"]=&$tdatacat_nominas_02_actividades;
$field_labels["cat_nominas_02_actividades"] = &$fieldLabelscat_nominas_02_actividades;
$fieldToolTips["cat_nominas_02_actividades"] = &$fieldToolTipscat_nominas_02_actividades;
$placeHolders["cat_nominas_02_actividades"] = &$placeHolderscat_nominas_02_actividades;
$page_titles["cat_nominas_02_actividades"] = &$pageTitlescat_nominas_02_actividades;


changeTextControlsToDate( "cat_nominas_02_actividades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_02_actividades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_02_actividades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_02_actividades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_nominas_02_actividades.vigente,  cat_nominas_02_actividades.cat_actividades_especificas_id,  cat_nominas_02_actividades.cat_nominas_02_actividades_id,  cat_nominas_02_actividades.capturista,  cat_nominas_02_actividades.time_stamp,  cat_nominas_02_actividades.cat_nominas_01_generales_uuid,  cat_nominas_02_actividades.cat_actividades_alcance_mu_id,  cat_nominas_02_actividades.limite_inferior,  cat_nominas_02_actividades.limite_superior,  cat_nominas_02_actividades.costo_bruto_primera,  cat_nominas_02_actividades.costo_bruto_segunda,  cat_usuarios.cat_usuarios_licencias_id,  cat_nominas_02_actividades.cat_nominas_conceptos_id,  cat_nominas_02_actividades.cat_holding_03_empresas_unidades_productivas_id,  cat_nominas_02_actividades.cat_produccion_cultivos_01_productos_id,  cat_nominas_02_actividades.cat_holding_04_unidades_productivas_lotes_id";
$proto0["m_strFrom"] = "FROM cat_nominas_02_actividades  INNER JOIN cat_usuarios ON cat_nominas_02_actividades.capturista = cat_usuarios.usuario";
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
	"m_strName" => "vigente",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto6["m_sql"] = "cat_nominas_02_actividades.vigente";
$proto6["m_srcTableName"] = "cat_nominas_02_actividades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_especificas_id",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto8["m_sql"] = "cat_nominas_02_actividades.cat_actividades_especificas_id";
$proto8["m_srcTableName"] = "cat_nominas_02_actividades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_02_actividades_id",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto10["m_sql"] = "cat_nominas_02_actividades.cat_nominas_02_actividades_id";
$proto10["m_srcTableName"] = "cat_nominas_02_actividades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto12["m_sql"] = "cat_nominas_02_actividades.capturista";
$proto12["m_srcTableName"] = "cat_nominas_02_actividades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto14["m_sql"] = "cat_nominas_02_actividades.time_stamp";
$proto14["m_srcTableName"] = "cat_nominas_02_actividades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_01_generales_uuid",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto16["m_sql"] = "cat_nominas_02_actividades.cat_nominas_01_generales_uuid";
$proto16["m_srcTableName"] = "cat_nominas_02_actividades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_alcance_mu_id",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto18["m_sql"] = "cat_nominas_02_actividades.cat_actividades_alcance_mu_id";
$proto18["m_srcTableName"] = "cat_nominas_02_actividades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "limite_inferior",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto20["m_sql"] = "cat_nominas_02_actividades.limite_inferior";
$proto20["m_srcTableName"] = "cat_nominas_02_actividades";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "limite_superior",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto22["m_sql"] = "cat_nominas_02_actividades.limite_superior";
$proto22["m_srcTableName"] = "cat_nominas_02_actividades";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_bruto_primera",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto24["m_sql"] = "cat_nominas_02_actividades.costo_bruto_primera";
$proto24["m_srcTableName"] = "cat_nominas_02_actividades";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_bruto_segunda",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto26["m_sql"] = "cat_nominas_02_actividades.costo_bruto_segunda";
$proto26["m_srcTableName"] = "cat_nominas_02_actividades";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto28["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto28["m_srcTableName"] = "cat_nominas_02_actividades";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_conceptos_id",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto30["m_sql"] = "cat_nominas_02_actividades.cat_nominas_conceptos_id";
$proto30["m_srcTableName"] = "cat_nominas_02_actividades";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_03_empresas_unidades_productivas_id",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto32["m_sql"] = "cat_nominas_02_actividades.cat_holding_03_empresas_unidades_productivas_id";
$proto32["m_srcTableName"] = "cat_nominas_02_actividades";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_cultivos_01_productos_id",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto34["m_sql"] = "cat_nominas_02_actividades.cat_produccion_cultivos_01_productos_id";
$proto34["m_srcTableName"] = "cat_nominas_02_actividades";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_04_unidades_productivas_lotes_id",
	"m_strTable" => "cat_nominas_02_actividades",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto36["m_sql"] = "cat_nominas_02_actividades.cat_holding_04_unidades_productivas_lotes_id";
$proto36["m_srcTableName"] = "cat_nominas_02_actividades";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "cat_nominas_02_actividades";
$proto39["m_srcTableName"] = "cat_nominas_02_actividades";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "vigente";
$proto39["m_columns"][] = "cat_actividades_especificas_id";
$proto39["m_columns"][] = "cat_nominas_02_actividades_id";
$proto39["m_columns"][] = "capturista";
$proto39["m_columns"][] = "time_stamp";
$proto39["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto39["m_columns"][] = "cat_actividades_alcance_mu_id";
$proto39["m_columns"][] = "limite_inferior";
$proto39["m_columns"][] = "limite_superior";
$proto39["m_columns"][] = "costo_bruto_primera";
$proto39["m_columns"][] = "costo_bruto_segunda";
$proto39["m_columns"][] = "cat_nominas_conceptos_id";
$proto39["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto39["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto39["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto39["m_columns"][] = "llave_up_lote_actesp_prod_uuid";
$proto39["m_columns"][] = "llave_up_lote_actesp_prod";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "cat_nominas_02_actividades";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "cat_nominas_02_actividades";
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
												$proto42=array();
$proto42["m_link"] = "SQLL_INNERJOIN";
			$proto43=array();
$proto43["m_strName"] = "cat_usuarios";
$proto43["m_srcTableName"] = "cat_nominas_02_actividades";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "cat_usuarios_id";
$proto43["m_columns"][] = "time_stamp";
$proto43["m_columns"][] = "vigente";
$proto43["m_columns"][] = "capturista";
$proto43["m_columns"][] = "usuario";
$proto43["m_columns"][] = "cat_usuarios_licencias_id";
$proto43["m_columns"][] = "pass";
$proto43["m_columns"][] = "nombre";
$proto43["m_columns"][] = "correo";
$proto43["m_columns"][] = "cat_trabajadores_altas_id";
$proto43["m_columns"][] = "res_autorizacion";
$proto43["m_columns"][] = "session";
$proto43["m_columns"][] = "tipo";
$proto43["m_columns"][] = "session_v2";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "INNER JOIN cat_usuarios ON cat_nominas_02_actividades.capturista = cat_usuarios.usuario";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "cat_nominas_02_actividades";
$proto44=array();
$proto44["m_sql"] = "cat_usuarios.usuario = cat_nominas_02_actividades.capturista";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_nominas_02_actividades"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= cat_nominas_02_actividades.capturista";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_nominas_02_actividades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_02_actividades = createSqlQuery_cat_nominas_02_actividades();


	
		;

																

$tdatacat_nominas_02_actividades[".sqlquery"] = $queryData_cat_nominas_02_actividades;



include_once(getabspath("include/cat_nominas_02_actividades_events.php"));
$tdatacat_nominas_02_actividades[".hasEvents"] = true;

?>