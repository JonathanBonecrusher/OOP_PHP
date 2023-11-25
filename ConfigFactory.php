<?php

namespace App;

use App\Parsers\JsonParser;
use App\Parsers\YamlParser;

class ConfigFactory
{
    public static function build($filePath): Config
    {
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);

        $content = file_get_contents($filePath);

        switch ($extension) {
            case 'json':
                $data = JsonParser::parse($content);
                break;
            case 'yml':
            case 'yaml':
                $data = YamlParser::parse($content);
                break;
            default:
                throw new \Exception("Unsupported file type: $extension");
        }
        return new Config($data);
    }
}