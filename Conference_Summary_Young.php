<?php
    // Validate values from Personal Information form
    session_start();

    // Counter for errors
    $errors = 0;
    // The Message that will be displayed if there are any errors
    $body = "";


    print_r($_POST);



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