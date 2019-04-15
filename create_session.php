<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab No. 1 - Sessions: Create</title>
</head>
<body>

<?php
    if(!isset($_SESSION['views'])){
        $_SESSION['views'] = 0;
    }
    if(!isset($_SESSION['browser'])){
        $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
    } 
    if(!isset($_SESSION['role'])){
        $_SESSION['role'] = 'admin';
    } 

    $_SESSION['views'] += 1;

    echo '<h3>Variable values</h3>';
    echo '<p>The number of views is ' . $_SESSION['views'] . '</p>';
    echo '<p>The browser version is '. $_SESSION['browser'] . '</p>';
    echo '<p>The user role is ' . $_SESSION['role'] . '</p>';
    echo '<br>';
?>

<h3>Links</h3>
<ul>
    <li><a href="read_session.php" title="read_session.php">read_session.php</a></li>
    <li><a href="destroy_session.php" title="destroy_session.php">destroy_session.php</a></li>
    <li><a href="destroy_all_session.php" title="destroy_all_session.php">destroy_all_session.php</a></li>
</ul>
    
</body>
</html>