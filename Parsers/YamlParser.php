<?php

namespace App\Parsers;

use Symfony\Component\Yaml\Yaml;

class YamlParser
{
    public static function parse($content)
    {
        return Yaml::parse($content);
    }
}
