<?php
$tdatatr_actividades_cosecha1borrar = array();
$tdatatr_actividades_cosecha1borrar[".searchableFields"] = array();
$tdatatr_actividades_cosecha1borrar[".ShortName"] = "tr_actividades_cosecha1borrar";
$tdatatr_actividades_cosecha1borrar[".OwnerID"] = "";
$tdatatr_actividades_cosecha1borrar[".OriginalTable"] = "tr_actividades_cosecha";


$tdatatr_actividades_cosecha1borrar[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_actividades_cosecha1borrar[".originalPagesByType"] = $tdatatr_actividades_cosecha1borrar[".pagesByType"];
$tdatatr_actividades_cosecha1borrar[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_actividades_cosecha1borrar[".originalPages"] = $tdatatr_actividades_cosecha1borrar[".pages"];
$tdatatr_actividades_cosecha1borrar[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_actividades_cosecha1borrar[".originalDefaultPages"] = $tdatatr_actividades_cosecha1borrar[".defaultPages"];

//	field labels
$fieldLabelstr_actividades_cosecha1borrar = array();
$fieldToolTipstr_actividades_cosecha1borrar = array();
$pageTitlestr_actividades_cosecha1borrar = array();
$placeHolderstr_actividades_cosecha1borrar = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_actividades_cosecha1borrar["Spanish"] = array();
	$fieldToolTipstr_actividades_cosecha1borrar["Spanish"] = array();
	$placeHolderstr_actividades_cosecha1borrar["Spanish"] = array();
	$pageTitlestr_actividades_cosecha1borrar["Spanish"] = array();
	$fieldLabelstr_actividades_cosecha1borrar["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_actividades_cosecha1borrar["Spanish"]["vigente"] = "";
	$placeHolderstr_actividades_cosecha1borrar["Spanish"]["vigente"] = "";
	$fieldLabelstr_actividades_cosecha1borrar["Spanish"]["cat_trabajador_altas_id"] = "Trabajador";
	$fieldToolTipstr_actividades_cosecha1borrar["Spanish"]["cat_trabajador_altas_id"] = "";
	$placeHolderstr_actividades_cosecha1borrar["Spanish"]["cat_trabajador_altas_id"] = "";
	$fieldLabelstr_actividades_cosecha1borrar["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "Producto";
	$fieldToolTipstr_actividades_cosecha1borrar["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$placeHolderstr_actividades_cosecha1borrar["Spanish"]["cat_produccion_cultivos_01_productos_id"] = "";
	$fieldLabelstr_actividades_cosecha1borrar["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstr_actividades_cosecha1borrar["Spanish"]["fecha"] = "";
	$placeHolderstr_actividades_cosecha1borrar["Spanish"]["fecha"] = "";
	$fieldLabelstr_actividades_cosecha1borrar["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipstr_actividades_cosecha1borrar["Spanish"]["nombre_completo"] = "";
	$placeHolderstr_actividades_cosecha1borrar["Spanish"]["nombre_completo"] = "";
	$fieldLabelstr_actividades_cosecha1borrar["Spanish"]["cat_trabajadores_altas_id_empresa"] = "Cat Trabajadores Altas Id Empresa";
	$fieldToolTipstr_actividades_cosecha1borrar["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderstr_actividades_cosecha1borrar["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelstr_actividades_cosecha1borrar["Spanish"]["total_botes"] = "Total Botes";
	$fieldToolTipstr_actividades_cosecha1borrar["Spanish"]["total_botes"] = "";
	$placeHolderstr_actividades_cosecha1borrar["Spanish"]["total_botes"] = "";
	$fieldLabelstr_actividades_cosecha1borrar["Spanish"]["descripcion_producto"] = "Descripcion Producto";
	$fieldToolTipstr_actividades_cosecha1borrar["Spanish"]["descripcion_producto"] = "";
	$placeHolderstr_actividades_cosecha1borrar["Spanish"]["descripcion_producto"] = "";
	if (count($fieldToolTipstr_actividades_cosecha1borrar["Spanish"]))
		$tdatatr_actividades_cosecha1borrar[".isUseToolTips"] = true;
}





$tdatatr_actividades_cosecha1borrar[".shortTableName"] = "tr_actividades_cosecha1borrar";
$tdatatr_actividades_cosecha1borrar[".nSecOptions"] = 0;

$tdatatr_actividades_cosecha1borrar[".mainTableOwnerID"] = "";
$tdatatr_actividades_cosecha1borrar[".entityType"] = 1;
$tdatatr_actividades_cosecha1borrar[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_actividades_cosecha1borrar[".strOriginalTableName"] = "tr_actividades_cosecha";

	



$tdatatr_actividades_cosecha1borrar[".showAddInPopup"] = false;

$tdatatr_actividades_cosecha1borrar[".showEditInPopup"] = false;

$tdatatr_actividades_cosecha1borrar[".showViewInPopup"] = false;

$tdatatr_actividades_cosecha1borrar[".listAjax"] = false;
//	temporary
//$tdatatr_actividades_cosecha1borrar[".listAjax"] = false;

	$tdatatr_actividades_cosecha1borrar[".audit"] = false;

	$tdatatr_actividades_cosecha1borrar[".locking"] = false;


$pages = $tdatatr_actividades_cosecha1borrar[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_actividades_cosecha1borrar[".edit"] = true;
	$tdatatr_actividades_cosecha1borrar[".afterEditAction"] = 1;
	$tdatatr_actividades_cosecha1borrar[".closePopupAfterEdit"] = 1;
	$tdatatr_actividades_cosecha1borrar[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_actividades_cosecha1borrar[".add"] = true;
$tdatatr_actividades_cosecha1borrar[".afterAddAction"] = 1;
$tdatatr_actividades_cosecha1borrar[".closePopupAfterAdd"] = 1;
$tdatatr_actividades_cosecha1borrar[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_actividades_cosecha1borrar[".list"] = true;
}



$tdatatr_actividades_cosecha1borrar[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_actividades_cosecha1borrar[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_actividades_cosecha1borrar[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_actividades_cosecha1borrar[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_actividades_cosecha1borrar[".printFriendly"] = true;
}



$tdatatr_actividades_cosecha1borrar[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_actividades_cosecha1borrar[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_actividades_cosecha1borrar[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_actividades_cosecha1borrar[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_actividades_cosecha1borrar[".ajaxCodeSnippetAdded"] = false;

$tdatatr_actividades_cosecha1borrar[".buttonsAdded"] = false;

$tdatatr_actividades_cosecha1borrar[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatr_actividades_cosecha1borrar[".isUseTimeForSearch"] = false;


$tdatatr_actividades_cosecha1borrar[".badgeColor"] = "E67349";


$tdatatr_actividades_cosecha1borrar[".allSearchFields"] = array();
$tdatatr_actividades_cosecha1borrar[".filterFields"] = array();
$tdatatr_actividades_cosecha1borrar[".requiredSearchFields"] = array();

$tdatatr_actividades_cosecha1borrar[".googleLikeFields"] = array();
$tdatatr_actividades_cosecha1borrar[".googleLikeFields"][] = "fecha";
$tdatatr_actividades_cosecha1borrar[".googleLikeFields"][] = "cat_trabajador_altas_id";
$tdatatr_actividades_cosecha1borrar[".googleLikeFields"][] = "nombre_completo";
$tdatatr_actividades_cosecha1borrar[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatatr_actividades_cosecha1borrar[".googleLikeFields"][] = "total_botes";
$tdatatr_actividades_cosecha1borrar[".googleLikeFields"][] = "vigente";
$tdatatr_actividades_cosecha1borrar[".googleLikeFields"][] = "cat_produccion_cultivos_01_productos_id";
$tdatatr_actividades_cosecha1borrar[".googleLikeFields"][] = "descripcion_producto";



$tdatatr_actividades_cosecha1borrar[".tableType"] = "list";

$tdatatr_actividades_cosecha1borrar[".printerPageOrientation"] = 0;
$tdatatr_actividades_cosecha1borrar[".nPrinterPageScale"] = 100;

$tdatatr_actividades_cosecha1borrar[".nPrinterSplitRecords"] = 40;

$tdatatr_actividades_cosecha1borrar[".geocodingEnabled"] = false;





$tdatatr_actividades_cosecha1borrar[".isResizeColumns"] = true;





$tdatatr_actividades_cosecha1borrar[".pageSize"] = 20;

$tdatatr_actividades_cosecha1borrar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_actividades_cosecha1borrar[".strOrderBy"] = $tstrOrderBy;

$tdatatr_actividades_cosecha1borrar[".orderindexes"] = array();


$tdatatr_actividades_cosecha1borrar[".sqlHead"] = "SELECT DATE(tr_actividades_cosecha.fecha_de_captura) AS fecha,  tr_actividades_cosecha.cat_trabajador_altas_id,  cat_trabajadores_altas.nombre_completo,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  tr_actividades_cosecha.cantidad - tr_actividades_cosecha.descuento AS total_botes,  tr_actividades_cosecha.vigente,  tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id,  cat_produccion_cultivos_01_productos.descripcion_producto";
$tdatatr_actividades_cosecha1borrar[".sqlFrom"] = "FROM tr_actividades_cosecha  LEFT OUTER JOIN cat_trabajadores_altas ON tr_actividades_cosecha.cat_trabajador_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id  INNER JOIN cat_produccion_cultivos_01_productos ON tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id = cat_produccion_cultivos_01_productos.cat_produccion_cultivos_01_productos_id";
$tdatatr_actividades_cosecha1borrar[".sqlWhereExpr"] = "(tr_actividades_cosecha.vigente =1) AND (tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id =2)";
$tdatatr_actividades_cosecha1borrar[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_actividades_cosecha1borrar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_actividades_cosecha1borrar[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_actividades_cosecha1borrar[".highlightSearchResults"] = true;

$tableKeystr_actividades_cosecha1borrar = array();
$tdatatr_actividades_cosecha1borrar[".Keys"] = $tableKeystr_actividades_cosecha1borrar;


$tdatatr_actividades_cosecha1borrar[".hideMobileList"] = array();




//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha1borrar","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(tr_actividades_cosecha.fecha_de_captura)";

	
	
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


	$tdatatr_actividades_cosecha1borrar["fecha"] = $fdata;
		$tdatatr_actividades_cosecha1borrar[".searchableFields"][] = "fecha";
//	cat_trabajador_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_trabajador_altas_id";
	$fdata["GoodName"] = "cat_trabajador_altas_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha1borrar","cat_trabajador_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajador_altas_id";

		$fdata["sourceSingle"] = "cat_trabajador_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cat_trabajador_altas_id";

	
	
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
	$edata["LookupTable"] = "box_cat_trabajadores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_trabajadores_altas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatatr_actividades_cosecha1borrar["cat_trabajador_altas_id"] = $fdata;
		$tdatatr_actividades_cosecha1borrar[".searchableFields"][] = "cat_trabajador_altas_id";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha1borrar","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.nombre_completo";

	
	
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


	$tdatatr_actividades_cosecha1borrar["nombre_completo"] = $fdata;
		$tdatatr_actividades_cosecha1borrar[".searchableFields"][] = "nombre_completo";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha1borrar","cat_trabajadores_altas_id_empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id_empresa";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";

	
	
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


	$tdatatr_actividades_cosecha1borrar["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatatr_actividades_cosecha1borrar[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	total_botes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_botes";
	$fdata["GoodName"] = "total_botes";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha1borrar","total_botes");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "total_botes";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cantidad - tr_actividades_cosecha.descuento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatatr_actividades_cosecha1borrar["total_botes"] = $fdata;
		$tdatatr_actividades_cosecha1borrar[".searchableFields"][] = "total_botes";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha1borrar","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.vigente";

	
	
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


	$tdatatr_actividades_cosecha1borrar["vigente"] = $fdata;
		$tdatatr_actividades_cosecha1borrar[".searchableFields"][] = "vigente";
//	cat_produccion_cultivos_01_productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["GoodName"] = "cat_produccion_cultivos_01_productos_id";
	$fdata["ownerTable"] = "tr_actividades_cosecha";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha1borrar","cat_produccion_cultivos_01_productos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_produccion_cultivos_01_productos_id";

		$fdata["sourceSingle"] = "cat_produccion_cultivos_01_productos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id";

	
	
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
	$edata["LookupTable"] = "cat_produccion_cultivos_01_productos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_produccion_cultivos_01_productos_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion_producto";

	

	
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


	$tdatatr_actividades_cosecha1borrar["cat_produccion_cultivos_01_productos_id"] = $fdata;
		$tdatatr_actividades_cosecha1borrar[".searchableFields"][] = "cat_produccion_cultivos_01_productos_id";
//	descripcion_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "descripcion_producto";
	$fdata["GoodName"] = "descripcion_producto";
	$fdata["ownerTable"] = "cat_produccion_cultivos_01_productos";
	$fdata["Label"] = GetFieldLabel("tr_actividades_cosecha1borrar","descripcion_producto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_producto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_produccion_cultivos_01_productos.descripcion_producto";

	
	
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


	$tdatatr_actividades_cosecha1borrar["descripcion_producto"] = $fdata;
		$tdatatr_actividades_cosecha1borrar[".searchableFields"][] = "descripcion_producto";


$tables_data["tr_actividades_cosecha1borrar"]=&$tdatatr_actividades_cosecha1borrar;
$field_labels["tr_actividades_cosecha1borrar"] = &$fieldLabelstr_actividades_cosecha1borrar;
$fieldToolTips["tr_actividades_cosecha1borrar"] = &$fieldToolTipstr_actividades_cosecha1borrar;
$placeHolders["tr_actividades_cosecha1borrar"] = &$placeHolderstr_actividades_cosecha1borrar;
$page_titles["tr_actividades_cosecha1borrar"] = &$pageTitlestr_actividades_cosecha1borrar;


changeTextControlsToDate( "tr_actividades_cosecha1borrar" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_actividades_cosecha1borrar"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_actividades_cosecha1borrar"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_actividades_cosecha1borrar()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DATE(tr_actividades_cosecha.fecha_de_captura) AS fecha,  tr_actividades_cosecha.cat_trabajador_altas_id,  cat_trabajadores_altas.nombre_completo,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  tr_actividades_cosecha.cantidad - tr_actividades_cosecha.descuento AS total_botes,  tr_actividades_cosecha.vigente,  tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id,  cat_produccion_cultivos_01_productos.descripcion_producto";
$proto0["m_strFrom"] = "FROM tr_actividades_cosecha  LEFT OUTER JOIN cat_trabajadores_altas ON tr_actividades_cosecha.cat_trabajador_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id  INNER JOIN cat_produccion_cultivos_01_productos ON tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id = cat_produccion_cultivos_01_productos.cat_produccion_cultivos_01_productos_id";
$proto0["m_strWhere"] = "(tr_actividades_cosecha.vigente =1) AND (tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id =2)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(tr_actividades_cosecha.vigente =1) AND (tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id =2)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(tr_actividades_cosecha.vigente =1) AND (tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id =2)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "tr_actividades_cosecha.vigente =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id =2";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_produccion_cultivos_01_productos_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=2";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tr_actividades_cosecha.fecha_de_captura"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "DATE(tr_actividades_cosecha.fecha_de_captura)";
$proto10["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "fecha";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajador_altas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto13["m_sql"] = "tr_actividades_cosecha.cat_trabajador_altas_id";
$proto13["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto15["m_sql"] = "cat_trabajadores_altas.nombre_completo";
$proto15["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto17["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto17["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "tr_actividades_cosecha.cantidad - tr_actividades_cosecha.descuento"
));

$proto19["m_sql"] = "tr_actividades_cosecha.cantidad - tr_actividades_cosecha.descuento";
$proto19["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "total_botes";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto21["m_sql"] = "tr_actividades_cosecha.vigente";
$proto21["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_produccion_cultivos_01_productos_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto23["m_sql"] = "tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id";
$proto23["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_producto",
	"m_strTable" => "cat_produccion_cultivos_01_productos",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto25["m_sql"] = "cat_produccion_cultivos_01_productos.descripcion_producto";
$proto25["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "tr_actividades_cosecha";
$proto28["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "calidad";
$proto28["m_columns"][] = "cantidad";
$proto28["m_columns"][] = "capturista";
$proto28["m_columns"][] = "cat_actividades_especificas_id";
$proto28["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto28["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto28["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto28["m_columns"][] = "cat_nominas_02_actividades_id";
$proto28["m_columns"][] = "cat_nominas_tabulador_actividades_sueldos_variables_id";
$proto28["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto28["m_columns"][] = "cat_produccion_empaques_id";
$proto28["m_columns"][] = "cat_trabajador_altas_id";
$proto28["m_columns"][] = "cat_usuarios_licencias_id";
$proto28["m_columns"][] = "consecutivo_id";
$proto28["m_columns"][] = "descuento";
$proto28["m_columns"][] = "fecha";
$proto28["m_columns"][] = "fecha_de_captura";
$proto28["m_columns"][] = "identificador_dispositivo";
$proto28["m_columns"][] = "Lat";
$proto28["m_columns"][] = "llave_fecha_nominas_uuid";
$proto28["m_columns"][] = "llave_fecha_trabajador";
$proto28["m_columns"][] = "llave_fecha_trabajador_actividad";
$proto28["m_columns"][] = "llave_fecha_trabajador_catnominas02actividades";
$proto28["m_columns"][] = "llave_fecha_up_consecutivo";
$proto28["m_columns"][] = "llave_fecha_up_consecutivo_trab";
$proto28["m_columns"][] = "llave_up_lote_actesp_prod";
$proto28["m_columns"][] = "llave_up_lote_actesp_prod_uuid";
$proto28["m_columns"][] = "Lng";
$proto28["m_columns"][] = "numero_de_bote";
$proto28["m_columns"][] = "peso";
$proto28["m_columns"][] = "surco";
$proto28["m_columns"][] = "time_stamp";
$proto28["m_columns"][] = "tr_actividades_cosecha_id";
$proto28["m_columns"][] = "tr_actividades_cosecha_uuid";
$proto28["m_columns"][] = "tunel";
$proto28["m_columns"][] = "vigente";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "tr_actividades_cosecha";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
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
$proto32["m_strName"] = "cat_trabajadores_altas";
$proto32["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "apellido_materno";
$proto32["m_columns"][] = "apellido_paterno";
$proto32["m_columns"][] = "banco";
$proto32["m_columns"][] = "calle";
$proto32["m_columns"][] = "capturista";
$proto32["m_columns"][] = "cat_holding_02_empresas";
$proto32["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto32["m_columns"][] = "cat_trabajadores_altas_id";
$proto32["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto32["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$proto32["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto32["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto32["m_columns"][] = "cat_trabajadores_puestos_id";
$proto32["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto32["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto32["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto32["m_columns"][] = "celular_mensajes";
$proto32["m_columns"][] = "codigo_postal";
$proto32["m_columns"][] = "colonia";
$proto32["m_columns"][] = "contacto_emergencia";
$proto32["m_columns"][] = "cuenta_bancaria";
$proto32["m_columns"][] = "curp";
$proto32["m_columns"][] = "estado";
$proto32["m_columns"][] = "estado_nacimiento";
$proto32["m_columns"][] = "estatus";
$proto32["m_columns"][] = "face_id";
$proto32["m_columns"][] = "fecha_de_captura";
$proto32["m_columns"][] = "fecha_de_ingreso";
$proto32["m_columns"][] = "fecha_de_nacimiento";
$proto32["m_columns"][] = "fecha_de_registro";
$proto32["m_columns"][] = "link_foto";
$proto32["m_columns"][] = "municipio";
$proto32["m_columns"][] = "municipio_nacimiento";
$proto32["m_columns"][] = "nacionalidad";
$proto32["m_columns"][] = "nombre_completo";
$proto32["m_columns"][] = "num_seguridad_social";
$proto32["m_columns"][] = "numero_domicilio";
$proto32["m_columns"][] = "observaciones";
$proto32["m_columns"][] = "permiso_msm";
$proto32["m_columns"][] = "primer_nombre";
$proto32["m_columns"][] = "rfc";
$proto32["m_columns"][] = "segundo_nombre";
$proto32["m_columns"][] = "telefono_emergencia";
$proto32["m_columns"][] = "time_stamp";
$proto32["m_columns"][] = "tr_tags_numero_asignado";
$proto32["m_columns"][] = "vigente";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_altas ON tr_actividades_cosecha.cat_trabajador_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto33=array();
$proto33["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id = tr_actividades_cosecha.cat_trabajador_altas_id";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= tr_actividades_cosecha.cat_trabajador_altas_id";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
												$proto35=array();
$proto35["m_link"] = "SQLL_INNERJOIN";
			$proto36=array();
$proto36["m_strName"] = "cat_produccion_cultivos_01_productos";
$proto36["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "capturista";
$proto36["m_columns"][] = "cat_produccion_cultivos_01_productos_id";
$proto36["m_columns"][] = "descripcion_producto";
$proto36["m_columns"][] = "time_stamp";
$proto36["m_columns"][] = "vigente";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "INNER JOIN cat_produccion_cultivos_01_productos ON tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id = cat_produccion_cultivos_01_productos.cat_produccion_cultivos_01_productos_id";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "tr_actividades_cosecha1borrar";
$proto37=array();
$proto37["m_sql"] = "cat_produccion_cultivos_01_productos.cat_produccion_cultivos_01_productos_id = tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_produccion_cultivos_01_productos_id",
	"m_strTable" => "cat_produccion_cultivos_01_productos",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= tr_actividades_cosecha.cat_produccion_cultivos_01_productos_id";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto39=array();
						$proto40=array();
$proto40["m_functiontype"] = "SQLF_CUSTOM";
$proto40["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tr_actividades_cosecha.fecha_de_captura"
));

$proto40["m_arguments"][]=$obj;
$proto40["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto40);

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajador_altas_id",
	"m_strTable" => "tr_actividades_cosecha",
	"m_srcTableName" => "tr_actividades_cosecha1borrar"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_actividades_cosecha1borrar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_actividades_cosecha1borrar = createSqlQuery_tr_actividades_cosecha1borrar();


	
		;

								

$tdatatr_actividades_cosecha1borrar[".sqlquery"] = $queryData_tr_actividades_cosecha1borrar;



include_once(getabspath("include/tr_actividades_cosecha1borrar_events.php"));
$tdatatr_actividades_cosecha1borrar[".hasEvents"] = true;

?>