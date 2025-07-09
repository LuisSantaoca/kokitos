<?php
$tdatabox_cat_actividades_especificas = array();
$tdatabox_cat_actividades_especificas[".searchableFields"] = array();
$tdatabox_cat_actividades_especificas[".ShortName"] = "box_cat_actividades_especificas";
$tdatabox_cat_actividades_especificas[".OwnerID"] = "";
$tdatabox_cat_actividades_especificas[".OriginalTable"] = "cat_actividades_especificas";


$tdatabox_cat_actividades_especificas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_actividades_especificas[".originalPagesByType"] = $tdatabox_cat_actividades_especificas[".pagesByType"];
$tdatabox_cat_actividades_especificas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_actividades_especificas[".originalPages"] = $tdatabox_cat_actividades_especificas[".pages"];
$tdatabox_cat_actividades_especificas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_actividades_especificas[".originalDefaultPages"] = $tdatabox_cat_actividades_especificas[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_actividades_especificas = array();
$fieldToolTipsbox_cat_actividades_especificas = array();
$pageTitlesbox_cat_actividades_especificas = array();
$placeHoldersbox_cat_actividades_especificas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_actividades_especificas["Spanish"] = array();
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"] = array();
	$placeHoldersbox_cat_actividades_especificas["Spanish"] = array();
	$pageTitlesbox_cat_actividades_especificas["Spanish"] = array();
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["cat_actividades_id"] = "Actividad";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["cat_actividades_id"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["cat_actividades_id"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["cat_actividades_unidades_de_costo_id"] = "Unidad";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["cat_actividades_variables_de_ejecucion_id"] = "Variable";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["cat_actividades_variables_de_ejecucion_id"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["cat_actividades_variables_de_ejecucion_id"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["cat_actividades_forma_de_pago_mu_id"] = "Forma de pago";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["cat_actividades_forma_de_pago_mu_id"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["cat_actividades_forma_de_pago_mu_id"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["time_stamp"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["time_stamp"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["llave_actividad_unidad_variable_licencia"] = "Llave";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["llave_actividad_unidad_variable_licencia"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["llave_actividad_unidad_variable_licencia"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["cat_actividades_especificas_id"] = "Id";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["cat_actividades_especificas_id"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["cat_actividades_especificas_id"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["actividad_especifica"] = "Actividad Especifica";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["actividad_especifica"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["actividad_especifica"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["cat_nominas_conceptos_id"] = "Cat Nominas Conceptos Id";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["cat_nominas_conceptos_id"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["cat_nominas_conceptos_id"] = "";
	$fieldLabelsbox_cat_actividades_especificas["Spanish"]["descripcion_nominas_conceptos"] = "Descripcion Nominas Conceptos";
	$fieldToolTipsbox_cat_actividades_especificas["Spanish"]["descripcion_nominas_conceptos"] = "";
	$placeHoldersbox_cat_actividades_especificas["Spanish"]["descripcion_nominas_conceptos"] = "";
	if (count($fieldToolTipsbox_cat_actividades_especificas["Spanish"]))
		$tdatabox_cat_actividades_especificas[".isUseToolTips"] = true;
}





$tdatabox_cat_actividades_especificas[".shortTableName"] = "box_cat_actividades_especificas";
$tdatabox_cat_actividades_especificas[".nSecOptions"] = 0;

$tdatabox_cat_actividades_especificas[".mainTableOwnerID"] = "";
$tdatabox_cat_actividades_especificas[".entityType"] = 1;
$tdatabox_cat_actividades_especificas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_actividades_especificas[".strOriginalTableName"] = "cat_actividades_especificas";

	



$tdatabox_cat_actividades_especificas[".showAddInPopup"] = false;

$tdatabox_cat_actividades_especificas[".showEditInPopup"] = false;

$tdatabox_cat_actividades_especificas[".showViewInPopup"] = false;

$tdatabox_cat_actividades_especificas[".listAjax"] = false;
//	temporary
//$tdatabox_cat_actividades_especificas[".listAjax"] = false;

	$tdatabox_cat_actividades_especificas[".audit"] = false;

	$tdatabox_cat_actividades_especificas[".locking"] = false;


$pages = $tdatabox_cat_actividades_especificas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_actividades_especificas[".edit"] = true;
	$tdatabox_cat_actividades_especificas[".afterEditAction"] = 1;
	$tdatabox_cat_actividades_especificas[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_actividades_especificas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_actividades_especificas[".add"] = true;
$tdatabox_cat_actividades_especificas[".afterAddAction"] = 1;
$tdatabox_cat_actividades_especificas[".closePopupAfterAdd"] = 1;
$tdatabox_cat_actividades_especificas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_actividades_especificas[".list"] = true;
}



$tdatabox_cat_actividades_especificas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_actividades_especificas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_actividades_especificas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_actividades_especificas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_actividades_especificas[".printFriendly"] = true;
}



$tdatabox_cat_actividades_especificas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_actividades_especificas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_actividades_especificas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_actividades_especificas[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_actividades_especificas[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_actividades_especificas[".buttonsAdded"] = false;

$tdatabox_cat_actividades_especificas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_actividades_especificas[".isUseTimeForSearch"] = false;


$tdatabox_cat_actividades_especificas[".badgeColor"] = "E07878";


$tdatabox_cat_actividades_especificas[".allSearchFields"] = array();
$tdatabox_cat_actividades_especificas[".filterFields"] = array();
$tdatabox_cat_actividades_especificas[".requiredSearchFields"] = array();

$tdatabox_cat_actividades_especificas[".googleLikeFields"] = array();
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "cat_actividades_especificas_id";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "actividad_especifica";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "cat_actividades_id";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "cat_actividades_unidades_de_costo_id";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "cat_actividades_variables_de_ejecucion_id";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "cat_actividades_forma_de_pago_mu_id";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "time_stamp";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "vigente";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "capturista";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "llave_actividad_unidad_variable_licencia";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "cat_nominas_conceptos_id";
$tdatabox_cat_actividades_especificas[".googleLikeFields"][] = "descripcion_nominas_conceptos";



$tdatabox_cat_actividades_especificas[".tableType"] = "list";

$tdatabox_cat_actividades_especificas[".printerPageOrientation"] = 0;
$tdatabox_cat_actividades_especificas[".nPrinterPageScale"] = 100;

$tdatabox_cat_actividades_especificas[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_actividades_especificas[".geocodingEnabled"] = false;





$tdatabox_cat_actividades_especificas[".isResizeColumns"] = true;





$tdatabox_cat_actividades_especificas[".pageSize"] = 20;

$tdatabox_cat_actividades_especificas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_actividades_especificas[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_actividades_especificas[".orderindexes"] = array();


$tdatabox_cat_actividades_especificas[".sqlHead"] = "SELECT cat_actividades_especificas.cat_actividades_especificas_id,  CONCAT(COALESCE(cat_actividades.descripcion_actividad, ''), '-', COALESCE(cat_actividades_unidades_de_costo.descripcion_unidades_de_costo, ''), '-', COALESCE(cat_nominas_conceptos.descripcion_nominas_conceptos, '')) AS actividad_especifica,  cat_actividades_especificas.cat_actividades_id,  cat_actividades_especificas.cat_actividades_unidades_de_costo_id,  cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id,  cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id,  cat_actividades_especificas.time_stamp,  cat_actividades_especificas.vigente,  cat_actividades_especificas.capturista,  cat_actividades_especificas.llave_actividad_unidad_variable_licencia,  cat_usuarios.cat_usuarios_licencias_id,  cat_actividades_especificas.cat_nominas_conceptos_id,  cat_nominas_conceptos.descripcion_nominas_conceptos";
$tdatabox_cat_actividades_especificas[".sqlFrom"] = "FROM cat_actividades_especificas  INNER JOIN cat_usuarios ON cat_actividades_especificas.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_actividades ON cat_actividades_especificas.cat_actividades_id = cat_actividades.cat_actividades_id  LEFT OUTER JOIN cat_actividades_variables_de_ejecucion ON cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id = cat_actividades_variables_de_ejecucion.cat_actividades_variables_de_ejecucion_id  LEFT OUTER JOIN cat_actividades_forma_de_pago_mu ON cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id = cat_actividades_forma_de_pago_mu.cat_actividades_forma_de_pago_mu_id  LEFT OUTER JOIN cat_actividades_unidades_de_costo ON cat_actividades_especificas.cat_actividades_unidades_de_costo_id = cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id  LEFT OUTER JOIN cat_nominas_conceptos ON cat_actividades_especificas.cat_nominas_conceptos_id = cat_nominas_conceptos.cat_nominas_conceptos_id";
$tdatabox_cat_actividades_especificas[".sqlWhereExpr"] = "";
$tdatabox_cat_actividades_especificas[".sqlTail"] = "";

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
$tdatabox_cat_actividades_especificas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_actividades_especificas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_actividades_especificas[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_actividades_especificas[".highlightSearchResults"] = true;

$tableKeysbox_cat_actividades_especificas = array();
$tableKeysbox_cat_actividades_especificas[] = "cat_actividades_especificas_id";
$tdatabox_cat_actividades_especificas[".Keys"] = $tableKeysbox_cat_actividades_especificas;


$tdatabox_cat_actividades_especificas[".hideMobileList"] = array();




//	cat_actividades_especificas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_actividades_especificas_id";
	$fdata["GoodName"] = "cat_actividades_especificas_id";
	$fdata["ownerTable"] = "cat_actividades_especificas";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","cat_actividades_especificas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_actividades_especificas_id";

		$fdata["sourceSingle"] = "cat_actividades_especificas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas.cat_actividades_especificas_id";

	
	
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


	$tdatabox_cat_actividades_especificas["cat_actividades_especificas_id"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "cat_actividades_especificas_id";
//	actividad_especifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "actividad_especifica";
	$fdata["GoodName"] = "actividad_especifica";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","actividad_especifica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "actividad_especifica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(COALESCE(cat_actividades.descripcion_actividad, ''), '-', COALESCE(cat_actividades_unidades_de_costo.descripcion_unidades_de_costo, ''), '-', COALESCE(cat_nominas_conceptos.descripcion_nominas_conceptos, ''))";

	
	
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


	$tdatabox_cat_actividades_especificas["actividad_especifica"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "actividad_especifica";
//	cat_actividades_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_actividades_id";
	$fdata["GoodName"] = "cat_actividades_id";
	$fdata["ownerTable"] = "cat_actividades_especificas";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","cat_actividades_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_id";

		$fdata["sourceSingle"] = "cat_actividades_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas.cat_actividades_id";

	
	
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


	$tdatabox_cat_actividades_especificas["cat_actividades_id"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "cat_actividades_id";
//	cat_actividades_unidades_de_costo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["GoodName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["ownerTable"] = "cat_actividades_especificas";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","cat_actividades_unidades_de_costo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_unidades_de_costo_id";

		$fdata["sourceSingle"] = "cat_actividades_unidades_de_costo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas.cat_actividades_unidades_de_costo_id";

	
	
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
	$edata["LookupTable"] = "cat_actividades_unidades_de_costo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_actividades_unidades_de_costo_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_unidades_de_costo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
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


	$tdatabox_cat_actividades_especificas["cat_actividades_unidades_de_costo_id"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "cat_actividades_unidades_de_costo_id";
//	cat_actividades_variables_de_ejecucion_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_actividades_variables_de_ejecucion_id";
	$fdata["GoodName"] = "cat_actividades_variables_de_ejecucion_id";
	$fdata["ownerTable"] = "cat_actividades_especificas";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","cat_actividades_variables_de_ejecucion_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_variables_de_ejecucion_id";

		$fdata["sourceSingle"] = "cat_actividades_variables_de_ejecucion_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id";

	
	
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
	$edata["LookupTable"] = "cat_actividades_variables_de_ejecucion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_actividades_variables_de_ejecucion_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_variable";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
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


	$tdatabox_cat_actividades_especificas["cat_actividades_variables_de_ejecucion_id"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "cat_actividades_variables_de_ejecucion_id";
//	cat_actividades_forma_de_pago_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_actividades_forma_de_pago_mu_id";
	$fdata["GoodName"] = "cat_actividades_forma_de_pago_mu_id";
	$fdata["ownerTable"] = "cat_actividades_especificas";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","cat_actividades_forma_de_pago_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_forma_de_pago_mu_id";

		$fdata["sourceSingle"] = "cat_actividades_forma_de_pago_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_actividades_forma_de_pago_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "cat_actividades_forma_de_pago_mu_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion_forma_de_pago";

	

	
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


	$tdatabox_cat_actividades_especificas["cat_actividades_forma_de_pago_mu_id"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "cat_actividades_forma_de_pago_mu_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_actividades_especificas";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas.time_stamp";

	
	
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


	$tdatabox_cat_actividades_especificas["time_stamp"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_actividades_especificas";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas.vigente";

	
	
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


	$tdatabox_cat_actividades_especificas["vigente"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_actividades_especificas";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas.capturista";

	
	
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


	$tdatabox_cat_actividades_especificas["capturista"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "capturista";
//	llave_actividad_unidad_variable_licencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "llave_actividad_unidad_variable_licencia";
	$fdata["GoodName"] = "llave_actividad_unidad_variable_licencia";
	$fdata["ownerTable"] = "cat_actividades_especificas";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","llave_actividad_unidad_variable_licencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_actividad_unidad_variable_licencia";

		$fdata["sourceSingle"] = "llave_actividad_unidad_variable_licencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas.llave_actividad_unidad_variable_licencia";

	
	
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


	$tdatabox_cat_actividades_especificas["llave_actividad_unidad_variable_licencia"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "llave_actividad_unidad_variable_licencia";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","cat_usuarios_licencias_id");
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


	$tdatabox_cat_actividades_especificas["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_nominas_conceptos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cat_nominas_conceptos_id";
	$fdata["GoodName"] = "cat_nominas_conceptos_id";
	$fdata["ownerTable"] = "cat_actividades_especificas";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","cat_nominas_conceptos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_conceptos_id";

		$fdata["sourceSingle"] = "cat_nominas_conceptos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_especificas.cat_nominas_conceptos_id";

	
	
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


	$tdatabox_cat_actividades_especificas["cat_nominas_conceptos_id"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "cat_nominas_conceptos_id";
//	descripcion_nominas_conceptos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "descripcion_nominas_conceptos";
	$fdata["GoodName"] = "descripcion_nominas_conceptos";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_especificas","descripcion_nominas_conceptos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_nominas_conceptos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos.descripcion_nominas_conceptos";

	
	
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


	$tdatabox_cat_actividades_especificas["descripcion_nominas_conceptos"] = $fdata;
		$tdatabox_cat_actividades_especificas[".searchableFields"][] = "descripcion_nominas_conceptos";


$tables_data["box_cat_actividades_especificas"]=&$tdatabox_cat_actividades_especificas;
$field_labels["box_cat_actividades_especificas"] = &$fieldLabelsbox_cat_actividades_especificas;
$fieldToolTips["box_cat_actividades_especificas"] = &$fieldToolTipsbox_cat_actividades_especificas;
$placeHolders["box_cat_actividades_especificas"] = &$placeHoldersbox_cat_actividades_especificas;
$page_titles["box_cat_actividades_especificas"] = &$pageTitlesbox_cat_actividades_especificas;


changeTextControlsToDate( "box_cat_actividades_especificas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_actividades_especificas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_actividades_especificas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_actividades_especificas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_actividades_especificas.cat_actividades_especificas_id,  CONCAT(COALESCE(cat_actividades.descripcion_actividad, ''), '-', COALESCE(cat_actividades_unidades_de_costo.descripcion_unidades_de_costo, ''), '-', COALESCE(cat_nominas_conceptos.descripcion_nominas_conceptos, '')) AS actividad_especifica,  cat_actividades_especificas.cat_actividades_id,  cat_actividades_especificas.cat_actividades_unidades_de_costo_id,  cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id,  cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id,  cat_actividades_especificas.time_stamp,  cat_actividades_especificas.vigente,  cat_actividades_especificas.capturista,  cat_actividades_especificas.llave_actividad_unidad_variable_licencia,  cat_usuarios.cat_usuarios_licencias_id,  cat_actividades_especificas.cat_nominas_conceptos_id,  cat_nominas_conceptos.descripcion_nominas_conceptos";
$proto0["m_strFrom"] = "FROM cat_actividades_especificas  INNER JOIN cat_usuarios ON cat_actividades_especificas.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_actividades ON cat_actividades_especificas.cat_actividades_id = cat_actividades.cat_actividades_id  LEFT OUTER JOIN cat_actividades_variables_de_ejecucion ON cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id = cat_actividades_variables_de_ejecucion.cat_actividades_variables_de_ejecucion_id  LEFT OUTER JOIN cat_actividades_forma_de_pago_mu ON cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id = cat_actividades_forma_de_pago_mu.cat_actividades_forma_de_pago_mu_id  LEFT OUTER JOIN cat_actividades_unidades_de_costo ON cat_actividades_especificas.cat_actividades_unidades_de_costo_id = cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id  LEFT OUTER JOIN cat_nominas_conceptos ON cat_actividades_especificas.cat_nominas_conceptos_id = cat_nominas_conceptos.cat_nominas_conceptos_id";
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
	"m_strName" => "cat_actividades_especificas_id",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto6["m_sql"] = "cat_actividades_especificas.cat_actividades_especificas_id";
$proto6["m_srcTableName"] = "box_cat_actividades_especificas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(cat_actividades.descripcion_actividad, '')"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(cat_actividades_unidades_de_costo.descripcion_unidades_de_costo, '')"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(cat_nominas_conceptos.descripcion_nominas_conceptos, '')"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "CONCAT(COALESCE(cat_actividades.descripcion_actividad, ''), '-', COALESCE(cat_actividades_unidades_de_costo.descripcion_unidades_de_costo, ''), '-', COALESCE(cat_nominas_conceptos.descripcion_nominas_conceptos, ''))";
$proto8["m_srcTableName"] = "box_cat_actividades_especificas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "actividad_especifica";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_id",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto15["m_sql"] = "cat_actividades_especificas.cat_actividades_id";
$proto15["m_srcTableName"] = "box_cat_actividades_especificas";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_unidades_de_costo_id",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto17["m_sql"] = "cat_actividades_especificas.cat_actividades_unidades_de_costo_id";
$proto17["m_srcTableName"] = "box_cat_actividades_especificas";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_variables_de_ejecucion_id",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto19["m_sql"] = "cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id";
$proto19["m_srcTableName"] = "box_cat_actividades_especificas";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_forma_de_pago_mu_id",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto21["m_sql"] = "cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id";
$proto21["m_srcTableName"] = "box_cat_actividades_especificas";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto23["m_sql"] = "cat_actividades_especificas.time_stamp";
$proto23["m_srcTableName"] = "box_cat_actividades_especificas";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto25["m_sql"] = "cat_actividades_especificas.vigente";
$proto25["m_srcTableName"] = "box_cat_actividades_especificas";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto27["m_sql"] = "cat_actividades_especificas.capturista";
$proto27["m_srcTableName"] = "box_cat_actividades_especificas";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_actividad_unidad_variable_licencia",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto29["m_sql"] = "cat_actividades_especificas.llave_actividad_unidad_variable_licencia";
$proto29["m_srcTableName"] = "box_cat_actividades_especificas";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto31["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto31["m_srcTableName"] = "box_cat_actividades_especificas";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_conceptos_id",
	"m_strTable" => "cat_actividades_especificas",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto33["m_sql"] = "cat_actividades_especificas.cat_nominas_conceptos_id";
$proto33["m_srcTableName"] = "box_cat_actividades_especificas";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_nominas_conceptos",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto35["m_sql"] = "cat_nominas_conceptos.descripcion_nominas_conceptos";
$proto35["m_srcTableName"] = "box_cat_actividades_especificas";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "cat_actividades_especificas";
$proto38["m_srcTableName"] = "box_cat_actividades_especificas";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "cat_actividades_especificas_id";
$proto38["m_columns"][] = "cat_actividades_id";
$proto38["m_columns"][] = "cat_actividades_unidades_de_costo_id";
$proto38["m_columns"][] = "cat_actividades_variables_de_ejecucion_id";
$proto38["m_columns"][] = "cat_actividades_forma_de_pago_mu_id";
$proto38["m_columns"][] = "time_stamp";
$proto38["m_columns"][] = "vigente";
$proto38["m_columns"][] = "capturista";
$proto38["m_columns"][] = "llave_actividad_unidad_variable_licencia";
$proto38["m_columns"][] = "cat_nominas_conceptos_id";
$proto38["m_columns"][] = "costo_bruto_actividad";
$proto38["m_columns"][] = "cat_actividades_alcance_mu_id";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "cat_actividades_especificas";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "box_cat_actividades_especificas";
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

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_INNERJOIN";
			$proto42=array();
$proto42["m_strName"] = "cat_usuarios";
$proto42["m_srcTableName"] = "box_cat_actividades_especificas";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "cat_usuarios_id";
$proto42["m_columns"][] = "time_stamp";
$proto42["m_columns"][] = "vigente";
$proto42["m_columns"][] = "capturista";
$proto42["m_columns"][] = "usuario";
$proto42["m_columns"][] = "cat_usuarios_licencias_id";
$proto42["m_columns"][] = "pass";
$proto42["m_columns"][] = "nombre";
$proto42["m_columns"][] = "correo";
$proto42["m_columns"][] = "cat_trabajadores_altas_id";
$proto42["m_columns"][] = "res_autorizacion";
$proto42["m_columns"][] = "session";
$proto42["m_columns"][] = "tipo";
$proto42["m_columns"][] = "session_v2";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "INNER JOIN cat_usuarios ON cat_actividades_especificas.capturista = cat_usuarios.usuario";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "box_cat_actividades_especificas";
$proto43=array();
$proto43["m_sql"] = "cat_usuarios.usuario = cat_actividades_especificas.capturista";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= cat_actividades_especificas.capturista";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_LEFTJOIN";
			$proto46=array();
$proto46["m_strName"] = "cat_actividades";
$proto46["m_srcTableName"] = "box_cat_actividades_especificas";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "cat_actividades_id";
$proto46["m_columns"][] = "time_stamp";
$proto46["m_columns"][] = "vigente";
$proto46["m_columns"][] = "capturista";
$proto46["m_columns"][] = "descripcion_actividad";
$proto46["m_columns"][] = "cat_actividades_categorias_id";
$proto46["m_columns"][] = "cat_actividades_categorias_mu_id";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "LEFT OUTER JOIN cat_actividades ON cat_actividades_especificas.cat_actividades_id = cat_actividades.cat_actividades_id";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "box_cat_actividades_especificas";
$proto47=array();
$proto47["m_sql"] = "cat_actividades.cat_actividades_id = cat_actividades_especificas.cat_actividades_id";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_actividades_id",
	"m_strTable" => "cat_actividades",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= cat_actividades_especificas.cat_actividades_id";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
												$proto49=array();
$proto49["m_link"] = "SQLL_LEFTJOIN";
			$proto50=array();
$proto50["m_strName"] = "cat_actividades_variables_de_ejecucion";
$proto50["m_srcTableName"] = "box_cat_actividades_especificas";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "cat_actividades_variables_de_ejecucion_id";
$proto50["m_columns"][] = "descripcion_variable";
$proto50["m_columns"][] = "time_stamp";
$proto50["m_columns"][] = "vigente";
$proto50["m_columns"][] = "capturista";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "LEFT OUTER JOIN cat_actividades_variables_de_ejecucion ON cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id = cat_actividades_variables_de_ejecucion.cat_actividades_variables_de_ejecucion_id";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "box_cat_actividades_especificas";
$proto51=array();
$proto51["m_sql"] = "cat_actividades_variables_de_ejecucion.cat_actividades_variables_de_ejecucion_id = cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_actividades_variables_de_ejecucion_id",
	"m_strTable" => "cat_actividades_variables_de_ejecucion",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= cat_actividades_especificas.cat_actividades_variables_de_ejecucion_id";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
												$proto53=array();
$proto53["m_link"] = "SQLL_LEFTJOIN";
			$proto54=array();
$proto54["m_strName"] = "cat_actividades_forma_de_pago_mu";
$proto54["m_srcTableName"] = "box_cat_actividades_especificas";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "cat_actividades_forma_de_pago_mu_id";
$proto54["m_columns"][] = "time_stamp";
$proto54["m_columns"][] = "vigente";
$proto54["m_columns"][] = "capturista";
$proto54["m_columns"][] = "descripcion_forma_de_pago";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "LEFT OUTER JOIN cat_actividades_forma_de_pago_mu ON cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id = cat_actividades_forma_de_pago_mu.cat_actividades_forma_de_pago_mu_id";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "box_cat_actividades_especificas";
$proto55=array();
$proto55["m_sql"] = "cat_actividades_forma_de_pago_mu.cat_actividades_forma_de_pago_mu_id = cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_actividades_forma_de_pago_mu_id",
	"m_strTable" => "cat_actividades_forma_de_pago_mu",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "= cat_actividades_especificas.cat_actividades_forma_de_pago_mu_id";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto0["m_fromlist"][]=$obj;
												$proto57=array();
$proto57["m_link"] = "SQLL_LEFTJOIN";
			$proto58=array();
$proto58["m_strName"] = "cat_actividades_unidades_de_costo";
$proto58["m_srcTableName"] = "box_cat_actividades_especificas";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "cat_actividades_unidades_de_costo_id";
$proto58["m_columns"][] = "time_stamp";
$proto58["m_columns"][] = "vigente";
$proto58["m_columns"][] = "capturista";
$proto58["m_columns"][] = "descripcion_unidades_de_costo";
$proto58["m_columns"][] = "factor_de_calculo";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "LEFT OUTER JOIN cat_actividades_unidades_de_costo ON cat_actividades_especificas.cat_actividades_unidades_de_costo_id = cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "box_cat_actividades_especificas";
$proto59=array();
$proto59["m_sql"] = "cat_actividades_unidades_de_costo.cat_actividades_unidades_de_costo_id = cat_actividades_especificas.cat_actividades_unidades_de_costo_id";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_actividades_unidades_de_costo_id",
	"m_strTable" => "cat_actividades_unidades_de_costo",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= cat_actividades_especificas.cat_actividades_unidades_de_costo_id";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
												$proto61=array();
$proto61["m_link"] = "SQLL_LEFTJOIN";
			$proto62=array();
$proto62["m_strName"] = "cat_nominas_conceptos";
$proto62["m_srcTableName"] = "box_cat_actividades_especificas";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "vigente";
$proto62["m_columns"][] = "descripcion_nominas_conceptos";
$proto62["m_columns"][] = "cat_nominas_conceptos_clasificacion_mu_id";
$proto62["m_columns"][] = "cat_nominas_conceptos_id";
$proto62["m_columns"][] = "capturista";
$proto62["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_sql"] = "LEFT OUTER JOIN cat_nominas_conceptos ON cat_actividades_especificas.cat_nominas_conceptos_id = cat_nominas_conceptos.cat_nominas_conceptos_id";
$proto61["m_alias"] = "";
$proto61["m_srcTableName"] = "box_cat_actividades_especificas";
$proto63=array();
$proto63["m_sql"] = "cat_nominas_conceptos.cat_nominas_conceptos_id = cat_actividades_especificas.cat_nominas_conceptos_id";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_nominas_conceptos_id",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "box_cat_actividades_especificas"
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "= cat_actividades_especificas.cat_nominas_conceptos_id";
$proto63["m_havingmode"] = false;
$proto63["m_inBrackets"] = false;
$proto63["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto63);

$proto61["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto61);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_actividades_especificas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_actividades_especificas = createSqlQuery_box_cat_actividades_especificas();


	
		;

													

$tdatabox_cat_actividades_especificas[".sqlquery"] = $queryData_box_cat_actividades_especificas;



$tdatabox_cat_actividades_especificas[".hasEvents"] = false;

?>