<?php
$tdatacat_trabajadores_puestos = array();
$tdatacat_trabajadores_puestos[".searchableFields"] = array();
$tdatacat_trabajadores_puestos[".ShortName"] = "cat_trabajadores_puestos";
$tdatacat_trabajadores_puestos[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_puestos[".OriginalTable"] = "cat_trabajadores_puestos";


$tdatacat_trabajadores_puestos[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_puestos[".originalPagesByType"] = $tdatacat_trabajadores_puestos[".pagesByType"];
$tdatacat_trabajadores_puestos[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_puestos[".originalPages"] = $tdatacat_trabajadores_puestos[".pages"];
$tdatacat_trabajadores_puestos[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_trabajadores_puestos[".originalDefaultPages"] = $tdatacat_trabajadores_puestos[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_puestos = array();
$fieldToolTipscat_trabajadores_puestos = array();
$pageTitlescat_trabajadores_puestos = array();
$placeHolderscat_trabajadores_puestos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_puestos["Spanish"] = array();
	$fieldToolTipscat_trabajadores_puestos["Spanish"] = array();
	$placeHolderscat_trabajadores_puestos["Spanish"] = array();
	$pageTitlescat_trabajadores_puestos["Spanish"] = array();
	$fieldLabelscat_trabajadores_puestos["Spanish"]["cat_trabajadores_puestos_id"] = " Id";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$fieldLabelscat_trabajadores_puestos["Spanish"]["descripcion_puesto"] = "Puesto";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["descripcion_puesto"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelscat_trabajadores_puestos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["time_stamp"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_trabajadores_puestos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["capturista"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["capturista"] = "";
	$fieldLabelscat_trabajadores_puestos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["vigente"] = "";
	$fieldLabelscat_trabajadores_puestos["Spanish"]["fecha_de_registro"] = "Fecha";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["fecha_de_registro"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["fecha_de_registro"] = "";
	$fieldLabelscat_trabajadores_puestos["Spanish"]["sueldo_diario"] = "Sueldo Diario";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["sueldo_diario"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["sueldo_diario"] = "";
	$fieldLabelscat_trabajadores_puestos["Spanish"]["horas_laborales"] = "Horas Laborales";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["horas_laborales"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["horas_laborales"] = "";
	$fieldLabelscat_trabajadores_puestos["Spanish"]["hora_extra"] = "Hora Extra";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["hora_extra"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["hora_extra"] = "";
	$fieldLabelscat_trabajadores_puestos["Spanish"]["bono"] = "Bono";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["bono"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["bono"] = "";
	$fieldLabelscat_trabajadores_puestos["Spanish"]["prima"] = "Prima";
	$fieldToolTipscat_trabajadores_puestos["Spanish"]["prima"] = "";
	$placeHolderscat_trabajadores_puestos["Spanish"]["prima"] = "";
	if (count($fieldToolTipscat_trabajadores_puestos["Spanish"]))
		$tdatacat_trabajadores_puestos[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_puestos[".shortTableName"] = "cat_trabajadores_puestos";
$tdatacat_trabajadores_puestos[".nSecOptions"] = 0;

$tdatacat_trabajadores_puestos[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_puestos[".entityType"] = 0;
$tdatacat_trabajadores_puestos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_puestos[".strOriginalTableName"] = "cat_trabajadores_puestos";

	



$tdatacat_trabajadores_puestos[".showAddInPopup"] = false;

$tdatacat_trabajadores_puestos[".showEditInPopup"] = false;

$tdatacat_trabajadores_puestos[".showViewInPopup"] = false;

$tdatacat_trabajadores_puestos[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_puestos[".listAjax"] = false;

	$tdatacat_trabajadores_puestos[".audit"] = true;

	$tdatacat_trabajadores_puestos[".locking"] = true;


$pages = $tdatacat_trabajadores_puestos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_puestos[".edit"] = true;
	$tdatacat_trabajadores_puestos[".afterEditAction"] = 1;
	$tdatacat_trabajadores_puestos[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_puestos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_puestos[".add"] = true;
$tdatacat_trabajadores_puestos[".afterAddAction"] = 1;
$tdatacat_trabajadores_puestos[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_puestos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_puestos[".list"] = true;
}



$tdatacat_trabajadores_puestos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_puestos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_puestos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_puestos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_puestos[".printFriendly"] = true;
}



$tdatacat_trabajadores_puestos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_puestos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_puestos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_puestos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_puestos[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_puestos[".buttonsAdded"] = false;

$tdatacat_trabajadores_puestos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_puestos[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_puestos[".badgeColor"] = "8FBC8B";


$tdatacat_trabajadores_puestos[".allSearchFields"] = array();
$tdatacat_trabajadores_puestos[".filterFields"] = array();
$tdatacat_trabajadores_puestos[".requiredSearchFields"] = array();

$tdatacat_trabajadores_puestos[".googleLikeFields"] = array();
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "cat_trabajadores_puestos_id";
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "descripcion_puesto";
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "sueldo_diario";
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "horas_laborales";
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "hora_extra";
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "bono";
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "prima";
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "time_stamp";
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "capturista";
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "vigente";
$tdatacat_trabajadores_puestos[".googleLikeFields"][] = "fecha_de_registro";



$tdatacat_trabajadores_puestos[".tableType"] = "list";

$tdatacat_trabajadores_puestos[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_puestos[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_puestos[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_puestos[".geocodingEnabled"] = false;





$tdatacat_trabajadores_puestos[".isResizeColumns"] = true;





$tdatacat_trabajadores_puestos[".pageSize"] = 20;

$tdatacat_trabajadores_puestos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_puestos[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_puestos[".orderindexes"] = array();


$tdatacat_trabajadores_puestos[".sqlHead"] = "SELECT cat_trabajadores_puestos_id,  	descripcion_puesto,  	sueldo_diario,  	horas_laborales,  	hora_extra,  	bono,  	prima,  	time_stamp,  	capturista,  	vigente,  	fecha_de_registro";
$tdatacat_trabajadores_puestos[".sqlFrom"] = "FROM cat_trabajadores_puestos";
$tdatacat_trabajadores_puestos[".sqlWhereExpr"] = "";
$tdatacat_trabajadores_puestos[".sqlTail"] = "";

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
$tdatacat_trabajadores_puestos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_puestos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_puestos[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_puestos[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_puestos = array();
$tableKeyscat_trabajadores_puestos[] = "cat_trabajadores_puestos_id";
$tdatacat_trabajadores_puestos[".Keys"] = $tableKeyscat_trabajadores_puestos;


$tdatacat_trabajadores_puestos[".hideMobileList"] = array();




//	cat_trabajadores_puestos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_puestos_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_id";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","cat_trabajadores_puestos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatacat_trabajadores_puestos["cat_trabajadores_puestos_id"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "cat_trabajadores_puestos_id";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","descripcion_puesto");
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


	$tdatacat_trabajadores_puestos["descripcion_puesto"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "descripcion_puesto";
//	sueldo_diario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sueldo_diario";
	$fdata["GoodName"] = "sueldo_diario";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","sueldo_diario");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "sueldo_diario";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sueldo_diario";

	
	
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


	$tdatacat_trabajadores_puestos["sueldo_diario"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "sueldo_diario";
//	horas_laborales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "horas_laborales";
	$fdata["GoodName"] = "horas_laborales";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","horas_laborales");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "horas_laborales";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "horas_laborales";

	
	
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


	$tdatacat_trabajadores_puestos["horas_laborales"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "horas_laborales";
//	hora_extra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "hora_extra";
	$fdata["GoodName"] = "hora_extra";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","hora_extra");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "hora_extra";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora_extra";

	
	
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


	$tdatacat_trabajadores_puestos["hora_extra"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "hora_extra";
//	bono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bono";
	$fdata["GoodName"] = "bono";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","bono");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "bono";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bono";

	
	
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


	$tdatacat_trabajadores_puestos["bono"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "bono";
//	prima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "prima";
	$fdata["GoodName"] = "prima";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","prima");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "prima";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prima";

	
	
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


	$tdatacat_trabajadores_puestos["prima"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "prima";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","time_stamp");
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


	$tdatacat_trabajadores_puestos["time_stamp"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "time_stamp";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","capturista");
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


	$tdatacat_trabajadores_puestos["capturista"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "capturista";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","vigente");
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


	$tdatacat_trabajadores_puestos["vigente"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "vigente";
//	fecha_de_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "fecha_de_registro";
	$fdata["GoodName"] = "fecha_de_registro";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_puestos","fecha_de_registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_registro";

		$fdata["sourceSingle"] = "fecha_de_registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_registro";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatacat_trabajadores_puestos["fecha_de_registro"] = $fdata;
		$tdatacat_trabajadores_puestos[".searchableFields"][] = "fecha_de_registro";


$tables_data["cat_trabajadores_puestos"]=&$tdatacat_trabajadores_puestos;
$field_labels["cat_trabajadores_puestos"] = &$fieldLabelscat_trabajadores_puestos;
$fieldToolTips["cat_trabajadores_puestos"] = &$fieldToolTipscat_trabajadores_puestos;
$placeHolders["cat_trabajadores_puestos"] = &$placeHolderscat_trabajadores_puestos;
$page_titles["cat_trabajadores_puestos"] = &$pageTitlescat_trabajadores_puestos;


changeTextControlsToDate( "cat_trabajadores_puestos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_puestos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_puestos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_puestos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_puestos_id,  	descripcion_puesto,  	sueldo_diario,  	horas_laborales,  	hora_extra,  	bono,  	prima,  	time_stamp,  	capturista,  	vigente,  	fecha_de_registro";
$proto0["m_strFrom"] = "FROM cat_trabajadores_puestos";
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
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto6["m_sql"] = "cat_trabajadores_puestos_id";
$proto6["m_srcTableName"] = "cat_trabajadores_puestos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto8["m_sql"] = "descripcion_puesto";
$proto8["m_srcTableName"] = "cat_trabajadores_puestos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sueldo_diario",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto10["m_sql"] = "sueldo_diario";
$proto10["m_srcTableName"] = "cat_trabajadores_puestos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "horas_laborales",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto12["m_sql"] = "horas_laborales";
$proto12["m_srcTableName"] = "cat_trabajadores_puestos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_extra",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto14["m_sql"] = "hora_extra";
$proto14["m_srcTableName"] = "cat_trabajadores_puestos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "bono",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto16["m_sql"] = "bono";
$proto16["m_srcTableName"] = "cat_trabajadores_puestos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "prima",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto18["m_sql"] = "prima";
$proto18["m_srcTableName"] = "cat_trabajadores_puestos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto20["m_sql"] = "time_stamp";
$proto20["m_srcTableName"] = "cat_trabajadores_puestos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto22["m_sql"] = "capturista";
$proto22["m_srcTableName"] = "cat_trabajadores_puestos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto24["m_sql"] = "vigente";
$proto24["m_srcTableName"] = "cat_trabajadores_puestos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_registro",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_puestos"
));

$proto26["m_sql"] = "fecha_de_registro";
$proto26["m_srcTableName"] = "cat_trabajadores_puestos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "cat_trabajadores_puestos";
$proto29["m_srcTableName"] = "cat_trabajadores_puestos";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "cat_trabajadores_puestos_id";
$proto29["m_columns"][] = "time_stamp";
$proto29["m_columns"][] = "capturista";
$proto29["m_columns"][] = "vigente";
$proto29["m_columns"][] = "fecha_de_registro";
$proto29["m_columns"][] = "descripcion_puesto";
$proto29["m_columns"][] = "sueldo_diario";
$proto29["m_columns"][] = "horas_laborales";
$proto29["m_columns"][] = "hora_extra";
$proto29["m_columns"][] = "bono";
$proto29["m_columns"][] = "prima";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "cat_trabajadores_puestos";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "cat_trabajadores_puestos";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_puestos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_puestos = createSqlQuery_cat_trabajadores_puestos();


	
		;

											

$tdatacat_trabajadores_puestos[".sqlquery"] = $queryData_cat_trabajadores_puestos;



$tdatacat_trabajadores_puestos[".hasEvents"] = false;

?>