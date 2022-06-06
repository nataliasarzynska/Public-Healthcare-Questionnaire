<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleankieta.css" type="text/css">
    <title>Ankieta</title>
</head>
<body>
<div class = "text">
 Twoje odpowiedzi zostały zapisane. 
 <br>Dziękujemy za udział w ankiecie.
</div>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $p3 = $_POST['p3'];
    $p4 = $_POST['p4'];
    $p5 = $_POST['p5'];
    $p6 = $_POST['p6'];
    $p7 = $_POST['p7'];
    $p8 = $_POST['p8'];
    $p9 = $_POST['p9'];
    $p10 = $_POST['p10'];
    $p11 = $_POST['p11'];
    $p12 = $_POST['p12'];
    $p13 = $_POST['p13'];
    $p14 = $_POST['p14'];
    $p15 = $_POST['p15'];
    $p16 = $_POST['p16'];
    $p17 = $_POST['p17'];
    $p18 = $_POST['p18'];
}

$servername = "";
$username = "";
$dbpassword = "";
$dbname = "";

$dbconn = mysqli_connect($servername, $username, $dbpassword, $dbname);


$q_add_ans = "INSERT INTO wyniki (p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15, p16, p17, p18) VALUES ('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12','$p13','$p14','$p15','$p16','$p17','$p18')";


if (mysqli_query($dbconn,$q_add_ans)) {
} else {
    echo "Błąd" ;
}

?>

</body>
</html>