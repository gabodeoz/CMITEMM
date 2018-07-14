/**
 * Author:  vgcruz
 * Created: 14/07/2018
 */
UPDATE `templeados` SET 
                    `num_empleado`=:num_empleado
                    ,`telefono`=:telefono
                    ,`jefe_directo`=:jefe_directo
                    ,`empresa`=:empresa
                    ,`ncompleto_empleado`=:ncompleto_empleado
                    ,`hostname`=:hostname
                    ,`clasificacion`=:clasificacion
                    ,`centro_costo`=:centro_costo
                    ,`puesto`=:puesto
                    ,`correo_electronico`=:correo_electronico
                    ,`id_red`=:id_red
                    ,`area_negocio`=:area_negocio 
WHERE id_empleado=:id_empleado;
