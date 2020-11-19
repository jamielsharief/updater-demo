<?php

$base = dirname(__DIR__, 1);

require $base . '/vendor/autoload.php';

use Origin\Log\Logger;

$logger = new Logger([
    'engine' => 'Console',
]);

$files = [
   'src/Folder.php',
    'tests/TestCase/FolderTest.php'
];

foreach ($files as $file) {
    $path = $base . '/' . $file;
    if (file_exists($path) && unlink($path)) {
        $logger->info('Deleting {name}', ['name' => $file]);
    }
}
