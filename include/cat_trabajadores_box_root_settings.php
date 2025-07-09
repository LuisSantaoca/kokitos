<?php
$tdatacat_trabajadores_box_root = array();
$tdatacat_trabajadores_box_root[".searchableFields"] = array();
$tdatacat_trabajadores_box_root[".ShortName"] = "cat_trabajadores_box_root";
$tdatacat_trabajadores_box_root[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_box_root[".OriginalTable"] = "cat_trabajadores_altas";


$tdatacat_trabajadores_box_root[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_box_root[".originalPagesByType"] = $tdatacat_trabajadores_box_root[".pagesByType"];
$tdatacat_trabajadores_box_root[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_box_root[".originalPages"] = $tdatacat_trabajadores_box_root[".pages"];
$tdatacat_trabajadores_box_root[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_trabajadores_box_root[".originalDefaultPages"] = $tdatacat_trabajadores_box_root[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_box_root = array();
$fieldToolTipscat_trabajadores_box_root = array();
$pageTitlescat_trabajadores_box_root = array();
$placeHolderscat_trabajadores_box_root = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_box_root["Spanish"] = array();
	$fieldToolTipscat_trabajadores_box_root["Spanish"] = array();
	$placeHolderscat_trabajadores_box_root["Spanish"] = array();
	$pageTitlescat_trabajadores_box_root["Spanish"] = array();
	$fieldLabelscat_trabajadores_box_root["Spanish"]["cat_trabajadores_altas_id"] = "Id";
	$fieldToolTipscat_trabajadores_box_root["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_box_root["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_box_root["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscat_trabajadores_box_root["Spanish"]["nombre"] = "";
	$placeHolderscat_trabajadores_box_root["Spanish"]["nombre"] = "";
	$fieldLabelscat_trabajadores_box_root["Spanish"]["descripcion_licencia"] = "Descripcion Licencia";
	$fieldToolTipscat_trabajadores_box_root["Spanish"]["descripcion_licencia"] = "";
	$placeHolderscat_trabajadores_box_root["Spanish"]["descripcion_licencia"] = "";
	if (count($fieldToolTipscat_trabajadores_box_root["Spanish"]))
		$tdatacat_trabajadores_box_root[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_box_root[".shortTableName"] = "cat_trabajadores_box_root";
$tdatacat_trabajadores_box_root[".nSecOptions"] = 0;

$tdatacat_trabajadores_box_root[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_box_root[".entityType"] = 1;
$tdatacat_trabajadores_box_root[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_box_root[".strOriginalTableName"] = "cat_trabajadores_altas";

	



$tdatacat_trabajadores_box_root[".showAddInPopup"] = false;

$tdatacat_trabajadores_box_root[".showEditInPopup"] = false;

$tdatacat_trabajadores_box_root[".showViewInPopup"] = false;

$tdatacat_trabajadores_box_root[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_box_root[".listAjax"] = false;

	$tdatacat_trabajadores_box_root[".audit"] = true;

	$tdatacat_trabajadores_box_root[".locking"] = true;


$pages = $tdatacat_trabajadores_box_root[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_box_root[".edit"] = true;
	$tdatacat_trabajadores_box_root[".afterEditAction"] = 1;
	$tdatacat_trabajadores_box_root[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_box_root[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_box_root[".add"] = true;
$tdatacat_trabajadores_box_root[".afterAddAction"] = 1;
$tdatacat_trabajadores_box_root[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_box_root[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_box_root[".list"] = true;
}



$tdatacat_trabajadores_box_root[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_box_root[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_box_root[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_box_root[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_box_root[".printFriendly"] = true;
}



$tdatacat_trabajadores_box_root[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_box_root[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_box_root[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_box_root[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_box_root[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_box_root[".buttonsAdded"] = false;

$tdatacat_trabajadores_box_root[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_box_root[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_box_root[".badgeColor"] = "DC143C";


$tdatacat_trabajadores_box_root[".allSearchFields"] = array();
$tdatacat_trabajadores_box_root[".filterFields"] = array();
$tdatacat_trabajadores_box_root[".requiredSearchFields"] = array();

$tdatacat_trabajadores_box_root[".googleLikeFields"] = array();
$tdatacat_trabajadores_box_root[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_box_root[".googleLikeFields"][] = "nombre";
$tdatacat_trabajadores_box_root[".googleLikeFields"][] = "descripcion_licencia";



$tdatacat_trabajadores_box_root[".tableType"] = "list";

$tdatacat_trabajadores_box_root[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_box_root[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_box_root[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_box_root[".geocodingEnabled"] = false;





$tdatacat_trabajadores_box_root[".isResizeColumns"] = true;





$tdatacat_trabajadores_box_root[".pageSize"] = 20;

$tdatacat_trabajadores_box_root[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_box_root[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_box_root[".orderindexes"] = array();


$tdatacat_trabajadores_box_root[".sqlHead"] = "SELECT cat_trabajadores_altas.cat_trabajadores_altas_id,  concat(if(apellido_paterno is null,0,apellido_paterno), ' ', if(apellido_materno is null,0,apellido_materno), ' ', if(primer_nombre is null,0,primer_nombre), ' ', if(segundo_nombre is null, 0, segundo_nombre)) AS nombre,      cat_usuarios_licencias.descripcion_licencia";
$tdatacat_trabajadores_box_root[".sqlFrom"] = "FROM cat_trabajadores_altas  LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_altas.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_usuarios_licencias ON cat_usuarios.cat_usuarios_licencias_id = cat_usuarios_licencias.cat_usuarios_licencias_id";
$tdatacat_trabajadores_box_root[".sqlWhereExpr"] = "(cat_trabajadores_altas.vigente =1)";
$tdatacat_trabajadores_box_root[".sqlTail"] = "";

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
$tdatacat_trabajadores_box_root[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_box_root[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_box_root[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_box_root[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_box_root = array();
$tableKeyscat_trabajadores_box_root[] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_box_root[".Keys"] = $tableKeyscat_trabajadores_box_root;


$tdatacat_trabajadores_box_root[".hideMobileList"] = array();




//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_box_root","cat_trabajadores_altas_id");
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


	$tdatacat_trabajadores_box_root["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_box_root[".searchableFields"][] = "cat_trabajadores_altas_id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_box_root","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
	
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


	$tdatacat_trabajadores_box_root["nombre"] = $fdata;
		$tdatacat_trabajadores_box_root[".searchableFields"][] = "nombre";
//	descripcion_licencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion_licencia";
	$fdata["GoodName"] = "descripcion_licencia";
	$fdata["ownerTable"] = "cat_usuarios_licencias";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_box_root","descripcion_licencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_licencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_usuarios_licencias.descripcion_licencia";

	
	
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


	$tdatacat_trabajadores_box_root["descripcion_licencia"] = $fdata;
		$tdatacat_trabajadores_box_root[".searchableFields"][] = "descripcion_licencia";


$tables_data["cat_trabajadores_box_root"]=&$tdatacat_trabajadores_box_root;
$field_labels["cat_trabajadores_box_root"] = &$fieldLabelscat_trabajadores_box_root;
$fieldToolTips["cat_trabajadores_box_root"] = &$fieldToolTipscat_trabajadores_box_root;
$placeHolders["cat_trabajadores_box_root"] = &$placeHolderscat_trabajadores_box_root;
$page_titles["cat_trabajadores_box_root"] = &$pageTitlescat_trabajadores_box_root;


changeTextControlsToDate( "cat_trabajadores_box_root" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_box_root"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_box_root"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_box_root()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_altas.cat_trabajadores_altas_id,  concat(if(apellido_paterno is null,0,apellido_paterno), ' ', if(apellido_materno is null,0,apellido_materno), ' ', if(primer_nombre is null,0,primer_nombre), ' ', if(segundo_nombre is null, 0, segundo_nombre)) AS nombre,      cat_usuarios_licencias.descripcion_licencia";
$proto0["m_strFrom"] = "FROM cat_trabajadores_altas  LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_altas.capturista = cat_usuarios.usuario  LEFT OUTER JOIN cat_usuarios_licencias ON cat_usuarios.cat_usuarios_licencias_id = cat_usuarios_licencias.cat_usuarios_licencias_id";
$proto0["m_strWhere"] = "(cat_trabajadores_altas.vigente =1)";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cat_trabajadores_altas.vigente =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_box_root"
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
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_box_root"
));

$proto6["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto6["m_srcTableName"] = "cat_trabajadores_box_root";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(apellido_paterno is null,0,apellido_paterno)"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(apellido_materno is null,0,apellido_materno)"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(primer_nombre is null,0,primer_nombre)"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(segundo_nombre is null, 0, segundo_nombre)"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "concat(if(apellido_paterno is null,0,apellido_paterno), ' ', if(apellido_materno is null,0,apellido_materno), ' ', if(primer_nombre is null,0,primer_nombre), ' ', if(segundo_nombre is null, 0, segundo_nombre))";
$proto8["m_srcTableName"] = "cat_trabajadores_box_root";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "nombre";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_licencia",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_trabajadores_box_root"
));

$proto17["m_sql"] = "cat_usuarios_licencias.descripcion_licencia";
$proto17["m_srcTableName"] = "cat_trabajadores_box_root";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "cat_trabajadores_altas";
$proto20["m_srcTableName"] = "cat_trabajadores_box_root";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "cat_trabajadores_altas_id";
$proto20["m_columns"][] = "time_stamp";
$proto20["m_columns"][] = "capturista";
$proto20["m_columns"][] = "vigente";
$proto20["m_columns"][] = "fecha_de_registro";
$proto20["m_columns"][] = "apellido_paterno";
$proto20["m_columns"][] = "apellido_materno";
$proto20["m_columns"][] = "primer_nombre";
$proto20["m_columns"][] = "segundo_nombre";
$proto20["m_columns"][] = "rfc";
$proto20["m_columns"][] = "curp";
$proto20["m_columns"][] = "num_seguridad_social";
$proto20["m_columns"][] = "municipio_nacimiento";
$proto20["m_columns"][] = "estado_nacimiento";
$proto20["m_columns"][] = "nacionalidad";
$proto20["m_columns"][] = "telefono_emergencia";
$proto20["m_columns"][] = "contacto_emergencia";
$proto20["m_columns"][] = "nombre_completo";
$proto20["m_columns"][] = "fecha_de_nacimiento";
$proto20["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto20["m_columns"][] = "celular_mensajes";
$proto20["m_columns"][] = "permiso_msm";
$proto20["m_columns"][] = "estatus";
$proto20["m_columns"][] = "fecha_de_captura";
$proto20["m_columns"][] = "face_id";
$proto20["m_columns"][] = "tr_tags_numero_asignado";
$proto20["m_columns"][] = "cat_trabajadores_puestos_id";
$proto20["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto20["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto20["m_columns"][] = "calle";
$proto20["m_columns"][] = "colonia";
$proto20["m_columns"][] = "municipio";
$proto20["m_columns"][] = "estado";
$proto20["m_columns"][] = "codigo_postal";
$proto20["m_columns"][] = "banco";
$proto20["m_columns"][] = "cuenta_bancaria";
$proto20["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto20["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto20["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto20["m_columns"][] = "cat_holding_02_empresas";
$proto20["m_columns"][] = "fecha_de_ingreso";
$proto20["m_columns"][] = "numero_domicilio";
$proto20["m_columns"][] = "observaciones";
$proto20["m_columns"][] = "link_foto";
$proto20["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto20["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "cat_trabajadores_altas";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "cat_trabajadores_box_root";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
												$proto23=array();
$proto23["m_link"] = "SQLL_LEFTJOIN";
			$proto24=array();
$proto24["m_strName"] = "cat_usuarios";
$proto24["m_srcTableName"] = "cat_trabajadores_box_root";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "cat_usuarios_id";
$proto24["m_columns"][] = "time_stamp";
$proto24["m_columns"][] = "vigente";
$proto24["m_columns"][] = "capturista";
$proto24["m_columns"][] = "usuario";
$proto24["m_columns"][] = "cat_usuarios_licencias_id";
$proto24["m_columns"][] = "pass";
$proto24["m_columns"][] = "nombre";
$proto24["m_columns"][] = "correo";
$proto24["m_columns"][] = "cat_trabajadores_altas_id";
$proto24["m_columns"][] = "res_autorizacion";
$proto24["m_columns"][] = "session";
$proto24["m_columns"][] = "tipo";
$proto24["m_columns"][] = "session_v2";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_trabajadores_altas.capturista = cat_usuarios.usuario";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "cat_trabajadores_box_root";
$proto25=array();
$proto25["m_sql"] = "cat_usuarios.usuario = cat_trabajadores_altas.capturista";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_trabajadores_box_root"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "= cat_trabajadores_altas.capturista";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
												$proto27=array();
$proto27["m_link"] = "SQLL_LEFTJOIN";
			$proto28=array();
$proto28["m_strName"] = "cat_usuarios_licencias";
$proto28["m_srcTableName"] = "cat_trabajadores_box_root";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "cat_usuarios_licencias_id";
$proto28["m_columns"][] = "time_stamp";
$proto28["m_columns"][] = "vigente";
$proto28["m_columns"][] = "capturista";
$proto28["m_columns"][] = "descripcion_licencia";
$proto28["m_columns"][] = "fecha_inicio";
$proto28["m_columns"][] = "fecha_termino";
$proto28["m_columns"][] = "cat_apps_mu_id";
$proto28["m_columns"][] = "endpoint";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "LEFT OUTER JOIN cat_usuarios_licencias ON cat_usuarios.cat_usuarios_licencias_id = cat_usuarios_licencias.cat_usuarios_licencias_id";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "cat_trabajadores_box_root";
$proto29=array();
$proto29["m_sql"] = "cat_usuarios_licencias.cat_usuarios_licencias_id = cat_usuarios.cat_usuarios_licencias_id";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_usuarios_licencias_id",
	"m_strTable" => "cat_usuarios_licencias",
	"m_srcTableName" => "cat_trabajadores_box_root"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= cat_usuarios.cat_usuarios_licencias_id";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_box_root";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_box_root = createSqlQuery_cat_trabajadores_box_root();


	
		;

			

$tdatacat_trabajadores_box_root[".sqlquery"] = $queryData_cat_trabajadores_box_root;



$tdatacat_trabajadores_box_root[".hasEvents"] = false;

?>