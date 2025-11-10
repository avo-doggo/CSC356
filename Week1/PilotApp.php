<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Pilot Application</title>
    <script src="AppValidator.js"></script>
    <link rel="stylesheet" href="PilotApp.css">
</head>
<body>
<!--navigation menu-->
    <nav>
        <ul>
            <li><a href="Index.php">Home</a></li>
            <li><a href="PilotApp.php">Pilot Application</a></li>
        </ul>
    </nav>
<!--Header for application-->
    <h1> Mars Pilot Application </h1>
<!--Pilot form-->
    <form name="appForm" onsubmit="return validateForm();" action="#" method="post">
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
    <!--end pilot form-->
</body>

</html>
