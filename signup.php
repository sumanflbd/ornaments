<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ornaluxe_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into database
    $sql = "INSERT INTO users (name, mobile, address, email, password) VALUES ('$name', '$mobile', '$address', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>