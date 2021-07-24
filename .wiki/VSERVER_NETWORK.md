## Navigation
* [setRDNS](#setrdns)

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

### setRDNS
```php
$server_id = '';
$ip_address = '';
$rdns = '';

$client->virtualServer()->network()->setRDNS($server_id, $ip_address, $rdns);
```
returns:
```json
{
  "TODO": true
}
```