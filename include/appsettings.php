<?php
$dDebug = false;
$debug2Factor = false;
$dSQL = "";

$tables_data = array();
$page_layouts = array();
$page_options = array();
$pd_pages = array();
$all_pd_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$placeHolders = array();
$all_page_layouts = array();
$all_page_types = null;
$all_pages = null;
$detailsTablesData = array();
$masterTablesData = array();

// .NET convertor needs this
$tdataGLOBAL = array();
$pages = array();
$defaultPages = array();
$topsArray = array();

/**
 * Breadcrumb label templates

 *	Label without master table
 *	$breadcrumb_titles[<language>][<table>][<page>]["."] = "..."

 *	Label with master active
 *	$breadcrumb_titles[<language>][<table>][<page>][<master>] = "..."

 *	Label for the page with no table
 *	$breadcrumb_titles[<language>]["."][<page>]["."] = "..."
 */
$breadcrumb_labels = array();


$lookupTableLinks = array();

$_gmdays = array(0=>31,1=>31,2=>28,3=>31,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31);

include(getabspath('classes/layout.php'));
include(getabspath('classes/pdlayout.php'));


//	custom labels
$custom_labels = array();
$custom_labels["Spanish"] = array();

define('GLOBAL_PAGES_SHORT', "_global");
define('GLOBAL_PAGES', "<global>");

/**
 *  Define constants of page name
 */
define('PAGE_LIST',"list");
define('PAGE_MASTER_INFO_LIST',"masterlist");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_REMIND_SUCCESS',"remind_success");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_MASTER_INFO_REPORT',"masterreport");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_MASTER_INFO_PRINT',"masterprint");
define('PAGE_RPRINT',"rprint");
define('PAGE_MASTER_INFO_RPRINT',"masterrprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");
define('PAGE_DASHBOARD',"dashboard");
define('PAGE_DASHMAP', "map");
define('PAGE_ADMIN_RIGHTS', "admin_rights_list");
define('PAGE_ADMIN_MEMBERS', "admin_members_list");
define('PAGE_ADMIN_ADMEMBERS', "admin_admembers_list");
define('PAGE_USERINFO',"userinfo");
define('PAGE_SESSION_EXPIRED',"session_expired");

define('ADMIN_USERS',"admin_users");


define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);
define("LOGIN_AD",2);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);
define("SECURITY_AD", 2);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);
define("nDATABASE_Interbase", 16);
define("nDATABASE_REST", 19 );

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);
define("ADD_DASHBOARD",5);
define("ADD_MASTER_POPUP",6);
define("ADD_MASTER_DASH",7);

//	Edit page modes
define("EDIT_SIMPLE",0); 	//	standalone Edit page
define("EDIT_INLINE",1);	//	inlineEdit
define("EDIT_POPUP",3);		//	edit page in popup
define("EDIT_DASHBOARD",4);	//	edit page in dashboard
define("EDIT_SELECTED_SIMPLE",5);
define("EDIT_SELECTED_POPUP",6);


//	View page modes
define("VIEW_SIMPLE",0); 	//	standalone View page
define("VIEW_POPUP",1); 	//	View page in popup
define("VIEW_DASHBOARD",2); 	//	View page in dashboard
define("VIEW_PDFJSON",3); 	//	prepare json for PDF

define("LOGIN_SIMPLE", 0);
define("LOGIN_POPUP", 1);
define("LOGIN_EMBEDED", 2);

define("REGISTER_SIMPLE", 0);
define("REGISTER_POPUP", 1);

define("REMIND_SIMPLE", 0);
define("REMIND_POPUP", 1);

define("EXPORT_SIMPLE", 0);
define("EXPORT_POPUP", 1);

define("EXPORT_RAW", 0);
define("EXPORT_FORMATTED", 1);
define("EXPORT_BOTH", 2);


define("CHANGEPASS_SIMPLE", 0);
define("CHANGEPASS_POPUP", 1);

define("USERINFO_SIMPLE", 0 );
define("USERINFO_2FACTOR", 1 );

define("SESSION_EXPIRED_SIMPLE", 0 );
define("SESSION_EXPIRED_POPUP", 1 );

define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);
define("titDASHBOARD",4);
define("titSQL",6);
define("titREST",7);
define("titSQL_REPORT",8);
define("titSQL_CHART",9);
define("titREST_REPORT",10);
define("titREST_CHART",11);

define("TAB_TYPE_TAB", 0);
define("TAB_TYPE_SECTION", 1);
define("TAB_TYPE_STEP", 2);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("TOTALS_ALL_DATA", 0);
define("TOTALS_DISPLAYED_RECORDS", 1);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);
define("LIST_DASHBOARD", 7);
define("LIST_DASHDETAILS", 8);
define("MAP_DASHBOARD", 9);
define("LIST_MASTER",10);
define("PRINT_MASTER",11);
define("LIST_POPUPDETAILS",12);
define("PRINT_SIMPLE",13);
define("PRINT_PDFJSON",14); 	//	prepare json for PDF
define("LIST_PDFJSON",15); 	//	prepare details table json for PDF



define("REPORT_SIMPLE", 0);
define("REPORT_POPUPDETAILS", 1);
define("REPORT_DASHBOARD", 2);
define("REPORT_DETAILS", 3);
define("REPORT_DASHDETAILS", 4);

define("CHART_SIMPLE", 0);
define("CHART_POPUPDETAILS", 1);
define("CHART_DASHBOARD", 2);
define("CHART_DETAILS", 3);
define("CHART_DASHDETAILS", 4);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("DL_SINGLE",0);
define("DL_INDIVIDUAL",1);
define("DL_NONE",2);

define("SEARCH_SIMPLE", 0);
define("SEARCH_LOAD_CONTROL", 1);
define("SEARCH_DASHBOARD", 2);
define("SEARCH_POPUP", 3);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);
define("ENCRYPTION_ALG_DES", 1);
define("ENCRYPTION_ALG_AES", 128);
define("ENCRYPTION_ALG_AES_256", 256);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);
define("gltFLEXIBLE", 3);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

/* Dashboard types */
define("DASHBOARD_LIST", 0);
define("DASHBOARD_CHART", 1);
define("DASHBOARD_REPORT", 2);
define("DASHBOARD_RECORD", 3);
define("DASHBOARD_SEARCH", 4);
define("DASHBOARD_DETAILS", 5);
define("DASHBOARD_MAP", 6);
define("DASHBOARD_SNIPPET", 7);
/**/

/* Define message type constants */
define("MESSAGE_INFO", 1);
define("MESSAGE_ERROR", 2);

/* Define ML String type constants */
define("ML_TEXT", 0);
define("ML_CUSTOM_LABEL", 1);
define("ML_MESSAGE", 2);


/* Define print page and pdf page constants */
define("PRINT_PAGE_WIDTH", 700);
define("PRINT_PAGE_HEIGHT", 900);
define("PDF_PAGE_WIDTH", 750);
define("PDF_PAGE_HEIGHT", 1060);

/* Defined maps type */
define("GOOGLE_MAPS", 0);
define("OPEN_STREET_MAPS", 1);
define("BING_MAPS", 2);
define("HERE_MAPS", 3);
define("MAPQUEST_MAPS", 4);

/* Defined captcha type */
define("FLASH_CAPTCHA", 0);
define("RE_CAPTCHA", 1);

/* Define 'after record added/edited actions' constants*/
define("AA_TO_LIST", 0);
define("AA_TO_ADD", 1);
define("AA_TO_VIEW", 2);
define("AA_TO_EDIT", 3);
define("AA_TO_DETAIL_ADD", 4);
define("AA_TO_DETAIL_LIST", 5);

