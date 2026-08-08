CREATE DATABASE nos_trilhos;
USE nos_trilhos;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    data_nasc DATE NOT NULL,
    cargo ENUM('Funcionario', 'Admin') NOT NULL,
    foto VARCHAR(255) DEFAULT NULL
);

CREATE TABLE log_email (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    status ENUM('ok','invalid','api_error') NOT NULL,
    detail VARCHAR(255),
    verificado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Usuário de teste: teste@gmail.com / senha: 123
INSERT INTO usuarios (nome, email, senha, cpf, data_nasc, cargo)
VALUES
    ('teste', 'teste@gmail.com', '$2y$10$WOGplODBbSUBa1m3WzUe6u44t98R8a3xJDWi5H9v2rg.K8LUpyBZS', '123.456.789-00', '2008-02-20', 'Admin');