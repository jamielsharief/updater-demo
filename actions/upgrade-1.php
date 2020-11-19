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
    $logger->debug($path);

    if (!file_exists($path)) {
        $logger->warning('{name} not found', ['name' => $file]);
        continue;
    }
    if (file_exists($path)) {
        if (unlink($path)) {
            $logger->info('{name} deleted', ['name' => $file]);
        } else {
            $logger->error('{name} not deleted', ['name' => $file]);
        }
    }
}
