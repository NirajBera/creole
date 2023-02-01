<?php
    session_start();
?>
<html>
        <body>
            

                <?php
                        // Set session variables
                        $_SESSION["name"] = "xyz";
                        $_SESSION["id"] = 123;
                        echo "Session variables are set";
                        echo "<br>";
                        echo "Click this button to show session store in browser stroge.";
                        echo "<br>";
                        echo "<br>";
                ?>
                <form action="http://localhost/php/week-1/training/session/testsession.php" method = "post">
                    <button type="submit" name="submit">button</button>
                </form>
        </body>
</html>