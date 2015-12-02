<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

class ControllerBase extends Controller
{
    /**
     * ルーティングにマッチしている必要があるか
     */
    protected $requireRouteMatched = true;

    public function beforeExecuteRoute(Dispatcher $dispacher)
    {
        /**
         * ルーティングにマッチしない場合は、404エラーにフォワード
         */
        if ($this->requireRouteMatched &&
            is_null($this->router->getMatchedRoute()->getName())) {
            return $dispacher->forward([
                'controller' => 'error',
                'action' => 'notFound',
            ]);
        }
    }

}
