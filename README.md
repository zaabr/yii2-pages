Manage publications on the site.
================================
Creating, editing and managing publications on the site.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist zaabr/yii2-pages "*"
```

or add

```
"zaabr/yii2-pages": "*"
```
or
```
composer require zaabr/yii2-pages
```
or add

```
to the require section of your `composer.json` file.
```

* Выполнить миграцию для создания таблиц в базе данных (консоль):
```
yii migrate --migrationPath=@zaabr/pages/migrations --interactive=0
```

Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \zaabr\pages\AutoloadExample::widget(); ?>```