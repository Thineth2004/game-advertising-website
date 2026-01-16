<?php
session_start();
include 'db_conn.php';

$error_msg = "";

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $pass = $_POST['password'];

    if (!empty($email) && !empty($pass)) {
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if (password_verify($pass, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                header("Location: index.php");
                exit();
            } else {
                $error_msg = "Incorrect Password!";
            }
        } else {
            $error_msg = "No account found with that email.";
        }
        $stmt->close();
    } else {
        $error_msg = "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Game World</title>
    <link rel="stylesheet" href="assets/css/style2.css">
	<script src="assets/js/bg-slider.js"></script>
</head>
<body>

<div class="form-container">
    <h2>Login</h2>
	
	<div id="background-slider" class="background-slider">
    </div>

    <?php if ($error_msg != ""): ?>
        <p class="error-msg"><?php echo $error_msg; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
    
    <div class="link">
        Don't have an account? <a href="register.php">Register here</a>
    </div>
</div>

<script src="assets/js/script2.js"></script>

</body>
</html>