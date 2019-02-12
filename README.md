# PHP library for custom sum of large numbers implementation

## Installation 

The recommended way to install the library is through [Composer][https://getcomposer.org]:

```bash
$ composer require whacking1234/sumlib:@dev
```  

## Usage

```php
use function Whacking1234\functions\sum;

echo sum('8116789921361823993123', '44181262393');
```

## Tests 

To run unit test:

```bash
$ phpunit --testsuite Unit
```

To run all tests:

```bash
$ phpunit
```