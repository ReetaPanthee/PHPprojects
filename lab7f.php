<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="End is the begining.">
    <meta name="keywords" content="Say my name">
    <meta name="author" content="Happy happy">
</head>
<body>
<?php
echo strip_tags("Hello <b>world!</b>")."<br>";
print_r (get_html_translation_table());
echo "<br>";
$filename = 'lab7f.php';
$meta_tags = get_meta_tags($filename);

if ($meta_tags !== false) {
    echo "Description: " . $meta_tags['description'] . "<br>";
    echo "Keywords: " . $meta_tags['keywords'] . "<br>";
    echo "Author: " . $meta_tags['author'] . "<br>";
} else {
    echo "Failed to retrieve meta tags.";
}
	echo rawurldecode("A%20computer%20science%20faculty%20for%20PKC")."<br>";
$base_url = "https://www.example.com/search";
$query = "PHP urlencode function";
$encoded_query = rawurlencode($query);
$url = $base_url . "?query=" . $encoded_query;
echo $url. "<br>";
$str5 = addcslashes("Hello World!","W");
echo($str5)."<br>";
echo stripslashes("Who\'s Walter White?")."<br>";
$string6 = "<a href='#'>Test</a>";
$encoded_string= HTMLSpecialChars($string6);
echo $encoded_string."<br>";
$str7 = '<a href="#">Facebook</a>';
echo htmlentities($str7, ENT_QUOTES);
echo " <br>Lab No.: 7f <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>
</body>
</html>