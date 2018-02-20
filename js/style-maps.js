function initMap() {
    var uluru = {lat: -5.0795554, lng: -42.8343473};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  };
