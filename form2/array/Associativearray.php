<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $colleges=array("Management"=>"Shankar Dev campus","Science"=>"Amrit Science Campus","All"=>"Bhaktapur Multiple Campus");
    foreach($colleges as $text=>$value){
        echo "$text : $value <br/>";

        }
    ?>
</body>
</html>