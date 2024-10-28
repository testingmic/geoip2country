# PHP GeoIP2Country PRO (v1.2)

An IP address helps you identify visitors geographical location.

## What's GeoIP2Country PRO?

A PHP IP Address Geolocation library to help you identify visitors geographical location.

## Requirements

- pdo_sqlite (runtime deps)
- php_curl (for update only)


## Installation And Initialisation :

These instructions will get you a copy of the project up and running on your local machine.
there are two options:

- [x] import(copy) GeoIP2Country files into a specific folder of your project
- [x] Using Composer installer(Recommended) by typing the following command:

```php

composer require testingmic/geoip2country

```

## Usage: (using Composer autoloader)

```php

require __DIR__ . '/vendor/autoload.php';

try
{
    $IP2Country = new testingmic\GeoIP2Country();

} catch (\Throwable $th) {
    trigger_error($th->getMessage(), E_USER_ERROR);
}

```

#### Getting Country code from given IP address:

```php

    $ipAddress_1='2a00:1450:4007:816::2004';
    $ipAddress_2='37.140.250.97';

    echo '<pre>';
    echo $IP2Country->resolve($ipAddress_1).PHP_EOL;
    echo $IP2Country->resolve($ipAddress_2).PHP_EOL;

```

#### Getting current visitor Country code (auto detect his IP address):

```php

    echo '<pre>';
    echo $IP2Country->resolve().PHP_EOL;  /** resolve() method called without any argument */