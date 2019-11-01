<?php 

    // For website root url
    require('config/config.php');
    // For connecting to the database
    require('config/db.php');

    // Check for submit
    if(isset($_POST['submit'])) {

        // Get form data
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        // Query
        $query = "UPDATE posts SET 
        
                title = '$title', 
                author = '$author', 
                body = '$body' 
            
            WHERE id = {$update_id}";

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

            <!-- Title -->
            <h1 class="m-1 text-primary">Edit Post</h1>

            <!-- Form -->
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

                <!-- Post Title -->
                <div class="form-group">

                    <label>Title</label>

                    <input 
                        type="text" 
                        name="title" 
                        class="form-control"
                        value="<?php echo $post['title']; ?>"
                    >
                
                </div>

                <!-- Post Author -->
                <div class="form-group">

                    <label>Author</label>

                    <input 
                        type="text" 
                        name="author" 
                        class="form-control"
                        value="<?php echo $post['author']; ?>"
                    >
                
                </div>

                <!-- Post Body -->
                <div class="form-group">

                    <label>Body</label>

                    <textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
                
                </div>

                <input 
                    type="hidden" 
                    name="update_id"
                    value="<?php echo $post['id']; ?>"
                >

                <!-- Submit Button -->
                <input type="submit" name="submit" value="submit" class="btn btn-primary">

            </form>
        
        </div>
        
    <!-- Footer Component -->
    <?php include('inc/footer.php'); ?>