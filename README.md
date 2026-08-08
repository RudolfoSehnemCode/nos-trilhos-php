# Nos Trilhos — Sistema Ferroviário com IoT

Protótipo de sistema web para gestão de acesso em ambiente ferroviário, desenvolvido em PHP durante o curso Técnico em Desenvolvimento de Sistemas (SESI). Integra sensores físicos (Arduino/ESP32) para identificação de usuários, com armazenamento e controle de acesso em banco de dados MySQL.

## Sobre o projeto

O sistema simula o controle de acesso de um ambiente ferroviário, combinando desenvolvimento web tradicional com um componente de IoT:

- **Login e cadastro de usuários** — apenas usuários previamente cadastrados no banco de dados conseguem acessar o sistema.
- **Sensores de identificação** — sensores conectados a um Arduino/ESP32 reconhecem e classificam diferentes tipos de usuários, permitindo controle de acesso e personalização da experiência conforme o perfil.
- **Banco de dados estruturado** — armazenamento organizado das informações de usuários, garantindo gestão segura e eficiente dos dados.
- **Painéis de gestão** — dashboards de monitoramento de rotas, manutenção, relatórios e alertas.
- **Perfil de usuário** — edição de dados pessoais, upload de foto de perfil e exclusão de conta.

Este projeto foi construído como exercício prático de PHP, banco de dados relacional e integração com hardware, durante a formação técnica.

## Tecnologias utilizadas

- **PHP** — lógica de backend e controle de acesso
- **MySQL** — banco de dados relacional
- **HTML / CSS** — interface web
- **Arduino / ESP32** — sensores de identificação (IoT)

## Estrutura do projeto

```
nos-trilhos-php/
├── public/              # documento raiz, acessado pelo navegador
│   ├── index.php
│   ├── login.php
│   ├── perfil.php
│   ├── atualizar_foto.php
│   ├── deletar_usuario.php
│   ├── dashboard.php
│   ├── gestao.php
│   ├── relatorio.php
│   ├── manutencao.php
│   ├── alertas.php
│   ├── ...
│   ├── css/
│   │   └── style.css
│   └── images/
│       └── perfil/       # fotos de perfil enviadas pelos usuários
├── src/                 # lógica interna, não acessível diretamente pelo navegador
│   ├── config/
│   │   └── db.php       # conexão com o banco de dados
│   ├── partials/
│   │   ├── sidebar.php
│   │   └── footer.php
│   └── Auth.php          # autenticação de usuários
├── database/
│   └── schema.sql        # estrutura das tabelas do MySQL
└── README.md
```

## Como executar localmente

1. Configure um ambiente com PHP e MySQL (ex: `php -S localhost:8000 -t public` para servir a pasta `public/` com o servidor embutido do PHP).
2. Importe `database/schema.sql` no seu MySQL para criar as tabelas necessárias.
3. Ajuste as credenciais de conexão com o banco em `src/config/db.php`.
4. Garanta permissão de escrita na pasta de upload de fotos (veja seção abaixo).
5. Acesse o sistema pelo navegador em `http://localhost:8000`.

### Permissão da pasta de upload de foto de perfil

O recurso de foto de perfil salva os arquivos em `public/images/perfil/`. Para que o upload funcione, essa pasta precisa de permissão de escrita para o usuário/grupo que roda o servidor Apache/PHP (não apenas para o seu usuário do sistema).

No Linux (ambiente XAMPP), rode:

```bash
sudo chown -R $USER:daemon public/images/
sudo chmod -R 775 public/images/
```

> O grupo pode variar dependendo da distro ou instalação (`daemon`, `www-data`, `apache`, etc). Para descobrir qual usuário seu Apache está usando, rode:
> ```bash
> ps aux | grep httpd
> ```

Sem esse ajuste, o upload falha silenciosamente e o usuário é redirecionado com o erro `?erro=upload_falhou`.

## Status

Projeto de mockup/aprendizado, desenvolvido durante o Técnico em Desenvolvimento de Sistemas. Estrutura reorganizada seguindo boas práticas de separação entre arquivos públicos e lógica interna.

## Autor

**Rudolfo Sehnem**
[github.com/RudolfoSehnemCode](https://github.com/RudolfoSehnemCode)