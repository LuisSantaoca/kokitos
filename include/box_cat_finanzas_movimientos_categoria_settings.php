<?php
$tdatabox_cat_finanzas_movimientos_categoria = array();
$tdatabox_cat_finanzas_movimientos_categoria[".searchableFields"] = array();
$tdatabox_cat_finanzas_movimientos_categoria[".ShortName"] = "box_cat_finanzas_movimientos_categoria";
$tdatabox_cat_finanzas_movimientos_categoria[".OwnerID"] = "";
$tdatabox_cat_finanzas_movimientos_categoria[".OriginalTable"] = "cat_finanzas_movimientos_categoria";


$tdatabox_cat_finanzas_movimientos_categoria[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_finanzas_movimientos_categoria[".originalPagesByType"] = $tdatabox_cat_finanzas_movimientos_categoria[".pagesByType"];
$tdatabox_cat_finanzas_movimientos_categoria[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_finanzas_movimientos_categoria[".originalPages"] = $tdatabox_cat_finanzas_movimientos_categoria[".pages"];
$tdatabox_cat_finanzas_movimientos_categoria[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_finanzas_movimientos_categoria[".originalDefaultPages"] = $tdatabox_cat_finanzas_movimientos_categoria[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_finanzas_movimientos_categoria = array();
$fieldToolTipsbox_cat_finanzas_movimientos_categoria = array();
$pageTitlesbox_cat_finanzas_movimientos_categoria = array();
$placeHoldersbox_cat_finanzas_movimientos_categoria = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_finanzas_movimientos_categoria["Spanish"] = array();
	$fieldToolTipsbox_cat_finanzas_movimientos_categoria["Spanish"] = array();
	$placeHoldersbox_cat_finanzas_movimientos_categoria["Spanish"] = array();
	$pageTitlesbox_cat_finanzas_movimientos_categoria["Spanish"] = array();
	$fieldLabelsbox_cat_finanzas_movimientos_categoria["Spanish"]["cat_finanzas_movimientos_categoria_id"] = " Id";
	$fieldToolTipsbox_cat_finanzas_movimientos_categoria["Spanish"]["cat_finanzas_movimientos_categoria_id"] = "";
	$placeHoldersbox_cat_finanzas_movimientos_categoria["Spanish"]["cat_finanzas_movimientos_categoria_id"] = "";
	$fieldLabelsbox_cat_finanzas_movimientos_categoria["Spanish"]["descripcion_categoria"] = "Categoria";
	$fieldToolTipsbox_cat_finanzas_movimientos_categoria["Spanish"]["descripcion_categoria"] = "";
	$placeHoldersbox_cat_finanzas_movimientos_categoria["Spanish"]["descripcion_categoria"] = "";
	$fieldLabelsbox_cat_finanzas_movimientos_categoria["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_finanzas_movimientos_categoria["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_finanzas_movimientos_categoria["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_finanzas_movimientos_categoria["Spanish"]["fecha_de_captura"] = "Fecha De Captura";
	$fieldToolTipsbox_cat_finanzas_movimientos_categoria["Spanish"]["fecha_de_captura"] = "";
	$placeHoldersbox_cat_finanzas_movimientos_categoria["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelsbox_cat_finanzas_movimientos_categoria["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_finanzas_movimientos_categoria["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_finanzas_movimientos_categoria["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_finanzas_movimientos_categoria["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbox_cat_finanzas_movimientos_categoria["Spanish"]["time_stamp"] = "";
	$placeHoldersbox_cat_finanzas_movimientos_categoria["Spanish"]["time_stamp"] = "";
	$fieldLabelsbox_cat_finanzas_movimientos_categoria["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_finanzas_movimientos_categoria["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_finanzas_movimientos_categoria["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipsbox_cat_finanzas_movimientos_categoria["Spanish"]))
		$tdatabox_cat_finanzas_movimientos_categoria[".isUseToolTips"] = true;
}





$tdatabox_cat_finanzas_movimientos_categoria[".shortTableName"] = "box_cat_finanzas_movimientos_categoria";
$tdatabox_cat_finanzas_movimientos_categoria[".nSecOptions"] = 0;

$tdatabox_cat_finanzas_movimientos_categoria[".mainTableOwnerID"] = "";
$tdatabox_cat_finanzas_movimientos_categoria[".entityType"] = 1;
$tdatabox_cat_finanzas_movimientos_categoria[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_finanzas_movimientos_categoria[".strOriginalTableName"] = "cat_finanzas_movimientos_categoria";

	



$tdatabox_cat_finanzas_movimientos_categoria[".showAddInPopup"] = false;

$tdatabox_cat_finanzas_movimientos_categoria[".showEditInPopup"] = false;

$tdatabox_cat_finanzas_movimientos_categoria[".showViewInPopup"] = false;

$tdatabox_cat_finanzas_movimientos_categoria[".listAjax"] = false;
//	temporary
//$tdatabox_cat_finanzas_movimientos_categoria[".listAjax"] = false;

	$tdatabox_cat_finanzas_movimientos_categoria[".audit"] = false;

	$tdatabox_cat_finanzas_movimientos_categoria[".locking"] = false;


$pages = $tdatabox_cat_finanzas_movimientos_categoria[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_finanzas_movimientos_categoria[".edit"] = true;
	$tdatabox_cat_finanzas_movimientos_categoria[".afterEditAction"] = 1;
	$tdatabox_cat_finanzas_movimientos_categoria[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_finanzas_movimientos_categoria[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_finanzas_movimientos_categoria[".add"] = true;
$tdatabox_cat_finanzas_movimientos_categoria[".afterAddAction"] = 1;
$tdatabox_cat_finanzas_movimientos_categoria[".closePopupAfterAdd"] = 1;
$tdatabox_cat_finanzas_movimientos_categoria[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_finanzas_movimientos_categoria[".list"] = true;
}



$tdatabox_cat_finanzas_movimientos_categoria[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_finanzas_movimientos_categoria[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_finanzas_movimientos_categoria[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_finanzas_movimientos_categoria[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_finanzas_movimientos_categoria[".printFriendly"] = true;
}



$tdatabox_cat_finanzas_movimientos_categoria[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_finanzas_movimientos_categoria[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_finanzas_movimientos_categoria[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_finanzas_movimientos_categoria[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_finanzas_movimientos_categoria[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_finanzas_movimientos_categoria[".buttonsAdded"] = false;

$tdatabox_cat_finanzas_movimientos_categoria[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_finanzas_movimientos_categoria[".isUseTimeForSearch"] = false;


$tdatabox_cat_finanzas_movimientos_categoria[".badgeColor"] = "DB7093";


$tdatabox_cat_finanzas_movimientos_categoria[".allSearchFields"] = array();
$tdatabox_cat_finanzas_movimientos_categoria[".filterFields"] = array();
$tdatabox_cat_finanzas_movimientos_categoria[".requiredSearchFields"] = array();

$tdatabox_cat_finanzas_movimientos_categoria[".googleLikeFields"] = array();
$tdatabox_cat_finanzas_movimientos_categoria[".googleLikeFields"][] = "cat_finanzas_movimientos_categoria_id";
$tdatabox_cat_finanzas_movimientos_categoria[".googleLikeFields"][] = "descripcion_categoria";
$tdatabox_cat_finanzas_movimientos_categoria[".googleLikeFields"][] = "capturista";
$tdatabox_cat_finanzas_movimientos_categoria[".googleLikeFields"][] = "fecha_de_captura";
$tdatabox_cat_finanzas_movimientos_categoria[".googleLikeFields"][] = "vigente";
$tdatabox_cat_finanzas_movimientos_categoria[".googleLikeFields"][] = "time_stamp";
$tdatabox_cat_finanzas_movimientos_categoria[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_finanzas_movimientos_categoria[".tableType"] = "list";

$tdatabox_cat_finanzas_movimientos_categoria[".printerPageOrientation"] = 0;
$tdatabox_cat_finanzas_movimientos_categoria[".nPrinterPageScale"] = 100;

$tdatabox_cat_finanzas_movimientos_categoria[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_finanzas_movimientos_categoria[".geocodingEnabled"] = false;





$tdatabox_cat_finanzas_movimientos_categoria[".isResizeColumns"] = true;





$tdatabox_cat_finanzas_movimientos_categoria[".pageSize"] = 20;

$tdatabox_cat_finanzas_movimientos_categoria[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_finanzas_movimientos_categoria[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_finanzas_movimientos_categoria[".orderindexes"] = array();


$tdatabox_cat_finanzas_movimientos_categoria[".sqlHead"] = "SELECT cat_finanzas_movimientos_categoria.cat_finanzas_movimientos_categoria_id,  cat_finanzas_movimientos_categoria.descripcion_categoria,  cat_finanzas_movimientos_categoria.capturista,  cat_finanzas_movimientos_categoria.fecha_de_captura,  cat_finanzas_movimientos_categoria.vigente,  cat_finanzas_movimientos_categoria.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_cat_finanzas_movimientos_categoria[".sqlFrom"] = "FROM cat_finanzas_movimientos_categoria  INNER JOIN cat_usuarios ON cat_finanzas_movimientos_categoria.capturista = cat_usuarios.usuario";
$tdatabox_cat_finanzas_movimientos_categoria[".sqlWhereExpr"] = "(cat_finanzas_movimientos_categoria.vigente =1)";
$tdatabox_cat_finanzas_movimientos_categoria[".sqlTail"] = "";

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
$tdatabox_cat_finanzas_movimientos_categoria[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_finanzas_movimientos_categoria[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_finanzas_movimientos_categoria[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_finanzas_movimientos_categoria[".highlightSearchResults"] = true;

$tableKeysbox_cat_finanzas_movimientos_categoria = array();
$tableKeysbox_cat_finanzas_movimientos_categoria[] = "cat_finanzas_movimientos_categoria_id";
$tdatabox_cat_finanzas_movimientos_categoria[".Keys"] = $tableKeysbox_cat_finanzas_movimientos_categoria;


$tdatabox_cat_finanzas_movimientos_categoria[".hideMobileList"] = array();




//	cat_finanzas_movimientos_categoria_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_movimientos_categoria_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_categoria_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos_categoria","cat_finanzas_movimientos_categoria_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_movimientos_categoria_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_categoria_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria.cat_finanzas_movimientos_categoria_id";

	
	
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


	$tdatabox_cat_finanzas_movimientos_categoria["cat_finanzas_movimientos_categoria_id"] = $fdata;
		$tdatabox_cat_finanzas_movimientos_categoria[".searchableFields"][] = "cat_finanzas_movimientos_categoria_id";
//	descripcion_categoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_categoria";
	$fdata["GoodName"] = "descripcion_categoria";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos_categoria","descripcion_categoria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_categoria";

		$fdata["sourceSingle"] = "descripcion_categoria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria.descripcion_categoria";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatabox_cat_finanzas_movimientos_categoria["descripcion_categoria"] = $fdata;
		$tdatabox_cat_finanzas_movimientos_categoria[".searchableFields"][] = "descripcion_categoria";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos_categoria","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria.capturista";

	
	
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


	$tdatabox_cat_finanzas_movimientos_categoria["capturista"] = $fdata;
		$tdatabox_cat_finanzas_movimientos_categoria[".searchableFields"][] = "capturista";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos_categoria","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria.fecha_de_captura";

	
	
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


	$tdatabox_cat_finanzas_movimientos_categoria["fecha_de_captura"] = $fdata;
		$tdatabox_cat_finanzas_movimientos_categoria[".searchableFields"][] = "fecha_de_captura";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos_categoria","vigente");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria.vigente";

	
	
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


	$tdatabox_cat_finanzas_movimientos_categoria["vigente"] = $fdata;
		$tdatabox_cat_finanzas_movimientos_categoria[".searchableFields"][] = "vigente";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos_categoria","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria.time_stamp";

	
	
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


	$tdatabox_cat_finanzas_movimientos_categoria["time_stamp"] = $fdata;
		$tdatabox_cat_finanzas_movimientos_categoria[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_movimientos_categoria","cat_usuarios_licencias_id");
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


	$tdatabox_cat_finanzas_movimientos_categoria["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_finanzas_movimientos_categoria[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_finanzas_movimientos_categoria"]=&$tdatabox_cat_finanzas_movimientos_categoria;
$field_labels["box_cat_finanzas_movimientos_categoria"] = &$fieldLabelsbox_cat_finanzas_movimientos_categoria;
$fieldToolTips["box_cat_finanzas_movimientos_categoria"] = &$fieldToolTipsbox_cat_finanzas_movimientos_categoria;
$placeHolders["box_cat_finanzas_movimientos_categoria"] = &$placeHoldersbox_cat_finanzas_movimientos_categoria;
$page_titles["box_cat_finanzas_movimientos_categoria"] = &$pageTitlesbox_cat_finanzas_movimientos_categoria;


changeTextControlsToDate( "box_cat_finanzas_movimientos_categoria" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_finanzas_movimientos_categoria"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_finanzas_movimientos_categoria"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_finanzas_movimientos_categoria()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_movimientos_categoria.cat_finanzas_movimientos_categoria_id,  cat_finanzas_movimientos_categoria.descripcion_categoria,  cat_finanzas_movimientos_categoria.capturista,  cat_finanzas_movimientos_categoria.fecha_de_captura,  cat_finanzas_movimientos_categoria.vigente,  cat_finanzas_movimientos_categoria.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_movimientos_categoria  INNER JOIN cat_usuarios ON cat_finanzas_movimientos_categoria.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_finanzas_movimientos_categoria.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_finanzas_movimientos_categoria.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_movimientos_categoria",
	"m_srcTableName" => "box_cat_finanzas_movimientos_categoria"
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
	"m_strName" => "cat_finanzas_movimientos_categoria_id",
	"m_strTable" => "cat_finanzas_movimientos_categoria",
	"m_srcTableName" => "box_cat_finanzas_movimientos_categoria"
));

$proto6["m_sql"] = "cat_finanzas_movimientos_categoria.cat_finanzas_movimientos_categoria_id";
$proto6["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_categoria",
	"m_strTable" => "cat_finanzas_movimientos_categoria",
	"m_srcTableName" => "box_cat_finanzas_movimientos_categoria"
));

$proto8["m_sql"] = "cat_finanzas_movimientos_categoria.descripcion_categoria";
$proto8["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_finanzas_movimientos_categoria",
	"m_srcTableName" => "box_cat_finanzas_movimientos_categoria"
));

$proto10["m_sql"] = "cat_finanzas_movimientos_categoria.capturista";
$proto10["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "cat_finanzas_movimientos_categoria",
	"m_srcTableName" => "box_cat_finanzas_movimientos_categoria"
));

$proto12["m_sql"] = "cat_finanzas_movimientos_categoria.fecha_de_captura";
$proto12["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_movimientos_categoria",
	"m_srcTableName" => "box_cat_finanzas_movimientos_categoria"
));

$proto14["m_sql"] = "cat_finanzas_movimientos_categoria.vigente";
$proto14["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_finanzas_movimientos_categoria",
	"m_srcTableName" => "box_cat_finanzas_movimientos_categoria"
));

$proto16["m_sql"] = "cat_finanzas_movimientos_categoria.time_stamp";
$proto16["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_finanzas_movimientos_categoria"
));

$proto18["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto18["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "cat_finanzas_movimientos_categoria";
$proto21["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_finanzas_movimientos_categoria_id";
$proto21["m_columns"][] = "descripcion_categoria";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "fecha_de_captura";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "cat_finanzas_movimientos_categoria";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "cat_usuarios";
$proto25["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_usuarios_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "usuario";
$proto25["m_columns"][] = "cat_usuarios_licencias_id";
$proto25["m_columns"][] = "pass";
$proto25["m_columns"][] = "nombre";
$proto25["m_columns"][] = "correo";
$proto25["m_columns"][] = "cat_trabajadores_altas_id";
$proto25["m_columns"][] = "res_autorizacion";
$proto25["m_columns"][] = "session";
$proto25["m_columns"][] = "tipo";
$proto25["m_columns"][] = "session_v2";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN cat_usuarios ON cat_finanzas_movimientos_categoria.capturista = cat_usuarios.usuario";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "box_cat_finanzas_movimientos_categoria";
$proto26=array();
$proto26["m_sql"] = "cat_usuarios.usuario = cat_finanzas_movimientos_categoria.capturista";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_finanzas_movimientos_categoria"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= cat_finanzas_movimientos_categoria.capturista";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_finanzas_movimientos_categoria";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_finanzas_movimientos_categoria = createSqlQuery_box_cat_finanzas_movimientos_categoria();


	
		;

							

$tdatabox_cat_finanzas_movimientos_categoria[".sqlquery"] = $queryData_box_cat_finanzas_movimientos_categoria;



$tdatabox_cat_finanzas_movimientos_categoria[".hasEvents"] = false;

?>