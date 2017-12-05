<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/4
 * Time: 14:40
 */

namespace services\controllers;


use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex(){
        $this->layout=false;
        return $this->render('index');
    }
}