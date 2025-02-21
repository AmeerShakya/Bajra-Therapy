<?php
session_start();

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';

// Example dynamic data (you can replace with actual data from the database)
$totalClients = 1200; 
$sessionsThisWeek = 156;
$newClients = 34;
$averageSessionLength = '50 min';

$sessionData = [
    ['type' => 'Individual Therapy', 'completed' => 89, 'pending' => 10],
    ['type' => 'Group Therapy', 'completed' => 67, 'pending' => 5],
    ['type' => 'Family Counseling', 'completed' => 45, 'pending' => 3]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>
            <span class="logo_name">Bajra-Yog</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Content</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="/project1">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>
                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>
                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            
            <img src="https://i.pinimg.com/236x/47/ba/71/47ba71f457434319819ac4a7cbd9988e.jpg" alt="">
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Session Length</span>
                        <span class="number"><?php echo $averageSessionLength; ?></span>  
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Total Clients</span>
                        <span class="number">7</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">New Clients</span>
                        <span class="number">3</span>
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>
                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Prem Shahi</span>
                        <span class="data-list">Deepa Chand</span>
                        <span class="data-list">Manisha Chand</span>
                        <span class="data-list">Pratima Shahi</span>
                        <span class="data-list">Man Shahi</span>
                        <span class="data-list">Ganesh Chand</span>
                        <span class="data-list">Bikash Chand</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>
                        <span class="data-list">prakashhai@gmail.com</span>
                        <span class="data-list">manishachand@gmail.com</span>
                        <span class="data-list">pratimashhai@gmail.com</span>
                        <span class="data-list">manshahi@gmail.com</span>
                        <span class="data-list">ganeshchand@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
      const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");
let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}
let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}
modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});
sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})
    </script>
</body>
</html>
<!--DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin.css">
  <title>Therapy Dashboard</title>
</head>
<body>
  <!- Sidebar ->
  <div class="sidebar">
    <h2>Therapy Dashboard</h2>
    <a href="#">Overview</a>
    <a href="#">Clients</a>
    <a href="#">Sessions</a>
    <a href="#">Reports</a>
    <a href="#">Settings</a>
    <div class="logout"><a href="logout.php">Log Out</a></div>
  </div>

  <!- Main Content ->
  <div class="main">
    <div class="header">
      <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1> <!-- Display username ->
    </div>

    <!-- Cards ->
    <div class="cards">
      <div class="card">
        <h3>Total Clients</h3>
        <p><?php echo $totalClients; ?></p>
      </div>
      <div class="card">
        <h3>Sessions This Week</h3>
        <p><?php echo $sessionsThisWeek; ?></p>
      </div>
      <div class="card">
        <h3>New Clients</h3>
        <p><?php echo $newClients; ?></p>
      </div>
      <div class="card">
        <h3>Average Session Length</h3>
        <p><?php echo $averageSessionLength; ?></p>
      </div>
    </div>

    <!-- Charts Section ->
    <div class="charts">
      <div class="chart">
        <h3>Session Types</h3>
        <canvas id="barChart"></canvas>
      </div>
      <div class="chart">
        <h3>Client Satisfaction</h3>
        <canvas id="pieChart"></canvas>
      </div>
    </div>

    <!-- Table ->
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
          <?php foreach ($sessionData as $session): ?>
            <tr>
              <td><?php echo htmlspecialchars($session['type']); ?></td>
              <td><?php echo $session['completed']; ?></td>
              <td><?php echo $session['pending']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Bar Chart
    new Chart(document.getElementById('barChart'), {
      type: 'bar',
      data: {
        labels: ['Individual', 'Group', 'Family'],
        datasets: [
          { label: 'Sessions', data: [89, 67, 45], backgroundColor: ['#4caf50', '#2196f3', '#ff9800'] }
        ]
      }
    });

    // Pie Chart
    new Chart(document.getElementById('pieChart'), {
      type: 'pie',
      data: {
        labels: ['Satisfied', 'Neutral', 'Dissatisfied'],
        datasets: [
          { data: [70, 20, 10], backgroundColor: ['#4caf50', '#ffeb3b', '#f44336'] }
        ]
      }
    });
  </script>
</body>
</html>--!
