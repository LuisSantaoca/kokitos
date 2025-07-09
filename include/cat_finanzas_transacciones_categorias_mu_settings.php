<?php
$tdatacat_finanzas_transacciones_categorias_mu = array();
$tdatacat_finanzas_transacciones_categorias_mu[".searchableFields"] = array();
$tdatacat_finanzas_transacciones_categorias_mu[".ShortName"] = "cat_finanzas_transacciones_categorias_mu";
$tdatacat_finanzas_transacciones_categorias_mu[".OwnerID"] = "";
$tdatacat_finanzas_transacciones_categorias_mu[".OriginalTable"] = "cat_finanzas_transacciones_categorias_mu";


$tdatacat_finanzas_transacciones_categorias_mu[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacat_finanzas_transacciones_categorias_mu[".originalPagesByType"] = $tdatacat_finanzas_transacciones_categorias_mu[".pagesByType"];
$tdatacat_finanzas_transacciones_categorias_mu[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacat_finanzas_transacciones_categorias_mu[".originalPages"] = $tdatacat_finanzas_transacciones_categorias_mu[".pages"];
$tdatacat_finanzas_transacciones_categorias_mu[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacat_finanzas_transacciones_categorias_mu[".originalDefaultPages"] = $tdatacat_finanzas_transacciones_categorias_mu[".defaultPages"];

//	field labels
$fieldLabelscat_finanzas_transacciones_categorias_mu = array();
$fieldToolTipscat_finanzas_transacciones_categorias_mu = array();
$pageTitlescat_finanzas_transacciones_categorias_mu = array();
$placeHolderscat_finanzas_transacciones_categorias_mu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_finanzas_transacciones_categorias_mu["Spanish"] = array();
	$fieldToolTipscat_finanzas_transacciones_categorias_mu["Spanish"] = array();
	$placeHolderscat_finanzas_transacciones_categorias_mu["Spanish"] = array();
	$pageTitlescat_finanzas_transacciones_categorias_mu["Spanish"] = array();
	$fieldLabelscat_finanzas_transacciones_categorias_mu["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_finanzas_transacciones_categorias_mu["Spanish"]["vigente"] = "";
	$placeHolderscat_finanzas_transacciones_categorias_mu["Spanish"]["vigente"] = "";
	$fieldLabelscat_finanzas_transacciones_categorias_mu["Spanish"]["descripcion_transacciones_categorias"] = "Descripcion Transacciones Categorias";
	$fieldToolTipscat_finanzas_transacciones_categorias_mu["Spanish"]["descripcion_transacciones_categorias"] = "";
	$placeHolderscat_finanzas_transacciones_categorias_mu["Spanish"]["descripcion_transacciones_categorias"] = "";
	$fieldLabelscat_finanzas_transacciones_categorias_mu["Spanish"]["cat_finanzas_transacciones_categorias_naturaleza_mu_id"] = "Cat Finanzas Transacciones Categorias Naturaleza Mu Id";
	$fieldToolTipscat_finanzas_transacciones_categorias_mu["Spanish"]["cat_finanzas_transacciones_categorias_naturaleza_mu_id"] = "";
	$placeHolderscat_finanzas_transacciones_categorias_mu["Spanish"]["cat_finanzas_transacciones_categorias_naturaleza_mu_id"] = "";
	$fieldLabelscat_finanzas_transacciones_categorias_mu["Spanish"]["cat_finanzas_transacciones_categorias_mu_id"] = "Id";
	$fieldToolTipscat_finanzas_transacciones_categorias_mu["Spanish"]["cat_finanzas_transacciones_categorias_mu_id"] = "";
	$placeHolderscat_finanzas_transacciones_categorias_mu["Spanish"]["cat_finanzas_transacciones_categorias_mu_id"] = "";
	$fieldLabelscat_finanzas_transacciones_categorias_mu["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_finanzas_transacciones_categorias_mu["Spanish"]["capturista"] = "";
	$placeHolderscat_finanzas_transacciones_categorias_mu["Spanish"]["capturista"] = "";
	$fieldLabelscat_finanzas_transacciones_categorias_mu["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_finanzas_transacciones_categorias_mu["Spanish"]["time_stamp"] = "";
	$placeHolderscat_finanzas_transacciones_categorias_mu["Spanish"]["time_stamp"] = "";
	if (count($fieldToolTipscat_finanzas_transacciones_categorias_mu["Spanish"]))
		$tdatacat_finanzas_transacciones_categorias_mu[".isUseToolTips"] = true;
}





$tdatacat_finanzas_transacciones_categorias_mu[".shortTableName"] = "cat_finanzas_transacciones_categorias_mu";
$tdatacat_finanzas_transacciones_categorias_mu[".nSecOptions"] = 0;

$tdatacat_finanzas_transacciones_categorias_mu[".mainTableOwnerID"] = "";
$tdatacat_finanzas_transacciones_categorias_mu[".entityType"] = 0;
$tdatacat_finanzas_transacciones_categorias_mu[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_finanzas_transacciones_categorias_mu[".strOriginalTableName"] = "cat_finanzas_transacciones_categorias_mu";

	



$tdatacat_finanzas_transacciones_categorias_mu[".showAddInPopup"] = false;

$tdatacat_finanzas_transacciones_categorias_mu[".showEditInPopup"] = false;

$tdatacat_finanzas_transacciones_categorias_mu[".showViewInPopup"] = false;

$tdatacat_finanzas_transacciones_categorias_mu[".listAjax"] = false;
//	temporary
//$tdatacat_finanzas_transacciones_categorias_mu[".listAjax"] = false;

	$tdatacat_finanzas_transacciones_categorias_mu[".audit"] = false;

	$tdatacat_finanzas_transacciones_categorias_mu[".locking"] = false;


$pages = $tdatacat_finanzas_transacciones_categorias_mu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_finanzas_transacciones_categorias_mu[".edit"] = true;
	$tdatacat_finanzas_transacciones_categorias_mu[".afterEditAction"] = 1;
	$tdatacat_finanzas_transacciones_categorias_mu[".closePopupAfterEdit"] = 1;
	$tdatacat_finanzas_transacciones_categorias_mu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_finanzas_transacciones_categorias_mu[".add"] = true;
$tdatacat_finanzas_transacciones_categorias_mu[".afterAddAction"] = 1;
$tdatacat_finanzas_transacciones_categorias_mu[".closePopupAfterAdd"] = 1;
$tdatacat_finanzas_transacciones_categorias_mu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_finanzas_transacciones_categorias_mu[".list"] = true;
}



$tdatacat_finanzas_transacciones_categorias_mu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_finanzas_transacciones_categorias_mu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_finanzas_transacciones_categorias_mu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_finanzas_transacciones_categorias_mu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_finanzas_transacciones_categorias_mu[".printFriendly"] = true;
}



$tdatacat_finanzas_transacciones_categorias_mu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_finanzas_transacciones_categorias_mu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_finanzas_transacciones_categorias_mu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_finanzas_transacciones_categorias_mu[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_finanzas_transacciones_categorias_mu[".ajaxCodeSnippetAdded"] = false;

$tdatacat_finanzas_transacciones_categorias_mu[".buttonsAdded"] = false;

$tdatacat_finanzas_transacciones_categorias_mu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_finanzas_transacciones_categorias_mu[".isUseTimeForSearch"] = false;


$tdatacat_finanzas_transacciones_categorias_mu[".badgeColor"] = "DB7093";


$tdatacat_finanzas_transacciones_categorias_mu[".allSearchFields"] = array();
$tdatacat_finanzas_transacciones_categorias_mu[".filterFields"] = array();
$tdatacat_finanzas_transacciones_categorias_mu[".requiredSearchFields"] = array();

$tdatacat_finanzas_transacciones_categorias_mu[".googleLikeFields"] = array();
$tdatacat_finanzas_transacciones_categorias_mu[".googleLikeFields"][] = "vigente";
$tdatacat_finanzas_transacciones_categorias_mu[".googleLikeFields"][] = "descripcion_transacciones_categorias";
$tdatacat_finanzas_transacciones_categorias_mu[".googleLikeFields"][] = "cat_finanzas_transacciones_categorias_naturaleza_mu_id";
$tdatacat_finanzas_transacciones_categorias_mu[".googleLikeFields"][] = "cat_finanzas_transacciones_categorias_mu_id";
$tdatacat_finanzas_transacciones_categorias_mu[".googleLikeFields"][] = "capturista";
$tdatacat_finanzas_transacciones_categorias_mu[".googleLikeFields"][] = "time_stamp";



$tdatacat_finanzas_transacciones_categorias_mu[".tableType"] = "list";

$tdatacat_finanzas_transacciones_categorias_mu[".printerPageOrientation"] = 0;
$tdatacat_finanzas_transacciones_categorias_mu[".nPrinterPageScale"] = 100;

$tdatacat_finanzas_transacciones_categorias_mu[".nPrinterSplitRecords"] = 40;

$tdatacat_finanzas_transacciones_categorias_mu[".geocodingEnabled"] = false;





$tdatacat_finanzas_transacciones_categorias_mu[".isResizeColumns"] = true;





$tdatacat_finanzas_transacciones_categorias_mu[".pageSize"] = 20;

$tdatacat_finanzas_transacciones_categorias_mu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_finanzas_transacciones_categorias_mu[".strOrderBy"] = $tstrOrderBy;

$tdatacat_finanzas_transacciones_categorias_mu[".orderindexes"] = array();


$tdatacat_finanzas_transacciones_categorias_mu[".sqlHead"] = "SELECT vigente,  	descripcion_transacciones_categorias,  	cat_finanzas_transacciones_categorias_naturaleza_mu_id,  	cat_finanzas_transacciones_categorias_mu_id,  	capturista,  	time_stamp";
$tdatacat_finanzas_transacciones_categorias_mu[".sqlFrom"] = "FROM cat_finanzas_transacciones_categorias_mu";
$tdatacat_finanzas_transacciones_categorias_mu[".sqlWhereExpr"] = "";
$tdatacat_finanzas_transacciones_categorias_mu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_finanzas_transacciones_categorias_mu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_finanzas_transacciones_categorias_mu[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_finanzas_transacciones_categorias_mu[".highlightSearchResults"] = true;

$tableKeyscat_finanzas_transacciones_categorias_mu = array();
$tableKeyscat_finanzas_transacciones_categorias_mu[] = "cat_finanzas_transacciones_categorias_mu_id";
$tdatacat_finanzas_transacciones_categorias_mu[".Keys"] = $tableKeyscat_finanzas_transacciones_categorias_mu;


$tdatacat_finanzas_transacciones_categorias_mu[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_finanzas_transacciones_categorias_mu";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_categorias_mu","vigente");
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


	$tdatacat_finanzas_transacciones_categorias_mu["vigente"] = $fdata;
		$tdatacat_finanzas_transacciones_categorias_mu[".searchableFields"][] = "vigente";
//	descripcion_transacciones_categorias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_transacciones_categorias";
	$fdata["GoodName"] = "descripcion_transacciones_categorias";
	$fdata["ownerTable"] = "cat_finanzas_transacciones_categorias_mu";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_categorias_mu","descripcion_transacciones_categorias");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_transacciones_categorias";

		$fdata["sourceSingle"] = "descripcion_transacciones_categorias";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_transacciones_categorias";

	
	
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


	$tdatacat_finanzas_transacciones_categorias_mu["descripcion_transacciones_categorias"] = $fdata;
		$tdatacat_finanzas_transacciones_categorias_mu[".searchableFields"][] = "descripcion_transacciones_categorias";
//	cat_finanzas_transacciones_categorias_naturaleza_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_finanzas_transacciones_categorias_naturaleza_mu_id";
	$fdata["GoodName"] = "cat_finanzas_transacciones_categorias_naturaleza_mu_id";
	$fdata["ownerTable"] = "cat_finanzas_transacciones_categorias_mu";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_categorias_mu","cat_finanzas_transacciones_categorias_naturaleza_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_finanzas_transacciones_categorias_naturaleza_mu_id";

		$fdata["sourceSingle"] = "cat_finanzas_transacciones_categorias_naturaleza_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_transacciones_categorias_naturaleza_mu_id";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "cat_finanzas_transacciones_categorias_naturaleza_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_transacciones_categorias_naturaleza";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
		$edata["SimpleAdd"] = true;


	
	
	
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


	$tdatacat_finanzas_transacciones_categorias_mu["cat_finanzas_transacciones_categorias_naturaleza_mu_id"] = $fdata;
		$tdatacat_finanzas_transacciones_categorias_mu[".searchableFields"][] = "cat_finanzas_transacciones_categorias_naturaleza_mu_id";
//	cat_finanzas_transacciones_categorias_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cat_finanzas_transacciones_categorias_mu_id";
	$fdata["GoodName"] = "cat_finanzas_transacciones_categorias_mu_id";
	$fdata["ownerTable"] = "cat_finanzas_transacciones_categorias_mu";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_categorias_mu","cat_finanzas_transacciones_categorias_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_transacciones_categorias_mu_id";

		$fdata["sourceSingle"] = "cat_finanzas_transacciones_categorias_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_transacciones_categorias_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_finanzas_transacciones_categorias_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cat_finanzas_transacciones_categorias_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_transacciones_categorias";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
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


	$tdatacat_finanzas_transacciones_categorias_mu["cat_finanzas_transacciones_categorias_mu_id"] = $fdata;
		$tdatacat_finanzas_transacciones_categorias_mu[".searchableFields"][] = "cat_finanzas_transacciones_categorias_mu_id";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_finanzas_transacciones_categorias_mu";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_categorias_mu","capturista");
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


	$tdatacat_finanzas_transacciones_categorias_mu["capturista"] = $fdata;
		$tdatacat_finanzas_transacciones_categorias_mu[".searchableFields"][] = "capturista";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_finanzas_transacciones_categorias_mu";
	$fdata["Label"] = GetFieldLabel("cat_finanzas_transacciones_categorias_mu","time_stamp");
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


	$tdatacat_finanzas_transacciones_categorias_mu["time_stamp"] = $fdata;
		$tdatacat_finanzas_transacciones_categorias_mu[".searchableFields"][] = "time_stamp";


$tables_data["cat_finanzas_transacciones_categorias_mu"]=&$tdatacat_finanzas_transacciones_categorias_mu;
$field_labels["cat_finanzas_transacciones_categorias_mu"] = &$fieldLabelscat_finanzas_transacciones_categorias_mu;
$fieldToolTips["cat_finanzas_transacciones_categorias_mu"] = &$fieldToolTipscat_finanzas_transacciones_categorias_mu;
$placeHolders["cat_finanzas_transacciones_categorias_mu"] = &$placeHolderscat_finanzas_transacciones_categorias_mu;
$page_titles["cat_finanzas_transacciones_categorias_mu"] = &$pageTitlescat_finanzas_transacciones_categorias_mu;


changeTextControlsToDate( "cat_finanzas_transacciones_categorias_mu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_finanzas_transacciones_categorias_mu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_finanzas_transacciones_categorias_mu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_finanzas_transacciones_categorias_mu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigente,  	descripcion_transacciones_categorias,  	cat_finanzas_transacciones_categorias_naturaleza_mu_id,  	cat_finanzas_transacciones_categorias_mu_id,  	capturista,  	time_stamp";
$proto0["m_strFrom"] = "FROM cat_finanzas_transacciones_categorias_mu";
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
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_transacciones_categorias_mu",
	"m_srcTableName" => "cat_finanzas_transacciones_categorias_mu"
));

$proto6["m_sql"] = "vigente";
$proto6["m_srcTableName"] = "cat_finanzas_transacciones_categorias_mu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_transacciones_categorias",
	"m_strTable" => "cat_finanzas_transacciones_categorias_mu",
	"m_srcTableName" => "cat_finanzas_transacciones_categorias_mu"
));

$proto8["m_sql"] = "descripcion_transacciones_categorias";
$proto8["m_srcTableName"] = "cat_finanzas_transacciones_categorias_mu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_transacciones_categorias_naturaleza_mu_id",
	"m_strTable" => "cat_finanzas_transacciones_categorias_mu",
	"m_srcTableName" => "cat_finanzas_transacciones_categorias_mu"
));

