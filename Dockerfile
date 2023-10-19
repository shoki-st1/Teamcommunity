FROM php:apache
# webの公開にコピー
COPY ./src/ /var/www/html/
COPY ./apache.conf /etc/apache2/conf-available/

# ディレクトリの移動
WORKDIR /var/www/html/

# MySQLi拡張機能を有効にする
# mysqlのpdoを有効にする
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli
RUN a2enconf apache

EXPOSE 80