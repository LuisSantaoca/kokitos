<?php
$strTableName="tr_compras_proveedores_01_cargos_abonos_pagos_edit";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_compras_proveedores_01_cargos_abonos";

$gstrOrderBy="ORDER BY tr_compras_proveedores_01_cargos_abonos.tr_compras_proveedores_01_cargos_abonos_id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>