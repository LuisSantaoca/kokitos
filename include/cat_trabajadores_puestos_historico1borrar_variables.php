<?php
$strTableName="cat_trabajadores_puestos_historico1borrar";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="cat_trabajadores_puestos_historico";

$gstrOrderBy="ORDER BY cat_trabajadores_puestos_historico.cat_trabajadores_altas_id, cat_trabajadores_puestos_historico.fecha_de_captura DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>