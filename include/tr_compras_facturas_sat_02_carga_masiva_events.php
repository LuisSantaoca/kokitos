<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_tr_compras_facturas_sat_02_carga_masiva  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterImport"]=true;

		$this->events["BeforeImport"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After Import Finished
function AfterImport($count, $skipCount, $pageObject)
{

		
include 'admin/scripts/tr_compras_facturas_sat_carga_masiva.php';


//**********  Redirect to another page  ************
header("Location: tr_compras_facturas_sat_01_list.php");
exit();





// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterImport

		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Import Started
function BeforeImport($pageObject, &$message)
{

		DB::Exec("truncate tr_compras_facturas_sat_02_carga_masiva");


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeImport

		
		
		
		
		
		
		
		
		
		
		
		



}
?>
