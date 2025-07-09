<?php
$tdataaux_actividades_precios = array();
$tdataaux_actividades_precios[".searchableFields"] = array();
$tdataaux_actividades_precios[".ShortName"] = "aux_actividades_precios";
$tdataaux_actividades_precios[".OwnerID"] = "";
$tdataaux_actividades_precios[".OriginalTable"] = "aux_actividades_precios";


$tdataaux_actividades_precios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaux_actividades_precios[".originalPagesByType"] = $tdataaux_actividades_precios[".pagesByType"];
$tdataaux_actividades_precios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaux_actividades_precios[".originalPages"] = $tdataaux_actividades_precios[".pages"];
$tdataaux_actividades_precios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaux_actividades_precios[".originalDefaultPages"] = $tdataaux_actividades_precios[".defaultPages"];

//	field labels
$fieldLabelsaux_actividades_precios = array();
$fieldToolTipsaux_actividades_precios = array();
$pageTitlesaux_actividades_precios = array();
$placeHoldersaux_actividades_precios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsaux_actividades_precios["Spanish"] = array();
	$fieldToolTipsaux_actividades_precios["Spanish"] = array();
	$placeHoldersaux_actividades_precios["Spanish"] = array();
	$pageTitlesaux_actividades_precios["Spanish"] = array();
	$fieldLabelsaux_actividades_precios["Spanish"]["aux_actividades_precios_id"] = "Aux Actividades Precios Id";
	$fieldToolTipsaux_actividades_precios["Spanish"]["aux_actividades_precios_id"] = "";
	$placeHoldersaux_actividades_precios["Spanish"]["aux_actividades_precios_id"] = "";
	$fieldLabelsaux_actividades_precios["Spanish"]["calidad1_dominical"] = "Calidad1 Dominical";
	$fieldToolTipsaux_actividades_precios["Spanish"]["calidad1_dominical"] = "";
	$placeHoldersaux_actividades_precios["Spanish"]["calidad1_dominical"] = "";
	$fieldLabelsaux_actividades_precios["Spanish"]["calidad1_ordinario"] = "Calidad1 Ordinario";
	$fieldToolTipsaux_actividades_precios["Spanish"]["calidad1_ordinario"] = "";
	$placeHoldersaux_actividades_precios["Spanish"]["calidad1_ordinario"] = "";
	$fieldLabelsaux_actividades_precios["Spanish"]["calidad2_ordinario"] = "Calidad2 Ordinario";
	$fieldToolTipsaux_actividades_precios["Spanish"]["calidad2_ordinario"] = "";
	$placeHoldersaux_actividades_precios["Spanish"]["calidad2_ordinario"] = "";
	$fieldLabelsaux_actividades_precios["Spanish"]["cat_actividades_unidades_de_costo_id"] = "Id Actividad";
	$fieldToolTipsaux_actividades_precios["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$placeHoldersaux_actividades_precios["Spanish"]["cat_actividades_unidades_de_costo_id"] = "";
	$fieldLabelsaux_actividades_precios["Spanish"]["descripcion_unidades_de_costo"] = "Descripcion Unidad de Costo";
	$fieldToolTipsaux_actividades_precios["Spanish"]["descripcion_unidades_de_costo"] = "";
	$placeHoldersaux_actividades_precios["Spanish"]["descripcion_unidades_de_costo"] = "";
	$fieldLabelsaux_actividades_precios["Spanish"]["dominical"] = "Calidad2 Dominical";
	$fieldToolTipsaux_actividades_precios["Spanish"]["dominical"] = "";
	$placeHoldersaux_actividades_precios["Spanish"]["dominical"] = "";
	if (count($fieldToolTipsaux_actividades_precios["Spanish"]))
		$tdataaux_actividades_precios[".isUseToolTips"] = true;
}


	$tdataaux_actividades_precios[".NCSearch"] = true;



$tdataaux_actividades_precios[".shortTableName"] = "aux_actividades_precios";
$tdataaux_actividades_precios[".nSecOptions"] = 0;

$tdataaux_actividades_precios[".mainTableOwnerID"] = "";
$tdataaux_actividades_precios[".entityType"] = 0;
$tdataaux_actividades_precios[".connId"] = "wwinte_app_at_intelagro_mx";


