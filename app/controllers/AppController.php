<?php

namespace app\controllers;

use app\models\AppModel;
use ishop\base\Controller;

class AppController extends Controller{

    public function __construct($route){
        parent::__construct($route);
        new AppModel();
    }

    public function getRequestId($get = true, $id = 'id')
    {
        if ($get){
            $data = $_GET;
        }else{
            $data = $_POST;
        }
        $id = !empty($data[$id]) ? (int)$data[$id] : null;
        if (!$id){
            throw new \Exception('Страница не найдена', 404);
        }
        return $id;
    }

}