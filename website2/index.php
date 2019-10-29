<?php include 'server-info.php'; ?>

<!DOCTYPE html>

<html>

    <head>

        <title>System Info</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    </head>

    <body>
        
        <!--  -->
        <div class="container">

            <h1>Server & File Info</h1>

            <!-- Renders if $server variable exists -->
            <?php if($server): ?>

                <ul class="list-group">

                    <!-- PHP Foreach Loop -->
                    <!-- Displays each item from the $server array in server-info.php -->
                    <?php foreach($server as $key => $value): ?>

                        <li class="list-group-item">

                            <strong><?php echo $key; ?>: </strong>

                            <?php echo $value; ?>

                        </li>

                    <?php endforeach; ?>
                
                </ul>

            <?php endif; ?>

            <br>

            <h1>Client Info</h1>

            <!-- Renders if $client variable exists -->
            <?php if($client): ?>

                <ul class="list-group">

                    <!-- PHP Foreach Loop -->
                    <!-- Displays each item from the $client array in server-info.php -->
                    <?php foreach($client as $key => $value): ?>

                        <li class="list-group-item">

                            <strong><?php echo $key; ?>: </strong>

                            <?php echo $value; ?>

                        </li>

                    <?php endforeach; ?>
                
                </ul>

            <?php endif; ?>
        
        </div>

    </body>

</html>