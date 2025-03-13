<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>track oder</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css" />
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Logis</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="pricing.php">Pricing</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="track-your-order.php" class="active">Order</a></li>
          <li><a class="get-a-quote" href="get-a-quote.php">Get a Quote</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Track Your Shipment</h2>
              <p class="text-light">Track your shipment in real-time by entering your unique tracking ID.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Track Shipment</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
      <div class="container" data-aos="fade-up">
        
        <!-- User Information Form -->
        <div id="user-info-form">
          <h3>Enter Your Details</h3>
          <form id="user-form">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name:</label>
              <input type="text" id="name" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
              <label for="contact" class="form-label">Contact Info:</label>
              <input type="text" id="contact" class="form-control" placeholder="Enter phone or email" required>
            </div>
            <div class="mb-3">
              <label for="weight" class="form-label">Load Weight (Kg):</label>
              <input type="number" id="weight" class="form-control" placeholder="Enter weight in kg" required>
            </div>
            <div class="mb-3">
              <label for="warehouse" class="form-label">Choose Warehouse:</label>
              <select id="warehouse" class="form-select">
                <option value="-1.299477,36.785817" selected>Ngong Road</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="destination" class="form-label">Enter Destination:</label>
              <input type="text" id="destination" class="form-control" placeholder="e.g. Westlands, Nairobi" required>
            </div>
            <button type="submit" class="btn btn-primary">Generate Tracking ID</button>
          </form>
        </div>
    
        <!-- Enter Tracking ID Form -->
        <div id="tracking-form" style="display: none;">
          <h3>Enter Your Tracking ID</h3>
          <p>Please copy your tracking ID and use it to check the status of your shipment.</p>
          <p><strong>Your Tracking ID: <span id="tracking-id"></span></strong></p>
          <input type="text" id="tracking-input" class="form-control" placeholder="Enter Tracking ID" required>
          <button id="track-btn" class="btn btn-success mt-2">Track Shipment</button>
        </div>
    
        <!-- MapLibre Container -->
        <div id="map-container" style="width: 100%; height: 500px; display: none;"></div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.php" class="logo d-flex align-items-center">
            <span>Logis</span>
          </a>
          <p>For all your logistics needs, connect with us on our social media channels. Our team is here to assist you and ensure your shipments are delivered on time and with care. Follow us on Twitter, Facebook, Instagram, and LinkedIn to stay up-to-date on our services and special offers.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Storage</a></li>
            <li><a href="#">Logistics</a></li>
            <li><a href="#">Trucking</a></li>
            <li><a href="#">Packaging</a></li>
            <li><a href="#">Warehousing</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            P.O. Box 1234<br>
            Kenya<br>
            Nairobi, Ngong Road<br><br>
            <strong>Phone:</strong> +254 79 2679 384<br>
            <strong>Email:</strong>  muhidinosman@gnail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Logis</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by DevMic
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<!-- Include MapLibre and Nominatim API for Geocoding -->

<link rel="stylesheet" href="https://unpkg.com/maplibre-gl/dist/maplibre-gl.css" />
<script src="https://unpkg.com/maplibre-gl@2.1.9/dist/maplibre-gl.js"></script>
<script>
  let map;
  let generatedTrackingId;
  let storedWarehouse, storedDestination, storedWeight;

  function initMap() {
    console.log("Initializing Map...");
    map = new maplibregl.Map({
      container: 'map-container',
      style: {
        version: 8,
        sources: {
          osm: {
            type: 'raster',
            tiles: ["https://a.tile.openstreetmap.org/{z}/{x}/{y}.png"],
            tileSize: 256
          }
        },
        layers: [
          {
            id: "osm-layer",
            type: "raster",
            source: "osm",
            minzoom: 0,
            maxzoom: 19
          }
        ]
      },
      center: [36.785817, -1.299477],
      zoom: 13
    });
    
  }

  document.getElementById("user-form").addEventListener("submit", function(event) {
    event.preventDefault();
    generatedTrackingId = "TRK" + Math.floor(100000 + Math.random() * 900000);
    storedWarehouse = document.getElementById("warehouse").value.split(",");
    storedDestination = document.getElementById("destination").value;
    storedWeight = document.getElementById("weight").value;
    
    document.getElementById("tracking-id").innerText = generatedTrackingId;
    document.getElementById("user-info-form").style.display = "none";
    document.getElementById("tracking-form").style.display = "block";
  });

  document.getElementById("track-btn").addEventListener("click", async function() {
    let enteredTrackingId = document.getElementById("tracking-input").value;
    if (enteredTrackingId === generatedTrackingId) {
      document.getElementById("tracking-form").style.display = "none";
      document.getElementById("map-container").style.display = "block";
      
      initMap();
      
      new maplibregl.Marker().setLngLat([parseFloat(storedWarehouse[1]), parseFloat(storedWarehouse[0])]).addTo(map);
      
      const geoResponse = await fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(storedDestination)}`);
      const geoData = await geoResponse.json();
      
      if (geoData.length > 0) {
        let destCoords = [parseFloat(geoData[0].lon), parseFloat(geoData[0].lat)];
        new maplibregl.Marker().setLngLat(destCoords).addTo(map);
        
        map.addLayer({
          "id": "route",
          "type": "line",
          "source": {
            "type": "geojson",
            "data": {
              "type": "Feature",
              "geometry": {
                "type": "LineString",
                "coordinates": [[parseFloat(storedWarehouse[1]), parseFloat(storedWarehouse[0])], destCoords]
              }
            }
          },
          "layout": { "line-join": "round", "line-cap": "round" },
          "paint": { "line-color": "#007bff", "line-width": 4 }
        });
      } else {
        alert("Destination not found. Please enter a valid place name.");
      }
    } else {
      alert("Invalid Tracking ID. Please enter the correct one.");
    }
  });
</script>
<script src="assets/js/track-order.js"></script> 
</body>
</html>