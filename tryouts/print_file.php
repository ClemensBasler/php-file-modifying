<?php
$myfile = fopen("Class.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("Class.php"));
fclose($myfile);
?>
