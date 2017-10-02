# SleepingOwl-CoreUI

[![Latest Stable Version](https://poser.pugx.org/Limych/sleepingowl-coreui/v/stable)](https://packagist.org/packages/Limych/sleepingowl-coreui)

[![License](https://poser.pugx.org/Limych/sleepingowl-coreui/license)](https://packagist.org/packages/Limych/sleepingowl-coreui)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/95eb3ace-6372-4418-bfb3-81ba25240dcd/mini.png)](https://insight.sensiolabs.com/projects/95eb3ace-6372-4418-bfb3-81ba25240dcd)

[CoreUI Dashboard Template](http://coreui.io/) plugin for [SleepingOwl Laravel Admin Panel](http://sleepingowladmin.ru/)

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
