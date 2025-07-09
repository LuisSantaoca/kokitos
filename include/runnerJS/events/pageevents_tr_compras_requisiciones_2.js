
Runner.pages.PageSettings.addPageEvent('tr_compras_requisiciones_2',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){if(!pageObj.myAfterInline){this.on('afterInlineAdd',function(fieldsData){pageObj.reload({});});pageObj.myAfterInline=true;}
var ctrl=Runner.getControl(pageid,'check_compra_directa');if(ctrl.getValue()==0)
pageObj.hideField("cat_compras_proveedores_id");ctrl.on('change',function(){if(this.getValue()==1){pageObj.showField("fecha_de_compra");}
else{pageObj.hideField("capturista_que_autoriza");}});var ctrl=Runner.getControl(pageid,'total_productos');if(ctrl.getValue()=="0")
pageObj.hideField("capturista_que_autoriza");ctrl.on('change',function(){if(this.getValue()>"0"){pageObj.showField("total_productos");}
else{pageObj.hideField("capturista_que_autoriza");}});var ctrUUID=Runner.getControl(pageid,'tr_compras_requisiciones_01_uuid');var ctrMovimiento=Runner.getControl(pageid,'cat_trabajadores_altas_id_solicitante');function generateUUID(){var d=new Date().getTime();var d2=(typeof performance!=="undefined"&&performance.now&&performance.now()*1000)||0;return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(c){var r=Math.random()*16;if(d>0){r=(d+r)%16|0;d=Math.floor(d/16);}else{r=(d2+r)%16|0;d2=Math.floor(d2/16);}
return(c==="x"?r:(r&0x3)|0x8).toString(16);});}
function uuid(){ctrUUID.setValue(generateUUID());}
ctrMovimiento.on('change',uuid);});Runner.pages.PageSettings.addPageEvent('tr_compras_requisiciones_2',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){});Runner.pages.PageSettings.addPageEvent('tr_compras_requisiciones_2',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrlEstatus=Runner.getControl(pageid,'cat_compras_estatus_mu_id');var ctrlAutoriza=Runner.getControl(pageid,'capturista_que_autoriza');function func(){ctrlEstatus.setValue(6);};ctrlAutoriza.on('change',func);var check=Runner.getControl(pageid,'total_productos');if(check.getValue()=="0"){alert("Si no hay productos no se puede asignar la autorización");}
else{return 0;}
var ctrl=Runner.getControl(pageid,'total_productos');if(ctrl.getValue()=="0")
pageObj.hideField("capturista_que_autoriza");ctrl.on('change',function(){if(this.getValue()>"0"){pageObj.showField("total_productos");}
else{pageObj.hideField("capturista_que_autoriza");}});});