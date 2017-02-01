//function to calculate the remaining time
//takes the deadline time as the arg.
function getTimeRemaining(endtime) {
    
    var t = Date.parse(endtime) - Date.parse(new Date());
    
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    
    //will return this array
    //user can choose what to get i.e. day, hours, etc.
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
    };
    
}

//function to initialize the clock
//takes the id and the endtime i.e. deadline time as args.
function initializeClock(id, endtime) {
    
    var clock = document.getElementById(id);
    
    //console.log(clock);

    var daysSpan = clock.querySelector('.days');
    var hoursSpan = clock.querySelector('.hours');
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');
    
    //update the clock with the data received from the above function
    function updateClock() {

        var t = getTimeRemaining(endtime);

        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
        minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
        secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
        
        //if the endtime is reached 
        if (t.total <= 0) {
            clearInterval(timeinterval);
        }

    }
    
    //will keep on updating the clock
    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
    
}


/*

One can also set the deadline time as

var deadline = 'December 31 2017 23:59:59 GMT+0530';

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);

var deadline = '2017-12-31';

var deadline = '31/12/2017';

var deadline = 'December 31 2017';

*/
//set the dead line time here
var deadline = 'February 16 2017 09:00:00 GMT+0530';

//initialize function
initializeClock('clockdiv', deadline);