<?php

namespace app\controllers;


/**
 * MainController
 *
 * @author sergey
 */
class MainController extends AppController
{
    public function indexAction() 
    {
        //echo 'MainController::IndexAction';
        //print_r($this->route);
        $this->setMeta('Индекс пейдж', "Это описание индекс пейдж", "Это кейвордс");
        $this->setData(['name' => 'Suslik']);
    }
}
