<?php
$filename = $_GET['filename'];
$filePath = "files/$filename";

if (file_exists($filePath)) {
    unlink($filePath);
    echo '<script>setTimeout(function(){location.href="index.php";},100);</script>';
} else {
    echo "File not found.";
}
?>
