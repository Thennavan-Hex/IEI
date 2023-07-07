<?php
$username = $_POST['username'];
$password = $_POST['password'];

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sql";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<h2>Welcome, $username!</h2>";
    echo "<p>You are now logged in as a regular user.</p>";
} else {
    echo "<h2>Login Failed</h2>";
    echo "<p>Invalid username or password.</p>";
}

// Close the connection
$conn->close();
?>
