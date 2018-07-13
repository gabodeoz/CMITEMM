INSERT INTO tusuarios (username,nombre,apaterno,amaterno,email,password,enable,cidperfil)
VALUES (:username,:nombre,:apaterno,:amaterno,:email,:password,:enable,:cidperfil);
--ALTER TABLE tusuarios MODIFY COLUMN idusuario INT auto_increment