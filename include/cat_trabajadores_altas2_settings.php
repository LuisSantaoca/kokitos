<?php
$tdatacat_trabajadores_altas2 = array();
$tdatacat_trabajadores_altas2[".searchableFields"] = array();
$tdatacat_trabajadores_altas2[".ShortName"] = "cat_trabajadores_altas2";
$tdatacat_trabajadores_altas2[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_altas2[".OriginalTable"] = "cat_trabajadores_altas";


$tdatacat_trabajadores_altas2[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_altas2[".originalPagesByType"] = $tdatacat_trabajadores_altas2[".pagesByType"];
$tdatacat_trabajadores_altas2[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_altas2[".originalPages"] = $tdatacat_trabajadores_altas2[".pages"];
$tdatacat_trabajadores_altas2[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_trabajadores_altas2[".originalDefaultPages"] = $tdatacat_trabajadores_altas2[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_altas2 = array();
$fieldToolTipscat_trabajadores_altas2 = array();
$pageTitlescat_trabajadores_altas2 = array();
$placeHolderscat_trabajadores_altas2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_altas2["Spanish"] = array();
	$fieldToolTipscat_trabajadores_altas2["Spanish"] = array();
	$placeHolderscat_trabajadores_altas2["Spanish"] = array();
	$pageTitlescat_trabajadores_altas2["Spanish"] = array();
	$fieldLabelscat_trabajadores_altas2["Spanish"]["cat_trabajadores_altas_id"] = "trab_id";
	$fieldToolTipscat_trabajadores_altas2["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_altas2["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_altas2["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_altas2["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_altas2["Spanish"]["vigente"] = "";
	$fieldLabelscat_trabajadores_altas2["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipscat_trabajadores_altas2["Spanish"]["nombre_completo"] = "";
	$placeHolderscat_trabajadores_altas2["Spanish"]["nombre_completo"] = "";
	$fieldLabelscat_trabajadores_altas2["Spanish"]["nombre_completook"] = "Nombre Completo";
	$fieldToolTipscat_trabajadores_altas2["Spanish"]["nombre_completook"] = "";
	$placeHolderscat_trabajadores_altas2["Spanish"]["nombre_completook"] = "";
	$fieldLabelscat_trabajadores_altas2["Spanish"]["cat_trabajadores_altas_id_empresa"] = "id_empresa";
	$fieldToolTipscat_trabajadores_altas2["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderscat_trabajadores_altas2["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelscat_trabajadores_altas2["Spanish"]["fecha_de_ingreso"] = "Ingreso";
	$fieldToolTipscat_trabajadores_altas2["Spanish"]["fecha_de_ingreso"] = "";
	$placeHolderscat_trabajadores_altas2["Spanish"]["fecha_de_ingreso"] = "";
	$fieldLabelscat_trabajadores_altas2["Spanish"]["cat_trabajadores_alta_baja_mu_id"] = "Cat Trabajadores Alta Baja Mu Id";
	$fieldToolTipscat_trabajadores_altas2["Spanish"]["cat_trabajadores_alta_baja_mu_id"] = "";
	$placeHolderscat_trabajadores_altas2["Spanish"]["cat_trabajadores_alta_baja_mu_id"] = "";
	$fieldLabelscat_trabajadores_altas2["Spanish"]["descripcion_alta_baja"] = "Descripcion Alta Baja";
	$fieldToolTipscat_trabajadores_altas2["Spanish"]["descripcion_alta_baja"] = "";
	$placeHolderscat_trabajadores_altas2["Spanish"]["descripcion_alta_baja"] = "";
	$fieldLabelscat_trabajadores_altas2["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipscat_trabajadores_altas2["Spanish"]["fecha"] = "";
	$placeHolderscat_trabajadores_altas2["Spanish"]["fecha"] = "";
	if (count($fieldToolTipscat_trabajadores_altas2["Spanish"]))
		$tdatacat_trabajadores_altas2[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_altas2[".shortTableName"] = "cat_trabajadores_altas2";
$tdatacat_trabajadores_altas2[".nSecOptions"] = 0;

$tdatacat_trabajadores_altas2[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_altas2[".entityType"] = 1;
$tdatacat_trabajadores_altas2[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_altas2[".strOriginalTableName"] = "cat_trabajadores_altas";

	



$tdatacat_trabajadores_altas2[".showAddInPopup"] = false;

$tdatacat_trabajadores_altas2[".showEditInPopup"] = false;

$tdatacat_trabajadores_altas2[".showViewInPopup"] = false;

$tdatacat_trabajadores_altas2[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_altas2[".listAjax"] = false;

	$tdatacat_trabajadores_altas2[".audit"] = true;

	$tdatacat_trabajadores_altas2[".locking"] = true;


$pages = $tdatacat_trabajadores_altas2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_altas2[".edit"] = true;
	$tdatacat_trabajadores_altas2[".afterEditAction"] = 1;
	$tdatacat_trabajadores_altas2[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_altas2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_altas2[".add"] = true;
$tdatacat_trabajadores_altas2[".afterAddAction"] = 1;
$tdatacat_trabajadores_altas2[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_altas2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_altas2[".list"] = true;
}



$tdatacat_trabajadores_altas2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_altas2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_altas2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_altas2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_altas2[".printFriendly"] = true;
}



$tdatacat_trabajadores_altas2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_altas2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_altas2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_altas2[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_altas2[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_altas2[".buttonsAdded"] = false;

$tdatacat_trabajadores_altas2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_altas2[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_altas2[".badgeColor"] = "D2AF80";


$tdatacat_trabajadores_altas2[".allSearchFields"] = array();
$tdatacat_trabajadores_altas2[".filterFields"] = array();
$tdatacat_trabajadores_altas2[".requiredSearchFields"] = array();

$tdatacat_trabajadores_altas2[".googleLikeFields"] = array();
$tdatacat_trabajadores_altas2[".googleLikeFields"][] = "nombre_completook";
$tdatacat_trabajadores_altas2[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas2[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatacat_trabajadores_altas2[".googleLikeFields"][] = "nombre_completo";
$tdatacat_trabajadores_altas2[".googleLikeFields"][] = "cat_trabajadores_alta_baja_mu_id";
$tdatacat_trabajadores_altas2[".googleLikeFields"][] = "descripcion_alta_baja";
$tdatacat_trabajadores_altas2[".googleLikeFields"][] = "vigente";
$tdatacat_trabajadores_altas2[".googleLikeFields"][] = "fecha_de_ingreso";
$tdatacat_trabajadores_altas2[".googleLikeFields"][] = "fecha";



$tdatacat_trabajadores_altas2[".tableType"] = "list";

$tdatacat_trabajadores_altas2[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_altas2[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_altas2[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_altas2[".geocodingEnabled"] = false;





$tdatacat_trabajadores_altas2[".isResizeColumns"] = true;





$tdatacat_trabajadores_altas2[".pageSize"] = 20;

$tdatacat_trabajadores_altas2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_altas2[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_altas2[".orderindexes"] = array();


$tdatacat_trabajadores_altas2[".sqlHead"] = "SELECT concat(if(apellido_paterno is null,0,apellido_paterno), ' ', if(apellido_materno is null,0,apellido_materno), ' ', if(primer_nombre is null,0,primer_nombre), ' ', if(segundo_nombre is null, 0, segundo_nombre)) AS nombre_completook,  cat_trabajadores_altas.cat_trabajadores_altas_id,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  cat_trabajadores_altas.nombre_completo,  cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id,  cat_trabajadores_alta_baja_mu.descripcion_alta_baja,  cat_trabajadores_altas.vigente,  cat_trabajadores_altas.fecha_de_ingreso,  cat_trabajadores_reingresos.fecha";
$tdatacat_trabajadores_altas2[".sqlFrom"] = "FROM cat_trabajadores_altas  LEFT OUTER JOIN cat_trabajadores_reingresos ON cat_trabajadores_altas.cat_trabajadores_altas_id = cat_trabajadores_reingresos.cat_trabajadores_altas_id  LEFT OUTER JOIN cat_trabajadores_alta_baja_mu ON cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id = cat_trabajadores_alta_baja_mu.cat_trabajadores_alta_baja_mu_id";
$tdatacat_trabajadores_altas2[".sqlWhereExpr"] = "(cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id =1) AND (cat_trabajadores_altas.vigente =1)";
$tdatacat_trabajadores_altas2[".sqlTail"] = "";

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
$tdatacat_trabajadores_altas2[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_altas2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_altas2[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_altas2[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_altas2 = array();
$tableKeyscat_trabajadores_altas2[] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas2[".Keys"] = $tableKeyscat_trabajadores_altas2;


$tdatacat_trabajadores_altas2[".hideMobileList"] = array();




//	nombre_completook
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nombre_completook";
	$fdata["GoodName"] = "nombre_completook";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas2","nombre_completook");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completook";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(if(apellido_paterno is null,0,apellido_paterno), ' ', if(apellido_materno is null,0,apellido_materno), ' ', if(primer_nombre is null,0,primer_nombre), ' ', if(segundo_nombre is null, 0, segundo_nombre))";

	
	
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


	$tdatacat_trabajadores_altas2["nombre_completook"] = $fdata;
		$tdatacat_trabajadores_altas2[".searchableFields"][] = "nombre_completook";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas2","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";

	
	
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


	$tdatacat_trabajadores_altas2["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_altas2[".searchableFields"][] = "cat_trabajadores_altas_id";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas2","cat_trabajadores_altas_id_empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id_empresa";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id_empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";

	
	
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


	$tdatacat_trabajadores_altas2["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatacat_trabajadores_altas2[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas2","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

		$fdata["sourceSingle"] = "nombre_completo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.nombre_completo";

	
	
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


	$tdatacat_trabajadores_altas2["nombre_completo"] = $fdata;
		$tdatacat_trabajadores_altas2[".searchableFields"][] = "nombre_completo";
//	cat_trabajadores_alta_baja_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cat_trabajadores_alta_baja_mu_id";
	$fdata["GoodName"] = "cat_trabajadores_alta_baja_mu_id";
	$fdata["ownerTable"] = "cat_trabajadores_reingresos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas2","cat_trabajadores_alta_baja_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_alta_baja_mu_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id";

	
	
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


	$tdatacat_trabajadores_altas2["cat_trabajadores_alta_baja_mu_id"] = $fdata;
		$tdatacat_trabajadores_altas2[".searchableFields"][] = "cat_trabajadores_alta_baja_mu_id";
//	descripcion_alta_baja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descripcion_alta_baja";
	$fdata["GoodName"] = "descripcion_alta_baja";
	$fdata["ownerTable"] = "cat_trabajadores_alta_baja_mu";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas2","descripcion_alta_baja");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_alta_baja";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_alta_baja_mu.descripcion_alta_baja";

	
	
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


	$tdatacat_trabajadores_altas2["descripcion_alta_baja"] = $fdata;
		$tdatacat_trabajadores_altas2[".searchableFields"][] = "descripcion_alta_baja";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas2","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.vigente";

	
	
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


	$tdatacat_trabajadores_altas2["vigente"] = $fdata;
		$tdatacat_trabajadores_altas2[".searchableFields"][] = "vigente";
//	fecha_de_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fecha_de_ingreso";
	$fdata["GoodName"] = "fecha_de_ingreso";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas2","fecha_de_ingreso");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_ingreso";

		$fdata["sourceSingle"] = "fecha_de_ingreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.fecha_de_ingreso";

	
	
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


	$tdatacat_trabajadores_altas2["fecha_de_ingreso"] = $fdata;
		$tdatacat_trabajadores_altas2[".searchableFields"][] = "fecha_de_ingreso";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "cat_trabajadores_reingresos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas2","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_reingresos.fecha";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacat_trabajadores_altas2["fecha"] = $fdata;
		$tdatacat_trabajadores_altas2[".searchableFields"][] = "fecha";


$tables_data["cat_trabajadores_altas2"]=&$tdatacat_trabajadores_altas2;
$field_labels["cat_trabajadores_altas2"] = &$fieldLabelscat_trabajadores_altas2;
$fieldToolTips["cat_trabajadores_altas2"] = &$fieldToolTipscat_trabajadores_altas2;
$placeHolders["cat_trabajadores_altas2"] = &$placeHolderscat_trabajadores_altas2;
$page_titles["cat_trabajadores_altas2"] = &$pageTitlescat_trabajadores_altas2;


changeTextControlsToDate( "cat_trabajadores_altas2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_altas2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_altas2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_altas2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "concat(if(apellido_paterno is null,0,apellido_paterno), ' ', if(apellido_materno is null,0,apellido_materno), ' ', if(primer_nombre is null,0,primer_nombre), ' ', if(segundo_nombre is null, 0, segundo_nombre)) AS nombre_completook,  cat_trabajadores_altas.cat_trabajadores_altas_id,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  cat_trabajadores_altas.nombre_completo,  cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id,  cat_trabajadores_alta_baja_mu.descripcion_alta_baja,  cat_trabajadores_altas.vigente,  cat_trabajadores_altas.fecha_de_ingreso,  cat_trabajadores_reingresos.fecha";
$proto0["m_strFrom"] = "FROM cat_trabajadores_altas  LEFT OUTER JOIN cat_trabajadores_reingresos ON cat_trabajadores_altas.cat_trabajadores_altas_id = cat_trabajadores_reingresos.cat_trabajadores_altas_id  LEFT OUTER JOIN cat_trabajadores_alta_baja_mu ON cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id = cat_trabajadores_alta_baja_mu.cat_trabajadores_alta_baja_mu_id";
$proto0["m_strWhere"] = "(cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id =1) AND (cat_trabajadores_altas.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id =1) AND (cat_trabajadores_altas.vigente =1)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id =1) AND (cat_trabajadores_altas.vigente =1)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_alta_baja_mu_id",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "cat_trabajadores_altas.vigente =1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(apellido_paterno is null,0,apellido_paterno)"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(apellido_materno is null,0,apellido_materno)"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(primer_nombre is null,0,primer_nombre)"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(segundo_nombre is null, 0, segundo_nombre)"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "concat(if(apellido_paterno is null,0,apellido_paterno), ' ', if(apellido_materno is null,0,apellido_materno), ' ', if(primer_nombre is null,0,primer_nombre), ' ', if(segundo_nombre is null, 0, segundo_nombre))";
$proto10["m_srcTableName"] = "cat_trabajadores_altas2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "nombre_completook";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto19["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto19["m_srcTableName"] = "cat_trabajadores_altas2";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto21["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto21["m_srcTableName"] = "cat_trabajadores_altas2";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto23["m_sql"] = "cat_trabajadores_altas.nombre_completo";
$proto23["m_srcTableName"] = "cat_trabajadores_altas2";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_alta_baja_mu_id",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto25["m_sql"] = "cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id";
$proto25["m_srcTableName"] = "cat_trabajadores_altas2";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_alta_baja",
	"m_strTable" => "cat_trabajadores_alta_baja_mu",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto27["m_sql"] = "cat_trabajadores_alta_baja_mu.descripcion_alta_baja";
$proto27["m_srcTableName"] = "cat_trabajadores_altas2";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto29["m_sql"] = "cat_trabajadores_altas.vigente";
$proto29["m_srcTableName"] = "cat_trabajadores_altas2";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_ingreso",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto31["m_sql"] = "cat_trabajadores_altas.fecha_de_ingreso";
$proto31["m_srcTableName"] = "cat_trabajadores_altas2";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto33["m_sql"] = "cat_trabajadores_reingresos.fecha";
$proto33["m_srcTableName"] = "cat_trabajadores_altas2";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "cat_trabajadores_altas";
$proto36["m_srcTableName"] = "cat_trabajadores_altas2";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "cat_trabajadores_altas_id";
$proto36["m_columns"][] = "time_stamp";
$proto36["m_columns"][] = "capturista";
$proto36["m_columns"][] = "vigente";
$proto36["m_columns"][] = "fecha_de_registro";
$proto36["m_columns"][] = "apellido_paterno";
$proto36["m_columns"][] = "apellido_materno";
$proto36["m_columns"][] = "primer_nombre";
$proto36["m_columns"][] = "segundo_nombre";
$proto36["m_columns"][] = "rfc";
$proto36["m_columns"][] = "curp";
$proto36["m_columns"][] = "num_seguridad_social";
$proto36["m_columns"][] = "municipio_nacimiento";
$proto36["m_columns"][] = "estado_nacimiento";
$proto36["m_columns"][] = "nacionalidad";
$proto36["m_columns"][] = "telefono_emergencia";
$proto36["m_columns"][] = "contacto_emergencia";
$proto36["m_columns"][] = "nombre_completo";
$proto36["m_columns"][] = "fecha_de_nacimiento";
$proto36["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto36["m_columns"][] = "celular_mensajes";
$proto36["m_columns"][] = "permiso_msm";
$proto36["m_columns"][] = "estatus";
$proto36["m_columns"][] = "fecha_de_captura";
$proto36["m_columns"][] = "face_id";
$proto36["m_columns"][] = "tr_tags_numero_asignado";
$proto36["m_columns"][] = "cat_trabajadores_puestos_id";
$proto36["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto36["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto36["m_columns"][] = "calle";
$proto36["m_columns"][] = "colonia";
$proto36["m_columns"][] = "municipio";
$proto36["m_columns"][] = "estado";
$proto36["m_columns"][] = "codigo_postal";
$proto36["m_columns"][] = "banco";
$proto36["m_columns"][] = "cuenta_bancaria";
$proto36["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto36["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto36["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto36["m_columns"][] = "cat_holding_02_empresas";
$proto36["m_columns"][] = "fecha_de_ingreso";
$proto36["m_columns"][] = "numero_domicilio";
$proto36["m_columns"][] = "observaciones";
$proto36["m_columns"][] = "link_foto";
$proto36["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto36["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "cat_trabajadores_altas";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "cat_trabajadores_altas2";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_LEFTJOIN";
			$proto40=array();
$proto40["m_strName"] = "cat_trabajadores_reingresos";
$proto40["m_srcTableName"] = "cat_trabajadores_altas2";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "cat_trabajadores_reingresos_id";
$proto40["m_columns"][] = "cat_trabajadores_altas_id";
$proto40["m_columns"][] = "fecha";
$proto40["m_columns"][] = "cat_trabajadores_alta_baja_mu_id";
$proto40["m_columns"][] = "observaciones";
$proto40["m_columns"][] = "vigente";
$proto40["m_columns"][] = "capturista";
$proto40["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_reingresos ON cat_trabajadores_altas.cat_trabajadores_altas_id = cat_trabajadores_reingresos.cat_trabajadores_altas_id";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "cat_trabajadores_altas2";
$proto41=array();
$proto41["m_sql"] = "cat_trabajadores_reingresos.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_reingresos",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_LEFTJOIN";
			$proto44=array();
$proto44["m_strName"] = "cat_trabajadores_alta_baja_mu";
$proto44["m_srcTableName"] = "cat_trabajadores_altas2";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "cat_trabajadores_alta_baja_mu_id";
$proto44["m_columns"][] = "descripcion_alta_baja";
$proto44["m_columns"][] = "vigente";
$proto44["m_columns"][] = "capturista";
$proto44["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_alta_baja_mu ON cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id = cat_trabajadores_alta_baja_mu.cat_trabajadores_alta_baja_mu_id";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "cat_trabajadores_altas2";
$proto45=array();
$proto45["m_sql"] = "cat_trabajadores_alta_baja_mu.cat_trabajadores_alta_baja_mu_id = cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_alta_baja_mu_id",
	"m_strTable" => "cat_trabajadores_alta_baja_mu",
	"m_srcTableName" => "cat_trabajadores_altas2"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= cat_trabajadores_reingresos.cat_trabajadores_alta_baja_mu_id";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_altas2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_altas2 = createSqlQuery_cat_trabajadores_altas2();


	
		;

									

$tdatacat_trabajadores_altas2[".sqlquery"] = $queryData_cat_trabajadores_altas2;



$tdatacat_trabajadores_altas2[".hasEvents"] = false;

?>