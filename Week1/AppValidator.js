//display error message on php page
function  printError(elemId, msg) {
    document.getElementById(elemId).innerHTML = msg;
}

//Ensure form inputs are valid
function validateForm(){
    //inputs from html input elements
    var fullName = document.appForm.fullName.value;
    var age = document.appForm.age.value;
    var idNum = document.appForm.idNum.value;
    var weight = document.appForm.weight.value;
    var fear = document.appForm.fear.value;

    var nameValid = true;
    var ageValid = true;
    var idValid = true;
    var weightValid = true;
    var fearValid = true;

    //check to see if name input is valid
    if (fullName == ""){
        printError("fullNameErr", "Please enter your name.");
        nameValid = false;
    }

    //check to see if age input is valid
    if (age == ""){
        printError("ageErr", "Please enter your age.");
        ageValid = false;
    }

        //check to see if id input is valid
    if (idNum == ""){
        printError("idNumErr", "Please enter your ID number.");
        idValid = false;
    }

        //check to see if name input is valid
    if (weight == ""){
        printError("weightErr", "Please enter your weight.");
        weightValid = false;
    }

        //check to see if name input is valid
    if (fear == ""){
        printError("fearErr", "Please choose an option.");
        fearValid = false;
    }

    if (!nameValid || !ageValid || !idValid || !weightValid || !fearValid){
        return false;
    }
}