<?php
    /**
     * The Conference_Seminars_Young.php script is used to display the selection of seminars to attend.
     * This script also handles the validation of the Company Information form and saves it to the session
     */

    // Validate values from Personal Information form
    session_start();

    // Counter for errors
    $errors = 0;
    // The Message that will be displayed if there are any errors
    $body = "";

    // Check company name
    if(empty($_POST['cName'])) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Company Name</p>";
    } // end if

    // Check company address
    if(empty($_POST['cAddress'])) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Company Address</p>";
    } // end if

    // Check company city
    if(empty($_POST['cCity'])) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Company City</p>";
    } // end if

    // Check company state
    if(empty($_POST['cState'])) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Company State</p>";
    } // end if

    // Check company zip code
    if(empty($_POST['cZip'])) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Zip Code</p>";
    } // end if

    // Check company phone number
    if(empty($_POST['cPhone'])) {
        ++$errors;
        $body .= "<p class='text-danger'>You need to enter your Phone number</p>\n";
    } // end if

    // Add information to session if there are no errors
    if($errors > 0) {
        $body .= "<p>Please use your browser's BACK button to return to the form and fix the errors indicated.</p>\n";
    } else {
        $cName = stripslashes($_POST['cName']);
        $_SESSION['company']['cName'] = $cName;
        $cAddress = stripslashes($_POST['cAddress']);
        $_SESSION['company']['address'] = $cAddress;
        $cCity = stripslashes($_POST['cCity']);
        $_SESSION['company']['city'] = $cCity;
        $cState = stripslashes($_POST['cState']);
        $_SESSION['company']['state'] = $cState;
        $cZip = stripslashes($_POST['cZip']);
        $_SESSION['company']['zip'] = $cZip;
        $cPhone = stripslashes($_POST['cPhone']);
        $_SESSION['company']['phone'] = $cPhone;
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

       Filename: Conference_Seminars_Young.php
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
    <style>
        /* Style to fix link button inside form */
        button a, button a:hover {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Professional Conference</h1>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <?php echo $body ?>
            <form class="form" action="Conference_Summary_Young.php" method="post">
                <fieldset>
                    <legend>Seminars</legend>
                    <div class="checkbox">
                        <label><input type="checkbox" id="javascript" name="javascript"
                                      value="javascript">JavaScript</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" id="php" name="php" value="php">PHP</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" id="mysql" name="mysql" value="mysql">MySQL</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" id="apache" name="apache" value="apache">Apache</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" id="web" name="web" value="web">Web Services</label>
                    </div>
                    <div class="form-group col-xs-12">
                        <input type="submit" class="btn" value="Next">
                        <button class="btn" type="button"><a href="Conference_Company_Young.php">Back</a></button>
                        <button class="btn" type="button"><a href="Conference_Restart_Young.php">Start Over</a></button>
                    </div>
                </fieldset>
            </form>
        </div><!-- .row -->
    </div><!-- .container -->
</body>
</html>