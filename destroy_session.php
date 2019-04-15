<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab No. 1 - Sessions: Destroy</title>
</head>
<body>

<?php

if(isset($_SESSION['views'])){
    unset($_SESSION['views']);
}
if(isset($_SESSION['browser'])){
    unset($_SESSION['browser']);
} 
if(isset($_SESSION['role'])){
    unset($_SESSION['role']);
} 

?>


<h3>Links</h3>
<ul>
    <li><a href="create_session.php" title="create_session.php">create_session.php</a></li>
    <li><a href="read_session.php" title="read_session.php">read_session.php</a></li>
    <li><a href="destroy_all_session.php" title="destroy_all_session.php">destroy_all_session.php</a></li>
</ul>
    
</body>
</html>