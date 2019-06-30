<?php 

namespace ActivismeBe\ValidationRules;

use Illuminate\Support\ServiceProvider; 

/**
 * Class ValidationRulesServiceProvider 
 * 
 * @package ActivismeBe\ValidationRules
 */
class ValidationRulesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void 
    {
        $langDir = __DIR__ . '/../resources/lang';

        $this->publishes([$langDir => resource_path('lang/vendor/validationRules')]);
        $this->loadTranslationsFrom($langDir . '/', 'validationRules');
    }
}