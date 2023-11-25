<?php
namespace App\Square;

use App\Dispatcher;

function init()
{
    Dispatcher\defmethod(__NAMESPACE__, 'getArea', function ($self) {
        $side = getSide($self);
        return $side * $side;
    });
}

function make($sideLength)
{
    return ['name' => __NAMESPACE__, 'data' => ['side' => $sideLength]];
}

function getSide($self)
{
    return $self['data']['side'];
}

