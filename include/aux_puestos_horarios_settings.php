<?php
$tdataaux_puestos_horarios = array();
$tdataaux_puestos_horarios[".searchableFields"] = array();
$tdataaux_puestos_horarios[".ShortName"] = "aux_puestos_horarios";
$tdataaux_puestos_horarios[".OwnerID"] = "";
$tdataaux_puestos_horarios[".OriginalTable"] = "aux_puestos_horarios";


$tdataaux_puestos_horarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaux_puestos_horarios[".originalPagesByType"] = $tdataaux_puestos_horarios[".pagesByType"];
$tdataaux_puestos_horarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaux_puestos_horarios[".originalPages"] = $tdataaux_puestos_horarios[".pages"];
$tdataaux_puestos_horarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaux_puestos_horarios[".originalDefaultPages"] = $tdataaux_puestos_horarios[".defaultPages"];

//	field labels
$fieldLabelsaux_puestos_horarios = array();
$fieldToolTipsaux_puestos_horarios = array();
$pageTitlesaux_puestos_horarios = array();
$placeHoldersaux_puestos_horarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaux_puestos_horarios["Spanish"] = array();
	$fieldToolTipsaux_puestos_horarios["Spanish"] = array();
	$placeHoldersaux_puestos_horarios["Spanish"] = array();
	$pageTitlesaux_puestos_horarios["Spanish"] = array();
	$fieldLabelsaux_puestos_horarios["Spanish"]["aux_horarios_id"] = "Aux Horarios Id";
	$fieldToolTipsaux_puestos_horarios["Spanish"]["aux_horarios_id"] = "";
	$placeHoldersaux_puestos_horarios["Spanish"]["aux_horarios_id"] = "";
	$fieldLabelsaux_puestos_horarios["Spanish"]["aux_puestos_horarios_id"] = "Aux Puestos Horarios Id";
	$fieldToolTipsaux_puestos_horarios["Spanish"]["aux_puestos_horarios_id"] = "";
	$placeHoldersaux_puestos_horarios["Spanish"]["aux_puestos_horarios_id"] = "";
	$fieldLabelsaux_puestos_horarios["Spanish"]["cat_trabajadores_puestos_id"] = "Cat Trabajadores Puestos Id";
	$fieldToolTipsaux_puestos_horarios["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$placeHoldersaux_puestos_horarios["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$fieldLabelsaux_puestos_horarios["Spanish"]["descripcion_puesto"] = "Descripcion Puesto";
	$fieldToolTipsaux_puestos_horarios["Spanish"]["descripcion_puesto"] = "";
	$placeHoldersaux_puestos_horarios["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelsaux_puestos_horarios["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsaux_puestos_horarios["Spanish"]["time_stamp"] = "";
	$placeHoldersaux_puestos_horarios["Spanish"]["time_stamp"] = "";
	$fieldLabelsaux_puestos_horarios["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsaux_puestos_horarios["Spanish"]["vigente"] = "";
	$placeHoldersaux_puestos_horarios["Spanish"]["vigente"] = "";
	if (count($fieldToolTipsaux_puestos_horarios["Spanish"]))
		$tdataaux_puestos_horarios[".isUseToolTips"] = true;
}


	$tdataaux_puestos_horarios[".NCSearch"] = true;



$tdataaux_puestos_horarios[".shortTableName"] = "aux_puestos_horarios";
$tdataaux_puestos_horarios[".nSecOptions"] = 0;

$tdataaux_puestos_horarios[".mainTableOwnerID"] = "";
$tdataaux_puestos_horarios[".entityType"] = 0;
$tdataaux_puestos_horarios[".connId"] = "wwinte_app_at_intelagro_mx";


$tdataaux_puestos_horarios[".strOriginalTableName"] = "aux_puestos_horarios";

	



$tdataaux_puestos_horarios[".showAddInPopup"] = false;

$tdataaux_puestos_horarios[".showEditInPopup"] = false;

$tdataaux_puestos_horarios[".showViewInPopup"] = false;

$tdataaux_puestos_horarios[".listAjax"] = false;
//	temporary
//$tdataaux_puestos_horarios[".listAjax"] = false;

	$tdataaux_puestos_horarios[".audit"] = false;

	$tdataaux_puestos_horarios[".locking"] = false;


$pages = $tdataaux_puestos_horarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaux_puestos_horarios[".edit"] = true;
	$tdataaux_puestos_horarios[".afterEditAction"] = 1;
	$tdataaux_puestos_horarios[".closePopupAfterEdit"] = 1;
	$tdataaux_puestos_horarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaux_puestos_horarios[".add"] = true;
$tdataaux_puestos_horarios[".afterAddAction"] = 1;
$tdataaux_puestos_horarios[".closePopupAfterAdd"] = 1;
$tdataaux_puestos_horarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaux_puestos_horarios[".list"] = true;
}



$tdataaux_puestos_horarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaux_puestos_horarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaux_puestos_horarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaux_puestos_horarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaux_puestos_horarios[".printFriendly"] = true;
}



