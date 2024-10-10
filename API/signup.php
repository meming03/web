<?php
session_start();
header("Access-Control-Allow-Origin: *");
include '../db.php';
var_dump($_POST);
echo "test";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email-address'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $city= $_POST['city-name'];
    $street = $_POST['street-name'];
    $houseno= $_POST['house-num'];


    echo $lname;
    echo "login";

    $sql = "INSERT INTO customer (FirstName, LastName, PhoneNo, Email, Password, City,Street, HouseNo)
VALUES ('$fname','$lname','$phone ',' $email', '$password','$city','$street','$houseno' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


}





?>