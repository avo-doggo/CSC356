//uses time from php code then coverts to seconds
let countdownTimer = new Date(jsLaunchDate).getTime();
// setInterval repeats code at specified intervals
let intervalId = setInterval(function(){
    //grab the current time
    let currentTime = new Date().getTime();

    //The value of this will not change- const
    //number of milliseconds in a second
    const MS_IN_A_SECOND = 1000;
    //number of milliseconds in a minute
    const MS_IN_A_MINUTE = MS_IN_A_SECOND * 60;
    //number of milliseconds in an hour
    const MS_IN_AN_HOUR = MS_IN_A_MINUTE * 60;
    //number of milliseconds in a day
    const MS_IN_AN_DAY = MS_IN_AN_HOUR * 24;
    
    //get the difference in ms between current time and launch time
    let timeDiff = countdownTimer - currentTime;
    
    //countdown calcs
    //find out how many days are left
    let days = Math.floor(timeDiff / MS_IN_AN_DAY);
    //how many hours
    let hours = Math.floor((timeDiff % MS_IN_AN_DAY)/ MS_IN_AN_HOUR);
    //how many minutes
    let minutes = Math.floor((timeDiff % MS_IN_AN_HOUR) / MS_IN_A_MINUTE);
    //how many seconds
    let seconds = Math.floor((timeDiff % MS_IN_A_MINUTE) / MS_IN_A_SECOND);

    // shortcut / pointer to div

    let divCountdown = document.getElementById("divCountdown");

    //display the time left
    divCountdown.textContent = days + " Days : " + hours + " Hours : " +
    minutes + " Minutes : " + seconds + " Seconds ";
     
    
    let divCountdownMessage = document.getElementById("divCountdownMessage");

    if (timeDiff < 0){
        // missed launch
        clearInterval(intervalId)
        divCountdown.textContent = "";
        divCountdownMessage.textContent = "You Missed the Launch! :(";
    }

    else if (seconds <= 1){
        divCountdownMessage.textContent = "Merry Christmas!";
    }

    else if (days < 1 && hours <= 6){
        divCountdownMessage.textContent = "Hurry or You'll Miss It!";
    }

    else if (days <= 7){
        divCountdownMessage.textContent = "Pack Your Bags!";
    }

    else if (days <= 14 ){
        divCountdownMessage.textContent = "We're Getting There!";
    }

    else {
        divCountdownMessage.textContent = "Theres Still Plenty of Time";
    }
    }, 1000);