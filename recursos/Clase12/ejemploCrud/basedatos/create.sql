CREATE TABLE `clase12`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `sexo` ENUM('F', 'M', 'N') NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `clase12`.`pets` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `race` VARCHAR(45) NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `sexo` ENUM('F', 'M', 'N') NOT NULL,
  PRIMARY KEY (`id`));

ALTER TABLE `clase12`.`pets` ADD COLUMN `user_id` INT NOT NULL AFTER `id`;
ALTER TABLE `clase12`.`pets`  ADD FOREIGN KEY(`user_id`) 
REFERENCES `users`(`id`);


