<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Div, initial-scale=1.0">
    <link rel = "icon" href = "images\LOGOF.png" type = "image/x-icon">
    <link rel="stylesheet" href="stylesheet\stylesheet.php">
    <title>TechNoob</title>
    <style>
      #map 
      {
        height: 18vh;
        width: 48%;
        float: right;
      }
</style>
</head>
<body>
    <div class="header-nav">
    <nav>
            <a href="main.php" img><img  src="images\LOGOF.png" alt="lol" width="100" height="90"></a>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="aboutus.php">About</a></li>
            </ul>
        </nav>

        <div class="mysign">
            <h2>About TechNoob</h2>
            <p style="text-align:justify;"> Welcome to TechNoob, your number one source for all problems related to Mobile Phones, Laptop, Tabs and other gadgets. We're dedicated to providing you the very best of Mobile Repairing, with an emphasis on Quality, Insurance, Delivery.
Founded in 2020 by Group of 4, TechNoob has come a long way from its beginnings in Islamabad. When Founder's first started out, their passion for Mobile Solutions drove them to start their own business.
We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
<br>
<br>
Sincerely,<br>
Team TechNoob
            </p>
        </div>
    </div>

    <div class="footer">

        <div class ="footer1">
          <a href="https://www.facebook.com/"><li><img src="images\f.png" alt="not available"></li></a>
            <a href="https://www.instagram.com/"><li><img src="images\i.png" alt="not available"></li></a>
             <a href="https://www.twitter.com/"><li><img src="images\t.png" alt="not available"></li></a>
               <p>Views</p>  <p ><span><a href="https://www.webfreecounter.com/" target="_blank"><img style=" width:100px;" src="https://www.webfreecounter.com/hit.php?id=gvapndp&nd=6&style=93" border="0" alt="hit counter"></a>
<!-- End of WebFreeCounter Code --></span></p>
               <p> &copy; Copyright 2020 TechNoob.inc  All Rights Reserved. </p>  <!-- Start of WebFreeCounter Code -->

               
          </div>
<div class="footer2">
<p style="color:#FFF; text-align:right; padding-right:20%;">Find us</p>
<div id="map">
       
    <script>
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Our Location.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyD9957hg1TQGqzuPBWpML4FJoJQv2equRw&callback=initMap">
    </script>   
    </div>    
</div>

</div>
       
</body>
</html>