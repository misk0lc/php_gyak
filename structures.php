<?php
    /*
    1. if, else, elseif
    switch
    Ciklusok: for, while, foreach
    Ternary operator
    Tömbök (indexelt, asszociatív, tömbök tömbje)
    */
    //egy számról döntsd el hogy az páros-e
    $number = 67;
    if ($number % 2 == 0)
    {
        echo "{$number} egy páros szám<br>";
    }
    else
    {
        echo "{$number} egy páratlan szám<br>";
    }

    $result = ($number % 2 == 0) ? "paros" : "paratlan";
    echo "A(z) $number egy $result szám.<br>";
    //CIKLUSSAL IRASD KI 1-10 IG A SZAMOKAT
    for ($i=0; $i < 10; $i++)
    { 
        $out = $i+1;
        echo "$out <br>";
    }
    // hozz létre egy indexelt tömböt 56 gyülömcsel és irasd ki
    $fruits = ["apple", "apricot","banana","orange", "plum", "bavack"];
    $things = array("this","that");
    for ($i=0; $i < count($fruits); $i++)
    { 
        echo "$fruits[$i], ";
    }
    echo "<br>";
    foreach ($fruits as $fruit)
    {
        echo "$fruit, ";
    }
    //hozz létre a user tömböt ami tartalmazza a user nevét és életkorát
    $users =
    [
        "Kiss Pista" => 20,
        "Nagy Tibi" => 21,
        "Koós Géza" => 30
    ];
    echo "<br>";
    foreach ($users as $name => $age)
    {
        echo "$name: $age éves.<br>";
    }
    //vegyünk fel egy students tömböt ami tönmbök töbje legyen
    $students =
    [
        ["name" => "Kovács Péter", "age" => 20],
        ["name" => "Lakatos Szívóbenzin", "age" => 21],
        ["name" => "Kiss Ica", "age" => 23]
    ];
    foreach ($students as $student)
    {
        echo "$student[name] kora: $student[age] év <br>";
    }
?>