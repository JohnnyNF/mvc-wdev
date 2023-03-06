<?php

require __DIR__ . '/vendor/autoload.php';

use  \App\Http\Router;
use \App\Controller\Pages\Home;

define('URL', 'http://localhost:8080/projeto/mvc');


$obRouter = new Router(URL);

echo '<pre>';
print_r($obRouter);die;
echo '</pre>';

exit;

echo Home::getHome();
