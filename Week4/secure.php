<?php
session_start();
//must be logged in
require_once 'db_connection.php';
if ($_SESSION['username'] == "") {
    header("Location: login.php");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Intranet</title>

    <link rel="stylesheet" href="Opportunity.css">
</head>
<body>
    <header>
        <?php
        // nav menu
        include "Menu.php";
        ?>
        <br>
        <h1> Opportunity Program ~ Employee Portal </h1>
    </header>
    <main>
        <h2>Welcome <?php echo htmlspecialchars($_SESSION['FirstName']); ?></h2>
        <p>Login Successful!</p>
        <p>New Employee Documents</p>
        <p>Open Enrollment</p>
        <p>Change User ID</p>
    </main>
</body>
</html>