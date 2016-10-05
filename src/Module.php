<?php
namespace mhndev\yii2Eav;

use yii\base\BootstrapInterface;
use yii\base\Module as BaseModule;
use yii\console\Application as ConsoleApplication;

/**
 * Class Module
 * @package mhndev\yii2Eav
 */
class Module extends BaseModule implements BootstrapInterface
{
    public $db = 'db';

    public $controllerNamespace = 'mhndev\yii2Eav\Controllers';



    public function init()
    {
        parent::init();

        $config = include \Yii::getAlias('@app/config/').DIRECTORY_SEPARATOR.'eav.php';
    }

    /**
     * @param \yii\base\Application $app
     */
    public function bootstrap($app)
    {
        if ($app instanceof ConsoleApplication) {
            $this->controllerNamespace = 'mhndev\yii2Eav\Commands';
        }
    }
}
