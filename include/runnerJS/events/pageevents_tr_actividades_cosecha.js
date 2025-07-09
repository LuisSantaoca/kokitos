
Runner.pages.PageSettings.addPageEvent('tr_actividades_cosecha',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrUUID=Runner.getControl(pageid,'tr_actividades_cosecha_uuid');var ctr_01=Runner.getControl(pageid,'cat_trabajador_altas_id');var generatedCodes=[];function generateRandomCode(){var characters='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';var result='';for(var i=0;i<10;i++){result+=characters.charAt(Math.floor(Math.random()*characters.length));}
return result;}
function uniqueRandomCode(){var code;do{code=generateRandomCode();}while(generatedCodes.includes(code));generatedCodes.push(code);return code;}
function setUniqueCode(){ctrUUID.setValue(uniqueRandomCode());}
ctr_01.on('change',setUniqueCode);});