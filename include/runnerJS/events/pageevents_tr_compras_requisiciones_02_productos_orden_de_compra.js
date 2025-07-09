
Runner.pages.PageSettings.addPageEvent('tr_compras_requisiciones_02_productos_orden_de_compra',Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var check=Runner.getControl(pageid,"autorizado_check");if(check.getValue()=="1"){alert("tienes productos sin autorizar");}
else{return 0;}});