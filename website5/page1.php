<?php 

    if(isset($_POST['submit'])) {

        $userName = htmlentities($_POST['username']);

        setcookie('username', $userName, time()+3600); // Sets cookie to 1 hour

        header('Location: page2.php');

    }

?>

<!DOCTYPE html>

<html>

    <head>

        <title>PHP Cookies</title>

    </head>

    <body>
        
        <!-- Form -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <!-- Username Input -->
            <input type="text" name="username" placeholder="Enter Username">

            <br>

            <!-- Submit -->
            <input type="submit" name="submit" value="Submit">

        </form>

    </body>

</html>