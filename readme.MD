# Multithread
A package for working with PHP's PCNTL extension in a readable object-orientated
fashion.

[![Build Status](https://travis-ci.org/byrobots/multithread.svg?branch=master)](https://travis-ci.org/byrobots/multithread)
[![Coverage Status](https://coveralls.io/repos/github/byrobots/multithread/badge.svg?branch=master)](https://coveralls.io/github/byrobots/multithread?branch=master)
[![StyleCI](https://styleci.io/repos/102980804/shield?branch=master)](https://styleci.io/repos/102980804)

## Requirements
- PHP 7.0+
- PCNTL (Not available on Windows)

## Testing
1. Install dependencies: `composer install`
2. Run PHPUnit: `./vendor/bin/phpunit`

## Benchmarking
I've added a PHP script to test the running time of a program that runs three
separate classes that each perform some computational task. The script will
first sequentially call each class and then add each task to Multithread and
have Multithread run. The running times of both methods will then be displayed.
Obviously this is *very* approximate.

Example:
```
$ php benchmarks/run.php
Sequential time finished in 27.118049144745 seconds.
Forked processes finished in 16.08149600029 seconds.
All done.
```

## TO-DOs
- [ ] Add more benchmark tests
- [ ] Proper docs

## Usage
*NOTE*: This package is currently being developed. I do not suggest you use it
to do anything other than experiment. Until I've tagged a release any updates
may contain breaking changes, untested code and gremlins.

For this usage example I've modified the benchmarks code. The files within that
folder demonstrate how to write a task that can be passed to Multithread for
execution.

``` php
<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/Primes.php';
require_once __DIR__ . '/Fibonacci.php';
require_once __DIR__ . '/Hash.php';

$multithread = new ByRobots\Multithread\Multithread;

$multithread->addTask($primes); // Run this task once
$multithread->addTask($fibonacci, 2); // Run this task twice
$multithread->addTask($hash, 3); // And run this task thrice
$multithread->fork();
```
