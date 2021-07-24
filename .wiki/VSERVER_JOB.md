## Navigation
* [get](#get)

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
$job_id = '';

$client->virtualServer()->job()->get($job_id);
```
returns:
```json
{
  "TODO": true
}
```