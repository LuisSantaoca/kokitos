<?php
$tdatacat_finanzas_centros_de_costos = array();
$tdatacat_finanzas_centros_de_costos[".searchableFields"] = array();
$tdatacat_finanzas_centros_de_costos[".ShortName"] = "cat_finanzas_centros_de_costos";
$tdatacat_finanzas_centros_de_costos[".OwnerID"] = "";
$tdatacat_finanzas_centros_de_costos[".OriginalTable"] = "cat_finanzas_centros_de_costos";


$tdatacat_finanzas_centros_de_costos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_finanzas_centros_de_costos[".originalPagesByType"] = $tdatacat_finanzas_centros_de_costos[".pagesByType"];
$tdatacat_finanzas_centros_de_costos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_finanzas_centros_de_costos[".originalPages"] = $tdatacat_finanzas_centros_de_costos[".pages"];
$tdatacat_finanzas_centros_de_costos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_finanzas_centros_de_costos[".originalDefaultPages"] = $tdatacat_finanzas_centros_de_costos[".defaultPages"];

//	field labels
$fieldLabelscat_finanzas_centros_de_costos = array();
$fieldToolTipscat_finanzas_centros_de_costos = array();
$pageTitlescat_finanzas_centros_de_costos = array();
$placeHolderscat_finanzas_centros_de_costos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_finanzas_centros_de_costos["Spanish"] = array();
	$fieldToolTipscat_finanzas_centros_de_costos["Spanish"] = array();
	$placeHolderscat_finanzas_centros_de_costos["Spanish"] = array();
	$pageTitlescat_finanzas_centros_de_costos["Spanish"] = array();
	$fieldLabelscat_finanzas_centros_de_costos["Spanish"]["cat_finanzas_centros_de_costos_id"] = "Id";
	$fieldToolTipscat_finanzas_centros_de_costos["Spanish"]["cat_finanzas_centros_de_costos_id"] = "";
	$placeHolderscat_finanzas_centros_de_costos["Spanish"]["cat_finanzas_centros_de_costos_id"] = "";
	$fieldLabelscat_finanzas_centros_de_costos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_finanzas_centros_de_costos["Spanish"]["vigente"] = "";
	$placeHolderscat_finanzas_centros_de_costos["Spanish"]["vigente"] = "";
	$fieldLabelscat_finanzas_centros_de_costos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_finanzas_centros_de_costos["Spanish"]["capturista"] = "";
	$placeHolderscat_finanzas_centros_de_costos["Spanish"]["capturista"] = "";
	$fieldLabelscat_finanzas_centros_de_costos["Spanish"]["descripcion_centro_de_costos"] = "Descripcion CCs";
	$fieldToolTipscat_finanzas_centros_de_costos["Spanish"]["descripcion_centro_de_costos"] = "";
	$placeHolderscat_finanzas_centros_de_costos["Spanish"]["descripcion_centro_de_costos"] = "";
	$fieldLabelscat_finanzas_centros_de_costos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_finanzas_centros_de_costos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_finanzas_centros_de_costos["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_finanzas_centros_de_costos["Spanish"]))
		$tdatacat_finanzas_centros_de_costos[".isUseToolTips"] = true;
}





$tdatacat_finanzas_centros_de_costos[".shortTableName"] = "cat_finanzas_centros_de_costos";
$tdatacat_finanzas_centros_de_costos[".nSecOptions"] = 0;

$tdatacat_finanzas_centros_de_costos[".mainTableOwnerID"] = "";
$tdatacat_finanzas_centros_de_costos[".entityType"] = 0;
$tdatacat_finanzas_centros_de_costos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_finanzas_centros_de_costos[".strOriginalTableName"] = "cat_finanzas_centros_de_costos";

	



$tdatacat_finanzas_centros_de_costos[".showAddInPopup"] = false;

$tdatacat_finanzas_centros_de_costos[".showEditInPopup"] = false;

$tdatacat_finanzas_centros_de_costos[".showViewInPopup"] = false;

