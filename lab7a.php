<?php

// Single-quoted string with escaped single quote
$string2 = 'It\'s easy to escape single quotes with a backslash.';
echo $string2."<br>";

// Single-quoted string with escape sequence not interpreted
$string5 = 'Newlines are not interpreted \n';
echo $string5. "<br>";

// Double-quoted string with variable interpolation
$name="Sophia";
$string3 = "Hello,$name";
echo $string3 ."<br>";


// Double-quoted string with escape sequence interpreted
$string4 = "Newlines are interpreted \n";
echo $string4."<br>";


// Heredoc string with variable interpolation and escape sequences
$nickname = "Reeta";
$string6 = <<<EOD
Hello, $nickname!
This is a heredoc string.
Newlines and tabs are preserved.
Escape sequences like \n 
and variable interpolation work here.
EOD;
echo nl2br($string6). "<br>";

// Nowdoc string without variable interpolation and escape sequences
$string7 = <<<'EOD'
This is a nowdoc string.
Newlines and tabs are preserved.
Escape sequences like \n and variable interpolation do not work here.
EOD;
echo nl2br($string7);
echo " <br>Lab No.: 7a <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";
?>
