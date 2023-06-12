export function handleLocationError(error) {
    switch (error.code) {
      case error.PERMISSION_DENIED:
        console.log("L'utilisateur a refusé la demande de géolocalisation.");
        break;
      case error.POSITION_UNAVAILABLE:
        console.log("L'emplacement de l'utilisateur n'est pas disponible.");
        break;
      case error.TIMEOUT:
        console.log("La demande de géolocalisation a expiré.");
        break;
      default:
        console.log("Une erreur inconnue s'est produite lors de la géolocalisation.");
        break;
    }
  }
  
  export function showMap(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
  
    var map = L.map('map').setView([latitude, longitude], 13);
  
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; OpenStreetMap contributors',
      maxZoom: 18
    }).addTo(map);
  
    L.marker([latitude, longitude]).addTo(map);
  }
  
  export function getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showMap, handleLocationError);
    } else {
      console.log("La géolocalisation n'est pas prise en charge par ce navigateur.");
    }
  }
  
  export function setupSlidesScroll() {
    const slides = document.querySelector(".slides");
  
    slides.addEventListener("scroll", () => {
      const slideWidth = slides.clientWidth;
      const slideIndex = Math.round(slides.scrollLeft / slideWidth);
  
      slides.style.setProperty("--slide-index", slideIndex);
    });
  }
  
  export function setupLocationButton() {
    document.addEventListener('DOMContentLoaded', function() {
      var getLocationBtn = document.getElementById('getLocationBtn');
      getLocationBtn.addEventListener('click', getLocation);
    });
  }
  