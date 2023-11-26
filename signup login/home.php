<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
   
    <title>PHP Login and Signup</title>
</head>
<body>
  
    <title>Home Page</title>
</head>
<body>

    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>This is the home page. Only logged-in users can access this content.</p>
    <a href="logout.php">Logout</a>
    
</body>
</html>
