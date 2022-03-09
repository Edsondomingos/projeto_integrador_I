CREATE DATABASE IF NOT EXISTS corrida;
use corrida;

CREATE TABLE IF NOT EXISTS atleta(
    cpf VARCHAR(11) NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data_de_nascimento DATE NOT NULL,
    telefone VARCHAR(11) NOT NULL,
    email VARCHAR(100) NOT NULL,
    usuario VARCHAR(30) NOT NULL,
    senha VARCHAR(100) NOT NULL

);

CREATE TABLE IF NOT EXISTS evento(
    id INT NOT NULL auto_increment PRIMARY KEY,
    local_evento VARCHAR(100) NOT NULL,
    data_evento DATE NOT NULL,
    imagem VARCHAR(100) NOT NULL,
    descricao VARCHAR(500) NOT NULL,
    resultado DECIMAL(10,2),
    titulo VARCHAR(100) NOT NULL

);

CREATE TABLE IF NOT EXISTS inscricao(
    id int NOT NULL auto_increment PRIMARY KEY,
    data_inscricao DATE NOT NULL,
    hora_inscricao TIME NOT NULL,
    numero_inscricao NUMERIC,
    cpf_atleta VARCHAR(11) NOT NULL,
    id_evento int NOT NULL,
    FOREIGN KEY (cpf_atleta) REFERENCES atleta(cpf),
    FOREIGN KEY (id_evento) REFERENCES evento(id)

);

CREATE TABLE IF NOT EXISTS pagamento(
    id INT NOT NULL auto_increment PRIMARY KEY,
    forma_de_pagamento VARCHAR(50) NOT NULL,
    hora_pagamento TIME,
    data_pagamento DATE,
    valor DECIMAL(7,2) NOT NULL,
    id_inscricao int NOT NULL,
    FOREIGN KEY (id_inscricao) REFERENCES inscricao(id)
    
);