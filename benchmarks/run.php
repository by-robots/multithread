<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/Primes.php';
require_once __DIR__ . '/Fibonacci.php';
require_once __DIR__ . '/Hash.php';

// ---------- Sequential is up first
$sequentialStart = microtime(true);

$primes = new Primes;
$primes->process();

$fibonacci = new Fibonacci;
$fibonacci->process();

$hash = new Hash;
$hash->process();

$sequentialDuration = microtime(true) - $sequentialStart;

echo 'Sequential time finished in ' . $sequentialDuration . ' seconds.' . PHP_EOL;

// ---------- Forked prcesses up second
$multithread = new ByRobots\Multithread\Multithread;

$forkStart = microtime(true);
$multithread->addTask($primes);
$multithread->addTask($fibonacci);
$multithread->addTask($hash);
$multithread->fork();

$forkDuration = microtime(true) - $forkStart;

echo 'Forked processes finished in ' . $forkDuration . ' seconds.' . PHP_EOL;
echo 'All done.' . PHP_EOL;
exit;
