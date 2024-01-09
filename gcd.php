<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function GCD($a,$b){
        if($b>$a){
            $temp=$a;
            $a=$b;
            $b=$temp;
        }
        if($a%$b==0){
            return $b;
        }
        else
        return GCD($b,$a%$b);
    }
    $gcd=GCD(20,15);
    echo "The GCD of 20 and 15 is $gcd";
    ?>  
</body>
</html>