<?php

if (isset($_COOKIE['látogatások']))
{
    $counter = $_COOKIE['látogatások'] + 1;
}
else
{
    $counter = 1;
}
setcookie('látogatások', $counter, time() + 3600*24*30);
echo "Az oldal eddig " . $counter . "x lett lefrissítve, vérem!";


?>