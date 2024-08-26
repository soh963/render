<?php
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');

echo "안녕하세요! PHP에서 보내는 한글 메시지입니다.";
phpinfo();
?>