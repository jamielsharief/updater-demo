#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use Origin\Log\Logger;

$logger = new Logger([
    'engine' => 'Console',
]);

$logger->info('hello world');
