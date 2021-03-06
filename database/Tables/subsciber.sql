-- MySQL Script generated by MySQL Workbench
-- 04/17/15 13:02:31
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema jfk_scds
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema jfk_scds
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `jfk_scds` DEFAULT CHARACTER SET latin1 ;
USE `jfk_scds` ;

-- -----------------------------------------------------
-- Table `jfk_scds`.`subsciber`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jfk_scds`.`subsciber` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `first_name` TEXT NOT NULL,
  `last_name` TEXT NOT NULL,
  `subscriber_email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
