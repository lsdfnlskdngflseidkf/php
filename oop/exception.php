<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  
   class DivideByZeroException extends exception{}
   class DivideByNegativeException extends exception{}
   function checkDivisor($dividend,$divisor)
   {
            try{
                if($divisor==0)
                {
                    throw new DivideByZeroException;
                }
                else if($divisor<0)
                {
                    throw new DivideByNegativeException;
                }
        
        else
        {
            $result=$dividend/$divisor;
            echo "Result=".$dividend/$divisor."<br>";
            echo "Result=$result    <br>";
        }
        }

               catch(DivideByZeroException $e){
                echo "Divide by Zero<br>";
            }
            catch(DivideByNegative $e){
                echo "Negative Division<br>";
             }
             catch(Exception $e){
                echo "Unknown<br>";
             }
    }

             checkDivisor(24,4);
             checkDivisor(46,8);
             checkDivisor(24,0);
             checkDivisor(24,-1);

  ?>
</body>
</html>