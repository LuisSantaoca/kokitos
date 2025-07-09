<?php
$dalTableaux_dias_bonos = array();
$dalTableaux_dias_bonos["aux_dias_bonos_id"] = array("type"=>3,"varname"=>"aux_dias_bonos_id", "name" => "aux_dias_bonos_id", "autoInc" => "1");
$dalTableaux_dias_bonos["dias_para_bono"] = array("type"=>3,"varname"=>"dias_para_bono", "name" => "dias_para_bono", "autoInc" => "0");
$dalTableaux_dias_bonos["tipo"] = array("type"=>200,"varname"=>"tipo", "name" => "tipo", "autoInc" => "0");
$dalTableaux_dias_bonos["vigente"] = array("type"=>3,"varname"=>"vigente", "name" => "vigente", "autoInc" => "0");
$dalTableaux_dias_bonos["time_stamp"] = array("type"=>135,"varname"=>"time_stamp", "name" => "time_stamp", "autoInc" => "0");
$dalTableaux_dias_bonos["capturista"] = array("type"=>200,"varname"=>"capturista", "name" => "capturista", "autoInc" => "0");
$dalTableaux_dias_bonos["aux_dias_bonos_id"]["key"]=true;

$dal_info["wwinte_app_at_intelagro_mx__aux_dias_bonos"] = &$dalTableaux_dias_bonos;
?>