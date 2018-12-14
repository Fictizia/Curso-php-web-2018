CREATE TABLE `clase10`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telephone` VARCHAR(45) NOT NULL,
  `message` VARCHAR(300) NOT NULL,
  `accepted` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `clase10`.`budget` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `servicio` VARCHAR(300) NOT NULL,
  `observaciones` VARCHAR(300) NOT NULL,
  `plazo` VARCHAR(300) NOT NULL,
  `presupuesto` VARCHAR(300) NOT NULL,
   PRIMARY KEY (`id`));

   ALTER TABLE `clase10` . `budget` ADD COLUMN `user_id` int not null after `id`;
   ALTER TABLE `clase10`. `budget` ADD FOREIGN KEY(`user_id`)
   REFERENCES `users`(`id`);