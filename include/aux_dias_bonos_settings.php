<?php
$tdataaux_dias_bonos = array();
$tdataaux_dias_bonos[".searchableFields"] = array();
$tdataaux_dias_bonos[".ShortName"] = "aux_dias_bonos";
$tdataaux_dias_bonos[".OwnerID"] = "";
$tdataaux_dias_bonos[".OriginalTable"] = "aux_dias_bonos";


$tdataaux_dias_bonos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaux_dias_bonos[".originalPagesByType"] = $tdataaux_dias_bonos[".pagesByType"];
$tdataaux_dias_bonos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaux_dias_bonos[".originalPages"] = $tdataaux_dias_bonos[".pages"];
$tdataaux_dias_bonos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaux_dias_bonos[".originalDefaultPages"] = $tdataaux_dias_bonos[".defaultPages"];

//	field labels
$fieldLabelsaux_dias_bonos = array();
$fieldToolTipsaux_dias_bonos = array();
$pageTitlesaux_dias_bonos = array();
$placeHoldersaux_dias_bonos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaux_dias_bonos["Spanish"] = array();
	$fieldToolTipsaux_dias_bonos["Spanish"] = array();
	$placeHoldersaux_dias_bonos["Spanish"] = array();
	$pageTitlesaux_dias_bonos["Spanish"] = array();
	$fieldLabelsaux_dias_bonos["Spanish"]["aux_dias_bonos_id"] = "Aux Dias Bonos Id";
	$fieldToolTipsaux_dias_bonos["Spanish"]["aux_dias_bonos_id"] = "";
	$placeHoldersaux_dias_bonos["Spanish"]["aux_dias_bonos_id"] = "";
	$fieldLabelsaux_dias_bonos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsaux_dias_bonos["Spanish"]["capturista"] = "";
	$placeHoldersaux_dias_bonos["Spanish"]["capturista"] = "";
	$fieldLabelsaux_dias_bonos["Spanish"]["dias_para_bono"] = "Dias Para Bono";
	$fieldToolTipsaux_dias_bonos["Spanish"]["dias_para_bono"] = "";
	$placeHoldersaux_dias_bonos["Spanish"]["dias_para_bono"] = "";
	$fieldLabelsaux_dias_bonos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsaux_dias_bonos["Spanish"]["time_stamp"] = "";
	$placeHoldersaux_dias_bonos["Spanish"]["time_stamp"] = "";
	$fieldLabelsaux_dias_bonos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsaux_dias_bonos["Spanish"]["vigente"] = "";
	$placeHoldersaux_dias_bonos["Spanish"]["vigente"] = "";
	$fieldLabelsaux_dias_bonos["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipsaux_dias_bonos["Spanish"]["tipo"] = "";
	$placeHoldersaux_dias_bonos["Spanish"]["tipo"] = "";
	if (count($fieldToolTipsaux_dias_bonos["Spanish"]))
		$tdataaux_dias_bonos[".isUseToolTips"] = true;
}


	$tdataaux_dias_bonos[".NCSearch"] = true;



$tdataaux_dias_bonos[".shortTableName"] = "aux_dias_bonos";
$tdataaux_dias_bonos[".nSecOptions"] = 0;

$tdataaux_dias_bonos[".mainTableOwnerID"] = "";
$tdataaux_dias_bonos[".entityType"] = 0;
$tdataaux_dias_bonos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdataaux_dias_bonos[".strOriginalTableName"] = "aux_dias_bonos";

	



$tdataaux_dias_bonos[".showAddInPopup"] = false;

$tdataaux_dias_bonos[".showEditInPopup"] = false;

$tdataaux_dias_bonos[".showViewInPopup"] = false;

$tdataaux_dias_bonos[".listAjax"] = false;
//	temporary
//$tdataaux_dias_bonos[".listAjax"] = false;

	$tdataaux_dias_bonos[".audit"] = false;

	$tdataaux_dias_bonos[".locking"] = false;


$pages = $tdataaux_dias_bonos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaux_dias_bonos[".edit"] = true;
	$tdataaux_dias_bonos[".afterEditAction"] = 1;
	$tdataaux_dias_bonos[".closePopupAfterEdit"] = 1;
	$tdataaux_dias_bonos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaux_dias_bonos[".add"] = true;
