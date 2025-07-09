<?php
$strTableName="cat_finanzas_cuentas_de_balance_5";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="cat_finanzas_cuentas_de_balance_04";

$gstrOrderBy="ORDER BY cat_finanzas_cuentas_de_balance_04.cat_finanzas_cuentas_de_balance_03_mu_id, cat_finanzas_cuentas_de_balance_04.cat_finanzas_cuentas_de_balance_04_llave";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>