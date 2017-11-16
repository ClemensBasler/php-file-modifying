<?php
$file = fopen("Class.php","w");
$part1file = fopen ("part1.txt", "r");
$part2file = fopen ("part2.txt", "r");
$configFile = "config.txt";

$part1 = fread($part1file,filesize("part1.txt"));
$part2 = fread($part2file,filesize("part2.txt"));
$attributes = file($configFile);

fwrite($file, $part1);

for ($i=0; $i < sizeof($attributes); $i++) {
  fwrite($file, "protected $$attributes[$i];");
}
fwrite($file, $part2);

fclose($file);
fclose($part1file);
fclose($part2file);
?>
