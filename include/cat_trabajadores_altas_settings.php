<?php
$tdatacat_trabajadores_altas = array();
$tdatacat_trabajadores_altas[".searchableFields"] = array();
$tdatacat_trabajadores_altas[".ShortName"] = "cat_trabajadores_altas";
$tdatacat_trabajadores_altas[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_altas[".OriginalTable"] = "cat_trabajadores_altas";


$tdatacat_trabajadores_altas[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_altas[".originalPagesByType"] = $tdatacat_trabajadores_altas[".pagesByType"];
$tdatacat_trabajadores_altas[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_altas[".originalPages"] = $tdatacat_trabajadores_altas[".pages"];
$tdatacat_trabajadores_altas[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_trabajadores_altas[".originalDefaultPages"] = $tdatacat_trabajadores_altas[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_altas = array();
$fieldToolTipscat_trabajadores_altas = array();
$pageTitlescat_trabajadores_altas = array();
$placeHolderscat_trabajadores_altas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_altas["Spanish"] = array();
	$fieldToolTipscat_trabajadores_altas["Spanish"] = array();
	$placeHolderscat_trabajadores_altas["Spanish"] = array();
	$pageTitlescat_trabajadores_altas["Spanish"] = array();
	$fieldLabelscat_trabajadores_altas["Spanish"]["cat_trabajadores_altas_id"] = "trab_id";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["time_stamp"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["vigente"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["fecha_de_registro"] = "Fecha de Alta";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["fecha_de_registro"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["fecha_de_registro"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["apellido_paterno"] = "Apellido Paterno";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["apellido_paterno"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["apellido_paterno"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["apellido_materno"] = "Apellido Materno";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["apellido_materno"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["apellido_materno"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["primer_nombre"] = "Primer Nombre";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["primer_nombre"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["primer_nombre"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["segundo_nombre"] = "Segundo Nombre";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["segundo_nombre"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["segundo_nombre"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["rfc"] = "Rfc";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["rfc"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["rfc"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["curp"] = "Curp";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["curp"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["curp"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["num_seguridad_social"] = "SS";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["num_seguridad_social"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["num_seguridad_social"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["municipio_nacimiento"] = "Municipio Nacimiento";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["municipio_nacimiento"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["municipio_nacimiento"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["estado_nacimiento"] = "Estado Nacimiento";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["estado_nacimiento"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["estado_nacimiento"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["nacionalidad"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["nacionalidad"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["telefono_emergencia"] = "Telefono Emergencia";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["telefono_emergencia"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["telefono_emergencia"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["contacto_emergencia"] = "Contacto Emergencia";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["contacto_emergencia"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["contacto_emergencia"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["capturista"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["capturista"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["nombre_completo"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["nombre_completo"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["fecha_de_nacimiento"] = "Fecha De Nacimiento";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["fecha_de_nacimiento"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["fecha_de_nacimiento"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["nombre_completook"] = "Nombre Completo";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["nombre_completook"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["nombre_completook"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["celular_mensajes"] = "Celular Mensajes";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["celular_mensajes"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["celular_mensajes"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["cat_trabajadores_altas_id_empresa"] = "id_empresa";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["cat_trabajadores_puestos_id"] = "Puesto";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["tr_tags_numero_asignado"] = "Tags_numero";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["tr_tags_numero_asignado"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["tr_tags_numero_asignado"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["cat_trabajadores_sexo_mu_id"] = "Sexo";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cat_trabajadores_sexo_mu_id"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cat_trabajadores_sexo_mu_id"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["cat_trabajadores_estado_civil_mu_id"] = "Edo Civil";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cat_trabajadores_estado_civil_mu_id"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cat_trabajadores_estado_civil_mu_id"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["calle"] = "Calle";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["calle"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["calle"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["colonia"] = "Colonia";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["colonia"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["colonia"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["municipio"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["municipio"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["estado"] = "Estado";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["estado"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["estado"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["codigo_postal"] = "Codigo Postal";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["codigo_postal"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["codigo_postal"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["banco"] = "Banco";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["banco"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["banco"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["cuenta_bancaria"] = "Cuenta Bancaria";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cuenta_bancaria"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cuenta_bancaria"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["cat_trabajadores_sangre_mu_id"] = "Sangre";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cat_trabajadores_sangre_mu_id"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cat_trabajadores_sangre_mu_id"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["cat_trabajadores_local_foraneo_mu_id"] = "Loc/For";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cat_trabajadores_local_foraneo_mu_id"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cat_trabajadores_local_foraneo_mu_id"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["cat_trabajadores_tipo_de_pago_id"] = "Pago";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cat_trabajadores_tipo_de_pago_id"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cat_trabajadores_tipo_de_pago_id"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["cat_holding_02_empresas"] = "Empresa";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cat_holding_02_empresas"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cat_holding_02_empresas"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["fecha_de_ingreso"] = "Ingreso";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["fecha_de_ingreso"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["fecha_de_ingreso"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["numero_domicilio"] = "Numero Domicilio";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["numero_domicilio"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["numero_domicilio"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["observaciones"] = "Observaciones";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["observaciones"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["observaciones"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["link_foto"] = "Link Foto";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["link_foto"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["link_foto"] = "";
	$fieldLabelscat_trabajadores_altas["Spanish"]["cat_nominas_01_generales_uuid"] = "NominaUUID";
	$fieldToolTipscat_trabajadores_altas["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$placeHolderscat_trabajadores_altas["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	if (count($fieldToolTipscat_trabajadores_altas["Spanish"]))
		$tdatacat_trabajadores_altas[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_altas[".shortTableName"] = "cat_trabajadores_altas";
$tdatacat_trabajadores_altas[".nSecOptions"] = 0;

$tdatacat_trabajadores_altas[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_altas[".entityType"] = 0;
$tdatacat_trabajadores_altas[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_altas[".strOriginalTableName"] = "cat_trabajadores_altas";

	



$tdatacat_trabajadores_altas[".showAddInPopup"] = false;

$tdatacat_trabajadores_altas[".showEditInPopup"] = false;

$tdatacat_trabajadores_altas[".showViewInPopup"] = false;

$tdatacat_trabajadores_altas[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_altas[".listAjax"] = false;

	$tdatacat_trabajadores_altas[".audit"] = true;

	$tdatacat_trabajadores_altas[".locking"] = true;


$pages = $tdatacat_trabajadores_altas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_altas[".edit"] = true;
	$tdatacat_trabajadores_altas[".afterEditAction"] = 1;
	$tdatacat_trabajadores_altas[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_altas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_altas[".add"] = true;
$tdatacat_trabajadores_altas[".afterAddAction"] = 1;
$tdatacat_trabajadores_altas[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_altas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_altas[".list"] = true;
}



$tdatacat_trabajadores_altas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_altas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_altas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_altas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_altas[".printFriendly"] = true;
}



$tdatacat_trabajadores_altas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_altas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_altas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_altas[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_altas[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_altas[".buttonsAdded"] = false;

$tdatacat_trabajadores_altas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_altas[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_altas[".badgeColor"] = "8FBC8B";


$tdatacat_trabajadores_altas[".allSearchFields"] = array();
$tdatacat_trabajadores_altas[".filterFields"] = array();
$tdatacat_trabajadores_altas[".requiredSearchFields"] = array();

$tdatacat_trabajadores_altas[".googleLikeFields"] = array();
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "time_stamp";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "capturista";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "vigente";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "fecha_de_registro";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "apellido_paterno";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "apellido_materno";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "primer_nombre";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "segundo_nombre";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "rfc";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "curp";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "num_seguridad_social";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "municipio_nacimiento";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "estado_nacimiento";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "nacionalidad";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "telefono_emergencia";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "contacto_emergencia";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "nombre_completo";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "fecha_de_nacimiento";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "nombre_completook";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "celular_mensajes";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cat_trabajadores_puestos_id";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "tr_tags_numero_asignado";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cat_trabajadores_sexo_mu_id";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cat_trabajadores_estado_civil_mu_id";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "calle";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "colonia";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "municipio";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "estado";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "codigo_postal";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "banco";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cuenta_bancaria";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cat_trabajadores_sangre_mu_id";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cat_trabajadores_local_foraneo_mu_id";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cat_trabajadores_tipo_de_pago_id";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cat_holding_02_empresas";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "fecha_de_ingreso";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "numero_domicilio";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "observaciones";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "link_foto";
$tdatacat_trabajadores_altas[".googleLikeFields"][] = "cat_nominas_01_generales_uuid";



$tdatacat_trabajadores_altas[".tableType"] = "list";

$tdatacat_trabajadores_altas[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_altas[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_altas[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_altas[".geocodingEnabled"] = false;





$tdatacat_trabajadores_altas[".isResizeColumns"] = true;





$tdatacat_trabajadores_altas[".pageSize"] = 20;

$tdatacat_trabajadores_altas[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY cat_trabajadores_altas_id DESC";
$tdatacat_trabajadores_altas[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_altas[".orderindexes"] = array();
			$tdatacat_trabajadores_altas[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "cat_trabajadores_altas_id");


$tdatacat_trabajadores_altas[".sqlHead"] = "SELECT cat_trabajadores_altas_id,  time_stamp,  capturista,  vigente,  fecha_de_registro,  apellido_paterno,  apellido_materno,  primer_nombre,  segundo_nombre,  rfc,  curp,  num_seguridad_social,  municipio_nacimiento,  estado_nacimiento,  nacionalidad,  telefono_emergencia,  contacto_emergencia,  nombre_completo,  fecha_de_nacimiento,  concat(if(apellido_paterno is null,0,apellido_paterno), ' ', if(apellido_materno is null,0,apellido_materno), ' ', if(primer_nombre is null,0,primer_nombre), ' ', if(segundo_nombre is null, 0, segundo_nombre)) AS nombre_completook,  celular_mensajes,  cat_trabajadores_altas_id_empresa,  cat_trabajadores_puestos_id,  tr_tags_numero_asignado,  cat_trabajadores_sexo_mu_id,  cat_trabajadores_estado_civil_mu_id,  calle,  colonia,  municipio,  estado,  codigo_postal,  banco,  cuenta_bancaria,  cat_trabajadores_sangre_mu_id,  cat_trabajadores_local_foraneo_mu_id,  cat_trabajadores_tipo_de_pago_id,  cat_holding_02_empresas,  fecha_de_ingreso,  numero_domicilio,  observaciones,  link_foto,  cat_nominas_01_generales_uuid";
$tdatacat_trabajadores_altas[".sqlFrom"] = "FROM cat_trabajadores_altas";
$tdatacat_trabajadores_altas[".sqlWhereExpr"] = "";
$tdatacat_trabajadores_altas[".sqlTail"] = "";

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
$tdatacat_trabajadores_altas[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_altas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_altas[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_altas[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_altas = array();
$tableKeyscat_trabajadores_altas[] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas[".Keys"] = $tableKeyscat_trabajadores_altas;


$tdatacat_trabajadores_altas[".hideMobileList"] = array();




//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cat_trabajadores_altas_id");
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


	$tdatacat_trabajadores_altas["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cat_trabajadores_altas_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","time_stamp");
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


	$tdatacat_trabajadores_altas["time_stamp"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "time_stamp";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","capturista");
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


	$tdatacat_trabajadores_altas["capturista"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "capturista";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","vigente");
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


	$tdatacat_trabajadores_altas["vigente"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "vigente";
//	fecha_de_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_de_registro";
	$fdata["GoodName"] = "fecha_de_registro";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","fecha_de_registro");
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


	$tdatacat_trabajadores_altas["fecha_de_registro"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "fecha_de_registro";
//	apellido_paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "apellido_paterno";
	$fdata["GoodName"] = "apellido_paterno";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","apellido_paterno");
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


	$tdatacat_trabajadores_altas["apellido_paterno"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "apellido_paterno";
//	apellido_materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "apellido_materno";
	$fdata["GoodName"] = "apellido_materno";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","apellido_materno");
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


	$tdatacat_trabajadores_altas["apellido_materno"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "apellido_materno";
//	primer_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "primer_nombre";
	$fdata["GoodName"] = "primer_nombre";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","primer_nombre");
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


	$tdatacat_trabajadores_altas["primer_nombre"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "primer_nombre";
//	segundo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "segundo_nombre";
	$fdata["GoodName"] = "segundo_nombre";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","segundo_nombre");
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


	$tdatacat_trabajadores_altas["segundo_nombre"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "segundo_nombre";
//	rfc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rfc";
	$fdata["GoodName"] = "rfc";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","rfc");
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


	$tdatacat_trabajadores_altas["rfc"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "rfc";
//	curp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "curp";
	$fdata["GoodName"] = "curp";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","curp");
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


	$tdatacat_trabajadores_altas["curp"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "curp";
//	num_seguridad_social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "num_seguridad_social";
	$fdata["GoodName"] = "num_seguridad_social";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","num_seguridad_social");
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


	$tdatacat_trabajadores_altas["num_seguridad_social"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "num_seguridad_social";
//	municipio_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "municipio_nacimiento";
	$fdata["GoodName"] = "municipio_nacimiento";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","municipio_nacimiento");
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


	$tdatacat_trabajadores_altas["municipio_nacimiento"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "municipio_nacimiento";
//	estado_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "estado_nacimiento";
	$fdata["GoodName"] = "estado_nacimiento";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","estado_nacimiento");
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


	$tdatacat_trabajadores_altas["estado_nacimiento"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "estado_nacimiento";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","nacionalidad");
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


	$tdatacat_trabajadores_altas["nacionalidad"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "nacionalidad";
//	telefono_emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "telefono_emergencia";
	$fdata["GoodName"] = "telefono_emergencia";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","telefono_emergencia");
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


	$tdatacat_trabajadores_altas["telefono_emergencia"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "telefono_emergencia";
//	contacto_emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "contacto_emergencia";
	$fdata["GoodName"] = "contacto_emergencia";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","contacto_emergencia");
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


	$tdatacat_trabajadores_altas["contacto_emergencia"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "contacto_emergencia";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","nombre_completo");
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


	$tdatacat_trabajadores_altas["nombre_completo"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "nombre_completo";
//	fecha_de_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "fecha_de_nacimiento";
	$fdata["GoodName"] = "fecha_de_nacimiento";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","fecha_de_nacimiento");
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


	$tdatacat_trabajadores_altas["fecha_de_nacimiento"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "fecha_de_nacimiento";
//	nombre_completook
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nombre_completook";
	$fdata["GoodName"] = "nombre_completook";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","nombre_completook");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completook";

	
	
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


	$tdatacat_trabajadores_altas["nombre_completook"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "nombre_completook";
//	celular_mensajes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "celular_mensajes";
	$fdata["GoodName"] = "celular_mensajes";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","celular_mensajes");
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


	$tdatacat_trabajadores_altas["celular_mensajes"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "celular_mensajes";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cat_trabajadores_altas_id_empresa");
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


	$tdatacat_trabajadores_altas["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	cat_trabajadores_puestos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cat_trabajadores_puestos_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cat_trabajadores_puestos_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cat_trabajadores_puestos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_trabajadores_puestos_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_puesto";

	

	
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


	$tdatacat_trabajadores_altas["cat_trabajadores_puestos_id"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cat_trabajadores_puestos_id";
//	tr_tags_numero_asignado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tr_tags_numero_asignado";
	$fdata["GoodName"] = "tr_tags_numero_asignado";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","tr_tags_numero_asignado");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatacat_trabajadores_altas["tr_tags_numero_asignado"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "tr_tags_numero_asignado";
//	cat_trabajadores_sexo_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cat_trabajadores_sexo_mu_id";
	$fdata["GoodName"] = "cat_trabajadores_sexo_mu_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cat_trabajadores_sexo_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_sexo_mu_id";

		$fdata["sourceSingle"] = "cat_trabajadores_sexo_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_sexo_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_trabajadores_sexo_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "cat_trabajadores_sexo_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_sexo";

	

	
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


	$tdatacat_trabajadores_altas["cat_trabajadores_sexo_mu_id"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cat_trabajadores_sexo_mu_id";
//	cat_trabajadores_estado_civil_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cat_trabajadores_estado_civil_mu_id";
	$fdata["GoodName"] = "cat_trabajadores_estado_civil_mu_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cat_trabajadores_estado_civil_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_estado_civil_mu_id";

		$fdata["sourceSingle"] = "cat_trabajadores_estado_civil_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_estado_civil_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_trabajadores_estado_civil_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cat_trabajadores_estado_civil_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_estado_civil";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatacat_trabajadores_altas["cat_trabajadores_estado_civil_mu_id"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cat_trabajadores_estado_civil_mu_id";
//	calle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "calle";
	$fdata["GoodName"] = "calle";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","calle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "calle";

		$fdata["sourceSingle"] = "calle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calle";

	
	
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


	$tdatacat_trabajadores_altas["calle"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "calle";
//	colonia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "colonia";
	$fdata["GoodName"] = "colonia";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","colonia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "colonia";

		$fdata["sourceSingle"] = "colonia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "colonia";

	
	
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


	$tdatacat_trabajadores_altas["colonia"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "colonia";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "municipio";

		$fdata["sourceSingle"] = "municipio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
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


	$tdatacat_trabajadores_altas["municipio"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "municipio";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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


	$tdatacat_trabajadores_altas["estado"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "estado";
//	codigo_postal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "codigo_postal";
	$fdata["GoodName"] = "codigo_postal";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","codigo_postal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codigo_postal";

		$fdata["sourceSingle"] = "codigo_postal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo_postal";

	
	
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


	$tdatacat_trabajadores_altas["codigo_postal"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "codigo_postal";
//	banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "banco";
	$fdata["GoodName"] = "banco";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","banco");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "banco";

		$fdata["sourceSingle"] = "banco";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "banco";

	
	
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


	$tdatacat_trabajadores_altas["banco"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "banco";
//	cuenta_bancaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "cuenta_bancaria";
	$fdata["GoodName"] = "cuenta_bancaria";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cuenta_bancaria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cuenta_bancaria";

		$fdata["sourceSingle"] = "cuenta_bancaria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cuenta_bancaria";

	
	
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


	$tdatacat_trabajadores_altas["cuenta_bancaria"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cuenta_bancaria";
//	cat_trabajadores_sangre_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cat_trabajadores_sangre_mu_id";
	$fdata["GoodName"] = "cat_trabajadores_sangre_mu_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cat_trabajadores_sangre_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_sangre_mu_id";

		$fdata["sourceSingle"] = "cat_trabajadores_sangre_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_sangre_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_trabajadores_sangre_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cat_trabajadores_sangre_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_sangre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatacat_trabajadores_altas["cat_trabajadores_sangre_mu_id"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cat_trabajadores_sangre_mu_id";
//	cat_trabajadores_local_foraneo_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cat_trabajadores_local_foraneo_mu_id";
	$fdata["GoodName"] = "cat_trabajadores_local_foraneo_mu_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cat_trabajadores_local_foraneo_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_local_foraneo_mu_id";

		$fdata["sourceSingle"] = "cat_trabajadores_local_foraneo_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_local_foraneo_mu_id";

	
	
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
	$edata["LookupTable"] = "cat_trabajadores_local_foraneo_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "cat_trabajadores_local_foraneo_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_local_foraneo";

	

	
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


	$tdatacat_trabajadores_altas["cat_trabajadores_local_foraneo_mu_id"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cat_trabajadores_local_foraneo_mu_id";
//	cat_trabajadores_tipo_de_pago_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cat_trabajadores_tipo_de_pago_id";
	$fdata["GoodName"] = "cat_trabajadores_tipo_de_pago_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cat_trabajadores_tipo_de_pago_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_tipo_de_pago_id";

		$fdata["sourceSingle"] = "cat_trabajadores_tipo_de_pago_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_tipo_de_pago_id";

	
	
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
	$edata["LookupTable"] = "cat_actividades_forma_de_pago_mu";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_actividades_forma_de_pago_mu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_forma_de_pago";

	

	
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


	$tdatacat_trabajadores_altas["cat_trabajadores_tipo_de_pago_id"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cat_trabajadores_tipo_de_pago_id";
//	cat_holding_02_empresas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cat_holding_02_empresas";
	$fdata["GoodName"] = "cat_holding_02_empresas";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cat_holding_02_empresas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_02_empresas";

		$fdata["sourceSingle"] = "cat_holding_02_empresas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_02_empresas";

	
	
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
	$edata["LookupTable"] = "cat_holding_02_empresas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "cat_holding_02_empresas_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_empresas";

	

	
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


	$tdatacat_trabajadores_altas["cat_holding_02_empresas"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cat_holding_02_empresas";
//	fecha_de_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "fecha_de_ingreso";
	$fdata["GoodName"] = "fecha_de_ingreso";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","fecha_de_ingreso");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_ingreso";

		$fdata["sourceSingle"] = "fecha_de_ingreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_de_ingreso";

	
	
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


	$tdatacat_trabajadores_altas["fecha_de_ingreso"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "fecha_de_ingreso";
//	numero_domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "numero_domicilio";
	$fdata["GoodName"] = "numero_domicilio";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","numero_domicilio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numero_domicilio";

		$fdata["sourceSingle"] = "numero_domicilio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero_domicilio";

	
	
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


	$tdatacat_trabajadores_altas["numero_domicilio"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "numero_domicilio";
//	observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "observaciones";
	$fdata["GoodName"] = "observaciones";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observaciones";

		$fdata["sourceSingle"] = "observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observaciones";

	
	
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


	$tdatacat_trabajadores_altas["observaciones"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "observaciones";
//	link_foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "link_foto";
	$fdata["GoodName"] = "link_foto";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","link_foto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "link_foto";

		$fdata["sourceSingle"] = "link_foto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "link_foto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Foto";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
	
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


	$tdatacat_trabajadores_altas["link_foto"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "link_foto";
//	cat_nominas_01_generales_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "cat_nominas_01_generales_uuid";
	$fdata["GoodName"] = "cat_nominas_01_generales_uuid";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas","cat_nominas_01_generales_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_nominas_01_generales_uuid";

		$fdata["sourceSingle"] = "cat_nominas_01_generales_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_nominas_01_generales_uuid";

	
	
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
	$edata["LookupTable"] = "box_cat_nominas_01_generales";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cat_nominas_01_generales_uuid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion_nomina";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatacat_trabajadores_altas["cat_nominas_01_generales_uuid"] = $fdata;
		$tdatacat_trabajadores_altas[".searchableFields"][] = "cat_nominas_01_generales_uuid";


$tables_data["cat_trabajadores_altas"]=&$tdatacat_trabajadores_altas;
$field_labels["cat_trabajadores_altas"] = &$fieldLabelscat_trabajadores_altas;
$fieldToolTips["cat_trabajadores_altas"] = &$fieldToolTipscat_trabajadores_altas;
$placeHolders["cat_trabajadores_altas"] = &$placeHolderscat_trabajadores_altas;
$page_titles["cat_trabajadores_altas"] = &$pageTitlescat_trabajadores_altas;


changeTextControlsToDate( "cat_trabajadores_altas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_altas"] = array();
//	cat_trabajadores_documentos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cat_trabajadores_documentos";
		$detailsParam["dOriginalTable"] = "cat_trabajadores_documentos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cat_trabajadores_documentos";
	$detailsParam["dCaptionTable"] = GetTableCaption("cat_trabajadores_documentos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cat_trabajadores_altas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cat_trabajadores_altas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cat_trabajadores_altas"][$dIndex]["masterKeys"][]="cat_trabajadores_altas_id";

				$detailsTablesData["cat_trabajadores_altas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cat_trabajadores_altas"][$dIndex]["detailKeys"][]="cat_trabajadores_altas_id";
//	cat_trabajadores_tabulador
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cat_trabajadores_tabulador";
		$detailsParam["dOriginalTable"] = "cat_trabajadores_tabulador";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cat_trabajadores_tabulador";
	$detailsParam["dCaptionTable"] = GetTableCaption("cat_trabajadores_tabulador");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cat_trabajadores_altas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cat_trabajadores_altas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cat_trabajadores_altas"][$dIndex]["masterKeys"][]="cat_trabajadores_altas_id";

				$detailsTablesData["cat_trabajadores_altas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cat_trabajadores_altas"][$dIndex]["detailKeys"][]="cat_trabajadores_altas_id";
//	cat_trabajadores_reingresos
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cat_trabajadores_reingresos";
		$detailsParam["dOriginalTable"] = "cat_trabajadores_reingresos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cat_trabajadores_reingresos";
	$detailsParam["dCaptionTable"] = GetTableCaption("cat_trabajadores_reingresos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cat_trabajadores_altas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cat_trabajadores_altas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cat_trabajadores_altas"][$dIndex]["masterKeys"][]="cat_trabajadores_altas_id";

				$detailsTablesData["cat_trabajadores_altas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cat_trabajadores_altas"][$dIndex]["detailKeys"][]="cat_trabajadores_altas_id";
//	cat_trabajadores_puestos_historico
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cat_trabajadores_puestos_historico";
		$detailsParam["dOriginalTable"] = "cat_trabajadores_puestos_historico";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cat_trabajadores_puestos_historico";
	$detailsParam["dCaptionTable"] = GetTableCaption("cat_trabajadores_puestos_historico");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cat_trabajadores_altas"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cat_trabajadores_altas"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cat_trabajadores_altas"][$dIndex]["masterKeys"][]="cat_trabajadores_altas_id";

				$detailsTablesData["cat_trabajadores_altas"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cat_trabajadores_altas"][$dIndex]["detailKeys"][]="cat_trabajadores_altas_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_altas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_altas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_altas_id,  time_stamp,  capturista,  vigente,  fecha_de_registro,  apellido_paterno,  apellido_materno,  primer_nombre,  segundo_nombre,  rfc,  curp,  num_seguridad_social,  municipio_nacimiento,  estado_nacimiento,  nacionalidad,  telefono_emergencia,  contacto_emergencia,  nombre_completo,  fecha_de_nacimiento,  concat(if(apellido_paterno is null,0,apellido_paterno), ' ', if(apellido_materno is null,0,apellido_materno), ' ', if(primer_nombre is null,0,primer_nombre), ' ', if(segundo_nombre is null, 0, segundo_nombre)) AS nombre_completook,  celular_mensajes,  cat_trabajadores_altas_id_empresa,  cat_trabajadores_puestos_id,  tr_tags_numero_asignado,  cat_trabajadores_sexo_mu_id,  cat_trabajadores_estado_civil_mu_id,  calle,  colonia,  municipio,  estado,  codigo_postal,  banco,  cuenta_bancaria,  cat_trabajadores_sangre_mu_id,  cat_trabajadores_local_foraneo_mu_id,  cat_trabajadores_tipo_de_pago_id,  cat_holding_02_empresas,  fecha_de_ingreso,  numero_domicilio,  observaciones,  link_foto,  cat_nominas_01_generales_uuid";
$proto0["m_strFrom"] = "FROM cat_trabajadores_altas";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY cat_trabajadores_altas_id DESC";
	
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
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto6["m_sql"] = "cat_trabajadores_altas_id";
$proto6["m_srcTableName"] = "cat_trabajadores_altas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto8["m_sql"] = "time_stamp";
$proto8["m_srcTableName"] = "cat_trabajadores_altas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto10["m_sql"] = "capturista";
$proto10["m_srcTableName"] = "cat_trabajadores_altas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto12["m_sql"] = "vigente";
$proto12["m_srcTableName"] = "cat_trabajadores_altas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_registro",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto14["m_sql"] = "fecha_de_registro";
$proto14["m_srcTableName"] = "cat_trabajadores_altas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido_paterno",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto16["m_sql"] = "apellido_paterno";
$proto16["m_srcTableName"] = "cat_trabajadores_altas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido_materno",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto18["m_sql"] = "apellido_materno";
$proto18["m_srcTableName"] = "cat_trabajadores_altas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "primer_nombre",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto20["m_sql"] = "primer_nombre";
$proto20["m_srcTableName"] = "cat_trabajadores_altas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "segundo_nombre",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto22["m_sql"] = "segundo_nombre";
$proto22["m_srcTableName"] = "cat_trabajadores_altas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rfc",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto24["m_sql"] = "rfc";
$proto24["m_srcTableName"] = "cat_trabajadores_altas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "curp",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto26["m_sql"] = "curp";
$proto26["m_srcTableName"] = "cat_trabajadores_altas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "num_seguridad_social",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto28["m_sql"] = "num_seguridad_social";
$proto28["m_srcTableName"] = "cat_trabajadores_altas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio_nacimiento",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto30["m_sql"] = "municipio_nacimiento";
$proto30["m_srcTableName"] = "cat_trabajadores_altas";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_nacimiento",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto32["m_sql"] = "estado_nacimiento";
$proto32["m_srcTableName"] = "cat_trabajadores_altas";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto34["m_sql"] = "nacionalidad";
$proto34["m_srcTableName"] = "cat_trabajadores_altas";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono_emergencia",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto36["m_sql"] = "telefono_emergencia";
$proto36["m_srcTableName"] = "cat_trabajadores_altas";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "contacto_emergencia",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto38["m_sql"] = "contacto_emergencia";
$proto38["m_srcTableName"] = "cat_trabajadores_altas";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto40["m_sql"] = "nombre_completo";
$proto40["m_srcTableName"] = "cat_trabajadores_altas";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_nacimiento",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto42["m_sql"] = "fecha_de_nacimiento";
$proto42["m_srcTableName"] = "cat_trabajadores_altas";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$proto45=array();
$proto45["m_functiontype"] = "SQLF_CUSTOM";
$proto45["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(apellido_paterno is null,0,apellido_paterno)"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(apellido_materno is null,0,apellido_materno)"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(primer_nombre is null,0,primer_nombre)"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "if(segundo_nombre is null, 0, segundo_nombre)"
));

$proto45["m_arguments"][]=$obj;
$proto45["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto45);

$proto44["m_sql"] = "concat(if(apellido_paterno is null,0,apellido_paterno), ' ', if(apellido_materno is null,0,apellido_materno), ' ', if(primer_nombre is null,0,primer_nombre), ' ', if(segundo_nombre is null, 0, segundo_nombre))";
$proto44["m_srcTableName"] = "cat_trabajadores_altas";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "nombre_completook";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "celular_mensajes",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto53["m_sql"] = "celular_mensajes";
$proto53["m_srcTableName"] = "cat_trabajadores_altas";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto55["m_sql"] = "cat_trabajadores_altas_id_empresa";
$proto55["m_srcTableName"] = "cat_trabajadores_altas";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_puestos_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto57["m_sql"] = "cat_trabajadores_puestos_id";
$proto57["m_srcTableName"] = "cat_trabajadores_altas";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_tags_numero_asignado",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto59["m_sql"] = "tr_tags_numero_asignado";
$proto59["m_srcTableName"] = "cat_trabajadores_altas";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_sexo_mu_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto61["m_sql"] = "cat_trabajadores_sexo_mu_id";
$proto61["m_srcTableName"] = "cat_trabajadores_altas";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_estado_civil_mu_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto63["m_sql"] = "cat_trabajadores_estado_civil_mu_id";
$proto63["m_srcTableName"] = "cat_trabajadores_altas";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "calle",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto65["m_sql"] = "calle";
$proto65["m_srcTableName"] = "cat_trabajadores_altas";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "colonia",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto67["m_sql"] = "colonia";
$proto67["m_srcTableName"] = "cat_trabajadores_altas";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto69["m_sql"] = "municipio";
$proto69["m_srcTableName"] = "cat_trabajadores_altas";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto71["m_sql"] = "estado";
$proto71["m_srcTableName"] = "cat_trabajadores_altas";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_postal",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto73["m_sql"] = "codigo_postal";
$proto73["m_srcTableName"] = "cat_trabajadores_altas";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "banco",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto75["m_sql"] = "banco";
$proto75["m_srcTableName"] = "cat_trabajadores_altas";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "cuenta_bancaria",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto77["m_sql"] = "cuenta_bancaria";
$proto77["m_srcTableName"] = "cat_trabajadores_altas";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_sangre_mu_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto79["m_sql"] = "cat_trabajadores_sangre_mu_id";
$proto79["m_srcTableName"] = "cat_trabajadores_altas";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_local_foraneo_mu_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto81["m_sql"] = "cat_trabajadores_local_foraneo_mu_id";
$proto81["m_srcTableName"] = "cat_trabajadores_altas";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_tipo_de_pago_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto83["m_sql"] = "cat_trabajadores_tipo_de_pago_id";
$proto83["m_srcTableName"] = "cat_trabajadores_altas";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_02_empresas",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto85["m_sql"] = "cat_holding_02_empresas";
$proto85["m_srcTableName"] = "cat_trabajadores_altas";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_ingreso",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto87["m_sql"] = "fecha_de_ingreso";
$proto87["m_srcTableName"] = "cat_trabajadores_altas";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_domicilio",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto89["m_sql"] = "numero_domicilio";
$proto89["m_srcTableName"] = "cat_trabajadores_altas";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto91["m_sql"] = "observaciones";
$proto91["m_srcTableName"] = "cat_trabajadores_altas";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "link_foto",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto93["m_sql"] = "link_foto";
$proto93["m_srcTableName"] = "cat_trabajadores_altas";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_01_generales_uuid",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto95["m_sql"] = "cat_nominas_01_generales_uuid";
$proto95["m_srcTableName"] = "cat_trabajadores_altas";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto97=array();
$proto97["m_link"] = "SQLL_MAIN";
			$proto98=array();
$proto98["m_strName"] = "cat_trabajadores_altas";
$proto98["m_srcTableName"] = "cat_trabajadores_altas";
$proto98["m_columns"] = array();
$proto98["m_columns"][] = "cat_trabajadores_altas_id";
$proto98["m_columns"][] = "time_stamp";
$proto98["m_columns"][] = "capturista";
$proto98["m_columns"][] = "vigente";
$proto98["m_columns"][] = "fecha_de_registro";
$proto98["m_columns"][] = "apellido_paterno";
$proto98["m_columns"][] = "apellido_materno";
$proto98["m_columns"][] = "primer_nombre";
$proto98["m_columns"][] = "segundo_nombre";
$proto98["m_columns"][] = "rfc";
$proto98["m_columns"][] = "curp";
$proto98["m_columns"][] = "num_seguridad_social";
$proto98["m_columns"][] = "municipio_nacimiento";
$proto98["m_columns"][] = "estado_nacimiento";
$proto98["m_columns"][] = "nacionalidad";
$proto98["m_columns"][] = "telefono_emergencia";
$proto98["m_columns"][] = "contacto_emergencia";
$proto98["m_columns"][] = "nombre_completo";
$proto98["m_columns"][] = "fecha_de_nacimiento";
$proto98["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto98["m_columns"][] = "celular_mensajes";
$proto98["m_columns"][] = "permiso_msm";
$proto98["m_columns"][] = "estatus";
$proto98["m_columns"][] = "fecha_de_captura";
$proto98["m_columns"][] = "face_id";
$proto98["m_columns"][] = "tr_tags_numero_asignado";
$proto98["m_columns"][] = "cat_trabajadores_puestos_id";
$proto98["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto98["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto98["m_columns"][] = "calle";
$proto98["m_columns"][] = "colonia";
$proto98["m_columns"][] = "municipio";
$proto98["m_columns"][] = "estado";
$proto98["m_columns"][] = "codigo_postal";
$proto98["m_columns"][] = "banco";
$proto98["m_columns"][] = "cuenta_bancaria";
$proto98["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto98["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto98["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto98["m_columns"][] = "cat_holding_02_empresas";
$proto98["m_columns"][] = "fecha_de_ingreso";
$proto98["m_columns"][] = "numero_domicilio";
$proto98["m_columns"][] = "observaciones";
$proto98["m_columns"][] = "link_foto";
$proto98["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto98["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto98);

$proto97["m_table"] = $obj;
$proto97["m_sql"] = "cat_trabajadores_altas";
$proto97["m_alias"] = "";
$proto97["m_srcTableName"] = "cat_trabajadores_altas";
$proto99=array();
$proto99["m_sql"] = "";
$proto99["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto99["m_column"]=$obj;
$proto99["m_contained"] = array();
$proto99["m_strCase"] = "";
$proto99["m_havingmode"] = false;
$proto99["m_inBrackets"] = false;
$proto99["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto99);

$proto97["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto97);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto101=array();
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas"
));

$proto101["m_column"]=$obj;
$proto101["m_bAsc"] = 0;
$proto101["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto101);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="cat_trabajadores_altas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_altas = createSqlQuery_cat_trabajadores_altas();


	
		;

																																										

$tdatacat_trabajadores_altas[".sqlquery"] = $queryData_cat_trabajadores_altas;



$tdatacat_trabajadores_altas[".hasEvents"] = false;

?>