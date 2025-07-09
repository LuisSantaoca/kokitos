<?php
$tdatacat_ventas_productos_unidades_de_venta = array();
$tdatacat_ventas_productos_unidades_de_venta[".searchableFields"] = array();
$tdatacat_ventas_productos_unidades_de_venta[".ShortName"] = "cat_ventas_productos_unidades_de_venta";
$tdatacat_ventas_productos_unidades_de_venta[".OwnerID"] = "";
$tdatacat_ventas_productos_unidades_de_venta[".OriginalTable"] = "cat_ventas_productos_unidades_de_venta";


$tdatacat_ventas_productos_unidades_de_venta[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_productos_unidades_de_venta[".originalPagesByType"] = $tdatacat_ventas_productos_unidades_de_venta[".pagesByType"];
$tdatacat_ventas_productos_unidades_de_venta[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_productos_unidades_de_venta[".originalPages"] = $tdatacat_ventas_productos_unidades_de_venta[".pages"];
$tdatacat_ventas_productos_unidades_de_venta[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_ventas_productos_unidades_de_venta[".originalDefaultPages"] = $tdatacat_ventas_productos_unidades_de_venta[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_unidades_de_venta = array();
$fieldToolTipscat_ventas_productos_unidades_de_venta = array();
$pageTitlescat_ventas_productos_unidades_de_venta = array();
$placeHolderscat_ventas_productos_unidades_de_venta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_unidades_de_venta["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_unidades_de_venta["Spanish"] = array();
	$placeHolderscat_ventas_productos_unidades_de_venta["Spanish"] = array();
	$pageTitlescat_ventas_productos_unidades_de_venta["Spanish"] = array();
	$fieldLabelscat_ventas_productos_unidades_de_venta["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_unidades_de_venta["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_unidades_de_venta["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_venta["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_unidades_de_venta["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_unidades_de_venta["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_venta["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_unidades_de_venta["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_unidades_de_venta["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_venta["Spanish"]["descripcion_ventas_productos_unidades_de_venta"] = "Descripcion Ventas Productos Unidades De Venta";
	$fieldToolTipscat_ventas_productos_unidades_de_venta["Spanish"]["descripcion_ventas_productos_unidades_de_venta"] = "";
	$placeHolderscat_ventas_productos_unidades_de_venta["Spanish"]["descripcion_ventas_productos_unidades_de_venta"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_venta["Spanish"]["cat_ventas_productos_unidades_de_venta_id"] = "Id";
	$fieldToolTipscat_ventas_productos_unidades_de_venta["Spanish"]["cat_ventas_productos_unidades_de_venta_id"] = "";
	$placeHolderscat_ventas_productos_unidades_de_venta["Spanish"]["cat_ventas_productos_unidades_de_venta_id"] = "";
	$fieldLabelscat_ventas_productos_unidades_de_venta["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_ventas_productos_unidades_de_venta["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_ventas_productos_unidades_de_venta["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_ventas_productos_unidades_de_venta["Spanish"]))
		$tdatacat_ventas_productos_unidades_de_venta[".isUseToolTips"] = true;
}





$tdatacat_ventas_productos_unidades_de_venta[".shortTableName"] = "cat_ventas_productos_unidades_de_venta";
$tdatacat_ventas_productos_unidades_de_venta[".nSecOptions"] = 0;

$tdatacat_ventas_productos_unidades_de_venta[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_unidades_de_venta[".entityType"] = 0;
$tdatacat_ventas_productos_unidades_de_venta[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_unidades_de_venta[".strOriginalTableName"] = "cat_ventas_productos_unidades_de_venta";

	



$tdatacat_ventas_productos_unidades_de_venta[".showAddInPopup"] = false;

$tdatacat_ventas_productos_unidades_de_venta[".showEditInPopup"] = false;

$tdatacat_ventas_productos_unidades_de_venta[".showViewInPopup"] = false;

$tdatacat_ventas_productos_unidades_de_venta[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_unidades_de_venta[".listAjax"] = false;

	$tdatacat_ventas_productos_unidades_de_venta[".audit"] = true;

	$tdatacat_ventas_productos_unidades_de_venta[".locking"] = true;


$pages = $tdatacat_ventas_productos_unidades_de_venta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_unidades_de_venta[".edit"] = true;
	$tdatacat_ventas_productos_unidades_de_venta[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_unidades_de_venta[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_unidades_de_venta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_unidades_de_venta[".add"] = true;
$tdatacat_ventas_productos_unidades_de_venta[".afterAddAction"] = 1;
$tdatacat_ventas_productos_unidades_de_venta[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_unidades_de_venta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_unidades_de_venta[".list"] = true;
}



$tdatacat_ventas_productos_unidades_de_venta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_unidades_de_venta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_unidades_de_venta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_unidades_de_venta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_unidades_de_venta[".printFriendly"] = true;
}



$tdatacat_ventas_productos_unidades_de_venta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_unidades_de_venta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_unidades_de_venta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_unidades_de_venta[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_unidades_de_venta[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_unidades_de_venta[".buttonsAdded"] = false;

$tdatacat_ventas_productos_unidades_de_venta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_unidades_de_venta[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_unidades_de_venta[".badgeColor"] = "B22222";


$tdatacat_ventas_productos_unidades_de_venta[".allSearchFields"] = array();
$tdatacat_ventas_productos_unidades_de_venta[".filterFields"] = array();
$tdatacat_ventas_productos_unidades_de_venta[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_unidades_de_venta[".googleLikeFields"] = array();
$tdatacat_ventas_productos_unidades_de_venta[".googleLikeFields"][] = "cat_ventas_productos_unidades_de_venta_id";
$tdatacat_ventas_productos_unidades_de_venta[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_productos_unidades_de_venta[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_unidades_de_venta[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_unidades_de_venta[".googleLikeFields"][] = "descripcion_ventas_productos_unidades_de_venta";
$tdatacat_ventas_productos_unidades_de_venta[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_ventas_productos_unidades_de_venta[".tableType"] = "list";

$tdatacat_ventas_productos_unidades_de_venta[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_unidades_de_venta[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_unidades_de_venta[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_unidades_de_venta[".geocodingEnabled"] = false;





$tdatacat_ventas_productos_unidades_de_venta[".isResizeColumns"] = true;





$tdatacat_ventas_productos_unidades_de_venta[".pageSize"] = 20;

$tdatacat_ventas_productos_unidades_de_venta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_unidades_de_venta[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_unidades_de_venta[".orderindexes"] = array();


$tdatacat_ventas_productos_unidades_de_venta[".sqlHead"] = "SELECT cat_ventas_productos_unidades_de_venta.cat_ventas_productos_unidades_de_venta_id,  cat_ventas_productos_unidades_de_venta.time_stamp,  cat_ventas_productos_unidades_de_venta.vigente,  cat_ventas_productos_unidades_de_venta.capturista,  cat_ventas_productos_unidades_de_venta.descripcion_ventas_productos_unidades_de_venta,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_ventas_productos_unidades_de_venta[".sqlFrom"] = "FROM cat_ventas_productos_unidades_de_venta  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_unidades_de_venta.capturista = cat_usuarios.usuario";
$tdatacat_ventas_productos_unidades_de_venta[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_unidades_de_venta[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios.cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_ventas_productos_unidades_de_venta[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_unidades_de_venta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_unidades_de_venta[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_unidades_de_venta[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_unidades_de_venta = array();
$tableKeyscat_ventas_productos_unidades_de_venta[] = "cat_ventas_productos_unidades_de_venta_id";
$tdatacat_ventas_productos_unidades_de_venta[".Keys"] = $tableKeyscat_ventas_productos_unidades_de_venta;


$tdatacat_ventas_productos_unidades_de_venta[".hideMobileList"] = array();




//	cat_ventas_productos_unidades_de_venta_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_unidades_de_venta_id";
	$fdata["GoodName"] = "cat_ventas_productos_unidades_de_venta_id";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_venta";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_venta","cat_ventas_productos_unidades_de_venta_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_unidades_de_venta_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_unidades_de_venta_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_venta.cat_ventas_productos_unidades_de_venta_id";

	
	
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


	$tdatacat_ventas_productos_unidades_de_venta["cat_ventas_productos_unidades_de_venta_id"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_venta[".searchableFields"][] = "cat_ventas_productos_unidades_de_venta_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_venta";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_venta","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_venta.time_stamp";

	
	
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


	$tdatacat_ventas_productos_unidades_de_venta["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_venta[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_venta";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_venta","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_venta.vigente";

	
	
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


	$tdatacat_ventas_productos_unidades_de_venta["vigente"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_venta[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_venta";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_venta","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_venta.capturista";

	
	
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


	$tdatacat_ventas_productos_unidades_de_venta["capturista"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_venta[".searchableFields"][] = "capturista";
//	descripcion_ventas_productos_unidades_de_venta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_ventas_productos_unidades_de_venta";
	$fdata["GoodName"] = "descripcion_ventas_productos_unidades_de_venta";
	$fdata["ownerTable"] = "cat_ventas_productos_unidades_de_venta";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_venta","descripcion_ventas_productos_unidades_de_venta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_productos_unidades_de_venta";

		$fdata["sourceSingle"] = "descripcion_ventas_productos_unidades_de_venta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_unidades_de_venta.descripcion_ventas_productos_unidades_de_venta";

	
	
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


	$tdatacat_ventas_productos_unidades_de_venta["descripcion_ventas_productos_unidades_de_venta"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_venta[".searchableFields"][] = "descripcion_ventas_productos_unidades_de_venta";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_unidades_de_venta","cat_usuarios_licencias_id");
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


	$tdatacat_ventas_productos_unidades_de_venta["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_ventas_productos_unidades_de_venta[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_ventas_productos_unidades_de_venta"]=&$tdatacat_ventas_productos_unidades_de_venta;
$field_labels["cat_ventas_productos_unidades_de_venta"] = &$fieldLabelscat_ventas_productos_unidades_de_venta;
$fieldToolTips["cat_ventas_productos_unidades_de_venta"] = &$fieldToolTipscat_ventas_productos_unidades_de_venta;
$placeHolders["cat_ventas_productos_unidades_de_venta"] = &$placeHolderscat_ventas_productos_unidades_de_venta;
$page_titles["cat_ventas_productos_unidades_de_venta"] = &$pageTitlescat_ventas_productos_unidades_de_venta;


changeTextControlsToDate( "cat_ventas_productos_unidades_de_venta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_unidades_de_venta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_unidades_de_venta"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_unidades_de_venta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_unidades_de_venta.cat_ventas_productos_unidades_de_venta_id,  cat_ventas_productos_unidades_de_venta.time_stamp,  cat_ventas_productos_unidades_de_venta.vigente,  cat_ventas_productos_unidades_de_venta.capturista,  cat_ventas_productos_unidades_de_venta.descripcion_ventas_productos_unidades_de_venta,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_unidades_de_venta  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_unidades_de_venta.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_ventas_productos_unidades_de_venta_id",
	"m_strTable" => "cat_ventas_productos_unidades_de_venta",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_venta"
));

$proto6["m_sql"] = "cat_ventas_productos_unidades_de_venta.cat_ventas_productos_unidades_de_venta_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_unidades_de_venta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_unidades_de_venta",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_venta"
));

$proto8["m_sql"] = "cat_ventas_productos_unidades_de_venta.time_stamp";
$proto8["m_srcTableName"] = "cat_ventas_productos_unidades_de_venta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_unidades_de_venta",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_venta"
));

$proto10["m_sql"] = "cat_ventas_productos_unidades_de_venta.vigente";
$proto10["m_srcTableName"] = "cat_ventas_productos_unidades_de_venta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_unidades_de_venta",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_venta"
));

$proto12["m_sql"] = "cat_ventas_productos_unidades_de_venta.capturista";
$proto12["m_srcTableName"] = "cat_ventas_productos_unidades_de_venta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_unidades_de_venta",
	"m_strTable" => "cat_ventas_productos_unidades_de_venta",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_venta"
));

$proto14["m_sql"] = "cat_ventas_productos_unidades_de_venta.descripcion_ventas_productos_unidades_de_venta";
$proto14["m_srcTableName"] = "cat_ventas_productos_unidades_de_venta";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_venta"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_ventas_productos_unidades_de_venta";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_ventas_productos_unidades_de_venta";
$proto19["m_srcTableName"] = "cat_ventas_productos_unidades_de_venta";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_ventas_productos_unidades_de_venta_id";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "descripcion_ventas_productos_unidades_de_venta";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_ventas_productos_unidades_de_venta";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_ventas_productos_unidades_de_venta";
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
$proto23["m_srcTableName"] = "cat_ventas_productos_unidades_de_venta";
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
$proto22["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_unidades_de_venta.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_ventas_productos_unidades_de_venta";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_ventas_productos_unidades_de_venta.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_unidades_de_venta"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_ventas_productos_unidades_de_venta.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_unidades_de_venta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_unidades_de_venta = createSqlQuery_cat_ventas_productos_unidades_de_venta();


	
		;

						

$tdatacat_ventas_productos_unidades_de_venta[".sqlquery"] = $queryData_cat_ventas_productos_unidades_de_venta;



$tdatacat_ventas_productos_unidades_de_venta[".hasEvents"] = false;

?>