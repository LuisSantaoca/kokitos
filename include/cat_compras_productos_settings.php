<?php
$tdatacat_compras_productos = array();
$tdatacat_compras_productos[".searchableFields"] = array();
$tdatacat_compras_productos[".ShortName"] = "cat_compras_productos";
$tdatacat_compras_productos[".OwnerID"] = "";
$tdatacat_compras_productos[".OriginalTable"] = "cat_compras_productos";


$tdatacat_compras_productos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_compras_productos[".originalPagesByType"] = $tdatacat_compras_productos[".pagesByType"];
$tdatacat_compras_productos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_compras_productos[".originalPages"] = $tdatacat_compras_productos[".pages"];
$tdatacat_compras_productos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_compras_productos[".originalDefaultPages"] = $tdatacat_compras_productos[".defaultPages"];

//	field labels
$fieldLabelscat_compras_productos = array();
$fieldToolTipscat_compras_productos = array();
$pageTitlescat_compras_productos = array();
$placeHolderscat_compras_productos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_compras_productos["Spanish"] = array();
	$fieldToolTipscat_compras_productos["Spanish"] = array();
	$placeHolderscat_compras_productos["Spanish"] = array();
	$pageTitlescat_compras_productos["Spanish"] = array();
	$fieldLabelscat_compras_productos["Spanish"]["cat_compras_productos_id"] = "Id";
	$fieldToolTipscat_compras_productos["Spanish"]["cat_compras_productos_id"] = "";
	$placeHolderscat_compras_productos["Spanish"]["cat_compras_productos_id"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_compras_productos["Spanish"]["time_stamp"] = "";
	$placeHolderscat_compras_productos["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_compras_productos["Spanish"]["vigente"] = "";
	$placeHolderscat_compras_productos["Spanish"]["vigente"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_compras_productos["Spanish"]["capturista"] = "";
	$placeHolderscat_compras_productos["Spanish"]["capturista"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["descripcion_producto"] = "Producto";
	$fieldToolTipscat_compras_productos["Spanish"]["descripcion_producto"] = "";
	$placeHolderscat_compras_productos["Spanish"]["descripcion_producto"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["cat_compras_productos_categorias_id"] = "Categoria";
	$fieldToolTipscat_compras_productos["Spanish"]["cat_compras_productos_categorias_id"] = "";
	$placeHolderscat_compras_productos["Spanish"]["cat_compras_productos_categorias_id"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["upc"] = "Upc";
	$fieldToolTipscat_compras_productos["Spanish"]["upc"] = "";
	$placeHolderscat_compras_productos["Spanish"]["upc"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["sku"] = "Sku";
	$fieldToolTipscat_compras_productos["Spanish"]["sku"] = "";
	$placeHolderscat_compras_productos["Spanish"]["sku"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["modelo"] = "Modelo";
	$fieldToolTipscat_compras_productos["Spanish"]["modelo"] = "";
	$placeHolderscat_compras_productos["Spanish"]["modelo"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["cat_compras_proveedores_id"] = "Proveedores Id";
	$fieldToolTipscat_compras_productos["Spanish"]["cat_compras_proveedores_id"] = "";
	$placeHolderscat_compras_productos["Spanish"]["cat_compras_proveedores_id"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["cat_compras_productos_presentacion_mu_id"] = "Presentacion";
	$fieldToolTipscat_compras_productos["Spanish"]["cat_compras_productos_presentacion_mu_id"] = "";
	$placeHolderscat_compras_productos["Spanish"]["cat_compras_productos_presentacion_mu_id"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "UdM";
	$fieldToolTipscat_compras_productos["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "";
	$placeHolderscat_compras_productos["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["contenido_neto_compras_productos"] = "Contenido Neto";
	$fieldToolTipscat_compras_productos["Spanish"]["contenido_neto_compras_productos"] = "";
	$placeHolderscat_compras_productos["Spanish"]["contenido_neto_compras_productos"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["costo_neto_producto"] = "Costo";
	$fieldToolTipscat_compras_productos["Spanish"]["costo_neto_producto"] = "";
	$placeHolderscat_compras_productos["Spanish"]["costo_neto_producto"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["cat_compras_productos_permitidos_id"] = "Producto permitido";
	$fieldToolTipscat_compras_productos["Spanish"]["cat_compras_productos_permitidos_id"] = "";
	$placeHolderscat_compras_productos["Spanish"]["cat_compras_productos_permitidos_id"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["costo_unidad_de_medida"] = "Costo UdM";
	$fieldToolTipscat_compras_productos["Spanish"]["costo_unidad_de_medida"] = "";
	$placeHolderscat_compras_productos["Spanish"]["costo_unidad_de_medida"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["fecha_de_actualizacion_costo_udm"] = "Actualización costo";
	$fieldToolTipscat_compras_productos["Spanish"]["fecha_de_actualizacion_costo_udm"] = "";
	$placeHolderscat_compras_productos["Spanish"]["fecha_de_actualizacion_costo_udm"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["cat_compras_productos_presentacion_mu_id_conversion"] = "Cat Compras Productos Presentacion Mu Id Conversion";
	$fieldToolTipscat_compras_productos["Spanish"]["cat_compras_productos_presentacion_mu_id_conversion"] = "";
	$placeHolderscat_compras_productos["Spanish"]["cat_compras_productos_presentacion_mu_id_conversion"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id_conversion"] = "Cat Compras Productos Unidad De Medida Mu Id Conversion";
	$fieldToolTipscat_compras_productos["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id_conversion"] = "";
	$placeHolderscat_compras_productos["Spanish"]["cat_compras_productos_unidad_de_medida_mu_id_conversion"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["contenido_neto_compras_productos_conversion"] = "Contenido Neto Compras Productos Conversion";
	$fieldToolTipscat_compras_productos["Spanish"]["contenido_neto_compras_productos_conversion"] = "";
	$placeHolderscat_compras_productos["Spanish"]["contenido_neto_compras_productos_conversion"] = "";
	$fieldLabelscat_compras_productos["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "Tipo de control";
	$fieldToolTipscat_compras_productos["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "";
	$placeHolderscat_compras_productos["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "";
	if (count($fieldToolTipscat_compras_productos["Spanish"]))
		$tdatacat_compras_productos[".isUseToolTips"] = true;
}





$tdatacat_compras_productos[".shortTableName"] = "cat_compras_productos";
$tdatacat_compras_productos[".nSecOptions"] = 0;

$tdatacat_compras_productos[".mainTableOwnerID"] = "";
$tdatacat_compras_productos[".entityType"] = 0;
$tdatacat_compras_productos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_compras_productos[".strOriginalTableName"] = "cat_compras_productos";

	



$tdatacat_compras_productos[".showAddInPopup"] = false;

$tdatacat_compras_productos[".showEditInPopup"] = false;

$tdatacat_compras_productos[".showViewInPopup"] = false;

$tdatacat_compras_productos[".listAjax"] = false;
//	temporary
//$tdatacat_compras_productos[".listAjax"] = false;

	$tdatacat_compras_productos[".audit"] = true;

	$tdatacat_compras_productos[".locking"] = true;


$pages = $tdatacat_compras_productos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_compras_productos[".edit"] = true;
	$tdatacat_compras_productos[".afterEditAction"] = 1;
	$tdatacat_compras_productos[".closePopupAfterEdit"] = 1;
	$tdatacat_compras_productos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_compras_productos[".add"] = true;
$tdatacat_compras_productos[".afterAddAction"] = 1;
$tdatacat_compras_productos[".closePopupAfterAdd"] = 1;
$tdatacat_compras_productos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_compras_productos[".list"] = true;
}



$tdatacat_compras_productos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_compras_productos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_compras_productos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_compras_productos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_compras_productos[".printFriendly"] = true;
}



$tdatacat_compras_productos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_compras_productos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_compras_productos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_compras_productos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_compras_productos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_compras_productos[".buttonsAdded"] = false;

$tdatacat_compras_productos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_compras_productos[".isUseTimeForSearch"] = false;


$tdatacat_compras_productos[".badgeColor"] = "008B8B";


$tdatacat_compras_productos[".allSearchFields"] = array();
$tdatacat_compras_productos[".filterFields"] = array();
$tdatacat_compras_productos[".requiredSearchFields"] = array();

$tdatacat_compras_productos[".googleLikeFields"] = array();
$tdatacat_compras_productos[".googleLikeFields"][] = "cat_compras_productos_id";
$tdatacat_compras_productos[".googleLikeFields"][] = "time_stamp";
$tdatacat_compras_productos[".googleLikeFields"][] = "vigente";
$tdatacat_compras_productos[".googleLikeFields"][] = "capturista";
$tdatacat_compras_productos[".googleLikeFields"][] = "descripcion_producto";
$tdatacat_compras_productos[".googleLikeFields"][] = "cat_compras_productos_categorias_id";
$tdatacat_compras_productos[".googleLikeFields"][] = "upc";
$tdatacat_compras_productos[".googleLikeFields"][] = "sku";
$tdatacat_compras_productos[".googleLikeFields"][] = "modelo";
$tdatacat_compras_productos[".googleLikeFields"][] = "cat_compras_proveedores_id";
$tdatacat_compras_productos[".googleLikeFields"][] = "cat_compras_productos_presentacion_mu_id";
$tdatacat_compras_productos[".googleLikeFields"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$tdatacat_compras_productos[".googleLikeFields"][] = "contenido_neto_compras_productos";
$tdatacat_compras_productos[".googleLikeFields"][] = "costo_neto_producto";
$tdatacat_compras_productos[".googleLikeFields"][] = "cat_compras_productos_presentacion_mu_id_conversion";
$tdatacat_compras_productos[".googleLikeFields"][] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
$tdatacat_compras_productos[".googleLikeFields"][] = "contenido_neto_compras_productos_conversion";
$tdatacat_compras_productos[".googleLikeFields"][] = "cat_compras_productos_permitidos_id";
$tdatacat_compras_productos[".googleLikeFields"][] = "costo_unidad_de_medida";
$tdatacat_compras_productos[".googleLikeFields"][] = "fecha_de_actualizacion_costo_udm";
$tdatacat_compras_productos[".googleLikeFields"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";



$tdatacat_compras_productos[".tableType"] = "list";

$tdatacat_compras_productos[".printerPageOrientation"] = 0;
$tdatacat_compras_productos[".nPrinterPageScale"] = 100;

$tdatacat_compras_productos[".nPrinterSplitRecords"] = 40;

$tdatacat_compras_productos[".geocodingEnabled"] = false;





$tdatacat_compras_productos[".isResizeColumns"] = true;





$tdatacat_compras_productos[".pageSize"] = 20;

$tdatacat_compras_productos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_compras_productos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_compras_productos[".orderindexes"] = array();


$tdatacat_compras_productos[".sqlHead"] = "SELECT cat_compras_productos_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_producto,  	cat_compras_productos_categorias_id,  	upc,  	sku,  	modelo,  	cat_compras_proveedores_id,  	cat_compras_productos_presentacion_mu_id,  	cat_compras_productos_unidad_de_medida_mu_id,  	contenido_neto_compras_productos,  	costo_neto_producto,  	cat_compras_productos_presentacion_mu_id_conversion,  	cat_compras_productos_unidad_de_medida_mu_id_conversion,  	contenido_neto_compras_productos_conversion,  	cat_compras_productos_permitidos_id,  	costo_unidad_de_medida,  	fecha_de_actualizacion_costo_udm,  	cat_control_aplicaciones_campo_tipo_de_control_id";
$tdatacat_compras_productos[".sqlFrom"] = "FROM cat_compras_productos";
$tdatacat_compras_productos[".sqlWhereExpr"] = "";
$tdatacat_compras_productos[".sqlTail"] = "";

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
$tdatacat_compras_productos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_compras_productos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_compras_productos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_compras_productos[".highlightSearchResults"] = true;

$tableKeyscat_compras_productos = array();
$tableKeyscat_compras_productos[] = "cat_compras_productos_id";
$tdatacat_compras_productos[".Keys"] = $tableKeyscat_compras_productos;


$tdatacat_compras_productos[".hideMobileList"] = array();




//	cat_compras_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_productos_id";
	$fdata["GoodName"] = "cat_compras_productos_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","cat_compras_productos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_productos_id";

		$fdata["sourceSingle"] = "cat_compras_productos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_id";

	
	
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


	$tdatacat_compras_productos["cat_compras_productos_id"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "cat_compras_productos_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "time_stamp";

	
	
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


	$tdatacat_compras_productos["time_stamp"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigente";

	
	
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


	$tdatacat_compras_productos["vigente"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capturista";

	
	
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


	$tdatacat_compras_productos["capturista"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "capturista";
//	descripcion_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_producto";
	$fdata["GoodName"] = "descripcion_producto";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","descripcion_producto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_producto";

		$fdata["sourceSingle"] = "descripcion_producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_producto";

	
	
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


	$tdatacat_compras_productos["descripcion_producto"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "descripcion_producto";
//	cat_compras_productos_categorias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_compras_productos_categorias_id";
	$fdata["GoodName"] = "cat_compras_productos_categorias_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","cat_compras_productos_categorias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_categorias_id";

		$fdata["sourceSingle"] = "cat_compras_productos_categorias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_categorias_id";

	
	
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
	$edata["LookupTable"] = "cat_compras_productos_categorias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_productos_categorias_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_compras_productos_categorias";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdatacat_compras_productos["cat_compras_productos_categorias_id"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "cat_compras_productos_categorias_id";
//	upc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "upc";
	$fdata["GoodName"] = "upc";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","upc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "upc";

		$fdata["sourceSingle"] = "upc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upc";

	
	
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


	$tdatacat_compras_productos["upc"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "upc";
//	sku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sku";
	$fdata["GoodName"] = "sku";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","sku");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sku";

		$fdata["sourceSingle"] = "sku";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sku";

	
	
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


	$tdatacat_compras_productos["sku"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "sku";
//	modelo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "modelo";
	$fdata["GoodName"] = "modelo";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","modelo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "modelo";

		$fdata["sourceSingle"] = "modelo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modelo";

	
	
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


	$tdatacat_compras_productos["modelo"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "modelo";
//	cat_compras_proveedores_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_compras_proveedores_id";
	$fdata["GoodName"] = "cat_compras_proveedores_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","cat_compras_proveedores_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_proveedores_id";

		$fdata["sourceSingle"] = "cat_compras_proveedores_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores_id";

	
	
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
	$edata["LookupTable"] = "cat_compras_proveedores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_proveedores_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_proveedores";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdatacat_compras_productos["cat_compras_proveedores_id"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "cat_compras_proveedores_id";
//	cat_compras_productos_presentacion_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cat_compras_productos_presentacion_mu_id";
	$fdata["GoodName"] = "cat_compras_productos_presentacion_mu_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","cat_compras_productos_presentacion_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_presentacion_mu_id";

		$fdata["sourceSingle"] = "cat_compras_productos_presentacion_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_presentacion_mu_id";

	
	
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


	$tdatacat_compras_productos["cat_compras_productos_presentacion_mu_id"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "cat_compras_productos_presentacion_mu_id";
//	cat_compras_productos_unidad_de_medida_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cat_compras_productos_unidad_de_medida_mu_id";
	$fdata["GoodName"] = "cat_compras_productos_unidad_de_medida_mu_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","cat_compras_productos_unidad_de_medida_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_unidad_de_medida_mu_id";

		$fdata["sourceSingle"] = "cat_compras_productos_unidad_de_medida_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_unidad_de_medida_mu_id";

	
	
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

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdatacat_compras_productos["cat_compras_productos_unidad_de_medida_mu_id"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "cat_compras_productos_unidad_de_medida_mu_id";
//	contenido_neto_compras_productos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "contenido_neto_compras_productos";
	$fdata["GoodName"] = "contenido_neto_compras_productos";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","contenido_neto_compras_productos");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "contenido_neto_compras_productos";

		$fdata["sourceSingle"] = "contenido_neto_compras_productos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contenido_neto_compras_productos";

	
	
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


	$tdatacat_compras_productos["contenido_neto_compras_productos"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "contenido_neto_compras_productos";
//	costo_neto_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "costo_neto_producto";
	$fdata["GoodName"] = "costo_neto_producto";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","costo_neto_producto");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "costo_neto_producto";

		$fdata["sourceSingle"] = "costo_neto_producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costo_neto_producto";

	
	
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


	$tdatacat_compras_productos["costo_neto_producto"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "costo_neto_producto";
//	cat_compras_productos_presentacion_mu_id_conversion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cat_compras_productos_presentacion_mu_id_conversion";
	$fdata["GoodName"] = "cat_compras_productos_presentacion_mu_id_conversion";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","cat_compras_productos_presentacion_mu_id_conversion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_presentacion_mu_id_conversion";

		$fdata["sourceSingle"] = "cat_compras_productos_presentacion_mu_id_conversion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_presentacion_mu_id_conversion";

	
	
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


	$tdatacat_compras_productos["cat_compras_productos_presentacion_mu_id_conversion"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "cat_compras_productos_presentacion_mu_id_conversion";
//	cat_compras_productos_unidad_de_medida_mu_id_conversion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
	$fdata["GoodName"] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","cat_compras_productos_unidad_de_medida_mu_id_conversion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";

		$fdata["sourceSingle"] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";

	
	
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


	$tdatacat_compras_productos["cat_compras_productos_unidad_de_medida_mu_id_conversion"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
//	contenido_neto_compras_productos_conversion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "contenido_neto_compras_productos_conversion";
	$fdata["GoodName"] = "contenido_neto_compras_productos_conversion";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","contenido_neto_compras_productos_conversion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "contenido_neto_compras_productos_conversion";

		$fdata["sourceSingle"] = "contenido_neto_compras_productos_conversion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contenido_neto_compras_productos_conversion";

	
	
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


	$tdatacat_compras_productos["contenido_neto_compras_productos_conversion"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "contenido_neto_compras_productos_conversion";
//	cat_compras_productos_permitidos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cat_compras_productos_permitidos_id";
	$fdata["GoodName"] = "cat_compras_productos_permitidos_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","cat_compras_productos_permitidos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_productos_permitidos_id";

		$fdata["sourceSingle"] = "cat_compras_productos_permitidos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_productos_permitidos_id";

	
	
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
	$edata["LookupTable"] = "cat_compras_productos_permitidos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_productos_permitidos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cat_compras_productos_permitidos_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdatacat_compras_productos["cat_compras_productos_permitidos_id"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "cat_compras_productos_permitidos_id";
//	costo_unidad_de_medida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "costo_unidad_de_medida";
	$fdata["GoodName"] = "costo_unidad_de_medida";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","costo_unidad_de_medida");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "costo_unidad_de_medida";

		$fdata["sourceSingle"] = "costo_unidad_de_medida";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costo_unidad_de_medida";

	
	
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


	$tdatacat_compras_productos["costo_unidad_de_medida"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "costo_unidad_de_medida";
//	fecha_de_actualizacion_costo_udm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "fecha_de_actualizacion_costo_udm";
	$fdata["GoodName"] = "fecha_de_actualizacion_costo_udm";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","fecha_de_actualizacion_costo_udm");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_actualizacion_costo_udm";

		$fdata["sourceSingle"] = "fecha_de_actualizacion_costo_udm";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_actualizacion_costo_udm";

	
	
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


	$tdatacat_compras_productos["fecha_de_actualizacion_costo_udm"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "fecha_de_actualizacion_costo_udm";
//	cat_control_aplicaciones_campo_tipo_de_control_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
	$fdata["GoodName"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
	$fdata["ownerTable"] = "cat_compras_productos";
	$fdata["Label"] = GetFieldLabel("cat_compras_productos","cat_control_aplicaciones_campo_tipo_de_control_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_control_aplicaciones_campo_tipo_de_control_id";

		$fdata["sourceSingle"] = "cat_control_aplicaciones_campo_tipo_de_control_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_campo_tipo_de_control_id";

	
	
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
	$edata["LookupTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_tipo_de_control";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
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


	$tdatacat_compras_productos["cat_control_aplicaciones_campo_tipo_de_control_id"] = $fdata;
		$tdatacat_compras_productos[".searchableFields"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";


$tables_data["cat_compras_productos"]=&$tdatacat_compras_productos;
$field_labels["cat_compras_productos"] = &$fieldLabelscat_compras_productos;
$fieldToolTips["cat_compras_productos"] = &$fieldToolTipscat_compras_productos;
$placeHolders["cat_compras_productos"] = &$placeHolderscat_compras_productos;
$page_titles["cat_compras_productos"] = &$pageTitlescat_compras_productos;


changeTextControlsToDate( "cat_compras_productos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_compras_productos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_compras_productos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_compras_productos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_productos_id,  	time_stamp,  	vigente,  	capturista,  	descripcion_producto,  	cat_compras_productos_categorias_id,  	upc,  	sku,  	modelo,  	cat_compras_proveedores_id,  	cat_compras_productos_presentacion_mu_id,  	cat_compras_productos_unidad_de_medida_mu_id,  	contenido_neto_compras_productos,  	costo_neto_producto,  	cat_compras_productos_presentacion_mu_id_conversion,  	cat_compras_productos_unidad_de_medida_mu_id_conversion,  	contenido_neto_compras_productos_conversion,  	cat_compras_productos_permitidos_id,  	costo_unidad_de_medida,  	fecha_de_actualizacion_costo_udm,  	cat_control_aplicaciones_campo_tipo_de_control_id";
$proto0["m_strFrom"] = "FROM cat_compras_productos";
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
	"m_strName" => "cat_compras_productos_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto6["m_sql"] = "cat_compras_productos_id";
$proto6["m_srcTableName"] = "cat_compras_productos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_compras_productos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_compras_productos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_compras_productos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_producto",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto14["m_sql"] = "descripcion_producto";
$proto14["m_srcTableName"] = "cat_compras_productos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_categorias_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto16["m_sql"] = "cat_compras_productos_categorias_id";
$proto16["m_srcTableName"] = "cat_compras_productos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "upc",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto18["m_sql"] = "upc";
$proto18["m_srcTableName"] = "cat_compras_productos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sku",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto20["m_sql"] = "sku";
$proto20["m_srcTableName"] = "cat_compras_productos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "modelo",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto22["m_sql"] = "modelo";
$proto22["m_srcTableName"] = "cat_compras_productos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto24["m_sql"] = "cat_compras_proveedores_id";
$proto24["m_srcTableName"] = "cat_compras_productos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_presentacion_mu_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto26["m_sql"] = "cat_compras_productos_presentacion_mu_id";
$proto26["m_srcTableName"] = "cat_compras_productos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_unidad_de_medida_mu_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto28["m_sql"] = "cat_compras_productos_unidad_de_medida_mu_id";
$proto28["m_srcTableName"] = "cat_compras_productos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "contenido_neto_compras_productos",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto30["m_sql"] = "contenido_neto_compras_productos";
$proto30["m_srcTableName"] = "cat_compras_productos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_neto_producto",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto32["m_sql"] = "costo_neto_producto";
$proto32["m_srcTableName"] = "cat_compras_productos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_presentacion_mu_id_conversion",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto34["m_sql"] = "cat_compras_productos_presentacion_mu_id_conversion";
$proto34["m_srcTableName"] = "cat_compras_productos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_unidad_de_medida_mu_id_conversion",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto36["m_sql"] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
$proto36["m_srcTableName"] = "cat_compras_productos";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "contenido_neto_compras_productos_conversion",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto38["m_sql"] = "contenido_neto_compras_productos_conversion";
$proto38["m_srcTableName"] = "cat_compras_productos";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_productos_permitidos_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto40["m_sql"] = "cat_compras_productos_permitidos_id";
$proto40["m_srcTableName"] = "cat_compras_productos";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_unidad_de_medida",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto42["m_sql"] = "costo_unidad_de_medida";
$proto42["m_srcTableName"] = "cat_compras_productos";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_actualizacion_costo_udm",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto44["m_sql"] = "fecha_de_actualizacion_costo_udm";
$proto44["m_srcTableName"] = "cat_compras_productos";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_control_aplicaciones_campo_tipo_de_control_id",
	"m_strTable" => "cat_compras_productos",
	"m_srcTableName" => "cat_compras_productos"
));

$proto46["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$proto46["m_srcTableName"] = "cat_compras_productos";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "cat_compras_productos";
$proto49["m_srcTableName"] = "cat_compras_productos";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "cat_compras_productos_id";
$proto49["m_columns"][] = "time_stamp";
$proto49["m_columns"][] = "vigente";
$proto49["m_columns"][] = "capturista";
$proto49["m_columns"][] = "descripcion_producto";
$proto49["m_columns"][] = "cat_compras_productos_categorias_id";
$proto49["m_columns"][] = "upc";
$proto49["m_columns"][] = "sku";
$proto49["m_columns"][] = "modelo";
$proto49["m_columns"][] = "cat_compras_proveedores_id";
$proto49["m_columns"][] = "cat_compras_productos_presentacion_mu_id";
$proto49["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id";
$proto49["m_columns"][] = "contenido_neto_compras_productos";
$proto49["m_columns"][] = "costo_neto_producto";
$proto49["m_columns"][] = "cat_compras_productos_presentacion_mu_id_conversion";
$proto49["m_columns"][] = "cat_compras_productos_unidad_de_medida_mu_id_conversion";
$proto49["m_columns"][] = "contenido_neto_compras_productos_conversion";
$proto49["m_columns"][] = "cat_compras_productos_permitidos_id";
$proto49["m_columns"][] = "costo_unidad_de_medida";
$proto49["m_columns"][] = "fecha_de_actualizacion_costo_udm";
$proto49["m_columns"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "cat_compras_productos";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "cat_compras_productos";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_compras_productos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_compras_productos = createSqlQuery_cat_compras_productos();


	
		;

																					

$tdatacat_compras_productos[".sqlquery"] = $queryData_cat_compras_productos;



$tdatacat_compras_productos[".hasEvents"] = false;

?>