<?php
$tdatabox_cat_trabajadores = array();
$tdatabox_cat_trabajadores[".searchableFields"] = array();
$tdatabox_cat_trabajadores[".ShortName"] = "box_cat_trabajadores";
$tdatabox_cat_trabajadores[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatabox_cat_trabajadores[".OriginalTable"] = "cat_trabajadores_altas";


$tdatabox_cat_trabajadores[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatabox_cat_trabajadores[".originalPagesByType"] = $tdatabox_cat_trabajadores[".pagesByType"];
$tdatabox_cat_trabajadores[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatabox_cat_trabajadores[".originalPages"] = $tdatabox_cat_trabajadores[".pages"];
$tdatabox_cat_trabajadores[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatabox_cat_trabajadores[".originalDefaultPages"] = $tdatabox_cat_trabajadores[".defaultPages"];

//	field labels
$fieldLabelsbox_cat_trabajadores = array();
$fieldToolTipsbox_cat_trabajadores = array();
$pageTitlesbox_cat_trabajadores = array();
$placeHoldersbox_cat_trabajadores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbox_cat_trabajadores["Spanish"] = array();
	$fieldToolTipsbox_cat_trabajadores["Spanish"] = array();
	$placeHoldersbox_cat_trabajadores["Spanish"] = array();
	$pageTitlesbox_cat_trabajadores["Spanish"] = array();
	$fieldLabelsbox_cat_trabajadores["Spanish"]["cat_trabajadores_altas_id"] = "Id";
	$fieldToolTipsbox_cat_trabajadores["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHoldersbox_cat_trabajadores["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelsbox_cat_trabajadores["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsbox_cat_trabajadores["Spanish"]["nombre"] = "";
	$placeHoldersbox_cat_trabajadores["Spanish"]["nombre"] = "";
	$fieldLabelsbox_cat_trabajadores["Spanish"]["cat_trabajadores_altas_id_empresa"] = "Id Empresa";
	$fieldToolTipsbox_cat_trabajadores["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHoldersbox_cat_trabajadores["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	if (count($fieldToolTipsbox_cat_trabajadores["Spanish"]))
		$tdatabox_cat_trabajadores[".isUseToolTips"] = true;
}





$tdatabox_cat_trabajadores[".shortTableName"] = "box_cat_trabajadores";
$tdatabox_cat_trabajadores[".nSecOptions"] = 0;

$tdatabox_cat_trabajadores[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatabox_cat_trabajadores[".entityType"] = 1;
$tdatabox_cat_trabajadores[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatabox_cat_trabajadores[".strOriginalTableName"] = "cat_trabajadores_altas";

	



$tdatabox_cat_trabajadores[".showAddInPopup"] = false;

$tdatabox_cat_trabajadores[".showEditInPopup"] = false;

$tdatabox_cat_trabajadores[".showViewInPopup"] = false;

$tdatabox_cat_trabajadores[".listAjax"] = false;
//	temporary
//$tdatabox_cat_trabajadores[".listAjax"] = false;

	$tdatabox_cat_trabajadores[".audit"] = true;

	$tdatabox_cat_trabajadores[".locking"] = true;


$pages = $tdatabox_cat_trabajadores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabox_cat_trabajadores[".edit"] = true;
	$tdatabox_cat_trabajadores[".afterEditAction"] = 1;
	$tdatabox_cat_trabajadores[".closePopupAfterEdit"] = 1;
	$tdatabox_cat_trabajadores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabox_cat_trabajadores[".add"] = true;
$tdatabox_cat_trabajadores[".afterAddAction"] = 1;
$tdatabox_cat_trabajadores[".closePopupAfterAdd"] = 1;
$tdatabox_cat_trabajadores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabox_cat_trabajadores[".list"] = true;
}



$tdatabox_cat_trabajadores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabox_cat_trabajadores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabox_cat_trabajadores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabox_cat_trabajadores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabox_cat_trabajadores[".printFriendly"] = true;
}



$tdatabox_cat_trabajadores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabox_cat_trabajadores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabox_cat_trabajadores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabox_cat_trabajadores[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatabox_cat_trabajadores[".ajaxCodeSnippetAdded"] = false;

$tdatabox_cat_trabajadores[".buttonsAdded"] = false;

$tdatabox_cat_trabajadores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabox_cat_trabajadores[".isUseTimeForSearch"] = false;


$tdatabox_cat_trabajadores[".badgeColor"] = "CD5C5C";


$tdatabox_cat_trabajadores[".allSearchFields"] = array();
$tdatabox_cat_trabajadores[".filterFields"] = array();
$tdatabox_cat_trabajadores[".requiredSearchFields"] = array();

$tdatabox_cat_trabajadores[".googleLikeFields"] = array();
$tdatabox_cat_trabajadores[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatabox_cat_trabajadores[".googleLikeFields"][] = "nombre";
$tdatabox_cat_trabajadores[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";



$tdatabox_cat_trabajadores[".tableType"] = "list";

$tdatabox_cat_trabajadores[".printerPageOrientation"] = 0;
$tdatabox_cat_trabajadores[".nPrinterPageScale"] = 100;

$tdatabox_cat_trabajadores[".nPrinterSplitRecords"] = 40;

$tdatabox_cat_trabajadores[".geocodingEnabled"] = false;





$tdatabox_cat_trabajadores[".isResizeColumns"] = true;





$tdatabox_cat_trabajadores[".pageSize"] = 20;

$tdatabox_cat_trabajadores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabox_cat_trabajadores[".strOrderBy"] = $tstrOrderBy;

$tdatabox_cat_trabajadores[".orderindexes"] = array();


$tdatabox_cat_trabajadores[".sqlHead"] = "SELECT cat_trabajadores_altas_id,  concat(if(apellido_paterno is null,'',apellido_paterno), ' ', if(apellido_materno is null,'',apellido_materno), ' ', if(primer_nombre is null,'',primer_nombre), ' ', if(segundo_nombre is null,'',segundo_nombre)) AS nombre,  cat_trabajadores_altas_id_empresa";
$tdatabox_cat_trabajadores[".sqlFrom"] = "FROM cat_trabajadores_altas";
$tdatabox_cat_trabajadores[".sqlWhereExpr"] = "";
$tdatabox_cat_trabajadores[".sqlTail"] = "";

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
$tdatabox_cat_trabajadores[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabox_cat_trabajadores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabox_cat_trabajadores[".arrGroupsPerPage"] = $arrGPP;

$tdatabox_cat_trabajadores[".highlightSearchResults"] = true;

$tableKeysbox_cat_trabajadores = array();
$tableKeysbox_cat_trabajadores[] = "cat_trabajadores_altas_id";
$tdatabox_cat_trabajadores[".Keys"] = $tableKeysbox_cat_trabajadores;


$tdatabox_cat_trabajadores[".hideMobileList"] = array();




//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("box_cat_trabajadores","cat_trabajadores_altas_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatabox_cat_trabajadores["cat_trabajadores_altas_id"] = $fdata;
		$tdatabox_cat_trabajadores[".searchableFields"][] = "cat_trabajadores_altas_id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("box_cat_trabajadores","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(if(apellido_paterno is null,'',apellido_paterno), ' ', if(apellido_materno is null,'',apellido_materno), ' ', if(primer_nombre is null,'',primer_nombre), ' ', if(segundo_nombre is null,'',segundo_nombre))";

	
	
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


	$tdatabox_cat_trabajadores["nombre"] = $fdata;
		$tdatabox_cat_trabajadores[".searchableFields"][] = "nombre";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("box_cat_trabajadores","cat_trabajadores_altas_id_empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id_empresa";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id_empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas_id_empresa";

	
	
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


	$tdatabox_cat_trabajadores["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatabox_cat_trabajadores[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";


$tables_data["box_cat_trabajadores"]=&$tdatabox_cat_trabajadores;
$field_labels["box_cat_trabajadores"] = &$fieldLabelsbox_cat_trabajadores;
$fieldToolTips["box_cat_trabajadores"] = &$fieldToolTipsbox_cat_trabajadores;
$placeHolders["box_cat_trabajadores"] = &$placeHoldersbox_cat_trabajadores;
$page_titles["box_cat_trabajadores"] = &$pageTitlesbox_cat_trabajadores;


changeTextControlsToDate( "box_cat_trabajadores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["box_cat_trabajadores"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["box_cat_trabajadores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_box_cat_trabajadores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_altas_id,  concat(if(apellido_paterno is null,'',apellido_paterno), ' ', if(apellido_materno is null,'',apellido_materno), ' ', if(primer_nombre is null,'',primer_nombre), ' ', if(segundo_nombre is null,'',segundo_nombre)) AS nombre,  cat_trabajadores_altas_id_empresa";
$proto0["m_strFrom"] = "FROM cat_trabajadores_altas";
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
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "box_cat_trabajadores"
));

$proto6["m_sql"] = "cat_trabajadores_altas_id";
$proto6["m_srcTableName"] = "box_cat_trabajadores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(apellido_paterno is null,'',apellido_paterno)"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(apellido_materno is null,'',apellido_materno)"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(primer_nombre is null,'',primer_nombre)"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto9["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(segundo_nombre is null,'',segundo_nombre)"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "concat(if(apellido_paterno is null,'',apellido_paterno), ' ', if(apellido_materno is null,'',apellido_materno), ' ', if(primer_nombre is null,'',primer_nombre), ' ', if(segundo_nombre is null,'',segundo_nombre))";
$proto8["m_srcTableName"] = "box_cat_trabajadores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "nombre";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "box_cat_trabajadores"
));

$proto17["m_sql"] = "cat_trabajadores_altas_id_empresa";
$proto17["m_srcTableName"] = "box_cat_trabajadores";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "cat_trabajadores_altas";
$proto20["m_srcTableName"] = "box_cat_trabajadores";
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
$proto19["m_srcTableName"] = "box_cat_trabajadores";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="box_cat_trabajadores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_box_cat_trabajadores = createSqlQuery_box_cat_trabajadores();


	
		;

			

$tdatabox_cat_trabajadores[".sqlquery"] = $queryData_box_cat_trabajadores;



$tdatabox_cat_trabajadores[".hasEvents"] = false;

?>