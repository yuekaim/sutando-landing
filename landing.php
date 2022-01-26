<?php snippet('head') ?>

<?= css('assets/css/fog.css') ?>
<?= css('assets/css/landing-styles.css') ?>

<div class="landing-social">
  <div class="discord social-logo">
    <a href="<?= $page->discord()->url() ?>">
      <img src="<?php echo url('assets/img/discord.png') ?>" alt="">
    </a>
  </div>
  <div class="twitter social-logo">
    <a href="<?= $page->twitter()->url() ?>">
      <img src="<?php echo url('assets/img/twitter.png') ?>" alt="">
    </a>
  </div>
</div>

<div class="landing-logo">
  <?php if($image = $page->logo()->toFile()): ?>
    <img src="<?= $page->logo()->toFile()->url() ?>" alt="">
  <?php endif ?>
</div>

<div class="landing-bg">
  <?php if($image = $page->bgimage()->toFile()): ?>
    <img src="<?= $page->bgimage()->toFile()->url() ?>" alt="">
  <?php endif ?>
</div>

<div class="countdown-wrapper">
  <div class="title">
    Website Launch countdown
  </div>
  <div class="countdown">

    <div id="timerd" class="chart1" data-percent="" data-scale-color="#ffb400"></div>
    <div id="timerh" class="chart2" data-percent="" data-scale-color="#ffb400"></div>
    <div id="timerm" class="chart3" data-percent="" data-scale-color="#ffb400"></div>
    <div id="timers" class="chart4" data-percent="" data-scale-color="#ffb400"></div>
  </div>
  <div class="countdown number">
    <!-- <div class="timereach">
      <div class="timern" id="timerdin"></div>
      <div class="units">DAYS</div>
    </div> -->
    <div id="timerdin"></div>
    <div id="timerhin"></div>
    <div id="timermin"></div>
    <div id="timersin"></div>
  </div>
  <div class="countdown units">
    <div><p>DAYS</p></div>
    <div><p>HOURS</p></div>
    <div><p>MINUTES</p></div>
    <div><p>SECONDS</p></div>
  </div>
</div>


<!-- fog -->
<div class="fogcontainer">
  <?php snippet('fog') ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="<?php echo url('assets/js/jquery.easypiechart.js') ?>"></script>

<script type="text/javascript">

// Set the date we're counting down to
  var date = "<?= $page->live()->toDate('Y-m-d') ?>" + "T" + "<?= $page->live()->toDate('H:m:s') ?>"
  var countDownDate = new Date(date).getTime();

 // Update the count down every 1 second
  var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // percentage
    var daysperc = days / 15 * 100;
    var hoursperc = hours / 24 * 100;
    var minutesperc = minutes / 60 * 100;
    var secondsperc = seconds / 60 * 100;

    // Output the result in an element with id="demo"
    // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    // + minutes + "m " + seconds + "s ";
    document.getElementById("timerdin").innerHTML = days;
    document.getElementById("timerhin").innerHTML = hours;
    document.getElementById("timermin").innerHTML = minutes;
    document.getElementById("timersin").innerHTML = seconds;

    $('#timerd').attr("data-percent",daysperc);
    $('#timerh').attr("data-percent",hoursperc);
    $('#timerm').attr("data-percent",minutesperc);
    $('#timers').attr("data-percent",secondsperc);

    $('.chart1').easyPieChart({
        //your options goes here
        barColor: '#f00',
			  trackColor: '#fff0',
        scaleLength: 0,
    });
    //update instance after 1 sec
    setTimeout(function() {
      $('.chart1').data('easyPieChart').update(dayssperc);
    }, 1000);
    $('.chart2').easyPieChart({
        //your options goes here
        barColor: '#f00',
			  trackColor: '#fff0',
        scaleLength: 0,
    });
    //update instance after 1 sec
    setTimeout(function() {
      $('.chart2').data('easyPieChart').update(hoursperc);
    }, 1000);
    $('.chart3').easyPieChart({
        //your options goes here
        barColor: '#f00',
			  trackColor: '#fff0',
        scaleLength: 0,
    });
    //update instance after 1 sec
    setTimeout(function() {
      $('.chart3').data('easyPieChart').update(minutesperc);
    }, 1000);
    $('.chart4').easyPieChart({
        //your options goes here
        barColor: '#f00',
			  trackColor: '#fff0',
        scaleLength: 0,
    });
    //update instance after 1 sec
    setTimeout(function() {
      $('.chart4').data('easyPieChart').update(secondsperc);
    }, 1000);



    // If the count down is over, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "EXPIRED";
    }
  }, 1000);


</script>
<!-- countdown ends -->

<?php snippet('end') ?>
