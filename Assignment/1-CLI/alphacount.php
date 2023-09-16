#!/usr/bin/env php
<?php

$sentence = $argv[1];

$removeSymbol = preg_replace('/[^A-Za-z]/','',$sentence);
$count = strlen($removeSymbol);
printf($count);

