<script>
    // feather icons
    feather.replace();

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
            });
        });
    });
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      // var uluru = {lat: -25.344, lng: 131.036};
      var uluru = { lat: -3.71839, lng: -38.5434 };
      // The map, centered at Uluru
      var map = new google.maps.Map(
        document.getElementById('map'), { zoom: 4, center: uluru });
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({ position: uluru, map: map });
    }
  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap">
  </script>
  <div class="foo">
  <div class="cidademain">
    <div class="cidade"></div>
    <div class="cidade2"></div>
</div>

<div class="cidadeinfo">
    <div class="cidadeinforight">
        <p>© 2023 VAI P'RONDE todos os direitos reservados.</p>
    </div>
    <div class="cidadeinfo-left">
        <p>Tema <a href="#" target="_blank">VAI P'RONDE?</a></p>
    </div>
</div>
</div>
</body>
<footer>
<!-- Seus elementos de footer aqui -->
</footer>

</body>

</html>