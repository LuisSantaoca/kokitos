<?php
$tdatatr_compras_proveedores_02_saldos = array();
$tdatatr_compras_proveedores_02_saldos[".searchableFields"] = array();
$tdatatr_compras_proveedores_02_saldos[".ShortName"] = "tr_compras_proveedores_02_saldos";
$tdatatr_compras_proveedores_02_saldos[".OwnerID"] = "";
$tdatatr_compras_proveedores_02_saldos[".OriginalTable"] = "tr_compras_proveedores_01_cargos_abonos";


$tdatatr_compras_proveedores_02_saldos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_compras_proveedores_02_saldos[".originalPagesByType"] = $tdatatr_compras_proveedores_02_saldos[".pagesByType"];
$tdatatr_compras_proveedores_02_saldos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_compras_proveedores_02_saldos[".originalPages"] = $tdatatr_compras_proveedores_02_saldos[".pages"];
$tdatatr_compras_proveedores_02_saldos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_compras_proveedores_02_saldos[".originalDefaultPages"] = $tdatatr_compras_proveedores_02_saldos[".defaultPages"];

//	field labels
$fieldLabelstr_compras_proveedores_02_saldos = array();
$fieldToolTipstr_compras_proveedores_02_saldos = array();
$pageTitlestr_compras_proveedores_02_saldos = array();
$placeHolderstr_compras_proveedores_02_saldos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_compras_proveedores_02_saldos["Spanish"] = array();
	$fieldToolTipstr_compras_proveedores_02_saldos["Spanish"] = array();
	$placeHolderstr_compras_proveedores_02_saldos["Spanish"] = array();
	$pageTitlestr_compras_proveedores_02_saldos["Spanish"] = array();
	$fieldLabelstr_compras_proveedores_02_saldos["Spanish"]["cat_compras_proveedores_id"] = "Proveedor";
	$fieldToolTipstr_compras_proveedores_02_saldos["Spanish"]["cat_compras_proveedores_id"] = "";
	$placeHolderstr_compras_proveedores_02_saldos["Spanish"]["cat_compras_proveedores_id"] = "";
	$fieldLabelstr_compras_proveedores_02_saldos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipstr_compras_proveedores_02_saldos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderstr_compras_proveedores_02_saldos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelstr_compras_proveedores_02_saldos["Spanish"]["total_compras_abonos"] = "Total Compras Abonos";
	$fieldToolTipstr_compras_proveedores_02_saldos["Spanish"]["total_compras_abonos"] = "";
	$placeHolderstr_compras_proveedores_02_saldos["Spanish"]["total_compras_abonos"] = "";
	$fieldLabelstr_compras_proveedores_02_saldos["Spanish"]["total_pagos_cargos"] = "Total Pagos Cargos";
	$fieldToolTipstr_compras_proveedores_02_saldos["Spanish"]["total_pagos_cargos"] = "";
	$placeHolderstr_compras_proveedores_02_saldos["Spanish"]["total_pagos_cargos"] = "";
	$fieldLabelstr_compras_proveedores_02_saldos["Spanish"]["saldo"] = "Saldo";
	$fieldToolTipstr_compras_proveedores_02_saldos["Spanish"]["saldo"] = "";
	$placeHolderstr_compras_proveedores_02_saldos["Spanish"]["saldo"] = "";
	if (count($fieldToolTipstr_compras_proveedores_02_saldos["Spanish"]))
		$tdatatr_compras_proveedores_02_saldos[".isUseToolTips"] = true;
}





$tdatatr_compras_proveedores_02_saldos[".shortTableName"] = "tr_compras_proveedores_02_saldos";
$tdatatr_compras_proveedores_02_saldos[".nSecOptions"] = 0;

$tdatatr_compras_proveedores_02_saldos[".mainTableOwnerID"] = "";
$tdatatr_compras_proveedores_02_saldos[".entityType"] = 1;
$tdatatr_compras_proveedores_02_saldos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_compras_proveedores_02_saldos[".strOriginalTableName"] = "tr_compras_proveedores_01_cargos_abonos";

	



$tdatatr_compras_proveedores_02_saldos[".showAddInPopup"] = false;

$tdatatr_compras_proveedores_02_saldos[".showEditInPopup"] = false;

$tdatatr_compras_proveedores_02_saldos[".showViewInPopup"] = false;

$tdatatr_compras_proveedores_02_saldos[".listAjax"] = false;
//	temporary
//$tdatatr_compras_proveedores_02_saldos[".listAjax"] = false;

	$tdatatr_compras_proveedores_02_saldos[".audit"] = false;

	$tdatatr_compras_proveedores_02_saldos[".locking"] = false;


