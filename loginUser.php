<?php
// Include your database configuration file
include("config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    // SQL to check if the email exists in the "customers" table
    $checkEmailQuery = "SELECT * FROM customers WHERE email = '$loginEmail'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPasswordFromDB = $row['password'];

        // Verify the password
        if (password_verify($loginPassword, $hashedPasswordFromDB)) {
            // Password is correct, set up a session and redirect
            session_start();
            $_SESSION['user_email'] = $loginEmail;
            header("Location: index.html");
            exit();
        } else {
            // Incorrect password
            echo "Incorrect email or password. Please try again.";
        }
    } else {
        // User with the provided email not found
        echo "User not found. Please register or check your email.";
    }
}

// Close the database connection
$conn->close();
?>
