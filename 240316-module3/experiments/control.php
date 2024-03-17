<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control Structure</title>
</head>
<body>
<h1>Score</h1>
<form method="POST" action="control.php">
    <p>Enter a numeric score (0-100): <input type="text" name="score" size="3"></p>
    <p><input type="submit" value="Proses" name="submit"></p>
</form>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$submit = $_POST["submit"];
$score = $_POST["score"];

if ($submit) {
    if ($score == "") {
        $letter = "Blank/Unfilled score";
    } elseif ($score <= 20) {
        $letter = "E";
    } elseif ($score <= 40) {
        $letter = "D";
    } elseif ($score <= 60) {
        $letter = "C";
    } elseif ($score <= 80) {
        $letter = "B";
    } elseif ($score <= 100) {
        $letter = "A";
    } else {
        $letter = "Incorrect score entered!";
    }
    echo "The number score is $score</br>";
    echo "Then the letter score is $letter</br>";
};
?>
</body>
</html>