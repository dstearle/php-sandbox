<?php 

    // For website root url
    require('config/config.php');
    // For connecting to the database
    require('config/db.php');

    // Create query
    $query = 'SELECT * FROM posts ORDER BY created_at DESC';

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($posts); // Shows the associative array from $posts

    // Free result
    mysqli_free_result($result);

    // Close connection
    mysqli_close($conn);

?>

    <!-- Header Component -->
    <?php include('inc/header.php'); ?>

        <div class="container">

            <!-- Title -->
            <h1 class="m-1 text-primary">Posts</h1>

            <!-- Foreach Loop To Loop Through Posts -->
            <?php foreach($posts as $post) : ?>

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
                        <a 
                            class="btn btn-primary" 
                            href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>"
                        > Read More </a>
                    
                    </div>
                
                </div>

            <?php endforeach; ?>
        
        </div>
        
    <!-- Footer Component -->
    <?php include('inc/footer.php'); ?>