conexiones a BD
===
https://www.w3schools.com/php/php_mysql_connect.asp


seleccionar filas
===
https://dev.mysql.com/doc/refman/8.0/en/retrieving-data.html
https://www.w3schools.com/php/php_mysql_select.asp

paso a paso
===
* ir a ejemploBaseDatos de esta clase
* levantar docker:
```
docker-compose up -d
```
* comprobar maquinas:
```
docker ps
```
* conectar la base de datos (los datos estan en docker-compose)
```
host: localhost
port: 9906
user: root
pass: rootsecretpass
```

* crear tabla de users 
```
CREATE TABLE `clase7`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `sexo` ENUM('F', 'M', 'N') NOT NULL,
  PRIMARY KEY (`id`));
```

* insertar valores
```
INSERT INTO `clase7`.`users` (`name`, `email`, `sexo`) VALUES ('mari', 'mari@fakemails', 'F');
INSERT INTO `clase7`.`users` (`name`, `email`, `sexo`) VALUES ('rosa', 'rosa@fakemail.com', 'F');
INSERT INTO `clase7`.`users` (`name`, `email`, `sexo`) VALUES ('luis', 'luis@fakemail.com', 'M');
INSERT INTO `clase7`.`users` (`name`, `email`, `sexo`) VALUES ('komai', 'komai@fakemail.com', 'N');
INSERT INTO `clase7`.`users` (`name`, `email`, `sexo`) VALUES ('mario', 'mario@fakemail.com', 'M');
INSERT INTO `clase7`.`users` (`name`, `email`, `sexo`) VALUES ('paqui', 'paqui@fakemail.com', 'F');
INSERT INTO `clase7`.`users` (`name`, `email`, `sexo`) VALUES ('antonio', 'antonio@fakemail.com', 'M');
```


