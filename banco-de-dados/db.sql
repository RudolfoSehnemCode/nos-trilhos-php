CREATE DATABASE nos_trilhos;
USE nos_trilhos;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    data_nasc DATE NOT NULL,
    cargo ENUM('Funcionario', 'Admin') NOT NULL 

);

CREATE TABLE log_email (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL,
  status ENUM('ok','invalid','api_error') NOT NULL,
  detail VARCHAR(255),
  verificado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO usuarios (nome, email, senha, cpf, data_nasc, cargo)
VALUES 
    ('admin', 'admin@gmail.com', 'admin123@', '000.000.000-00', '2000-01-01', 'Admin'),
    ('Rudolfo', 'rudolfo@gmail.com', 'rudolfo123', '001.000.000-23', '2008-02-28', 'Admin'),
    ('Pierre', 'pierre@gmail.com', 'pierre123', '123.456.678-10', '2000-01-01', 'Funcionario'),
    
    

    
    
