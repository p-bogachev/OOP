<?php

class Person
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->getName(). " the person";
    }

    public function sayHello(): void
    {
        echo "Hello I'm " .$this->getTitle() . "\n";
    }

    public function sayGoodbye(): void
    {
        echo "Goodbye from " . self::getTitle() . " \n";
    }
}