$tdatacat_finanzas_centros_de_costos[".listAjax"] = false;
//	temporary
//$tdatacat_finanzas_centros_de_costos[".listAjax"] = false;

	$tdatacat_finanzas_centros_de_costos[".audit"] = true;

	$tdatacat_finanzas_centros_de_costos[".locking"] = true;


$pages = $tdatacat_finanzas_centros_de_costos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_finanzas_centros_de_costos[".edit"] = true;
	$tdatacat_finanzas_centros_de_costos[".afterEditAction"] = 1;
	$tdatacat_finanzas_centros_de_costos[".closePopupAfterEdit"] = 1;
	$tdatacat_finanzas_centros_de_costos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_finanzas_centros_de_costos[".add"] = true;
$tdatacat_finanzas_centros_de_costos[".afterAddAction"] = 1;
$tdatacat_finanzas_centros_de_costos[".closePopupAfterAdd"] = 1;
$tdatacat_finanzas_centros_de_costos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_finanzas_centros_de_costos[".list"] = true;
}



$tdatacat_finanzas_centros_de_costos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_finanzas_centros_de_costos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_finanzas_centros_de_costos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_finanzas_centros_de_costos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_finanzas_centros_de_costos[".printFriendly"] = true;
}



$tdatacat_finanzas_centros_de_costos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_finanzas_centros_de_costos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_finanzas_centros_de_costos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_finanzas_centros_de_costos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_finanzas_centros_de_costos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_finanzas_centros_de_costos[".buttonsAdded"] = false;

$tdatacat_finanzas_centros_de_costos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacat_finanzas_centros_de_costos[".isUseTimeForSearch"] = false;


$tdatacat_finanzas_centros_de_costos[".badgeColor"] = "7B68EE";


$tdatacat_finanzas_centros_de_costos[".allSearchFields"] = array();
$tdatacat_finanzas_centros_de_costos[".filterFields"] = array();
$tdatacat_finanzas_centros_de_costos[".requiredSearchFields"] = array();

