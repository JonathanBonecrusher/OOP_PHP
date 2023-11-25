<?php

namespace App;

class User
{
    private $currentSubscription;
    private $email;

    public function __construct($email, $currentSubscription = null)
    {
        $this->email = $email;
        if ($currentSubscription === null) {
            $this->currentSubscription = new FakeSubscription($this);
        } else {
            $this->currentSubscription = $currentSubscription;
        }
    }

    public function getCurrentSubscription()
    {
        return $this->currentSubscription;
    }

    public function isAdmin()
    {
        return $this->email === 'rakhim@ht.io';
    }
}
