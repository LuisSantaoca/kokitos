
Runner.pages.PageSettings.addPageEvent('cat_nominas_01_generales_llaves_st',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrUUID=Runner.getControl(pageid,'cat_nominas_01_generales_uuid');var ctrVariable01=Runner.getControl(pageid,'descripcion_nomina');function generateUUID(){var d=new Date().getTime();var d2=(typeof performance!=="undefined"&&performance.now&&performance.now()*1000)||0;return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(c){var r=Math.random()*16;if(d>0){r=(d+r)%16|0;d=Math.floor(d/16);}else{r=(d2+r)%16|0;d2=Math.floor(d2/16);}
return(c==="x"?r:(r&0x3)|0x8).toString(16);});}
function uuid(){ctrUUID.setValue(generateUUID());}
ctrVariable01.on('change',uuid);});