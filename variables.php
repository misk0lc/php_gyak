<?php

    /*
    Szükséges programok: XAMPP (Apache, MYSQL) , Git, github repo, VSC
    <?php ... ?>
    */

    //Változók
    $name = "misk0lc";
    $age = "18";
    $city = "Chicago";
    var_dump($name);

    echo "<br>Név: $name Életkor: $age Lakóhely: $city";
    //Konstans
    define("PI", 3.14159265359);
    echo "<br>", PI,"<br>";

    //Adattípusok: string, int, float, bool, array

    $message = "egy";
    echo "Kiír ", $message, " értéket ", "<br>\n";
    echo "Kiír  $message értéket. <br>\n";
    echo "Kiír {$message}darab értéket. <br>\n";
    echo 'Kiír {$message}darab értéket. <br>\n';

    //print "Kiír ", $message, " értéket ", "<br>\n";
    print "Kiír  $message értéket. <br>\n";
    print 'Kiír {$message}darab értéket. <br>\n';

    /*
    git parancsok
        git init:
        git add . :
        git commit -m "message":
        git remote add origin https://github.com/felhnev/reponeve.git
            git config --global user.name
            git config --global user.email
        git branch -m main :
    */
?>