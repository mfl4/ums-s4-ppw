<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date and Time Functions</title>
</head>
<body>
<?php
date_default_timezone_set('Asia/Jakarta');

$hour = date("H:i:s A");
$time = date("d-m-Y");
$hari = date("l");
$datex = date("d");
$month = date("F");
$year = date("Y");

echo "It is now $hour</br>";
echo "It is now $time</br>";
echo "More details on $hari, $month $datex of the year $year.";
?>
</body>
</html>