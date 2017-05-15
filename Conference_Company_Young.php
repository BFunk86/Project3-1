<?php
    // Validate values from Personal Information form
    session_start();

    // Counter for errors
    $errors = 0;
    // The Message that will be displayed if there are any errors
    $body = "";

    // Check first name
    if( empty($_POST['fName']) ) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your First Name</p>";
    } // end if

    // Check last name
    if( empty($_POST['lName']) ) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Last Name</p>";
    } // end if

    // Check address
    if( empty($_POST['address']) ) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Address</p>";
    } // end if

    // Check city
    if( empty($_POST['city']) ) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your City</p>";
    } // end if

    // Check first state
    if( empty($_POST['state']) ) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your State</p>";
    } // end if

    // Check first zip code
    if( empty($_POST['zip']) ) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Zip Code</p>";
    } // end if

    // Check phone number
    if( empty($_POST['phone']) ) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Phone number</p>\n";
    } // end if

    // Check email
    if( empty($_POST['email']) ) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Email Address</p>\n";
    } else {
        $email = stripslashes($_POST['email']);
        // Check if email is valid format
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            ++$errors;
            $body .= "<p class='text-danger'>You need to enter a valid Email Address</p>\n";
        } // end if
    } // end if else

    // Add information to session if there are no errors
    if ($errors > 0) {
        $body .= "<p>Please use your browser's BACK button to return to the form and fix the errors indicated.</p>\n";
    } else {
        $first = stripslashes($_POST['fName']);
        $_SESSION['personal']['fName'] = $first;
        $last = stripslashes($_POST['lName']);
        $_SESSION['personal']['lName'] = $last;
        $address = stripslashes($_POST['address']);
        $_SESSION['personal']['address'] = $address;
        $city = stripslashes($_POST['city']);
        $_SESSION['personal']['city'] = $city;
        $state = stripslashes($_POST['state']);
        $_SESSION['personal']['state'] = $state;
        $zip = stripslashes($_POST['zip']);
        $_SESSION['personal']['zip'] = $zip;
        $phone = stripslashes($_POST['phone']);
        $_SESSION['personal']['phone'] = $phone;
        $email = stripslashes($_POST['email']);
        $_SESSION['personal']['email'] = $email;
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
       Date: 5/9/2017

       Filename: Conference_Company_Young.php
    -->
    <meta charset="UTF-8">
    <title>Company Information</title>
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
        <h1>Professional Conference</h1>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <form class="form" action="Conference_Seminars_Young.php" method="post">
                <fieldset>
                    <legend><h2>Company Information</h2></legend>
                    <div class="form-group col-xs-12">
                        <label for="cName" class="control-label">Company Name:</label>
                        <input type="text" class="form-control" id="cName" placeholder="Enter Company Name" autofocus>
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="cAddress" class="control-label">Address:</label>
                        <input type="text" class="form-control" id="cAddress" placeholder="Enter Company Address">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="cCity" class="control-label">City:</label>
                        <input type="text" class="form-control" id="cCity" placeholder="Enter Company City">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="cState" class="control-label">State:</label>
                        <input type="text" class="form-control" id="cState" placeholder="Enter Company State">
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="zip" class="control-label">Zip:</label>
                        <input type="text" class="form-control" id="cZip" placeholder="Enter Company Zip Code">
                    </div>
                    <div class="form-group col-xs-8">
                        <label for="phone" class="control-label">Phone:</label>
                        <input type="text" class="form-control" id="cPhone" placeholder="Enter Company Phone #">
                    </div>
                    <div class="form-group col-xs-12">
                        <input type="submit" class="btn" name="cSubmit" value="Next">
                        <button class="btn"><a href="Conference_Start_Young.php">Back</a></button>
                        <button class="btn"><a href="Conference_Restart_Young.php">Start Over</a></button>
                    </div>
                </fieldset>
            </form>
        </div>

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