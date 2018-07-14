/**
 * Author:  vgcruz
 * Created: 14/07/2018
 */
INSERT INTO `tequpos`
( `precio_unitario`, `fecha_recepcion`, `tipo_equipo`, `marca`, `placa`
, `status`
, `inventario_fisico`
, `remision`
, `fecha_expiracion`
, `company`
, `modelo`
, `mac_address`
, `mac_address_wifi`
, `tiempo_garantia`
, `year`
, `obsolencia`
, `tipo`
, `serie`
, `status_gerencia`
, `mac_address_lan`) 
VALUES 
(:precio_unitario
,:fecha_recepcion
,:tipo_equipo
,:marca
,:placa
,:status
,:inventario_fisico
,:remision
,:fecha_expiracion
,:company
,:modelo
,:mac_address
,:mac_address_wifi
,:tiempo_garantia
,:year
,:obsolencia
,:tipo
,:serie
,:status_gerencia
,:mac_address_lan);
