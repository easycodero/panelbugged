<?php
session_start();
define('easy-code.ro', true);

spl_autoload_register(function ($class) {
    include 'inc/' . $class . '.php';
});

Config::init()->getContent();
?>
