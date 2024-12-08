<?php

include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $middleName=$_POST['mName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $gender=$_POST['gender'];
    $dateOfBirth = $_POST['birthdate'];

    $checkEmail="SELECT * FROM users WHERE email='$email'";
    $result=$conn->query($checkEmail);

    if ($result->num_rows>0) {
        echo "<script>alert('Email already exists')</script>";
    } else {

        $insertQuery = "INSERT INTO users (firstName, lastName, middleName, email, password, gender, dateOfBirth)
        VALUES ('$firstName', '$lastName', '$middleName', '$email', '$password', '$gender', '$dateOfBirth')";
            if($conn->query($insertQuery) === TRUE) {
                header("location: index.php");
            } else {
                echo "Error:".$conn->error;
            }
    }
}

if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password) ;
    
    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['email']=$row['email'];
     header("Location: homepage/homepage.php");
     exit();
    }
    else{
     header("Location: index.php?error=invalid_credentials");
     exit();
    }
 
 }
?>