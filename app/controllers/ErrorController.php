<?php

class ErrorController extends ControllerBase
{
    protected $requireRouteMatched = false;

    public function notFoundAction()
    {
        $this->response->setStatusCode(404, 'Not Found');
    }

}

