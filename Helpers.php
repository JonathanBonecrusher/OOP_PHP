<?php

namespace App\Helpers;

function getGreeting($user)
{
    return $user->sayHi();
}