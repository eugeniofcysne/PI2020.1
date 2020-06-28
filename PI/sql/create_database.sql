-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`perfil` (
  `cod_perfil` INT NOT NULL,
  `descricao_perfil` VARCHAR(45) NULL,
  PRIMARY KEY (`cod_perfil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `cod_usuario` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `data_nascimento` DATETIME NULL,
  `cpf` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `cargo` VARCHAR(45) NULL,
  PRIMARY KEY (`cod_usuario`),
  CONSTRAINT `perfil_cod_perfil`
    FOREIGN KEY (`cod_usuario`)
    REFERENCES `mydb`.`perfil` (`cod_perfil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`certificado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`certificado` (
  `cod_certificado` INT NOT NULL,
  `nome_certificado` VARCHAR(45) NULL,
  `data_criacao` DATETIME NULL,
  PRIMARY KEY (`cod_certificado`),
  CONSTRAINT `usuario_cod_usuario`
    FOREIGN KEY (`cod_certificado`)
    REFERENCES `mydb`.`usuario` (`cod_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`alteracao_status_certificado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`alteracao_status_certificado` (
  `cod_alteracao` INT NOT NULL,
  `enum_status_anterior` INT NULL,
  `enum_status_posterior` INT NULL,
  `data_alteracao` DATETIME NULL,
  PRIMARY KEY (`cod_alteracao`),
  CONSTRAINT `fk_cod_certificado`
    FOREIGN KEY (`cod_alteracao`)
    REFERENCES `mydb`.`certificado` (`cod_certificado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cod_usuario_responsavel_alteracao`
    FOREIGN KEY (`cod_alteracao`)
    REFERENCES `mydb`.`usuario` (`cod_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`enum_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`enum_status` (
  `cod_enum_status` INT NOT NULL,
  `descricao_enum_status` VARCHAR(45) NULL,
  PRIMARY KEY (`cod_enum_status`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
