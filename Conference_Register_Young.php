<?php
    /**
     * The Conference_Register_Young.php script is used to register the user. It does so by taking the information
     * given by the user in the session and saving it to a MySQL database. If the database is not yet available it
     * creates all of the necessary database and tables. Finally, it displays a message to the user telling them whether
     * this process was completed successfully or not.
     */
    // Start the session
    session_start();

    // Array to hold error messages
    $body = "";


    // Get personal info from session for adding to the database
    $first = $_SESSION['personal']['fName'];
    $last = $_SESSION['personal']['lName'];
    $address = $_SESSION['personal']['address'];
    $city = $_SESSION['personal']['city'];
    $state = $_SESSION['personal']['state'];
    $zip = $_SESSION['personal']['zip'];
    $phone = $_SESSION['personal']['phone'];
    $email = $_SESSION['personal']['email'];

    // Get company info from session for adding to the database
    $cName =  $_SESSION['company']['cName'];
    $cAddress = $_SESSION['company']['address'];
    $cCity =  $_SESSION['company']['city'];
    $cState = $_SESSION['company']['state'];
    $cZip = $_SESSION['company']['zip'];
    $cPhone = $_SESSION['company']['phone'];

    // Get seminar info from session for adding to the database
    $javascript = $_SESSION['seminar']['javascript'];
    $php = $_SESSION['seminar']['php'];
    $mysql = $_SESSION['seminar']['mysql'];
    $apache = $_SESSION['seminar']['apache'];
    $web = $_SESSION['seminar']['web'];

    // Connect to database
    $DBConnect = @new mysqli("localhost", "root", "");

    // if connection to database fails then create conference_registration database
    if($DBConnect->connect_errno) {
        $body .= "<p class='text-danger'>Error creating database: " . $DBConnect->error . "</p>";
    } // end if
    $sql = "CREATE DATABASE IF NOT EXISTS conference_registration";
    // Output confirmation if database is created
    if ($DBConnect->query($sql) === false) {
        $body .= "Error creating database: " . $DBConnect->error;
    } else {
        $body .= "<p class='text-success'>Database created successfully</p>";
    } // end if else

    $DBConnect->select_db("conference_registration");
    $table = "attendees";

    // Query to check if table exists
    $sql = "SHOW TABLES LIKE '$table'";
    $result = $DBConnect->query($sql);
    // If table does not exist than create new attendees table
    if($result->num_rows === 0) {
        $sql = "CREATE TABLE $table (fName VARCHAR(100), lName VARCHAR(100), address VARCHAR(255),
            city VARCHAR(100), state VARCHAR(50), zip VARCHAR(10), phone VARCHAR(13), email VARCHAR(255), 
            cName VARCHAR(255), cAddress VARCHAR(255), cCity VARCHAR(100), cState VARCHAR(50), cZip VARCHAR(10),
            cPhone VARCHAR(13), javascript VARCHAR(3), php VARCHAR(3), mysql VARCHAR(4), apache VARCHAR(3), web VARCHAR(3))";
        if($DBConnect->query($sql) === true) {
            $body .= "<p class='text-success'>Successfully created the $table table</p>";
        } else {
            $body .= "<p class='text-danger'>Error creating the $table table</p>";
        } // end if else
    }


    $sql = "SELECT email FROM $table WHERE email = '$email'";
    $result = $DBConnect->query($sql);
    // Check if user already exists to prevent duplicate entree
    if ($result->num_rows > 0) {
        $body .= "<p class='text-danger'>You already registered for the conference.</p>";
    } else {
        // Add attendees information to database from session
        $sql = "INSERT INTO attendees VALUES ('$first', '$last', '$address', '$city', '$state', '$zip', '$phone', '$email',
            '$cName', '$cAddress', '$cCity', '$cState', '$cZip', '$cPhone', 
            '$javascript', '$php', '$mysql', '$apache', '$web')";

        // Check to see if the information was added to the database and display result to screen
        if($DBConnect->query($sql) === true) {
            $body .= "<p class='text-success'>You have successfully registered for the conference.</p>";
        } else {
            $body .= "<p class='text-danger'>There was an error registering for the conference</p>";

        } // end if else
    } // end if else

    $DBConnect->close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
       CSC 2410 Web Programming
       Project 3
       Part 1: Professional Conference

       Author: Brandon Young
       Date: 5/11/2017

       Filename: Conference_Register_Young.php
    -->
    <meta charset="UTF-8">
    <title>Project3-1</title>
    <!-- Latest compiled and mninified JQuery for Bootstrap to work -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Conference Registration</h1>
    </div>
    <div class="row">
        <?php
            echo $body;
        ?>
    </div>
</div>
</body>
</html>