$tdataaux_dias_bonos[".afterAddAction"] = 1;
$tdataaux_dias_bonos[".closePopupAfterAdd"] = 1;
$tdataaux_dias_bonos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaux_dias_bonos[".list"] = true;
}



$tdataaux_dias_bonos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaux_dias_bonos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaux_dias_bonos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaux_dias_bonos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaux_dias_bonos[".printFriendly"] = true;
}



$tdataaux_dias_bonos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaux_dias_bonos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaux_dias_bonos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaux_dias_bonos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdataaux_dias_bonos[".ajaxCodeSnippetAdded"] = false;

$tdataaux_dias_bonos[".buttonsAdded"] = false;

$tdataaux_dias_bonos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaux_dias_bonos[".isUseTimeForSearch"] = false;


$tdataaux_dias_bonos[".badgeColor"] = "CD5C5C";


$tdataaux_dias_bonos[".allSearchFields"] = array();
$tdataaux_dias_bonos[".filterFields"] = array();
$tdataaux_dias_bonos[".requiredSearchFields"] = array();

$tdataaux_dias_bonos[".googleLikeFields"] = array();
$tdataaux_dias_bonos[".googleLikeFields"][] = "aux_dias_bonos_id";
$tdataaux_dias_bonos[".googleLikeFields"][] = "dias_para_bono";
$tdataaux_dias_bonos[".googleLikeFields"][] = "tipo";
$tdataaux_dias_bonos[".googleLikeFields"][] = "vigente";
$tdataaux_dias_bonos[".googleLikeFields"][] = "time_stamp";
$tdataaux_dias_bonos[".googleLikeFields"][] = "capturista";



$tdataaux_dias_bonos[".tableType"] = "list";

$tdataaux_dias_bonos[".printerPageOrientation"] = 0;
$tdataaux_dias_bonos[".nPrinterPageScale"] = 100;

$tdataaux_dias_bonos[".nPrinterSplitRecords"] = 40;

$tdataaux_dias_bonos[".geocodingEnabled"] = false;










$tdataaux_dias_bonos[".pageSize"] = 20;

$tdataaux_dias_bonos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaux_dias_bonos[".strOrderBy"] = $tstrOrderBy;

$tdataaux_dias_bonos[".orderindexes"] = array();


$tdataaux_dias_bonos[".sqlHead"] = "SELECT aux_dias_bonos_id,  	dias_para_bono,  	tipo,  	vigente,  	time_stamp,  	capturista";
$tdataaux_dias_bonos[".sqlFrom"] = "FROM aux_dias_bonos";
$tdataaux_dias_bonos[".sqlWhereExpr"] = "";
$tdataaux_dias_bonos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaux_dias_bonos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaux_dias_bonos[".arrGroupsPerPage"] = $arrGPP;

$tdataaux_dias_bonos[".highlightSearchResults"] = true;

$tableKeysaux_dias_bonos = array();
$tableKeysaux_dias_bonos[] = "aux_dias_bonos_id";
$tdataaux_dias_bonos[".Keys"] = $tableKeysaux_dias_bonos;


$tdataaux_dias_bonos[".hideMobileList"] = array();




