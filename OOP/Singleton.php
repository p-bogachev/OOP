<?php

class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): ?Singleton
    {
        if(!isset(self::$instance)){
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {

    }
}