<?php 

    // For website root url
    require('config/config.php');
    // For connecting to the database
    require('config/db.php');

    // Check for delete submit
    if(isset($_POST['delete'])) {

        // Get form data
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        // Query
        $query = "DELETE FROM posts WHERE id = {$delete_id}";

        if(mysqli_query($conn, $query)) {

            header('Location: ' . ROOT_URL . '');

        }

        else {

            echo 'ERROR: ' . mysqli_error($conn);
            
        }

    }

    // Get ID
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create query
    $query = 'SELECT * FROM posts WHERE id = ' . $id;

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch data
    $post = mysqli_fetch_assoc($result);
    // var_dump($posts); // Shows the associative array from $posts

    // Free result
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);

?>

    <!-- Header Component -->
    <?php include('inc/header.php'); ?>

        <div class="container">

            <div class="card text-white bg-dark m-1">

                <!-- Post Title -->
                <div class="card-header">

                    <h3>
                        <?php echo $post['title']; ?>
                        
                    </h3>
                
                </div>

                <div class="card-body">

                    <!-- Post Date & Author -->
                    <small>
                    
                        Created on <?php echo $post['created_at']; ?> by 
                        <?php echo $post['author']; ?>
                        
                    </small>

                    <!-- Post Body -->
                    <p>

                        <?php echo $post['body']; ?>
                    
                    </p>

                    <hr class="bg-white">

                    <!-- Post Buttons -->
                    <div class="row col">

                        <!-- Back Button -->
                        <a class="btn btn-secondary col-4" href="<?php echo ROOT_URL; ?>"> Back </a>

                        <!-- Delete Button -->
                        <form class="col-4" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                            <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">

                            <input type="submit" name="delete" value="Delete" class="btn btn-danger col" >

                        </form>

                        <!-- Edit Button -->
                        <a 
                            class="btn btn-primary col-4" 
                            href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>"
                        > 
                            Edit Post 
                            
                        </a>
                    
                    </div>
                
                </div>
            
            </div>
        
        </div>
        
    <!-- Footer Component -->
    <?php include('inc/footer.php'); ?>