<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">
    <title>SERVER szuperglobális</title>
</head>
<body>
    <h2>SERVER szuperglobalis</h2>
    <ul>
        <li><strong>Kérés módja:</strong> <?php echo $_SERVER['REQUEST_METHOD']; ?></li>
        <li><strong>Kért URL:</strong> <?php echo $_SERVER['REQUEST_URI']; ?></li>
        <li><strong>Script neve (PHP_SELF):</strong> <?php echo $_SERVER['PHP_SELF']; ?></li>
        <li><strong>Query String:</strong>
        <?php
            if ( !empty($_SERVER['QUERY_STRING']))
            {
                echo "{$_SERVER['QUERY_STRING']}";
            }
            else
            {
                echo"Nincs";
            }
        ?>
        </li>
        <!-- script neve: PHP_SELF -->
         <!-- Query string: QUERY_STRING vagy "nincs" -->
    </ul>

    <p>
        <!-- if -->
        <!-- paraméterek: -->
         <ul>
            <li><strong>Paraméterek:<?php $parameterek = explode("&", $query);
             ?></strong></li>
         </ul>
    </p>

        
    <h3>Szerver adatai</h3>
    <!-- Szerver neve: SERVER_NAME
    Szerver IP címe: SERVER_ADDR -->
    <h3>Felhasználó adatai</h3>
    <!-- Bőngésző adatai: HTTP_USER_AGENT -->
     <!-- Felhasználó IP cÍme: REMOTE_ADDR -->
    <p>
        <?php
        foreach ($parameterek as $param) {
            echo $param . "<br>";
        }
        ?>
        <a href="<?php echo $_SERVER['PHP_SELF'];?> ?name=mozso&age=22">Kattints ide egy paraméterezett GET lekéréséhez</a>
    </p>

</body>
</html>