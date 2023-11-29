<?php
$filesDir = 'files/';
$files = scandir($filesDir);

echo "<h2>File List</h2>";
echo "<table border='1'>";
echo "<tr><th>File Name</th><th>Delete</th></tr>";

foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        echo "<tr><td>$file</td><td><a href='delete_file.php?filename=$file'>Delete</a></td></tr>";
    }
}

echo "</table>";
?>
