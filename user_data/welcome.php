<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<!-- HTML starts -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <?php include 'header.php';?>
    <div class="page-header">
        <h1>Hello, <b><?php echo $_SESSION['username']; ?></b>. Welcome.</h1>
    </div>
    <div class="content">
    <div class="search">

    </div>
    <?php include 'footer.php';?>
</body>
</html>