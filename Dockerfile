# Python 3.12 버전을 베이스 이미지로 사용합니다.
FROM python:3.12-slim

# 작업 디렉토리를 설정합니다.
WORKDIR /app

# 필요한 패키지들을 설치합니다.
COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

# Nginx와 PHP-FPM 설치
RUN apt-get update && apt-get install -y nginx php-fpm openssl

# SSL 인증서 생성
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=US/ST=Denial/L=Springfield/O=Dis/CN=www.example.com"

# 애플리케이션 코드를 컨테이너 안으로 복사합니다.
COPY . .

# Nginx 설정 파일을 복사합니다.
COPY nginx.conf /etc/nginx/nginx.conf

# 기본 Nginx 설정 제거
RUN rm /etc/nginx/sites-enabled/default

# 시작 스크립트 생성
RUN echo '#!/bin/bash\n\
export PORT=${PORT:-5000}\n\
gunicorn --bind 127.0.0.1:8000 app:app &\n\
service php8.2-fpm start\n\
envsubst \'\$PORT\' < /etc/nginx/nginx.conf > /etc/nginx/nginx.conf.tmp && mv /etc/nginx/nginx.conf.tmp /etc/nginx/nginx.conf\n\
nginx -g "daemon off;"' > /app/start.sh && chmod +x /app/start.sh

# Nginx, PHP-FPM, OpenSSL, gettext-base 설치
RUN apt-get update && apt-get install -y nginx php-fpm openssl gettext-base

# 시작 스크립트 실행
CMD ["/app/start.sh"]

# Nginx를 통해 Flask와 PHP 애플리케이션을 서비스하기 위해 포트를 노출합니다.
EXPOSE $PORT