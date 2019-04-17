<?php

require '../vendor/autoload.php';

$helloWorld = new HelloWorld\SayHello();

echo $helloWorld->world() . "<br/>";

$hello = new \App\Wcs\Hello();

echo $hello->talk() . "<br/>";