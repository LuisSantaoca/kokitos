<?php
$tdatacat_control_aplicaciones_campo_boquillas = array();
$tdatacat_control_aplicaciones_campo_boquillas[".searchableFields"] = array();
$tdatacat_control_aplicaciones_campo_boquillas[".ShortName"] = "cat_control_aplicaciones_campo_boquillas";
$tdatacat_control_aplicaciones_campo_boquillas[".OwnerID"] = "";
$tdatacat_control_aplicaciones_campo_boquillas[".OriginalTable"] = "cat_control_aplicaciones_campo_boquillas";


$tdatacat_control_aplicaciones_campo_boquillas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_control_aplicaciones_campo_boquillas[".originalPagesByType"] = $tdatacat_control_aplicaciones_campo_boquillas[".pagesByType"];
$tdatacat_control_aplicaciones_campo_boquillas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_control_aplicaciones_campo_boquillas[".originalPages"] = $tdatacat_control_aplicaciones_campo_boquillas[".pages"];
$tdatacat_control_aplicaciones_campo_boquillas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_control_aplicaciones_campo_boquillas[".originalDefaultPages"] = $tdatacat_control_aplicaciones_campo_boquillas[".defaultPages"];

//	field labels
$fieldLabelscat_control_aplicaciones_campo_boquillas = array();
$fieldToolTipscat_control_aplicaciones_campo_boquillas = array();
$pageTitlescat_control_aplicaciones_campo_boquillas = array();
$placeHolderscat_control_aplicaciones_campo_boquillas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_control_aplicaciones_campo_boquillas["Spanish"] = array();
	$fieldToolTipscat_control_aplicaciones_campo_boquillas["Spanish"] = array();
	$placeHolderscat_control_aplicaciones_campo_boquillas["Spanish"] = array();
	$pageTitlescat_control_aplicaciones_campo_boquillas["Spanish"] = array();
	$fieldLabelscat_control_aplicaciones_campo_boquillas["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_control_aplicaciones_campo_boquillas["Spanish"]["vigente"] = "";
	$placeHolderscat_control_aplicaciones_campo_boquillas["Spanish"]["vigente"] = "";
	$fieldLabelscat_control_aplicaciones_campo_boquillas["Spanish"]["descripcion_boquilla"] = "Descripcion Boquilla";
	$fieldToolTipscat_control_aplicaciones_campo_boquillas["Spanish"]["descripcion_boquilla"] = "";
	$placeHolderscat_control_aplicaciones_campo_boquillas["Spanish"]["descripcion_boquilla"] = "";
	$fieldLabelscat_control_aplicaciones_campo_boquillas["Spanish"]["cat_control_aplicaciones_campo_boquillas_id"] = "Id";
	$fieldToolTipscat_control_aplicaciones_campo_boquillas["Spanish"]["cat_control_aplicaciones_campo_boquillas_id"] = "";
	$placeHolderscat_control_aplicaciones_campo_boquillas["Spanish"]["cat_control_aplicaciones_campo_boquillas_id"] = "";
	$fieldLabelscat_control_aplicaciones_campo_boquillas["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_control_aplicaciones_campo_boquillas["Spanish"]["capturista"] = "";
	$placeHolderscat_control_aplicaciones_campo_boquillas["Spanish"]["capturista"] = "";
	$fieldLabelscat_control_aplicaciones_campo_boquillas["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_control_aplicaciones_campo_boquillas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_control_aplicaciones_campo_boquillas["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_control_aplicaciones_campo_boquillas["Spanish"]))
		$tdatacat_control_aplicaciones_campo_boquillas[".isUseToolTips"] = true;
}





$tdatacat_control_aplicaciones_campo_boquillas[".shortTableName"] = "cat_control_aplicaciones_campo_boquillas";
$tdatacat_control_aplicaciones_campo_boquillas[".nSecOptions"] = 0;

$tdatacat_control_aplicaciones_campo_boquillas[".mainTableOwnerID"] = "";
$tdatacat_control_aplicaciones_campo_boquillas[".entityType"] = 0;
$tdatacat_control_aplicaciones_campo_boquillas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_control_aplicaciones_campo_boquillas[".strOriginalTableName"] = "cat_control_aplicaciones_campo_boquillas";

	



