<?php 

    // For website root url
    require('config/config.php');
    // For connecting to the database
    require('config/db.php');

    // Check for submit
    if(isset($_POST['submit'])) {

        // Get form data
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        // Query
        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)) {

            header('Location: ' . ROOT_URL . '');

        }

        else {

            echo 'ERROR: ' . mysqli_error($conn);
            
        }

    }

?>

    <!-- Header Component -->
    <?php include('inc/header.php'); ?>

        <div class="container">

            <!-- Title -->
            <h1 class="m-1 text-primary">Add Post</h1>

            <!-- Form -->
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">

                <!-- Post Title -->
                <div class="form-group">

                    <label>Title</label>

                    <input type="text" name="title" class="form-control">
                
                </div>

                <!-- Post Author -->
                <div class="form-group">

                    <label>Author</label>

                    <input type="text" name="author" class="form-control">
                
                </div>

                <!-- Post Body -->
                <div class="form-group">

                    <label>Body</label>

                    <textarea name="body" class="form-control"></textarea>
                
                </div>

                <!-- Submit Button -->
                <input type="submit" name="submit" value="submit" class="btn btn-primary">

            </form>
        
        </div>
        
    <!-- Footer Component -->
    <?php include('inc/footer.php'); ?>