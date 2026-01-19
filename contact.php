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
        
        $_SESSION['popup_title'] = "MESSAGE RECEIVED";
        $_SESSION['popup_message'] = "Thank you, $name. We have received your query securely.";
        
        
        file_put_contents("email_history.txt", "New Message: $email | $msg \n", FILE_APPEND);
        
        
        header("Location: contact.php");
        exit(); 
    } else {
        echo "<script>alert('Database Error. Please try again.');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Galaari</title>
    <link rel="stylesheet" href="assets/css/pages.css">
</head>
<body>

    <?php if (isset($_SESSION['popup_message'])): ?>
    <div class="message-overlay" id="customPopup">
        <div class="message-box">
            <h3><?php echo $_SESSION['popup_title']; ?></h3>
            <p><?php echo $_SESSION['popup_message']; ?></p>
            <button class="btn-close-popup" onclick="closePopup()">Acknowledge</button>
        </div>
    </div>
    <script>
        function closePopup() {
            document.getElementById('customPopup').style.display = 'none';
        }
    </script>
    <?php 
        
        unset($_SESSION['popup_message']);
        unset($_SESSION['popup_title']);
    ?>
    <?php endif; ?>
    <div class="embers-container"></div>

    <header class="header">
        <a href="index.php" class="logo">GALAA<span>RI</span></a>
        <nav class="nav-links">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php" class="active">Contact</a>
            <a href="games.php">Games</a>
            <a href="admin/login.php" style="color: #ff3b3b;">Admin</a>
        </nav>
        <div class="auth-buttons">

        </div>
    </header>

    <div class="page-container">
        <div class="content-box contact-border">
            <h2>Contact Support</h2>
            <p style="text-align:center; color:#bbb; margin-bottom:20px;">Have a question? Fill out the form below.</p>
            
            <form action="contact.php" method="POST">
                <div class="form-group">
                    <label>Username / Name</label>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label>Your Message</label>
                    <textarea name="message" rows="5" placeholder="How can we help you?" required></textarea>
                </div>
                <button type="submit" name="send_msg" class="btn-submit">Send Message</button>
            </form>
        </div>
    </div>

</body>
</html>