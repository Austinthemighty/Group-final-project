-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema e-box
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema e-box
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `e-box` DEFAULT CHARACTER SET latin1 ;
USE `e-box` ;

-- -----------------------------------------------------
-- Table `e-box`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-box`.`user` ;

CREATE TABLE IF NOT EXISTS `e-box`.`user` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(40) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `e-box`.`messages`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-box`.`messages` ;

CREATE TABLE IF NOT EXISTS `e-box`.`messages` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `message` VARCHAR(250) NULL DEFAULT NULL,
  `sender_id` INT(11) NULL DEFAULT NULL,
  `time_sent` DATETIME NULL DEFAULT NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_messages_user1_idx` (`user_id` ASC),
  CONSTRAINT `fk_messages_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `e-box`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `e-box`.`topic`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-box`.`topic` ;

CREATE TABLE IF NOT EXISTS `e-box`.`topic` (
  `id` INT(11) NOT NULL,
  `topic` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `e-box`.`question`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-box`.`question` ;

CREATE TABLE IF NOT EXISTS `e-box`.`question` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `question` VARCHAR(100) NULL DEFAULT NULL,
  `topic_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_question_topic1_idx` (`topic_id` ASC),
  CONSTRAINT `fk_question_topic1`
    FOREIGN KEY (`topic_id`)
    REFERENCES `e-box`.`topic` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `e-box`.`responses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-box`.`responses` ;

CREATE TABLE IF NOT EXISTS `e-box`.`responses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `response` INT(11) NULL DEFAULT NULL,
  `user_id` INT(11) NOT NULL,
  `question_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_responses_user1_idx` (`user_id` ASC),
  INDEX `fk_responses_question1_idx` (`question_id` ASC),
  CONSTRAINT `fk_responses_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `e-box`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responses_question1`
    FOREIGN KEY (`question_id`)
    REFERENCES `e-box`.`question` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `e-box`.`user_info`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `e-box`.`user_info` ;

CREATE TABLE IF NOT EXISTS `e-box`.`user_info` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name_first` VARCHAR(50) NULL DEFAULT NULL,
  `name_last` VARCHAR(100) NULL DEFAULT NULL,
  `picture` VARCHAR(100) NULL DEFAULT NULL,
  `username` VARCHAR(45) NULL DEFAULT NULL,
  `birthdate` DATE NULL DEFAULT NULL,
  `user_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_info_user_idx` (`user_id` ASC),
  CONSTRAINT `fk_user_info_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `e-box`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
