<?php
echo substr("Hello world",10)."<br>";
echo substr_count("Hello world. The world is nice","world")."<br>";
echo substr_replace("Hello","world",0)."<br>";
echo strrev("Hello World!")."<br>";
echo str_repeat("Babe",5)."<br>";
$str1 = "reetapanthee";
echo str_pad($str1,20,"*")."<br>";
$str2 = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str2));
$string3 = "Hello world. Beautiful day today.";
$token = strtok($string3, " ");
while ($token !== false)
{
echo "$token<br>";
$token = strtok(" ");
}
$str4 = "age:30 weight:60kg";
sscanf($str4,"age:%d weight:%dkg",$age,$weight);
// show types and values
var_dump($age,$weight);
echo "<br>";
echo strpos("I love js, I love js too!","js")."<br>";
echo strrpos("I love js, I love js too!","js")."<br>";
echo strstr("Hello world!","world")."<br>";
echo stristr("Hello world!","WORLD")."<br>";
echo strchr("Hello world!","o")."<br>";
echo strrchr("Hello world!","o")."<br>";
$url = "https://leetcode.com/u/reeta_panthee/";
$parsed_url = parse_url($url);
print_r($parsed_url);
echo " <br>Lab No.: 7j <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>