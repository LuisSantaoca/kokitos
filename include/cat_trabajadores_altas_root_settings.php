<?php
$tdatacat_trabajadores_altas_root = array();
$tdatacat_trabajadores_altas_root[".searchableFields"] = array();
$tdatacat_trabajadores_altas_root[".ShortName"] = "cat_trabajadores_altas_root";
$tdatacat_trabajadores_altas_root[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_altas_root[".OriginalTable"] = "cat_trabajadores_altas";


$tdatacat_trabajadores_altas_root[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_altas_root[".originalPagesByType"] = $tdatacat_trabajadores_altas_root[".pagesByType"];
$tdatacat_trabajadores_altas_root[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_altas_root[".originalPages"] = $tdatacat_trabajadores_altas_root[".pages"];
$tdatacat_trabajadores_altas_root[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_trabajadores_altas_root[".originalDefaultPages"] = $tdatacat_trabajadores_altas_root[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_altas_root = array();
$fieldToolTipscat_trabajadores_altas_root = array();
$pageTitlescat_trabajadores_altas_root = array();
$placeHolderscat_trabajadores_altas_root = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_altas_root["Spanish"] = array();
	$fieldToolTipscat_trabajadores_altas_root["Spanish"] = array();
	$placeHolderscat_trabajadores_altas_root["Spanish"] = array();
	$pageTitlescat_trabajadores_altas_root["Spanish"] = array();
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["cat_trabajadores_altas_id"] = "Id";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["time_stamp"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["vigente"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["fecha_de_registro"] = "Fecha de Alta";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["fecha_de_registro"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["fecha_de_registro"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["apellido_paterno"] = "Apellido Paterno";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["apellido_paterno"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["apellido_paterno"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["apellido_materno"] = "Apellido Materno";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["apellido_materno"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["apellido_materno"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["primer_nombre"] = "Primer Nombre";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["primer_nombre"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["primer_nombre"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["segundo_nombre"] = "Segundo Nombre";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["segundo_nombre"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["segundo_nombre"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["rfc"] = "Rfc";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["rfc"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["rfc"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["curp"] = "Curp";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["curp"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["curp"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["num_seguridad_social"] = "Num Seguridad Social";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["num_seguridad_social"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["num_seguridad_social"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["municipio_nacimiento"] = "Municipio Nacimiento";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["municipio_nacimiento"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["municipio_nacimiento"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["estado_nacimiento"] = "Estado Nacimiento";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["estado_nacimiento"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["estado_nacimiento"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["nacionalidad"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["nacionalidad"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["telefono_emergencia"] = "Telefono Emergencia";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["telefono_emergencia"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["telefono_emergencia"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["contacto_emergencia"] = "Contacto Emergencia";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["contacto_emergencia"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["contacto_emergencia"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["capturista"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["capturista"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["nombre_completo"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["nombre_completo"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["fecha_de_nacimiento"] = "Fecha De Nacimiento";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["fecha_de_nacimiento"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["fecha_de_nacimiento"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["cat_trabajadores_altas_id_empresa"] = "Cat Trabajadores Altas Id Empresa";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["celular_mensajes"] = "Celular Mensajes";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["celular_mensajes"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["celular_mensajes"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["permiso_msm"] = "Permiso Msm";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["permiso_msm"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["permiso_msm"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["estatus"] = "Estatus";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["estatus"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["estatus"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["fecha_de_captura"] = "Fecha De Captura";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["fecha_de_captura"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["face_id"] = "Face Id";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["face_id"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["face_id"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["cat_trabajadores_puestos_id"] = "Cat Trabajadores Puestos Id";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$fieldLabelscat_trabajadores_altas_root["Spanish"]["tr_tags_tr_tags_numero_asignado"] = "Tr Tags.tr Tags Numero Asignado";
	$fieldToolTipscat_trabajadores_altas_root["Spanish"]["tr_tags_tr_tags_numero_asignado"] = "";
	$placeHolderscat_trabajadores_altas_root["Spanish"]["tr_tags_tr_tags_numero_asignado"] = "";
	if (count($fieldToolTipscat_trabajadores_altas_root["Spanish"]))
		$tdatacat_trabajadores_altas_root[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_altas_root[".shortTableName"] = "cat_trabajadores_altas_root";
$tdatacat_trabajadores_altas_root[".nSecOptions"] = 0;

$tdatacat_trabajadores_altas_root[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_altas_root[".entityType"] = 1;
$tdatacat_trabajadores_altas_root[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_altas_root[".strOriginalTableName"] = "cat_trabajadores_altas";

	



$tdatacat_trabajadores_altas_root[".showAddInPopup"] = false;

$tdatacat_trabajadores_altas_root[".showEditInPopup"] = false;

$tdatacat_trabajadores_altas_root[".showViewInPopup"] = false;

$tdatacat_trabajadores_altas_root[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_altas_root[".listAjax"] = false;

	$tdatacat_trabajadores_altas_root[".audit"] = true;

	$tdatacat_trabajadores_altas_root[".locking"] = true;


$pages = $tdatacat_trabajadores_altas_root[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_altas_root[".edit"] = true;
	$tdatacat_trabajadores_altas_root[".afterEditAction"] = 1;
	$tdatacat_trabajadores_altas_root[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_altas_root[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_altas_root[".add"] = true;
$tdatacat_trabajadores_altas_root[".afterAddAction"] = 1;
$tdatacat_trabajadores_altas_root[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_altas_root[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_altas_root[".list"] = true;
}



$tdatacat_trabajadores_altas_root[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_altas_root[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_altas_root[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_altas_root[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_altas_root[".printFriendly"] = true;
}



$tdatacat_trabajadores_altas_root[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_altas_root[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_altas_root[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_altas_root[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_altas_root[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_altas_root[".buttonsAdded"] = false;

$tdatacat_trabajadores_altas_root[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_altas_root[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_altas_root[".badgeColor"] = "4169E1";


$tdatacat_trabajadores_altas_root[".allSearchFields"] = array();
$tdatacat_trabajadores_altas_root[".filterFields"] = array();
$tdatacat_trabajadores_altas_root[".requiredSearchFields"] = array();

$tdatacat_trabajadores_altas_root[".googleLikeFields"] = array();
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "time_stamp";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "capturista";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "vigente";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "fecha_de_registro";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "apellido_paterno";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "apellido_materno";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "primer_nombre";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "segundo_nombre";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "rfc";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "curp";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "num_seguridad_social";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "municipio_nacimiento";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "estado_nacimiento";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "nacionalidad";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "telefono_emergencia";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "contacto_emergencia";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "nombre_completo";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "fecha_de_nacimiento";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "celular_mensajes";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "permiso_msm";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "estatus";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "fecha_de_captura";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "face_id";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "cat_trabajadores_puestos_id";
$tdatacat_trabajadores_altas_root[".googleLikeFields"][] = "tr_tags.tr_tags_numero_asignado";



$tdatacat_trabajadores_altas_root[".tableType"] = "list";

$tdatacat_trabajadores_altas_root[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_altas_root[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_altas_root[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_altas_root[".geocodingEnabled"] = false;





$tdatacat_trabajadores_altas_root[".isResizeColumns"] = true;





$tdatacat_trabajadores_altas_root[".pageSize"] = 20;

$tdatacat_trabajadores_altas_root[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_altas_root[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_altas_root[".orderindexes"] = array();


$tdatacat_trabajadores_altas_root[".sqlHead"] = "SELECT cat_trabajadores_altas_id,  	time_stamp,  	capturista,  	vigente,  	fecha_de_registro,  	apellido_paterno,  	apellido_materno,  	primer_nombre,  	segundo_nombre,  	rfc,  	curp,  	num_seguridad_social,  	municipio_nacimiento,  	estado_nacimiento,  	nacionalidad,  	telefono_emergencia,  	contacto_emergencia,  	nombre_completo,  	fecha_de_nacimiento,  	cat_trabajadores_altas_id_empresa,  	celular_mensajes,  	permiso_msm,  	estatus,  	fecha_de_captura,  	face_id,  	cat_trabajadores_puestos_id,  	`tr_tags.tr_tags_numero_asignado`";
$tdatacat_trabajadores_altas_root[".sqlFrom"] = "FROM cat_trabajadores_altas";
$tdatacat_trabajadores_altas_root[".sqlWhereExpr"] = "";
$tdatacat_trabajadores_altas_root[".sqlTail"] = "";

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
$tdatacat_trabajadores_altas_root[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_altas_root[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_altas_root[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_altas_root[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_altas_root = array();
$tableKeyscat_trabajadores_altas_root[] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas_root[".Keys"] = $tableKeyscat_trabajadores_altas_root;


$tdatacat_trabajadores_altas_root[".hideMobileList"] = array();




//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","cat_trabajadores_altas_id");
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


	$tdatacat_trabajadores_altas_root["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "cat_trabajadores_altas_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","time_stamp");
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


	$tdatacat_trabajadores_altas_root["time_stamp"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "time_stamp";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","capturista");
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


	$tdatacat_trabajadores_altas_root["capturista"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "capturista";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","vigente");
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


	$tdatacat_trabajadores_altas_root["vigente"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "vigente";
//	fecha_de_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_de_registro";
	$fdata["GoodName"] = "fecha_de_registro";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","fecha_de_registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_registro";

		$fdata["sourceSingle"] = "fecha_de_registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_registro";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatacat_trabajadores_altas_root["fecha_de_registro"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "fecha_de_registro";
//	apellido_paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "apellido_paterno";
	$fdata["GoodName"] = "apellido_paterno";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","apellido_paterno");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellido_paterno";

		$fdata["sourceSingle"] = "apellido_paterno";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellido_paterno";

	
	
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


	$tdatacat_trabajadores_altas_root["apellido_paterno"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "apellido_paterno";
//	apellido_materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "apellido_materno";
	$fdata["GoodName"] = "apellido_materno";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","apellido_materno");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellido_materno";

		$fdata["sourceSingle"] = "apellido_materno";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellido_materno";

	
	
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


	$tdatacat_trabajadores_altas_root["apellido_materno"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "apellido_materno";
//	primer_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "primer_nombre";
	$fdata["GoodName"] = "primer_nombre";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","primer_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "primer_nombre";

		$fdata["sourceSingle"] = "primer_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "primer_nombre";

	
	
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


	$tdatacat_trabajadores_altas_root["primer_nombre"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "primer_nombre";
//	segundo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "segundo_nombre";
	$fdata["GoodName"] = "segundo_nombre";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","segundo_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "segundo_nombre";

		$fdata["sourceSingle"] = "segundo_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "segundo_nombre";

	
	
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


	$tdatacat_trabajadores_altas_root["segundo_nombre"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "segundo_nombre";
//	rfc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rfc";
	$fdata["GoodName"] = "rfc";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","rfc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rfc";

		$fdata["sourceSingle"] = "rfc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rfc";

	
	
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


	$tdatacat_trabajadores_altas_root["rfc"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "rfc";
//	curp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "curp";
	$fdata["GoodName"] = "curp";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","curp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "curp";

		$fdata["sourceSingle"] = "curp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "curp";

	
	
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


	$tdatacat_trabajadores_altas_root["curp"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "curp";
//	num_seguridad_social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "num_seguridad_social";
	$fdata["GoodName"] = "num_seguridad_social";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","num_seguridad_social");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "num_seguridad_social";

		$fdata["sourceSingle"] = "num_seguridad_social";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_seguridad_social";

	
	
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


	$tdatacat_trabajadores_altas_root["num_seguridad_social"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "num_seguridad_social";
//	municipio_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "municipio_nacimiento";
	$fdata["GoodName"] = "municipio_nacimiento";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","municipio_nacimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "municipio_nacimiento";

		$fdata["sourceSingle"] = "municipio_nacimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio_nacimiento";

	
	
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


	$tdatacat_trabajadores_altas_root["municipio_nacimiento"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "municipio_nacimiento";
//	estado_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "estado_nacimiento";
	$fdata["GoodName"] = "estado_nacimiento";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","estado_nacimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado_nacimiento";

		$fdata["sourceSingle"] = "estado_nacimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_nacimiento";

	
	
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


	$tdatacat_trabajadores_altas_root["estado_nacimiento"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "estado_nacimiento";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","nacionalidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nacionalidad";

		$fdata["sourceSingle"] = "nacionalidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nacionalidad";

	
	
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


	$tdatacat_trabajadores_altas_root["nacionalidad"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "nacionalidad";
//	telefono_emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "telefono_emergencia";
	$fdata["GoodName"] = "telefono_emergencia";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","telefono_emergencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono_emergencia";

		$fdata["sourceSingle"] = "telefono_emergencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono_emergencia";

	
	
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


	$tdatacat_trabajadores_altas_root["telefono_emergencia"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "telefono_emergencia";
//	contacto_emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "contacto_emergencia";
	$fdata["GoodName"] = "contacto_emergencia";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","contacto_emergencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contacto_emergencia";

		$fdata["sourceSingle"] = "contacto_emergencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contacto_emergencia";

	
	
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


	$tdatacat_trabajadores_altas_root["contacto_emergencia"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "contacto_emergencia";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

		$fdata["sourceSingle"] = "nombre_completo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_completo";

	
	
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


	$tdatacat_trabajadores_altas_root["nombre_completo"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "nombre_completo";
//	fecha_de_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "fecha_de_nacimiento";
	$fdata["GoodName"] = "fecha_de_nacimiento";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","fecha_de_nacimiento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_nacimiento";

		$fdata["sourceSingle"] = "fecha_de_nacimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_nacimiento";

	
	
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


	$tdatacat_trabajadores_altas_root["fecha_de_nacimiento"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "fecha_de_nacimiento";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","cat_trabajadores_altas_id_empresa");
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


	$tdatacat_trabajadores_altas_root["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	celular_mensajes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "celular_mensajes";
	$fdata["GoodName"] = "celular_mensajes";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","celular_mensajes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "celular_mensajes";

		$fdata["sourceSingle"] = "celular_mensajes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "celular_mensajes";

	
	
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


	$tdatacat_trabajadores_altas_root["celular_mensajes"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "celular_mensajes";
//	permiso_msm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "permiso_msm";
	$fdata["GoodName"] = "permiso_msm";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","permiso_msm");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "permiso_msm";

		$fdata["sourceSingle"] = "permiso_msm";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "permiso_msm";

	
	
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


	$tdatacat_trabajadores_altas_root["permiso_msm"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "permiso_msm";
//	estatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "estatus";
	$fdata["GoodName"] = "estatus";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","estatus");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estatus";

		$fdata["sourceSingle"] = "estatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estatus";

	
	
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


	$tdatacat_trabajadores_altas_root["estatus"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "estatus";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_captura";

	
	
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


	$tdatacat_trabajadores_altas_root["fecha_de_captura"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "fecha_de_captura";
//	face_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "face_id";
	$fdata["GoodName"] = "face_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","face_id");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "face_id";

		$fdata["sourceSingle"] = "face_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "face_id";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatacat_trabajadores_altas_root["face_id"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "face_id";
//	cat_trabajadores_puestos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cat_trabajadores_puestos_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","cat_trabajadores_puestos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_puestos_id";

		$fdata["sourceSingle"] = "cat_trabajadores_puestos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos_id";

	
	
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


	$tdatacat_trabajadores_altas_root["cat_trabajadores_puestos_id"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "cat_trabajadores_puestos_id";
//	tr_tags.tr_tags_numero_asignado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "tr_tags.tr_tags_numero_asignado";
	$fdata["GoodName"] = "tr_tags_tr_tags_numero_asignado";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas_root","tr_tags_tr_tags_numero_asignado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tr_tags.tr_tags_numero_asignado";

		$fdata["sourceSingle"] = "tr_tags.tr_tags_numero_asignado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tr_tags.tr_tags_numero_asignado`";

	
	
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


	$tdatacat_trabajadores_altas_root["tr_tags.tr_tags_numero_asignado"] = $fdata;
		$tdatacat_trabajadores_altas_root[".searchableFields"][] = "tr_tags.tr_tags_numero_asignado";


$tables_data["cat_trabajadores_altas_root"]=&$tdatacat_trabajadores_altas_root;
$field_labels["cat_trabajadores_altas_root"] = &$fieldLabelscat_trabajadores_altas_root;
$fieldToolTips["cat_trabajadores_altas_root"] = &$fieldToolTipscat_trabajadores_altas_root;
$placeHolders["cat_trabajadores_altas_root"] = &$placeHolderscat_trabajadores_altas_root;
$page_titles["cat_trabajadores_altas_root"] = &$pageTitlescat_trabajadores_altas_root;


changeTextControlsToDate( "cat_trabajadores_altas_root" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_altas_root"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_altas_root"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_altas_root()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_altas_id,  	time_stamp,  	capturista,  	vigente,  	fecha_de_registro,  	apellido_paterno,  	apellido_materno,  	primer_nombre,  	segundo_nombre,  	rfc,  	curp,  	num_seguridad_social,  	municipio_nacimiento,  	estado_nacimiento,  	nacionalidad,  	telefono_emergencia,  	contacto_emergencia,  	nombre_completo,  	fecha_de_nacimiento,  	cat_trabajadores_altas_id_empresa,  	celular_mensajes,  	permiso_msm,  	estatus,  	fecha_de_captura,  	face_id,  	cat_trabajadores_puestos_id,  	`tr_tags.tr_tags_numero_asignado`";
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
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto6["m_sql"] = "cat_trabajadores_altas_id";
$proto6["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto10["m_sql"] = "capturista";
$proto10["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto12["m_sql"] = "vigente";
$proto12["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_registro",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto14["m_sql"] = "fecha_de_registro";
$proto14["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido_paterno",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto16["m_sql"] = "apellido_paterno";
$proto16["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido_materno",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto18["m_sql"] = "apellido_materno";
$proto18["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "primer_nombre",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto20["m_sql"] = "primer_nombre";
$proto20["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "segundo_nombre",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto22["m_sql"] = "segundo_nombre";
$proto22["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rfc",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto24["m_sql"] = "rfc";
$proto24["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "curp",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto26["m_sql"] = "curp";
$proto26["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "num_seguridad_social",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto28["m_sql"] = "num_seguridad_social";
$proto28["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio_nacimiento",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto30["m_sql"] = "municipio_nacimiento";
$proto30["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_nacimiento",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto32["m_sql"] = "estado_nacimiento";
$proto32["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto34["m_sql"] = "nacionalidad";
$proto34["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono_emergencia",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto36["m_sql"] = "telefono_emergencia";
$proto36["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "contacto_emergencia",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto38["m_sql"] = "contacto_emergencia";
$proto38["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto40["m_sql"] = "nombre_completo";
$proto40["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_nacimiento",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto42["m_sql"] = "fecha_de_nacimiento";
$proto42["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto44["m_sql"] = "cat_trabajadores_altas_id_empresa";
$proto44["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "celular_mensajes",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto46["m_sql"] = "celular_mensajes";
$proto46["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "permiso_msm",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto48["m_sql"] = "permiso_msm";
$proto48["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "estatus",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto50["m_sql"] = "estatus";
$proto50["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto52["m_sql"] = "fecha_de_captura";
$proto52["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "face_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto54["m_sql"] = "face_id";
$proto54["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_puestos_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto56["m_sql"] = "cat_trabajadores_puestos_id";
$proto56["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_tags.tr_tags_numero_asignado",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas_root"
));

$proto58["m_sql"] = "`tr_tags.tr_tags_numero_asignado`";
$proto58["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "cat_trabajadores_altas";
$proto61["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "cat_trabajadores_altas_id";
$proto61["m_columns"][] = "time_stamp";
$proto61["m_columns"][] = "capturista";
$proto61["m_columns"][] = "vigente";
$proto61["m_columns"][] = "fecha_de_registro";
$proto61["m_columns"][] = "apellido_paterno";
$proto61["m_columns"][] = "apellido_materno";
$proto61["m_columns"][] = "primer_nombre";
$proto61["m_columns"][] = "segundo_nombre";
$proto61["m_columns"][] = "rfc";
$proto61["m_columns"][] = "curp";
$proto61["m_columns"][] = "num_seguridad_social";
$proto61["m_columns"][] = "municipio_nacimiento";
$proto61["m_columns"][] = "estado_nacimiento";
$proto61["m_columns"][] = "nacionalidad";
$proto61["m_columns"][] = "telefono_emergencia";
$proto61["m_columns"][] = "contacto_emergencia";
$proto61["m_columns"][] = "nombre_completo";
$proto61["m_columns"][] = "fecha_de_nacimiento";
$proto61["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto61["m_columns"][] = "celular_mensajes";
$proto61["m_columns"][] = "permiso_msm";
$proto61["m_columns"][] = "estatus";
$proto61["m_columns"][] = "fecha_de_captura";
$proto61["m_columns"][] = "face_id";
$proto61["m_columns"][] = "cat_trabajadores_puestos_id";
$proto61["m_columns"][] = "tr_tags.tr_tags_numero_asignado";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "cat_trabajadores_altas";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "cat_trabajadores_altas_root";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_altas_root";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_altas_root = createSqlQuery_cat_trabajadores_altas_root();


	
		;

																											

$tdatacat_trabajadores_altas_root[".sqlquery"] = $queryData_cat_trabajadores_altas_root;



$tdatacat_trabajadores_altas_root[".hasEvents"] = false;

?>