<?php
$tdatatr_tags_edit = array();
$tdatatr_tags_edit[".searchableFields"] = array();
$tdatatr_tags_edit[".ShortName"] = "tr_tags_edit";
$tdatatr_tags_edit[".OwnerID"] = "";
$tdatatr_tags_edit[".OriginalTable"] = "tr_tags";


$tdatatr_tags_edit[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatr_tags_edit[".originalPagesByType"] = $tdatatr_tags_edit[".pagesByType"];
$tdatatr_tags_edit[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatr_tags_edit[".originalPages"] = $tdatatr_tags_edit[".pages"];
$tdatatr_tags_edit[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatr_tags_edit[".originalDefaultPages"] = $tdatatr_tags_edit[".defaultPages"];

//	field labels
$fieldLabelstr_tags_edit = array();
$fieldToolTipstr_tags_edit = array();
$pageTitlestr_tags_edit = array();
$placeHolderstr_tags_edit = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstr_tags_edit["Spanish"] = array();
	$fieldToolTipstr_tags_edit["Spanish"] = array();
	$placeHolderstr_tags_edit["Spanish"] = array();
	$pageTitlestr_tags_edit["Spanish"] = array();
	$fieldLabelstr_tags_edit["Spanish"]["tr_tags_id"] = "Id";
	$fieldToolTipstr_tags_edit["Spanish"]["tr_tags_id"] = "";
	$placeHolderstr_tags_edit["Spanish"]["tr_tags_id"] = "";
	$fieldLabelstr_tags_edit["Spanish"]["tr_uuid"] = "Tr Uuid";
	$fieldToolTipstr_tags_edit["Spanish"]["tr_uuid"] = "";
	$placeHolderstr_tags_edit["Spanish"]["tr_uuid"] = "";
	$fieldLabelstr_tags_edit["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipstr_tags_edit["Spanish"]["vigente"] = "";
	$placeHolderstr_tags_edit["Spanish"]["vigente"] = "";
	$fieldLabelstr_tags_edit["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipstr_tags_edit["Spanish"]["capturista"] = "";
	$placeHolderstr_tags_edit["Spanish"]["capturista"] = "";
	$fieldLabelstr_tags_edit["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipstr_tags_edit["Spanish"]["time_stamp"] = "";
	$placeHolderstr_tags_edit["Spanish"]["time_stamp"] = "";
	$fieldLabelstr_tags_edit["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipstr_tags_edit["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHolderstr_tags_edit["Spanish"]["cat_usuarios_licencias_id"] = "";
	$fieldLabelstr_tags_edit["Spanish"]["cat_trabajadores_altas_id"] = "id_trabajador";
	$fieldToolTipstr_tags_edit["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderstr_tags_edit["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelstr_tags_edit["Spanish"]["tag_numero_de_serie"] = "Tag";
	$fieldToolTipstr_tags_edit["Spanish"]["tag_numero_de_serie"] = "";
	$placeHolderstr_tags_edit["Spanish"]["tag_numero_de_serie"] = "";
	$fieldLabelstr_tags_edit["Spanish"]["tag_alias"] = "Tag Alias";
	$fieldToolTipstr_tags_edit["Spanish"]["tag_alias"] = "";
	$placeHolderstr_tags_edit["Spanish"]["tag_alias"] = "";
	$fieldLabelstr_tags_edit["Spanish"]["tr_tags_numero_asignado"] = "Num. Asignado";
	$fieldToolTipstr_tags_edit["Spanish"]["tr_tags_numero_asignado"] = "";
	$placeHolderstr_tags_edit["Spanish"]["tr_tags_numero_asignado"] = "";
	if (count($fieldToolTipstr_tags_edit["Spanish"]))
		$tdatatr_tags_edit[".isUseToolTips"] = true;
}





$tdatatr_tags_edit[".shortTableName"] = "tr_tags_edit";
$tdatatr_tags_edit[".nSecOptions"] = 0;

$tdatatr_tags_edit[".mainTableOwnerID"] = "";
$tdatatr_tags_edit[".entityType"] = 1;
$tdatatr_tags_edit[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatatr_tags_edit[".strOriginalTableName"] = "tr_tags";

	



$tdatatr_tags_edit[".showAddInPopup"] = false;

$tdatatr_tags_edit[".showEditInPopup"] = false;

$tdatatr_tags_edit[".showViewInPopup"] = false;

$tdatatr_tags_edit[".listAjax"] = false;
//	temporary
//$tdatatr_tags_edit[".listAjax"] = false;

	$tdatatr_tags_edit[".audit"] = false;

	$tdatatr_tags_edit[".locking"] = false;


$pages = $tdatatr_tags_edit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatr_tags_edit[".edit"] = true;
	$tdatatr_tags_edit[".afterEditAction"] = 1;
	$tdatatr_tags_edit[".closePopupAfterEdit"] = 1;
	$tdatatr_tags_edit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatr_tags_edit[".add"] = true;
$tdatatr_tags_edit[".afterAddAction"] = 1;
$tdatatr_tags_edit[".closePopupAfterAdd"] = 1;
$tdatatr_tags_edit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatr_tags_edit[".list"] = true;
}



$tdatatr_tags_edit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatr_tags_edit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatr_tags_edit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatr_tags_edit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatr_tags_edit[".printFriendly"] = true;
}



$tdatatr_tags_edit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatr_tags_edit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatr_tags_edit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatr_tags_edit[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatatr_tags_edit[".ajaxCodeSnippetAdded"] = false;

$tdatatr_tags_edit[".buttonsAdded"] = false;

$tdatatr_tags_edit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatr_tags_edit[".isUseTimeForSearch"] = false;


$tdatatr_tags_edit[".badgeColor"] = "9ACD32";


$tdatatr_tags_edit[".allSearchFields"] = array();
$tdatatr_tags_edit[".filterFields"] = array();
$tdatatr_tags_edit[".requiredSearchFields"] = array();

$tdatatr_tags_edit[".googleLikeFields"] = array();
$tdatatr_tags_edit[".googleLikeFields"][] = "tr_tags_id";
$tdatatr_tags_edit[".googleLikeFields"][] = "tr_uuid";
$tdatatr_tags_edit[".googleLikeFields"][] = "vigente";
$tdatatr_tags_edit[".googleLikeFields"][] = "capturista";
$tdatatr_tags_edit[".googleLikeFields"][] = "time_stamp";
$tdatatr_tags_edit[".googleLikeFields"][] = "cat_usuarios_licencias_id";
$tdatatr_tags_edit[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatatr_tags_edit[".googleLikeFields"][] = "tag_numero_de_serie";
$tdatatr_tags_edit[".googleLikeFields"][] = "tag_alias";
$tdatatr_tags_edit[".googleLikeFields"][] = "tr_tags_numero_asignado";



$tdatatr_tags_edit[".tableType"] = "list";

$tdatatr_tags_edit[".printerPageOrientation"] = 0;
$tdatatr_tags_edit[".nPrinterPageScale"] = 100;

$tdatatr_tags_edit[".nPrinterSplitRecords"] = 40;

$tdatatr_tags_edit[".geocodingEnabled"] = false;





$tdatatr_tags_edit[".isResizeColumns"] = true;





$tdatatr_tags_edit[".pageSize"] = 20;

$tdatatr_tags_edit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatr_tags_edit[".strOrderBy"] = $tstrOrderBy;

$tdatatr_tags_edit[".orderindexes"] = array();


$tdatatr_tags_edit[".sqlHead"] = "SELECT tr_tags_id,  tr_uuid,  vigente,  capturista,  time_stamp,  cat_usuarios_licencias_id,  cat_trabajadores_altas_id,  tag_numero_de_serie,  tag_alias,  tr_tags_numero_asignado";
$tdatatr_tags_edit[".sqlFrom"] = "FROM tr_tags";
$tdatatr_tags_edit[".sqlWhereExpr"] = "";
$tdatatr_tags_edit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatr_tags_edit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatr_tags_edit[".arrGroupsPerPage"] = $arrGPP;

$tdatatr_tags_edit[".highlightSearchResults"] = true;

$tableKeystr_tags_edit = array();
$tableKeystr_tags_edit[] = "tr_tags_id";
$tdatatr_tags_edit[".Keys"] = $tableKeystr_tags_edit;


$tdatatr_tags_edit[".hideMobileList"] = array();




//	tr_tags_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tr_tags_id";
	$fdata["GoodName"] = "tr_tags_id";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_edit","tr_tags_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tr_tags_id";

		$fdata["sourceSingle"] = "tr_tags_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags_id";

	
	
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


	$tdatatr_tags_edit["tr_tags_id"] = $fdata;
		$tdatatr_tags_edit[".searchableFields"][] = "tr_tags_id";
//	tr_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tr_uuid";
	$fdata["GoodName"] = "tr_uuid";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_edit","tr_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tr_uuid";

		$fdata["sourceSingle"] = "tr_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_uuid";

	
	
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


	$tdatatr_tags_edit["tr_uuid"] = $fdata;
		$tdatatr_tags_edit[".searchableFields"][] = "tr_uuid";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_edit","vigente");
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


	$tdatatr_tags_edit["vigente"] = $fdata;
		$tdatatr_tags_edit[".searchableFields"][] = "vigente";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_edit","capturista");
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


	$tdatatr_tags_edit["capturista"] = $fdata;
		$tdatatr_tags_edit[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_edit","time_stamp");
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


	$tdatatr_tags_edit["time_stamp"] = $fdata;
		$tdatatr_tags_edit[".searchableFields"][] = "time_stamp";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_edit","cat_usuarios_licencias_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_usuarios_licencias_id";

		$fdata["sourceSingle"] = "cat_usuarios_licencias_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_licencias_id";

	
	
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


	$tdatatr_tags_edit["cat_usuarios_licencias_id"] = $fdata;
		$tdatatr_tags_edit[".searchableFields"][] = "cat_usuarios_licencias_id";
//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_edit","cat_trabajadores_altas_id");
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


	$tdatatr_tags_edit["cat_trabajadores_altas_id"] = $fdata;
		$tdatatr_tags_edit[".searchableFields"][] = "cat_trabajadores_altas_id";
//	tag_numero_de_serie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tag_numero_de_serie";
	$fdata["GoodName"] = "tag_numero_de_serie";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_edit","tag_numero_de_serie");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tag_numero_de_serie";

		$fdata["sourceSingle"] = "tag_numero_de_serie";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tag_numero_de_serie";

	
	
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


	$tdatatr_tags_edit["tag_numero_de_serie"] = $fdata;
		$tdatatr_tags_edit[".searchableFields"][] = "tag_numero_de_serie";
//	tag_alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tag_alias";
	$fdata["GoodName"] = "tag_alias";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_edit","tag_alias");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tag_alias";

		$fdata["sourceSingle"] = "tag_alias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tag_alias";

	
	
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


	$tdatatr_tags_edit["tag_alias"] = $fdata;
		$tdatatr_tags_edit[".searchableFields"][] = "tag_alias";
//	tr_tags_numero_asignado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tr_tags_numero_asignado";
	$fdata["GoodName"] = "tr_tags_numero_asignado";
	$fdata["ownerTable"] = "tr_tags";
	$fdata["Label"] = GetFieldLabel("tr_tags_edit","tr_tags_numero_asignado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tr_tags_numero_asignado";

		$fdata["sourceSingle"] = "tr_tags_numero_asignado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tr_tags_numero_asignado";

	
	
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


	$tdatatr_tags_edit["tr_tags_numero_asignado"] = $fdata;
		$tdatatr_tags_edit[".searchableFields"][] = "tr_tags_numero_asignado";


$tables_data["tr_tags_edit"]=&$tdatatr_tags_edit;
$field_labels["tr_tags_edit"] = &$fieldLabelstr_tags_edit;
$fieldToolTips["tr_tags_edit"] = &$fieldToolTipstr_tags_edit;
$placeHolders["tr_tags_edit"] = &$placeHolderstr_tags_edit;
$page_titles["tr_tags_edit"] = &$pageTitlestr_tags_edit;


changeTextControlsToDate( "tr_tags_edit" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tr_tags_edit"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tr_tags_edit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tr_tags_edit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tr_tags_id,  tr_uuid,  vigente,  capturista,  time_stamp,  cat_usuarios_licencias_id,  cat_trabajadores_altas_id,  tag_numero_de_serie,  tag_alias,  tr_tags_numero_asignado";
$proto0["m_strFrom"] = "FROM tr_tags";
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
	"m_srcTableName" => "tr_tags_edit"
));

$proto6["m_sql"] = "tr_tags_id";
$proto6["m_srcTableName"] = "tr_tags_edit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_uuid",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_edit"
));

$proto8["m_sql"] = "tr_uuid";
$proto8["m_srcTableName"] = "tr_tags_edit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_edit"
));

$proto10["m_sql"] = "vigente";
$proto10["m_srcTableName"] = "tr_tags_edit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_edit"
));

$proto12["m_sql"] = "capturista";
$proto12["m_srcTableName"] = "tr_tags_edit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_edit"
));

$proto14["m_sql"] = "time_stamp";
$proto14["m_srcTableName"] = "tr_tags_edit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_edit"
));

