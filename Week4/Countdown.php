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
    <title>Opportunity ~ Countdown</title>
    <link rel="stylesheet" href="Opportunity.css">
</head>
<body >
    <header>
        <?php
        // nav menu
        include "Menu.php";
        ?>
        <br>
        <h1> Journey Countdown </h1>
    </header>

    <main class = "countdownMain">
        <p>Launch Date: 12/25/25 0:00:00</p>
        <div id="divCountdown">Countdown</div>
        <br>
        <div id="divCountdownMessage">Message</div>
    </main>


    <?php
    //php variable to hold launch time
        $launchDateTime = strtotime("December 25 2025 0:00:00");
    //format the date with javcascript friendly code
    $jsDateTime = date("F d, Y H:i:s",  $launchDateTime);
    ?>

<script>
    // This creates a global JS variable called jsLaunchDate
    const jsLaunchDate = "<?php echo $jsDateTime; ?>";
</script> 
<script src="countdown.js"></script>
</body>
</html>