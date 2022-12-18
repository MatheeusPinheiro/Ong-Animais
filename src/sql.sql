-- -----------------------------------------------------
-- Table `doador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `doador` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(18) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(120) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `confirma_senha` VARCHAR(45) NOT NULL,
  `tipo_usuario` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `ong`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ong` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cnpj` VARCHAR(18) NULL DEFAULT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(20) NOT NULL,
  `confirma_senha` VARCHAR(20) NOT NULL,
  `tipo_usuario` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `doacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `doacao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data_doacao` DATE NOT NULL,
  `descricao` VARCHAR(160) NOT NULL,
  `doador_id` INT NOT NULL,
  `ong_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_doador_has_ong_ong1_idx` (`ong_id` ASC),
  INDEX `fk_doador_has_ong_doador_idx` (`doador_id` ASC),
  CONSTRAINT `fk_doador_has_ong_doador`
    FOREIGN KEY (`doador_id`)
    REFERENCES `doador` (`id`),
  CONSTRAINT `fk_doador_has_ong_ong1`
    FOREIGN KEY (`ong_id`)
    REFERENCES `ong` (`id`))
ENGINE = InnoDB;