<?php
session_start();
// check to see if form has been submitted
//if so, compare to tbluser in mysql
$message="";

//check if form was submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require_once 'db_connection.php';
    //variable to hold username
    $username = $_POST['txtUserName'];
     //variable to hold password
    $password = $_POST['pwdUser'];


    //query database for usrnm and pswrd from tbluser
    $sql = "SELECT FirstName, UserID 
            FROM tbluser 
            WHERE UserName = '$username' 
            AND Password = '$password'";   

    //run the query
    $result = mysqli_query($db_conn, $sql);

    //convert result into array
    $check = mysqli_fetch_assoc($result);


    //check if user logged in correctly
    if ($check) {
        $_SESSION['username'] = $username;
        $_SESSION['FirstName'] = $check['FirstName'];   

        //add in redirect
        header("Location: secure.php");
    }
    else{
        //be vague
        $message = "Login Failed. :( Please Try Again";
        $_SESSION['username'] = "";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opportunity ~ Login </title>

    <link rel="stylesheet" href="Opportunity.css">
    <script src="loginValidator.js"></script>
</head>
<body>
    <header>
        <?php
        // nav menu
        include "Menu.php";
        ?>
        <br>
        <h1> Opportunity Program ~ Login </h1>
    </header>
    <main>
        <h2> Enter Your Credentials</h2>
        <p><?php echo $message; ?></p>
        <!--Username-->
        <form name="frmlogin" id = "frmlogin" method="post" action="login.php" onsubmit="return validateLogin();">
            <div>
                <label for="txtUserName">User Name:</label>
                <input type="text" id="txtUserName" name="txtUserName">
                <span id="usernameErr" class="error"></span>
            </div>
            <!--password-->
            <div>
                <label for="pwdUser">Password:</label>
                <input type="text" id="pwdUser" name="pwdUser"><!--Change to password for type-->
                <span id="passwordErr" class="error"></span>
            </div>

            <!--Submit button-->
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </main>
    
</body>
</html>