$tdatacat_control_aplicaciones_campo_boquillas[".showAddInPopup"] = false;

$tdatacat_control_aplicaciones_campo_boquillas[".showEditInPopup"] = false;

$tdatacat_control_aplicaciones_campo_boquillas[".showViewInPopup"] = false;

$tdatacat_control_aplicaciones_campo_boquillas[".listAjax"] = false;
//	temporary
//$tdatacat_control_aplicaciones_campo_boquillas[".listAjax"] = false;

	$tdatacat_control_aplicaciones_campo_boquillas[".audit"] = true;

	$tdatacat_control_aplicaciones_campo_boquillas[".locking"] = true;


$pages = $tdatacat_control_aplicaciones_campo_boquillas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_control_aplicaciones_campo_boquillas[".edit"] = true;
	$tdatacat_control_aplicaciones_campo_boquillas[".afterEditAction"] = 1;
	$tdatacat_control_aplicaciones_campo_boquillas[".closePopupAfterEdit"] = 1;
	$tdatacat_control_aplicaciones_campo_boquillas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_control_aplicaciones_campo_boquillas[".add"] = true;
$tdatacat_control_aplicaciones_campo_boquillas[".afterAddAction"] = 1;
$tdatacat_control_aplicaciones_campo_boquillas[".closePopupAfterAdd"] = 1;
$tdatacat_control_aplicaciones_campo_boquillas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_control_aplicaciones_campo_boquillas[".list"] = true;
}



$tdatacat_control_aplicaciones_campo_boquillas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_control_aplicaciones_campo_boquillas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_control_aplicaciones_campo_boquillas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_control_aplicaciones_campo_boquillas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_control_aplicaciones_campo_boquillas[".printFriendly"] = true;
}



