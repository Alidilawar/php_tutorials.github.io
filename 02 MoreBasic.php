<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.container{
    max-width: 80%;
    background-color: rgb(185, 201, 96);
    margin: auto;
    padding: 23px;
}

</style>
<body>
    <div class="container">
    <h1>Lets learn about php</h1>
    <p>Your party status is here</p>
    <?php
     $age = 6;
     if ($age > 18) {
         echo "You can go to the party";
     }
     elseif ($age == 7) {
         echo "you are 7 years old";
     }
     elseif ($age == 6) {
         echo "You are 6 years old";
     }
     else {
         echo "You can not go to the party";
     }

     //Arrays on php
     $language = array('python','C++','php','NodeJs');

     //echo count($language);
    //  echo $language[0];


    //Loops in php
    $a =0;
    while ($a <= 10) {
        echo "<br> The value of a is: ";
        echo $a;
        $a++;
    }

    //Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    //For loop
    for($a=60; $a < 10; $a++){
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($language as $value) {
        echo "<br>The value from foreach loop is: ";
        echo $value;
    }

    function print5()
    {
        echo "FIVE";
    }
    print5();
    print5();
    print5();
    print5();

    function print_number($number){
        echo "<br>Your number is: ";
        echo $number;
    }
    print_number(45);
    print_number(5);
    print_number(4);
    
    ?>
    </div>
</body>
</html>