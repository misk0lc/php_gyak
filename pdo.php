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

try {
    $pdb = new PDB($dsn, $user, $pass);
} catch (PDBException $ex) {
    echo "Kapcsolódási hiba: " . $ex->getMessage();
}

?>