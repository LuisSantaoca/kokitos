<?php
$strTableName="box_tr_compras_facturas_sat_01";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_compras_facturas_sat_01";

$gstrOrderBy="ORDER BY date_format(tr_compras_facturas_sat_01.Fecha_emision, '%Y-%m-%d') DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>