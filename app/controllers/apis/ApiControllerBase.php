<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;

/**
 * API用ベースコントローラー
 */
class ApiControllerBase extends ControllerBase
{
    public function afterExecuteRoute(Dispatcher $dispacher)
    {
        $this->view->disable();

        return $this->response
            ->setContentType('application/json', 'UTF-8')
            ->setJsonContent([
                'data' => $dispacher->getReturnedValue(),
            ])
            ->send();
    }
}
