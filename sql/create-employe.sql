/**
 * Author:  vgcruz
 * Created: 13/07/2018
 */

INSERT INTO `templeados`(`num_empleado`
						, `telefono`
						, `jefe_directo`
						, `empresa`
						, `ncompleto_empleado`
						, `hostname`
						, `clasificacion`
						, `centro_costo`
						, `puesto`
						, `correo_electronico`
						, `id_red`
						, `area_negocio`) 
VALUES (:num_empleado
		,:telefono
		,:jefe_directo
		,:empresa
		,:ncompleto_empleado
		,:hostname
		,:clasificacion
		,:centro_costo
		,:puesto
		,:correo_electronico
		,:id_red
		,:area_negocio);
