<?php
$dalTablecat_nominas_conceptos = array();
$dalTablecat_nominas_conceptos["vigente"] = array("type"=>3,"varname"=>"vigente", "name" => "vigente", "autoInc" => "0");
$dalTablecat_nominas_conceptos["descripcion_nominas_conceptos"] = array("type"=>200,"varname"=>"descripcion_nominas_conceptos", "name" => "descripcion_nominas_conceptos", "autoInc" => "0");
$dalTablecat_nominas_conceptos["cat_nominas_conceptos_clasificacion_mu_id"] = array("type"=>3,"varname"=>"cat_nominas_conceptos_clasificacion_mu_id", "name" => "cat_nominas_conceptos_clasificacion_mu_id", "autoInc" => "0");
$dalTablecat_nominas_conceptos["cat_nominas_conceptos_id"] = array("type"=>3,"varname"=>"cat_nominas_conceptos_id", "name" => "cat_nominas_conceptos_id", "autoInc" => "1");
$dalTablecat_nominas_conceptos["capturista"] = array("type"=>200,"varname"=>"capturista", "name" => "capturista", "autoInc" => "0");
$dalTablecat_nominas_conceptos["time_stamp"] = array("type"=>135,"varname"=>"time_stamp", "name" => "time_stamp", "autoInc" => "0");
$dalTablecat_nominas_conceptos["cat_nominas_conceptos_id"]["key"]=true;

$dal_info["wwinte_app_at_intelagro_mx__cat_nominas_conceptos"] = &$dalTablecat_nominas_conceptos;
?>