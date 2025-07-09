<?php
$tdatabox_cat_control_aplicaciones_alcance_mu = array();
$tdatabox_cat_control_aplicaciones_alcance_mu[".searchableFields"] = array();
$tdatabox_cat_control_aplicaciones_alcance_mu[".ShortName"] = "box_cat_control_aplicaciones_alcance_mu";
$tdatabox_cat_control_aplicaciones_alcance_mu[".OwnerID"] = "";
$tdatabox_cat_control_aplicaciones_alcance_mu[".OriginalTable"] = "cat_control_aplicaciones_alcance_mu";


$tdatabox_cat_control_aplicaciones_alcance_mu[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabox_cat_control_aplicaciones_alcance_mu[".originalPagesByType"] = $tdatabox_cat_control_aplicaciones_alcance_mu[".pagesByType"];
$tdatabox_cat_control_aplicaciones_alcance_mu[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabox_cat_control_aplicaciones_alcance_mu[".originalPages"] = $tdatabox_cat_control_aplicaciones_alcance_mu[".pages"];
$tdatabox_cat_control_aplicaciones_alcance_mu[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabox_cat_control_aplicaciones_alcance_mu[".originalDefaultPages"] = $tdatabox_cat_control_aplicaciones_alcance_mu[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_control_aplicaciones_alcance_mu = array();
$fieldToolTipsbox_cat_control_aplicaciones_alcance_mu = array();
$pageTitlesbox_cat_control_aplicaciones_alcance_mu = array();
$placeHoldersbox_cat_control_aplicaciones_alcance_mu = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_control_aplicaciones_alcance_mu["Spanish"] = array();
	$fieldToolTipsbox_cat_control_aplicaciones_alcance_mu["Spanish"] = array();
	$placeHoldersbox_cat_control_aplicaciones_alcance_mu["Spanish"] = array();
	$pageTitlesbox_cat_control_aplicaciones_alcance_mu["Spanish"] = array();
	$fieldLabelsbox_cat_control_aplicaciones_alcance_mu["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipsbox_cat_control_aplicaciones_alcance_mu["Spanish"]["vigente"] = "";
	$placeHoldersbox_cat_control_aplicaciones_alcance_mu["Spanish"]["vigente"] = "";
	$fieldLabelsbox_cat_control_aplicaciones_alcance_mu["Spanish"]["descripcion_alcance"] = "Descripcion Alcance";
	$fieldToolTipsbox_cat_control_aplicaciones_alcance_mu["Spanish"]["descripcion_alcance"] = "";
	$placeHoldersbox_cat_control_aplicaciones_alcance_mu["Spanish"]["descripcion_alcance"] = "";
	$fieldLabelsbox_cat_control_aplicaciones_alcance_mu["Spanish"]["cat_control_aplicaciones_alcance_mu_id"] = "Cat Control Aplicaciones Alcance Mu Id";
	$fieldToolTipsbox_cat_control_aplicaciones_alcance_mu["Spanish"]["cat_control_aplicaciones_alcance_mu_id"] = "";
	$placeHoldersbox_cat_control_aplicaciones_alcance_mu["Spanish"]["cat_control_aplicaciones_alcance_mu_id"] = "";
	if (count($fieldToolTipsbox_cat_control_aplicaciones_alcance_mu["Spanish"]))
		$tdatabox_cat_control_aplicaciones_alcance_mu[".isUseToolTips"] = true;
}





$tdatabox_cat_control_aplicaciones_alcance_mu[".shortTableName"] = "box_cat_control_aplicaciones_alcance_mu";
$tdatabox_cat_control_aplicaciones_alcance_mu[".nSecOptions"] = 0;

$tdatabox_cat_control_aplicaciones_alcance_mu[".mainTableOwnerID"] = "";
$tdatabox_cat_control_aplicaciones_alcance_mu[".entityType"] = 1;
$tdatabox_cat_control_aplicaciones_alcance_mu[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_control_aplicaciones_alcance_mu[".strOriginalTableName"] = "cat_control_aplicaciones_alcance_mu";

	



$tdatabox_cat_control_aplicaciones_alcance_mu[".showAddInPopup"] = false;

$tdatabox_cat_control_aplicaciones_alcance_mu[".showEditInPopup"] = false;

$tdatabox_cat_control_aplicaciones_alcance_mu[".showViewInPopup"] = false;

$tdatabox_cat_control_aplicaciones_alcance_mu[".listAjax"] = false;
//	temporary
//$tdatabox_cat_control_aplicaciones_alcance_mu[".listAjax"] = false;

	$tdatabox_cat_control_aplicaciones_alcance_mu[".audit"] = false;

	$tdatabox_cat_control_aplicaciones_alcance_mu[".locking"] = false;


$pages = $tdatabox_cat_control_aplicaciones_alcance_mu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_control_aplicaciones_alcance_mu[".edit"] = true;
	$tdatabox_cat_control_aplicaciones_alcance_mu[".afterEditAction"] = 1;
	$tdatabox_cat_control_aplicaciones_alcance_mu[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_control_aplicaciones_alcance_mu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_control_aplicaciones_alcance_mu[".add"] = true;
$tdatabox_cat_control_aplicaciones_alcance_mu[".afterAddAction"] = 1;
$tdatabox_cat_control_aplicaciones_alcance_mu[".closePopupAfterAdd"] = 1;
$tdatabox_cat_control_aplicaciones_alcance_mu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_control_aplicaciones_alcance_mu[".list"] = true;
}



$tdatabox_cat_control_aplicaciones_alcance_mu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_control_aplicaciones_alcance_mu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_control_aplicaciones_alcance_mu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_control_aplicaciones_alcance_mu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_control_aplicaciones_alcance_mu[".printFriendly"] = true;
}



$tdatabox_cat_control_aplicaciones_alcance_mu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_control_aplicaciones_alcance_mu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_control_aplicaciones_alcance_mu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_control_aplicaciones_alcance_mu[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_control_aplicaciones_alcance_mu[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_control_aplicaciones_alcance_mu[".buttonsAdded"] = false;

$tdatabox_cat_control_aplicaciones_alcance_mu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_control_aplicaciones_alcance_mu[".isUseTimeForSearch"] = false;


$tdatabox_cat_control_aplicaciones_alcance_mu[".badgeColor"] = "1E90FF";


$tdatabox_cat_control_aplicaciones_alcance_mu[".allSearchFields"] = array();
$tdatabox_cat_control_aplicaciones_alcance_mu[".filterFields"] = array();
$tdatabox_cat_control_aplicaciones_alcance_mu[".requiredSearchFields"] = array();

$tdatabox_cat_control_aplicaciones_alcance_mu[".googleLikeFields"] = array();
$tdatabox_cat_control_aplicaciones_alcance_mu[".googleLikeFields"][] = "vigente";
$tdatabox_cat_control_aplicaciones_alcance_mu[".googleLikeFields"][] = "descripcion_alcance";
$tdatabox_cat_control_aplicaciones_alcance_mu[".googleLikeFields"][] = "cat_control_aplicaciones_alcance_mu_id";



$tdatabox_cat_control_aplicaciones_alcance_mu[".tableType"] = "list";

$tdatabox_cat_control_aplicaciones_alcance_mu[".printerPageOrientation"] = 0;
$tdatabox_cat_control_aplicaciones_alcance_mu[".nPrinterPageScale"] = 100;

$tdatabox_cat_control_aplicaciones_alcance_mu[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_control_aplicaciones_alcance_mu[".geocodingEnabled"] = false;





$tdatabox_cat_control_aplicaciones_alcance_mu[".isResizeColumns"] = true;





$tdatabox_cat_control_aplicaciones_alcance_mu[".pageSize"] = 20;

$tdatabox_cat_control_aplicaciones_alcance_mu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_control_aplicaciones_alcance_mu[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_control_aplicaciones_alcance_mu[".orderindexes"] = array();


$tdatabox_cat_control_aplicaciones_alcance_mu[".sqlHead"] = "SELECT vigente,descripcion_alcance,  cat_control_aplicaciones_alcance_mu_id";
$tdatabox_cat_control_aplicaciones_alcance_mu[".sqlFrom"] = "FROM cat_control_aplicaciones_alcance_mu";
$tdatabox_cat_control_aplicaciones_alcance_mu[".sqlWhereExpr"] = "(vigente =1)";
$tdatabox_cat_control_aplicaciones_alcance_mu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_control_aplicaciones_alcance_mu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_control_aplicaciones_alcance_mu[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_control_aplicaciones_alcance_mu[".highlightSearchResults"] = true;

$tableKeysbox_cat_control_aplicaciones_alcance_mu = array();
$tableKeysbox_cat_control_aplicaciones_alcance_mu[] = "cat_control_aplicaciones_alcance_mu_id";
$tdatabox_cat_control_aplicaciones_alcance_mu[".Keys"] = $tableKeysbox_cat_control_aplicaciones_alcance_mu;


$tdatabox_cat_control_aplicaciones_alcance_mu[".hideMobileList"] = array();




//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_control_aplicaciones_alcance_mu";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_alcance_mu","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
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


	$tdatabox_cat_control_aplicaciones_alcance_mu["vigente"] = $fdata;
		$tdatabox_cat_control_aplicaciones_alcance_mu[".searchableFields"][] = "vigente";
//	descripcion_alcance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_alcance";
	$fdata["GoodName"] = "descripcion_alcance";
	$fdata["ownerTable"] = "cat_control_aplicaciones_alcance_mu";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_alcance_mu","descripcion_alcance");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_alcance";

		$fdata["sourceSingle"] = "descripcion_alcance";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion_alcance";

	
	
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


	$tdatabox_cat_control_aplicaciones_alcance_mu["descripcion_alcance"] = $fdata;
		$tdatabox_cat_control_aplicaciones_alcance_mu[".searchableFields"][] = "descripcion_alcance";
//	cat_control_aplicaciones_alcance_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_control_aplicaciones_alcance_mu_id";
	$fdata["GoodName"] = "cat_control_aplicaciones_alcance_mu_id";
	$fdata["ownerTable"] = "cat_control_aplicaciones_alcance_mu";
	$fdata["Label"] = GetFieldLabel("box_cat_control_aplicaciones_alcance_mu","cat_control_aplicaciones_alcance_mu_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_control_aplicaciones_alcance_mu_id";

		$fdata["sourceSingle"] = "cat_control_aplicaciones_alcance_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_control_aplicaciones_alcance_mu_id";

	
	
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


	$tdatabox_cat_control_aplicaciones_alcance_mu["cat_control_aplicaciones_alcance_mu_id"] = $fdata;
		$tdatabox_cat_control_aplicaciones_alcance_mu[".searchableFields"][] = "cat_control_aplicaciones_alcance_mu_id";


$tables_data["box_cat_control_aplicaciones_alcance_mu"]=&$tdatabox_cat_control_aplicaciones_alcance_mu;
$field_labels["box_cat_control_aplicaciones_alcance_mu"] = &$fieldLabelsbox_cat_control_aplicaciones_alcance_mu;
$fieldToolTips["box_cat_control_aplicaciones_alcance_mu"] = &$fieldToolTipsbox_cat_control_aplicaciones_alcance_mu;
$placeHolders["box_cat_control_aplicaciones_alcance_mu"] = &$placeHoldersbox_cat_control_aplicaciones_alcance_mu;
$page_titles["box_cat_control_aplicaciones_alcance_mu"] = &$pageTitlesbox_cat_control_aplicaciones_alcance_mu;


changeTextControlsToDate( "box_cat_control_aplicaciones_alcance_mu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_control_aplicaciones_alcance_mu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_control_aplicaciones_alcance_mu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_control_aplicaciones_alcance_mu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigente,descripcion_alcance,  cat_control_aplicaciones_alcance_mu_id";
$proto0["m_strFrom"] = "FROM cat_control_aplicaciones_alcance_mu";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_control_aplicaciones_alcance_mu",
	"m_srcTableName" => "box_cat_control_aplicaciones_alcance_mu"
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
	"m_strTable" => "cat_control_aplicaciones_alcance_mu",
	"m_srcTableName" => "box_cat_control_aplicaciones_alcance_mu"
));

$proto6["m_sql"] = "vigente";
$proto6["m_srcTableName"] = "box_cat_control_aplicaciones_alcance_mu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_alcance",
	"m_strTable" => "cat_control_aplicaciones_alcance_mu",
	"m_srcTableName" => "box_cat_control_aplicaciones_alcance_mu"
));

$proto8["m_sql"] = "descripcion_alcance";
$proto8["m_srcTableName"] = "box_cat_control_aplicaciones_alcance_mu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_control_aplicaciones_alcance_mu_id",
	"m_strTable" => "cat_control_aplicaciones_alcance_mu",
	"m_srcTableName" => "box_cat_control_aplicaciones_alcance_mu"
));

$proto10["m_sql"] = "cat_control_aplicaciones_alcance_mu_id";
$proto10["m_srcTableName"] = "box_cat_control_aplicaciones_alcance_mu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "cat_control_aplicaciones_alcance_mu";
$proto13["m_srcTableName"] = "box_cat_control_aplicaciones_alcance_mu";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "vigente";
$proto13["m_columns"][] = "descripcion_alcance";
$proto13["m_columns"][] = "cat_control_aplicaciones_alcance_mu_id";
$proto13["m_columns"][] = "capturista";
$proto13["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "cat_control_aplicaciones_alcance_mu";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "box_cat_control_aplicaciones_alcance_mu";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_control_aplicaciones_alcance_mu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_control_aplicaciones_alcance_mu = createSqlQuery_box_cat_control_aplicaciones_alcance_mu();


	
		;

			

$tdatabox_cat_control_aplicaciones_alcance_mu[".sqlquery"] = $queryData_box_cat_control_aplicaciones_alcance_mu;



$tdatabox_cat_control_aplicaciones_alcance_mu[".hasEvents"] = false;

?>