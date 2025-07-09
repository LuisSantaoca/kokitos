<?php
$strTableName="tr_actividades_planeacion_tareas_app";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_actividades_planeacion_tareas_app";

$gstrOrderBy="ORDER BY tr_actividades_planeacion_tareas_app_id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>