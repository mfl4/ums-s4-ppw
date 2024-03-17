<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sum Program</title>
</head>
<body>
<h1>Sum Operation Two Numbers</h1>

<form method="POST" action="sum-operation.php">
    <h4>
        <label for="value_a">
            The value of A is
            <input type="number" name="value_a">
        </label>
    </h4>
    <h4>
        <label for="value_b">
            The value of B is
            <input type="number" name="value_b">
        </label>
    </h4>
    <h4>
        <input type="submit" name="submit" value="Sum up">
    </h4>
</form>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$value_a = intval($_POST["value_a"]);
$value_b = intval($_POST["value_b"]);
$submit = $_POST["submit"];

if ($submit) {
    $result = $value_a + $value_b;
    echo "</br><h4>The value of A is <font color='blue'>$value_a</font></h4>";
    echo "<h4>The value of B is <font color='red'>$value_b</font></h4>";
    echo "<h4>So the value of A plus the value of B is <font color='purple'>$result</font></h4>";
};
?>
</body>
</html>