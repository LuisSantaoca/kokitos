<?php
$tdatacat_nominas_feriados = array();
$tdatacat_nominas_feriados[".searchableFields"] = array();
$tdatacat_nominas_feriados[".ShortName"] = "cat_nominas_feriados";
$tdatacat_nominas_feriados[".OwnerID"] = "";
$tdatacat_nominas_feriados[".OriginalTable"] = "cat_nominas_feriados";


$tdatacat_nominas_feriados[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacat_nominas_feriados[".originalPagesByType"] = $tdatacat_nominas_feriados[".pagesByType"];
$tdatacat_nominas_feriados[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacat_nominas_feriados[".originalPages"] = $tdatacat_nominas_feriados[".pages"];
$tdatacat_nominas_feriados[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacat_nominas_feriados[".originalDefaultPages"] = $tdatacat_nominas_feriados[".defaultPages"];

//	field labels
$fieldLabelscat_nominas_feriados = array();
$fieldToolTipscat_nominas_feriados = array();
$pageTitlescat_nominas_feriados = array();
$placeHolderscat_nominas_feriados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_nominas_feriados["Spanish"] = array();
	$fieldToolTipscat_nominas_feriados["Spanish"] = array();
	$placeHolderscat_nominas_feriados["Spanish"] = array();
	$pageTitlescat_nominas_feriados["Spanish"] = array();
	$fieldLabelscat_nominas_feriados["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_nominas_feriados["Spanish"]["capturista"] = "";
	$placeHolderscat_nominas_feriados["Spanish"]["capturista"] = "";
	$fieldLabelscat_nominas_feriados["Spanish"]["cat_nominas_feriados_id"] = "Cat Nominas Feriados Id";
	$fieldToolTipscat_nominas_feriados["Spanish"]["cat_nominas_feriados_id"] = "";
	$placeHolderscat_nominas_feriados["Spanish"]["cat_nominas_feriados_id"] = "";
	$fieldLabelscat_nominas_feriados["Spanish"]["descripcion_feriado"] = "Descripcion Feriado";
	$fieldToolTipscat_nominas_feriados["Spanish"]["descripcion_feriado"] = "";
	$placeHolderscat_nominas_feriados["Spanish"]["descripcion_feriado"] = "";
	$fieldLabelscat_nominas_feriados["Spanish"]["fecha_feriado"] = "Fecha Feriado";
	$fieldToolTipscat_nominas_feriados["Spanish"]["fecha_feriado"] = "";
	$placeHolderscat_nominas_feriados["Spanish"]["fecha_feriado"] = "";
	$fieldLabelscat_nominas_feriados["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_nominas_feriados["Spanish"]["time_stamp"] = "";
	$placeHolderscat_nominas_feriados["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_nominas_feriados["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_nominas_feriados["Spanish"]["vigente"] = "";
	$placeHolderscat_nominas_feriados["Spanish"]["vigente"] = "";
	if (count($fieldToolTipscat_nominas_feriados["Spanish"]))
		$tdatacat_nominas_feriados[".isUseToolTips"] = true;
}


	$tdatacat_nominas_feriados[".NCSearch"] = true;



$tdatacat_nominas_feriados[".shortTableName"] = "cat_nominas_feriados";
$tdatacat_nominas_feriados[".nSecOptions"] = 0;

$tdatacat_nominas_feriados[".mainTableOwnerID"] = "";
$tdatacat_nominas_feriados[".entityType"] = 0;
$tdatacat_nominas_feriados[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_nominas_feriados[".strOriginalTableName"] = "cat_nominas_feriados";

	



$tdatacat_nominas_feriados[".showAddInPopup"] = false;

$tdatacat_nominas_feriados[".showEditInPopup"] = false;

$tdatacat_nominas_feriados[".showViewInPopup"] = false;

$tdatacat_nominas_feriados[".listAjax"] = false;
//	temporary
//$tdatacat_nominas_feriados[".listAjax"] = false;

	$tdatacat_nominas_feriados[".audit"] = false;

	$tdatacat_nominas_feriados[".locking"] = false;


$pages = $tdatacat_nominas_feriados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_nominas_feriados[".edit"] = true;
	$tdatacat_nominas_feriados[".afterEditAction"] = 1;
	$tdatacat_nominas_feriados[".closePopupAfterEdit"] = 1;
	$tdatacat_nominas_feriados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_nominas_feriados[".add"] = true;
$tdatacat_nominas_feriados[".afterAddAction"] = 1;
$tdatacat_nominas_feriados[".closePopupAfterAdd"] = 1;
$tdatacat_nominas_feriados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_nominas_feriados[".list"] = true;
}



$tdatacat_nominas_feriados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_nominas_feriados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_nominas_feriados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_nominas_feriados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_nominas_feriados[".printFriendly"] = true;
}



$tdatacat_nominas_feriados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_nominas_feriados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_nominas_feriados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_nominas_feriados[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_nominas_feriados[".ajaxCodeSnippetAdded"] = false;

$tdatacat_nominas_feriados[".buttonsAdded"] = false;

$tdatacat_nominas_feriados[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_nominas_feriados[".isUseTimeForSearch"] = false;


$tdatacat_nominas_feriados[".badgeColor"] = "DC143C";


$tdatacat_nominas_feriados[".allSearchFields"] = array();
$tdatacat_nominas_feriados[".filterFields"] = array();
$tdatacat_nominas_feriados[".requiredSearchFields"] = array();

$tdatacat_nominas_feriados[".googleLikeFields"] = array();
$tdatacat_nominas_feriados[".googleLikeFields"][] = "cat_nominas_feriados_id";
$tdatacat_nominas_feriados[".googleLikeFields"][] = "descripcion_feriado";
$tdatacat_nominas_feriados[".googleLikeFields"][] = "fecha_feriado";
$tdatacat_nominas_feriados[".googleLikeFields"][] = "vigente";
$tdatacat_nominas_feriados[".googleLikeFields"][] = "capturista";
$tdatacat_nominas_feriados[".googleLikeFields"][] = "time_stamp";



$tdatacat_nominas_feriados[".tableType"] = "list";

$tdatacat_nominas_feriados[".printerPageOrientation"] = 0;
$tdatacat_nominas_feriados[".nPrinterPageScale"] = 100;

$tdatacat_nominas_feriados[".nPrinterSplitRecords"] = 40;

$tdatacat_nominas_feriados[".geocodingEnabled"] = false;










$tdatacat_nominas_feriados[".pageSize"] = 20;

$tdatacat_nominas_feriados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_nominas_feriados[".strOrderBy"] = $tstrOrderBy;

$tdatacat_nominas_feriados[".orderindexes"] = array();


$tdatacat_nominas_feriados[".sqlHead"] = "SELECT cat_nominas_feriados_id,  	descripcion_feriado,  	fecha_feriado,  	vigente,  	capturista,  	time_stamp";
$tdatacat_nominas_feriados[".sqlFrom"] = "FROM cat_nominas_feriados";
$tdatacat_nominas_feriados[".sqlWhereExpr"] = "";
$tdatacat_nominas_feriados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_nominas_feriados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_nominas_feriados[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_nominas_feriados[".highlightSearchResults"] = true;

$tableKeyscat_nominas_feriados = array();
$tableKeyscat_nominas_feriados[] = "cat_nominas_feriados_id";
$tdatacat_nominas_feriados[".Keys"] = $tableKeyscat_nominas_feriados;


$tdatacat_nominas_feriados[".hideMobileList"] = array();




//	cat_nominas_feriados_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_nominas_feriados_id";
	$fdata["GoodName"] = "cat_nominas_feriados_id";
	$fdata["ownerTable"] = "cat_nominas_feriados";
	$fdata["Label"] = GetFieldLabel("cat_nominas_feriados","cat_nominas_feriados_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_feriados_id";

		$fdata["sourceSingle"] = "cat_nominas_feriados_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_feriados_id";

	
	
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


	$tdatacat_nominas_feriados["cat_nominas_feriados_id"] = $fdata;
		$tdatacat_nominas_feriados[".searchableFields"][] = "cat_nominas_feriados_id";
//	descripcion_feriado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_feriado";
	$fdata["GoodName"] = "descripcion_feriado";
	$fdata["ownerTable"] = "cat_nominas_feriados";
	$fdata["Label"] = GetFieldLabel("cat_nominas_feriados","descripcion_feriado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_feriado";

		$fdata["sourceSingle"] = "descripcion_feriado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_feriado";

	
	
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


	$tdatacat_nominas_feriados["descripcion_feriado"] = $fdata;
		$tdatacat_nominas_feriados[".searchableFields"][] = "descripcion_feriado";
//	fecha_feriado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_feriado";
	$fdata["GoodName"] = "fecha_feriado";
	$fdata["ownerTable"] = "cat_nominas_feriados";
	$fdata["Label"] = GetFieldLabel("cat_nominas_feriados","fecha_feriado");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_feriado";

		$fdata["sourceSingle"] = "fecha_feriado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_feriado";

	
	
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


	$tdatacat_nominas_feriados["fecha_feriado"] = $fdata;
		$tdatacat_nominas_feriados[".searchableFields"][] = "fecha_feriado";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_feriados";
	$fdata["Label"] = GetFieldLabel("cat_nominas_feriados","vigente");
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


	$tdatacat_nominas_feriados["vigente"] = $fdata;
		$tdatacat_nominas_feriados[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_feriados";
	$fdata["Label"] = GetFieldLabel("cat_nominas_feriados","capturista");
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


	$tdatacat_nominas_feriados["capturista"] = $fdata;
		$tdatacat_nominas_feriados[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_feriados";
	$fdata["Label"] = GetFieldLabel("cat_nominas_feriados","time_stamp");
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


	$tdatacat_nominas_feriados["time_stamp"] = $fdata;
		$tdatacat_nominas_feriados[".searchableFields"][] = "time_stamp";


$tables_data["cat_nominas_feriados"]=&$tdatacat_nominas_feriados;
$field_labels["cat_nominas_feriados"] = &$fieldLabelscat_nominas_feriados;
$fieldToolTips["cat_nominas_feriados"] = &$fieldToolTipscat_nominas_feriados;
$placeHolders["cat_nominas_feriados"] = &$placeHolderscat_nominas_feriados;
$page_titles["cat_nominas_feriados"] = &$pageTitlescat_nominas_feriados;


changeTextControlsToDate( "cat_nominas_feriados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_nominas_feriados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_nominas_feriados"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_nominas_feriados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_nominas_feriados_id,  	descripcion_feriado,  	fecha_feriado,  	vigente,  	capturista,  	time_stamp";
$proto0["m_strFrom"] = "FROM cat_nominas_feriados";
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
	"m_strName" => "cat_nominas_feriados_id",
	"m_strTable" => "cat_nominas_feriados",
	"m_srcTableName" => "cat_nominas_feriados"
));

$proto6["m_sql"] = "cat_nominas_feriados_id";
$proto6["m_srcTableName"] = "cat_nominas_feriados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_feriado",
	"m_strTable" => "cat_nominas_feriados",
	"m_srcTableName" => "cat_nominas_feriados"
));

$proto8["m_sql"] = "descripcion_feriado";
$proto8["m_srcTableName"] = "cat_nominas_feriados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_feriado",
	"m_strTable" => "cat_nominas_feriados",
	"m_srcTableName" => "cat_nominas_feriados"
));

$proto10["m_sql"] = "fecha_feriado";
$proto10["m_srcTableName"] = "cat_nominas_feriados";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_nominas_feriados",
	"m_srcTableName" => "cat_nominas_feriados"
));

$proto12["m_sql"] = "vigente";
$proto12["m_srcTableName"] = "cat_nominas_feriados";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_feriados",
	"m_srcTableName" => "cat_nominas_feriados"
));

$proto14["m_sql"] = "capturista";
$proto14["m_srcTableName"] = "cat_nominas_feriados";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_feriados",
	"m_srcTableName" => "cat_nominas_feriados"
));

$proto16["m_sql"] = "time_stamp";
$proto16["m_srcTableName"] = "cat_nominas_feriados";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_nominas_feriados";
$proto19["m_srcTableName"] = "cat_nominas_feriados";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "cat_nominas_feriados_id";
$proto19["m_columns"][] = "descripcion_feriado";
$proto19["m_columns"][] = "fecha_feriado";
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_nominas_feriados";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_nominas_feriados";
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
$proto0["m_srcTableName"]="cat_nominas_feriados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_nominas_feriados = createSqlQuery_cat_nominas_feriados();


	
		;

						

$tdatacat_nominas_feriados[".sqlquery"] = $queryData_cat_nominas_feriados;



$tdatacat_nominas_feriados[".hasEvents"] = false;

?>