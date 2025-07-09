<?php
$tdatacat_ventas_productos_almacenes_box = array();
$tdatacat_ventas_productos_almacenes_box[".searchableFields"] = array();
$tdatacat_ventas_productos_almacenes_box[".ShortName"] = "cat_ventas_productos_almacenes_box";
$tdatacat_ventas_productos_almacenes_box[".OwnerID"] = "";
$tdatacat_ventas_productos_almacenes_box[".OriginalTable"] = "cat_ventas_productos_almacenes";


$tdatacat_ventas_productos_almacenes_box[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_productos_almacenes_box[".originalPagesByType"] = $tdatacat_ventas_productos_almacenes_box[".pagesByType"];
$tdatacat_ventas_productos_almacenes_box[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_productos_almacenes_box[".originalPages"] = $tdatacat_ventas_productos_almacenes_box[".pages"];
$tdatacat_ventas_productos_almacenes_box[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_ventas_productos_almacenes_box[".originalDefaultPages"] = $tdatacat_ventas_productos_almacenes_box[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_productos_almacenes_box = array();
$fieldToolTipscat_ventas_productos_almacenes_box = array();
$pageTitlescat_ventas_productos_almacenes_box = array();
$placeHolderscat_ventas_productos_almacenes_box = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_productos_almacenes_box["Spanish"] = array();
	$fieldToolTipscat_ventas_productos_almacenes_box["Spanish"] = array();
	$placeHolderscat_ventas_productos_almacenes_box["Spanish"] = array();
	$pageTitlescat_ventas_productos_almacenes_box["Spanish"] = array();
	$fieldLabelscat_ventas_productos_almacenes_box["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_productos_almacenes_box["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_productos_almacenes_box["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_productos_almacenes_box["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_productos_almacenes_box["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_productos_almacenes_box["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_productos_almacenes_box["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_productos_almacenes_box["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_productos_almacenes_box["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_productos_almacenes_box["Spanish"]["cat_ventas_productos_almacenes_id"] = "Id";
	$fieldToolTipscat_ventas_productos_almacenes_box["Spanish"]["cat_ventas_productos_almacenes_id"] = "";
	$placeHolderscat_ventas_productos_almacenes_box["Spanish"]["cat_ventas_productos_almacenes_id"] = "";
	$fieldLabelscat_ventas_productos_almacenes_box["Spanish"]["descripcion_ventas_productos_almacenes"] = "Descripcion Almacenes";
	$fieldToolTipscat_ventas_productos_almacenes_box["Spanish"]["descripcion_ventas_productos_almacenes"] = "";
	$placeHolderscat_ventas_productos_almacenes_box["Spanish"]["descripcion_ventas_productos_almacenes"] = "";
	$fieldLabelscat_ventas_productos_almacenes_box["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipscat_ventas_productos_almacenes_box["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderscat_ventas_productos_almacenes_box["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelscat_ventas_productos_almacenes_box["Spanish"]["cat_ventas_productos_almacenes_categorias_id"] = "Almacenes Categorias Id";
	$fieldToolTipscat_ventas_productos_almacenes_box["Spanish"]["cat_ventas_productos_almacenes_categorias_id"] = "";
	$placeHolderscat_ventas_productos_almacenes_box["Spanish"]["cat_ventas_productos_almacenes_categorias_id"] = "";
	if (count($fieldToolTipscat_ventas_productos_almacenes_box["Spanish"]))
		$tdatacat_ventas_productos_almacenes_box[".isUseToolTips"] = true;
}





$tdatacat_ventas_productos_almacenes_box[".shortTableName"] = "cat_ventas_productos_almacenes_box";
$tdatacat_ventas_productos_almacenes_box[".nSecOptions"] = 0;

$tdatacat_ventas_productos_almacenes_box[".mainTableOwnerID"] = "";
$tdatacat_ventas_productos_almacenes_box[".entityType"] = 1;
$tdatacat_ventas_productos_almacenes_box[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_productos_almacenes_box[".strOriginalTableName"] = "cat_ventas_productos_almacenes";

	



$tdatacat_ventas_productos_almacenes_box[".showAddInPopup"] = false;

$tdatacat_ventas_productos_almacenes_box[".showEditInPopup"] = false;

$tdatacat_ventas_productos_almacenes_box[".showViewInPopup"] = false;

$tdatacat_ventas_productos_almacenes_box[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_productos_almacenes_box[".listAjax"] = false;

	$tdatacat_ventas_productos_almacenes_box[".audit"] = true;

	$tdatacat_ventas_productos_almacenes_box[".locking"] = true;


$pages = $tdatacat_ventas_productos_almacenes_box[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_productos_almacenes_box[".edit"] = true;
	$tdatacat_ventas_productos_almacenes_box[".afterEditAction"] = 1;
	$tdatacat_ventas_productos_almacenes_box[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_productos_almacenes_box[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_productos_almacenes_box[".add"] = true;
$tdatacat_ventas_productos_almacenes_box[".afterAddAction"] = 1;
$tdatacat_ventas_productos_almacenes_box[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_productos_almacenes_box[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_productos_almacenes_box[".list"] = true;
}



$tdatacat_ventas_productos_almacenes_box[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_productos_almacenes_box[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_productos_almacenes_box[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_productos_almacenes_box[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_productos_almacenes_box[".printFriendly"] = true;
}



$tdatacat_ventas_productos_almacenes_box[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_productos_almacenes_box[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_productos_almacenes_box[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_productos_almacenes_box[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_productos_almacenes_box[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_productos_almacenes_box[".buttonsAdded"] = false;

$tdatacat_ventas_productos_almacenes_box[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_productos_almacenes_box[".isUseTimeForSearch"] = false;


$tdatacat_ventas_productos_almacenes_box[".badgeColor"] = "6B8E23";


$tdatacat_ventas_productos_almacenes_box[".allSearchFields"] = array();
$tdatacat_ventas_productos_almacenes_box[".filterFields"] = array();
$tdatacat_ventas_productos_almacenes_box[".requiredSearchFields"] = array();

$tdatacat_ventas_productos_almacenes_box[".googleLikeFields"] = array();
$tdatacat_ventas_productos_almacenes_box[".googleLikeFields"][] = "cat_ventas_productos_almacenes_id";
$tdatacat_ventas_productos_almacenes_box[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_productos_almacenes_box[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_productos_almacenes_box[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_productos_almacenes_box[".googleLikeFields"][] = "descripcion_ventas_productos_almacenes";
$tdatacat_ventas_productos_almacenes_box[".googleLikeFields"][] = "cat_ventas_productos_almacenes_categorias_id";
$tdatacat_ventas_productos_almacenes_box[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatacat_ventas_productos_almacenes_box[".tableType"] = "list";

$tdatacat_ventas_productos_almacenes_box[".printerPageOrientation"] = 0;
$tdatacat_ventas_productos_almacenes_box[".nPrinterPageScale"] = 100;

$tdatacat_ventas_productos_almacenes_box[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_productos_almacenes_box[".geocodingEnabled"] = false;





$tdatacat_ventas_productos_almacenes_box[".isResizeColumns"] = true;





$tdatacat_ventas_productos_almacenes_box[".pageSize"] = 20;

$tdatacat_ventas_productos_almacenes_box[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_ventas_productos_almacenes_box[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_productos_almacenes_box[".orderindexes"] = array();


$tdatacat_ventas_productos_almacenes_box[".sqlHead"] = "SELECT cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_id,  cat_ventas_productos_almacenes.time_stamp,  cat_ventas_productos_almacenes.vigente,  cat_ventas_productos_almacenes.capturista,  cat_ventas_productos_almacenes.descripcion_ventas_productos_almacenes,  cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_categorias_id,  cat_usuarios.cat_usuarios_licencias_id";
$tdatacat_ventas_productos_almacenes_box[".sqlFrom"] = "FROM cat_ventas_productos_almacenes  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_almacenes.capturista = cat_usuarios.usuario";
$tdatacat_ventas_productos_almacenes_box[".sqlWhereExpr"] = "";
$tdatacat_ventas_productos_almacenes_box[".sqlTail"] = "";

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
$tdatacat_ventas_productos_almacenes_box[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_productos_almacenes_box[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_productos_almacenes_box[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_productos_almacenes_box[".highlightSearchResults"] = true;

$tableKeyscat_ventas_productos_almacenes_box = array();
$tableKeyscat_ventas_productos_almacenes_box[] = "cat_ventas_productos_almacenes_id";
$tdatacat_ventas_productos_almacenes_box[".Keys"] = $tableKeyscat_ventas_productos_almacenes_box;


$tdatacat_ventas_productos_almacenes_box[".hideMobileList"] = array();




//	cat_ventas_productos_almacenes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_productos_almacenes_id";
	$fdata["GoodName"] = "cat_ventas_productos_almacenes_id";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_box","cat_ventas_productos_almacenes_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_productos_almacenes_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_almacenes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_id";

	
	
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


	$tdatacat_ventas_productos_almacenes_box["cat_ventas_productos_almacenes_id"] = $fdata;
		$tdatacat_ventas_productos_almacenes_box[".searchableFields"][] = "cat_ventas_productos_almacenes_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_box","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes.time_stamp";

	
	
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


	$tdatacat_ventas_productos_almacenes_box["time_stamp"] = $fdata;
		$tdatacat_ventas_productos_almacenes_box[".searchableFields"][] = "time_stamp";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_box","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes.vigente";

	
	
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


	$tdatacat_ventas_productos_almacenes_box["vigente"] = $fdata;
		$tdatacat_ventas_productos_almacenes_box[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_box","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes.capturista";

	
	
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


	$tdatacat_ventas_productos_almacenes_box["capturista"] = $fdata;
		$tdatacat_ventas_productos_almacenes_box[".searchableFields"][] = "capturista";
//	descripcion_ventas_productos_almacenes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "descripcion_ventas_productos_almacenes";
	$fdata["GoodName"] = "descripcion_ventas_productos_almacenes";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_box","descripcion_ventas_productos_almacenes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_ventas_productos_almacenes";

		$fdata["sourceSingle"] = "descripcion_ventas_productos_almacenes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes.descripcion_ventas_productos_almacenes";

	
	
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


	$tdatacat_ventas_productos_almacenes_box["descripcion_ventas_productos_almacenes"] = $fdata;
		$tdatacat_ventas_productos_almacenes_box[".searchableFields"][] = "descripcion_ventas_productos_almacenes";
//	cat_ventas_productos_almacenes_categorias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_ventas_productos_almacenes_categorias_id";
	$fdata["GoodName"] = "cat_ventas_productos_almacenes_categorias_id";
	$fdata["ownerTable"] = "cat_ventas_productos_almacenes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_box","cat_ventas_productos_almacenes_categorias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_ventas_productos_almacenes_categorias_id";

		$fdata["sourceSingle"] = "cat_ventas_productos_almacenes_categorias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_categorias_id";

	
	
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
	$edata["LookupTable"] = "cat_ventas_productos_almacenes_categorias";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_ventas_productos_almacenes_categorias_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_ventas_productos_almacenes_categorias";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
	
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


	$tdatacat_ventas_productos_almacenes_box["cat_ventas_productos_almacenes_categorias_id"] = $fdata;
		$tdatacat_ventas_productos_almacenes_box[".searchableFields"][] = "cat_ventas_productos_almacenes_categorias_id";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("cat_ventas_productos_almacenes_box","cat_usuarios_licencias_id");
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


	$tdatacat_ventas_productos_almacenes_box["cat_usuarios_licencias_id"] = $fdata;
		$tdatacat_ventas_productos_almacenes_box[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["cat_ventas_productos_almacenes_box"]=&$tdatacat_ventas_productos_almacenes_box;
$field_labels["cat_ventas_productos_almacenes_box"] = &$fieldLabelscat_ventas_productos_almacenes_box;
$fieldToolTips["cat_ventas_productos_almacenes_box"] = &$fieldToolTipscat_ventas_productos_almacenes_box;
$placeHolders["cat_ventas_productos_almacenes_box"] = &$placeHolderscat_ventas_productos_almacenes_box;
$page_titles["cat_ventas_productos_almacenes_box"] = &$pageTitlescat_ventas_productos_almacenes_box;


changeTextControlsToDate( "cat_ventas_productos_almacenes_box" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_productos_almacenes_box"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_productos_almacenes_box"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_productos_almacenes_box()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_id,  cat_ventas_productos_almacenes.time_stamp,  cat_ventas_productos_almacenes.vigente,  cat_ventas_productos_almacenes.capturista,  cat_ventas_productos_almacenes.descripcion_ventas_productos_almacenes,  cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_categorias_id,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_ventas_productos_almacenes  LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_almacenes.capturista = cat_usuarios.usuario";
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
	"m_strName" => "cat_ventas_productos_almacenes_id",
	"m_strTable" => "cat_ventas_productos_almacenes",
	"m_srcTableName" => "cat_ventas_productos_almacenes_box"
));

$proto6["m_sql"] = "cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_id";
$proto6["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_productos_almacenes",
	"m_srcTableName" => "cat_ventas_productos_almacenes_box"
));

$proto8["m_sql"] = "cat_ventas_productos_almacenes.time_stamp";
$proto8["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_productos_almacenes",
	"m_srcTableName" => "cat_ventas_productos_almacenes_box"
));

$proto10["m_sql"] = "cat_ventas_productos_almacenes.vigente";
$proto10["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_productos_almacenes",
	"m_srcTableName" => "cat_ventas_productos_almacenes_box"
));

$proto12["m_sql"] = "cat_ventas_productos_almacenes.capturista";
$proto12["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_ventas_productos_almacenes",
	"m_strTable" => "cat_ventas_productos_almacenes",
	"m_srcTableName" => "cat_ventas_productos_almacenes_box"
));

$proto14["m_sql"] = "cat_ventas_productos_almacenes.descripcion_ventas_productos_almacenes";
$proto14["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_ventas_productos_almacenes_categorias_id",
	"m_strTable" => "cat_ventas_productos_almacenes",
	"m_srcTableName" => "cat_ventas_productos_almacenes_box"
));

$proto16["m_sql"] = "cat_ventas_productos_almacenes.cat_ventas_productos_almacenes_categorias_id";
$proto16["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_almacenes_box"
));

$proto18["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto18["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "cat_ventas_productos_almacenes";
$proto21["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "cat_ventas_productos_almacenes_id";
$proto21["m_columns"][] = "time_stamp";
$proto21["m_columns"][] = "vigente";
$proto21["m_columns"][] = "capturista";
$proto21["m_columns"][] = "descripcion_ventas_productos_almacenes";
$proto21["m_columns"][] = "cat_ventas_productos_almacenes_categorias_id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "cat_ventas_productos_almacenes";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
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
$proto25["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
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
$proto24["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_ventas_productos_almacenes.capturista = cat_usuarios.usuario";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cat_ventas_productos_almacenes_box";
$proto26=array();
$proto26["m_sql"] = "cat_usuarios.usuario = cat_ventas_productos_almacenes.capturista";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_productos_almacenes_box"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= cat_ventas_productos_almacenes.capturista";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_ventas_productos_almacenes_box";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_productos_almacenes_box = createSqlQuery_cat_ventas_productos_almacenes_box();


	
		;

							

$tdatacat_ventas_productos_almacenes_box[".sqlquery"] = $queryData_cat_ventas_productos_almacenes_box;



$tdatacat_ventas_productos_almacenes_box[".hasEvents"] = false;

?>