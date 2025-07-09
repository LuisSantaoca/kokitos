<?php
$tdatabox_cat_compras_productos = array();
$tdatabox_cat_compras_productos[".searchableFields"] = array();
$tdatabox_cat_compras_productos[".ShortName"] = "box_cat_compras_productos";
$tdatabox_cat_compras_productos[".OwnerID"] = "";
$tdatabox_cat_compras_productos[".OriginalTable"] = "cat_compras_productos";


$tdatabox_cat_compras_productos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_compras_productos[".originalPagesByType"] = $tdatabox_cat_compras_productos[".pagesByType"];
$tdatabox_cat_compras_productos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_compras_productos[".originalPages"] = $tdatabox_cat_compras_productos[".pages"];
$tdatabox_cat_compras_productos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_compras_productos[".originalDefaultPages"] = $tdatabox_cat_compras_productos[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_compras_productos = array();
$fieldToolTipsbox_cat_compras_productos = array();
$pageTitlesbox_cat_compras_productos = array();
$placeHoldersbox_cat_compras_productos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_compras_productos["Spanish"] = array();
	$fieldToolTipsbox_cat_compras_productos["Spanish"] = array();
	$placeHoldersbox_cat_compras_productos["Spanish"] = array();
	$pageTitlesbox_cat_compras_productos["Spanish"] = array();
	$fieldLabelsbox_cat_compras_productos["Spanish"]["cat_compras_productos_id"] = "Id";
	$fieldToolTipsbox_cat_compras_productos["Spanish"]["cat_compras_productos_id"] = "";
	$placeHoldersbox_cat_compras_productos["Spanish"]["cat_compras_productos_id"] = "";
	$fieldLabelsbox_cat_compras_productos["Spanish"]["producto"] = "Producto";
	$fieldToolTipsbox_cat_compras_productos["Spanish"]["producto"] = "";
	$placeHoldersbox_cat_compras_productos["Spanish"]["producto"] = "";
	$fieldLabelsbox_cat_compras_productos["Spanish"]["descripcion_producto"] = "Descripcion";
	$fieldToolTipsbox_cat_compras_productos["Spanish"]["descripcion_producto"] = "";
	$placeHoldersbox_cat_compras_productos["Spanish"]["descripcion_producto"] = "";
	$fieldLabelsbox_cat_compras_productos["Spanish"]["cat_compras_productos_presentacion_mu_id"] = "Presentacion";
	$fieldToolTipsbox_cat_compras_productos["Spanish"]["cat_compras_productos_presentacion_mu_id"] = "";
	$placeHoldersbox_cat_compras_productos["Spanish"]["cat_compras_productos_presentacion_mu_id"] = "";
	$fieldLabelsbox_cat_compras_productos["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "Unidad De Medida";
	$fieldToolTipsbox_cat_compras_productos["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "";
	$placeHoldersbox_cat_compras_productos["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "";
	$fieldLabelsbox_cat_compras_productos["Spanish"]["contenido_neto_compras_productos"] = "Contenido Neto";
	$fieldToolTipsbox_cat_compras_productos["Spanish"]["contenido_neto_compras_productos"] = "";
	$placeHoldersbox_cat_compras_productos["Spanish"]["contenido_neto_compras_productos"] = "";
	$fieldLabelsbox_cat_compras_productos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_compras_productos["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_compras_productos["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_compras_productos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_compras_productos["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_compras_productos["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_compras_productos["Spanish"]["upc"] = "Upc";
	$fieldToolTipsbox_cat_compras_productos["Spanish"]["upc"] = "";
	$placeHoldersbox_cat_compras_productos["Spanish"]["upc"] = "";
	$fieldLabelsbox_cat_compras_productos["Spanish"]["sku"] = "Sku";
	$fieldToolTipsbox_cat_compras_productos["Spanish"]["sku"] = "";
	$placeHoldersbox_cat_compras_productos["Spanish"]["sku"] = "";
	if (count($fieldToolTipsbox_cat_compras_productos["Spanish"]))
		$tdatabox_cat_compras_productos[".isUseToolTips"] = true;
}





$tdatabox_cat_compras_productos[".shortTableName"] = "box_cat_compras_productos";
$tdatabox_cat_compras_productos[".nSecOptions"] = 0;

$tdatabox_cat_compras_productos[".mainTableOwnerID"] = "";
$tdatabox_cat_compras_productos[".entityType"] = 1;
$tdatabox_cat_compras_productos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_compras_productos[".strOriginalTableName"] = "cat_compras_productos";

	



$tdatabox_cat_compras_productos[".showAddInPopup"] = false;

$tdatabox_cat_compras_productos[".showEditInPopup"] = false;

$tdatabox_cat_compras_productos[".showViewInPopup"] = false;

$tdatabox_cat_compras_productos[".listAjax"] = false;
//	temporary
//$tdatabox_cat_compras_productos[".listAjax"] = false;

	$tdatabox_cat_compras_productos[".audit"] = true;

	$tdatabox_cat_compras_productos[".locking"] = true;


$pages = $tdatabox_cat_compras_productos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_compras_productos[".edit"] = true;
	$tdatabox_cat_compras_productos[".afterEditAction"] = 1;
	$tdatabox_cat_compras_productos[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_compras_productos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_compras_productos[".add"] = true;
$tdatabox_cat_compras_productos[".afterAddAction"] = 1;
$tdatabox_cat_compras_productos[".closePopupAfterAdd"] = 1;
$tdatabox_cat_compras_productos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_compras_productos[".list"] = true;
}



$tdatabox_cat_compras_productos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_compras_productos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_compras_productos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_compras_productos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_compras_productos[".printFriendly"] = true;
}



$tdatabox_cat_compras_productos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_compras_productos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_compras_productos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_compras_productos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_compras_productos[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_compras_productos[".buttonsAdded"] = false;

$tdatabox_cat_compras_productos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_compras_productos[".isUseTimeForSearch"] = false;


$tdatabox_cat_compras_productos[".badgeColor"] = "2F4F4F";


$tdatabox_cat_compras_productos[".allSearchFields"] = array();
$tdatabox_cat_compras_productos[".filterFields"] = array();
$tdatabox_cat_compras_productos[".requiredSearchFields"] = array();

$tdatabox_cat_compras_productos[".googleLikeFields"] = array();
$tdatabox_cat_compras_productos[".googleLikeFields"][] = "cat_compras_productos_id";
$tdatabox_cat_compras_productos[".googleLikeFields"][] = "producto";
$tdatabox_cat_compras_productos[".googleLikeFields"][] = "descripcion_producto";
$tdatabox_cat_compras_productos[".googleLikeFields"][] = "cat_compras_productos_presentacion_mu_id";
$tdatabox_cat_compras_productos[".googleLikeFields"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$tdatabox_cat_compras_productos[".googleLikeFields"][] = "contenido_neto_compras_productos";
$tdatabox_cat_compras_productos[".googleLikeFields"][] = "capturista";
$tdatabox_cat_compras_productos[".googleLikeFields"][] = "vigente";
$tdatabox_cat_compras_productos[".googleLikeFields"][] = "upc";
$tdatabox_cat_compras_productos[".googleLikeFields"][] = "sku";



$tdatabox_cat_compras_productos[".tableType"] = "list";

$tdatabox_cat_compras_productos[".printerPageOrientation"] = 0;
$tdatabox_cat_compras_productos[".nPrinterPageScale"] = 100;

$tdatabox_cat_compras_productos[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_compras_productos[".geocodingEnabled"] = false;





$tdatabox_cat_compras_productos[".isResizeColumns"] = true;





$tdatabox_cat_compras_productos[".pageSize"] = 20;

$tdatabox_cat_compras_productos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY cat_compras_productos.cat_compras_productos_id DESC";
$tdatabox_cat_compras_productos[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_compras_productos[".orderindexes"] = array();
			$tdatabox_cat_compras_productos[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "cat_compras_productos.cat_compras_productos_id");


$tdatabox_cat_compras_productos[".sqlHead"] = "SELECT cat_compras_productos.cat_compras_productos_id,  concat(if(cat_compras_productos.descripcion_producto is null,0,cat_compras_productos.descripcion_producto), '-', if(cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion is null,0,cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion), '-', if(cat_compras_productos.contenido_neto_compras_productos is null,0,  cat_compras_productos.contenido_neto_compras_productos), '-', if(cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida is null,0,cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida)) AS producto,  cat_compras_productos.descripcion_producto,  cat_compras_productos.cat_compras_productos_presentacion_mu_id,  cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id,  cat_compras_productos.contenido_neto_compras_productos,  cat_compras_productos.capturista,  cat_compras_productos.vigente,  cat_compras_productos.upc,  cat_compras_productos.sku";
$tdatabox_cat_compras_productos[".sqlFrom"] = "FROM cat_compras_productos  LEFT OUTER JOIN cat_compras_productos_presentacion_mu ON cat_compras_productos.cat_compras_productos_presentacion_mu_id = cat_compras_productos_presentacion_mu.cat_compras_productos_presentacion_mu_id  LEFT OUTER JOIN cat_compras_productos_unidad_de_medida_mu ON cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id = cat_compras_productos_unidad_de_medida_mu.cat_compras_productos_unidad_de_medida_mu_id";
$tdatabox_cat_compras_productos[".sqlWhereExpr"] = "(cat_compras_productos.vigente =1)";
$tdatabox_cat_compras_productos[".sqlTail"] = "";

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
$tdatabox_cat_compras_productos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_compras_productos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_compras_productos[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_compras_productos[".highlightSearchResults"] = true;

$tableKeysbox_cat_compras_productos = array();
$tableKeysbox_cat_compras_productos[] = "cat_compras_productos_id";
$tdatabox_cat_compras_productos[".Keys"] = $tableKeysbox_cat_compras_productos;


$tdatabox_cat_compras_productos[".hideMobileList"] = array();




//	cat_compras_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_productos_id";
	$fdata["GoodName"] = "cat_compras_productos_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos","cat_compras_productos_id");
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


	$tdatabox_cat_compras_productos["cat_compras_productos_id"] = $fdata;
		$tdatabox_cat_compras_productos[".searchableFields"][] = "cat_compras_productos_id";
//	producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "producto";
	$fdata["GoodName"] = "producto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos","producto");
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


	$tdatabox_cat_compras_productos["producto"] = $fdata;
		$tdatabox_cat_compras_productos[".searchableFields"][] = "producto";
//	descripcion_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion_producto";
	$fdata["GoodName"] = "descripcion_producto";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos","descripcion_producto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_producto";

		$fdata["sourceSingle"] = "descripcion_producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.descripcion_producto";

	
	
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


	$tdatabox_cat_compras_productos["descripcion_producto"] = $fdata;
		$tdatabox_cat_compras_productos[".searchableFields"][] = "descripcion_producto";
//	cat_compras_productos_presentacion_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_compras_productos_presentacion_mu_id";
	$fdata["GoodName"] = "cat_compras_productos_presentacion_mu_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos","cat_compras_productos_presentacion_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_presentacion_mu_id";

		$fdata["sourceSingle"] = "cat_compras_productos_presentacion_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_productos_presentacion_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_compras_productos_presentacion_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_productos_presentacion_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_cat_compras_productos_presentacion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
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


	$tdatabox_cat_compras_productos["cat_compras_productos_presentacion_mu_id"] = $fdata;
		$tdatabox_cat_compras_productos[".searchableFields"][] = "cat_compras_productos_presentacion_mu_id";
//	cat_compras_productos_unidad_de_medida_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_compras_productos_unidad_de_medida_mu_id";
	$fdata["GoodName"] = "cat_compras_productos_unidad_de_medida_mu_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos","cat_compras_productos_unidad_de_medida_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_unidad_de_medida_mu_id";

		$fdata["sourceSingle"] = "cat_compras_productos_unidad_de_medida_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_compras_productos_unidad_de_medida_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_productos_unidad_de_medida_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_cat_compras_productos_unidad_de_medida";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
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


	$tdatabox_cat_compras_productos["cat_compras_productos_unidad_de_medida_mu_id"] = $fdata;
		$tdatabox_cat_compras_productos[".searchableFields"][] = "cat_compras_productos_unidad_de_medida_mu_id";
//	contenido_neto_compras_productos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contenido_neto_compras_productos";
	$fdata["GoodName"] = "contenido_neto_compras_productos";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos","contenido_neto_compras_productos");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "contenido_neto_compras_productos";

		$fdata["sourceSingle"] = "contenido_neto_compras_productos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.contenido_neto_compras_productos";

	
	
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


	$tdatabox_cat_compras_productos["contenido_neto_compras_productos"] = $fdata;
		$tdatabox_cat_compras_productos[".searchableFields"][] = "contenido_neto_compras_productos";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.capturista";

	
	
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


	$tdatabox_cat_compras_productos["capturista"] = $fdata;
		$tdatabox_cat_compras_productos[".searchableFields"][] = "capturista";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos.vigente";

	
	
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


	$tdatabox_cat_compras_productos["vigente"] = $fdata;
		$tdatabox_cat_compras_productos[".searchableFields"][] = "vigente";
//	upc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "upc";
	$fdata["GoodName"] = "upc";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos","upc");
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


	$tdatabox_cat_compras_productos["upc"] = $fdata;
		$tdatabox_cat_compras_productos[".searchableFields"][] = "upc";
//	sku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sku";
	$fdata["GoodName"] = "sku";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_productos","sku");
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


	$tdatabox_cat_compras_productos["sku"] = $fdata;
		$tdatabox_cat_compras_productos[".searchableFields"][] = "sku";


$tables_data["box_cat_compras_productos"]=&$tdatabox_cat_compras_productos;
$field_labels["box_cat_compras_productos"] = &$fieldLabelsbox_cat_compras_productos;
$fieldToolTips["box_cat_compras_productos"] = &$fieldToolTipsbox_cat_compras_productos;
$placeHolders["box_cat_compras_productos"] = &$placeHoldersbox_cat_compras_productos;
$page_titles["box_cat_compras_productos"] = &$pageTitlesbox_cat_compras_productos;


changeTextControlsToDate( "box_cat_compras_productos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_compras_productos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_compras_productos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_compras_productos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_productos.cat_compras_productos_id,  concat(if(cat_compras_productos.descripcion_producto is null,0,cat_compras_productos.descripcion_producto), '-', if(cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion is null,0,cat_compras_productos_presentacion_mu.descripcion_cat_compras_productos_presentacion), '-', if(cat_compras_productos.contenido_neto_compras_productos is null,0,  cat_compras_productos.contenido_neto_compras_productos), '-', if(cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida is null,0,cat_compras_productos_unidad_de_medida_mu.descripcion_cat_compras_productos_unidad_de_medida)) AS producto,  cat_compras_productos.descripcion_producto,  cat_compras_productos.cat_compras_productos_presentacion_mu_id,  cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id,  cat_compras_productos.contenido_neto_compras_productos,  cat_compras_productos.capturista,  cat_compras_productos.vigente,  cat_compras_productos.upc,  cat_compras_productos.sku";
$proto0["m_strFrom"] = "FROM cat_compras_productos  LEFT OUTER JOIN cat_compras_productos_presentacion_mu ON cat_compras_productos.cat_compras_productos_presentacion_mu_id = cat_compras_productos_presentacion_mu.cat_compras_productos_presentacion_mu_id  LEFT OUTER JOIN cat_compras_productos_unidad_de_medida_mu ON cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id = cat_compras_productos_unidad_de_medida_mu.cat_compras_productos_unidad_de_medida_mu_id";
$proto0["m_strWhere"] = "(cat_compras_productos.vigente =1)";
$proto0["m_strOrderBy"] = "ORDER BY cat_compras_productos.cat_compras_productos_id DESC";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_compras_productos.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos"
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
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto6["m_sql"] = "cat_compras_productos.cat_compras_productos_id";
$proto6["m_srcTableName"] = "box_cat_compras_productos";
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
$proto8["m_srcTableName"] = "box_cat_compras_productos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "producto";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_producto",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto17["m_sql"] = "cat_compras_productos.descripcion_producto";
$proto17["m_srcTableName"] = "box_cat_compras_productos";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_presentacion_mu_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto19["m_sql"] = "cat_compras_productos.cat_compras_productos_presentacion_mu_id";
$proto19["m_srcTableName"] = "box_cat_compras_productos";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_unidad_de_medida_mu_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto21["m_sql"] = "cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id";
$proto21["m_srcTableName"] = "box_cat_compras_productos";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "contenido_neto_compras_productos",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto23["m_sql"] = "cat_compras_productos.contenido_neto_compras_productos";
$proto23["m_srcTableName"] = "box_cat_compras_productos";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto25["m_sql"] = "cat_compras_productos.capturista";
$proto25["m_srcTableName"] = "box_cat_compras_productos";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto27["m_sql"] = "cat_compras_productos.vigente";
$proto27["m_srcTableName"] = "box_cat_compras_productos";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "upc",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto29["m_sql"] = "cat_compras_productos.upc";
$proto29["m_srcTableName"] = "box_cat_compras_productos";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "sku",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto31["m_sql"] = "cat_compras_productos.sku";
$proto31["m_srcTableName"] = "box_cat_compras_productos";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "cat_compras_productos";
$proto34["m_srcTableName"] = "box_cat_compras_productos";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "cat_compras_productos_id";
$proto34["m_columns"][] = "time_stamp";
$proto34["m_columns"][] = "vigente";
$proto34["m_columns"][] = "capturista";
$proto34["m_columns"][] = "descripcion_producto";
$proto34["m_columns"][] = "cat_compras_productos_categorias_id";
$proto34["m_columns"][] = "upc";
$proto34["m_columns"][] = "sku";
$proto34["m_columns"][] = "modelo";
$proto34["m_columns"][] = "cat_compras_proveedores_id";
$proto34["m_columns"][] = "cat_compras_productos_presentacion_mu_id";
$proto34["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$proto34["m_columns"][] = "contenido_neto_compras_productos";
$proto34["m_columns"][] = "costo_neto_producto";
$proto34["m_columns"][] = "cat_compras_productos_presentacion_mu_id_conversion";
$proto34["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
$proto34["m_columns"][] = "contenido_neto_compras_productos_conversion";
$proto34["m_columns"][] = "cat_compras_productos_permitidos_id";
$proto34["m_columns"][] = "costo_unidad_de_medida";
$proto34["m_columns"][] = "fecha_de_actualizacion_costo_udm";
$proto34["m_columns"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "cat_compras_productos";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "box_cat_compras_productos";
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
$proto38["m_strName"] = "cat_compras_productos_presentacion_mu";
$proto38["m_srcTableName"] = "box_cat_compras_productos";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "cat_compras_productos_presentacion_mu_id";
$proto38["m_columns"][] = "time_stamp";
$proto38["m_columns"][] = "vigente";
$proto38["m_columns"][] = "capturista";
$proto38["m_columns"][] = "descripcion_cat_compras_productos_presentacion";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "LEFT OUTER JOIN cat_compras_productos_presentacion_mu ON cat_compras_productos.cat_compras_productos_presentacion_mu_id = cat_compras_productos_presentacion_mu.cat_compras_productos_presentacion_mu_id";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "box_cat_compras_productos";
$proto39=array();
$proto39["m_sql"] = "cat_compras_productos_presentacion_mu.cat_compras_productos_presentacion_mu_id = cat_compras_productos.cat_compras_productos_presentacion_mu_id";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_presentacion_mu_id",
	"m_strTable" => "cat_compras_productos_presentacion_mu",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= cat_compras_productos.cat_compras_productos_presentacion_mu_id";
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
$proto42["m_strName"] = "cat_compras_productos_unidad_de_medida_mu";
$proto42["m_srcTableName"] = "box_cat_compras_productos";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$proto42["m_columns"][] = "time_stamp";
$proto42["m_columns"][] = "vigente";
$proto42["m_columns"][] = "capturista";
$proto42["m_columns"][] = "descripcion_cat_compras_productos_unidad_de_medida";
$proto42["m_columns"][] = "factor_de_conversion_costos";
$proto42["m_columns"][] = "cat_compras_productos_unidad_de_costo_mu_id";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "LEFT OUTER JOIN cat_compras_productos_unidad_de_medida_mu ON cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id = cat_compras_productos_unidad_de_medida_mu.cat_compras_productos_unidad_de_medida_mu_id";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "box_cat_compras_productos";
$proto43=array();
$proto43["m_sql"] = "cat_compras_productos_unidad_de_medida_mu.cat_compras_productos_unidad_de_medida_mu_id = cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_unidad_de_medida_mu_id",
	"m_strTable" => "cat_compras_productos_unidad_de_medida_mu",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= cat_compras_productos.cat_compras_productos_unidad_de_medida_mu_id";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto45=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "box_cat_compras_productos"
));

$proto45["m_column"]=$obj;
$proto45["m_bAsc"] = 0;
$proto45["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto45);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="box_cat_compras_productos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_compras_productos = createSqlQuery_box_cat_compras_productos();


	
		;

										

$tdatabox_cat_compras_productos[".sqlquery"] = $queryData_box_cat_compras_productos;



$tdatabox_cat_compras_productos[".hasEvents"] = false;

?>