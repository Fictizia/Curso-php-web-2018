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
    `producto` VARCHAR(45) NOT NULL,
    `precio` DECIMAL(9,2) NOT NULL, 
    `precio_rebajado` DECIMAL(9,2) NOT NULL, 
    PRIMARY KEY (`id`));