
<?php

class VIP extends Customer
{
    protected function format(): string
    {
        return strtoupper($this->name);
    }
}