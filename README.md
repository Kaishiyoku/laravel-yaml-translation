# Add Yaml file support for Laravel 4 TranslationServiceProvider

This package uses Symfony/Yaml parser.

**Note:** This is a fork from the orignal version of Devitek: <https://github.com/Devitek/laravel-yaml-translation>

## Installing

Add ```"kaishiyoku/yaml-translation": "*"``` to your **composer.json** by running :

    php composer.phar require kaishiyoku/yaml-translation

And select version : ```0.*```

## Add support in Laravel

You have to replace

`'Illuminate\Translation\TranslationServiceProvider',`

with

`'Kaishiyoku\Core\Translation\TranslationServiceProvider',`

in **app/config/app.php**.

## How to use

Just use regular **php** files or use **yml** or **yaml** files instead.

**PHP** :

```php
<?php

return [
	'hello' => 'Hello :name',
    'author' => 'Kaishiyoku',
];
```

Will be equivalent to :

**YAML**

```yaml
hello: Hello :name
author: Kaishiyoku
```