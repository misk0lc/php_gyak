<?php


//session indítása (lesz sess)


session_start();


//SESSION
if (isset($_POST['session_name']) && !empty($_POST['session_name']))
{
    $_SESSION['name'] = $_POST['session_name'];
    echo "Sikeresen beállítottad a sessiont (lesz sess):", $_SESSION['name'], "<br>";
}


//cookie beállítás
$cookie_name = "user_name";
$cookie_value = "Tibi";
$cookie_time = time() + (86400*30); // 30 napig tárolja 
if (isset($_POST['cookie_value']) && !empty($_POST['cookie_value'])) {
    setcookie($cookie_name, $_POST['cookie_value'], $cookie_time);
    echo "Sikeresen beállítottad a kukit 🍪: ", $_COOKIE['user_name'], "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session_cookie</title>
</head>
<body>
    <h2>Session</h2>
    <form action="" method="post">
        <label for="session_name">Add meg a neved a session-höz</label><br>
        <input type="text" name="session_name" id="session_name"><br>
        <button type="submit">Session beállítása</button>
    </form>
    <?php
        if (isset($_SESSION['name']))
        {
            echo "<p> A session neve: <strong>", $_SESSION['name'], "</strong> </p>";
        }
        else
        {
            echo "Nincs sess";
        }
    
    ?>

    <form action="" method="post">
        <label for="cookie_value">Add meg a neved a cookie</label><br>
        <input type="text" name="cookie_value" id="cookie_value"><br>
        <button type="submit">Cookie beállítása</button>
    </form>

    <a href="?torles">
        Sess, és süti törlése
    </a>

    <?php
        if (isset($_GET['torles'])) {
            //sess törlése
            session_unset(); //változók törlése
            session_destroy(); //sess törlése

            echo "Sess törlődött.";

            //kuki törlése
            setcookie($cookie_name, "", time() - 3600);
        }
    
    ?>


</body>
</html>