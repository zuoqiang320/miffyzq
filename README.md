manage system UI
================
基于H+后台管理UI,第一次做的初版

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require miffy/miffyzq "1.0.11"
```

or add

```
"miffy/miffyzq": "1.0.11"
```

to the require section of your `composer.json` file.

Picture
-------
![login](https://wx4.sinaimg.cn/mw690/7552a991gy1fq6f65orosj21kw0s9n46.jpg)
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
