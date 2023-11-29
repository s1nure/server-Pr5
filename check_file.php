<?php
$filename = $_POST['filename'];
$fileformat = $_POST['fileformat'];
$filePath = "files/$filename.$fileformat";

if (file_exists($filePath)) {
    echo "File exists on the server.";
} else {
    echo "File does not exist on the server.";
}
?>
