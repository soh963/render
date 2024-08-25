# 이 파일의 이름은 index.php예요
# 이 파일은 우리 웹사이트의 첫 페이지예요
<?php
echo "안녕하세요! PHP로 만든 웹사이트입니다!";
?>

# 이 파일의 이름은 .htaccess예요
# 이 파일은 우리 웹사이트의 교통정리를 도와줘요
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [QSA,L]