let input = document.querySelector(".form-control");
let button = document.querySelector(".btn");
button.disabled = true;

input.addEventListener('keyup', e => {
    //Check for the input's value
    if (e.target.value == "") {
        button.disabled = true;
    } else {
        button.disabled = false;
    }
});

var timer2 = "4:00";
var interval = setInterval(function () {


    var timer = timer2.split(':');
    //by parsing integer, I avoid all extra string processing
    var minutes = parseInt(timer[0], 10);
    var seconds = parseInt(timer[1], 10);
    --seconds;
    minutes = (seconds < 0) ? --minutes : minutes;
    if (minutes < 0) clearInterval(interval);
    seconds = (seconds < 0) ? 59 : seconds;
    seconds = (seconds < 10) ? '0' + seconds : seconds;
    //minutes = (minutes < 10) ?  minutes : minutes;
    if (minutes == -1 && seconds == 59) {
        $('.countdown').html('selesai');
    } else {
        $('.countdown').html(minutes + ':' + seconds);
    }
    timer2 = minutes + ':' + seconds;
}, 1000);