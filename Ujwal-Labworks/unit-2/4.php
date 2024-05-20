    <?php

         $var=0;
        $test=<<<EOT
        this is  a multiline string using heredoc
        this is in the next line
        another line. Variables are interpolated in heredoc
        $var
        EOT;
        $string = <<<'ETO'
        <br>
        this is  a multiline string using nowdoc
        this is in the next line
        another line variables are not interpolated in nowdoc
        $var
        ETO;
        echo "$test";  
        echo "$string";
    ?>