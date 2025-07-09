
Runner.pages.PageSettings.addPageEvent('tr_actividades_culturales_01',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrUUID=Runner.getControl(pageid,'tr_actividades_culturales_01_uuid');var ctr_01=Runner.getControl(pageid,'cat_actividades_especificas_id');function generateUUID(){var d=new Date().getTime();var d2=(typeof performance!=="undefined"&&performance.now&&performance.now()*1000)||0;return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(c){var r=Math.random()*16;if(d>0){r=(d+r)%16|0;d=Math.floor(d/16);}else{r=(d2+r)%16|0;d2=Math.floor(d2/16);}
return(c==="x"?r:(r&0x3)|0x8).toString(16);});}
function uuid(){ctrUUID.setValue(generateUUID());}
ctr_01.on('change',uuid);});