$pages = $tdatatr_compras_proveedores_02_saldos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_compras_proveedores_02_saldos[".edit"] = true;
	$tdatatr_compras_proveedores_02_saldos[".afterEditAction"] = 1;
	$tdatatr_compras_proveedores_02_saldos[".closePopupAfterEdit"] = 1;
	$tdatatr_compras_proveedores_02_saldos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_compras_proveedores_02_saldos[".add"] = true;
$tdatatr_compras_proveedores_02_saldos[".afterAddAction"] = 1;
$tdatatr_compras_proveedores_02_saldos[".closePopupAfterAdd"] = 1;
$tdatatr_compras_proveedores_02_saldos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_compras_proveedores_02_saldos[".list"] = true;
}



$tdatatr_compras_proveedores_02_saldos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_compras_proveedores_02_saldos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_compras_proveedores_02_saldos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_compras_proveedores_02_saldos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_compras_proveedores_02_saldos[".printFriendly"] = true;
}



$tdatatr_compras_proveedores_02_saldos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_compras_proveedores_02_saldos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_compras_proveedores_02_saldos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_compras_proveedores_02_saldos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_compras_proveedores_02_saldos[".ajaxCodeSnippetAdded"] = false;

$tdatatr_compras_proveedores_02_saldos[".buttonsAdded"] = false;

$tdatatr_compras_proveedores_02_saldos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_compras_proveedores_02_saldos[".isUseTimeForSearch"] = false;


$tdatatr_compras_proveedores_02_saldos[".badgeColor"] = "2F4F4F";


$tdatatr_compras_proveedores_02_saldos[".allSearchFields"] = array();
$tdatatr_compras_proveedores_02_saldos[".filterFields"] = array();
$tdatatr_compras_proveedores_02_saldos[".requiredSearchFields"] = array();

$tdatatr_compras_proveedores_02_saldos[".googleLikeFields"] = array();
$tdatatr_compras_proveedores_02_saldos[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatatr_compras_proveedores_02_saldos[".googleLikeFields"][] = "cat_compras_proveedores_id";
$tdatatr_compras_proveedores_02_saldos[".googleLikeFields"][] = "total_compras_abonos";
$tdatatr_compras_proveedores_02_saldos[".googleLikeFields"][] = "total_pagos_cargos";
$tdatatr_compras_proveedores_02_saldos[".googleLikeFields"][] = "saldo";



$tdatatr_compras_proveedores_02_saldos[".tableType"] = "list";

$tdatatr_compras_proveedores_02_saldos[".printerPageOrientation"] = 0;
$tdatatr_compras_proveedores_02_saldos[".nPrinterPageScale"] = 100;

$tdatatr_compras_proveedores_02_saldos[".nPrinterSplitRecords"] = 40;

$tdatatr_compras_proveedores_02_saldos[".geocodingEnabled"] = false;





$tdatatr_compras_proveedores_02_saldos[".isResizeColumns"] = true;





$tdatatr_compras_proveedores_02_saldos[".pageSize"] = 20;

$tdatatr_compras_proveedores_02_saldos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_compras_proveedores_02_saldos[".strOrderBy"] = $tstrOrderBy;

$tdatatr_compras_proveedores_02_saldos[".orderindexes"] = array();


$tdatatr_compras_proveedores_02_saldos[".sqlHead"] = "SELECT cat_usuarios.cat_usuarios_licencias_id,  tr_compras_proveedores_01_cargos_abonos.cat_compras_proveedores_id,  if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra))  AS total_compras_abonos,  if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago)) AS total_pagos_cargos,  if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra)) - if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago)) as saldo";
$tdatatr_compras_proveedores_02_saldos[".sqlFrom"] = "FROM tr_compras_proveedores_01_cargos_abonos  INNER JOIN cat_usuarios ON tr_compras_proveedores_01_cargos_abonos.capturista = cat_usuarios.usuario";
$tdatatr_compras_proveedores_02_saldos[".sqlWhereExpr"] = "";
$tdatatr_compras_proveedores_02_saldos[".sqlTail"] = "";

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
$tdatatr_compras_proveedores_02_saldos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_compras_proveedores_02_saldos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_compras_proveedores_02_saldos[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_compras_proveedores_02_saldos[".highlightSearchResults"] = true;

$tableKeystr_compras_proveedores_02_saldos = array();
$tdatatr_compras_proveedores_02_saldos[".Keys"] = $tableKeystr_compras_proveedores_02_saldos;


$tdatatr_compras_proveedores_02_saldos[".hideMobileList"] = array();




//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("tr_compras_proveedores_02_saldos","cat_usuarios_licencias_id");
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


	$tdatatr_compras_proveedores_02_saldos["cat_usuarios_licencias_id"] = $fdata;
		$tdatatr_compras_proveedores_02_saldos[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_compras_proveedores_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_compras_proveedores_id";
	$fdata["GoodName"] = "cat_compras_proveedores_id";
	$fdata["ownerTable"] = "tr_compras_proveedores_01_cargos_abonos";
	$fdata["Label"] = GetFieldLabel("tr_compras_proveedores_02_saldos","cat_compras_proveedores_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_compras_proveedores_id";

		$fdata["sourceSingle"] = "cat_compras_proveedores_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_compras_proveedores_01_cargos_abonos.cat_compras_proveedores_id";

	
	
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
	$edata["LookupTable"] = "box_cat_compras_proveedores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_compras_proveedores_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "proveedor";

	

	
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


	$tdatatr_compras_proveedores_02_saldos["cat_compras_proveedores_id"] = $fdata;
		$tdatatr_compras_proveedores_02_saldos[".searchableFields"][] = "cat_compras_proveedores_id";
//	total_compras_abonos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "total_compras_abonos";
	$fdata["GoodName"] = "total_compras_abonos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_compras_proveedores_02_saldos","total_compras_abonos");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "total_compras_abonos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra))";

	
	
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


	$tdatatr_compras_proveedores_02_saldos["total_compras_abonos"] = $fdata;
		$tdatatr_compras_proveedores_02_saldos[".searchableFields"][] = "total_compras_abonos";
//	total_pagos_cargos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_pagos_cargos";
	$fdata["GoodName"] = "total_pagos_cargos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_compras_proveedores_02_saldos","total_pagos_cargos");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "total_pagos_cargos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago))";

	
	
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


	$tdatatr_compras_proveedores_02_saldos["total_pagos_cargos"] = $fdata;
		$tdatatr_compras_proveedores_02_saldos[".searchableFields"][] = "total_pagos_cargos";
//	saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "saldo";
	$fdata["GoodName"] = "saldo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("tr_compras_proveedores_02_saldos","saldo");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "saldo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra)) - if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago))";

	
	
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


	$tdatatr_compras_proveedores_02_saldos["saldo"] = $fdata;
		$tdatatr_compras_proveedores_02_saldos[".searchableFields"][] = "saldo";


