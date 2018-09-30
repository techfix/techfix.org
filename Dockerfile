FROM techfix/laravel-base:latest

COPY . /var/www/html

RUN chmod -R 777 storage
