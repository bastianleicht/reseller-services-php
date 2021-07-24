## Navigation
* [list](#list)
* [create](#create)
* [restore](#restore)
* [status](#status)

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

### list
```php
$server_id = '';

$client->virtualServer()->backup()->list($server_id);
```
returns:
```json
{
  "TODO": true
}
```

### create
```php
$server_id = '';

$client->virtualServer()->backup()->create($server_id);
```
returns:
```json
{
  "TODO": true
}
```

### restore
```php
$server_id = '';
$backup = '';

$client->virtualServer()->backup()->restore($server_id, $backup);
```
returns:
```json
{
  "TODO": true
}
```

### status
```php
$server_id = '';

$client->virtualServer()->backup()->status($server_id);
```
returns:
```json
{
  "TODO": true
}
```