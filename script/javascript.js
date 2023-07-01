// Alerts provisórios
function formtxt(){
window.alert('Formulário sendo feito');
}


// inicializador do AOS
AOS.init();
$('.clientesCarro').slick({
  dots: true,
  infinite: true,
  infinite: true,
  autoplay: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
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

// verifica se a classe open está presente no elemento com a classe menu-mobile. Se estiver presente, a classe é removida e o ícone do menu é alterado para "btn-abrirmenu.svg". Caso contrário, a classe open é adicionada, e o ícone do menu é alterado para "btn-fecharmenu.svg".
function menuShow() {
  let menuMobile = document.querySelector('.menu-mobile');
  if (menuMobile.classList.contains('open')) {
      menuMobile.classList.remove('open');
      document.querySelector('.icon-menu').src = "img/menu/btn-abrirmenu.svg";
  } else {
      menuMobile.classList.add('open');
      document.querySelector('.icon-menu').src = "img/menu/btn-fecharmenu.svg";
  }
}


//quando o botão "Toggle Menu" é clicado, a função toggleMenu() é chamada. Essa função seleciona o elemento <body> do documento HTML usando document.querySelector('body') e, em seguida, alterna a classe menu-aberto usando classList.toggle('menu-aberto'). A classe menu-aberto define a propriedade CSS overflow: hidden, o que impede o scroll quando essa classe é aplicada ao elemento <body>.
function toggleMenu() { 
  var bodyElement = document.querySelector('body');
  bodyElement.classList.toggle('menu-aberto');
}

//menu mobile




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


