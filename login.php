<?php
session_start();
include("config.php");

// Initialize the error message
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminName = $_POST['adminName'];
    $adminPassword = $_POST['adminPassword'];

    $sql = "SELECT * FROM admin_table WHERE adminName = '$adminName' AND adminPassword = '$adminPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Correct login, redirect to admin.php
        $_SESSION['adminName'] = $adminName;
        header("Location: admin.html");
    } else {
        // Incorrect login, set the error message
        $error_message = "Invalid login credentials. Please try again.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... your other head elements ... -->
</head>
<body>
    <!-- ... your other HTML elements ... -->
    <h1 class="name"><?php echo $error_message; ?></h1>
    <!-- ... your other HTML elements ... -->
</body>
</html>
