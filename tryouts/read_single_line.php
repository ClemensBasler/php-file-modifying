<?php
$myfile = fopen("Class.php", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>
