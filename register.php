<?php
session_start();
include 'db_conn.php';

$message = "";
$msg_type = "";

if (isset($_POST['register'])) {
    $user = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass = $_POST['password'];

    if (!empty($user) && !empty($email) && !empty($pass)) {
        
        $check = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $message = "Email is already registered!";
            $msg_type = "error-msg";
        } else {
			
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $user, $email, $hashed_password);

            if ($stmt->execute()) {
                $message = "Registration Successful! Redirecting to login...";
                $msg_type = "success-msg";
                
                header("refresh:2;url=login.php");
            } else {
                $message = "Database error: Could not register.";
                $msg_type = "error-msg";
            }
            $stmt->close();
        }
        $check->close();
    } else {
        $message = "Please fill in all fields.";
        $msg_type = "error-msg";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Game World</title>
    <link rel="stylesheet" href="assets/css/style2.css">
	<script src="assets/js/bg-slider.js"></script>
</head>
<body>

<div class="form-container">
    <h2>Create Account</h2>
	
	<div id="background-slider" class="background-slider">
    </div>
    
    <?php if ($message != ""): ?>
        <p class="<?php echo $msg_type; ?>"><?php echo $message; ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register">Sign Up</button>
    </form>
    
    <div class="link">
        Already have an account? <a href="login.php">Login here</a>
    </div>
</div>

<script src="assets/js/script.js"></script>

</body>
</html>