$tables_data["tr_compras_proveedores_02_saldos"]=&$tdatatr_compras_proveedores_02_saldos;
$field_labels["tr_compras_proveedores_02_saldos"] = &$fieldLabelstr_compras_proveedores_02_saldos;
$fieldToolTips["tr_compras_proveedores_02_saldos"] = &$fieldToolTipstr_compras_proveedores_02_saldos;
$placeHolders["tr_compras_proveedores_02_saldos"] = &$placeHolderstr_compras_proveedores_02_saldos;
$page_titles["tr_compras_proveedores_02_saldos"] = &$pageTitlestr_compras_proveedores_02_saldos;


changeTextControlsToDate( "tr_compras_proveedores_02_saldos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_compras_proveedores_02_saldos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_compras_proveedores_02_saldos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_compras_proveedores_02_saldos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_usuarios.cat_usuarios_licencias_id,  tr_compras_proveedores_01_cargos_abonos.cat_compras_proveedores_id,  if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra))  AS total_compras_abonos,  if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago)) AS total_pagos_cargos,  if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra)) - if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago)) as saldo";
$proto0["m_strFrom"] = "FROM tr_compras_proveedores_01_cargos_abonos  INNER JOIN cat_usuarios ON tr_compras_proveedores_01_cargos_abonos.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "tr_compras_proveedores_02_saldos"
));

$proto6["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto6["m_srcTableName"] = "tr_compras_proveedores_02_saldos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "tr_compras_proveedores_01_cargos_abonos",
	"m_srcTableName" => "tr_compras_proveedores_02_saldos"
));

$proto8["m_sql"] = "tr_compras_proveedores_01_cargos_abonos.cat_compras_proveedores_id";
$proto8["m_srcTableName"] = "tr_compras_proveedores_02_saldos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra) is null"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra)"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra))";
$proto10["m_srcTableName"] = "tr_compras_proveedores_02_saldos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "total_compras_abonos";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$proto16=array();
$proto16["m_functiontype"] = "SQLF_CUSTOM";
$proto16["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago) is null"
));

$proto16["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto16["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago)"
));

$proto16["m_arguments"][]=$obj;
$proto16["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto16);

$proto15["m_sql"] = "if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago))";
$proto15["m_srcTableName"] = "tr_compras_proveedores_02_saldos";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "total_pagos_cargos";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra)) - if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago))"
));

