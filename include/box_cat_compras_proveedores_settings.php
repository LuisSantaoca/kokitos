<?php
$tdatabox_cat_compras_proveedores = array();
$tdatabox_cat_compras_proveedores[".searchableFields"] = array();
$tdatabox_cat_compras_proveedores[".ShortName"] = "box_cat_compras_proveedores";
$tdatabox_cat_compras_proveedores[".OwnerID"] = "";
$tdatabox_cat_compras_proveedores[".OriginalTable"] = "cat_compras_proveedores";


$tdatabox_cat_compras_proveedores[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_compras_proveedores[".originalPagesByType"] = $tdatabox_cat_compras_proveedores[".pagesByType"];
$tdatabox_cat_compras_proveedores[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_compras_proveedores[".originalPages"] = $tdatabox_cat_compras_proveedores[".pages"];
$tdatabox_cat_compras_proveedores[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_compras_proveedores[".originalDefaultPages"] = $tdatabox_cat_compras_proveedores[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_compras_proveedores = array();
$fieldToolTipsbox_cat_compras_proveedores = array();
$pageTitlesbox_cat_compras_proveedores = array();
$placeHoldersbox_cat_compras_proveedores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_compras_proveedores["Spanish"] = array();
	$fieldToolTipsbox_cat_compras_proveedores["Spanish"] = array();
	$placeHoldersbox_cat_compras_proveedores["Spanish"] = array();
	$pageTitlesbox_cat_compras_proveedores["Spanish"] = array();
	$fieldLabelsbox_cat_compras_proveedores["Spanish"]["cat_compras_proveedores_id"] = "Id";
	$fieldToolTipsbox_cat_compras_proveedores["Spanish"]["cat_compras_proveedores_id"] = "";
	$placeHoldersbox_cat_compras_proveedores["Spanish"]["cat_compras_proveedores_id"] = "";
	$fieldLabelsbox_cat_compras_proveedores["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipsbox_cat_compras_proveedores["Spanish"]["proveedor"] = "";
	$placeHoldersbox_cat_compras_proveedores["Spanish"]["proveedor"] = "";
	$fieldLabelsbox_cat_compras_proveedores["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_compras_proveedores["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_compras_proveedores["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_cat_compras_proveedores["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_compras_proveedores["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_compras_proveedores["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_compras_proveedores["Spanish"]["descripcion_proveedores"] = "Descripcion Proveedores";
	$fieldToolTipsbox_cat_compras_proveedores["Spanish"]["descripcion_proveedores"] = "";
	$placeHoldersbox_cat_compras_proveedores["Spanish"]["descripcion_proveedores"] = "";
	$fieldLabelsbox_cat_compras_proveedores["Spanish"]["rfc_compras_proveedores"] = "Rfc ";
	$fieldToolTipsbox_cat_compras_proveedores["Spanish"]["rfc_compras_proveedores"] = "";
	$placeHoldersbox_cat_compras_proveedores["Spanish"]["rfc_compras_proveedores"] = "";
	$fieldLabelsbox_cat_compras_proveedores["Spanish"]["costo_check"] = "Costo Check";
	$fieldToolTipsbox_cat_compras_proveedores["Spanish"]["costo_check"] = "";
	$placeHoldersbox_cat_compras_proveedores["Spanish"]["costo_check"] = "";
	$fieldLabelsbox_cat_compras_proveedores["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_compras_proveedores["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_compras_proveedores["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_compras_proveedores["Spanish"]["alias_proveedor"] = "Alias Proveedor";
	$fieldToolTipsbox_cat_compras_proveedores["Spanish"]["alias_proveedor"] = "";
	$placeHoldersbox_cat_compras_proveedores["Spanish"]["alias_proveedor"] = "";
	if (count($fieldToolTipsbox_cat_compras_proveedores["Spanish"]))
		$tdatabox_cat_compras_proveedores[".isUseToolTips"] = true;
}





$tdatabox_cat_compras_proveedores[".shortTableName"] = "box_cat_compras_proveedores";
$tdatabox_cat_compras_proveedores[".nSecOptions"] = 0;

$tdatabox_cat_compras_proveedores[".mainTableOwnerID"] = "";
$tdatabox_cat_compras_proveedores[".entityType"] = 1;
$tdatabox_cat_compras_proveedores[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_compras_proveedores[".strOriginalTableName"] = "cat_compras_proveedores";

	



$tdatabox_cat_compras_proveedores[".showAddInPopup"] = false;

$tdatabox_cat_compras_proveedores[".showEditInPopup"] = false;

$tdatabox_cat_compras_proveedores[".showViewInPopup"] = false;

$tdatabox_cat_compras_proveedores[".listAjax"] = false;
//	temporary
//$tdatabox_cat_compras_proveedores[".listAjax"] = false;

	$tdatabox_cat_compras_proveedores[".audit"] = true;

	$tdatabox_cat_compras_proveedores[".locking"] = true;


$pages = $tdatabox_cat_compras_proveedores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_compras_proveedores[".edit"] = true;
	$tdatabox_cat_compras_proveedores[".afterEditAction"] = 1;
	$tdatabox_cat_compras_proveedores[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_compras_proveedores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_compras_proveedores[".add"] = true;
$tdatabox_cat_compras_proveedores[".afterAddAction"] = 1;
$tdatabox_cat_compras_proveedores[".closePopupAfterAdd"] = 1;
$tdatabox_cat_compras_proveedores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_compras_proveedores[".list"] = true;
}



$tdatabox_cat_compras_proveedores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_compras_proveedores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_compras_proveedores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_compras_proveedores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_compras_proveedores[".printFriendly"] = true;
}



$tdatabox_cat_compras_proveedores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_compras_proveedores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_compras_proveedores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_compras_proveedores[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_compras_proveedores[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_compras_proveedores[".buttonsAdded"] = false;

$tdatabox_cat_compras_proveedores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_compras_proveedores[".isUseTimeForSearch"] = false;


$tdatabox_cat_compras_proveedores[".badgeColor"] = "9ACD32";


$tdatabox_cat_compras_proveedores[".allSearchFields"] = array();
$tdatabox_cat_compras_proveedores[".filterFields"] = array();
$tdatabox_cat_compras_proveedores[".requiredSearchFields"] = array();

$tdatabox_cat_compras_proveedores[".googleLikeFields"] = array();
$tdatabox_cat_compras_proveedores[".googleLikeFields"][] = "proveedor";
$tdatabox_cat_compras_proveedores[".googleLikeFields"][] = "alias_proveedor";



$tdatabox_cat_compras_proveedores[".tableType"] = "list";

$tdatabox_cat_compras_proveedores[".printerPageOrientation"] = 0;
$tdatabox_cat_compras_proveedores[".nPrinterPageScale"] = 100;

$tdatabox_cat_compras_proveedores[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_compras_proveedores[".geocodingEnabled"] = false;





$tdatabox_cat_compras_proveedores[".isResizeColumns"] = true;





$tdatabox_cat_compras_proveedores[".pageSize"] = 20;

$tdatabox_cat_compras_proveedores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_compras_proveedores[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_compras_proveedores[".orderindexes"] = array();


$tdatabox_cat_compras_proveedores[".sqlHead"] = "SELECT cat_compras_proveedores.cat_compras_proveedores_id,  concat(cat_compras_proveedores.descripcion_proveedores, '-', cat_compras_proveedores.rfc_compras_proveedores) AS proveedor,  cat_usuarios.cat_usuarios_licencias_id,  cat_compras_proveedores.capturista,  cat_compras_proveedores.descripcion_proveedores,  cat_compras_proveedores.rfc_compras_proveedores,  cat_compras_proveedores.costo_check,  cat_compras_proveedores.vigente,  cat_compras_proveedores.alias_proveedor";
$tdatabox_cat_compras_proveedores[".sqlFrom"] = "FROM cat_compras_proveedores  LEFT OUTER JOIN cat_usuarios ON cat_compras_proveedores.capturista = cat_usuarios.usuario";
$tdatabox_cat_compras_proveedores[".sqlWhereExpr"] = "(cat_compras_proveedores.vigente =1)";
$tdatabox_cat_compras_proveedores[".sqlTail"] = "";

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
$tdatabox_cat_compras_proveedores[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_compras_proveedores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_compras_proveedores[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_compras_proveedores[".highlightSearchResults"] = true;

$tableKeysbox_cat_compras_proveedores = array();
$tableKeysbox_cat_compras_proveedores[] = "cat_compras_proveedores_id";
$tdatabox_cat_compras_proveedores[".Keys"] = $tableKeysbox_cat_compras_proveedores;


$tdatabox_cat_compras_proveedores[".hideMobileList"] = array();




//	cat_compras_proveedores_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_compras_proveedores_id";
	$fdata["GoodName"] = "cat_compras_proveedores_id";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_proveedores","cat_compras_proveedores_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_compras_proveedores_id";

		$fdata["sourceSingle"] = "cat_compras_proveedores_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores.cat_compras_proveedores_id";

	
	
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


	$tdatabox_cat_compras_proveedores["cat_compras_proveedores_id"] = $fdata;
		$tdatabox_cat_compras_proveedores[".searchableFields"][] = "cat_compras_proveedores_id";
//	proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "proveedor";
	$fdata["GoodName"] = "proveedor";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_proveedores","proveedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "proveedor";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(cat_compras_proveedores.descripcion_proveedores, '-', cat_compras_proveedores.rfc_compras_proveedores)";

	
	
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


	$tdatabox_cat_compras_proveedores["proveedor"] = $fdata;
		$tdatabox_cat_compras_proveedores[".searchableFields"][] = "proveedor";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_proveedores","cat_usuarios_licencias_id");
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


	$tdatabox_cat_compras_proveedores["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_compras_proveedores[".searchableFields"][] = "cat_usuarios_licencias_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_proveedores","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores.capturista";

	
	
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


	$tdatabox_cat_compras_proveedores["capturista"] = $fdata;
		$tdatabox_cat_compras_proveedores[".searchableFields"][] = "capturista";
//	descripcion_proveedores
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_proveedores";
	$fdata["GoodName"] = "descripcion_proveedores";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_proveedores","descripcion_proveedores");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_proveedores";

		$fdata["sourceSingle"] = "descripcion_proveedores";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores.descripcion_proveedores";

	
	
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


	$tdatabox_cat_compras_proveedores["descripcion_proveedores"] = $fdata;
		$tdatabox_cat_compras_proveedores[".searchableFields"][] = "descripcion_proveedores";
//	rfc_compras_proveedores
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rfc_compras_proveedores";
	$fdata["GoodName"] = "rfc_compras_proveedores";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_proveedores","rfc_compras_proveedores");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rfc_compras_proveedores";

		$fdata["sourceSingle"] = "rfc_compras_proveedores";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores.rfc_compras_proveedores";

	
	
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


	$tdatabox_cat_compras_proveedores["rfc_compras_proveedores"] = $fdata;
		$tdatabox_cat_compras_proveedores[".searchableFields"][] = "rfc_compras_proveedores";
//	costo_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "costo_check";
	$fdata["GoodName"] = "costo_check";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_proveedores","costo_check");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "costo_check";

		$fdata["sourceSingle"] = "costo_check";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores.costo_check";

	
	
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


	$tdatabox_cat_compras_proveedores["costo_check"] = $fdata;
		$tdatabox_cat_compras_proveedores[".searchableFields"][] = "costo_check";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_proveedores","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores.vigente";

	
	
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


	$tdatabox_cat_compras_proveedores["vigente"] = $fdata;
		$tdatabox_cat_compras_proveedores[".searchableFields"][] = "vigente";
//	alias_proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "alias_proveedor";
	$fdata["GoodName"] = "alias_proveedor";
	$fdata["ownerTable"] = "cat_compras_proveedores";
	$fdata["Label"] = GetFieldLabel("box_cat_compras_proveedores","alias_proveedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "alias_proveedor";

		$fdata["sourceSingle"] = "alias_proveedor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_compras_proveedores.alias_proveedor";

	
	
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


	$tdatabox_cat_compras_proveedores["alias_proveedor"] = $fdata;
		$tdatabox_cat_compras_proveedores[".searchableFields"][] = "alias_proveedor";


$tables_data["box_cat_compras_proveedores"]=&$tdatabox_cat_compras_proveedores;
$field_labels["box_cat_compras_proveedores"] = &$fieldLabelsbox_cat_compras_proveedores;
$fieldToolTips["box_cat_compras_proveedores"] = &$fieldToolTipsbox_cat_compras_proveedores;
$placeHolders["box_cat_compras_proveedores"] = &$placeHoldersbox_cat_compras_proveedores;
$page_titles["box_cat_compras_proveedores"] = &$pageTitlesbox_cat_compras_proveedores;


changeTextControlsToDate( "box_cat_compras_proveedores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_compras_proveedores"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_compras_proveedores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_compras_proveedores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_compras_proveedores.cat_compras_proveedores_id,  concat(cat_compras_proveedores.descripcion_proveedores, '-', cat_compras_proveedores.rfc_compras_proveedores) AS proveedor,  cat_usuarios.cat_usuarios_licencias_id,  cat_compras_proveedores.capturista,  cat_compras_proveedores.descripcion_proveedores,  cat_compras_proveedores.rfc_compras_proveedores,  cat_compras_proveedores.costo_check,  cat_compras_proveedores.vigente,  cat_compras_proveedores.alias_proveedor";
$proto0["m_strFrom"] = "FROM cat_compras_proveedores  LEFT OUTER JOIN cat_usuarios ON cat_compras_proveedores.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_compras_proveedores.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_compras_proveedores.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "box_cat_compras_proveedores"
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
	"m_strName" => "cat_compras_proveedores_id",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "box_cat_compras_proveedores"
));

$proto6["m_sql"] = "cat_compras_proveedores.cat_compras_proveedores_id";
$proto6["m_srcTableName"] = "box_cat_compras_proveedores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_compras_proveedores.descripcion_proveedores"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_compras_proveedores.rfc_compras_proveedores"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "concat(cat_compras_proveedores.descripcion_proveedores, '-', cat_compras_proveedores.rfc_compras_proveedores)";
$proto8["m_srcTableName"] = "box_cat_compras_proveedores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "proveedor";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_compras_proveedores"
));

$proto13["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto13["m_srcTableName"] = "box_cat_compras_proveedores";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "box_cat_compras_proveedores"
));

$proto15["m_sql"] = "cat_compras_proveedores.capturista";
$proto15["m_srcTableName"] = "box_cat_compras_proveedores";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_proveedores",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "box_cat_compras_proveedores"
));

$proto17["m_sql"] = "cat_compras_proveedores.descripcion_proveedores";
$proto17["m_srcTableName"] = "box_cat_compras_proveedores";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "rfc_compras_proveedores",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "box_cat_compras_proveedores"
));

$proto19["m_sql"] = "cat_compras_proveedores.rfc_compras_proveedores";
$proto19["m_srcTableName"] = "box_cat_compras_proveedores";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_check",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "box_cat_compras_proveedores"
));

$proto21["m_sql"] = "cat_compras_proveedores.costo_check";
$proto21["m_srcTableName"] = "box_cat_compras_proveedores";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "box_cat_compras_proveedores"
));

$proto23["m_sql"] = "cat_compras_proveedores.vigente";
$proto23["m_srcTableName"] = "box_cat_compras_proveedores";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "alias_proveedor",
	"m_strTable" => "cat_compras_proveedores",
	"m_srcTableName" => "box_cat_compras_proveedores"
));

$proto25["m_sql"] = "cat_compras_proveedores.alias_proveedor";
$proto25["m_srcTableName"] = "box_cat_compras_proveedores";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "cat_compras_proveedores";
$proto28["m_srcTableName"] = "box_cat_compras_proveedores";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "cat_compras_proveedores_id";
$proto28["m_columns"][] = "time_stamp";
$proto28["m_columns"][] = "vigente";
$proto28["m_columns"][] = "capturista";
$proto28["m_columns"][] = "descripcion_proveedores";
$proto28["m_columns"][] = "rfc_compras_proveedores";
$proto28["m_columns"][] = "cat_compras_proveedores_categorias_id";
$proto28["m_columns"][] = "id_migracion";
$proto28["m_columns"][] = "llave_rfc_licencia";
$proto28["m_columns"][] = "costo_check";
$proto28["m_columns"][] = "alias_proveedor";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "cat_compras_proveedores";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "box_cat_compras_proveedores";
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
$proto32["m_strName"] = "cat_usuarios";
$proto32["m_srcTableName"] = "box_cat_compras_proveedores";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "cat_usuarios_id";
$proto32["m_columns"][] = "time_stamp";
$proto32["m_columns"][] = "vigente";
$proto32["m_columns"][] = "capturista";
$proto32["m_columns"][] = "usuario";
$proto32["m_columns"][] = "cat_usuarios_licencias_id";
$proto32["m_columns"][] = "pass";
$proto32["m_columns"][] = "nombre";
$proto32["m_columns"][] = "correo";
$proto32["m_columns"][] = "cat_trabajadores_altas_id";
$proto32["m_columns"][] = "res_autorizacion";
$proto32["m_columns"][] = "session";
$proto32["m_columns"][] = "tipo";
$proto32["m_columns"][] = "session_v2";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_compras_proveedores.capturista = cat_usuarios.usuario";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "box_cat_compras_proveedores";
$proto33=array();
$proto33["m_sql"] = "cat_usuarios.usuario = cat_compras_proveedores.capturista";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_compras_proveedores"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "= cat_compras_proveedores.capturista";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_compras_proveedores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_compras_proveedores = createSqlQuery_box_cat_compras_proveedores();


	
		;

									

$tdatabox_cat_compras_proveedores[".sqlquery"] = $queryData_box_cat_compras_proveedores;



$tdatabox_cat_compras_proveedores[".hasEvents"] = false;

?>