define("AE_TO_LIST", 0);
define("AE_TO_EDIT", 1);
define("AE_TO_VIEW", 2);
define("AE_TO_NEXT_EDIT", 3);
define("AE_TO_PREV_EDIT", 4);
define("AE_TO_DETAIL_LIST", 5);
/**/

define('BOOTSTRAP_LAYOUT', 3);
define('PD_BS_LAYOUT', 4); // temp

define('ICON_NONE', 0);
define('ICON_FILE', 1);
define('ICON_BOOTSTRAP_GLYPH', 2);
define('ICON_FONT_AWESOME', 3);


define('WELCOME_MENU', "welcome_page");

define('MENU_VERTICAL', "v");
define('MENU_HORIZONTAL', "h");
define('MENU_QUICKJUMP', "q");

// paramsLogger types
define('SSEARCH_PARAMS_TYPE', 1);
define('CRESIZE_PARAMS_TYPE', 2);
define('SHFIELDS_PARAMS_TYPE', 3);
define('FORDER_PARAMS_TYPE', 4);

// remind password method
define('RPM_SEND', 0 );
define('RPM_RESET', 1 );

define('CONTEXT_GLOBAL', 0);	//	global context
define('CONTEXT_PAGE', 1);		//	page where pageObject is available
define('CONTEXT_BUTTON', 2);	// 	button or other AJAX event
define('CONTEXT_LOOKUP', 3);	//	dependent lookup
define('CONTEXT_ROW', 4);		// 	processing grid row on multiple-records page (list)
define('CONTEXT_COMMAND', 5);	// 	DsCommand context
define('CONTEXT_SEARCH', 6);	// 	Search object context
define('CONTEXT_MASTER', 7);	// 	Master-details context

define('BOTH_RECORDS', 0);
define('NEXT_RECORD', 1);
define('PREV_RECORD', 2);

// login form types
define('LOGIN_SEPARATE', 0);
//define('LOGIN_POPUP', 1);
//define('LOGIN_EMBEDED', 2);
define('NO_LOGIN', 3);

define('MEDIA_DESKTOP', 0);
define('MEDIA_MOBILE', 1);
define('MEDIA_MOBILE_EXPANDED', 2);

define('WEBREPORTS_TABLE', "{04AFFBE6-86C0-47b0-ADD3-BA7FA19CA6FC}" );

define( 'WR_REPORT', 1 );
define( 'WR_CHART', 0 );

define('REST_BASIC', 1);
define('REST_APIKEY', 2);
define('REST_JWT', 3);
define('REST_OAUTH', 4);

define('TWOFACTOR_EMAIL', 0);
define('TWOFACTOR_PHONE', 1);
define('TWOFACTOR_APP', 2);


define("TIME_FORMAT_TIME_OF_DAY", 0);
define("TIME_FORMAT_DURATION", 1);

// user session levels
define("LOGGED_NONE", 0 );
//	logged in
define("LOGGED_FULL", 1 );
//	user has entered username & password, has to do 2factor authentication
define("LOGGED_2F_PENDING", 2 );
//	user has logged in, must setup 2factor authentication
define("LOGGED_2FSETUP_PENDING", 3 );
//	user has logged in, acount not activated, must confirm email address
define("LOGGED_ACTIVATION_PENDING", 4 );


define("stNONE", '%none' );
define("stHARDCODED", '%hardcoded' );
define("stDB", '%db' );
define("stAD", '%ad' );
define("stGOOGLE", '%google' );
define("stOPENID", '%openid' );
define("stFACEBOOK", '%facebook' );
define("stAZURE", '%azure' );
define("stSAML", '%saml' );
define("stOKTA", '%okta' );

//	storage providers
define("stpDISK", 0 );
define("stpAMAZON", 1 );
define("stpGOOGLEDRIVE", 2 );
define("stpONEDRIVE", 3 );
define("stpDROPBOX", 4 );
define("stpWASABI", 5 );

define( "spidGOOGLEDRIVE", "_PHPRunnerGoogleDriveConnection" );
define( "spidAMAZON", "_PHPRunnerAmazonS3Connection" );
define( "spidONEDRIVE", "_PHPRunnerOneDriveConnection" );
define( "spidDROPBOX", "_PHPRunnerDropboxConnection" );
define( "spidWASABI", "_PHPRunnerWasabiS3Connection" );

//	REST View payload format
define( "pfJSON", 1 );
define( "pfFORM", 4 );

$globalSettings = array();
$g_defaultOptionValues = array();
$g_settingsType = array();

$twilioSID = "";
$twilioAuth = "";
$twilioNumber = "";

// Update edit format for date text fields
$editTextAsDate = false;


/**
 * An option to be added to the wizard
 * Controls 'Remeber me' option
 */
$globalSettings["keepLoggedIn"] = true;


//mail settings
$globalSettings["useBuiltInMailer"] = false;

$globalSettings["useCustomSMTPSettings"] = true;

$globalSettings["strSMTPUser"] = "";
$globalSettings["strSMTPServer"] = "localhost";
$globalSettings["strSMTPPort"] = "25";
$globalSettings["strSMTPPassword"] = "";
$globalSettings["strFromEmail"] = "";

//

/*
$globalSettings["ADDomain"] = "";
$globalSettings["ADServer"] = "";
$globalSettings["ADFollowRefs"] = ;
$globalSettings["ADBaseDN"] = "";
if( !$globalSettings["ADBaseDN"] ) {
	$globalSettings["ADBaseDN"] = ldap_Domain2DN( $globalSettings["ADDomain"] );
}

$globalSettings["customLDAP"] = false;
*/
$customLDAPSettings = array(); //#9409

//	if user is member of group A, and group A is a memeber of group B,
//	count the user as member of group B
$adNestedPermissions = false;

$ajaxSearchStartsWith = true;



$globalSettings["LandingPageType"] = 0;
$globalSettings["LandingTable"] = "";
$globalSettings["LandingPage"] = "";
$globalSettings["LandingURL"] = "";
$globalSettings["LandingPageId"] = "";

$globalSettings["ProjectLogo"] = array();
$globalSettings["ProjectLogo"]["Spanish"] = "Intel";

$globalSettings["CookieBanner"] = array();

$globalSettings["useCookieBanner"] = 0 != 0;

$globalSettings["htmlEmailTemplates"] = array();


$globalSettings["createLoginPage"] = true;
$globalSettings["userGroupCount"] = 1;


$globalSettings["apiGoogleMapsCode"] = "AIzaSyBphjoxF3mLnMtnzwXV4qrwAulK7ZwQr24";

$globalSettings["useEmbedMapsAPI"] = 1 != 0;



/**
 * If true then detail table name will be printed before detail table on the view page
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed
 */
$globalSettings["searchSuggestsNumber"] = 10;

$globalSettings["override"] = array();


$styleOverrides = array();


$globalSettings["mapProvider"]=0;

$globalSettings["CaptchaSettings"] = array();
$globalSettings["CaptchaSettings"]["type"] = 1;
$globalSettings["CaptchaSettings"]["siteKey"] = "6LenSj8iAAAAAOysgqPlyhwTfkBj1qzm7DlrVUMJ";
$globalSettings["CaptchaSettings"]["secretKey"] = "6LenSj8iAAAAADUn2BdiHe_dRLk7uU3q-_RiiaKU";
$globalSettings["CaptchaSettings"]["captchaPassesCount"] = "5";






$bsProjectTheme = "cerulean";
$bsProjectSize = "normal";

