CREATE TABLE `database`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(40) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `sexo` ENUM('F', 'M', 'N') NOT NULL,
  PRIMARY KEY (`id`));


CREATE TABLE `database`.`pedidos`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `id_cliente` INT NOT NULL,
    `fecha_pedido` DATE NOT NULL, 
    `total_pedido` DECIMAL(9,2) NOT NULL, 
    PRIMARY KEY (`id`));
    INDEX (`id_cliente`),
    FOREIGN KEY (id_cliente) REFERENCES `clientes`(`id`));

CREATE TABLE `database`.`articulos`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `producto` VARCHAR(45) NOT NULL,
    `precio` DECIMAL(9,2) NOT NULL, 
    `precio_rebajado` DECIMAL(9,2) NOT NULL, 
    PRIMARY KEY (`id`));

CREATE TABLE `clase9`.`lineas_pedido`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `id_pedido` INT NOT NULL,
    `id_articulo` INT NOT NULL,
    `precio_unidad` DECIMAL(9,2) NOT NULL, 
    `unidades` INT NOT NULL, 
    `precio_total` DECIMAL(9,2) NOT NULL, 
    PRIMARY KEY (`id`),
    INDEX (`id_pedido`),
    FOREIGN KEY (`id_pedido`) REFERENCES `pedidos`(`id`),
    INDEX (`id_articulo`),
    FOREIGN KEY (`id_articulo`) REFERENCES `articulos`(`id`));


    --alter TABLE

ALTER TABLE `clase9`.`pets` ADD COLUMN `user_id` INT NOT NULL AFTER `id`,
ALTER TABLE `clase9`.`pets` ADD FOREIGN KEY(`user_id`) REFERENCES `users`(`id`);
 --
ALTER TABLE `clase9`.`pets` ADD COLUMN `user_id` INT NOT NULL AFTER `id` SET DEFAULT '1';

ALTER TABLE `clase9`.`pets` ALTER COLUMN `user_id` SET DEFAULT `1`;