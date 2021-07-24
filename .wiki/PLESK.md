## Navigation
* [getPrices](#getprices)
* [getLicense](#getlicense)
* [order](#order)
* [reset](#reset)
* [setIpBinding](#setipbinding)
* [getIpBinding](#getipbinding)
* [delete](#delete)

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

### getPrices
```php
$client->plesk()->getPrices();
```
returns:
```json
{
  "TODO": true
}
```

### getLicense
```php
$client->plesk()->getLicense();
```
returns:
```json
{
  "TODO": true
}
```

### order
```php
$license_type = 'PLSK_12_ADMIN_VPS';

$client->plesk()->order($license_type);
```
returns:
```json
{
  "TODO": true
}
```

### reset
```php
$license_id = 'PLSK.00000000';

$client->plesk()->reset($license_id);
```
returns:
```json
{
  "TODO": true
}
```

### setIpBinding
```php
$license_id = 'PLSK.00000000';
$ip_address = '127.0.0.1';

$client->plesk()->setIpBinding($license_id, $ip_address);
```
returns:
```json
{
  "TODO": true
}
```

### getIpBinding
```php
$license_id = 'PLSK.00000000';

$client->plesk()->getIpBinding($license_id);
```
returns:
```json
{
  "TODO": true
}
```

### delete
```php
$license_id = 'PLSK.00000000';
$date = '2021-10-12'; //    yyyy-mm-dd

$client->plesk()->delete($license_id, $date);
```
returns:
```json
{
  "TODO": true
}
```