$proto16["m_sql"] = "cat_usuarios_licencias_id";
$proto16["m_srcTableName"] = "tr_tags_edit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_edit"
));

$proto18["m_sql"] = "cat_trabajadores_altas_id";
$proto18["m_srcTableName"] = "tr_tags_edit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_numero_de_serie",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_edit"
));

$proto20["m_sql"] = "tag_numero_de_serie";
$proto20["m_srcTableName"] = "tr_tags_edit";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_alias",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_edit"
));

$proto22["m_sql"] = "tag_alias";
$proto22["m_srcTableName"] = "tr_tags_edit";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_tags_numero_asignado",
	"m_strTable" => "tr_tags",
	"m_srcTableName" => "tr_tags_edit"
));

$proto24["m_sql"] = "tr_tags_numero_asignado";
$proto24["m_srcTableName"] = "tr_tags_edit";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "tr_tags";
$proto27["m_srcTableName"] = "tr_tags_edit";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "tr_tags_id";
$proto27["m_columns"][] = "tr_uuid";
$proto27["m_columns"][] = "vigente";
$proto27["m_columns"][] = "capturista";
$proto27["m_columns"][] = "time_stamp";
$proto27["m_columns"][] = "cat_usuarios_licencias_id";
$proto27["m_columns"][] = "cat_trabajadores_altas_id";
$proto27["m_columns"][] = "tag_numero_de_serie";
$proto27["m_columns"][] = "tag_alias";
$proto27["m_columns"][] = "numero_de_bote";
$proto27["m_columns"][] = "cat_holding_03_empresas_unidades_productivas_id";
$proto27["m_columns"][] = "tr_tags_numero_asignado";
$proto27["m_columns"][] = "cat_holding_03_empresas_up_group_predios";
$proto27["m_columns"][] = "cat_actividades_especificas_id";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "tr_tags";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "tr_tags_edit";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tr_tags_edit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tr_tags_edit = createSqlQuery_tr_tags_edit();


	
		;

										

$tdatatr_tags_edit[".sqlquery"] = $queryData_tr_tags_edit;



$tdatatr_tags_edit[".hasEvents"] = false;

?>