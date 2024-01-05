<?php
// Replace these variables with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gold gym ghana database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["appointmentForm-FirstName"];
    $email = $_POST["appointmentForm-email"];
    $phoneNumber = $_POST["appointmentForm-phoneNumber"];
    $selectedOption = $_POST["appointmentForm-option"];

    // You should perform validation and sanitization on the data before using it in a query

    // SQL query to insert data into the database
    $sql = "INSERT INTO apointment_table (name, email, phoneNumber, program) VALUES ('$name', '$email', '$phoneNumber', '$selectedOption')";

    if ($conn->query($sql) === TRUE) {
        echo "Booked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
