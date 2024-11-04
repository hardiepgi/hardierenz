<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "managementsystem"; 

$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $birthday = $conn->real_escape_string($_POST['birthday']);
    $address = $conn->real_escape_string($_POST['address']);
    $mobile = $conn->real_escape_string($_POST['mobile']);

    if ($password !== $confirm_password) {
        die("Passwords do not match!");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Users (username, password, firstname, lastname, birthday, address, mobile) 
            VALUES ('$username', '$hashed_password', '$firstname', '$lastname', '$birthday', '$address', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        header("Location: antoniologin.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