$tdatacat_finanzas_centros_de_costos[".googleLikeFields"] = array();
$tdatacat_finanzas_centros_de_costos[".googleLikeFields"][] = "cat_finanzas_centros_de_costos_id";
$tdatacat_finanzas_centros_de_costos[".googleLikeFields"][] = "vigente";
$tdatacat_finanzas_centros_de_costos[".googleLikeFields"][] = "capturista";
$tdatacat_finanzas_centros_de_costos[".googleLikeFields"][] = "descripcion_centro_de_costos";
$tdatacat_finanzas_centros_de_costos[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_finanzas_centros_de_costos[".tableType"] = "list";

$tdatacat_finanzas_centros_de_costos[".printerPageOrientation"] = 0;
$tdatacat_finanzas_centros_de_costos[".nPrinterPageScale"] = 100;

$tdatacat_finanzas_centros_de_costos[".nPrinterSplitRecords"] = 40;

$tdatacat_finanzas_centros_de_costos[".geocodingEnabled"] = false;





$tdatacat_finanzas_centros_de_costos[".isResizeColumns"] = true;





$tdatacat_finanzas_centros_de_costos[".pageSize"] = 20;

$tdatacat_finanzas_centros_de_costos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_finanzas_centros_de_costos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_finanzas_centros_de_costos[".orderindexes"] = array();


$tdatacat_finanzas_centros_de_costos[".sqlHead"] = "SELECT cat_finanzas_centros_de_costos.cat_finanzas_centros_de_costos_id,  cat_finanzas_centros_de_costos.vigente,  cat_finanzas_centros_de_costos.capturista,  cat_finanzas_centros_de_costos.descripcion_centro_de_costos,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_finanzas_centros_de_costos[".sqlFrom"] = "FROM cat_finanzas_centros_de_costos  INNER JOIN cat_usuarios ON cat_finanzas_centros_de_costos.capturista = cat_usuarios.usuario";
$tdatacat_finanzas_centros_de_costos[".sqlWhereExpr"] = "";
$tdatacat_finanzas_centros_de_costos[".sqlTail"] = "";

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
$tdatacat_finanzas_centros_de_costos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_finanzas_centros_de_costos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_finanzas_centros_de_costos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_finanzas_centros_de_costos[".highlightSearchResults"] = true;

$tableKeyscat_finanzas_centros_de_costos = array();
$tableKeyscat_finanzas_centros_de_costos[] = "cat_finanzas_centros_de_costos_id";
$tdatacat_finanzas_centros_de_costos[".Keys"] = $tableKeyscat_finanzas_centros_de_costos;


$tdatacat_finanzas_centros_de_costos[".hideMobileList"] = array();




//	cat_finanzas_centros_de_costos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_centros_de_costos_id";
	$fdata["GoodName"] = "cat_finanzas_centros_de_costos_id";
	$fdata["ownerTable"] = "cat_finanzas_centros_de_costos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_centros_de_costos","cat_finanzas_centros_de_costos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_centros_de_costos_id";

		$fdata["sourceSingle"] = "cat_finanzas_centros_de_costos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_centros_de_costos.cat_finanzas_centros_de_costos_id";

	
	
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


	$tdatacat_finanzas_centros_de_costos["cat_finanzas_centros_de_costos_id"] = $fdata;
		$tdatacat_finanzas_centros_de_costos[".searchableFields"][] = "cat_finanzas_centros_de_costos_id";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_centros_de_costos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_centros_de_costos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_centros_de_costos.vigente";

	
	
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


	$tdatacat_finanzas_centros_de_costos["vigente"] = $fdata;
		$tdatacat_finanzas_centros_de_costos[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_finanzas_centros_de_costos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_centros_de_costos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_centros_de_costos.capturista";

	
	
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


	$tdatacat_finanzas_centros_de_costos["capturista"] = $fdata;
		$tdatacat_finanzas_centros_de_costos[".searchableFields"][] = "capturista";
//	descripcion_centro_de_costos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "descripcion_centro_de_costos";
	$fdata["GoodName"] = "descripcion_centro_de_costos";
	$fdata["ownerTable"] = "cat_finanzas_centros_de_costos";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_centros_de_costos","descripcion_centro_de_costos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_centro_de_costos";

		$fdata["sourceSingle"] = "descripcion_centro_de_costos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_centros_de_costos.descripcion_centro_de_costos";

	
	
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


	$tdatacat_finanzas_centros_de_costos["descripcion_centro_de_costos"] = $fdata;
		$tdatacat_finanzas_centros_de_costos[".searchableFields"][] = "descripcion_centro_de_costos";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_centros_de_costos","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

		$fdata["sourceSingle"] = "cat_usuarios_licencias_id";

	
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


	$tdatacat_finanzas_centros_de_costos["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_finanzas_centros_de_costos[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_finanzas_centros_de_costos"]=&$tdatacat_finanzas_centros_de_costos;
$field_labels["cat_finanzas_centros_de_costos"] = &$fieldLabelscat_finanzas_centros_de_costos;
$fieldToolTips["cat_finanzas_centros_de_costos"] = &$fieldToolTipscat_finanzas_centros_de_costos;
$placeHolders["cat_finanzas_centros_de_costos"] = &$placeHolderscat_finanzas_centros_de_costos;
$page_titles["cat_finanzas_centros_de_costos"] = &$pageTitlescat_finanzas_centros_de_costos;


changeTextControlsToDate( "cat_finanzas_centros_de_costos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_finanzas_centros_de_costos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_finanzas_centros_de_costos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_finanzas_centros_de_costos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_centros_de_costos.cat_finanzas_centros_de_costos_id,  cat_finanzas_centros_de_costos.vigente,  cat_finanzas_centros_de_costos.capturista,  cat_finanzas_centros_de_costos.descripcion_centro_de_costos,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_centros_de_costos  INNER JOIN cat_usuarios ON cat_finanzas_centros_de_costos.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_finanzas_centros_de_costos_id",
	"m_strTable" => "cat_finanzas_centros_de_costos",
	"m_srcTableName" => "cat_finanzas_centros_de_costos"
));

$proto6["m_sql"] = "cat_finanzas_centros_de_costos.cat_finanzas_centros_de_costos_id";
$proto6["m_srcTableName"] = "cat_finanzas_centros_de_costos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_centros_de_costos",
	"m_srcTableName" => "cat_finanzas_centros_de_costos"
));

