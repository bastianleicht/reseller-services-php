## Navigation
* [get](#get)
* [create](#create)
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

### get
```php
$handle_id = 'HANDLE';

$client->domain()->handle()->get($handle_id);
```
returns:
```json
{
  "TODO": true
}
```

### create
```php
$type           = 'PERS'; //  This can also be company (ORG) or Role (ROLE)
$sex            = 'MALE';  //  MALE | FEMALE
$organisation   = 'Reseller-Services'; // This can be null if you're not in a company.
$firstname      = 'Max';
$lastname       = 'Mustermann';
$street         = 'Musterstraße';
$number         = '1';
$postcode       = '99999';
$city           = 'Musterstadt';
$region         = 'Hessen';
$country        = 'DE';
$email          = 'max.mustermann@email.com';
$phone          = '+49 1234567';

$client->domain()->handle()->create($type, $sex, $organisation, $firstname, $lastname, $street, $number, $postcode, $city, $region, $country, $email, $phone);
```
returns:
```json
{
  "TODO": true
}
```

### update
```php
$handle_id = 'HANDLE';

$client->domain()->handle()->update($handle_id);
```
returns:
```json
{
  "TODO": true
}
```

### delete
```php
$handle_id = 'HANDLE';

$client->domain()->handle()->delete($handle_id);
```
returns:
```json
{
  "TODO": true
}
```