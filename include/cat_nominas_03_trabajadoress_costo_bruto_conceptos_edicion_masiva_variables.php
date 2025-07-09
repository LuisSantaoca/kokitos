<?php
$strTableName="cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="cat_nominas_03_trabajadores_costo_bruto_conceptos";

$gstrOrderBy="ORDER BY fecha";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>