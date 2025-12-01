<!--Jameson Brown-->
<?php 
    error_reporting(E_ALL);
    ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opportunity ~ Pilot Application</title>
    <script src="AppValidator.js"></script>
    <link rel="stylesheet" href="Opportunity.css">
</head>
<body>

        <header>
            <?php
            // nav menu
            include "Menu.php";
            ?>
            <br>
            <h1> Mars Pilot Application </h1>
        </header>


    <form id="appForm" name="appForm" onsubmit="return validateForm();" action="#" method="post">
        <div class="row">
            <label>Full Name</label>
            <input type="text" name="fullName">
            <div class="error" id="fullNameErr"></div>
        </div>

        <div class="row">
            <label>Age</label>
            <input type="text" name="age">
            <div class="error" id="ageErr"></div>
        </div>

        <div class="row">
            <label>ID Number</label>
            <input type="text" name="idNum">
            <div class="error" id="idNumErr"></div>
        </div>

        <div class="row">
            <label>Weight</label>
            <input type="text" name="weight">
            <div class="error" id="weightErr"></div>
        </div>

        <div class="row">
            <label>Are You Afraid of Heights?</label>
            <div class="form-inline">
                <label><input type="radio" name="fear" value="yes"> Yes</label>
                <label><input type="radio" name="fear" value="no"> No</label>
            </div>
            <div class="error" id="fearErr"></div>
        </div>
            <input type="submit" value="Submit">
        <div class="row">

        </div>
    </form>
</body>
</html>