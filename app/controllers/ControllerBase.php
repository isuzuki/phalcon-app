<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

class ControllerBase extends Controller
{
    /**
     * ルーティングにマッチしている必要があるか
     */
    protected $requireRouteMatched = false;

    public function beforeExecuteRoute(Dispatcher $dispatcher)
    {
        /**
         * ルーティングにマッチしない場合は、404エラーにフォワード
         */
        if ($this->requireRouteMatched &&
            is_null($this->router->getMatchedRoute()->getName())) {
            return $dispatcher->forward([
                'controller' => 'error',
                'action' => 'notFound',
            ]);
        }
    }

}
