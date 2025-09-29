<?php
/*
CRUD: C read U D 
tfh: van egy cards táblám, amiben van name, email, id mező.
1. mysql 
-READ: -SELECT name,email FROM cards WHERE id=1;
-CREATE: INSERT INTO cards (name,email) VALUES ('John Doe','john@example.com');
-UPDATE: UPDATE cards SET email='john.doe@example.com' WHERE id=1;
-DELETE: DELETE FROM cards WHERE id=1;
*/
// CREATE DATABASE businesscards;
// use businesscards;

// create table cards(
//     id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
//     name VARCHAR(100) NOT NULL,
//     companyName VARCHAR(100) DEFAULT NULL,
//     phone VARCHAR(15)DEFAULT NULL,
//     email VARCHAR(100) DEFAULT NULL,
//     photo VARCHAR(255) DEFAULT NULL,
//     status VARCHAR(255) DEFAULT NULL,
//     note VARCHAR(255) DEFAULT NULL
    
// ); ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_hungarian_ci;
$dsn = 'mysql:host=localhost;dbname=businesscards;charset=utf8mb4';
$user = 'root';
$pass = '';

// Először definiáljuk a változókat
$name = "Jane Doe";
$email = "jane@example.com";
$companyName = "Doe Inc.";
$phone = "987-654-3210";
$photo = "jane_photo.jpg";
$status = "active";
$note = "Important client";

try {
    $pdb = new PDO($dsn, $user, $pass);
    $pdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Sikeres csatlakozás!<br>";

    // CREATE
    // $sql = "INSERT INTO cards (name,companyName,phone,email,photo,status,note) VALUES 
    // ('$name','$companyName','$phone','$email','$photo','$status','$note')";
    // $pdb->exec($sql);
    // echo "Sikeres beszúrás!<br>";

    // READ
    $sql = "SELECT * FROM cards WHERE id=11";
    $result = $pdb->query($sql);
    $card = $result->fetch(PDO::FETCH_ASSOC);
    echo  "<br>";
    print_r($card);

} catch (PDOException $ex) {
    echo "Kapcsolódási hiba: " . $ex->getMessage();
    exit();
}
?>
