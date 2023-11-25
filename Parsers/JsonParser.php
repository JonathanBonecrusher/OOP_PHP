<?php

namespace App\Parsers;

class JsonParser
{
    public static function parse($content)
    {
        return json_decode($content, true);
    }
}