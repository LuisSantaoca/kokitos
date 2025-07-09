<?php
$tdatabox_cat_nominas_conceptos = array();
$tdatabox_cat_nominas_conceptos[".searchableFields"] = array();
$tdatabox_cat_nominas_conceptos[".ShortName"] = "box_cat_nominas_conceptos";
$tdatabox_cat_nominas_conceptos[".OwnerID"] = "";
$tdatabox_cat_nominas_conceptos[".OriginalTable"] = "cat_nominas_conceptos";


$tdatabox_cat_nominas_conceptos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_nominas_conceptos[".originalPagesByType"] = $tdatabox_cat_nominas_conceptos[".pagesByType"];
$tdatabox_cat_nominas_conceptos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_nominas_conceptos[".originalPages"] = $tdatabox_cat_nominas_conceptos[".pages"];
$tdatabox_cat_nominas_conceptos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_nominas_conceptos[".originalDefaultPages"] = $tdatabox_cat_nominas_conceptos[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_nominas_conceptos = array();
$fieldToolTipsbox_cat_nominas_conceptos = array();
$pageTitlesbox_cat_nominas_conceptos = array();
$placeHoldersbox_cat_nominas_conceptos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_nominas_conceptos["Spanish"] = array();
	$fieldToolTipsbox_cat_nominas_conceptos["Spanish"] = array();
	$placeHoldersbox_cat_nominas_conceptos["Spanish"] = array();
	$pageTitlesbox_cat_nominas_conceptos["Spanish"] = array();
	$fieldLabelsbox_cat_nominas_conceptos["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_nominas_conceptos["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_nominas_conceptos["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_nominas_conceptos["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipsbox_cat_nominas_conceptos["Spanish"]["capturista"] = "";
	$placeHoldersbox_cat_nominas_conceptos["Spanish"]["capturista"] = "";
	$fieldLabelsbox_cat_nominas_conceptos["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipsbox_cat_nominas_conceptos["Spanish"]["time_stamp"] = "";
	$placeHoldersbox_cat_nominas_conceptos["Spanish"]["time_stamp"] = "";
	$fieldLabelsbox_cat_nominas_conceptos["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_nominas_conceptos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_nominas_conceptos["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelsbox_cat_nominas_conceptos["Spanish"]["descripcion_nominas_conceptos"] = "Conceptos";
	$fieldToolTipsbox_cat_nominas_conceptos["Spanish"]["descripcion_nominas_conceptos"] = "";
	$placeHoldersbox_cat_nominas_conceptos["Spanish"]["descripcion_nominas_conceptos"] = "";
	$fieldLabelsbox_cat_nominas_conceptos["Spanish"]["cat_nominas_conceptos_clasificacion_mu_id"] = "Clasificacion";
	$fieldToolTipsbox_cat_nominas_conceptos["Spanish"]["cat_nominas_conceptos_clasificacion_mu_id"] = "";
	$placeHoldersbox_cat_nominas_conceptos["Spanish"]["cat_nominas_conceptos_clasificacion_mu_id"] = "";
	$fieldLabelsbox_cat_nominas_conceptos["Spanish"]["cat_nominas_conceptos_id"] = "Id";
	$fieldToolTipsbox_cat_nominas_conceptos["Spanish"]["cat_nominas_conceptos_id"] = "";
	$placeHoldersbox_cat_nominas_conceptos["Spanish"]["cat_nominas_conceptos_id"] = "";
	$fieldLabelsbox_cat_nominas_conceptos["Spanish"]["id_clasif"] = "Id Clasif";
	$fieldToolTipsbox_cat_nominas_conceptos["Spanish"]["id_clasif"] = "";
	$placeHoldersbox_cat_nominas_conceptos["Spanish"]["id_clasif"] = "";
	if (count($fieldToolTipsbox_cat_nominas_conceptos["Spanish"]))
		$tdatabox_cat_nominas_conceptos[".isUseToolTips"] = true;
}





$tdatabox_cat_nominas_conceptos[".shortTableName"] = "box_cat_nominas_conceptos";
$tdatabox_cat_nominas_conceptos[".nSecOptions"] = 0;

$tdatabox_cat_nominas_conceptos[".mainTableOwnerID"] = "";
$tdatabox_cat_nominas_conceptos[".entityType"] = 1;
$tdatabox_cat_nominas_conceptos[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_nominas_conceptos[".strOriginalTableName"] = "cat_nominas_conceptos";

	



$tdatabox_cat_nominas_conceptos[".showAddInPopup"] = false;

$tdatabox_cat_nominas_conceptos[".showEditInPopup"] = false;

$tdatabox_cat_nominas_conceptos[".showViewInPopup"] = false;

$tdatabox_cat_nominas_conceptos[".listAjax"] = false;
//	temporary
//$tdatabox_cat_nominas_conceptos[".listAjax"] = false;

	$tdatabox_cat_nominas_conceptos[".audit"] = false;

	$tdatabox_cat_nominas_conceptos[".locking"] = false;


$pages = $tdatabox_cat_nominas_conceptos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_nominas_conceptos[".edit"] = true;
	$tdatabox_cat_nominas_conceptos[".afterEditAction"] = 1;
	$tdatabox_cat_nominas_conceptos[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_nominas_conceptos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_nominas_conceptos[".add"] = true;
$tdatabox_cat_nominas_conceptos[".afterAddAction"] = 1;
$tdatabox_cat_nominas_conceptos[".closePopupAfterAdd"] = 1;
$tdatabox_cat_nominas_conceptos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_nominas_conceptos[".list"] = true;
}



$tdatabox_cat_nominas_conceptos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_nominas_conceptos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_nominas_conceptos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_nominas_conceptos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_nominas_conceptos[".printFriendly"] = true;
}



$tdatabox_cat_nominas_conceptos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_nominas_conceptos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_nominas_conceptos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_nominas_conceptos[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_nominas_conceptos[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_nominas_conceptos[".buttonsAdded"] = false;

$tdatabox_cat_nominas_conceptos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_nominas_conceptos[".isUseTimeForSearch"] = false;


$tdatabox_cat_nominas_conceptos[".badgeColor"] = "7B68EE";


$tdatabox_cat_nominas_conceptos[".allSearchFields"] = array();
$tdatabox_cat_nominas_conceptos[".filterFields"] = array();
$tdatabox_cat_nominas_conceptos[".requiredSearchFields"] = array();

$tdatabox_cat_nominas_conceptos[".googleLikeFields"] = array();
$tdatabox_cat_nominas_conceptos[".googleLikeFields"][] = "vigente";
$tdatabox_cat_nominas_conceptos[".googleLikeFields"][] = "descripcion_nominas_conceptos";
$tdatabox_cat_nominas_conceptos[".googleLikeFields"][] = "cat_nominas_conceptos_clasificacion_mu_id";
$tdatabox_cat_nominas_conceptos[".googleLikeFields"][] = "id_clasif";
$tdatabox_cat_nominas_conceptos[".googleLikeFields"][] = "cat_nominas_conceptos_id";
$tdatabox_cat_nominas_conceptos[".googleLikeFields"][] = "capturista";
$tdatabox_cat_nominas_conceptos[".googleLikeFields"][] = "time_stamp";
$tdatabox_cat_nominas_conceptos[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_nominas_conceptos[".tableType"] = "list";

$tdatabox_cat_nominas_conceptos[".printerPageOrientation"] = 0;
$tdatabox_cat_nominas_conceptos[".nPrinterPageScale"] = 100;

$tdatabox_cat_nominas_conceptos[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_nominas_conceptos[".geocodingEnabled"] = false;





$tdatabox_cat_nominas_conceptos[".isResizeColumns"] = true;





$tdatabox_cat_nominas_conceptos[".pageSize"] = 20;

$tdatabox_cat_nominas_conceptos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_nominas_conceptos[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_nominas_conceptos[".orderindexes"] = array();


$tdatabox_cat_nominas_conceptos[".sqlHead"] = "SELECT cat_nominas_conceptos.vigente,  cat_nominas_conceptos.descripcion_nominas_conceptos,  cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id,  cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id AS id_clasif,  cat_nominas_conceptos.cat_nominas_conceptos_id,  cat_nominas_conceptos.capturista,  cat_nominas_conceptos.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_cat_nominas_conceptos[".sqlFrom"] = "FROM cat_nominas_conceptos  INNER JOIN cat_usuarios ON cat_nominas_conceptos.capturista = cat_usuarios.usuario";
$tdatabox_cat_nominas_conceptos[".sqlWhereExpr"] = "(cat_nominas_conceptos.vigente =1)";
$tdatabox_cat_nominas_conceptos[".sqlTail"] = "";

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
$tdatabox_cat_nominas_conceptos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_nominas_conceptos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_nominas_conceptos[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_nominas_conceptos[".highlightSearchResults"] = true;

$tableKeysbox_cat_nominas_conceptos = array();
$tableKeysbox_cat_nominas_conceptos[] = "cat_nominas_conceptos_id";
$tdatabox_cat_nominas_conceptos[".Keys"] = $tableKeysbox_cat_nominas_conceptos;


$tdatabox_cat_nominas_conceptos[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_conceptos","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos.vigente";

	
	
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


	$tdatabox_cat_nominas_conceptos["vigente"] = $fdata;
		$tdatabox_cat_nominas_conceptos[".searchableFields"][] = "vigente";
//	descripcion_nominas_conceptos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_nominas_conceptos";
	$fdata["GoodName"] = "descripcion_nominas_conceptos";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_conceptos","descripcion_nominas_conceptos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_nominas_conceptos";

		$fdata["sourceSingle"] = "descripcion_nominas_conceptos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos.descripcion_nominas_conceptos";

	
	
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


	$tdatabox_cat_nominas_conceptos["descripcion_nominas_conceptos"] = $fdata;
		$tdatabox_cat_nominas_conceptos[".searchableFields"][] = "descripcion_nominas_conceptos";
//	cat_nominas_conceptos_clasificacion_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_nominas_conceptos_clasificacion_mu_id";
	$fdata["GoodName"] = "cat_nominas_conceptos_clasificacion_mu_id";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_conceptos","cat_nominas_conceptos_clasificacion_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_conceptos_clasificacion_mu_id";

		$fdata["sourceSingle"] = "cat_nominas_conceptos_clasificacion_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_nominas_conceptos_clasificacion_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_nominas_conceptos_clasificacion_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_nominas_conceptos_clasificacion";

	

	
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


	$tdatabox_cat_nominas_conceptos["cat_nominas_conceptos_clasificacion_mu_id"] = $fdata;
		$tdatabox_cat_nominas_conceptos[".searchableFields"][] = "cat_nominas_conceptos_clasificacion_mu_id";
//	id_clasif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_clasif";
	$fdata["GoodName"] = "id_clasif";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_conceptos","id_clasif");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_nominas_conceptos_clasificacion_mu_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id";

	
	
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


	$tdatabox_cat_nominas_conceptos["id_clasif"] = $fdata;
		$tdatabox_cat_nominas_conceptos[".searchableFields"][] = "id_clasif";
//	cat_nominas_conceptos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_nominas_conceptos_id";
	$fdata["GoodName"] = "cat_nominas_conceptos_id";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_conceptos","cat_nominas_conceptos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_nominas_conceptos_id";

		$fdata["sourceSingle"] = "cat_nominas_conceptos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos.cat_nominas_conceptos_id";

	
	
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


	$tdatabox_cat_nominas_conceptos["cat_nominas_conceptos_id"] = $fdata;
		$tdatabox_cat_nominas_conceptos[".searchableFields"][] = "cat_nominas_conceptos_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_conceptos","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos.capturista";

	
	
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


	$tdatabox_cat_nominas_conceptos["capturista"] = $fdata;
		$tdatabox_cat_nominas_conceptos[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_nominas_conceptos";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_conceptos","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_conceptos.time_stamp";

	
	
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


	$tdatabox_cat_nominas_conceptos["time_stamp"] = $fdata;
		$tdatabox_cat_nominas_conceptos[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_conceptos","cat_usuarios_licencias_id");
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


	$tdatabox_cat_nominas_conceptos["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_nominas_conceptos[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_nominas_conceptos"]=&$tdatabox_cat_nominas_conceptos;
$field_labels["box_cat_nominas_conceptos"] = &$fieldLabelsbox_cat_nominas_conceptos;
$fieldToolTips["box_cat_nominas_conceptos"] = &$fieldToolTipsbox_cat_nominas_conceptos;
$placeHolders["box_cat_nominas_conceptos"] = &$placeHoldersbox_cat_nominas_conceptos;
$page_titles["box_cat_nominas_conceptos"] = &$pageTitlesbox_cat_nominas_conceptos;


changeTextControlsToDate( "box_cat_nominas_conceptos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_nominas_conceptos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_nominas_conceptos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_nominas_conceptos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_nominas_conceptos.vigente,  cat_nominas_conceptos.descripcion_nominas_conceptos,  cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id,  cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id AS id_clasif,  cat_nominas_conceptos.cat_nominas_conceptos_id,  cat_nominas_conceptos.capturista,  cat_nominas_conceptos.time_stamp,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_nominas_conceptos  INNER JOIN cat_usuarios ON cat_nominas_conceptos.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_nominas_conceptos.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_nominas_conceptos.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "box_cat_nominas_conceptos"
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
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "box_cat_nominas_conceptos"
));

$proto6["m_sql"] = "cat_nominas_conceptos.vigente";
$proto6["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_nominas_conceptos",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "box_cat_nominas_conceptos"
));

$proto8["m_sql"] = "cat_nominas_conceptos.descripcion_nominas_conceptos";
$proto8["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_conceptos_clasificacion_mu_id",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "box_cat_nominas_conceptos"
));

$proto10["m_sql"] = "cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id";
$proto10["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_conceptos_clasificacion_mu_id",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "box_cat_nominas_conceptos"
));

$proto12["m_sql"] = "cat_nominas_conceptos.cat_nominas_conceptos_clasificacion_mu_id";
$proto12["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "id_clasif";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_conceptos_id",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "box_cat_nominas_conceptos"
));

$proto14["m_sql"] = "cat_nominas_conceptos.cat_nominas_conceptos_id";
$proto14["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "box_cat_nominas_conceptos"
));

$proto16["m_sql"] = "cat_nominas_conceptos.capturista";
$proto16["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_nominas_conceptos",
	"m_srcTableName" => "box_cat_nominas_conceptos"
));

$proto18["m_sql"] = "cat_nominas_conceptos.time_stamp";
$proto18["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_nominas_conceptos"
));

$proto20["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto20["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "cat_nominas_conceptos";
$proto23["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "vigente";
$proto23["m_columns"][] = "descripcion_nominas_conceptos";
$proto23["m_columns"][] = "cat_nominas_conceptos_clasificacion_mu_id";
$proto23["m_columns"][] = "cat_nominas_conceptos_id";
$proto23["m_columns"][] = "capturista";
$proto23["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "cat_nominas_conceptos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "cat_usuarios";
$proto27["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "cat_usuarios_id";
$proto27["m_columns"][] = "time_stamp";
$proto27["m_columns"][] = "vigente";
$proto27["m_columns"][] = "capturista";
$proto27["m_columns"][] = "usuario";
$proto27["m_columns"][] = "cat_usuarios_licencias_id";
$proto27["m_columns"][] = "pass";
$proto27["m_columns"][] = "nombre";
$proto27["m_columns"][] = "correo";
$proto27["m_columns"][] = "cat_trabajadores_altas_id";
$proto27["m_columns"][] = "res_autorizacion";
$proto27["m_columns"][] = "session";
$proto27["m_columns"][] = "tipo";
$proto27["m_columns"][] = "session_v2";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN cat_usuarios ON cat_nominas_conceptos.capturista = cat_usuarios.usuario";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "box_cat_nominas_conceptos";
$proto28=array();
$proto28["m_sql"] = "cat_usuarios.usuario = cat_nominas_conceptos.capturista";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_nominas_conceptos"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= cat_nominas_conceptos.capturista";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_nominas_conceptos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_nominas_conceptos = createSqlQuery_box_cat_nominas_conceptos();


	
		;

								

$tdatabox_cat_nominas_conceptos[".sqlquery"] = $queryData_box_cat_nominas_conceptos;



$tdatabox_cat_nominas_conceptos[".hasEvents"] = false;

?>