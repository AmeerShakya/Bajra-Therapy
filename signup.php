<?php
// Start the session (if needed)
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bajrayog";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize error variable
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $userPassword = $_POST['password'];  // Corrected variable name

    // Validate data
    if (empty($name) || empty($email) || empty($userPassword)) {  // Use $userPassword here
        $error = "All fields are required.";
    } elseif (!preg_match("/^[a-zA-Z0-9]+$/", $userPassword)) {  // Check if password is alphanumeric (only letters and numbers)
        $error = "Password must be alphanumeric (letters and numbers only).";
    } else {
        // Check if email already exists in the database
        $emailQuery = "SELECT * FROM user WHERE email = ?";  // Ensure the table is 'users'
        $stmt = $conn->prepare($emailQuery);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error = "Email is already registered. Please use a different email.";
        } else {
            // Insert user data into the database (password as alphanumeric plain text)
            $insertQuery = "INSERT INTO user (name, email, password) VALUES (?, ?, ?)";  // Corrected table name to 'users'
            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("sss", $name, $email, $userPassword);  // Use $userPassword here

            if ($stmt->execute()) {
                // Redirect to login page or success page
                header("Location: login.php");  // Redirect to login page after successful registration
                exit();
            } else {
                $error = "There was an error while saving your data. Please try again.";
            }
        }
        $stmt->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $userPassword = $_POST['password'];  // Corrected variable name

  // Validate data
  if (empty($name) || empty($email) || empty($userPassword)) {  // Use $userPassword here
      $error = "All fields are required.";
  } elseif (!preg_match("/^[a-zA-Z0-9]+$/", $userPassword)) {  // Check if password is alphanumeric (only letters and numbers)
      $error = "Password must be alphanumeric (letters and numbers only).";
  } else {
      // Check if email already exists in the database
      $emailQuery = "SELECT * FROM admin WHERE email = ?";  // Ensure the table is 'admin'
      $stmt = $conn->prepare($emailQuery);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
          $error = "Email is already registered. Please use a different email.";
      } else {
          // Insert user data into the database (password as alphanumeric plain text)
          $insertQuery = "INSERT INTO admin (name, email, password) VALUES (?, ?, ?)";  // Corrected table name to 'users'
          $stmt = $conn->prepare($insertQuery);
          $stmt->bind_param("sss", $name, $email, $userPassword);  // Use $userPassword here

          if ($stmt->execute()) {
              // Redirect to login page or success page
              header("Location: login.php");  // Redirect to login page after successful registration
              exit();
          } else {
              $error = "There was an error while saving your data. Please try again.";
          }
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/register.css">
  <title>Register</title>
</head>
<body>
  <div class="form-container">
    <h2>Register</h2>

    <?php if (isset($error) && $error): ?>
      <div class="error-message"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST" action="register.php">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your Name" required/>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your Email" required />
      </div>
      <div class="form-group">
        <label for="password">Create password</label>
        <input type="password" id="password" name="password" placeholder="Create password" required/>
      </div>
      <button type="submit">Continue</button>
      <div class="signin-link">
            have an account? <a href="login.php">Sign in</a>
      </div>
    </form>
  </div>
</body>
</html>
