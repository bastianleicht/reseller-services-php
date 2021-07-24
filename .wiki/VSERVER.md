## Navigation
* [getTemplates](#gettemplates)
* [getDetails](#getdetails)
* [getStatus](#getstatus)
* [getConfig](#getconfig)
* [order](#order)
* [change](#change)
* [delete](#delete)
* [start](#start)
* [stop](#stop)
* [reboot](#reboot)
* [reinstall](#reinstall)
* [resetPassword](#resetpassword)
* [noVNC](#novnc)

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

### getTemplates
```php
$client->virtualServer()->getTemplates();
```
returns:
```json
{
  "TODO": true
}
```

### getDetails
```php
$server_id = '';

$client->virtualServer()->getDetails($server_id);
```
returns:
```json
{
  "TODO": true
}
```

### getStatus
```php
$server_id = '';

$client->virtualServer()->getStatus($server_id);
```
returns:
```json
{
  "TODO": true
}
```

### getConfig
```php
$server_id = '';

$client->virtualServer()->getConfig($server_id);
```
returns:
```json
{
  "TODO": true
}
```

### order
```php
$cores = 1;
$memory = 1024; // In Megabytes!
$disk = 10;     // In Gigabytes!
$ips = 1;
$os = '';

$client->virtualServer()->order($cores, $memory, $disk, $ips, $os);
```
returns:
```json
{
  "TODO": true
}
```

### change
```php
$cores = 2;
$memory = 2048;
$disk = 15;
$ips = 2;

$client->virtualServer()->change($cores, $memory, $disk, $ips);
```
returns:
```json
{
  "TODO": true
}
```

### delete
```php
$server_id = '';
$force_delete = false;

$client->virtualServer()->delete($server_id, $force_delete);
```
returns:
```json
{
  "TODO": true
}
```

### start
```php
$server_id = '';

$client->virtualServer()->start($server_id);
```
returns:
```json
{
  "TODO": true
}
```

### shutdown
```php
$server_id = '';

$client->virtualServer()->shutdown($server_id);
```
returns:
```json
{
  "TODO": true
}
```

### stop
```php
$server_id = '';

$client->virtualServer()->stop($server_id);
```
returns:
```json
{
  "TODO": true
}
```

### reboot
```php
$server_id = '';

$client->virtualServer()->reboot($server_id);
```
returns:
```json
{
  "TODO": true
}
```

### reinstall
```php
$server_id = '';
$server_os = '';

$client->virtualServer()->reinstall($server_id, $server_os);
```
returns:
```json
{
  "TODO": true
}
```

### resetPassword
```php
$server_id = '';

$client->virtualServer()->resetPassword($server_id);
```
returns:
```json
{
  "TODO": true
}
```

### noVNC
```php
$server_id = '';

$client->virtualServer()->noVNC($server_id);
```
returns:
```json
{
  "TODO": true
}
```



