<?php
$uploadDir = 'files/';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadedFile = $_FILES['file']['name'];
    $uploadPath = $uploadDir . $uploadedFile;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath)) {
        echo "File uploaded successfully!";
    } else {
        echo "Error uploading file.";
    }


    echo '<script>setTimeout(function(){location.href="index.php";},100);</script>';
}
?>
