# Nos Trilhos — Sistema Ferroviário com IoT

Protótipo de sistema web para gestão de acesso em ambiente ferroviário, desenvolvido em PHP durante o curso Técnico em Desenvolvimento de Sistemas (SESI). Integra sensores físicos (Arduino/ESP32) para identificação de usuários, com armazenamento e controle de acesso em banco de dados MySQL.

## Sobre o projeto

O sistema simula o controle de acesso de um ambiente ferroviário, combinando desenvolvimento web tradicional com um componente de IoT:

- **Login e cadastro de usuários** — apenas usuários previamente cadastrados no banco de dados conseguem acessar o sistema.
- **Sensores de identificação** — sensores conectados a um Arduino/ESP32 reconhecem e classificam diferentes tipos de usuários, permitindo controle de acesso e personalização da experiência conforme o perfil.
- **Banco de dados estruturado** — armazenamento organizado das informações de usuários, garantindo gestão segura e eficiente dos dados.

Este projeto foi construído como exercício prático de PHP, banco de dados relacional e integração com hardware, durante a formação técnica.

## Tecnologias utilizadas

- **PHP** — lógica de backend e controle de acesso
- **MySQL** — banco de dados relacional
- **HTML / CSS** — interface web
- **Arduino / ESP32** — sensores de identificação (IoT)

## Estrutura do projeto

```
nos-trilhos-php/
├── banco-de-dados/   # scripts e estrutura do banco MySQL
├── html/              # páginas e templates do sistema
├── images/            # imagens usadas na interface
└── style.css          # estilização da aplicação
```

## Como executar localmente

1. Configure um ambiente com PHP e MySQL (ex: `php -S localhost:8000` para o servidor embutido do PHP).
2. Importe o(s) script(s) SQL da pasta `banco-de-dados/` no seu MySQL para criar as tabelas necessárias.
3. Ajuste as credenciais de conexão com o banco no(s) arquivo(s) PHP correspondente(s).
4. Acesse o sistema pelo navegador em `http://localhost:8000`.

## Status

Projeto de mockup/aprendizado, desenvolvido durante o Técnico em Desenvolvimento de Sistemas. Estrutura em processo de reorganização e melhoria contínua.

## Autor

**Rudolfo Sehnem**
[github.com/RudolfoSehnemCode](https://github.com/RudolfoSehnemCode)