<?php
// Connect to the database
$servername = "localhost";  // Change to your database server
$username = "root";         // Change to your database username
$password = "";             // Change to your database password
$dbname = "sailceylon_db";  // Replace with your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Sanitize the inputs to avoid XSS and SQL Injection
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $message = htmlspecialchars($message);

    // Prepare the SQL query to insert feedback into the database
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);  // Bind parameters

    // Execute the query
    if ($stmt->execute()) {
        echo "Thank you for your feedback!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
}
?>