$wr_pagestylepath = "webreports";
$wr_is_standalone = false;
$WRAdminPagePassword = "";



/**
 * Legacy variables for pre-10.6 business templates only.
 * DEPRECATED
 */
$cLoginTable = "cat_usuarios";
$cDisplayNameField = "nombre";
$cUserNameField	= "usuario";
$cPasswordField	= "pass";
$cUserGroupField = "user";
$cEmailField = "correo";
$cUserpicField = "";
$loginKeyFields= array();
$loginKeyFields[] = "cat_usuarios_id";

//	legacy use only
$cKeyFields = $loginKeyFields;

/**
 * End Legacy csection
 */


$globalSettings["usersDatasourceTable"] = "cat_usuarios";


$globalSettings["jwtSecret"] = "g91AFlltkotirEuxKPtZ";


$arrCustomPages = array();


$gPermissionsRefreshTime = 5;
$gPermissionsRead = false;

//	-1 - undetermined, 0 - nah, 1 - yep
$gGuestHasPermissions = -1;

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";
$showCustomMarkerOnPrint = false;

$projectBuildKey = "4526_1749678941";
$wizardBuildKey = "41974";
$projectBuildNumber = "4526";

$mlang_messages = array();
$mlang_charsets = array();


$projectMenus = array();
$projectMenus[] = "main";
$projectMenus[] = "secondary";


$menuTreelikeFlags = array();
$menuTreelikeFlags["main"] = 1;

//	save menu objects
$menuCache = array();
$menuNodesCache = array();

$menuTreelikeFlags["secondary"] = 1;



