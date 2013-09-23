<?php  

	wp_footer();

	$location = get_field('location', 'option'); 
?>
	<script>
		
	if (Modernizr.touch){
	
		
	} else {
		
		function initialize() {
			var map;
			var marker;
			var gilderlocation = new google.maps.LatLng(<?php echo $location['coordinates'];?>);


			var gilder = 'custom_style';

			var featureOpts = [
			{
				stylers: [
				{ "hue": "#ff3300" },
				{ "lightness": 20 },
				{ "gamma": 0.32 },
				{ "saturation": -83 }

				]
			}
			];
			

			var mapOptions = {
				zoom: 16,
				center: gilderlocation,
				scrollwheel: false,
				mapTypeControlOptions: {
					mapTypeIds: [google.maps.MapTypeId.ROADMAP, gilder]
				},
				disableDefaultUI: true,
				mapTypeId: gilder
			};

			map = new google.maps.Map(document.getElementById('js-map'),
				mapOptions);

			marker = new google.maps.Marker({
			    map:map,
			    icon:'<?php bloginfo("template_directory") ?>/images/marker.png',
			    animation: google.maps.Animation.DROP,
			    position: gilderlocation
			});
			
			// google.maps.event.addListener(marker, 'click', function() {
			//     window.open('<?php echo $mapLink ?>','_newtab');
			// });

			var styledMapOptions = {
				name: 'Custom Style'
			};

			var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

			map.mapTypes.set(gilder, customMapType);
		}
		
		function loadScript() {
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
		      'callback=showMap';
			document.body.appendChild(script);
		}
		function showMap() {
			//initialize();
		}
	
		window.onload = loadScript;
	
	}
	
	</script>
	
	</body>
</html>
