<?php
$dalTablecat_produccion_variedades = array();
$dalTablecat_produccion_variedades["descripcion_variedad"] = array("type"=>200,"varname"=>"descripcion_variedad", "name" => "descripcion_variedad", "autoInc" => "0");
$dalTablecat_produccion_variedades["vigente"] = array("type"=>3,"varname"=>"vigente", "name" => "vigente", "autoInc" => "0");
$dalTablecat_produccion_variedades["cat_produccion_variedades_id"] = array("type"=>3,"varname"=>"cat_produccion_variedades_id", "name" => "cat_produccion_variedades_id", "autoInc" => "1");
$dalTablecat_produccion_variedades["cat_produccion_variedades_categorias_id"] = array("type"=>3,"varname"=>"cat_produccion_variedades_categorias_id", "name" => "cat_produccion_variedades_categorias_id", "autoInc" => "0");
$dalTablecat_produccion_variedades["capturista"] = array("type"=>200,"varname"=>"capturista", "name" => "capturista", "autoInc" => "0");
$dalTablecat_produccion_variedades["time_stamp"] = array("type"=>135,"varname"=>"time_stamp", "name" => "time_stamp", "autoInc" => "0");
$dalTablecat_produccion_variedades["cat_produccion_variedades_id"]["key"]=true;

$dal_info["wwinte_app_at_intelagro_mx__cat_produccion_variedades"] = &$dalTablecat_produccion_variedades;
?>