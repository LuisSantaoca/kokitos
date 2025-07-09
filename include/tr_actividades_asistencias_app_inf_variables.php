<?php
$strTableName="tr_actividades_asistencias_app_inf";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_actividades_asistencias_app";

$gstrOrderBy="ORDER BY 
    fecha DESC, cat_trabajadores_altas.cat_trabajadores_altas_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>