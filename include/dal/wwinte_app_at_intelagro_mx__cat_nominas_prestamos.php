<?php
$dalTablecat_nominas_prestamos = array();
$dalTablecat_nominas_prestamos["cat_nominas_prestamos_id"] = array("type"=>3,"varname"=>"cat_nominas_prestamos_id", "name" => "cat_nominas_prestamos_id", "autoInc" => "1");
$dalTablecat_nominas_prestamos["descripcion_prestamo"] = array("type"=>200,"varname"=>"descripcion_prestamo", "name" => "descripcion_prestamo", "autoInc" => "0");
$dalTablecat_nominas_prestamos["vigente"] = array("type"=>3,"varname"=>"vigente", "name" => "vigente", "autoInc" => "0");
$dalTablecat_nominas_prestamos["capturista"] = array("type"=>200,"varname"=>"capturista", "name" => "capturista", "autoInc" => "0");
$dalTablecat_nominas_prestamos["time_stamp"] = array("type"=>135,"varname"=>"time_stamp", "name" => "time_stamp", "autoInc" => "0");
$dalTablecat_nominas_prestamos["cat_nominas_prestamos_id"]["key"]=true;

$dal_info["wwinte_app_at_intelagro_mx__cat_nominas_prestamos"] = &$dalTablecat_nominas_prestamos;
?>