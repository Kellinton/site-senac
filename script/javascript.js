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