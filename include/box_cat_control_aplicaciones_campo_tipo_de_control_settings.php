<?php
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control = array();
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".searchableFields"] = array();
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".ShortName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".OwnerID"] = "";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".OriginalTable"] = "cat_control_aplicaciones_campo_tipo_de_control";


$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".originalPagesByType"] = $tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".pagesByType"];
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".originalPages"] = $tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".pages"];
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".originalDefaultPages"] = $tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_control_aplicaciones_campo_tipo_de_control = array();
$fieldToolTipsbox_cat_control_aplicaciones_campo_tipo_de_control = array();
$pageTitlesbox_cat_control_aplicaciones_campo_tipo_de_control = array();
$placeHoldersbox_cat_control_aplicaciones_campo_tipo_de_control = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"] = array();
	$fieldToolTipsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"] = array();
	$placeHoldersbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"] = array();
	$pageTitlesbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"] = array();
	$fieldLabelsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["descripcion_tipo_de_control"] = "Descripcion";
	$fieldToolTipsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["descripcion_tipo_de_control"] = "";
	$placeHoldersbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["descripcion_tipo_de_control"] = "";
	$fieldLabelsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "Id";
	$fieldToolTipsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "";
	$placeHoldersbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "";
	$fieldLabelsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["time_stamp"] = "";
	$placeHoldersbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["time_stamp"] = "";
	$fieldLabelsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipsbox_cat_control_aplicaciones_campo_tipo_de_control["Spanish"]))
		$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".isUseToolTips"] = true;
}





$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".shortTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".nSecOptions"] = 0;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".mainTableOwnerID"] = "";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".entityType"] = 1;
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".strOriginalTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";

	



$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".showAddInPopup"] = false;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".showEditInPopup"] = false;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".showViewInPopup"] = false;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".listAjax"] = false;
//	temporary
//$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".listAjax"] = false;

	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".audit"] = true;

	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".locking"] = true;


$pages = $tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".edit"] = true;
	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".afterEditAction"] = 1;
	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".add"] = true;
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".afterAddAction"] = 1;
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".closePopupAfterAdd"] = 1;
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".list"] = true;
}



$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".printFriendly"] = true;
}



$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".buttonsAdded"] = false;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".isUseTimeForSearch"] = false;


$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".badgeColor"] = "DB7093";


$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".allSearchFields"] = array();
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".filterFields"] = array();
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".requiredSearchFields"] = array();

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"] = array();
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "vigente";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "descripcion_tipo_de_control";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "capturista";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "time_stamp";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".tableType"] = "list";

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".printerPageOrientation"] = 0;
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".nPrinterPageScale"] = 100;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".geocodingEnabled"] = false;





$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".isResizeColumns"] = true;





$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".pageSize"] = 20;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".orderindexes"] = array();


$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".sqlHead"] = "SELECT cat_control_aplicaciones_campo_tipo_de_control.vigente,  cat_control_aplicaciones_campo_tipo_de_control.descripcion_tipo_de_control,  cat_control_aplicaciones_campo_tipo_de_control.cat_control_aplicaciones_campo_tipo_de_control_id,  cat_control_aplicaciones_campo_tipo_de_control.capturista,  cat_control_aplicaciones_campo_tipo_de_control.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".sqlFrom"] = "FROM cat_control_aplicaciones_campo_tipo_de_control  INNER JOIN cat_usuarios ON cat_control_aplicaciones_campo_tipo_de_control.capturista = cat_usuarios.usuario";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".sqlWhereExpr"] = "(cat_control_aplicaciones_campo_tipo_de_control.vigente =1)";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".sqlTail"] = "";

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
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".highlightSearchResults"] = true;

$tableKeysbox_cat_control_aplicaciones_campo_tipo_de_control = array();
$tableKeysbox_cat_control_aplicaciones_campo_tipo_de_control[] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".Keys"] = $tableKeysbox_cat_control_aplicaciones_campo_tipo_de_control;


$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_campo_tipo_de_control","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_campo_tipo_de_control.vigente";

	
	
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


	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control["vigente"] = $fdata;
		$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "vigente";
//	descripcion_tipo_de_control
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_tipo_de_control";
	$fdata["GoodName"] = "descripcion_tipo_de_control";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_campo_tipo_de_control","descripcion_tipo_de_control");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_tipo_de_control";

		$fdata["sourceSingle"] = "descripcion_tipo_de_control";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_campo_tipo_de_control.descripcion_tipo_de_control";

	
	
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


	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control["descripcion_tipo_de_control"] = $fdata;
		$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "descripcion_tipo_de_control";
