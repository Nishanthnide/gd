<?php
//include '../login/accesscontrolstaff.php';

?>
<!DOCTYPE html>
<!--
   This is a starter template page. Use this page to start your new project from
   scratch. This page gets rid of all links and provides the needed markup only.
   -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gear Doctor">
    <meta name="author" content="Nishanth Bhat, Vardhini">
    <!--csslink.php includes fevicon and title-->
    <?php include 'assets/csslink.php'; ?>
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	<link href="../plugins/css/hover.css" rel="stylesheet" media="all">
     <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css' rel='stylesheet' />
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
      }
    </style>
</head>

<body class="fix-sidebar">
   <!--header.php includes preloader, top navigarion, logo, user dropdown-->
    <!--div id wrapper in header.php-->
    <!--left-sidebar.php includes mobile search bar, user profile, menu-->
    <?php include 'assets/header.php';
	include 'assets/left-sidebar.php';
	include 'assets/breadcrumbs.php';
	?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid p-b-0">
                <div class="row bg-title">
					<!--add this line to include bg image to title: style="background:url(../plugins/images/heading-title-bg.jpg) no-repeat center center /cover;" -->
                    <!-- .page title -->
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" >
                        <h4 class="page-title">Customer Dashboard</h4>
                    </div>
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="../index.html" target="_blank" class="btn btn-info pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Home</a>
                        <?php echo breadcrumbs(); ?>
                    </div>
                    <!-- /.breadcrumb -->
                </div>
                <!--DNS added Dashboard content-->
                <!--row -->
				
				<div class="row p-b-10">
					<div class="col-md-12 col-sm-12 hvr-wobble-horizontal">
						<div class="card card-inverse">
                            <br>
                            <div id="map" style="width: 100%; height: 500px;"></div>                                
						</div>
					</div>
				</div>
	
            </div>
    </div>
    <?php include'assets/jslink.php'; ?>
    <!--Counter js -->
    <script>

mapboxgl.accessToken = 'pk.eyJ1IjoibmlzaGFudGhuaWRlIiwiYSI6ImNrOW50bTl5bzAzeWUzZm11Nmlzcm8zM2gifQ.3bULmWXuE8NCNj9Mg2rUQA';

var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/nishanthnide/cka6gai3u0j981itmh90q9wnr',
  center: [77.5946, 12.9716],
  zoom: 12
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
    <!-- Custom Theme JavaScript -->
    <script src="../plugins/js/dashboard3.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){  
			$('.Hoveranimated').hover(function(){
				$(".Hoveranimatedoc").removeClass("bg-black").addClass("bg-success");
				$(".Hoveranimatedoc").removeClass("fa-calendar-alt").addClass("fa-eye");
			},
			function(){
				$(".Hoveranimatedoc").removeClass("bg-success").addClass("bg-black");
				$(".Hoveranimatedoc").removeClass("fa-eye").addClass("fa-calendar-alt");
			}
									
			)
			
			$('.Hoveranimatep').hover(function(){
				$(".Hoveranimatepat").removeClass("bg-black").addClass("bg-success");
				$(".Hoveranimatepat").removeClass("fa-wheelchair").addClass("fa-plus");
			},
			function(){
				$(".Hoveranimatepat").removeClass("bg-success").addClass("bg-black");
				$(".Hoveranimatepat").removeClass("fa-plus").addClass("fa-wheelchair");
			}
									
			)
				 
			$('.Hoveranimates').hover(function(){
				$(".Hoveranimatestaff").removeClass("bg-black").addClass("bg-success");
				$(".Hoveranimatestaff").removeClass("far fa-envelope").addClass("fa fa-eye");
			},
			function(){
				$(".Hoveranimatestaff").removeClass("bg-success").addClass("bg-black");
				$(".Hoveranimatestaff").removeClass("fa fa-eye").addClass("far fa-envelope");
			}
									
			)
					
			$('.Hoveranimatew').hover(function(){
				$(".Hoveranimatewrd").removeClass("bg-black").addClass("bg-success");
				$(".Hoveranimatewrd").removeClass("fa-user-plus").addClass("fa-plus");
			},
			function(){
				$(".Hoveranimatewrd").removeClass("bg-success").addClass("bg-black");
				$(".Hoveranimatewrd").removeClass("fa-plus").addClass("fa-user-plus");
			}
									
			)
			
		})
	</script>
	
	<script>
		function openlink(url){
			
			var win=window.open(url, '_blank');
			win.focus();
			
		}
	</script>
    <script>
		$(window).load(function() {

			var viewportWidth = $(window).width();
			if (viewportWidth < 750) {
					var theImg = document.getElementById('theImgId');
		theImg.height = 180;
				document.getElementById('cText').style.fontSize = "80%";
				document.getElementById('wText').style.fontSize = "86%";
			}

			$(window).resize(function () {

				if (viewportWidth < 750) {
					var theImg = document.getElementById('theImgId');
		theImg.height = 180;
				document.getElementById('cText').style.fontSize = "80%";
				document.getElementById('wText').style.fontSize = "86%";
				}
			});
		});
	</script> 
   
</body>

</html>
