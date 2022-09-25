<?php

spl_autoload_register(function ($class) {
    $className = substr($class, strrpos($class, '\\') + 1);
    $namespace = substr($class, 0, strlen($class)-strlen($className));
    $part_dir = lcfirst(str_replace('\\', '/', $namespace));
    $base_dir = __DIR__ . "/" . $part_dir;

    $file = $base_dir . $className . '.php';

    if (file_exists($file)) {
        require $file;
    }
});