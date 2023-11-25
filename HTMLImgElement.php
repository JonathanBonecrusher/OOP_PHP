<?php

namespace App\Task58;

class HTMLImgElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['src'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    public function isValid() {
        $array = array_diff(array_keys(self::getAttributes()), self::getAttributeNames());
        return count($array) === 0;
    }
}
