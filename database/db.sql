CREATE DATABASE IF NOT EXISTS sistema_ferroviario_astral_express;

USE sistema_ferroviario_astral_express;

CREATE TABLE usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    usuario VARCHAR(45) UNIQUE,
    senha VARCHAR(255),
    email VARCHAR(100),
    perfil VARCHAR(20) DEFAULT 'funcionario'
);

CREATE TABLE trem (
    id_trem INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45),
    modelo VARCHAR(45),
    capacidade INT,
    status VARCHAR(45)
);

CREATE TABLE rota (
    id_rota INT PRIMARY KEY AUTO_INCREMENT,
    origem VARCHAR(45),
    destino VARCHAR(45)
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
    data_hora DATETIME,
    acao VARCHAR(100),
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE sensor (
    id_sensor INT PRIMARY KEY AUTO_INCREMENT,
    tipo_dado VARCHAR(45),
    nome VARCHAR(45),
    localizacao VARCHAR(45),
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

CREATE TABLE admim (
    id_admim INT PRIMARY KEY AUTO_INCREMENT,
    perfil VARCHAR(20), 
    FOREIGN KEY (perfil) REFERENCES usuario(perfil)
);