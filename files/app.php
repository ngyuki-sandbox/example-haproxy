<?php
session_start();

setcookie('HAPROXY', "", time() - 3600);

header('Content-type: application/json');

while (ob_get_level()) {
    ob_end_clean();
}
flush();

echo json_encode(array(
    'server' => php_uname('n'),
    'headers' => apache_request_headers(),
), JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);

echo PHP_EOL;
flush();
