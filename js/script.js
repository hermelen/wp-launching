$(document).ready(function(){
  setInterval(function countdown() {
    var splitted = post_meta_date.split(" ");

    var date = splitted[0];
    var hour = splitted[1];

    // date = date.replace(new RegExp('/', 'g'), "-");

    var date = date.split("/").reverse().join("-");
    var formattedDate = date+"T"+hour+"Z";
    var finalDate = new Date(formattedDate);
    var today = new Date();

    var timeDiff = finalDate - today;


    var days = timeDiff/1000/60/60/24;
    var days = Math.floor( days );
    if (days > 1) {
      display_days = "Days";
    } else {
      display_days = "Day";
    }

    var hours = timeDiff/1000/60/60;
    var hours = Math.floor( hours )%24;
    if (hours < 10) {
      hours = "0" + hours;
    }
    if (hours > 1) {
      display_hours = "Hours";
    } else {
      display_hours = "Hour";
    }

    var minutes = timeDiff/1000/60;
    var minutes = Math.floor( minutes )%60;
    if (minutes < 10) {
      minutes = "0" + minutes;
    }
    if (minutes > 1) {
      display_minutes = "Minutes";
    } else {
      display_minutes = "Minute";
    }

    var seconds = timeDiff/1000;
    var seconds = Math.floor( seconds )%60;
    if (seconds < 10) {
      seconds = "0" + seconds;
    }
    if (seconds > 1) {
      display_seconds = "Seconds";
    } else {
      display_seconds = "Second";
    }

    $("div.countdown-container").html("");
    $("div.countdown-container").append(`
      <div class="countdown-container">
        <div class="item">
          <p>${days}</p>
          <p>${display_days}</p>
        </div>
        <div class="item">
          <p>${hours}</p>
          <p>${display_hours}</p>
        </div>
        <div class="item">
          <p>${minutes}</p>
          <p>${display_minutes}</p>
        </div>
        <div class="item">
          <p>${seconds}</p>
          <p>${display_seconds}</p>
        </div>
      </div>
    `)

    // console.log(days);
    // console.log(hours);
    // console.log(minutes);
    // console.log(seconds);
  }, 1000);
  countdown();
});
