<?php
header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
// mb_http_input('UTF-8');  // 이 줄을 제거하거나 아래와 같이 수정
mb_language('uni');
mb_regex_encoding('UTF-8');

echo "<h1>안녕하세요! PHP 앱입니다.</h1>";
phpinfo();
?>