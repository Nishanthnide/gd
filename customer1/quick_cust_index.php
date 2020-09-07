<?php
require('connect.php');
if(isset($_SESSION['cusername']))
{
	$ausername=$_SESSION['cusername'];
}
elseif(isset($_SESSION['ausername']))
{
	$ausername=$_SESSION['ausername'];
}

$getmechcount=mysqli_query($connection,"SELECT * FROM customer");
$mcount=mysqli_num_rows($getmechcount);

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/polygon/admindek/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:07:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Gear Doctor</title>
<link rel="icon" type="image/png" sizes="16x16" href="png/GD-logo-dark.png">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="css/feather.css">

<link rel="stylesheet" type="text/css" href="css/font-awesome-n.min.css">

<link rel="stylesheet" href="css/chartist.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/widget.css">
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css' rel='stylesheet' />

</head>
    <style>
    body {
        margin: 0;
        padding: 0;
      }
        #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
      }
      .marker {
        background-image: url('../plugins/images/mech-icon.png');
        background-size: cover;
        width: 70px;
        height: 70px;
        border-radius: 20px;
        cursor: pointer;
      }</style>
<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <?php include 'header1.php'; ?>






<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<?php include 'left-sidebar.php'; ?>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-home bg-c-blue"></i>
<div class="d-inline">
<h5>Dashboard</h5>
    <span>You are logged-in as one of our special customer.</span>
    
</div>
</div>
</div>

</div>
</div>
    


    

<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">

                <div class="row">

                    <div class="col-xl-12 col-md-6">
                        <div class="card card-inverse">
							<img id="theImgId" class="card-img" src="../plugins/images/cards/bg5.png" height="120" alt="Card image">
							     <div class="card-img-overlay" style="padding-top: 5px">
                                    <p class="card-text"><small class="text-white">  </small></p>
								    <h4 class="card-title text-uppercase" style="color:white">Hello..! Nishanth</h4>
								    <p class="card-text" style="color:white">We are happy to serve you.<br>-Gear Doctor</p>
                                
							     </div>
                        </div>
                    </div>
    
                    
                </div>
                <div class="row p-b-10">
					<div class="col-md-12 col-sm-10 hvr-wobble-horizontal">
						<div class="card card-inverse">
                            <div id="map" style="width: 100%; height: 360px;"></div>                            
						</div>
                        
					</div>
				</div>

            </div>
        </div>
    </div>
</div>
</div>


</div>
</div>
</div>
</div>

<?php include 'jslink.php'; ?>
    <script>

mapboxgl.accessToken = 'pk.eyJ1IjoibmlzaGFudGhuaWRlIiwiYSI6ImNrOW50bTl5bzAzeWUzZm11Nmlzcm8zM2gifQ.3bULmWXuE8NCNj9Mg2rUQA';

var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/nishanthnide/cka6gai3u0j981itmh90q9wnr',
  center: [77.5946, 12.9716],
  zoom: 11
});


    
// code from the next step will go here!
var geojson = {
  type: 'FeatureCollection',
  features: [{
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [77.5468, 12.9255]
    },
    properties: {
      title: 'Mapbox',
      description: 'Banshankari'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [77.5763, 12.9709]
    },
    properties: {
      title: 'Mapbox',
      description: 'Chickpet.'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [77.5655, 12.9410]
    },
    properties: {
      title: 'Mapbox',
      description: 'B.M.S College of Engineering'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [77.6245, 12.9352]
    },
    properties: {
      title: 'Mapbox',
      description: 'Kormangala.'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [77.6408, 12.9784]
    },
    properties: {
      title: 'Mapbox',
      description: 'IndhiraNagar.'
    }
  },
  {
    type: 'Feature',
    geometry: {
      type: 'Point',
      coordinates: [77.5530, 12.9982]
    },
    properties: {
      title: 'Mapbox',
      description: 'Rajajinagar'
    }
  }]
};
    
map.addControl(
    new mapboxgl.GeolocateControl({
        positionOptions: {
            enableLowAccuracy: true
        },
        trackUserLocation: true
    })
);

    
    // add markers to map
geojson.features.forEach(function(marker) {

  // create a HTML element for each feature
  var el = document.createElement('div');
  el.className = 'marker';

  // make a marker for each feature and add to the map
  new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .addTo(map);
});
</script>
    
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    </body>

</html>
