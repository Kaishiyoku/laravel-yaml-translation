![Maintenance](https://img.shields.io/maintenance/yes/2019.svg)
 ![Packagist](https://img.shields.io/packagist/v/kaishiyoku/yaml-translation.svg) ![Packagist](https://img.shields.io/packagist/dt/kaishiyoku/yaml-translation.svg)

# Add Yaml file support for Laravel >=5.4 TranslationServiceProvider
This package uses Symfony/Yaml parser. **Note:** This is a fork from the orignal version of Devitek: <https://github.com/Devitek/laravel-yaml-translation>

# Please note
Laravel =>5.4 only support for coming =>5.4.\* releases. If you still want to use this package with an older Laravel version use an older release.

The last release with Laravel <= 5.3.\* support is **5.0.1**

**Please note:** As with version 5.5.1 this package is using Symfony Yaml Parser v3.\* and therefore the YAML format has been changed a bit - you now have to escape lines with quotes (either double or single ones) when there are special keys present like a colon, otherwise you'll get an error like this: `A colon cannot be used in an unquoted mapping value at line [...]`. I have slightly changed the example below to demonstrate the changes.

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

return [
  'hello' => 'Hello :name',
  'author' => 'Kaishiyoku',
  'messages' => [
    'none' => 'No messages'
  ]
];
```

Will be equivalent to :

**YAML**:

```yaml
hello: 'Hello :name' # must now be escaped with quotes
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
