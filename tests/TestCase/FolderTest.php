<?php
declare(strict_types = 1);
namespace UpdaterDemo\Test\TestCase;

use UpdaterDemo\Folder;
use PHPUnit\Framework\TestCase;

class FolderTest extends TestCase
{
    public function testRename()
    {
        $folder = new Folder();
        $from = sys_get_temp_dir() . '/' . uniqid();
        $to = sys_get_temp_dir() . '/' . uniqid();
        mkdir($from, 0775, true);
        $this->assertDirectoryExists($from);
       
        $this->assertTrue($folder->rename($from, $to));
        $this->assertDirectoryDoesNotExist($from);
        $this->assertDirectoryExists($to);
    }
}
