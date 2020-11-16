<?php
namespace UpdaterDemo;

use InvalidArgumentException;

class Folder
{
    /**
     * Renames a directory
     *
     * @param string $from
     * @param string $to
     * @return boolean
     */
    public function rename(string $from, string $to): bool
    {
        if (! is_dir($from)) {
            throw new InvalidArgumentException(sprintf('`{$from}` is not a directory'));
        }

        return rename($from, $to);
    }
}
