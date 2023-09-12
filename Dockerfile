FROM php:apache

# webの公開にコピー
COPY ./src/ /var/www/html/
COPY ./apache.conf /etc/apache2/conf-available/

# ディレクトリの移動
WORKDIR /var/www/html/

# RUN a2enconf apache

# EXPOSE 80
