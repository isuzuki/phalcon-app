<?php

class ItemsController extends ApiControllerBase
{

    public function indexAction()
    {
        return Items::find()->toArray();
    }

    public function getAction($id)
    {
        $result = [];
        $item = Items::findFirst($id);
        if ($item) {
            $result = $item->toArray();
        }

        return $result;
    }

    public function createAction()
    {
        $params = $this->request->getPost();
        $item = new Items();

        $item->name = $params['name'];
        $item->save();

        return 'success';
    }

    public function updateAction($id)
    {
        $item = Items::findFirst($id);
        if ($item) {
            $params = $this->request->getPut();
            $item->name = $params['name'];
            $item->save();
        }

        return 'success';
    }

    public function deleteAction($id)
    {
        $item = Items::findFirst($id);
        if ($item) {
            $item->delete();
        }

        return 'success';
    }
}
