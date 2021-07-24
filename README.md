Reseller-Services PHP API Client
=======================
This **PHP 7.2+** library allows you to communicate with the Reseller-Services API.

[![Latest Stable Version](http://poser.pugx.org/bastianleicht/reseller-services-php/v)](https://packagist.org/packages/bastianleicht/reseller-services-php)
[![Total Downloads](http://poser.pugx.org/bastianleicht/reseller-services-php/downloads)](https://packagist.org/packages/bastianleicht/reseller-services-php)
[![Latest Unstable Version](http://poser.pugx.org/bastianleicht/reseller-services-php/v/unstable)](https://packagist.org/packages/bastianleicht/reseller-services-php)
[![License](http://poser.pugx.org/bastianleicht/reseller-services-php/license)](https://packagist.org/packages/bastianleicht/reseller-services-php)

> You can find the full API documentation [here](https://docs.reseller-services.de)!

## Getting Started

Recommended installation is using **Composer**!

In the root of your project execute the following:
```sh
$ composer require bastianleicht/reseller-services-php
```

Or add this to your `composer.json` file:
```json
{
    "require": {
        "bastianleicht/reseller-services-php": "^1.0"
    }
}
```

Then perform the installation:
```sh
$ composer install --no-dev
```

### Examples

Creating the ResellerServices main object:
```php
<?php
// Require the autoloader
require_once 'vendor/autoload.php';

// Use the library namespace
use ResellerServices\ResellerServices;

// Then simply pass your API-Token when creating the API client object.
$client = new ResellerServices('API-Token');

// Then you are able to perform a request
print_r($client->domain()->getPrice('de'));
?>
```