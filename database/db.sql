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
    tempo TIME NOT NULL,
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
('Atsumu', 'atsumu', 'atsumu123', 'atsumu@gmail.com', 'admin'),
('Hinata', 'hinata', 'hinata123', 'hinata@gmail.com', 'funcionario'),
('Kageyama', 'kageyama', 'kageyama123', 'kageyama@gmail.com', 'funcionario'),
('Oikawa', 'oikawa', 'oikawa123', 'oikawa@gmail.com', 'funcionario'),
('Bokuto', 'bokuto', 'bokuto123', 'bokuto@gmail.com', 'funcionario'),
('Kuroo', 'kuroo', 'kuroo123', 'kuroo@gmail.com', 'funcionario'),
('Kenma', 'kenma', 'kenma123', 'kenma@gmail.com', 'funcionario'),
('Osamu', 'osamu', 'osamu123', 'osamu@gmail.com', 'funcionario'),
('Hoshu', 'hoshu', 'hoshu123', 'hoshu@gmail.com', 'funcionario'),
('Sakusa', 'sakusa', 'sakusa123', 'sakusa@gmail.com', 'funcionario'),
('Akaashi', 'akaashi', 'akaashi123', 'akaashi@gmail.com', 'funcionario'),
('Kita', 'kita', 'kita123', 'kita@gmail.com', 'funcionario'),
('Suna', 'suna', 'suna123', 'suna@gmail.com', 'funcionario'),
('Aran', 'aran', 'aran123', 'aran@gmail.com', 'funcionario'),
('Iwaizumi', 'iwaizumi', 'iwaizumi123', 'iwaizumi@gmail.com', 'funcionario'),
('Ushijima', 'ushijima', 'ushijima123', 'ushijima@gmail.com', 'funcionario'),
('Tendou', 'tendou', 'tendou123', 'tendou@gmail.com', 'funcionario'),
('Yamaguchi', 'yamaguchi', 'yamaguchi123', 'yamaguchi@gmail.com', 'funcionario'),
('Tsukishima', 'tsukishima', 'tsukishima123', 'tsukishima@gmail.com', 'funcionario'),
('Nishinoya', 'nishinoya', 'nishinoya123', 'nishinoya@gmail.com', 'funcionario'),
('Tanaka', 'tanaka', 'tanaka123', 'tanaka@gmail.com', 'funcionario'),
('Sugawara', 'sugawara', 'sugawara123', 'sugawara@gmail.com', 'funcionario'),
('Daichi', 'daichi', 'daichi123', 'daichi@gmail.com', 'funcionario'),
('Asahi', 'asahi', 'asahi123', 'asahi@gmail.com', 'funcionario'),
('Yachi', 'yachi', 'yachi123', 'yachi@gmail.com', 'funcionario'),
('Kiyoko', 'kiyoko', 'kiyoko123', 'kiyoko@gmail.com', 'funcionario'),
('Lev', 'lev', 'lev123', 'lev@gmail.com', 'funcionario'),
('Yaku', 'yaku', 'yaku123', 'yaku@gmail.com', 'funcionario'),
('Fukunaga', 'fukunaga', 'fukunaga123', 'fukunaga@gmail.com', 'funcionario'),
('Yamamoto', 'yamamoto', 'yamamoto123', 'yamamoto@gmail.com', 'funcionario'),
('Terushima', 'terushima', 'terushima123', 'terushima@gmail.com', 'funcionario'),
('Aone', 'aone', 'aone123', 'aone@gmail.com', 'funcionario'),
('Futakuchi', 'futakuchi', 'futakuchi123', 'futakuchi@gmail.com', 'funcionario'),
('Koganegawa', 'koganegawa', 'koganegawa123', 'koganegawa@gmail.com', 'funcionario'),
('Hoshiumi', 'hoshiumi', 'hoshiumi123', 'hoshiumi@gmail.com', 'funcionario'),
('Hirugami', 'hirugami', 'hirugami123', 'hirugami@gmail.com', 'funcionario'),
('Goshiki', 'goshiki', 'goshiki123', 'goshiki@gmail.com', 'funcionario'),
('Semi', 'semi', 'semi123', 'semi@gmail.com', 'funcionario'),
('Kuroishi', 'kuroishi', 'kuroishi123', 'kuroishi@gmail.com', 'funcionario'),
('Komori', 'komori', 'komori123', 'komori@gmail.com', 'funcionario');


INSERT INTO trem (nome, modelo, capacidade, status, id_usuario) VALUES
('Nebula Express', 'NE-150', 220, 'ativo', 2),
('Aurora Boreal', 'AB-280', 500, 'Inativo', 4),
('Galaxia Azul', 'GA-320', 150, 'ativo', 6),
('Eclipse Lunar', 'EL-450', 380, 'ativo', 9),
('Meteoro Veloz', 'MV-520', 290, 'Inativo', 12);

INSERT INTO rota (origem, destino, id_usuario) VALUES
('Manaus', 'Belem', 2),
('Recife', 'Salvador', 4),
('Londrina', 'Maringa', 6),
('Campinas', 'Santos', 9),
('Goiania', 'Brasilia', 12);

INSERT INTO trem_rota (id_trem, id_rota) VALUES
(1, 3),
(2, 5),
(3, 1),
(4, 2),
(5, 4);

INSERT INTO log_acesso (data_hora, acao, id_usuario) VALUES
('2026-10-14 09:10:00', 'Cadastro de sensor', 2),
('2026-10-14 09:25:00', 'Exclusao de trem', 4),
('2026-10-14 09:40:00', 'Consulta de usuarios', 6),
('2026-10-14 09:55:00', 'Atualizacao de rota', 9),
('2026-10-14 10:10:00', 'Login no sistema', 12);


INSERT INTO sensor
(tipo_dado, nome, localizacao, id_trem, id_rota, id_usuario) VALUES
('Pressao', 'Sensor Pressao P01', 'trem', 1, 3, 2),
('Vibracao', 'Sensor Vibracao V02', 'ferrovia', 2, 5, 4),
('Umidade', 'Sensor Umidade U03', 'trem', 3, 1, 6),
('Velocidade', 'Sensor Velocidade VE04', 'ferrovia', 4, 2, 9),
('Temperatura', 'Sensor Termico T05', 'trem', 5, 4, 12);


INSERT INTO registro_sensor (id_sensor) VALUES
(1),
(2),
(3),
(4),
(5);