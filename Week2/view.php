<?php 
    $first_name = htmlspecialchars(filter_input(INPUT_POST, 'first_name'));
    $last_name = htmlspecialchars(filter_input(INPUT_POST, 'last_name'));
    
    $some_number = 42;
    
    // increment
    $some_number++;
    
    // decrement
    $some_number--;
    
    // combined assignment operator
    $some_number += 10;     
    $some_number -= 10;
    
    $some_number_with_a_decimal = 7.7;
    
    $name = "Eric Charnesky";
    
    $name .= " MSIS";
    
    $is_awesome = true;
    
    // integer division
    $interger_quotient = intdiv(7, 2);
?>

   

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
                
        <?php
        echo "Hi $first_name $last_name";
        echo "</br>";
        echo $some_number . " is the answer";
        echo "</br>";
        echo "$name is awesome: $is_awesome";
        echo "</br>";
        echo "7 / 2 is: " . ( 7 / 2 );
        ?>

    </body>
</html>
