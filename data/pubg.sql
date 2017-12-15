SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pubg` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `pubg` ;

-- -----------------------------------------------------
-- Table `mydb`.`pubg`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pubg`.`mydb` (
  `name` VARCHAR(45) NULL,
  `region` VARCHAR(45) NULL,
  `season` VARCHAR(45) NULL,
  `match` VARCHAR(45) NULL,
  `update` VARCHAR(45) NULL,
  `rate` INT NULL,
  `rounds` INT NULL,
  `wins` INT NULL,
  `top10` INT NULL,
  `kills` INT NULL,
  `suicides` INT NULL,
  `teamkills` INT NOT NULL,
  `headshots` INT NOT NULL,
  `roadkills` INT NOT NULL,
  `assists` INT NOT NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;