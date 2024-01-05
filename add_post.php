<?php
// Define database connection details
$servername = "localhost";
$username = "root";
$password = ''; // Assuming no password for localhost
$dbname = "gold gym ghana database";

try {
    // PDO Connection
    $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $title = $_POST['title'];
        $category = $_POST['category'];
        $author = $_POST['author'];

        // File upload handling
        $targetDirectory = "uploads/"; // Specify the directory where you want to store uploaded images
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
        $image = $targetFile;

        $body = $_POST['body'];

        // Insert data into the database using PDO
        $pdoStatement = $con->prepare("INSERT INTO blog_table (title, category, author, image_url, body) VALUES (?, ?, ?, ?, ?)");
        $pdoStatement->execute([$title, $category, $author, $image, $body]);

        // Redirect to index.php after successful insertion
        header("Location: log.php");
        exit(); // Ensure that no further code is executed after the redirect
    }

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Close PDO connection
    $con = null;
}
?>
