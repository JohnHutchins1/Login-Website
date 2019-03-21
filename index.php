<!DOCTYPE html>
<html>
    <head></head>
    <?php
    //open connection to my database via pdo
    include 'host_connection.php';  

    ?>

    <body>
        <h1>Welcome to my website, please log in</h1>

        <form action="loginValidation.php" method = "post">

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit">Login</button>

                <!-- used to have a remember me checkbox
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                -->
            </div>

            <!-- use to have cancel and forgot password link
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
            -->
        </form>

    </body>
<html>