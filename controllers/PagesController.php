<?php
namespace zaabr\pages\controllers;
use Yii;
use yii\web\Controller;
use zaabr\pages\models\Tests;
class PagesController extends Controller
{
    public $layout = 'main';
    public function actionIndex()
    {
        // регистрируем ресурсы:
        \klisl\mytest\TestsAssetsBundle::register($this->view);
        $datas = Tests::find()->all();
        return $this->render('index',[
            'datas' => $datas
        ]);
    }
}