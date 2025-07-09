<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["BeforeShowMenu"]=true;


//	onscreen events
		$this->events["tr_activiades_sector_dia_nb_nb_mapa_map"] = true;
		$this->events["tr_control_suelo_hum_temp_app_mapa_minutos_map"] = true;
		$this->events["tr_prenomina_snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		//$userData = Security::getUserName();
//$rs_fdz = DB::Query("select * from tr_compras_requisiciones_01 where(cat_compras_estatus_mu_id = 1) and (tr_compras_requisiciones_01.vigente = 1) ");
//$data_fdz=$rs_fdz->fetchAssoc();
//if($data_fdz){addNotification( "Tienes requisiciones nuevas"  , "Requisiciones" , "fa-envelope" , makePageLink( "tr_compras_requisiciones_01" , "list" , $keys), 24 ,'fdeztest', $provider = null );} 
//else{} 
//********************************************************************parte 1(luis)**********************************************************
//$rs = DB::Query("select * from tr_compras_requisiciones_01 where(cat_compras_estatus_mu_id != 3) and (tr_compras_requisiciones_01.capturista_que_autoriza = 'luis') ");
//$data=$rs->fetchAssoc();
//if($data){addNotification( "Tienes requisiciones por autorizar"  , "Autorizaciones" , "fa-envelope" , makePageLink( "tr_compras_requisiciones_01_autorizacion_user" , "list" , $keys), $expire = 2,'luis', $provider = null );} 
//else{}    
//********************************************************************parte 2(laura)**********************************************************
//$rs = DB::Query("select * from tr_compras_requisiciones_01 where(cat_compras_estatus_mu_id != 3) and (tr_compras_requisiciones_01.capturista_que_autoriza = 'luis') ");
//$data=$rs->fetchAssoc();
//if($data){addNotification( "Tienes requisiciones por autorizar"  , "Autorizaciones" , "fa-envelope" , makePageLink( "tr_compras_requisiciones_01_autorizacion_user" , "list" , $keys), $expire = 2,'juana', $provider = null );} 
//else{}   
$sql = DB::prepareSQL("
SELECT
cat_usuarios_id,
usuario,
cat_usuarios_licencias_id
FROM cat_usuarios
WHERE usuario =
':session.userid'
");
DB::Exec( $sql );
$_SESSION["licencia"] = $data["cat_usuarios_licencias_id"];
$_SESSION["usuario"] = $data["usuario"];



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowMenu(&$xt, &$templatefile, $pageObject)
{

		



if ($_SESSION["licencia"] != "19")
{
$pageObject->hideItem("btn_update_usuarios");
$pageObject->hideItem("menu_licencias");
$pageObject->hideItem("menu_usuarios");
$pageObject->hideItem("menu_usuarios_modulos");
$pageObject->hideItem("menu_usuarios_modulos_detalle");


}

if ($_SESSION["UserID"] == "santaoca") {
    $pageObject->hideItem("intelagro_logo");
    $pageObject->hideItem("intelagro_logito");
} else {
    $pageObject->hideItem("galex_logo");
    $pageObject->hideItem("galex_nave");
}




// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function BeforeShowMenu

		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_tr_prenomina_snippet(&$params)
	{
	$strSQL = "select 
        periodo,
        fecha_de_inicio
    from 
        cat_nominas_uuid_semana 
    where 
        fecha_de_inicio <= '" . date("Y-m-d") . "'
    order by fecha_de_inicio desc limit 15";

$rs = db_query($strSQL);

$str = "<select id='selectButton' style='width: auto;'>";
while ($data = db_fetch_array($rs)) {
    $str .= "<option value='" . $data["fecha_de_inicio"] . "'>" . $data["periodo"] . "</option>";
}

$rs = DB::Query("select min(fecha) as cur_date from cat_trabajadores_activos_periodos");

$curDate = $rs->value('cur_date');

$str = '
<div>
    <p>Actualizar periodo<p>
    <div>
' . $str;

$str .= "</select>
    <input type='checkbox' id='force'>
    <label for='force' style='font-size: small;'>
        Forzar la detención de procesos actuales
    </label>
    <button id='updateButton'>Actualizar</button>
    <button id='saveHistoryButton'>Guardar histórico</button>
</div>
</div>
<script>
const SERVICE_URL = window.location.host != 'localhost:8086' ? 'https://faas-nyc1-2ef2e6cc.doserverless.co/api/v1/web/fn-d26991ac-b18e-442e-be36-68e8ab46854b' : 'https://faas-nyc1-2ef2e6cc.doserverless.co/api/v1/web/fn-d26991ac-b18e-442e-be36-68e8ab46854b';
//const SERVICE_URL = 
let task;
const HEADERS = {
    'Content-Type': 'application/json'
}

async function callStartProcess(date) {
    response = await new Promise((resolve, reject) => {
        force = document.getElementById('force');

        payload = {
            date: formatDate(date),
            force: force.checked
        };

        const url = SERVICE_URL + '/Nomina/payrollStart';

        fetch(url, {
                method: 'POST',
                body: JSON.stringify(payload),
                mode: 'cors',
                headers: HEADERS
            })
            .then(response => {
                status = response.status
                if (status == 202) {
                    resolve(response.json())
                } else {
                    reject(response.json())
                }
            })
            .catch(error => {
                console.log('handler error', error)
                reject('error:' + error)
            })
    })
    return response
}

async function getServiceStatus(task) {
    latency = 2000
    await request()
        .then(
            response => {
                recall = false;
                swalOptions = {
                    closeOnClickOutside: false,
                    closeOnEsc: false,
                }
									console.log('response', response)
                response = response
                OverallStatus = response?.activity_status;
                if (OverallStatus == 2 || OverallStatus == 3) {
                    recall = true
                    swalOptions.buttons = false
                } else {
                    recall = false
                    if (OverallStatus == 1) {
                        swalOptions.type = 'success'
                    } else {
                        swalOptions.type = 'error'
                    }
                }
                switch (OverallStatus) {
                    case 2:
                        message = response.message;
                        break;
                    case 1:
                        message = 'Actualización finalizada';
                        setTimeout(()=>window.location.reload(),1500)
                        break;
                    case 0:
                        message = 'No se pudo realizar la actualización, por favor intentalo de nuevo, mensaje: \\n' + response.message;
                        break
                    case 3:
                        message = 'response.message \\n' + response.registros_actualizados ?? 0 + ' de ' + response.registros_del_evento
                        break
                    case -1:
                        message = response.message
                        break
                    default:
                        message = 'Estatus de respuesta no controlado (' + response.activity_status + ')'
                        console.error('respuesta ' + response)
                }
                if (recall) {
                    setTimeout(getServiceStatus, latency, task);
                }
                swalOptions.text = message
                swal('ACTUALIZANDO NOMINA', swalOptions)
            }
        ).catch(
            error => {
                console.error(error)
                swal('HA OCURRIDO UN PROBLEMA', error, 'error')
            }
        )

    async function request() {
        return await new Promise((resolve, reject) => {
            const url = SERVICE_URL + '/Nomina/payrollStatus';
            fetch(url, {
                    method: 'POST',
                    body: JSON.stringify({
                        task: task
                    }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    resolve(response.json())
                })
                .catch(error => {
                    reject(error)
                })
        })
    }
}

async function saveHistory() {
    try {
        swal({
            title: 'Guardando histórico',
            text: 'Por favor, espere mientras se guarda el histórico...',
            buttons: false,
            closeOnClickOutside: false,
            closeOnEsc: false
        });

        const response = await fetch('https://back20.intelagro.net/nominas/historico?base=kokitos', {
            method: 'GET',
            headers: HEADERS
        });

        const result = await response.json();

        swal({
            title: 'Resultado',
            text: result.message,
            icon: response.ok ? 'success' : 'error'
        });
    } catch (error) {
        swal({
            title: 'Error',
            text: 'Ocurrió un error al guardar el histórico: ' + error.message,
            icon: 'error'
        });
    }
}

if ('$curDate') { selectButton.value = '$curDate' }

document.getElementById('updateButton').addEventListener('click', async function() {
    console.log('calling real process ')
    let el = document.createElement('div');
    el.innerHTML = '<b>PERIODO ' + selectButton.childNodes[ selectButton.selectedIndex].text + '</b>'
    swal('INICIANDO ACTUALIACION:', {
        closeOnClickOutside: false,
        closeOnEsc: false,
        content: el,
        buttons: false
    })

    await callStartProcess(selectButton.value)
        .then(response => {
            task = response?.id;
            if (task) {
                getServiceStatus(task)
            } else {
                console.log('taskid' + task)
                swal('ACTUALIZANDO PERIODO ' + selectButton.childNodes[ selectButton.selectedIndex].text, {
                    title: 'RESPUESTA INVALIDA',
                    text: 'El servicio ha arrojado una respuesta invalida: ' + JSON.stringify(response),
                    type: 'error'
                })

            }
        })
        .catch(error => {
            let message = error?.message
            try {
                if (!message) {
                    message = JSON.stringify(error)
                }
            } catch (otherError) {
                console.error(otherError)
                message = 'Error no controlado ' + otherError
            }
            swal({
                title: 'ACTUALIZACION CANCELADA',
                text: message,
                type: 'warning'
            })
        })
})

document.getElementById('saveHistoryButton').addEventListener('click', saveHistory);

function formatDate(inputDate) {
    const parts = inputDate.split('-');
    if (parts.length === 3) {
        const year = parts[0].padStart(2, '0'); // Ensures double digits for month
        const month = parts[1].padStart(2, '0'); // Ensures double digits for day
        const day = parts[2];

        // Format the date to yyyy/mm/dd
        const formattedOutput = year + '/' + month + '/' + day;
        return formattedOutput;
    } else {
        return 'Invalid date format! Please use mm/dd/yyyy.';
    }
}
</script>
";

echo $str;
	;
}

	function event_tr_activiades_sector_dia_nb_nb_mapa_map(&$params)
	{
		$mapSettings['id'] = "tr_activiades_sector_dia_nb_nb_mapa_map";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "UP";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Lat";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Lng";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Geolocalización'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
 $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
// $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
// $mapSettings['currentLocationIcon'] = "images/smile.png";


DisplayMap($mapSettings);
	;
}
	function event_tr_control_suelo_hum_temp_app_mapa_minutos_map(&$params)
	{
		$mapSettings['id'] = "tr_control_suelo_hum_temp_app_mapa_minutos_map";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
//$mapSettings["addressField"] = "Address";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "lat";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "lng";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
// $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
// $mapSettings['currentLocationIcon'] = "images/smile.png";


DisplayMap($mapSettings);
	;
}



}
?>
