CREATE TABLE `streparava`.`departamento` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `responsavel` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
  
CREATE TABLE `streparava`.`funcionarios` (
  `id` INT NOT NULL,
  `matricula` VARCHAR(45) NULL,
  `nome` VARCHAR(45) NULL,
  `departamento_id` VARCHAR(45) NULL,
  `funcao` VARCHAR(45) NULL,
  `contato` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
  
CREATE TABLE `streparava`.`fornecedor` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `contato` VARCHAR(45) NULL,
  `endereco` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));
  
  CREATE TABLE `streparava`.`armario` (
  `id` INT NOT NULL,
  `turno` VARCHAR(45) NULL,
  `linha` VARCHAR(45) NULL,
  `funcionario_id` INT NULL,
  `qtd_prevista` INT NULL,
  PRIMARY KEY (`id`));
  
CREATE TABLE `streparava`.`movimentacao` (
  `id` INT NOT NULL,
  `hora` TIME NULL,
  `data` DATE NULL,
  `qtd` VARCHAR(45) NULL,
  `preset` VARCHAR(45) NULL,
  `funcionario_id` INT NULL,
  `ferramenta_id` INT NULL,
  `armario_id` INT NULL,
  `tipo` VARCHAR(45) NULL,
  `qtd_atual` INT NULL,
  `qtd_rep` INT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `streparava`.`inventario` (
  `id` INT NOT NULL,
  `ferramenta_id` INT NULL,
  `mensagem` VARCHAR(45) NULL,
  `qtd` INT NULL,
  `data` DATE NULL,
  `qtd_min` INT NULL,
  `qtd_max` INT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `streparava`.`ferramentas` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `cod` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  `vida_util` INT NULL,
  `qtd_estoque` INT NULL,
  `fabricante` VARCHAR(45) NULL,
  `preco_unitario` DECIMAL NULL,
  `data_aquisicao` DATE NULL,
  `localizacao` VARCHAR(45) NULL,
  `deleted` TINYINT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `streparava`.`notificacao` (
  `id` INT NOT NULL,
  `ferramenta_id` INT NULL,
  `mensagem` VARCHAR(45) NULL,
  `data` DATE NULL,
  `lida` TINYINT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `streparava`.`manutencao` (
  `id` INT NOT NULL,
  `ferramenta_id` INT NULL,
  `mensagem` VARCHAR(45) NULL,
  `data` DATE NULL,
  `descricao` VARCHAR(45) NULL,
  `responsavel` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `streparava`.`usuario` (
  `id` INT NOT NULL,
  `login` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `perfil` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `streparava`.`solicitacao` (
  `id` INT NOT NULL,
  `data` DATE NULL,
  `itens` VARCHAR(45) NULL,
  `custo_total` DECIMAL NULL,
  `preset` VARCHAR(45) NULL,
  `status` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `streparava`.`item` (
  `id` INT NOT NULL,
  `ferramenta_id` INT NULL,
  `qtd_solicitada` INT NULL,
  `qtd_aprovada` INT NULL,
  `custo` DECIMAL NULL,
  PRIMARY KEY (`id`));
