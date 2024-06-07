<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--FontAwesome.com to outsource icons-->
    <link rel="stylesheet" href="logon.css">
</head>
<body>
    <div class="contain" id="signUp" style="display:none;">
        <h1 class="form-title"> Register</h1>
        <form method="post" action="reg.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fname" id="firstname" placeholder="First Name" required>
                <label for="fname">First Name</label> <!--use the id to connect the label to the input field-->
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lname" id="lastname" placeholder="Last Name" required>
                <label for="lname">Last Name</label> 
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label> 
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label> 
            </div>

            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>
        <p class="or">
            --------or--------
        </p>
                    <div class="icons">
                            <i class="fab fa-google"></i>
                            <i class="fab fa-facebook"></i>
                    </div>
                            <div class="links">
                                <p> Already have an account? </p>
                                    <button id="signInButton"> Sign In</button> <!--To shift to sign in container-->
                                
                            </div>
    </div>

                        <!-- Sign In Container-->

    <div class="contain" id="signIn">
        <h1 class="form-title"> Sign In</h1>
        <form method="post" action="reg.php">
            
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label> 
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label> 
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
            --------OR--------
        </p>
                    <div class="icons">
                            <i class="fab fa-google"></i>
                            <i class="fab fa-facebook"></i>
                    </div>
                            <div class="links">
                                <p> Don't have an account? </p>
                                    <button id="signUpButton"> Sign Up</button>
                                
                            </div>
    </div>
    <script src="logon.js"></script>
</body>
</html>