// table captions
$tableCaptions = array();
$tableCaptions["Spanish"] = array();
$tableCaptions["Spanish"][""] = "";
$tableCaptions["Spanish"]["cat_trabajadores_altas"] = "Trabajadores Altas";
$tableCaptions["Spanish"]["admin_rights"] = "Admin Rights";
$tableCaptions["Spanish"]["admin_members"] = "Admin Members";
$tableCaptions["Spanish"]["cat_usuarios_licencias"] = "Cat Usuarios Licencias";
$tableCaptions["Spanish"]["cat_actividades"] = "Actividades";
$tableCaptions["Spanish"]["cat_usuarios"] = "Cat Usuarios";
$tableCaptions["Spanish"]["con_licencias_filtro"] = "Con Licencias Filtro";
$tableCaptions["Spanish"]["cat_actividades_categorias"] = "Actividades Categoria";
$tableCaptions["Spanish"]["cat_trabajadores_documentos"] = "Cat Trabajadores Documentos";
$tableCaptions["Spanish"]["cat_trabajadores_puestos"] = "Cat Trabajadores Puestos";
$tableCaptions["Spanish"]["cat_trabajadores_puestos_areas"] = "Cat Trabajadores Puestos Areas";
$tableCaptions["Spanish"]["cat_trabajadores_puestos_categorias"] = "Cat Trabajadores Puestos Categorias";
$tableCaptions["Spanish"]["cat_trabajadores_imprimir_gafete"] = "Cat Trabajadores Imprimir Gafete";
$tableCaptions["Spanish"]["box_cat_trabajadores"] = "Box Cat Trabajadores";
$tableCaptions["Spanish"]["cat_actividades_unidades_de_costo"] = "Cat Actividades Unidades De Costo";
$tableCaptions["Spanish"]["cat_trabajadores_documentos_link"] = "Cat Trabajadores Documentos Link";
$tableCaptions["Spanish"]["tr_compras_requisiciones_01"] = "Requisiciones";
$tableCaptions["Spanish"]["cat_compras_productos_categorias"] = "Cat Compras Productos Categorias";
$tableCaptions["Spanish"]["cat_compras_proveedores"] = "Proveedores";
$tableCaptions["Spanish"]["cat_holding_01"] = "Holdign";
$tableCaptions["Spanish"]["cat_holding_02_empresas"] = "Cat Holding 02 Empresas";
$tableCaptions["Spanish"]["cat_holding_03_empresas_registros_patronales"] = "Cat Holding 03 Empresas Registros Patronales";
$tableCaptions["Spanish"]["cat_compras_proveedores_categorias"] = "Cat Compras Proveedores Categorias";
$tableCaptions["Spanish"]["tr_compras_requisiciones_02_productos"] = "Productos";
$tableCaptions["Spanish"]["cat_compras_documentos_mu"] = "Compras Docs Mu";
$tableCaptions["Spanish"]["cat_compras_estatus_mu"] = "Compras Estatus Mu";
$tableCaptions["Spanish"]["tr_root_audit_editing_locking"] = "Tr Root Audit Editing Locking";
$tableCaptions["Spanish"]["tr_root_audit_log_audit"] = "Tr Root Audit Log Audit";
$tableCaptions["Spanish"]["cat_compras_productos_unidad_de_medida_mu"] = "Unidad de Medida";
$tableCaptions["Spanish"]["cat_compras_productos_presentacion_mu"] = "Cat Compras Productos Presentacion Mu";
$tableCaptions["Spanish"]["cat_compras_estatus_mu_box"] = "Estatus";
$tableCaptions["Spanish"]["cat_usuarios_box"] = "Cat Usuarios Box";
$tableCaptions["Spanish"]["tr_compras_requisiciones_01_autorizacion"] = "Autoriza Requi Admin";
$tableCaptions["Spanish"]["tr_compras_requisiciones_02_productos_autorizacion"] = "Autorizacion02";
$tableCaptions["Spanish"]["cat_ventas_productos"] = "Cat Ventas Productos";
$tableCaptions["Spanish"]["cat_holding_03_empresas_departamentos"] = "Cat Holding 03 Empresas Departamentos";
$tableCaptions["Spanish"]["cat_compras_almacenes"] = "Cat Compras Almacenes";
$tableCaptions["Spanish"]["cat_actividades_categorias_mu"] = "Cat Actividades Categorias Mu";
$tableCaptions["Spanish"]["cat_ventas_productos_almacenes"] = "Cat Ventas Productos Almacenes";
$tableCaptions["Spanish"]["cat_ventas_productos_categorias"] = "Cat Ventas Productos Categorias";
$tableCaptions["Spanish"]["cat_ventas_productos_sku"] = "Cat Ventas Productos Sku";
$tableCaptions["Spanish"]["cat_ventas_productos_presentaciones"] = "Cat Ventas Productos Presentaciones";
$tableCaptions["Spanish"]["cat_ventas_productos_manejo"] = "Cat Ventas Productos Manejo";
$tableCaptions["Spanish"]["cat_ventas_productos_unidades_de_medida"] = "Cat Ventas Productos Unidades De Medida";
$tableCaptions["Spanish"]["cat_ventas_productos_unidades_de_produccion"] = "Cat Ventas Productos Unidades De Produccion";
$tableCaptions["Spanish"]["cat_ventas_productos_marcas"] = "Cat Ventas Productos Marcas";
$tableCaptions["Spanish"]["cat_ventas_productos_almacenes_categorias"] = "Cat Ventas Productos Almacenes Categorias";
$tableCaptions["Spanish"]["cat_ventas_clientes"] = "Clientes";
$tableCaptions["Spanish"]["cat_finanzas_movimientos"] = "Movimientos";
$tableCaptions["Spanish"]["cat_finanzas_centros_de_costos"] = "Centro de Costos";
$tableCaptions["Spanish"]["cat_trabajadores_box_root"] = "Cat Trabajadores Box Root";
$tableCaptions["Spanish"]["cat_actividades_box_root"] = "Cat Actividades Box Root";
$tableCaptions["Spanish"]["cat_usuarios_02_modulos"] = "Cat Usuarios 02 Modulos";
$tableCaptions["Spanish"]["cat_usuarios_modulos"] = "Cat Usuarios Modulos";
$tableCaptions["Spanish"]["cat_ventas_productos_unidades_de_venta"] = "Cat Ventas Productos Unidades De Venta";
$tableCaptions["Spanish"]["cat_ventas_productos_almacenes_box"] = "Cat Ventas Productos Almacenes Box";
$tableCaptions["Spanish"]["cat_ventas_productos_sku_box"] = "Cat Ventas Productos Sku Box";
$tableCaptions["Spanish"]["cat_holding_03_empresas_almacenes"] = "Cat Holding 03 Empresas Almacenes";
$tableCaptions["Spanish"]["cat_holding_03_empresas_unidades_productivas"] = "Cat Holding 03 Empresas Unidades Productivas";
$tableCaptions["Spanish"]["tr_finanzas_bancos_01"] = "Bancos";
$tableCaptions["Spanish"]["tr_finanzas_bancos_02"] = "Bancos CCS";
$tableCaptions["Spanish"]["cat_finanzas_bancos"] = "Cat Finanzas Bancos";
$tableCaptions["Spanish"]["cat_finanzas_bancos_cuentas"] = "Cuentas";
$tableCaptions["Spanish"]["cat_finanzas_bancos_cuentas_box"] = "Cat Finanzas Bancos Cuentas Box";
$tableCaptions["Spanish"]["cat_holding_03_empresas_unidades_productivas_categorias"] = "Cat Holding 03 Empresas Unidades Productivas Categorias";
$tableCaptions["Spanish"]["cat_holding_03_empresas_mu_unidades_productivas_categorias"] = "Cat Holding 03 Empresas Mu Unidades Productivas Categorias";
$tableCaptions["Spanish"]["cat_holding_04_unidades_productivas_lotes"] = "Cat Holding 04 Unidades Productivas Lotes";
$tableCaptions["Spanish"]["admin_users"] = "Admin Users";
$tableCaptions["Spanish"]["cat_holding_04_unidades_productivas_lotes_categorias"] = "Categorias lotes";
$tableCaptions["Spanish"]["cat_holding_04_unidades_productivas_mu_lotes_categorias"] = "Cat Holding 04 Unidades Productivas Mu Lotes Categorias";
$tableCaptions["Spanish"]["tr_compras_requisiciones_01_orden_de_compra"] = "Orden de Compra 01";
$tableCaptions["Spanish"]["tr_compras_requisiciones_02_productos_orden_de_compra"] = "Orden de Compra 02";
$tableCaptions["Spanish"]["cat_finanzas_transacciones_box"] = "Cat Finanzas Transacciones Box";
$tableCaptions["Spanish"]["cat_compras_productos"] = "Productos";
$tableCaptions["Spanish"]["tr_compras_requisiciones_01_informe_intelagro"] = "Tr Compras Requisiciones 01 Informe Intelagro";
$tableCaptions["Spanish"]["cat_finanzas_socios"] = "Cat Finanzas Socios";
$tableCaptions["Spanish"]["box_cat_holding_03_empresas_unidades_productivas"] = "Box Cat Holding 03 Empresas Unidades Productivas";
$tableCaptions["Spanish"]["box_cat_compras_productos"] = "Box Cat Compras Productos";
$tableCaptions["Spanish"]["box_cat_actividades_unidades_de_costo"] = "Box Cat Actividades Unidades De Costo";
$tableCaptions["Spanish"]["cat_ventas_productos_lotes"] = "Cat Ventas Productos Lotes";
$tableCaptions["Spanish"]["cat_finanzas_centros_de_costos_categorias_mu"] = "Cat Finanzas Centros De Costos Categorias Mu";
$tableCaptions["Spanish"]["box_tr_compras_requisiciones_tr_compras_almacenes_01"] = "Box Requi";
$tableCaptions["Spanish"]["box_cat_compras_almacenes"] = "Box Cat Compras Almacenes";
$tableCaptions["Spanish"]["box_cat_compras_proveedores"] = "Box Proveedores";
$tableCaptions["Spanish"]["box_cat_compras_documentos_mu"] = "Box Cat Compras Documentos Mu";
$tableCaptions["Spanish"]["cat_usuarios_box_2"] = "Cat Usuarios Box 2";
$tableCaptions["Spanish"]["tr_compras_requisiciones_01_autorizacion_user"] = "Autoriza Requi User";
$tableCaptions["Spanish"]["cat_finanzas_cuentas_de_balance_04"] = "Balance nivel 4 Afectables";
$tableCaptions["Spanish"]["box_cat_finanzas_cuentas_de_balance_04"] = "Box cuenta afectable";
$tableCaptions["Spanish"]["cat_finanzas_cuentas_de_balance_01_mu"] = "Balance nivel 1";
$tableCaptions["Spanish"]["cat_finanzas_cuentas_de_balance_02_mu"] = "Balance nivel 2";
$tableCaptions["Spanish"]["cat_finanzas_cuentas_de_balance_03_mu"] = "Balance nivel 3";
$tableCaptions["Spanish"]["cat_actividades_turnos_mu"] = "Cat Actividades Turnos Mu";
$tableCaptions["Spanish"]["box_cat_holding_04_unidades_productivas_lotes"] = "Box Cat Holding 04 Unidades Productivas Lotes";
$tableCaptions["Spanish"]["box_cat_actividades"] = "Box Cat Actividades";
$tableCaptions["Spanish"]["cat_control_aplicaciones_campo_boquillas"] = "Aplicaciones Boquillas";
$tableCaptions["Spanish"]["cat_control_aplicaciones_campo_metodo_de_aplicacion"] = "Aplicaciones Métodos";
$tableCaptions["Spanish"]["cat_control_aplicaciones_campo_tipo_de_control"] = "Aplicaciones Tipo de Control";
$tableCaptions["Spanish"]["box_cat_ventas_clientes"] = "Box Cat Ventas Clientes";
$tableCaptions["Spanish"]["box_cat_ventas_productos_sku"] = "Box Cat Ventas Productos Sku";
$tableCaptions["Spanish"]["box_tr_compras_facturas_sat_01"] = "Box Facturas";
$tableCaptions["Spanish"]["cat_compras_tipo_de_pago_mu"] = "Compras Tipo De Pago";
$tableCaptions["Spanish"]["cat_finanzas_transacciones_categorias_mu"] = "Cat Finanzas Transacciones Categorias Mu";
$tableCaptions["Spanish"]["box_cat_finanzas_cuentas_de_balance__traspasos_almacenes"] = "Box Cat Finanzas Cuentas De Balance  Traspasos Almacenes";
$tableCaptions["Spanish"]["cat_compras_almacenes_estatus_mu"] = "Cat Compras Almacenes Estatus Mu";
$tableCaptions["Spanish"]["tr_compras_requisiciones_02_productos_edit_root"] = "Tr Compras Requisiciones 02 Productos Edit Root";
$tableCaptions["Spanish"]["box_lotes_root"] = "Box Lotes Root";
$tableCaptions["Spanish"]["cat_trabajadores_altas_root"] = "Cat Trabajadores Altas Root";
$tableCaptions["Spanish"]["tr_compras_almacenes_inventario_02_productos"] = "Por Producto";
$tableCaptions["Spanish"]["tr_compras_almacenes_inventario_03"] = "Detalle";
$tableCaptions["Spanish"]["cat_nominas_dias_semana_mu"] = "Cat Nominas Dias Semana Mu";
$tableCaptions["Spanish"]["cat_nominas_periodicidad_mu"] = "Cat Nominas Periodicidad Mu";
$tableCaptions["Spanish"]["tr_compras_requisiciones_01_orden_de_compra_enviada"] = "Tr Compras Requisiciones 01 Orden De Compra Enviada";
$tableCaptions["Spanish"]["tr_compras_requisiciones_01_orden_de_compra_pagada"] = "Orden Pagada";
$tableCaptions["Spanish"]["ttr_compras_requisiciones_02_productos_orden_de_compra_pagos"] = "Asignar Pagos Detalle";
$tableCaptions["Spanish"]["tr_finanzas_movimientos_balance"] = "Movimientos Balance";
$tableCaptions["Spanish"]["box_cat_finanzas_cuentas_de_balance_03_mu"] = "Balance";
$tableCaptions["Spanish"]["cat_finanzas_movimientos_categorias_naturaleza_mu"] = "Cat Finanzas Movimientos Categorias Naturaleza Mu";
$tableCaptions["Spanish"]["box_cat_finanzas_movimientos"] = "Box Cat Finanzas Movimientos";
$tableCaptions["Spanish"]["cat_finanzas_monedas_mu"] = "Cat Finanzas Monedas Mu";
$tableCaptions["Spanish"]["tr_compras_requisiciones_01_edti_root"] = "Tr Compras Requisiciones 01 Edti Root";
$tableCaptions["Spanish"]["cat_root_tablas_de_catalogos"] = "Cat Root Tablas De Catalogos";
$tableCaptions["Spanish"]["cat_actividades_variables_de_ejecucion"] = "Cat Actividades Variables De Ejecucion";
$tableCaptions["Spanish"]["cat_nominas_conceptos"] = "Nomina Conceptos";
$tableCaptions["Spanish"]["cat_nominas_conceptos_clasificacion_mu"] = "Cat Nominas Conceptos Clasificacion Mu";
$tableCaptions["Spanish"]["cat_nominas_02_actividades"] = "Actividades";
$tableCaptions["Spanish"]["cat_actividades_alcance_mu"] = "Cat Actividades Alcance Mu";
$tableCaptions["Spanish"]["cat_nominas_conceptos_factor_de_calculo_mu"] = "Cat Nominas Conceptos Factor De Calculo Mu";
$tableCaptions["Spanish"]["cat_nominas_intervalos_mu"] = "Cat Nominas Intervalos Mu";
$tableCaptions["Spanish"]["Bancos_detalle"] = "Bancos Detalle";
$tableCaptions["Spanish"]["box_cat_finanzas_bancos_cuentas"] = "Box Cat Finanzas Bancos Cuentas";
$tableCaptions["Spanish"]["box_cat_finanzas_centros_de_costos"] = "Box Cat Finanzas Centros De Costos";
$tableCaptions["Spanish"]["cat_finanzas_cajas_chicas"] = "Cajas Chicas";
$tableCaptions["Spanish"]["box_cat_finanzas_cajas_chicas"] = "Box Cat Finanzas Cajas Chicas";
$tableCaptions["Spanish"]["cat_compras_productos_unidad_de_costo_mu"] = "Unidad de Costo";
$tableCaptions["Spanish"]["tr_finanzas_bancos_02_query_dolares"] = "Tr Finanzas Bancos 02 Query Dolares";
$tableCaptions["Spanish"]["zz_script_query"] = "Zz Script Query";
$tableCaptions["Spanish"]["cat_control_aplicaciones_campo_productos_funcionalidad"] = "Aplicaciones Funcionalidad";
$tableCaptions["Spanish"]["cat_control_plagas_y_enfermedades"] = "Plagas y Enfermedades";
$tableCaptions["Spanish"]["box_cat_control_plagas_y_enfermedades"] = "Box Cat Control Plagas Y Enfermedades";
$tableCaptions["Spanish"]["cat_control_plagas_y_enfermedades_categorias"] = "Categorias Plagas y E";
$tableCaptions["Spanish"]["tr_control_de_plagas_app"] = "Tr Control De Plagas App";
$tableCaptions["Spanish"]["box_cat_compras_productos_app"] = "Box Cat Compras Productos App";
$tableCaptions["Spanish"]["cat_compras_almacenes_productos_estatus_catalogo_mu"] = "Cat Compras Almacenes Productos Estatus Catalogo Mu";
$tableCaptions["Spanish"]["cat_compras_almacenes_tipo_de_recibo_mu"] = "Cat Compras Almacenes Tipo De Recibo Mu";
$tableCaptions["Spanish"]["box_cat_compras_almacenes_tipo_de_recibo_mu"] = "Box Cat Compras Almacenes Tipo De Recibo Mu";
$tableCaptions["Spanish"]["tr_control_aplicaciones_campo_planeacion_recetas_app"] = "Tr Control Aplicaciones Campo Planeacion Recetas App";
$tableCaptions["Spanish"]["cat_nominas_configuracion_global"] = "Cat Nominas Configuracion Global";
$tableCaptions["Spanish"]["cat_produccion_temporadas"] = "Temporadas";
$tableCaptions["Spanish"]["cat_control_aplicaciones_alcance_mu"] = "Cat Control Aplicaciones Alcance Mu";
$tableCaptions["Spanish"]["box_cat_control_aplicaciones_alcance_mu"] = "Box Cat Control Aplicaciones Alcance Mu";
$tableCaptions["Spanish"]["cat_control_aplicaciones_recetas_02_productos_app"] = "Cat Control Aplicaciones Recetas 02 Productos App";
$tableCaptions["Spanish"]["cat_control_aplicaciones_recetas_cts_01_nombre"] = "Cat Control Aplicaciones Recetas Cts 01 Nombre";
$tableCaptions["Spanish"]["box_cat_control_aplicaciones_recetas_cts_01_nombre"] = "Box Cat Control Aplicaciones Recetas Cts 01 Nombre";
$tableCaptions["Spanish"]["tr_control_aplicaciones_campo_02_up_productos_app"] = "Aplicaciones Productos";
$tableCaptions["Spanish"]["tr_control_aplicaciones_campo_03_lotes_app"] = "Aplicaciones lotes";
$tableCaptions["Spanish"]["tr_control_aplicaciones_campo_04_trabajadores_app"] = "Aplicaciones trabajadores";
$tableCaptions["Spanish"]["tr_compras_almacenes_02_recibo_productos"] = "Recibo Detalle";
$tableCaptions["Spanish"]["cat_control_aplicaciones_recetas_cts_01_nombre_query"] = "Cat Control Aplicaciones Recetas Cts 01 Nombre Query";
$tableCaptions["Spanish"]["tr_compras_orden_de_compra_pagos_03_abonos_productos"] = "Productos OC";
$tableCaptions["Spanish"]["tr_compras_facturas_sat_02_carga_masiva"] = "Sat carga masiva";
$tableCaptions["Spanish"]["cat_nominas_incidencias_mu"] = "Cat Nominas Incidencias Mu";
$tableCaptions["Spanish"]["tr_finanzas_bancos_02_uuid_sat"] = "Bancos UUID Sat";
$tableCaptions["Spanish"]["tr_finanzas_aportaciones_socios_01"] = "Aportaciones Socios";
$tableCaptions["Spanish"]["tr_menu_noticias"] = "Noticias";
$tableCaptions["Spanish"]["tr_menu_sugerencias"] = "Sugerencias";
$tableCaptions["Spanish"]["tr_actividades_asistencias_app"] = "Asistencias";
$tableCaptions["Spanish"]["cat_nominas_01_generales"] = "Nomina Generales";
$tableCaptions["Spanish"]["cat_nominas_03_trabajadoress_costo_bruto_conceptos_edicion_masiva"] = "Edicion masiva";
$tableCaptions["Spanish"]["cat_actividades_especificas"] = "Actividad especifica";
$tableCaptions["Spanish"]["cat_actividades_metodo_de_costeo_mu"] = "Cat Actividades Metodo De Costeo Mu";
$tableCaptions["Spanish"]["cat_actividades_forma_de_pago_mu"] = "Cat Actividades Forma De Pago Mu";
$tableCaptions["Spanish"]["box_cat_actividades_especificas"] = "Actividad especifica";
$tableCaptions["Spanish"]["cat_nominas_variables_mu"] = "Cat Nominas Variables Mu";
$tableCaptions["Spanish"]["cat_nominas_condicionantes_mu"] = "Cat Nominas Condicionantes Mu";
$tableCaptions["Spanish"]["cat_root_operadores"] = "Cat Root Operadores";
$tableCaptions["Spanish"]["cat_nominas_prestaciones_especiales"] = "Prestaciones especiales";
$tableCaptions["Spanish"]["cat_nominas_prestaciones_especiales_forma_de_pago_mu"] = "Cat Nominas Prestaciones Especiales Forma De Pago Mu";
$tableCaptions["Spanish"]["cat_actividades_turnos"] = "Turnos";
$tableCaptions["Spanish"]["cat_nominas_uuid_semana"] = "Cat Nominas Uuid Semana";
$tableCaptions["Spanish"]["cat_nominas_prestamos"] = "Tipo Prestamo";
$tableCaptions["Spanish"]["cat_nominas_prestaciones_individuales"] = "Prestaciones individuales";
$tableCaptions["Spanish"]["cat_nominas_incidencias"] = "Cat Nominas Incidencias";
$tableCaptions["Spanish"]["box_cat_nominas_uuid_semana"] = "Box Semana";
$tableCaptions["Spanish"]["cat_actividades_ingreso_egreso_mu"] = "Cat Actividades Ingreso Egreso Mu";
$tableCaptions["Spanish"]["box_cat_actividades_turnos"] = "Box Cat Actividades Turnos";
$tableCaptions["Spanish"]["tr_actividades_asistencias_app_semana_uuid"] = "Tr Actividades Asistencias App Semana Uuid";
$tableCaptions["Spanish"]["cat_nominas_dias_de_inicio_consecutivos"] = "Cat Nominas Dias De Inicio Consecutivos";
$tableCaptions["Spanish"]["cat_nominas_asistencias_fechas"] = "Cat Nominas Asistencias Fechas";
$tableCaptions["Spanish"]["cat_nominas_asistencias_fechas_uuid_semana"] = "Cat Nominas Asistencias Fechas Uuid Semana";
$tableCaptions["Spanish"]["cat_finanzas_movimientos_categoria"] = "Categorias";
$tableCaptions["Spanish"]["cat_finanzas_movimientos_categoria_sub"] = "Subcategoria";
$tableCaptions["Spanish"]["box_cat_finanzas_movimientos_categoria"] = "box_movimientos_categoria";
$tableCaptions["Spanish"]["box_cat_finanzas_movimientos_categoria_sub"] = "Box SubCategoria";
$tableCaptions["Spanish"]["box_cat_nominas_02_actividades"] = "Box Cat Nominas 02 Actividades";
$tableCaptions["Spanish"]["cat_control_riego_cabezales"] = "Cat Control Riego Cabezales";
$tableCaptions["Spanish"]["cat_control_riego_cabezales_pulsos"] = "Cat Control Riego Cabezales Pulsos";
$tableCaptions["Spanish"]["tr_control_de_riego_pulsos_01"] = "Tr Control De Riego Pulsos 01";
$tableCaptions["Spanish"]["tr_control_de_riego_pulsos_02_lotes"] = "Tr Control De Riego Pulsos 02 Lotes";
$tableCaptions["Spanish"]["box_cat_control_riego_cabezales"] = "Box Cat Control Riego Cabezales";
$tableCaptions["Spanish"]["box_cat_control_riego_cabezales_pulsos"] = "Box Cat Control Riego Cabezales Pulsos";
$tableCaptions["Spanish"]["tr_finanzas_bancos_02_movimientos"] = "Movimientos";
$tableCaptions["Spanish"]["tr_actividades_culturales_01"] = "Actividades Culturales";
$tableCaptions["Spanish"]["tr_actividades_culturales_02"] = "Actividades culturales detalle";
$tableCaptions["Spanish"]["tr_control_aplicaciones_03_trabajadores_sectores"] = "Sector_tuneles";
$tableCaptions["Spanish"]["box_unidad_de_medida_compras"] = "box_udm";
$tableCaptions["Spanish"]["box_cat_control_aplicaciones_campo_tipo_de_control"] = "box_control";
$tableCaptions["Spanish"]["cat_control_aplicaciones_contenedores_mezcladores_mu"] = "Contenedor mezclador";
$tableCaptions["Spanish"]["cat_compras_productos_precios"] = "Productos Precios";
$tableCaptions["Spanish"]["cat_compras_proveedores_sat"] = " Proveedores Sat";
$tableCaptions["Spanish"]["tr_compras_proveedores_01_cargos_abonos"] = "Abonos/compras a proveedores";
$tableCaptions["Spanish"]["cat_compras_cargo_abono_mu"] = "Cat Compras Cargo Abono Mu";
$tableCaptions["Spanish"]["tr_compras_proveedores_02_saldos"] = "Tr Compras Proveedores 02 Saldos";
$tableCaptions["Spanish"]["tr_compras_proveedores_01_cargos_abonos_pagos"] = "Cargos/Pagos a proveedores";
$tableCaptions["Spanish"]["tr_compras_proveedores_01_update_proveedor_detalle"] = "Tr Compras Proveedores 01 Update Proveedor Detalle";
$tableCaptions["Spanish"]["tr_finanzas_bancos_actualizar"] = "Tr Finanzas Bancos Actualizar";
$tableCaptions["Spanish"]["tr_finanzas_tipo_de_cambio"] = "Tipo de cambio";
$tableCaptions["Spanish"]["tr_compras_proveedores_02_cargos_abonos_centros_de_costos"] = "Cargos/Pagos CCS";
$tableCaptions["Spanish"]["tr_compras_proveedores_02_cargos_abonos_movimientos"] = "Cargo/Pagos Movimientos";
$tableCaptions["Spanish"]["tr_compras_proveedores_01_cargos_abonos_update"] = "Actualizar datos";
$tableCaptions["Spanish"]["tr_actividades_planeacion_app"] = "Planeación actividades";
$tableCaptions["Spanish"]["tr_actividades_planeacion_app_02"] = "Planeación lotes";
$tableCaptions["Spanish"]["tr_actividades_planeacion_tareas_app"] = "Asignar tareas";
$tableCaptions["Spanish"]["box_root_cat_holding_03_empresas_unidades_productivas"] = "Box Root Cat Holding 03 Empresas Unidades Productivas";
$tableCaptions["Spanish"]["cat_holding_03_empresas_unidades_productivas_box"] = "Cat Holding 03 Empresas Unidades Productivas Box";
$tableCaptions["Spanish"]["cat_holding_04_unidades_productivas_lotes_box"] = "Lote o Sector y Rancho";
$tableCaptions["Spanish"]["root_box_cat_holding_03_empresas_unidades_productivas"] = "Root Box Cat Holding 03 Empresas Unidades Productivas";
$tableCaptions["Spanish"]["root_box_cat_holding_04_unidades_productivas_lotes"] = "Root Box Cat Holding 04 Unidades Productivas Lotes";
$tableCaptions["Spanish"]["tr_compras_requisiciones_2"] = "Tr Compras Requisiciones 2";
$tableCaptions["Spanish"]["tr_compras_requisiciones_02_productos_compras"] = "Requsicion productos";
$tableCaptions["Spanish"]["tr_compras_proveedores_01_cargos_abonos_pagos_revisar"] = "Revisar pagos";
$tableCaptions["Spanish"]["tr_compras_facturas_sat_01"] = "Facturas Sat";
$tableCaptions["Spanish"]["tr_compras_requisiciones_01_estatus"] = "Requisiciones estatus";
$tableCaptions["Spanish"]["tr_compras_requisiciones_02_productos_estatus"] = "Productos";
$tableCaptions["Spanish"]["tr_compras_facturas_sat_02"] = "Factura Detalle";
$tableCaptions["Spanish"]["tr_compras_proveedores_01_cargos_abonos_oc_pdf"] = "Proveedor OC";
$tableCaptions["Spanish"]["tr_compras_facturas_sat_01_estatus"] = "Facturas estatus";
$tableCaptions["Spanish"]["tr_compras_proveedores_01_cargos_abonos_pagos_edit"] = "Pagos";
$tableCaptions["Spanish"]["cat_finanzas_cuentas_de_balance_5"] = "Cat Finanzas Cuentas De Balance 5";
$tableCaptions["Spanish"]["box_cat_finanzas_cuentas_de_balance_5"] = "Box Cat Finanzas Cuentas De Balance 5";
$tableCaptions["Spanish"]["box_tr_finanzas_bancos"] = "box_bancos";
$tableCaptions["Spanish"]["tr_tags"] = "Tr Tags";
$tableCaptions["Spanish"]["tr_tags_regs"] = "Tr Tags Regs";
$tableCaptions["Spanish"]["tr_tags_maestro"] = "Tr Tags Maestro";
$tableCaptions["Spanish"]["box_cat_nominas_conceptos"] = "Box Cat Nominas Conceptos";
$tableCaptions["Spanish"]["tr_actividades_asistencias_app_horas_extras"] = "Tr Actividades Asistencias App Horas Extras";
$tableCaptions["Spanish"]["cat_nominas_01_generales_llaves_st"] = "Cat Nominas 01 Generales Llaves St";
$tableCaptions["Spanish"]["tr_control_de_riego_programas_ha_st"] = "Tr Control De Riego Programas Ha St";
$tableCaptions["Spanish"]["tr_tags_edit"] = "Tr Tags Edit";
$tableCaptions["Spanish"]["cat_trabajadores_estado_civil_mu"] = "Cat Trabajadores Estado Civil Mu";
$tableCaptions["Spanish"]["cat_trabajadores_local_foraneo_mu"] = "Cat Trabajadores Local Foraneo Mu";
$tableCaptions["Spanish"]["cat_trabajadores_sangre_mu"] = "Cat Trabajadores Sangre Mu";
$tableCaptions["Spanish"]["cat_trabajadores_sexo_mu"] = "Cat Trabajadores Sexo Mu";
$tableCaptions["Spanish"]["cat_trabajadores_tipo_de_pago"] = "Cat Trabajadores Tipo De Pago";
$tableCaptions["Spanish"]["tr_actividades_cosecha"] = "Cosecha";
$tableCaptions["Spanish"]["cat_produccion_cultivos_01_productos"] = "Cat Produccion Cultivos 01 Productos";
$tableCaptions["Spanish"]["tr_actividades_cosecha_consecutivo"] = "Tr Actividades Cosecha Consecutivo";
$tableCaptions["Spanish"]["cat_trabajadores_tabulador"] = "Cat Trabajadores Tabulador";
$tableCaptions["Spanish"]["cat_holding_03_empresas_up_group_predios"] = "Cat Holding 03 Empresas Up Group Predios";
$tableCaptions["Spanish"]["cat_trabajadores_reingresos"] = "Cat Trabajadores Reingresos";
$tableCaptions["Spanish"]["cat_trabajadores_alta_baja_mu"] = "Cat Trabajadores Alta Baja Mu";
$tableCaptions["Spanish"]["cat_nominas_02_trabajadores"] = "Trabajadores";
$tableCaptions["Spanish"]["box_cat_nominas_01_generales"] = "Box Nominas";
$tableCaptions["Spanish"]["tr_actividades_cosecha_detalle_tags"] = "Tr Actividades Cosecha Detalle Tags";
$tableCaptions["Spanish"]["tr_actividades_cosecha_ranking_01"] = "Ranking 01";
$tableCaptions["Spanish"]["tr_actividades_asistencias_app_inf"] = "Tr Actividades Asistencias App Inf";
$tableCaptions["Spanish"]["cat_nominas_02_horarios"] = "Horarios";
$tableCaptions["Spanish"]["tr_actividades_asistencias_app_inf_inasistencias"] = "Tr Actividades Asistencias App Inf Inasistencias";
$tableCaptions["Spanish"]["tr_actividades_cosecha_consecutivo_query"] = "Tr Actividades Cosecha Consecutivo Query";
$tableCaptions["Spanish"]["cat_trabajadores_puestos_historico"] = "Puestos Historico";
$tableCaptions["Spanish"]["tr_actividades_cosecha_consecutivo_detalle"] = "Cosecha detalle";
$tableCaptions["Spanish"]["cat_produccion_variedades"] = "Cat Produccion Variedades";
$tableCaptions["Spanish"]["tr_actividades_asistencias_app_inf_horas_extras"] = "Horas extras";
$tableCaptions["Spanish"]["cat_trabajadores_altas_inf_destajo_cosecha"] = "Inf Destajo Cosecha";
$tableCaptions["Spanish"]["tr_actividades_cosecha_query"] = "Tr Actividades Cosecha Query";
$tableCaptions["Spanish"]["tr_actividades_destajos"] = "Tr Actividades Destajos";
$tableCaptions["Spanish"]["tr_actividades_asistencias_app_inf_horas_turno_vespertino"] = "Tr Actividades Asistencias App Inf Horas Turno Vespertino";
$tableCaptions["Spanish"]["tr_actividades_asistencias_app_inf_horas_extras_sab_dom"] = "Tr Actividades Asistencias App Inf Horas Extras Sab Dom";
$tableCaptions["Spanish"]["tr_actividades_asistencias_app_por_predio_query"] = "Tr Actividades Asistencias App Por Predio Query";
$tableCaptions["Spanish"]["cat_trabajadores_altas1"] = "Cat Trabajadores Altas1";
$tableCaptions["Spanish"]["cat_trabajadores_puestos_historico_query"] = "Cat Trabajadores Puestos Historico Query";
$tableCaptions["Spanish"]["tr_actividades_cosecha1borrar"] = "Tr Actividades Cosecha1borrar";
$tableCaptions["Spanish"]["tr_compras_almacenes_01_recibo_lpn"] = "Recibo Lpn";
$tableCaptions["Spanish"]["tr_compras_almacenes_01_salida_lpn"] = "Salida Lpn";
$tableCaptions["Spanish"]["tr_compras_almacenes_02_salida_productos"] = "Salida productos";
$tableCaptions["Spanish"]["cat_trabajadores_puestos_historico1borrar"] = "Cat Trabajadores Puestos Historico1borrar";
$tableCaptions["Spanish"]["cat_compras_almacenes_tipo_de_salida_mu"] = "Cat Compras Almacenes Tipo De Salida Mu";
$tableCaptions["Spanish"]["tr_compras_almacenes_01_salida_lpn1borrar"] = "Tr Compras Almacenes 01 Salida Lpn1borrar";
$tableCaptions["Spanish"]["tr_compras_almacenes_02_salida_productos1borrar"] = "Tr Compras Almacenes 02 Salida Productos1borrar";
$tableCaptions["Spanish"]["cat_holding_04a_unidades_productivas_lotes_historico"] = "Cat Holding 04a Unidades Productivas Lotes Historico";
$tableCaptions["Spanish"]["cat_holding_04_unidades_productivas_lotes_inf"] = "Lotes";
$tableCaptions["Spanish"]["tr_actividades_cosecha_query2borrar"] = "Tr Actividades Cosecha Query2borrar";
$tableCaptions["Spanish"]["tr_actividades_asistencias_app_horas_extras_borrar"] = "Tr Actividades Asistencias App Horas Extras Borrar";
$tableCaptions["Spanish"]["cat_ventas_productos_variedades"] = "Cat Ventas Productos Variedades";
$tableCaptions["Spanish"]["cat_compras_productos_permitidos"] = "Cat Compras Productos Permitidos";
$tableCaptions["Spanish"]["cat_compras_productos1"] = "Cat Compras Productos1";
$tableCaptions["Spanish"]["tr_ventas_almacenes_01_up_salidas_lpn"] = "Tr Ventas Almacenes 01 Up Salidas Lpn";
$tableCaptions["Spanish"]["tr_ventas_almacenes_02_up_salidas_productos"] = "Tr Ventas Almacenes 02 Up Salidas Productos";
$tableCaptions["Spanish"]["box_cat_ventas_productos_variedades"] = "Box Cat Ventas Productos Variedades";
$tableCaptions["Spanish"]["tr_actividades_cosecha_salidas_02"] = "Tr Actividades Cosecha Salidas 02";
$tableCaptions["Spanish"]["cat_trabajadores_altas2"] = "Cat Trabajadores Altas2";
$tableCaptions["Spanish"]["tr_actividades_cosecha_salidas_01_quey_glori"] = "tr_actividades_cosecha_salidas_01 quey glori";
$tableCaptions["Spanish"]["tr_actividades_cosecha_salidas_01"] = "Tr Actividades Cosecha Salidas 01";
$tableCaptions["Spanish"]["cat_ventas_productos_status_recibo"] = "Cat Ventas Productos Status Recibo";
$tableCaptions["Spanish"]["aux_puestos_horarios"] = "Aux Puestos Horarios";
$tableCaptions["Spanish"]["aux_horarios"] = "Aux Horarios";
$tableCaptions["Spanish"]["cat_nominas_feriados"] = "Cat Nominas Feriados";
$tableCaptions["Spanish"]["aux_actividades_precios"] = "Aux Actividades Precios";
$tableCaptions["Spanish"]["aux_dias_bonos"] = "Aux Dias Bonos";
$tableCaptions["Spanish"]["aux_incidencias_justificables"] = "Aux Incidencias Justificables";
$tableCaptions["Spanish"]["aux_nomina_justificantes_bonos"] = "Aux Nomina Justificantes Bonos";
$tableCaptions["Spanish"]["puestos_horarios"] = "Puestos Horarios";
$tableCaptions["Spanish"]["cat_produccion_proceso"] = "Cat Produccion Proceso";
$tableCaptions["Spanish"]["tr_prenomina"] = "Tr Prenomina";
$tableCaptions["Spanish"]["cat_ventas_productos_precios"] = "Cat Ventas Productos Precios";


