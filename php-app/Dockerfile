FROM php:8.1-apache

# 한글 지원을 위한 로케일 설정
RUN apt-get update && apt-get install -y locales && \
    localedef -i ko_KR -c -f UTF-8 -A /usr/share/locale/locale.alias ko_KR.UTF-8
ENV LANG ko_KR.utf8

# Apache 설정
RUN a2enmod rewrite

# 작업 디렉토리 설정
WORKDIR /var/www/html

# 애플리케이션 파일 복사
COPY . /var/www/html/

# 권한 설정
RUN chown -R www-data:www-data /var/www/html

# php.ini 설정 복사
COPY php.ini /usr/local/etc/php/

# 포트 설정
EXPOSE 80

# Apache 실행
CMD ["apache2-foreground"]