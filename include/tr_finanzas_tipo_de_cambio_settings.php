<?php
$tdatatr_finanzas_tipo_de_cambio = array();
$tdatatr_finanzas_tipo_de_cambio[".searchableFields"] = array();
$tdatatr_finanzas_tipo_de_cambio[".ShortName"] = "tr_finanzas_tipo_de_cambio";
$tdatatr_finanzas_tipo_de_cambio[".OwnerID"] = "";
$tdatatr_finanzas_tipo_de_cambio[".OriginalTable"] = "tr_finanzas_tipo_de_cambio";


$tdatatr_finanzas_tipo_de_cambio[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_finanzas_tipo_de_cambio[".originalPagesByType"] = $tdatatr_finanzas_tipo_de_cambio[".pagesByType"];
$tdatatr_finanzas_tipo_de_cambio[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_finanzas_tipo_de_cambio[".originalPages"] = $tdatatr_finanzas_tipo_de_cambio[".pages"];
$tdatatr_finanzas_tipo_de_cambio[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_finanzas_tipo_de_cambio[".originalDefaultPages"] = $tdatatr_finanzas_tipo_de_cambio[".defaultPages"];

//	field labels
$fieldLabelstr_finanzas_tipo_de_cambio = array();
$fieldToolTipstr_finanzas_tipo_de_cambio = array();
$pageTitlestr_finanzas_tipo_de_cambio = array();
$placeHolderstr_finanzas_tipo_de_cambio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_finanzas_tipo_de_cambio["Spanish"] = array();
	$fieldToolTipstr_finanzas_tipo_de_cambio["Spanish"] = array();
	$placeHolderstr_finanzas_tipo_de_cambio["Spanish"] = array();
	$pageTitlestr_finanzas_tipo_de_cambio["Spanish"] = array();
	$fieldLabelstr_finanzas_tipo_de_cambio["Spanish"]["tr_finanzas_tipo_de_cambio_id"] = "Id";
	$fieldToolTipstr_finanzas_tipo_de_cambio["Spanish"]["tr_finanzas_tipo_de_cambio_id"] = "";
	$placeHolderstr_finanzas_tipo_de_cambio["Spanish"]["tr_finanzas_tipo_de_cambio_id"] = "";
	$fieldLabelstr_finanzas_tipo_de_cambio["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstr_finanzas_tipo_de_cambio["Spanish"]["fecha"] = "";
	$placeHolderstr_finanzas_tipo_de_cambio["Spanish"]["fecha"] = "";
	$fieldLabelstr_finanzas_tipo_de_cambio["Spanish"]["valor"] = "Valor";
	$fieldToolTipstr_finanzas_tipo_de_cambio["Spanish"]["valor"] = "";
	$placeHolderstr_finanzas_tipo_de_cambio["Spanish"]["valor"] = "";
	$fieldLabelstr_finanzas_tipo_de_cambio["Spanish"]["fecha_registro"] = "Fecha Registro";
	$fieldToolTipstr_finanzas_tipo_de_cambio["Spanish"]["fecha_registro"] = "";
	$placeHolderstr_finanzas_tipo_de_cambio["Spanish"]["fecha_registro"] = "";
	$fieldLabelstr_finanzas_tipo_de_cambio["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_finanzas_tipo_de_cambio["Spanish"]["capturista"] = "";
	$placeHolderstr_finanzas_tipo_de_cambio["Spanish"]["capturista"] = "";
	$fieldLabelstr_finanzas_tipo_de_cambio["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_finanzas_tipo_de_cambio["Spanish"]["vigente"] = "";
	$placeHolderstr_finanzas_tipo_de_cambio["Spanish"]["vigente"] = "";
	if (count($fieldToolTipstr_finanzas_tipo_de_cambio["Spanish"]))
		$tdatatr_finanzas_tipo_de_cambio[".isUseToolTips"] = true;
}





$tdatatr_finanzas_tipo_de_cambio[".shortTableName"] = "tr_finanzas_tipo_de_cambio";
$tdatatr_finanzas_tipo_de_cambio[".nSecOptions"] = 0;

$tdatatr_finanzas_tipo_de_cambio[".mainTableOwnerID"] = "";
$tdatatr_finanzas_tipo_de_cambio[".entityType"] = 0;
$tdatatr_finanzas_tipo_de_cambio[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_finanzas_tipo_de_cambio[".strOriginalTableName"] = "tr_finanzas_tipo_de_cambio";

	



$tdatatr_finanzas_tipo_de_cambio[".showAddInPopup"] = false;

$tdatatr_finanzas_tipo_de_cambio[".showEditInPopup"] = false;

$tdatatr_finanzas_tipo_de_cambio[".showViewInPopup"] = false;

$tdatatr_finanzas_tipo_de_cambio[".listAjax"] = false;
//	temporary
//$tdatatr_finanzas_tipo_de_cambio[".listAjax"] = false;

	$tdatatr_finanzas_tipo_de_cambio[".audit"] = false;

	$tdatatr_finanzas_tipo_de_cambio[".locking"] = false;


$pages = $tdatatr_finanzas_tipo_de_cambio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_finanzas_tipo_de_cambio[".edit"] = true;
	$tdatatr_finanzas_tipo_de_cambio[".afterEditAction"] = 1;
	$tdatatr_finanzas_tipo_de_cambio[".closePopupAfterEdit"] = 1;
	$tdatatr_finanzas_tipo_de_cambio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_finanzas_tipo_de_cambio[".add"] = true;
$tdatatr_finanzas_tipo_de_cambio[".afterAddAction"] = 1;
$tdatatr_finanzas_tipo_de_cambio[".closePopupAfterAdd"] = 1;
$tdatatr_finanzas_tipo_de_cambio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_finanzas_tipo_de_cambio[".list"] = true;
}



$tdatatr_finanzas_tipo_de_cambio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_finanzas_tipo_de_cambio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_finanzas_tipo_de_cambio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_finanzas_tipo_de_cambio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_finanzas_tipo_de_cambio[".printFriendly"] = true;
}



$tdatatr_finanzas_tipo_de_cambio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_finanzas_tipo_de_cambio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_finanzas_tipo_de_cambio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_finanzas_tipo_de_cambio[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_finanzas_tipo_de_cambio[".ajaxCodeSnippetAdded"] = false;

$tdatatr_finanzas_tipo_de_cambio[".buttonsAdded"] = false;

$tdatatr_finanzas_tipo_de_cambio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_finanzas_tipo_de_cambio[".isUseTimeForSearch"] = false;


$tdatatr_finanzas_tipo_de_cambio[".badgeColor"] = "B22222";


$tdatatr_finanzas_tipo_de_cambio[".allSearchFields"] = array();
$tdatatr_finanzas_tipo_de_cambio[".filterFields"] = array();
$tdatatr_finanzas_tipo_de_cambio[".requiredSearchFields"] = array();

$tdatatr_finanzas_tipo_de_cambio[".googleLikeFields"] = array();
$tdatatr_finanzas_tipo_de_cambio[".googleLikeFields"][] = "tr_finanzas_tipo_de_cambio_id";
$tdatatr_finanzas_tipo_de_cambio[".googleLikeFields"][] = "fecha";
$tdatatr_finanzas_tipo_de_cambio[".googleLikeFields"][] = "valor";
$tdatatr_finanzas_tipo_de_cambio[".googleLikeFields"][] = "fecha_registro";
$tdatatr_finanzas_tipo_de_cambio[".googleLikeFields"][] = "capturista";
$tdatatr_finanzas_tipo_de_cambio[".googleLikeFields"][] = "vigente";



$tdatatr_finanzas_tipo_de_cambio[".tableType"] = "list";

$tdatatr_finanzas_tipo_de_cambio[".printerPageOrientation"] = 0;
$tdatatr_finanzas_tipo_de_cambio[".nPrinterPageScale"] = 100;

$tdatatr_finanzas_tipo_de_cambio[".nPrinterSplitRecords"] = 40;

$tdatatr_finanzas_tipo_de_cambio[".geocodingEnabled"] = false;





$tdatatr_finanzas_tipo_de_cambio[".isResizeColumns"] = true;





$tdatatr_finanzas_tipo_de_cambio[".pageSize"] = 20;

$tdatatr_finanzas_tipo_de_cambio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_finanzas_tipo_de_cambio[".strOrderBy"] = $tstrOrderBy;

$tdatatr_finanzas_tipo_de_cambio[".orderindexes"] = array();


$tdatatr_finanzas_tipo_de_cambio[".sqlHead"] = "SELECT tr_finanzas_tipo_de_cambio_id,  	fecha,  	valor,  	fecha_registro,  	capturista,  	vigente";
$tdatatr_finanzas_tipo_de_cambio[".sqlFrom"] = "FROM tr_finanzas_tipo_de_cambio";
$tdatatr_finanzas_tipo_de_cambio[".sqlWhereExpr"] = "";
$tdatatr_finanzas_tipo_de_cambio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_finanzas_tipo_de_cambio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_finanzas_tipo_de_cambio[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_finanzas_tipo_de_cambio[".highlightSearchResults"] = true;

$tableKeystr_finanzas_tipo_de_cambio = array();
$tableKeystr_finanzas_tipo_de_cambio[] = "tr_finanzas_tipo_de_cambio_id";
$tdatatr_finanzas_tipo_de_cambio[".Keys"] = $tableKeystr_finanzas_tipo_de_cambio;


$tdatatr_finanzas_tipo_de_cambio[".hideMobileList"] = array();




//	tr_finanzas_tipo_de_cambio_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_finanzas_tipo_de_cambio_id";
	$fdata["GoodName"] = "tr_finanzas_tipo_de_cambio_id";
	$fdata["ownerTable"] = "tr_finanzas_tipo_de_cambio";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_tipo_de_cambio","tr_finanzas_tipo_de_cambio_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_finanzas_tipo_de_cambio_id";

		$fdata["sourceSingle"] = "tr_finanzas_tipo_de_cambio_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_finanzas_tipo_de_cambio_id";

	
	
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


	$tdatatr_finanzas_tipo_de_cambio["tr_finanzas_tipo_de_cambio_id"] = $fdata;
		$tdatatr_finanzas_tipo_de_cambio[".searchableFields"][] = "tr_finanzas_tipo_de_cambio_id";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "tr_finanzas_tipo_de_cambio";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_tipo_de_cambio","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
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

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatr_finanzas_tipo_de_cambio["fecha"] = $fdata;
		$tdatatr_finanzas_tipo_de_cambio[".searchableFields"][] = "fecha";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "tr_finanzas_tipo_de_cambio";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_tipo_de_cambio","valor");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "valor";

		$fdata["sourceSingle"] = "valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 4;

	
	
	
	
	
	
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


	$tdatatr_finanzas_tipo_de_cambio["valor"] = $fdata;
		$tdatatr_finanzas_tipo_de_cambio[".searchableFields"][] = "valor";
//	fecha_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_registro";
	$fdata["GoodName"] = "fecha_registro";
	$fdata["ownerTable"] = "tr_finanzas_tipo_de_cambio";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_tipo_de_cambio","fecha_registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_registro";

		$fdata["sourceSingle"] = "fecha_registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_registro";

	
	
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


	$tdatatr_finanzas_tipo_de_cambio["fecha_registro"] = $fdata;
		$tdatatr_finanzas_tipo_de_cambio[".searchableFields"][] = "fecha_registro";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_finanzas_tipo_de_cambio";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_tipo_de_cambio","capturista");
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


	$tdatatr_finanzas_tipo_de_cambio["capturista"] = $fdata;
		$tdatatr_finanzas_tipo_de_cambio[".searchableFields"][] = "capturista";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_finanzas_tipo_de_cambio";
	$fdata["Label"] = GetFieldLabel("tr_finanzas_tipo_de_cambio","vigente");
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


	$tdatatr_finanzas_tipo_de_cambio["vigente"] = $fdata;
		$tdatatr_finanzas_tipo_de_cambio[".searchableFields"][] = "vigente";


$tables_data["tr_finanzas_tipo_de_cambio"]=&$tdatatr_finanzas_tipo_de_cambio;
$field_labels["tr_finanzas_tipo_de_cambio"] = &$fieldLabelstr_finanzas_tipo_de_cambio;
$fieldToolTips["tr_finanzas_tipo_de_cambio"] = &$fieldToolTipstr_finanzas_tipo_de_cambio;
$placeHolders["tr_finanzas_tipo_de_cambio"] = &$placeHolderstr_finanzas_tipo_de_cambio;
$page_titles["tr_finanzas_tipo_de_cambio"] = &$pageTitlestr_finanzas_tipo_de_cambio;


changeTextControlsToDate( "tr_finanzas_tipo_de_cambio" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_finanzas_tipo_de_cambio"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_finanzas_tipo_de_cambio"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_finanzas_tipo_de_cambio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_finanzas_tipo_de_cambio_id,  	fecha,  	valor,  	fecha_registro,  	capturista,  	vigente";
$proto0["m_strFrom"] = "FROM tr_finanzas_tipo_de_cambio";
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
	"m_strName" => "tr_finanzas_tipo_de_cambio_id",
	"m_strTable" => "tr_finanzas_tipo_de_cambio",
	"m_srcTableName" => "tr_finanzas_tipo_de_cambio"
));

$proto6["m_sql"] = "tr_finanzas_tipo_de_cambio_id";
$proto6["m_srcTableName"] = "tr_finanzas_tipo_de_cambio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "tr_finanzas_tipo_de_cambio",
	"m_srcTableName" => "tr_finanzas_tipo_de_cambio"
));

$proto8["m_sql"] = "fecha";
$proto8["m_srcTableName"] = "tr_finanzas_tipo_de_cambio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "tr_finanzas_tipo_de_cambio",
	"m_srcTableName" => "tr_finanzas_tipo_de_cambio"
));

