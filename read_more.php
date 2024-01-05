<?php
$con = new PDO("mysql:host=localhost;dbname=gold gym ghana database", 'root', '');
// Get blog post ID from the URL
$id = $_GET['id'];

// Retrieve the specific blog post
$sql = "SELECT * FROM blog_table WHERE id=$id";
$result = $con->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title><?php echo $row['title']; ?></title>
       <!-- link to css file -->
       <link rel="stylesheet" href="css_file/style.css">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
        integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>



    <!-- header -->
    <header>
        <div class="companyLogo">
            <a href="">Gold <span>Gym</span> Ghana</a>
        </div>
        <nav>
            <!-- company logo -->


            <!-- ul links to different pages -->
            <ul class="nav-links">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="facilities.html">Facilities</a></li>
                <li><a href="schedule.html">Schedule</a></li>
                <li><a href="package.html">Packages</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="promotions.html">Pormotions</a></li>
                <li><a href="log.php">Blog</a></li>
                <li><a href="">Account <i class="fa-sharp fa-solid fa-caret-down"></i></a>
                    <div class="sublinks">
                        <a href="signupLogin.html">Log in</a>
                        <a href="admin_form.html">Log as admin</a>
                    </div>

                </li>

            </ul>

            <div class="menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
    </header>





    <div class="blog-post">
        <h2><?php echo $row['title']; ?></h2>
        <p>Category: <?php echo $row['category']; ?></p>
        <p>Author: <?php echo $row['author']; ?></p>
        <img src="<?php echo $row['image_url']; ?>" alt="Blog Image">
        <p><?php echo $row['body']; ?></p>
        <a href="log.php">Back to Blog</a>
    </div>



      <!-- footer -->
    <footer>
        <div class="footer-container">
            <div class="companyLogo at-the-footer">
                <a href="">Gold <span>Gym</span> Ghana</a>

                <p> Gold Gym Ghana, situated in Airport City, is a leading fitness <br> center providing tailored wellness
                    and fitness programs. With <br> state-of-the-art equipment and expert trainers, they foster <br>  a vibrant
                    community focused on improving health and vitality.</p>
            </div>
            <div class="reach-us">
                <h4>Reach Us On</h4>
                <h5>Tel: +233 541254645</h5>
                <h5>Email: goldgymghana@gmail.com</h5>
                <h5>Location:One Airport Square, Accra </h5>
                <a href="">Send us a message</a>
            </div>

            <div class="quick-links">
                <h4>Quick Links</h4>
                <li><a href="">Gold Gym Ghana</a></li>
                <li><a href="">About Us</a></li>
              
                <li><a href="">Our Team</a></li>
                <li><a href="">Privacy / Policy</a></li>

            </div>
            <div class="social-media">
                <h4>Follow us on</h4>
                <div class="media">
                   <a href="">  <i class="fab fa-facebook"></i></a>
                 <a href="">   <i class="fab fa-instagram"></i> </a>
                    <a href=""> <i class="fab fa-youtube"></i></a>
                   <a href="">  <i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="javascript_file/main.js"></script>

</body>
</html>