$tdatacat_control_aplicaciones_campo_boquillas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_control_aplicaciones_campo_boquillas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_control_aplicaciones_campo_boquillas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_control_aplicaciones_campo_boquillas[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_control_aplicaciones_campo_boquillas[".ajaxCodeSnippetAdded"] = false;

$tdatacat_control_aplicaciones_campo_boquillas[".buttonsAdded"] = false;

$tdatacat_control_aplicaciones_campo_boquillas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_control_aplicaciones_campo_boquillas[".isUseTimeForSearch"] = false;


$tdatacat_control_aplicaciones_campo_boquillas[".badgeColor"] = "DC143C";


$tdatacat_control_aplicaciones_campo_boquillas[".allSearchFields"] = array();
$tdatacat_control_aplicaciones_campo_boquillas[".filterFields"] = array();
$tdatacat_control_aplicaciones_campo_boquillas[".requiredSearchFields"] = array();

$tdatacat_control_aplicaciones_campo_boquillas[".googleLikeFields"] = array();
$tdatacat_control_aplicaciones_campo_boquillas[".googleLikeFields"][] = "vigente";
$tdatacat_control_aplicaciones_campo_boquillas[".googleLikeFields"][] = "descripcion_boquilla";
$tdatacat_control_aplicaciones_campo_boquillas[".googleLikeFields"][] = "cat_control_aplicaciones_campo_boquillas_id";
$tdatacat_control_aplicaciones_campo_boquillas[".googleLikeFields"][] = "capturista";
$tdatacat_control_aplicaciones_campo_boquillas[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_control_aplicaciones_campo_boquillas[".tableType"] = "list";

$tdatacat_control_aplicaciones_campo_boquillas[".printerPageOrientation"] = 0;
$tdatacat_control_aplicaciones_campo_boquillas[".nPrinterPageScale"] = 100;

$tdatacat_control_aplicaciones_campo_boquillas[".nPrinterSplitRecords"] = 40;

$tdatacat_control_aplicaciones_campo_boquillas[".geocodingEnabled"] = false;





$tdatacat_control_aplicaciones_campo_boquillas[".isResizeColumns"] = true;





$tdatacat_control_aplicaciones_campo_boquillas[".pageSize"] = 20;

$tdatacat_control_aplicaciones_campo_boquillas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_control_aplicaciones_campo_boquillas[".strOrderBy"] = $tstrOrderBy;

$tdatacat_control_aplicaciones_campo_boquillas[".orderindexes"] = array();


$tdatacat_control_aplicaciones_campo_boquillas[".sqlHead"] = "SELECT cat_control_aplicaciones_campo_boquillas.vigente,  cat_control_aplicaciones_campo_boquillas.descripcion_boquilla,  cat_control_aplicaciones_campo_boquillas.cat_control_aplicaciones_campo_boquillas_id,  cat_control_aplicaciones_campo_boquillas.capturista,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_control_aplicaciones_campo_boquillas[".sqlFrom"] = "FROM cat_control_aplicaciones_campo_boquillas  INNER JOIN cat_usuarios ON cat_control_aplicaciones_campo_boquillas.capturista = cat_usuarios.usuario";
$tdatacat_control_aplicaciones_campo_boquillas[".sqlWhereExpr"] = "(cat_control_aplicaciones_campo_boquillas.vigente =1)";
$tdatacat_control_aplicaciones_campo_boquillas[".sqlTail"] = "";

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
$tdatacat_control_aplicaciones_campo_boquillas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_control_aplicaciones_campo_boquillas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_control_aplicaciones_campo_boquillas[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_control_aplicaciones_campo_boquillas[".highlightSearchResults"] = true;

$tableKeyscat_control_aplicaciones_campo_boquillas = array();
$tableKeyscat_control_aplicaciones_campo_boquillas[] = "cat_control_aplicaciones_campo_boquillas_id";
$tdatacat_control_aplicaciones_campo_boquillas[".Keys"] = $tableKeyscat_control_aplicaciones_campo_boquillas;


$tdatacat_control_aplicaciones_campo_boquillas[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_boquillas";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_boquillas","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_campo_boquillas.vigente";

	
	
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


	$tdatacat_control_aplicaciones_campo_boquillas["vigente"] = $fdata;
		$tdatacat_control_aplicaciones_campo_boquillas[".searchableFields"][] = "vigente";
//	descripcion_boquilla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_boquilla";
	$fdata["GoodName"] = "descripcion_boquilla";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_boquillas";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_boquillas","descripcion_boquilla");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_boquilla";

		$fdata["sourceSingle"] = "descripcion_boquilla";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_campo_boquillas.descripcion_boquilla";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacat_control_aplicaciones_campo_boquillas["descripcion_boquilla"] = $fdata;
		$tdatacat_control_aplicaciones_campo_boquillas[".searchableFields"][] = "descripcion_boquilla";
//	cat_control_aplicaciones_campo_boquillas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_control_aplicaciones_campo_boquillas_id";
	$fdata["GoodName"] = "cat_control_aplicaciones_campo_boquillas_id";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_boquillas";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_boquillas","cat_control_aplicaciones_campo_boquillas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_control_aplicaciones_campo_boquillas_id";

		$fdata["sourceSingle"] = "cat_control_aplicaciones_campo_boquillas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_campo_boquillas.cat_control_aplicaciones_campo_boquillas_id";

	
	
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


	$tdatacat_control_aplicaciones_campo_boquillas["cat_control_aplicaciones_campo_boquillas_id"] = $fdata;
		$tdatacat_control_aplicaciones_campo_boquillas[".searchableFields"][] = "cat_control_aplicaciones_campo_boquillas_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_boquillas";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_boquillas","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_campo_boquillas.capturista";

	
	
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


	$tdatacat_control_aplicaciones_campo_boquillas["capturista"] = $fdata;
		$tdatacat_control_aplicaciones_campo_boquillas[".searchableFields"][] = "capturista";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_boquillas","cat_usuarios_licencias_id");
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


	$tdatacat_control_aplicaciones_campo_boquillas["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_control_aplicaciones_campo_boquillas[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_control_aplicaciones_campo_boquillas"]=&$tdatacat_control_aplicaciones_campo_boquillas;
$field_labels["cat_control_aplicaciones_campo_boquillas"] = &$fieldLabelscat_control_aplicaciones_campo_boquillas;
$fieldToolTips["cat_control_aplicaciones_campo_boquillas"] = &$fieldToolTipscat_control_aplicaciones_campo_boquillas;
$placeHolders["cat_control_aplicaciones_campo_boquillas"] = &$placeHolderscat_control_aplicaciones_campo_boquillas;
$page_titles["cat_control_aplicaciones_campo_boquillas"] = &$pageTitlescat_control_aplicaciones_campo_boquillas;


changeTextControlsToDate( "cat_control_aplicaciones_campo_boquillas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_control_aplicaciones_campo_boquillas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_control_aplicaciones_campo_boquillas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_control_aplicaciones_campo_boquillas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_control_aplicaciones_campo_boquillas.vigente,  cat_control_aplicaciones_campo_boquillas.descripcion_boquilla,  cat_control_aplicaciones_campo_boquillas.cat_control_aplicaciones_campo_boquillas_id,  cat_control_aplicaciones_campo_boquillas.capturista,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_control_aplicaciones_campo_boquillas  INNER JOIN cat_usuarios ON cat_control_aplicaciones_campo_boquillas.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_control_aplicaciones_campo_boquillas.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_control_aplicaciones_campo_boquillas.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_aplicaciones_campo_boquillas",
	"m_srcTableName" => "cat_control_aplicaciones_campo_boquillas"
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
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_aplicaciones_campo_boquillas",
	"m_srcTableName" => "cat_control_aplicaciones_campo_boquillas"
));

$proto6["m_sql"] = "cat_control_aplicaciones_campo_boquillas.vigente";
$proto6["m_srcTableName"] = "cat_control_aplicaciones_campo_boquillas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_boquilla",
	"m_strTable" => "cat_control_aplicaciones_campo_boquillas",
	"m_srcTableName" => "cat_control_aplicaciones_campo_boquillas"
));

