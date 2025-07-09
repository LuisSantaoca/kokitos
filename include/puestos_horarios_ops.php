<?php
$topspuestos_horarios = array();
		$topspuestos_horarios["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO `tr_prenomina` (
	`llave_trab_fecha`,
	`origen_del_dato`,
	`anio_semana`,
	`cat_trabajador_altas_id`,
	`cat_trabajadores_altas_id_empresa`,
	`nombre`,
	`fecha`,
	`id_puesto`,
	`puesto`,
	`dia_semana`,
	`cosecha_asist`,
	`destajo_asist`,
	`asistencias_app`,
	`asistencia`,
	`dias_trabajados`,
	`justific`,
	`justific_totales`,
	`dias_totales`,
	`hora_de_ingreso`,
	`hora_de_salida`,
	`hn_matutino`,
	`hn_redondeadas`,
	`hn_vespertino`,
	`valor_hora_extra`,
	`total_horas_extra`,
	`botes_frambuesa`,
	`botes_zarzamora`,
	`sueldo_puesto`,
	`pago_hn_matutino`,
	`pago_hn_vesp`,
	`destajo`,
	`pago_cosecha`,
	`pago_he`,
	`prima_dom`,
	`sueldo_variable`,
	`suledo_variable_cosecha`,
	`sueldo_diario`,
	`configuación`,
	`bono`,
	`bono_nuevos`,
	`feriado`,
	`dia_ingreso`,
	`dias_trab_ingreso`,
	`total`,
	`cultivo`
)
VALUES
(
	':{new.llave_trab_fecha}',
	':{new.origen_del_dato}',
	':{new.anio_semana}',
	:{new.cat_trabajador_altas_id},
	':{new.cat_trabajadores_altas_id_empresa}',
	':{new.nombre}',
	':{new.fecha}',
	:{new.id_puesto},
	':{new.puesto}',
	:{new.dia_semana},
	:{new.cosecha_asist},
	:{new.destajo_asist},
	:{new.asistencias_app},
	:{new.asistencia},
	:{new.dias_trabajados},
	:{new.justific},
	:{new.justific_totales},
	:{new.dias_totales},
	':{new.hora_de_ingreso}',
	':{new.hora_de_salida}',
	:{new.hn_matutino},
	:{new.hn_redondeadas},
	:{new.hn_vespertino},
	:{new.valor_hora_extra},
	:{new.total_horas_extra},
	:{new.botes_frambuesa},
	:{new.botes_zarzamora},
	:{new.sueldo_puesto},
	:{new.pago_hn_matutino},
	:{new.pago_hn_vesp},
	:{new.destajo},
	:{new.pago_cosecha},
	:{new.pago_he},
	:{new.prima_dom},
	:{new.sueldo_variable},
	:{new.suledo_variable_cosecha},
	:{new.sueldo_diario},
	':{new.configuación}',
	:{new.bono},
	:{new.bono_nuevos},
	:{new.feriado},
	':{new.dia_ingreso}',
	:{new.dias_trab_ingreso},
	:{new.total},
	':{new.cultivo}'
)",
		"skipFilter" => "0",
		"skipOrder" => "0"

	);
				$topspuestos_horarios["selectList"] = array(
		"subtype" => "sql",
		"sql" => "select 
	p.cat_trabajadores_puestos_id,
    p.descripcion_puesto, 
    h.*,
    p.vigente
from 
	cat_trabajadores_puestos as p
    left join aux_puestos_horarios as ph on p.cat_trabajadores_puestos_id = ph.cat_trabajadores_puestos_id
    left join aux_horarios as h on ph.aux_horarios_id = h.aux_horarios_id",
		"skipFilter" => "0",
		"skipOrder" => "0"

	);
				$topspuestos_horarios["selectOne"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
    p.cat_trabajadores_puestos_id,
    p.descripcion_puesto, 
    h.*,
    p.vigente
FROM
	cat_trabajadores_puestos as p
    left join aux_puestos_horarios as ph on p.cat_trabajadores_puestos_id = ph.cat_trabajadores_puestos_id
    left join aux_horarios as h on ph.aux_horarios_id = h.aux_horarios_id
WHERE
p.cat_trabajadores_puestos_id = :{keys.cat_trabajadores_puestos_id}
",
		"skipFilter" => "0",
		"skipOrder" => "0"

	);
				$topspuestos_horarios["update"] = array(
		"subtype" => "sql",
		"sql" => "update 
	aux_puestos_horarios 
set 
	aux_horarios_id = :{aux_horarios_id}
where 
	cat_trabajadores_puestos_id = :{filter.cat_trabajadores_puestos_id}",
		"skipFilter" => "0",
		"skipOrder" => "0"

	);
		$tables_data["puestos horarios"][".operations"] = &$topspuestos_horarios;
?>