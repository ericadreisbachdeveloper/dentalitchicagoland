<?php

require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

if ( $_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']) ) {
    header('HTTP/1.0 403 Forbidden', true, 403);
    die(header('location: ' . SITE . '/error/'));
}
