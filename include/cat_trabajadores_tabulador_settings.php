<?php
$tdatacat_trabajadores_tabulador = array();
$tdatacat_trabajadores_tabulador[".searchableFields"] = array();
$tdatacat_trabajadores_tabulador[".ShortName"] = "cat_trabajadores_tabulador";
$tdatacat_trabajadores_tabulador[".OwnerID"] = "";
$tdatacat_trabajadores_tabulador[".OriginalTable"] = "cat_trabajadores_tabulador";


$tdatacat_trabajadores_tabulador[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_tabulador[".originalPagesByType"] = $tdatacat_trabajadores_tabulador[".pagesByType"];
$tdatacat_trabajadores_tabulador[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_tabulador[".originalPages"] = $tdatacat_trabajadores_tabulador[".pages"];
$tdatacat_trabajadores_tabulador[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_trabajadores_tabulador[".originalDefaultPages"] = $tdatacat_trabajadores_tabulador[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_tabulador = array();
$fieldToolTipscat_trabajadores_tabulador = array();
$pageTitlescat_trabajadores_tabulador = array();
$placeHolderscat_trabajadores_tabulador = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_tabulador["Spanish"] = array();
	$fieldToolTipscat_trabajadores_tabulador["Spanish"] = array();
	$placeHolderscat_trabajadores_tabulador["Spanish"] = array();
	$pageTitlescat_trabajadores_tabulador["Spanish"] = array();
	$fieldLabelscat_trabajadores_tabulador["Spanish"]["cat_trabajadores_tabulador_id"] = "Id";
	$fieldToolTipscat_trabajadores_tabulador["Spanish"]["cat_trabajadores_tabulador_id"] = "";
	$placeHolderscat_trabajadores_tabulador["Spanish"]["cat_trabajadores_tabulador_id"] = "";
	$fieldLabelscat_trabajadores_tabulador["Spanish"]["cat_trabajadores_altas_id"] = "Trabajador";
	$fieldToolTipscat_trabajadores_tabulador["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_tabulador["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_tabulador["Spanish"]["cat_nominas_conceptos_id"] = "Concepto";
	$fieldToolTipscat_trabajadores_tabulador["Spanish"]["cat_nominas_conceptos_id"] = "";
	$placeHolderscat_trabajadores_tabulador["Spanish"]["cat_nominas_conceptos_id"] = "";
	$fieldLabelscat_trabajadores_tabulador["Spanish"]["costo_bruto_tabulador"] = "Costo Bruto";
	$fieldToolTipscat_trabajadores_tabulador["Spanish"]["costo_bruto_tabulador"] = "";
	$placeHolderscat_trabajadores_tabulador["Spanish"]["costo_bruto_tabulador"] = "";
	$fieldLabelscat_trabajadores_tabulador["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_tabulador["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_tabulador["Spanish"]["vigente"] = "";
	$fieldLabelscat_trabajadores_tabulador["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_trabajadores_tabulador["Spanish"]["capturista"] = "";
	$placeHolderscat_trabajadores_tabulador["Spanish"]["capturista"] = "";
	$fieldLabelscat_trabajadores_tabulador["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_trabajadores_tabulador["Spanish"]["time_stamp"] = "";
	$placeHolderscat_trabajadores_tabulador["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_trabajadores_tabulador["Spanish"]["llave_tcec"] = "Llave Tcec";
	$fieldToolTipscat_trabajadores_tabulador["Spanish"]["llave_tcec"] = "";
	$placeHolderscat_trabajadores_tabulador["Spanish"]["llave_tcec"] = "";
	$fieldLabelscat_trabajadores_tabulador["Spanish"]["cat_holding_02_empresas_id"] = "Empresa";
	$fieldToolTipscat_trabajadores_tabulador["Spanish"]["cat_holding_02_empresas_id"] = "";
	$placeHolderscat_trabajadores_tabulador["Spanish"]["cat_holding_02_empresas_id"] = "";
	$pageTitlescat_trabajadores_tabulador["Spanish"]["list"] = " Tabulador";
	if (count($fieldToolTipscat_trabajadores_tabulador["Spanish"]))
		$tdatacat_trabajadores_tabulador[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_tabulador[".shortTableName"] = "cat_trabajadores_tabulador";
$tdatacat_trabajadores_tabulador[".nSecOptions"] = 0;

$tdatacat_trabajadores_tabulador[".mainTableOwnerID"] = "";
$tdatacat_trabajadores_tabulador[".entityType"] = 0;
$tdatacat_trabajadores_tabulador[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_tabulador[".strOriginalTableName"] = "cat_trabajadores_tabulador";

	



$tdatacat_trabajadores_tabulador[".showAddInPopup"] = false;

$tdatacat_trabajadores_tabulador[".showEditInPopup"] = false;

$tdatacat_trabajadores_tabulador[".showViewInPopup"] = false;

$tdatacat_trabajadores_tabulador[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_tabulador[".listAjax"] = false;

	$tdatacat_trabajadores_tabulador[".audit"] = false;

	$tdatacat_trabajadores_tabulador[".locking"] = false;


$pages = $tdatacat_trabajadores_tabulador[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_tabulador[".edit"] = true;
	$tdatacat_trabajadores_tabulador[".afterEditAction"] = 1;
	$tdatacat_trabajadores_tabulador[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_tabulador[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_tabulador[".add"] = true;
$tdatacat_trabajadores_tabulador[".afterAddAction"] = 1;
$tdatacat_trabajadores_tabulador[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_tabulador[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_tabulador[".list"] = true;
}



$tdatacat_trabajadores_tabulador[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_tabulador[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_tabulador[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_tabulador[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_tabulador[".printFriendly"] = true;
}



$tdatacat_trabajadores_tabulador[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_tabulador[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_tabulador[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_tabulador[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																								

$tdatacat_trabajadores_tabulador[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_tabulador[".buttonsAdded"] = false;

$tdatacat_trabajadores_tabulador[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_tabulador[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_tabulador[".badgeColor"] = "6da5c8";


$tdatacat_trabajadores_tabulador[".allSearchFields"] = array();
$tdatacat_trabajadores_tabulador[".filterFields"] = array();
$tdatacat_trabajadores_tabulador[".requiredSearchFields"] = array();

$tdatacat_trabajadores_tabulador[".googleLikeFields"] = array();
$tdatacat_trabajadores_tabulador[".googleLikeFields"][] = "cat_trabajadores_tabulador_id";
$tdatacat_trabajadores_tabulador[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_tabulador[".googleLikeFields"][] = "cat_nominas_conceptos_id";
$tdatacat_trabajadores_tabulador[".googleLikeFields"][] = "costo_bruto_tabulador";
$tdatacat_trabajadores_tabulador[".googleLikeFields"][] = "vigente";
$tdatacat_trabajadores_tabulador[".googleLikeFields"][] = "capturista";
$tdatacat_trabajadores_tabulador[".googleLikeFields"][] = "time_stamp";
$tdatacat_trabajadores_tabulador[".googleLikeFields"][] = "llave_tcec";
$tdatacat_trabajadores_tabulador[".googleLikeFields"][] = "cat_holding_02_empresas_id";



$tdatacat_trabajadores_tabulador[".tableType"] = "list";

$tdatacat_trabajadores_tabulador[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_tabulador[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_tabulador[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_tabulador[".geocodingEnabled"] = false;





$tdatacat_trabajadores_tabulador[".isResizeColumns"] = true;





$tdatacat_trabajadores_tabulador[".pageSize"] = 20;

$tdatacat_trabajadores_tabulador[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_tabulador[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_tabulador[".orderindexes"] = array();


$tdatacat_trabajadores_tabulador[".sqlHead"] = "SELECT cat_trabajadores_tabulador_id,  cat_trabajadores_altas_id,  cat_nominas_conceptos_id,  costo_bruto_tabulador,  vigente,  capturista,  time_stamp,  llave_tcec,  cat_holding_02_empresas_id";
$tdatacat_trabajadores_tabulador[".sqlFrom"] = "FROM cat_trabajadores_tabulador";
$tdatacat_trabajadores_tabulador[".sqlWhereExpr"] = "";
$tdatacat_trabajadores_tabulador[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_tabulador[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_tabulador[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_tabulador[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_tabulador = array();
$tableKeyscat_trabajadores_tabulador[] = "cat_trabajadores_tabulador_id";
$tdatacat_trabajadores_tabulador[".Keys"] = $tableKeyscat_trabajadores_tabulador;


$tdatacat_trabajadores_tabulador[".hideMobileList"] = array();




//	cat_trabajadores_tabulador_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_tabulador_id";
	$fdata["GoodName"] = "cat_trabajadores_tabulador_id";
	$fdata["ownerTable"] = "cat_trabajadores_tabulador";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tabulador","cat_trabajadores_tabulador_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_tabulador_id";

		$fdata["sourceSingle"] = "cat_trabajadores_tabulador_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_tabulador_id";

	
	
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


	$tdatacat_trabajadores_tabulador["cat_trabajadores_tabulador_id"] = $fdata;
		$tdatacat_trabajadores_tabulador[".searchableFields"][] = "cat_trabajadores_tabulador_id";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_tabulador";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tabulador","cat_trabajadores_altas_id");
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


	$tdatacat_trabajadores_tabulador["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_tabulador[".searchableFields"][] = "cat_trabajadores_altas_id";
//	cat_nominas_conceptos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_nominas_conceptos_id";
	$fdata["GoodName"] = "cat_nominas_conceptos_id";
	$fdata["ownerTable"] = "cat_trabajadores_tabulador";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tabulador","cat_nominas_conceptos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_conceptos_id";

		$fdata["sourceSingle"] = "cat_nominas_conceptos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos_id";

	
	
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
	$edata["LookupTable"] = "box_cat_nominas_conceptos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_nominas_conceptos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_nominas_conceptos";

	

	
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


	$tdatacat_trabajadores_tabulador["cat_nominas_conceptos_id"] = $fdata;
		$tdatacat_trabajadores_tabulador[".searchableFields"][] = "cat_nominas_conceptos_id";
//	costo_bruto_tabulador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "costo_bruto_tabulador";
	$fdata["GoodName"] = "costo_bruto_tabulador";
	$fdata["ownerTable"] = "cat_trabajadores_tabulador";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tabulador","costo_bruto_tabulador");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "costo_bruto_tabulador";

		$fdata["sourceSingle"] = "costo_bruto_tabulador";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costo_bruto_tabulador";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacat_trabajadores_tabulador["costo_bruto_tabulador"] = $fdata;
		$tdatacat_trabajadores_tabulador[".searchableFields"][] = "costo_bruto_tabulador";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_tabulador";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tabulador","vigente");
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


	$tdatacat_trabajadores_tabulador["vigente"] = $fdata;
		$tdatacat_trabajadores_tabulador[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_trabajadores_tabulador";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tabulador","capturista");
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


	$tdatacat_trabajadores_tabulador["capturista"] = $fdata;
		$tdatacat_trabajadores_tabulador[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_trabajadores_tabulador";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tabulador","time_stamp");
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


	$tdatacat_trabajadores_tabulador["time_stamp"] = $fdata;
		$tdatacat_trabajadores_tabulador[".searchableFields"][] = "time_stamp";
//	llave_tcec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "llave_tcec";
	$fdata["GoodName"] = "llave_tcec";
	$fdata["ownerTable"] = "cat_trabajadores_tabulador";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tabulador","llave_tcec");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_tcec";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_tcec";

	
	
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


	$tdatacat_trabajadores_tabulador["llave_tcec"] = $fdata;
		$tdatacat_trabajadores_tabulador[".searchableFields"][] = "llave_tcec";
//	cat_holding_02_empresas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cat_holding_02_empresas_id";
	$fdata["GoodName"] = "cat_holding_02_empresas_id";
	$fdata["ownerTable"] = "cat_trabajadores_tabulador";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_tabulador","cat_holding_02_empresas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_02_empresas_id";

		$fdata["sourceSingle"] = "cat_holding_02_empresas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_02_empresas_id";

	
	
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
	$edata["LookupTable"] = "cat_holding_02_empresas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_holding_02_empresas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_empresas";

	

	
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


	$tdatacat_trabajadores_tabulador["cat_holding_02_empresas_id"] = $fdata;
		$tdatacat_trabajadores_tabulador[".searchableFields"][] = "cat_holding_02_empresas_id";


$tables_data["cat_trabajadores_tabulador"]=&$tdatacat_trabajadores_tabulador;
$field_labels["cat_trabajadores_tabulador"] = &$fieldLabelscat_trabajadores_tabulador;
$fieldToolTips["cat_trabajadores_tabulador"] = &$fieldToolTipscat_trabajadores_tabulador;
$placeHolders["cat_trabajadores_tabulador"] = &$placeHolderscat_trabajadores_tabulador;
$page_titles["cat_trabajadores_tabulador"] = &$pageTitlescat_trabajadores_tabulador;


changeTextControlsToDate( "cat_trabajadores_tabulador" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_tabulador"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_tabulador"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cat_trabajadores_altas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cat_trabajadores_altas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cat_trabajadores_altas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cat_trabajadores_tabulador"][0] = $masterParams;
				$masterTablesData["cat_trabajadores_tabulador"][0]["masterKeys"] = array();
	$masterTablesData["cat_trabajadores_tabulador"][0]["masterKeys"][]="cat_trabajadores_altas_id";
				$masterTablesData["cat_trabajadores_tabulador"][0]["detailKeys"] = array();
	$masterTablesData["cat_trabajadores_tabulador"][0]["detailKeys"][]="cat_trabajadores_altas_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_tabulador()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_tabulador_id,  cat_trabajadores_altas_id,  cat_nominas_conceptos_id,  costo_bruto_tabulador,  vigente,  capturista,  time_stamp,  llave_tcec,  cat_holding_02_empresas_id";
$proto0["m_strFrom"] = "FROM cat_trabajadores_tabulador";
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
	"m_strName" => "cat_trabajadores_tabulador_id",
	"m_strTable" => "cat_trabajadores_tabulador",
	"m_srcTableName" => "cat_trabajadores_tabulador"
));

$proto6["m_sql"] = "cat_trabajadores_tabulador_id";
$proto6["m_srcTableName"] = "cat_trabajadores_tabulador";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_tabulador",
	"m_srcTableName" => "cat_trabajadores_tabulador"
));

$proto8["m_sql"] = "cat_trabajadores_altas_id";
$proto8["m_srcTableName"] = "cat_trabajadores_tabulador";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_conceptos_id",
	"m_strTable" => "cat_trabajadores_tabulador",
	"m_srcTableName" => "cat_trabajadores_tabulador"
));

$proto10["m_sql"] = "cat_nominas_conceptos_id";
$proto10["m_srcTableName"] = "cat_trabajadores_tabulador";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "costo_bruto_tabulador",
	"m_strTable" => "cat_trabajadores_tabulador",
	"m_srcTableName" => "cat_trabajadores_tabulador"
));

$proto12["m_sql"] = "costo_bruto_tabulador";
$proto12["m_srcTableName"] = "cat_trabajadores_tabulador";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_tabulador",
	"m_srcTableName" => "cat_trabajadores_tabulador"
));

$proto14["m_sql"] = "vigente";
$proto14["m_srcTableName"] = "cat_trabajadores_tabulador";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_trabajadores_tabulador",
	"m_srcTableName" => "cat_trabajadores_tabulador"
));

$proto16["m_sql"] = "capturista";
$proto16["m_srcTableName"] = "cat_trabajadores_tabulador";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_tabulador",
	"m_srcTableName" => "cat_trabajadores_tabulador"
));

$proto18["m_sql"] = "time_stamp";
$proto18["m_srcTableName"] = "cat_trabajadores_tabulador";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "llave_tcec",
	"m_strTable" => "cat_trabajadores_tabulador",
	"m_srcTableName" => "cat_trabajadores_tabulador"
));

$proto20["m_sql"] = "llave_tcec";
$proto20["m_srcTableName"] = "cat_trabajadores_tabulador";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_02_empresas_id",
	"m_strTable" => "cat_trabajadores_tabulador",
	"m_srcTableName" => "cat_trabajadores_tabulador"
));

$proto22["m_sql"] = "cat_holding_02_empresas_id";
$proto22["m_srcTableName"] = "cat_trabajadores_tabulador";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cat_trabajadores_tabulador";
$proto25["m_srcTableName"] = "cat_trabajadores_tabulador";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_trabajadores_tabulador_id";
$proto25["m_columns"][] = "cat_trabajadores_altas_id";
$proto25["m_columns"][] = "cat_nominas_conceptos_id";
$proto25["m_columns"][] = "cat_holding_02_empresas_id";
$proto25["m_columns"][] = "costo_bruto_tabulador";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "llave_tcec";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cat_trabajadores_tabulador";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cat_trabajadores_tabulador";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_tabulador";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_tabulador = createSqlQuery_cat_trabajadores_tabulador();


	
		;

									

$tdatacat_trabajadores_tabulador[".sqlquery"] = $queryData_cat_trabajadores_tabulador;



$tdatacat_trabajadores_tabulador[".hasEvents"] = false;

?>