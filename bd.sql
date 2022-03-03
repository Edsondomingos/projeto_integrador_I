CREATE DATABASE IF NOT EXISTS projeto;

USE projeto;

CREATE TABLE IF NOT EXISTS evento(
    id INT NOT NULL auto_increment PRIMARY KEY,
    local_evento VARCHAR(100) NOT NULL,
    data_evento DATE NOT NULL,
    imagem VARCHAR(100) NOT NULL,
    descricao VARCHAR(500) NOT NULL,
    resultado DECIMAL(10,2),
    titulo VARCHAR(100) NOT NULL

);

CREATE TABLE IF NOT EXISTS pagamento(
    id INT NOT NULL auto_increment PRIMARY KEY,
    forma_de_pagamento VARCHAR(50) NOT NULL,
    hora_pagamento TIME,
    data_pagamento DATE,
    valor DECIMAL(10,2) NOT NULL,
    id_inscricao int NOT NULL,
    FOREIGN KEY (id_inscricao) REFERENCES inscricao(id)
    
);