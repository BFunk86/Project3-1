<?php
    // Validate values from Personal Information form
    session_start();

    // Counter for errors
    $errors = 0;
    // The Message that will be displayed if there are any errors
    $body = "";

    // Set value to false if javascript is not checked or true otherwise
    if(empty($_POST['javascript'])) {
        $_SESSION['seminar']['javascript'] = "no";
    } else if(!empty($_POST['javascript'])) {
        $_SESSION['seminar']['javascript'] = "yes";
    } // end if else

    // Set value to false if php is not checked or true otherwise
    if(empty($_POST['php'])) {
        $_SESSION['seminar']['php'] = "no";
    } else if(!empty($_POST['php'])) {
        $_SESSION['seminar']['php'] = "yes";
    } // end if else

    // Set value to false if mysql is not checked or true otherwise
    if(empty($_POST['mysql'])) {
        $_SESSION['seminar']['mysql'] = "no";
    } else if(!empty($_POST['mysql'])) {
        $_SESSION['seminar']['mysql'] = "yes";
    } // end if else

    // Set value to false if apache is not checked or true otherwise
    if(empty($_POST['apache'])) {
        $_SESSION['seminar']['apache'] = "no";
    } else if(!empty($_POST['apache'])) {
        $_SESSION['seminar']['apache'] = "yes";
    } // end if else

    // Set value to false if web is not checked or true otherwise
    if(empty($_POST['web'])) {
        $_SESSION['seminar']['web'] = "no";
    } else if(!empty($_POST['web'])) {
        $_SESSION['seminar']['web'] = "yes";
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
        button a, button a:hover {
            color: inherit;
            text-decoration: inherit;
        }
        td {
            vertical-align: top;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Summary</h1>
    </div>
    <p>You entered the following information</p>
    <div class="row">
        <form action="Conference_Register_Young.php" method="post">
            <table class="table-bordered">
                <tbody>
                <tr>
                <td class="col-xs-4">
                    <h2><a href="Conference_Start_Young.php">Personal Information</a></h2>
                    <?php
                        //This section outputs the Personal Information
                        echo "<p>First Name: " . $_SESSION['personal']['fName'] . "</p>";
                        echo "<p>Last Name: " . $_SESSION['personal']['lName'] . "</p>";
                        echo "<p>Address: " . $_SESSION['personal']['address'] . "</p>";
                        echo "<p>City: " . $_SESSION['personal']['city'] . "</p>";
                        echo "<p>State: " . $_SESSION['personal']['state'] . "</p>";
                        echo "<p>Zip Code: " . $_SESSION['personal']['zip'] . "</p>";
                        echo "<p>Phone: " . $_SESSION['personal']['phone'] . "</p>";
                        echo "<p>Email: " . $_SESSION['personal']['email'] . "</p>";
                    ?>
                </td>
                <td class="col-xs-4">
                    <h2><a href="Conference_Company_Young.php">Company Information</a></h2>
                    <?php
                        // This section outputs the Company Information
                        echo "<p>Company Name: " . $_SESSION['company']['cName'] . "</p>";
                        echo "<p>Address: " . $_SESSION['company']['address'] . "</p>";
                        echo "<p>City: " . $_SESSION['company']['city'] . "</p>";
                        echo "<p>State: " . $_SESSION['company']['state'] . "</p>";
                        echo "<p>Zip Code: " . $_SESSION['company']['zip'] . "</p>";
                        echo "<p>Phone: " . $_SESSION['company']['phone'] . "</p>";
                    ?>
                </td>
                <td class="col-xs-4">
                    <h2><a href="Conference_Seminars_Young.php">Seminars</a></h2>
                    <?php
                        // This section outputs the Seminar Information
                        echo "<p>Javascript Seminar: " . $_SESSION['seminar']['javascript'] . "</p>";
                        echo "<p>PHP Seminar: " . $_SESSION['seminar']['php'] . "</p>";
                        echo "<p>MySQL Seminar: " . $_SESSION['seminar']['mysql'] . "</p>";
                        echo "<p>Apache Seminar: " . $_SESSION['seminar']['apache'] . "</p>";
                        echo "<p>Web Services Seminar: " . $_SESSION['seminar']['web'] . "</p>";
                    ?>
                </td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="form-group">
                <input type="submit" class="btn" value="Register">
                <button class="btn" type="button"><a href="Conference_Seminars_Young.php">Back</a></button>
                <button class="btn" type="button"><a href="Conference_Restart_Young.php">Start Over</a></button>
            </div>
        </form>
    </div><!-- .row -->
</div><!-- .container -->
</body>
</html>