<?php
session_start();

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>User | Dashboard</title>
    <link rel="stylesheet" href="user.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
  </head>
  <body>
    <nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">Bajra|yog</span>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">Bajrayog</span>
        </div>
        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Profile</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">Notifications</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">Messages</span>
              </a>
            </li>
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-pie-chart-alt-2 icon"></i>
                <span class="link">Analytics</span>
              </a>
            </li>
          </ul>
          <div class="bottom-cotent">
            <li class="list">
              <a href="#" class="nav-link">
                <i class="bx bx-cog icon"></i>
                <span class="link">Settings</span>
              </a>
            </li>
            <li class="list">
              <a href="/project1" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
          </div>
        </div>
      </div>
    </nav>

    <div class="main">
    <div class="header">
      <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1> <!-- Display username -->
    </div>

    <!-- Cards -->
    <div class="cards">
      <div class="card">
        <h3>Total Vistis</h3>
        <p>5</p>
      </div>
      <div class="card">
        <h3>Sessions This Week</h3>
        <p>7</p>
      </div>
      <div class="card">
        <h3>Average Session Length</h3>
        <p>50 min</p>
      </div>
    </div>

    <!-- Table -->
    <div class="table-container">
      <h3>Session Details</h3>
      <table class="table">
        <thead>
          <tr>
            <th>Session Type</th>
            <th>Completed</th>
            <th>Pending</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Individual Therapy</td>
            <td>8</td>
            <td>4</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

    <section class="overlay"></section>
    <script>
      const navBar = document.querySelector("nav"),
       menuBtns = document.querySelectorAll(".menu-icon"),
       overlay = document.querySelector(".overlay");
     menuBtns.forEach((menuBtn) => {
       menuBtn.addEventListener("click", () => {
         navBar.classList.toggle("open");
       });
     });
     overlay.addEventListener("click", () => {
       navBar.classList.remove("open");
     });
    </script>
  </body>
</html>