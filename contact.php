<?php
	include_once('layouts/header.php');
?>
<!-- header section -->
<section class="innerbanner" role="banner">
  <?php
		include_once('layouts/nav.php');
	?>
    
  <!-- banner text -->
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <div class="innerbanner-text text-center">
        <p>Contact</p>
        <!-- banner text --> 
      </div>
    </div>
  </div>
</section>
<!-- header section --> 
<!-- description text section -->
<section id="inner-description" class="section inner-description">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 text-center">
      <p>I am honest, discreet and always focus on your goals. If you are looking for a strategist and experienced web developer, just leave me a message and I'll contact you soon.</p>
      <!--contact form start-->
      <div class="col-sm-6 conForm">
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Project Details..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
          <div id="simple-msg"></div>
        </form>
      </div>
      <div class="col-sm-6 conForm">
        <div class="well contact-info">
          <h4>Finding me is easy!</h4>
          <br>
          <p><b>Call me @</b> <a href="tel:+919730748660">+91-9730748660</a></p>
          <p><b>Email me On</b> <a href="mailto:touch@d4dev.com">touch@d4dev.com</a></p>
          <p><b>Skype me On</b> <a href="skype:digvj1992?call">digvj1992</a></p>
          <div class="separator"></div>
          <h4>See me on Map</h4>
          <br>
          <a href="#">
            <p class="pin"><i class="fa fa-map-marker" aria-hidden="true"></i></p>
          </a>
          <br>
        </div>
      </div>
      <!--contact form end--> 
    </div>
  </div>
</section>

<div class="hide">
  <div id="map"></div>
</div>

<?php
    include_once('layouts/footer.php');
?>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIg6p2L_-1ScLpGirtw2dMkWaYee5VoGE&callback=initMap">
</script>

<script>
  $(document).ready(function() {
    $('#map').fancybox();
  
    $('.pin').click(function(e) {
      e.preventDefault();
      $('#map').trigger('click');
    });

    // Submit contact form
    $('#cform').submit(function(e) {
      // e.preventDefault();

      // $.ajax({

      // });
    });
  });

  function initMap() {
    var myLatLng = {lat: 18.543672, lng: 73.799385};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Hello World!'
    });
  }
  
</script>