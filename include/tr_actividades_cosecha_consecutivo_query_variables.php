<?php
$strTableName="tr_actividades_cosecha_consecutivo_query";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_actividades_cosecha";

$gstrOrderBy="ORDER BY tr_actividades_cosecha.tr_actividades_cosecha_id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>