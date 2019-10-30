<?php 

    session_start(); // Starts the session

    // $_SESSION['name'] = 'John Doe'; // Changes the name to John Doe

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];

?>

<!DOCTYPE html>

<html>

    <head>

        <title>PHP Sessions</title>

    </head>

    <body>
        
        <!-- Message -->
        <h5>Thank you <?php echo $name; ?>. You have subscribed with the email  <?php echo $email; ?>.</h5>

        <!-- Link To Page 3 -->
        <a href="page3.php">Go To Page 3</a>

    </body>

</html>