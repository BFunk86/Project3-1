<?php
    // Validate values from Personal Information form
    session_start();

    // Counter for errors
    $errors = 0;
    // The Message that will be displayed if there are any errors
    $body = "";


    print_r($_POST);

    // Set value to false if javascript is not checked or true otherwise
    if(empty($_POST['javascript'])) {
        $_SESSION['seminar']['javascript'] = false;
    } else if(!empty($_POST['javascript'])) {
        $_SESSION['seminar']['javascript'] = false;
    } // end if else

    // Set value to false if php is not checked or true otherwise
    if(empty($_POST['php'])) {
        $_SESSION['seminar']['php'] = false;
    } else if(!empty($_POST['php'])) {
        $_SESSION['seminar']['php'] = false;
    } // end if else

    // Set value to false if mysql is not checked or true otherwise
    if(empty($_POST['mysql'])) {
        $_SESSION['seminar']['mysql'] = false;
    } else if(!empty($_POST['mysql'])) {
        $_SESSION['seminar']['mysql'] = false;
    } // end if else

    // Set value to false if apache is not checked or true otherwise
    if(empty($_POST['apache'])) {
        $_SESSION['seminar']['apache'] = false;
    } else if(!empty($_POST['apache'])) {
        $_SESSION['seminar']['apache'] = false;
    } // end if else

    // Set value to false if web is not checked or true otherwise
    if(empty($_POST['web'])) {
        $_SESSION['seminar']['web'] = false;
    } else if(!empty($_POST['web'])) {
        $_SESSION['seminar']['web'] = false;
    } // end if else




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--
       CSC 2410 Web Programming
       Project 3
       Part 1: Professional Conference

       Author: Brandon Young
       Date: 5/10/2017

       Filename: Conference_Summary_Young.php
    -->
    <meta charset="UTF-8">
    <title>Summary</title>
    <!-- Latest compiled and mninified JQuery for Bootstrap to work -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <style>
        /* Style to fix link button inside form */
        button a, button a:hover{color: inherit;text-decoration: inherit;}
    </style>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Summary</h1>
    </div>
    <p>You entered the following information</p>
    <div class="row">
        <?php

            /**
             *
             * Author: Brandon Young
             */
        ?>
    </div>
</div>
</body>
</html>