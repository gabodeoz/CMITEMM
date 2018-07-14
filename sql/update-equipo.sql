/**
 * Author:  vgcruz
 * Created: 14/07/2018
 */
UPDATE `tequpos` SET `precio_unitario`= :precio_unitario
,`fecha_recepcion`= :fecha_recepcion
,`tipo_equipo`= :tipo_equipo
,`marca`= :marca
,`placa`= :placa
,`status`= :status
,`inventario_fisico`= :inventario_fisico
,`remision`= :remision
,`fecha_expiracion`= :fecha_expiracion
,`company`= :company
,`modelo`= :modelo
,`mac_address`= :mac_address
,`mac_address_wifi`= :mac_address_wifi
,`tiempo_garantia`= :tiempo_garantia
,`year`= :year
,`obsolencia`= :obsolencia
,`tipo`= :tipo
,`serie`= :serie
,`status_gerencia`= :status_gerencia
,`mac_address_lan`= :mac_address_lan 
WHERE `id_equipo`= :id_equipo

