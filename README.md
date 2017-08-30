manage system UI
================
后台管理UI

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require miffy/miffyzq "~0.1"
```

or add

```
"miffy/miffyzq": "*"
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