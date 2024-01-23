<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $colleges=array("BMC"=>array("name"=>"BhaktapurMultipleCampus","Programs"=>"BCA,BIM,BBA,BIT,BSCCSIT","Address"=>"Bhaktapur"),
            "SDC"=>array("name"=>"ShankerDevCampus","Programs"=>"BIM,BBA,BBA-F,BBM","Address"=>"Putalisadak"),
            "NCC"=>array("name"=>"NepalCommerceCampus","Programs"=>"BIM,BBA,BBA-F,BBM","Address"=>"Minbhawan"),
            "PMC"=>array("name"=>"PatanMultipleCampus","Programs"=>"BCA,BIM,BBA,BIT,BSCCSIT","Address"=>"Patan Dhoka"));
            echo "<center><table border=2 width=60% height=100px>";   
            foreach($colleges as $key=>$value){
                
                echo "<tr>";
                    foreach($key as $innerkey=>$innervalue){
                        echo "<td>$innervalue</td>";
                    }
                    echo "</tr>";
                  }
                // print_r($colleges);
                echo "</table>";
    ?>
</body>
</html>