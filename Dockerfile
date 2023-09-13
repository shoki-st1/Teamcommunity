# Node.jsイメージをベースにする
FROM node:14

# ApacheとPHPモジュールのインストール
RUN apt-get update && apt-get install -y \
    apache2 \
    php

# Apacheの設定ファイルをコピー
COPY ./apache.conf /etc/apache2/conf-available/

# ドキュメントルートにファイルをコピー
COPY ./src/ /var/www/html/

# Apacheの設定を有効にする
RUN a2enconf apache.conf

# Node.jsアプリケーションの依存関係をインストール
WORKDIR /var/www/html/
RUN npm install

# Apacheを起動
CMD ["apache2-foreground"]





# FROM php:apache

# # webの公開にコピー
# COPY ./src/ /var/www/html/
# COPY ./apache.conf /etc/apache2/conf-available/

# # ディレクトリの移動
# WORKDIR /var/www/html/

# RUN npm install
# # RUN a2enconf apache

# # EXPOSE 80
