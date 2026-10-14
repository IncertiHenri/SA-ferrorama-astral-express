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


-- djniffer

USE sistema_ferroviario_astral_express;

INSERT INTO usuario (nome, usuario, senha, email, perfil) VALUES
('Henrique Incerti', 'henrique', 'senha123', 'henrique@astral.com', 'admin'),
('Serenna Costa', 'serenna', 'senha234', 'serenna@astral.com', 'admin'),
('Thais Oliveira', 'thais', 'senha345', 'thais@astral.com', 'admin'),
('Lucas Almeida', 'lucas', 'senha456', 'lucas@astral.com', 'admin'),
('Marina Souza', 'marina', 'senha567', 'marina@astral.com', 'funcionario'),
('Gabriel Santos', 'gabriel', 'senha678', 'gabriel@astral.com', 'admin'),
('Ana Martins', 'ana', 'senha789', 'ana@astral.com', 'funcionario'),
('Pedro Lima', 'pedro', 'senha890', 'pedro@astral.com', 'funcionario'),
('Julia Ferreira', 'julia', 'senha901', 'julia@astral.com', 'funcionario'),
('Rafael Mendes', 'rafael', 'senha012', 'rafael@astral.com', 'funcionario'),
('Beatriz Rodrigues', 'beatriz', 'senha1234', 'beatriz@astral.com', 'funcionario'),
('Matheus Carvalho', 'matheus', 'senha2345', 'matheus@astral.com', 'funcionario'),
('Isabela Rocha', 'isabela', 'senha3456', 'isabela@astral.com', 'admin'),
('Felipe Gomes', 'felipe', 'senha4567', 'felipe@astral.com', 'funcionario'),
('Camila Ribeiro', 'camila', 'senha5678', 'camila@astral.com', 'funcionario'),
('Vinicius Barbosa', 'vinicius', 'senha6789', 'vinicius@astral.com', 'funcionario'),
('Laura Nascimento', 'laura', 'senha7890', 'laura@astral.com', 'funcionario'),
('Eduardo Cardoso', 'eduardo', 'senha8901', 'eduardo@astral.com', 'admin'),
('Manuela Teixeira', 'manuela', 'senha9012', 'manuela@astral.com', 'funcionario'),
('Bruno Moreira', 'bruno', 'senha0123', 'bruno@astral.com', 'funcionario');

INSERT INTO trem (nome, modelo, capacidade, status, id_usuario) VALUES
('Expresso Aurora', 'AX-100', 300, 'ativo', 1),
('Estrela Cadente', 'AX-200', 250, 'ativo', 2),
('Cometa Dourado', 'AX-300', 400, 'ativo', 3),
('Nebulosa', 'AX-400', 350, 'Inativo', 4),
('Via Lactea', 'AX-500', 280, 'Inativo', 5),
('Solaris', 'AX-600', 320, 'Inativo', 6),
('Luz Celeste', 'AX-700', 200, 'Inativo', 7),
('Horizonte', 'AX-800', 450, 'ativo', 8),
('Orion', 'AX-900', 380, 'ativo', 9),
('Cosmos', 'AX-1000', 310, 'ativo', 10);

INSERT INTO rota (origem, destino, id_usuario) VALUES
('Joinville', 'Curitiba', 1),
('Curitiba', 'Sao Paulo', 2),
('Sao Paulo', 'Rio de Janeiro', 3),
('Joinville', 'Florianopolis', 4),
('Florianopolis', 'Porto Alegre', 5),
('Brasilia', 'Goiania', 6),
('Belo Horizonte', 'Sao Paulo', 7),
('Curitiba', 'Porto Alegre', 8),
('Rio de Janeiro', 'Belo Horizonte', 9),
('Santos', 'Sao Paulo', 10);

INSERT INTO trem_rota (id_trem, id_rota) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

INSERT INTO log_acesso (data_hora, acao, id_usuario) VALUES
('2026-10-14 07:00:00', 'Login no sistema', 1),
('2026-10-14 07:05:00', 'Cadastro de trem', 2),
('2026-10-14 07:10:00', 'Consulta de rotas', 3),
('2026-10-14 07:15:00', 'Atualizacao de trem', 4),
('2026-10-14 07:20:00', 'Cadastro de rota', 5),
('2026-10-14 07:25:00', 'Login no sistema', 6),
('2026-10-14 07:30:00', 'Consulta de sensores', 7),
('2026-10-14 07:35:00', 'Edicao de rota', 8),
('2026-10-14 07:40:00', 'Consulta de registros', 9),
('2026-10-14 07:45:00', 'Logout do sistema', 10);

INSERT INTO sensor
(tipo_dado, nome, localizacao, id_trem, id_rota, id_usuario) VALUES
('Temperatura', 'Sensor 01', 'trem', 1, 1, 1),
('Velocidade', 'Sensor 02', 'ferrovia', 2, 2, 2),
('falha', 'Sensor 03', 'trem', 3, 3, 3),
('falha', 'Sensor 04', 'ferrovia', 4, 4, 4),
('Temperatura', 'Sensor 05', 'ferrovia', 5, 5, 5),
('Velocidade', 'Sensor 06', 'trem', 6, 6, 6),
('falha', 'Sensor 07', 'trem', 7, 7, 7),
('falha', 'Sensor 08', 'trem', 8, 8, 8),
('falha', 'Sensor 09', 'ferrovia', 9, 9, 9),
('Temperatura', 'Sensor 10', 'trem', 10, 10, 10);

INSERT INTO registro_sensor (id_sensor) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10);