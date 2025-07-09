<?php
$strTableName="tr_actividades_asistencias_app_inf_horas_extras";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_actividades_asistencias_app";

$gstrOrderBy="ORDER BY tr_actividades_asistencias_app.tr_actividades_asistencias_app_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>