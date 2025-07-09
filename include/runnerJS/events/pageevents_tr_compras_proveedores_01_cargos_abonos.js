
Runner.pages.PageSettings.addPageEvent('tr_compras_proveedores_01_cargos_abonos',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrUUID=Runner.getControl(pageid,'uuid_cargo_abono_compra');var ctrUUID2=Runner.getControl(pageid,'llave_unica_cargo_abono_tr_compras_requisiciones_01_uuid_pago');var ctrVariable01=Runner.getControl(pageid,'cat_compras_proveedores_id');function generateUUID(){var d=new Date().getTime();var d2=(typeof performance!=="undefined"&&performance.now&&performance.now()*1000)||0;return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(c){var r=Math.random()*16;if(d>0){r=(d+r)%16|0;d=Math.floor(d/16);}else{r=(d2+r)%16|0;d2=Math.floor(d2/16);}
return(c==="x"?r:(r&0x3)|0x8).toString(16);});}
function uuid(){ctrUUID.setValue(generateUUID());}
function uuid(){ctrUUID2.setValue(generateUUID());}
ctrVariable01.on('change',uuid);this.on('afterInlineAdd',function(fieldsData){pageObj.reload({});});});