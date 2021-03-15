<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>

<body>
    <div class="container">    
        This is my first php website <br>
        <?php 
        define('pi', 3.14);
        echo 'Hello world and this is printed using php';

           // Single line comment
        /*
            This
            is 
            a
            multi
            line
            comment
        */

        $variable1 = 5;
        $variable2 = 2;
        echo $variable1;
        echo $variable2;

        Echo $variable1 + $variable2;

        // Operators in PHP

            // Arithmetic Operators 
            echo '<br>';
            echo 'The value of variable1 + variable2 is <br>';
            echo $variable1 + $variable2;
            echo '<br>';
            echo 'The value of varible1 - variable2 is <br>';
            echo $variable1 - $variable2;
            echo '<br>';
            echo 'The value of varible1 * variable2 is <br>';
            echo $variable1 * $variable2;
            echo '<br>';
            echo 'The value of varible1 / variable2 is <br>';
            echo $variable1 / $variable2;
            echo '<br>';

            // Assignment Operators
            $newVar = $variable1;
            // $newVar += 1;
            // $newVar -= 1;
            // $newVar *= 1;
            $newVar /= 1;
            echo "The value of new variable is ";
            echo $newVar;
            echo "<br>";

            // Comparison Operators

            echo "<h1> Comparison Operators </h1> <br>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";

            echo "The value of 1!=4 is ";
            echo var_dump(1==4);
            echo "<br>";

            echo "The value of 1>=4 is ";
            echo var_dump(1==4);
            echo "<br>";

            echo "The value of 1<=4 is ";
            echo var_dump(1==4);
            echo "<br>";

            // Increment/Decrement Operators 
            // echo $variable1++;
            // echo $variable1--;
            // echo ++$variable1;
            echo --$variable1;
            echo "<br>";
            echo $variable1;

            // Logical Operator
            // and (&&)
            // or (||)
            // xor
            // not !

            // $myVar = (true and true); 
            // $myVar = (false and true); 
            // $myVar = (true and false); 
            // $myVar = (false and false);
            
            // $myVar = (true or  true); 
            // $myVar = (false  or  true); 
            // $myVar = (true  or  false); 
            // $myVar = (false  or  false);
            
            // $myVar = (true xor true); 
            // $myVar = (false xor true); 
            // $myVar = (true xor false); 
            // $myVar = (false xor false);
            
            $myVar = (true and false); 
            echo "<br>";
            echo var_dump($myVar);
    ?>

    <?php 
        echo "<h1>Data types in php</h1>";
        /* 1 string
           2 integer
           3 float
           4 Array
           5 Boolean
           6 Object
        */
           echo "<br> Data Types <br>";
           $var = "This is a string";
           echo var_dump($var);
           echo "<br>";

           $var = 67;
           echo var_dump($var);
           echo "<br>";

           $var = 67.1;
           echo var_dump($var);
           echo "<br>";
   
           $var = true;
           echo var_dump($var);
           echo "<br>";

           echo pi;
    ?>  
    </div>
</body>

</html>