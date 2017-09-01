manage system UI
================
基于H+后台管理UI,第一次做的初版

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require miffy/miffyzq "1.0.3"
```

or add

```
"miffy/miffyzq": "1.0.3"
```

to the require section of your `composer.json` file.


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
