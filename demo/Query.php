<?php

require __DIR__ . '/../vendor/autoload.php';
error_reporting(E_ALL);

\FW\DI\AutoBuild::register(\FW\QB\Escape::class, function () {
    return ['escaper' => \FW\QB\Escaper\Simple::build()];
});

$escaper = \FW\QB\Escape::build()->auto();

echo $escaper->sanitize("Test");
/*
$instance = \FW\QB\Builder::build()->auto();

echo $instance->escape->sanitize("Yolo");*/