AOS.init();

$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  infinite: true,
  autoplay: true,
});

$('.servicos-carro').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

//menu mobile
function menuShow() {
  let menuMobile = document.querySelector('.mobile-menu');
  if (menuMobile.classList.contains('open')) {
      menuMobile.classList.remove('open');
      document.querySelector('.icon').src = "assets/img/btn-abrirmenu.svg";
  } else {
      menuMobile.classList.add('open');
      document.querySelector('.icon').src = "assets/img/btn-fecharmenu.svg";
  }
}

// window.onscroll = function(){

//   var topo = window.scrollY || document.documentElement.scrollTop;

//   if(topo > 140){
//     console.log("Adicionar menu fixo" + topo);
//     document.getElementById("topoFixo").classList.add("menu-fixo");
//     document.getElementById("topoFixo").classList.remove("site");
//   }
//   else{
//     console.log ("Remover menu fixo");
//     document.getElementById("topoFixo").classList.remove("menu-fixo");
//     document.getElementById("topoFixo").classList.add("site");
//   }
// }