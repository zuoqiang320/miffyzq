manage system UI
================
基于H+后台管理UI,第一次做的初版

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require miffy/miffyzq "1.0.10"
```

or add

```
"miffy/miffyzq": "1.0.10"
```

to the require section of your `composer.json` file.

Picture
-------
![login](http://wx3.sinaimg.cn/mw690/7552a991gy1fl9oh8x8fij21kw0tvn0p.jpg)
![index](https://wx1.sinaimg.cn/mw690/7552a991gy1fl9oh8x99tj21kw0txn0t.jpg)


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
'view' => [
    'theme' => [
        'pathMap' => [
            '@app/views' => '@vendor/miffy/miffyzq/views'
        ],
    ],
],
```
