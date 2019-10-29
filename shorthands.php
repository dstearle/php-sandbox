<?php

    $loggedIn = true;
    $arr = [1,2,3,4,5];

    // Long way...
    // if($loggedIn) { echo 'You are logged in!'; }

    // else { echo 'You are NOT logged in!'; }

    // Shot hand way...
    // echo ($loggedIn) ? 'You are logged in' : 'You are NOT logged in';

    $isRegistered = ($loggedIn = true) ? true : false;
    // echo $isRegistered;

    $age = 20;
    $score = 15;

    // Nested short hand statement (should be in one line but broken up for readability)
    // echo 'Your score is: ' . (
        
    //     $score > 10 ? 
        
    //         // If score is greater than 10
    //         ($age > 10 ? 'Average' : 'Exceptional' ) 
            
    //         : 
            
    //         // If score is less than 10
    //         ($age > 10 ? 'Horrible' : 'Average')
        
    // );

?>

<!-- If Statements -->
<div>

    <?php if($loggedIn) { ?>

        <h1>Welcome User</h1>

    <?php } else { ?>

        <h1>Welcome Guests</h1>

    <?php } ?>

</div>

<div>

    <?php if($loggedIn) : ?>

        <h1>Welcome User</h1>

    <?php else: ?>

        <h1>Welcome Guests</h1>

    <?php endif; ?>

</div>

<!-- For Loops -->

<div>

    <?php foreach($arr as $val) : ?>

        <?php echo $val; ?>

    <?php endforeach; ?>

</div>

<div>

    <?php for($i = 0; $i < 10; $i++) : ?>

        <li><?php echo $i; ?></li>

    <?php endfor; ?>

</div>