<section class="content-wrapper">
	<section class="centered-content">
		<article>
			darren 1
			 <div id="map" class="map"></div>
			     
		</article>
	</section>
</section>
<script type="text/javascript">

	var stroke = new ol.style.Stroke({color: 'black', width: 2});
	var fill = new ol.style.Fill({color: 'red'});

	var styles = {
	  'square': [new ol.style.Style({
		image: new ol.style.RegularShape(
		    /** @type {olx.style.RegularShapeOptions} */({
		      fill: fill,
		      stroke: stroke,
		      points: 4,
		      radius: 10,
		      angle: Math.PI / 4
		    }))
	  })],
	  'triangle': [new ol.style.Style({
		image: new ol.style.RegularShape(
		    /** @type {olx.style.RegularShapeOptions} */({
		      fill: fill,
		      stroke: stroke,
		      points: 3,
		      radius: 10,
		      rotation: Math.PI / 4,
		      angle: 0
		    }))
	  })],
	  'star': [new ol.style.Style({
		image: new ol.style.RegularShape(
		    /** @type {olx.style.RegularShapeOptions} */({
		      fill: fill,
		      stroke: stroke,
		      points: 5,
		      radius: 10,
		      radius2: 4,
		      angle: 0
		    }))
	  })],
	  'cross': [new ol.style.Style({
		image: new ol.style.RegularShape(
		    /** @type {olx.style.RegularShapeOptions} */({
		      fill: fill,
		      stroke: stroke,
		      points: 4,
		      radius: 10,
		      radius2: 0,
		      angle: 0
		    }))
	  })],
	  'x': [new ol.style.Style({
		image: new ol.style.RegularShape(
		    /** @type {olx.style.RegularShapeOptions} */({
		      fill: fill,
		      stroke: stroke,
		      points: 4,
		      radius: 10,
		      radius2: 0,
		      angle: Math.PI / 4
		    }))
	  })]
	};


	var styleKeys = ['x', 'cross', 'star', 'triangle', 'square'];
	var count = 250;
	var features = new Array(count);
	var e = 4500000;
	for (var i = 0; i < count; ++i) {
	  var coordinates = [2 * e * Math.random() - e, 2 * e * Math.random() - e];
	  features[i] = new ol.Feature(new ol.geom.Point(coordinates));
	  features[i].setStyle(styles[styleKeys[Math.floor(Math.random() * 5)]]);
	}

	var source = new ol.source.Vector({
	  features: features
	});

	var vectorLayer = new ol.layer.Vector({
	  source: source
	});

	var map = new ol.Map({
		target: 'map',
		layers: [
			new ol.layer.Tile({
				source: new ol.source.OSM()
			}),
			vectorLayer
		],
		view: new ol.View({
			center: ol.proj.fromLonLat([-2.071123, 54.498228]),
			zoom: 6
		})
	});
	
	map.getViewport().addEventListener('mousemove', function (e) {
		e.preventDefault();
		
		// Get possible clicked feature 
		var feature = map.forEachFeatureAtPixel(map.getEventPixel(e),
		    function (feature, layer) {
		        return feature;
		    }
		);
		
		// If feature
		if (feature) {
			console.info('sss');
		    // ...
		}
	});
	
	//Full Screen
	var myFullScreenControl = new ol.control.FullScreen();
	map.addControl(myFullScreenControl);
</script>
