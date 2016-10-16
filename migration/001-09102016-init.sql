CREATE TABLE `bsi_verpush`.`book` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `isbn` VARCHAR(45) NOT NULL,
  `title` VARCHAR(45) NOT NULL,
  `author` VARCHAR(45) NOT NULL,
  `publisher` VARCHAR(45) NOT NULL,
  `year` YEAR NOT NULL,
  PRIMARY KEY (`id`));
