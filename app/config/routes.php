<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;

$router = new Router();

// 末尾のスラッシュを自動的に取り除く
$router->removeExtraSlashes(true);

$group = new RouterGroup();
$group->setPrefix('/api');

$group->addGet('/items', 'Items::index');
$group->addGet('/items/{id:[0-9]+}', 'Items::get');
$group->addPost('/items', 'Items::create');
$group->addPut('/items/{id:[0-9]+}', 'Items::update');
$group->addDelete('/items/{id:[0-9]+}', 'Items::delete');

$router->mount($group);

return $router;
