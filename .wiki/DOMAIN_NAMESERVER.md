## Navigation
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

### create
```php
$nameserver = 'ns1.reselling.network';

$client->domain()->nameserver()->create($nameserver);
```
returns:
```json
{
  "TODO": true
}
```

### delete
```php
$nameserver = 'ns1.reselling.network';

$client->domain()->nameserver()->delete($nameserver);
```
returns:
```json
{
  "TODO": true
}
```