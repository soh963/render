# Python 3.12 버전을 베이스 이미지로 사용합니다.
FROM python:3.12-slim AS python-flask

# 작업 디렉토리를 설정합니다.
WORKDIR /app

# 필요한 패키지들을 설치합니다.
COPY requirements.txt .

RUN pip install --no-cache-dir -r requirements.txt

# 애플리케이션 코드를 컨테이너 안으로 복사합니다.
COPY . .

# PHP-FPM과 Nginx 설치를 위해 별도의 스테이지를 사용합니다.
FROM php:8.2-fpm AS php

# Nginx를 설치합니다.
RUN apt-get update && apt-get install -y nginx

# 작업 디렉토리를 설정합니다.
WORKDIR /var/www/html

# Flask 애플리케이션 코드 복사
COPY --from=python-flask /app /var/www/html/app

# PHP 파일 복사 (필요한 경우)
COPY php/ /var/www/html/php

# 정적 파일 복사 (필요한 경우)
COPY static/ /var/www/html/static

# Nginx 설정 파일을 복사합니다.
COPY etc/nginx/nginx.conf /etc/nginx/nginx.conf

# 기본 Nginx 설정 제거 (sites-enabled 폴더 내 기본 설정 제거)
RUN rm /etc/nginx/sites-enabled/default

# Flask 애플리케이션과 PHP를 서비스하기 위해 Nginx 및 PHP-FPM을 시작합니다.
CMD gunicorn -w 4 -b 0.0.0.0:5000 app:app & \
    php-fpm & \
    nginx -g 'daemon off;'

# Nginx를 통해 Flask와 PHP 애플리케이션을 서비스하기 위해 포트를 노출합니다.
EXPOSE 80
