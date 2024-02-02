<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $programs['hello']="BIM";
    $programs['HI']="BCA";
    $programs['Good']="BCS";
    $programs['Evening']="BSC . CSIT";
    echo "<ol>";
    foreach($programs as $text){
    echo "<li>".$text." </li>";
    }
    echo "</ol>";
    ?>
</body>
</html>