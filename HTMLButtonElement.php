<?php

namespace App\Task58;

class HTMLButtonElement extends HTMLElement
{
    private const ATTRIBUTE_NAMES = ['type'];
    private const TYPE_NAMES = ['button', 'submit', 'reset'];

    public static function getAttributeNames()
    {
        return array_merge(parent::getAttributeNames(), static::ATTRIBUTE_NAMES);
    }

    public function isValid() {
        $attributes = self::getAttributes();
        $array = array_diff(array_keys($attributes), self::getAttributeNames());

        if (!isset($attributes['type'])) {
            return false;
        }

        return count($array) === 0 && in_array($attributes['type'], self::TYPE_NAMES);
    }
}
