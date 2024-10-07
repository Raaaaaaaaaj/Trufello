<?php
include "incl/database.php";


if(isset($_POST['submit'])){
    
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $subject = mysqli_real_escape_string($conn,$_POST['subject']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);
    
    $stmt = $conn->prepare("INSERT INTO contact (name, phone, email, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $phone, $email, $subject, $message);
    $stmt -> execute();
  
  if($stmt -> affected_rows>0){
    header("location:contact.php");
    echo "Sign up successfully";

  }else{
    echo "Error!!!!!";
  }
  }


?>
