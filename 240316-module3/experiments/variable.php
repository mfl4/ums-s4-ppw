<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable</title>
</head>
<body>
<h1>Guess Book</h1>
<form action="variable.php" method="post">
    <p>Name: <input type="text" name="name" size="20"></p>
    <p>Email: <input type="email" name="email" size="20"></p>
    <p>Comment: <textarea name="comment" cols="30" rows="3"></textarea></p>
    <p><input type="submit" name="submit" value="Submit"></p>
</form>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$submit = $_POST['submit'];
if ($submit) {
    echo "</br > Name : $name";
    echo "</br > Email : $email";
    echo "</br > Comment : $comment";
}
?>
</body>
</html>