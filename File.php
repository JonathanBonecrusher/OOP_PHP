<?php

namespace App;
use App\Exceptions;

class File {
    private string $file;

    public function __construct(string $file) {
        $this->file = $file;
    }

    public function read(): string {
        if (!file_exists($this->file)) {
            throw new Exceptions\NotExistsException;
        }

        if (!is_readable($this->file)) {
            throw new Exceptions\NotReadableException;
        }

        return file_get_contents($this->file);
    }
}
