<?php

namespace Autoloader\First;

class ClassA
{
    public function say_v1()
    {
        $obj1 = new ClassB();
        print("Answer: " . get_class($obj1) . "\n");
    }

    public function say_v2()
    {
        $obj2 = new \Autoloader\Second\ClassD();
        print("Answer: " . get_class($obj2) . "\n");
    }
}