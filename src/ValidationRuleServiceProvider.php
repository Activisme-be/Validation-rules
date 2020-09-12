<?php

namespace ActivismeBe\ValidationRules;

use Illuminate\Support\ServiceProvider;

/**
 * Class ValidationRulesServiceProvider
 *
 * @package ActivismeBe\ValidationRules
 */
class ValidationRuleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $langDir = __DIR__ . '/../resources/lang';

        $this->publishes([$langDir => resource_path('lang/vendor/validationRules')]);
        $this->loadTranslationsFrom($langDir . '/', 'validationRules');
    }
}
