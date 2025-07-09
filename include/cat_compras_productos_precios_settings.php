<?php
$tdatacat_compras_productos_precios = array();
$tdatacat_compras_productos_precios[".searchableFields"] = array();
$tdatacat_compras_productos_precios[".ShortName"] = "cat_compras_productos_precios";
$tdatacat_compras_productos_precios[".OwnerID"] = "";
$tdatacat_compras_productos_precios[".OriginalTable"] = "cat_compras_productos_precios";


$tdatacat_compras_productos_precios[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_compras_productos_precios[".originalPagesByType"] = $tdatacat_compras_productos_precios[".pagesByType"];
$tdatacat_compras_productos_precios[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_compras_productos_precios[".originalPages"] = $tdatacat_compras_productos_precios[".pages"];
$tdatacat_compras_productos_precios[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_compras_productos_precios[".originalDefaultPages"] = $tdatacat_compras_productos_precios[".defaultPages"];

//	field labels
$fieldLabelscat_compras_productos_precios = array();
$fieldToolTipscat_compras_productos_precios = array();
$pageTitlescat_compras_productos_precios = array();
$placeHolderscat_compras_productos_precios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_compras_productos_precios["Spanish"] = array();
	$fieldToolTipscat_compras_productos_precios["Spanish"] = array();
	$placeHolderscat_compras_productos_precios["Spanish"] = array();
	$pageTitlescat_compras_productos_precios["Spanish"] = array();
	$fieldLabelscat_compras_productos_precios["Spanish"]["cat_compras_productos_precios_id"] = "Id";
	$fieldToolTipscat_compras_productos_precios["Spanish"]["cat_compras_productos_precios_id"] = "";
	$placeHolderscat_compras_productos_precios["Spanish"]["cat_compras_productos_precios_id"] = "";
	$fieldLabelscat_compras_productos_precios["Spanish"]["id_producto"] = "Producto";
	$fieldToolTipscat_compras_productos_precios["Spanish"]["id_producto"] = "";
	$placeHolderscat_compras_productos_precios["Spanish"]["id_producto"] = "";
	$fieldLabelscat_compras_productos_precios["Spanish"]["descripcion_producto"] = "Descripcion Producto";
	$fieldToolTipscat_compras_productos_precios["Spanish"]["descripcion_producto"] = "";
	$placeHolderscat_compras_productos_precios["Spanish"]["descripcion_producto"] = "";
	$fieldLabelscat_compras_productos_precios["Spanish"]["PRECIO"] = "PRECIO";
	$fieldToolTipscat_compras_productos_precios["Spanish"]["PRECIO"] = "";
	$placeHolderscat_compras_productos_precios["Spanish"]["PRECIO"] = "";
	$fieldLabelscat_compras_productos_precios["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_compras_productos_precios["Spanish"]["vigente"] = "";
	$placeHolderscat_compras_productos_precios["Spanish"]["vigente"] = "";
	$fieldLabelscat_compras_productos_precios["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_compras_productos_precios["Spanish"]["capturista"] = "";
	$placeHolderscat_compras_productos_precios["Spanish"]["capturista"] = "";
	$fieldLabelscat_compras_productos_precios["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_compras_productos_precios["Spanish"]["time_stamp"] = "";
	$placeHolderscat_compras_productos_precios["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_compras_productos_precios["Spanish"]["fecha_de_captura"] = "Fecha De Captura";
	$fieldToolTipscat_compras_productos_precios["Spanish"]["fecha_de_captura"] = "";
	$placeHolderscat_compras_productos_precios["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelscat_compras_productos_precios["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_compras_productos_precios["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_compras_productos_precios["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_compras_productos_precios["Spanish"]["id"] = "Id";
	$fieldToolTipscat_compras_productos_precios["Spanish"]["id"] = "";
	$placeHolderscat_compras_productos_precios["Spanish"]["id"] = "";
	if (count($fieldToolTipscat_compras_productos_precios["Spanish"]))
		$tdatacat_compras_productos_precios[".isUseToolTips"] = true;
}





$tdatacat_compras_productos_precios[".shortTableName"] = "cat_compras_productos_precios";
$tdatacat_compras_productos_precios[".nSecOptions"] = 0;

$tdatacat_compras_productos_precios[".mainTableOwnerID"] = "";
$tdatacat_compras_productos_precios[".entityType"] = 0;
$tdatacat_compras_productos_precios[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_compras_productos_precios[".strOriginalTableName"] = "cat_compras_productos_precios";

	



$tdatacat_compras_productos_precios[".showAddInPopup"] = false;

$tdatacat_compras_productos_precios[".showEditInPopup"] = false;

$tdatacat_compras_productos_precios[".showViewInPopup"] = false;

$tdatacat_compras_productos_precios[".listAjax"] = false;
//	temporary
//$tdatacat_compras_productos_precios[".listAjax"] = false;

	$tdatacat_compras_productos_precios[".audit"] = false;

	$tdatacat_compras_productos_precios[".locking"] = false;


$pages = $tdatacat_compras_productos_precios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_compras_productos_precios[".edit"] = true;
	$tdatacat_compras_productos_precios[".afterEditAction"] = 1;
	$tdatacat_compras_productos_precios[".closePopupAfterEdit"] = 1;
	$tdatacat_compras_productos_precios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_compras_productos_precios[".add"] = true;
$tdatacat_compras_productos_precios[".afterAddAction"] = 1;
$tdatacat_compras_productos_precios[".closePopupAfterAdd"] = 1;
$tdatacat_compras_productos_precios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_compras_productos_precios[".list"] = true;
}



$tdatacat_compras_productos_precios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_compras_productos_precios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_compras_productos_precios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_compras_productos_precios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_compras_productos_precios[".printFriendly"] = true;
}



$tdatacat_compras_productos_precios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_compras_productos_precios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_compras_productos_precios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_compras_productos_precios[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_compras_productos_precios[".ajaxCodeSnippetAdded"] = false;

$tdatacat_compras_productos_precios[".buttonsAdded"] = false;

$tdatacat_compras_productos_precios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_compras_productos_precios[".isUseTimeForSearch"] = false;


$tdatacat_compras_productos_precios[".badgeColor"] = "778899";


$tdatacat_compras_productos_precios[".allSearchFields"] = array();
$tdatacat_compras_productos_precios[".filterFields"] = array();
$tdatacat_compras_productos_precios[".requiredSearchFields"] = array();

$tdatacat_compras_productos_precios[".googleLikeFields"] = array();
$tdatacat_compras_productos_precios[".googleLikeFields"][] = "cat_compras_productos_precios_id";
$tdatacat_compras_productos_precios[".googleLikeFields"][] = "id";
$tdatacat_compras_productos_precios[".googleLikeFields"][] = "id_producto";
$tdatacat_compras_productos_precios[".googleLikeFields"][] = "descripcion_producto";
$tdatacat_compras_productos_precios[".googleLikeFields"][] = "PRECIO";
$tdatacat_compras_productos_precios[".googleLikeFields"][] = "vigente";
$tdatacat_compras_productos_precios[".googleLikeFields"][] = "capturista";
$tdatacat_compras_productos_precios[".googleLikeFields"][] = "time_stamp";
$tdatacat_compras_productos_precios[".googleLikeFields"][] = "fecha_de_captura";
$tdatacat_compras_productos_precios[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_compras_productos_precios[".tableType"] = "list";

$tdatacat_compras_productos_precios[".printerPageOrientation"] = 0;
$tdatacat_compras_productos_precios[".nPrinterPageScale"] = 100;

$tdatacat_compras_productos_precios[".nPrinterSplitRecords"] = 40;

$tdatacat_compras_productos_precios[".geocodingEnabled"] = false;





$tdatacat_compras_productos_precios[".isResizeColumns"] = true;





$tdatacat_compras_productos_precios[".pageSize"] = 20;

$tdatacat_compras_productos_precios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_compras_productos_precios[".strOrderBy"] = $tstrOrderBy;

$tdatacat_compras_productos_precios[".orderindexes"] = array();


$tdatacat_compras_productos_precios[".sqlHead"] = "SELECT cat_compras_productos_precios.cat_compras_productos_precios_id,  cat_compras_productos_precios.id_producto AS id,  cat_compras_productos_precios.id_producto,  cat_compras_productos_precios.descripcion_producto,  cat_compras_productos_precios.PRECIO,  cat_compras_productos_precios.vigente,  cat_compras_productos_precios.capturista,  cat_compras_productos_precios.time_stamp,  cat_compras_productos_precios.fecha_de_captura,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_compras_productos_precios[".sqlFrom"] = "FROM cat_compras_productos_precios  INNER JOIN cat_usuarios ON cat_compras_productos_precios.capturista = cat_usuarios.usuario";
$tdatacat_compras_productos_precios[".sqlWhereExpr"] = "";
$tdatacat_compras_productos_precios[".sqlTail"] = "";

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
$tdatacat_compras_productos_precios[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_compras_productos_precios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_compras_productos_precios[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_compras_productos_precios[".highlightSearchResults"] = true;

$tableKeyscat_compras_productos_precios = array();
$tableKeyscat_compras_productos_precios[] = "cat_compras_productos_precios_id";
$tdatacat_compras_productos_precios[".Keys"] = $tableKeyscat_compras_productos_precios;


$tdatacat_compras_productos_precios[".hideMobileList"] = array();




//	cat_compras_productos_precios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_productos_precios_id";
	$fdata["GoodName"] = "cat_compras_productos_precios_id";
	$fdata["ownerTable"] = "cat_compras_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos_precios","cat_compras_productos_precios_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_productos_precios_id";

		$fdata["sourceSingle"] = "cat_compras_productos_precios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_precios.cat_compras_productos_precios_id";

	
	
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


	$tdatacat_compras_productos_precios["cat_compras_productos_precios_id"] = $fdata;
		$tdatacat_compras_productos_precios[".searchableFields"][] = "cat_compras_productos_precios_id";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cat_compras_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos_precios","id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_producto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_precios.id_producto";

	
	
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


	$tdatacat_compras_productos_precios["id"] = $fdata;
		$tdatacat_compras_productos_precios[".searchableFields"][] = "id";
//	id_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_producto";
	$fdata["GoodName"] = "id_producto";
	$fdata["ownerTable"] = "cat_compras_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos_precios","id_producto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_producto";

		$fdata["sourceSingle"] = "id_producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_precios.id_producto";

	
	
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
	$edata["LookupTable"] = "box_cat_compras_productos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_productos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_producto";

	

	
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


	$tdatacat_compras_productos_precios["id_producto"] = $fdata;
		$tdatacat_compras_productos_precios[".searchableFields"][] = "id_producto";
//	descripcion_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "descripcion_producto";
	$fdata["GoodName"] = "descripcion_producto";
	$fdata["ownerTable"] = "cat_compras_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos_precios","descripcion_producto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_producto";

		$fdata["sourceSingle"] = "descripcion_producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_precios.descripcion_producto";

	
	
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


	$tdatacat_compras_productos_precios["descripcion_producto"] = $fdata;
		$tdatacat_compras_productos_precios[".searchableFields"][] = "descripcion_producto";
//	PRECIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PRECIO";
	$fdata["GoodName"] = "PRECIO";
	$fdata["ownerTable"] = "cat_compras_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos_precios","PRECIO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PRECIO";

		$fdata["sourceSingle"] = "PRECIO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_precios.PRECIO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacat_compras_productos_precios["PRECIO"] = $fdata;
		$tdatacat_compras_productos_precios[".searchableFields"][] = "PRECIO";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos_precios","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_precios.vigente";

	
	
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


	$tdatacat_compras_productos_precios["vigente"] = $fdata;
		$tdatacat_compras_productos_precios[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos_precios","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_precios.capturista";

	
	
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


	$tdatacat_compras_productos_precios["capturista"] = $fdata;
		$tdatacat_compras_productos_precios[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_compras_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos_precios","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_precios.time_stamp";

	
	
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


	$tdatacat_compras_productos_precios["time_stamp"] = $fdata;
		$tdatacat_compras_productos_precios[".searchableFields"][] = "time_stamp";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "cat_compras_productos_precios";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos_precios","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_precios.fecha_de_captura";

	
	
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


	$tdatacat_compras_productos_precios["fecha_de_captura"] = $fdata;
		$tdatacat_compras_productos_precios[".searchableFields"][] = "fecha_de_captura";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos_precios","cat_usuarios_licencias_id");
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


	$tdatacat_compras_productos_precios["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_compras_productos_precios[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_compras_productos_precios"]=&$tdatacat_compras_productos_precios;
$field_labels["cat_compras_productos_precios"] = &$fieldLabelscat_compras_productos_precios;
$fieldToolTips["cat_compras_productos_precios"] = &$fieldToolTipscat_compras_productos_precios;
$placeHolders["cat_compras_productos_precios"] = &$placeHolderscat_compras_productos_precios;
$page_titles["cat_compras_productos_precios"] = &$pageTitlescat_compras_productos_precios;


changeTextControlsToDate( "cat_compras_productos_precios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_compras_productos_precios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_compras_productos_precios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_compras_productos_precios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_productos_precios.cat_compras_productos_precios_id,  cat_compras_productos_precios.id_producto AS id,  cat_compras_productos_precios.id_producto,  cat_compras_productos_precios.descripcion_producto,  cat_compras_productos_precios.PRECIO,  cat_compras_productos_precios.vigente,  cat_compras_productos_precios.capturista,  cat_compras_productos_precios.time_stamp,  cat_compras_productos_precios.fecha_de_captura,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_compras_productos_precios  INNER JOIN cat_usuarios ON cat_compras_productos_precios.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_compras_productos_precios_id",
	"m_strTable" => "cat_compras_productos_precios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto6["m_sql"] = "cat_compras_productos_precios.cat_compras_productos_precios_id";
$proto6["m_srcTableName"] = "cat_compras_productos_precios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_producto",
	"m_strTable" => "cat_compras_productos_precios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto8["m_sql"] = "cat_compras_productos_precios.id_producto";
$proto8["m_srcTableName"] = "cat_compras_productos_precios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "id";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_producto",
	"m_strTable" => "cat_compras_productos_precios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto10["m_sql"] = "cat_compras_productos_precios.id_producto";
$proto10["m_srcTableName"] = "cat_compras_productos_precios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_producto",
	"m_strTable" => "cat_compras_productos_precios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto12["m_sql"] = "cat_compras_productos_precios.descripcion_producto";
$proto12["m_srcTableName"] = "cat_compras_productos_precios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PRECIO",
	"m_strTable" => "cat_compras_productos_precios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto14["m_sql"] = "cat_compras_productos_precios.PRECIO";
$proto14["m_srcTableName"] = "cat_compras_productos_precios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_productos_precios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto16["m_sql"] = "cat_compras_productos_precios.vigente";
$proto16["m_srcTableName"] = "cat_compras_productos_precios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_productos_precios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto18["m_sql"] = "cat_compras_productos_precios.capturista";
$proto18["m_srcTableName"] = "cat_compras_productos_precios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_compras_productos_precios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto20["m_sql"] = "cat_compras_productos_precios.time_stamp";
$proto20["m_srcTableName"] = "cat_compras_productos_precios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "cat_compras_productos_precios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto22["m_sql"] = "cat_compras_productos_precios.fecha_de_captura";
$proto22["m_srcTableName"] = "cat_compras_productos_precios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto24["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto24["m_srcTableName"] = "cat_compras_productos_precios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "cat_compras_productos_precios";
$proto27["m_srcTableName"] = "cat_compras_productos_precios";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "cat_compras_productos_precios_id";
$proto27["m_columns"][] = "id_producto";
$proto27["m_columns"][] = "descripcion_producto";
$proto27["m_columns"][] = "PRECIO";
$proto27["m_columns"][] = "vigente";
$proto27["m_columns"][] = "capturista";
$proto27["m_columns"][] = "time_stamp";
$proto27["m_columns"][] = "fecha_de_captura";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "cat_compras_productos_precios";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "cat_compras_productos_precios";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "cat_usuarios";
$proto31["m_srcTableName"] = "cat_compras_productos_precios";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "cat_usuarios_id";
$proto31["m_columns"][] = "time_stamp";
$proto31["m_columns"][] = "vigente";
$proto31["m_columns"][] = "capturista";
$proto31["m_columns"][] = "usuario";
$proto31["m_columns"][] = "cat_usuarios_licencias_id";
$proto31["m_columns"][] = "pass";
$proto31["m_columns"][] = "nombre";
$proto31["m_columns"][] = "correo";
$proto31["m_columns"][] = "cat_trabajadores_altas_id";
$proto31["m_columns"][] = "res_autorizacion";
$proto31["m_columns"][] = "session";
$proto31["m_columns"][] = "tipo";
$proto31["m_columns"][] = "session_v2";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN cat_usuarios ON cat_compras_productos_precios.capturista = cat_usuarios.usuario";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "cat_compras_productos_precios";
$proto32=array();
$proto32["m_sql"] = "cat_usuarios.usuario = cat_compras_productos_precios.capturista";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_compras_productos_precios"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= cat_compras_productos_precios.capturista";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_compras_productos_precios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_compras_productos_precios = createSqlQuery_cat_compras_productos_precios();


	
		;

										

$tdatacat_compras_productos_precios[".sqlquery"] = $queryData_cat_compras_productos_precios;



$tdatacat_compras_productos_precios[".hasEvents"] = false;

?>