<?php
session_start();

include 'db_conn.php'; 

if (isset($_POST['send_msg'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $msg);

    if ($stmt->execute()) {
        $_SESSION['popup_title'] = "SYSTEM SUCCESS";
        $_SESSION['popup_message'] = "Your message has been transmitted to our servers securely.";
        
        header("Location: index.php"); 
        exit();
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Galaari</title>
    <link rel="stylesheet" href="assets/css/pages.css">
</head>
<body>
    <div class="embers-container"></div>
    <header class="header">
        <a href="index.php" class="logo">GALAA<span>RI</span></a>
        <nav class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php" class="active">About</a>
            <a href="contact.php">Contact</a>
            <a href="games.php">Games</a>
            <a href="admin/login.php" style="color: #ff3b3b;">Admin</a>
        </nav>
        <div class="auth-buttons">

        </div>
    </header>

    <div class="page-container">
        <div class="content-box about-border">
            <h1>Our Mission</h1>
            <p>Welcome to <strong>GALAARI</strong>, the ultimate hub for game promotion.</p>
            <p>Founded in 2026, our platform provides a sleek, high-performance environment where your games don't just sit on a shelf—they ignite interest.</p>
            <a href="contact.php" class="btn-action">Get in Touch</a>
        </div>
    </div>
</body>
</html>