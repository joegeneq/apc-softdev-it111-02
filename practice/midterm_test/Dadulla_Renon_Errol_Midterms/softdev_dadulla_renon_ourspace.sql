-- MySQL Script generated by MySQL Workbench
-- 03/01/15 11:11:07
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema it111_exercise
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema jfk
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema softdev_dadulla_renon_ourspace
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema softdev_dadulla_renon_ourspace
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `softdev_dadulla_renon_ourspace` ;
USE `softdev_dadulla_renon_ourspace` ;

-- -----------------------------------------------------
-- Table `softdev_dadulla_renon_ourspace`.`myaddress`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softdev_dadulla_renon_ourspace`.`myaddress` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(30) NOT NULL,
  `middlename` VARCHAR(30) NOT NULL,
  `lastname` VARCHAR(30) NOT NULL,
  `gender` VARCHAR(1) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `home_address` VARCHAR(50) NULL,
  `landline` VARCHAR(20) NULL,
  `cellphone` VARCHAR(20) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `softdev_dadulla_renon_ourspace`.`mycomment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `softdev_dadulla_renon_ourspace`.`mycomment` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `myaddress_id` INT(11) NOT NULL,
  `author` VARCHAR(255) NOT NULL,
  `body` LONGTEXT NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `mycomment_ibfk_1` (`myaddress_id` ASC),
  CONSTRAINT `mycomment_ibfk_1`
    FOREIGN KEY (`myaddress_id`)
    REFERENCES `softdev_dadulla_renon_ourspace`.`myaddress` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
