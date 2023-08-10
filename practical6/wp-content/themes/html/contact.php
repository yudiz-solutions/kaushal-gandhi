<?php
/*
Template Name: contact
*/
?>
<?php

get_header();

$contact_us = get_field('contact_us');
$assesment = get_field('assesment');

?>
<!--******************* Banner Section Start *********************-->
<div class="home-banner">
  <div class="banner" style="background: #5C5C5C url('<?php if (isset($contact_us['image']) && !empty($contact_us['heading1'])) { ?><?php echo $contact_us['image']['url']; ?><?php } ?>') no-repeat center center / cover;">
    <div class="container">
      <?php if (isset($contact_us['heading1']) && !empty($contact_us['heading1'])) { ?>
        <h1><?php echo $contact_us['heading1']; ?></h1>
      <?php } ?>
    </div>
  </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
  <section class="common-section contact-section">
    <div class="container-fluid">
      <div class="contact-right col-sm-6 col-sm-offset-6"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contact-form">
            <?php if (isset($contact_us['heading2']) && !empty($contact_us['heading2'])) { ?>
              <h3 class="blue-text"><?php echo $contact_us['heading2']; ?></h3>
            <?php } ?>
            <form action="#" method="post">
              <?php echo do_shortcode('[contact-form-7 id="241" title="contact"]'); ?>
            </form>
          </div>
        </div>
        <div class="col-sm-6 fill-mob">
          <div class="contact-info">
            <?php if (isset($contact_us['heading3']) && !empty($contact_us['heading3'])) { ?>
              <h3 class="blue-text"><?php echo $contact_us['heading3']; ?></h3>
            <?php } ?>
            <?php if (isset($contact_us['heading4']) && !empty($contact_us['heading4'])) { ?>
              <h4><?php echo $contact_us['heading4']; ?> </h4>
            <?php } ?>
            <?php if (isset($contact_us['paragraph1']) && !empty($contact_us['paragraph1'])) { ?>
              <?php echo $contact_us['paragraph1']; ?>
            <?php } ?>
            <?php if (isset($contact_us['paragraph2']) && !empty($contact_us['paragraph2'])) { ?>
              <?php echo $contact_us['paragraph2']; ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="map"></section>
  <section class="assessment-section">
    <?php echo do_shortcode('[assessment_data]'); ?>
  </section>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->
<?php get_footer(); ?>
<!-- Custom Map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script> -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtc0b_oAykroc2auPTfMoHDcbaESZzNqk&callback=initMap" type="text/javascript"></script>
<script type="text/javascript">
  function initMap() {
    var mapDiv = document.getElementById('map');
    var latlng = new google.maps.LatLng(43.648636, -79.381744); //     (Latitude and Longitude of your location)
    var map = new google.maps.Map(mapDiv, {
      center: latlng,
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.MAP
    });
    var marker = new google.maps.Marker({
      position: latlng,
      title: "My Location", // Title for your location(optional)
      icon: 'images/map-marker.svg' // Map marker image(optional)
    });
    marker.setMap(map);
    map.set('styles', [{
        "elementType": "geometry",
        "stylers": [{
          "color": "#f5f5f5"
        }]
      },
      {
        "elementType": "labels.icon",
        "stylers": [{
          "visibility": "off"
        }]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#616161"
        }]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [{
          "color": "#f5f5f5"
        }]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#bdbdbd"
        }]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
          "color": "#eeeeee"
        }]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#757575"
        }]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
          "color": "#e5e5e5"
        }]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#9e9e9e"
        }]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [{
          "color": "#ffffff"
        }]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#757575"
        }]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [{
          "color": "#dadada"
        }]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#616161"
        }]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#9e9e9e"
        }]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [{
          "color": "#e5e5e5"
        }]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [{
          "color": "#eeeeee"
        }]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
          "color": "#c9c9c9"
        }]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [{
          "color": "#9e9e9e"
        }]
      }
    ]);
  }
</script>
<!-- Sticky Js Included -->
<script type="text/javascript" src="js/sticky-kit.js"></script>
<script type="text/javascript">
  $(".assessment-section").stick_in_parent();
</script>
<!-- Sticky Js Included -->
<!--*********************** All End ************************-->
</body>

</html>