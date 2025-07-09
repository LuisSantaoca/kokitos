<?php
$tdatabox_cat_compras_productos_app = array();
$tdatabox_cat_compras_productos_app[".searchableFields"] = array();
$tdatabox_cat_compras_productos_app[".ShortName"] = "box_cat_compras_productos_app";
$tdatabox_cat_compras_productos_app[".OwnerID"] = "";
$tdatabox_cat_compras_productos_app[".OriginalTable"] = "cat_compras_productos";


$tdatabox_cat_compras_productos_app[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_compras_productos_app[".originalPagesByType"] = $tdatabox_cat_compras_productos_app[".pagesByType"];
$tdatabox_cat_compras_productos_app[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_compras_productos_app[".originalPages"] = $tdatabox_cat_compras_productos_app[".pages"];
$tdatabox_cat_compras_productos_app[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_compras_productos_app[".originalDefaultPages"] = $tdatabox_cat_compras_productos_app[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_compras_productos_app = array();
$fieldToolTipsbox_cat_compras_productos_app = array();
$pageTitlesbox_cat_compras_productos_app = array();
$placeHoldersbox_cat_compras_productos_app = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_compras_productos_app["Spanish"] = array();
	$fieldToolTipsbox_cat_compras_productos_app["Spanish"] = array();
	$placeHoldersbox_cat_compras_productos_app["Spanish"] = array();
	$pageTitlesbox_cat_compras_productos_app["Spanish"] = array();
	$fieldLabelsbox_cat_compras_productos_app["Spanish"]["cat_compras_productos_id"] = "Id";
	$fieldToolTipsbox_cat_compras_productos_app["Spanish"]["cat_compras_productos_id"] = "";
	$placeHoldersbox_cat_compras_productos_app["Spanish"]["cat_compras_productos_id"] = "";
	$fieldLabelsbox_cat_compras_productos_app["Spanish"]["producto"] = "Producto";
	$fieldToolTipsbox_cat_compras_productos_app["Spanish"]["producto"] = "";
	$placeHoldersbox_cat_compras_productos_app["Spanish"]["producto"] = "";
	$fieldLabelsbox_cat_compras_productos_app["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_compras_productos_app["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_compras_productos_app["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_cat_compras_productos_app["Spanish"]["upc"] = "Upc";
	$fieldToolTipsbox_cat_compras_productos_app["Spanish"]["upc"] = "";
	$placeHoldersbox_cat_compras_productos_app["Spanish"]["upc"] = "";
	$fieldLabelsbox_cat_compras_productos_app["Spanish"]["sku"] = "Sku";
	$fieldToolTipsbox_cat_compras_productos_app["Spanish"]["sku"] = "";
	$placeHoldersbox_cat_compras_productos_app["Spanish"]["sku"] = "";
	if (count($fieldToolTipsbox_cat_compras_productos_app["Spanish"]))
		$tdatabox_cat_compras_productos_app[".isUseToolTips"] = true;
}





$tdatabox_cat_compras_productos_app[".shortTableName"] = "box_cat_compras_productos_app";
$tdatabox_cat_compras_productos_app[".nSecOptions"] = 0;

$tdatabox_cat_compras_productos_app[".mainTableOwnerID"] = "";
$tdatabox_cat_compras_productos_app[".entityType"] = 1;
$tdatabox_cat_compras_productos_app[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_compras_productos_app[".strOriginalTableName"] = "cat_compras_productos";

	



$tdatabox_cat_compras_productos_app[".showAddInPopup"] = false;

$tdatabox_cat_compras_productos_app[".showEditInPopup"] = false;

$tdatabox_cat_compras_productos_app[".showViewInPopup"] = false;

$tdatabox_cat_compras_productos_app[".listAjax"] = false;
//	temporary
//$tdatabox_cat_compras_productos_app[".listAjax"] = false;

	$tdatabox_cat_compras_productos_app[".audit"] = true;

	$tdatabox_cat_compras_productos_app[".locking"] = true;


$pages = $tdatabox_cat_compras_productos_app[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_compras_productos_app[".edit"] = true;
	$tdatabox_cat_compras_productos_app[".afterEditAction"] = 1;
	$tdatabox_cat_compras_productos_app[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_compras_productos_app[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_compras_productos_app[".add"] = true;
$tdatabox_cat_compras_productos_app[".afterAddAction"] = 1;
$tdatabox_cat_compras_productos_app[".closePopupAfterAdd"] = 1;
$tdatabox_cat_compras_productos_app[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_compras_productos_app[".list"] = true;
}



$tdatabox_cat_compras_productos_app[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_compras_productos_app[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_compras_productos_app[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_compras_productos_app[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_compras_productos_app[".printFriendly"] = true;
}



$tdatabox_cat_compras_productos_app[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_compras_productos_app[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_compras_productos_app[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_compras_productos_app[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_compras_productos_app[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_compras_productos_app[".buttonsAdded"] = false;

$tdatabox_cat_compras_productos_app[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_compras_productos_app[".isUseTimeForSearch"] = false;


$tdatabox_cat_compras_productos_app[".badgeColor"] = "EDCA00";


$tdatabox_cat_compras_productos_app[".allSearchFields"] = array();
$tdatabox_cat_compras_productos_app[".filterFields"] = array();
$tdatabox_cat_compras_productos_app[".requiredSearchFields"] = array();

$tdatabox_cat_compras_productos_app[".googleLikeFields"] = array();
$tdatabox_cat_compras_productos_app[".googleLikeFields"][] = "cat_compras_productos_id";
$tdatabox_cat_compras_productos_app[".googleLikeFields"][] = "producto";
$tdatabox_cat_compras_productos_app[".googleLikeFields"][] = "upc";
$tdatabox_cat_compras_productos_app[".googleLikeFields"][] = "sku";
$tdatabox_cat_compras_productos_app[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_compras_productos_app[".tableType"] = "list";

$tdatabox_cat_compras_productos_app[".printerPageOrientation"] = 0;
$tdatabox_cat_compras_productos_app[".nPrinterPageScale"] = 100;

$tdatabox_cat_compras_productos_app[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_compras_productos_app[".geocodingEnabled"] = false;





$tdatabox_cat_compras_productos_app[".isResizeColumns"] = true;





$tdatabox_cat_compras_productos_app[".pageSize"] = 20;

$tdatabox_cat_compras_productos_app[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_compras_productos_app[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_compras_productos_app[".orderindexes"] = array();


$tdatabox_cat_compras_productos_app[".sqlHead"] = "SELECT cat_compras_productos.cat_compras_productos_id,  concat(if(cat_compras_productos.descripcion_producto is null,0,cat_compras_productos.descripcion_producto), '-', if(cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion is null,0,cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion), '-', if(cat_compras_productos.contenido_neto_compras_productos is null,0,  cat_compras_productos.contenido_neto_compras_productos), '-', if(cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida is null,0,cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida)) AS producto,  cat_compras_productos.upc,  cat_compras_productos.sku,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_cat_compras_productos_app[".sqlFrom"] = "FROM cat_compras_productos  LEFT OUTER JOIN cat_usuarios ON cat_compras_productos.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_compras_productos_presentacion_mu ON cat_compras_productos.cat_compras_productos_presentacion_mu_id = cat_compras_productos_presentacion_mu.cat_compras_productos_presentacion_mu_id  LEFT OUTER JOIN cat_compras_productos_unidad_de_medida_mu ON cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id = cat_compras_productos_unidad_de_medida_mu.cat_compras_productos_unidad_de_medida_mu_id";
$tdatabox_cat_compras_productos_app[".sqlWhereExpr"] = "(cat_compras_productos.vigente =1)";
$tdatabox_cat_compras_productos_app[".sqlTail"] = "";

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
$tdatabox_cat_compras_productos_app[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_compras_productos_app[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_compras_productos_app[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_compras_productos_app[".highlightSearchResults"] = true;

$tableKeysbox_cat_compras_productos_app = array();
$tableKeysbox_cat_compras_productos_app[] = "cat_compras_productos_id";
$tdatabox_cat_compras_productos_app[".Keys"] = $tableKeysbox_cat_compras_productos_app;


$tdatabox_cat_compras_productos_app[".hideMobileList"] = array();




//	cat_compras_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_productos_id";
	$fdata["GoodName"] = "cat_compras_productos_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos_app","cat_compras_productos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_productos_id";

		$fdata["sourceSingle"] = "cat_compras_productos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_productos_id";

	
	
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


	$tdatabox_cat_compras_productos_app["cat_compras_productos_id"] = $fdata;
		$tdatabox_cat_compras_productos_app[".searchableFields"][] = "cat_compras_productos_id";
//	producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "producto";
	$fdata["GoodName"] = "producto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos_app","producto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "producto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(if(cat_compras_productos.descripcion_producto is null,0,cat_compras_productos.descripcion_producto), '-', if(cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion is null,0,cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion), '-', if(cat_compras_productos.contenido_neto_compras_productos is null,0,  cat_compras_productos.contenido_neto_compras_productos), '-', if(cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida is null,0,cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida))";

	
	
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


	$tdatabox_cat_compras_productos_app["producto"] = $fdata;
		$tdatabox_cat_compras_productos_app[".searchableFields"][] = "producto";
//	upc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "upc";
	$fdata["GoodName"] = "upc";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos_app","upc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "upc";

		$fdata["sourceSingle"] = "upc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.upc";

	
	
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


	$tdatabox_cat_compras_productos_app["upc"] = $fdata;
		$tdatabox_cat_compras_productos_app[".searchableFields"][] = "upc";
//	sku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sku";
	$fdata["GoodName"] = "sku";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos_app","sku");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sku";

		$fdata["sourceSingle"] = "sku";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.sku";

	
	
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


	$tdatabox_cat_compras_productos_app["sku"] = $fdata;
		$tdatabox_cat_compras_productos_app[".searchableFields"][] = "sku";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos_app","cat_usuarios_licencias_id");
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


	$tdatabox_cat_compras_productos_app["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_compras_productos_app[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_compras_productos_app"]=&$tdatabox_cat_compras_productos_app;
$field_labels["box_cat_compras_productos_app"] = &$fieldLabelsbox_cat_compras_productos_app;
$fieldToolTips["box_cat_compras_productos_app"] = &$fieldToolTipsbox_cat_compras_productos_app;
$placeHolders["box_cat_compras_productos_app"] = &$placeHoldersbox_cat_compras_productos_app;
$page_titles["box_cat_compras_productos_app"] = &$pageTitlesbox_cat_compras_productos_app;


changeTextControlsToDate( "box_cat_compras_productos_app" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_compras_productos_app"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_compras_productos_app"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_compras_productos_app()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_productos.cat_compras_productos_id,  concat(if(cat_compras_productos.descripcion_producto is null,0,cat_compras_productos.descripcion_producto), '-', if(cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion is null,0,cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion), '-', if(cat_compras_productos.contenido_neto_compras_productos is null,0,  cat_compras_productos.contenido_neto_compras_productos), '-', if(cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida is null,0,cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida)) AS producto,  cat_compras_productos.upc,  cat_compras_productos.sku,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_compras_productos  LEFT OUTER JOIN cat_usuarios ON cat_compras_productos.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_compras_productos_presentacion_mu ON cat_compras_productos.cat_compras_productos_presentacion_mu_id = cat_compras_productos_presentacion_mu.cat_compras_productos_presentacion_mu_id  LEFT OUTER JOIN cat_compras_productos_unidad_de_medida_mu ON cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id = cat_compras_productos_unidad_de_medida_mu.cat_compras_productos_unidad_de_medida_mu_id";
$proto0["m_strWhere"] = "(cat_compras_productos.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_compras_productos.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos_app"
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
	"m_strName" => "cat_compras_productos_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos_app"
));

$proto6["m_sql"] = "cat_compras_productos.cat_compras_productos_id";
$proto6["m_srcTableName"] = "box_cat_compras_productos_app";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(cat_compras_productos.descripcion_producto is null,0,cat_compras_productos.descripcion_producto)"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion is null,0,cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion)"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(cat_compras_productos.contenido_neto_compras_productos is null,0,  cat_compras_productos.contenido_neto_compras_productos)"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida is null,0,cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida)"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "concat(if(cat_compras_productos.descripcion_producto is null,0,cat_compras_productos.descripcion_producto), '-', if(cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion is null,0,cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion), '-', if(cat_compras_productos.contenido_neto_compras_productos is null,0,  cat_compras_productos.contenido_neto_compras_productos), '-', if(cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida is null,0,cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida))";
$proto8["m_srcTableName"] = "box_cat_compras_productos_app";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "producto";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "upc",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos_app"
));

$proto17["m_sql"] = "cat_compras_productos.upc";
$proto17["m_srcTableName"] = "box_cat_compras_productos_app";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "sku",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos_app"
));

$proto19["m_sql"] = "cat_compras_productos.sku";
$proto19["m_srcTableName"] = "box_cat_compras_productos_app";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_compras_productos_app"
));

$proto21["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto21["m_srcTableName"] = "box_cat_compras_productos_app";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "cat_compras_productos";
$proto24["m_srcTableName"] = "box_cat_compras_productos_app";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "cat_compras_productos_id";
$proto24["m_columns"][] = "time_stamp";
$proto24["m_columns"][] = "vigente";
$proto24["m_columns"][] = "capturista";
$proto24["m_columns"][] = "descripcion_producto";
$proto24["m_columns"][] = "cat_compras_productos_categorias_id";
$proto24["m_columns"][] = "upc";
$proto24["m_columns"][] = "sku";
$proto24["m_columns"][] = "modelo";
$proto24["m_columns"][] = "cat_compras_proveedores_id";
$proto24["m_columns"][] = "cat_compras_productos_presentacion_mu_id";
$proto24["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$proto24["m_columns"][] = "contenido_neto_compras_productos";
$proto24["m_columns"][] = "costo_neto_producto";
$proto24["m_columns"][] = "cat_compras_productos_presentacion_mu_id_conversion";
$proto24["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
$proto24["m_columns"][] = "contenido_neto_compras_productos_conversion";
$proto24["m_columns"][] = "cat_compras_productos_permitidos_id";
$proto24["m_columns"][] = "costo_unidad_de_medida";
$proto24["m_columns"][] = "fecha_de_actualizacion_costo_udm";
$proto24["m_columns"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "cat_compras_productos";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "box_cat_compras_productos_app";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
												$proto27=array();
$proto27["m_link"] = "SQLL_LEFTJOIN";
			$proto28=array();
$proto28["m_strName"] = "cat_usuarios";
$proto28["m_srcTableName"] = "box_cat_compras_productos_app";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "cat_usuarios_id";
$proto28["m_columns"][] = "time_stamp";
$proto28["m_columns"][] = "vigente";
$proto28["m_columns"][] = "capturista";
$proto28["m_columns"][] = "usuario";
$proto28["m_columns"][] = "cat_usuarios_licencias_id";
$proto28["m_columns"][] = "pass";
$proto28["m_columns"][] = "nombre";
$proto28["m_columns"][] = "correo";
$proto28["m_columns"][] = "cat_trabajadores_altas_id";
$proto28["m_columns"][] = "res_autorizacion";
$proto28["m_columns"][] = "session";
$proto28["m_columns"][] = "tipo";
$proto28["m_columns"][] = "session_v2";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_compras_productos.capturista = cat_usuarios.usuario";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "box_cat_compras_productos_app";
$proto29=array();
$proto29["m_sql"] = "cat_usuarios.usuario = cat_compras_productos.capturista";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_compras_productos_app"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= cat_compras_productos.capturista";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_LEFTJOIN";
			$proto32=array();
$proto32["m_strName"] = "cat_compras_productos_presentacion_mu";
$proto32["m_srcTableName"] = "box_cat_compras_productos_app";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "cat_compras_productos_presentacion_mu_id";
$proto32["m_columns"][] = "time_stamp";
$proto32["m_columns"][] = "vigente";
$proto32["m_columns"][] = "capturista";
$proto32["m_columns"][] = "descripcion_cat_compras_productos_presentacion";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "LEFT OUTER JOIN cat_compras_productos_presentacion_mu ON cat_compras_productos.cat_compras_productos_presentacion_mu_id = cat_compras_productos_presentacion_mu.cat_compras_productos_presentacion_mu_id";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "box_cat_compras_productos_app";
$proto33=array();
$proto33["m_sql"] = "cat_compras_productos_presentacion_mu.cat_compras_productos_presentacion_mu_id = cat_compras_productos.cat_compras_productos_presentacion_mu_id";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_presentacion_mu_id",
	"m_strTable" => "cat_compras_productos_presentacion_mu",
	"m_srcTableName" => "box_cat_compras_productos_app"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= cat_compras_productos.cat_compras_productos_presentacion_mu_id";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
												$proto35=array();
$proto35["m_link"] = "SQLL_LEFTJOIN";
			$proto36=array();
$proto36["m_strName"] = "cat_compras_productos_unidad_de_medida_mu";
$proto36["m_srcTableName"] = "box_cat_compras_productos_app";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$proto36["m_columns"][] = "time_stamp";
$proto36["m_columns"][] = "vigente";
$proto36["m_columns"][] = "capturista";
$proto36["m_columns"][] = "descripcion_cat_compras_productos_unidad_de_medida";
$proto36["m_columns"][] = "factor_de_conversion_costos";
$proto36["m_columns"][] = "cat_compras_productos_unidad_de_costo_mu_id";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "LEFT OUTER JOIN cat_compras_productos_unidad_de_medida_mu ON cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id = cat_compras_productos_unidad_de_medida_mu.cat_compras_productos_unidad_de_medida_mu_id";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "box_cat_compras_productos_app";
$proto37=array();
$proto37["m_sql"] = "cat_compras_productos_unidad_de_medida_mu.cat_compras_productos_unidad_de_medida_mu_id = cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_unidad_de_medida_mu_id",
	"m_strTable" => "cat_compras_productos_unidad_de_medida_mu",
	"m_srcTableName" => "box_cat_compras_productos_app"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_compras_productos_app";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_compras_productos_app = createSqlQuery_box_cat_compras_productos_app();


	
		;

					

$tdatabox_cat_compras_productos_app[".sqlquery"] = $queryData_box_cat_compras_productos_app;



$tdatabox_cat_compras_productos_app[".hasEvents"] = false;

?>