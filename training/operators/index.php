<html>
<body>    
<form action="" method="post">
    <br>
    <center>
    <lable for="">enter 1<sup>st</sup> value :- </lable>
    <input type="text" id="sub" name="input1">
    <br>


    <lable for="">enter 2<sup>nd</sup> value :- </lable>
    <input type="text" id="sub" name="input2">

    <br><br>
    <lable for="">select operator :- </lable>
    <select name="select">
            <option value="select operator">select operator</option>
            <option value="arithmetic operators">Arithmetic operators</option>
            <option value="assignment operators">Assignment operators</option>
            <option value="comparison operators">Comparison operators</option>
            <option value="increment/decrement operators">Increment/Decrement operators</option>
            <option value="logical operators">Logical operators</option>
            <option value="string operators">String operators</option>
            
            
    </select>
    <br><br>
    <button name="submit" type="submit">Click for Result</button>
</center>
</form>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
    
$val1=(int)$_POST['input1'];
$val2= (int)$_POST['input2'];
$select = $_POST['select'];


        switch($select){

            case 'arithmetic operators':
                echo "Arithmetic Operators :- ";
                echo "<br>";
                echo ' 1 value  = '. $val1;
                echo "<br>";
                echo ' 2 value  = '. $val2;
                echo "<br>";
                echo "Addition = ". $val1 + $val2; 
                echo "<br>";
                echo "Subtraction = ". $val1 - $val2; 
                echo "<br>";
                echo "	Multiplication = ". $val1 * $val2; 
                echo "<br>";
                echo "Division = ". $val1 / $val2 ; 
                echo "<br>";
                echo "Modulus = ". $val1 % $val2; 
                echo "<br>";
                echo "Exponentiation = ". $val1 ** $val2; 
                echo "<br>";

                break;

                case 'assignment operators':
                    $x=$val1;
                    echo "<br>";
                    echo "Assignment Operators :- ";
                    echo "<br>";
                    echo "Addition Operation (+=) = ".($x +=($val2));
                    echo "<br>";
                    echo "Subtraction Operation (-=) = ".($x -=($val2));
                    echo "<br>";
                    echo "multiplication Operation (*=) = ".($x *=($val2));
                    echo "<br>";
                    echo "Division Operation (/=) = ".($x /=($val2));
                    echo "<br>";
                    echo "Modulus Operation (%=) = ". ($x %=($val2));
                    echo "<br>";
                        
                    break;
            
                    case 'comparison operators':
                        echo "Comparision Operators :- ";
                        echo "<br>";
                        echo "<br>";

                        echo "Equals Operation (==) = "; var_dump(($val1)==($val2)) ; 
                        echo "<br>";
                        echo "Identical Operation (===) = " ; var_dump(($val1)===($val2)); 
                        echo "<br>";
                        echo "Not-Equals Operation (!=) = "; var_dump (($val1)!=($val2)); 
                        echo "<br>";
                        echo "Not-Equals Operation (<>) = "; var_dump (($val1)<>($val2)); 
                        echo "<br>";
                        echo "Not-Identical Operation (!==) = "; var_dump (($val1)!==($val2)); 
                        echo "<br>";
                        echo "Greater than Operation (>) = "; var_dump (($val1)>($val2)); 
                        echo "<br>";
                        echo "Less than Operation (<) = "; var_dump (($val1)<($val2)); 
                        echo "<br>";
                        echo "Greater than or Equal to Operation (>=) = "; var_dump (($val1)>=($val2)); 
                        echo "<br>";
                        echo "Less than or Equal to Operation (<=) = "; var_dump (($val1)<=($val2)); 
                        echo "<br>";
                        echo "Spaceship Operation (<=>) = "; var_dump (($val1)<=>($val2)); 
                        echo "<br>";
                        
                        break;

                        case 'increment/decrement operators':

                            
            
                            echo "Increment/Decrement Operators :- ";
                            echo "<br>";
                           
                            echo "Pre-Icrements Operation val1 (++val) = ".(++$val1);
                            echo "<br>";
                            echo "Pre-Icrements Operation val2 (++val) = ".(++$val2);
                            echo "<br>";
                            echo "<br>";
                            echo "Post-Increment Operation val1 (val++) = ".($val1++);
                            echo "<br>";
                            echo "Post-Increment Operation val2 (val++) = ".($val2++);
                            echo "<br>";
                            echo "<br>";
                            echo "Pre-Decrement Operation val1 (--val) = ".(--$val1);
                            echo "<br>";
                            echo "Pre-Decrement Operation val2 (--val) = ".(--$val2);
                            echo "<br>";
                            echo "<br>";
                            echo "Post-Decrement Operation val1 (val--) = ".($val1--);
                            echo "<br>";
                            echo "Post-Decrement Operation val2 (val--) = ".($val2--);
                            echo "<br>";
                            
                            break;


                            case 'logical operators':
                                echo "logical Operators :- ";
                                echo "<br>";
                                echo "it compare a static value with your give value, and the staic value 100";
                                echo "<br>";
                                echo "so, enter 100 for batter result";
                                echo "<br>";
                
                
                                if ($val1 == 100 and $val2 == 100) {
                                     echo "and operators (val1 and val2):-  both are true";
                                     echo "<br>";
                                }
                                if ($val1 == 100 or $val2 == 100) {
                                    echo " or Operation (val1 or val2):- either val1 or var2 is true";
                                    echo "<br>";
                               }
                               if ($val1 == 100 xor $val2 == 100) {
                                echo "xor Operation (val1 xor val2):-  either val1 or var2 is true, but not both";
                                echo "<br>";
                                }
                                if ($val1 == 100 && $val2 == 100) {
                                    echo "&& Operation (val1 && val2):- both are true";
                                    echo "<br>";
                                }
                                if ($val1 == 100 || $val2 == 100) {
                                    echo "|| Operation (val1 || val2):- either val1 or var2 is true ";
                                    echo "<br>";
                                }
                                if ($val1 !== 100) {
                                    echo "not Operation (val1 not val2):-  if val1 is not true";
                                    echo "<br>";
                                }
                
                               
                                  
                               
                                
                        
                                break;

                            case 'string operators':
                                    $x=$val1;
                                    echo "<br>";
                                    echo "String operators :- ";
                                    echo "<br>";
                                    echo "Concatenation (.) = ";
                                    echo $val1 . $val2;
                                    echo "<br>";
                                    echo "SConcatenation assignment (.=) = ";
                                    $val1 .= $val2;
                                    echo $val1;
                                    echo "<br>";
                                    
                                        
                                    break;


            default:
                echo "Enter valid input";
                break;
        }
    }

    
    ?> 