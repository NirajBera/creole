<?php
    setcookie("user", "xyz", time() + 60, '/');
?>
<html>
    <body>

        <?php
            if(count($_COOKIE) > 0) {
                echo "welcome, ".$_COOKIE["user"];
                echo "<br>";
                echo "Cookies are enabled.";
            } else {
                echo "Cookies are disabled.";
            }
        ?>

    </body>
</html>