<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Headings Example</title>
</head>
<body>


<?php
echo "<h1>Multiplication table for 5: </h1><br>";
$number = 5;

for ( $i = 1; $i <=10; $i++) {
    $result = $number * $i;
    echo "$number * $i = $result<br>";
}
    
?>
</body>
</head>