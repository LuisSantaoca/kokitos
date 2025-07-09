<?php
$dalTablecat_actividades = array();
$dalTablecat_actividades["cat_actividades_id"] = array("type"=>3,"varname"=>"cat_actividades_id", "name" => "cat_actividades_id", "autoInc" => "1");
$dalTablecat_actividades["time_stamp"] = array("type"=>135,"varname"=>"time_stamp", "name" => "time_stamp", "autoInc" => "0");
$dalTablecat_actividades["vigente"] = array("type"=>3,"varname"=>"vigente", "name" => "vigente", "autoInc" => "0");
$dalTablecat_actividades["capturista"] = array("type"=>200,"varname"=>"capturista", "name" => "capturista", "autoInc" => "0");
$dalTablecat_actividades["descripcion_actividad"] = array("type"=>200,"varname"=>"descripcion_actividad", "name" => "descripcion_actividad", "autoInc" => "0");
$dalTablecat_actividades["cat_actividades_categorias_id"] = array("type"=>3,"varname"=>"cat_actividades_categorias_id", "name" => "cat_actividades_categorias_id", "autoInc" => "0");
$dalTablecat_actividades["cat_actividades_categorias_mu_id"] = array("type"=>3,"varname"=>"cat_actividades_categorias_mu_id", "name" => "cat_actividades_categorias_mu_id", "autoInc" => "0");
$dalTablecat_actividades["cat_actividades_id"]["key"]=true;

$dal_info["wwinte_app_at_intelagro_mx__cat_actividades"] = &$dalTablecat_actividades;
?>