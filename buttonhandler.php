<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");

//	CSRF protection
if( !isPostRequest() )
	return;

$params = (array)my_json_decode(postvalue('params'));

if( $params["_base64fields"] ) {
	foreach( $params["_base64fields"] as $f ) {
		$params[$f] = base64_str2bin( $params[$f] );
	}
}

$buttId = $params['buttId'];
$eventId = postvalue('event');
$table = $params['table'];
if( !GetTableURL( $table ) ) {
	exit;
}
$page = $params['page'];
if( !Security::userCanSeePage($table, $page ) ) {
	exit;
}

$pSet = new ProjectSettings( $table, "", $page );
if( $buttId ) {
	$pageButtons = $pSet->customButtons();
	if( array_search( $buttId , $pageButtons ) === false ) {
		exit;
	}
}

$params["masterTable"] = postValue("masterTable");;
$params["masterKeys"] = array();
// RunnerPage::readMasterKeysFromRequest
$i = 1;
while( isset( $_REQUEST["masterkey".$i] ) ) {
	$params["masterKeys"][ $i ] = $_REQUEST["masterkey".$i];
	$i++;
}


if($buttId=='tr_compras_requisiciones_01_02_insert')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_compras_requisiciones_01_02_insert($params);
}
if($buttId=='tr_compras_requisiciones_01_genera_orden')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_compras_requisiciones_01_genera_orden($params);
}
if($buttId=='tr_01_compras_requisicion_autorizar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_01_compras_requisicion_autorizar($params);
}
if($buttId=='tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar($params);
}
if($buttId=='New_Button')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button($params);
}
if($buttId=='tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO($params);
}
if($buttId=='tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR($params);
}
if($buttId=='tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO($params);
}
if($buttId=='reedireccion_nomina')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_reedireccion_nomina($params);
}
if($buttId=='cat_nomina_configuracion_global')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_cat_nomina_configuracion_global($params);
}
if($buttId=='Calcular')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Calcular($params);
}
if($buttId=='tr_compras_facturas_sat_02_llaves')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_compras_facturas_sat_02_llaves($params);
}
if($buttId=='tr_compras_generar_OC_desde_sat')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_compras_generar_OC_desde_sat($params);
}
if($buttId=='link_utoriza')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_link_utoriza($params);
}
if($buttId=='link_requi_solicitud')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_link_requi_solicitud($params);
}
if($buttId=='link_requi_orden_de_compra')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_link_requi_orden_de_compra($params);
}
if($buttId=='link_requi_pagar')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_link_requi_pagar($params);
}
if($buttId=='cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza($params);
}
if($buttId=='cat_nominas_02_trabajadores_auxiliar_carga_masiva')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_cat_nominas_02_trabajadores_auxiliar_carga_masiva($params);
}
if($buttId=='cat_nominas_02_unidades_productivas')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_cat_nominas_02_unidades_productivas($params);
}
if($buttId=='cat_nominas_02_trabajadores_conceptos_comunes')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_cat_nominas_02_trabajadores_conceptos_comunes($params);
}
if($buttId=='tr_nominas_pre_nomina_01')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_nominas_pre_nomina_01($params);
}
if($buttId=='tr_pre_nomina')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_pre_nomina($params);
}
if($buttId=='Actualizar_N_mina')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_Actualizar_N_mina($params);
}
if($buttId=='cat_nominas_02_trabajadores')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_cat_nominas_02_trabajadores($params);
}
if($buttId=='detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva($params);
}
if($buttId=='export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva($params);
}
if($buttId=='detalle_cat_nominas_02_actividades')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_detalle_cat_nominas_02_actividades($params);
}
if($buttId=='detalle_cat_nominas_02_variables_mu')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_detalle_cat_nominas_02_variables_mu($params);
}
if($buttId=='detalle_cat_nominas_02_condicionantes')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_detalle_cat_nominas_02_condicionantes($params);
}
if($buttId=='detalle_cat_nominas_02_prestaciones_especiales')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_detalle_cat_nominas_02_prestaciones_especiales($params);
}
if($buttId=='tr_nominas_01_uuid')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_nominas_01_uuid($params);
}
if($buttId=='tr_compras_proveedores_01_cargos_abonos')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_tr_compras_proveedores_01_cargos_abonos($params);
}
if($buttId=='link_requisiciones_estatus')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_link_requisiciones_estatus($params);
}
if($buttId=='insert_de_facturas_a_compras')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_insert_de_facturas_a_compras($params);
}
if($buttId=='insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos($params);
}
if($buttId=='pdf_orden_de_compra')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_pdf_orden_de_compra($params);
}
if($buttId=='insert_pagos_tr_compras_proveedores_01_cargos_abonos')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_insert_pagos_tr_compras_proveedores_01_cargos_abonos($params);
}
if($buttId=='insert_de_bancos_a_compras')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_insert_de_bancos_a_compras($params);
}
if($buttId=='update_usuarios_todo_el_clouster')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_update_usuarios_todo_el_clouster($params);
}
if($buttId=='crear_base_de_datos')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_crear_base_de_datos($params);
}
if($buttId=='New_Button1')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button1($params);
}
if($buttId=='New_Button2')
{
	//  for login page users table can be turned off
	if( $table != GLOBAL_PAGES )
	{
		require_once("include/". GetTableURL( $table ) ."_variables.php");
		$cipherer = new RunnerCipherer( $table );
	}
	buttonHandler_New_Button2($params);
}

if( $eventId == 'check_compra_directa_event' && "tr_compras_requisiciones_01" == $table )
{
	require_once("include/tr_compras_requisiciones_01_variables.php");
	$cipherer = new RunnerCipherer("tr_compras_requisiciones_01");
	fieldEventHandler_check_compra_directa_event( $params );
}
if( $eventId == 'check_compra_directa_event' && "tr_compras_requisiciones_01_estatus" == $table )
{
	require_once("include/tr_compras_requisiciones_01_estatus_variables.php");
	$cipherer = new RunnerCipherer("tr_compras_requisiciones_01_estatus");
	fieldEventHandler_check_compra_directa_event( $params );
}




