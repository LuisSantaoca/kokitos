<?php
$tdatacat_usuarios = array();
$tdatacat_usuarios[".searchableFields"] = array();
$tdatacat_usuarios[".ShortName"] = "cat_usuarios";
$tdatacat_usuarios[".OwnerID"] = "cat_usuarios_id";
$tdatacat_usuarios[".OriginalTable"] = "cat_usuarios";


$tdatacat_usuarios[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_usuarios[".originalPagesByType"] = $tdatacat_usuarios[".pagesByType"];
$tdatacat_usuarios[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_usuarios[".originalPages"] = $tdatacat_usuarios[".pages"];
$tdatacat_usuarios[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_usuarios[".originalDefaultPages"] = $tdatacat_usuarios[".defaultPages"];

//	field labels
$fieldLabelscat_usuarios = array();
$fieldToolTipscat_usuarios = array();
$pageTitlescat_usuarios = array();
$placeHolderscat_usuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_usuarios["Spanish"] = array();
	$fieldToolTipscat_usuarios["Spanish"] = array();
	$placeHolderscat_usuarios["Spanish"] = array();
	$pageTitlescat_usuarios["Spanish"] = array();
	$fieldLabelscat_usuarios["Spanish"]["cat_usuarios_id"] = "id";
	$fieldToolTipscat_usuarios["Spanish"]["cat_usuarios_id"] = "";
	$placeHolderscat_usuarios["Spanish"]["cat_usuarios_id"] = "";
	$fieldLabelscat_usuarios["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_usuarios["Spanish"]["time_stamp"] = "";
	$placeHolderscat_usuarios["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_usuarios["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_usuarios["Spanish"]["vigente"] = "";
	$placeHolderscat_usuarios["Spanish"]["vigente"] = "";
	$fieldLabelscat_usuarios["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_usuarios["Spanish"]["capturista"] = "";
	$placeHolderscat_usuarios["Spanish"]["capturista"] = "";
	$fieldLabelscat_usuarios["Spanish"]["usuario"] = "Usuario";
	$fieldToolTipscat_usuarios["Spanish"]["usuario"] = "";
	$placeHolderscat_usuarios["Spanish"]["usuario"] = "";
	$fieldLabelscat_usuarios["Spanish"]["pass"] = "Pass";
	$fieldToolTipscat_usuarios["Spanish"]["pass"] = "";
	$placeHolderscat_usuarios["Spanish"]["pass"] = "";
	$fieldLabelscat_usuarios["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscat_usuarios["Spanish"]["nombre"] = "";
	$placeHolderscat_usuarios["Spanish"]["nombre"] = "";
	$fieldLabelscat_usuarios["Spanish"]["correo"] = "Correo";
	$fieldToolTipscat_usuarios["Spanish"]["correo"] = "";
	$placeHolderscat_usuarios["Spanish"]["correo"] = "";
	$fieldLabelscat_usuarios["Spanish"]["cat_usuarios_licencias_id"] = "Licencias";
	$fieldToolTipscat_usuarios["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_usuarios["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_usuarios["Spanish"]["cat_trabajadores_altas_id"] = "Trabajador";
	$fieldToolTipscat_usuarios["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_usuarios["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_usuarios["Spanish"]["res_autorizacion"] = "Res Autorizacion";
	$fieldToolTipscat_usuarios["Spanish"]["res_autorizacion"] = "";
	$placeHolderscat_usuarios["Spanish"]["res_autorizacion"] = "";
	$fieldLabelscat_usuarios["Spanish"]["session"] = "Session";
	$fieldToolTipscat_usuarios["Spanish"]["session"] = "";
	$placeHolderscat_usuarios["Spanish"]["session"] = "";
	if (count($fieldToolTipscat_usuarios["Spanish"]))
		$tdatacat_usuarios[".isUseToolTips"] = true;
}





$tdatacat_usuarios[".shortTableName"] = "cat_usuarios";
$tdatacat_usuarios[".nSecOptions"] = 0;

$tdatacat_usuarios[".mainTableOwnerID"] = "cat_usuarios_id";
$tdatacat_usuarios[".entityType"] = 0;
$tdatacat_usuarios[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_usuarios[".strOriginalTableName"] = "cat_usuarios";

	



$tdatacat_usuarios[".showAddInPopup"] = false;

$tdatacat_usuarios[".showEditInPopup"] = false;

$tdatacat_usuarios[".showViewInPopup"] = false;

$tdatacat_usuarios[".listAjax"] = false;
//	temporary
//$tdatacat_usuarios[".listAjax"] = false;

	$tdatacat_usuarios[".audit"] = true;

	$tdatacat_usuarios[".locking"] = true;


$pages = $tdatacat_usuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_usuarios[".edit"] = true;
	$tdatacat_usuarios[".afterEditAction"] = 1;
	$tdatacat_usuarios[".closePopupAfterEdit"] = 1;
	$tdatacat_usuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_usuarios[".add"] = true;
$tdatacat_usuarios[".afterAddAction"] = 1;
$tdatacat_usuarios[".closePopupAfterAdd"] = 1;
$tdatacat_usuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_usuarios[".list"] = true;
}



$tdatacat_usuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_usuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_usuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_usuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_usuarios[".printFriendly"] = true;
}



$tdatacat_usuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_usuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_usuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_usuarios[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_usuarios[".ajaxCodeSnippetAdded"] = false;

$tdatacat_usuarios[".buttonsAdded"] = false;

$tdatacat_usuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_usuarios[".isUseTimeForSearch"] = false;


$tdatacat_usuarios[".badgeColor"] = "1E90FF";


$tdatacat_usuarios[".allSearchFields"] = array();
$tdatacat_usuarios[".filterFields"] = array();
$tdatacat_usuarios[".requiredSearchFields"] = array();

$tdatacat_usuarios[".googleLikeFields"] = array();
$tdatacat_usuarios[".googleLikeFields"][] = "cat_usuarios_id";
$tdatacat_usuarios[".googleLikeFields"][] = "time_stamp";
$tdatacat_usuarios[".googleLikeFields"][] = "vigente";
$tdatacat_usuarios[".googleLikeFields"][] = "capturista";
$tdatacat_usuarios[".googleLikeFields"][] = "usuario";
$tdatacat_usuarios[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatacat_usuarios[".googleLikeFields"][] = "pass";
$tdatacat_usuarios[".googleLikeFields"][] = "nombre";
$tdatacat_usuarios[".googleLikeFields"][] = "correo";
$tdatacat_usuarios[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_usuarios[".googleLikeFields"][] = "res_autorizacion";
$tdatacat_usuarios[".googleLikeFields"][] = "session";



$tdatacat_usuarios[".tableType"] = "list";

$tdatacat_usuarios[".printerPageOrientation"] = 0;
$tdatacat_usuarios[".nPrinterPageScale"] = 100;

$tdatacat_usuarios[".nPrinterSplitRecords"] = 40;

$tdatacat_usuarios[".geocodingEnabled"] = false;





$tdatacat_usuarios[".isResizeColumns"] = true;





$tdatacat_usuarios[".pageSize"] = 20;

$tdatacat_usuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY cat_usuarios_licencias_id";
$tdatacat_usuarios[".strOrderBy"] = $tstrOrderBy;

$tdatacat_usuarios[".orderindexes"] = array();
			$tdatacat_usuarios[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "cat_usuarios_licencias_id");


$tdatacat_usuarios[".sqlHead"] = "SELECT cat_usuarios_id,  time_stamp,  vigente,  capturista,  usuario,  cat_usuarios_licencias_id,  pass,  nombre,  correo,  cat_trabajadores_altas_id,  res_autorizacion,  `session`";
$tdatacat_usuarios[".sqlFrom"] = "FROM cat_usuarios";
$tdatacat_usuarios[".sqlWhereExpr"] = "";
$tdatacat_usuarios[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacat_usuarios[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_usuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_usuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_usuarios[".highlightSearchResults"] = true;

$tableKeyscat_usuarios = array();
$tableKeyscat_usuarios[] = "cat_usuarios_id";
$tdatacat_usuarios[".Keys"] = $tableKeyscat_usuarios;


$tdatacat_usuarios[".hideMobileList"] = array();




//	cat_usuarios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_usuarios_id";
	$fdata["GoodName"] = "cat_usuarios_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","cat_usuarios_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_usuarios_id";

		$fdata["sourceSingle"] = "cat_usuarios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_id";

	
	
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


	$tdatacat_usuarios["cat_usuarios_id"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "cat_usuarios_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "time_stamp";

	
	
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


	$tdatacat_usuarios["time_stamp"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigente";

	
	
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


	$tdatacat_usuarios["vigente"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capturista";

	
	
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


	$tdatacat_usuarios["capturista"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "capturista";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usuario";

		$fdata["sourceSingle"] = "usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario";

	
	
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


	$tdatacat_usuarios["usuario"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "usuario";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

		$fdata["sourceSingle"] = "cat_usuarios_licencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_licencias_id";

	
	
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
	$edata["LookupTable"] = "cat_usuarios_licencias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_usuarios_licencias_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_licencia";

	

	
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


	$tdatacat_usuarios["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "cat_usuarios_licencias_id";
//	pass
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pass";
	$fdata["GoodName"] = "pass";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","pass");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pass";

		$fdata["sourceSingle"] = "pass";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pass";

	
	
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


	$tdatacat_usuarios["pass"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "pass";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdatacat_usuarios["nombre"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "nombre";
//	correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "correo";
	$fdata["GoodName"] = "correo";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","correo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "correo";

		$fdata["sourceSingle"] = "correo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correo";

	
	
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


	$tdatacat_usuarios["correo"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "correo";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas_id";

	
	
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
	$edata["LookupTable"] = "box_cat_trabajadores";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_trabajadores_altas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatacat_usuarios["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "cat_trabajadores_altas_id";
//	res_autorizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "res_autorizacion";
	$fdata["GoodName"] = "res_autorizacion";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","res_autorizacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "res_autorizacion";

		$fdata["sourceSingle"] = "res_autorizacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "res_autorizacion";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatacat_usuarios["res_autorizacion"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "res_autorizacion";
//	session
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "session";
	$fdata["GoodName"] = "session";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_usuarios","session");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "session";

		$fdata["sourceSingle"] = "session";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`session`";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "0";

	
	
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


	$tdatacat_usuarios["session"] = $fdata;
		$tdatacat_usuarios[".searchableFields"][] = "session";


$tables_data["cat_usuarios"]=&$tdatacat_usuarios;
$field_labels["cat_usuarios"] = &$fieldLabelscat_usuarios;
$fieldToolTips["cat_usuarios"] = &$fieldToolTipscat_usuarios;
$placeHolders["cat_usuarios"] = &$placeHolderscat_usuarios;
$page_titles["cat_usuarios"] = &$pageTitlescat_usuarios;


changeTextControlsToDate( "cat_usuarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_usuarios"] = array();
//	cat_usuarios_02_modulos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cat_usuarios_02_modulos";
		$detailsParam["dOriginalTable"] = "cat_usuarios_02_modulos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cat_usuarios_02_modulos";
	$detailsParam["dCaptionTable"] = GetTableCaption("cat_usuarios_02_modulos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cat_usuarios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cat_usuarios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cat_usuarios"][$dIndex]["masterKeys"][]="cat_usuarios_id";

				$detailsTablesData["cat_usuarios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cat_usuarios"][$dIndex]["detailKeys"][]="cat_usuarios_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_usuarios_id,  time_stamp,  vigente,  capturista,  usuario,  cat_usuarios_licencias_id,  pass,  nombre,  correo,  cat_trabajadores_altas_id,  res_autorizacion,  `session`";
$proto0["m_strFrom"] = "FROM cat_usuarios";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY cat_usuarios_licencias_id";
	
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
	"m_strName" => "cat_usuarios_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto6["m_sql"] = "cat_usuarios_id";
$proto6["m_srcTableName"] = "cat_usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "cat_usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "cat_usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto14["m_sql"] = "usuario";
$proto14["m_srcTableName"] = "cat_usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto16["m_sql"] = "cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "cat_usuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "pass",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto18["m_sql"] = "pass";
$proto18["m_srcTableName"] = "cat_usuarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto20["m_sql"] = "nombre";
$proto20["m_srcTableName"] = "cat_usuarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "correo",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto22["m_sql"] = "correo";
$proto22["m_srcTableName"] = "cat_usuarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto24["m_sql"] = "cat_trabajadores_altas_id";
$proto24["m_srcTableName"] = "cat_usuarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "res_autorizacion",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto26["m_sql"] = "res_autorizacion";
$proto26["m_srcTableName"] = "cat_usuarios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "session",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto28["m_sql"] = "`session`";
$proto28["m_srcTableName"] = "cat_usuarios";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "cat_usuarios";
$proto31["m_srcTableName"] = "cat_usuarios";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "cat_usuarios_id";
$proto31["m_columns"][] = "time_stamp";
$proto31["m_columns"][] = "vigente";
$proto31["m_columns"][] = "capturista";
$proto31["m_columns"][] = "usuario";
$proto31["m_columns"][] = "cat_usuarios_licencias_id";
$proto31["m_columns"][] = "pass";
$proto31["m_columns"][] = "nombre";
$proto31["m_columns"][] = "correo";
$proto31["m_columns"][] = "cat_trabajadores_altas_id";
$proto31["m_columns"][] = "res_autorizacion";
$proto31["m_columns"][] = "session";
$proto31["m_columns"][] = "tipo";
$proto31["m_columns"][] = "session_v2";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "cat_usuarios";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "cat_usuarios";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_usuarios"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="cat_usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_usuarios = createSqlQuery_cat_usuarios();


	
		;

												

$tdatacat_usuarios[".sqlquery"] = $queryData_cat_usuarios;



include_once(getabspath("include/cat_usuarios_events.php"));
$tdatacat_usuarios[".hasEvents"] = true;

?>