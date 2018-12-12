CREATE TABLE `clase10`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telephone` VARCHAR(45) NOT NULL,
  `message` VARCHAR(300) NOT NULL,
  `accepted` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`));

