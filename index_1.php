<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $ricxvebi = array(rand(10,100),rand(10,100),rand(10,100),rand(10,100),rand(10,100),
    rand(10,100),rand(10,100),rand(10,100),rand(10,100),rand(10,100),rand(10,100),rand(10,100));
    print_r($ricxvebi);
    echo "<br>";
    echo "<br>";
?>

<form method="post" action="index_1.php">
    <input type="text" name="ricxvi"> sheiyvanet ricxvi <br><br> 
    <input type="submit" value = "submit">
</form>

<?php
    $x = $_POST["ricxvi"];
    echo "<br>";

    $meti = array_filter($ricxvebi, function($value) use ($x) { return $value > $x; });
    echo "metia ".count($meti);

    echo "<br>";
    echo "<br>";

    $naklebi = array_filter($ricxvebi, function($value) use ($x) { return $value < $x; });
    echo "naklebia ".count($naklebi);
?>

</body>
</html>