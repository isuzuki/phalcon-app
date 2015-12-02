<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;

$router = new Router();

// 末尾のスラッシュを自動的に取り除く
$router->removeExtraSlashes(true);

// items APIのルーティング定義
$group = new RouterGroup();
$group->setPrefix('/api/items');

$group->addGet('', 'Items::index');
$group->addGet('{id:[0-9]+}', 'Items::get');
$group->addPost('', 'Items::create');
$group->addPut('{id:[0-9]+}', 'Items::update');
$group->addDelete('{id:[0-9]+}', 'Items::delete');

$router->mount($group);

// ajax APIのルーティング定義
$router->addGet('/ajax', 'Ajax::index')
    ->setName('ajax.index')
    ->beforeMatch(function($uri, $route, $router) {
        return $router->getDI()
            ->get('request')
            ->isAjax();
    });

return $router;
