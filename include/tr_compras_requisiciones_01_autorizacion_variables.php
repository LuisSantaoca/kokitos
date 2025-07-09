<?php
$strTableName="tr_compras_requisiciones_01_autorizacion";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_compras_requisiciones_01";

$gstrOrderBy="ORDER BY tr_compras_requisiciones_01.tr_compras_requisiciones_01_id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>