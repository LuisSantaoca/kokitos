<?php
$tdatabox_cat_nominas_01_generales = array();
$tdatabox_cat_nominas_01_generales[".searchableFields"] = array();
$tdatabox_cat_nominas_01_generales[".ShortName"] = "box_cat_nominas_01_generales";
$tdatabox_cat_nominas_01_generales[".OwnerID"] = "";
$tdatabox_cat_nominas_01_generales[".OriginalTable"] = "cat_nominas_01_generales";


$tdatabox_cat_nominas_01_generales[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatabox_cat_nominas_01_generales[".originalPagesByType"] = $tdatabox_cat_nominas_01_generales[".pagesByType"];
$tdatabox_cat_nominas_01_generales[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_nominas_01_generales[".originalPages"] = $tdatabox_cat_nominas_01_generales[".pages"];
$tdatabox_cat_nominas_01_generales[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatabox_cat_nominas_01_generales[".originalDefaultPages"] = $tdatabox_cat_nominas_01_generales[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_nominas_01_generales = array();
$fieldToolTipsbox_cat_nominas_01_generales = array();
$pageTitlesbox_cat_nominas_01_generales = array();
$placeHoldersbox_cat_nominas_01_generales = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"] = array();
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"] = array();
	$placeHoldersbox_cat_nominas_01_generales["Spanish"] = array();
	$pageTitlesbox_cat_nominas_01_generales["Spanish"] = array();
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["descripcion_nomina"] = "Descripcion";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["descripcion_nomina"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["descripcion_nomina"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["dia_de_inicio"] = "Dia inicio";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["dia_de_inicio"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["dia_de_inicio"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["fecha_de_inicio"] = "Inicio";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["fecha_de_inicio"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["fecha_de_inicio"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["fecha_de_termino"] = "Termino";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["fecha_de_termino"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["fecha_de_termino"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["cat_nominas_01_generales_id"] = "Cat Nominas 01 Generales Id";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["cat_nominas_01_generales_id"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["cat_nominas_01_generales_id"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["time_stamp"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["time_stamp"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["cat_nominas_01_generales_uuid"] = "Uuid";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["cat_nominas_periodicidad_mu_id"] = "Periodicidad";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["cat_nominas_periodicidad_mu_id"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["cat_nominas_periodicidad_mu_id"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["horas_semana_laboral"] = "Hr. Semana";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["horas_semana_laboral"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["horas_semana_laboral"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["cat_nominas_uuid_semana"] = "Uuid Semana";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["cat_nominas_uuid_semana"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["cat_nominas_uuid_semana"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["cat_usuarios_licencias_id1"] = "Cat Usuarios Licencias Id1";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["cat_usuarios_licencias_id1"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["cat_usuarios_licencias_id1"] = "";
	$fieldLabelsbox_cat_nominas_01_generales["Spanish"]["llave_ano_semana_nominas_uuid"] = "sem_uuid";
	$fieldToolTipsbox_cat_nominas_01_generales["Spanish"]["llave_ano_semana_nominas_uuid"] = "";
	$placeHoldersbox_cat_nominas_01_generales["Spanish"]["llave_ano_semana_nominas_uuid"] = "";
	if (count($fieldToolTipsbox_cat_nominas_01_generales["Spanish"]))
		$tdatabox_cat_nominas_01_generales[".isUseToolTips"] = true;
}





$tdatabox_cat_nominas_01_generales[".shortTableName"] = "box_cat_nominas_01_generales";
$tdatabox_cat_nominas_01_generales[".nSecOptions"] = 0;

$tdatabox_cat_nominas_01_generales[".mainTableOwnerID"] = "";
$tdatabox_cat_nominas_01_generales[".entityType"] = 1;
$tdatabox_cat_nominas_01_generales[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_nominas_01_generales[".strOriginalTableName"] = "cat_nominas_01_generales";

	



$tdatabox_cat_nominas_01_generales[".showAddInPopup"] = false;

$tdatabox_cat_nominas_01_generales[".showEditInPopup"] = false;

$tdatabox_cat_nominas_01_generales[".showViewInPopup"] = false;

$tdatabox_cat_nominas_01_generales[".listAjax"] = false;
//	temporary
//$tdatabox_cat_nominas_01_generales[".listAjax"] = false;

	$tdatabox_cat_nominas_01_generales[".audit"] = false;

	$tdatabox_cat_nominas_01_generales[".locking"] = false;


$pages = $tdatabox_cat_nominas_01_generales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_nominas_01_generales[".edit"] = true;
	$tdatabox_cat_nominas_01_generales[".afterEditAction"] = 1;
	$tdatabox_cat_nominas_01_generales[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_nominas_01_generales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_nominas_01_generales[".add"] = true;
$tdatabox_cat_nominas_01_generales[".afterAddAction"] = 1;
$tdatabox_cat_nominas_01_generales[".closePopupAfterAdd"] = 1;
$tdatabox_cat_nominas_01_generales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_nominas_01_generales[".list"] = true;
}



$tdatabox_cat_nominas_01_generales[".strSortControlSettingsJSON"] = "";

$tdatabox_cat_nominas_01_generales[".strClickActionJSON"] = "{\"fields\":{\"capturista\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_nominas_01_generales_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_nominas_01_generales_uuid\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_nominas_periodicidad_mu_id\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"cat_nominas_02_actividades\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"cat_nominas_02_actividades\",\"url\":\"\"}},\"cat_nominas_uuid_semana\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_usuarios_licencias_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"cat_usuarios_licencias_id1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"descripcion_nomina\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dia_de_inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fecha_de_inicio\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fecha_de_termino\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"horas_semana_laboral\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"llave_ano_semana_nominas_uuid\":{\"action\":\"grid\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"cat_nominas_02_actividades\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"cat_nominas_02_actividades\",\"url\":\"\"}},\"time_stamp\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"vigente\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":\"cat_nominas_02_actividades\"},\"openData\":{\"how\":\"goto\",\"page\":\"edit\",\"table\":\"cat_nominas_02_actividades\",\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_nominas_01_generales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_nominas_01_generales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_nominas_01_generales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_nominas_01_generales[".printFriendly"] = true;
}



$tdatabox_cat_nominas_01_generales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_nominas_01_generales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_nominas_01_generales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_nominas_01_generales[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_nominas_01_generales[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_nominas_01_generales[".buttonsAdded"] = false;

$tdatabox_cat_nominas_01_generales[".addPageEvents"] = true;

// use timepicker for search panel
$tdatabox_cat_nominas_01_generales[".isUseTimeForSearch"] = false;


$tdatabox_cat_nominas_01_generales[".badgeColor"] = "4682B4";


$tdatabox_cat_nominas_01_generales[".allSearchFields"] = array();
$tdatabox_cat_nominas_01_generales[".filterFields"] = array();
$tdatabox_cat_nominas_01_generales[".requiredSearchFields"] = array();

$tdatabox_cat_nominas_01_generales[".googleLikeFields"] = array();
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "vigente";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "descripcion_nomina";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "dia_de_inicio";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "fecha_de_inicio";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "fecha_de_termino";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "cat_nominas_01_generales_id";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "capturista";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "time_stamp";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "cat_nominas_01_generales_uuid";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "cat_nominas_periodicidad_mu_id";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "horas_semana_laboral";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "cat_nominas_uuid_semana";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "cat_usuarios_licencias_id1";
$tdatabox_cat_nominas_01_generales[".googleLikeFields"][] = "llave_ano_semana_nominas_uuid";



$tdatabox_cat_nominas_01_generales[".tableType"] = "list";

$tdatabox_cat_nominas_01_generales[".printerPageOrientation"] = 0;
$tdatabox_cat_nominas_01_generales[".nPrinterPageScale"] = 100;

$tdatabox_cat_nominas_01_generales[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_nominas_01_generales[".geocodingEnabled"] = false;





$tdatabox_cat_nominas_01_generales[".isResizeColumns"] = true;





$tdatabox_cat_nominas_01_generales[".pageSize"] = 20;

$tdatabox_cat_nominas_01_generales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_nominas_01_generales[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_nominas_01_generales[".orderindexes"] = array();


$tdatabox_cat_nominas_01_generales[".sqlHead"] = "SELECT vigente,  descripcion_nomina,  dia_de_inicio,  fecha_de_inicio,  fecha_de_termino,  cat_nominas_01_generales_id,  capturista,  time_stamp,  cat_nominas_01_generales_uuid,  cat_nominas_periodicidad_mu_id,  horas_semana_laboral,  cat_nominas_uuid_semana,  cat_usuarios_licencias_id AS cat_usuarios_licencias_id1,  llave_ano_semana_nominas_uuid";
$tdatabox_cat_nominas_01_generales[".sqlFrom"] = "FROM cat_nominas_01_generales";
$tdatabox_cat_nominas_01_generales[".sqlWhereExpr"] = "";
$tdatabox_cat_nominas_01_generales[".sqlTail"] = "";

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
$tdatabox_cat_nominas_01_generales[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_nominas_01_generales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_nominas_01_generales[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_nominas_01_generales[".highlightSearchResults"] = true;

$tableKeysbox_cat_nominas_01_generales = array();
$tableKeysbox_cat_nominas_01_generales[] = "cat_nominas_01_generales_id";
$tdatabox_cat_nominas_01_generales[".Keys"] = $tableKeysbox_cat_nominas_01_generales;


$tdatabox_cat_nominas_01_generales[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","vigente");
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


	$tdatabox_cat_nominas_01_generales["vigente"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "vigente";
//	descripcion_nomina
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_nomina";
	$fdata["GoodName"] = "descripcion_nomina";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","descripcion_nomina");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_nomina";

		$fdata["sourceSingle"] = "descripcion_nomina";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_nomina";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatabox_cat_nominas_01_generales["descripcion_nomina"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "descripcion_nomina";
//	dia_de_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dia_de_inicio";
	$fdata["GoodName"] = "dia_de_inicio";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","dia_de_inicio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dia_de_inicio";

		$fdata["sourceSingle"] = "dia_de_inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dia_de_inicio";

	
	
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
	$edata["LookupTable"] = "cat_nominas_dias_semana_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cat_nominas_dias_semana_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_dias";

	

	
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


	$tdatabox_cat_nominas_01_generales["dia_de_inicio"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "dia_de_inicio";
//	fecha_de_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_de_inicio";
	$fdata["GoodName"] = "fecha_de_inicio";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","fecha_de_inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_inicio";

		$fdata["sourceSingle"] = "fecha_de_inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_inicio";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatabox_cat_nominas_01_generales["fecha_de_inicio"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "fecha_de_inicio";
//	fecha_de_termino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_de_termino";
	$fdata["GoodName"] = "fecha_de_termino";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","fecha_de_termino");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_termino";

		$fdata["sourceSingle"] = "fecha_de_termino";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_termino";

	
	
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


	$tdatabox_cat_nominas_01_generales["fecha_de_termino"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "fecha_de_termino";
//	cat_nominas_01_generales_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_nominas_01_generales_id";
	$fdata["GoodName"] = "cat_nominas_01_generales_id";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","cat_nominas_01_generales_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_01_generales_id";

		$fdata["sourceSingle"] = "cat_nominas_01_generales_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_01_generales_id";

	
	
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


	$tdatabox_cat_nominas_01_generales["cat_nominas_01_generales_id"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "cat_nominas_01_generales_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","capturista");
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


	$tdatabox_cat_nominas_01_generales["capturista"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","time_stamp");
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


	$tdatabox_cat_nominas_01_generales["time_stamp"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "time_stamp";
//	cat_nominas_01_generales_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_nominas_01_generales_uuid";
	$fdata["GoodName"] = "cat_nominas_01_generales_uuid";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","cat_nominas_01_generales_uuid");
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


	$tdatabox_cat_nominas_01_generales["cat_nominas_01_generales_uuid"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "cat_nominas_01_generales_uuid";
//	cat_nominas_periodicidad_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_nominas_periodicidad_mu_id";
	$fdata["GoodName"] = "cat_nominas_periodicidad_mu_id";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","cat_nominas_periodicidad_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_periodicidad_mu_id";

		$fdata["sourceSingle"] = "cat_nominas_periodicidad_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_periodicidad_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_nominas_periodicidad_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cat_nominas_periodicidad_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_periodicidad";

	

	
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


	$tdatabox_cat_nominas_01_generales["cat_nominas_periodicidad_mu_id"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "cat_nominas_periodicidad_mu_id";
//	horas_semana_laboral
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "horas_semana_laboral";
	$fdata["GoodName"] = "horas_semana_laboral";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","horas_semana_laboral");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "horas_semana_laboral";

		$fdata["sourceSingle"] = "horas_semana_laboral";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "horas_semana_laboral";

	
	
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


	$tdatabox_cat_nominas_01_generales["horas_semana_laboral"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "horas_semana_laboral";
//	cat_nominas_uuid_semana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cat_nominas_uuid_semana";
	$fdata["GoodName"] = "cat_nominas_uuid_semana";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","cat_nominas_uuid_semana");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_nominas_uuid_semana";

		$fdata["sourceSingle"] = "cat_nominas_uuid_semana";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_uuid_semana";

	
	
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
	$edata["LookupTable"] = "box_cat_nominas_uuid_semana";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "llave_ano_semana_nominas_uuid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "llave_ano_semana_nominas_uuid";

	

	
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


	$tdatabox_cat_nominas_01_generales["cat_nominas_uuid_semana"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "cat_nominas_uuid_semana";
//	cat_usuarios_licencias_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cat_usuarios_licencias_id1";
	$fdata["GoodName"] = "cat_usuarios_licencias_id1";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","cat_usuarios_licencias_id1");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

	
	
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


	$tdatabox_cat_nominas_01_generales["cat_usuarios_licencias_id1"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "cat_usuarios_licencias_id1";
//	llave_ano_semana_nominas_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "llave_ano_semana_nominas_uuid";
	$fdata["GoodName"] = "llave_ano_semana_nominas_uuid";
	$fdata["ownerTable"] = "cat_nominas_01_generales";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_01_generales","llave_ano_semana_nominas_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_ano_semana_nominas_uuid";

		$fdata["sourceSingle"] = "llave_ano_semana_nominas_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_ano_semana_nominas_uuid";

	
	
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
	$edata["LookupTable"] = "box_cat_nominas_uuid_semana";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "llave_ano_semana_nominas_uuid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ano_semana";

	

	
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


	$tdatabox_cat_nominas_01_generales["llave_ano_semana_nominas_uuid"] = $fdata;
		$tdatabox_cat_nominas_01_generales[".searchableFields"][] = "llave_ano_semana_nominas_uuid";


$tables_data["box_cat_nominas_01_generales"]=&$tdatabox_cat_nominas_01_generales;
$field_labels["box_cat_nominas_01_generales"] = &$fieldLabelsbox_cat_nominas_01_generales;
$fieldToolTips["box_cat_nominas_01_generales"] = &$fieldToolTipsbox_cat_nominas_01_generales;
$placeHolders["box_cat_nominas_01_generales"] = &$placeHoldersbox_cat_nominas_01_generales;
$page_titles["box_cat_nominas_01_generales"] = &$pageTitlesbox_cat_nominas_01_generales;


changeTextControlsToDate( "box_cat_nominas_01_generales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_nominas_01_generales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_nominas_01_generales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_nominas_01_generales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigente,  descripcion_nomina,  dia_de_inicio,  fecha_de_inicio,  fecha_de_termino,  cat_nominas_01_generales_id,  capturista,  time_stamp,  cat_nominas_01_generales_uuid,  cat_nominas_periodicidad_mu_id,  horas_semana_laboral,  cat_nominas_uuid_semana,  cat_usuarios_licencias_id AS cat_usuarios_licencias_id1,  llave_ano_semana_nominas_uuid";
$proto0["m_strFrom"] = "FROM cat_nominas_01_generales";
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
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto6["m_sql"] = "vigente";
$proto6["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_nomina",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto8["m_sql"] = "descripcion_nomina";
$proto8["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_de_inicio",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto10["m_sql"] = "dia_de_inicio";
$proto10["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_inicio",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto12["m_sql"] = "fecha_de_inicio";
$proto12["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_termino",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto14["m_sql"] = "fecha_de_termino";
$proto14["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_01_generales_id",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto16["m_sql"] = "cat_nominas_01_generales_id";
$proto16["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto18["m_sql"] = "capturista";
$proto18["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto20["m_sql"] = "time_stamp";
$proto20["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_01_generales_uuid",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto22["m_sql"] = "cat_nominas_01_generales_uuid";
$proto22["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_periodicidad_mu_id",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto24["m_sql"] = "cat_nominas_periodicidad_mu_id";
$proto24["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "horas_semana_laboral",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto26["m_sql"] = "horas_semana_laboral";
$proto26["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_uuid_semana",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto28["m_sql"] = "cat_nominas_uuid_semana";
$proto28["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto30["m_sql"] = "cat_usuarios_licencias_id";
$proto30["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "cat_usuarios_licencias_id1";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_ano_semana_nominas_uuid",
	"m_strTable" => "cat_nominas_01_generales",
	"m_srcTableName" => "box_cat_nominas_01_generales"
));

$proto32["m_sql"] = "llave_ano_semana_nominas_uuid";
$proto32["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "cat_nominas_01_generales";
$proto35["m_srcTableName"] = "box_cat_nominas_01_generales";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "vigente";
$proto35["m_columns"][] = "descripcion_nomina";
$proto35["m_columns"][] = "dia_de_inicio";
$proto35["m_columns"][] = "fecha_de_inicio";
$proto35["m_columns"][] = "fecha_de_termino";
$proto35["m_columns"][] = "cat_nominas_01_generales_id";
$proto35["m_columns"][] = "capturista";
$proto35["m_columns"][] = "time_stamp";
$proto35["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto35["m_columns"][] = "cat_nominas_periodicidad_mu_id";
$proto35["m_columns"][] = "horas_semana_laboral";
$proto35["m_columns"][] = "cat_nominas_uuid_semana";
$proto35["m_columns"][] = "cat_usuarios_licencias_id";
$proto35["m_columns"][] = "llave_ano_semana_nominas_uuid";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "cat_nominas_01_generales";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "box_cat_nominas_01_generales";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_nominas_01_generales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_nominas_01_generales = createSqlQuery_box_cat_nominas_01_generales();


	
		;

														

$tdatabox_cat_nominas_01_generales[".sqlquery"] = $queryData_box_cat_nominas_01_generales;



include_once(getabspath("include/box_cat_nominas_01_generales_events.php"));
$tdatabox_cat_nominas_01_generales[".hasEvents"] = true;

?>