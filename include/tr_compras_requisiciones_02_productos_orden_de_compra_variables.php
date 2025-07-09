<?php
$strTableName="tr_compras_requisiciones_02_productos_orden_de_compra";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="tr_compras_requisiciones_02_productos";

$gstrOrderBy="ORDER BY tr_compras_requisiciones_02_productos.cat_compras_proveedores_id, tr_compras_requisiciones_02_productos.tr_compras_requisiciones_02_productos_id";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>