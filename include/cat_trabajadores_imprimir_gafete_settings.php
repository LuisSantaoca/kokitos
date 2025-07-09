<?php
$tdatacat_trabajadores_imprimir_gafete = array();
$tdatacat_trabajadores_imprimir_gafete[".searchableFields"] = array();
$tdatacat_trabajadores_imprimir_gafete[".ShortName"] = "cat_trabajadores_imprimir_gafete";
$tdatacat_trabajadores_imprimir_gafete[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_imprimir_gafete[".OriginalTable"] = "cat_trabajadores_altas";


$tdatacat_trabajadores_imprimir_gafete[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_imprimir_gafete[".originalPagesByType"] = $tdatacat_trabajadores_imprimir_gafete[".pagesByType"];
$tdatacat_trabajadores_imprimir_gafete[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_imprimir_gafete[".originalPages"] = $tdatacat_trabajadores_imprimir_gafete[".pages"];
$tdatacat_trabajadores_imprimir_gafete[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacat_trabajadores_imprimir_gafete[".originalDefaultPages"] = $tdatacat_trabajadores_imprimir_gafete[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_imprimir_gafete = array();
$fieldToolTipscat_trabajadores_imprimir_gafete = array();
$pageTitlescat_trabajadores_imprimir_gafete = array();
$placeHolderscat_trabajadores_imprimir_gafete = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_imprimir_gafete["Spanish"] = array();
	$fieldToolTipscat_trabajadores_imprimir_gafete["Spanish"] = array();
	$placeHolderscat_trabajadores_imprimir_gafete["Spanish"] = array();
	$pageTitlescat_trabajadores_imprimir_gafete["Spanish"] = array();
	$fieldLabelscat_trabajadores_imprimir_gafete["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipscat_trabajadores_imprimir_gafete["Spanish"]["Nombre"] = "";
	$placeHolderscat_trabajadores_imprimir_gafete["Spanish"]["Nombre"] = "";
	$fieldLabelscat_trabajadores_imprimir_gafete["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_trabajadores_imprimir_gafete["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_trabajadores_imprimir_gafete["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_trabajadores_imprimir_gafete["Spanish"]["id"] = "Id";
	$fieldToolTipscat_trabajadores_imprimir_gafete["Spanish"]["id"] = "";
	$placeHolderscat_trabajadores_imprimir_gafete["Spanish"]["id"] = "";
	$fieldLabelscat_trabajadores_imprimir_gafete["Spanish"]["cat_trabajadores_altas_id"] = "Codigo";
	$fieldToolTipscat_trabajadores_imprimir_gafete["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_imprimir_gafete["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_imprimir_gafete["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_imprimir_gafete["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_imprimir_gafete["Spanish"]["vigente"] = "";
	if (count($fieldToolTipscat_trabajadores_imprimir_gafete["Spanish"]))
		$tdatacat_trabajadores_imprimir_gafete[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_imprimir_gafete[".shortTableName"] = "cat_trabajadores_imprimir_gafete";
$tdatacat_trabajadores_imprimir_gafete[".nSecOptions"] = 0;

$tdatacat_trabajadores_imprimir_gafete[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_imprimir_gafete[".entityType"] = 1;
$tdatacat_trabajadores_imprimir_gafete[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_imprimir_gafete[".strOriginalTableName"] = "cat_trabajadores_altas";

	



$tdatacat_trabajadores_imprimir_gafete[".showAddInPopup"] = false;

$tdatacat_trabajadores_imprimir_gafete[".showEditInPopup"] = false;

$tdatacat_trabajadores_imprimir_gafete[".showViewInPopup"] = false;

$tdatacat_trabajadores_imprimir_gafete[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_imprimir_gafete[".listAjax"] = false;

	$tdatacat_trabajadores_imprimir_gafete[".audit"] = true;

	$tdatacat_trabajadores_imprimir_gafete[".locking"] = true;


$pages = $tdatacat_trabajadores_imprimir_gafete[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_imprimir_gafete[".edit"] = true;
	$tdatacat_trabajadores_imprimir_gafete[".afterEditAction"] = 1;
	$tdatacat_trabajadores_imprimir_gafete[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_imprimir_gafete[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_imprimir_gafete[".add"] = true;
$tdatacat_trabajadores_imprimir_gafete[".afterAddAction"] = 1;
$tdatacat_trabajadores_imprimir_gafete[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_imprimir_gafete[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_imprimir_gafete[".list"] = true;
}



$tdatacat_trabajadores_imprimir_gafete[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_imprimir_gafete[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_imprimir_gafete[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_imprimir_gafete[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_imprimir_gafete[".printFriendly"] = true;
}



$tdatacat_trabajadores_imprimir_gafete[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_imprimir_gafete[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_imprimir_gafete[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_imprimir_gafete[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_imprimir_gafete[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_imprimir_gafete[".buttonsAdded"] = false;

$tdatacat_trabajadores_imprimir_gafete[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_imprimir_gafete[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_imprimir_gafete[".badgeColor"] = "3CB371";


$tdatacat_trabajadores_imprimir_gafete[".allSearchFields"] = array();
$tdatacat_trabajadores_imprimir_gafete[".filterFields"] = array();
$tdatacat_trabajadores_imprimir_gafete[".requiredSearchFields"] = array();

$tdatacat_trabajadores_imprimir_gafete[".googleLikeFields"] = array();
$tdatacat_trabajadores_imprimir_gafete[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_imprimir_gafete[".googleLikeFields"][] = "id";
$tdatacat_trabajadores_imprimir_gafete[".googleLikeFields"][] = "Nombre";
$tdatacat_trabajadores_imprimir_gafete[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_imprimir_gafete[".googleLikeFields"][] = "vigente";



$tdatacat_trabajadores_imprimir_gafete[".tableType"] = "list";

$tdatacat_trabajadores_imprimir_gafete[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_imprimir_gafete[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_imprimir_gafete[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_imprimir_gafete[".geocodingEnabled"] = false;





$tdatacat_trabajadores_imprimir_gafete[".isResizeColumns"] = true;





$tdatacat_trabajadores_imprimir_gafete[".pageSize"] = 20;

$tdatacat_trabajadores_imprimir_gafete[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_imprimir_gafete[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_imprimir_gafete[".orderindexes"] = array();


$tdatacat_trabajadores_imprimir_gafete[".sqlHead"] = "SELECT cat_trabajadores_altas.cat_trabajadores_altas_id,  cat_trabajadores_altas.cat_trabajadores_altas_id AS id,  concat(cat_trabajadores_altas.apellido_paterno, ' ', cat_trabajadores_altas.apellido_materno, ' ', cat_trabajadores_altas.primer_nombre, ' ', cat_trabajadores_altas.segundo_nombre) AS Nombre,  cat_usuarios.cat_usuarios_licencias_id,  cat_trabajadores_altas.vigente";
$tdatacat_trabajadores_imprimir_gafete[".sqlFrom"] = "FROM cat_trabajadores_altas  LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_altas.capturista = cat_usuarios.usuario";
$tdatacat_trabajadores_imprimir_gafete[".sqlWhereExpr"] = "(cat_trabajadores_altas.vigente =1)";
$tdatacat_trabajadores_imprimir_gafete[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_id'",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_trabajadores_imprimir_gafete[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_imprimir_gafete[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_imprimir_gafete[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_imprimir_gafete[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_imprimir_gafete = array();
$tableKeyscat_trabajadores_imprimir_gafete[] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_imprimir_gafete[".Keys"] = $tableKeyscat_trabajadores_imprimir_gafete;


$tdatacat_trabajadores_imprimir_gafete[".hideMobileList"] = array();




//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_imprimir_gafete","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "BarCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacat_trabajadores_imprimir_gafete["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_imprimir_gafete[".searchableFields"][] = "cat_trabajadores_altas_id";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_imprimir_gafete","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";

	
	
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


	$tdatacat_trabajadores_imprimir_gafete["id"] = $fdata;
		$tdatacat_trabajadores_imprimir_gafete[".searchableFields"][] = "id";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_imprimir_gafete","Nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(cat_trabajadores_altas.apellido_paterno, ' ', cat_trabajadores_altas.apellido_materno, ' ', cat_trabajadores_altas.primer_nombre, ' ', cat_trabajadores_altas.segundo_nombre)";

	
	
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


	$tdatacat_trabajadores_imprimir_gafete["Nombre"] = $fdata;
		$tdatacat_trabajadores_imprimir_gafete[".searchableFields"][] = "Nombre";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_imprimir_gafete","cat_usuarios_licencias_id");
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


	$tdatacat_trabajadores_imprimir_gafete["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_trabajadores_imprimir_gafete[".searchableFields"][] = "cat_usuarios_licencias_id";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_imprimir_gafete","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.vigente";

	
	
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


	$tdatacat_trabajadores_imprimir_gafete["vigente"] = $fdata;
		$tdatacat_trabajadores_imprimir_gafete[".searchableFields"][] = "vigente";


$tables_data["cat_trabajadores_imprimir_gafete"]=&$tdatacat_trabajadores_imprimir_gafete;
$field_labels["cat_trabajadores_imprimir_gafete"] = &$fieldLabelscat_trabajadores_imprimir_gafete;
$fieldToolTips["cat_trabajadores_imprimir_gafete"] = &$fieldToolTipscat_trabajadores_imprimir_gafete;
$placeHolders["cat_trabajadores_imprimir_gafete"] = &$placeHolderscat_trabajadores_imprimir_gafete;
$page_titles["cat_trabajadores_imprimir_gafete"] = &$pageTitlescat_trabajadores_imprimir_gafete;


changeTextControlsToDate( "cat_trabajadores_imprimir_gafete" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_imprimir_gafete"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_imprimir_gafete"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_imprimir_gafete()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_altas.cat_trabajadores_altas_id,  cat_trabajadores_altas.cat_trabajadores_altas_id AS id,  concat(cat_trabajadores_altas.apellido_paterno, ' ', cat_trabajadores_altas.apellido_materno, ' ', cat_trabajadores_altas.primer_nombre, ' ', cat_trabajadores_altas.segundo_nombre) AS Nombre,  cat_usuarios.cat_usuarios_licencias_id,  cat_trabajadores_altas.vigente";
$proto0["m_strFrom"] = "FROM cat_trabajadores_altas  LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_altas.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_trabajadores_altas.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_trabajadores_altas.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_imprimir_gafete"
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
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_imprimir_gafete"
));

$proto6["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto6["m_srcTableName"] = "cat_trabajadores_imprimir_gafete";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_imprimir_gafete"
));

$proto8["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto8["m_srcTableName"] = "cat_trabajadores_imprimir_gafete";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "id";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_trabajadores_altas.apellido_paterno"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_trabajadores_altas.apellido_materno"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_trabajadores_altas.primer_nombre"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_trabajadores_altas.segundo_nombre"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "concat(cat_trabajadores_altas.apellido_paterno, ' ', cat_trabajadores_altas.apellido_materno, ' ', cat_trabajadores_altas.primer_nombre, ' ', cat_trabajadores_altas.segundo_nombre)";
$proto10["m_srcTableName"] = "cat_trabajadores_imprimir_gafete";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Nombre";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_trabajadores_imprimir_gafete"
));

$proto19["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto19["m_srcTableName"] = "cat_trabajadores_imprimir_gafete";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_imprimir_gafete"
));

$proto21["m_sql"] = "cat_trabajadores_altas.vigente";
$proto21["m_srcTableName"] = "cat_trabajadores_imprimir_gafete";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "cat_trabajadores_altas";
$proto24["m_srcTableName"] = "cat_trabajadores_imprimir_gafete";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "cat_trabajadores_altas_id";
$proto24["m_columns"][] = "time_stamp";
$proto24["m_columns"][] = "capturista";
$proto24["m_columns"][] = "vigente";
$proto24["m_columns"][] = "fecha_de_registro";
$proto24["m_columns"][] = "apellido_paterno";
$proto24["m_columns"][] = "apellido_materno";
$proto24["m_columns"][] = "primer_nombre";
$proto24["m_columns"][] = "segundo_nombre";
$proto24["m_columns"][] = "rfc";
$proto24["m_columns"][] = "curp";
$proto24["m_columns"][] = "num_seguridad_social";
$proto24["m_columns"][] = "municipio_nacimiento";
$proto24["m_columns"][] = "estado_nacimiento";
$proto24["m_columns"][] = "nacionalidad";
$proto24["m_columns"][] = "telefono_emergencia";
$proto24["m_columns"][] = "contacto_emergencia";
$proto24["m_columns"][] = "nombre_completo";
$proto24["m_columns"][] = "fecha_de_nacimiento";
$proto24["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto24["m_columns"][] = "celular_mensajes";
$proto24["m_columns"][] = "permiso_msm";
$proto24["m_columns"][] = "estatus";
$proto24["m_columns"][] = "fecha_de_captura";
$proto24["m_columns"][] = "face_id";
$proto24["m_columns"][] = "tr_tags_numero_asignado";
$proto24["m_columns"][] = "cat_trabajadores_puestos_id";
$proto24["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto24["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto24["m_columns"][] = "calle";
$proto24["m_columns"][] = "colonia";
$proto24["m_columns"][] = "municipio";
$proto24["m_columns"][] = "estado";
$proto24["m_columns"][] = "codigo_postal";
$proto24["m_columns"][] = "banco";
$proto24["m_columns"][] = "cuenta_bancaria";
$proto24["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto24["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto24["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto24["m_columns"][] = "cat_holding_02_empresas";
$proto24["m_columns"][] = "fecha_de_ingreso";
$proto24["m_columns"][] = "numero_domicilio";
$proto24["m_columns"][] = "observaciones";
$proto24["m_columns"][] = "link_foto";
$proto24["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto24["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "cat_trabajadores_altas";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "cat_trabajadores_imprimir_gafete";
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
$proto28["m_srcTableName"] = "cat_trabajadores_imprimir_gafete";
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
$proto27["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_altas.capturista = cat_usuarios.usuario";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "cat_trabajadores_imprimir_gafete";
$proto29=array();
$proto29["m_sql"] = "cat_usuarios.usuario = cat_trabajadores_altas.capturista";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_trabajadores_imprimir_gafete"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= cat_trabajadores_altas.capturista";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_imprimir_gafete";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_imprimir_gafete = createSqlQuery_cat_trabajadores_imprimir_gafete();


	
		;

					

$tdatacat_trabajadores_imprimir_gafete[".sqlquery"] = $queryData_cat_trabajadores_imprimir_gafete;



include_once(getabspath("include/cat_trabajadores_imprimir_gafete_events.php"));
$tdatacat_trabajadores_imprimir_gafete[".hasEvents"] = true;

?>