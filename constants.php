<html>
    <?php
        //Constants are like variables except that once they are defined they cannot be changed or undefined
        //constant is an identifier (name) for a simple value. The value cannot be changed during the script


        define("cons","This is php constanst example");
        echo cons;

        //it use in case-sensitive use but pass aggrunment true
        // echo CONS;
        echo "<br>";
        //array constants
        define("name", [
            "raj",
            "jay",
            "meet"
          ]);
          echo name[0];

          echo "<br>";

          //globle use
          function myfun() {
            echo cons;
          }
           
          myfun();



          //a simple value can change
          $a=20;
          $a=25;
          //but constants are not change in bellow give error
          define("cons","This is php constanst");

    ?>

</html>