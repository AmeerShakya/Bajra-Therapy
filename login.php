<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bajrayog";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $role = $_POST['role'];
    $user = trim($_POST['email']);  // Trim to remove unnecessary spaces
    $pass = trim($_POST['password']);

    if ($role == 'user') {
        $table = 'user';
        $redirect_page = "user/user.php";
    } elseif ($role == 'admin') {
        $table = 'admin';
        $redirect_page = "admin/admin.php";
    } else {
        die("Please select a valid user role.");
    }

    if ($role === "User Type") {
        echo "Please select a valid role.";
    } else {
        // Prepare and execute query to check login credentials
        $stmt = $conn->prepare("SELECT * FROM $table WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $user, $pass);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            session_start();
            $_SESSION['role'] = $role;
            $_SESSION['name'] = $user;
            header("Location: $redirect_page");
            exit();
        } else {
            echo "Invalid credentials. Please try again.";
        }
        $stmt->close();
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/login.css">
	<title>Login Page</title>
</head>

<body>
  <div class="container">
	  <div class="inspiration">
		  <p>“You are not alone. You are seen. I am with you. You are not alone.” — Shonda Rhimes</p>
	  </div>

    <form action="login.php" method="post">
        <div class="textbox">
            <i class="ri-user-line"></i>
            <input type="text" placeholder="Email" name="email" required />
        </div>

        <div class="textbox">
            <i class="ri-lock-line"></i>
            <input type="password" placeholder="Password" name="password" required />
        </div>

        <label for="role">Login as:</label>
        <select name="role" id="role" required>
            <option value="User Type" disabled selected>User Type</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>

        <input class="button" type="submit" name="login" value="Sign In" />
        <div class="signup-link">
            Don't have an account? <a href="signup.php">Sign up</a>
        </div>
    </form>
  </div>
</body>
</html>