$proto10["m_sql"] = "valor";
$proto10["m_srcTableName"] = "tr_finanzas_tipo_de_cambio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_registro",
	"m_strTable" => "tr_finanzas_tipo_de_cambio",
	"m_srcTableName" => "tr_finanzas_tipo_de_cambio"
));

$proto12["m_sql"] = "fecha_registro";
$proto12["m_srcTableName"] = "tr_finanzas_tipo_de_cambio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_finanzas_tipo_de_cambio",
	"m_srcTableName" => "tr_finanzas_tipo_de_cambio"
));

$proto14["m_sql"] = "capturista";
$proto14["m_srcTableName"] = "tr_finanzas_tipo_de_cambio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_finanzas_tipo_de_cambio",
	"m_srcTableName" => "tr_finanzas_tipo_de_cambio"
));

$proto16["m_sql"] = "vigente";
$proto16["m_srcTableName"] = "tr_finanzas_tipo_de_cambio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tr_finanzas_tipo_de_cambio";
$proto19["m_srcTableName"] = "tr_finanzas_tipo_de_cambio";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "tr_finanzas_tipo_de_cambio_id";
$proto19["m_columns"][] = "fecha";
$proto19["m_columns"][] = "valor";
$proto19["m_columns"][] = "fecha_registro";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "vigente";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tr_finanzas_tipo_de_cambio";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tr_finanzas_tipo_de_cambio";
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
$proto0["m_srcTableName"]="tr_finanzas_tipo_de_cambio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_finanzas_tipo_de_cambio = createSqlQuery_tr_finanzas_tipo_de_cambio();


	
		;

						

$tdatatr_finanzas_tipo_de_cambio[".sqlquery"] = $queryData_tr_finanzas_tipo_de_cambio;



$tdatatr_finanzas_tipo_de_cambio[".hasEvents"] = false;

?>