<?php
namespace zaabr\pages;
use Yii;
use yii\base\BootstrapInterface;
class Bootstrap implements BootstrapInterface{
    //Метод, который вызывается автоматически при каждом запросе
    public function bootstrap($app)
    {
        //Правила маршрутизации
        $app->getUrlManager()->addRules([
            'pages' => 'zaabr/pages/index',
        ], false);
        /*
         * Регистрация модуля в приложении
         * (вместо указания в файле frontend/config/main.php
         */
         $app->setModule('zaabr', 'zaabr\pages\Module');
    }
}