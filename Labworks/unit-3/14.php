  <?php
   class DivideByZeroException extends exception{}
   class DivideByNegativeException extends exception{}
   function checkDivisor($dividend,$divisor)
   {
            try{
                if($divisor==0){
                    throw new DivideByZeroException;}
                else if($divisor<0){
                    throw new DivideByNegativeException;}
        
        else{
            $result=$dividend/$divisor;
            echo "Result=".$dividend/$divisor."<br>";
            echo "Result=$result    <br>";
        }}
               catch(DivideByZeroException $e){
                echo "Divide by Zero occured<br>";
            }
            catch(DivideByNegative $e){
                echo "Divide by negative Occured<br>";
             }
             catch(Exception $e){
                echo "Unknown<br>";
             }}
             checkDivisor(24,4);
             checkDivisor(46,8);
             checkDivisor(24,0);
             checkDivisor(24,-1);
  ?>