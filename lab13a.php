<?php
$myfile = fopen("file1.txt", "r") ;
// Output one character until end-of-file
while(!feof($myfile)) {
 echo fgetc($myfile);
}
fclose($myfile);
?>