$tdataaux_puestos_horarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaux_puestos_horarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaux_puestos_horarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaux_puestos_horarios[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdataaux_puestos_horarios[".ajaxCodeSnippetAdded"] = false;

$tdataaux_puestos_horarios[".buttonsAdded"] = false;

$tdataaux_puestos_horarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaux_puestos_horarios[".isUseTimeForSearch"] = false;


$tdataaux_puestos_horarios[".badgeColor"] = "EDCA00";


$tdataaux_puestos_horarios[".allSearchFields"] = array();
$tdataaux_puestos_horarios[".filterFields"] = array();
$tdataaux_puestos_horarios[".requiredSearchFields"] = array();

$tdataaux_puestos_horarios[".googleLikeFields"] = array();
$tdataaux_puestos_horarios[".googleLikeFields"][] = "cat_trabajadores_puestos_id";
$tdataaux_puestos_horarios[".googleLikeFields"][] = "aux_horarios_id";
$tdataaux_puestos_horarios[".googleLikeFields"][] = "descripcion_puesto";
$tdataaux_puestos_horarios[".googleLikeFields"][] = "time_stamp";
$tdataaux_puestos_horarios[".googleLikeFields"][] = "vigente";
$tdataaux_puestos_horarios[".googleLikeFields"][] = "aux_puestos_horarios_id";



$tdataaux_puestos_horarios[".tableType"] = "list";

$tdataaux_puestos_horarios[".printerPageOrientation"] = 0;
$tdataaux_puestos_horarios[".nPrinterPageScale"] = 100;

$tdataaux_puestos_horarios[".nPrinterSplitRecords"] = 40;

$tdataaux_puestos_horarios[".geocodingEnabled"] = false;










$tdataaux_puestos_horarios[".pageSize"] = 20;

$tdataaux_puestos_horarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaux_puestos_horarios[".strOrderBy"] = $tstrOrderBy;

$tdataaux_puestos_horarios[".orderindexes"] = array();


$tdataaux_puestos_horarios[".sqlHead"] = "SELECT cat_trabajadores_puestos_id,  	aux_horarios_id,  	descripcion_puesto,  	time_stamp,  	vigente,  	aux_puestos_horarios_id";
$tdataaux_puestos_horarios[".sqlFrom"] = "FROM aux_puestos_horarios";
$tdataaux_puestos_horarios[".sqlWhereExpr"] = "";
$tdataaux_puestos_horarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaux_puestos_horarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaux_puestos_horarios[".arrGroupsPerPage"] = $arrGPP;

$tdataaux_puestos_horarios[".highlightSearchResults"] = true;

$tableKeysaux_puestos_horarios = array();
$tableKeysaux_puestos_horarios[] = "aux_puestos_horarios_id";
$tdataaux_puestos_horarios[".Keys"] = $tableKeysaux_puestos_horarios;


$tdataaux_puestos_horarios[".hideMobileList"] = array();




//	cat_trabajadores_puestos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_puestos_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_id";
	$fdata["ownerTable"] = "aux_puestos_horarios";
	$fdata["Label"] = GetFieldLabel("aux_puestos_horarios","cat_trabajadores_puestos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_puestos_id";

		$fdata["sourceSingle"] = "cat_trabajadores_puestos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_id";

	
	
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
	$edata["LookupTable"] = "cat_trabajadores_puestos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_trabajadores_puestos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cat_trabajadores_puestos_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataaux_puestos_horarios["cat_trabajadores_puestos_id"] = $fdata;
		$tdataaux_puestos_horarios[".searchableFields"][] = "cat_trabajadores_puestos_id";
//	aux_horarios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aux_horarios_id";
	$fdata["GoodName"] = "aux_horarios_id";
	$fdata["ownerTable"] = "aux_puestos_horarios";
	$fdata["Label"] = GetFieldLabel("aux_puestos_horarios","aux_horarios_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "aux_horarios_id";

		$fdata["sourceSingle"] = "aux_horarios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aux_horarios_id";

	
	
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
	$edata["LookupTable"] = "aux_horarios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "aux_horarios_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "aux_horarios_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataaux_puestos_horarios["aux_horarios_id"] = $fdata;
		$tdataaux_puestos_horarios[".searchableFields"][] = "aux_horarios_id";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "aux_puestos_horarios";
	$fdata["Label"] = GetFieldLabel("aux_puestos_horarios","descripcion_puesto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

		$fdata["sourceSingle"] = "descripcion_puesto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_puesto";

	
	
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


	$tdataaux_puestos_horarios["descripcion_puesto"] = $fdata;
		$tdataaux_puestos_horarios[".searchableFields"][] = "descripcion_puesto";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "aux_puestos_horarios";
	$fdata["Label"] = GetFieldLabel("aux_puestos_horarios","time_stamp");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdataaux_puestos_horarios["time_stamp"] = $fdata;
		$tdataaux_puestos_horarios[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "aux_puestos_horarios";
	$fdata["Label"] = GetFieldLabel("aux_puestos_horarios","vigente");
	$fdata["FieldType"] = 16;


	
	
			

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


	$tdataaux_puestos_horarios["vigente"] = $fdata;
		$tdataaux_puestos_horarios[".searchableFields"][] = "vigente";
//	aux_puestos_horarios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "aux_puestos_horarios_id";
	$fdata["GoodName"] = "aux_puestos_horarios_id";
	$fdata["ownerTable"] = "aux_puestos_horarios";
	$fdata["Label"] = GetFieldLabel("aux_puestos_horarios","aux_puestos_horarios_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "aux_puestos_horarios_id";

		$fdata["sourceSingle"] = "aux_puestos_horarios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aux_puestos_horarios_id";

	
	
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


	$tdataaux_puestos_horarios["aux_puestos_horarios_id"] = $fdata;
		$tdataaux_puestos_horarios[".searchableFields"][] = "aux_puestos_horarios_id";


$tables_data["aux_puestos_horarios"]=&$tdataaux_puestos_horarios;
$field_labels["aux_puestos_horarios"] = &$fieldLabelsaux_puestos_horarios;
$fieldToolTips["aux_puestos_horarios"] = &$fieldToolTipsaux_puestos_horarios;
$placeHolders["aux_puestos_horarios"] = &$placeHoldersaux_puestos_horarios;
$page_titles["aux_puestos_horarios"] = &$pageTitlesaux_puestos_horarios;


changeTextControlsToDate( "aux_puestos_horarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aux_puestos_horarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aux_puestos_horarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aux_puestos_horarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_puestos_id,  	aux_horarios_id,  	descripcion_puesto,  	time_stamp,  	vigente,  	aux_puestos_horarios_id";
$proto0["m_strFrom"] = "FROM aux_puestos_horarios";
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
	"m_strName" => "cat_trabajadores_puestos_id",
	"m_strTable" => "aux_puestos_horarios",
	"m_srcTableName" => "aux_puestos_horarios"
));

$proto6["m_sql"] = "cat_trabajadores_puestos_id";
$proto6["m_srcTableName"] = "aux_puestos_horarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "aux_horarios_id",
	"m_strTable" => "aux_puestos_horarios",
	"m_srcTableName" => "aux_puestos_horarios"
));

$proto8["m_sql"] = "aux_horarios_id";
$proto8["m_srcTableName"] = "aux_puestos_horarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "aux_puestos_horarios",
	"m_srcTableName" => "aux_puestos_horarios"
));

$proto10["m_sql"] = "descripcion_puesto";
$proto10["m_srcTableName"] = "aux_puestos_horarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "aux_puestos_horarios",
	"m_srcTableName" => "aux_puestos_horarios"
));

$proto12["m_sql"] = "time_stamp";
$proto12["m_srcTableName"] = "aux_puestos_horarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "aux_puestos_horarios",
	"m_srcTableName" => "aux_puestos_horarios"
));

$proto14["m_sql"] = "vigente";
$proto14["m_srcTableName"] = "aux_puestos_horarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "aux_puestos_horarios_id",
	"m_strTable" => "aux_puestos_horarios",
	"m_srcTableName" => "aux_puestos_horarios"
));

$proto16["m_sql"] = "aux_puestos_horarios_id";
$proto16["m_srcTableName"] = "aux_puestos_horarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "aux_puestos_horarios";
$proto19["m_srcTableName"] = "aux_puestos_horarios";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_trabajadores_puestos_id";
$proto19["m_columns"][] = "aux_horarios_id";
$proto19["m_columns"][] = "descripcion_puesto";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "aux_puestos_horarios_id";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "aux_puestos_horarios";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "aux_puestos_horarios";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="aux_puestos_horarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aux_puestos_horarios = createSqlQuery_aux_puestos_horarios();


	
		;

						

$tdataaux_puestos_horarios[".sqlquery"] = $queryData_aux_puestos_horarios;



$tdataaux_puestos_horarios[".hasEvents"] = false;

?>