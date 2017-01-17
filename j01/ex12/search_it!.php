#!/usr/bin/php
<?PHP
if ($argc < 3)
    exit;
foreach($argv as $i=>$key)
    if ($key == NULL)
        unset($argv[$i]);
$clef = $argv[1];
for ($i = 2; $i < $argc; $i++)
{
    if ((strncmp($clef, $argv[$i], strlen($clef))) == 0 &&
        $argv[$i][strlen($clef)] == ":")
    {
        for ($x = strlen($clef) + 1; $x < strlen($argv[$i]); $x++)
            echo $argv[$i][$x];
        echo "\n";
    }
}
?>