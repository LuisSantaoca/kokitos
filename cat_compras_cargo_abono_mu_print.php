<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once('include/xtempl.php');
require_once('classes/printpage.php');
require_once('classes/printpage_details.php');
require_once('classes/reportpage.php');
require_once('classes/reportprintpage.php');

add_nocache_headers();

require_once("include/cat_compras_cargo_abono_mu_variables.php");

if( Security::hasLogin() ) {
	if( !Security::processPageSecurity( $strtablename, 'P' ) )
	return;
}


$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id");
$params["xt"] = &$xt;
$params["pageType"] = PAGE_PRINT;
$params["pageName"] = postvalue("page");
$params["tName"] = $strTableName;
$params["selection"] = postvalue("selection"); //PrintPage::readSelectedRecordsFromRequest( "cat_compras_cargo_abono_mu" );
$params["allPagesMode"] = postvalue("all");
$params["detailTables"] = postvalue("details");
$params["splitByRecords"] = postvalue("records");
$params["mode"] = postvalue( "pdfjson" ) ? PRINT_PDFJSON : PRINT_SIMPLE;
$params["pdfBackgroundImage"] = postvalue("pdfBackgroundImage");

$params["masterTable"] = postvalue("mastertable");
if( $params["masterTable"] )
	$params["masterKeysReq"] = RunnerPage::readMasterKeysFromRequest();

$pageObject = new PrintPage($params);
$pageObject->init();
$pageObject->process();
?>