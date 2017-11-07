<?php
namespace miffy\miffyzq\assets;
/**
 * Created by PhpStorm.
 * User: miffy
 * Date: 2017/8/4
 * Time: 下午1:56
 * Desc:
 */

use yii\web\AssetBundle;

/**
 * Class MiffyLoginAsset
 * @package miffy\miffyzq\assets
 */
class MiffyLoginAsset extends AssetBundle
{
    public $sourcePath = "@vendor/miffy/miffyzq/static";

    public $css = [
        'css/style.min862f.css?v=4.1.0',
        'css/animate.css',
        'css/login.css',
    ];

    public $js = [
        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimscroll/jquery.slimscroll.min.js',
        "js/plugins/layer/layer.min.js",
        "js/hplus.min.js?v=4.1.0",
        "js/contabs.min.js",
        "js/pace.min.js",

    ];

    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];


}