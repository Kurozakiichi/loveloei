<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
/**
 * Description of MyController
 *
 * @author LENOVO
 */
class MyController extends controller{
    public function actionMy(){
        $mytext = 'ส่งค่าจากตัวแปร';
        return $this->render('my',[
            'value'=>9999999,
            'value2'=>'ส่งค่ามาแล้วนะ',
            'value3'=>$mytext
            ]
         );
    }
}
