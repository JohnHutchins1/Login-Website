<!DOCTYPE html>
<html>
    <head></head>
    <?php
    //open connection to my database via pdo
    include 'host_connection.php';  

    //use session start where ever you use _SESSION
    session_start();
    $username = $_SESSION['username'];

    ?>

    <body>
        <h1>Welcome back <?php echo $username ?>!</h1>

    </body>
<html>