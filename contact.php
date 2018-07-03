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
        <div id="message" class="text-left"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 input" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr input" placeholder="Email Address..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 input" placeholder="Project Details..."></textarea>
          <button type="submit" id="submit" name="send" class="submitBnt">
            Send <i class="fa fa-paper-plane fa-lg" aria-hidden="true"></i>&nbsp;
            <img class="submit-loader" src="images/ajax-loader.gif" style="width:20px; height:20px; display:none;">
          </button>
          <div id="simple-msg"></div>
        </form>
      </div>
      <div class="col-sm-6 conForm">
        <div class="well contact-info">
          <h4>Finding me is easy!</h4>
          <br>
          <p><b>Call me @</b> <a href="tel:+919730748660">+91-9730748660</a></p>
          <p><b>Email me On</b> <a href="mailto:d4dev@webiqon.com">d4dev@webiqon.com</a></p>
          <p><b>Skype me On</b> <a href="skype:digvj1992?call">digvj1992</a></p>
          <div class="separator"></div>
          <h4>See me on Map</h4>
          <br>
          <a href="#">
            <p class="pin"><i class="fa fa-map-marker" aria-hidden="true"></i></p>
          </a>
          <br>
          <small>Pune, India<br>411045</small>
          <br><br>
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
      e.preventDefault();
      
      $('#cform .input').css('border', '#dddddd 1px solid');
      $('#cform #submit').attr('disabled', 'disabled');
      $('.submit-loader').show();
      $.ajax({
        url: "php/contact.php",
        method: "POST",
        data: {
          name: $('#name').val(),
          email: $('#email').val(),
          comments: $('#comments').val()
        },
        success: function(response) {
          console.log(response);
          $('#cform #submit').removeAttr('disabled');
          $('.submit-loader').hide();
          if(response.status == 'success') {
            swal("I got your message!", response.message, "success").then((value) => {
              location.href = "/";
            });
          } else if(response.status == 'fail') {
            $('#message').html('<div class="alert alert-danger alert-dismissible">'+
              '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
              '<strong>Failed!</strong> &nbsp;'+response.message+'</div>');
            $('#cform .input[name='+response.field+']').css('border', '1px solid #A94442');
            $('#cform .input[name='+response.field+']').focus();
            $('html, body').animate({ scrollTop: $("#message").offset().top - 100 }, 1000);
          } else {
            $('#message').html('<div class="alert alert-danger alert-dismissible">'+
              '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+
              '<strong>Failed!</strong> &nbsp;Something went wrong!</div>');
            $('html, body').animate({ scrollTop: $("#message").offset().top - 100 }, 1000);
          }
        }
      });
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