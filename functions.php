<?php
/*
    fgv definiálása, paraméterek, visszatérésiérték
*/
//írj egy fgv-t, ami visszaadja két szám összegét
function sum(int $a, int $b):int
{
    return $a+$b;
}
$s1 = sum(4,2);
echo "{$s1} <br>";
$s2 = sum("4","3");
echo $s2;
echo "<br>";

function sayHello($name="Guest")
{
    return "Hello $name";
}
echo sayHello("mozso");

?>