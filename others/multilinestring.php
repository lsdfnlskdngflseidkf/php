<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

         $var=0;
        $test=<<<EOT
        this is  a multiline string using heredoc
        thi is in the next line
        another line
        $var
        EOT;
        $string = <<<'ETO'
        <br>
        this is  a multiline string using nowdoc
        thi is in the next line
        another line
        $var
        ETO;
        echo "$test";  
        echo "$string";
    ?>
</body>
</html>