#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

printf("getenv: FOO=%s\n", getenv('FOO'));
printf("\$_ENV:  FOO=%s\n", $_ENV['FOO']);
