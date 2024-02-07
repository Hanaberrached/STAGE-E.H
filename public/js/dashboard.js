// changement de fenetre 
$(document).ready(function(){
  navigation()
})
function navigation(){  
  const pageName = $(".nav-link").parent().data('id')
  const linkNames = $('.nav-link')
  console.log(linkNames);
  linkNames.each(function() {
    const dataId = $(this).data('id');
    if (dataId === pageName) {
      $(this).addClass('active');
    }
  })
}



var logoutLink = document.querySelector(".logout");
logoutLink.addEventListener("click", function() {
  window.location.href = "/connexion";
});






