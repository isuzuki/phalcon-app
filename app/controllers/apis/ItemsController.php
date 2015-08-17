<?php

class ItemsController extends ApiControllerBase
{

    public function allAction()
    {
        $items = [
            'item1' => [
                'name' => 'hoge',
                'caption' => 'foo',
            ],
            'item2' => [
                'name' => 'fuga',
                'caption' => 'bar',
            ],
            'item3' => [
                'name' => 'piyo',
                'caption' => 'baz',
            ],
        ];

        return $items;
    }

}

