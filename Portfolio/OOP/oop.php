<?php
include_once("curseFilter.php"); 
$curseFilter = new curseFilter;
//------------------------------ benefit OOP: 
// if you use this in 2500 files, you only have to connect to the part above the dots
// instead of writing 2500 times a new code
$string = "jerky buttface jerks.";
$clean_str = ($curseFilter-> clean($string));
echo $clean_str;
?>

 