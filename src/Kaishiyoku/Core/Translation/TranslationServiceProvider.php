<?php namespace Kaishiyoku\Core\Translation;

use \Illuminate\Translation\TranslationServiceProvider as IlluminateTranslationServiceProvider;

class TranslationServiceProvider extends IlluminateTranslationServiceProvider
{

	/**
	 * Register the translation line loader.
     * Add support for YAML files.
	 *
	 * @return void
	 */
	protected function registerLoader()
	{
		$this->app['translation.loader'] = $this->app->share(function($app)
		{
            return new YamlFileLoader($app['files'], $app['path'].'/lang');
		});
	}

}
