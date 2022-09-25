<?php

class Geek extends Person
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getTitle(): string
    {
        return $this->getName(). " the Geek";
    }
}