# Add Yaml file support for Laravel 4.0.x TranslationServiceProvider
This package uses Symfony/Yaml parser.

**Note:** This is a fork from the orignal version of Devitek: <https://github.com/Devitek/laravel-yaml-translation>


## Installing
Add ```"kaishiyoku/yaml-translation": "*"``` to your **composer.json**  
by running ```php composer.phar require kaishiyoku/yaml-translation```

And select version ```0.*```


## Add support in Laravel
Replace ```'Illuminate\Translation\TranslationServiceProvider',``` with ```'Kaishiyoku\Core\Translation\TranslationServiceProvider',``` in **app/config/app.php**.


## How to use
Just use regular **php** files or use **yml** or **yaml** files instead.
In order to use Yaml your localization files must end with **\*.yml.php** or **\*.yaml.php**


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
<?php

hello: Hello :name
author: Kaishiyoku
messages:
  none: 'No messages'
```

Please note: The Symfony Yaml parser expects ```<space>``` indentation, using ```<tab>``` indentations will cause an exception.

If you have any issues feel free to open a ticket :)
