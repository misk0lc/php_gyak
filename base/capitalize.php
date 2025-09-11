<?php
//készíts egy függvényt, ami atvesz egy stringet és visszaadja nagybetuskent

$names = ["Pista","Jóska","Éva"];

function capitalizeAll(array $names):array{
    /*$tempArray=[];
    foreach ($names as $name) {
        $tempArray = mb_strtoupper($name);
    }
    return $tempArray;*/
    array_map("mb_strtoupper", $names)
}
$capitalizedNames = capitalizeAll($name);
print_r($capitalizedNames);

?>