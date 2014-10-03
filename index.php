<?php

use Easy\Collections\ArrayList;

require 'vendor/autoload.php';

$data = new ArrayList(array("Ben", "Jafar", "Matt", "Priya", "Brian"));

$data->map(function($item) {
    echo $item . PHP_EOL;
});