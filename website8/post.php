<?php 

    // For website root url
    require('config/config.php');
    // For connecting to the database
    require('config/db.php');

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

                    <!-- Read More -->
                    <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>"> Back </a>
                
                </div>
            
            </div>
        
        </div>
        
    <!-- Footer Component -->
    <?php include('inc/footer.php'); ?>