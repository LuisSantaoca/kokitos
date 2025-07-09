<?php
$tdatapuestos_horarios = array();
$tdatapuestos_horarios[".searchableFields"] = array();
$tdatapuestos_horarios[".ShortName"] = "puestos_horarios";
$tdatapuestos_horarios[".OwnerID"] = "";
$tdatapuestos_horarios[".OriginalTable"] = "puestos horarios";


$tdatapuestos_horarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapuestos_horarios[".originalPagesByType"] = $tdatapuestos_horarios[".pagesByType"];
$tdatapuestos_horarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapuestos_horarios[".originalPages"] = $tdatapuestos_horarios[".pages"];
$tdatapuestos_horarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapuestos_horarios[".originalDefaultPages"] = $tdatapuestos_horarios[".defaultPages"];

//	field labels
$fieldLabelspuestos_horarios = array();
$fieldToolTipspuestos_horarios = array();
$pageTitlespuestos_horarios = array();
$placeHolderspuestos_horarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspuestos_horarios["Spanish"] = array();
	$fieldToolTipspuestos_horarios["Spanish"] = array();
	$placeHolderspuestos_horarios["Spanish"] = array();
	$pageTitlespuestos_horarios["Spanish"] = array();
	$fieldLabelspuestos_horarios["Spanish"]["cat_trabajadores_puestos_id"] = "Id Puesto";
	$fieldToolTipspuestos_horarios["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$placeHolderspuestos_horarios["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$fieldLabelspuestos_horarios["Spanish"]["descripcion_puesto"] = "Descripcion Puesto";
	$fieldToolTipspuestos_horarios["Spanish"]["descripcion_puesto"] = "";
	$placeHolderspuestos_horarios["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelspuestos_horarios["Spanish"]["aux_horarios_id"] = "Id Horario";
	$fieldToolTipspuestos_horarios["Spanish"]["aux_horarios_id"] = "";
	$placeHolderspuestos_horarios["Spanish"]["aux_horarios_id"] = "";
	$fieldLabelspuestos_horarios["Spanish"]["descripcion_horario"] = "Descripcion Horario";
	$fieldToolTipspuestos_horarios["Spanish"]["descripcion_horario"] = "";
	$placeHolderspuestos_horarios["Spanish"]["descripcion_horario"] = "";
	$fieldLabelspuestos_horarios["Spanish"]["horario_tipo"] = "Tipo Horario";
	$fieldToolTipspuestos_horarios["Spanish"]["horario_tipo"] = "";
	$placeHolderspuestos_horarios["Spanish"]["horario_tipo"] = "";
	$fieldLabelspuestos_horarios["Spanish"]["horario_entre_semana"] = "Horario Entre Semana";
	$fieldToolTipspuestos_horarios["Spanish"]["horario_entre_semana"] = "";
	$placeHolderspuestos_horarios["Spanish"]["horario_entre_semana"] = "";
	$fieldLabelspuestos_horarios["Spanish"]["horario_sabado"] = "Horario Sabado";
	$fieldToolTipspuestos_horarios["Spanish"]["horario_sabado"] = "";
	$placeHolderspuestos_horarios["Spanish"]["horario_sabado"] = "";
	$fieldLabelspuestos_horarios["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipspuestos_horarios["Spanish"]["time_stamp"] = "";
	$placeHolderspuestos_horarios["Spanish"]["time_stamp"] = "";
	$fieldLabelspuestos_horarios["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipspuestos_horarios["Spanish"]["vigente"] = "";
	$placeHolderspuestos_horarios["Spanish"]["vigente"] = "";
	$fieldLabelspuestos_horarios["Spanish"]["minutos_tolerancia_entrada"] = "Minutos Tolerancia Entrada";
	$fieldToolTipspuestos_horarios["Spanish"]["minutos_tolerancia_entrada"] = "";
	$placeHolderspuestos_horarios["Spanish"]["minutos_tolerancia_entrada"] = "";
	$fieldLabelspuestos_horarios["Spanish"]["vigente1_"] = "Vigente";
	$fieldToolTipspuestos_horarios["Spanish"]["vigente1_"] = "";
	$placeHolderspuestos_horarios["Spanish"]["vigente1_"] = "";
	if (count($fieldToolTipspuestos_horarios["Spanish"]))
		$tdatapuestos_horarios[".isUseToolTips"] = true;
}


	$tdatapuestos_horarios[".NCSearch"] = true;



$tdatapuestos_horarios[".shortTableName"] = "puestos_horarios";
$tdatapuestos_horarios[".nSecOptions"] = 0;

$tdatapuestos_horarios[".mainTableOwnerID"] = "";
$tdatapuestos_horarios[".entityType"] = 6;
$tdatapuestos_horarios[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatapuestos_horarios[".strOriginalTableName"] = "puestos horarios";

	



$tdatapuestos_horarios[".showAddInPopup"] = false;

$tdatapuestos_horarios[".showEditInPopup"] = false;

$tdatapuestos_horarios[".showViewInPopup"] = false;

$tdatapuestos_horarios[".listAjax"] = false;
//	temporary
//$tdatapuestos_horarios[".listAjax"] = false;

	$tdatapuestos_horarios[".audit"] = false;

	$tdatapuestos_horarios[".locking"] = false;


$pages = $tdatapuestos_horarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapuestos_horarios[".edit"] = true;
	$tdatapuestos_horarios[".afterEditAction"] = 1;
	$tdatapuestos_horarios[".closePopupAfterEdit"] = 1;
	$tdatapuestos_horarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapuestos_horarios[".add"] = true;
$tdatapuestos_horarios[".afterAddAction"] = 1;
$tdatapuestos_horarios[".closePopupAfterAdd"] = 1;
$tdatapuestos_horarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapuestos_horarios[".list"] = true;
}



$tdatapuestos_horarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapuestos_horarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapuestos_horarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapuestos_horarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapuestos_horarios[".printFriendly"] = true;
}



$tdatapuestos_horarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapuestos_horarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapuestos_horarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapuestos_horarios[".isUseAjaxSuggest"] = false;



																																																																																																																																				

$tdatapuestos_horarios[".ajaxCodeSnippetAdded"] = false;

$tdatapuestos_horarios[".buttonsAdded"] = false;

$tdatapuestos_horarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapuestos_horarios[".isUseTimeForSearch"] = false;


$tdatapuestos_horarios[".badgeColor"] = "E8926F";


$tdatapuestos_horarios[".allSearchFields"] = array();
$tdatapuestos_horarios[".filterFields"] = array();
$tdatapuestos_horarios[".requiredSearchFields"] = array();

$tdatapuestos_horarios[".googleLikeFields"] = array();
$tdatapuestos_horarios[".googleLikeFields"][] = "cat_trabajadores_puestos_id";
$tdatapuestos_horarios[".googleLikeFields"][] = "descripcion_puesto";
$tdatapuestos_horarios[".googleLikeFields"][] = "aux_horarios_id";
$tdatapuestos_horarios[".googleLikeFields"][] = "descripcion_horario";
$tdatapuestos_horarios[".googleLikeFields"][] = "horario_tipo";
$tdatapuestos_horarios[".googleLikeFields"][] = "horario_entre_semana";
$tdatapuestos_horarios[".googleLikeFields"][] = "horario_sabado";
$tdatapuestos_horarios[".googleLikeFields"][] = "time_stamp";
$tdatapuestos_horarios[".googleLikeFields"][] = "vigente";
$tdatapuestos_horarios[".googleLikeFields"][] = "minutos_tolerancia_entrada";
$tdatapuestos_horarios[".googleLikeFields"][] = "vigente1 ";




$tdatapuestos_horarios[".printerPageOrientation"] = 0;
$tdatapuestos_horarios[".nPrinterPageScale"] = 100;

$tdatapuestos_horarios[".nPrinterSplitRecords"] = 40;

$tdatapuestos_horarios[".geocodingEnabled"] = false;










$tdatapuestos_horarios[".pageSize"] = 20;

$tdatapuestos_horarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapuestos_horarios[".strOrderBy"] = $tstrOrderBy;

$tdatapuestos_horarios[".orderindexes"] = array();
	foreach ( my_json_decode("[]") as $orderItem ) {
		$tdatapuestos_horarios[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdatapuestos_horarios[".sqlHead"] = "";
$tdatapuestos_horarios[".sqlFrom"] = "";
$tdatapuestos_horarios[".sqlWhereExpr"] = "";
$tdatapuestos_horarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapuestos_horarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapuestos_horarios[".arrGroupsPerPage"] = $arrGPP;

$tdatapuestos_horarios[".highlightSearchResults"] = true;

$tableKeyspuestos_horarios = array();
$tableKeyspuestos_horarios[] = "cat_trabajadores_puestos_id";
$tdatapuestos_horarios[".Keys"] = $tableKeyspuestos_horarios;


$tdatapuestos_horarios[".hideMobileList"] = array();




//	cat_trabajadores_puestos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_puestos_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","cat_trabajadores_puestos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_puestos_id";

	
	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cat_trabajadores_puestos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cat_trabajadores_puestos_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatapuestos_horarios["cat_trabajadores_puestos_id"] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "cat_trabajadores_puestos_id";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","descripcion_puesto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

	
	
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


	$tdatapuestos_horarios["descripcion_puesto"] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "descripcion_puesto";
//	aux_horarios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aux_horarios_id";
	$fdata["GoodName"] = "aux_horarios_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","aux_horarios_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "aux_horarios_id";

	
	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "aux_horarios_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "aux_horarios_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatapuestos_horarios["aux_horarios_id"] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "aux_horarios_id";
//	descripcion_horario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "descripcion_horario";
	$fdata["GoodName"] = "descripcion_horario";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","descripcion_horario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_horario";

	
	
		$fdata["FullName"] = "descripcion_horario";

	
	
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


	$tdatapuestos_horarios["descripcion_horario"] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "descripcion_horario";
//	horario_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "horario_tipo";
	$fdata["GoodName"] = "horario_tipo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","horario_tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "horario_tipo";

	
	
		$fdata["FullName"] = "horario_tipo";

	
	
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


	$tdatapuestos_horarios["horario_tipo"] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "horario_tipo";
//	horario_entre_semana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "horario_entre_semana";
	$fdata["GoodName"] = "horario_entre_semana";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","horario_entre_semana");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "horario_entre_semana";

	
	
		$fdata["FullName"] = "horario_entre_semana";

	
	
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


	$tdatapuestos_horarios["horario_entre_semana"] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "horario_entre_semana";
//	horario_sabado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "horario_sabado";
	$fdata["GoodName"] = "horario_sabado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","horario_sabado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "horario_sabado";

	
	
		$fdata["FullName"] = "horario_sabado";

	
	
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


	$tdatapuestos_horarios["horario_sabado"] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "horario_sabado";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

	
		$fdata["dateFormat"] = "YYYY-MM-DD hh:mm:ss";

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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatapuestos_horarios["time_stamp"] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

	
		$fdata["dateFormat"] = "YYYY-MM-DD hh:mm:ss";

		$fdata["FullName"] = "vigente";

	
	
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


	$tdatapuestos_horarios["vigente"] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "vigente";
//	minutos_tolerancia_entrada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "minutos_tolerancia_entrada";
	$fdata["GoodName"] = "minutos_tolerancia_entrada";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","minutos_tolerancia_entrada");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "minutos_tolerancia_entrada";

	
		$fdata["dateFormat"] = "YYYY-MM-DD hh:mm:ss";

		$fdata["FullName"] = "minutos_tolerancia_entrada";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatapuestos_horarios["minutos_tolerancia_entrada"] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "minutos_tolerancia_entrada";
//	vigente1 
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "vigente1 ";
	$fdata["GoodName"] = "vigente1_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puestos_horarios","vigente1_");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente1 ";

	
		$fdata["dateFormat"] = "YYYY-MM-DD hh:mm:ss";

		$fdata["FullName"] = "vigente1 ";

	
	
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


	$tdatapuestos_horarios["vigente1 "] = $fdata;
		$tdatapuestos_horarios[".searchableFields"][] = "vigente1 ";


$tables_data["puestos horarios"]=&$tdatapuestos_horarios;
$field_labels["puestos_horarios"] = &$fieldLabelspuestos_horarios;
$fieldToolTips["puestos_horarios"] = &$fieldToolTipspuestos_horarios;
$placeHolders["puestos_horarios"] = &$placeHolderspuestos_horarios;
$page_titles["puestos_horarios"] = &$pageTitlespuestos_horarios;


changeTextControlsToDate( "puestos horarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["puestos horarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["puestos horarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/puestos_horarios_ops.php" ) );



	
		;

											

$tdatapuestos_horarios[".sqlquery"] = $queryData_puestos_horarios;



$tdatapuestos_horarios[".hasEvents"] = false;

?>