$tdataaux_actividades_precios[".strOriginalTableName"] = "aux_actividades_precios";

	



$tdataaux_actividades_precios[".showAddInPopup"] = false;

$tdataaux_actividades_precios[".showEditInPopup"] = false;

$tdataaux_actividades_precios[".showViewInPopup"] = false;

$tdataaux_actividades_precios[".listAjax"] = false;
//	temporary
//$tdataaux_actividades_precios[".listAjax"] = false;

	$tdataaux_actividades_precios[".audit"] = false;

	$tdataaux_actividades_precios[".locking"] = false;


$pages = $tdataaux_actividades_precios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaux_actividades_precios[".edit"] = true;
	$tdataaux_actividades_precios[".afterEditAction"] = 1;
	$tdataaux_actividades_precios[".closePopupAfterEdit"] = 1;
	$tdataaux_actividades_precios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaux_actividades_precios[".add"] = true;
$tdataaux_actividades_precios[".afterAddAction"] = 1;
$tdataaux_actividades_precios[".closePopupAfterAdd"] = 1;
$tdataaux_actividades_precios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaux_actividades_precios[".list"] = true;
}



$tdataaux_actividades_precios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaux_actividades_precios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaux_actividades_precios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaux_actividades_precios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaux_actividades_precios[".printFriendly"] = true;
}



