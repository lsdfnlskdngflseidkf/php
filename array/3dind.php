<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $matrix=array(
            array(
                array(0,1,2,3,4,5,6),
                array(7,8,9,10,11,12,13),
                array(14,15,16,17,18,19,20)
            ),
            array(
                array(20,19,18,17,16,15,14),
                array(13,12,11,10,9,8,7),
                array(6,5,4,3,2,1,0)),
            array(
                array(8,2,8,4,6,2,7),
                array(2,4,6,7,5,1,2),
                array(1,2,4,5,6,8,5)
            )
            );
            echo "<center>";
            foreach($matrix as $_2darray){
                echo "<table border=2 width=40%>";
                foreach($_2darray as $array){
                  echo "<tr>";
                  foreach($array as $value){
                    echo "<td>$value</td>";
                  }
                  echo "</tr>";
                }
                echo "</table>";
                echo "<br><br><br><br>";
            }
            echo "</center>";


?>
</body>
</html>