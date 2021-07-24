## Navigation
* [create](#create)
* [validate](#validate)

Initiate the client:
```php
<?php
// Require the autoloader
require_once 'vendor/autoload.php';

// Use the library namespace
use ResellerServices\ResellerServices;

// Then simply pass your API-Token when creating the API client object.
$client = new ResellerServices('API-Token');
```

### create
```php
$payment_method = 'SEPA';
$amount = '10.00';
$success_url = 'https://interface.reseller-services.de/dashboard';
$failure_url = 'https://interface.reseller-services.de/dashboard';
$startPayment = null;

$client->payment()->create($payment_method, $amount, $success_url, $failure_url, $startPayment);
```
returns:
```json
{
  "TODO": true
}
```

### validate
```php
$transaction_id = '';

$client->payment()->validate($transaction_id);
```
returns:
```json
{
  "TODO": true
}
```