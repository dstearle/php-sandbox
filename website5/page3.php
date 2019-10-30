<?php 

    $user = [ 'name' => 'Brad', 'email' => 'test@test.com','age' => 35 ];

    $user = serialize($user); // Serializes the user info

    setcookie('user', $user, time() + (86400 * 30)); // Sets serialized info into a cookie timed to 1 day

    $user = unserialize($_COOKIE['user']); // Unserializes the user info

    echo $user['email']; // Outputs the user's email
    // print_r($user); // Shows all of the stored info for $user

?>