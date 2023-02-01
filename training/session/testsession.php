<?php

        session_start();
?>


<?php

        echo "Your name is " . $_SESSION["name"];
        echo "<br>";
        echo "Your id is " . $_SESSION["id"];


        session_unset();
        session_destroy();

?>