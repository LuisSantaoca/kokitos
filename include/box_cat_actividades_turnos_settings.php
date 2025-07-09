<?php
$tdatabox_cat_actividades_turnos = array();
$tdatabox_cat_actividades_turnos[".searchableFields"] = array();
$tdatabox_cat_actividades_turnos[".ShortName"] = "box_cat_actividades_turnos";
$tdatabox_cat_actividades_turnos[".OwnerID"] = "";
$tdatabox_cat_actividades_turnos[".OriginalTable"] = "cat_actividades_turnos";


$tdatabox_cat_actividades_turnos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_actividades_turnos[".originalPagesByType"] = $tdatabox_cat_actividades_turnos[".pagesByType"];
$tdatabox_cat_actividades_turnos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_actividades_turnos[".originalPages"] = $tdatabox_cat_actividades_turnos[".pages"];
$tdatabox_cat_actividades_turnos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_actividades_turnos[".originalDefaultPages"] = $tdatabox_cat_actividades_turnos[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_actividades_turnos = array();
$fieldToolTipsbox_cat_actividades_turnos = array();
$pageTitlesbox_cat_actividades_turnos = array();
$placeHoldersbox_cat_actividades_turnos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_actividades_turnos["Spanish"] = array();
	$fieldToolTipsbox_cat_actividades_turnos["Spanish"] = array();
	$placeHoldersbox_cat_actividades_turnos["Spanish"] = array();
	$pageTitlesbox_cat_actividades_turnos["Spanish"] = array();
	$fieldLabelsbox_cat_actividades_turnos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_actividades_turnos["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_actividades_turnos["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_actividades_turnos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_actividades_turnos["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_actividades_turnos["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_actividades_turnos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbox_cat_actividades_turnos["Spanish"]["time_stamp"] = "";
	$placeHoldersbox_cat_actividades_turnos["Spanish"]["time_stamp"] = "";
	$fieldLabelsbox_cat_actividades_turnos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_actividades_turnos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_actividades_turnos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_cat_actividades_turnos["Spanish"]["cat_actividades_turnos_id"] = "Id";
	$fieldToolTipsbox_cat_actividades_turnos["Spanish"]["cat_actividades_turnos_id"] = "";
	$placeHoldersbox_cat_actividades_turnos["Spanish"]["cat_actividades_turnos_id"] = "";
	$fieldLabelsbox_cat_actividades_turnos["Spanish"]["turno"] = "Turno";
	$fieldToolTipsbox_cat_actividades_turnos["Spanish"]["turno"] = "";
	$placeHoldersbox_cat_actividades_turnos["Spanish"]["turno"] = "";
	if (count($fieldToolTipsbox_cat_actividades_turnos["Spanish"]))
		$tdatabox_cat_actividades_turnos[".isUseToolTips"] = true;
}





$tdatabox_cat_actividades_turnos[".shortTableName"] = "box_cat_actividades_turnos";
$tdatabox_cat_actividades_turnos[".nSecOptions"] = 0;

$tdatabox_cat_actividades_turnos[".mainTableOwnerID"] = "";
$tdatabox_cat_actividades_turnos[".entityType"] = 1;
$tdatabox_cat_actividades_turnos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_actividades_turnos[".strOriginalTableName"] = "cat_actividades_turnos";

	



$tdatabox_cat_actividades_turnos[".showAddInPopup"] = false;

$tdatabox_cat_actividades_turnos[".showEditInPopup"] = false;

$tdatabox_cat_actividades_turnos[".showViewInPopup"] = false;

$tdatabox_cat_actividades_turnos[".listAjax"] = false;
//	temporary
//$tdatabox_cat_actividades_turnos[".listAjax"] = false;

	$tdatabox_cat_actividades_turnos[".audit"] = false;

	$tdatabox_cat_actividades_turnos[".locking"] = false;


$pages = $tdatabox_cat_actividades_turnos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_actividades_turnos[".edit"] = true;
	$tdatabox_cat_actividades_turnos[".afterEditAction"] = 1;
	$tdatabox_cat_actividades_turnos[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_actividades_turnos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_actividades_turnos[".add"] = true;
$tdatabox_cat_actividades_turnos[".afterAddAction"] = 1;
$tdatabox_cat_actividades_turnos[".closePopupAfterAdd"] = 1;
$tdatabox_cat_actividades_turnos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_actividades_turnos[".list"] = true;
}



$tdatabox_cat_actividades_turnos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_actividades_turnos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_actividades_turnos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_actividades_turnos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_actividades_turnos[".printFriendly"] = true;
}



$tdatabox_cat_actividades_turnos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_actividades_turnos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_actividades_turnos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_actividades_turnos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_actividades_turnos[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_actividades_turnos[".buttonsAdded"] = false;

$tdatabox_cat_actividades_turnos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_actividades_turnos[".isUseTimeForSearch"] = false;


$tdatabox_cat_actividades_turnos[".badgeColor"] = "DAA520";


$tdatabox_cat_actividades_turnos[".allSearchFields"] = array();
$tdatabox_cat_actividades_turnos[".filterFields"] = array();
$tdatabox_cat_actividades_turnos[".requiredSearchFields"] = array();

$tdatabox_cat_actividades_turnos[".googleLikeFields"] = array();
$tdatabox_cat_actividades_turnos[".googleLikeFields"][] = "vigente";
$tdatabox_cat_actividades_turnos[".googleLikeFields"][] = "turno";
$tdatabox_cat_actividades_turnos[".googleLikeFields"][] = "capturista";
$tdatabox_cat_actividades_turnos[".googleLikeFields"][] = "time_stamp";
$tdatabox_cat_actividades_turnos[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatabox_cat_actividades_turnos[".googleLikeFields"][] = "cat_actividades_turnos_id";



$tdatabox_cat_actividades_turnos[".tableType"] = "list";

$tdatabox_cat_actividades_turnos[".printerPageOrientation"] = 0;
$tdatabox_cat_actividades_turnos[".nPrinterPageScale"] = 100;

$tdatabox_cat_actividades_turnos[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_actividades_turnos[".geocodingEnabled"] = false;





$tdatabox_cat_actividades_turnos[".isResizeColumns"] = true;





$tdatabox_cat_actividades_turnos[".pageSize"] = 20;

$tdatabox_cat_actividades_turnos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_actividades_turnos[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_actividades_turnos[".orderindexes"] = array();


$tdatabox_cat_actividades_turnos[".sqlHead"] = "SELECT cat_actividades_turnos.vigente,  concat(cat_actividades_turnos.descripcion_turno,' (E:',  cat_actividades_turnos.hora_de_entrada,') (S:',  cat_actividades_turnos.hora_de_salida,')') as turno,  cat_actividades_turnos.capturista,  cat_actividades_turnos.time_stamp,  cat_usuarios.cat_usuarios_licencias_id,  cat_actividades_turnos.cat_actividades_turnos_id";
$tdatabox_cat_actividades_turnos[".sqlFrom"] = "FROM cat_actividades_turnos  INNER JOIN cat_usuarios ON cat_actividades_turnos.capturista = cat_usuarios.usuario";
$tdatabox_cat_actividades_turnos[".sqlWhereExpr"] = "(cat_actividades_turnos.vigente =1)";
$tdatabox_cat_actividades_turnos[".sqlTail"] = "";

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
$tdatabox_cat_actividades_turnos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_actividades_turnos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_actividades_turnos[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_actividades_turnos[".highlightSearchResults"] = true;

$tableKeysbox_cat_actividades_turnos = array();
$tableKeysbox_cat_actividades_turnos[] = "cat_actividades_turnos_id";
$tdatabox_cat_actividades_turnos[".Keys"] = $tableKeysbox_cat_actividades_turnos;


$tdatabox_cat_actividades_turnos[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_turnos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.vigente";

	
	
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


	$tdatabox_cat_actividades_turnos["vigente"] = $fdata;
		$tdatabox_cat_actividades_turnos[".searchableFields"][] = "vigente";
//	turno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "turno";
	$fdata["GoodName"] = "turno";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_turnos","turno");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "turno";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(cat_actividades_turnos.descripcion_turno,' (E:',  cat_actividades_turnos.hora_de_entrada,') (S:',  cat_actividades_turnos.hora_de_salida,')')";

	
	
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


	$tdatabox_cat_actividades_turnos["turno"] = $fdata;
		$tdatabox_cat_actividades_turnos[".searchableFields"][] = "turno";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_turnos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.capturista";

	
	
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


	$tdatabox_cat_actividades_turnos["capturista"] = $fdata;
		$tdatabox_cat_actividades_turnos[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_turnos","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.time_stamp";

	
	
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


	$tdatabox_cat_actividades_turnos["time_stamp"] = $fdata;
		$tdatabox_cat_actividades_turnos[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_turnos","cat_usuarios_licencias_id");
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


	$tdatabox_cat_actividades_turnos["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_actividades_turnos[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_actividades_turnos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_actividades_turnos_id";
	$fdata["GoodName"] = "cat_actividades_turnos_id";
	$fdata["ownerTable"] = "cat_actividades_turnos";
	$fdata["Label"] = GetFieldLabel("box_cat_actividades_turnos","cat_actividades_turnos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_actividades_turnos_id";

		$fdata["sourceSingle"] = "cat_actividades_turnos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_actividades_turnos.cat_actividades_turnos_id";

	
	
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


	$tdatabox_cat_actividades_turnos["cat_actividades_turnos_id"] = $fdata;
		$tdatabox_cat_actividades_turnos[".searchableFields"][] = "cat_actividades_turnos_id";


$tables_data["box_cat_actividades_turnos"]=&$tdatabox_cat_actividades_turnos;
$field_labels["box_cat_actividades_turnos"] = &$fieldLabelsbox_cat_actividades_turnos;
$fieldToolTips["box_cat_actividades_turnos"] = &$fieldToolTipsbox_cat_actividades_turnos;
$placeHolders["box_cat_actividades_turnos"] = &$placeHoldersbox_cat_actividades_turnos;
$page_titles["box_cat_actividades_turnos"] = &$pageTitlesbox_cat_actividades_turnos;


changeTextControlsToDate( "box_cat_actividades_turnos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_actividades_turnos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_actividades_turnos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_actividades_turnos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_actividades_turnos.vigente,  concat(cat_actividades_turnos.descripcion_turno,' (E:',  cat_actividades_turnos.hora_de_entrada,') (S:',  cat_actividades_turnos.hora_de_salida,')') as turno,  cat_actividades_turnos.capturista,  cat_actividades_turnos.time_stamp,  cat_usuarios.cat_usuarios_licencias_id,  cat_actividades_turnos.cat_actividades_turnos_id";
$proto0["m_strFrom"] = "FROM cat_actividades_turnos  INNER JOIN cat_usuarios ON cat_actividades_turnos.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_actividades_turnos.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_actividades_turnos.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "box_cat_actividades_turnos"
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
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "box_cat_actividades_turnos"
));

$proto6["m_sql"] = "cat_actividades_turnos.vigente";
$proto6["m_srcTableName"] = "box_cat_actividades_turnos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_actividades_turnos.descripcion_turno"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' (E:'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_actividades_turnos.hora_de_entrada"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "') (S:'"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cat_actividades_turnos.hora_de_salida"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "')'"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "concat(cat_actividades_turnos.descripcion_turno,' (E:',  cat_actividades_turnos.hora_de_entrada,') (S:',  cat_actividades_turnos.hora_de_salida,')')";
$proto8["m_srcTableName"] = "box_cat_actividades_turnos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "turno";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "box_cat_actividades_turnos"
));

$proto16["m_sql"] = "cat_actividades_turnos.capturista";
$proto16["m_srcTableName"] = "box_cat_actividades_turnos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "box_cat_actividades_turnos"
));

$proto18["m_sql"] = "cat_actividades_turnos.time_stamp";
$proto18["m_srcTableName"] = "box_cat_actividades_turnos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_actividades_turnos"
));

$proto20["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto20["m_srcTableName"] = "box_cat_actividades_turnos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_turnos_id",
	"m_strTable" => "cat_actividades_turnos",
	"m_srcTableName" => "box_cat_actividades_turnos"
));

$proto22["m_sql"] = "cat_actividades_turnos.cat_actividades_turnos_id";
$proto22["m_srcTableName"] = "box_cat_actividades_turnos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cat_actividades_turnos";
$proto25["m_srcTableName"] = "box_cat_actividades_turnos";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "descripcion_turno";
$proto25["m_columns"][] = "hora_de_entrada";
$proto25["m_columns"][] = "hora_de_salida";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "cat_nominas_conceptos_id";
$proto25["m_columns"][] = "cat_actividades_turnos_id";
$proto25["m_columns"][] = "cat_nominas_conceptos_clasificacion_mu_id";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cat_actividades_turnos";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "box_cat_actividades_turnos";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "cat_usuarios";
$proto29["m_srcTableName"] = "box_cat_actividades_turnos";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cat_usuarios_id";
$proto29["m_columns"][] = "time_stamp";
$proto29["m_columns"][] = "vigente";
$proto29["m_columns"][] = "capturista";
$proto29["m_columns"][] = "usuario";
$proto29["m_columns"][] = "cat_usuarios_licencias_id";
$proto29["m_columns"][] = "pass";
$proto29["m_columns"][] = "nombre";
$proto29["m_columns"][] = "correo";
$proto29["m_columns"][] = "cat_trabajadores_altas_id";
$proto29["m_columns"][] = "res_autorizacion";
$proto29["m_columns"][] = "session";
$proto29["m_columns"][] = "tipo";
$proto29["m_columns"][] = "session_v2";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN cat_usuarios ON cat_actividades_turnos.capturista = cat_usuarios.usuario";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "box_cat_actividades_turnos";
$proto30=array();
$proto30["m_sql"] = "cat_usuarios.usuario = cat_actividades_turnos.capturista";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_actividades_turnos"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= cat_actividades_turnos.capturista";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_actividades_turnos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_actividades_turnos = createSqlQuery_box_cat_actividades_turnos();


	
		;

						

$tdatabox_cat_actividades_turnos[".sqlquery"] = $queryData_box_cat_actividades_turnos;



$tdatabox_cat_actividades_turnos[".hasEvents"] = false;

?>