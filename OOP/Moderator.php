<?php

class Moderator extends \Test\User
{
    public $info;
    public $rights;

    public function __construct()
    {
        parent::__construct($name = null, $password = null, $email = null, $city = null, $info = null, $rights = null);
        $this->info = $info;
        $this->rights = $rights;
    }
}