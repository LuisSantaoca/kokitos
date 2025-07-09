Runner.buttonEvents["New_Button1"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button1';
	
	if ( !pageObj.buttonEventBefore['New_Button1'] ) {
		pageObj.buttonEventBefore['New_Button1'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

    // Crear el contenedor del modal
    var modal = document.createElement('div');
    modal.id = 'myModal';
    modal.style.display = 'none'; // Oculto por defecto
    modal.style.position = 'fixed';
    modal.style.zIndex = '1';
    modal.style.left = '0';
    modal.style.top = '0';
    modal.style.width = '100%';
    modal.style.height = '100%';
    modal.style.overflow = 'auto';
    modal.style.backgroundColor = 'rgba(0,0,0,0.4)'; // Fondo con opacidad
    document.body.appendChild(modal);

    // Crear el contenido del modal
    var modalContent = document.createElement('div');
    modalContent.style.backgroundColor = '#fefefe';
    modalContent.style.margin = '10% auto';
    modalContent.style.padding = '20px';
    modalContent.style.border = '1px solid #888';
    modalContent.style.width = '50%';
    modalContent.style.borderRadius = '8px';
    modalContent.style.boxShadow = '0 5px 15px rgba(0,0,0,0.3)';
    modal.appendChild(modalContent);

    // Crear el botón de cerrar
    var closeBtn = document.createElement('span');
    closeBtn.innerHTML = '&times;';
    closeBtn.style.color = '#aaa';
    closeBtn.style.float = 'right';
    closeBtn.style.fontSize = '28px';
    closeBtn.style.fontWeight = 'bold';
    closeBtn.style.cursor = 'pointer';
    closeBtn.style.marginTop = '-10px';
    closeBtn.style.marginRight = '-10px';
    modalContent.appendChild(closeBtn);

    // Crear el label para el textarea
    var label = document.createElement('label');
    label.setAttribute('for', 'modalTextarea');
    label.innerText = 'Ingresa JSON:';
    label.style.display = 'block';
    label.style.marginBottom = '10px';
    label.style.fontWeight = 'bold';
    modalContent.appendChild(label);

    // Crear el textarea
    var textarea = document.createElement('textarea');
    textarea.id = 'modalTextarea';
    textarea.rows = 10;
    textarea.cols = 50;
    textarea.style.width = '100%';
    textarea.style.padding = '10px';
    textarea.style.border = '1px solid #ccc';
    textarea.style.borderRadius = '4px';
    textarea.style.boxSizing = 'border-box';
    modalContent.appendChild(textarea);

    // Crear contenedor para botón de enviar y loader
    var sendContainer = document.createElement('div');
    sendContainer.style.display = 'flex';
    sendContainer.style.alignItems = 'center';
    sendContainer.style.marginTop = '20px';
    modalContent.appendChild(sendContainer);

    // Crear el botón de enviar
    var sendBtn = document.createElement('button');
    sendBtn.id = 'sendBtn';
    sendBtn.innerText = 'Enviar';
    sendBtn.style.padding = '10px 20px';
    sendBtn.style.backgroundColor = '#4CAF50';
    sendBtn.style.color = 'white';
    sendBtn.style.border = 'none';
    sendBtn.style.borderRadius = '4px';
    sendBtn.style.cursor = 'pointer';
    sendBtn.style.fontSize = '16px';
    sendContainer.appendChild(sendBtn);

    // Estilo del botón de enviar al pasar el ratón
    sendBtn.onmouseover = function() {
        sendBtn.style.backgroundColor = '#45a049';
    };

    sendBtn.onmouseout = function() {
        sendBtn.style.backgroundColor = '#4CAF50';
    };

    // Crear el loader (inicialmente oculto)
    var loader = document.createElement('div');
    loader.id = 'loader';
    loader.style.display = 'none';
    loader.style.marginLeft = '10px';
    loader.style.border = '4px solid #f3f3f3';
    loader.style.borderTop = '4px solid #3498db';
    loader.style.borderRadius = '50%';
    loader.style.width = '20px';
    loader.style.height = '20px';
    loader.style.animation = 'spin 2s linear infinite';
    sendContainer.appendChild(loader);

    // Añadir animación al loader
    var style = document.createElement('style');
    style.type = 'text/css';
    style.innerHTML = '@keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } } ';
    document.head.appendChild(style);

    // Función para cerrar el modal
    closeBtn.onclick = function() {
        modal.style.display = 'none';
    };

    // Función para enviar el texto y cerrar el modal
    sendBtn.onclick = function() {
        var textareaValue = textarea.value;
        var datos = {
            registros: textareaValue,
				base: 'kokitos',
				tipo: 'asistencias'
        };
        console.log("Texto enviado: " + JSON.stringify(datos));

        // Desactivar el botón de enviar y mostrar el loader
        sendBtn.disabled = true;
        loader.style.display = 'inline-block';

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "https://back20.intelagro.net/asistencia_frontal", true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                // Reactivar el botón de enviar y ocultar el loader
                sendBtn.disabled = false;
                loader.style.display = 'none';

                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    console.log("Success:", response);

                    // Limpiar el contenido actual del modal
                    modalContent.innerHTML = '';

                    // Crear nuevo contenido del modal con la respuesta del servidor
                    var newCloseBtn = document.createElement('span');
                    newCloseBtn.innerHTML = '&times;';
                    newCloseBtn.style.color = '#aaa';
                    newCloseBtn.style.float = 'right';
                    newCloseBtn.style.fontSize = '28px';
                    newCloseBtn.style.fontWeight = 'bold';
                    newCloseBtn.style.cursor = 'pointer';
                    newCloseBtn.style.marginTop = '-10px';
                    newCloseBtn.style.marginRight = '-10px';
                    modalContent.appendChild(newCloseBtn);
                    newCloseBtn.onclick = closeBtn.onclick;

                    var title = document.createElement('h2');
                    title.innerText = response.mess;
                    modalContent.appendChild(title);

                    var codeP = document.createElement('p');
                    codeP.innerText = 'Código: ' + response.code;
                    modalContent.appendChild(codeP);

                    var estadoP = document.createElement('p');
                    estadoP.innerText = 'Estado: ' + response.estado;
                    modalContent.appendChild(estadoP);
                } else {
                    console.error("Error:", xhr.statusText);
                }
            }
        };

        xhr.send(JSON.stringify(datos));
    };

    // Cerrar el modal si el usuario hace clic fuera del modal
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
    
    modal.style.display = 'block';


		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button1'] ) {
		pageObj.buttonEventAfter['New_Button1'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;

		}
	}
	
	$('a[id="New_Button1"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button1" + "_" + Runner.genId();
		
		// create object
		var button_New_Button1 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button1"
		});
		
		// init
		button_New_Button1.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

