<?php

class Customer
{
    protected string $name = 'Sally One';

    public function __construct($name)
    {
        $this->name = $name;
    }

    protected function format(): string
    {
        return ucwords($this->name);
    }

    public function getName(): string
    {
        return $this->format($this->name);
    }
}