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
    <title>Opportunity ~ Home</title>
     <link rel="stylesheet" href="Opportunity.css">
</head>
    <body>
        <header>
            <?php
            // nav menu
            include "Menu.php";
            ?>
            <br>
            <h1> Opportunity Program </h1>
        </header>

        <main>
            <h2> Welcome to Opportunity! We Hope You Will Join Our Journey!</h2>
            <br>
            <figure id="marsImg">
                <img src="images/marsImage.png" alt="Picture of Mars" width = "250px" height = "250px">
                <br>
                <figcaption>
                    <small><a href="https://pngimg.com/image/61145">Source</a></small>
                </figcaption>
            </figure>
            <p> Here at Opportunity, we are working towards a brighter tomorrow.
                <br>
                Starting with trips to Mars, we are hoping to show people the beauty of space!
                <br>
                As of now, we are in need of Opportunity Pilots! If you or someone you know is interested, click the button below!</p>
                <br>
            <a href="PilotApp.php"><button> Application</button></a>
        </main>
    </body>
</html>