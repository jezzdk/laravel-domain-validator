Laravel Domain Validator
=================

A simple domain validator for Laravel 6.7 and above.

Note: DomainActive doesn't work as expected on Alpine Linux (https://github.com/docker-library/php/issues/442)

#### Domain

Checks if a string is a valid domain name.

#### DomainActive

Does the same as above but also does a checkdnsrr() against the domain to see if it resolves to an A record.

## Usage

```
use Jezzdk\Laravel\Validator\Domain;
use Jezzdk\Laravel\Validator\DomainActive;

$request->validate([
    'domain' => ['required', 'string', new Domain],
]);

$request->validate([
    'domain' => ['required', 'string', new DomainActive],
]);
```
