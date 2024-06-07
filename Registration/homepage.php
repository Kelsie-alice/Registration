<!--to display the name of the currently logged in user and the log out button-->

<?php
//starts or resumes a session allowing one to retrieve values in the sessions super global array

session_start();
include ("logconnect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Landing</title>
</head>

<body>

    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello <?php 
                if(isset($_SESSION['email'])){
                    $email=$_SESSION['email'];
                    $query=mysqli_query($conn, "SELECT users.* FROM 'users' WHERE users.email='$email'");

                    while($row=mysqli_fetch_array($query)){
                        echo $row['firstName'].' '.$row['lastName'];
                    }
                }
            ?>
            
            :)
        </p>
            <a href="logout.php">Log Out</a>
    </div>
</body>
</html>