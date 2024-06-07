<?php

include 'logconnect.php';

//checks if the variable signUp is set in the post array evaluates to true if the element sign up is present in the form that submitted the data

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    //md5 function encrypts password to 32characters hexadecimal numbers
    $password=md5($password);

    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);

    //checks if the email address exists

    if($result->num_rows>0){
        echo "Email Address Already Exists !";
    }

    else{
        //insert data from the form to the database

        $insertQuery="INSERT INTO users(firstName, lastName, email, password)
            VALUES('$firstName','$lastName','$email','$password')";

            //query method of db connection

            if($conn->query($insertQuery)==TRUE){
                header("location: logon.php");

                //redirection after data is entered into the database
            }
            else{
                echo "Error:".$conn->error;
            }
    }
}

//creating the login form

if(isset($POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users where email='$email' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
         //fetches a row i.e email and pass it to the homepage such    that when the user is logged in they will be directed to the homepage and also the session email will be accessible
        
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: homepage.php");
        exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
}
