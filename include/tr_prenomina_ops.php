<?php
$topstr_prenomina = array();
		$topstr_prenomina["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
    cat_trabajadores_activos_periodo_id,
    fecha,
    dia_semana,
    nombre_completo,
    cat_trabajadores_altas_id_empresa,
    cat_trabajadores_altas_id,
    cat_trabajadores_puestos_id,
    configuracion_pago,
    case
        configuracion_pago
        when \"sv\" then 
            pago_sueldo_variable +
            pago_bono + 
            bono_nuevo_reingreso 
        when \"svc\" then 
            pago_sueldo_variable_cosecha 
        when \"sd\" then 
            pago_sueldo_diario + 
            pago_horas_extra +
            pago_bono + 
            bono_nuevo_reingreso 
        when \"sdv\" then
            pago_sueldo_variable +
            pago_sueldo_diario +
            pago_horas_extra +
            pago_bono +
            bono_nuevo_reingreso 
        when \"svcd\" then
            pago_sueldo_variable_cosecha +
            pago_sueldo_diario +
            pago_horas_extra 
        when \"svv\" then
            pago_sueldo_variable + 
            pago_sueldo_variable_cosecha
    end + pago_prima + pago_turno_vespertino + pago_festivo as total_a_pagar,
    cantidad_horas_normales,
    cantidad_horas_extra,
    cantidad_botes,
    cantidad_botes_frambuesa,
    cantidad_botes_zarzamora,
    cantidad_horas_vespertino,
    pago_sueldo_diario,
    pago_sueldo_variable,
    pago_sueldo_variable_cosecha,
    case
        configuracion_pago
        when \"sd\" then pago_horas_extra else 0
    end as pago_horas_extra,
    pago_bono,
    bono_nuevo_reingreso,
    case
        configuracion_pago
        when \"sd\" then pago_turno_vespertino else 0
    end as pago_turno_vespertino,
    pago_prima,
    pago_festivo,
    asistencia,
    justificado,
    total_de_asistencias,
    es_nuevo_reingreso,
    fecha_de_ingreso
FROM
    cat_trabajadores_activos_periodos2
-- where cat_trabajadores_altas_id = 3367
ORDER BY
    fecha DESC",
		"skipFilter" => "0",
		"skipOrder" => "0"

	);
				$topstr_prenomina["selectOne"] = array(
		"subtype" => "sql",
		"sql" => "",
		"skipFilter" => "0",
		"skipOrder" => "0"

	);
				$topstr_prenomina["update"] = array(
		"subtype" => "sql",
		"sql" => "update 
cat_trabajadores_activos_periodos2
set 
    configuracion_pago = ':{configuracion_pago}',
    pago_festivo = ':{pago_festivo}'
where
cat_trabajadores_activos_periodo_id = :{filter.cat_trabajadores_activos_periodo_id}",
		"skipFilter" => "0",
		"skipOrder" => "0"

	);
		$tables_data["tr_prenomina"][".operations"] = &$topstr_prenomina;
?>