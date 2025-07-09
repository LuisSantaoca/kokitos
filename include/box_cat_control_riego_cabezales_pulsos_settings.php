<?php
$tdatabox_cat_control_riego_cabezales_pulsos = array();
$tdatabox_cat_control_riego_cabezales_pulsos[".searchableFields"] = array();
$tdatabox_cat_control_riego_cabezales_pulsos[".ShortName"] = "box_cat_control_riego_cabezales_pulsos";
$tdatabox_cat_control_riego_cabezales_pulsos[".OwnerID"] = "";
$tdatabox_cat_control_riego_cabezales_pulsos[".OriginalTable"] = "cat_control_riego_cabezales_pulsos";


$tdatabox_cat_control_riego_cabezales_pulsos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_control_riego_cabezales_pulsos[".originalPagesByType"] = $tdatabox_cat_control_riego_cabezales_pulsos[".pagesByType"];
$tdatabox_cat_control_riego_cabezales_pulsos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_control_riego_cabezales_pulsos[".originalPages"] = $tdatabox_cat_control_riego_cabezales_pulsos[".pages"];
$tdatabox_cat_control_riego_cabezales_pulsos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_control_riego_cabezales_pulsos[".originalDefaultPages"] = $tdatabox_cat_control_riego_cabezales_pulsos[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_control_riego_cabezales_pulsos = array();
$fieldToolTipsbox_cat_control_riego_cabezales_pulsos = array();
$pageTitlesbox_cat_control_riego_cabezales_pulsos = array();
$placeHoldersbox_cat_control_riego_cabezales_pulsos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_control_riego_cabezales_pulsos["Spanish"] = array();
	$fieldToolTipsbox_cat_control_riego_cabezales_pulsos["Spanish"] = array();
	$placeHoldersbox_cat_control_riego_cabezales_pulsos["Spanish"] = array();
	$pageTitlesbox_cat_control_riego_cabezales_pulsos["Spanish"] = array();
	$fieldLabelsbox_cat_control_riego_cabezales_pulsos["Spanish"]["cat_control_riego_cabezales_pulsos_id"] = "Id";
	$fieldToolTipsbox_cat_control_riego_cabezales_pulsos["Spanish"]["cat_control_riego_cabezales_pulsos_id"] = "";
	$placeHoldersbox_cat_control_riego_cabezales_pulsos["Spanish"]["cat_control_riego_cabezales_pulsos_id"] = "";
	$fieldLabelsbox_cat_control_riego_cabezales_pulsos["Spanish"]["cat_control_riego_cabezales_id"] = "Cabezales";
	$fieldToolTipsbox_cat_control_riego_cabezales_pulsos["Spanish"]["cat_control_riego_cabezales_id"] = "";
	$placeHoldersbox_cat_control_riego_cabezales_pulsos["Spanish"]["cat_control_riego_cabezales_id"] = "";
	$fieldLabelsbox_cat_control_riego_cabezales_pulsos["Spanish"]["numero_de_pulsos"] = "Numero De Pulsos";
	$fieldToolTipsbox_cat_control_riego_cabezales_pulsos["Spanish"]["numero_de_pulsos"] = "";
	$placeHoldersbox_cat_control_riego_cabezales_pulsos["Spanish"]["numero_de_pulsos"] = "";
	$fieldLabelsbox_cat_control_riego_cabezales_pulsos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_control_riego_cabezales_pulsos["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_control_riego_cabezales_pulsos["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_control_riego_cabezales_pulsos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_control_riego_cabezales_pulsos["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_control_riego_cabezales_pulsos["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_control_riego_cabezales_pulsos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbox_cat_control_riego_cabezales_pulsos["Spanish"]["time_stamp"] = "";
	$placeHoldersbox_cat_control_riego_cabezales_pulsos["Spanish"]["time_stamp"] = "";
	$fieldLabelsbox_cat_control_riego_cabezales_pulsos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_control_riego_cabezales_pulsos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_control_riego_cabezales_pulsos["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipsbox_cat_control_riego_cabezales_pulsos["Spanish"]))
		$tdatabox_cat_control_riego_cabezales_pulsos[".isUseToolTips"] = true;
}





$tdatabox_cat_control_riego_cabezales_pulsos[".shortTableName"] = "box_cat_control_riego_cabezales_pulsos";
$tdatabox_cat_control_riego_cabezales_pulsos[".nSecOptions"] = 0;

$tdatabox_cat_control_riego_cabezales_pulsos[".mainTableOwnerID"] = "";
$tdatabox_cat_control_riego_cabezales_pulsos[".entityType"] = 1;
$tdatabox_cat_control_riego_cabezales_pulsos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_control_riego_cabezales_pulsos[".strOriginalTableName"] = "cat_control_riego_cabezales_pulsos";

	



$tdatabox_cat_control_riego_cabezales_pulsos[".showAddInPopup"] = false;

$tdatabox_cat_control_riego_cabezales_pulsos[".showEditInPopup"] = false;

$tdatabox_cat_control_riego_cabezales_pulsos[".showViewInPopup"] = false;

$tdatabox_cat_control_riego_cabezales_pulsos[".listAjax"] = false;
//	temporary
//$tdatabox_cat_control_riego_cabezales_pulsos[".listAjax"] = false;

	$tdatabox_cat_control_riego_cabezales_pulsos[".audit"] = false;

	$tdatabox_cat_control_riego_cabezales_pulsos[".locking"] = false;


$pages = $tdatabox_cat_control_riego_cabezales_pulsos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_control_riego_cabezales_pulsos[".edit"] = true;
	$tdatabox_cat_control_riego_cabezales_pulsos[".afterEditAction"] = 1;
	$tdatabox_cat_control_riego_cabezales_pulsos[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_control_riego_cabezales_pulsos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_control_riego_cabezales_pulsos[".add"] = true;
$tdatabox_cat_control_riego_cabezales_pulsos[".afterAddAction"] = 1;
$tdatabox_cat_control_riego_cabezales_pulsos[".closePopupAfterAdd"] = 1;
$tdatabox_cat_control_riego_cabezales_pulsos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_control_riego_cabezales_pulsos[".list"] = true;
}



$tdatabox_cat_control_riego_cabezales_pulsos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_control_riego_cabezales_pulsos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_control_riego_cabezales_pulsos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_control_riego_cabezales_pulsos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_control_riego_cabezales_pulsos[".printFriendly"] = true;
}



$tdatabox_cat_control_riego_cabezales_pulsos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_control_riego_cabezales_pulsos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_control_riego_cabezales_pulsos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_control_riego_cabezales_pulsos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_control_riego_cabezales_pulsos[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_control_riego_cabezales_pulsos[".buttonsAdded"] = false;

$tdatabox_cat_control_riego_cabezales_pulsos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_control_riego_cabezales_pulsos[".isUseTimeForSearch"] = false;


$tdatabox_cat_control_riego_cabezales_pulsos[".badgeColor"] = "4169E1";


$tdatabox_cat_control_riego_cabezales_pulsos[".allSearchFields"] = array();
$tdatabox_cat_control_riego_cabezales_pulsos[".filterFields"] = array();
$tdatabox_cat_control_riego_cabezales_pulsos[".requiredSearchFields"] = array();

$tdatabox_cat_control_riego_cabezales_pulsos[".googleLikeFields"] = array();
$tdatabox_cat_control_riego_cabezales_pulsos[".googleLikeFields"][] = "cat_control_riego_cabezales_pulsos_id";
$tdatabox_cat_control_riego_cabezales_pulsos[".googleLikeFields"][] = "cat_control_riego_cabezales_id";
$tdatabox_cat_control_riego_cabezales_pulsos[".googleLikeFields"][] = "numero_de_pulsos";
$tdatabox_cat_control_riego_cabezales_pulsos[".googleLikeFields"][] = "vigente";
$tdatabox_cat_control_riego_cabezales_pulsos[".googleLikeFields"][] = "capturista";
$tdatabox_cat_control_riego_cabezales_pulsos[".googleLikeFields"][] = "time_stamp";
$tdatabox_cat_control_riego_cabezales_pulsos[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_control_riego_cabezales_pulsos[".tableType"] = "list";

$tdatabox_cat_control_riego_cabezales_pulsos[".printerPageOrientation"] = 0;
$tdatabox_cat_control_riego_cabezales_pulsos[".nPrinterPageScale"] = 100;

$tdatabox_cat_control_riego_cabezales_pulsos[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_control_riego_cabezales_pulsos[".geocodingEnabled"] = false;





$tdatabox_cat_control_riego_cabezales_pulsos[".isResizeColumns"] = true;





$tdatabox_cat_control_riego_cabezales_pulsos[".pageSize"] = 20;

$tdatabox_cat_control_riego_cabezales_pulsos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_control_riego_cabezales_pulsos[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_control_riego_cabezales_pulsos[".orderindexes"] = array();


$tdatabox_cat_control_riego_cabezales_pulsos[".sqlHead"] = "SELECT cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_pulsos_id,  cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_id,  cat_control_riego_cabezales_pulsos.numero_de_pulsos,  cat_control_riego_cabezales_pulsos.vigente,  cat_control_riego_cabezales_pulsos.capturista,  cat_control_riego_cabezales_pulsos.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_cat_control_riego_cabezales_pulsos[".sqlFrom"] = "FROM cat_control_riego_cabezales_pulsos  INNER JOIN cat_usuarios ON cat_control_riego_cabezales_pulsos.capturista = cat_usuarios.usuario";
$tdatabox_cat_control_riego_cabezales_pulsos[".sqlWhereExpr"] = "(cat_control_riego_cabezales_pulsos.vigente =1)";
$tdatabox_cat_control_riego_cabezales_pulsos[".sqlTail"] = "";

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
$tdatabox_cat_control_riego_cabezales_pulsos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_control_riego_cabezales_pulsos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_control_riego_cabezales_pulsos[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_control_riego_cabezales_pulsos[".highlightSearchResults"] = true;

$tableKeysbox_cat_control_riego_cabezales_pulsos = array();
$tableKeysbox_cat_control_riego_cabezales_pulsos[] = "cat_control_riego_cabezales_pulsos_id";
$tdatabox_cat_control_riego_cabezales_pulsos[".Keys"] = $tableKeysbox_cat_control_riego_cabezales_pulsos;


$tdatabox_cat_control_riego_cabezales_pulsos[".hideMobileList"] = array();




//	cat_control_riego_cabezales_pulsos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_control_riego_cabezales_pulsos_id";
	$fdata["GoodName"] = "cat_control_riego_cabezales_pulsos_id";
	$fdata["ownerTable"] = "cat_control_riego_cabezales_pulsos";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales_pulsos","cat_control_riego_cabezales_pulsos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_control_riego_cabezales_pulsos_id";

		$fdata["sourceSingle"] = "cat_control_riego_cabezales_pulsos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_pulsos_id";

	
	
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


	$tdatabox_cat_control_riego_cabezales_pulsos["cat_control_riego_cabezales_pulsos_id"] = $fdata;
		$tdatabox_cat_control_riego_cabezales_pulsos[".searchableFields"][] = "cat_control_riego_cabezales_pulsos_id";
//	cat_control_riego_cabezales_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_control_riego_cabezales_id";
	$fdata["GoodName"] = "cat_control_riego_cabezales_id";
	$fdata["ownerTable"] = "cat_control_riego_cabezales_pulsos";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales_pulsos","cat_control_riego_cabezales_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_control_riego_cabezales_id";

		$fdata["sourceSingle"] = "cat_control_riego_cabezales_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_id";

	
	
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
	$edata["LookupTable"] = "box_cat_control_riego_cabezales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_control_riego_cabezales_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_cabezal";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
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


	$tdatabox_cat_control_riego_cabezales_pulsos["cat_control_riego_cabezales_id"] = $fdata;
		$tdatabox_cat_control_riego_cabezales_pulsos[".searchableFields"][] = "cat_control_riego_cabezales_id";
//	numero_de_pulsos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero_de_pulsos";
	$fdata["GoodName"] = "numero_de_pulsos";
	$fdata["ownerTable"] = "cat_control_riego_cabezales_pulsos";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales_pulsos","numero_de_pulsos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "numero_de_pulsos";

		$fdata["sourceSingle"] = "numero_de_pulsos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales_pulsos.numero_de_pulsos";

	
	
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


	$tdatabox_cat_control_riego_cabezales_pulsos["numero_de_pulsos"] = $fdata;
		$tdatabox_cat_control_riego_cabezales_pulsos[".searchableFields"][] = "numero_de_pulsos";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_control_riego_cabezales_pulsos";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales_pulsos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales_pulsos.vigente";

	
	
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


	$tdatabox_cat_control_riego_cabezales_pulsos["vigente"] = $fdata;
		$tdatabox_cat_control_riego_cabezales_pulsos[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_control_riego_cabezales_pulsos";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales_pulsos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales_pulsos.capturista";

	
	
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


	$tdatabox_cat_control_riego_cabezales_pulsos["capturista"] = $fdata;
		$tdatabox_cat_control_riego_cabezales_pulsos[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_control_riego_cabezales_pulsos";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales_pulsos","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_riego_cabezales_pulsos.time_stamp";

	
	
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


	$tdatabox_cat_control_riego_cabezales_pulsos["time_stamp"] = $fdata;
		$tdatabox_cat_control_riego_cabezales_pulsos[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_control_riego_cabezales_pulsos","cat_usuarios_licencias_id");
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


	$tdatabox_cat_control_riego_cabezales_pulsos["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_control_riego_cabezales_pulsos[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_control_riego_cabezales_pulsos"]=&$tdatabox_cat_control_riego_cabezales_pulsos;
$field_labels["box_cat_control_riego_cabezales_pulsos"] = &$fieldLabelsbox_cat_control_riego_cabezales_pulsos;
$fieldToolTips["box_cat_control_riego_cabezales_pulsos"] = &$fieldToolTipsbox_cat_control_riego_cabezales_pulsos;
$placeHolders["box_cat_control_riego_cabezales_pulsos"] = &$placeHoldersbox_cat_control_riego_cabezales_pulsos;
$page_titles["box_cat_control_riego_cabezales_pulsos"] = &$pageTitlesbox_cat_control_riego_cabezales_pulsos;


changeTextControlsToDate( "box_cat_control_riego_cabezales_pulsos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_control_riego_cabezales_pulsos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_control_riego_cabezales_pulsos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_control_riego_cabezales_pulsos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_pulsos_id,  cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_id,  cat_control_riego_cabezales_pulsos.numero_de_pulsos,  cat_control_riego_cabezales_pulsos.vigente,  cat_control_riego_cabezales_pulsos.capturista,  cat_control_riego_cabezales_pulsos.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_control_riego_cabezales_pulsos  INNER JOIN cat_usuarios ON cat_control_riego_cabezales_pulsos.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_control_riego_cabezales_pulsos.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_control_riego_cabezales_pulsos.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_riego_cabezales_pulsos",
	"m_srcTableName" => "box_cat_control_riego_cabezales_pulsos"
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
	"m_strName" => "cat_control_riego_cabezales_pulsos_id",
	"m_strTable" => "cat_control_riego_cabezales_pulsos",
	"m_srcTableName" => "box_cat_control_riego_cabezales_pulsos"
));

$proto6["m_sql"] = "cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_pulsos_id";
$proto6["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_control_riego_cabezales_id",
	"m_strTable" => "cat_control_riego_cabezales_pulsos",
	"m_srcTableName" => "box_cat_control_riego_cabezales_pulsos"
));

$proto8["m_sql"] = "cat_control_riego_cabezales_pulsos.cat_control_riego_cabezales_id";
$proto8["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_de_pulsos",
	"m_strTable" => "cat_control_riego_cabezales_pulsos",
	"m_srcTableName" => "box_cat_control_riego_cabezales_pulsos"
));

$proto10["m_sql"] = "cat_control_riego_cabezales_pulsos.numero_de_pulsos";
$proto10["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_riego_cabezales_pulsos",
	"m_srcTableName" => "box_cat_control_riego_cabezales_pulsos"
));

$proto12["m_sql"] = "cat_control_riego_cabezales_pulsos.vigente";
$proto12["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_control_riego_cabezales_pulsos",
	"m_srcTableName" => "box_cat_control_riego_cabezales_pulsos"
));

$proto14["m_sql"] = "cat_control_riego_cabezales_pulsos.capturista";
$proto14["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_control_riego_cabezales_pulsos",
	"m_srcTableName" => "box_cat_control_riego_cabezales_pulsos"
));

$proto16["m_sql"] = "cat_control_riego_cabezales_pulsos.time_stamp";
$proto16["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_control_riego_cabezales_pulsos"
));

$proto18["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto18["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "cat_control_riego_cabezales_pulsos";
$proto21["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_control_riego_cabezales_pulsos_id";
$proto21["m_columns"][] = "cat_control_riego_cabezales_id";
$proto21["m_columns"][] = "numero_de_pulsos";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "cat_control_riego_cabezales_pulsos";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
												$proto24=array();
$proto24["m_link"] = "SQLL_INNERJOIN";
			$proto25=array();
$proto25["m_strName"] = "cat_usuarios";
$proto25["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_usuarios_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "usuario";
$proto25["m_columns"][] = "cat_usuarios_licencias_id";
$proto25["m_columns"][] = "pass";
$proto25["m_columns"][] = "nombre";
$proto25["m_columns"][] = "correo";
$proto25["m_columns"][] = "cat_trabajadores_altas_id";
$proto25["m_columns"][] = "res_autorizacion";
$proto25["m_columns"][] = "session";
$proto25["m_columns"][] = "tipo";
$proto25["m_columns"][] = "session_v2";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "INNER JOIN cat_usuarios ON cat_control_riego_cabezales_pulsos.capturista = cat_usuarios.usuario";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "box_cat_control_riego_cabezales_pulsos";
$proto26=array();
$proto26["m_sql"] = "cat_usuarios.usuario = cat_control_riego_cabezales_pulsos.capturista";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_control_riego_cabezales_pulsos"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= cat_control_riego_cabezales_pulsos.capturista";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_control_riego_cabezales_pulsos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_control_riego_cabezales_pulsos = createSqlQuery_box_cat_control_riego_cabezales_pulsos();


	
		;

							

$tdatabox_cat_control_riego_cabezales_pulsos[".sqlquery"] = $queryData_box_cat_control_riego_cabezales_pulsos;



$tdatabox_cat_control_riego_cabezales_pulsos[".hasEvents"] = false;

?>