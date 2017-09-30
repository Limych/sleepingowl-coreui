# SleepingOwl-CoreUI
CoreUI Dashboard Template for SleepingOwl

## Installation

1. Require this package in your `composer.json` and run composer update:

    ```
    $ composer require limych/sleepingowl-coreui:dev-master
    ```

2. (Only for Laravel <= 5.4) After composer update, insert service provider in `onfig/app.php`:
	```
    ...
    /*
     * Package Service Providers...
     */
    Limych\SleepingOwlCoreUI\Providers\CoreUIServiceProvider::class,

    ...
	```

3. Run this command in the terminal to install package config and assets:

    ```
    $ php artisan vendor:publish --provider="Limych\SleepingOwlCoreUI\Providers\CoreUIServiceProvider"
    ```

4. Replace old template in `config/sleeping_owl.php` to new:

    ```
    ...
    /*
    |--------------------------------------------------------------------------
    |  Admin panel template
    |--------------------------------------------------------------------------
    */

    'template' => Limych\SleepingOwlCoreUI\Templates\CoreUITemplate::class,
    
    ...
    ```
