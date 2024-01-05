<?php
// Include your database configuration file
include("config.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $signupFirstName = $_POST['signupFirstName'];
    $signupLastName = $_POST['signupLastName'];
    $signupEmail = $_POST['signupEmail'];
    $signupPassword = $_POST['signupPassword'];

    // Check if the email already exists in the database
    $checkEmailQuery = "SELECT * FROM customers WHERE email = '$signupEmail'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // Email already exists, display an error message
        echo "Email is already taken. Please choose a different email.";
    } else {
        // Hash the password for better security
        $hashedPassword = password_hash($signupPassword, PASSWORD_DEFAULT);

        // SQL to insert data into the "customers" table
        $sql = "INSERT INTO customers (firstname, lastname, email, password) VALUES ('$signupFirstName', '$signupLastName', '$signupEmail', '$hashedPassword')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            // Redirect to index.html with a success parameter
            header("Location: index.html?account_created=success");
            exit(); // Ensure that no further code is executed after the redirect
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
