# Python 3.12 버전을 베이스 이미지로 사용합니다.
FROM python:3.12-slim

# 작업 디렉토리를 설정합니다.
WORKDIR /app

# 필요한 패키지들을 설치합니다.
COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

# Nginx와 PHP-FPM 설치
RUN apt-get update && apt-get install -y nginx php-fpm

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
sed -i "s/listen 80/listen $PORT/g" /etc/nginx/nginx.conf\n\
nginx -g "daemon off;"' > /app/start.sh && chmod +x /app/start.sh

# 시작 스크립트 실행
CMD ["/app/start.sh"]

# Nginx를 통해 Flask와 PHP 애플리케이션을 서비스하기 위해 포트를 노출합니다.
EXPOSE $PORT