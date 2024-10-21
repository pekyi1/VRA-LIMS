<?php include ('config/connect.php') ?>

<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VRA Library</title>
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/book-details.css">
    <link rel="stylesheet" href="css/contact-us.css">
    <link rel="stylesheet" href="css/librarian-login.css">
    <link rel="stylesheet" href="css/reservation-page.css">
    <link rel="stylesheet" href="css/user-dashboard.css">
    <link rel="stylesheet" href="css/user-loan-page.css">

</head>
<body>
    <header>
        <nav>
        <div class="logo">
            <a href="user-dashboard.php" style="text-decoration: none; color: inherit;">
                <img src="image-componets/xdtf83ivu5_vra_logo-removebg-preview 1.png" alt="LIMS Logo">
                <span>LiMS</span>
            </a>
        </div>

            <ul class="nav-links">
                <li><a href="user-dashboard.php">Home</a></li>
                <li><a href="user-loan-page.php">Users Books</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact_us.php">Contact</a></li>                
            </ul>
        </nav>
        <div class="nav-buttons">
            <a href="librarian-login.php" class="librarian-login" style="text-decoration: none;">Librarian Login</a>
            <a href="user-login.php" class="user-login" style="text-decoration: none; ">User Login</a> <div class="hamburger" >
                &#9776;
            </div>
        </div>
    </header>