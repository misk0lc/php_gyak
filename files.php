<?php
    if (isset($_POST['submit'])) {
        try {
            $uploadFolder = "uploads/";

            // Ellenőrizzük, hogy létezik-e a mappa, ha nem, létrehozzuk
            if (!is_dir($uploadFolder)) {
                mkdir($uploadFolder, 0777, true);
            }

            // Alapvető információk a fájlról
            $fileName = basename($_FILES["kep"]["name"]);
            $tempFileName = $_FILES["kep"]["tmp_name"];
            $fileSize = $_FILES["kep"]["size"];
            $error = $_FILES["kep"]["error"];
            $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $targetFile = $uploadFolder . $fileName;

            // Hibakezelés
            if ($error !== UPLOAD_ERR_OK) {
                throw new Exception("Hiba történt a fájl feltöltése során: " . $error);
            }

            if (file_exists($targetFile)) {
                throw new Exception("A fájl már létezik.");
            }

            if ($fileSize > 500000) {
                throw new Exception("A fájl mérete túl nagy.");
            }

            if (!in_array($fileType, ['jpg', 'png', 'jpeg', 'gif'])) {
                throw new Exception("Csak JPG, JPEG, PNG és GIF fájlok engedélyezettek.");
            }

            // Fájl áthelyezése a célmappába
            if (move_uploaded_file($tempFileName, $targetFile)) {
                echo "A fájl sikeresen feltöltve: " . htmlspecialchars($fileName);
            } else {
                throw new Exception("Nem sikerült a fájl áthelyezése.");
            }
        } catch (Exception $ex) {
            echo "<p style='color:red;'>Hiba: " . $ex->getMessage() . "</p>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Fájl feltöltése</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="kep">Válassz egy képet a feltöltéshez</label>
        <input type="file" name="kep" id="kep">
        <button type="submit" name="submit">Feltöltés</button>
    </form>
    


</body>
</html>