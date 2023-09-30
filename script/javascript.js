// Alerts provisórios
// function formtxt(){
// window.alert('teste');
// }


//#region Carroseul//
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

$('.servicosCarro').slick({
  dots: true,
  infinite: true,
  infinite: true,
  autoplay: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
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
//#endregion Carroseul//

//#region Inicializador-Carrousel//

//inicializador do carrousel a partir do tamanho da tela

// function initCarrossel() {
//   // Lógica para inicializar o carrossel aqui

// }

// function handleMediaQuery(mq) {
//   if (mq.matches) {
//       // Tamanho da tela atende à condição
//       initCarrossel();
//       document.getElementById("responsivo-carro").style.display = "block";
//   } else {
//       // Tamanho da tela não atende à condição
//       document.getElementById("responsivo-carro").style.display = "none";
//   }
// }

// var mediaQuery = window.matchMedia("(min-width: 768px)"); // Defina o tamanho de tela desejado

// handleMediaQuery(mediaQuery); // Verifica o tamanho da tela inicialmente

// mediaQuery.addListener(handleMediaQuery); // Verifica o tamanho da tela sempre que houver alteração

//#endregion Inicializador-Carrousel//

//#region Menu-mobile//

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

  //ocultar,mostrar,menu
  var menu = document.getElementById("menu");
  if (menu.classList.contains("menu-visivel")) {
      menu.classList.remove("menu-visivel"); // Oculta o menu
  } else {
      menu.classList.add("menu-visivel"); // Mostra o menu
  }
}

//#endregion Menu-mobile//


//#region Seta-voltar-topo//

//seta que faz a página voltar ao topo
$(document).ready(function() {
  $(window).scroll(function() {

    if ($(this).scrollTop() > 20) {
      $('#myLink').fadeIn();
    } else {

      $('#myLink').fadeOut();
    }
  });

  $('#myLink').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, 800);
  });
});

//#endregion Seta-voltar-topo//


//#region página sobre//


function show() {
  var x = document.getElementById("divTeste");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function show1() {
  var x = document.getElementById("divTeste1");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
function show2() {
  var x = document.getElementById("divTeste2");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function show3() {
  var x = document.getElementById("divTeste3");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}


//#endregion página sobre//


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


function showForm() {
  var formConteudo = document.getElementById('formConteudo');
  formConteudo.style.display = 'block';
  formConteudo.style.transform = 'translateX(0)';
}

document.getElementById('abrirFormBtn').addEventListener('click', showForm);


// Adiciona um evento de clique no botão de fechar
document.getElementById('fecharFormBtn').addEventListener('click', function() {
  var formConteudo = document.getElementById('formConteudo');
  formConteudo.style.transform = 'translateX(-100%)';
  setTimeout(function() {
    formConteudo.style.display = 'none';
  }, 300);
});



// Swal.fire('Hello, SweetAlert2!'); Alerta básico do Swal