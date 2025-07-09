<?php
$tdatacat_ventas_clientes = array();
$tdatacat_ventas_clientes[".searchableFields"] = array();
$tdatacat_ventas_clientes[".ShortName"] = "cat_ventas_clientes";
$tdatacat_ventas_clientes[".OwnerID"] = "";
$tdatacat_ventas_clientes[".OriginalTable"] = "cat_ventas_clientes";


$tdatacat_ventas_clientes[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_ventas_clientes[".originalPagesByType"] = $tdatacat_ventas_clientes[".pagesByType"];
$tdatacat_ventas_clientes[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_ventas_clientes[".originalPages"] = $tdatacat_ventas_clientes[".pages"];
$tdatacat_ventas_clientes[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_ventas_clientes[".originalDefaultPages"] = $tdatacat_ventas_clientes[".defaultPages"];

//	field labels
$fieldLabelscat_ventas_clientes = array();
$fieldToolTipscat_ventas_clientes = array();
$pageTitlescat_ventas_clientes = array();
$placeHolderscat_ventas_clientes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_ventas_clientes["Spanish"] = array();
	$fieldToolTipscat_ventas_clientes["Spanish"] = array();
	$placeHolderscat_ventas_clientes["Spanish"] = array();
	$pageTitlescat_ventas_clientes["Spanish"] = array();
	$fieldLabelscat_ventas_clientes["Spanish"]["cat_ventas_clientes_id"] = "Id";
	$fieldToolTipscat_ventas_clientes["Spanish"]["cat_ventas_clientes_id"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["cat_ventas_clientes_id"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_ventas_clientes["Spanish"]["time_stamp"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_ventas_clientes["Spanish"]["vigente"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["vigente"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_ventas_clientes["Spanish"]["capturista"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["capturista"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["fecha_de_captura"] = "Fecha";
	$fieldToolTipscat_ventas_clientes["Spanish"]["fecha_de_captura"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["nombre_cliente_old"] = "Nombre Cliente Old";
	$fieldToolTipscat_ventas_clientes["Spanish"]["nombre_cliente_old"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["nombre_cliente_old"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["rfc_cliente"] = "Rfc";
	$fieldToolTipscat_ventas_clientes["Spanish"]["rfc_cliente"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["rfc_cliente"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["descripcion_cliente"] = "Cliente";
	$fieldToolTipscat_ventas_clientes["Spanish"]["descripcion_cliente"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["descripcion_cliente"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["cp"] = "Cp";
	$fieldToolTipscat_ventas_clientes["Spanish"]["cp"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["cp"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["calle"] = "Calle";
	$fieldToolTipscat_ventas_clientes["Spanish"]["calle"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["calle"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["num_ex"] = "Num Ex";
	$fieldToolTipscat_ventas_clientes["Spanish"]["num_ex"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["num_ex"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["num_int"] = "Num Int";
	$fieldToolTipscat_ventas_clientes["Spanish"]["num_int"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["num_int"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["colonia"] = "Colonia";
	$fieldToolTipscat_ventas_clientes["Spanish"]["colonia"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["colonia"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipscat_ventas_clientes["Spanish"]["localidad"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["localidad"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipscat_ventas_clientes["Spanish"]["municipio"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["municipio"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["estado"] = "Estado";
	$fieldToolTipscat_ventas_clientes["Spanish"]["estado"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["estado"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["pais"] = "Pais";
	$fieldToolTipscat_ventas_clientes["Spanish"]["pais"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["pais"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipscat_ventas_clientes["Spanish"]["telefono"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["telefono"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["celular"] = "Celular";
	$fieldToolTipscat_ventas_clientes["Spanish"]["celular"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["celular"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["email"] = "Email";
	$fieldToolTipscat_ventas_clientes["Spanish"]["email"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["email"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["pagina_web"] = "Pagina Web";
	$fieldToolTipscat_ventas_clientes["Spanish"]["pagina_web"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["pagina_web"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["contacto"] = "Contacto";
	$fieldToolTipscat_ventas_clientes["Spanish"]["contacto"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["contacto"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["puesto"] = "Puesto";
	$fieldToolTipscat_ventas_clientes["Spanish"]["puesto"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["puesto"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["correo_contacto"] = "Correo Contacto";
	$fieldToolTipscat_ventas_clientes["Spanish"]["correo_contacto"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["correo_contacto"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["celular_contacto"] = "Celular Contacto";
	$fieldToolTipscat_ventas_clientes["Spanish"]["celular_contacto"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["celular_contacto"] = "";
	$fieldLabelscat_ventas_clientes["Spanish"]["clabe_interbancaria"] = "Clabe Interbancaria";
	$fieldToolTipscat_ventas_clientes["Spanish"]["clabe_interbancaria"] = "";
	$placeHolderscat_ventas_clientes["Spanish"]["clabe_interbancaria"] = "";
	if (count($fieldToolTipscat_ventas_clientes["Spanish"]))
		$tdatacat_ventas_clientes[".isUseToolTips"] = true;
}





$tdatacat_ventas_clientes[".shortTableName"] = "cat_ventas_clientes";
$tdatacat_ventas_clientes[".nSecOptions"] = 0;

$tdatacat_ventas_clientes[".mainTableOwnerID"] = "";
$tdatacat_ventas_clientes[".entityType"] = 0;
$tdatacat_ventas_clientes[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_ventas_clientes[".strOriginalTableName"] = "cat_ventas_clientes";

	



$tdatacat_ventas_clientes[".showAddInPopup"] = false;

$tdatacat_ventas_clientes[".showEditInPopup"] = false;

$tdatacat_ventas_clientes[".showViewInPopup"] = false;

$tdatacat_ventas_clientes[".listAjax"] = false;
//	temporary
//$tdatacat_ventas_clientes[".listAjax"] = false;

	$tdatacat_ventas_clientes[".audit"] = true;

	$tdatacat_ventas_clientes[".locking"] = true;


$pages = $tdatacat_ventas_clientes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_ventas_clientes[".edit"] = true;
	$tdatacat_ventas_clientes[".afterEditAction"] = 1;
	$tdatacat_ventas_clientes[".closePopupAfterEdit"] = 1;
	$tdatacat_ventas_clientes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_ventas_clientes[".add"] = true;
$tdatacat_ventas_clientes[".afterAddAction"] = 1;
$tdatacat_ventas_clientes[".closePopupAfterAdd"] = 1;
$tdatacat_ventas_clientes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_ventas_clientes[".list"] = true;
}



$tdatacat_ventas_clientes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_ventas_clientes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_ventas_clientes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_ventas_clientes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_ventas_clientes[".printFriendly"] = true;
}



$tdatacat_ventas_clientes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_ventas_clientes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_ventas_clientes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_ventas_clientes[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_ventas_clientes[".ajaxCodeSnippetAdded"] = false;

$tdatacat_ventas_clientes[".buttonsAdded"] = false;

$tdatacat_ventas_clientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_ventas_clientes[".isUseTimeForSearch"] = false;


$tdatacat_ventas_clientes[".badgeColor"] = "2F4F4F";


$tdatacat_ventas_clientes[".allSearchFields"] = array();
$tdatacat_ventas_clientes[".filterFields"] = array();
$tdatacat_ventas_clientes[".requiredSearchFields"] = array();

$tdatacat_ventas_clientes[".googleLikeFields"] = array();
$tdatacat_ventas_clientes[".googleLikeFields"][] = "cat_ventas_clientes_id";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "vigente";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "time_stamp";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "capturista";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "fecha_de_captura";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "nombre_cliente_old";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "rfc_cliente";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "descripcion_cliente";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "cp";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "calle";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "num_ex";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "num_int";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "colonia";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "localidad";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "municipio";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "estado";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "pais";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "telefono";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "celular";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "email";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "pagina_web";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "contacto";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "puesto";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "correo_contacto";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "celular_contacto";
$tdatacat_ventas_clientes[".googleLikeFields"][] = "clabe_interbancaria";



$tdatacat_ventas_clientes[".tableType"] = "list";

$tdatacat_ventas_clientes[".printerPageOrientation"] = 0;
$tdatacat_ventas_clientes[".nPrinterPageScale"] = 100;

$tdatacat_ventas_clientes[".nPrinterSplitRecords"] = 40;

$tdatacat_ventas_clientes[".geocodingEnabled"] = false;





$tdatacat_ventas_clientes[".isResizeColumns"] = true;





$tdatacat_ventas_clientes[".pageSize"] = 20;

$tdatacat_ventas_clientes[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY cat_ventas_clientes.cat_ventas_clientes_id DESC";
$tdatacat_ventas_clientes[".strOrderBy"] = $tstrOrderBy;

$tdatacat_ventas_clientes[".orderindexes"] = array();
			$tdatacat_ventas_clientes[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "cat_ventas_clientes.cat_ventas_clientes_id");


$tdatacat_ventas_clientes[".sqlHead"] = "SELECT cat_ventas_clientes.cat_ventas_clientes_id,  cat_ventas_clientes.vigente,  cat_ventas_clientes.time_stamp,  cat_ventas_clientes.capturista,  cat_ventas_clientes.fecha_de_captura,  cat_ventas_clientes.nombre_cliente_old,  cat_ventas_clientes.rfc_cliente,  cat_ventas_clientes.descripcion_cliente,  cat_ventas_clientes.cp,  cat_ventas_clientes.calle,  cat_ventas_clientes.num_ex,  cat_ventas_clientes.num_int,  cat_ventas_clientes.colonia,  cat_ventas_clientes.localidad,  cat_ventas_clientes.municipio,  cat_ventas_clientes.estado,  cat_ventas_clientes.pais,  cat_ventas_clientes.telefono,  cat_ventas_clientes.celular,  cat_ventas_clientes.email,  cat_ventas_clientes.pagina_web,  cat_ventas_clientes.contacto,  cat_ventas_clientes.puesto,  cat_ventas_clientes.correo_contacto,  cat_ventas_clientes.celular_contacto,  cat_ventas_clientes.clabe_interbancaria";
$tdatacat_ventas_clientes[".sqlFrom"] = "FROM cat_ventas_clientes  LEFT OUTER JOIN cat_usuarios ON cat_ventas_clientes.capturista = cat_usuarios.usuario";
$tdatacat_ventas_clientes[".sqlWhereExpr"] = "";
$tdatacat_ventas_clientes[".sqlTail"] = "";

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
$tdatacat_ventas_clientes[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_ventas_clientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_ventas_clientes[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_ventas_clientes[".highlightSearchResults"] = true;

$tableKeyscat_ventas_clientes = array();
$tableKeyscat_ventas_clientes[] = "cat_ventas_clientes_id";
$tdatacat_ventas_clientes[".Keys"] = $tableKeyscat_ventas_clientes;


$tdatacat_ventas_clientes[".hideMobileList"] = array();




//	cat_ventas_clientes_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_ventas_clientes_id";
	$fdata["GoodName"] = "cat_ventas_clientes_id";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","cat_ventas_clientes_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cat_ventas_clientes_id";

		$fdata["sourceSingle"] = "cat_ventas_clientes_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.cat_ventas_clientes_id";

	
	
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


	$tdatacat_ventas_clientes["cat_ventas_clientes_id"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "cat_ventas_clientes_id";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.vigente";

	
	
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


	$tdatacat_ventas_clientes["vigente"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "vigente";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.time_stamp";

	
	
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


	$tdatacat_ventas_clientes["time_stamp"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "time_stamp";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.capturista";

	
	
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


	$tdatacat_ventas_clientes["capturista"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "capturista";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.fecha_de_captura";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatacat_ventas_clientes["fecha_de_captura"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "fecha_de_captura";
//	nombre_cliente_old
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre_cliente_old";
	$fdata["GoodName"] = "nombre_cliente_old";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","nombre_cliente_old");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_cliente_old";

		$fdata["sourceSingle"] = "nombre_cliente_old";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.nombre_cliente_old";

	
	
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


	$tdatacat_ventas_clientes["nombre_cliente_old"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "nombre_cliente_old";
//	rfc_cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rfc_cliente";
	$fdata["GoodName"] = "rfc_cliente";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","rfc_cliente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rfc_cliente";

		$fdata["sourceSingle"] = "rfc_cliente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.rfc_cliente";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatacat_ventas_clientes["rfc_cliente"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "rfc_cliente";
//	descripcion_cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "descripcion_cliente";
	$fdata["GoodName"] = "descripcion_cliente";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","descripcion_cliente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_cliente";

		$fdata["sourceSingle"] = "descripcion_cliente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.descripcion_cliente";

	
	
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


	$tdatacat_ventas_clientes["descripcion_cliente"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "descripcion_cliente";
//	cp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cp";
	$fdata["GoodName"] = "cp";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","cp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cp";

		$fdata["sourceSingle"] = "cp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.cp";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatacat_ventas_clientes["cp"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "cp";
//	calle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "calle";
	$fdata["GoodName"] = "calle";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","calle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "calle";

		$fdata["sourceSingle"] = "calle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.calle";

	
	
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


	$tdatacat_ventas_clientes["calle"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "calle";
//	num_ex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "num_ex";
	$fdata["GoodName"] = "num_ex";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","num_ex");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "num_ex";

		$fdata["sourceSingle"] = "num_ex";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.num_ex";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdatacat_ventas_clientes["num_ex"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "num_ex";
//	num_int
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "num_int";
	$fdata["GoodName"] = "num_int";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","num_int");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "num_int";

		$fdata["sourceSingle"] = "num_int";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.num_int";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatacat_ventas_clientes["num_int"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "num_int";
//	colonia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "colonia";
	$fdata["GoodName"] = "colonia";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","colonia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "colonia";

		$fdata["sourceSingle"] = "colonia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.colonia";

	
	
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


	$tdatacat_ventas_clientes["colonia"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "colonia";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "localidad";

		$fdata["sourceSingle"] = "localidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.localidad";

	
	
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


	$tdatacat_ventas_clientes["localidad"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "localidad";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "municipio";

		$fdata["sourceSingle"] = "municipio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.municipio";

	
	
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


	$tdatacat_ventas_clientes["municipio"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "municipio";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.estado";

	
	
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


	$tdatacat_ventas_clientes["estado"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "estado";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","pais");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pais";

		$fdata["sourceSingle"] = "pais";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.pais";

	
	
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


	$tdatacat_ventas_clientes["pais"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "pais";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","telefono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono";

		$fdata["sourceSingle"] = "telefono";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.telefono";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatacat_ventas_clientes["telefono"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "telefono";
//	celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "celular";
	$fdata["GoodName"] = "celular";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","celular");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "celular";

		$fdata["sourceSingle"] = "celular";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.celular";

	
	
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


	$tdatacat_ventas_clientes["celular"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "celular";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.email";

	
	
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


	$tdatacat_ventas_clientes["email"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "email";
//	pagina_web
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "pagina_web";
	$fdata["GoodName"] = "pagina_web";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","pagina_web");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pagina_web";

		$fdata["sourceSingle"] = "pagina_web";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.pagina_web";

	
	
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


	$tdatacat_ventas_clientes["pagina_web"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "pagina_web";
//	contacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "contacto";
	$fdata["GoodName"] = "contacto";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","contacto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contacto";

		$fdata["sourceSingle"] = "contacto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.contacto";

	
	
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


	$tdatacat_ventas_clientes["contacto"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "contacto";
//	puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "puesto";
	$fdata["GoodName"] = "puesto";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","puesto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "puesto";

		$fdata["sourceSingle"] = "puesto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.puesto";

	
	
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


	$tdatacat_ventas_clientes["puesto"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "puesto";
//	correo_contacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "correo_contacto";
	$fdata["GoodName"] = "correo_contacto";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","correo_contacto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "correo_contacto";

		$fdata["sourceSingle"] = "correo_contacto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.correo_contacto";

	
	
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


	$tdatacat_ventas_clientes["correo_contacto"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "correo_contacto";
//	celular_contacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "celular_contacto";
	$fdata["GoodName"] = "celular_contacto";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","celular_contacto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "celular_contacto";

		$fdata["sourceSingle"] = "celular_contacto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.celular_contacto";

	
	
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


	$tdatacat_ventas_clientes["celular_contacto"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "celular_contacto";
//	clabe_interbancaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "clabe_interbancaria";
	$fdata["GoodName"] = "clabe_interbancaria";
	$fdata["ownerTable"] = "cat_ventas_clientes";
	$fdata["Label"] = GetFieldLabel("cat_ventas_clientes","clabe_interbancaria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "clabe_interbancaria";

		$fdata["sourceSingle"] = "clabe_interbancaria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_ventas_clientes.clabe_interbancaria";

	
	
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


	$tdatacat_ventas_clientes["clabe_interbancaria"] = $fdata;
		$tdatacat_ventas_clientes[".searchableFields"][] = "clabe_interbancaria";


$tables_data["cat_ventas_clientes"]=&$tdatacat_ventas_clientes;
$field_labels["cat_ventas_clientes"] = &$fieldLabelscat_ventas_clientes;
$fieldToolTips["cat_ventas_clientes"] = &$fieldToolTipscat_ventas_clientes;
$placeHolders["cat_ventas_clientes"] = &$placeHolderscat_ventas_clientes;
$page_titles["cat_ventas_clientes"] = &$pageTitlescat_ventas_clientes;


changeTextControlsToDate( "cat_ventas_clientes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_ventas_clientes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_ventas_clientes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_ventas_clientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_ventas_clientes.cat_ventas_clientes_id,  cat_ventas_clientes.vigente,  cat_ventas_clientes.time_stamp,  cat_ventas_clientes.capturista,  cat_ventas_clientes.fecha_de_captura,  cat_ventas_clientes.nombre_cliente_old,  cat_ventas_clientes.rfc_cliente,  cat_ventas_clientes.descripcion_cliente,  cat_ventas_clientes.cp,  cat_ventas_clientes.calle,  cat_ventas_clientes.num_ex,  cat_ventas_clientes.num_int,  cat_ventas_clientes.colonia,  cat_ventas_clientes.localidad,  cat_ventas_clientes.municipio,  cat_ventas_clientes.estado,  cat_ventas_clientes.pais,  cat_ventas_clientes.telefono,  cat_ventas_clientes.celular,  cat_ventas_clientes.email,  cat_ventas_clientes.pagina_web,  cat_ventas_clientes.contacto,  cat_ventas_clientes.puesto,  cat_ventas_clientes.correo_contacto,  cat_ventas_clientes.celular_contacto,  cat_ventas_clientes.clabe_interbancaria";
$proto0["m_strFrom"] = "FROM cat_ventas_clientes  LEFT OUTER JOIN cat_usuarios ON cat_ventas_clientes.capturista = cat_usuarios.usuario";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY cat_ventas_clientes.cat_ventas_clientes_id DESC";
	
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
	"m_strName" => "cat_ventas_clientes_id",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto6["m_sql"] = "cat_ventas_clientes.cat_ventas_clientes_id";
$proto6["m_srcTableName"] = "cat_ventas_clientes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto8["m_sql"] = "cat_ventas_clientes.vigente";
$proto8["m_srcTableName"] = "cat_ventas_clientes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto10["m_sql"] = "cat_ventas_clientes.time_stamp";
$proto10["m_srcTableName"] = "cat_ventas_clientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto12["m_sql"] = "cat_ventas_clientes.capturista";
$proto12["m_srcTableName"] = "cat_ventas_clientes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto14["m_sql"] = "cat_ventas_clientes.fecha_de_captura";
$proto14["m_srcTableName"] = "cat_ventas_clientes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_cliente_old",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto16["m_sql"] = "cat_ventas_clientes.nombre_cliente_old";
$proto16["m_srcTableName"] = "cat_ventas_clientes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "rfc_cliente",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto18["m_sql"] = "cat_ventas_clientes.rfc_cliente";
$proto18["m_srcTableName"] = "cat_ventas_clientes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_cliente",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto20["m_sql"] = "cat_ventas_clientes.descripcion_cliente";
$proto20["m_srcTableName"] = "cat_ventas_clientes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cp",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto22["m_sql"] = "cat_ventas_clientes.cp";
$proto22["m_srcTableName"] = "cat_ventas_clientes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "calle",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto24["m_sql"] = "cat_ventas_clientes.calle";
$proto24["m_srcTableName"] = "cat_ventas_clientes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "num_ex",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto26["m_sql"] = "cat_ventas_clientes.num_ex";
$proto26["m_srcTableName"] = "cat_ventas_clientes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "num_int",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto28["m_sql"] = "cat_ventas_clientes.num_int";
$proto28["m_srcTableName"] = "cat_ventas_clientes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "colonia",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto30["m_sql"] = "cat_ventas_clientes.colonia";
$proto30["m_srcTableName"] = "cat_ventas_clientes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto32["m_sql"] = "cat_ventas_clientes.localidad";
$proto32["m_srcTableName"] = "cat_ventas_clientes";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto34["m_sql"] = "cat_ventas_clientes.municipio";
$proto34["m_srcTableName"] = "cat_ventas_clientes";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto36["m_sql"] = "cat_ventas_clientes.estado";
$proto36["m_srcTableName"] = "cat_ventas_clientes";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "pais",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto38["m_sql"] = "cat_ventas_clientes.pais";
$proto38["m_srcTableName"] = "cat_ventas_clientes";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto40["m_sql"] = "cat_ventas_clientes.telefono";
$proto40["m_srcTableName"] = "cat_ventas_clientes";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "celular",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto42["m_sql"] = "cat_ventas_clientes.celular";
$proto42["m_srcTableName"] = "cat_ventas_clientes";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto44["m_sql"] = "cat_ventas_clientes.email";
$proto44["m_srcTableName"] = "cat_ventas_clientes";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "pagina_web",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto46["m_sql"] = "cat_ventas_clientes.pagina_web";
$proto46["m_srcTableName"] = "cat_ventas_clientes";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "contacto",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto48["m_sql"] = "cat_ventas_clientes.contacto";
$proto48["m_srcTableName"] = "cat_ventas_clientes";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "puesto",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto50["m_sql"] = "cat_ventas_clientes.puesto";
$proto50["m_srcTableName"] = "cat_ventas_clientes";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "correo_contacto",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto52["m_sql"] = "cat_ventas_clientes.correo_contacto";
$proto52["m_srcTableName"] = "cat_ventas_clientes";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "celular_contacto",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto54["m_sql"] = "cat_ventas_clientes.celular_contacto";
$proto54["m_srcTableName"] = "cat_ventas_clientes";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "clabe_interbancaria",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto56["m_sql"] = "cat_ventas_clientes.clabe_interbancaria";
$proto56["m_srcTableName"] = "cat_ventas_clientes";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "cat_ventas_clientes";
$proto59["m_srcTableName"] = "cat_ventas_clientes";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "cat_ventas_clientes_id";
$proto59["m_columns"][] = "vigente";
$proto59["m_columns"][] = "time_stamp";
$proto59["m_columns"][] = "capturista";
$proto59["m_columns"][] = "fecha_de_captura";
$proto59["m_columns"][] = "nombre_cliente_old";
$proto59["m_columns"][] = "rfc_cliente";
$proto59["m_columns"][] = "descripcion_cliente";
$proto59["m_columns"][] = "cp";
$proto59["m_columns"][] = "calle";
$proto59["m_columns"][] = "num_ex";
$proto59["m_columns"][] = "num_int";
$proto59["m_columns"][] = "colonia";
$proto59["m_columns"][] = "localidad";
$proto59["m_columns"][] = "municipio";
$proto59["m_columns"][] = "estado";
$proto59["m_columns"][] = "pais";
$proto59["m_columns"][] = "telefono";
$proto59["m_columns"][] = "celular";
$proto59["m_columns"][] = "email";
$proto59["m_columns"][] = "pagina_web";
$proto59["m_columns"][] = "contacto";
$proto59["m_columns"][] = "puesto";
$proto59["m_columns"][] = "correo_contacto";
$proto59["m_columns"][] = "celular_contacto";
$proto59["m_columns"][] = "clabe_interbancaria";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "cat_ventas_clientes";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "cat_ventas_clientes";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
												$proto62=array();
$proto62["m_link"] = "SQLL_LEFTJOIN";
			$proto63=array();
$proto63["m_strName"] = "cat_usuarios";
$proto63["m_srcTableName"] = "cat_ventas_clientes";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "cat_usuarios_id";
$proto63["m_columns"][] = "time_stamp";
$proto63["m_columns"][] = "vigente";
$proto63["m_columns"][] = "capturista";
$proto63["m_columns"][] = "usuario";
$proto63["m_columns"][] = "cat_usuarios_licencias_id";
$proto63["m_columns"][] = "pass";
$proto63["m_columns"][] = "nombre";
$proto63["m_columns"][] = "correo";
$proto63["m_columns"][] = "cat_trabajadores_altas_id";
$proto63["m_columns"][] = "res_autorizacion";
$proto63["m_columns"][] = "session";
$proto63["m_columns"][] = "tipo";
$proto63["m_columns"][] = "session_v2";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "LEFT OUTER JOIN cat_usuarios ON cat_ventas_clientes.capturista = cat_usuarios.usuario";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "cat_ventas_clientes";
$proto64=array();
$proto64["m_sql"] = "cat_usuarios.usuario = cat_ventas_clientes.capturista";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cat_usuarios",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= cat_ventas_clientes.capturista";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_ventas_clientes_id",
	"m_strTable" => "cat_ventas_clientes",
	"m_srcTableName" => "cat_ventas_clientes"
));

$proto66["m_column"]=$obj;
$proto66["m_bAsc"] = 0;
$proto66["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto66);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="cat_ventas_clientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_ventas_clientes = createSqlQuery_cat_ventas_clientes();


	
		;

																										

$tdatacat_ventas_clientes[".sqlquery"] = $queryData_cat_ventas_clientes;



$tdatacat_ventas_clientes[".hasEvents"] = false;

?>