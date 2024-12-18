<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## Este projeto foi feito com
* Laravel 11
* Docker 24.0.7
* Docker Compose v2.30.3
* Postgres
* Nginx
* PgAdmin
* Codeium

## Instruções para rodar o projeto

Primeiro passo, abra o terminal dentro da pasta raiz do projeto e rode o comando para subir os containers.
> docker-compose up -d

Comando alternativo (depende da versão instalada)
> docker compose up -d

Segundo passo, vamos entrar dentro do container do app Laravel.
> docker exec -ti user_laravel_api-app-1 bash

Terceiro passo, vamos instalar as dependências.
> composer install

Quarto passo, vamos fazer a migração do banco de dados.
> php artisan migrate

Quinto passo, rodar o sevidor.
> php artisan serve

Último passo, verificar se o servidor está online, acesse.
> http://localhost:8000

Verifique a mensagem _"servidor online"_.
