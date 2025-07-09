<?php
$dalTablecat_actividades_turnos = array();
$dalTablecat_actividades_turnos["vigente"] = array("type"=>3,"varname"=>"vigente", "name" => "vigente", "autoInc" => "0");
$dalTablecat_actividades_turnos["descripcion_turno"] = array("type"=>200,"varname"=>"descripcion_turno", "name" => "descripcion_turno", "autoInc" => "0");
$dalTablecat_actividades_turnos["hora_de_entrada"] = array("type"=>134,"varname"=>"hora_de_entrada", "name" => "hora_de_entrada", "autoInc" => "0");
$dalTablecat_actividades_turnos["hora_de_salida"] = array("type"=>134,"varname"=>"hora_de_salida", "name" => "hora_de_salida", "autoInc" => "0");
$dalTablecat_actividades_turnos["capturista"] = array("type"=>200,"varname"=>"capturista", "name" => "capturista", "autoInc" => "0");
$dalTablecat_actividades_turnos["time_stamp"] = array("type"=>135,"varname"=>"time_stamp", "name" => "time_stamp", "autoInc" => "0");
$dalTablecat_actividades_turnos["cat_nominas_conceptos_id"] = array("type"=>3,"varname"=>"cat_nominas_conceptos_id", "name" => "cat_nominas_conceptos_id", "autoInc" => "0");
$dalTablecat_actividades_turnos["cat_actividades_turnos_id"] = array("type"=>3,"varname"=>"cat_actividades_turnos_id", "name" => "cat_actividades_turnos_id", "autoInc" => "1");
$dalTablecat_actividades_turnos["cat_nominas_conceptos_clasificacion_mu_id"] = array("type"=>3,"varname"=>"cat_nominas_conceptos_clasificacion_mu_id", "name" => "cat_nominas_conceptos_clasificacion_mu_id", "autoInc" => "0");
$dalTablecat_actividades_turnos["cat_actividades_turnos_id"]["key"]=true;

$dal_info["wwinte_app_at_intelagro_mx__cat_actividades_turnos"] = &$dalTablecat_actividades_turnos;
?>