$tdataaux_actividades_precios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaux_actividades_precios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaux_actividades_precios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaux_actividades_precios[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdataaux_actividades_precios[".ajaxCodeSnippetAdded"] = false;

$tdataaux_actividades_precios[".buttonsAdded"] = false;

$tdataaux_actividades_precios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaux_actividades_precios[".isUseTimeForSearch"] = false;


$tdataaux_actividades_precios[".badgeColor"] = "3CB371";


$tdataaux_actividades_precios[".allSearchFields"] = array();
$tdataaux_actividades_precios[".filterFields"] = array();
$tdataaux_actividades_precios[".requiredSearchFields"] = array();

$tdataaux_actividades_precios[".googleLikeFields"] = array();
$tdataaux_actividades_precios[".googleLikeFields"][] = "aux_actividades_precios_id";
$tdataaux_actividades_precios[".googleLikeFields"][] = "cat_actividades_unidades_de_costo_id";
$tdataaux_actividades_precios[".googleLikeFields"][] = "descripcion_unidades_de_costo";
$tdataaux_actividades_precios[".googleLikeFields"][] = "calidad1_ordinario";
$tdataaux_actividades_precios[".googleLikeFields"][] = "calidad1_dominical";
$tdataaux_actividades_precios[".googleLikeFields"][] = "calidad2_ordinario";
$tdataaux_actividades_precios[".googleLikeFields"][] = "dominical";



$tdataaux_actividades_precios[".tableType"] = "list";

$tdataaux_actividades_precios[".printerPageOrientation"] = 0;
$tdataaux_actividades_precios[".nPrinterPageScale"] = 100;

$tdataaux_actividades_precios[".nPrinterSplitRecords"] = 40;

$tdataaux_actividades_precios[".geocodingEnabled"] = false;










$tdataaux_actividades_precios[".pageSize"] = 20;

$tdataaux_actividades_precios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaux_actividades_precios[".strOrderBy"] = $tstrOrderBy;

$tdataaux_actividades_precios[".orderindexes"] = array();


$tdataaux_actividades_precios[".sqlHead"] = "SELECT `aux_actividades_precios_id`,  	`cat_actividades_unidades_de_costo_id`,  	`descripcion_unidades_de_costo`,  	`calidad1_ordinario`,  	`calidad1_dominical`,  	`calidad2_ordinario`,  	`dominical`";
$tdataaux_actividades_precios[".sqlFrom"] = "FROM `aux_actividades_precios`";
$tdataaux_actividades_precios[".sqlWhereExpr"] = "";
$tdataaux_actividades_precios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaux_actividades_precios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaux_actividades_precios[".arrGroupsPerPage"] = $arrGPP;

$tdataaux_actividades_precios[".highlightSearchResults"] = true;

$tableKeysaux_actividades_precios = array();
$tableKeysaux_actividades_precios[] = "aux_actividades_precios_id";
$tdataaux_actividades_precios[".Keys"] = $tableKeysaux_actividades_precios;


$tdataaux_actividades_precios[".hideMobileList"] = array();




//	aux_actividades_precios_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aux_actividades_precios_id";
	$fdata["GoodName"] = "aux_actividades_precios_id";
	$fdata["ownerTable"] = "aux_actividades_precios";
	$fdata["Label"] = GetFieldLabel("aux_actividades_precios","aux_actividades_precios_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "aux_actividades_precios_id";

		$fdata["sourceSingle"] = "aux_actividades_precios_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aux_actividades_precios_id`";

	
	
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


	$tdataaux_actividades_precios["aux_actividades_precios_id"] = $fdata;
		$tdataaux_actividades_precios[".searchableFields"][] = "aux_actividades_precios_id";
//	cat_actividades_unidades_de_costo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["GoodName"] = "cat_actividades_unidades_de_costo_id";
	$fdata["ownerTable"] = "aux_actividades_precios";
	$fdata["Label"] = GetFieldLabel("aux_actividades_precios","cat_actividades_unidades_de_costo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_actividades_unidades_de_costo_id";

		$fdata["sourceSingle"] = "cat_actividades_unidades_de_costo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cat_actividades_unidades_de_costo_id`";

	
	
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


	$tdataaux_actividades_precios["cat_actividades_unidades_de_costo_id"] = $fdata;
		$tdataaux_actividades_precios[".searchableFields"][] = "cat_actividades_unidades_de_costo_id";
//	descripcion_unidades_de_costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion_unidades_de_costo";
	$fdata["GoodName"] = "descripcion_unidades_de_costo";
	$fdata["ownerTable"] = "aux_actividades_precios";
	$fdata["Label"] = GetFieldLabel("aux_actividades_precios","descripcion_unidades_de_costo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_unidades_de_costo";

		$fdata["sourceSingle"] = "descripcion_unidades_de_costo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`descripcion_unidades_de_costo`";

	
	
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


	$tdataaux_actividades_precios["descripcion_unidades_de_costo"] = $fdata;
		$tdataaux_actividades_precios[".searchableFields"][] = "descripcion_unidades_de_costo";
//	calidad1_ordinario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "calidad1_ordinario";
	$fdata["GoodName"] = "calidad1_ordinario";
	$fdata["ownerTable"] = "aux_actividades_precios";
	$fdata["Label"] = GetFieldLabel("aux_actividades_precios","calidad1_ordinario");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "calidad1_ordinario";

		$fdata["sourceSingle"] = "calidad1_ordinario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`calidad1_ordinario`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataaux_actividades_precios["calidad1_ordinario"] = $fdata;
		$tdataaux_actividades_precios[".searchableFields"][] = "calidad1_ordinario";
//	calidad1_dominical
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "calidad1_dominical";
	$fdata["GoodName"] = "calidad1_dominical";
	$fdata["ownerTable"] = "aux_actividades_precios";
	$fdata["Label"] = GetFieldLabel("aux_actividades_precios","calidad1_dominical");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "calidad1_dominical";

		$fdata["sourceSingle"] = "calidad1_dominical";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`calidad1_dominical`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataaux_actividades_precios["calidad1_dominical"] = $fdata;
		$tdataaux_actividades_precios[".searchableFields"][] = "calidad1_dominical";
//	calidad2_ordinario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "calidad2_ordinario";
	$fdata["GoodName"] = "calidad2_ordinario";
	$fdata["ownerTable"] = "aux_actividades_precios";
	$fdata["Label"] = GetFieldLabel("aux_actividades_precios","calidad2_ordinario");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "calidad2_ordinario";

		$fdata["sourceSingle"] = "calidad2_ordinario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`calidad2_ordinario`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataaux_actividades_precios["calidad2_ordinario"] = $fdata;
		$tdataaux_actividades_precios[".searchableFields"][] = "calidad2_ordinario";
//	dominical
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dominical";
	$fdata["GoodName"] = "dominical";
	$fdata["ownerTable"] = "aux_actividades_precios";
	$fdata["Label"] = GetFieldLabel("aux_actividades_precios","dominical");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "dominical";

		$fdata["sourceSingle"] = "dominical";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dominical`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataaux_actividades_precios["dominical"] = $fdata;
		$tdataaux_actividades_precios[".searchableFields"][] = "dominical";


$tables_data["aux_actividades_precios"]=&$tdataaux_actividades_precios;
$field_labels["aux_actividades_precios"] = &$fieldLabelsaux_actividades_precios;
$fieldToolTips["aux_actividades_precios"] = &$fieldToolTipsaux_actividades_precios;
$placeHolders["aux_actividades_precios"] = &$placeHoldersaux_actividades_precios;
$page_titles["aux_actividades_precios"] = &$pageTitlesaux_actividades_precios;


changeTextControlsToDate( "aux_actividades_precios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aux_actividades_precios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aux_actividades_precios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aux_actividades_precios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`aux_actividades_precios_id`,  	`cat_actividades_unidades_de_costo_id`,  	`descripcion_unidades_de_costo`,  	`calidad1_ordinario`,  	`calidad1_dominical`,  	`calidad2_ordinario`,  	`dominical`";
$proto0["m_strFrom"] = "FROM `aux_actividades_precios`";
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
	"m_strName" => "aux_actividades_precios_id",
	"m_strTable" => "aux_actividades_precios",
	"m_srcTableName" => "aux_actividades_precios"
));

$proto6["m_sql"] = "`aux_actividades_precios_id`";
$proto6["m_srcTableName"] = "aux_actividades_precios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_actividades_unidades_de_costo_id",
	"m_strTable" => "aux_actividades_precios",
	"m_srcTableName" => "aux_actividades_precios"
));

$proto8["m_sql"] = "`cat_actividades_unidades_de_costo_id`";
$proto8["m_srcTableName"] = "aux_actividades_precios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_unidades_de_costo",
	"m_strTable" => "aux_actividades_precios",
	"m_srcTableName" => "aux_actividades_precios"
));

$proto10["m_sql"] = "`descripcion_unidades_de_costo`";
$proto10["m_srcTableName"] = "aux_actividades_precios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "calidad1_ordinario",
	"m_strTable" => "aux_actividades_precios",
	"m_srcTableName" => "aux_actividades_precios"
));

$proto12["m_sql"] = "`calidad1_ordinario`";
$proto12["m_srcTableName"] = "aux_actividades_precios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "calidad1_dominical",
	"m_strTable" => "aux_actividades_precios",
	"m_srcTableName" => "aux_actividades_precios"
));

$proto14["m_sql"] = "`calidad1_dominical`";
$proto14["m_srcTableName"] = "aux_actividades_precios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "calidad2_ordinario",
	"m_strTable" => "aux_actividades_precios",
	"m_srcTableName" => "aux_actividades_precios"
));

$proto16["m_sql"] = "`calidad2_ordinario`";
$proto16["m_srcTableName"] = "aux_actividades_precios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dominical",
	"m_strTable" => "aux_actividades_precios",
	"m_srcTableName" => "aux_actividades_precios"
));

$proto18["m_sql"] = "`dominical`";
$proto18["m_srcTableName"] = "aux_actividades_precios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "aux_actividades_precios";
$proto21["m_srcTableName"] = "aux_actividades_precios";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "aux_actividades_precios_id";
$proto21["m_columns"][] = "cat_actividades_unidades_de_costo_id";
$proto21["m_columns"][] = "descripcion_unidades_de_costo";
$proto21["m_columns"][] = "calidad1_ordinario";
$proto21["m_columns"][] = "calidad1_dominical";
$proto21["m_columns"][] = "calidad2_ordinario";
$proto21["m_columns"][] = "dominical";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`aux_actividades_precios`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "aux_actividades_precios";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="aux_actividades_precios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aux_actividades_precios = createSqlQuery_aux_actividades_precios();


	
		;

							

$tdataaux_actividades_precios[".sqlquery"] = $queryData_aux_actividades_precios;



$tdataaux_actividades_precios[".hasEvents"] = false;

?>