<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
$bessie->setEyes('**')
    ->setTongue('/')
    ->setPoop('poo')
    ->setUdder('W');

// or just echo the object for direct output
echo $bessie.PHP_EOL;