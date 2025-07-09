<?php
$tdatatr_tags = array();
$tdatatr_tags[".searchableFields"] = array();
$tdatatr_tags[".ShortName"] = "tr_tags";
$tdatatr_tags[".OwnerID"] = "";
$tdatatr_tags[".OriginalTable"] = "tr_tags";


$tdatatr_tags[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_tags[".originalPagesByType"] = $tdatatr_tags[".pagesByType"];
$tdatatr_tags[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_tags[".originalPages"] = $tdatatr_tags[".pages"];
$tdatatr_tags[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_tags[".originalDefaultPages"] = $tdatatr_tags[".defaultPages"];

//	field labels
$fieldLabelstr_tags = array();
$fieldToolTipstr_tags = array();
$pageTitlestr_tags = array();
$placeHolderstr_tags = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_tags["Spanish"] = array();
	$fieldToolTipstr_tags["Spanish"] = array();
	$placeHolderstr_tags["Spanish"] = array();
	$pageTitlestr_tags["Spanish"] = array();
	$fieldLabelstr_tags["Spanish"]["tr_tags_id"] = "Id";
	$fieldToolTipstr_tags["Spanish"]["tr_tags_id"] = "";
	$placeHolderstr_tags["Spanish"]["tr_tags_id"] = "";
	$fieldLabelstr_tags["Spanish"]["tr_uuid"] = "Tr Uuid";
	$fieldToolTipstr_tags["Spanish"]["tr_uuid"] = "";
	$placeHolderstr_tags["Spanish"]["tr_uuid"] = "";
	$fieldLabelstr_tags["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_tags["Spanish"]["vigente"] = "";
	$placeHolderstr_tags["Spanish"]["vigente"] = "";
	$fieldLabelstr_tags["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_tags["Spanish"]["capturista"] = "";
	$placeHolderstr_tags["Spanish"]["capturista"] = "";
	$fieldLabelstr_tags["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_tags["Spanish"]["time_stamp"] = "";
	$placeHolderstr_tags["Spanish"]["time_stamp"] = "";
	$fieldLabelstr_tags["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipstr_tags["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderstr_tags["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelstr_tags["Spanish"]["cat_trabajadores_altas_id"] = "Trabajador";
	$fieldToolTipstr_tags["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderstr_tags["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelstr_tags["Spanish"]["tag_numero_de_serie"] = "Tag";
	$fieldToolTipstr_tags["Spanish"]["tag_numero_de_serie"] = "";
	$placeHolderstr_tags["Spanish"]["tag_numero_de_serie"] = "";
	$fieldLabelstr_tags["Spanish"]["tag_alias"] = "Tag Alias";
	$fieldToolTipstr_tags["Spanish"]["tag_alias"] = "";
	$placeHolderstr_tags["Spanish"]["tag_alias"] = "";
	$fieldLabelstr_tags["Spanish"]["tr_tags_numero_asignado"] = "Num. Asignado";
	$fieldToolTipstr_tags["Spanish"]["tr_tags_numero_asignado"] = "";
	$placeHolderstr_tags["Spanish"]["tr_tags_numero_asignado"] = "";
	$fieldLabelstr_tags["Spanish"]["numero_de_bote"] = "#Bote";
	$fieldToolTipstr_tags["Spanish"]["numero_de_bote"] = "";
	$placeHolderstr_tags["Spanish"]["numero_de_bote"] = "";
	$fieldLabelstr_tags["Spanish"]["cat_trabajadores_altas_id_empresa"] = "IdEmpresa";
	$fieldToolTipstr_tags["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderstr_tags["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelstr_tags["Spanish"]["cat_trabajadores_altas_id1"] = "idTrab";
	$fieldToolTipstr_tags["Spanish"]["cat_trabajadores_altas_id1"] = "";
	$placeHolderstr_tags["Spanish"]["cat_trabajadores_altas_id1"] = "";
	if (count($fieldToolTipstr_tags["Spanish"]))
		$tdatatr_tags[".isUseToolTips"] = true;
}





$tdatatr_tags[".shortTableName"] = "tr_tags";
$tdatatr_tags[".nSecOptions"] = 0;

$tdatatr_tags[".mainTableOwnerID"] = "";
$tdatatr_tags[".entityType"] = 0;
$tdatatr_tags[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_tags[".strOriginalTableName"] = "tr_tags";

	



$tdatatr_tags[".showAddInPopup"] = false;

$tdatatr_tags[".showEditInPopup"] = false;

$tdatatr_tags[".showViewInPopup"] = false;

$tdatatr_tags[".listAjax"] = false;
//	temporary
//$tdatatr_tags[".listAjax"] = false;

	$tdatatr_tags[".audit"] = false;

	$tdatatr_tags[".locking"] = false;


$pages = $tdatatr_tags[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_tags[".edit"] = true;
	$tdatatr_tags[".afterEditAction"] = 1;
	$tdatatr_tags[".closePopupAfterEdit"] = 1;
	$tdatatr_tags[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_tags[".add"] = true;
$tdatatr_tags[".afterAddAction"] = 1;
$tdatatr_tags[".closePopupAfterAdd"] = 1;
$tdatatr_tags[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_tags[".list"] = true;
}



$tdatatr_tags[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_tags[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_tags[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_tags[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_tags[".printFriendly"] = true;
}



$tdatatr_tags[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_tags[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_tags[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_tags[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																																																																																								

$tdatatr_tags[".ajaxCodeSnippetAdded"] = false;

$tdatatr_tags[".buttonsAdded"] = false;

$tdatatr_tags[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_tags[".isUseTimeForSearch"] = false;


$tdatatr_tags[".badgeColor"] = "7b68ee";


$tdatatr_tags[".allSearchFields"] = array();
$tdatatr_tags[".filterFields"] = array();
$tdatatr_tags[".requiredSearchFields"] = array();

$tdatatr_tags[".googleLikeFields"] = array();
$tdatatr_tags[".googleLikeFields"][] = "tr_tags_id";
$tdatatr_tags[".googleLikeFields"][] = "tr_uuid";
$tdatatr_tags[".googleLikeFields"][] = "vigente";
$tdatatr_tags[".googleLikeFields"][] = "capturista";
$tdatatr_tags[".googleLikeFields"][] = "time_stamp";
$tdatatr_tags[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatatr_tags[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatatr_tags[".googleLikeFields"][] = "tag_numero_de_serie";
$tdatatr_tags[".googleLikeFields"][] = "tag_alias";
$tdatatr_tags[".googleLikeFields"][] = "tr_tags_numero_asignado";
$tdatatr_tags[".googleLikeFields"][] = "numero_de_bote";
$tdatatr_tags[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatatr_tags[".googleLikeFields"][] = "cat_trabajadores_altas_id1";



$tdatatr_tags[".tableType"] = "list";

$tdatatr_tags[".printerPageOrientation"] = 0;
$tdatatr_tags[".nPrinterPageScale"] = 100;

$tdatatr_tags[".nPrinterSplitRecords"] = 40;

$tdatatr_tags[".geocodingEnabled"] = false;





$tdatatr_tags[".isResizeColumns"] = true;





$tdatatr_tags[".pageSize"] = 20;

$tdatatr_tags[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_tags[".strOrderBy"] = $tstrOrderBy;

$tdatatr_tags[".orderindexes"] = array();


$tdatatr_tags[".sqlHead"] = "SELECT tr_tags.tr_tags_id,  tr_tags.tr_uuid,  tr_tags.vigente,  tr_tags.capturista,  tr_tags.time_stamp,  tr_tags.cat_usuarios_licencias_id,  tr_tags.cat_trabajadores_altas_id,  tr_tags.tag_numero_de_serie,  tr_tags.tag_alias,  tr_tags.tr_tags_numero_asignado,  tr_tags.numero_de_bote,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  cat_trabajadores_altas.cat_trabajadores_altas_id AS cat_trabajadores_altas_id1";
$tdatatr_tags[".sqlFrom"] = "FROM tr_tags  LEFT OUTER JOIN cat_trabajadores_altas ON tr_tags.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$tdatatr_tags[".sqlWhereExpr"] = "";
$tdatatr_tags[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_tags[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_tags[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_tags[".highlightSearchResults"] = true;

$tableKeystr_tags = array();
$tableKeystr_tags[] = "tr_tags_id";
$tdatatr_tags[".Keys"] = $tableKeystr_tags;


$tdatatr_tags[".hideMobileList"] = array();




//	tr_tags_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_tags_id";
	$fdata["GoodName"] = "tr_tags_id";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","tr_tags_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_tags_id";

		$fdata["sourceSingle"] = "tr_tags_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.tr_tags_id";

	
	
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


	$tdatatr_tags["tr_tags_id"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "tr_tags_id";
//	tr_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tr_uuid";
	$fdata["GoodName"] = "tr_uuid";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","tr_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tr_uuid";

		$fdata["sourceSingle"] = "tr_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.tr_uuid";

	
	
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


	$tdatatr_tags["tr_uuid"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "tr_uuid";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.vigente";

	
	
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


	$tdatatr_tags["vigente"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.capturista";

	
	
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


	$tdatatr_tags["capturista"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.time_stamp";

	
	
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


	$tdatatr_tags["time_stamp"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

		$fdata["sourceSingle"] = "cat_usuarios_licencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.cat_usuarios_licencias_id";

	
	
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


	$tdatatr_tags["cat_usuarios_licencias_id"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.cat_trabajadores_altas_id";

	
	
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


	$tdatatr_tags["cat_trabajadores_altas_id"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "cat_trabajadores_altas_id";
//	tag_numero_de_serie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tag_numero_de_serie";
	$fdata["GoodName"] = "tag_numero_de_serie";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","tag_numero_de_serie");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tag_numero_de_serie";

		$fdata["sourceSingle"] = "tag_numero_de_serie";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.tag_numero_de_serie";

	
	
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


	$tdatatr_tags["tag_numero_de_serie"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "tag_numero_de_serie";
//	tag_alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tag_alias";
	$fdata["GoodName"] = "tag_alias";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","tag_alias");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tag_alias";

		$fdata["sourceSingle"] = "tag_alias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.tag_alias";

	
	
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


	$tdatatr_tags["tag_alias"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "tag_alias";
//	tr_tags_numero_asignado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tr_tags_numero_asignado";
	$fdata["GoodName"] = "tr_tags_numero_asignado";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","tr_tags_numero_asignado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tr_tags_numero_asignado";

		$fdata["sourceSingle"] = "tr_tags_numero_asignado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.tr_tags_numero_asignado";

	
	
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


	$tdatatr_tags["tr_tags_numero_asignado"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "tr_tags_numero_asignado";
//	numero_de_bote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "numero_de_bote";
	$fdata["GoodName"] = "numero_de_bote";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags","numero_de_bote");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "numero_de_bote";

		$fdata["sourceSingle"] = "numero_de_bote";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags.numero_de_bote";

	
	
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


	$tdatatr_tags["numero_de_bote"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "numero_de_bote";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_tags","cat_trabajadores_altas_id_empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id_empresa";

	
	
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


	$tdatatr_tags["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	cat_trabajadores_altas_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cat_trabajadores_altas_id1";
	$fdata["GoodName"] = "cat_trabajadores_altas_id1";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("tr_tags","cat_trabajadores_altas_id1");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_trabajadores_altas_id";

	
	
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


	$tdatatr_tags["cat_trabajadores_altas_id1"] = $fdata;
		$tdatatr_tags[".searchableFields"][] = "cat_trabajadores_altas_id1";


$tables_data["tr_tags"]=&$tdatatr_tags;
$field_labels["tr_tags"] = &$fieldLabelstr_tags;
$fieldToolTips["tr_tags"] = &$fieldToolTipstr_tags;
$placeHolders["tr_tags"] = &$placeHolderstr_tags;
$page_titles["tr_tags"] = &$pageTitlestr_tags;


changeTextControlsToDate( "tr_tags" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_tags"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_tags"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tr_tags";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tr_tags_maestro";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tr_tags_maestro";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tr_tags"][0] = $masterParams;
				$masterTablesData["tr_tags"][0]["masterKeys"] = array();
	$masterTablesData["tr_tags"][0]["masterKeys"][]="cat_trabajadores_altas_id";
				$masterTablesData["tr_tags"][0]["detailKeys"] = array();
	$masterTablesData["tr_tags"][0]["detailKeys"][]="cat_trabajadores_altas_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_tags()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_tags.tr_tags_id,  tr_tags.tr_uuid,  tr_tags.vigente,  tr_tags.capturista,  tr_tags.time_stamp,  tr_tags.cat_usuarios_licencias_id,  tr_tags.cat_trabajadores_altas_id,  tr_tags.tag_numero_de_serie,  tr_tags.tag_alias,  tr_tags.tr_tags_numero_asignado,  tr_tags.numero_de_bote,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  cat_trabajadores_altas.cat_trabajadores_altas_id AS cat_trabajadores_altas_id1";
$proto0["m_strFrom"] = "FROM tr_tags  LEFT OUTER JOIN cat_trabajadores_altas ON tr_tags.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
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
	"m_strName" => "tr_tags_id",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto6["m_sql"] = "tr_tags.tr_tags_id";
$proto6["m_srcTableName"] = "tr_tags";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_uuid",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto8["m_sql"] = "tr_tags.tr_uuid";
$proto8["m_srcTableName"] = "tr_tags";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto10["m_sql"] = "tr_tags.vigente";
$proto10["m_srcTableName"] = "tr_tags";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto12["m_sql"] = "tr_tags.capturista";
$proto12["m_srcTableName"] = "tr_tags";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto14["m_sql"] = "tr_tags.time_stamp";
$proto14["m_srcTableName"] = "tr_tags";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto16["m_sql"] = "tr_tags.cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "tr_tags";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto18["m_sql"] = "tr_tags.cat_trabajadores_altas_id";
$proto18["m_srcTableName"] = "tr_tags";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_numero_de_serie",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto20["m_sql"] = "tr_tags.tag_numero_de_serie";
$proto20["m_srcTableName"] = "tr_tags";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_alias",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto22["m_sql"] = "tr_tags.tag_alias";
$proto22["m_srcTableName"] = "tr_tags";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_tags_numero_asignado",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto24["m_sql"] = "tr_tags.tr_tags_numero_asignado";
$proto24["m_srcTableName"] = "tr_tags";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_de_bote",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags"
));

$proto26["m_sql"] = "tr_tags.numero_de_bote";
$proto26["m_srcTableName"] = "tr_tags";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_tags"
));

$proto28["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto28["m_srcTableName"] = "tr_tags";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_tags"
));

$proto30["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto30["m_srcTableName"] = "tr_tags";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "cat_trabajadores_altas_id1";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "tr_tags";
$proto33["m_srcTableName"] = "tr_tags";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "tr_tags_id";
$proto33["m_columns"][] = "tr_uuid";
$proto33["m_columns"][] = "vigente";
$proto33["m_columns"][] = "capturista";
$proto33["m_columns"][] = "time_stamp";
$proto33["m_columns"][] = "cat_usuarios_licencias_id";
$proto33["m_columns"][] = "cat_trabajadores_altas_id";
$proto33["m_columns"][] = "tag_numero_de_serie";
$proto33["m_columns"][] = "tag_alias";
$proto33["m_columns"][] = "numero_de_bote";
$proto33["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto33["m_columns"][] = "tr_tags_numero_asignado";
$proto33["m_columns"][] = "cat_holding_03_empresas_up_group_predios";
$proto33["m_columns"][] = "cat_actividades_especificas_id";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "tr_tags";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "tr_tags";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_LEFTJOIN";
			$proto37=array();
$proto37["m_strName"] = "cat_trabajadores_altas";
$proto37["m_srcTableName"] = "tr_tags";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "cat_trabajadores_altas_id";
$proto37["m_columns"][] = "time_stamp";
$proto37["m_columns"][] = "capturista";
$proto37["m_columns"][] = "vigente";
$proto37["m_columns"][] = "fecha_de_registro";
$proto37["m_columns"][] = "apellido_paterno";
$proto37["m_columns"][] = "apellido_materno";
$proto37["m_columns"][] = "primer_nombre";
$proto37["m_columns"][] = "segundo_nombre";
$proto37["m_columns"][] = "rfc";
$proto37["m_columns"][] = "curp";
$proto37["m_columns"][] = "num_seguridad_social";
$proto37["m_columns"][] = "municipio_nacimiento";
$proto37["m_columns"][] = "estado_nacimiento";
$proto37["m_columns"][] = "nacionalidad";
$proto37["m_columns"][] = "telefono_emergencia";
$proto37["m_columns"][] = "contacto_emergencia";
$proto37["m_columns"][] = "nombre_completo";
$proto37["m_columns"][] = "fecha_de_nacimiento";
$proto37["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto37["m_columns"][] = "celular_mensajes";
$proto37["m_columns"][] = "permiso_msm";
$proto37["m_columns"][] = "estatus";
$proto37["m_columns"][] = "fecha_de_captura";
$proto37["m_columns"][] = "face_id";
$proto37["m_columns"][] = "tr_tags_numero_asignado";
$proto37["m_columns"][] = "cat_trabajadores_puestos_id";
$proto37["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto37["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto37["m_columns"][] = "calle";
$proto37["m_columns"][] = "colonia";
$proto37["m_columns"][] = "municipio";
$proto37["m_columns"][] = "estado";
$proto37["m_columns"][] = "codigo_postal";
$proto37["m_columns"][] = "banco";
$proto37["m_columns"][] = "cuenta_bancaria";
$proto37["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto37["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto37["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto37["m_columns"][] = "cat_holding_02_empresas";
$proto37["m_columns"][] = "fecha_de_ingreso";
$proto37["m_columns"][] = "numero_domicilio";
$proto37["m_columns"][] = "observaciones";
$proto37["m_columns"][] = "link_foto";
$proto37["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto37["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_altas ON tr_tags.cat_trabajadores_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "tr_tags";
$proto38=array();
$proto38["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id = tr_tags.cat_trabajadores_altas_id";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "tr_tags"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= tr_tags.cat_trabajadores_altas_id";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_tags";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_tags = createSqlQuery_tr_tags();


	
		;

													

$tdatatr_tags[".sqlquery"] = $queryData_tr_tags;



$tdatatr_tags[".hasEvents"] = false;

?>