//	cat_control_aplicaciones_campo_tipo_de_control_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
	$fdata["GoodName"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_campo_tipo_de_control","cat_control_aplicaciones_campo_tipo_de_control_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_control_aplicaciones_campo_tipo_de_control_id";

		$fdata["sourceSingle"] = "cat_control_aplicaciones_campo_tipo_de_control_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_campo_tipo_de_control.cat_control_aplicaciones_campo_tipo_de_control_id";

	
	
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


	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control["cat_control_aplicaciones_campo_tipo_de_control_id"] = $fdata;
		$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_campo_tipo_de_control","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_campo_tipo_de_control.capturista";

	
	
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


	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control["capturista"] = $fdata;
		$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_campo_tipo_de_control","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_campo_tipo_de_control.time_stamp";

	
	
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


	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control["time_stamp"] = $fdata;
		$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_campo_tipo_de_control","cat_usuarios_licencias_id");
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


	$tdatabox_cat_control_aplicaciones_campo_tipo_de_control["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_control_aplicaciones_campo_tipo_de_control"]=&$tdatabox_cat_control_aplicaciones_campo_tipo_de_control;
$field_labels["box_cat_control_aplicaciones_campo_tipo_de_control"] = &$fieldLabelsbox_cat_control_aplicaciones_campo_tipo_de_control;
$fieldToolTips["box_cat_control_aplicaciones_campo_tipo_de_control"] = &$fieldToolTipsbox_cat_control_aplicaciones_campo_tipo_de_control;
$placeHolders["box_cat_control_aplicaciones_campo_tipo_de_control"] = &$placeHoldersbox_cat_control_aplicaciones_campo_tipo_de_control;
$page_titles["box_cat_control_aplicaciones_campo_tipo_de_control"] = &$pageTitlesbox_cat_control_aplicaciones_campo_tipo_de_control;


changeTextControlsToDate( "box_cat_control_aplicaciones_campo_tipo_de_control" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_control_aplicaciones_campo_tipo_de_control"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_control_aplicaciones_campo_tipo_de_control"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_control_aplicaciones_campo_tipo_de_control()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_control_aplicaciones_campo_tipo_de_control.vigente,  cat_control_aplicaciones_campo_tipo_de_control.descripcion_tipo_de_control,  cat_control_aplicaciones_campo_tipo_de_control.cat_control_aplicaciones_campo_tipo_de_control_id,  cat_control_aplicaciones_campo_tipo_de_control.capturista,  cat_control_aplicaciones_campo_tipo_de_control.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_control_aplicaciones_campo_tipo_de_control  INNER JOIN cat_usuarios ON cat_control_aplicaciones_campo_tipo_de_control.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_control_aplicaciones_campo_tipo_de_control.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "box_cat_control_aplicaciones_campo_tipo_de_control"
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
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "box_cat_control_aplicaciones_campo_tipo_de_control"
));

$proto6["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.vigente";
$proto6["m_srcTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_tipo_de_control",
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "box_cat_control_aplicaciones_campo_tipo_de_control"
));

$proto8["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.descripcion_tipo_de_control";
$proto8["m_srcTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_control_aplicaciones_campo_tipo_de_control_id",
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "box_cat_control_aplicaciones_campo_tipo_de_control"
));

$proto10["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.cat_control_aplicaciones_campo_tipo_de_control_id";
$proto10["m_srcTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "box_cat_control_aplicaciones_campo_tipo_de_control"
));

$proto12["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.capturista";
$proto12["m_srcTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "box_cat_control_aplicaciones_campo_tipo_de_control"
));

$proto14["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.time_stamp";
$proto14["m_srcTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_control_aplicaciones_campo_tipo_de_control"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$proto19["m_srcTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "descripcion_tipo_de_control";
$proto19["m_columns"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
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
$proto23["m_srcTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
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
$proto22["m_sql"] = "INNER JOIN cat_usuarios ON cat_control_aplicaciones_campo_tipo_de_control.capturista = cat_usuarios.usuario";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "box_cat_control_aplicaciones_campo_tipo_de_control";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_control_aplicaciones_campo_tipo_de_control.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_control_aplicaciones_campo_tipo_de_control"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= cat_control_aplicaciones_campo_tipo_de_control.capturista";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_control_aplicaciones_campo_tipo_de_control";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_control_aplicaciones_campo_tipo_de_control = createSqlQuery_box_cat_control_aplicaciones_campo_tipo_de_control();


	
		;

						

$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".sqlquery"] = $queryData_box_cat_control_aplicaciones_campo_tipo_de_control;



$tdatabox_cat_control_aplicaciones_campo_tipo_de_control[".hasEvents"] = false;

?>