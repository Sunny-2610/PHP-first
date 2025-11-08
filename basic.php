<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL</title>
</head>
<body>
    <div class="container">
        This is is index.php file.


    <?php
     echo "Hello, World!";
                 // joymj is similar to print in python
         $varialbe1 = 34;
         $varialbe2 = 45;
         echo $varialbe1 + $varialbe2;

        //  operators in php
        //  Arithmitec operators
        echo "<br>";
        echo "The value of varialbe1 + varialbe2 is ";
        echo $varialbe1 + $varialbe2;

         echo "<br>";
        echo "The value of varialbe1 - varialbe2 is ";
        echo $varialbe1 - $varialbe2;
        //  Assignement operators
        echo "<br>";
            echo "The value of 1==4 is ";
            echo var_dump(1==4);



        //  Comparision Operator 
        echo"<h1> Comparision Operator </h1>";


        echo $varialbe1++;   
        echo "<br>";
        echo $varialbe1;
        //  Increament Decrement Operator
        //  Logical Operator

        echo "<br>";


        // Data Types in PHP

        echo "<h1> Data Types in PHP </h1>";
        $var1 = "This is a string"; // string
        echo "<br>";
        echo var_dump($var1);

       
    ?>    
    
    </div>
</body>
</html>