<?php
$tdatacat_ventas_productos_almacenes_categorias1 = array();
$tdatacat_ventas_productos_almacenes_categorias1[".searchableFields"] = array();
$tdatacat_ventas_productos_almacenes_categorias1[".ShortName"] = "cat_ventas_productos_almacenes_categorias1";
$tdatacat_ventas_productos_almacenes_categorias1[".OwnerID"] = "";
$tdatacat_ventas_productos_almacenes_categorias1[".OriginalTable"] = "cat_ventas_productos_almacenes_categorias";


$tdatacat_ventas_productos_almacenes_categorias1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_productos_almacenes_categorias1[".originalPagesByType"] = $tdatacat_ventas_productos_almacenes_categorias1[".pagesByType"];
$tdatacat_ventas_productos_almacenes_categorias1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_productos_almacenes_categorias1[".originalPages"] = $tdatacat_ventas_productos_almacenes_categorias1[".pages"];
$tdatacat_ventas_productos_almacenes_categorias1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_ventas_productos_almacenes_categorias1[".originalDefaultPages"] = $tdatacat_ventas_productos_almacenes_categorias1[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_almacenes_categorias1 = array();
$fieldToolTipscat_ventas_productos_almacenes_categorias1 = array();
$pageTitlescat_ventas_productos_almacenes_categorias1 = array();
$placeHolderscat_ventas_productos_almacenes_categorias1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_almacenes_categorias1["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_almacenes_categorias1["Spanish"] = array();
	$placeHolderscat_ventas_productos_almacenes_categorias1["Spanish"] = array();
	$pageTitlescat_ventas_productos_almacenes_categorias1["Spanish"] = array();
	$fieldLabelscat_ventas_productos_almacenes_categorias1["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_almacenes_categorias1["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_almacenes_categorias1["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_productos_almacenes_categorias1["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_almacenes_categorias1["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_almacenes_categorias1["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_productos_almacenes_categorias1["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_almacenes_categorias1["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_almacenes_categorias1["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_almacenes_categorias1["Spanish"]["imei"] = "Imei";
	$fieldToolTipscat_ventas_productos_almacenes_categorias1["Spanish"]["imei"] = "";
	$placeHolderscat_ventas_productos_almacenes_categorias1["Spanish"]["imei"] = "";
	$fieldLabelscat_ventas_productos_almacenes_categorias1["Spanish"]["cat_ventas_productos_almacenes_categorias_id"] = "Id";
	$fieldToolTipscat_ventas_productos_almacenes_categorias1["Spanish"]["cat_ventas_productos_almacenes_categorias_id"] = "";
	$placeHolderscat_ventas_productos_almacenes_categorias1["Spanish"]["cat_ventas_productos_almacenes_categorias_id"] = "";
	$fieldLabelscat_ventas_productos_almacenes_categorias1["Spanish"]["descripcion_ventas_productos_almacenes_categorias"] = "Descripcion Categorias";
	$fieldToolTipscat_ventas_productos_almacenes_categorias1["Spanish"]["descripcion_ventas_productos_almacenes_categorias"] = "";
	$placeHolderscat_ventas_productos_almacenes_categorias1["Spanish"]["descripcion_ventas_productos_almacenes_categorias"] = "";
	$fieldLabelscat_ventas_productos_almacenes_categorias1["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_ventas_productos_almacenes_categorias1["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_ventas_productos_almacenes_categorias1["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipscat_ventas_productos_almacenes_categorias1["Spanish"]))
		$tdatacat_ventas_productos_almacenes_categorias1[".isUseToolTips"] = true;
}





$tdatacat_ventas_productos_almacenes_categorias1[".shortTableName"] = "cat_ventas_productos_almacenes_categorias1";
$tdatacat_ventas_productos_almacenes_categorias1[".nSecOptions"] = 0;

$tdatacat_ventas_productos_almacenes_categorias1[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_almacenes_categorias1[".entityType"] = 0;
$tdatacat_ventas_productos_almacenes_categorias1[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_almacenes_categorias1[".strOriginalTableName"] = "cat_ventas_productos_almacenes_categorias";

	



$tdatacat_ventas_productos_almacenes_categorias1[".showAddInPopup"] = false;

$tdatacat_ventas_productos_almacenes_categorias1[".showEditInPopup"] = false;

$tdatacat_ventas_productos_almacenes_categorias1[".showViewInPopup"] = false;

$tdatacat_ventas_productos_almacenes_categorias1[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_almacenes_categorias1[".listAjax"] = false;

	$tdatacat_ventas_productos_almacenes_categorias1[".audit"] = true;

	$tdatacat_ventas_productos_almacenes_categorias1[".locking"] = true;


$pages = $tdatacat_ventas_productos_almacenes_categorias1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_almacenes_categorias1[".edit"] = true;
	$tdatacat_ventas_productos_almacenes_categorias1[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_almacenes_categorias1[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_almacenes_categorias1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_almacenes_categorias1[".add"] = true;
$tdatacat_ventas_productos_almacenes_categorias1[".afterAddAction"] = 1;
$tdatacat_ventas_productos_almacenes_categorias1[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_almacenes_categorias1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_almacenes_categorias1[".list"] = true;
}



$tdatacat_ventas_productos_almacenes_categorias1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_almacenes_categorias1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_almacenes_categorias1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_almacenes_categorias1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_almacenes_categorias1[".printFriendly"] = true;
}



$tdatacat_ventas_productos_almacenes_categorias1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_almacenes_categorias1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_almacenes_categorias1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_almacenes_categorias1[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_almacenes_categorias1[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_almacenes_categorias1[".buttonsAdded"] = false;

$tdatacat_ventas_productos_almacenes_categorias1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_almacenes_categorias1[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_almacenes_categorias1[".badgeColor"] = "1E90FF";


$tdatacat_ventas_productos_almacenes_categorias1[".allSearchFields"] = array();
$tdatacat_ventas_productos_almacenes_categorias1[".filterFields"] = array();
$tdatacat_ventas_productos_almacenes_categorias1[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_almacenes_categorias1[".googleLikeFields"] = array();
$tdatacat_ventas_productos_almacenes_categorias1[".googleLikeFields"][] = "cat_ventas_productos_almacenes_categorias_id";
$tdatacat_ventas_productos_almacenes_categorias1[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_productos_almacenes_categorias1[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_almacenes_categorias1[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_almacenes_categorias1[".googleLikeFields"][] = "imei";
$tdatacat_ventas_productos_almacenes_categorias1[".googleLikeFields"][] = "descripcion_ventas_productos_almacenes_categorias";
$tdatacat_ventas_productos_almacenes_categorias1[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_ventas_productos_almacenes_categorias1[".tableType"] = "list";

$tdatacat_ventas_productos_almacenes_categorias1[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_almacenes_categorias1[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_almacenes_categorias1[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_almacenes_categorias1[".geocodingEnabled"] = false;





$tdatacat_ventas_productos_almacenes_categorias1[".isResizeColumns"] = true;





$tdatacat_ventas_productos_almacenes_categorias1[".pageSize"] = 20;

$tdatacat_ventas_productos_almacenes_categorias1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_almacenes_categorias1[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_almacenes_categorias1[".orderindexes"] = array();


$tdatacat_ventas_productos_almacenes_categorias1[".sqlHead"] = "SELECT cat_ventas_productos_almacenes_categorias.cat_ventas_productos_almacenes_categorias_id,  cat_ventas_productos_almacenes_categorias.time_stamp,  cat_ventas_productos_almacenes_categorias.vigente,  cat_ventas_productos_almacenes_categorias.capturista,  cat_ventas_productos_almacenes_categorias.imei,  cat_ventas_productos_almacenes_categorias.descripcion_ventas_productos_almacenes_categorias,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_ventas_productos_almacenes_categorias1[".sqlFrom"] = "FROM cat_ventas_productos_almacenes_categorias  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_almacenes_categorias.capturista = cat_usuarios.usuario";
$tdatacat_ventas_productos_almacenes_categorias1[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_almacenes_categorias1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_almacenes_categorias1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_almacenes_categorias1[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_almacenes_categorias1[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_almacenes_categorias1 = array();
$tableKeyscat_ventas_productos_almacenes_categorias1[] = "cat_ventas_productos_almacenes_categorias_id";
$tdatacat_ventas_productos_almacenes_categorias1[".Keys"] = $tableKeyscat_ventas_productos_almacenes_categorias1;


$tdatacat_ventas_productos_almacenes_categorias1[".hideMobileList"] = array();




//	cat_ventas_productos_almacenes_categorias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_almacenes_categorias_id";
	$fdata["GoodName"] = "cat_ventas_productos_almacenes_categorias_id";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes_categorias";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_categorias","cat_ventas_productos_almacenes_categorias_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_almacenes_categorias_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_almacenes_categorias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes_categorias.cat_ventas_productos_almacenes_categorias_id";

	
	
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


	$tdatacat_ventas_productos_almacenes_categorias1["cat_ventas_productos_almacenes_categorias_id"] = $fdata;
		$tdatacat_ventas_productos_almacenes_categorias1[".searchableFields"][] = "cat_ventas_productos_almacenes_categorias_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes_categorias";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_categorias","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes_categorias.time_stamp";

	
	
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


	$tdatacat_ventas_productos_almacenes_categorias1["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_almacenes_categorias1[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes_categorias";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_categorias","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes_categorias.vigente";

	
	
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


	$tdatacat_ventas_productos_almacenes_categorias1["vigente"] = $fdata;
		$tdatacat_ventas_productos_almacenes_categorias1[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes_categorias";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_categorias","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes_categorias.capturista";

	
	
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


	$tdatacat_ventas_productos_almacenes_categorias1["capturista"] = $fdata;
		$tdatacat_ventas_productos_almacenes_categorias1[".searchableFields"][] = "capturista";
//	imei
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "imei";
	$fdata["GoodName"] = "imei";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes_categorias";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_categorias","imei");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "imei";

		$fdata["sourceSingle"] = "imei";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes_categorias.imei";

	
	
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


	$tdatacat_ventas_productos_almacenes_categorias1["imei"] = $fdata;
		$tdatacat_ventas_productos_almacenes_categorias1[".searchableFields"][] = "imei";
//	descripcion_ventas_productos_almacenes_categorias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "descripcion_ventas_productos_almacenes_categorias";
	$fdata["GoodName"] = "descripcion_ventas_productos_almacenes_categorias";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes_categorias";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_categorias","descripcion_ventas_productos_almacenes_categorias");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_productos_almacenes_categorias";

		$fdata["sourceSingle"] = "descripcion_ventas_productos_almacenes_categorias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes_categorias.descripcion_ventas_productos_almacenes_categorias";

	
	
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


	$tdatacat_ventas_productos_almacenes_categorias1["descripcion_ventas_productos_almacenes_categorias"] = $fdata;
		$tdatacat_ventas_productos_almacenes_categorias1[".searchableFields"][] = "descripcion_ventas_productos_almacenes_categorias";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_categorias","cat_usuarios_licencias_id");
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


	$tdatacat_ventas_productos_almacenes_categorias1["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_ventas_productos_almacenes_categorias1[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_ventas_productos_almacenes_categorias"]=&$tdatacat_ventas_productos_almacenes_categorias1;
$field_labels["cat_ventas_productos_almacenes_categorias"] = &$fieldLabelscat_ventas_productos_almacenes_categorias1;
$fieldToolTips["cat_ventas_productos_almacenes_categorias"] = &$fieldToolTipscat_ventas_productos_almacenes_categorias1;
$placeHolders["cat_ventas_productos_almacenes_categorias"] = &$placeHolderscat_ventas_productos_almacenes_categorias1;
$page_titles["cat_ventas_productos_almacenes_categorias"] = &$pageTitlescat_ventas_productos_almacenes_categorias1;


changeTextControlsToDate( "cat_ventas_productos_almacenes_categorias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_almacenes_categorias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_almacenes_categorias"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_almacenes_categorias1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_almacenes_categorias.cat_ventas_productos_almacenes_categorias_id,  cat_ventas_productos_almacenes_categorias.time_stamp,  cat_ventas_productos_almacenes_categorias.vigente,  cat_ventas_productos_almacenes_categorias.capturista,  cat_ventas_productos_almacenes_categorias.imei,  cat_ventas_productos_almacenes_categorias.descripcion_ventas_productos_almacenes_categorias,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_almacenes_categorias  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_almacenes_categorias.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_ventas_productos_almacenes_categorias_id",
	"m_strTable" => "cat_ventas_productos_almacenes_categorias",
	"m_srcTableName" => "cat_ventas_productos_almacenes_categorias"
));

$proto6["m_sql"] = "cat_ventas_productos_almacenes_categorias.cat_ventas_productos_almacenes_categorias_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_almacenes_categorias",
	"m_srcTableName" => "cat_ventas_productos_almacenes_categorias"
));

$proto8["m_sql"] = "cat_ventas_productos_almacenes_categorias.time_stamp";
$proto8["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_almacenes_categorias",
	"m_srcTableName" => "cat_ventas_productos_almacenes_categorias"
));

$proto10["m_sql"] = "cat_ventas_productos_almacenes_categorias.vigente";
$proto10["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_almacenes_categorias",
	"m_srcTableName" => "cat_ventas_productos_almacenes_categorias"
));

$proto12["m_sql"] = "cat_ventas_productos_almacenes_categorias.capturista";
$proto12["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "imei",
	"m_strTable" => "cat_ventas_productos_almacenes_categorias",
	"m_srcTableName" => "cat_ventas_productos_almacenes_categorias"
));

$proto14["m_sql"] = "cat_ventas_productos_almacenes_categorias.imei";
$proto14["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_almacenes_categorias",
	"m_strTable" => "cat_ventas_productos_almacenes_categorias",
	"m_srcTableName" => "cat_ventas_productos_almacenes_categorias"
));

$proto16["m_sql"] = "cat_ventas_productos_almacenes_categorias.descripcion_ventas_productos_almacenes_categorias";
$proto16["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_almacenes_categorias"
));

$proto18["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto18["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "cat_ventas_productos_almacenes_categorias";
$proto21["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_ventas_productos_almacenes_categorias_id";
$proto21["m_columns"][] = "time_stamp";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "imei";
$proto21["m_columns"][] = "descripcion_ventas_productos_almacenes_categorias";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "cat_ventas_productos_almacenes_categorias";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
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
												$proto24=array();
$proto24["m_link"] = "SQLL_LEFTJOIN";
			$proto25=array();
$proto25["m_strName"] = "cat_usuarios";
$proto25["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "cat_usuarios_id";
$proto25["m_columns"][] = "time_stamp";
$proto25["m_columns"][] = "vigente";
$proto25["m_columns"][] = "capturista";
$proto25["m_columns"][] = "usuario";
$proto25["m_columns"][] = "cat_usuarios_licencias_id";
$proto25["m_columns"][] = "pass";
$proto25["m_columns"][] = "nombre";
$proto25["m_columns"][] = "correo";
$proto25["m_columns"][] = "cat_trabajadores_altas_id";
$proto25["m_columns"][] = "res_autorizacion";
$proto25["m_columns"][] = "session";
$proto25["m_columns"][] = "tipo";
$proto25["m_columns"][] = "session_v2";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_almacenes_categorias.capturista = cat_usuarios.usuario";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cat_ventas_productos_almacenes_categorias";
$proto26=array();
$proto26["m_sql"] = "cat_usuarios.usuario = cat_ventas_productos_almacenes_categorias.capturista";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_almacenes_categorias"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= cat_ventas_productos_almacenes_categorias.capturista";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_almacenes_categorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_almacenes_categorias1 = createSqlQuery_cat_ventas_productos_almacenes_categorias1();


	
		;

							

$tdatacat_ventas_productos_almacenes_categorias1[".sqlquery"] = $queryData_cat_ventas_productos_almacenes_categorias1;



$tdatacat_ventas_productos_almacenes_categorias1[".hasEvents"] = false;

?>