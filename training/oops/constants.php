<?php
    class MyClass
    {
        const CONSTANT = 'hello, good morning ';

        function showConstant() {
            echo  self::CONSTANT . "\n";
            echo "<br>";
        }
    }

    echo MyClass::CONSTANT . "\n";
    echo "<br>";

    $classname = "MyClass";
    echo $classname::CONSTANT . "\n";
    echo "<br>";

    $class = new MyClass();
    $class->showConstant();
    echo $class::CONSTANT."\n";
?>