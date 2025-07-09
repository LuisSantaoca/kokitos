<?php

	// create menu nodes arr
	$menuNodes = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "Nomina";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Nomina";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "385";
	$menuNode["name"] = "Pre Nomina";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Pre Nomina";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "386";
	$menuNode["name"] = "Generar pre nomina";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_nominas_01_generales";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "385";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Generar pre nomina";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "330";
	$menuNode["name"] = "Configuracion Nomina";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Configuracion Nomina";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "364";
	$menuNode["name"] = "Actividades";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "330";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Actividades";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "21";
	$menuNode["name"] = " Actividades catalogo";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_actividades";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "364";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-calendar";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = " Actividades catalogo";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "351";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_actividades_especificas";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "364";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Actividad especifica";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "25";
	$menuNode["name"] = "Unidad de costo";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_actividades_unidades_de_costo";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "364";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-briefcase";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Unidad de costo";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "26";
	$menuNode["name"] = "Conceptos de nomina";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_nominas_conceptos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "364";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Conceptos de nomina";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "365";
	$menuNode["name"] = "Productos";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_produccion_cultivos_01_productos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "364";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Productos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "379";
	$menuNode["name"] = "Generar nomina";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "330";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Generar nomina";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "3";
	$menuNode["name"] = "UUID Nominas";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_nominas_01_generales";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "379";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-hand-right";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "UUID Nominas";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "381";
	$menuNode["name"] = "Fechas trabajadas";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_nominas_asistencias_fechas";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "379";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Fechas trabajadas";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "20";
	$menuNode["name"] = "Semanas UUID";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_nominas_uuid_semana";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "379";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-hand-right";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Semanas UUID";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "382";
	$menuNode["name"] = "Pre nomina";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_nominas_uuid_semana";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "379";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Pre nomina";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "357";
	$menuNode["name"] = "Trabajadores";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "330";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Trabajadores";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "347";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_trabajadores_altas";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "357";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Trabajadores Altas";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "373";
	$menuNode["name"] = "Trabajadores tabulador";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_trabajadores_tabulador";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "357";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-barcode";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Trabajadores tabulador";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "405";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_trabajadores_puestos_historico";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "357";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Puestos Historico";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "352";
	$menuNode["name"] = "Estado civil";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_trabajadores_estado_civil_mu";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "357";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-earphone";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Estado civil";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "353";
	$menuNode["name"] = "Local/Foraneo";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_trabajadores_local_foraneo_mu";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "357";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Local/Foraneo";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "354";
	$menuNode["name"] = "Sangre";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_trabajadores_sangre_mu";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "357";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Sangre";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "355";
	$menuNode["name"] = "Sexo";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_trabajadores_sexo_mu";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "357";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Sexo";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "356";
	$menuNode["name"] = "Tipo de pago";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_trabajadores_tipo_de_pago";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "357";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Tipo de pago";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "358";
	$menuNode["name"] = "Puestos";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_trabajadores_puestos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "357";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Puestos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "375";
	$menuNode["name"] = "Ranchos";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "330";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Ranchos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "376";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_holding_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "375";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Holdign";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "422";
	$menuNode["name"] = "Lotes historico";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_holding_04a_unidades_productivas_lotes_historico";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "375";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Lotes historico";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "377";
	$menuNode["name"] = "Predios";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_holding_03_empresas_up_group_predios";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "375";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-barcode";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Predios";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "407";
	$menuNode["name"] = "Variedades";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_produccion_variedades";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "375";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Variedades";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "423";
	$menuNode["name"] = "Lotes inf";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_holding_04_unidades_productivas_lotes_inf";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "375";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-calendar";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Lotes inf";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "360";
	$menuNode["name"] = "Movimientos";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Movimientos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "369";
	$menuNode["name"] = "tags";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "360";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "tags";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "368";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_tags";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "369";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Tr Tags";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "371";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_tags_maestro";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "369";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Tr Tags Maestro";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "383";
	$menuNode["name"] = "Tags cosecha detalle";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_cosecha_detalle_tags";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "369";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-shopping-cart";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Tags cosecha detalle";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "361";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_asistencias_app";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "360";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Asistencias";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "359";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_cosecha";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "360";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-leaf";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Cosecha";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "366";
	$menuNode["name"] = "Cosecha consecutivo";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_cosecha_consecutivo";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "360";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Cosecha consecutivo";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "391";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_cosecha_ranking_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "360";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Ranking 01";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "362";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_culturales_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "360";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Actividades Culturales";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "411";
	$menuNode["name"] = "Destajos";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_destajos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "360";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Destajos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "398";
	$menuNode["name"] = "Informes";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Informes";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "403";
	$menuNode["name"] = "Asistencias";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_asistencias_app_inf";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "398";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Asistencias";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "404";
	$menuNode["name"] = "Inasistencias";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_asistencias_app_inf_inasistencias";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "398";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Inasistencias";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "408";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_asistencias_app_inf_horas_extras";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "398";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-shopping-cart";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Horas extras";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "409";
	$menuNode["name"] = "Asistencia destajo cosecha";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_trabajadores_altas_inf_destajo_cosecha";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "398";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-tree-conifer";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Asistencia destajo cosecha";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "148";
	$menuNode["name"] = "Almacenes";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Almacenes";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "340";
	$menuNode["name"] = "Catalogos";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "148";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Catalogos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "416";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_productos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "340";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Productos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "415";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_proveedores";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "340";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Proveedores";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "420";
	$menuNode["name"] = "Almacenes";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_almacenes";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "340";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Almacenes";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "412";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_almacenes_01_recibo_lpn";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "148";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-leaf";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Recibo Lpn";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "413";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_almacenes_01_salida_lpn";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "148";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Salida Lpn";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "54";
	$menuNode["name"] = "Compras";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Compras";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "55";
	$menuNode["name"] = "Requisiciones";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "54";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Requisiciones";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "56";
	$menuNode["name"] = "Solicitudes";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_requisiciones_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "55";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-tree-conifer";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Solicitudes";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "57";
	$menuNode["name"] = "Autorizaciones";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_requisiciones_01_autorizacion_user";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "55";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-shopping-cart";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Autorizaciones";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "58";
	$menuNode["name"] = "Orden de compra";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_requisiciones_01_orden_de_compra";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "55";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-calendar";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Orden de compra";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "319";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_requisiciones_01_estatus";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "55";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-shopping-cart";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Requisiciones estatus";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "68";
	$menuNode["name"] = "Compras y pagos";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "54";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Compras y pagos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "69";
	$menuNode["name"] = "Compras y pagos";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_proveedores_01_cargos_abonos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "68";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-camera";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Compras y pagos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "321";
	$menuNode["name"] = "Consultar OC en PDF";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_proveedores_01_cargos_abonos_oc_pdf";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "68";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("Report");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-earphone";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Consultar OC en PDF";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "325";
	$menuNode["name"] = "Solo Pagos";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_proveedores_01_cargos_abonos_pagos_edit";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "68";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-fire";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Solo Pagos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "72";
	$menuNode["name"] = "Subs";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "68";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Subs";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "73";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_proveedores_01_cargos_abonos_pagos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-camera";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Cargos/Pagos a proveedores";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "74";
	$menuNode["name"] = "Cargos/Pagos CCs";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_proveedores_02_cargos_abonos_centros_de_costos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-calendar";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Cargos/Pagos CCs";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "75";
	$menuNode["name"] = "Cargos/Pagos Movimientos";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_proveedores_02_cargos_abonos_movimientos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "72";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-barcode";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Cargos/Pagos Movimientos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "61";
	$menuNode["name"] = "Facturas SAT";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "54";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Facturas SAT";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "62";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_facturas_sat_02_carga_masiva";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "61";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Sat carga masiva";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "322";
	$menuNode["name"] = "Facturas no registradas";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_facturas_sat_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "61";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Facturas no registradas";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "324";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_compras_facturas_sat_01_estatus";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "61";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-briefcase";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Facturas estatus";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "76";
	$menuNode["name"] = "Catalogos";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "54";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Catalogos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "77";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_proveedores";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "76";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-earphone";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Proveedores";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "78";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_proveedores_sat";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "76";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-headphones";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = " Proveedores Sat";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "79";
	$menuNode["name"] = "Proveedores Categorias";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_proveedores_categorias";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "76";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-barcode";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Proveedores Categorias";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "80";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_productos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "76";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-leaf";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Productos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "81";
	$menuNode["name"] = "Productos precios";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_productos_precios";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "76";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-camera";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Productos precios";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "431";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_productos_permitidos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "76";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-briefcase";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Cat Compras Productos Permitidos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "83";
	$menuNode["name"] = "Productos Categorias";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_productos_categorias";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "76";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-headphones";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Productos Categorias";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "84";
	$menuNode["name"] = "Bancos";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Bancos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "85";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_finanzas_bancos_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "84";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Bancos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "87";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_finanzas_aportaciones_socios_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "84";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Aportaciones Socios";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "88";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_finanzas_tipo_de_cambio";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "84";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-tree-conifer";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Tipo de cambio";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "90";
	$menuNode["name"] = "Catalogos";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "84";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Catalogos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "91";
	$menuNode["name"] = "Cuentas bancarias";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_finanzas_bancos_cuentas";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "90";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-headphones";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Cuentas bancarias";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "92";
	$menuNode["name"] = "Cajas chicas";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_finanzas_cajas_chicas";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "90";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-calendar";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Cajas chicas";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "93";
	$menuNode["name"] = "Finanzas";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Finanzas";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "94";
	$menuNode["name"] = "Catalogo de cuentas";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "93";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Catalogo de cuentas";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "95";
	$menuNode["name"] = "Holding";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_holding_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-barcode";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Holding";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "96";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_finanzas_movimientos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Movimientos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "97";
	$menuNode["name"] = "Movimientos categorias";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_finanzas_movimientos_categoria";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-calendar";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Movimientos categorias";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "98";
	$menuNode["name"] = "Movimientos subcategorias";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_finanzas_movimientos_categoria_sub";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-shopping-cart";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Movimientos subcategorias";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "99";
	$menuNode["name"] = "Cuentas de balance";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_finanzas_cuentas_de_balance_01_mu";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-headphones";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Cuentas de balance";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "100";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_finanzas_cuentas_de_balance_04";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Balance nivel 4 Afectables";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "101";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_finanzas_centros_de_costos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Centro de Costos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "102";
	$menuNode["name"] = "Socios";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_finanzas_socios";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "94";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Socios";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "434";
	$menuNode["name"] = "Nomina V2";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Nomina V2";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "454";
	$menuNode["name"] = "Pre Nomina";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "434";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Pre Nomina";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "453";
	$menuNode["name"] = "Generar Prenomina";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_prenomina";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "454";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-tree-conifer";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Generar Prenomina";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "450";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "puestos horarios";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "434";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Puestos Horarios";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "438";
	$menuNode["name"] = "Horarios";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "aux_horarios";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "434";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Horarios";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "440";
	$menuNode["name"] = "Feriados";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_nominas_feriados";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "434";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Feriados";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "442";
	$menuNode["name"] = "Actividades Precios";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "aux_actividades_precios";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "434";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Actividades Precios";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "444";
	$menuNode["name"] = "Dias para bono";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "aux_dias_bonos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "434";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Dias para bono";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "446";
	$menuNode["name"] = "Incidencias Justificables";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "aux_incidencias_justificables";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "434";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Incidencias Justificables";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "448";
	$menuNode["name"] = "Justificantes Bonos";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "aux_nomina_justificantes_bonos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "434";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Justificantes Bonos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "103";
	$menuNode["name"] = "Producción";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Producción";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "342";
	$menuNode["name"] = "Catalogos";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "103";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Catalogos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "346";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Bancos detalle";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "342";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Bancos Detalle";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "343";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_holding_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "342";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Holdign";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "452";
	$menuNode["name"] = "Proceso";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_produccion_proceso";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "342";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Proceso";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "313";
	$menuNode["name"] = "Control";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "103";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Control";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "104";
	$menuNode["name"] = "Planeacion";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "103";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Planeacion";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "309";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_planeacion_app";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "104";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-calendar";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Planeación actividades";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "311";
	$menuNode["name"] = "Subs";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "103";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Subs";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "310";
	$menuNode["name"] = "Planeacion lotes";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_planeacion_app_02";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "311";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-leaf";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Planeacion lotes";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "312";
	$menuNode["name"] = "Asignacion de tareas";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_planeacion_tareas_app";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "311";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-tree-conifer";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Asignacion de tareas";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "151";
	$menuNode["name"] = "Ventas";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Ventas";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "432";
	$menuNode["name"] = "Salidas de Rancho";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tr_actividades_cosecha_salidas_01";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "151";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-briefcase";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Salidas de Rancho";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "152";
	$menuNode["name"] = "Catalogos";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "151";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Catalogos";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "153";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_ventas_clientes";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "152";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-barcode";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = "Clientes";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "427";
	$menuNode["name"] = "Productos venta sku";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_ventas_productos_sku";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "152";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Productos venta sku";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "428";
	$menuNode["name"] = "Variedades";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_ventas_productos_variedades";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "152";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Variedades";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "154";
	$menuNode["name"] = "Compras";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "152";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = strtolower("");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Compras";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "155";
	$menuNode["name"] = "Compras Almacenes";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_compras_almacenes";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "154";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";
	$menuNode["iconShow"] = "1";

		$menuNode["color"] = "";

	$menuNode["title"] = "Compras Almacenes";



	$menuNodes[] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "455";
	$menuNode["name"] = " Productos Precios";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "cat_ventas_productos_precios";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "152";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = strtolower("List");//
	$menuNode["pageId"] = "";
	$menuNode["openType"] = "None";

	$menuNode["icon"] = "glyphicon-hand-right";
	$menuNode["iconType"] = "2";
	$menuNode["iconShow"] = "2";

		$menuNode["color"] = "";

	$menuNode["title"] = " Productos Precios";



	$menuNodes[] = $menuNode;
	$menuNodesCache[ "main" ] = $menuNodes;
?>