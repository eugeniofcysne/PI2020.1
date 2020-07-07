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
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`usuario` ;

CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `cod_usuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `data_nascimento` DATETIME NULL,
  `cpf` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `cargo` VARCHAR(45) NULL,
  `perfil_cod_perfil` INT NOT NULL,
  PRIMARY KEY (`cod_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`certificado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`certificado` ;

CREATE TABLE IF NOT EXISTS `mydb`.`certificado` (
  `cod_certificado` INT NOT NULL AUTO_INCREMENT,
  `nome_certificado` VARCHAR(45) NOT NULL,
  `data_criacao` DATETIME NOT NULL,
  `horas_certificado` INT UNSIGNED NOT NULL,
  `tipo_certificado` VARCHAR(45) NOT NULL,
  `usuario_cod_usuario` INT NOT NULL,
  PRIMARY KEY (`cod_certificado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`perfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`perfil` ;

CREATE TABLE IF NOT EXISTS `mydb`.`perfil` (
  `cod_perfil` INT NOT NULL AUTO_INCREMENT,
  `descricao_perfil` VARCHAR(45) NULL,
  PRIMARY KEY (`cod_perfil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`alteracao_status_certificado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`alteracao_status_certificado` ;

CREATE TABLE IF NOT EXISTS `mydb`.`alteracao_status_certificado` (
  `enum_status_anterior` INT NULL,
  `enum_status_posterior` INT NULL,
  `data_alteracao` DATETIME NULL,
  `usuario_cod_usuario` INT NOT NULL,
  `certificado_cod_certificado` INT NOT NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`enum_status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`enum_status` ;

CREATE TABLE IF NOT EXISTS `mydb`.`enum_status` (
  `cod_enum_status` INT NOT NULL AUTO_INCREMENT,
  `descricao_enum_status` VARCHAR(45) NULL,
  PRIMARY KEY (`cod_enum_status`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


ALTER TABLE certificado
ADD FOREIGN KEY (usuario_cod_usuario) REFERENCES usuario(cod_usuario);

ALTER TABLE usuario
ADD FOREIGN KEY (perfil_cod_perfil) REFERENCES perfil(cod_perfil);

ALTER TABLE alteracao_status_certificado
ADD FOREIGN KEY (usuario_cod_usuario) REFERENCES usuario(cod_usuario);

ALTER TABLE alteracao_status_certificado
ADD FOREIGN KEY (certificado_cod_certificado) REFERENCES certificado(cod_certificado);

