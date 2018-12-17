CREATE TABLE `clase13`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `sexo` ENUM('F', 'M', 'N') NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `clase13`.`pets` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `race` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `sexo` ENUM('F', 'M', 'N') NOT NULL,
  PRIMARY KEY (`id`));

ALTER TABLE `clase13`.`pets` ADD COLUMN `user_id` INT NULL AFTER `id`;
ALTER TABLE `clase13`.`pets`  ADD FOREIGN KEY(`user_id`) 
REFERENCES `users`(`id`);


