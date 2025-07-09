<?php
$tdatacat_trabajadores_documentos = array();
$tdatacat_trabajadores_documentos[".searchableFields"] = array();
$tdatacat_trabajadores_documentos[".ShortName"] = "cat_trabajadores_documentos";
$tdatacat_trabajadores_documentos[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_documentos[".OriginalTable"] = "cat_trabajadores_documentos";


$tdatacat_trabajadores_documentos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_documentos[".originalPagesByType"] = $tdatacat_trabajadores_documentos[".pagesByType"];
$tdatacat_trabajadores_documentos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print1\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_documentos[".originalPages"] = $tdatacat_trabajadores_documentos[".pages"];
$tdatacat_trabajadores_documentos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"print\":\"print1\",\"search\":\"search\"}" );
$tdatacat_trabajadores_documentos[".originalDefaultPages"] = $tdatacat_trabajadores_documentos[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_documentos = array();
$fieldToolTipscat_trabajadores_documentos = array();
$pageTitlescat_trabajadores_documentos = array();
$placeHolderscat_trabajadores_documentos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_documentos["Spanish"] = array();
	$fieldToolTipscat_trabajadores_documentos["Spanish"] = array();
	$placeHolderscat_trabajadores_documentos["Spanish"] = array();
	$pageTitlescat_trabajadores_documentos["Spanish"] = array();
	$fieldLabelscat_trabajadores_documentos["Spanish"]["cat_trabajadores_documentos_id"] = "Cat Trabajadores Documentos Id";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["cat_trabajadores_documentos_id"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["cat_trabajadores_documentos_id"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["cat_trabajadores_altas_id"] = "Cat Trabajadores Altas Id";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["time_stamp"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["vigente"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["cat_observaciones_id"] = "Cat Observaciones Id";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["cat_observaciones_id"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["cat_observaciones_id"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["cat_estatus_id"] = "Cat Estatus Id";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["cat_estatus_id"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["cat_estatus_id"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["fecha_de_registro"] = "Fecha De Registro";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["fecha_de_registro"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["fecha_de_registro"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["referencia_documento"] = "Referencia";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["referencia_documento"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["referencia_documento"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["cat_documentos_id"] = "Documentos";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["cat_documentos_id"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["cat_documentos_id"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["link_documentos"] = "Link Documentos";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["link_documentos"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["link_documentos"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["capturista"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["capturista"] = "";
	$fieldLabelscat_trabajadores_documentos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_trabajadores_documentos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_trabajadores_documentos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$pageTitlescat_trabajadores_documentos["Spanish"]["list"] = "Documentos";
	if (count($fieldToolTipscat_trabajadores_documentos["Spanish"]))
		$tdatacat_trabajadores_documentos[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_documentos[".shortTableName"] = "cat_trabajadores_documentos";
$tdatacat_trabajadores_documentos[".nSecOptions"] = 0;

$tdatacat_trabajadores_documentos[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_documentos[".entityType"] = 0;
$tdatacat_trabajadores_documentos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_documentos[".strOriginalTableName"] = "cat_trabajadores_documentos";

	



$tdatacat_trabajadores_documentos[".showAddInPopup"] = false;

$tdatacat_trabajadores_documentos[".showEditInPopup"] = false;

$tdatacat_trabajadores_documentos[".showViewInPopup"] = false;

$tdatacat_trabajadores_documentos[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_documentos[".listAjax"] = false;

	$tdatacat_trabajadores_documentos[".audit"] = true;

	$tdatacat_trabajadores_documentos[".locking"] = true;


$pages = $tdatacat_trabajadores_documentos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_documentos[".edit"] = true;
	$tdatacat_trabajadores_documentos[".afterEditAction"] = 1;
	$tdatacat_trabajadores_documentos[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_documentos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_documentos[".add"] = true;
$tdatacat_trabajadores_documentos[".afterAddAction"] = 1;
$tdatacat_trabajadores_documentos[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_documentos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_documentos[".list"] = true;
}



$tdatacat_trabajadores_documentos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_documentos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_documentos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_documentos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_documentos[".printFriendly"] = true;
}



$tdatacat_trabajadores_documentos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_documentos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_documentos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_documentos[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																								

$tdatacat_trabajadores_documentos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_documentos[".buttonsAdded"] = false;

$tdatacat_trabajadores_documentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_documentos[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_documentos[".badgeColor"] = "e07878";


$tdatacat_trabajadores_documentos[".allSearchFields"] = array();
$tdatacat_trabajadores_documentos[".filterFields"] = array();
$tdatacat_trabajadores_documentos[".requiredSearchFields"] = array();

$tdatacat_trabajadores_documentos[".googleLikeFields"] = array();
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "cat_trabajadores_documentos_id";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "time_stamp";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "capturista";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "vigente";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "cat_observaciones_id";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "cat_estatus_id";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "fecha_de_registro";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "referencia_documento";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "cat_documentos_id";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "link_documentos";
$tdatacat_trabajadores_documentos[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_trabajadores_documentos[".tableType"] = "list";

$tdatacat_trabajadores_documentos[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_documentos[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_documentos[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_documentos[".geocodingEnabled"] = false;





$tdatacat_trabajadores_documentos[".isResizeColumns"] = true;





$tdatacat_trabajadores_documentos[".pageSize"] = 20;

$tdatacat_trabajadores_documentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_documentos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_documentos[".orderindexes"] = array();


$tdatacat_trabajadores_documentos[".sqlHead"] = "SELECT cat_trabajadores_documentos.cat_trabajadores_documentos_id,  cat_trabajadores_documentos.cat_trabajadores_altas_id,  cat_trabajadores_documentos.time_stamp,  cat_trabajadores_documentos.capturista,  cat_trabajadores_documentos.vigente,  cat_trabajadores_documentos.cat_observaciones_id,  cat_trabajadores_documentos.cat_estatus_id,  cat_trabajadores_documentos.fecha_de_registro,  cat_trabajadores_documentos.referencia_documento,  cat_trabajadores_documentos.cat_documentos_id,  cat_trabajadores_documentos_link.link_documentos,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_trabajadores_documentos[".sqlFrom"] = "FROM cat_trabajadores_documentos  LEFT OUTER JOIN cat_trabajadores_documentos_link ON cat_trabajadores_documentos.cat_trabajadores_documentos_id = cat_trabajadores_documentos_link.time_stamp  LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_documentos.capturista = cat_usuarios.usuario";
$tdatacat_trabajadores_documentos[".sqlWhereExpr"] = "";
$tdatacat_trabajadores_documentos[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_trabajadores_documentos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_documentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_documentos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_documentos[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_documentos = array();
$tableKeyscat_trabajadores_documentos[] = "cat_trabajadores_documentos_id";
$tdatacat_trabajadores_documentos[".Keys"] = $tableKeyscat_trabajadores_documentos;


$tdatacat_trabajadores_documentos[".hideMobileList"] = array();




//	cat_trabajadores_documentos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_documentos_id";
	$fdata["GoodName"] = "cat_trabajadores_documentos_id";
	$fdata["ownerTable"] = "cat_trabajadores_documentos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","cat_trabajadores_documentos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_documentos_id";

		$fdata["sourceSingle"] = "cat_trabajadores_documentos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos.cat_trabajadores_documentos_id";

	
	
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


	$tdatacat_trabajadores_documentos["cat_trabajadores_documentos_id"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "cat_trabajadores_documentos_id";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_documentos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos.cat_trabajadores_altas_id";

	
	
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


	$tdatacat_trabajadores_documentos["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "cat_trabajadores_altas_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_trabajadores_documentos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos.time_stamp";

	
	
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


	$tdatacat_trabajadores_documentos["time_stamp"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "time_stamp";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_trabajadores_documentos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos.capturista";

	
	
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


	$tdatacat_trabajadores_documentos["capturista"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "capturista";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_documentos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos.vigente";

	
	
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


	$tdatacat_trabajadores_documentos["vigente"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "vigente";
//	cat_observaciones_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_observaciones_id";
	$fdata["GoodName"] = "cat_observaciones_id";
	$fdata["ownerTable"] = "cat_trabajadores_documentos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","cat_observaciones_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_observaciones_id";

		$fdata["sourceSingle"] = "cat_observaciones_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos.cat_observaciones_id";

	
	
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


	$tdatacat_trabajadores_documentos["cat_observaciones_id"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "cat_observaciones_id";
//	cat_estatus_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_estatus_id";
	$fdata["GoodName"] = "cat_estatus_id";
	$fdata["ownerTable"] = "cat_trabajadores_documentos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","cat_estatus_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_estatus_id";

		$fdata["sourceSingle"] = "cat_estatus_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos.cat_estatus_id";

	
	
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


	$tdatacat_trabajadores_documentos["cat_estatus_id"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "cat_estatus_id";
//	fecha_de_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fecha_de_registro";
	$fdata["GoodName"] = "fecha_de_registro";
	$fdata["ownerTable"] = "cat_trabajadores_documentos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","fecha_de_registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_registro";

		$fdata["sourceSingle"] = "fecha_de_registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos.fecha_de_registro";

	
	
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


	$tdatacat_trabajadores_documentos["fecha_de_registro"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "fecha_de_registro";
//	referencia_documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "referencia_documento";
	$fdata["GoodName"] = "referencia_documento";
	$fdata["ownerTable"] = "cat_trabajadores_documentos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","referencia_documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "referencia_documento";

		$fdata["sourceSingle"] = "referencia_documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos.referencia_documento";

	
	
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


	$tdatacat_trabajadores_documentos["referencia_documento"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "referencia_documento";
//	cat_documentos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_documentos_id";
	$fdata["GoodName"] = "cat_documentos_id";
	$fdata["ownerTable"] = "cat_trabajadores_documentos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","cat_documentos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_documentos_id";

		$fdata["sourceSingle"] = "cat_documentos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos.cat_documentos_id";

	
	
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


	$tdatacat_trabajadores_documentos["cat_documentos_id"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "cat_documentos_id";
//	link_documentos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "link_documentos";
	$fdata["GoodName"] = "link_documentos";
	$fdata["ownerTable"] = "cat_trabajadores_documentos_link";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","link_documentos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "link_documentos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_documentos_link.link_documentos";

	
	
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


	$tdatacat_trabajadores_documentos["link_documentos"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "link_documentos";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_documentos","cat_usuarios_licencias_id");
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


	$tdatacat_trabajadores_documentos["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_trabajadores_documentos[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_trabajadores_documentos"]=&$tdatacat_trabajadores_documentos;
$field_labels["cat_trabajadores_documentos"] = &$fieldLabelscat_trabajadores_documentos;
$fieldToolTips["cat_trabajadores_documentos"] = &$fieldToolTipscat_trabajadores_documentos;
$placeHolders["cat_trabajadores_documentos"] = &$placeHolderscat_trabajadores_documentos;
$page_titles["cat_trabajadores_documentos"] = &$pageTitlescat_trabajadores_documentos;


changeTextControlsToDate( "cat_trabajadores_documentos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_documentos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_documentos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cat_trabajadores_altas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cat_trabajadores_altas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cat_trabajadores_altas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cat_trabajadores_documentos"][0] = $masterParams;
				$masterTablesData["cat_trabajadores_documentos"][0]["masterKeys"] = array();
	$masterTablesData["cat_trabajadores_documentos"][0]["masterKeys"][]="cat_trabajadores_altas_id";
				$masterTablesData["cat_trabajadores_documentos"][0]["detailKeys"] = array();
	$masterTablesData["cat_trabajadores_documentos"][0]["detailKeys"][]="cat_trabajadores_altas_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_documentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_documentos.cat_trabajadores_documentos_id,  cat_trabajadores_documentos.cat_trabajadores_altas_id,  cat_trabajadores_documentos.time_stamp,  cat_trabajadores_documentos.capturista,  cat_trabajadores_documentos.vigente,  cat_trabajadores_documentos.cat_observaciones_id,  cat_trabajadores_documentos.cat_estatus_id,  cat_trabajadores_documentos.fecha_de_registro,  cat_trabajadores_documentos.referencia_documento,  cat_trabajadores_documentos.cat_documentos_id,  cat_trabajadores_documentos_link.link_documentos,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_trabajadores_documentos  LEFT OUTER JOIN cat_trabajadores_documentos_link ON cat_trabajadores_documentos.cat_trabajadores_documentos_id = cat_trabajadores_documentos_link.time_stamp  LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_documentos.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_trabajadores_documentos_id",
	"m_strTable" => "cat_trabajadores_documentos",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto6["m_sql"] = "cat_trabajadores_documentos.cat_trabajadores_documentos_id";
$proto6["m_srcTableName"] = "cat_trabajadores_documentos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_documentos",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto8["m_sql"] = "cat_trabajadores_documentos.cat_trabajadores_altas_id";
$proto8["m_srcTableName"] = "cat_trabajadores_documentos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_documentos",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto10["m_sql"] = "cat_trabajadores_documentos.time_stamp";
$proto10["m_srcTableName"] = "cat_trabajadores_documentos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_trabajadores_documentos",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto12["m_sql"] = "cat_trabajadores_documentos.capturista";
$proto12["m_srcTableName"] = "cat_trabajadores_documentos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_documentos",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto14["m_sql"] = "cat_trabajadores_documentos.vigente";
$proto14["m_srcTableName"] = "cat_trabajadores_documentos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_observaciones_id",
	"m_strTable" => "cat_trabajadores_documentos",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto16["m_sql"] = "cat_trabajadores_documentos.cat_observaciones_id";
$proto16["m_srcTableName"] = "cat_trabajadores_documentos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_estatus_id",
	"m_strTable" => "cat_trabajadores_documentos",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto18["m_sql"] = "cat_trabajadores_documentos.cat_estatus_id";
$proto18["m_srcTableName"] = "cat_trabajadores_documentos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_registro",
	"m_strTable" => "cat_trabajadores_documentos",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto20["m_sql"] = "cat_trabajadores_documentos.fecha_de_registro";
$proto20["m_srcTableName"] = "cat_trabajadores_documentos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "referencia_documento",
	"m_strTable" => "cat_trabajadores_documentos",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto22["m_sql"] = "cat_trabajadores_documentos.referencia_documento";
$proto22["m_srcTableName"] = "cat_trabajadores_documentos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_documentos_id",
	"m_strTable" => "cat_trabajadores_documentos",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto24["m_sql"] = "cat_trabajadores_documentos.cat_documentos_id";
$proto24["m_srcTableName"] = "cat_trabajadores_documentos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "link_documentos",
	"m_strTable" => "cat_trabajadores_documentos_link",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto26["m_sql"] = "cat_trabajadores_documentos_link.link_documentos";
$proto26["m_srcTableName"] = "cat_trabajadores_documentos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto28["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto28["m_srcTableName"] = "cat_trabajadores_documentos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "cat_trabajadores_documentos";
$proto31["m_srcTableName"] = "cat_trabajadores_documentos";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "cat_trabajadores_documentos_id";
$proto31["m_columns"][] = "cat_trabajadores_altas_id";
$proto31["m_columns"][] = "time_stamp";
$proto31["m_columns"][] = "capturista";
$proto31["m_columns"][] = "vigente";
$proto31["m_columns"][] = "cat_observaciones_id";
$proto31["m_columns"][] = "cat_estatus_id";
$proto31["m_columns"][] = "fecha_de_registro";
$proto31["m_columns"][] = "referencia_documento";
$proto31["m_columns"][] = "cat_documentos_id";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "cat_trabajadores_documentos";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "cat_trabajadores_documentos";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "cat_trabajadores_documentos_link";
$proto35["m_srcTableName"] = "cat_trabajadores_documentos";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "cat_documentos_link_id";
$proto35["m_columns"][] = "cat_trabajadores_documentos_id";
$proto35["m_columns"][] = "time_stamp";
$proto35["m_columns"][] = "link_documentos";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_documentos_link ON cat_trabajadores_documentos.cat_trabajadores_documentos_id = cat_trabajadores_documentos_link.time_stamp";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "cat_trabajadores_documentos";
$proto36=array();
$proto36["m_sql"] = "cat_trabajadores_documentos_link.time_stamp = cat_trabajadores_documentos.cat_trabajadores_documentos_id";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_documentos_link",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= cat_trabajadores_documentos.cat_trabajadores_documentos_id";
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
$proto39["m_strName"] = "cat_usuarios";
$proto39["m_srcTableName"] = "cat_trabajadores_documentos";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "cat_usuarios_id";
$proto39["m_columns"][] = "time_stamp";
$proto39["m_columns"][] = "vigente";
$proto39["m_columns"][] = "capturista";
$proto39["m_columns"][] = "usuario";
$proto39["m_columns"][] = "cat_usuarios_licencias_id";
$proto39["m_columns"][] = "pass";
$proto39["m_columns"][] = "nombre";
$proto39["m_columns"][] = "correo";
$proto39["m_columns"][] = "cat_trabajadores_altas_id";
$proto39["m_columns"][] = "res_autorizacion";
$proto39["m_columns"][] = "session";
$proto39["m_columns"][] = "tipo";
$proto39["m_columns"][] = "session_v2";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_documentos.capturista = cat_usuarios.usuario";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "cat_trabajadores_documentos";
$proto40=array();
$proto40["m_sql"] = "cat_usuarios.usuario = cat_trabajadores_documentos.capturista";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_trabajadores_documentos"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= cat_trabajadores_documentos.capturista";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_documentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_documentos = createSqlQuery_cat_trabajadores_documentos();


	
		;

												

$tdatacat_trabajadores_documentos[".sqlquery"] = $queryData_cat_trabajadores_documentos;



$tdatacat_trabajadores_documentos[".hasEvents"] = false;

?>