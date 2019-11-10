<?php
$path = "../files/swiper.txt";

$id = $_GET['id'];

//now we have id = .. save it to file with content [wp_swiper id=56]
$myfile = fopen($path, "w") or die("Unable to open file!");

$txt = "[wp_swiper id=$id]";
fwrite($myfile, $txt);

echo "doc file <br>";
fread($myfile,filesize($path));
fclose($myfile);