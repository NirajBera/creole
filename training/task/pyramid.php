<html>
  <body>
    <form actio="" method="post">
        <input type="number"  name="input">
        <button type="submit" name ="submit"> submit</button>
    </form>
  </body>  
</html>    



<?php
      if(isset($_POST['submit'])){

        (int)$v=$_POST['input'];

        for($i=$v;$i>=1;$i--)
        {
           for($j=$v-1;$j>=$i;$j--)
           {
             
             echo "&nbsp;&nbsp;";
           }
           
           for($j=1;$j<=$i;$j++)
           {
             echo $j;
           }

           for($k=$i-1;$k>=1;$k--)
           {
             echo $k;

           }

           echo "<br>";

        }
      
            
            
      }

?>