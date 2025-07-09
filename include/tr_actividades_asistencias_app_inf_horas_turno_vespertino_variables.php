<?php
$strTableName="tr_actividades_asistencias_app_inf_horas_turno_vespertino";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_actividades_asistencias_app";

$gstrOrderBy="ORDER BY 
    entrada.cat_trabajadores_altas_id, entrada.fecha";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>