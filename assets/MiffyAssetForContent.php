<?php
/**
 * Created by PhpStorm.
 * User: miffy
 * Date: 2017/9/1
 * Time: 上午10:00
 * Desc:
 */

namespace miffy\miffyzq\assets;


use yii\web\AssetBundle;

class MiffyAssetForContent extends AssetBundle
{
    public $sourcePath = "@vendor/miffy/miffyzq/static";

    public $css = [
        'css/content.css',
    ];
}