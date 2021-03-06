<?php
/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace backend\assets;

use yii\web\AssetBundle;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 *
 * Customized by Nenad Živković
 */
class AppAssetMobile extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';
    
    public $css = [
        'css/bootstrap.css',
        'css/bootstrap.min.css',
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/framework7/dist/css/framework7.ios.min.css',
        'bower_components/swipebox/src/css/swipebox.css',
        'css/app.css',
        'css/style.css',

    ];
    public $js = [

        'bower_components/framework7/dist/js/framework7.js',
        'bower_components/framework7/dist/js/framework7.js.map',
        'bower_components/framework7/dist/js/framework7.min.js',
        'bower_components/framework7/dist/js/framework7.min.js.map',
        'bower_components/framework7/dist/js/my-app.js',
        'js/app.js',
        'js/min/app.js',
        'js/jflickrfeed.min.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
