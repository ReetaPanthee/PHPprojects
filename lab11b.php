<?php

// Define a function that throws different exceptions based on input
function validateNumber($number) {
    if (!is_numeric($number)) {
        throw new InvalidArgumentException('Invalid number format.');
    }

    if ($number <= 0) {
        throw new RangeException('Number must be greater than zero.');
    }

    return $number;
}

// Example of using multiple catch blocks
$inputs = [10, 'abc', 0];

foreach ($inputs as $input) {
    try {
        $result = validateNumber($input);
        echo "Validated number: $result<br>";
    } catch (InvalidArgumentException $e) {
        echo 'Caught InvalidArgumentException: ',  $e->getMessage(), "<br>";
    } catch (RangeException $e) {
        echo 'Caught RangeException: ',  $e->getMessage(), "<br>";
    } catch (Exception $e) {
        echo 'Caught generic Exception: ',  $e->getMessage(), "<br>";
    } finally {
        echo "Finally block executed.<br>";
    }
}
echo " <br> Lab No.: 11b <br>";
echo "Name = Rita Panthi <br>"; 
echo "Roll No.: 22";

?>
