<?php
if (isset($_GET['error']) && $_GET['error'] == 'invalid_credentials') {
    echo '<div class="error-message">Invalid email or password.</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAXTRACK Registration and Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body> <br><br><br><br>

    

    <h1 class="font-titles">
       <!-- <img src="lecherialogo2.png" alt="VaxTrack Logo" class="logo1"> -->
        <img src="img/calambalogo.png" alt="VaxTrack Logo" class="logo">
        VAXTRACK for Sitio Ronggot
        <img src="img/lagunalogo.png" alt="VaxTrack Logo" class="logo">
      </h1>

    <div class="container" id="signup" style="display: none;">
        <h1 class="font-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required pattern="[A-Za-z]+$" title="First name must only contain letters">
                <label for="fName">First Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required pattern="[A-Za-z]+$" title="Last name must only contain letters">
                <label for="lName">Last Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="mName" id="mName" placeholder="Middle Name" required pattern="[A-Za-z]+$" title="Middle name must only contain letters">
                <label for="mName">Middle Name</label>
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
            </div> <br><br>

           


            <div class="input-gender">
                <div class="gender-label">
                    <label>Gender</label>
                </div>
                <div class="gender-options">
                    <label>
                        <input type="radio" name="gender" value="male">
                        Male
                    </label>
                    <label>
                        <input type="radio" name="gender" value="female">
                        Female
                    </label>
                </div>
            </div> <br><br>

            <div class="input-group">
                <i class="fas fa-calendar-alt"></i>
                <input type="date" name="birthdate" id="birthdate" placeholder="Date of Birth" required>
                <label for="birthdate">Date of Birth</label>
            </div> <br><br>

            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>

      <!--  <p class="or">
            ------------or------------
        </p>

        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div> -->
        
        <div class="links">
            <p>Already have an account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="font-title">Sign In</h1>
        <form method="post" action="register.php">
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

      <!--  <p class="or">
            ------------or------------
        </p>

        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div> -->
        
        <div class="links">
            <p>Don't have an account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>

    <section class="contact">

            <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class='bx bxs-map' ></i></div>
                <div class="text">
                    <h3>About This System</h3>
                    <p>Welcome to VAXTRACK: DIGITALIZED INFANT VACCINATION SCHEMING SYSTEM FOR SITIO
RONGGOT WITH SMS NOTIFICATION. Manage vaccination schedules effortlessly with our digital
tracker. Log in to access your personalized dashboard, view upcoming appointments, and
receive SMS reminders to stay on track with your child’s immunizations. Together, let’s keep
health a priority with simple and reliable solutions.
</p><br><br>
                <h3>FAQ</h3>
                <p>Q: What information do I need to sign up? <br>
A: You’ll need a valid email address or phone number, a password, and basic personal details. <br>
- Q: Is my data secure when I sign up? <br>
A: Absolutely! We prioritize your privacy and use advanced security measures to protect your
information. <br>
- Q: Can I edit my details after signing up? <br>
A: Yes, you can update your profile information anytime through your account settings. If you
have other questions, feel free to contact our support team!</p>
                    </div>
                </div>
            </div>

        </section>

    <script src="script.js"></script>
</body>
</html>