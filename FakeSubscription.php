<?php

namespace App;
class FakeSubscription extends Subscription
{
    private $user;

    public function __construct($user)
    {
        parent::__construct('');
        $this->user = $user;
    }

    public function hasProfessionalAccess()
    {
        return $this->user->isAdmin();
    }

    public function hasPremiumAccess()
    {
        return $this->user->isAdmin();
    }
}