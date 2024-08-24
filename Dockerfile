FROM python:3.12-slim

WORKDIR /app

COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

RUN apt-get update && apt-get install -y nginx php-fpm openssl gettext-base

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=US/ST=Denial/L=Springfield/O=Dis/CN=www.example.com"

COPY . .

RUN mkdir -p /app/php && echo "<?php phpinfo(); ?>" > /app/php/index.php
RUN mkdir -p /app/static && echo "<html><body><h1>Static HTML</h1></body></html>" > /app/static/index.html
RUN mkdir -p /usr/share/nginx/html && echo "<html><body><h1>Error 500</h1></body></html>" > /usr/share/nginx/html/50x.html

COPY nginx.conf /etc/nginx/nginx.conf
RUN rm /etc/nginx/sites-enabled/default

# 비root 사용자 생성
RUN groupadd -r phpuser && useradd -r -g phpuser phpuser

# PHP-FPM 설정 수정
RUN sed -i 's/\/run\/php\/php8.2-fpm.sock/\/var\/run\/php8.2-fpm.sock/g' /etc/php/8.2/fpm/pool.d/www.conf && \
    sed -i 's/www-data/phpuser/g' /etc/php/8.2/fpm/pool.d/www.conf

# 필요한 디렉토리 생성 및 권한 설정
RUN mkdir -p /var/run/php && \
    chown phpuser:phpuser /var/run/php && \
    chown -R phpuser:phpuser /app

RUN echo '#!/bin/bash\n\
export PORT=${PORT:-5000}\n\
php-fpm8.2 --nodaemonize --fpm-config /etc/php/8.2/fpm/php-fpm.conf &\n\
gunicorn --bind 127.0.0.1:8000 app:app &\n\
envsubst "\\$PORT" < /etc/nginx/nginx.conf > /etc/nginx/nginx.conf.tmp && mv /etc/nginx/nginx.conf.tmp /etc/nginx/nginx.conf\n\
nginx -g "daemon off;"' > /app/start.sh && chmod +x /app/start.sh

CMD ["/app/start.sh"]

EXPOSE $PORT