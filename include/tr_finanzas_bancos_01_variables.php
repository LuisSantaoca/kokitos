<?php
$strTableName="tr_finanzas_bancos_01";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_finanzas_bancos_01";

$gstrOrderBy="ORDER BY fecha_bancos DESC, consecutivo_upload_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>