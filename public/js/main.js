// // Récupère tous les liens de la barre de navigation
// //const navLinks = document.querySelectorAll('nav a');

// // Pour chaque lien, ajoute un gestionnaire d'événement de clic
// //navLinks.forEach(link => {
//   link.addEventListener('click', event => {
//     // Empêche le comportement par défaut du lien
//     event.preventDefault();
//     // Récupère l'ID de la section cible à partir de l'attribut href du lien
//     const targetId = link.getAttribute('href');
//     // Fait défiler la page jusqu'à la section cible
//     document.querySelector(targetId).scrollIntoView({
//       behavior: 'smooth'
//     });
//   });
// });

// /**
//    * Easy selector helper function
//    */
// const select = (el, all = false) => {
//     el = el.trim()
//     if (all) {
//       return [...document.querySelectorAll(el)]
//     } else {
//       return document.querySelector(el)
//     }
//   }

//   /**
//    * Easy event listener function
//    */
//   const on = (type, el, listener, all = false) => {
//     let selectEl = select(el, all)
//     if (selectEl) {
//       if (all) {
//         selectEl.forEach(e => e.addEventListener(type, listener))
//       } else {
//         selectEl.addEventListener(type, listener)
//       }
//     }
//   }

//   /**
//    * Easy on scroll event listener 
//    */
//   const onscroll = (el, listener) => {
//     el.addEventListener('scroll', listener)
//   }

//   /**
//    * Navbar links active state on scroll
//    */
//   //let navbarlinks = select('#navbar .scrollto', true)
//   //const navbarlinksActive = () => {
//     //let position = window.scrollY + 200
//     //navbarlinks.forEach(navbarlink => {
//       //if (!navbarlink.hash) return
//       let section = select(navbarlink.hash)
//       if (!section) return
//       if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
//         navbarlink.classList.add('active')
//       } else {
//         navbarlink.classList.remove('active')
//       }
//     })
//   }; 
//   window.addEventListener('load', navbarlinksActive)
//   onscroll(document, navbarlinksActive)

//   /**
//    * Scrolls to an element with header offset
//    */
//   const scrollto = (el) => {
//     let header = select('#header')
//     let offset = header.offsetHeight

//     let elementPos = select(el).offsetTop
//     window.scrollTo({
//       top: elementPos - offset,
//       behavior: 'smooth'
//     })
//   }; 

// // TOP 
  
  
const hero = document.querySelector('#hero');
const backToTop = document.querySelector('.back-to-top');

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      backToTop.classList.remove('on');
    } else {
      backToTop.classList.add('on');
    }
  });
});

observer.observe(hero);




