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
      .then((response) => {
        console.log(response.status)
        response.text()
      })
      .then((data) => {
        console.log('Data returned', data)
      })

    e.preventDefault()

    contactForm.reset()

    // submit.disabled = false

  })

  // Implémentation lazyload

var windowHeight = window.outerHeight,
    images    = document.querySelectorAll("img[data-src]"),
    imgLength = images.length

window.addEventListener('scroll', () => {
    var curPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop

  for (var i=0; i<imgLength; i++) {
      imgPosition = images[i].offsetTop
      console.log(imgPos)

    if (curPos>= (imgPosition - windowHeight)) {
      var target = images[i].getAttribute('data-src')

      if(target.length>0) {
        images[i].setAttribute('src',target)
        images[i].setAttribute('data-src', '')
      }
    }
  }

})

});
