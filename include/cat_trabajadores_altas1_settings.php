<?php
$tdatacat_trabajadores_altas1 = array();
$tdatacat_trabajadores_altas1[".searchableFields"] = array();
$tdatacat_trabajadores_altas1[".ShortName"] = "cat_trabajadores_altas1";
$tdatacat_trabajadores_altas1[".OwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_altas1[".OriginalTable"] = "cat_trabajadores_altas";


$tdatacat_trabajadores_altas1[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatacat_trabajadores_altas1[".originalPagesByType"] = $tdatacat_trabajadores_altas1[".pagesByType"];
$tdatacat_trabajadores_altas1[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatacat_trabajadores_altas1[".originalPages"] = $tdatacat_trabajadores_altas1[".pages"];
$tdatacat_trabajadores_altas1[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatacat_trabajadores_altas1[".originalDefaultPages"] = $tdatacat_trabajadores_altas1[".defaultPages"];

//	field labels
$fieldLabelscat_trabajadores_altas1 = array();
$fieldToolTipscat_trabajadores_altas1 = array();
$pageTitlescat_trabajadores_altas1 = array();
$placeHolderscat_trabajadores_altas1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscat_trabajadores_altas1["Spanish"] = array();
	$fieldToolTipscat_trabajadores_altas1["Spanish"] = array();
	$placeHolderscat_trabajadores_altas1["Spanish"] = array();
	$pageTitlescat_trabajadores_altas1["Spanish"] = array();
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cat_trabajadores_altas_id"] = "trab_id";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cat_trabajadores_altas_id"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cat_trabajadores_altas_id"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["time_stamp"] = "Time Stamp";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["time_stamp"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["time_stamp"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["vigente"] = "Vigente";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["vigente"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["vigente"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["fecha_de_registro"] = "Fecha de Alta";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["fecha_de_registro"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["fecha_de_registro"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["apellido_paterno"] = "Apellido Paterno";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["apellido_paterno"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["apellido_paterno"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["apellido_materno"] = "Apellido Materno";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["apellido_materno"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["apellido_materno"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["primer_nombre"] = "Primer Nombre";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["primer_nombre"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["primer_nombre"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["segundo_nombre"] = "Segundo Nombre";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["segundo_nombre"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["segundo_nombre"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["rfc"] = "Rfc";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["rfc"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["rfc"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["curp"] = "Curp";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["curp"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["curp"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["num_seguridad_social"] = "SS";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["num_seguridad_social"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["num_seguridad_social"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["municipio_nacimiento"] = "Municipio Nacimiento";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["municipio_nacimiento"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["municipio_nacimiento"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["estado_nacimiento"] = "Estado Nacimiento";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["estado_nacimiento"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["estado_nacimiento"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["nacionalidad"] = "Nacionalidad";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["nacionalidad"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["nacionalidad"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["telefono_emergencia"] = "Telefono Emergencia";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["telefono_emergencia"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["telefono_emergencia"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["contacto_emergencia"] = "Contacto Emergencia";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["contacto_emergencia"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["contacto_emergencia"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["capturista"] = "Capturista";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["capturista"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["capturista"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["nombre_completo"] = "Nombre Completo";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["nombre_completo"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["nombre_completo"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["fecha_de_nacimiento"] = "Fecha De Nacimiento";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["fecha_de_nacimiento"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["fecha_de_nacimiento"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["celular_mensajes"] = "Celular Mensajes";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["celular_mensajes"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["celular_mensajes"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cat_trabajadores_altas_id_empresa"] = "id_empresa";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cat_trabajadores_altas_id_empresa"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cat_trabajadores_puestos_id"] = "Puesto";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cat_trabajadores_puestos_id"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["tr_tags_numero_asignado"] = "Tags_numero";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["tr_tags_numero_asignado"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["tr_tags_numero_asignado"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cat_trabajadores_sexo_mu_id"] = "Sexo";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cat_trabajadores_sexo_mu_id"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cat_trabajadores_sexo_mu_id"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cat_trabajadores_estado_civil_mu_id"] = "Edo Civil";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cat_trabajadores_estado_civil_mu_id"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cat_trabajadores_estado_civil_mu_id"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["calle"] = "Calle";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["calle"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["calle"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["colonia"] = "Colonia";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["colonia"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["colonia"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["municipio"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["municipio"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["estado"] = "Estado";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["estado"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["estado"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["codigo_postal"] = "Codigo Postal";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["codigo_postal"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["codigo_postal"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["banco"] = "Banco";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["banco"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["banco"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cuenta_bancaria"] = "Cuenta Bancaria";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cuenta_bancaria"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cuenta_bancaria"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cat_trabajadores_sangre_mu_id"] = "Sangre";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cat_trabajadores_sangre_mu_id"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cat_trabajadores_sangre_mu_id"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cat_trabajadores_local_foraneo_mu_id"] = "Loc/For";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cat_trabajadores_local_foraneo_mu_id"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cat_trabajadores_local_foraneo_mu_id"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cat_trabajadores_tipo_de_pago_id"] = "Pago";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cat_trabajadores_tipo_de_pago_id"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cat_trabajadores_tipo_de_pago_id"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cat_holding_02_empresas"] = "Empresa";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cat_holding_02_empresas"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cat_holding_02_empresas"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["fecha_de_ingreso"] = "Ingreso";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["fecha_de_ingreso"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["fecha_de_ingreso"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["numero_domicilio"] = "Numero Domicilio";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["numero_domicilio"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["numero_domicilio"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["observaciones"] = "Observaciones";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["observaciones"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["observaciones"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["link_foto"] = "Link Foto";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["link_foto"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["link_foto"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["cat_nominas_01_generales_uuid"] = "NominaUUID";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["cat_nominas_01_generales_uuid"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["permiso_msm"] = "Permiso Msm";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["permiso_msm"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["permiso_msm"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["estatus"] = "Estatus";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["estatus"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["estatus"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["fecha_de_captura"] = "Fecha De Captura";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["fecha_de_captura"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["fecha_de_captura"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["face_id"] = "Face Id";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["face_id"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["face_id"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["descripcion_puesto"] = "Descripcion Puesto";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["descripcion_puesto"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["descripcion_puesto"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["descripcion_sexo"] = "Descripcion Sexo";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["descripcion_sexo"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["descripcion_sexo"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["descripcion_estado_civil"] = "Descripcion Estado Civil";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["descripcion_estado_civil"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["descripcion_estado_civil"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["descripcion_sangre"] = "Descripcion Sangre";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["descripcion_sangre"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["descripcion_sangre"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["descripcion_local_foraneo"] = "Descripcion Local Foraneo";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["descripcion_local_foraneo"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["descripcion_local_foraneo"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["descripcion_tipo_de_pago"] = "Descripcion Tipo De Pago";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["descripcion_tipo_de_pago"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["descripcion_tipo_de_pago"] = "";
	$fieldLabelscat_trabajadores_altas1["Spanish"]["descripcion_empresas"] = "Descripcion Empresas";
	$fieldToolTipscat_trabajadores_altas1["Spanish"]["descripcion_empresas"] = "";
	$placeHolderscat_trabajadores_altas1["Spanish"]["descripcion_empresas"] = "";
	if (count($fieldToolTipscat_trabajadores_altas1["Spanish"]))
		$tdatacat_trabajadores_altas1[".isUseToolTips"] = true;
}





$tdatacat_trabajadores_altas1[".shortTableName"] = "cat_trabajadores_altas1";
$tdatacat_trabajadores_altas1[".nSecOptions"] = 0;

$tdatacat_trabajadores_altas1[".mainTableOwnerID"] = "cat_usuarios_licencias_id";
$tdatacat_trabajadores_altas1[".entityType"] = 1;
$tdatacat_trabajadores_altas1[".connId"] = "wwinte_app_at_intelagro_mx";


$tdatacat_trabajadores_altas1[".strOriginalTableName"] = "cat_trabajadores_altas";

	



$tdatacat_trabajadores_altas1[".showAddInPopup"] = false;

$tdatacat_trabajadores_altas1[".showEditInPopup"] = false;

$tdatacat_trabajadores_altas1[".showViewInPopup"] = false;

$tdatacat_trabajadores_altas1[".listAjax"] = false;
//	temporary
//$tdatacat_trabajadores_altas1[".listAjax"] = false;

	$tdatacat_trabajadores_altas1[".audit"] = true;

	$tdatacat_trabajadores_altas1[".locking"] = true;


$pages = $tdatacat_trabajadores_altas1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacat_trabajadores_altas1[".edit"] = true;
	$tdatacat_trabajadores_altas1[".afterEditAction"] = 1;
	$tdatacat_trabajadores_altas1[".closePopupAfterEdit"] = 1;
	$tdatacat_trabajadores_altas1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacat_trabajadores_altas1[".add"] = true;
$tdatacat_trabajadores_altas1[".afterAddAction"] = 1;
$tdatacat_trabajadores_altas1[".closePopupAfterAdd"] = 1;
$tdatacat_trabajadores_altas1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacat_trabajadores_altas1[".list"] = true;
}



$tdatacat_trabajadores_altas1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacat_trabajadores_altas1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacat_trabajadores_altas1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacat_trabajadores_altas1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacat_trabajadores_altas1[".printFriendly"] = true;
}



$tdatacat_trabajadores_altas1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacat_trabajadores_altas1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacat_trabajadores_altas1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacat_trabajadores_altas1[".isUseAjaxSuggest"] = true;



																																																																																																																																				

$tdatacat_trabajadores_altas1[".ajaxCodeSnippetAdded"] = false;

$tdatacat_trabajadores_altas1[".buttonsAdded"] = false;

$tdatacat_trabajadores_altas1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacat_trabajadores_altas1[".isUseTimeForSearch"] = false;


$tdatacat_trabajadores_altas1[".badgeColor"] = "9ACD32";


$tdatacat_trabajadores_altas1[".allSearchFields"] = array();
$tdatacat_trabajadores_altas1[".filterFields"] = array();
$tdatacat_trabajadores_altas1[".requiredSearchFields"] = array();

$tdatacat_trabajadores_altas1[".googleLikeFields"] = array();
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "time_stamp";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "capturista";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "vigente";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "fecha_de_registro";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "apellido_paterno";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "apellido_materno";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "primer_nombre";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "segundo_nombre";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "rfc";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "curp";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "num_seguridad_social";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "municipio_nacimiento";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "estado_nacimiento";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "nacionalidad";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "telefono_emergencia";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "contacto_emergencia";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "nombre_completo";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "fecha_de_nacimiento";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cat_trabajadores_altas_id_empresa";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "celular_mensajes";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "permiso_msm";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "estatus";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "fecha_de_captura";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "face_id";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "tr_tags_numero_asignado";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cat_trabajadores_puestos_id";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "descripcion_puesto";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cat_trabajadores_sexo_mu_id";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "descripcion_sexo";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cat_trabajadores_estado_civil_mu_id";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "descripcion_estado_civil";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "calle";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "colonia";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "municipio";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "estado";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "codigo_postal";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "banco";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cuenta_bancaria";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cat_trabajadores_sangre_mu_id";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "descripcion_sangre";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cat_trabajadores_local_foraneo_mu_id";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "descripcion_local_foraneo";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cat_trabajadores_tipo_de_pago_id";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "descripcion_tipo_de_pago";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cat_holding_02_empresas";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "descripcion_empresas";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "fecha_de_ingreso";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "numero_domicilio";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "observaciones";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "link_foto";
$tdatacat_trabajadores_altas1[".googleLikeFields"][] = "cat_nominas_01_generales_uuid";



$tdatacat_trabajadores_altas1[".tableType"] = "list";

$tdatacat_trabajadores_altas1[".printerPageOrientation"] = 0;
$tdatacat_trabajadores_altas1[".nPrinterPageScale"] = 100;

$tdatacat_trabajadores_altas1[".nPrinterSplitRecords"] = 40;

$tdatacat_trabajadores_altas1[".geocodingEnabled"] = false;





$tdatacat_trabajadores_altas1[".isResizeColumns"] = true;





$tdatacat_trabajadores_altas1[".pageSize"] = 20;

$tdatacat_trabajadores_altas1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacat_trabajadores_altas1[".strOrderBy"] = $tstrOrderBy;

$tdatacat_trabajadores_altas1[".orderindexes"] = array();


$tdatacat_trabajadores_altas1[".sqlHead"] = "SELECT cat_trabajadores_altas.cat_trabajadores_altas_id,  cat_trabajadores_altas.time_stamp,  cat_trabajadores_altas.capturista,  cat_trabajadores_altas.vigente,  cat_trabajadores_altas.fecha_de_registro,  cat_trabajadores_altas.apellido_paterno,  cat_trabajadores_altas.apellido_materno,  cat_trabajadores_altas.primer_nombre,  cat_trabajadores_altas.segundo_nombre,  cat_trabajadores_altas.rfc,  cat_trabajadores_altas.curp,  cat_trabajadores_altas.num_seguridad_social,  cat_trabajadores_altas.municipio_nacimiento,  cat_trabajadores_altas.estado_nacimiento,  cat_trabajadores_altas.nacionalidad,  cat_trabajadores_altas.telefono_emergencia,  cat_trabajadores_altas.contacto_emergencia,  cat_trabajadores_altas.nombre_completo,  cat_trabajadores_altas.fecha_de_nacimiento,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  cat_trabajadores_altas.celular_mensajes,  cat_trabajadores_altas.permiso_msm,  cat_trabajadores_altas.estatus,  cat_trabajadores_altas.fecha_de_captura,  cat_trabajadores_altas.face_id,  cat_trabajadores_altas.tr_tags_numero_asignado,  cat_trabajadores_altas.cat_trabajadores_puestos_id,  cat_trabajadores_puestos.descripcion_puesto,  cat_trabajadores_altas.cat_trabajadores_sexo_mu_id,  cat_trabajadores_sexo_mu.descripcion_sexo,  cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id,  cat_trabajadores_estado_civil_mu.descripcion_estado_civil,  cat_trabajadores_altas.calle,  cat_trabajadores_altas.colonia,  cat_trabajadores_altas.municipio,  cat_trabajadores_altas.estado,  cat_trabajadores_altas.codigo_postal,  cat_trabajadores_altas.banco,  cat_trabajadores_altas.cuenta_bancaria,  cat_trabajadores_altas.cat_trabajadores_sangre_mu_id,  cat_trabajadores_sangre_mu.descripcion_sangre,  cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id,  cat_trabajadores_local_foraneo_mu.descripcion_local_foraneo,  cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id,  cat_trabajadores_tipo_de_pago.descripcion_tipo_de_pago,  cat_trabajadores_altas.cat_holding_02_empresas,  cat_holding_02_empresas.descripcion_empresas,  cat_trabajadores_altas.fecha_de_ingreso,  cat_trabajadores_altas.numero_domicilio,  cat_trabajadores_altas.observaciones,  cat_trabajadores_altas.link_foto,  cat_trabajadores_altas.cat_nominas_01_generales_uuid";
$tdatacat_trabajadores_altas1[".sqlFrom"] = "FROM cat_trabajadores_altas  LEFT OUTER JOIN cat_trabajadores_puestos ON cat_trabajadores_altas.cat_trabajadores_puestos_id = cat_trabajadores_puestos.cat_trabajadores_puestos_id  LEFT OUTER JOIN cat_trabajadores_sexo_mu ON cat_trabajadores_altas.cat_trabajadores_sexo_mu_id = cat_trabajadores_sexo_mu.cat_trabajadores_sexo_mu_id  LEFT OUTER JOIN cat_trabajadores_estado_civil_mu ON cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id = cat_trabajadores_estado_civil_mu.cat_trabajadores_estado_civil_mu_id  LEFT OUTER JOIN cat_trabajadores_sangre_mu ON cat_trabajadores_altas.cat_trabajadores_sangre_mu_id = cat_trabajadores_sangre_mu.cat_trabajadores_sangre_mu_id  LEFT OUTER JOIN cat_trabajadores_local_foraneo_mu ON cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id = cat_trabajadores_local_foraneo_mu.cat_trabajadores_local_foraneo_mu_id  LEFT OUTER JOIN cat_trabajadores_tipo_de_pago ON cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id = cat_trabajadores_tipo_de_pago.cat_trabajadores_tipo_de_pago_id  LEFT OUTER JOIN cat_holding_02_empresas ON cat_trabajadores_altas.cat_holding_02_empresas = cat_holding_02_empresas.cat_holding_02_empresas_id";
$tdatacat_trabajadores_altas1[".sqlWhereExpr"] = "";
$tdatacat_trabajadores_altas1[".sqlTail"] = "";

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
$tdatacat_trabajadores_altas1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacat_trabajadores_altas1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacat_trabajadores_altas1[".arrGroupsPerPage"] = $arrGPP;

$tdatacat_trabajadores_altas1[".highlightSearchResults"] = true;

$tableKeyscat_trabajadores_altas1 = array();
$tableKeyscat_trabajadores_altas1[] = "cat_trabajadores_altas_id";
$tdatacat_trabajadores_altas1[".Keys"] = $tableKeyscat_trabajadores_altas1;


$tdatacat_trabajadores_altas1[".hideMobileList"] = array();




//	cat_trabajadores_altas_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cat_trabajadores_altas_id";
	$fdata["GoodName"] = "cat_trabajadores_altas_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cat_trabajadores_altas_id");
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


	$tdatacat_trabajadores_altas1["cat_trabajadores_altas_id"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cat_trabajadores_altas_id";
//	time_stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "time_stamp";
	$fdata["GoodName"] = "time_stamp";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","time_stamp");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "time_stamp";

		$fdata["sourceSingle"] = "time_stamp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.time_stamp";

	
	
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


	$tdatacat_trabajadores_altas1["time_stamp"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "time_stamp";
//	capturista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "capturista";
	$fdata["GoodName"] = "capturista";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","capturista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "capturista";

		$fdata["sourceSingle"] = "capturista";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.capturista";

	
	
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


	$tdatacat_trabajadores_altas1["capturista"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "capturista";
//	vigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "vigente";
	$fdata["GoodName"] = "vigente";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","vigente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "vigente";

		$fdata["sourceSingle"] = "vigente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.vigente";

	
	
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


	$tdatacat_trabajadores_altas1["vigente"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "vigente";
//	fecha_de_registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_de_registro";
	$fdata["GoodName"] = "fecha_de_registro";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","fecha_de_registro");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_registro";

		$fdata["sourceSingle"] = "fecha_de_registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.fecha_de_registro";

	
	
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


	$tdatacat_trabajadores_altas1["fecha_de_registro"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "fecha_de_registro";
//	apellido_paterno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "apellido_paterno";
	$fdata["GoodName"] = "apellido_paterno";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","apellido_paterno");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellido_paterno";

		$fdata["sourceSingle"] = "apellido_paterno";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.apellido_paterno";

	
	
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


	$tdatacat_trabajadores_altas1["apellido_paterno"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "apellido_paterno";
//	apellido_materno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "apellido_materno";
	$fdata["GoodName"] = "apellido_materno";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","apellido_materno");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellido_materno";

		$fdata["sourceSingle"] = "apellido_materno";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.apellido_materno";

	
	
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


	$tdatacat_trabajadores_altas1["apellido_materno"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "apellido_materno";
//	primer_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "primer_nombre";
	$fdata["GoodName"] = "primer_nombre";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","primer_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "primer_nombre";

		$fdata["sourceSingle"] = "primer_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.primer_nombre";

	
	
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


	$tdatacat_trabajadores_altas1["primer_nombre"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "primer_nombre";
//	segundo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "segundo_nombre";
	$fdata["GoodName"] = "segundo_nombre";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","segundo_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "segundo_nombre";

		$fdata["sourceSingle"] = "segundo_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.segundo_nombre";

	
	
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


	$tdatacat_trabajadores_altas1["segundo_nombre"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "segundo_nombre";
//	rfc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rfc";
	$fdata["GoodName"] = "rfc";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","rfc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rfc";

		$fdata["sourceSingle"] = "rfc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.rfc";

	
	
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


	$tdatacat_trabajadores_altas1["rfc"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "rfc";
//	curp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "curp";
	$fdata["GoodName"] = "curp";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","curp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "curp";

		$fdata["sourceSingle"] = "curp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.curp";

	
	
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


	$tdatacat_trabajadores_altas1["curp"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "curp";
//	num_seguridad_social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "num_seguridad_social";
	$fdata["GoodName"] = "num_seguridad_social";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","num_seguridad_social");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "num_seguridad_social";

		$fdata["sourceSingle"] = "num_seguridad_social";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.num_seguridad_social";

	
	
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


	$tdatacat_trabajadores_altas1["num_seguridad_social"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "num_seguridad_social";
//	municipio_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "municipio_nacimiento";
	$fdata["GoodName"] = "municipio_nacimiento";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","municipio_nacimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "municipio_nacimiento";

		$fdata["sourceSingle"] = "municipio_nacimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.municipio_nacimiento";

	
	
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


	$tdatacat_trabajadores_altas1["municipio_nacimiento"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "municipio_nacimiento";
//	estado_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "estado_nacimiento";
	$fdata["GoodName"] = "estado_nacimiento";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","estado_nacimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado_nacimiento";

		$fdata["sourceSingle"] = "estado_nacimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.estado_nacimiento";

	
	
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


	$tdatacat_trabajadores_altas1["estado_nacimiento"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "estado_nacimiento";
//	nacionalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nacionalidad";
	$fdata["GoodName"] = "nacionalidad";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","nacionalidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nacionalidad";

		$fdata["sourceSingle"] = "nacionalidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.nacionalidad";

	
	
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


	$tdatacat_trabajadores_altas1["nacionalidad"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "nacionalidad";
//	telefono_emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "telefono_emergencia";
	$fdata["GoodName"] = "telefono_emergencia";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","telefono_emergencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefono_emergencia";

		$fdata["sourceSingle"] = "telefono_emergencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.telefono_emergencia";

	
	
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


	$tdatacat_trabajadores_altas1["telefono_emergencia"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "telefono_emergencia";
//	contacto_emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "contacto_emergencia";
	$fdata["GoodName"] = "contacto_emergencia";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","contacto_emergencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contacto_emergencia";

		$fdata["sourceSingle"] = "contacto_emergencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.contacto_emergencia";

	
	
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


	$tdatacat_trabajadores_altas1["contacto_emergencia"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "contacto_emergencia";
//	nombre_completo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nombre_completo";
	$fdata["GoodName"] = "nombre_completo";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","nombre_completo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_completo";

		$fdata["sourceSingle"] = "nombre_completo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.nombre_completo";

	
	
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


	$tdatacat_trabajadores_altas1["nombre_completo"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "nombre_completo";
//	fecha_de_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "fecha_de_nacimiento";
	$fdata["GoodName"] = "fecha_de_nacimiento";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","fecha_de_nacimiento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_nacimiento";

		$fdata["sourceSingle"] = "fecha_de_nacimiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.fecha_de_nacimiento";

	
	
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


	$tdatacat_trabajadores_altas1["fecha_de_nacimiento"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "fecha_de_nacimiento";
//	cat_trabajadores_altas_id_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["GoodName"] = "cat_trabajadores_altas_id_empresa";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cat_trabajadores_altas_id_empresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_trabajadores_altas_id_empresa";

		$fdata["sourceSingle"] = "cat_trabajadores_altas_id_empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";

	
	
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


	$tdatacat_trabajadores_altas1["cat_trabajadores_altas_id_empresa"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cat_trabajadores_altas_id_empresa";
//	celular_mensajes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "celular_mensajes";
	$fdata["GoodName"] = "celular_mensajes";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","celular_mensajes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "celular_mensajes";

		$fdata["sourceSingle"] = "celular_mensajes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.celular_mensajes";

	
	
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


	$tdatacat_trabajadores_altas1["celular_mensajes"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "celular_mensajes";
//	permiso_msm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "permiso_msm";
	$fdata["GoodName"] = "permiso_msm";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","permiso_msm");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "permiso_msm";

		$fdata["sourceSingle"] = "permiso_msm";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.permiso_msm";

	
	
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


	$tdatacat_trabajadores_altas1["permiso_msm"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "permiso_msm";
//	estatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "estatus";
	$fdata["GoodName"] = "estatus";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","estatus");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estatus";

		$fdata["sourceSingle"] = "estatus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.estatus";

	
	
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


	$tdatacat_trabajadores_altas1["estatus"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "estatus";
//	fecha_de_captura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "fecha_de_captura";
	$fdata["GoodName"] = "fecha_de_captura";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","fecha_de_captura");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_de_captura";

		$fdata["sourceSingle"] = "fecha_de_captura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.fecha_de_captura";

	
	
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


	$tdatacat_trabajadores_altas1["fecha_de_captura"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "fecha_de_captura";
//	face_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "face_id";
	$fdata["GoodName"] = "face_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","face_id");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "face_id";

		$fdata["sourceSingle"] = "face_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.face_id";

	
	
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


	$tdatacat_trabajadores_altas1["face_id"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "face_id";
//	tr_tags_numero_asignado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "tr_tags_numero_asignado";
	$fdata["GoodName"] = "tr_tags_numero_asignado";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","tr_tags_numero_asignado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tr_tags_numero_asignado";

		$fdata["sourceSingle"] = "tr_tags_numero_asignado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.tr_tags_numero_asignado";

	
	
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


	$tdatacat_trabajadores_altas1["tr_tags_numero_asignado"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "tr_tags_numero_asignado";
//	cat_trabajadores_puestos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cat_trabajadores_puestos_id";
	$fdata["GoodName"] = "cat_trabajadores_puestos_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cat_trabajadores_puestos_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_puestos_id";

		$fdata["sourceSingle"] = "cat_trabajadores_puestos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_puestos_id";

	
	
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


	$tdatacat_trabajadores_altas1["cat_trabajadores_puestos_id"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cat_trabajadores_puestos_id";
//	descripcion_puesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "descripcion_puesto";
	$fdata["GoodName"] = "descripcion_puesto";
	$fdata["ownerTable"] = "cat_trabajadores_puestos";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","descripcion_puesto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_puesto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_puestos.descripcion_puesto";

	
	
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


	$tdatacat_trabajadores_altas1["descripcion_puesto"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "descripcion_puesto";
//	cat_trabajadores_sexo_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "cat_trabajadores_sexo_mu_id";
	$fdata["GoodName"] = "cat_trabajadores_sexo_mu_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cat_trabajadores_sexo_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_sexo_mu_id";

		$fdata["sourceSingle"] = "cat_trabajadores_sexo_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_sexo_mu_id";

	
	
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


	$tdatacat_trabajadores_altas1["cat_trabajadores_sexo_mu_id"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cat_trabajadores_sexo_mu_id";
//	descripcion_sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "descripcion_sexo";
	$fdata["GoodName"] = "descripcion_sexo";
	$fdata["ownerTable"] = "cat_trabajadores_sexo_mu";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","descripcion_sexo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_sexo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_sexo_mu.descripcion_sexo";

	
	
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


	$tdatacat_trabajadores_altas1["descripcion_sexo"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "descripcion_sexo";
//	cat_trabajadores_estado_civil_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "cat_trabajadores_estado_civil_mu_id";
	$fdata["GoodName"] = "cat_trabajadores_estado_civil_mu_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cat_trabajadores_estado_civil_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_estado_civil_mu_id";

		$fdata["sourceSingle"] = "cat_trabajadores_estado_civil_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id";

	
	
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


	$tdatacat_trabajadores_altas1["cat_trabajadores_estado_civil_mu_id"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cat_trabajadores_estado_civil_mu_id";
//	descripcion_estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "descripcion_estado_civil";
	$fdata["GoodName"] = "descripcion_estado_civil";
	$fdata["ownerTable"] = "cat_trabajadores_estado_civil_mu";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","descripcion_estado_civil");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_estado_civil";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_estado_civil_mu.descripcion_estado_civil";

	
	
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


	$tdatacat_trabajadores_altas1["descripcion_estado_civil"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "descripcion_estado_civil";
//	calle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "calle";
	$fdata["GoodName"] = "calle";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","calle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "calle";

		$fdata["sourceSingle"] = "calle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.calle";

	
	
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


	$tdatacat_trabajadores_altas1["calle"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "calle";
//	colonia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "colonia";
	$fdata["GoodName"] = "colonia";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","colonia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "colonia";

		$fdata["sourceSingle"] = "colonia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.colonia";

	
	
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


	$tdatacat_trabajadores_altas1["colonia"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "colonia";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "municipio";

		$fdata["sourceSingle"] = "municipio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.municipio";

	
	
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


	$tdatacat_trabajadores_altas1["municipio"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "municipio";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.estado";

	
	
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


	$tdatacat_trabajadores_altas1["estado"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "estado";
//	codigo_postal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "codigo_postal";
	$fdata["GoodName"] = "codigo_postal";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","codigo_postal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codigo_postal";

		$fdata["sourceSingle"] = "codigo_postal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.codigo_postal";

	
	
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


	$tdatacat_trabajadores_altas1["codigo_postal"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "codigo_postal";
//	banco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "banco";
	$fdata["GoodName"] = "banco";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","banco");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "banco";

		$fdata["sourceSingle"] = "banco";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.banco";

	
	
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


	$tdatacat_trabajadores_altas1["banco"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "banco";
//	cuenta_bancaria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "cuenta_bancaria";
	$fdata["GoodName"] = "cuenta_bancaria";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cuenta_bancaria");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cuenta_bancaria";

		$fdata["sourceSingle"] = "cuenta_bancaria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cuenta_bancaria";

	
	
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


	$tdatacat_trabajadores_altas1["cuenta_bancaria"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cuenta_bancaria";
//	cat_trabajadores_sangre_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "cat_trabajadores_sangre_mu_id";
	$fdata["GoodName"] = "cat_trabajadores_sangre_mu_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cat_trabajadores_sangre_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_sangre_mu_id";

		$fdata["sourceSingle"] = "cat_trabajadores_sangre_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_sangre_mu_id";

	
	
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


	$tdatacat_trabajadores_altas1["cat_trabajadores_sangre_mu_id"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cat_trabajadores_sangre_mu_id";
//	descripcion_sangre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "descripcion_sangre";
	$fdata["GoodName"] = "descripcion_sangre";
	$fdata["ownerTable"] = "cat_trabajadores_sangre_mu";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","descripcion_sangre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_sangre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_sangre_mu.descripcion_sangre";

	
	
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


	$tdatacat_trabajadores_altas1["descripcion_sangre"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "descripcion_sangre";
//	cat_trabajadores_local_foraneo_mu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "cat_trabajadores_local_foraneo_mu_id";
	$fdata["GoodName"] = "cat_trabajadores_local_foraneo_mu_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cat_trabajadores_local_foraneo_mu_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_local_foraneo_mu_id";

		$fdata["sourceSingle"] = "cat_trabajadores_local_foraneo_mu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id";

	
	
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


	$tdatacat_trabajadores_altas1["cat_trabajadores_local_foraneo_mu_id"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cat_trabajadores_local_foraneo_mu_id";
//	descripcion_local_foraneo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "descripcion_local_foraneo";
	$fdata["GoodName"] = "descripcion_local_foraneo";
	$fdata["ownerTable"] = "cat_trabajadores_local_foraneo_mu";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","descripcion_local_foraneo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_local_foraneo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_local_foraneo_mu.descripcion_local_foraneo";

	
	
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


	$tdatacat_trabajadores_altas1["descripcion_local_foraneo"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "descripcion_local_foraneo";
//	cat_trabajadores_tipo_de_pago_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "cat_trabajadores_tipo_de_pago_id";
	$fdata["GoodName"] = "cat_trabajadores_tipo_de_pago_id";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cat_trabajadores_tipo_de_pago_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_trabajadores_tipo_de_pago_id";

		$fdata["sourceSingle"] = "cat_trabajadores_tipo_de_pago_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id";

	
	
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


	$tdatacat_trabajadores_altas1["cat_trabajadores_tipo_de_pago_id"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cat_trabajadores_tipo_de_pago_id";
//	descripcion_tipo_de_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "descripcion_tipo_de_pago";
	$fdata["GoodName"] = "descripcion_tipo_de_pago";
	$fdata["ownerTable"] = "cat_trabajadores_tipo_de_pago";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","descripcion_tipo_de_pago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_tipo_de_pago";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_tipo_de_pago.descripcion_tipo_de_pago";

	
	
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


	$tdatacat_trabajadores_altas1["descripcion_tipo_de_pago"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "descripcion_tipo_de_pago";
//	cat_holding_02_empresas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "cat_holding_02_empresas";
	$fdata["GoodName"] = "cat_holding_02_empresas";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cat_holding_02_empresas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cat_holding_02_empresas";

		$fdata["sourceSingle"] = "cat_holding_02_empresas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_holding_02_empresas";

	
	
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


	$tdatacat_trabajadores_altas1["cat_holding_02_empresas"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cat_holding_02_empresas";
//	descripcion_empresas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "descripcion_empresas";
	$fdata["GoodName"] = "descripcion_empresas";
	$fdata["ownerTable"] = "cat_holding_02_empresas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","descripcion_empresas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion_empresas";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_holding_02_empresas.descripcion_empresas";

	
	
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


	$tdatacat_trabajadores_altas1["descripcion_empresas"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "descripcion_empresas";
//	fecha_de_ingreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "fecha_de_ingreso";
	$fdata["GoodName"] = "fecha_de_ingreso";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","fecha_de_ingreso");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_de_ingreso";

		$fdata["sourceSingle"] = "fecha_de_ingreso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.fecha_de_ingreso";

	
	
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


	$tdatacat_trabajadores_altas1["fecha_de_ingreso"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "fecha_de_ingreso";
//	numero_domicilio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "numero_domicilio";
	$fdata["GoodName"] = "numero_domicilio";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","numero_domicilio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numero_domicilio";

		$fdata["sourceSingle"] = "numero_domicilio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.numero_domicilio";

	
	
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


	$tdatacat_trabajadores_altas1["numero_domicilio"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "numero_domicilio";
//	observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "observaciones";
	$fdata["GoodName"] = "observaciones";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observaciones";

		$fdata["sourceSingle"] = "observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.observaciones";

	
	
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


	$tdatacat_trabajadores_altas1["observaciones"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "observaciones";
//	link_foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "link_foto";
	$fdata["GoodName"] = "link_foto";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","link_foto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "link_foto";

		$fdata["sourceSingle"] = "link_foto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.link_foto";

	
	
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


	$tdatacat_trabajadores_altas1["link_foto"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "link_foto";
//	cat_nominas_01_generales_uuid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "cat_nominas_01_generales_uuid";
	$fdata["GoodName"] = "cat_nominas_01_generales_uuid";
	$fdata["ownerTable"] = "cat_trabajadores_altas";
	$fdata["Label"] = GetFieldLabel("cat_trabajadores_altas1","cat_nominas_01_generales_uuid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cat_nominas_01_generales_uuid";

		$fdata["sourceSingle"] = "cat_nominas_01_generales_uuid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cat_trabajadores_altas.cat_nominas_01_generales_uuid";

	
	
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


	$tdatacat_trabajadores_altas1["cat_nominas_01_generales_uuid"] = $fdata;
		$tdatacat_trabajadores_altas1[".searchableFields"][] = "cat_nominas_01_generales_uuid";


$tables_data["cat_trabajadores_altas1"]=&$tdatacat_trabajadores_altas1;
$field_labels["cat_trabajadores_altas1"] = &$fieldLabelscat_trabajadores_altas1;
$fieldToolTips["cat_trabajadores_altas1"] = &$fieldToolTipscat_trabajadores_altas1;
$placeHolders["cat_trabajadores_altas1"] = &$placeHolderscat_trabajadores_altas1;
$page_titles["cat_trabajadores_altas1"] = &$pageTitlescat_trabajadores_altas1;


changeTextControlsToDate( "cat_trabajadores_altas1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cat_trabajadores_altas1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cat_trabajadores_altas1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cat_trabajadores_altas1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cat_trabajadores_altas.cat_trabajadores_altas_id,  cat_trabajadores_altas.time_stamp,  cat_trabajadores_altas.capturista,  cat_trabajadores_altas.vigente,  cat_trabajadores_altas.fecha_de_registro,  cat_trabajadores_altas.apellido_paterno,  cat_trabajadores_altas.apellido_materno,  cat_trabajadores_altas.primer_nombre,  cat_trabajadores_altas.segundo_nombre,  cat_trabajadores_altas.rfc,  cat_trabajadores_altas.curp,  cat_trabajadores_altas.num_seguridad_social,  cat_trabajadores_altas.municipio_nacimiento,  cat_trabajadores_altas.estado_nacimiento,  cat_trabajadores_altas.nacionalidad,  cat_trabajadores_altas.telefono_emergencia,  cat_trabajadores_altas.contacto_emergencia,  cat_trabajadores_altas.nombre_completo,  cat_trabajadores_altas.fecha_de_nacimiento,  cat_trabajadores_altas.cat_trabajadores_altas_id_empresa,  cat_trabajadores_altas.celular_mensajes,  cat_trabajadores_altas.permiso_msm,  cat_trabajadores_altas.estatus,  cat_trabajadores_altas.fecha_de_captura,  cat_trabajadores_altas.face_id,  cat_trabajadores_altas.tr_tags_numero_asignado,  cat_trabajadores_altas.cat_trabajadores_puestos_id,  cat_trabajadores_puestos.descripcion_puesto,  cat_trabajadores_altas.cat_trabajadores_sexo_mu_id,  cat_trabajadores_sexo_mu.descripcion_sexo,  cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id,  cat_trabajadores_estado_civil_mu.descripcion_estado_civil,  cat_trabajadores_altas.calle,  cat_trabajadores_altas.colonia,  cat_trabajadores_altas.municipio,  cat_trabajadores_altas.estado,  cat_trabajadores_altas.codigo_postal,  cat_trabajadores_altas.banco,  cat_trabajadores_altas.cuenta_bancaria,  cat_trabajadores_altas.cat_trabajadores_sangre_mu_id,  cat_trabajadores_sangre_mu.descripcion_sangre,  cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id,  cat_trabajadores_local_foraneo_mu.descripcion_local_foraneo,  cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id,  cat_trabajadores_tipo_de_pago.descripcion_tipo_de_pago,  cat_trabajadores_altas.cat_holding_02_empresas,  cat_holding_02_empresas.descripcion_empresas,  cat_trabajadores_altas.fecha_de_ingreso,  cat_trabajadores_altas.numero_domicilio,  cat_trabajadores_altas.observaciones,  cat_trabajadores_altas.link_foto,  cat_trabajadores_altas.cat_nominas_01_generales_uuid";
$proto0["m_strFrom"] = "FROM cat_trabajadores_altas  LEFT OUTER JOIN cat_trabajadores_puestos ON cat_trabajadores_altas.cat_trabajadores_puestos_id = cat_trabajadores_puestos.cat_trabajadores_puestos_id  LEFT OUTER JOIN cat_trabajadores_sexo_mu ON cat_trabajadores_altas.cat_trabajadores_sexo_mu_id = cat_trabajadores_sexo_mu.cat_trabajadores_sexo_mu_id  LEFT OUTER JOIN cat_trabajadores_estado_civil_mu ON cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id = cat_trabajadores_estado_civil_mu.cat_trabajadores_estado_civil_mu_id  LEFT OUTER JOIN cat_trabajadores_sangre_mu ON cat_trabajadores_altas.cat_trabajadores_sangre_mu_id = cat_trabajadores_sangre_mu.cat_trabajadores_sangre_mu_id  LEFT OUTER JOIN cat_trabajadores_local_foraneo_mu ON cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id = cat_trabajadores_local_foraneo_mu.cat_trabajadores_local_foraneo_mu_id  LEFT OUTER JOIN cat_trabajadores_tipo_de_pago ON cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id = cat_trabajadores_tipo_de_pago.cat_trabajadores_tipo_de_pago_id  LEFT OUTER JOIN cat_holding_02_empresas ON cat_trabajadores_altas.cat_holding_02_empresas = cat_holding_02_empresas.cat_holding_02_empresas_id";
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
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto6["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id";
$proto6["m_srcTableName"] = "cat_trabajadores_altas1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "time_stamp",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto8["m_sql"] = "cat_trabajadores_altas.time_stamp";
$proto8["m_srcTableName"] = "cat_trabajadores_altas1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "capturista",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto10["m_sql"] = "cat_trabajadores_altas.capturista";
$proto10["m_srcTableName"] = "cat_trabajadores_altas1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "vigente",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto12["m_sql"] = "cat_trabajadores_altas.vigente";
$proto12["m_srcTableName"] = "cat_trabajadores_altas1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_registro",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto14["m_sql"] = "cat_trabajadores_altas.fecha_de_registro";
$proto14["m_srcTableName"] = "cat_trabajadores_altas1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido_paterno",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto16["m_sql"] = "cat_trabajadores_altas.apellido_paterno";
$proto16["m_srcTableName"] = "cat_trabajadores_altas1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido_materno",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto18["m_sql"] = "cat_trabajadores_altas.apellido_materno";
$proto18["m_srcTableName"] = "cat_trabajadores_altas1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "primer_nombre",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto20["m_sql"] = "cat_trabajadores_altas.primer_nombre";
$proto20["m_srcTableName"] = "cat_trabajadores_altas1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "segundo_nombre",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto22["m_sql"] = "cat_trabajadores_altas.segundo_nombre";
$proto22["m_srcTableName"] = "cat_trabajadores_altas1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rfc",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto24["m_sql"] = "cat_trabajadores_altas.rfc";
$proto24["m_srcTableName"] = "cat_trabajadores_altas1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "curp",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto26["m_sql"] = "cat_trabajadores_altas.curp";
$proto26["m_srcTableName"] = "cat_trabajadores_altas1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "num_seguridad_social",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto28["m_sql"] = "cat_trabajadores_altas.num_seguridad_social";
$proto28["m_srcTableName"] = "cat_trabajadores_altas1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio_nacimiento",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto30["m_sql"] = "cat_trabajadores_altas.municipio_nacimiento";
$proto30["m_srcTableName"] = "cat_trabajadores_altas1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_nacimiento",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto32["m_sql"] = "cat_trabajadores_altas.estado_nacimiento";
$proto32["m_srcTableName"] = "cat_trabajadores_altas1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "nacionalidad",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto34["m_sql"] = "cat_trabajadores_altas.nacionalidad";
$proto34["m_srcTableName"] = "cat_trabajadores_altas1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono_emergencia",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto36["m_sql"] = "cat_trabajadores_altas.telefono_emergencia";
$proto36["m_srcTableName"] = "cat_trabajadores_altas1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "contacto_emergencia",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto38["m_sql"] = "cat_trabajadores_altas.contacto_emergencia";
$proto38["m_srcTableName"] = "cat_trabajadores_altas1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_completo",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto40["m_sql"] = "cat_trabajadores_altas.nombre_completo";
$proto40["m_srcTableName"] = "cat_trabajadores_altas1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_nacimiento",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto42["m_sql"] = "cat_trabajadores_altas.fecha_de_nacimiento";
$proto42["m_srcTableName"] = "cat_trabajadores_altas1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_altas_id_empresa",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto44["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_altas_id_empresa";
$proto44["m_srcTableName"] = "cat_trabajadores_altas1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "celular_mensajes",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto46["m_sql"] = "cat_trabajadores_altas.celular_mensajes";
$proto46["m_srcTableName"] = "cat_trabajadores_altas1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "permiso_msm",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto48["m_sql"] = "cat_trabajadores_altas.permiso_msm";
$proto48["m_srcTableName"] = "cat_trabajadores_altas1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "estatus",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto50["m_sql"] = "cat_trabajadores_altas.estatus";
$proto50["m_srcTableName"] = "cat_trabajadores_altas1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_captura",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto52["m_sql"] = "cat_trabajadores_altas.fecha_de_captura";
$proto52["m_srcTableName"] = "cat_trabajadores_altas1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "face_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto54["m_sql"] = "cat_trabajadores_altas.face_id";
$proto54["m_srcTableName"] = "cat_trabajadores_altas1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "tr_tags_numero_asignado",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto56["m_sql"] = "cat_trabajadores_altas.tr_tags_numero_asignado";
$proto56["m_srcTableName"] = "cat_trabajadores_altas1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_puestos_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto58["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_puestos_id";
$proto58["m_srcTableName"] = "cat_trabajadores_altas1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_puesto",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto60["m_sql"] = "cat_trabajadores_puestos.descripcion_puesto";
$proto60["m_srcTableName"] = "cat_trabajadores_altas1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_sexo_mu_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto62["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_sexo_mu_id";
$proto62["m_srcTableName"] = "cat_trabajadores_altas1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_sexo",
	"m_strTable" => "cat_trabajadores_sexo_mu",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto64["m_sql"] = "cat_trabajadores_sexo_mu.descripcion_sexo";
$proto64["m_srcTableName"] = "cat_trabajadores_altas1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_estado_civil_mu_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto66["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id";
$proto66["m_srcTableName"] = "cat_trabajadores_altas1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_estado_civil",
	"m_strTable" => "cat_trabajadores_estado_civil_mu",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto68["m_sql"] = "cat_trabajadores_estado_civil_mu.descripcion_estado_civil";
$proto68["m_srcTableName"] = "cat_trabajadores_altas1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "calle",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto70["m_sql"] = "cat_trabajadores_altas.calle";
$proto70["m_srcTableName"] = "cat_trabajadores_altas1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "colonia",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto72["m_sql"] = "cat_trabajadores_altas.colonia";
$proto72["m_srcTableName"] = "cat_trabajadores_altas1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto74["m_sql"] = "cat_trabajadores_altas.municipio";
$proto74["m_srcTableName"] = "cat_trabajadores_altas1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto76["m_sql"] = "cat_trabajadores_altas.estado";
$proto76["m_srcTableName"] = "cat_trabajadores_altas1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_postal",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto78["m_sql"] = "cat_trabajadores_altas.codigo_postal";
$proto78["m_srcTableName"] = "cat_trabajadores_altas1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "banco",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto80["m_sql"] = "cat_trabajadores_altas.banco";
$proto80["m_srcTableName"] = "cat_trabajadores_altas1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "cuenta_bancaria",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto82["m_sql"] = "cat_trabajadores_altas.cuenta_bancaria";
$proto82["m_srcTableName"] = "cat_trabajadores_altas1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_sangre_mu_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto84["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_sangre_mu_id";
$proto84["m_srcTableName"] = "cat_trabajadores_altas1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_sangre",
	"m_strTable" => "cat_trabajadores_sangre_mu",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto86["m_sql"] = "cat_trabajadores_sangre_mu.descripcion_sangre";
$proto86["m_srcTableName"] = "cat_trabajadores_altas1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_local_foraneo_mu_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto88["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id";
$proto88["m_srcTableName"] = "cat_trabajadores_altas1";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_local_foraneo",
	"m_strTable" => "cat_trabajadores_local_foraneo_mu",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto90["m_sql"] = "cat_trabajadores_local_foraneo_mu.descripcion_local_foraneo";
$proto90["m_srcTableName"] = "cat_trabajadores_altas1";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_tipo_de_pago_id",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto92["m_sql"] = "cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id";
$proto92["m_srcTableName"] = "cat_trabajadores_altas1";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_tipo_de_pago",
	"m_strTable" => "cat_trabajadores_tipo_de_pago",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto94["m_sql"] = "cat_trabajadores_tipo_de_pago.descripcion_tipo_de_pago";
$proto94["m_srcTableName"] = "cat_trabajadores_altas1";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_holding_02_empresas",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto96["m_sql"] = "cat_trabajadores_altas.cat_holding_02_empresas";
$proto96["m_srcTableName"] = "cat_trabajadores_altas1";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion_empresas",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto98["m_sql"] = "cat_holding_02_empresas.descripcion_empresas";
$proto98["m_srcTableName"] = "cat_trabajadores_altas1";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_de_ingreso",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto100["m_sql"] = "cat_trabajadores_altas.fecha_de_ingreso";
$proto100["m_srcTableName"] = "cat_trabajadores_altas1";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_domicilio",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto102["m_sql"] = "cat_trabajadores_altas.numero_domicilio";
$proto102["m_srcTableName"] = "cat_trabajadores_altas1";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto104["m_sql"] = "cat_trabajadores_altas.observaciones";
$proto104["m_srcTableName"] = "cat_trabajadores_altas1";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "link_foto",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto106["m_sql"] = "cat_trabajadores_altas.link_foto";
$proto106["m_srcTableName"] = "cat_trabajadores_altas1";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "cat_nominas_01_generales_uuid",
	"m_strTable" => "cat_trabajadores_altas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto108["m_sql"] = "cat_trabajadores_altas.cat_nominas_01_generales_uuid";
$proto108["m_srcTableName"] = "cat_trabajadores_altas1";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto110=array();
$proto110["m_link"] = "SQLL_MAIN";
			$proto111=array();
$proto111["m_strName"] = "cat_trabajadores_altas";
$proto111["m_srcTableName"] = "cat_trabajadores_altas1";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "cat_trabajadores_altas_id";
$proto111["m_columns"][] = "time_stamp";
$proto111["m_columns"][] = "capturista";
$proto111["m_columns"][] = "vigente";
$proto111["m_columns"][] = "fecha_de_registro";
$proto111["m_columns"][] = "apellido_paterno";
$proto111["m_columns"][] = "apellido_materno";
$proto111["m_columns"][] = "primer_nombre";
$proto111["m_columns"][] = "segundo_nombre";
$proto111["m_columns"][] = "rfc";
$proto111["m_columns"][] = "curp";
$proto111["m_columns"][] = "num_seguridad_social";
$proto111["m_columns"][] = "municipio_nacimiento";
$proto111["m_columns"][] = "estado_nacimiento";
$proto111["m_columns"][] = "nacionalidad";
$proto111["m_columns"][] = "telefono_emergencia";
$proto111["m_columns"][] = "contacto_emergencia";
$proto111["m_columns"][] = "nombre_completo";
$proto111["m_columns"][] = "fecha_de_nacimiento";
$proto111["m_columns"][] = "cat_trabajadores_altas_id_empresa";
$proto111["m_columns"][] = "celular_mensajes";
$proto111["m_columns"][] = "permiso_msm";
$proto111["m_columns"][] = "estatus";
$proto111["m_columns"][] = "fecha_de_captura";
$proto111["m_columns"][] = "face_id";
$proto111["m_columns"][] = "tr_tags_numero_asignado";
$proto111["m_columns"][] = "cat_trabajadores_puestos_id";
$proto111["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto111["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto111["m_columns"][] = "calle";
$proto111["m_columns"][] = "colonia";
$proto111["m_columns"][] = "municipio";
$proto111["m_columns"][] = "estado";
$proto111["m_columns"][] = "codigo_postal";
$proto111["m_columns"][] = "banco";
$proto111["m_columns"][] = "cuenta_bancaria";
$proto111["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto111["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto111["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto111["m_columns"][] = "cat_holding_02_empresas";
$proto111["m_columns"][] = "fecha_de_ingreso";
$proto111["m_columns"][] = "numero_domicilio";
$proto111["m_columns"][] = "observaciones";
$proto111["m_columns"][] = "link_foto";
$proto111["m_columns"][] = "cat_nominas_01_generales_uuid";
$proto111["m_columns"][] = "cat_trabajadores_cuadrillas_id";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "cat_trabajadores_altas";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "cat_trabajadores_altas1";
$proto112=array();
$proto112["m_sql"] = "";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto110);

$proto0["m_fromlist"][]=$obj;
												$proto114=array();
$proto114["m_link"] = "SQLL_LEFTJOIN";
			$proto115=array();
$proto115["m_strName"] = "cat_trabajadores_puestos";
$proto115["m_srcTableName"] = "cat_trabajadores_altas1";
$proto115["m_columns"] = array();
$proto115["m_columns"][] = "cat_trabajadores_puestos_id";
$proto115["m_columns"][] = "time_stamp";
$proto115["m_columns"][] = "capturista";
$proto115["m_columns"][] = "vigente";
$proto115["m_columns"][] = "fecha_de_registro";
$proto115["m_columns"][] = "descripcion_puesto";
$proto115["m_columns"][] = "sueldo_diario";
$proto115["m_columns"][] = "horas_laborales";
$proto115["m_columns"][] = "hora_extra";
$proto115["m_columns"][] = "bono";
$proto115["m_columns"][] = "prima";
$obj = new SQLTable($proto115);

$proto114["m_table"] = $obj;
$proto114["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_puestos ON cat_trabajadores_altas.cat_trabajadores_puestos_id = cat_trabajadores_puestos.cat_trabajadores_puestos_id";
$proto114["m_alias"] = "";
$proto114["m_srcTableName"] = "cat_trabajadores_altas1";
$proto116=array();
$proto116["m_sql"] = "cat_trabajadores_puestos.cat_trabajadores_puestos_id = cat_trabajadores_altas.cat_trabajadores_puestos_id";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_puestos_id",
	"m_strTable" => "cat_trabajadores_puestos",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= cat_trabajadores_altas.cat_trabajadores_puestos_id";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

$proto114["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto114);

$proto0["m_fromlist"][]=$obj;
												$proto118=array();
$proto118["m_link"] = "SQLL_LEFTJOIN";
			$proto119=array();
$proto119["m_strName"] = "cat_trabajadores_sexo_mu";
$proto119["m_srcTableName"] = "cat_trabajadores_altas1";
$proto119["m_columns"] = array();
$proto119["m_columns"][] = "cat_trabajadores_sexo_mu_id";
$proto119["m_columns"][] = "time_stamp";
$proto119["m_columns"][] = "capturista";
$proto119["m_columns"][] = "vigente";
$proto119["m_columns"][] = "descripcion_sexo";
$obj = new SQLTable($proto119);

$proto118["m_table"] = $obj;
$proto118["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_sexo_mu ON cat_trabajadores_altas.cat_trabajadores_sexo_mu_id = cat_trabajadores_sexo_mu.cat_trabajadores_sexo_mu_id";
$proto118["m_alias"] = "";
$proto118["m_srcTableName"] = "cat_trabajadores_altas1";
$proto120=array();
$proto120["m_sql"] = "cat_trabajadores_sexo_mu.cat_trabajadores_sexo_mu_id = cat_trabajadores_altas.cat_trabajadores_sexo_mu_id";
$proto120["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_sexo_mu_id",
	"m_strTable" => "cat_trabajadores_sexo_mu",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto120["m_column"]=$obj;
$proto120["m_contained"] = array();
$proto120["m_strCase"] = "= cat_trabajadores_altas.cat_trabajadores_sexo_mu_id";
$proto120["m_havingmode"] = false;
$proto120["m_inBrackets"] = false;
$proto120["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto120);

$proto118["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto118);

$proto0["m_fromlist"][]=$obj;
												$proto122=array();
$proto122["m_link"] = "SQLL_LEFTJOIN";
			$proto123=array();
$proto123["m_strName"] = "cat_trabajadores_estado_civil_mu";
$proto123["m_srcTableName"] = "cat_trabajadores_altas1";
$proto123["m_columns"] = array();
$proto123["m_columns"][] = "cat_trabajadores_estado_civil_mu_id";
$proto123["m_columns"][] = "time_stamp";
$proto123["m_columns"][] = "capturista";
$proto123["m_columns"][] = "vigente";
$proto123["m_columns"][] = "descripcion_estado_civil";
$obj = new SQLTable($proto123);

$proto122["m_table"] = $obj;
$proto122["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_estado_civil_mu ON cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id = cat_trabajadores_estado_civil_mu.cat_trabajadores_estado_civil_mu_id";
$proto122["m_alias"] = "";
$proto122["m_srcTableName"] = "cat_trabajadores_altas1";
$proto124=array();
$proto124["m_sql"] = "cat_trabajadores_estado_civil_mu.cat_trabajadores_estado_civil_mu_id = cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id";
$proto124["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_estado_civil_mu_id",
	"m_strTable" => "cat_trabajadores_estado_civil_mu",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto124["m_column"]=$obj;
$proto124["m_contained"] = array();
$proto124["m_strCase"] = "= cat_trabajadores_altas.cat_trabajadores_estado_civil_mu_id";
$proto124["m_havingmode"] = false;
$proto124["m_inBrackets"] = false;
$proto124["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto124);

$proto122["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto122);

$proto0["m_fromlist"][]=$obj;
												$proto126=array();
$proto126["m_link"] = "SQLL_LEFTJOIN";
			$proto127=array();
$proto127["m_strName"] = "cat_trabajadores_sangre_mu";
$proto127["m_srcTableName"] = "cat_trabajadores_altas1";
$proto127["m_columns"] = array();
$proto127["m_columns"][] = "cat_trabajadores_sangre_mu_id";
$proto127["m_columns"][] = "time_stamp";
$proto127["m_columns"][] = "capturista";
$proto127["m_columns"][] = "vigente";
$proto127["m_columns"][] = "descripcion_sangre";
$obj = new SQLTable($proto127);

$proto126["m_table"] = $obj;
$proto126["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_sangre_mu ON cat_trabajadores_altas.cat_trabajadores_sangre_mu_id = cat_trabajadores_sangre_mu.cat_trabajadores_sangre_mu_id";
$proto126["m_alias"] = "";
$proto126["m_srcTableName"] = "cat_trabajadores_altas1";
$proto128=array();
$proto128["m_sql"] = "cat_trabajadores_sangre_mu.cat_trabajadores_sangre_mu_id = cat_trabajadores_altas.cat_trabajadores_sangre_mu_id";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_sangre_mu_id",
	"m_strTable" => "cat_trabajadores_sangre_mu",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "= cat_trabajadores_altas.cat_trabajadores_sangre_mu_id";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

$proto126["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto126);

$proto0["m_fromlist"][]=$obj;
												$proto130=array();
$proto130["m_link"] = "SQLL_LEFTJOIN";
			$proto131=array();
$proto131["m_strName"] = "cat_trabajadores_local_foraneo_mu";
$proto131["m_srcTableName"] = "cat_trabajadores_altas1";
$proto131["m_columns"] = array();
$proto131["m_columns"][] = "cat_trabajadores_local_foraneo_mu_id";
$proto131["m_columns"][] = "time_stamp";
$proto131["m_columns"][] = "capturista";
$proto131["m_columns"][] = "vigente";
$proto131["m_columns"][] = "descripcion_local_foraneo";
$obj = new SQLTable($proto131);

$proto130["m_table"] = $obj;
$proto130["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_local_foraneo_mu ON cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id = cat_trabajadores_local_foraneo_mu.cat_trabajadores_local_foraneo_mu_id";
$proto130["m_alias"] = "";
$proto130["m_srcTableName"] = "cat_trabajadores_altas1";
$proto132=array();
$proto132["m_sql"] = "cat_trabajadores_local_foraneo_mu.cat_trabajadores_local_foraneo_mu_id = cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id";
$proto132["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_local_foraneo_mu_id",
	"m_strTable" => "cat_trabajadores_local_foraneo_mu",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto132["m_column"]=$obj;
$proto132["m_contained"] = array();
$proto132["m_strCase"] = "= cat_trabajadores_altas.cat_trabajadores_local_foraneo_mu_id";
$proto132["m_havingmode"] = false;
$proto132["m_inBrackets"] = false;
$proto132["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto132);

$proto130["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto130);

$proto0["m_fromlist"][]=$obj;
												$proto134=array();
$proto134["m_link"] = "SQLL_LEFTJOIN";
			$proto135=array();
$proto135["m_strName"] = "cat_trabajadores_tipo_de_pago";
$proto135["m_srcTableName"] = "cat_trabajadores_altas1";
$proto135["m_columns"] = array();
$proto135["m_columns"][] = "cat_trabajadores_tipo_de_pago_id";
$proto135["m_columns"][] = "time_stamp";
$proto135["m_columns"][] = "capturista";
$proto135["m_columns"][] = "vigente";
$proto135["m_columns"][] = "descripcion_tipo_de_pago";
$obj = new SQLTable($proto135);

$proto134["m_table"] = $obj;
$proto134["m_sql"] = "LEFT OUTER JOIN cat_trabajadores_tipo_de_pago ON cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id = cat_trabajadores_tipo_de_pago.cat_trabajadores_tipo_de_pago_id";
$proto134["m_alias"] = "";
$proto134["m_srcTableName"] = "cat_trabajadores_altas1";
$proto136=array();
$proto136["m_sql"] = "cat_trabajadores_tipo_de_pago.cat_trabajadores_tipo_de_pago_id = cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id";
$proto136["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_trabajadores_tipo_de_pago_id",
	"m_strTable" => "cat_trabajadores_tipo_de_pago",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto136["m_column"]=$obj;
$proto136["m_contained"] = array();
$proto136["m_strCase"] = "= cat_trabajadores_altas.cat_trabajadores_tipo_de_pago_id";
$proto136["m_havingmode"] = false;
$proto136["m_inBrackets"] = false;
$proto136["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto136);

$proto134["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto134);

$proto0["m_fromlist"][]=$obj;
												$proto138=array();
$proto138["m_link"] = "SQLL_LEFTJOIN";
			$proto139=array();
$proto139["m_strName"] = "cat_holding_02_empresas";
$proto139["m_srcTableName"] = "cat_trabajadores_altas1";
$proto139["m_columns"] = array();
$proto139["m_columns"][] = "cat_holding_02_empresas_id";
$proto139["m_columns"][] = "cat_holding_01_id";
$proto139["m_columns"][] = "time_stamp";
$proto139["m_columns"][] = "vigente";
$proto139["m_columns"][] = "capturista";
$proto139["m_columns"][] = "descripcion_empresas";
$obj = new SQLTable($proto139);

$proto138["m_table"] = $obj;
$proto138["m_sql"] = "LEFT OUTER JOIN cat_holding_02_empresas ON cat_trabajadores_altas.cat_holding_02_empresas = cat_holding_02_empresas.cat_holding_02_empresas_id";
$proto138["m_alias"] = "";
$proto138["m_srcTableName"] = "cat_trabajadores_altas1";
$proto140=array();
$proto140["m_sql"] = "cat_holding_02_empresas.cat_holding_02_empresas_id = cat_trabajadores_altas.cat_holding_02_empresas";
$proto140["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cat_holding_02_empresas_id",
	"m_strTable" => "cat_holding_02_empresas",
	"m_srcTableName" => "cat_trabajadores_altas1"
));

$proto140["m_column"]=$obj;
$proto140["m_contained"] = array();
$proto140["m_strCase"] = "= cat_trabajadores_altas.cat_holding_02_empresas";
$proto140["m_havingmode"] = false;
$proto140["m_inBrackets"] = false;
$proto140["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto140);

$proto138["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto138);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cat_trabajadores_altas1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cat_trabajadores_altas1 = createSqlQuery_cat_trabajadores_altas1();


	
		;

																																																				

$tdatacat_trabajadores_altas1[".sqlquery"] = $queryData_cat_trabajadores_altas1;



$tdatacat_trabajadores_altas1[".hasEvents"] = false;

?>