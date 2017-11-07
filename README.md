manage system UI
================
基于H+后台管理UI,第一次做的初版

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require miffy/miffyzq "1.0.4"
```

or add

```
"miffy/miffyzq": "1.0.4"
```

to the require section of your `composer.json` file.

Picture
-------
!["login"](http://wx3.sinaimg.cn/mw690/7552a991gy1fl9n0vs6rhj21kw0twn1a.jpg )
![index](https://wx3.sinaimg.cn/mw690/7552a991gy1fl9n0u7vf3j21kw0tttcl.jpg)


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
