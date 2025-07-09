<?php
$tdatatr_tags_maestro = array();
$tdatatr_tags_maestro[".searchableFields"] = array();
$tdatatr_tags_maestro[".ShortName"] = "tr_tags_maestro";
$tdatatr_tags_maestro[".OwnerID"] = "";
$tdatatr_tags_maestro[".OriginalTable"] = "tr_tags";


$tdatatr_tags_maestro[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatatr_tags_maestro[".originalPagesByType"] = $tdatatr_tags_maestro[".pagesByType"];
$tdatatr_tags_maestro[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatatr_tags_maestro[".originalPages"] = $tdatatr_tags_maestro[".pages"];
$tdatatr_tags_maestro[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatatr_tags_maestro[".originalDefaultPages"] = $tdatatr_tags_maestro[".defaultPages"];

//	field labels
$fieldLabelstr_tags_maestro = array();
$fieldToolTipstr_tags_maestro = array();
$pageTitlestr_tags_maestro = array();
$placeHolderstr_tags_maestro = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_tags_maestro["Spanish"] = array();
	$fieldToolTipstr_tags_maestro["Spanish"] = array();
	$placeHolderstr_tags_maestro["Spanish"] = array();
	$pageTitlestr_tags_maestro["Spanish"] = array();
	$fieldLabelstr_tags_maestro["Spanish"]["tr_tags_id"] = "Tr Tags Id";
	$fieldToolTipstr_tags_maestro["Spanish"]["tr_tags_id"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["tr_tags_id"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["tr_uuid"] = "Tr Uuid";
	$fieldToolTipstr_tags_maestro["Spanish"]["tr_uuid"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["tr_uuid"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_tags_maestro["Spanish"]["vigente"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["vigente"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_tags_maestro["Spanish"]["capturista"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["capturista"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_tags_maestro["Spanish"]["time_stamp"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["time_stamp"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipstr_tags_maestro["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["cat_trabajadores_altas_id"] = "ID";
	$fieldToolTipstr_tags_maestro["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["tag_alias"] = "Tag Alias";
	$fieldToolTipstr_tags_maestro["Spanish"]["tag_alias"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["tag_alias"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["numero_de_bote"] = "Numero De Bote";
	$fieldToolTipstr_tags_maestro["Spanish"]["numero_de_bote"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["numero_de_bote"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipstr_tags_maestro["Spanish"]["nombre_completo"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["nombre_completo"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["COUNT_tag_numero_de_serie_"] = "Tags asociados";
	$fieldToolTipstr_tags_maestro["Spanish"]["COUNT_tag_numero_de_serie_"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["COUNT_tag_numero_de_serie_"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["descripcion_empresas"] = "Descripcion Empresas";
	$fieldToolTipstr_tags_maestro["Spanish"]["descripcion_empresas"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["descripcion_empresas"] = "";
	$fieldLabelstr_tags_maestro["Spanish"]["cat_trabajadores_altas_id_empresa"] = "Id Empresa";
	$fieldToolTipstr_tags_maestro["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderstr_tags_maestro["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	if (count($fieldToolTipstr_tags_maestro["Spanish"]))
		$tdatatr_tags_maestro[".isUseToolTips"] = true;
}





$tdatatr_tags_maestro[".shortTableName"] = "tr_tags_maestro";
$tdatatr_tags_maestro[".nSecOptions"] = 0;

$tdatatr_tags_maestro[".mainTableOwnerID"] = "";
$tdatatr_tags_maestro[".entityType"] = 1;
$tdatatr_tags_maestro[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_tags_maestro[".strOriginalTableName"] = "tr_tags";

	



$tdatatr_tags_maestro[".showAddInPopup"] = false;

$tdatatr_tags_maestro[".showEditInPopup"] = false;

$tdatatr_tags_maestro[".showViewInPopup"] = false;

$tdatatr_tags_maestro[".listAjax"] = false;
//	temporary
//$tdatatr_tags_maestro[".listAjax"] = false;

	$tdatatr_tags_maestro[".audit"] = false;

	$tdatatr_tags_maestro[".locking"] = false;


$pages = $tdatatr_tags_maestro[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_tags_maestro[".edit"] = true;
	$tdatatr_tags_maestro[".afterEditAction"] = 1;
	$tdatatr_tags_maestro[".closePopupAfterEdit"] = 1;
	$tdatatr_tags_maestro[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_tags_maestro[".add"] = true;
$tdatatr_tags_maestro[".afterAddAction"] = 1;
$tdatatr_tags_maestro[".closePopupAfterAdd"] = 1;
$tdatatr_tags_maestro[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_tags_maestro[".list"] = true;
}



$tdatatr_tags_maestro[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_tags_maestro[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_tags_maestro[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_tags_maestro[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_tags_maestro[".printFriendly"] = true;
}



$tdatatr_tags_maestro[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_tags_maestro[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_tags_maestro[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_tags_maestro[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_tags_maestro[".ajaxCodeSnippetAdded"] = false;

$tdatatr_tags_maestro[".buttonsAdded"] = false;

$tdatatr_tags_maestro[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_tags_maestro[".isUseTimeForSearch"] = false;


$tdatatr_tags_maestro[".badgeColor"] = "DB7093";


$tdatatr_tags_maestro[".allSearchFields"] = array();
$tdatatr_tags_maestro[".filterFields"] = array();
$tdatatr_tags_maestro[".requiredSearchFields"] = array();

$tdatatr_tags_maestro[".googleLikeFields"] = array();
$tdatatr_tags_maestro[".googleLikeFields"][] = "tr_tags_id";
$tdatatr_tags_maestro[".googleLikeFields"][] = "tr_uuid";
$tdatatr_tags_maestro[".googleLikeFields"][] = "vigente";
$tdatatr_tags_maestro[".googleLikeFields"][] = "capturista";
$tdatatr_tags_maestro[".googleLikeFields"][] = "time_stamp";
$tdatatr_tags_maestro[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatatr_tags_maestro[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatatr_tags_maestro[".googleLikeFields"][] = "COUNT(tag_numero_de_serie)";
$tdatatr_tags_maestro[".googleLikeFields"][] = "tag_alias";
$tdatatr_tags_maestro[".googleLikeFields"][] = "numero_de_bote";
$tdatatr_tags_maestro[".googleLikeFields"][] = "nombre_completo";
$tdatatr_tags_maestro[".googleLikeFields"][] = "descripcion_empresas";
$tdatatr_tags_maestro[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";



$tdatatr_tags_maestro[".tableType"] = "list";

$tdatatr_tags_maestro[".printerPageOrientation"] = 0;
$tdatatr_tags_maestro[".nPrinterPageScale"] = 100;

$tdatatr_tags_maestro[".nPrinterSplitRecords"] = 40;

$tdatatr_tags_maestro[".geocodingEnabled"] = false;





$tdatatr_tags_maestro[".isResizeColumns"] = true;





$tdatatr_tags_maestro[".pageSize"] = 20;

$tdatatr_tags_maestro[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_tags_maestro[".strOrderBy"] = $tstrOrderBy;

$tdatatr_tags_maestro[".orderindexes"] = array();


$tdatatr_tags_maestro[".sqlHead"] = "SELECT tr_tags.tr_tags_id,  tr_tags.tr_uuid,  tr_tags.vigente,  tr_tags.capturista,  tr_tags.time_stamp,  tr_tags.cat_usuarios_licencias_id,  tr_tags.cat_trabajadores_altas_id,  COUNT(tr_tags.tag_numero_de_serie) AS `COUNT(tag_numero_de_serie)`,  tr_tags.tag_alias,  tr_tags.numero_de_bote,  cat_trabajadores_altas.nombre_completo,  cat_holding_02_empresas.descripcion_empresas,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$tdatatr_tags_maestro[".sqlFrom"] = "FROM tr_tags  LEFT OUTER JOIN cat_trabajadores_altas ON tr_tags.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id  LEFT OUTER JOIN cat_holding_02_empresas ON cat_trabajadores_altas.cat_holding_02_empresas = cat_holding_02_empresas.cat_holding_02_empresas_id";
$tdatatr_tags_maestro[".sqlWhereExpr"] = "";
$tdatatr_tags_maestro[".sqlTail"] = "";

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
$tdatatr_tags_maestro[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_tags_maestro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_tags_maestro[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_tags_maestro[".highlightSearchResults"] = true;

$tableKeystr_tags_maestro = array();
$tableKeystr_tags_maestro[] = "tr_tags_id";
$tdatatr_tags_maestro[".Keys"] = $tableKeystr_tags_maestro;


$tdatatr_tags_maestro[".hideMobileList"] = array();




//	tr_tags_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_tags_id";
	$fdata["GoodName"] = "tr_tags_id";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","tr_tags_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_tags_id";

		$fdata["sourceSingle"] = "tr_tags_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.tr_tags_id";

	
	
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


	$tdatatr_tags_maestro["tr_tags_id"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "tr_tags_id";
//	tr_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tr_uuid";
	$fdata["GoodName"] = "tr_uuid";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","tr_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tr_uuid";

		$fdata["sourceSingle"] = "tr_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.tr_uuid";

	
	
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


	$tdatatr_tags_maestro["tr_uuid"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "tr_uuid";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.vigente";

	
	
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


	$tdatatr_tags_maestro["vigente"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.capturista";

	
	
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


	$tdatatr_tags_maestro["capturista"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.time_stamp";

	
	
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


	$tdatatr_tags_maestro["time_stamp"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

		$fdata["sourceSingle"] = "cat_usuarios_licencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.cat_usuarios_licencias_id";

	
	
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


	$tdatatr_tags_maestro["cat_usuarios_licencias_id"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.cat_trabajadores_altas_id";

	
	
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


	$tdatatr_tags_maestro["cat_trabajadores_altas_id"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "cat_trabajadores_altas_id";
//	COUNT(tag_numero_de_serie)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "COUNT(tag_numero_de_serie)";
	$fdata["GoodName"] = "COUNT_tag_numero_de_serie_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","COUNT_tag_numero_de_serie_");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "COUNT(tag_numero_de_serie)";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(tr_tags.tag_numero_de_serie)";

	
	
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


	$tdatatr_tags_maestro["COUNT(tag_numero_de_serie)"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "COUNT(tag_numero_de_serie)";
//	tag_alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tag_alias";
	$fdata["GoodName"] = "tag_alias";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","tag_alias");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tag_alias";

		$fdata["sourceSingle"] = "tag_alias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.tag_alias";

	
	
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


	$tdatatr_tags_maestro["tag_alias"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "tag_alias";
//	numero_de_bote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "numero_de_bote";
	$fdata["GoodName"] = "numero_de_bote";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","numero_de_bote");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "numero_de_bote";

		$fdata["sourceSingle"] = "numero_de_bote";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.numero_de_bote";

	
	
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


	$tdatatr_tags_maestro["numero_de_bote"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "numero_de_bote";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","nombre_completo");
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


	$tdatatr_tags_maestro["nombre_completo"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "nombre_completo";
//	descripcion_empresas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "descripcion_empresas";
	$fdata["GoodName"] = "descripcion_empresas";
	$fdata["ownerTable"] = "cat_holding_02_empresas";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","descripcion_empresas");
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


	$tdatatr_tags_maestro["descripcion_empresas"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "descripcion_empresas";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_tags_maestro","cat_trabajadores_altas_id_empresa");
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


	$tdatatr_tags_maestro["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatatr_tags_maestro[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";


$tables_data["tr_tags_maestro"]=&$tdatatr_tags_maestro;
$field_labels["tr_tags_maestro"] = &$fieldLabelstr_tags_maestro;
$fieldToolTips["tr_tags_maestro"] = &$fieldToolTipstr_tags_maestro;
$placeHolders["tr_tags_maestro"] = &$placeHolderstr_tags_maestro;
$page_titles["tr_tags_maestro"] = &$pageTitlestr_tags_maestro;


changeTextControlsToDate( "tr_tags_maestro" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_tags_maestro"] = array();
//	tr_tags
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tr_tags";
		$detailsParam["dOriginalTable"] = "tr_tags";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tr_tags";
	$detailsParam["dCaptionTable"] = GetTableCaption("tr_tags");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tr_tags_maestro"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tr_tags_maestro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tr_tags_maestro"][$dIndex]["masterKeys"][]="cat_trabajadores_altas_id";

				$detailsTablesData["tr_tags_maestro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tr_tags_maestro"][$dIndex]["detailKeys"][]="cat_trabajadores_altas_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_tags_maestro"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_tags_maestro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_tags.tr_tags_id,  tr_tags.tr_uuid,  tr_tags.vigente,  tr_tags.capturista,  tr_tags.time_stamp,  tr_tags.cat_usuarios_licencias_id,  tr_tags.cat_trabajadores_altas_id,  COUNT(tr_tags.tag_numero_de_serie) AS `COUNT(tag_numero_de_serie)`,  tr_tags.tag_alias,  tr_tags.numero_de_bote,  cat_trabajadores_altas.nombre_completo,  cat_holding_02_empresas.descripcion_empresas,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto0["m_strFrom"] = "FROM tr_tags  LEFT OUTER JOIN cat_trabajadores_altas ON tr_tags.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id  LEFT OUTER JOIN cat_holding_02_empresas ON cat_trabajadores_altas.cat_holding_02_empresas = cat_holding_02_empresas.cat_holding_02_empresas_id";
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
	"m_strName" => "tr_tags_id",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto6["m_sql"] = "tr_tags.tr_tags_id";
$proto6["m_srcTableName"] = "tr_tags_maestro";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_uuid",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto8["m_sql"] = "tr_tags.tr_uuid";
$proto8["m_srcTableName"] = "tr_tags_maestro";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto10["m_sql"] = "tr_tags.vigente";
$proto10["m_srcTableName"] = "tr_tags_maestro";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto12["m_sql"] = "tr_tags.capturista";
$proto12["m_srcTableName"] = "tr_tags_maestro";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto14["m_sql"] = "tr_tags.time_stamp";
$proto14["m_srcTableName"] = "tr_tags_maestro";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto16["m_sql"] = "tr_tags.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "tr_tags_maestro";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto18["m_sql"] = "tr_tags.cat_trabajadores_altas_id";
$proto18["m_srcTableName"] = "tr_tags_maestro";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_COUNT";
$proto21["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "tag_numero_de_serie",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "COUNT(tr_tags.tag_numero_de_serie)";
$proto20["m_srcTableName"] = "tr_tags_maestro";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "COUNT(tag_numero_de_serie)";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_alias",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto23["m_sql"] = "tr_tags.tag_alias";
$proto23["m_srcTableName"] = "tr_tags_maestro";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_de_bote",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto25["m_sql"] = "tr_tags.numero_de_bote";
$proto25["m_srcTableName"] = "tr_tags_maestro";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto27["m_sql"] = "cat_trabajadores_altas.nombre_completo";
$proto27["m_srcTableName"] = "tr_tags_maestro";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_empresas",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto29["m_sql"] = "cat_holding_02_empresas.descripcion_empresas";
$proto29["m_srcTableName"] = "tr_tags_maestro";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto31["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto31["m_srcTableName"] = "tr_tags_maestro";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "tr_tags";
$proto34["m_srcTableName"] = "tr_tags_maestro";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "capturista";
$proto34["m_columns"][] = "cat_actividades_especificas_id";
$proto34["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto34["m_columns"][] = "cat_holding_03_empresas_up_group_predios";
$proto34["m_columns"][] = "cat_trabajadores_altas_id";
$proto34["m_columns"][] = "cat_usuarios_licencias_id";
$proto34["m_columns"][] = "numero_de_bote";
$proto34["m_columns"][] = "tag_alias";
$proto34["m_columns"][] = "tag_numero_de_serie";
$proto34["m_columns"][] = "time_stamp";
$proto34["m_columns"][] = "tr_tags_id";
$proto34["m_columns"][] = "tr_tags_numero_asignado";
$proto34["m_columns"][] = "tr_uuid";
$proto34["m_columns"][] = "vigente";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "tr_tags";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "tr_tags_maestro";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_LEFTJOIN";
			$proto38=array();
$proto38["m_strName"] = "cat_trabajadores_altas";
$proto38["m_srcTableName"] = "tr_tags_maestro";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "apellido_materno";
$proto38["m_columns"][] = "apellido_paterno";
$proto38["m_columns"][] = "banco";
$proto38["m_columns"][] = "calle";
$proto38["m_columns"][] = "capturista";
$proto38["m_columns"][] = "cat_holding_02_empresas";
$proto38["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto38["m_columns"][] = "cat_trabajadores_altas_id";
$proto38["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto38["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$proto38["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto38["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto38["m_columns"][] = "cat_trabajadores_puestos_id";
$proto38["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto38["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto38["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto38["m_columns"][] = "celular_mensajes";
$proto38["m_columns"][] = "codigo_postal";
$proto38["m_columns"][] = "colonia";
$proto38["m_columns"][] = "contacto_emergencia";
$proto38["m_columns"][] = "cuenta_bancaria";
$proto38["m_columns"][] = "curp";
$proto38["m_columns"][] = "estado";
$proto38["m_columns"][] = "estado_nacimiento";
$proto38["m_columns"][] = "estatus";
$proto38["m_columns"][] = "face_id";
$proto38["m_columns"][] = "fecha_de_captura";
$proto38["m_columns"][] = "fecha_de_ingreso";
$proto38["m_columns"][] = "fecha_de_nacimiento";
$proto38["m_columns"][] = "fecha_de_registro";
$proto38["m_columns"][] = "link_foto";
$proto38["m_columns"][] = "municipio";
$proto38["m_columns"][] = "municipio_nacimiento";
$proto38["m_columns"][] = "nacionalidad";
$proto38["m_columns"][] = "nombre_completo";
$proto38["m_columns"][] = "num_seguridad_social";
$proto38["m_columns"][] = "numero_domicilio";
$proto38["m_columns"][] = "observaciones";
$proto38["m_columns"][] = "permiso_msm";
$proto38["m_columns"][] = "primer_nombre";
$proto38["m_columns"][] = "rfc";
$proto38["m_columns"][] = "segundo_nombre";
$proto38["m_columns"][] = "telefono_emergencia";
$proto38["m_columns"][] = "time_stamp";
$proto38["m_columns"][] = "tr_tags_numero_asignado";
$proto38["m_columns"][] = "vigente";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_altas ON tr_tags.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "tr_tags_maestro";
$proto39=array();
$proto39["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id = tr_tags.cat_trabajadores_altas_id";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= tr_tags.cat_trabajadores_altas_id";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
												$proto41=array();
$proto41["m_link"] = "SQLL_LEFTJOIN";
			$proto42=array();
$proto42["m_strName"] = "cat_holding_02_empresas";
$proto42["m_srcTableName"] = "tr_tags_maestro";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "capturista";
$proto42["m_columns"][] = "cat_holding_01_id";
$proto42["m_columns"][] = "cat_holding_02_empresas_id";
$proto42["m_columns"][] = "descripcion_empresas";
$proto42["m_columns"][] = "time_stamp";
$proto42["m_columns"][] = "vigente";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "LEFT OUTER JOIN cat_holding_02_empresas ON cat_trabajadores_altas.cat_holding_02_empresas = cat_holding_02_empresas.cat_holding_02_empresas_id";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "tr_tags_maestro";
$proto43=array();
$proto43["m_sql"] = "cat_holding_02_empresas.cat_holding_02_empresas_id = cat_trabajadores_altas.cat_holding_02_empresas";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_02_empresas_id",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= cat_trabajadores_altas.cat_holding_02_empresas";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_maestro"
));

$proto45["m_column"]=$obj;
$obj = new SQLGroupByItem($proto45);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_tags_maestro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_tags_maestro = createSqlQuery_tr_tags_maestro();


	
		;

													

$tdatatr_tags_maestro[".sqlquery"] = $queryData_tr_tags_maestro;



include_once(getabspath("include/tr_tags_maestro_events.php"));
$tdatatr_tags_maestro[".hasEvents"] = true;

?>