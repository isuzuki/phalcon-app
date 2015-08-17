<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;

$router = new Router();

$group = new RouterGroup();
$group->setPrefix('/api');

$group->addGet('/items', 'Items::all');

$router->mount($group);

return $router;
