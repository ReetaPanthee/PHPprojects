<?php
// Example strings
$string1 = "apple";
$string2 = "banana";
$string3 = "Apple";
$string4 = "apple";
$string5 = "ban";
$string6 = "banana";
$string7 = "ball";

// strcmp()
echo  strcmp($string1, $string2) . "<br>"; // Outputs: -1 (less than)
echo strcmp($string1, $string3) . "<br>"; // Outputs: 1 (greater than)
echo strcmp($string1, $string4) . "<br>"; // Outputs: 0 (equal)

// strcasecmp()
echo  strcasecmp($string1, $string3) . "<br>"; // Outputs: 0 (equal)


// strncmp()
echo  strncmp($string2, $string6, 3) . "<br>"; // Outputs: 0 (equal up to 3 characters)
echo strncmp($string2, $string7, 3) . "<br>"; // Outputs: 1 (greater than)


// strncasecmp()
echo  strncasecmp($string3, $string6, 3) . "<br>"; // Outputs: 0 (equal up to 3 characters)
echo strncasecmp($string3, $string7, 3) . "<br>"; // Outputs: -1 (less than)


// strnatcmp()
echo  strnatcmp($string1, $string2) . "<br>"; // Outputs: -1 (apple is less than banana)
echo strnatcmp($string2, $string6) . "<br>"; // Outputs: 0 (banana is equal to banana)


// strnatcasecmp()
echo "strnatcasecmp('$string1', '$string3'): " . strnatcasecmp($string1, $string3) . "<br>"; // Outputs: 0 (apple is equal to Apple)


// soundex()
echo  soundex($string1) . "<br>"; // Outputs: A140 (same soundex key for similar sounding words)
echo  soundex($string2) . "<br>"; // Outputs: B550


// metaphone()

echo  metaphone($string1) . "<br>"; // Outputs: APL
echo  metaphone($string2) . "<br>"; // Outputs: BNN

// similar_text()
similar_text($string1, $string2, $percent);
echo "Similarity between '$string1' and '$string2': $percent%<br>"; // Outputs: Similarity between 'apple' and 'banana': 28%

// levenshtein()
echo  levenshtein($string2, $string5) . "<br>"; // Outputs: 3 (difference between 'banana' and 'ban')
echo  levenshtein($string2, $string6) . "<br>"; // Outputs: 0 (no difference between 'banana' and 'banana')
echo " <br>Lab No.: 7i <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>
