<?php

/**
 * Lite Php Framewrok
 * @author Mohammad Aktaa mohammedaktaa1995@gmail.com
 */

/*
|---------------------------------------
|  Register autoloader
|---------------------------------------
*/
require __DIR__.'/../vendor/autoload.php';

/*
|---------------------------------------
|  Bootstrap application
|---------------------------------------
*/
require __DIR__.'/../bootstrap/app.php';

/*
 |--------------------------------------
 | Run the application
 |--------------------------------------
 |
 |--------------------------------------
 | Handle the request and send response
 |--------------------------------------
 */
$app = Application::run();


