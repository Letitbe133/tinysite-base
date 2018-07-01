document.addEventListener('DOMContentLoaded', function() {

  // Initialisation menu
  var navElems = document.querySelectorAll('.sidenav');
  var sidenav = M.Sidenav.init(navElems);

  // Initialisation scrollSpy
  var scrollElems = document.querySelectorAll('.scrollspy');
  var options = {
    activeClass: "active-menu",
    scrollOffset: 64 };
  var scrollSpy = M.ScrollSpy.init(scrollElems, options);

  // Initialisation modal
  var modalElems = document.querySelectorAll('.modal');
  var modal = M.Modal.init(modalElems);

  // Traitement du formulaire en Ajax
  var contactForm = document.getElementById('contactForm')
  var submitBtn = document.getElementById('submit');

  contactForm.addEventListener('submit', (e) => {
    submit.disabled = true
    var formData = new FormData(contactForm);
    // formData.append('nom', document.getElementById('nom').value)
    // formData.append('email', document.getElementById('email').value)
    // formData.append('objet', document.getElementById('objet').value)
    // formData.append('message', document.getElementById('message').value)

    for (var pair of formData.entries()) {
      console.log(pair[0]+ ', ' + pair[1]); 
  }

    // console.log(formData)

    fetch('contact.php', {
      method: 'post',
      body: formData
    })
      .then(res => {
        console.log(res)
        // response.text()
      })
      .then(data => {
        console.log('Data returned', data)
      })

    e.preventDefault()

    contactForm.reset()

    // submit.disabled = false

  })

  // Implémentation lazyload

var windowHeight = window.outerHeight,
    // on cible uniquement les images qui ont une classe .lazy
    images    = document.querySelectorAll(".lazy"),
    imgLength = images.length

window.addEventListener('scroll', function() {
    var curPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop

  for (var i=0; i<imgLength; i++) {
      imgPosition = images[i].offsetTop

    if (curPos>= (imgPosition - windowHeight)) {
      var targetSrc = images[i].getAttribute('data-src')
      var targetAlt = images[i].getAttribute('data-alt')

      if(targetSrc.length>0) {
        images[i].setAttribute('src',targetSrc)
        images[i].setAttribute('alt', targetAlt )
      }
    }
  }

})

  // Implementation Leaflet / Mapbox

  // création et positionnement de la carte
  var clientMap = L.map('map', {scrollWheelZoom: false}).setView([51.505, -0.09], 13);
  // création et positionnement du marqueur
  var marker = L.marker([51.5, -0.09]).addTo(clientMap);
  // ajout du popup
  marker.bindPopup("<b>Hello ! We are here");
  // ajout du tooltip
  marker.bindTooltip("Hello ! Come and visit us !");
  // ajout du fond de carte mapbox
  L.tileLayer('https://api.mapbox.com/styles/v1/letitbe133/cjj2sq3041yo62sn3tsa22aez/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoibGV0aXRiZTEzMyIsImEiOiJjajg3b2MydWMxM3hvMzJtcDZ6bHVlM3Y1In0.ltE1CivhBmTQXTEAA7r6NQ', {
  // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  maxZoom: 18,
  id: 'mapbox.terminal',
  accessToken: 'pk.eyJ1IjoibGV0aXRiZTEzMyIsImEiOiJjajg3b2MydWMxM3hvMzJtcDZ6bHVlM3Y1In0.ltE1CivhBmTQXTEAA7r6NQ'
  }).addTo(clientMap);

});

