CREATE DATABASE IF NOT EXISTS sistema_ferroviario_astral_express;

USE sistema_ferroviario_astral_express;

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    usuario VARCHAR(45) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    perfil ENUM('admin', 'funcionario') DEFAULT 'funcionario'
);

CREATE TABLE trem (
    id_trem INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL,
    modelo VARCHAR(45) NOT NULL,
    capacidade INT NOT NULL,
    status VARCHAR(45) NOT NULL,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE rota (
    id_rota INT PRIMARY KEY AUTO_INCREMENT,
    origem VARCHAR(45) NOT NULL,
    destino VARCHAR(45) NOT NULL,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE trem_rota (
    id_trem_rota INT PRIMARY KEY AUTO_INCREMENT,
    id_trem INT,
    id_rota INT,
    FOREIGN KEY (id_trem) REFERENCES trem(id_trem),
    FOREIGN KEY (id_rota) REFERENCES rota(id_rota)
);

CREATE TABLE log_acesso (
    id_log INT PRIMARY KEY AUTO_INCREMENT,
    data_hora DATETIME NOT NULL,
    acao VARCHAR(100) NOT NULL,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE sensor (
    id_sensor INT PRIMARY KEY AUTO_INCREMENT,
    tipo_dado VARCHAR(45) NOT NULL,
    nome VARCHAR(45) NOT NULL,
    localizacao VARCHAR(45) NOT NULL,
    id_trem INT,
    id_rota INT,
    id_usuario INT,
    FOREIGN KEY (id_trem) REFERENCES trem(id_trem),
    FOREIGN KEY (id_rota) REFERENCES rota(id_rota),
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE registro_sensor (
    id_registro_sensor INT PRIMARY KEY AUTO_INCREMENT,
    id_sensor INT,
    FOREIGN KEY (id_sensor) REFERENCES sensor(id_sensor)
);


insert into usuario(nome, usuario, senha, email, perfil) values
('Natan', 'Natanzinho', '$2y$10$wmtRpjrvQfXSJ4y9UcyfdueWcN.92UdF2i2TmF3gOXloX/qiH0HN.', 'natan@gmail.com', 'admin'),
('Serenna', 'cebola', '$2y$10$92Y2OpAFRMUsnXQZTcEgx.QB2uNflA7EHnpqix2Zil9yzxSr45mf.', 'serenna@gmail.com', 'admin'),
('Henrique', 'batata', '$2y$10$kAtK23ian.cXW2Ei9ucjf.e.xj2ucxlCqc.IbTyOpLjT6.RYy9UUm', 'henrique@gmail.com', 'admin'),
('Thais', 'café', '$2y$10$Ht39mfCNSlOrKZHDv5IpO.DTBo8PvmKk1IX3Mws6pRIf2yYbd5ZAe', 'thais@gmail.com', 'admin'),
('icaro', 'icaro botelho', '$2y$10$XklNHlwJHAldi.eWQgasU.cE4t7hMIaBcs0F8h7QPLpgTM/GJ4Rj6', 'icaro@gmail.com', 'funcionario');