// create table and non table handlers
function buttonHandler_tr_compras_requisiciones_01_02_insert($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	
//include 'admin/scripts/tr_compras_requisiciones_01_insert_app.php';
// Put your code here.
$result["txt"] = $params["txt"]." actualizando";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_compras_requisiciones_01_genera_orden($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	global $dal;
$record = $button->getCurrentRecord();
//if ($record["ProductID"])
{
//add new records to the ShoppingCart table
//save current username in the UserID field

$tr_compras_requisiciones_01-> cat_compras_estatus_mu_id = 3;

}
$result["txt"] = "Compra generada";

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_01_compras_requisicion_autorizar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
//global $dal;
 
//while ( $data = $button->getCurrentRecord() ) {
  // set ReportsTo field to 'Bob Smith'
 // $sql = "Update tr_compras_requisiciones_01 set cat_compras_estatus_mu_id='3' where tr_compras_requisiciones_01_id = ".$data["tr_compras_requisiciones_01_id"];
  // CustomQuery($sql);
//}

//$sql = DB::PrepareSQL("
//Update tr_compras_requisiciones_01 set (cat_compras_estatus_mu_id)='3' where tr_compras_requisiciones_01_id =
//values (:tr_compras_requisiciones_01_id)
// ");
//DB::Exec( $sql );


//$data = array();
//$keyvalues = array();
//$data["cat_compras_estatus_mu_id"] = 3;
//$keyvalues["tr_compras_requisiciones_01_id"] = 58;
//DB::Update("tr_compras_requisiciones_01", $data, $keyvalues );




$sql = DB::prepareSQL("Update tr_compras_requisiciones_01 set cat_compras_estatus_mu_id='3' 
where tr_compras_requisiciones_01_id =':tr_compras_requisiciones_01_id'");
DB::Exec( $sql );

$sql = DB::prepareSQL("Update tr_compras_requisiciones_02_productos set autorizado_check = '1'
where tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid'");
DB::Exec( $sql );

$sql = DB::prepareSQL("Update tr_compras_requisiciones_02_productos set fecha_de_autorizacion_requisicion = now() 
where tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid'");
DB::Exec( $sql );

$sql = DB::prepareSQL("Update tr_compras_requisiciones_02_productos set capturista_que_autoriza = ':session.UserID'
where tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid'");
DB::Exec( $sql );





$result["txt"] = "Conexión segura...";



;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_trabajadores_nomina_03_costo_por_actividad_dia_actualizar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.

include 'admin/scripts/tr_actividades_script_insert_tr_trabajadores_nomina_03_costos_por_actividad_dia.php';
//$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//$sql = DB::prepareSQL("Update tr_compras_requisiciones_01 set cat_compras_estatus_mu_id='4' 
//where tr_compras_requisiciones_01_id =':tr_compras_requisiciones_01_id'");
//DB::Exec( $sql);
$result["txt"] = "Requisición autorizada.";



;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_compras_requisiciones_orden_de_compra_ASIGNAR_PAGO($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_compras_requisiciones_01_ENVIAR_A_AUTORIZAR($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.


//falta agregar validacion de que en el detalle existan datos

//while($record = $button->getCurrentRecord())
//{
//$sql = "
//Update tr_compras_requisiciones_01 set cat_compras_estatus_mu_id='6' 
//where tr_compras_requisiciones_01_id =
//".$record["tr_compras_requisiciones_01_id"];
 //DB::Exec($sql);
//}





//$sql = DB::prepareSQL("
//Update tr_compras_requisiciones_01 set cat_compras_estatus_mu_id='6' 
//where tr_compras_requisiciones_01_id =':tr_compras_requisiciones_01_id'");
//DB::Exec( $sql );


$result["txt"] = "Requisición Enviada con éxito.";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_compras_requisiciones_01_orden_de_compra_GENERA_FOLIO_DE_PAGO($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//genera oc_folio_proveedor en tr_compras_requisiciones_02_productos -se sustituyó por llave_uuid_proveedor
//$sql = DB::prepareSQL("
//update tr_compras_requisiciones_02_productos
//set llave_oc_folio_proveedor = concat(tr_compras_requisiciones_01_uuid ,'-',cat_compras_proveedores_id)
//where tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid'
//");
//DB::Exec( $sql );


//cambia de estatus a 5 OC En pago en tr_compras_requisiciones_01
$sql = DB::prepareSQL("
update tr_compras_requisiciones_01
set cat_compras_estatus_mu_id = '5'
where tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid'
");
DB::Exec( $sql );

// agrega fecha a orden de compra en tr_compras_requisiciones_01
$sql = DB::prepareSQL("
update tr_compras_requisiciones_01
set fecha_de_orden_de_compra = now()
where tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid'
");
DB::Exec( $sql );

//genera llave_uuid_proveedor en tr_compras_requisiciones_02_productos
$sql = DB::prepareSQL("
update tr_compras_requisiciones_02_productos
set llave_uuid_proveedor = concat(tr_compras_requisiciones_01_uuid,'-',cat_compras_proveedores_id)
where tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid'
");
DB::Exec( $sql );



//inserta compra por proveedor en tr_compras_proveedores_01_cargos_abonos
$sql = DB::prepareSQL("
INSERT IGNORE tr_compras_proveedores_01_cargos_abonos
(
cat_compras_proveedores_id,
fecha_de_compra,
importe_abono_compra,
concepto,
capturista,
vigente,
uuid_cargo_abono_compra,
cat_compras_cargo_abono_mu_id,
tr_compras_requisiciones_01_uuid,
llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago
)
SELECT
tr_compras_requisiciones_02_productos.cat_compras_proveedores_id,
tr_compras_requisiciones_02_productos.fecha_de_transaccion AS fecha_de_compra,
SUM((tr_compras_requisiciones_02_productos.precio_neto *
tr_compras_requisiciones_02_productos.cantidad)) AS importe_abono_compra,
tr_compras_requisiciones_01.observaciones AS concepto,
tr_compras_requisiciones_01.capturista,
1 AS vigente,
concat(tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid, '-', tr_compras_requisiciones_02_productos.cat_compras_proveedores_id) AS uuid_cargo_abono_compra,
1 as cat_compras_cargo_abono_mu_id,
tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid,
concat(1, '-', concat(tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid, '-', tr_compras_requisiciones_02_productos.cat_compras_proveedores_id)) AS llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago
FROM tr_compras_requisiciones_01
LEFT OUTER JOIN tr_compras_requisiciones_02_productos ON tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid = tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid
WHERE (tr_compras_requisiciones_01.tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid')
GROUP BY concat(tr_compras_requisiciones_02_productos.tr_compras_requisiciones_01_uuid, '-', tr_compras_requisiciones_02_productos.cat_compras_proveedores_id)

");
DB::Exec( $sql );

// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
$result["txt"] = $params["txt"]." ";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_reedireccion_nomina($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_cat_nomina_configuracion_global($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
include 'admin/scripts/cat_nominas_configuracion_global.php';
include 'admin/scripts/tr_nomina_pre_nomina.php';


$result["txt"] = $params["txt"]." realizada!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Calcular($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$db=mysqli_connect('162.214.194.240','wwinte','zHQWj23njTN4ksuqyNoL','wwinte_app');
$sql4_5="TRUNCATE tr_pre_nomina";
    $sqlRes=$db->query($sql4_5);
    $sql4_1="TRUNCATE tr_nomina";
    $sqlRes=$db->query($sql4_1);
    $sql_config="SELECT
    tr_actividades.tr_actividades_id,
    date_format(tr_actividades.fecha_de_captura, '%Y-%m-%d') AS fecha_tr,
    cat_nominas_cofiguracion_global.cat_holding_03_empresas_unidades_productivas_id,
    cat_nominas_cofiguracion_global.descripcion_unidades_productivas,
    cat_nominas_cofiguracion_global.cat_actividades_id,
    cat_nominas_cofiguracion_global.descripcion_actividad,
    cat_nominas_cofiguracion_global.cat_actividades_unidades_de_costo_id,
    cat_nominas_cofiguracion_global.descripcion_unidades_de_costo,
    cat_nominas_cofiguracion_global.factor_de_calculo,
    cat_nominas_cofiguracion_global.cat_actividades_metodo_de_costeo_variables_id,
    cat_nominas_cofiguracion_global.descripcion_metodo_de_costeo,
    cat_nominas_cofiguracion_global.descripcion_variable,
    cat_nominas_cofiguracion_global.cat_actividades_alcance_mu_id,
    cat_nominas_cofiguracion_global.descripcion_alcance,
    cat_nominas_cofiguracion_global.cat_nominas_intervalos_mu_id,
    cat_nominas_cofiguracion_global.descripcion_intervalos,
    cat_nominas_cofiguracion_global.limite_inferior,
    cat_nominas_cofiguracion_global.limite_superior,
    cat_nominas_cofiguracion_global.costo_bruto_actividad,
    cat_nominas_cofiguracion_global.fecha_de_inicio_actividad,
    cat_nominas_cofiguracion_global.fecha_de_termino_actividad,
    cat_nominas_cofiguracion_global.cat_holding_04_unidades_productivas_lotes_id,
    cat_nominas_cofiguracion_global.descripcion_lote,
    cat_nominas_cofiguracion_global.cat_trabajadores_altas_id,
    cat_nominas_cofiguracion_global.nombre,
    cat_nominas_cofiguracion_global.cat_nominas_periodicidad_mu_id,
    cat_nominas_cofiguracion_global.descripcion_periodicidad,
    cat_nominas_cofiguracion_global.cat_nominas_dias_semana_mu_id_inicio,
    cat_nominas_cofiguracion_global.descripcion_dias,
    cat_nominas_cofiguracion_global.cat_nominas_conceptos_id_trabajador,
    cat_nominas_cofiguracion_global.descripcion_nominas_conceptos_trabajador,
    cat_nominas_cofiguracion_global.cat_nominas_conceptos_clasificacion_mu_id,
    cat_nominas_cofiguracion_global.descripcion_nominas_conceptos_clasificacion,
    cat_nominas_cofiguracion_global.cat_nomina_conceptos_factor_de_calculo_mu_id,
    cat_nominas_cofiguracion_global.descripcion_factor_de_calculo,
    cat_nominas_cofiguracion_global.factor_nomina_conceptos,
    cat_nominas_cofiguracion_global.fecha_de_inicio_conceptos,
    cat_nominas_cofiguracion_global.fecha_de_termino_conceptos,
    date_format(tr_actividades.fecha_de_captura, '%Y-%m-%d') AS fecha_tr_ACTIVIDAD,
    year(tr_actividades.fecha_de_captura) AS ano,
    date_format(DATE_ADD(date_format(tr_actividades.fecha_de_captura, '%Y-%m-%d'), INTERVAL (cat_nominas_cofiguracion_global.cat_nominas_dias_semana_mu_id_inicio ) day), '%u') AS semana_ok,
    concat(year(tr_actividades.fecha_de_captura), '-', date_format(DATE_ADD(date_format(tr_actividades.fecha_de_captura, '%Y-%m-%d'), INTERVAL (cat_nominas_cofiguracion_global.cat_nominas_dias_semana_mu_id_inicio ) day), '%u')) AS ano_semana,
    tr_actividades.cat_holding_03_empresas_unidades_productivas_id AS tr_cat_holding_03_empresas_unidades_productivas_id,
    tr_actividades.cat_actividades_id AS tr_cat_actividades_id,
    tr_actividades.cantidad,
    tr_actividades.tr_actividades_id,
    tr_actividades.cat_holding_04_unidades_productivas_lotes_id AS tr_cat_holding_04_unidades_productivas_lotes_id,
    tr_actividades.calidad,
    (cat_nominas_cofiguracion_global.costo_bruto_actividad * tr_actividades.cantidad) * cat_nominas_cofiguracion_global.factor_nomina_conceptos AS costo_bruto_calculado,
    if(cat_nominas_cofiguracion_global.cat_holding_03_empresas_unidades_productivas_id = tr_actividades.cat_holding_03_empresas_unidades_productivas_id, 1, 0) AS filtro_up,
    if(cat_nominas_cofiguracion_global.cat_actividades_id = tr_actividades.cat_actividades_id, 1, 0) AS filtro_actividad,
    if(tr_actividades.fecha_de_captura >= cat_nominas_cofiguracion_global.fecha_de_inicio_actividad and tr_actividades.fecha_de_captura <= cat_nominas_cofiguracion_global.fecha_de_termino_actividad, 1, 0) AS filtro_fecha_variables_actividades,
    if(tr_actividades.fecha_de_captura >= cat_nominas_cofiguracion_global.fecha_de_inicio_conceptos and tr_actividades.fecha_de_captura <= cat_nominas_cofiguracion_global.fecha_de_termino_conceptos, 1, 0) AS filtro_fecha_conceptos_trabajadores,
    if(cat_usuarios.cat_usuarios_licencias_id = cat_nominas_cofiguracion_global.cat_usuarios_licencias_id, 1, 0) AS filtro_licencia,
    concat(concat(year(tr_actividades.fecha_de_captura), '-', date_format(DATE_ADD(date_format(tr_actividades.fecha_de_captura, '%Y-%m-%d'), INTERVAL (cat_nominas_cofiguracion_global.cat_nominas_dias_semana_mu_id_inicio ) day), '%u')), '-', cat_nominas_cofiguracion_global.cat_holding_03_empresas_unidades_productivas_id) AS llave_ano_semana_up,
    concat(date_format(tr_actividades.fecha_de_captura, '%Y-%m-%d'), '-', cat_nominas_cofiguracion_global.cat_holding_03_empresas_unidades_productivas_id, '-', cat_nominas_cofiguracion_global.cat_actividades_id) AS llave_dia_up_activ,
    concat(date_format(tr_actividades.fecha_de_captura, '%Y-%m-%d'), '-', cat_nominas_cofiguracion_global.cat_holding_03_empresas_unidades_productivas_id, '-', cat_nominas_cofiguracion_global.cat_actividades_id, '-', cat_nominas_cofiguracion_global.cat_trabajadores_altas_id) AS llave_dia_up_activ_trab,
    cat_usuarios.cat_usuarios_licencias_id,
    cat_nominas_03_trabajadores_costo_bruto_conceptos.costo_bruto_nominas_conceptos,
    tr_actividades.cat_trabajador_altas_id,
    cat_nominas_02_trabajadores.cat_nominas_02_trabajadores_id,
    cat_nominas_03_trabajadores_costo_bruto_conceptos.cat_nominas_02_trabajadores_id AS cat_nominas_02_trabajadores_id1
    FROM tr_actividades
    LEFT OUTER JOIN cat_usuarios ON tr_actividades.capturista = cat_usuarios.usuario
    INNER JOIN cat_nominas_cofiguracion_global ON tr_actividades.cat_trabajador_altas_id = cat_nominas_cofiguracion_global.cat_trabajadores_altas_id
    LEFT OUTER JOIN cat_nominas_02_trabajadores ON cat_nominas_cofiguracion_global.cat_trabajadores_altas_id = cat_nominas_02_trabajadores.cat_trabajadores_altas_id
    LEFT OUTER JOIN cat_nominas_03_trabajadores_costo_bruto_conceptos ON cat_nominas_02_trabajadores.cat_nominas_02_trabajadores_id = cat_nominas_03_trabajadores_costo_bruto_conceptos.cat_nominas_02_trabajadores_id
    WHERE (if(cat_nominas_cofiguracion_global.cat_holding_03_empresas_unidades_productivas_id = tr_actividades.cat_holding_03_empresas_unidades_productivas_id, 1, 0) =1) AND (if(cat_nominas_cofiguracion_global.cat_actividades_id = tr_actividades.cat_actividades_id, 1, 0) =1) AND (if(tr_actividades.fecha_de_captura >= cat_nominas_cofiguracion_global.fecha_de_inicio_actividad and tr_actividades.fecha_de_captura <= cat_nominas_cofiguracion_global.fecha_de_termino_actividad, 1, 0) =1) AND (if(tr_actividades.fecha_de_captura >= cat_nominas_cofiguracion_global.fecha_de_inicio_conceptos and tr_actividades.fecha_de_captura <= cat_nominas_cofiguracion_global.fecha_de_termino_conceptos, 1, 0) =1) AND (if(cat_usuarios.cat_usuarios_licencias_id = cat_nominas_cofiguracion_global.cat_usuarios_licencias_id, 1, 0) =1) AND (tr_actividades.vigente =1)
    ORDER BY tr_actividades.tr_actividades_id
    ";
 $consulta_config= mysqli_query($db,$sql_config); 
while($mostrar=mysqli_fetch_assoc($consulta_config)){
$fecha_imp= $mostrar['fecha_tr'];
$cat_actividades_id = $mostrar['tr_actividades_id'];
$limite_superior=$mostrar['limite_superior'];
$limite_inferior=$mostrar['limite_inferior'];
$costo_actividad=$mostrar['costo_bruto_actividad'];
$id_t=$mostrar['cat_trabajadores_altas_id']; 
$mostrar['nombre'];
$ano_sem=$mostrar['ano_semana'];
$acumulado=$mostrar['cantidad'];
$metodos=$mostrar['cat_nomina_conceptos_factor_de_calculo_mu_id'];
if($metodos==2) {$pago_variable= $mostrar['costo_bruto_calculado']; $pago_fijo=0;}
$actividad=$mostrar['cat_actividades_id'];
$llave_dia=$mostrar['llave_dia_up_activ_trab'];$dia=$mostrar['cat_nominas_dias_semana_mu_id_inicio']; if($metodos==1) {$pago_variable=0;$pago_fijo= $mostrar['costo_bruto_nominas_conceptos']; }
$sql3 = "INSERT INTO tr_pre_nomina
                (
                  cat_trabajador_altas_id,
                   acumulado,
                   fecha,
                   fecha_sem,
                   clave_nomina,
                   pago_fijo,
                   pago_variable,
                   actividad_realizada,
                   limite_superior,
                   limite_inferior,
                   tr_actividades_id,
                   costo_actividad
                )
                VALUES (
                '$id_t',
                '$acumulado',
                '$fecha_imp',
                '$ano_sem',
                '$llave_dia',
                '$pago_fijo',
                '$pago_variable',
                '$actividad',
                '$limite_superior',
                '$limite_inferior',
                '$cat_actividades_id',
                '$costo_actividad'
                )";
                $sqlRes=$db->query($sql3);
}
$sql2="SELECT
tr_pre_nomina.tr_pre_nomina_id,
concat(cat_trabajadores_altas.apellido_paterno, ' ', cat_trabajadores_altas.apellido_materno, ' ', cat_trabajadores_altas.primer_nombre, ' ', cat_trabajadores_altas.segundo_nombre) AS nombre,
tr_pre_nomina.cat_trabajador_altas_id,
sum(tr_pre_nomina.acumulado)as acumulado,
tr_pre_nomina.fecha,
tr_pre_nomina.fecha_sem,
tr_pre_nomina.clave_nomina,
tr_pre_nomina.pago_fijo,
SUM(tr_pre_nomina.pago_variable) AS pago_variable,
cat_nominas_periodicidad_mu.descripcion_periodicidad,
cat_nominas_conceptos.descripcion_nominas_conceptos,
cat_usuarios.cat_usuarios_licencias_id
FROM tr_pre_nomina
LEFT OUTER JOIN cat_trabajadores_altas ON tr_pre_nomina.cat_trabajador_altas_id = cat_trabajadores_altas.cat_trabajadores_altas_id
LEFT OUTER JOIN cat_nominas_02_trabajadores ON tr_pre_nomina.cat_trabajador_altas_id = cat_nominas_02_trabajadores.cat_trabajadores_altas_id
LEFT OUTER JOIN cat_nominas_periodicidad_mu ON cat_nominas_02_trabajadores.cat_nominas_periodicidad_mu_id = cat_nominas_periodicidad_mu.cat_nominas_periodicidad_mu_id
LEFT OUTER JOIN cat_nominas_03_trabajadores_costo_bruto_conceptos ON cat_nominas_02_trabajadores.cat_nominas_02_trabajadores_id = cat_nominas_03_trabajadores_costo_bruto_conceptos.cat_nominas_02_trabajadores_id
LEFT OUTER JOIN cat_nominas_conceptos ON cat_nominas_03_trabajadores_costo_bruto_conceptos.cat_nominas_conceptos_id = cat_nominas_conceptos.cat_nominas_conceptos_id
INNER JOIN cat_usuarios ON cat_trabajadores_altas.capturista = cat_usuarios.usuario
GROUP BY tr_pre_nomina.cat_trabajador_altas_id, tr_pre_nomina.fecha
";$consulta= mysqli_query($db,$sql2);
while($mostrar_1=mysqli_fetch_assoc($consulta)){
    $id_t_2=$mostrar_1['cat_trabajador_altas_id'];
    $acumulado_2=$mostrar_1['acumulado'];
    $fecha_imp_2=$mostrar_1['fecha'];
    $ano_sem_2=$mostrar_1['fecha_sem'];
    $llave_dia_2=$mostrar_1['clave_nomina'];
    $pago_fijo_2=$mostrar_1['pago_fijo'];
    $pago_variable_2=$mostrar_1['pago_variable'];
    $actividad_2=$mostrar_1['actividad_realizada'];
    $sql4 = "INSERT INTO tr_nomina
    (
      cat_trabajador_altas_id,
       acumulado,
       fecha,
       fecha_sem,
       clave_nomina,
       pago_fijo,
       pago_variable,
       actividad_realizada
    )
    VALUES (
    '$id_t_2',
    '$acumulado_2',
    '$fecha_imp_2',
    '$ano_sem_2',
    '$llave_dia_2',
    '$pago_fijo_2',
    '$pago_variable_2',
    '$actividad_2')";
    $sqlRes=$db->query($sql4);    
};
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_compras_facturas_sat_02_llaves($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.


//llaves
include 'admin/scripts/tr_compras_facturas_sat_02_llaves.php';

//actualizacion costos historicos
include 'admin/scripts/tr_compras_facturas_sat_02_costos_historicos.php';

//actualizacion ultimos costos
include 'admin/scripts/tr_compras_facturas_sat_02_costos_fecha_maxima.php';

//actualizacion check costo proveedores
include 'admin/scripts/cat_compras_proveedores_check_costo.php';

//crea tr_compras_facturas_productos_costos_por_adquisicion
include 'admin/scripts/tr_compras_facturas_productos_costos_por_adquisicion.php';


//crea llave producto ano en aplicaciones
include 'admin/scripts/tr_control_aplicaciones_campo_01_up_productos_app_llaves.php';

//crea tabla tr_compras_facturas_productos_costos_por_adquisicion_anual
include 'admin/scripts/tr_compras_facturas_productos_costos_por_adquisicion_anual.php';


$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_compras_generar_OC_desde_sat($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$A = $record["UUID"];


$sql = "Update tr_compras_facturas_sat_01_orden_de_compra
set chek_afecta_orden_de_compra = '1' where UUID = '" . $A . "'";
DB::Exec($sql);






$sql = "
INSERT IGNORE tr_compras_requisiciones_01
(
tr_compras_requisiciones_01_uuid,
vigente,
capturista,
fecha_de_captura,
cat_compras_proveedores_id,
cat_compras_estatus_mu_id,
fecha_de_orden_de_compra,
importe_neto_orden_de_compra,
referencia_proveedor,
numero_de_productos,
observaciones,
cat_compras_documentos_mu_id,
capturista_que_autoriza,
cat_finanzas_cuentas_de_balance_03_mu_id,
RFC_emisor
)
SELECT
tr_compras_facturas_sat_01_orden_de_compra.UUID,
1 AS vigente,
tr_compras_facturas_sat_01_orden_de_compra.capturista,
tr_compras_facturas_sat_01_orden_de_compra.Fecha_emision,
cat_compras_proveedores.cat_compras_proveedores_id,
3 AS cat_compras_estatus_mu_id,
now() AS fecha_orden_de_compra,
tr_compras_facturas_sat_01_orden_de_compra.total_importe,
tr_compras_facturas_sat_01_orden_de_compra.UUID AS referencia_proveedor,
tr_compras_facturas_sat_01_orden_de_compra.total_cantidad,
'carga masiva' AS observaciones,
3 AS cat_compras_documentos_mu_id,
tr_compras_facturas_sat_01_orden_de_compra.capturista as capturista_que_autoriza,
34 as cat_finanzas_cuentas_de_balance_03_mu_id,
tr_compras_facturas_sat_01_orden_de_compra.RFC_emisor
FROM tr_compras_facturas_sat_01_orden_de_compra
LEFT OUTER JOIN cat_compras_proveedores ON tr_compras_facturas_sat_01_orden_de_compra.RFC_emisor = cat_compras_proveedores.rfc_compras_proveedores
where UUID = '" . $A . "'";
DB::Exec($sql);

$sql = "
INSERT IGNORE tr_compras_requisiciones_02_productos
(
vigente,
capturista,
precio_neto,
cantidad,
especificacion_producto,
cat_compras_proveedores_id,
autorizado_check,
fecha_de_autorizacion_requisicion,
capturista_que_autoriza,
observacion,
fecha_de_transaccion,
tr_compras_requisiciones_01_uuid
)
SELECT
1 AS vigente,
tr_compras_facturas_sat_02_orden_de_compra.capturista,
Valor_unitario + IVA_Trasladado + IEPS_Trasladado - 	Descuento AS precio_neto,
tr_compras_facturas_sat_02_orden_de_compra.Cantidad,
tr_compras_facturas_sat_02_orden_de_compra.Descripcion,
cat_compras_proveedores.cat_compras_proveedores_id,
1 as autorizado_check,
now() as fecha_de_autorizacion_requisicion,
'carga_masiva' as capturista_que_autoriza,
'carga masiva' as observacion,
tr_compras_facturas_sat_02_orden_de_compra.Fecha_emision as fecha_de_transaccion,
tr_compras_facturas_sat_02_orden_de_compra.UUID as tr_compras_requisiciones_01_uuid
FROM tr_compras_facturas_sat_02_orden_de_compra
LEFT OUTER JOIN cat_compras_proveedores ON tr_compras_facturas_sat_02_orden_de_compra.RFC_emisor = cat_compras_proveedores.rfc_compras_proveedores
where UUID = '" . $A . "'";
DB::Exec($sql);





// Place event code here.
// Use "Add Action" button to add code snippets.

// Put your code here.
$result["txt"] = $params["txt"]." Orden creada!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_link_utoriza($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]."  ";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_link_requi_solicitud($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]."  ";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_link_requi_orden_de_compra($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]."  ";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_link_requi_pagar($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]."  ";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_cat_nominas_03_trabajadores_costo_bruto_conceptos_actualiza($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	

// Place event code here.
// Use "Add Action" button to add code snippets.
include 'admin/scripts/cat_nominas_03_trabajadores_costo_bruto_conceptos.php';
// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_cat_nominas_02_trabajadores_auxiliar_carga_masiva($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
//$result["txt"] = $params["txt"]." world!";
$record = $button->getCurrentRecord();
$result["cat_nominas_01_generales_uuid"] = $record["cat_nominas_01_generales_uuid"];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_cat_nominas_02_unidades_productivas($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
//$result["cat_nominas_01_generales_uuid"]=$record["cat_nominas_01_generales_uuid"];
$result["cat_nominas_01_generales_uuid"]=$_SESSION['cat_nominas_01_generales_uuid'];

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_cat_nominas_02_trabajadores_conceptos_comunes($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$record = $button->getCurrentRecord();
$result["cat_nominas_01_generales_uuid"]=$record['cat_nominas_01_generales_uuid'];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_nominas_pre_nomina_01($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
//genera el archivo de inicio y fin de semana por configuración de nómina
include 'admin/scripts/cat_nominas_uuid_semana.php';


global $dal;
$record = $button->getCurrentRecord();

{
//Método SQL
$sql = DB::prepareSQL("
insert into tr_nominas_pre_01
set 
vigente = ':vigente',
descripcion_nomina = ':descripcion_nomina',
dia_de_inicio = ':dia_de_inicio',
cat_nominas_01_generales_id = ':cat_nominas_01_generales_id',
capturista = ':session.UserID',
cat_nominas_01_generales_uuid = ':cat_nominas_01_generales_uuid',
cat_usuarios_licencias_id = ':cat_usuarios_licencias_id',
cat_nominas_periodicidad_mu_id = ':cat_nominas_periodicidad_mu_id',
horas_semana_laboral = ':horas_semana_laboral',
fecha_de_generacion = now(),
cat_nominas_uuid_semana = ':cat_nominas_uuid_semana',
llave_ano_semana_nominas_uuid =':llave_ano_semana_nominas_uuid'
");




DB::Exec( $sql );





}

{
$sql2 = DB::prepareSQL("
UPDATE cat_trabajadores_altas
SET cat_nominas_01_generales_uuid = ':cat_nominas_01_generales_uuid'
WHERE vigente = 1

");

DB::Exec( $sql2 );

}

//revisado para clouster
include 'admin/scripts/tr_nominas_pre.php';

//include 'admin/scripts/all_tr_nominas_pre_nomina.php';

$result["txt"] = "Pre Nómina generada";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_pre_nomina($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
include 'admin/scripts/tr_nominas_pre_nomina.php';
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_Actualizar_N_mina($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
include 'admin/scripts/cat_nominas_uuid_semana.php';
include 'admin/scripts/tr_nominas_pre_nomina_01_update_uuid_semana.php';
include 'admin/scripts/tr_nominas_pre_nomina.php';

$result["txt"] = "Scripts ejecutados";;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_cat_nominas_02_trabajadores($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$record = $button->getCurrentRecord();
$result["cat_nominas_01_generales_uuid"]=$record['cat_nominas_01_generales_uuid'];

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_detalle_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$result["llave_ano_semana_nominas_uuid"]=$record['llave_ano_semana_nominas_uuid'];


;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_export_cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_detalle_cat_nominas_02_actividades($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	
$record = $button->getCurrentRecord();
$result["cat_nominas_01_generales_uuid"]=$record['cat_nominas_01_generales_uuid'];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_detalle_cat_nominas_02_variables_mu($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$result["cat_nominas_01_generales_uuid"]=$record['cat_nominas_01_generales_uuid'];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_detalle_cat_nominas_02_condicionantes($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$result["cat_nominas_01_generales_uuid"]=$record['cat_nominas_01_generales_uuid'];
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_detalle_cat_nominas_02_prestaciones_especiales($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	$record = $button->getCurrentRecord();
$result["cat_nominas_01_generales_uuid"]=$record['cat_nominas_01_generales_uuid'];;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_nominas_01_uuid($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
include 'admin/scripts/tr_nominas.php';

$result["txt"] = $params["txt"]." generando!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_tr_compras_proveedores_01_cargos_abonos($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
global $dal;
$record = $button->getCurrentRecord();
{

//Método SQL compra
$sql = DB::prepareSQL("
INSERT IGNORE tr_compras_proveedores_01_cargos_abonos
(
cat_compras_proveedores_id,
fecha_de_compra,
referencia,
importe_abono_compra,
fecha_de_pago,
concepto,
cat_compras_documentos_mu_id,
capturista,
vigente,
cat_finanzas_cuentas_de_balance_04_llave,
uuid_sat,
cat_finanzas_bancos_cuentas_id,
cat_finanzas_cajas_chicas_id,
uuid_cargo_abono_compra,
cat_compras_cargo_abono_mu_id,
tr_compras_requisiciones_01_uuid,
orden_de_compra_proveedor,
referencia_bancaria,
observacion_abono_compra,
observacion_cargo_pago,
llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago
)
SELECT
cat_compras_proveedores_id,
fecha_de_compra,
referencia,
importe_abono_compra,
fecha_de_pago,
observaciones AS concepto,
cat_compras_documentos_mu_id,
capturista,
vigente,
concat(34,'-',cat_compras_proveedores_id) as cat_finanzas_cuentas_de_balance_04_llave,
uuid_sat,
cat_finanzas_bancos_cuentas_id,
cat_finanzas_cajas_chicas_id,
concat(tr_compras_requisiciones_01_uuid,'-',cat_compras_proveedores_id) AS uuid_cargo_abono_compra,
1 AS cat_compras_cargo_abono_mu_id,
tr_compras_requisiciones_01_uuid,
orden_de_compra_proveedor,
referencia_bancaria,
observacion_abono_compra,
observacion_cargo_pago,
concat(1,'-',concat(tr_compras_requisiciones_01_uuid, '-', cat_compras_proveedores_id)) as llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago
FROM tr_compras_requisiciones_01
WHERE (vigente =1) AND (cat_compras_estatus_mu_id =2 OR cat_compras_estatus_mu_id =6) AND (check_compra_directa =1) and (tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid')
"); 
DB::Exec( $sql );



//Método SQL pag0
$sql = DB::prepareSQL("
INSERT IGNORE tr_compras_proveedores_01_cargos_abonos
(
cat_compras_proveedores_id,
fecha_de_compra,
referencia,
importe_cargo_pago,
fecha_de_pago,
concepto,
cat_compras_documentos_mu_id,
capturista,
vigente,
cat_finanzas_cuentas_de_balance_04_llave,
uuid_sat,
cat_finanzas_bancos_cuentas_id,
cat_finanzas_cajas_chicas_id,
uuid_cargo_abono_pago,
cat_compras_cargo_abono_mu_id,
tr_compras_requisiciones_01_uuid,
orden_de_compra_proveedor,
referencia_bancaria,
observacion_abono_compra,
observacion_cargo_pago,
llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago
)
SELECT
cat_compras_proveedores_id,
fecha_de_compra,
referencia,
importe_abono_compra,
fecha_de_pago,
observaciones AS concepto,
cat_compras_documentos_mu_id,
capturista,
vigente,
cat_finanzas_cuentas_de_balance_04_llave,
uuid_sat,
cat_finanzas_bancos_cuentas_id,
cat_finanzas_cajas_chicas_id,
concat(tr_compras_requisiciones_01_uuid,'-',cat_compras_proveedores_id) AS uuid_cargo_abono_pago,
2 AS cat_compras_cargo_abono_mu_id,
tr_compras_requisiciones_01_uuid,
orden_de_compra_proveedor,
referencia_bancaria,
observacion_abono_compra,
observacion_cargo_pago,
concat(2,'-',concat(tr_compras_requisiciones_01_uuid, '-', cat_compras_proveedores_id)) as llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago
FROM tr_compras_requisiciones_01
WHERE (vigente =1) AND (cat_compras_estatus_mu_id =2 OR cat_compras_estatus_mu_id =6) AND (check_compra_directa =1) and (tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid')

"); 
DB::Exec( $sql );

}


include 'admin/scripts/tr_compras_requisiciones_01_update_estatus_compra.php';


$result["txt"] = $params["txt"]." compra directa";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_link_requisiciones_estatus($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_insert_de_facturas_a_compras($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	//la tabla debe tener un id unico seleccionado

$sql = DB::prepareSQL("
INSERT IGNORE tr_compras_proveedores_01_cargos_abonos
(
cat_compras_proveedores_id,
fecha_de_compra,
importe_abono_compra,
cat_compras_documentos_mu_id,
capturista,
vigente,
uuid_sat,
uuid_cargo_abono_compra,
cat_compras_cargo_abono_mu_id,
llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago,
cat_compras_estatus_mu_id,
concepto,
orden_de_compra_proveedor
)
SELECT
cat_compras_proveedores.cat_compras_proveedores_id,
tr_compras_facturas_sat_01.Fecha_emision,
sum(tr_compras_facturas_sat_01.importe_neto) AS importe_abono_compra,
'3' AS id_documento,
tr_compras_facturas_sat_01.capturista,
'1' AS vigente,
tr_compras_facturas_sat_01.UUID,
tr_compras_facturas_sat_01.UUID AS uuid_compra,
'1' AS cargo_abono_id,
concat('1', '-', tr_compras_facturas_sat_01.UUID) AS llave_unica,
'15' as cat_compras_estatus_mu_id,
tr_compras_facturas_sat_01.concepto,
orden_de_compra_proveedor
FROM tr_compras_facturas_sat_01
INNER JOIN cat_compras_proveedores ON tr_compras_facturas_sat_01.RFC_emisor = cat_compras_proveedores.rfc_compras_proveedores
INNER JOIN cat_usuarios ON cat_compras_proveedores.capturista = cat_usuarios.usuario
WHERE (tr_compras_facturas_sat_01.UUID = ':UUID')
GROUP BY tr_compras_facturas_sat_01.UUID
");
DB::Exec( $sql );


$sql = DB::prepareSQL("
INSERT IGNORE tr_compras_proveedores_01_cargos_abonos
(
cat_compras_proveedores_id,
importe_cargo_pago,
fecha_de_pago,
capturista,
vigente,
cat_finanzas_cuentas_de_balance_04_llave,
uuid_sat,
uuid_cargo_abono_pago,
cat_compras_cargo_abono_mu_id,
referencia_bancaria,
observacion_cargo_pago,
llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago,
fecha_de_recibo,
tr_compras_almacenes_01_recibo_lpn_uuid
)
SELECT
cat_compras_proveedores.cat_compras_proveedores_id,
SUM(tr_compras_facturas_sat_01.importe_neto) AS importe_cargo_pago,
tr_compras_facturas_sat_01.Fecha_emision AS fecha_de_pago,
tr_compras_facturas_sat_01.capturista,
1 AS vigente,
tr_compras_facturas_sat_01.cat_finanzas_cuentas_de_balance_04_id,
tr_compras_facturas_sat_01.UUID,
tr_compras_facturas_sat_01.UUID AS uuid_cargo_abono_pago,
2 AS cat_compras_cargo_abono_mu_id,
tr_compras_facturas_sat_01.referencia_bancaria AS referencia_bancaria,
tr_compras_facturas_sat_01.observacion_cargo_pago AS observacion_cargo_pago,
concat('2', '-', tr_compras_facturas_sat_01.UUID) AS llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago,
tr_compras_facturas_sat_01.fecha_de_recibo AS fecha_de_recibo,
tr_compras_facturas_sat_01.tr_compras_almacenes_01_recibo_lpn_uuid AS tr_compras_almacenes_01_recibo_lpn_uuid
FROM tr_compras_facturas_sat_01
LEFT OUTER JOIN cat_compras_proveedores ON tr_compras_facturas_sat_01.RFC_emisor = cat_compras_proveedores.rfc_compras_proveedores
WHERE (tr_compras_facturas_sat_01.UUID = ':UUID')
GROUP BY tr_compras_facturas_sat_01.UUID
");
DB::Exec( $sql );

//actualizar estatus de facturas
include 'admin/scripts/tr_compras_facturas_sat_01_update.php';
include 'admin/scripts/tr_compras_proveedores_01_cargos_abonos_update.php';
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_insert_COMPRA_DIRECTA_tr_compras_proveedores_01_cargos_abonos($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
global $dal;
$record = $button->getCurrentRecord();
{

//Método SQL compra
$sql = DB::prepareSQL("
INSERT IGNORE tr_compras_proveedores_01_cargos_abonos
(
cat_compras_proveedores_id,
fecha_de_compra,
referencia,
importe_abono_compra,
fecha_de_pago,
concepto,
cat_compras_documentos_mu_id,
capturista,
vigente,
cat_finanzas_cuentas_de_balance_04_llave,
uuid_sat,
cat_finanzas_bancos_cuentas_id,
cat_finanzas_cajas_chicas_id,
uuid_cargo_abono_compra,
cat_compras_cargo_abono_mu_id,
tr_compras_requisiciones_01_uuid,
orden_de_compra_proveedor,
referencia_bancaria,
observacion_abono_compra,
observacion_cargo_pago,
llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago
)
SELECT
cat_compras_proveedores_id,
fecha_de_compra,
referencia,
importe_abono_compra,
fecha_de_pago,
observaciones AS concepto,
cat_compras_documentos_mu_id,
capturista,
vigente,
concat(34,'-',cat_compras_proveedores_id) as cat_finanzas_cuentas_de_balance_04_llave,
uuid_sat,
cat_finanzas_bancos_cuentas_id,
cat_finanzas_cajas_chicas_id,
concat(tr_compras_requisiciones_01_uuid,'-',cat_compras_proveedores_id) AS uuid_cargo_abono_compra,
1 AS cat_compras_cargo_abono_mu_id,
tr_compras_requisiciones_01_uuid,
orden_de_compra_proveedor,
referencia_bancaria,
observacion_abono_compra,
observacion_cargo_pago,
concat(1,'-',concat(tr_compras_requisiciones_01_uuid, '-', cat_compras_proveedores_id)) as llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago
FROM tr_compras_requisiciones_01
WHERE (vigente =1) AND (cat_compras_estatus_mu_id =2 OR cat_compras_estatus_mu_id =6) AND (check_compra_directa =1) and (tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid')
"); 
DB::Exec( $sql );



//Método SQL pag0
$sql = DB::prepareSQL("
INSERT IGNORE tr_compras_proveedores_01_cargos_abonos
(
cat_compras_proveedores_id,
fecha_de_compra,
referencia,
importe_cargo_pago,
fecha_de_pago,
concepto,
cat_compras_documentos_mu_id,
capturista,
vigente,
cat_finanzas_cuentas_de_balance_04_llave,
uuid_sat,
cat_finanzas_bancos_cuentas_id,
cat_finanzas_cajas_chicas_id,
uuid_cargo_abono_pago,
cat_compras_cargo_abono_mu_id,
tr_compras_requisiciones_01_uuid,
orden_de_compra_proveedor,
referencia_bancaria,
observacion_abono_compra,
observacion_cargo_pago,
llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago
)
SELECT
cat_compras_proveedores_id,
fecha_de_compra,
referencia,
importe_abono_compra,
fecha_de_pago,
observaciones AS concepto,
cat_compras_documentos_mu_id,
capturista,
vigente,
cat_finanzas_cuentas_de_balance_04_llave,
uuid_sat,
cat_finanzas_bancos_cuentas_id,
cat_finanzas_cajas_chicas_id,
concat(tr_compras_requisiciones_01_uuid,'-',cat_compras_proveedores_id) AS uuid_cargo_abono_pago,
2 AS cat_compras_cargo_abono_mu_id,
tr_compras_requisiciones_01_uuid,
orden_de_compra_proveedor,
referencia_bancaria,
observacion_abono_compra,
observacion_cargo_pago,
concat(2,'-',concat(tr_compras_requisiciones_01_uuid, '-', cat_compras_proveedores_id)) as llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago
FROM tr_compras_requisiciones_01
WHERE (vigente =1) AND (cat_compras_estatus_mu_id =2 OR cat_compras_estatus_mu_id =6) AND (check_compra_directa =1) and (tr_compras_requisiciones_01_uuid = ':tr_compras_requisiciones_01_uuid')

"); 
DB::Exec( $sql );

}


include 'admin/scripts/tr_compras_requisiciones_01_update_estatus_compra.php';


$result["txt"] = $params["txt"]." compra directa";

;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_pdf_orden_de_compra($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." en pdf";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_insert_pagos_tr_compras_proveedores_01_cargos_abonos($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
global $dal;
$record = $button->getCurrentRecord();
{

//Método SQL
$sql = DB::prepareSQL("insert into tr_compras_proveedores_01_cargos_abonos
set
cat_compras_proveedores_id =  ':cat_compras_proveedores_id',
importe_cargo_pago = ':importe_abono_compra',
fecha_de_pago = ':fecha_de_compra',
concepto = ':concepto',
capturista =  ':session.userid',
vigente = 1,
cat_finanzas_cuentas_de_balance_04_llave = ':cat_finanzas_cuentas_de_balance_04_llave',
uuid_sat = ':uuid_sat',
uuid_cargo_abono_pago = ':uuid_cargo_abono_compra',
cat_compras_cargo_abono_mu_id = 2,
llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago = concat('2-', ':uuid_cargo_abono_compra'),
llave_uuid_compra_pago = ':uuid_sat',
observacion_abono_compra = ':observacion_cargo_pago',
fecha_de_compra = ':fecha_de_compra'
"); 
DB::Exec( $sql );

}

include 'admin/scripts/tr_compras_proveedores_01_cargos_abonos_update.php';
include 'admin/scripts/tr_compras_proveedores_01_cargos_abonos_update_proveedores.php';
include 'admin/scripts/tr_compras_facturas_01_update.php';

$result["txt"] = "Pago afectado";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_insert_de_bancos_a_compras($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_update_usuarios_todo_el_clouster($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." world!";
include 'admin/scripts/replicar_users.php';;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_crear_base_de_datos($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	// Put your code here.
$result["txt"] = $params["txt"]." Espere a que pase a otra página...";
;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button1($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}
function buttonHandler_New_Button2($params)
{
	global $strTableName;
	$result = array();

	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');

	$button = new Button($params);
	$ajax = $button; // for examle from HELP
	$keys = $button->getKeys();

	$masterData = false;
	if ( isset($params['masterData']) && count($params['masterData']) > 0 )
	{
		$masterData = $params['masterData'];
	}
	else if ( isset($params["masterTable"]) )
	{
		$masterData = $button->getMasterData($params["masterTable"]);
	}
	
	$contextParams = array();
	if ( $params["location"] == PAGE_VIEW )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == PAGE_EDIT )
	{
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else if ( $params["location"] == "grid" )
	{	
		$params["location"] = "list";
		$contextParams["data"] = $button->getRecordData();
		$contextParams["newData"] = $params['fieldsData'];
		$contextParams["masterData"] = $masterData;
	}
	else 
	{
		$contextParams["masterData"] = $masterData;
	}

	RunnerContext::push( new RunnerContextItem( $params["location"], $contextParams));
	;
	RunnerContext::pop();
	echo my_json_encode($result);
	$button->deleteTempFiles();
}


		
function fieldEventHandler_check_compra_directa_event( $params )
{
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = false;
	$params["location"] = postvalue('pageType');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	$ajax = $button; // for examle from HELP
	$result = array();
	
	$pageType = postvalue("pageType");
	$fieldsData = my_json_decode( postvalue("fieldsData") );
	
	$contextParams = array(
		"data" => $fieldsData,
		"masterData" => $_SESSION[ $masterTable . "_masterRecordData" ]
	);
	
	RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, $contextParams ) );
	
// Sample:

;
	RunnerContext::pop();
	
	echo my_json_encode( $result );
	$button->deleteTempFiles();
}
?>