$proto10["m_sql"] = "cat_finanzas_transacciones_categorias_naturaleza_mu_id";
$proto10["m_srcTableName"] = "cat_finanzas_transacciones_categorias_mu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_finanzas_transacciones_categorias_mu_id",
	"m_strTable" => "cat_finanzas_transacciones_categorias_mu",
	"m_srcTableName" => "cat_finanzas_transacciones_categorias_mu"
));

$proto12["m_sql"] = "cat_finanzas_transacciones_categorias_mu_id";
$proto12["m_srcTableName"] = "cat_finanzas_transacciones_categorias_mu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_finanzas_transacciones_categorias_mu",
	"m_srcTableName" => "cat_finanzas_transacciones_categorias_mu"
));

$proto14["m_sql"] = "capturista";
$proto14["m_srcTableName"] = "cat_finanzas_transacciones_categorias_mu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_finanzas_transacciones_categorias_mu",
	"m_srcTableName" => "cat_finanzas_transacciones_categorias_mu"
));

$proto16["m_sql"] = "time_stamp";
$proto16["m_srcTableName"] = "cat_finanzas_transacciones_categorias_mu";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cat_finanzas_transacciones_categorias_mu";
$proto19["m_srcTableName"] = "cat_finanzas_transacciones_categorias_mu";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "vigente";
$proto19["m_columns"][] = "descripcion_transacciones_categorias";
$proto19["m_columns"][] = "cat_finanzas_transacciones_categorias_naturaleza_mu_id";
$proto19["m_columns"][] = "cat_finanzas_transacciones_categorias_mu_id";
$proto19["m_columns"][] = "capturista";
$proto19["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cat_finanzas_transacciones_categorias_mu";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cat_finanzas_transacciones_categorias_mu";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_finanzas_transacciones_categorias_mu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_finanzas_transacciones_categorias_mu = createSqlQuery_cat_finanzas_transacciones_categorias_mu();


	
		;

						

$tdatacat_finanzas_transacciones_categorias_mu[".sqlquery"] = $queryData_cat_finanzas_transacciones_categorias_mu;



$tdatacat_finanzas_transacciones_categorias_mu[".hasEvents"] = false;

?>