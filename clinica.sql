CREATE DATABASE clinica;

USE clinica;

CREATE TABLE tb_usuario(
	cd_usuario INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	email VARCHAR(60) unique NOT NULL,
	login VARCHAR(60) unique NOT NULL,
	senha VARCHAR(60) NOT NULL,
	status BOOLEAN NOT NULL,
	dtCadastro DATE 
);

CREATE TABLE tb_funcionario(
	cd_funcionario int AUTO_INCREMENT PRIMARY KEY,
	nm_funcionario VARCHAR(100) NOT NULL,
	cargo VARCHAR(30) NOT NULL,
	cod_usuario INT NOT NULL,
	salario DECIMAL(7,2) NOT NULL
);

CREATE TABLE tb_convenio(
	cd_convenio INT AUTO_INCREMENT PRIMARY KEY,
	nm_convenio VARCHAR(60) NOT NULL
);

CREATE TABLE tb_endereco(
	cd_endereco INT AUTO_INCREMENT PRIMARY KEY,
	logradouro VARCHAR(100) NOT NULL,
	bairro VARCHAR(60) NOT NULL,
	cidade VARCHAR(60) NOT NULL,
	uf CHAR(2) NOT NULL,
	cep VARCHAR(11) NOT NULL
);

CREATE TABLE tb_paciente(
	cd_paciente INT AUTO_INCREMENT PRIMARY KEY,
	cd_convenio INT NOT NULL,
	
	nm_paciente VARCHAR(100) NOT NULL,
	sexo CHAR(1) NOT NULL,
	dt_nascimento DATE,
	rg VARCHAR(15) NOT NULL,
	org_emissor VARCHAR(5) NOT NULL,
	est_civil VARCHAR(10) NOT NULL,
	fone VARCHAR(15),
	CONSTRAINT cd_convenio_fkey FOREIGN KEY (cd_convenio)
								REFERENCES tb_convenio(cd_convenio)
						  
);

CREATE TABLE tb_medico(
	cd_medico INT AUTO_INCREMENT PRIMARY KEY,
	nm_medico VARCHAR(100) NOT NULL
);

CREATE TABLE tb_consulta(
	cd_consulta INT AUTO_INCREMENT PRIMARY KEY,
	medico INT NOT NULL,
	paciente INT NOT NULL,
	dt_consulta TIMESTAMP NOT NULL,
	diagnostico TEXT,
	CONSTRAINT cd_medico_fkey FOREIGN KEY (medico)
								REFERENCES tb_medico(cd_medico),
	CONSTRAINT cd_paciente_fkey FOREIGN KEY (paciente)
								REFERENCES tb_paciente(cd_paciente)
);

CREATE TABLE tb_exame(
	consulta INT NOT NULL,
	exame VARCHAR(30) NOT NULL,
	dt_exame DATE
);


INSERT INTO `tb_convenio` (`cd_convenio`, `nm_convenio`) VALUES
(1, 'IAPEP'),
(2, 'SUS');

INSERT INTO `tb_endereco` (`cd_endereco`, `logradouro`, `bairro`, `cidade`, `uf`, `cep`) VALUES
(1, 'Rua Des. Freitas 9000', 'Centro', 'Teresina', 'PI', '64.000-000'),
(2, 'Av Campos Sales,400', 'Centro', 'Teresina', 'PI', '64.000-000'),
(3, 'Av São José,900', 'Centro', 'Teresina', 'PI', '64.000-000');

INSERT INTO `tb_medico` (`cd_medico`, `nm_medico`) VALUES
(1, 'Dr. Ramunda'),
(2, 'Dr. Pedro'),
(3, 'Dr. Maria Clara'),
(4, 'Dr. Beatriz');

INSERT INTO `tb_paciente` (`cd_paciente`, `cd_convenio`,`nm_paciente`, `sexo`, `dt_nascimento`, `rg`, `org_emissor`, `est_civil`, `fone`) VALUES
(1, 1, 'José', 'M', '0000-00-00', '222.222', 'SSP', 'Solteiro', '(086)9999.9999'),
(2, 2, 'Maria Antonia', 'F', '2000-11-01', '33.444', 'SSP', 'Solteira', '(086)8888.8888'),
(3, 2, 'Maria Aparecida', 'F', '1990-12-01', '353.444', 'SSP', 'Casada', '(086)7777.7777');
