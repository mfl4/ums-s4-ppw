<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Odd and Even Program</title>
</head>
<body>
<h1>Determining Odd and Even Numbers</h1>

<form method="POST" action="odd-and-even.php">
    <h4>
        <label>
            Enter a number :
            <input type="number" name="number">
        </label>
    </h4>
    <h4>
        <input type="submit" name="submit" value="Proses">
    </h4>
    </br>
</form>

<?php
error_reporting(E_ALL ^ E_NOTICE);

$number = $_POST["number"];
$submit = $_POST["submit"];

if ($submit) {
    if ($number == null || $number == 0) {
        echo "<h4><font color='red'>Please enter a number not equal to 0</font></h4>";
    } else if ($number % 2 == 0) {
        echo "<h4><font color='blue'>$number is an even number</font></h4>";
    } else {
        echo "<h4><font color='green'>$number is an odd number</font></h4>";
    };
};
?>
</body>
</html>