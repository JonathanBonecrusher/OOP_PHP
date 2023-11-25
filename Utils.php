<?php

namespace App\Utils;

use App\File;
use App\Exceptions;

function readFiles(array $filepaths): array
{
    $filesContent = [];

    foreach ($filepaths as $filepath) {
        try {
            $file = new File($filepath);
            $filesContent[] = $file->read();
        } catch (Exceptions\FileException) {
            $filesContent[] = null;
        }
    }

    return $filesContent;
}
