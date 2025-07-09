<?php
$strTableName="tr_finanzas_bancos_02_query_dolares";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_finanzas_bancos_01";

$gstrOrderBy="ORDER BY tr_finanzas_bancos_01.fecha_bancos DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>