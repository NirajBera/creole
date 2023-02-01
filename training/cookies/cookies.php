<?php
    $cookie_name="user";
    $cookie_value = "xyz";
    setcookie($cookie_name,$cookie_value,time() + (86400 * 30),"/");
?>

<?php
    if(isset($_COOKIE[$cookie_name])){
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];

    }else{
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }
?>