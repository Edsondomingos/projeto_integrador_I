CREATE DATABASE IF NOT EXISTS corrida;
use corrida;
CREATE TABLE IF NOT EXISTS atleta(
    cpf VARCHAR(14) NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data_de_nascimento DATE NOT NULL,
    telefone VARCHAR(14) NOT NULL,
    email VARCHAR(100) NOT NULL,
    usuario VARCHAR(30) NOT NULL,
    senha VARCHAR(30) NOT NULL,
    imagem VARCHAR(20) DEFAULT 'padrao.png' NOT NULL

);

CREATE TABLE IF NOT EXISTS evento(
    id INT NOT NULL auto_increment PRIMARY KEY,
    local_evento VARCHAR(100) NOT NULL,
    data_evento DATE NOT NULL,
    imagem VARCHAR(100) NOT NULL,
    descricao VARCHAR(500) NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    valor  DECIMAL(7,2) NOT NULL,
    criador VARCHAR(14) NOT NULL,
    FOREIGN KEY (criador) REFERENCES atleta(cpf)

);

CREATE TABLE IF NOT EXISTS inscricao(
    numeroinscricao int NOT NULL auto_increment PRIMARY KEY,
    data_hora_inscricao DATETIME NOT NULL,
    resultado VARCHAR(10),
    imagem_evento VARCHAR(100) NOT NULL,
    titulo_evento VARCHAR(100) NOT NULL,
    valor_evento  DECIMAL(7,2) NOT NULL,
    cpf_atleta VARCHAR(14) NOT NULL,
    id_evento int NOT NULL,    
    FOREIGN KEY (cpf_atleta) REFERENCES atleta(cpf),
    FOREIGN KEY (id_evento) REFERENCES evento(id)

);

CREATE TABLE IF NOT EXISTS pagamento(
    id INT NOT NULL auto_increment PRIMARY KEY,
    forma_de_pagamento VARCHAR(50) NOT NULL,
    data_hora_pagamento DATETIME NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    valor DECIMAL(7,2) NOT NULL,
    pagador VARCHAR(14) NOT NULL,
    num_evento INT NOT NULL,
    numeroinscricao_inscricao int NOT NULL,
    FOREIGN KEY (numeroinscricao_inscricao) REFERENCES inscricao(numeroinscricao)
    
);