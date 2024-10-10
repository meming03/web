<?php
session_start();
header("Access-Control-Allow-Origin: *");
include '../db.php';
var_dump($_POST);
echo "test";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email-address'];
    $password = $_POST['password'];
    


    echo "login";

    $query = "SELECT * FROM customer WHERE Email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
// check if pwd match
echo $password ;
echo $user['Password'];
if ($password === $user['Password']) { 
// create session for user
            $_SESSION['user_id'] = $user['id'];
            $firstName = $user['FirstName']; 
            $_SESSION['firstname'] = $firstName;
            echo "Login successful! Welcome, " . $_SESSION['firstname'];
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "Email not found!";
    }
 
 



$conn->close();


}

