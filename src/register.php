<?php
$servername=getenv('DB_SERVERNAME');
$username=getenv('DB_USERNAME');
$password=getenv('DB_PASSWORD');
$dbname=getenv('DB_DBNAME');
// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check the connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST['username'];
$password = $_POST['password'];
// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
// Prepare an SQL statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);
// Execute the statement
if ($stmt->execute()) {
echo "Registration successful!";
} else {
echo "Error: " . $stmt->error;
}
// Close the statement and connection
$stmt->close();
$conn->close();
}
?>
