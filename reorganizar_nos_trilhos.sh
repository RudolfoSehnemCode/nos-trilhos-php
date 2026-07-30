#!/bin/bash
set -e

mkdir -p public/css public/images src/config database

git mv html/index.php public/index.php
git mv html/login.php public/login.php
git mv html/loginfaca.php public/loginfaca.php
git mv html/logout.php public/logout.php
git mv html/dashboard.php public/dashboard.php
git mv html/dashboard2.php public/dashboard2.php
git mv html/gestao.php public/gestao.php
git mv html/relatorio.php public/relatorio.php
git mv html/manutencao.php public/manutencao.php
git mv html/alertas.php public/alertas.php
git mv html/adicionar-funcionario.php public/adicionar-funcionario.php
git mv html/processa_cadastro.php public/processa_cadastro.php
git mv html/finalizacao_cadastro.php public/finalizacao_cadastro.php
git mv html/api.php public/api.php

git mv html/db.php src/config/db.php
git mv html/Auth.php src/Auth.php

git mv style.css public/css/style.css
git mv images/*.png public/images/

git mv banco-de-dados/db.sql database/schema.sql

rmdir html images banco-de-dados 2>/dev/null || true
