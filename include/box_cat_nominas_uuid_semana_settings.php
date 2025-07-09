<?php
$tdatabox_cat_nominas_uuid_semana = array();
$tdatabox_cat_nominas_uuid_semana[".searchableFields"] = array();
$tdatabox_cat_nominas_uuid_semana[".ShortName"] = "box_cat_nominas_uuid_semana";
$tdatabox_cat_nominas_uuid_semana[".OwnerID"] = "";
$tdatabox_cat_nominas_uuid_semana[".OriginalTable"] = "cat_nominas_uuid_semana";


$tdatabox_cat_nominas_uuid_semana[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_nominas_uuid_semana[".originalPagesByType"] = $tdatabox_cat_nominas_uuid_semana[".pagesByType"];
$tdatabox_cat_nominas_uuid_semana[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_nominas_uuid_semana[".originalPages"] = $tdatabox_cat_nominas_uuid_semana[".pages"];
$tdatabox_cat_nominas_uuid_semana[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_nominas_uuid_semana[".originalDefaultPages"] = $tdatabox_cat_nominas_uuid_semana[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_nominas_uuid_semana = array();
$fieldToolTipsbox_cat_nominas_uuid_semana = array();
$pageTitlesbox_cat_nominas_uuid_semana = array();
$placeHoldersbox_cat_nominas_uuid_semana = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_nominas_uuid_semana["Spanish"] = array();
	$fieldToolTipsbox_cat_nominas_uuid_semana["Spanish"] = array();
	$placeHoldersbox_cat_nominas_uuid_semana["Spanish"] = array();
	$pageTitlesbox_cat_nominas_uuid_semana["Spanish"] = array();
	$fieldLabelsbox_cat_nominas_uuid_semana["Spanish"]["llave_ano_semana_nominas_uuid"] = "Llave";
	$fieldToolTipsbox_cat_nominas_uuid_semana["Spanish"]["llave_ano_semana_nominas_uuid"] = "";
	$placeHoldersbox_cat_nominas_uuid_semana["Spanish"]["llave_ano_semana_nominas_uuid"] = "";
	$fieldLabelsbox_cat_nominas_uuid_semana["Spanish"]["ano_semana"] = "Anio/sem";
	$fieldToolTipsbox_cat_nominas_uuid_semana["Spanish"]["ano_semana"] = "";
	$placeHoldersbox_cat_nominas_uuid_semana["Spanish"]["ano_semana"] = "";
	$fieldLabelsbox_cat_nominas_uuid_semana["Spanish"]["fecha_de_inicio"] = "Inicio";
	$fieldToolTipsbox_cat_nominas_uuid_semana["Spanish"]["fecha_de_inicio"] = "";
	$placeHoldersbox_cat_nominas_uuid_semana["Spanish"]["fecha_de_inicio"] = "";
	$fieldLabelsbox_cat_nominas_uuid_semana["Spanish"]["fecha_de_termino"] = "Termino";
	$fieldToolTipsbox_cat_nominas_uuid_semana["Spanish"]["fecha_de_termino"] = "";
	$placeHoldersbox_cat_nominas_uuid_semana["Spanish"]["fecha_de_termino"] = "";
	if (count($fieldToolTipsbox_cat_nominas_uuid_semana["Spanish"]))
		$tdatabox_cat_nominas_uuid_semana[".isUseToolTips"] = true;
}





$tdatabox_cat_nominas_uuid_semana[".shortTableName"] = "box_cat_nominas_uuid_semana";
$tdatabox_cat_nominas_uuid_semana[".nSecOptions"] = 0;

$tdatabox_cat_nominas_uuid_semana[".mainTableOwnerID"] = "";
$tdatabox_cat_nominas_uuid_semana[".entityType"] = 1;
$tdatabox_cat_nominas_uuid_semana[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_nominas_uuid_semana[".strOriginalTableName"] = "cat_nominas_uuid_semana";

	



$tdatabox_cat_nominas_uuid_semana[".showAddInPopup"] = false;

$tdatabox_cat_nominas_uuid_semana[".showEditInPopup"] = false;

$tdatabox_cat_nominas_uuid_semana[".showViewInPopup"] = false;

$tdatabox_cat_nominas_uuid_semana[".listAjax"] = false;
//	temporary
//$tdatabox_cat_nominas_uuid_semana[".listAjax"] = false;

	$tdatabox_cat_nominas_uuid_semana[".audit"] = false;

	$tdatabox_cat_nominas_uuid_semana[".locking"] = false;


$pages = $tdatabox_cat_nominas_uuid_semana[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_nominas_uuid_semana[".edit"] = true;
	$tdatabox_cat_nominas_uuid_semana[".afterEditAction"] = 1;
	$tdatabox_cat_nominas_uuid_semana[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_nominas_uuid_semana[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_nominas_uuid_semana[".add"] = true;
$tdatabox_cat_nominas_uuid_semana[".afterAddAction"] = 1;
$tdatabox_cat_nominas_uuid_semana[".closePopupAfterAdd"] = 1;
$tdatabox_cat_nominas_uuid_semana[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_nominas_uuid_semana[".list"] = true;
}



$tdatabox_cat_nominas_uuid_semana[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_nominas_uuid_semana[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_nominas_uuid_semana[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_nominas_uuid_semana[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_nominas_uuid_semana[".printFriendly"] = true;
}



$tdatabox_cat_nominas_uuid_semana[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_nominas_uuid_semana[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_nominas_uuid_semana[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_nominas_uuid_semana[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_nominas_uuid_semana[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_nominas_uuid_semana[".buttonsAdded"] = false;

$tdatabox_cat_nominas_uuid_semana[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_nominas_uuid_semana[".isUseTimeForSearch"] = false;


$tdatabox_cat_nominas_uuid_semana[".badgeColor"] = "00C2C5";


$tdatabox_cat_nominas_uuid_semana[".allSearchFields"] = array();
$tdatabox_cat_nominas_uuid_semana[".filterFields"] = array();
$tdatabox_cat_nominas_uuid_semana[".requiredSearchFields"] = array();

$tdatabox_cat_nominas_uuid_semana[".googleLikeFields"] = array();
$tdatabox_cat_nominas_uuid_semana[".googleLikeFields"][] = "llave_ano_semana_nominas_uuid";
$tdatabox_cat_nominas_uuid_semana[".googleLikeFields"][] = "ano_semana";
$tdatabox_cat_nominas_uuid_semana[".googleLikeFields"][] = "fecha_de_inicio";
$tdatabox_cat_nominas_uuid_semana[".googleLikeFields"][] = "fecha_de_termino";



$tdatabox_cat_nominas_uuid_semana[".tableType"] = "list";

$tdatabox_cat_nominas_uuid_semana[".printerPageOrientation"] = 0;
$tdatabox_cat_nominas_uuid_semana[".nPrinterPageScale"] = 100;

$tdatabox_cat_nominas_uuid_semana[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_nominas_uuid_semana[".geocodingEnabled"] = false;





$tdatabox_cat_nominas_uuid_semana[".isResizeColumns"] = true;





$tdatabox_cat_nominas_uuid_semana[".pageSize"] = 20;

$tdatabox_cat_nominas_uuid_semana[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_nominas_uuid_semana[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_nominas_uuid_semana[".orderindexes"] = array();


$tdatabox_cat_nominas_uuid_semana[".sqlHead"] = "SELECT llave_ano_semana_nominas_uuid,  ano_semana,  fecha_de_inicio,  fecha_de_termino";
$tdatabox_cat_nominas_uuid_semana[".sqlFrom"] = "FROM cat_nominas_uuid_semana";
$tdatabox_cat_nominas_uuid_semana[".sqlWhereExpr"] = "(vigente =1)";
$tdatabox_cat_nominas_uuid_semana[".sqlTail"] = "";

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
$tdatabox_cat_nominas_uuid_semana[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_nominas_uuid_semana[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_nominas_uuid_semana[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_nominas_uuid_semana[".highlightSearchResults"] = true;

$tableKeysbox_cat_nominas_uuid_semana = array();
$tdatabox_cat_nominas_uuid_semana[".Keys"] = $tableKeysbox_cat_nominas_uuid_semana;


$tdatabox_cat_nominas_uuid_semana[".hideMobileList"] = array();




//	llave_ano_semana_nominas_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "llave_ano_semana_nominas_uuid";
	$fdata["GoodName"] = "llave_ano_semana_nominas_uuid";
	$fdata["ownerTable"] = "cat_nominas_uuid_semana";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_uuid_semana","llave_ano_semana_nominas_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "llave_ano_semana_nominas_uuid";

		$fdata["sourceSingle"] = "llave_ano_semana_nominas_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "llave_ano_semana_nominas_uuid";

	
	
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
			$edata["EditParams"].= " maxlength=58";

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


	$tdatabox_cat_nominas_uuid_semana["llave_ano_semana_nominas_uuid"] = $fdata;
		$tdatabox_cat_nominas_uuid_semana[".searchableFields"][] = "llave_ano_semana_nominas_uuid";
//	ano_semana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ano_semana";
	$fdata["GoodName"] = "ano_semana";
	$fdata["ownerTable"] = "cat_nominas_uuid_semana";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_uuid_semana","ano_semana");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ano_semana";

		$fdata["sourceSingle"] = "ano_semana";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ano_semana";

	
	
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
			$edata["EditParams"].= " maxlength=7";

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


	$tdatabox_cat_nominas_uuid_semana["ano_semana"] = $fdata;
		$tdatabox_cat_nominas_uuid_semana[".searchableFields"][] = "ano_semana";
//	fecha_de_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha_de_inicio";
	$fdata["GoodName"] = "fecha_de_inicio";
	$fdata["ownerTable"] = "cat_nominas_uuid_semana";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_uuid_semana","fecha_de_inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_inicio";

		$fdata["sourceSingle"] = "fecha_de_inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_inicio";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatabox_cat_nominas_uuid_semana["fecha_de_inicio"] = $fdata;
		$tdatabox_cat_nominas_uuid_semana[".searchableFields"][] = "fecha_de_inicio";
//	fecha_de_termino
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_de_termino";
	$fdata["GoodName"] = "fecha_de_termino";
	$fdata["ownerTable"] = "cat_nominas_uuid_semana";
	$fdata["Label"] = GetFieldLabel("box_cat_nominas_uuid_semana","fecha_de_termino");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_termino";

		$fdata["sourceSingle"] = "fecha_de_termino";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_termino";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatabox_cat_nominas_uuid_semana["fecha_de_termino"] = $fdata;
		$tdatabox_cat_nominas_uuid_semana[".searchableFields"][] = "fecha_de_termino";


$tables_data["box_cat_nominas_uuid_semana"]=&$tdatabox_cat_nominas_uuid_semana;
$field_labels["box_cat_nominas_uuid_semana"] = &$fieldLabelsbox_cat_nominas_uuid_semana;
$fieldToolTips["box_cat_nominas_uuid_semana"] = &$fieldToolTipsbox_cat_nominas_uuid_semana;
$placeHolders["box_cat_nominas_uuid_semana"] = &$placeHoldersbox_cat_nominas_uuid_semana;
$page_titles["box_cat_nominas_uuid_semana"] = &$pageTitlesbox_cat_nominas_uuid_semana;


changeTextControlsToDate( "box_cat_nominas_uuid_semana" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_nominas_uuid_semana"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_nominas_uuid_semana"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_nominas_uuid_semana()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "llave_ano_semana_nominas_uuid,  ano_semana,  fecha_de_inicio,  fecha_de_termino";
$proto0["m_strFrom"] = "FROM cat_nominas_uuid_semana";
$proto0["m_strWhere"] = "(vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_nominas_uuid_semana",
	"m_srcTableName" => "box_cat_nominas_uuid_semana"
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
	"m_strName" => "llave_ano_semana_nominas_uuid",
	"m_strTable" => "cat_nominas_uuid_semana",
	"m_srcTableName" => "box_cat_nominas_uuid_semana"
));

$proto6["m_sql"] = "llave_ano_semana_nominas_uuid";
$proto6["m_srcTableName"] = "box_cat_nominas_uuid_semana";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ano_semana",
	"m_strTable" => "cat_nominas_uuid_semana",
	"m_srcTableName" => "box_cat_nominas_uuid_semana"
));

$proto8["m_sql"] = "ano_semana";
$proto8["m_srcTableName"] = "box_cat_nominas_uuid_semana";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_inicio",
	"m_strTable" => "cat_nominas_uuid_semana",
	"m_srcTableName" => "box_cat_nominas_uuid_semana"
));

$proto10["m_sql"] = "fecha_de_inicio";
$proto10["m_srcTableName"] = "box_cat_nominas_uuid_semana";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_termino",
	"m_strTable" => "cat_nominas_uuid_semana",
	"m_srcTableName" => "box_cat_nominas_uuid_semana"
));

$proto12["m_sql"] = "fecha_de_termino";
$proto12["m_srcTableName"] = "box_cat_nominas_uuid_semana";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "cat_nominas_uuid_semana";
$proto15["m_srcTableName"] = "box_cat_nominas_uuid_semana";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "llave_ano_semana_nominas_uuid";
$proto15["m_columns"][] = "cat_usuarios_licencias_id";
$proto15["m_columns"][] = "fecha";
$proto15["m_columns"][] = "periodo";
$proto15["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto15["m_columns"][] = "fecha_de_inicio";
$proto15["m_columns"][] = "fecha_de_termino";
$proto15["m_columns"][] = "ano";
$proto15["m_columns"][] = "mes";
$proto15["m_columns"][] = "semana";
$proto15["m_columns"][] = "ano_semana";
$proto15["m_columns"][] = "descripcion_nomina";
$proto15["m_columns"][] = "horas_semana_laboral";
$proto15["m_columns"][] = "dia";
$proto15["m_columns"][] = "dia_de_inicio";
$proto15["m_columns"][] = "dia_semana";
$proto15["m_columns"][] = "llave_dias_de_inicio";
$proto15["m_columns"][] = "llave_dias_de_inicio_nominas_uuid";
$proto15["m_columns"][] = "llave_fecha_nominas_uuid";
$proto15["m_columns"][] = "llave_fecha_licencia";
$proto15["m_columns"][] = "cat_nominas_01_generales_id";
$proto15["m_columns"][] = "vigente";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "cat_nominas_uuid_semana";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "box_cat_nominas_uuid_semana";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_nominas_uuid_semana";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_nominas_uuid_semana = createSqlQuery_box_cat_nominas_uuid_semana();


	
		;

				

$tdatabox_cat_nominas_uuid_semana[".sqlquery"] = $queryData_box_cat_nominas_uuid_semana;



$tdatabox_cat_nominas_uuid_semana[".hasEvents"] = false;

?>