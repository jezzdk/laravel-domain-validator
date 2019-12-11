Laravel Domain Validator
=================

A simple domain validator for Laravel 6.7 and above.

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
