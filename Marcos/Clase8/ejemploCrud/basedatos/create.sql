CREATE TABLE `clase8`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `sexo` ENUM('F', 'M', 'N') NOT NULL,
  PRIMARY KEY (`id`));

