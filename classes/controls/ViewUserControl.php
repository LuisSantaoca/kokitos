<?php
class ViewUserControl extends ViewControl
{
	/**
	 * Set to true, if it is custom user control
	 * @var boolean
	 */
	public $userControl;
	
	public function initUserControl()
	{		
	}
	

	public function addViewPluginJSControl($name)
	{
		if($this->viewFormat == $name)
		{
			$this->AddJSFile("include/runnerJS/controls/".$name.".js", 'include/runnerJS/viewControls/ViewControl.js');
			$this->getJSControl();
			foreach ($this->settings as $settingName => $settingValue)
				$this->addJSControlSetting($settingName, $settingValue);
		}
	}
	/**
	 * Control settings filling
	 */
	public function init()
	{
		$this->userControl = true;
		
		// We need to add this dependencies ViewControl.js - for debug.
		// For build we need to add RunnerAll.js
		//$this->AddJSFile("include/runnerJS/controls/".$this->viewFormat.".js", 'include/runnerJS/viewControls/ViewControl.js');
		
					if($this->container->tName=="cat_trabajadores_imprimir_gafete" && $this->field=="cat_trabajadores_altas_id")
		{
			// barcode type
// available options: "UPC-A", "EAN-13", "EAN-8", "UPC-E", 
// "STANDARD 2 OF 5", "INDUSTRIAL 2 OF 5", "INTERLEAVED", 
// "POSTNET", "CODABAR", "CODE128", "CODE39", "CODE93"

$this->settings["encode"] = "CODE39";

// barcode height in pixels
$this->settings["height"] = 50;

// scale. 2 is default, 1 - smaller image, 3 - large image
$this->settings["scale"] = 2;

// background color
$this->settings["bgcolor"] = "#FFFFEC";

// barcode color
$this->settings["color"] = "#333366";;
		}	
	}

	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "", $html = false )
	{
		return $data[ $this->field ];
	}
	
	/**
	 * Check for need to load the javascript files.
	 * Javascript files for user controls are always loaded.
	 * @return boolean
	 */
	public function neededLoadJSFiles() 
	{
		return true;
	}
	public function getPdfValue(&$data, $keylink = "")
	{
		return "''";
	}

}
?>