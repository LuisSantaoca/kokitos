<?php
$tdatacat_ventas_productos_unidades_de_medida = array();
$tdatacat_ventas_productos_unidades_de_medida[".searchableFields"] = array();
$tdatacat_ventas_productos_unidades_de_medida[".ShortName"] = "cat_ventas_productos_unidades_de_medida";
$tdatacat_ventas_productos_unidades_de_medida[".OwnerID"] = "";
$tdatacat_ventas_productos_unidades_de_medida[".OriginalTable"] = "cat_ventas_productos_unidades_de_medida";


$tdatacat_ventas_productos_unidades_de_medida[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_productos_unidades_de_medida[".originalPagesByType"] = $tdatacat_ventas_productos_unidades_de_medida[".pagesByType"];
$tdatacat_ventas_productos_unidades_de_medida[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_productos_unidades_de_medida[".originalPages"] = $tdatacat_ventas_productos_unidades_de_medida[".pages"];
$tdatacat_ventas_productos_unidades_de_medida[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_ventas_productos_unidades_de_medida[".originalDefaultPages"] = $tdatacat_ventas_productos_unidades_de_medida[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_unidades_de_medida = array();
$fieldToolTipscat_ventas_productos_unidades_de_medida = array();
$pageTitlescat_ventas_productos_unidades_de_medida = array();
$placeHolderscat_ventas_productos_unidades_de_medida = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_unidades_de_medida["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_unidades_de_medida["Spanish"] = array();
	$placeHolderscat_ventas_productos_unidades_de_medida["Spanish"] = array();
	$pageTitlescat_ventas_productos_unidades_de_medida["Spanish"] = array();
	$fieldLabelscat_ventas_productos_unidades_de_medida["Spanish"]["cat_ventas_productos_unidades_de_medida_id"] = "Id";
	$fieldToolTipscat_ventas_productos_unidades_de_medida["Spanish"]["cat_ventas_productos_unidades_de_medida_id"] = "";
	$placeHolderscat_ventas_productos_unidades_de_medida["Spanish"]["cat_ventas_productos_unidades_de_medida_id"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_medida["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_unidades_de_medida["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_unidades_de_medida["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_medida["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_unidades_de_medida["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_unidades_de_medida["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_medida["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_unidades_de_medida["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_unidades_de_medida["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_medida["Spanish"]["descripcion_ventas_productos_unidad_de_medida"] = "Descripcion Ventas Productos Unidad De Medida";
	$fieldToolTipscat_ventas_productos_unidades_de_medida["Spanish"]["descripcion_ventas_productos_unidad_de_medida"] = "";
	$placeHolderscat_ventas_productos_unidades_de_medida["Spanish"]["descripcion_ventas_productos_unidad_de_medida"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_medida["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_ventas_productos_unidades_de_medida["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_ventas_productos_unidades_de_medida["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_ventas_productos_unidades_de_medida["Spanish"]))
		$tdatacat_ventas_productos_unidades_de_medida[".isUseToolTips"] = true;
}





$tdatacat_ventas_productos_unidades_de_medida[".shortTableName"] = "cat_ventas_productos_unidades_de_medida";
$tdatacat_ventas_productos_unidades_de_medida[".nSecOptions"] = 0;

$tdatacat_ventas_productos_unidades_de_medida[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_unidades_de_medida[".entityType"] = 0;
$tdatacat_ventas_productos_unidades_de_medida[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_unidades_de_medida[".strOriginalTableName"] = "cat_ventas_productos_unidades_de_medida";

	



$tdatacat_ventas_productos_unidades_de_medida[".showAddInPopup"] = false;

$tdatacat_ventas_productos_unidades_de_medida[".showEditInPopup"] = false;

$tdatacat_ventas_productos_unidades_de_medida[".showViewInPopup"] = false;

$tdatacat_ventas_productos_unidades_de_medida[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_unidades_de_medida[".listAjax"] = false;

	$tdatacat_ventas_productos_unidades_de_medida[".audit"] = true;

	$tdatacat_ventas_productos_unidades_de_medida[".locking"] = true;


$pages = $tdatacat_ventas_productos_unidades_de_medida[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_unidades_de_medida[".edit"] = true;
	$tdatacat_ventas_productos_unidades_de_medida[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_unidades_de_medida[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_unidades_de_medida[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_unidades_de_medida[".add"] = true;
$tdatacat_ventas_productos_unidades_de_medida[".afterAddAction"] = 1;
$tdatacat_ventas_productos_unidades_de_medida[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_unidades_de_medida[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_unidades_de_medida[".list"] = true;
}



$tdatacat_ventas_productos_unidades_de_medida[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_unidades_de_medida[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_unidades_de_medida[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_unidades_de_medida[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_unidades_de_medida[".printFriendly"] = true;
}



$tdatacat_ventas_productos_unidades_de_medida[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_unidades_de_medida[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_unidades_de_medida[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_unidades_de_medida[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_unidades_de_medida[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_unidades_de_medida[".buttonsAdded"] = false;

$tdatacat_ventas_productos_unidades_de_medida[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_unidades_de_medida[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_unidades_de_medida[".badgeColor"] = "E07878";


$tdatacat_ventas_productos_unidades_de_medida[".allSearchFields"] = array();
$tdatacat_ventas_productos_unidades_de_medida[".filterFields"] = array();
$tdatacat_ventas_productos_unidades_de_medida[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_unidades_de_medida[".googleLikeFields"] = array();
$tdatacat_ventas_productos_unidades_de_medida[".googleLikeFields"][] = "cat_ventas_productos_unidades_de_medida_id";
$tdatacat_ventas_productos_unidades_de_medida[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_productos_unidades_de_medida[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_unidades_de_medida[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_unidades_de_medida[".googleLikeFields"][] = "descripcion_ventas_productos_unidad_de_medida";
$tdatacat_ventas_productos_unidades_de_medida[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_ventas_productos_unidades_de_medida[".tableType"] = "list";

$tdatacat_ventas_productos_unidades_de_medida[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_unidades_de_medida[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_unidades_de_medida[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_unidades_de_medida[".geocodingEnabled"] = false;





$tdatacat_ventas_productos_unidades_de_medida[".isResizeColumns"] = true;





$tdatacat_ventas_productos_unidades_de_medida[".pageSize"] = 20;

$tdatacat_ventas_productos_unidades_de_medida[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_unidades_de_medida[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_unidades_de_medida[".orderindexes"] = array();


$tdatacat_ventas_productos_unidades_de_medida[".sqlHead"] = "SELECT cat_ventas_productos_unidades_de_medida.cat_ventas_productos_unidades_de_medida_id,  cat_ventas_productos_unidades_de_medida.time_stamp,  cat_ventas_productos_unidades_de_medida.vigente,  cat_ventas_productos_unidades_de_medida.capturista,  cat_ventas_productos_unidades_de_medida.descripcion_ventas_productos_unidad_de_medida,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_ventas_productos_unidades_de_medida[".sqlFrom"] = "FROM cat_ventas_productos_unidades_de_medida  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_unidades_de_medida.capturista = cat_usuarios.usuario";
$tdatacat_ventas_productos_unidades_de_medida[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_unidades_de_medida[".sqlTail"] = "";

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
$tdatacat_ventas_productos_unidades_de_medida[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_unidades_de_medida[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_unidades_de_medida[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_unidades_de_medida[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_unidades_de_medida = array();
$tableKeyscat_ventas_productos_unidades_de_medida[] = "cat_ventas_productos_unidades_de_medida_id";
$tdatacat_ventas_productos_unidades_de_medida[".Keys"] = $tableKeyscat_ventas_productos_unidades_de_medida;


$tdatacat_ventas_productos_unidades_de_medida[".hideMobileList"] = array();




//	cat_ventas_productos_unidades_de_medida_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_unidades_de_medida_id";
	$fdata["GoodName"] = "cat_ventas_productos_unidades_de_medida_id";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_medida";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_medida","cat_ventas_productos_unidades_de_medida_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_unidades_de_medida_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_unidades_de_medida_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_medida.cat_ventas_productos_unidades_de_medida_id";

	
	
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


	$tdatacat_ventas_productos_unidades_de_medida["cat_ventas_productos_unidades_de_medida_id"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_medida[".searchableFields"][] = "cat_ventas_productos_unidades_de_medida_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_medida";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_medida","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_medida.time_stamp";

	
	
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


	$tdatacat_ventas_productos_unidades_de_medida["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_medida[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_medida";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_medida","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_medida.vigente";

	
	
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


	$tdatacat_ventas_productos_unidades_de_medida["vigente"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_medida[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_medida";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_medida","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_medida.capturista";

	
	
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


	$tdatacat_ventas_productos_unidades_de_medida["capturista"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_medida[".searchableFields"][] = "capturista";
//	descripcion_ventas_productos_unidad_de_medida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_ventas_productos_unidad_de_medida";
	$fdata["GoodName"] = "descripcion_ventas_productos_unidad_de_medida";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_medida";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_medida","descripcion_ventas_productos_unidad_de_medida");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_productos_unidad_de_medida";

		$fdata["sourceSingle"] = "descripcion_ventas_productos_unidad_de_medida";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_medida.descripcion_ventas_productos_unidad_de_medida";

	
	
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


	$tdatacat_ventas_productos_unidades_de_medida["descripcion_ventas_productos_unidad_de_medida"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_medida[".searchableFields"][] = "descripcion_ventas_productos_unidad_de_medida";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_medida","cat_usuarios_licencias_id");
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


	$tdatacat_ventas_productos_unidades_de_medida["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_medida[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_ventas_productos_unidades_de_medida"]=&$tdatacat_ventas_productos_unidades_de_medida;
$field_labels["cat_ventas_productos_unidades_de_medida"] = &$fieldLabelscat_ventas_productos_unidades_de_medida;
$fieldToolTips["cat_ventas_productos_unidades_de_medida"] = &$fieldToolTipscat_ventas_productos_unidades_de_medida;
$placeHolders["cat_ventas_productos_unidades_de_medida"] = &$placeHolderscat_ventas_productos_unidades_de_medida;
$page_titles["cat_ventas_productos_unidades_de_medida"] = &$pageTitlescat_ventas_productos_unidades_de_medida;


changeTextControlsToDate( "cat_ventas_productos_unidades_de_medida" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_unidades_de_medida"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_unidades_de_medida"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_unidades_de_medida()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_unidades_de_medida.cat_ventas_productos_unidades_de_medida_id,  cat_ventas_productos_unidades_de_medida.time_stamp,  cat_ventas_productos_unidades_de_medida.vigente,  cat_ventas_productos_unidades_de_medida.capturista,  cat_ventas_productos_unidades_de_medida.descripcion_ventas_productos_unidad_de_medida,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_unidades_de_medida  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_unidades_de_medida.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_ventas_productos_unidades_de_medida_id",
	"m_strTable" => "cat_ventas_productos_unidades_de_medida",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_medida"
));

$proto6["m_sql"] = "cat_ventas_productos_unidades_de_medida.cat_ventas_productos_unidades_de_medida_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_unidades_de_medida";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_unidades_de_medida",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_medida"
));

$proto8["m_sql"] = "cat_ventas_productos_unidades_de_medida.time_stamp";
$proto8["m_srcTableName"] = "cat_ventas_productos_unidades_de_medida";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_unidades_de_medida",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_medida"
));

$proto10["m_sql"] = "cat_ventas_productos_unidades_de_medida.vigente";
$proto10["m_srcTableName"] = "cat_ventas_productos_unidades_de_medida";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_unidades_de_medida",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_medida"
));

$proto12["m_sql"] = "cat_ventas_productos_unidades_de_medida.capturista";
$proto12["m_srcTableName"] = "cat_ventas_productos_unidades_de_medida";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_unidad_de_medida",
	"m_strTable" => "cat_ventas_productos_unidades_de_medida",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_medida"
));

$proto14["m_sql"] = "cat_ventas_productos_unidades_de_medida.descripcion_ventas_productos_unidad_de_medida";
$proto14["m_srcTableName"] = "cat_ventas_productos_unidades_de_medida";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_medida"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_ventas_productos_unidades_de_medida";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_ventas_productos_unidades_de_medida";
$proto19["m_srcTableName"] = "cat_ventas_productos_unidades_de_medida";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_ventas_productos_unidades_de_medida_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_ventas_productos_unidad_de_medida";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_ventas_productos_unidades_de_medida";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_ventas_productos_unidades_de_medida";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_LEFTJOIN";
			$proto23=array();
$proto23["m_strName"] = "cat_usuarios";
$proto23["m_srcTableName"] = "cat_ventas_productos_unidades_de_medida";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "cat_usuarios_id";
$proto23["m_columns"][] = "time_stamp";
$proto23["m_columns"][] = "vigente";
$proto23["m_columns"][] = "capturista";
$proto23["m_columns"][] = "usuario";
$proto23["m_columns"][] = "cat_usuarios_licencias_id";
$proto23["m_columns"][] = "pass";
$proto23["m_columns"][] = "nombre";
$proto23["m_columns"][] = "correo";
$proto23["m_columns"][] = "cat_trabajadores_altas_id";
$proto23["m_columns"][] = "res_autorizacion";
$proto23["m_columns"][] = "session";
$proto23["m_columns"][] = "tipo";
$proto23["m_columns"][] = "session_v2";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_unidades_de_medida.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_ventas_productos_unidades_de_medida";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_ventas_productos_unidades_de_medida.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_medida"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_ventas_productos_unidades_de_medida.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_unidades_de_medida";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_unidades_de_medida = createSqlQuery_cat_ventas_productos_unidades_de_medida();


	
		;

						

$tdatacat_ventas_productos_unidades_de_medida[".sqlquery"] = $queryData_cat_ventas_productos_unidades_de_medida;



$tdatacat_ventas_productos_unidades_de_medida[".hasEvents"] = false;

?>