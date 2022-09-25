<?php

require_once "Person.php";
require_once "Geek.php";

$geekObject = new Geek("Ludwig");
$geekObject->sayHello();
$geekObject->sayGoodbye();