$proto8["m_sql"] = "cat_finanzas_centros_de_costos.vigente";
$proto8["m_srcTableName"] = "cat_finanzas_centros_de_costos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_finanzas_centros_de_costos",
	"m_srcTableName" => "cat_finanzas_centros_de_costos"
));

$proto10["m_sql"] = "cat_finanzas_centros_de_costos.capturista";
$proto10["m_srcTableName"] = "cat_finanzas_centros_de_costos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_centro_de_costos",
	"m_strTable" => "cat_finanzas_centros_de_costos",
	"m_srcTableName" => "cat_finanzas_centros_de_costos"
));

$proto12["m_sql"] = "cat_finanzas_centros_de_costos.descripcion_centro_de_costos";
$proto12["m_srcTableName"] = "cat_finanzas_centros_de_costos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_centros_de_costos"
));

$proto14["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto14["m_srcTableName"] = "cat_finanzas_centros_de_costos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_finanzas_centros_de_costos";
$proto17["m_srcTableName"] = "cat_finanzas_centros_de_costos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_finanzas_centros_de_costos_id";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "descripcion_centro_de_costos";
$proto17["m_columns"][] = "cat_holding_01_id";
$proto17["m_columns"][] = "cat_holding_02_empresas_id";
$proto17["m_columns"][] = "cat_holding_03_empresas_departamentos_id";
$proto17["m_columns"][] = "cat_holding_03_empresas_registros_patronales_id";
$proto17["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto17["m_columns"][] = "cat_holding_03_empresas_almacenes_id";
$proto17["m_columns"][] = "cat_ventas_productos_id";
$proto17["m_columns"][] = "cat_ventas_productos_lotes_id";
$proto17["m_columns"][] = "cat_ventas_clientes_id";
$proto17["m_columns"][] = "cat_ventas_productos_sku_id";
$proto17["m_columns"][] = "llave_hedruaplcs_fi_ff";
$proto17["m_columns"][] = "cat_usuarios_licencias_id";
$proto17["m_columns"][] = "fecha_de_incio";
$proto17["m_columns"][] = "fecha_final";
$proto17["m_columns"][] = "cat_holding_04_unidades_productivas_lotes_id";
$proto17["m_columns"][] = "cat_finanzas_centros_de_costos_categorias_mu_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_finanzas_centros_de_costos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_finanzas_centros_de_costos";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "cat_usuarios";
$proto21["m_srcTableName"] = "cat_finanzas_centros_de_costos";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_usuarios_id";
$proto21["m_columns"][] = "time_stamp";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "usuario";
$proto21["m_columns"][] = "cat_usuarios_licencias_id";
$proto21["m_columns"][] = "pass";
$proto21["m_columns"][] = "nombre";
$proto21["m_columns"][] = "correo";
$proto21["m_columns"][] = "cat_trabajadores_altas_id";
$proto21["m_columns"][] = "res_autorizacion";
$proto21["m_columns"][] = "session";
$proto21["m_columns"][] = "tipo";
$proto21["m_columns"][] = "session_v2";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN cat_usuarios ON cat_finanzas_centros_de_costos.capturista = cat_usuarios.usuario";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "cat_finanzas_centros_de_costos";
$proto22=array();
$proto22["m_sql"] = "cat_usuarios.usuario = cat_finanzas_centros_de_costos.capturista";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_finanzas_centros_de_costos"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= cat_finanzas_centros_de_costos.capturista";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_finanzas_centros_de_costos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_finanzas_centros_de_costos = createSqlQuery_cat_finanzas_centros_de_costos();


	
		;

					

$tdatacat_finanzas_centros_de_costos[".sqlquery"] = $queryData_cat_finanzas_centros_de_costos;



include_once(getabspath("include/cat_finanzas_centros_de_costos_events.php"));
$tdatacat_finanzas_centros_de_costos[".hasEvents"] = true;

?>