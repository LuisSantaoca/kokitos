<?php
$tdatacat_finanzas_movimientos_categoria_sub = array();
$tdatacat_finanzas_movimientos_categoria_sub[".searchableFields"] = array();
$tdatacat_finanzas_movimientos_categoria_sub[".ShortName"] = "cat_finanzas_movimientos_categoria_sub";
$tdatacat_finanzas_movimientos_categoria_sub[".OwnerID"] = "";
$tdatacat_finanzas_movimientos_categoria_sub[".OriginalTable"] = "cat_finanzas_movimientos_categoria_sub";


$tdatacat_finanzas_movimientos_categoria_sub[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_finanzas_movimientos_categoria_sub[".originalPagesByType"] = $tdatacat_finanzas_movimientos_categoria_sub[".pagesByType"];
$tdatacat_finanzas_movimientos_categoria_sub[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_finanzas_movimientos_categoria_sub[".originalPages"] = $tdatacat_finanzas_movimientos_categoria_sub[".pages"];
$tdatacat_finanzas_movimientos_categoria_sub[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_finanzas_movimientos_categoria_sub[".originalDefaultPages"] = $tdatacat_finanzas_movimientos_categoria_sub[".defaultPages"];

//	field labels
$fieldLabelscat_finanzas_movimientos_categoria_sub = array();
$fieldToolTipscat_finanzas_movimientos_categoria_sub = array();
$pageTitlescat_finanzas_movimientos_categoria_sub = array();
$placeHolderscat_finanzas_movimientos_categoria_sub = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_finanzas_movimientos_categoria_sub["Spanish"] = array();
	$fieldToolTipscat_finanzas_movimientos_categoria_sub["Spanish"] = array();
	$placeHolderscat_finanzas_movimientos_categoria_sub["Spanish"] = array();
	$pageTitlescat_finanzas_movimientos_categoria_sub["Spanish"] = array();
	$fieldLabelscat_finanzas_movimientos_categoria_sub["Spanish"]["cat_finanzas_movimientos_categoria_sub_id"] = "Id";
	$fieldToolTipscat_finanzas_movimientos_categoria_sub["Spanish"]["cat_finanzas_movimientos_categoria_sub_id"] = "";
	$placeHolderscat_finanzas_movimientos_categoria_sub["Spanish"]["cat_finanzas_movimientos_categoria_sub_id"] = "";
	$fieldLabelscat_finanzas_movimientos_categoria_sub["Spanish"]["descripcion_sub_categoria"] = "Descripcion Sub Categoria";
	$fieldToolTipscat_finanzas_movimientos_categoria_sub["Spanish"]["descripcion_sub_categoria"] = "";
	$placeHolderscat_finanzas_movimientos_categoria_sub["Spanish"]["descripcion_sub_categoria"] = "";
	$fieldLabelscat_finanzas_movimientos_categoria_sub["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_finanzas_movimientos_categoria_sub["Spanish"]["capturista"] = "";
	$placeHolderscat_finanzas_movimientos_categoria_sub["Spanish"]["capturista"] = "";
	$fieldLabelscat_finanzas_movimientos_categoria_sub["Spanish"]["fecha_de_captura"] = "Fecha De Captura";
	$fieldToolTipscat_finanzas_movimientos_categoria_sub["Spanish"]["fecha_de_captura"] = "";
	$placeHolderscat_finanzas_movimientos_categoria_sub["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelscat_finanzas_movimientos_categoria_sub["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_finanzas_movimientos_categoria_sub["Spanish"]["vigente"] = "";
	$placeHolderscat_finanzas_movimientos_categoria_sub["Spanish"]["vigente"] = "";
	$fieldLabelscat_finanzas_movimientos_categoria_sub["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_finanzas_movimientos_categoria_sub["Spanish"]["time_stamp"] = "";
	$placeHolderscat_finanzas_movimientos_categoria_sub["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_finanzas_movimientos_categoria_sub["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_finanzas_movimientos_categoria_sub["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_finanzas_movimientos_categoria_sub["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_finanzas_movimientos_categoria_sub["Spanish"]))
		$tdatacat_finanzas_movimientos_categoria_sub[".isUseToolTips"] = true;
}





$tdatacat_finanzas_movimientos_categoria_sub[".shortTableName"] = "cat_finanzas_movimientos_categoria_sub";
$tdatacat_finanzas_movimientos_categoria_sub[".nSecOptions"] = 0;

$tdatacat_finanzas_movimientos_categoria_sub[".mainTableOwnerID"] = "";
$tdatacat_finanzas_movimientos_categoria_sub[".entityType"] = 0;
$tdatacat_finanzas_movimientos_categoria_sub[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_finanzas_movimientos_categoria_sub[".strOriginalTableName"] = "cat_finanzas_movimientos_categoria_sub";

	



$tdatacat_finanzas_movimientos_categoria_sub[".showAddInPopup"] = false;

$tdatacat_finanzas_movimientos_categoria_sub[".showEditInPopup"] = false;

$tdatacat_finanzas_movimientos_categoria_sub[".showViewInPopup"] = false;

$tdatacat_finanzas_movimientos_categoria_sub[".listAjax"] = false;
//	temporary
//$tdatacat_finanzas_movimientos_categoria_sub[".listAjax"] = false;

	$tdatacat_finanzas_movimientos_categoria_sub[".audit"] = false;

	$tdatacat_finanzas_movimientos_categoria_sub[".locking"] = false;


$pages = $tdatacat_finanzas_movimientos_categoria_sub[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_finanzas_movimientos_categoria_sub[".edit"] = true;
	$tdatacat_finanzas_movimientos_categoria_sub[".afterEditAction"] = 1;
	$tdatacat_finanzas_movimientos_categoria_sub[".closePopupAfterEdit"] = 1;
	$tdatacat_finanzas_movimientos_categoria_sub[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_finanzas_movimientos_categoria_sub[".add"] = true;
$tdatacat_finanzas_movimientos_categoria_sub[".afterAddAction"] = 1;
$tdatacat_finanzas_movimientos_categoria_sub[".closePopupAfterAdd"] = 1;
$tdatacat_finanzas_movimientos_categoria_sub[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_finanzas_movimientos_categoria_sub[".list"] = true;
}



$tdatacat_finanzas_movimientos_categoria_sub[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_finanzas_movimientos_categoria_sub[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_finanzas_movimientos_categoria_sub[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_finanzas_movimientos_categoria_sub[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_finanzas_movimientos_categoria_sub[".printFriendly"] = true;
}



$tdatacat_finanzas_movimientos_categoria_sub[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_finanzas_movimientos_categoria_sub[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_finanzas_movimientos_categoria_sub[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_finanzas_movimientos_categoria_sub[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_finanzas_movimientos_categoria_sub[".ajaxCodeSnippetAdded"] = false;

$tdatacat_finanzas_movimientos_categoria_sub[".buttonsAdded"] = false;

$tdatacat_finanzas_movimientos_categoria_sub[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_finanzas_movimientos_categoria_sub[".isUseTimeForSearch"] = false;


$tdatacat_finanzas_movimientos_categoria_sub[".badgeColor"] = "1E90FF";


$tdatacat_finanzas_movimientos_categoria_sub[".allSearchFields"] = array();
$tdatacat_finanzas_movimientos_categoria_sub[".filterFields"] = array();
$tdatacat_finanzas_movimientos_categoria_sub[".requiredSearchFields"] = array();

$tdatacat_finanzas_movimientos_categoria_sub[".googleLikeFields"] = array();
$tdatacat_finanzas_movimientos_categoria_sub[".googleLikeFields"][] = "cat_finanzas_movimientos_categoria_sub_id";
$tdatacat_finanzas_movimientos_categoria_sub[".googleLikeFields"][] = "descripcion_sub_categoria";
$tdatacat_finanzas_movimientos_categoria_sub[".googleLikeFields"][] = "capturista";
$tdatacat_finanzas_movimientos_categoria_sub[".googleLikeFields"][] = "fecha_de_captura";
$tdatacat_finanzas_movimientos_categoria_sub[".googleLikeFields"][] = "vigente";
$tdatacat_finanzas_movimientos_categoria_sub[".googleLikeFields"][] = "time_stamp";
$tdatacat_finanzas_movimientos_categoria_sub[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_finanzas_movimientos_categoria_sub[".tableType"] = "list";

$tdatacat_finanzas_movimientos_categoria_sub[".printerPageOrientation"] = 0;
$tdatacat_finanzas_movimientos_categoria_sub[".nPrinterPageScale"] = 100;

$tdatacat_finanzas_movimientos_categoria_sub[".nPrinterSplitRecords"] = 40;

$tdatacat_finanzas_movimientos_categoria_sub[".geocodingEnabled"] = false;





$tdatacat_finanzas_movimientos_categoria_sub[".isResizeColumns"] = true;





$tdatacat_finanzas_movimientos_categoria_sub[".pageSize"] = 20;

$tdatacat_finanzas_movimientos_categoria_sub[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_finanzas_movimientos_categoria_sub[".strOrderBy"] = $tstrOrderBy;

$tdatacat_finanzas_movimientos_categoria_sub[".orderindexes"] = array();


$tdatacat_finanzas_movimientos_categoria_sub[".sqlHead"] = "SELECT cat_finanzas_movimientos_categoria_sub.cat_finanzas_movimientos_categoria_sub_id,  cat_finanzas_movimientos_categoria_sub.descripcion_sub_categoria,  cat_finanzas_movimientos_categoria_sub.capturista,  cat_finanzas_movimientos_categoria_sub.fecha_de_captura,  cat_finanzas_movimientos_categoria_sub.vigente,  cat_finanzas_movimientos_categoria_sub.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_finanzas_movimientos_categoria_sub[".sqlFrom"] = "FROM cat_finanzas_movimientos_categoria_sub  INNER JOIN cat_usuarios ON cat_finanzas_movimientos_categoria_sub.capturista = cat_usuarios.usuario";
$tdatacat_finanzas_movimientos_categoria_sub[".sqlWhereExpr"] = "(cat_finanzas_movimientos_categoria_sub.vigente =1)";
$tdatacat_finanzas_movimientos_categoria_sub[".sqlTail"] = "";

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
$tdatacat_finanzas_movimientos_categoria_sub[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_finanzas_movimientos_categoria_sub[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_finanzas_movimientos_categoria_sub[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_finanzas_movimientos_categoria_sub[".highlightSearchResults"] = true;

$tableKeyscat_finanzas_movimientos_categoria_sub = array();
$tableKeyscat_finanzas_movimientos_categoria_sub[] = "cat_finanzas_movimientos_categoria_sub_id";
$tdatacat_finanzas_movimientos_categoria_sub[".Keys"] = $tableKeyscat_finanzas_movimientos_categoria_sub;


$tdatacat_finanzas_movimientos_categoria_sub[".hideMobileList"] = array();




//	cat_finanzas_movimientos_categoria_sub_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_movimientos_categoria_sub_id";
	$fdata["GoodName"] = "cat_finanzas_movimientos_categoria_sub_id";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria_sub";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos_categoria_sub","cat_finanzas_movimientos_categoria_sub_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_movimientos_categoria_sub_id";

		$fdata["sourceSingle"] = "cat_finanzas_movimientos_categoria_sub_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria_sub.cat_finanzas_movimientos_categoria_sub_id";

	
	
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


	$tdatacat_finanzas_movimientos_categoria_sub["cat_finanzas_movimientos_categoria_sub_id"] = $fdata;
		$tdatacat_finanzas_movimientos_categoria_sub[".searchableFields"][] = "cat_finanzas_movimientos_categoria_sub_id";
//	descripcion_sub_categoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_sub_categoria";
	$fdata["GoodName"] = "descripcion_sub_categoria";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria_sub";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos_categoria_sub","descripcion_sub_categoria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_sub_categoria";

		$fdata["sourceSingle"] = "descripcion_sub_categoria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria_sub.descripcion_sub_categoria";

	
	
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


	$tdatacat_finanzas_movimientos_categoria_sub["descripcion_sub_categoria"] = $fdata;
		$tdatacat_finanzas_movimientos_categoria_sub[".searchableFields"][] = "descripcion_sub_categoria";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria_sub";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos_categoria_sub","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria_sub.capturista";

	
	
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


	$tdatacat_finanzas_movimientos_categoria_sub["capturista"] = $fdata;
		$tdatacat_finanzas_movimientos_categoria_sub[".searchableFields"][] = "capturista";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria_sub";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos_categoria_sub","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria_sub.fecha_de_captura";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatacat_finanzas_movimientos_categoria_sub["fecha_de_captura"] = $fdata;
		$tdatacat_finanzas_movimientos_categoria_sub[".searchableFields"][] = "fecha_de_captura";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria_sub";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos_categoria_sub","vigente");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria_sub.vigente";

	
	
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


	$tdatacat_finanzas_movimientos_categoria_sub["vigente"] = $fdata;
		$tdatacat_finanzas_movimientos_categoria_sub[".searchableFields"][] = "vigente";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_finanzas_movimientos_categoria_sub";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos_categoria_sub","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_movimientos_categoria_sub.time_stamp";

	
	
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


	$tdatacat_finanzas_movimientos_categoria_sub["time_stamp"] = $fdata;
		$tdatacat_finanzas_movimientos_categoria_sub[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_movimientos_categoria_sub","cat_usuarios_licencias_id");
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


	$tdatacat_finanzas_movimientos_categoria_sub["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_finanzas_movimientos_categoria_sub[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_finanzas_movimientos_categoria_sub"]=&$tdatacat_finanzas_movimientos_categoria_sub;
$field_labels["cat_finanzas_movimientos_categoria_sub"] = &$fieldLabelscat_finanzas_movimientos_categoria_sub;
$fieldToolTips["cat_finanzas_movimientos_categoria_sub"] = &$fieldToolTipscat_finanzas_movimientos_categoria_sub;
$placeHolders["cat_finanzas_movimientos_categoria_sub"] = &$placeHolderscat_finanzas_movimientos_categoria_sub;
$page_titles["cat_finanzas_movimientos_categoria_sub"] = &$pageTitlescat_finanzas_movimientos_categoria_sub;


changeTextControlsToDate( "cat_finanzas_movimientos_categoria_sub" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_finanzas_movimientos_categoria_sub"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_finanzas_movimientos_categoria_sub"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_finanzas_movimientos_categoria_sub()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_movimientos_categoria_sub.cat_finanzas_movimientos_categoria_sub_id,  cat_finanzas_movimientos_categoria_sub.descripcion_sub_categoria,  cat_finanzas_movimientos_categoria_sub.capturista,  cat_finanzas_movimientos_categoria_sub.fecha_de_captura,  cat_finanzas_movimientos_categoria_sub.vigente,  cat_finanzas_movimientos_categoria_sub.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_movimientos_categoria_sub  INNER JOIN cat_usuarios ON cat_finanzas_movimientos_categoria_sub.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_finanzas_movimientos_categoria_sub.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_finanzas_movimientos_categoria_sub.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_movimientos_categoria_sub",
	"m_srcTableName" => "cat_finanzas_movimientos_categoria_sub"
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
	"m_strName" => "cat_finanzas_movimientos_categoria_sub_id",
	"m_strTable" => "cat_finanzas_movimientos_categoria_sub",
	"m_srcTableName" => "cat_finanzas_movimientos_categoria_sub"
));

$proto6["m_sql"] = "cat_finanzas_movimientos_categoria_sub.cat_finanzas_movimientos_categoria_sub_id";
$proto6["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_sub_categoria",
	"m_strTable" => "cat_finanzas_movimientos_categoria_sub",
	"m_srcTableName" => "cat_finanzas_movimientos_categoria_sub"
));

$proto8["m_sql"] = "cat_finanzas_movimientos_categoria_sub.descripcion_sub_categoria";
$proto8["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_finanzas_movimientos_categoria_sub",
	"m_srcTableName" => "cat_finanzas_movimientos_categoria_sub"
));

$proto10["m_sql"] = "cat_finanzas_movimientos_categoria_sub.capturista";
$proto10["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "cat_finanzas_movimientos_categoria_sub",
	"m_srcTableName" => "cat_finanzas_movimientos_categoria_sub"
));

$proto12["m_sql"] = "cat_finanzas_movimientos_categoria_sub.fecha_de_captura";
$proto12["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_movimientos_categoria_sub",
	"m_srcTableName" => "cat_finanzas_movimientos_categoria_sub"
));

$proto14["m_sql"] = "cat_finanzas_movimientos_categoria_sub.vigente";
$proto14["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_finanzas_movimientos_categoria_sub",
	"m_srcTableName" => "cat_finanzas_movimientos_categoria_sub"
));

$proto16["m_sql"] = "cat_finanzas_movimientos_categoria_sub.time_stamp";
$proto16["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_movimientos_categoria_sub"
));

$proto18["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto18["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "cat_finanzas_movimientos_categoria_sub";
$proto21["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_finanzas_movimientos_categoria_sub_id";
$proto21["m_columns"][] = "descripcion_sub_categoria";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "fecha_de_captura";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "cat_finanzas_movimientos_categoria_sub";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
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
$proto25["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
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
$proto24["m_sql"] = "INNER JOIN cat_usuarios ON cat_finanzas_movimientos_categoria_sub.capturista = cat_usuarios.usuario";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cat_finanzas_movimientos_categoria_sub";
$proto26=array();
$proto26["m_sql"] = "cat_usuarios.usuario = cat_finanzas_movimientos_categoria_sub.capturista";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_movimientos_categoria_sub"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= cat_finanzas_movimientos_categoria_sub.capturista";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_finanzas_movimientos_categoria_sub";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_finanzas_movimientos_categoria_sub = createSqlQuery_cat_finanzas_movimientos_categoria_sub();


	
		;

							

$tdatacat_finanzas_movimientos_categoria_sub[".sqlquery"] = $queryData_cat_finanzas_movimientos_categoria_sub;



$tdatacat_finanzas_movimientos_categoria_sub[".hasEvents"] = false;

?>