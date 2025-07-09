<?php
$strTableName="box_cat_compras_almacenes";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="cat_compras_almacenes";

$gstrOrderBy="ORDER BY cat_compras_almacenes.descripcion_compras_almacenes";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>