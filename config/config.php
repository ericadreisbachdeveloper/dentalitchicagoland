<?php

if ( $_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === 'dentalitchicagoland.local' ) {
    define('LOCAL', 'local');
    define('SITE', 'https://dentalitchicagoland.local/');
    define('FILEPATH', $_SERVER['DOCUMENT_ROOT'] . '/');
} else {
    define('SITE', 'https://' . $_SERVER['HTTP_HOST']);
    define('FILEPATH', $_SERVER['DOCUMENT_ROOT'] . '/');
}


if ( $_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']) ) {
    header('HTTP/1.0 403 Forbidden', true, 403);
    die(header('location: ' . SITE . '/error/'));
}



# define('CLOUD', 'https://d276vs7inno1cd.cloudfront.net/');
define('CLOUD', 'https://localseo.us-ord-10.linodeobjects.com/');

# for use with contact form
# define('ALTCHA_KEY', '38e80d21dbb018328490ebac5294aef515b50044523317e77c76a728ab3821ce');


$_SESSION['config'] = 1;

# from parent of /config
# $ scp ./config/config.php paper:~/config/
# $ scp -r ./vendor paper:~/