$proto20["m_sql"] = "if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_abono_compra)) - if(SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago) is null,0,SUM(tr_compras_proveedores_01_cargos_abonos.importe_cargo_pago))";
$proto20["m_srcTableName"] = "tr_compras_proveedores_02_saldos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "saldo";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "tr_compras_proveedores_01_cargos_abonos";
$proto23["m_srcTableName"] = "tr_compras_proveedores_02_saldos";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "alias_cuenta_de_abono_compra";
$proto23["m_columns"][] = "alias_cuenta_de_balance";
$proto23["m_columns"][] = "alias_cuenta_de_cargo_pago";
$proto23["m_columns"][] = "alias_proveedor";
$proto23["m_columns"][] = "capturista";
$proto23["m_columns"][] = "cat_compras_cargo_abono_mu_id";
$proto23["m_columns"][] = "cat_compras_documentos_mu_id";
$proto23["m_columns"][] = "cat_compras_estatus_mu_id";
$proto23["m_columns"][] = "cat_compras_proveedores_id";
$proto23["m_columns"][] = "cat_finanzas_bancos_cuentas_id";
$proto23["m_columns"][] = "cat_finanzas_cajas_chicas_id";
$proto23["m_columns"][] = "cat_finanzas_cuentas_de_balance_03_mu_id";
$proto23["m_columns"][] = "cat_finanzas_cuentas_de_balance_04_llave";
$proto23["m_columns"][] = "concepto";
$proto23["m_columns"][] = "consecutivo_id";
$proto23["m_columns"][] = "fecha_de_compra";
$proto23["m_columns"][] = "fecha_de_pago";
$proto23["m_columns"][] = "fecha_de_recibo";
$proto23["m_columns"][] = "fecha_de_requisicion";
$proto23["m_columns"][] = "fecha_de_solicitud";
$proto23["m_columns"][] = "fecha_de_vencimiento";
$proto23["m_columns"][] = "imei";
$proto23["m_columns"][] = "importe_abono_compra";
$proto23["m_columns"][] = "importe_cargo_pago";
$proto23["m_columns"][] = "llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago";
$proto23["m_columns"][] = "llave_uuid_compra_pago";
$proto23["m_columns"][] = "observacion_abono_compra";
$proto23["m_columns"][] = "observacion_cargo_pago";
$proto23["m_columns"][] = "orden_de_compra_proveedor";
$proto23["m_columns"][] = "referencia";
$proto23["m_columns"][] = "referencia_bancaria";
$proto23["m_columns"][] = "time_stamp";
$proto23["m_columns"][] = "tr_compras_almacenes_01_recibo_lpn_uuid";
$proto23["m_columns"][] = "tr_compras_proveedores_01_cargos_abonos_id";
$proto23["m_columns"][] = "tr_compras_requisiciones_01_uuid";
$proto23["m_columns"][] = "tr_compras_requisiciones_01_uuid_pago";
$proto23["m_columns"][] = "tr_finanzas_bancos_01_id";
$proto23["m_columns"][] = "uuid_cargo_abono_compra";
$proto23["m_columns"][] = "uuid_cargo_abono_pago";
$proto23["m_columns"][] = "uuid_sat";
$proto23["m_columns"][] = "vigente";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "tr_compras_proveedores_01_cargos_abonos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "tr_compras_proveedores_02_saldos";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "cat_usuarios";
$proto27["m_srcTableName"] = "tr_compras_proveedores_02_saldos";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "capturista";
$proto27["m_columns"][] = "cat_trabajadores_altas_id";
$proto27["m_columns"][] = "cat_usuarios_id";
$proto27["m_columns"][] = "cat_usuarios_licencias_id";
$proto27["m_columns"][] = "correo";
$proto27["m_columns"][] = "nombre";
$proto27["m_columns"][] = "pass";
$proto27["m_columns"][] = "res_autorizacion";
$proto27["m_columns"][] = "session";
$proto27["m_columns"][] = "session_v2";
$proto27["m_columns"][] = "time_stamp";
$proto27["m_columns"][] = "tipo";
$proto27["m_columns"][] = "usuario";
$proto27["m_columns"][] = "vigente";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN cat_usuarios ON tr_compras_proveedores_01_cargos_abonos.capturista = cat_usuarios.usuario";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "tr_compras_proveedores_02_saldos";
$proto28=array();
$proto28["m_sql"] = "cat_usuarios.usuario = tr_compras_proveedores_01_cargos_abonos.capturista";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "tr_compras_proveedores_02_saldos"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= tr_compras_proveedores_01_cargos_abonos.capturista";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "tr_compras_proveedores_01_cargos_abonos",
	"m_srcTableName" => "tr_compras_proveedores_02_saldos"
));

$proto30["m_column"]=$obj;
$obj = new SQLGroupByItem($proto30);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_compras_proveedores_02_saldos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_compras_proveedores_02_saldos = createSqlQuery_tr_compras_proveedores_02_saldos();


	
		;

					

$tdatatr_compras_proveedores_02_saldos[".sqlquery"] = $queryData_tr_compras_proveedores_02_saldos;



$tdatatr_compras_proveedores_02_saldos[".hasEvents"] = false;

?>