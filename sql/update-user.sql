/**
 * Author:  vgcruz
 * Created: 14/07/2018
 */
UPDATE `tusuarios` SET 
`username`=:username
,`nombre`=:nombre
,`apaterno`=:apaterno
,`amaterno`=:amaterno
,`email`=:email
,`password`=:password
,`enable`=:enable
,`cidperfil`=:cidperfil
 WHERE idusuario=:idusuario;

