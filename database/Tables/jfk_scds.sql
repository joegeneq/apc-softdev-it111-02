-- MySQL Script generated by MySQL Workbench
-- 04/13/15 00:20:37
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
-- Table `jfk_scds`.`donation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jfk_scds`.`donation` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `amount` INT(11) NOT NULL,
  `card_num` VARCHAR(45) NOT NULL,
  `expiry_date` DATE NOT NULL,
  `ccv` VARCHAR(45) NOT NULL,
  `first_name` TEXT NOT NULL,
  `middle_name` TEXT NULL DEFAULT NULL,
  `last_name` TEXT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone_number` VARCHAR(45) NOT NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `user_id`),
  INDEX `fk_donation_user1_idx` (`user_id` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


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


-- -----------------------------------------------------
-- Table `jfk_scds`.`email`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jfk_scds`.`email` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `subsciber_id` INT(11) NOT NULL,
  `subject` VARCHAR(255) NOT NULL,
  `content` TEXT NOT NULL,
  `attachment` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`, `subsciber_id`),
  INDEX `fk_email_subsciber_idx` (`subsciber_id` ASC),
  CONSTRAINT `fk_email_subsciber`
    FOREIGN KEY (`subsciber_id`)
    REFERENCES `jfk_scds`.`subsciber` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `jfk_scds`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jfk_scds`.`events` (
  `eventID` INT(11) NOT NULL AUTO_INCREMENT,
  `eventName` VARCHAR(255) NOT NULL,
  `eventDesc` VARCHAR(255) NOT NULL,
  `eventDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`eventID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `jfk_scds`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jfk_scds`.`products` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `item_type` VARCHAR(45) NULL DEFAULT NULL,
  `price` DECIMAL(3,0) NULL DEFAULT NULL,
  `size` VARCHAR(45) NULL DEFAULT NULL,
  `color` VARCHAR(45) NULL DEFAULT NULL,
  `items_available` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `jfk_scds`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jfk_scds`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `auth_key` VARCHAR(32) NOT NULL,
  `password_hash` VARCHAR(255) NOT NULL,
  `password_reset_token` VARCHAR(255) NULL DEFAULT NULL,
  `email` VARCHAR(255) NOT NULL,
  `status` SMALLINT(6) NOT NULL,
  `created_at` INT(11) NOT NULL,
  `updated_at` INT(11) NOT NULL,
  `first_name` VARCHAR(45) NULL DEFAULT NULL,
  `last_name` VARCHAR(45) NULL DEFAULT NULL,
  `birthdate` DATE NULL DEFAULT NULL,
  `address` VARCHAR(150) NULL DEFAULT NULL,
  `contact_Number` VARCHAR(45) NULL DEFAULT NULL,
  `usercol` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `jfk_scds`.`volunteer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jfk_scds`.`volunteer` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `first_name` TEXT NOT NULL,
  `last_name` TEXT NOT NULL,
  `volunteer_email` VARCHAR(45) NOT NULL,
  `contact_number1` VARCHAR(11) NOT NULL,
  `contact_number2` VARCHAR(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
