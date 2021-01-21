<?php include('php/contactmail.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '682339515822965'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=682339515822965&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    </head>
<body>
    <!-- multistep form -->
    <div class="col s12 z-depth-6 card-panel">
    <div class="row">
    <form class="col s12" method="POST" name="contactform" id="contactform">
      <div class="row">
        <div class="input-field col s6">
          <input  name="full_name" id="full_name" type="text" class="validate">
          <label for="first_name">Full Name</label>
        </div>
        <div class="input-field col s6">
          <input id="phone_number" name="phone" type="text" class="validate">
          <label for="phone_number">Phone Number</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="state" type="text" name="state" class="validate">
          <label for="state">State Of Delivery</label>
        </div>
        <div class="input-field col s12 m6">
            <h4>WAEC Bundle</h4>
    <select class="browser-default" name="bundle">
      <option value="" disabled selected>Choose your Bundle</option>
      <option value="waec_Science_Bundle" data-icon="images/sample-1.jpg">Science Bundle &#8358;9,500</option>
      <option value="waec_Art_Bundle" data-icon="images/office.jpg">Art Bundle &#8358;9,500</option>
      <option value="waec_commercial_Bundle" data-icon="images/yuna.jpg">Commercial Bundle &#8358;9,500</option>
    </select>
    <!-- <label>Images in select</label> -->
  </div>
  <div class="input-field col s12 m6">
      <h4>JAMB Bundle</h4>
    <select class="browser-default" name="bundle">
      <option value="" disabled selected>Choose your Bundle</option>
      <option value="Jamb_Science_Bundle" data-icon="images/sample-1.jpg" class="left">Science Bundle &#8358;7,500</option>
      <option value="Jamb_social_Science_Bundle" data-icon="images/office.jpg" class="left">Social Science Bundle &#8358;7,500</option>
      <option value="jamb_art_Bundle" data-icon="images/yuna.jpg" class="left">Art Bundle &#8358;7,500</option>
    </select>
    <!-- <label>Images in select</label> -->
  </div>
  <div class="g-recaptcha" data-sitekey="6Lflb7UUAAAAAAatiqb1FywgTX6TpXqlohBGs2qs"></div>
                                <div id="mail-status"></div>
  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>

      <!-- <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
        </div>
      </div> -->
    </form>
  </div>
</div>
<!-- <!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!-- <script type="text/javascript" src="js/main.js"> -->
    <script>
        $(document).ready(function(e) {
            $('select').formSelect();
            $("#contactform").on('submit', (function(e) {
                e.preventDefault();
                $("#mail-status").hide();
                $('#send-message').hide();
                $('#loader-icon').show();
                $("#contactform").show();
                $.ajax({
                    url: "./php/contactmail.php",
                    type: "POST",
                    dataType: 'json',
                    data: {
                        "name": $('input[name="name"]').val(),
                        "email": $('input[name="email"]').val(),
                        "phone": $('input[name="phone"]').val(),
                        "state": $('input[name="state"]').val(),
                        "bundle": $('input[name="bundle"]').val(),
                        "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
                    },
                    success: function(response) {
                        $("#mail-status").show();
                        $('#loader-icon').hide();
                        if (response.type == "error") {
                            $('#send-message').show();
                            $("#mail-status").attr("class", "error");
                        } else if (response.type == "message") {
                            $('#send-message').hide();
                            $("#mail-status").attr("class", "success");
                        }
                        $("#mail-status").html(response.text);
                    },
                    error: function() {}
                });
            }));
        });
    </script>
 
</script>
</body>

</html>