//	aux_dias_bonos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aux_dias_bonos_id";
	$fdata["GoodName"] = "aux_dias_bonos_id";
	$fdata["ownerTable"] = "aux_dias_bonos";
	$fdata["Label"] = GetFieldLabel("aux_dias_bonos","aux_dias_bonos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "aux_dias_bonos_id";

		$fdata["sourceSingle"] = "aux_dias_bonos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aux_dias_bonos_id";

	
	
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


	$tdataaux_dias_bonos["aux_dias_bonos_id"] = $fdata;
		$tdataaux_dias_bonos[".searchableFields"][] = "aux_dias_bonos_id";
//	dias_para_bono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dias_para_bono";
	$fdata["GoodName"] = "dias_para_bono";
	$fdata["ownerTable"] = "aux_dias_bonos";
	$fdata["Label"] = GetFieldLabel("aux_dias_bonos","dias_para_bono");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dias_para_bono";

		$fdata["sourceSingle"] = "dias_para_bono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_para_bono";

	
	
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


	$tdataaux_dias_bonos["dias_para_bono"] = $fdata;
		$tdataaux_dias_bonos[".searchableFields"][] = "dias_para_bono";
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "aux_dias_bonos";
	$fdata["Label"] = GetFieldLabel("aux_dias_bonos","tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo";

		$fdata["sourceSingle"] = "tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataaux_dias_bonos["tipo"] = $fdata;
		$tdataaux_dias_bonos[".searchableFields"][] = "tipo";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "aux_dias_bonos";
	$fdata["Label"] = GetFieldLabel("aux_dias_bonos","vigente");
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


	$tdataaux_dias_bonos["vigente"] = $fdata;
		$tdataaux_dias_bonos[".searchableFields"][] = "vigente";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "aux_dias_bonos";
	$fdata["Label"] = GetFieldLabel("aux_dias_bonos","time_stamp");
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


	$tdataaux_dias_bonos["time_stamp"] = $fdata;
		$tdataaux_dias_bonos[".searchableFields"][] = "time_stamp";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "aux_dias_bonos";
	$fdata["Label"] = GetFieldLabel("aux_dias_bonos","capturista");
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


	$tdataaux_dias_bonos["capturista"] = $fdata;
		$tdataaux_dias_bonos[".searchableFields"][] = "capturista";


$tables_data["aux_dias_bonos"]=&$tdataaux_dias_bonos;
$field_labels["aux_dias_bonos"] = &$fieldLabelsaux_dias_bonos;
$fieldToolTips["aux_dias_bonos"] = &$fieldToolTipsaux_dias_bonos;
$placeHolders["aux_dias_bonos"] = &$placeHoldersaux_dias_bonos;
$page_titles["aux_dias_bonos"] = &$pageTitlesaux_dias_bonos;


changeTextControlsToDate( "aux_dias_bonos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aux_dias_bonos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aux_dias_bonos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aux_dias_bonos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aux_dias_bonos_id,  	dias_para_bono,  	tipo,  	vigente,  	time_stamp,  	capturista";
$proto0["m_strFrom"] = "FROM aux_dias_bonos";
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
	"m_strName" => "aux_dias_bonos_id",
	"m_strTable" => "aux_dias_bonos",
	"m_srcTableName" => "aux_dias_bonos"
));

$proto6["m_sql"] = "aux_dias_bonos_id";
$proto6["m_srcTableName"] = "aux_dias_bonos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_para_bono",
	"m_strTable" => "aux_dias_bonos",
	"m_srcTableName" => "aux_dias_bonos"
));

$proto8["m_sql"] = "dias_para_bono";
$proto8["m_srcTableName"] = "aux_dias_bonos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "aux_dias_bonos",
	"m_srcTableName" => "aux_dias_bonos"
));

$proto10["m_sql"] = "tipo";
$proto10["m_srcTableName"] = "aux_dias_bonos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "aux_dias_bonos",
	"m_srcTableName" => "aux_dias_bonos"
));

$proto12["m_sql"] = "vigente";
$proto12["m_srcTableName"] = "aux_dias_bonos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "aux_dias_bonos",
	"m_srcTableName" => "aux_dias_bonos"
));

$proto14["m_sql"] = "time_stamp";
$proto14["m_srcTableName"] = "aux_dias_bonos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "aux_dias_bonos",
	"m_srcTableName" => "aux_dias_bonos"
));

$proto16["m_sql"] = "capturista";
$proto16["m_srcTableName"] = "aux_dias_bonos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "aux_dias_bonos";
$proto19["m_srcTableName"] = "aux_dias_bonos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "aux_dias_bonos_id";
$proto19["m_columns"][] = "dias_para_bono";
$proto19["m_columns"][] = "tipo";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "time_stamp";
$proto19["m_columns"][] = "capturista";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "aux_dias_bonos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "aux_dias_bonos";
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
$proto0["m_srcTableName"]="aux_dias_bonos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aux_dias_bonos = createSqlQuery_aux_dias_bonos();


	
		;

						

$tdataaux_dias_bonos[".sqlquery"] = $queryData_aux_dias_bonos;



$tdataaux_dias_bonos[".hasEvents"] = false;

?>