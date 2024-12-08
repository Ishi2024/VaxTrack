<?php

// Database connection details (replace with your actual credentials)
$host = "localhost";
$user = "root";
$pass = "";
$db = "login";

// Connect to the database
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Session handling (assuming you have a session system in place)
session_start();

// Get the user's email from the session (assuming it's stored there)
$userEmail = $_SESSION['email'];

// Prepare a query to fetch user information based on email
$sql = "SELECT * FROM users WHERE email = ?";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind the email parameter to the prepared statement
$stmt->bind_param("s", $userEmail);

// Execute the statement
$stmt->execute();

// Get the result (assuming only one user with the email)
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Close the connection
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAXTRACK User Profile Setting</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="user-profile.css"> 

    <!--For icons-->
    <link href='https:\\unpkg.com\boxicons@2.1.4\css\boxicons.min.css' rel='stylesheet'>

</head>

<body> <br>
    <div class="clock-container">
        <div id="clock" class="clock"></div>
      </div> <br>

    <div class="container">
        <div class="profile">
            <div class="profile-header">
                <img src="../img/Joshua Garcia Model.jpg" alt="profile" class="profile-img" />
                <div class="profile-text-container"> <br><br>
                <h1 class="profile-title"> User Profile</h1>
                <p class="profile-email"><?php echo $user['email']; ?></p>
                </div>
            </div>
            
            <div class="menu">
                <a href="#" class="menu-link"><i class="fa-solid fa-circle-user menu-icon"></i>Account</a>
                <!--<a href="#" class="menu-link"><i class="fa-solid fa-bell menu-icon"></i>Notification</a> -->
                <a href="user-profile.html" class="menu-link"><i class="fa-solid fa-gear menu-icon"></i>Settings</a>
                <a href="../homepage.php" class="menu-link"><i class="fa-solid fa-right-from-bracket menu-icon"></i>Back</a>
            </div>
        </div>

        <form class="account">
            <div class="account-header">
                <h1 class="account-title">VAXTRACK Account Settings</h1>
                <div class="btn-container">
                    <button class="btn-cancel">Cancel</button>
                    <button class="btn-save">Submit</button>
                </div>
            </div>
            <div class="account-edit">
               <div class="input-container">
                    <label>First Name</label>
                    <input type="text" value="<?php echo $user['firstName']; ?>" placeholder="First Name" readonly>
                  </div>
                  <div class="input-container">
                    <label>Middle Name</label>
                    <input type="text" value="<?php echo $user['middleName']; ?>" placeholder="Middle Name" readonly>
                  </div>
                  <div class="input-container">
                    <label>Last Name</label>
                    <input type="text" value="<?php echo $user['lastName']; ?>" placeholder="Last Name" readonly>
                  </div> 
            
            <!--<div class="input-container">
                    <label>First Name</label>
                    <input type="text" placeholder="First Name" />
                </div>

                <div class="input-container">
                    <label>Middle Name</label>
                    <input type="text" placeholder="Middle Name" />
                </div>

                    <div class="input-container">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name" />
                    </div>-->
                 </div> 

                 

                 <div class="account-edit">
                 <div class="input-container">
  <label>Email</label>
  <input type="email" value="<?php echo $user['email']; ?>" placeholder="Email" readonly>
</div>
                 <!--   <div class="input-container">
                        <label>Email</label>
                        <input type="email" placeholder="delacruzjuan123@gmail.com" />
                    </div> -->
                        <div class="input-container">
                            <label>Phone Number</label>
                            <input type="text" placeholder="09xxxxxxxxx" />
                        </div>
                     </div>

                    <!-- <div class="account-edit">
                        <div class="input-container">
                          <label>Password</label>
                          <input type="password" id="passwordInput" placeholder="Password" />
                        </div>
                        <div class="input-container">
                          <label>Re-type New Password</label>
                          <input type="password" id="confirmPasswordInput" placeholder="**********" />
                        </div>
                      </div> -->


                      <!--  <div class="account-edit">
                            <div class="input-container">
                                <label>Address</label>
                                <textarea placeholder="Address"></textarea>
                            </div>
                         </div> -->
        </form>
    </div>

    <script src="user-profile.js"></script>
</body>

</html>