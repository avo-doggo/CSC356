//Jameson Brown
//Display error message next to the fields
function printError(elemId, msg) {
    document.getElementById(elemId).innerHTML = msg;
}

//Validate username/password for login form
function validateLogin() {

    //get input values
    var username = document.frmlogin.txtUserName.value;
    var password = document.frmlogin.pwdUser.value;

    //assume valid at first
    var userValid = true;
    var passValid = true;

    //clear previous errors
    printError("usernameErr", "");
    printError("passwordErr", "");

    //username required
    if (username === "") {
        printError("usernameErr", "Please enter your username.");
        userValid = false;
    }

    //password required
    if (password === "") {
        printError("passwordErr", "Please enter your password.");
        passValid = false;
    }

    //If either invalid, stop the form submission
    if (!userValid || !passValid) {
        return false;
    }
}