<?php 

    if(isset($_POST['submit'])) {

        session_start(); // Starts the session

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

        header('Location: page2.php'); // Redirects to a new page

    }

?>

<!DOCTYPE html>

<html>

    <head>

        <title>PHP Sessions</title>

    </head>

    <body>
        
        <!-- Form -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <!-- Name Input -->
            <input type="text" name="name" placeholder="Enter Name">

            <br>

            <!-- Email Input -->
            <input type="text" name="email" placeholder="Enter Email">

            <br>

            <!-- Submit -->
            <input type="submit" name="submit" value="Submit">

        </form>

    </body>

</html>