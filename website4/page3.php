<?php 

    session_start(); // Starts the session

    print_r($_SESSION);

    // $name = $_SESSION['name'];
    // $email = $_SESSION['email'];

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not subscribed';
    

?>

<!DOCTYPE html>

<html>

    <head>

        <title>PHP Sessions</title>

    </head>

    <body>
        
        <!-- Message -->
        <h1>Hello <?php echo $name; ?>.</h>

    </body>

</html>