<?php
$file = fopen("Class.php","w");
$part1file = fopen ("part1.txt", "r");
$part2file = fopen ("part2.txt", "r");
$namingfile = fopen ("naming.txt", "r");
$configFile = "config.txt";

$part1 = fread($part1file,filesize("part1.txt"));
$part2 = fread($part2file,filesize("part2.txt"));
$naming = fread($namingfile,filesize("naming.txt"));

$attributes = file($configFile);

fwrite($file, $part1);

for ($i=0; $i < sizeof($attributes); $i++) {
  fwrite($file, $naming);
  fwrite($file, "protected $$attributes[$i]; \n");
}
fwrite($file, $part2);

fclose($file);
fclose($part1file);
fclose($part2file);
?>
