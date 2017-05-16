<?php
    # Start Session
    session_start();
    # Destroy all data for any current sessions
    session_destroy();
    header("Location: Conference_Start_Young.php");
    exit;


?>