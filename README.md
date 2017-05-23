# Add Yaml file support for Laravel 5.4 TranslationServiceProvider
This package uses Symfony/Yaml parser. **Note:** This is a fork from the orignal version of Devitek: <https://github.com/Devitek/laravel-yaml-translation>

# Please note
Laravel 5.4 only support for coming 5.4.\* releases. If you still want to use this package with an older Laravel version use an older release.

The last release with Laravel <= 5.3.\* support is **5.0.1**

## Installing
Add ```"kaishiyoku/yaml-translation": "5.*"``` to your **composer.json**
by running ```php composer.phar require kaishiyoku/yaml-translation```


## Add support in Laravel
Replace ```'Illuminate\Translation\TranslationServiceProvider',``` with ```'Kaishiyoku\Core\Translation\TranslationServiceProvider',``` in **app/config/app.php**.


## How to use
Just use regular **php** files or use **yml** or **yaml** files instead.
In order to use Yaml your localization files must end with **\*.yml.php**, **\*.yaml.php**, **\*.yml** or **\*.yaml**


### Example
**PHP**:

```php
<?php

return array(
  'hello' => 'Hello :name',
  'author' => 'Kaishiyoku',
  'messages' => array(
    'none' => 'No messages'
  )
);
```

Will be equivalent to :

**YAML**:

```yaml
hello: Hello :name
author: Kaishiyoku
messages:
  none: 'No messages'
```

Please note: The Symfony Yaml parser expects ```<space>``` indentation, using ```<tab>``` indentations will cause an exception.

If you have any issues feel free to open a ticket :)

Author
======
Twitter: [@kaishiyoku](https://twitter.com/kaishiyoku)  
Website: www.andreas-wiedel.de
