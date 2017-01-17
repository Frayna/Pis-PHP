#!/usr/bin/php
<?php
if ($argc != 4)
{
    echo "Incorrect Parameters\n";
    exit;
}
foreach ($argv as $i=>$key)
    $argv[$i] = trim($key);
if (($argv[2] == '/' || $argv[2] == '%') && $argv[3] == '0')
    exit;
if ($argv[2] == "+")
    printf("%d\n", $argv[1] + $argv[3]);
else if ($argv[2] == '-')
    echo($argv[1] - $argv[3])."\n";
else if ($argv[2] == '*')
    echo($argv[1] * $argv[3])."\n";
else if ($argv[2] == '/')
    echo($argv[1] / $argv[3])."\n";
else if ($argv[2] == '%')
    echo($argv[1] % $argv[3])."\n";
?>