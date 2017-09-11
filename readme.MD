# Multithread
A package for working with PHP's PCNTL extension in a readable object-orientated
fashion.

[![Build Status](https://travis-ci.org/byrobots/multithread.svg?branch=master)](https://travis-ci.org/byrobots/multithread)
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

To run the benchmark tests simply run `php benchmarks/run.php`.

## TO-DO
- [ ] More benchmark tests
- [ ] Retrieve process results (sockets?)
