<?php
$dalTableaux_horarios = array();
$dalTableaux_horarios["aux_horarios_id"] = array("type"=>3,"varname"=>"aux_horarios_id", "name" => "aux_horarios_id", "autoInc" => "0");
$dalTableaux_horarios["descripcion_horario"] = array("type"=>200,"varname"=>"descripcion_horario", "name" => "descripcion_horario", "autoInc" => "0");
$dalTableaux_horarios["horario_tipo"] = array("type"=>200,"varname"=>"horario_tipo", "name" => "horario_tipo", "autoInc" => "0");
$dalTableaux_horarios["horario_entre_semana"] = array("type"=>200,"varname"=>"horario_entre_semana", "name" => "horario_entre_semana", "autoInc" => "0");
$dalTableaux_horarios["horario_sabado"] = array("type"=>200,"varname"=>"horario_sabado", "name" => "horario_sabado", "autoInc" => "0");
$dalTableaux_horarios["time_stamp"] = array("type"=>135,"varname"=>"time_stamp", "name" => "time_stamp", "autoInc" => "0");
$dalTableaux_horarios["vigente"] = array("type"=>16,"varname"=>"vigente", "name" => "vigente", "autoInc" => "0");
$dalTableaux_horarios["minutos_tolerancia_entrada"] = array("type"=>16,"varname"=>"minutos_tolerancia_entrada", "name" => "minutos_tolerancia_entrada", "autoInc" => "0");
$dalTableaux_horarios["minutos_tolerancia_salida"] = array("type"=>16,"varname"=>"minutos_tolerancia_salida", "name" => "minutos_tolerancia_salida", "autoInc" => "0");
$dalTableaux_horarios["aux_horarios_id"]["key"]=true;

$dal_info["wwinte_app_at_intelagro_mx__aux_horarios"] = &$dalTableaux_horarios;
?>