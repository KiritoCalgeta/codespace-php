<?php

    $error = "";
    $x = "";
    $y = "";
    $result = "";
    if(isset($_GET['operation'])) {
        $x = $_GET['num1'];
        $y = $_GET['num2'];
        $op = $_GET['operation'];
        
        if(is_numeric($x) && is_numeric($y))  {
            switch($op) {
                case 'add' : $result = $x + $y;
                    break;
                case 'subtract' : $result = $x - $y;
                    break;
                case 'multiply' : $result = $x * $y;
                    break;
                case 'divide' : $result = $x / $y;
                    break;
            }
        }else{
            $error = "Enter Number first";
        }

        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title> Calculator</title>
</head>
<body>
    <h1><?= $error ?></h1>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <!-- Number 1 -->
        <div>
            <label for="num1">Number 1</label>
            <input type="number" name="num1" id="num1" value="<?= $x ?>">
        </div>  

         <!-- Number 2 -->
         <div>
            <label for="num2">Number 2</label>
            <input type="number" name="num2" id="num2" value="<?= $y ?>">
        </div>

        <!-- Result -->
            <div>
            <label for="result">Result</label>
            <input type="number" id="result" value="<?= $result ?>" disabled>
            </div>

            <!-- Operation -->
            <div>
                <input type="submit" value="add" name="operation">
                <input type="submit" value="subtract" name="operation">
                <input type="submit" value="multiply" name="operation">
                <input type="submit" value="divide" name="operation">
            </div>
</body>
</html>