<?php
$tdatacat_control_aplicaciones_campo_tipo_de_control = array();
$tdatacat_control_aplicaciones_campo_tipo_de_control[".searchableFields"] = array();
$tdatacat_control_aplicaciones_campo_tipo_de_control[".ShortName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".OwnerID"] = "";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".OriginalTable"] = "cat_control_aplicaciones_campo_tipo_de_control";


$tdatacat_control_aplicaciones_campo_tipo_de_control[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_control_aplicaciones_campo_tipo_de_control[".originalPagesByType"] = $tdatacat_control_aplicaciones_campo_tipo_de_control[".pagesByType"];
$tdatacat_control_aplicaciones_campo_tipo_de_control[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_control_aplicaciones_campo_tipo_de_control[".originalPages"] = $tdatacat_control_aplicaciones_campo_tipo_de_control[".pages"];
$tdatacat_control_aplicaciones_campo_tipo_de_control[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_control_aplicaciones_campo_tipo_de_control[".originalDefaultPages"] = $tdatacat_control_aplicaciones_campo_tipo_de_control[".defaultPages"];

//	field labels
$fieldLabelscat_control_aplicaciones_campo_tipo_de_control = array();
$fieldToolTipscat_control_aplicaciones_campo_tipo_de_control = array();
$pageTitlescat_control_aplicaciones_campo_tipo_de_control = array();
$placeHolderscat_control_aplicaciones_campo_tipo_de_control = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_control_aplicaciones_campo_tipo_de_control["Spanish"] = array();
	$fieldToolTipscat_control_aplicaciones_campo_tipo_de_control["Spanish"] = array();
	$placeHolderscat_control_aplicaciones_campo_tipo_de_control["Spanish"] = array();
	$pageTitlescat_control_aplicaciones_campo_tipo_de_control["Spanish"] = array();
	$fieldLabelscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["vigente"] = "";
	$placeHolderscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["vigente"] = "";
	$fieldLabelscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["descripcion_tipo_de_control"] = "Descripcion";
	$fieldToolTipscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["descripcion_tipo_de_control"] = "";
	$placeHolderscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["descripcion_tipo_de_control"] = "";
	$fieldLabelscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "Id";
	$fieldToolTipscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "";
	$placeHolderscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control_id"] = "";
	$fieldLabelscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["capturista"] = "";
	$placeHolderscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["capturista"] = "";
	$fieldLabelscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["time_stamp"] = "";
	$placeHolderscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_control_aplicaciones_campo_tipo_de_control["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_control_aplicaciones_campo_tipo_de_control["Spanish"]))
		$tdatacat_control_aplicaciones_campo_tipo_de_control[".isUseToolTips"] = true;
}





$tdatacat_control_aplicaciones_campo_tipo_de_control[".shortTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".nSecOptions"] = 0;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".mainTableOwnerID"] = "";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".entityType"] = 0;
$tdatacat_control_aplicaciones_campo_tipo_de_control[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_control_aplicaciones_campo_tipo_de_control[".strOriginalTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";

	



$tdatacat_control_aplicaciones_campo_tipo_de_control[".showAddInPopup"] = false;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".showEditInPopup"] = false;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".showViewInPopup"] = false;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".listAjax"] = false;
//	temporary
//$tdatacat_control_aplicaciones_campo_tipo_de_control[".listAjax"] = false;

	$tdatacat_control_aplicaciones_campo_tipo_de_control[".audit"] = true;

	$tdatacat_control_aplicaciones_campo_tipo_de_control[".locking"] = true;


$pages = $tdatacat_control_aplicaciones_campo_tipo_de_control[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_control_aplicaciones_campo_tipo_de_control[".edit"] = true;
	$tdatacat_control_aplicaciones_campo_tipo_de_control[".afterEditAction"] = 1;
	$tdatacat_control_aplicaciones_campo_tipo_de_control[".closePopupAfterEdit"] = 1;
	$tdatacat_control_aplicaciones_campo_tipo_de_control[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_control_aplicaciones_campo_tipo_de_control[".add"] = true;
$tdatacat_control_aplicaciones_campo_tipo_de_control[".afterAddAction"] = 1;
$tdatacat_control_aplicaciones_campo_tipo_de_control[".closePopupAfterAdd"] = 1;
$tdatacat_control_aplicaciones_campo_tipo_de_control[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_control_aplicaciones_campo_tipo_de_control[".list"] = true;
}



$tdatacat_control_aplicaciones_campo_tipo_de_control[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_control_aplicaciones_campo_tipo_de_control[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_control_aplicaciones_campo_tipo_de_control[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_control_aplicaciones_campo_tipo_de_control[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_control_aplicaciones_campo_tipo_de_control[".printFriendly"] = true;
}



$tdatacat_control_aplicaciones_campo_tipo_de_control[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_control_aplicaciones_campo_tipo_de_control[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_control_aplicaciones_campo_tipo_de_control[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_control_aplicaciones_campo_tipo_de_control[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_control_aplicaciones_campo_tipo_de_control[".ajaxCodeSnippetAdded"] = false;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".buttonsAdded"] = false;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_control_aplicaciones_campo_tipo_de_control[".isUseTimeForSearch"] = false;


$tdatacat_control_aplicaciones_campo_tipo_de_control[".badgeColor"] = "E8926F";


$tdatacat_control_aplicaciones_campo_tipo_de_control[".allSearchFields"] = array();
$tdatacat_control_aplicaciones_campo_tipo_de_control[".filterFields"] = array();
$tdatacat_control_aplicaciones_campo_tipo_de_control[".requiredSearchFields"] = array();

$tdatacat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"] = array();
$tdatacat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "vigente";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "descripcion_tipo_de_control";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "capturista";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "time_stamp";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_control_aplicaciones_campo_tipo_de_control[".tableType"] = "list";

$tdatacat_control_aplicaciones_campo_tipo_de_control[".printerPageOrientation"] = 0;
$tdatacat_control_aplicaciones_campo_tipo_de_control[".nPrinterPageScale"] = 100;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".nPrinterSplitRecords"] = 40;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".geocodingEnabled"] = false;





$tdatacat_control_aplicaciones_campo_tipo_de_control[".isResizeColumns"] = true;





$tdatacat_control_aplicaciones_campo_tipo_de_control[".pageSize"] = 20;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".strOrderBy"] = $tstrOrderBy;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".orderindexes"] = array();


$tdatacat_control_aplicaciones_campo_tipo_de_control[".sqlHead"] = "SELECT cat_control_aplicaciones_campo_tipo_de_control.vigente,  cat_control_aplicaciones_campo_tipo_de_control.descripcion_tipo_de_control,  cat_control_aplicaciones_campo_tipo_de_control.cat_control_aplicaciones_campo_tipo_de_control_id,  cat_control_aplicaciones_campo_tipo_de_control.capturista,  cat_control_aplicaciones_campo_tipo_de_control.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".sqlFrom"] = "FROM cat_control_aplicaciones_campo_tipo_de_control  INNER JOIN cat_usuarios ON cat_control_aplicaciones_campo_tipo_de_control.capturista = cat_usuarios.usuario";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".sqlWhereExpr"] = "";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".sqlTail"] = "";

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
$tdatacat_control_aplicaciones_campo_tipo_de_control[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_control_aplicaciones_campo_tipo_de_control[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_control_aplicaciones_campo_tipo_de_control[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_control_aplicaciones_campo_tipo_de_control[".highlightSearchResults"] = true;

$tableKeyscat_control_aplicaciones_campo_tipo_de_control = array();
$tableKeyscat_control_aplicaciones_campo_tipo_de_control[] = "cat_control_aplicaciones_campo_tipo_de_control_id";
$tdatacat_control_aplicaciones_campo_tipo_de_control[".Keys"] = $tableKeyscat_control_aplicaciones_campo_tipo_de_control;


$tdatacat_control_aplicaciones_campo_tipo_de_control[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_tipo_de_control","vigente");
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


	$tdatacat_control_aplicaciones_campo_tipo_de_control["vigente"] = $fdata;
		$tdatacat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "vigente";
//	descripcion_tipo_de_control
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_tipo_de_control";
	$fdata["GoodName"] = "descripcion_tipo_de_control";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_tipo_de_control","descripcion_tipo_de_control");
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


	$tdatacat_control_aplicaciones_campo_tipo_de_control["descripcion_tipo_de_control"] = $fdata;
		$tdatacat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "descripcion_tipo_de_control";
//	cat_control_aplicaciones_campo_tipo_de_control_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
	$fdata["GoodName"] = "cat_control_aplicaciones_campo_tipo_de_control_id";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_tipo_de_control","cat_control_aplicaciones_campo_tipo_de_control_id");
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


	$tdatacat_control_aplicaciones_campo_tipo_de_control["cat_control_aplicaciones_campo_tipo_de_control_id"] = $fdata;
		$tdatacat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "cat_control_aplicaciones_campo_tipo_de_control_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_tipo_de_control","capturista");
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


	$tdatacat_control_aplicaciones_campo_tipo_de_control["capturista"] = $fdata;
		$tdatacat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_control_aplicaciones_campo_tipo_de_control";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_tipo_de_control","time_stamp");
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


	$tdatacat_control_aplicaciones_campo_tipo_de_control["time_stamp"] = $fdata;
		$tdatacat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_control_aplicaciones_campo_tipo_de_control","cat_usuarios_licencias_id");
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


	$tdatacat_control_aplicaciones_campo_tipo_de_control["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_control_aplicaciones_campo_tipo_de_control[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_control_aplicaciones_campo_tipo_de_control"]=&$tdatacat_control_aplicaciones_campo_tipo_de_control;
$field_labels["cat_control_aplicaciones_campo_tipo_de_control"] = &$fieldLabelscat_control_aplicaciones_campo_tipo_de_control;
$fieldToolTips["cat_control_aplicaciones_campo_tipo_de_control"] = &$fieldToolTipscat_control_aplicaciones_campo_tipo_de_control;
$placeHolders["cat_control_aplicaciones_campo_tipo_de_control"] = &$placeHolderscat_control_aplicaciones_campo_tipo_de_control;
$page_titles["cat_control_aplicaciones_campo_tipo_de_control"] = &$pageTitlescat_control_aplicaciones_campo_tipo_de_control;


changeTextControlsToDate( "cat_control_aplicaciones_campo_tipo_de_control" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_control_aplicaciones_campo_tipo_de_control"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_control_aplicaciones_campo_tipo_de_control"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_control_aplicaciones_campo_tipo_de_control()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_control_aplicaciones_campo_tipo_de_control.vigente,  cat_control_aplicaciones_campo_tipo_de_control.descripcion_tipo_de_control,  cat_control_aplicaciones_campo_tipo_de_control.cat_control_aplicaciones_campo_tipo_de_control_id,  cat_control_aplicaciones_campo_tipo_de_control.capturista,  cat_control_aplicaciones_campo_tipo_de_control.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_control_aplicaciones_campo_tipo_de_control  INNER JOIN cat_usuarios ON cat_control_aplicaciones_campo_tipo_de_control.capturista = cat_usuarios.usuario";
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
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "cat_control_aplicaciones_campo_tipo_de_control"
));

$proto6["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.vigente";
$proto6["m_srcTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_tipo_de_control",
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "cat_control_aplicaciones_campo_tipo_de_control"
));

$proto8["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.descripcion_tipo_de_control";
$proto8["m_srcTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_control_aplicaciones_campo_tipo_de_control_id",
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "cat_control_aplicaciones_campo_tipo_de_control"
));

$proto10["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.cat_control_aplicaciones_campo_tipo_de_control_id";
$proto10["m_srcTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "cat_control_aplicaciones_campo_tipo_de_control"
));

$proto12["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.capturista";
$proto12["m_srcTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_control_aplicaciones_campo_tipo_de_control",
	"m_srcTableName" => "cat_control_aplicaciones_campo_tipo_de_control"
));

$proto14["m_sql"] = "cat_control_aplicaciones_campo_tipo_de_control.time_stamp";
$proto14["m_srcTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_control_aplicaciones_campo_tipo_de_control"
));

$proto16["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$proto19["m_srcTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
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
$proto18["m_srcTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
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
$proto23["m_srcTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
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
$proto22["m_srcTableName"] = "cat_control_aplicaciones_campo_tipo_de_control";
$proto24=array();
$proto24["m_sql"] = "cat_usuarios.usuario = cat_control_aplicaciones_campo_tipo_de_control.capturista";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_control_aplicaciones_campo_tipo_de_control"
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
$proto0["m_srcTableName"]="cat_control_aplicaciones_campo_tipo_de_control";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_control_aplicaciones_campo_tipo_de_control = createSqlQuery_cat_control_aplicaciones_campo_tipo_de_control();


	
		;

						

$tdatacat_control_aplicaciones_campo_tipo_de_control[".sqlquery"] = $queryData_cat_control_aplicaciones_campo_tipo_de_control;



$tdatacat_control_aplicaciones_campo_tipo_de_control[".hasEvents"] = false;

?>