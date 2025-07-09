<?php
$tdatabox_cat_finanzas_cajas_chicas = array();
$tdatabox_cat_finanzas_cajas_chicas[".searchableFields"] = array();
$tdatabox_cat_finanzas_cajas_chicas[".ShortName"] = "box_cat_finanzas_cajas_chicas";
$tdatabox_cat_finanzas_cajas_chicas[".OwnerID"] = "";
$tdatabox_cat_finanzas_cajas_chicas[".OriginalTable"] = "cat_finanzas_cajas_chicas";


$tdatabox_cat_finanzas_cajas_chicas[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatabox_cat_finanzas_cajas_chicas[".originalPagesByType"] = $tdatabox_cat_finanzas_cajas_chicas[".pagesByType"];
$tdatabox_cat_finanzas_cajas_chicas[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_finanzas_cajas_chicas[".originalPages"] = $tdatabox_cat_finanzas_cajas_chicas[".pages"];
$tdatabox_cat_finanzas_cajas_chicas[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatabox_cat_finanzas_cajas_chicas[".originalDefaultPages"] = $tdatabox_cat_finanzas_cajas_chicas[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_finanzas_cajas_chicas = array();
$fieldToolTipsbox_cat_finanzas_cajas_chicas = array();
$pageTitlesbox_cat_finanzas_cajas_chicas = array();
$placeHoldersbox_cat_finanzas_cajas_chicas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_finanzas_cajas_chicas["Spanish"] = array();
	$fieldToolTipsbox_cat_finanzas_cajas_chicas["Spanish"] = array();
	$placeHoldersbox_cat_finanzas_cajas_chicas["Spanish"] = array();
	$pageTitlesbox_cat_finanzas_cajas_chicas["Spanish"] = array();
	$fieldLabelsbox_cat_finanzas_cajas_chicas["Spanish"]["descripcion_caja_chica"] = "Descripcion";
	$fieldToolTipsbox_cat_finanzas_cajas_chicas["Spanish"]["descripcion_caja_chica"] = "";
	$placeHoldersbox_cat_finanzas_cajas_chicas["Spanish"]["descripcion_caja_chica"] = "";
	$fieldLabelsbox_cat_finanzas_cajas_chicas["Spanish"]["cat_finanzas_cajas_chicas_id"] = "Id";
	$fieldToolTipsbox_cat_finanzas_cajas_chicas["Spanish"]["cat_finanzas_cajas_chicas_id"] = "";
	$placeHoldersbox_cat_finanzas_cajas_chicas["Spanish"]["cat_finanzas_cajas_chicas_id"] = "";
	$fieldLabelsbox_cat_finanzas_cajas_chicas["Spanish"]["cat_usuarios_licencias_id"] = "Cat Usuarios Licencias Id";
	$fieldToolTipsbox_cat_finanzas_cajas_chicas["Spanish"]["cat_usuarios_licencias_id"] = "";
	$placeHoldersbox_cat_finanzas_cajas_chicas["Spanish"]["cat_usuarios_licencias_id"] = "";
	if (count($fieldToolTipsbox_cat_finanzas_cajas_chicas["Spanish"]))
		$tdatabox_cat_finanzas_cajas_chicas[".isUseToolTips"] = true;
}





$tdatabox_cat_finanzas_cajas_chicas[".shortTableName"] = "box_cat_finanzas_cajas_chicas";
$tdatabox_cat_finanzas_cajas_chicas[".nSecOptions"] = 0;

$tdatabox_cat_finanzas_cajas_chicas[".mainTableOwnerID"] = "";
$tdatabox_cat_finanzas_cajas_chicas[".entityType"] = 1;
$tdatabox_cat_finanzas_cajas_chicas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_finanzas_cajas_chicas[".strOriginalTableName"] = "cat_finanzas_cajas_chicas";

	



$tdatabox_cat_finanzas_cajas_chicas[".showAddInPopup"] = false;

$tdatabox_cat_finanzas_cajas_chicas[".showEditInPopup"] = false;

$tdatabox_cat_finanzas_cajas_chicas[".showViewInPopup"] = false;

$tdatabox_cat_finanzas_cajas_chicas[".listAjax"] = false;
//	temporary
//$tdatabox_cat_finanzas_cajas_chicas[".listAjax"] = false;

	$tdatabox_cat_finanzas_cajas_chicas[".audit"] = false;

	$tdatabox_cat_finanzas_cajas_chicas[".locking"] = false;


$pages = $tdatabox_cat_finanzas_cajas_chicas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_finanzas_cajas_chicas[".edit"] = true;
	$tdatabox_cat_finanzas_cajas_chicas[".afterEditAction"] = 1;
	$tdatabox_cat_finanzas_cajas_chicas[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_finanzas_cajas_chicas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_finanzas_cajas_chicas[".add"] = true;
$tdatabox_cat_finanzas_cajas_chicas[".afterAddAction"] = 1;
$tdatabox_cat_finanzas_cajas_chicas[".closePopupAfterAdd"] = 1;
$tdatabox_cat_finanzas_cajas_chicas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_finanzas_cajas_chicas[".list"] = true;
}



$tdatabox_cat_finanzas_cajas_chicas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_finanzas_cajas_chicas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_finanzas_cajas_chicas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_finanzas_cajas_chicas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_finanzas_cajas_chicas[".printFriendly"] = true;
}



$tdatabox_cat_finanzas_cajas_chicas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_finanzas_cajas_chicas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_finanzas_cajas_chicas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_finanzas_cajas_chicas[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_finanzas_cajas_chicas[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_finanzas_cajas_chicas[".buttonsAdded"] = false;

$tdatabox_cat_finanzas_cajas_chicas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_finanzas_cajas_chicas[".isUseTimeForSearch"] = false;


$tdatabox_cat_finanzas_cajas_chicas[".badgeColor"] = "CD853F";


$tdatabox_cat_finanzas_cajas_chicas[".allSearchFields"] = array();
$tdatabox_cat_finanzas_cajas_chicas[".filterFields"] = array();
$tdatabox_cat_finanzas_cajas_chicas[".requiredSearchFields"] = array();

$tdatabox_cat_finanzas_cajas_chicas[".googleLikeFields"] = array();
$tdatabox_cat_finanzas_cajas_chicas[".googleLikeFields"][] = "cat_finanzas_cajas_chicas_id";
$tdatabox_cat_finanzas_cajas_chicas[".googleLikeFields"][] = "descripcion_caja_chica";
$tdatabox_cat_finanzas_cajas_chicas[".googleLikeFields"][] = "cat_usuarios_licencias_id";



$tdatabox_cat_finanzas_cajas_chicas[".tableType"] = "list";

$tdatabox_cat_finanzas_cajas_chicas[".printerPageOrientation"] = 0;
$tdatabox_cat_finanzas_cajas_chicas[".nPrinterPageScale"] = 100;

$tdatabox_cat_finanzas_cajas_chicas[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_finanzas_cajas_chicas[".geocodingEnabled"] = false;





$tdatabox_cat_finanzas_cajas_chicas[".isResizeColumns"] = true;





$tdatabox_cat_finanzas_cajas_chicas[".pageSize"] = 20;

$tdatabox_cat_finanzas_cajas_chicas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_finanzas_cajas_chicas[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_finanzas_cajas_chicas[".orderindexes"] = array();


$tdatabox_cat_finanzas_cajas_chicas[".sqlHead"] = "SELECT cat_finanzas_cajas_chicas.cat_finanzas_cajas_chicas_id,  cat_finanzas_cajas_chicas.descripcion_caja_chica,  cat_usuarios.cat_usuarios_licencias_id";
$tdatabox_cat_finanzas_cajas_chicas[".sqlFrom"] = "FROM cat_finanzas_cajas_chicas  INNER JOIN cat_usuarios ON cat_finanzas_cajas_chicas.capturista = cat_usuarios.usuario";
$tdatabox_cat_finanzas_cajas_chicas[".sqlWhereExpr"] = "(cat_finanzas_cajas_chicas.vigente =1)";
$tdatabox_cat_finanzas_cajas_chicas[".sqlTail"] = "";

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
$tdatabox_cat_finanzas_cajas_chicas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_finanzas_cajas_chicas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_finanzas_cajas_chicas[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_finanzas_cajas_chicas[".highlightSearchResults"] = true;

$tableKeysbox_cat_finanzas_cajas_chicas = array();
$tableKeysbox_cat_finanzas_cajas_chicas[] = "cat_finanzas_cajas_chicas_id";
$tdatabox_cat_finanzas_cajas_chicas[".Keys"] = $tableKeysbox_cat_finanzas_cajas_chicas;


$tdatabox_cat_finanzas_cajas_chicas[".hideMobileList"] = array();




//	cat_finanzas_cajas_chicas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_finanzas_cajas_chicas_id";
	$fdata["GoodName"] = "cat_finanzas_cajas_chicas_id";
	$fdata["ownerTable"] = "cat_finanzas_cajas_chicas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_cajas_chicas","cat_finanzas_cajas_chicas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_finanzas_cajas_chicas_id";

		$fdata["sourceSingle"] = "cat_finanzas_cajas_chicas_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_cajas_chicas.cat_finanzas_cajas_chicas_id";

	
	
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


	$tdatabox_cat_finanzas_cajas_chicas["cat_finanzas_cajas_chicas_id"] = $fdata;
		$tdatabox_cat_finanzas_cajas_chicas[".searchableFields"][] = "cat_finanzas_cajas_chicas_id";
//	descripcion_caja_chica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion_caja_chica";
	$fdata["GoodName"] = "descripcion_caja_chica";
	$fdata["ownerTable"] = "cat_finanzas_cajas_chicas";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_cajas_chicas","descripcion_caja_chica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_caja_chica";

		$fdata["sourceSingle"] = "descripcion_caja_chica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_finanzas_cajas_chicas.descripcion_caja_chica";

	
	
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


	$tdatabox_cat_finanzas_cajas_chicas["descripcion_caja_chica"] = $fdata;
		$tdatabox_cat_finanzas_cajas_chicas[".searchableFields"][] = "descripcion_caja_chica";
//	cat_usuarios_licencias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_usuarios_licencias_id";
	$fdata["GoodName"] = "cat_usuarios_licencias_id";
	$fdata["ownerTable"] = "cat_usuarios";
	$fdata["Label"] = GetFieldLabel("box_cat_finanzas_cajas_chicas","cat_usuarios_licencias_id");
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


	$tdatabox_cat_finanzas_cajas_chicas["cat_usuarios_licencias_id"] = $fdata;
		$tdatabox_cat_finanzas_cajas_chicas[".searchableFields"][] = "cat_usuarios_licencias_id";


$tables_data["box_cat_finanzas_cajas_chicas"]=&$tdatabox_cat_finanzas_cajas_chicas;
$field_labels["box_cat_finanzas_cajas_chicas"] = &$fieldLabelsbox_cat_finanzas_cajas_chicas;
$fieldToolTips["box_cat_finanzas_cajas_chicas"] = &$fieldToolTipsbox_cat_finanzas_cajas_chicas;
$placeHolders["box_cat_finanzas_cajas_chicas"] = &$placeHoldersbox_cat_finanzas_cajas_chicas;
$page_titles["box_cat_finanzas_cajas_chicas"] = &$pageTitlesbox_cat_finanzas_cajas_chicas;


changeTextControlsToDate( "box_cat_finanzas_cajas_chicas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_finanzas_cajas_chicas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_finanzas_cajas_chicas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_finanzas_cajas_chicas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_finanzas_cajas_chicas.cat_finanzas_cajas_chicas_id,  cat_finanzas_cajas_chicas.descripcion_caja_chica,  cat_usuarios.cat_usuarios_licencias_id";
$proto0["m_strFrom"] = "FROM cat_finanzas_cajas_chicas  INNER JOIN cat_usuarios ON cat_finanzas_cajas_chicas.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "(cat_finanzas_cajas_chicas.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_finanzas_cajas_chicas.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_finanzas_cajas_chicas",
	"m_srcTableName" => "box_cat_finanzas_cajas_chicas"
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
	"m_strName" => "cat_finanzas_cajas_chicas_id",
	"m_strTable" => "cat_finanzas_cajas_chicas",
	"m_srcTableName" => "box_cat_finanzas_cajas_chicas"
));

$proto6["m_sql"] = "cat_finanzas_cajas_chicas.cat_finanzas_cajas_chicas_id";
$proto6["m_srcTableName"] = "box_cat_finanzas_cajas_chicas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_caja_chica",
	"m_strTable" => "cat_finanzas_cajas_chicas",
	"m_srcTableName" => "box_cat_finanzas_cajas_chicas"
));

$proto8["m_sql"] = "cat_finanzas_cajas_chicas.descripcion_caja_chica";
$proto8["m_srcTableName"] = "box_cat_finanzas_cajas_chicas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_finanzas_cajas_chicas"
));

$proto10["m_sql"] = "cat_usuarios.cat_usuarios_licencias_id";
$proto10["m_srcTableName"] = "box_cat_finanzas_cajas_chicas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "cat_finanzas_cajas_chicas";
$proto13["m_srcTableName"] = "box_cat_finanzas_cajas_chicas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "vigente";
$proto13["m_columns"][] = "descripcion_caja_chica";
$proto13["m_columns"][] = "cat_finanzas_cajas_chicas_id";
$proto13["m_columns"][] = "capturista";
$proto13["m_columns"][] = "time_stamp";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "cat_finanzas_cajas_chicas";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "box_cat_finanzas_cajas_chicas";
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
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "cat_usuarios";
$proto17["m_srcTableName"] = "box_cat_finanzas_cajas_chicas";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cat_usuarios_id";
$proto17["m_columns"][] = "time_stamp";
$proto17["m_columns"][] = "vigente";
$proto17["m_columns"][] = "capturista";
$proto17["m_columns"][] = "usuario";
$proto17["m_columns"][] = "cat_usuarios_licencias_id";
$proto17["m_columns"][] = "pass";
$proto17["m_columns"][] = "nombre";
$proto17["m_columns"][] = "correo";
$proto17["m_columns"][] = "cat_trabajadores_altas_id";
$proto17["m_columns"][] = "res_autorizacion";
$proto17["m_columns"][] = "session";
$proto17["m_columns"][] = "tipo";
$proto17["m_columns"][] = "session_v2";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN cat_usuarios ON cat_finanzas_cajas_chicas.capturista = cat_usuarios.usuario";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "box_cat_finanzas_cajas_chicas";
$proto18=array();
$proto18["m_sql"] = "cat_usuarios.usuario = cat_finanzas_cajas_chicas.capturista";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "box_cat_finanzas_cajas_chicas"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= cat_finanzas_cajas_chicas.capturista";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_finanzas_cajas_chicas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_finanzas_cajas_chicas = createSqlQuery_box_cat_finanzas_cajas_chicas();


	
		;

			

$tdatabox_cat_finanzas_cajas_chicas[".sqlquery"] = $queryData_box_cat_finanzas_cajas_chicas;



$tdatabox_cat_finanzas_cajas_chicas[".hasEvents"] = false;

?>