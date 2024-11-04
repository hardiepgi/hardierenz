<?php
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "managementsystem";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Sign Up Form</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <h2 class="text-center">Sign Up</h2>
                <form action="antoniosignup.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" id="first-name" name="firstname" placeholder="Enter your first name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name" name="lastname" placeholder="Enter your last name" required>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile No</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
                <div class="text-center mt-3">
                    <p>Already have an account? <a href="login.php" class="login-link">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

