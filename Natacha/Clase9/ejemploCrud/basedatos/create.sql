CREATE TABLE `clase9`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `sexo` ENUM('F', 'M', 'N') NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `clase9`.`pets` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `raza` VARCHAR(45) NOT NULL,
  `petname` VARCHAR(45) NOT NULL,
  `edad` VARCHAR(45) NOT NULL,
  `sexo` ENUM('M', 'H') NOT NULL,
  PRIMARY KEY (`id`));