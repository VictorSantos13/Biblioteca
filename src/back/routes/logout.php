<?php

    // Initialize the session.
    session_start();
    // Unset all of the session variables.
    unset($_SESSION['username']);
    // Finally, destroy the session.    
    session_destroy();

    header("location: ../../index.php")

?>