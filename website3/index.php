<?php 

    // Message Vars
    $msg = '';
    $msgClass = '';

    // Check for submit
    if(filter_has_var(INPUT_POST, 'submit')) {

        // echo 'Submitted';

        // Get the form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check required fields
        if(!empty($email) && !empty($name) && !empty($message)) {

            //Passed

            // $msg = '';
            // $msgClass = '';

            // echo 'Passed';

            // Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

                // Failed
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';

            }

            else {

                // Passed
                // Recipient Email
                $toEmail = ''; // Insert an email address here. Note: will not send in XAMPP
                $subject = 'Contact Request From ' . $name;
                $body = 
                
                    '<h2>Contact Request Form</h2>
                        <h4>Name</h4><p>' . $name . '</p>
                        <h4>Email</h4><p>' . $email . '</p>
                        <h4>Message</h4><p>' . $message . '</p>';

                // Email Headers
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Context-Type:text/html;charset=UTF-8" . "\r\n";

                // Additional Headers
                $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

                if(mail($toEmail, $subject, $body, $headers)) {

                    // Email Sent
                    $msg = 'Your email has been sent';
                    $msgClass = 'alert-success';

                }

                else {

                    // Email Sent
                    $msg = 'Your email has was not sent';
                    $msgClass = 'alert-danger';

                }

            }

        }

        else {

            // Failed
            $msg = 'Please fill in all of the fields';
            $msgClass = 'alert-danger';

        }

    }

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Contact Title</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    </head>

    <body>
    
        <!-- Navbar -->
        <nav class="navbar navbar-default bg-dark">

            <div class="container">

                <div class="navbar-header">

                    <a href="index.php" class="navbar-brand text-white">My Website</a>
                
                </div>
            
            </div>
        
        </nav>

        <br>

        <!-- Form -->
        <div class="container">

            <!-- Checks to see if message is empty -->
            <?php if($msg != ''): ?>

                <!-- PHP stored class -->
                <div class="alert <?php echo $msgClass; ?>">

                    <!-- PHP stored message -->
                    <?php echo $msg; ?>
                
                </div>

            <?php endif; ?>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <!-- Name -->
                <div class="form-group">

                    <label>Name</label>

                    <input 
                        type="text" 
                        name="name" 
                        class="form-control" 
                        value="<?php echo isset($_POST['name']) ? $name : '' ?>"
                    >
                
                </div>

                <!-- Email -->
                <div class="form-group">

                    <label>Email</label>

                    <input 
                        type="text" 
                        name="email" 
                        class="form-control" 
                        value="<?php echo isset($_POST['email']) ? $email : '' ?>"
                    >
                
                </div>

                <!-- Message -->
                <div class="form-group">

                    <label>Message</label>

                    <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
                
                </div>

                <br>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            
            </form>
        
        </div>
        
    </body>

</html>