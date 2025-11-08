<?php
$insert = false;

if (isset($_POST['name'])) {
    // set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $con = mysqli_connect($server, $username, $password);

    // Check connection
    if (!$con) {
        die("Connection to this database failed due to: " . mysqli_connect_error());
    } else {
        // echo "Success connecting to the database";
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];
        
        $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
                VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
        
        if ($con->query($sql) === TRUE) {
           // echo "New record created successfully";
           $insert = true;
           

        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        // close the dtabase connection
        $con->close();
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="kharakpur.jpeg" alt="IIT Kharagpur" class="bg">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Travel Form</h1>
        <p>Enter your details to confirm your participation in the trip</p>
        <?php  
        if($insert == true) {
       echo  "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip.</p>";
         } ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
