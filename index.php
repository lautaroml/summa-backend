<?php

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/vendor/larapack/dd/src/helper.php';

require __DIR__ . '/app/core/bootstrap.php';

use App\Core\Router;
use App\Core\Request;

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
