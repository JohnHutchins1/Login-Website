<!DOCTYPE html>
<html>
    <head></head>
    <?php
    session_start();
    include 'host_connection.php';

    //saving username in our session
    $_SESSION['username'] = $_POST['username'];

    //removes whitespaces from username and password (sanitizing)
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(isset(($_POST['username'])) && isset($_POST['password']))
    {
        //query db to see if the user
        $query = "SELECT username, pass FROM accounts WHERE username = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array($username));
        $posts = $stmt->fetchAll();
        
        //should only return 1 as username's are unique, but foreach is de way
        foreach($posts as $post){
            $dbPassword =  $post['pass'];
        }

        echo $stmt->rowCount();

        //if we couldnt find the username then destroy our session and redirect to the login page
        if($stmt->rowCount() == 0){
            header("Location: index.php"); /* Redirect browser */
            session_destroy();
            exit();
        }else if(password_verify($password, $dbPassword)) {
            echo "Youre in!" . '<br>';
            header("Location: MainPage.php"); /* Redirect browser */
            exit();
        }

    }else{
        //in case something goes wrong, redirect and destroy
        header("Location: index.php"); /* Redirect browser */
        session_destroy();
        exit();
    }

   

    ?>

    <body>

    </body>
<html>