<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $countries=array(array("Nepal","India","China","Japan"),array("France","Spain","Bulgaria","Albania"),array("USA","Canada","Mexico","Belize"),array("Brazil","Argentina","Chile","Bolivia"),array("Morocco","Egypt","Chad","Ethiopia"));    
    echo "<center><table border=2 width=60%>";
        for($row=0;$row<5;$row++){
            echo "<tr>";
            for($col=0;$col<4;$col++){
                echo "<td>".$countries[$row][$col]."<td>";
            }
            echo "</tr>";
        }
        
    ?>
</body>
</html>