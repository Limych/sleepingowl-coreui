# SleepingOwl-CoreUI
CoreUI Dashboard Template for SleepingOwl

## Installation

1. Require this package in your `composer.json` and run composer update:

    ```bash
    $ composer require limych/sleepingowl-coreui:dev-master
    ```

2. *(If you are on Laravel 5.5+ you can skip this step)* After composer update, insert service provider in `config/app.php`:
	```php
    <?php
    
    return [
       
        // ...
       
        'providers' => [
           
            /*
             * Laravel Framework Service Providers...
             */
            // ...
            
            /*
             * Package Service Providers...
             */
            Limych\SleepingOwlCoreUI\Providers\CoreUIServiceProvider::class,
            // ...
        
            /*
             * Application Service Providers...
             */
            // ...
           
        ],
       
        // ...
       
    ];
	```

3. Package assets will be automatically published to `public` directory of your project on first run.

    If you want to override package config you can manually install it to `config` directory by run this command:

    ```bash
    $ php artisan vendor:publish --provider="Limych\SleepingOwlCoreUI\Providers\CoreUIServiceProvider" --tag=config
    ```
    
    If you want to override package views you can manually install them to project `public` directory by run this command:

    ```bash
    $ php artisan vendor:publish --provider="Limych\SleepingOwlCoreUI\Providers\CoreUIServiceProvider" --tag=views
    ```

4. Replace old template in `config/sleeping_owl.php` to new:

    ```php
    <?php

    return [
     
        // ...
     
        /*
        |--------------------------------------------------------------------------
        |  Admin panel template
        |--------------------------------------------------------------------------
        */
    
        'template' => Limych\SleepingOwlCoreUI\Templates\CoreUITemplate::class,
        
        // ...
     
    ];
    ```
