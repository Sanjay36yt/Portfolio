<?php
session_start();  // Start the session

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: ./login.php");  // Redirect to login page if not logged in
    exit();
}

echo "Welcome, " . $_SESSION['email'];  // Display the logged-in user's name
?>

<a href="logout.php">Logout</a>
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <h1>sucess login  </h1>
</body>
</html>