$proto8["m_sql"] = "cat_control_aplicaciones_campo_boquillas.descripcion_boquilla";
$proto8["m_srcTableName"] = "cat_control_aplicaciones_campo_boquillas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_control_aplicaciones_campo_boquillas_id",
	"m_strTable" => "cat_control_aplicaciones_campo_boquillas",
	"m_srcTableName" => "cat_control_aplicaciones_campo_boquillas"
));

$proto10["m_sql"] = "cat_control_aplicaciones_campo_boquillas.cat_control_aplicaciones_campo_boquillas_id";
$proto10["m_srcTableName"] = "cat_control_aplicaciones_campo_boquillas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_control_aplicaciones_campo_boquillas",
	"m_srcTableName" => "cat_control_aplicaciones_campo_boquillas"
));

$proto12["m_sql"] = "cat_control_aplicaciones_campo_boquillas.capturista";
$proto12["m_srcTableName"] = "cat_control_aplicaciones_campo_boquillas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_control_aplicaciones_campo_boquillas"
));

$proto14["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto14["m_srcTableName"] = "cat_control_aplicaciones_campo_boquillas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cat_control_aplicaciones_campo_boquillas";
$proto17["m_srcTableName"] = "cat_control_aplicaciones_campo_boquillas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "descripcion_boquilla";
$proto17["m_columns"][] = "cat_control_aplicaciones_campo_boquillas_id";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cat_control_aplicaciones_campo_boquillas";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cat_control_aplicaciones_campo_boquillas";
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
$proto21["m_srcTableName"] = "cat_control_aplicaciones_campo_boquillas";
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
$proto20["m_sql"] = "INNER JOIN cat_usuarios ON cat_control_aplicaciones_campo_boquillas.capturista = cat_usuarios.usuario";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "cat_control_aplicaciones_campo_boquillas";
$proto22=array();
$proto22["m_sql"] = "cat_usuarios.usuario = cat_control_aplicaciones_campo_boquillas.capturista";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_control_aplicaciones_campo_boquillas"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= cat_control_aplicaciones_campo_boquillas.capturista";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_control_aplicaciones_campo_boquillas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_control_aplicaciones_campo_boquillas = createSqlQuery_cat_control_aplicaciones_campo_boquillas();


	
		;

					

$tdatacat_control_aplicaciones_campo_boquillas[".sqlquery"] = $queryData_cat_control_aplicaciones_campo_boquillas;



$tdatacat_control_aplicaciones_campo_boquillas[".hasEvents"] = false;

?>