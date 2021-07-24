## Navigation
* [get](#get)
* [update](#update)

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
$domainName = 'reseller-services.de';

$client->domain()->dns()->get($domainName);
```
returns:
```json
{
  "TODO": true
}
```

### update
```php
$domainName = 'reseller-services.de';

$client->domain()->dns()->update($domainName);
```
returns:
```json
{
  "TODO": true
}
```