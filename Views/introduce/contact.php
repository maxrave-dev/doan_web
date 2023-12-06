
<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thông tin liên hệ</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> // </span>Liên hệ</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- contact content section start -->
<div class="pages contact-page section-padding">
	<div class="container text-center">
		<div class="row">
			<div class="col-sm-12">
				<div class="map mb-3">
					<div id="map"></div>
				</div>
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-sm-10 col-text-center">
				<div class="contact-details">
					<div class="row">
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="fa-solid fa-map"></i>
								<p>279 Nguyễn Tri Phương, Quận 10, TPHCM</p>
								<p>Đại học Kinh tế TPHCM</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="fa-solid fa-phone"></i>
								<p>(+84) 348546203</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="single-contact">
								<i class="fa-solid fa-mail-bulk"></i>
								<p>ndtminh2608@gmail.com</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact content section end -->
<!--OSM-->
<script src="/public/leaflet/leaflet-src.js"></script>
<script>
    // Where you want to render the map.
    var element = document.getElementById('map');

    // Create Leaflet map on map element.
    var map = L.map(element);

    // Add OSM tile layer to the Leaflet map.
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Target's GPS coordinates.
    var target = L.latLng('10.761180328757678', '106.66853262711342');

    // Set map's center to target with zoom 14.
    map.setView(target, 14);
    var myIcon = L.icon({
        iconUrl: '/public/img/map-marker.png',
        iconSize: [30, 55],
        iconAnchor: [0, 0],
    });

    // Place a marker on the same location.
    L.marker(target, {icon: myIcon}).addTo(map);
</script>
