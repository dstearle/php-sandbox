<?php 

    ## GET ##
        // Checks to see if $_GET has been set then echos if it has
        // Form method must be GET
        if(isset($_GET['name'])) { 
            
            // echo htmlentities($_GET['name']); // htmlentities helps prevent hacks
            // echo $_GET['email'];
            // print_r($_GET);
        
        }

    ## POST ##
        // Checks to see if $_POST has been set then echos if it has
        // Form method must be POST
        if(isset($_POST['name'])) { 
            
            $name = htmlentities($_POST['name']); // htmlentities helps prevent hacks
            // echo $name;
            // print_r($_POST);
        
        }

    ## REQUEST ##
        // Checks to see if $_REQUEST has been set then echos if it has
        // Form method can be either GET or POST
        if(isset($_REQUEST['name'])) { 
            
            $name2 = htmlentities($_REQUEST['name']); // htmlentities helps prevent hacks
            // echo $name2;
            // print_r($_REQUEST);
        
        }

    ## QUERY STRING ##

        // echo $_SERVER['QUERY_STRING'];

?>

<!DOCTYPE html>

<html>

    <!-- Page Title -->
    <head>

        <title>My Website</title>

    </head>

    <body>

        <!-- Form -->
        <form method="POST" action="get_post.php">

            <!-- Name Input -->
            <div>

                <label>Name</label>

                <br>

                <input type="text" name="name">

            </div>

            <!-- Email Input -->
            <div>

                <label>Email</label>

                <br>

                <input type="text" name="email">

            </div>

            <!-- Submit Button -->
            <input type="submit" value="submit">
        
        </form>
        
    </body>

</html>