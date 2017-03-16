$(document).foundation();

(function(){
	$('.thumbimg img').on('click', function () {
		$.getJSON('admin/phpscripts/ajaxQuery.php',{ photo:this.id}, function(data){
			//console.log(data);
			
			$('.imageName').text(data.gallery_title);
			$('.photoGallery img').attr('src', 'images/gallerypics/'+ data.gallery_img);
			$('.photoDesc p').text(data.gallery_desc);
			$('.photoCred').text('Photo by: '+data.gallery_photographer);
		});
	});

	$fade = $('.thumbimg');
	
	$fade.click(function(){
		$(this).fadeTo(1,0.5);
		$fade.not($(this)).fadeTo(1,1);
	});

})();

	//map pop out
	function popUp(url){
		newwindow = window.open(url,'test','height=500,width=800');
		if (window.focus){
			newwindow.focus()	
		}
		return false;
	}
	
	
	// map
(function(){
	var map = new google.maps.Map(document.querySelector('.map')), 
		loading = document.querySelector('.loading'),

		geocoder = new google.maps.Geocoder(),
		mapButton = document.querySelector('.drawRoute'),

		directionsService = new google.maps.DirectionsService(),
		directionsDisplay,
		locations = [],

		marker;

	function initMap(position) {
		yourLocation = { 
			lat: position.coords.latitude, 
			lng: position.coords.longitude
		};

		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsDisplay.setMap(map);

		map.setCenter({ lat: position.coords.latitude, lng: position.coords.longitude });

		map.setZoom(17);

		yourMarker = new google.maps.Marker({
			position : { lat: position.coords.latitude, lng: position.coords.longitude },
			map: map,
			icon: 'images/icons/home.png',
			title: 'Your Location'
		});
		
	var chantryIsland = new google.maps.Marker({
		position : {lat: 44.49008, lng: -81.40386 },
		map:map,
		title: 'Chantry Island Lighthouse',
		icon: 'images/icons/chantry.png'
	});

			var chantryInfo = '<div id="content">' + '<h2><b>Chantry Island Lighthouse</b></h2>' + '<p>Chantry Island is located on Lake Huron, just over a mile southwest of the Saugeen River mouth in Southampton, Ontario.</p>' + '</div>';
	
			var chantryWindow = new google.maps.InfoWindow({
				content: chantryInfo
			});
			
			chantryIsland.addListener('click', function() {
				chantryWindow.open(map, chantryIsland);		
			});
		
	
	var tourBase = new google.maps.Marker({
		position: {lat: 44.49996, lng: -81.37315},
		map:map,
		title: 'Chantry Island Tour Information',
		icon: 'images/icons/tourBase.png'
	});
	
			var tourInfo = '<div id="content">' + '<h2><b>Chantry Island Tour Base and Gift Shop</b></h2>' + '<p>Located at the south side of the Saugeen River at the harbour in Southampton. Gift shop and tour bookings available here. See <a href="#">www.ChantryIsland.com</a> for more information.</a></p>' + '</div>';
			
			var tourWindow = new google.maps.InfoWindow({
				content: tourInfo
			});
			
			tourBase.addListener('click', function() {
				tourWindow.open(map, tourBase);		
			});


	loading.classList.add('hide-loading');
	}
		


	function drawRoute() {
		var start = yourLocation;
		var end = new google.maps.LatLng(44.49996, -81.37315);
		var request = {
			origin: start,
			destination: end,
			travelMode: 'DRIVING'
		};

		directionsService.route(request, function(response, status) {
			if (status === 'OK') {
				var arrivalTime = (response.routes[0].legs[0].distance.value / 1000 / 110 * 60).toFixed(0);
				document.querySelector('#time').innerHTML = parseInt(arrivalTime / 60) + " h " + arrivalTime % 60 + " m";
				directionsDisplay.setDirections(response);
			}
		});
	}

	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(initMap, handleError);
	
	} else {
		console.log('This browser does not have geolocation');
	}

	function handleError(e) {
		console.log(e);
	}

	mapButton.addEventListener('click', drawRoute, false);
	
})();

