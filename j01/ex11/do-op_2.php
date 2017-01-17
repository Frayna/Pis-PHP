#!/usr/bin/php
<?php
function error()
{
    printf("Syntax Error\n");
    exit;
}
 
if ($argv[1] == null)
{
    printf("Incorrect Parameters\n");
    return (-1);
}
$i = 0;
$op_signe = array("+", "-", "*", "/", "%");
$tmp = trim($argv[1]);
$str = str_split($tmp);
$bol = true;
$nega = false;
unset($tmp);
foreach ($str as $val)
{
    if ($val == " ")
        continue;
    else if ($bol == true && $val == "-")
    {
        $nega = true;
        continue;
    }
    if (is_numeric($val) == true)
    {
        $tmp *= 10;
        $tmp += $val;
        $bol = false;
    }
    else if (in_array($val, $op_signe) == true)
    {
        if ($bol == true)
            error();
        if ($nega == true)
        {
            $num[$i] = -$tmp;
            $nega = false;
        }
        else
            $num[$i] = $tmp;
        $op = $val;
        $i = 1;
        $bol = true;
        unset($tmp);
    }
    else
        error();
}
if ($nega == true)
    $num[$i] = -$tmp;
else
    $num[$i] = $tmp;
if ($op == null || ($i < 1 && $bol == true))
    error();
switch ($op)
{
    case "+":
        $resul = $num[0] + $num[1];
        break;
    case "-":
        $resul = $num[0] - $num[1];
        break;
    case "*":
        $resul = $num[0] * $num[1];
        break;
    case "/":
        if ($num[1] == 0)
            error();
        $resul = $num[0] / $num[1];
        break;
    case "%":
        if ($num[1] == 0)
            error();
        $resul = $num[0] % $num[1];
        break;
}
printf("%s\n", $resul);
?>