Para rodar o projeto em sua máquina, siga os seguintes passos:

Certifique-se que tenha o docker e o docker-compose instalado em sua máquina.

```$ git clone git@github.com:devEzequiel/kanban-api.git```
<br />
<br />
```$ cd kanban-api```
<br />
<br />
```$ cp .env.example .env```
<br />
<br />
```$ docker-compose up -d```
<br />
<br />
```$ docker exec -it "api_app_1" bash```
<br />
<br />
```$ composer install```
<br />
<br />
```$ php artisan key:generate```
<br />
<br />
