<?php
$strTableName="tr_actividades_asistencias_app_horas_extras";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_actividades_asistencias_app";

$gstrOrderBy="ORDER BY date_format(tr_actividades_asistencias_app.fecha_de_captura, '%d/%m/%Y') DESC, cat_trabajadores_altas_id, cat_actividades_ingreso_egreso_mu";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>