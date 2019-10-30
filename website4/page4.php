<?php 

    // This file will not show anything. 
    // It is mainly to unset/destroy the current session when going back to page 3.

    session_start(); // Starts the session

    // unset($_SESSION['name']); // Return to page 3 to see the name unset

    session_destroy(); // Destroys the current session

?>