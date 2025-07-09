<?php
$tdatacat_ventas_productos_unidades_de_produccion = array();
$tdatacat_ventas_productos_unidades_de_produccion[".searchableFields"] = array();
$tdatacat_ventas_productos_unidades_de_produccion[".ShortName"] = "cat_ventas_productos_unidades_de_produccion";
$tdatacat_ventas_productos_unidades_de_produccion[".OwnerID"] = "";
$tdatacat_ventas_productos_unidades_de_produccion[".OriginalTable"] = "cat_ventas_productos_unidades_de_produccion";


$tdatacat_ventas_productos_unidades_de_produccion[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_productos_unidades_de_produccion[".originalPagesByType"] = $tdatacat_ventas_productos_unidades_de_produccion[".pagesByType"];
$tdatacat_ventas_productos_unidades_de_produccion[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_productos_unidades_de_produccion[".originalPages"] = $tdatacat_ventas_productos_unidades_de_produccion[".pages"];
$tdatacat_ventas_productos_unidades_de_produccion[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_ventas_productos_unidades_de_produccion[".originalDefaultPages"] = $tdatacat_ventas_productos_unidades_de_produccion[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_unidades_de_produccion = array();
$fieldToolTipscat_ventas_productos_unidades_de_produccion = array();
$pageTitlescat_ventas_productos_unidades_de_produccion = array();
$placeHolderscat_ventas_productos_unidades_de_produccion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_unidades_de_produccion["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_unidades_de_produccion["Spanish"] = array();
	$placeHolderscat_ventas_productos_unidades_de_produccion["Spanish"] = array();
	$pageTitlescat_ventas_productos_unidades_de_produccion["Spanish"] = array();
	$fieldLabelscat_ventas_productos_unidades_de_produccion["Spanish"]["cat_ventas_productos_unidades_de_produccion_id"] = "Id";
	$fieldToolTipscat_ventas_productos_unidades_de_produccion["Spanish"]["cat_ventas_productos_unidades_de_produccion_id"] = "";
	$placeHolderscat_ventas_productos_unidades_de_produccion["Spanish"]["cat_ventas_productos_unidades_de_produccion_id"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_produccion["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_unidades_de_produccion["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_unidades_de_produccion["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_produccion["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_unidades_de_produccion["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_unidades_de_produccion["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_produccion["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_unidades_de_produccion["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_unidades_de_produccion["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_produccion["Spanish"]["descripcion_ventas_productos_unidad_de_produccion"] = "Descripcion Unidad De Produccion";
	$fieldToolTipscat_ventas_productos_unidades_de_produccion["Spanish"]["descripcion_ventas_productos_unidad_de_produccion"] = "";
	$placeHolderscat_ventas_productos_unidades_de_produccion["Spanish"]["descripcion_ventas_productos_unidad_de_produccion"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_produccion["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_ventas_productos_unidades_de_produccion["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_ventas_productos_unidades_de_produccion["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_ventas_productos_unidades_de_produccion["Spanish"]))
		$tdatacat_ventas_productos_unidades_de_produccion[".isUseToolTips"] = true;
}





$tdatacat_ventas_productos_unidades_de_produccion[".shortTableName"] = "cat_ventas_productos_unidades_de_produccion";
$tdatacat_ventas_productos_unidades_de_produccion[".nSecOptions"] = 0;

$tdatacat_ventas_productos_unidades_de_produccion[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_unidades_de_produccion[".entityType"] = 0;
$tdatacat_ventas_productos_unidades_de_produccion[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_unidades_de_produccion[".strOriginalTableName"] = "cat_ventas_productos_unidades_de_produccion";

	



$tdatacat_ventas_productos_unidades_de_produccion[".showAddInPopup"] = false;

$tdatacat_ventas_productos_unidades_de_produccion[".showEditInPopup"] = false;

$tdatacat_ventas_productos_unidades_de_produccion[".showViewInPopup"] = false;

$tdatacat_ventas_productos_unidades_de_produccion[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_unidades_de_produccion[".listAjax"] = false;

	$tdatacat_ventas_productos_unidades_de_produccion[".audit"] = true;

	$tdatacat_ventas_productos_unidades_de_produccion[".locking"] = true;


$pages = $tdatacat_ventas_productos_unidades_de_produccion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_unidades_de_produccion[".edit"] = true;
	$tdatacat_ventas_productos_unidades_de_produccion[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_unidades_de_produccion[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_unidades_de_produccion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_unidades_de_produccion[".add"] = true;
$tdatacat_ventas_productos_unidades_de_produccion[".afterAddAction"] = 1;
$tdatacat_ventas_productos_unidades_de_produccion[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_unidades_de_produccion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_unidades_de_produccion[".list"] = true;
}



$tdatacat_ventas_productos_unidades_de_produccion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_unidades_de_produccion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_unidades_de_produccion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_unidades_de_produccion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_unidades_de_produccion[".printFriendly"] = true;
}



$tdatacat_ventas_productos_unidades_de_produccion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_unidades_de_produccion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_unidades_de_produccion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_unidades_de_produccion[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_unidades_de_produccion[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_unidades_de_produccion[".buttonsAdded"] = false;

$tdatacat_ventas_productos_unidades_de_produccion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_unidades_de_produccion[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_unidades_de_produccion[".badgeColor"] = "1E90FF";


$tdatacat_ventas_productos_unidades_de_produccion[".allSearchFields"] = array();
$tdatacat_ventas_productos_unidades_de_produccion[".filterFields"] = array();
$tdatacat_ventas_productos_unidades_de_produccion[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_unidades_de_produccion[".googleLikeFields"] = array();
$tdatacat_ventas_productos_unidades_de_produccion[".googleLikeFields"][] = "cat_ventas_productos_unidades_de_produccion_id";
$tdatacat_ventas_productos_unidades_de_produccion[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_productos_unidades_de_produccion[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_unidades_de_produccion[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_unidades_de_produccion[".googleLikeFields"][] = "descripcion_ventas_productos_unidad_de_produccion";
$tdatacat_ventas_productos_unidades_de_produccion[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_ventas_productos_unidades_de_produccion[".tableType"] = "list";

$tdatacat_ventas_productos_unidades_de_produccion[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_unidades_de_produccion[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_unidades_de_produccion[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_unidades_de_produccion[".geocodingEnabled"] = false;





$tdatacat_ventas_productos_unidades_de_produccion[".isResizeColumns"] = true;





$tdatacat_ventas_productos_unidades_de_produccion[".pageSize"] = 20;

$tdatacat_ventas_productos_unidades_de_produccion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_unidades_de_produccion[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_unidades_de_produccion[".orderindexes"] = array();


$tdatacat_ventas_productos_unidades_de_produccion[".sqlHead"] = "SELECT cat_ventas_productos_unidades_de_produccion.cat_ventas_productos_unidades_de_produccion_id,  cat_ventas_productos_unidades_de_produccion.time_stamp,  cat_ventas_productos_unidades_de_produccion.vigente,  cat_ventas_productos_unidades_de_produccion.capturista,  cat_ventas_productos_unidades_de_produccion.descripcion_ventas_productos_unidad_de_produccion,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_ventas_productos_unidades_de_produccion[".sqlFrom"] = "FROM cat_ventas_productos_unidades_de_produccion  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_unidades_de_produccion.capturista = cat_usuarios.usuario";
$tdatacat_ventas_productos_unidades_de_produccion[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_unidades_de_produccion[".sqlTail"] = "";

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
$tdatacat_ventas_productos_unidades_de_produccion[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_unidades_de_produccion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_unidades_de_produccion[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_unidades_de_produccion[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_unidades_de_produccion = array();
$tableKeyscat_ventas_productos_unidades_de_produccion[] = "cat_ventas_productos_unidades_de_produccion_id";
$tdatacat_ventas_productos_unidades_de_produccion[".Keys"] = $tableKeyscat_ventas_productos_unidades_de_produccion;


$tdatacat_ventas_productos_unidades_de_produccion[".hideMobileList"] = array();




//	cat_ventas_productos_unidades_de_produccion_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_unidades_de_produccion_id";
	$fdata["GoodName"] = "cat_ventas_productos_unidades_de_produccion_id";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_produccion";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_produccion","cat_ventas_productos_unidades_de_produccion_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_unidades_de_produccion_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_unidades_de_produccion_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_produccion.cat_ventas_productos_unidades_de_produccion_id";

	
	
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


	$tdatacat_ventas_productos_unidades_de_produccion["cat_ventas_productos_unidades_de_produccion_id"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_produccion[".searchableFields"][] = "cat_ventas_productos_unidades_de_produccion_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_produccion";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_produccion","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_produccion.time_stamp";

	
	
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


	$tdatacat_ventas_productos_unidades_de_produccion["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_produccion[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_produccion";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_produccion","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_produccion.vigente";

	
	
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


	$tdatacat_ventas_productos_unidades_de_produccion["vigente"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_produccion[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_produccion";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_produccion","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_produccion.capturista";

	
	
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


	$tdatacat_ventas_productos_unidades_de_produccion["capturista"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_produccion[".searchableFields"][] = "capturista";
//	descripcion_ventas_productos_unidad_de_produccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_ventas_productos_unidad_de_produccion";
	$fdata["GoodName"] = "descripcion_ventas_productos_unidad_de_produccion";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_produccion";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_produccion","descripcion_ventas_productos_unidad_de_produccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_productos_unidad_de_produccion";

		$fdata["sourceSingle"] = "descripcion_ventas_productos_unidad_de_produccion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_produccion.descripcion_ventas_productos_unidad_de_produccion";

	
	
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


	$tdatacat_ventas_productos_unidades_de_produccion["descripcion_ventas_productos_unidad_de_produccion"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_produccion[".searchableFields"][] = "descripcion_ventas_productos_unidad_de_produccion";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_produccion","cat_usuarios_licencias_id");
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


	$tdatacat_ventas_productos_unidades_de_produccion["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_produccion[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_ventas_productos_unidades_de_produccion"]=&$tdatacat_ventas_productos_unidades_de_produccion;
$field_labels["cat_ventas_productos_unidades_de_produccion"] = &$fieldLabelscat_ventas_productos_unidades_de_produccion;
$fieldToolTips["cat_ventas_productos_unidades_de_produccion"] = &$fieldToolTipscat_ventas_productos_unidades_de_produccion;
$placeHolders["cat_ventas_productos_unidades_de_produccion"] = &$placeHolderscat_ventas_productos_unidades_de_produccion;
$page_titles["cat_ventas_productos_unidades_de_produccion"] = &$pageTitlescat_ventas_productos_unidades_de_produccion;


changeTextControlsToDate( "cat_ventas_productos_unidades_de_produccion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_unidades_de_produccion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_unidades_de_produccion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_unidades_de_produccion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_unidades_de_produccion.cat_ventas_productos_unidades_de_produccion_id,  cat_ventas_productos_unidades_de_produccion.time_stamp,  cat_ventas_productos_unidades_de_produccion.vigente,  cat_ventas_productos_unidades_de_produccion.capturista,  cat_ventas_productos_unidades_de_produccion.descripcion_ventas_productos_unidad_de_produccion,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_unidades_de_produccion  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_unidades_de_produccion.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_ventas_productos_unidades_de_produccion_id",
	"m_strTable" => "cat_ventas_productos_unidades_de_produccion",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_produccion"
));

$proto6["m_sql"] = "cat_ventas_productos_unidades_de_produccion.cat_ventas_productos_unidades_de_produccion_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_unidades_de_produccion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_unidades_de_produccion",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_produccion"
));

$proto8["m_sql"] = "cat_ventas_productos_unidades_de_produccion.time_stamp";
$proto8["m_srcTableName"] = "cat_ventas_productos_unidades_de_produccion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_unidades_de_produccion",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_produccion"
));

$proto10["m_sql"] = "cat_ventas_productos_unidades_de_produccion.vigente";
$proto10["m_srcTableName"] = "cat_ventas_productos_unidades_de_produccion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_unidades_de_produccion",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_produccion"
));

$proto12["m_sql"] = "cat_ventas_productos_unidades_de_produccion.capturista";
$proto12["m_srcTableName"] = "cat_ventas_productos_unidades_de_produccion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_unidad_de_produccion",
	"m_strTable" => "cat_ventas_productos_unidades_de_produccion",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_produccion"
));

$proto14["m_sql"] = "cat_ventas_productos_unidades_de_produccion.descripcion_ventas_productos_unidad_de_produccion";
$proto14["m_srcTableName"] = "cat_ventas_productos_unidades_de_produccion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_produccion"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_ventas_productos_unidades_de_produccion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_ventas_productos_unidades_de_produccion";
$proto19["m_srcTableName"] = "cat_ventas_productos_unidades_de_produccion";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_ventas_productos_unidades_de_produccion_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_ventas_productos_unidad_de_produccion";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_ventas_productos_unidades_de_produccion";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_ventas_productos_unidades_de_produccion";
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
$proto23["m_srcTableName"] = "cat_ventas_productos_unidades_de_produccion";
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
$proto22["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_unidades_de_produccion.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_ventas_productos_unidades_de_produccion";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_ventas_productos_unidades_de_produccion.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_produccion"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_ventas_productos_unidades_de_produccion.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_unidades_de_produccion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_unidades_de_produccion = createSqlQuery_cat_ventas_productos_unidades_de_produccion();


	
		;

						

$tdatacat_ventas_productos_unidades_de_produccion[".sqlquery"] = $queryData_cat_ventas_productos_unidades_de_produccion;



$tdatacat_ventas_productos_unidades_de_produccion[".hasEvents"] = false;

?>