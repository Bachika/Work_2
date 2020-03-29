<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php
    $x = $_POST["ricxvi"];
    
$matrix = array(
    array(rand(10,100),rand(10,100),rand(10,100),rand(10,100)),
    array(rand(10,100),rand(10,100),rand(10,100),rand(10,100)),		
    array(rand(10,100),rand(10,100),rand(10,100),rand(10,100)),
    array(rand(10,100),rand(10,100),rand(10,100),rand(10,100)),
);

echo '<table border="1" width = "200" height = "200">';

foreach( $matrix as $a )
{
    echo '<tr>';
    foreach( $a as $b )
    {
        echo '<td>'.$b.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo "<br>";
echo "<br>";

$nuliErti = $matrix[0][1];
$nuliOri = $matrix[0][2];
$nuliSami = $matrix[0][3];
$ertiOri = $matrix[1][2];
$ertiSami = $matrix[1][3];
$oriSami = $matrix[2][3];

echo "mtavari diagonalis zeda";

echo 
"<table border = '1'>
    <tr border = '1' >
    <td bprder = '1'>$nuliErti
    </td>
    <td bprder = '1'>$nuliOri
    </td>
    <td bprder = '1'>$nuliSami
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>
    </td>
    <td bprder = '1'>$ertiOri
    </td>
    <td bprder = '1'>$ertiSami
    </td>
    </tr>
    <tr border = '1'>
    <td bprder = '1'>
    </td>
    <td bprder = '1'>
    </td>
    <td bprder = '1'>$oriSami
    </td>
    </tr>
</table>";
echo "<br>";
echo "<br>";
?>

<form method="post" action="index_1.php">
    <input type="text" name="ricxvi"> sheiyvanet ricxvi <br><br> 
    <input type="submit" value = "submit">
</form>
</body>
</html>