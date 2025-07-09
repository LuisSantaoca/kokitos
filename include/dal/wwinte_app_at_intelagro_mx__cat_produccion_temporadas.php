<?php
$dalTablecat_produccion_temporadas = array();
$dalTablecat_produccion_temporadas["vigente"] = array("type"=>3,"varname"=>"vigente", "name" => "vigente", "autoInc" => "0");
$dalTablecat_produccion_temporadas["descripcion_temporada"] = array("type"=>200,"varname"=>"descripcion_temporada", "name" => "descripcion_temporada", "autoInc" => "0");
$dalTablecat_produccion_temporadas["cat_produccion_temporadas_id"] = array("type"=>3,"varname"=>"cat_produccion_temporadas_id", "name" => "cat_produccion_temporadas_id", "autoInc" => "1");
$dalTablecat_produccion_temporadas["capturista"] = array("type"=>200,"varname"=>"capturista", "name" => "capturista", "autoInc" => "0");
$dalTablecat_produccion_temporadas["time_stamp"] = array("type"=>135,"varname"=>"time_stamp", "name" => "time_stamp", "autoInc" => "0");
$dalTablecat_produccion_temporadas["cat_produccion_temporadas_id"]["key"]=true;

$dal_info["wwinte_app_at_intelagro_mx__cat_produccion_temporadas"] = &$dalTablecat_produccion_temporadas;
?>