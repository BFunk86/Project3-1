<?php
    # Start new Session
    session_start();
    # make session an array
    $_SESSION = array();
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

       Filename: Conference_Start_Young.php
    -->
    <meta charset="UTF-8">
    <title>Personal Information</title>
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
        <h1>Professional Conference</h1>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <form class="form" action="Conference_Company_Young.php" method="post">
                <fieldset>
                    <legend><h2>Personal Information</h2></legend>
                    <div class="form-group col-xs-6">
                        <label for="fName" class="control-label">First Name:</label>
                        <input type="text" class="form-control" id="fName" name="fName" placeholder="Enter your first name" autofocus required>
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="lName" class="control-label">Last Name:</label>
                        <input type="text" class="form-control" id="lName" name="lName" placeholder="Enter your last name" required>
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="address" class="control-label">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="city" class="control-label">City:</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" required>
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="state" class="control-label">State:</label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="Enter your state" required>
                    </div>
                    <div class="form-group col-xs-6">
                        <label for="zip" class="control-label">Zip:</label>
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter your zip code" required>
                    </div>
                    <div class="form-group col-xs-8">
                        <label for="phone" class="control-label">Phone:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group col-xs-8">
                        <label for="email" class="control-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your e-mail address" required>
                    </div>
                    <div class="form-group col-xs-12">
                        <input type="submit" class="btn" name="submitStart"  value="Next">
                        <input type="reset" class="btn" name="reset" value="Start Over">
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