$globalEvents = new class_GlobalEvents;
$dummyEvents = new eventsBase;
$tableEvents = array();
$dalTables = array();
$tableinfo_cache = array();

$projectLanguage = "php";

importSecuritySettings();


require_once( getabspath('classes/labels.php') );
require_once( getabspath('classes/security.php') );
require_once( getabspath("connections/dbfunctions_legacy.php") );
require_once( getabspath("classes/datasource/httprequest.php") );
require_once( getabspath("connections/ConnectionManager.php") );
require_once( getabspath("connections/apis.php") );
require_once( getabspath('classes/searchclause.php'));
require_once( getabspath('classes/projectsettings.php'));
include_once( getabspath('classes/runnerpage.php'));
include_once( getabspath("classes/controls/ViewControl.php"));
require_once( getabspath('classes/db.php') );
require_once( getabspath('classes/context.php') );
require_once( getabspath("classes/cipherer.php"));
require_once( getabspath('classes/wheretabs.php') );
require_once( getabspath('classes/datasource/datacontext.php') );
require_once( getabspath("classes/filesystem/filesystem.php") );
require_once( getabspath("classes/runnermenu.php") );

$pageTypesForView = array();
$pageTypesForView[] = "list";
$pageTypesForView[] = "view";
$pageTypesForView[] = "export";
$pageTypesForView[] = "print";
$pageTypesForView[] = "report";
$pageTypesForView[] = "rprint";
$pageTypesForView[] = "chart";
$pageTypesForView[] = "masterlist";
$pageTypesForView[] = "masterprint";

