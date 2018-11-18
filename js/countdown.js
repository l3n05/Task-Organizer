// if the remaining time finished then set this task as expired
function setExpired(i) {
  $.ajax ({
    type:"POST",
    url:"actions.php?action=expired",
    data:"id=" + i,
    success:function(result) {
        if (result == 1) {
          window.location.reload();
        }
    }
  });
}

// function that calculates the remaining time until the deadline
function timeRemaining(dt,id,id2) {
  var countDownDate = new Date(dt+" 23:59:59").getTime();

  var x = setInterval(function() {

    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    $(id).html("<span style='color:black;font-weight:bold;'>Time left : </span>" + days + "d " + hours + "h " + minutes + "m " + seconds + "s ");

    if (distance < 0) {
      clearInterval(x);
      setExpired(id2);
      return;
    }
  }, 1000);
}
