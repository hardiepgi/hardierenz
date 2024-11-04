<?php
session_start();


$timeout_duration = 1800; 
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $timeout_duration)) {
    session_unset();     
    session_destroy();   
}
$_SESSION['LAST_ACTIVITY'] = time(); 

$_SESSION['first_name'] = 'Hardie';
$_SESSION['last_name'] = 'Pogi';
$_SESSION['username'] = $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 20;
        }
        .sidebar {
            min-width: 250px;
            background-color: #343a40;
            color:black;
            padding: 15px;
        }
        .sidebar a {
            color: green;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        .sidebar a:hover {
            background-color: Green;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: Center;
        }
        .header .username {
            font-weight: light;
        }
        .logout-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 5px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
    <div class="sidebar">
        <h2></h2>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="Home.php"><i class="fas fa-"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Class.php"><i class="fas fa-"></i> Class</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Schedule.php"><i class="fas fa-calendar-"></i> Schedule</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Teacher.php"><i class="fas fa-user-"></i> Teacher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="User.php"><i class="fas fa-"></i> User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Maintenance.php"><i class="fas fa-"></i> Maintenance</a>
            </li>
        </ul>
    </div>
    
    <div class="content">
        <div class="header">
        <div class="system-title">Schedule Management System</div>
            <span class="username">
                <?php 
                if (isset($_SESSION['username'])) {
                    echo "Welcome, " . htmlspecialchars($_SESSION['username']) . "!";
                } else {
                    echo "Welcome!";
                }
                ?>
            </span>
            <form method="post" action="logout.php" style="margin: 0;">
                <button type="submit" class="logout-btn">Log Out</button>
            </form>
        </div>

        <h1>Dashboard Overview</h1>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Class Overview</h5>
                        <p class="card-text">Quick insights into your classes.</p>
                        <a href="classes.php" class="btn btn-primary">View Classes</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Teaching Load</h5>
                        <p class="card-text">Check your current teaching load.</p>
                        <a href="teaching_load.php" class="btn btn-primary">View Load</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pending Tasks</h5>
                        <p class="card-text">Manage your pending tasks efficiently.</p>
                        <a href="pending_tasks.php" class="btn btn-primary">View Load</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
