<?php
$tdatabox_cat_ventas_productos_sku = array();
$tdatabox_cat_ventas_productos_sku[".searchableFields"] = array();
$tdatabox_cat_ventas_productos_sku[".ShortName"] = "box_cat_ventas_productos_sku";
$tdatabox_cat_ventas_productos_sku[".OwnerID"] = "";
$tdatabox_cat_ventas_productos_sku[".OriginalTable"] = "cat_ventas_productos_sku";


$tdatabox_cat_ventas_productos_sku[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_ventas_productos_sku[".originalPagesByType"] = $tdatabox_cat_ventas_productos_sku[".pagesByType"];
$tdatabox_cat_ventas_productos_sku[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_ventas_productos_sku[".originalPages"] = $tdatabox_cat_ventas_productos_sku[".pages"];
$tdatabox_cat_ventas_productos_sku[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_ventas_productos_sku[".originalDefaultPages"] = $tdatabox_cat_ventas_productos_sku[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_ventas_productos_sku = array();
$fieldToolTipsbox_cat_ventas_productos_sku = array();
$pageTitlesbox_cat_ventas_productos_sku = array();
$placeHoldersbox_cat_ventas_productos_sku = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_ventas_productos_sku["Spanish"] = array();
	$fieldToolTipsbox_cat_ventas_productos_sku["Spanish"] = array();
	$placeHoldersbox_cat_ventas_productos_sku["Spanish"] = array();
	$pageTitlesbox_cat_ventas_productos_sku["Spanish"] = array();
	$fieldLabelsbox_cat_ventas_productos_sku["Spanish"]["cat_ventas_productos_sku_id"] = "Id";
	$fieldToolTipsbox_cat_ventas_productos_sku["Spanish"]["cat_ventas_productos_sku_id"] = "";
	$placeHoldersbox_cat_ventas_productos_sku["Spanish"]["cat_ventas_productos_sku_id"] = "";
	$fieldLabelsbox_cat_ventas_productos_sku["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_ventas_productos_sku["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_ventas_productos_sku["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_cat_ventas_productos_sku["Spanish"]["descripcion_ventas_producto"] = "Descripcion Ventas Producto";
	$fieldToolTipsbox_cat_ventas_productos_sku["Spanish"]["descripcion_ventas_producto"] = "";
	$placeHoldersbox_cat_ventas_productos_sku["Spanish"]["descripcion_ventas_producto"] = "";
	$fieldLabelsbox_cat_ventas_productos_sku["Spanish"]["descripcion_ventas_productos_sku"] = "Descripción SKU";
	$fieldToolTipsbox_cat_ventas_productos_sku["Spanish"]["descripcion_ventas_productos_sku"] = "";
	$placeHoldersbox_cat_ventas_productos_sku["Spanish"]["descripcion_ventas_productos_sku"] = "";
	$fieldLabelsbox_cat_ventas_productos_sku["Spanish"]["descripcion_productos_manejo"] = "Descripcion Productos Manejo";
	$fieldToolTipsbox_cat_ventas_productos_sku["Spanish"]["descripcion_productos_manejo"] = "";
	$placeHoldersbox_cat_ventas_productos_sku["Spanish"]["descripcion_productos_manejo"] = "";
	$fieldLabelsbox_cat_ventas_productos_sku["Spanish"]["descripcion_ventas_productos_marcas"] = "Descripcion Ventas Productos Marcas";
	$fieldToolTipsbox_cat_ventas_productos_sku["Spanish"]["descripcion_ventas_productos_marcas"] = "";
	$placeHoldersbox_cat_ventas_productos_sku["Spanish"]["descripcion_ventas_productos_marcas"] = "";
	$fieldLabelsbox_cat_ventas_productos_sku["Spanish"]["numero_sku"] = "Numero Sku";
	$fieldToolTipsbox_cat_ventas_productos_sku["Spanish"]["numero_sku"] = "";
	$placeHoldersbox_cat_ventas_productos_sku["Spanish"]["numero_sku"] = "";
	$fieldLabelsbox_cat_ventas_productos_sku["Spanish"]["descripcion_cliente"] = "Descripcion Cliente";
	$fieldToolTipsbox_cat_ventas_productos_sku["Spanish"]["descripcion_cliente"] = "";
	$placeHoldersbox_cat_ventas_productos_sku["Spanish"]["descripcion_cliente"] = "";
	$fieldLabelsbox_cat_ventas_productos_sku["Spanish"]["upc_ventas_productos"] = "Upc";
	$fieldToolTipsbox_cat_ventas_productos_sku["Spanish"]["upc_ventas_productos"] = "";
	$placeHoldersbox_cat_ventas_productos_sku["Spanish"]["upc_ventas_productos"] = "";
	if (count($fieldToolTipsbox_cat_ventas_productos_sku["Spanish"]))
		$tdatabox_cat_ventas_productos_sku[".isUseToolTips"] = true;
}





$tdatabox_cat_ventas_productos_sku[".shortTableName"] = "box_cat_ventas_productos_sku";
$tdatabox_cat_ventas_productos_sku[".nSecOptions"] = 0;

$tdatabox_cat_ventas_productos_sku[".mainTableOwnerID"] = "";
$tdatabox_cat_ventas_productos_sku[".entityType"] = 1;
$tdatabox_cat_ventas_productos_sku[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_ventas_productos_sku[".strOriginalTableName"] = "cat_ventas_productos_sku";

	



$tdatabox_cat_ventas_productos_sku[".showAddInPopup"] = false;

$tdatabox_cat_ventas_productos_sku[".showEditInPopup"] = false;

$tdatabox_cat_ventas_productos_sku[".showViewInPopup"] = false;

$tdatabox_cat_ventas_productos_sku[".listAjax"] = false;
//	temporary
//$tdatabox_cat_ventas_productos_sku[".listAjax"] = false;

	$tdatabox_cat_ventas_productos_sku[".audit"] = true;

	$tdatabox_cat_ventas_productos_sku[".locking"] = true;


$pages = $tdatabox_cat_ventas_productos_sku[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_ventas_productos_sku[".edit"] = true;
	$tdatabox_cat_ventas_productos_sku[".afterEditAction"] = 1;
	$tdatabox_cat_ventas_productos_sku[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_ventas_productos_sku[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_ventas_productos_sku[".add"] = true;
$tdatabox_cat_ventas_productos_sku[".afterAddAction"] = 1;
$tdatabox_cat_ventas_productos_sku[".closePopupAfterAdd"] = 1;
$tdatabox_cat_ventas_productos_sku[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_ventas_productos_sku[".list"] = true;
}



$tdatabox_cat_ventas_productos_sku[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_ventas_productos_sku[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_ventas_productos_sku[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_ventas_productos_sku[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_ventas_productos_sku[".printFriendly"] = true;
}



$tdatabox_cat_ventas_productos_sku[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_ventas_productos_sku[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_ventas_productos_sku[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_ventas_productos_sku[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_ventas_productos_sku[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_ventas_productos_sku[".buttonsAdded"] = false;

$tdatabox_cat_ventas_productos_sku[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_ventas_productos_sku[".isUseTimeForSearch"] = false;


$tdatabox_cat_ventas_productos_sku[".badgeColor"] = "9ACD32";


$tdatabox_cat_ventas_productos_sku[".allSearchFields"] = array();
$tdatabox_cat_ventas_productos_sku[".filterFields"] = array();
$tdatabox_cat_ventas_productos_sku[".requiredSearchFields"] = array();

$tdatabox_cat_ventas_productos_sku[".googleLikeFields"] = array();
$tdatabox_cat_ventas_productos_sku[".googleLikeFields"][] = "cat_ventas_productos_sku_id";
$tdatabox_cat_ventas_productos_sku[".googleLikeFields"][] = "descripcion_ventas_producto";
$tdatabox_cat_ventas_productos_sku[".googleLikeFields"][] = "descripcion_ventas_productos_sku";
$tdatabox_cat_ventas_productos_sku[".googleLikeFields"][] = "descripcion_productos_manejo";
$tdatabox_cat_ventas_productos_sku[".googleLikeFields"][] = "descripcion_ventas_productos_marcas";
$tdatabox_cat_ventas_productos_sku[".googleLikeFields"][] = "numero_sku";
$tdatabox_cat_ventas_productos_sku[".googleLikeFields"][] = "descripcion_cliente";
$tdatabox_cat_ventas_productos_sku[".googleLikeFields"][] = "upc_ventas_productos";
$tdatabox_cat_ventas_productos_sku[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_ventas_productos_sku[".tableType"] = "list";

$tdatabox_cat_ventas_productos_sku[".printerPageOrientation"] = 0;
$tdatabox_cat_ventas_productos_sku[".nPrinterPageScale"] = 100;

$tdatabox_cat_ventas_productos_sku[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_ventas_productos_sku[".geocodingEnabled"] = false;





$tdatabox_cat_ventas_productos_sku[".isResizeColumns"] = true;





$tdatabox_cat_ventas_productos_sku[".pageSize"] = 20;

$tdatabox_cat_ventas_productos_sku[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_ventas_productos_sku[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_ventas_productos_sku[".orderindexes"] = array();


$tdatabox_cat_ventas_productos_sku[".sqlHead"] = "SELECT cat_ventas_productos_sku.cat_ventas_productos_sku_id,  cat_ventas_productos.descripcion_ventas_producto,  cat_ventas_productos_sku.descripcion_ventas_productos_sku,  cat_ventas_productos_manejo.descripcion_productos_manejo,  cat_ventas_productos_marcas.descripcion_ventas_productos_marcas,  cat_ventas_productos_sku.numero_sku,   cat_ventas_clientes.descripcion_cliente,   cat_ventas_productos_sku.upc_ventas_productos,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_cat_ventas_productos_sku[".sqlFrom"] = "FROM cat_ventas_productos_sku  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_sku.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_ventas_productos ON cat_ventas_productos_sku.cat_ventas_productos_id = cat_ventas_productos.cat_ventas_productos_id  LEFT OUTER JOIN cat_ventas_productos_manejo ON cat_ventas_productos_sku.cat_ventas_productos_manejo_id = cat_ventas_productos_manejo.cat_ventas_productos_manejo_id  LEFT OUTER JOIN cat_ventas_productos_marcas ON cat_ventas_productos_sku.cat_ventas_productos_marcas_id = cat_ventas_productos_marcas.cat_ventas_productos_marcas_id  LEFT OUTER JOIN cat_ventas_clientes ON cat_ventas_productos_sku.cat_ventas_clientes_id = cat_ventas_clientes.cat_ventas_clientes_id";
$tdatabox_cat_ventas_productos_sku[".sqlWhereExpr"] = "(cat_ventas_productos_sku.vigente =1)";
$tdatabox_cat_ventas_productos_sku[".sqlTail"] = "";

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
$tdatabox_cat_ventas_productos_sku[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_ventas_productos_sku[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_ventas_productos_sku[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_ventas_productos_sku[".highlightSearchResults"] = true;

$tableKeysbox_cat_ventas_productos_sku = array();
$tableKeysbox_cat_ventas_productos_sku[] = "cat_ventas_productos_sku_id";
$tdatabox_cat_ventas_productos_sku[".Keys"] = $tableKeysbox_cat_ventas_productos_sku;


$tdatabox_cat_ventas_productos_sku[".hideMobileList"] = array();




//	cat_ventas_productos_sku_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_sku_id";
	$fdata["GoodName"] = "cat_ventas_productos_sku_id";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_sku","cat_ventas_productos_sku_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_sku_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_sku_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_sku.cat_ventas_productos_sku_id";

	
	
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


	$tdatabox_cat_ventas_productos_sku["cat_ventas_productos_sku_id"] = $fdata;
		$tdatabox_cat_ventas_productos_sku[".searchableFields"][] = "cat_ventas_productos_sku_id";
//	descripcion_ventas_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_ventas_producto";
	$fdata["GoodName"] = "descripcion_ventas_producto";
	$fdata["ownerTable"] = "cat_ventas_productos";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_sku","descripcion_ventas_producto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_producto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos.descripcion_ventas_producto";

	
	
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


	$tdatabox_cat_ventas_productos_sku["descripcion_ventas_producto"] = $fdata;
		$tdatabox_cat_ventas_productos_sku[".searchableFields"][] = "descripcion_ventas_producto";
//	descripcion_ventas_productos_sku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion_ventas_productos_sku";
	$fdata["GoodName"] = "descripcion_ventas_productos_sku";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_sku","descripcion_ventas_productos_sku");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_productos_sku";

		$fdata["sourceSingle"] = "descripcion_ventas_productos_sku";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_sku.descripcion_ventas_productos_sku";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatabox_cat_ventas_productos_sku["descripcion_ventas_productos_sku"] = $fdata;
		$tdatabox_cat_ventas_productos_sku[".searchableFields"][] = "descripcion_ventas_productos_sku";
//	descripcion_productos_manejo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "descripcion_productos_manejo";
	$fdata["GoodName"] = "descripcion_productos_manejo";
	$fdata["ownerTable"] = "cat_ventas_productos_manejo";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_sku","descripcion_productos_manejo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_productos_manejo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_manejo.descripcion_productos_manejo";

	
	
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


	$tdatabox_cat_ventas_productos_sku["descripcion_productos_manejo"] = $fdata;
		$tdatabox_cat_ventas_productos_sku[".searchableFields"][] = "descripcion_productos_manejo";
//	descripcion_ventas_productos_marcas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_ventas_productos_marcas";
	$fdata["GoodName"] = "descripcion_ventas_productos_marcas";
	$fdata["ownerTable"] = "cat_ventas_productos_marcas";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_sku","descripcion_ventas_productos_marcas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_productos_marcas";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_marcas.descripcion_ventas_productos_marcas";

	
	
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


	$tdatabox_cat_ventas_productos_sku["descripcion_ventas_productos_marcas"] = $fdata;
		$tdatabox_cat_ventas_productos_sku[".searchableFields"][] = "descripcion_ventas_productos_marcas";
//	numero_sku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "numero_sku";
	$fdata["GoodName"] = "numero_sku";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_sku","numero_sku");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numero_sku";

		$fdata["sourceSingle"] = "numero_sku";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_sku.numero_sku";

	
	
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


	$tdatabox_cat_ventas_productos_sku["numero_sku"] = $fdata;
		$tdatabox_cat_ventas_productos_sku[".searchableFields"][] = "numero_sku";
//	descripcion_cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "descripcion_cliente";
	$fdata["GoodName"] = "descripcion_cliente";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_sku","descripcion_cliente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_cliente";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.descripcion_cliente";

	
	
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


	$tdatabox_cat_ventas_productos_sku["descripcion_cliente"] = $fdata;
		$tdatabox_cat_ventas_productos_sku[".searchableFields"][] = "descripcion_cliente";
//	upc_ventas_productos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "upc_ventas_productos";
	$fdata["GoodName"] = "upc_ventas_productos";
	$fdata["ownerTable"] = "cat_ventas_productos_sku";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_sku","upc_ventas_productos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "upc_ventas_productos";

		$fdata["sourceSingle"] = "upc_ventas_productos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_sku.upc_ventas_productos";

	
	
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


	$tdatabox_cat_ventas_productos_sku["upc_ventas_productos"] = $fdata;
		$tdatabox_cat_ventas_productos_sku[".searchableFields"][] = "upc_ventas_productos";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_ventas_productos_sku","cat_usuarios_licencias_id");
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


	$tdatabox_cat_ventas_productos_sku["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_ventas_productos_sku[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_ventas_productos_sku"]=&$tdatabox_cat_ventas_productos_sku;
$field_labels["box_cat_ventas_productos_sku"] = &$fieldLabelsbox_cat_ventas_productos_sku;
$fieldToolTips["box_cat_ventas_productos_sku"] = &$fieldToolTipsbox_cat_ventas_productos_sku;
$placeHolders["box_cat_ventas_productos_sku"] = &$placeHoldersbox_cat_ventas_productos_sku;
$page_titles["box_cat_ventas_productos_sku"] = &$pageTitlesbox_cat_ventas_productos_sku;


changeTextControlsToDate( "box_cat_ventas_productos_sku" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_ventas_productos_sku"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_ventas_productos_sku"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_ventas_productos_sku()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_sku.cat_ventas_productos_sku_id,  cat_ventas_productos.descripcion_ventas_producto,  cat_ventas_productos_sku.descripcion_ventas_productos_sku,  cat_ventas_productos_manejo.descripcion_productos_manejo,  cat_ventas_productos_marcas.descripcion_ventas_productos_marcas,  cat_ventas_productos_sku.numero_sku,   cat_ventas_clientes.descripcion_cliente,   cat_ventas_productos_sku.upc_ventas_productos,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_sku  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_sku.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_ventas_productos ON cat_ventas_productos_sku.cat_ventas_productos_id = cat_ventas_productos.cat_ventas_productos_id  LEFT OUTER JOIN cat_ventas_productos_manejo ON cat_ventas_productos_sku.cat_ventas_productos_manejo_id = cat_ventas_productos_manejo.cat_ventas_productos_manejo_id  LEFT OUTER JOIN cat_ventas_productos_marcas ON cat_ventas_productos_sku.cat_ventas_productos_marcas_id = cat_ventas_productos_marcas.cat_ventas_productos_marcas_id  LEFT OUTER JOIN cat_ventas_clientes ON cat_ventas_productos_sku.cat_ventas_clientes_id = cat_ventas_clientes.cat_ventas_clientes_id";
$proto0["m_strWhere"] = "(cat_ventas_productos_sku.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_ventas_productos_sku.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
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
	"m_strName" => "cat_ventas_productos_sku_id",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto6["m_sql"] = "cat_ventas_productos_sku.cat_ventas_productos_sku_id";
$proto6["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_producto",
	"m_strTable" => "cat_ventas_productos",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto8["m_sql"] = "cat_ventas_productos.descripcion_ventas_producto";
$proto8["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_sku",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto10["m_sql"] = "cat_ventas_productos_sku.descripcion_ventas_productos_sku";
$proto10["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_productos_manejo",
	"m_strTable" => "cat_ventas_productos_manejo",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto12["m_sql"] = "cat_ventas_productos_manejo.descripcion_productos_manejo";
$proto12["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_marcas",
	"m_strTable" => "cat_ventas_productos_marcas",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto14["m_sql"] = "cat_ventas_productos_marcas.descripcion_ventas_productos_marcas";
$proto14["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_sku",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto16["m_sql"] = "cat_ventas_productos_sku.numero_sku";
$proto16["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_cliente",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto18["m_sql"] = "cat_ventas_clientes.descripcion_cliente";
$proto18["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "upc_ventas_productos",
	"m_strTable" => "cat_ventas_productos_sku",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto20["m_sql"] = "cat_ventas_productos_sku.upc_ventas_productos";
$proto20["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto22["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto22["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cat_ventas_productos_sku";
$proto25["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_ventas_productos_sku_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "cat_ventas_productos_id";
$proto25["m_columns"][] = "descripcion_ventas_productos_sku";
$proto25["m_columns"][] = "cat_ventas_productos_manejo_id";
$proto25["m_columns"][] = "upc_ventas_productos";
$proto25["m_columns"][] = "cat_ventas_productos_marcas_id";
$proto25["m_columns"][] = "numero_sku";
$proto25["m_columns"][] = "cat_ventas_clientes_id";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cat_ventas_productos_sku";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_LEFTJOIN";
			$proto29=array();
$proto29["m_strName"] = "cat_usuarios";
$proto29["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cat_usuarios_id";
$proto29["m_columns"][] = "time_stamp";
$proto29["m_columns"][] = "vigente";
$proto29["m_columns"][] = "capturista";
$proto29["m_columns"][] = "usuario";
$proto29["m_columns"][] = "cat_usuarios_licencias_id";
$proto29["m_columns"][] = "pass";
$proto29["m_columns"][] = "nombre";
$proto29["m_columns"][] = "correo";
$proto29["m_columns"][] = "cat_trabajadores_altas_id";
$proto29["m_columns"][] = "res_autorizacion";
$proto29["m_columns"][] = "session";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_sku.capturista = cat_usuarios.usuario";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto30=array();
$proto30["m_sql"] = "cat_usuarios.usuario = cat_ventas_productos_sku.capturista";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= cat_ventas_productos_sku.capturista";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_LEFTJOIN";
			$proto33=array();
$proto33["m_strName"] = "cat_ventas_productos";
$proto33["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "cat_ventas_productos_id";
$proto33["m_columns"][] = "time_stamp";
$proto33["m_columns"][] = "vigente";
$proto33["m_columns"][] = "capturista";
$proto33["m_columns"][] = "descripcion_ventas_producto";
$proto33["m_columns"][] = "cat_ventas_productos_categorias_id";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "LEFT OUTER JOIN cat_ventas_productos ON cat_ventas_productos_sku.cat_ventas_productos_id = cat_ventas_productos.cat_ventas_productos_id";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto34=array();
$proto34["m_sql"] = "cat_ventas_productos.cat_ventas_productos_id = cat_ventas_productos_sku.cat_ventas_productos_id";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_id",
	"m_strTable" => "cat_ventas_productos",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= cat_ventas_productos_sku.cat_ventas_productos_id";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_LEFTJOIN";
			$proto37=array();
$proto37["m_strName"] = "cat_ventas_productos_manejo";
$proto37["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "cat_ventas_productos_manejo_id";
$proto37["m_columns"][] = "time_stamp";
$proto37["m_columns"][] = "vigente";
$proto37["m_columns"][] = "capturista";
$proto37["m_columns"][] = "descripcion_productos_manejo";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "LEFT OUTER JOIN cat_ventas_productos_manejo ON cat_ventas_productos_sku.cat_ventas_productos_manejo_id = cat_ventas_productos_manejo.cat_ventas_productos_manejo_id";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto38=array();
$proto38["m_sql"] = "cat_ventas_productos_manejo.cat_ventas_productos_manejo_id = cat_ventas_productos_sku.cat_ventas_productos_manejo_id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_manejo_id",
	"m_strTable" => "cat_ventas_productos_manejo",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= cat_ventas_productos_sku.cat_ventas_productos_manejo_id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_LEFTJOIN";
			$proto41=array();
$proto41["m_strName"] = "cat_ventas_productos_marcas";
$proto41["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "cat_ventas_productos_marcas_id";
$proto41["m_columns"][] = "time_stamp";
$proto41["m_columns"][] = "vigente";
$proto41["m_columns"][] = "capturista";
$proto41["m_columns"][] = "descripcion_ventas_productos_marcas";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "LEFT OUTER JOIN cat_ventas_productos_marcas ON cat_ventas_productos_sku.cat_ventas_productos_marcas_id = cat_ventas_productos_marcas.cat_ventas_productos_marcas_id";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto42=array();
$proto42["m_sql"] = "cat_ventas_productos_marcas.cat_ventas_productos_marcas_id = cat_ventas_productos_sku.cat_ventas_productos_marcas_id";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_marcas_id",
	"m_strTable" => "cat_ventas_productos_marcas",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= cat_ventas_productos_sku.cat_ventas_productos_marcas_id";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_LEFTJOIN";
			$proto45=array();
$proto45["m_strName"] = "cat_ventas_clientes";
$proto45["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "cat_ventas_clientes_id";
$proto45["m_columns"][] = "vigente";
$proto45["m_columns"][] = "time_stamp";
$proto45["m_columns"][] = "capturista";
$proto45["m_columns"][] = "fecha_de_captura";
$proto45["m_columns"][] = "nombre_cliente_old";
$proto45["m_columns"][] = "rfc_cliente";
$proto45["m_columns"][] = "descripcion_cliente";
$proto45["m_columns"][] = "cp";
$proto45["m_columns"][] = "calle";
$proto45["m_columns"][] = "num_ex";
$proto45["m_columns"][] = "num_int";
$proto45["m_columns"][] = "colonia";
$proto45["m_columns"][] = "localidad";
$proto45["m_columns"][] = "municipio";
$proto45["m_columns"][] = "estado";
$proto45["m_columns"][] = "pais";
$proto45["m_columns"][] = "telefono";
$proto45["m_columns"][] = "celular";
$proto45["m_columns"][] = "email";
$proto45["m_columns"][] = "pagina_web";
$proto45["m_columns"][] = "contacto";
$proto45["m_columns"][] = "puesto";
$proto45["m_columns"][] = "correo_contacto";
$proto45["m_columns"][] = "celular_contacto";
$proto45["m_columns"][] = "clabe_interbancaria";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "LEFT OUTER JOIN cat_ventas_clientes ON cat_ventas_productos_sku.cat_ventas_clientes_id = cat_ventas_clientes.cat_ventas_clientes_id";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "box_cat_ventas_productos_sku";
$proto46=array();
$proto46["m_sql"] = "cat_ventas_clientes.cat_ventas_clientes_id = cat_ventas_productos_sku.cat_ventas_clientes_id";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_ventas_clientes_id",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "box_cat_ventas_productos_sku"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= cat_ventas_productos_sku.cat_ventas_clientes_id";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_ventas_productos_sku";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_ventas_productos_sku = createSqlQuery_box_cat_ventas_productos_sku();


	
		;

									

$tdatabox_cat_ventas_productos_sku[".sqlquery"] = $queryData_box_cat_ventas_productos_sku;



$tdatabox_cat_ventas_productos_sku[".hasEvents"] = false;

?>