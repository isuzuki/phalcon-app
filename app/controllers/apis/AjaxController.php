<?php

class AjaxController extends ApiControllerBase
{
    protected $requireRouteMatched = true;

    public function indexAction()
    {
        return [
            'login' => 'hoge',
            'id' => 7,
            'url' => 'https://api.github.com/users/hoge',
        ];
    }
}
