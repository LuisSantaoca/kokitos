<?php
$tdatacat_control_plagas_y_enfermedades_categorias = array();
$tdatacat_control_plagas_y_enfermedades_categorias[".searchableFields"] = array();
$tdatacat_control_plagas_y_enfermedades_categorias[".ShortName"] = "cat_control_plagas_y_enfermedades_categorias";
$tdatacat_control_plagas_y_enfermedades_categorias[".OwnerID"] = "";
$tdatacat_control_plagas_y_enfermedades_categorias[".OriginalTable"] = "cat_control_plagas_y_enfermedades_categorias";


$tdatacat_control_plagas_y_enfermedades_categorias[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_control_plagas_y_enfermedades_categorias[".originalPagesByType"] = $tdatacat_control_plagas_y_enfermedades_categorias[".pagesByType"];
$tdatacat_control_plagas_y_enfermedades_categorias[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_control_plagas_y_enfermedades_categorias[".originalPages"] = $tdatacat_control_plagas_y_enfermedades_categorias[".pages"];
$tdatacat_control_plagas_y_enfermedades_categorias[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_control_plagas_y_enfermedades_categorias[".originalDefaultPages"] = $tdatacat_control_plagas_y_enfermedades_categorias[".defaultPages"];

//	field labels
$fieldLabelscat_control_plagas_y_enfermedades_categorias = array();
$fieldToolTipscat_control_plagas_y_enfermedades_categorias = array();
$pageTitlescat_control_plagas_y_enfermedades_categorias = array();
$placeHolderscat_control_plagas_y_enfermedades_categorias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_control_plagas_y_enfermedades_categorias["Spanish"] = array();
	$fieldToolTipscat_control_plagas_y_enfermedades_categorias["Spanish"] = array();
	$placeHolderscat_control_plagas_y_enfermedades_categorias["Spanish"] = array();
	$pageTitlescat_control_plagas_y_enfermedades_categorias["Spanish"] = array();
	$fieldLabelscat_control_plagas_y_enfermedades_categorias["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_control_plagas_y_enfermedades_categorias["Spanish"]["vigente"] = "";
	$placeHolderscat_control_plagas_y_enfermedades_categorias["Spanish"]["vigente"] = "";
	$fieldLabelscat_control_plagas_y_enfermedades_categorias["Spanish"]["descripcion_categoria_plaga_enfermedad"] = "Descripcion Categoria";
	$fieldToolTipscat_control_plagas_y_enfermedades_categorias["Spanish"]["descripcion_categoria_plaga_enfermedad"] = "";
	$placeHolderscat_control_plagas_y_enfermedades_categorias["Spanish"]["descripcion_categoria_plaga_enfermedad"] = "";
	$fieldLabelscat_control_plagas_y_enfermedades_categorias["Spanish"]["cat_control_plagas_y_enfermedades_categorias_id"] = "Id";
	$fieldToolTipscat_control_plagas_y_enfermedades_categorias["Spanish"]["cat_control_plagas_y_enfermedades_categorias_id"] = "";
	$placeHolderscat_control_plagas_y_enfermedades_categorias["Spanish"]["cat_control_plagas_y_enfermedades_categorias_id"] = "";
	$fieldLabelscat_control_plagas_y_enfermedades_categorias["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_control_plagas_y_enfermedades_categorias["Spanish"]["capturista"] = "";
	$placeHolderscat_control_plagas_y_enfermedades_categorias["Spanish"]["capturista"] = "";
	$fieldLabelscat_control_plagas_y_enfermedades_categorias["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_control_plagas_y_enfermedades_categorias["Spanish"]["time_stamp"] = "";
	$placeHolderscat_control_plagas_y_enfermedades_categorias["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_control_plagas_y_enfermedades_categorias["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_control_plagas_y_enfermedades_categorias["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_control_plagas_y_enfermedades_categorias["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_control_plagas_y_enfermedades_categorias["Spanish"]))
		$tdatacat_control_plagas_y_enfermedades_categorias[".isUseToolTips"] = true;
}





$tdatacat_control_plagas_y_enfermedades_categorias[".shortTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$tdatacat_control_plagas_y_enfermedades_categorias[".nSecOptions"] = 0;

$tdatacat_control_plagas_y_enfermedades_categorias[".mainTableOwnerID"] = "";
$tdatacat_control_plagas_y_enfermedades_categorias[".entityType"] = 0;
$tdatacat_control_plagas_y_enfermedades_categorias[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_control_plagas_y_enfermedades_categorias[".strOriginalTableName"] = "cat_control_plagas_y_enfermedades_categorias";

	



$tdatacat_control_plagas_y_enfermedades_categorias[".showAddInPopup"] = false;

$tdatacat_control_plagas_y_enfermedades_categorias[".showEditInPopup"] = false;

$tdatacat_control_plagas_y_enfermedades_categorias[".showViewInPopup"] = false;

$tdatacat_control_plagas_y_enfermedades_categorias[".listAjax"] = false;
//	temporary
//$tdatacat_control_plagas_y_enfermedades_categorias[".listAjax"] = false;

	$tdatacat_control_plagas_y_enfermedades_categorias[".audit"] = false;

	$tdatacat_control_plagas_y_enfermedades_categorias[".locking"] = false;


$pages = $tdatacat_control_plagas_y_enfermedades_categorias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_control_plagas_y_enfermedades_categorias[".edit"] = true;
	$tdatacat_control_plagas_y_enfermedades_categorias[".afterEditAction"] = 1;
	$tdatacat_control_plagas_y_enfermedades_categorias[".closePopupAfterEdit"] = 1;
	$tdatacat_control_plagas_y_enfermedades_categorias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_control_plagas_y_enfermedades_categorias[".add"] = true;
$tdatacat_control_plagas_y_enfermedades_categorias[".afterAddAction"] = 1;
$tdatacat_control_plagas_y_enfermedades_categorias[".closePopupAfterAdd"] = 1;
$tdatacat_control_plagas_y_enfermedades_categorias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_control_plagas_y_enfermedades_categorias[".list"] = true;
}



$tdatacat_control_plagas_y_enfermedades_categorias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_control_plagas_y_enfermedades_categorias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_control_plagas_y_enfermedades_categorias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_control_plagas_y_enfermedades_categorias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_control_plagas_y_enfermedades_categorias[".printFriendly"] = true;
}



$tdatacat_control_plagas_y_enfermedades_categorias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_control_plagas_y_enfermedades_categorias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_control_plagas_y_enfermedades_categorias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_control_plagas_y_enfermedades_categorias[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_control_plagas_y_enfermedades_categorias[".ajaxCodeSnippetAdded"] = false;

$tdatacat_control_plagas_y_enfermedades_categorias[".buttonsAdded"] = false;

$tdatacat_control_plagas_y_enfermedades_categorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_control_plagas_y_enfermedades_categorias[".isUseTimeForSearch"] = false;


$tdatacat_control_plagas_y_enfermedades_categorias[".badgeColor"] = "4169E1";


$tdatacat_control_plagas_y_enfermedades_categorias[".allSearchFields"] = array();
$tdatacat_control_plagas_y_enfermedades_categorias[".filterFields"] = array();
$tdatacat_control_plagas_y_enfermedades_categorias[".requiredSearchFields"] = array();

$tdatacat_control_plagas_y_enfermedades_categorias[".googleLikeFields"] = array();
$tdatacat_control_plagas_y_enfermedades_categorias[".googleLikeFields"][] = "vigente";
$tdatacat_control_plagas_y_enfermedades_categorias[".googleLikeFields"][] = "descripcion_categoria_plaga_enfermedad";
$tdatacat_control_plagas_y_enfermedades_categorias[".googleLikeFields"][] = "cat_control_plagas_y_enfermedades_categorias_id";
$tdatacat_control_plagas_y_enfermedades_categorias[".googleLikeFields"][] = "capturista";
$tdatacat_control_plagas_y_enfermedades_categorias[".googleLikeFields"][] = "time_stamp";
$tdatacat_control_plagas_y_enfermedades_categorias[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_control_plagas_y_enfermedades_categorias[".tableType"] = "list";

$tdatacat_control_plagas_y_enfermedades_categorias[".printerPageOrientation"] = 0;
$tdatacat_control_plagas_y_enfermedades_categorias[".nPrinterPageScale"] = 100;

$tdatacat_control_plagas_y_enfermedades_categorias[".nPrinterSplitRecords"] = 40;

$tdatacat_control_plagas_y_enfermedades_categorias[".geocodingEnabled"] = false;





$tdatacat_control_plagas_y_enfermedades_categorias[".isResizeColumns"] = true;





$tdatacat_control_plagas_y_enfermedades_categorias[".pageSize"] = 20;

$tdatacat_control_plagas_y_enfermedades_categorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_control_plagas_y_enfermedades_categorias[".strOrderBy"] = $tstrOrderBy;

$tdatacat_control_plagas_y_enfermedades_categorias[".orderindexes"] = array();


$tdatacat_control_plagas_y_enfermedades_categorias[".sqlHead"] = "SELECT cat_control_plagas_y_enfermedades_categorias.vigente,  cat_control_plagas_y_enfermedades_categorias.descripcion_categoria_plaga_enfermedad,  cat_control_plagas_y_enfermedades_categorias.cat_control_plagas_y_enfermedades_categorias_id,  cat_control_plagas_y_enfermedades_categorias.capturista,  cat_control_plagas_y_enfermedades_categorias.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_control_plagas_y_enfermedades_categorias[".sqlFrom"] = "FROM cat_control_plagas_y_enfermedades_categorias  INNER JOIN cat_usuarios ON cat_control_plagas_y_enfermedades_categorias.capturista = cat_usuarios.usuario";
$tdatacat_control_plagas_y_enfermedades_categorias[".sqlWhereExpr"] = "";
$tdatacat_control_plagas_y_enfermedades_categorias[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "cat_usuarios.cat_usuarios_licencias_id = ':user.cat_usuarios_licencias_",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_control_plagas_y_enfermedades_categorias[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_control_plagas_y_enfermedades_categorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_control_plagas_y_enfermedades_categorias[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_control_plagas_y_enfermedades_categorias[".highlightSearchResults"] = true;

$tableKeyscat_control_plagas_y_enfermedades_categorias = array();
$tableKeyscat_control_plagas_y_enfermedades_categorias[] = "cat_control_plagas_y_enfermedades_categorias_id";
$tdatacat_control_plagas_y_enfermedades_categorias[".Keys"] = $tableKeyscat_control_plagas_y_enfermedades_categorias;


$tdatacat_control_plagas_y_enfermedades_categorias[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_control_plagas_y_enfermedades_categorias";
	$fdata["Label"] = GetFieldLabel("cat_control_plagas_y_enfermedades_categorias","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_plagas_y_enfermedades_categorias.vigente";

	
	
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


	$tdatacat_control_plagas_y_enfermedades_categorias["vigente"] = $fdata;
		$tdatacat_control_plagas_y_enfermedades_categorias[".searchableFields"][] = "vigente";
//	descripcion_categoria_plaga_enfermedad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_categoria_plaga_enfermedad";
	$fdata["GoodName"] = "descripcion_categoria_plaga_enfermedad";
	$fdata["ownerTable"] = "cat_control_plagas_y_enfermedades_categorias";
	$fdata["Label"] = GetFieldLabel("cat_control_plagas_y_enfermedades_categorias","descripcion_categoria_plaga_enfermedad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_categoria_plaga_enfermedad";

		$fdata["sourceSingle"] = "descripcion_categoria_plaga_enfermedad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_plagas_y_enfermedades_categorias.descripcion_categoria_plaga_enfermedad";

	
	
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


	$tdatacat_control_plagas_y_enfermedades_categorias["descripcion_categoria_plaga_enfermedad"] = $fdata;
		$tdatacat_control_plagas_y_enfermedades_categorias[".searchableFields"][] = "descripcion_categoria_plaga_enfermedad";
//	cat_control_plagas_y_enfermedades_categorias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_control_plagas_y_enfermedades_categorias_id";
	$fdata["GoodName"] = "cat_control_plagas_y_enfermedades_categorias_id";
	$fdata["ownerTable"] = "cat_control_plagas_y_enfermedades_categorias";
	$fdata["Label"] = GetFieldLabel("cat_control_plagas_y_enfermedades_categorias","cat_control_plagas_y_enfermedades_categorias_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_control_plagas_y_enfermedades_categorias_id";

		$fdata["sourceSingle"] = "cat_control_plagas_y_enfermedades_categorias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_plagas_y_enfermedades_categorias.cat_control_plagas_y_enfermedades_categorias_id";

	
	
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


	$tdatacat_control_plagas_y_enfermedades_categorias["cat_control_plagas_y_enfermedades_categorias_id"] = $fdata;
		$tdatacat_control_plagas_y_enfermedades_categorias[".searchableFields"][] = "cat_control_plagas_y_enfermedades_categorias_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_control_plagas_y_enfermedades_categorias";
	$fdata["Label"] = GetFieldLabel("cat_control_plagas_y_enfermedades_categorias","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_plagas_y_enfermedades_categorias.capturista";

	
	
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


	$tdatacat_control_plagas_y_enfermedades_categorias["capturista"] = $fdata;
		$tdatacat_control_plagas_y_enfermedades_categorias[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_control_plagas_y_enfermedades_categorias";
	$fdata["Label"] = GetFieldLabel("cat_control_plagas_y_enfermedades_categorias","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_plagas_y_enfermedades_categorias.time_stamp";

	
	
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


	$tdatacat_control_plagas_y_enfermedades_categorias["time_stamp"] = $fdata;
		$tdatacat_control_plagas_y_enfermedades_categorias[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_control_plagas_y_enfermedades_categorias","cat_usuarios_licencias_id");
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


	$tdatacat_control_plagas_y_enfermedades_categorias["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_control_plagas_y_enfermedades_categorias[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_control_plagas_y_enfermedades_categorias"]=&$tdatacat_control_plagas_y_enfermedades_categorias;
$field_labels["cat_control_plagas_y_enfermedades_categorias"] = &$fieldLabelscat_control_plagas_y_enfermedades_categorias;
$fieldToolTips["cat_control_plagas_y_enfermedades_categorias"] = &$fieldToolTipscat_control_plagas_y_enfermedades_categorias;
$placeHolders["cat_control_plagas_y_enfermedades_categorias"] = &$placeHolderscat_control_plagas_y_enfermedades_categorias;
$page_titles["cat_control_plagas_y_enfermedades_categorias"] = &$pageTitlescat_control_plagas_y_enfermedades_categorias;


changeTextControlsToDate( "cat_control_plagas_y_enfermedades_categorias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_control_plagas_y_enfermedades_categorias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_control_plagas_y_enfermedades_categorias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_control_plagas_y_enfermedades_categorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_control_plagas_y_enfermedades_categorias.vigente,  cat_control_plagas_y_enfermedades_categorias.descripcion_categoria_plaga_enfermedad,  cat_control_plagas_y_enfermedades_categorias.cat_control_plagas_y_enfermedades_categorias_id,  cat_control_plagas_y_enfermedades_categorias.capturista,  cat_control_plagas_y_enfermedades_categorias.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_control_plagas_y_enfermedades_categorias  INNER JOIN cat_usuarios ON cat_control_plagas_y_enfermedades_categorias.capturista = cat_usuarios.usuario";
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
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_plagas_y_enfermedades_categorias",
	"m_srcTableName" => "cat_control_plagas_y_enfermedades_categorias"
));

$proto6["m_sql"] = "cat_control_plagas_y_enfermedades_categorias.vigente";
$proto6["m_srcTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_categoria_plaga_enfermedad",
	"m_strTable" => "cat_control_plagas_y_enfermedades_categorias",
	"m_srcTableName" => "cat_control_plagas_y_enfermedades_categorias"
));

$proto8["m_sql"] = "cat_control_plagas_y_enfermedades_categorias.descripcion_categoria_plaga_enfermedad";
$proto8["m_srcTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_control_plagas_y_enfermedades_categorias_id",
	"m_strTable" => "cat_control_plagas_y_enfermedades_categorias",
	"m_srcTableName" => "cat_control_plagas_y_enfermedades_categorias"
));

$proto10["m_sql"] = "cat_control_plagas_y_enfermedades_categorias.cat_control_plagas_y_enfermedades_categorias_id";
$proto10["m_srcTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_control_plagas_y_enfermedades_categorias",
	"m_srcTableName" => "cat_control_plagas_y_enfermedades_categorias"
));

$proto12["m_sql"] = "cat_control_plagas_y_enfermedades_categorias.capturista";
$proto12["m_srcTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_control_plagas_y_enfermedades_categorias",
	"m_srcTableName" => "cat_control_plagas_y_enfermedades_categorias"
));

$proto14["m_sql"] = "cat_control_plagas_y_enfermedades_categorias.time_stamp";
$proto14["m_srcTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_control_plagas_y_enfermedades_categorias"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto19["m_srcTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "descripcion_categoria_plaga_enfermedad";
$proto19["m_columns"][] = "cat_control_plagas_y_enfermedades_categorias_id";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_control_plagas_y_enfermedades_categorias";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "cat_usuarios";
$proto23["m_srcTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "cat_usuarios_id";
$proto23["m_columns"][] = "time_stamp";
$proto23["m_columns"][] = "vigente";
$proto23["m_columns"][] = "capturista";
$proto23["m_columns"][] = "usuario";
$proto23["m_columns"][] = "cat_usuarios_licencias_id";
$proto23["m_columns"][] = "pass";
$proto23["m_columns"][] = "nombre";
$proto23["m_columns"][] = "correo";
$proto23["m_columns"][] = "cat_trabajadores_altas_id";
$proto23["m_columns"][] = "res_autorizacion";
$proto23["m_columns"][] = "session";
$proto23["m_columns"][] = "tipo";
$proto23["m_columns"][] = "session_v2";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN cat_usuarios ON cat_control_plagas_y_enfermedades_categorias.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cat_control_plagas_y_enfermedades_categorias";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_control_plagas_y_enfermedades_categorias.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_control_plagas_y_enfermedades_categorias"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_control_plagas_y_enfermedades_categorias.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_control_plagas_y_enfermedades_categorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_control_plagas_y_enfermedades_categorias = createSqlQuery_cat_control_plagas_y_enfermedades_categorias();


	
		;

						

$tdatacat_control_plagas_y_enfermedades_categorias[".sqlquery"] = $queryData_cat_control_plagas_y_enfermedades_categorias;



$tdatacat_control_plagas_y_enfermedades_categorias[".hasEvents"] = false;

?>