$pageTypesForEdit = array();
$pageTypesForEdit[] = "add";
$pageTypesForEdit[] = "edit";
$pageTypesForEdit[] = "search";
$pageTypesForEdit[] = "register";


$projectEntities = array();
$projectEntitiesReverse = array();
$tablesByGoodName = array();
$tablesByUpperCase = array();
$tablesByUpperGoodname = array();


$contextStack = new RunnerContext;

$cman = new ConnectionManager();
$restApis = new RestManager();
$restResultCache = array();

/**
 * substitute for $_SESSION when in REST API (stateless) mode
 */
$restStorage = array();

$currentConnection = null;

$mlang_defaultlang = getDefaultLanguage();

include(getabspath("include/languages.php"));

$mediaType = isset($_COOKIE["mediaType"]) ? $_COOKIE["mediaType"] : 0;



$page_titles[GLOBAL_PAGES_SHORT] = array();
if(mlang_getcurrentlang()=="Spanish")
{
}

$globalSettings["showDetailedError"] = true;



$globalSettings["mapMarkerCount"] = 50;

// SearchClause::getSearchObject
$_cachedSeachClauses = array();

/**
 * Lazy initialization dictionaries such as mime types for mimeTypeByExt go here
 */
$onDemnadVariables = array();


$auditMaxFieldLength = 300;
$mysqlSupportDates0000 = false;

$csrfProtectionOff = false;
$cacheImages = true;
/**
 * When true, read user permissions and write them into the session.
 */
$gReadPermissions = true;

$resizeImagesOnClient = true;


$fieldFilterMaxDisplayValueLength = 50;
$fieldFilterMaxSearchValueLength = 200;
$fieldFilterMaxValuesCount = 3000;
$fieldFilterDefaultValue = "";
$fieldFilterValueShrinkPostfix = "...";




// default connection link #9875
$conn = $cman->getDefault()->conn;


//	delete old username & password cookies
if( $_COOKIE["password"] ) {
	runner_setcookie("username", "", time() - 1, "", "", false, false);
	runner_setcookie("password", "", time() - 1, "", "", false, false);
}


$logoutPerformed = false;
Security::autoLoginAsGuest();
Security::updateCSRFCookie();


$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$menuNodesIndex=0;

/**
 *	Sundry data the page classes want pass to their JS counterparts
 *
 *	$pagesData[<pageid>] = array( 	<key> => <value>
 *									<key> => <value> ... )
 *					)
 */
$pagesData = array();

$pageInConstruction = null;


?>