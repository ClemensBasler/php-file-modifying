<?php
$file = fopen("new_file.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);
?>
