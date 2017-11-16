<?php
$file = fopen("Class.php","a");
echo fwrite($file,"Hello World. Testing!");
fclose($file);
?>
