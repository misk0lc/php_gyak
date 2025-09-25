<?php

session_start();

$_SESSION['reloads']++;

echo "Az oldal eddig " . $_SESSION['reloads'] . "x lett lefrissítve, vérem!";
?>
