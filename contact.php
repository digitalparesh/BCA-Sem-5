<?php

include 'connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = strip_tags($_POST['message']);

$sql = "INSERT INTO contact (fname,lname,email,phone,message) VALUES ('$fname', '$lname', '$email','$phone','$message')";

if ($conn->query($sql)) {
  echo "New record created successfully";
  header("Location: contact.html?message=Submit SucessFully");
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
