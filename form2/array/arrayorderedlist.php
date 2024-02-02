<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $programs=array("BIM","BCA","BIT");
    echo "<ol>";
    $arraylength=count($programs);
    for($i=0;$i<$arraylength;$i++){
    echo "<li>".$programs[$i]." </li>";
    //echo $programs[$i];
    }
   echo "</ol>";
    ?>
</body>
</html>