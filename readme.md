

Разработайте класс для парсинга треков и артистов с сайта Soundcloud и сохранения их в БД. 
Треки необходимо получать только с первой страницы, без пагинации.


Класс получает ссылку на артиста вида https://soundcloud.com/lakeyinspired и парсит треки данного артиста:

https://soundcloud.com/lakeyinspired

https://soundcloud.com/aljoshakonstanty

https://soundcloud.com/birocratic

https://soundcloud.com/dixxy-2

https://soundcloud.com/dekobe

Класс должен:
Получать данные треков и сохранять их в БД 
(как минимум 

1. название, 
2. продолжительность, 
3. количество прослушиваний 
4. и комментариев; треки скачивать не нужно);

Получать данные артиста и сохранять их в БД (
5. как минимум имя, 
6. псевдоним, 
7. город, 
8. количество подписчиков);
9. Перед сохранением проверять, есть ли данный трек или артист в БД.

Результатом выполнения задания должен быть публичный репозиторий на GitHub, обязательно содержащий в себе:

SoundCloudParser.php - класс для парсинга Soundcloud;
Example .php - пример использования;
Db.sql  - SQL - запросы для создания всех необходимых таблиц;
Readme.md - описание проекта.

Рекомендуемые технологии:
PHP 7+ (использование фреймворка на усмотрение исполнителя, можно без него);
Composer;
MySQL (структура таблиц на усмотрение исполнителя).


In this project I used:
1. Composer (version 2.1.12)   (make composer)
2. Symfony CLI version v4.26.8 installed globally  (make symfony)
4. php v.8.0 - docker
6. hacker music playlist https://www.youtube.com/watch?v=M5QY2_8704o&list=PLdE7uo_7KBkfAWkk7-Clm18krBuziKQfr


How to start...

create .env.local file

configure DATABASE_URL in this file 

for example:

DATABASE_URL="mysql://parser:parser@parser_mysql:3306/parser?serverVersion=mariadb-10.6.4"

Run docker.

./docker/up --build

Then go to PHP container

./docker/php

make a migration inside this container

php bin/console make:migration

php bin/console doctrine:migrations:migrate

to check database just visit the http://localhost:8002/ in your browser

to check the example just visit the http://localhost:8000/example.php in your browser


