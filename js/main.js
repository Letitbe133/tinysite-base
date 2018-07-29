document.addEventListener('DOMContentLoaded', function() {

  /////////////////////////////////////
  ////////// Initialisations //////////
  /////////////////////////////////////

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

  // Initialisation des hauteurs de cartes

  var heights = [], maxHeight

  // calcul de la hauteur max
  function getMaxHeight(targets) {
    targets.forEach(function(target) {
    heights.push(target.clientHeight)
  })
    maxHeight = Math.max(...heights)
    return maxHeight
  }

  // égalisation des hauteurs
  function setHeight(selector) {
    var targets = document.querySelectorAll (selector)
    getMaxHeight(targets)
    targets.forEach(function(target) {
      target.style.height = maxHeight + 'px'
    })
  }

  // appel de la fonction avec en paramètre le sélecteur css
  setHeight('.card')

  // Implementation bouton mail
  var mailElems = document.querySelectorAll('.fixed-action-btn');
  var options = {
    direction: 'left',
    hoverEnabled: true
  }
  var mailButton = M.FloatingActionButton.init(mailElems, options);

  // Implementation slider témoignages

  // Sélection du slider
  var sliderElems = document.querySelector('.slider')

  // options du slider
  var options = {
    indicators: false,
    height: 200,
    interval: 3000
  }
  
  // Variable pour stocker les témoignages
  var testimonials = [
    {
      author: 'Nom 1',
      comment: 'Comment 1'
    },
    {
      author: 'Nom 2',
      comment: 'Comment 1'
    },
    {
      author: 'Nom 3',
      comment: 'Comment 1'
    }
  ]
  
  testimonials.forEach(function(testimonial) {
    var target = document.querySelector('.slides')
    target.innerHTML += "<li><h4>" + testimonial.author + "</h4><p>" + testimonial.comment + "</p></li>"
  })
  
  // Initialisation du slider
  var slider = M.Slider.init(sliderElems, options)
  


  // Implementation AJAX - Non fonctionnel pour l'instant

  // Traitement du formulaire en Ajax
  // var contactForm = document.getElementById('contactForm')
  // var submitBtn = document.getElementById('submit');

  // contactForm.addEventListener('submit', (e) => {
  //   submit.disabled = true
  //   var formData = new FormData(contactForm);
  //   // formData.append('nom', document.getElementById('nom').value)
  //   // formData.append('email', document.getElementById('email').value)
  //   // formData.append('objet', document.getElementById('objet').value)
  //   // formData.append('message', document.getElementById('message').value)

  //   for (var pair of formData.entries()) {
  //     console.log(pair[0]+ ', ' + pair[1]); 
  // }

  //   // console.log(formData)

  //   fetch('contact.php', {
  //     method: 'post',
  //     body: formData
  //   })
  //     .then(res => {
  //       console.log(res)
  //       // response.text()
  //     })
  //     .then(data => {
  //       console.log('Data returned', data)
  //     })

  //   e.preventDefault()

  //   contactForm.reset()

  //   // submit.disabled = false

  // })



  //////////////////////////////
  /////////// Options //////////
  //////////////////////////////



  // Implémentation lazyload

// var windowHeight = window.outerHeight,
//     // on cible uniquement les images qui ont une classe .lazy
//     images    = document.querySelectorAll(".lazy"),
//     imgLength = images.length

// window.addEventListener('scroll', function() {
//     var curPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop

//   for (var i=0; i<imgLength; i++) {
//       imgPosition = images[i].offsetTop

//     if (curPos>= (imgPosition - windowHeight)) {
//       var targetSrc = images[i].getAttribute('data-src')
//       var targetAlt = images[i].getAttribute('data-alt')

//       if(targetSrc.length>0) {
//         images[i].setAttribute('src',targetSrc)
//         images[i].setAttribute('alt', targetAlt )
//       }
//     }
//   }

// })


  // Implementation Leaflet / Mapbox

  // // création et positionnement de la carte
  // var clientMap = L.map('map', {scrollWheelZoom: false}).setView([51.505, -0.09], 13);
  // // création et positionnement du marqueur
  // var marker = L.marker([51.5, -0.09]).addTo(clientMap);
  // // ajout du popup
  // marker.bindPopup("<b>Hello ! We are here");
  // // ajout du tooltip
  // marker.bindTooltip("Hello ! Come and visit us !");
  // // ajout du fond de carte mapbox
  // L.tileLayer('https://api.mapbox.com/styles/v1/letitbe133/cjj2sq3041yo62sn3tsa22aez/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoibGV0aXRiZTEzMyIsImEiOiJjajg3b2MydWMxM3hvMzJtcDZ6bHVlM3Y1In0.ltE1CivhBmTQXTEAA7r6NQ', {
  // // attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  // maxZoom: 18,
  // id: 'mapbox.terminal',
  // accessToken: 'pk.eyJ1IjoibGV0aXRiZTEzMyIsImEiOiJjajg3b2MydWMxM3hvMzJtcDZ6bHVlM3Y1In0.ltE1CivhBmTQXTEAA7r6NQ'
  // }).addTo(clientMap);



  // Implémentation Instagram

  // Limite du nombre de photos affichées
  // var count = 5

  // // Récupération des photos récentes
  // fetch('https://api.instagram.com/v1/users/self/media/recent/?access_token=6218042681.0dc677e.6f2e6286a5cb495bbd885e2f44d4e561')
  //   .then(result => result.json())
  //   .then(datas => {
  //     var photos = datas.data
  //     photos.slice(0,count).map(photo => {
  //       // console.log(photo)
  //         displayPhotos(photo)
  //     })
  //   })

  // // Fonction d'affichage des photos
  // function displayPhotos(item) {
  //   // DIV cible
  //   var target = document.getElementById('instagram')

  //   // Sélection de la photo à afficher en fonction de la taille de l'écran
  //   var url
  //   (window.innerWidth < 500 ) ? url= item.images.low_resolution.url : url = item.images.standard_resolution.url

  //   // Conversion de la date de la photo
  //   var timestamp = item.created_time
  //   var date = new Date(timestamp *1000)
  //   var year = date.getFullYear()
  //   var month = date.getMonth()
  //   var day = date.getDay()
  //   var fullDate = `${day}/${month}/${year}`

  //   // Template d'affichage des photos
  //   var markup = `
  //   <div class="card col s6 offset-s3">
  //     <div class="card-image">
  //       <img src="${url}" />
  //     </div>
  //     <div class="card-content">
  //     <a href="${item.link}" target="blank">Voir sur Instagram</a>
  //     <p>Aimé par ${item.likes.count} personnes</p>
  //     <p>Photo prise le ${fullDate}</p>
  //     </div>
  //   </div>
  // `
  //   target.innerHTML += markup
  // }

  
  
  



});

