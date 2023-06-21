jQuery(document).ready(function ($) {

  $(document).ready(function() {
    var accordionTitle = $('.accordion-title');
    var accordionItems = $('.accordion-items');
  
    // adicionar evento de clique no título do accordion
    accordionTitle.on('click', function() {
      var currentItem = $(this).next('.accordion-items');
      
      // alternar a classe 'active' no título do accordion
      $(this).toggleClass('active');
      // alternar a exibição do item do accordion atual
      currentItem.slideToggle();
      // esconder os demais itens do accordion
      accordionItems.not(currentItem).slideUp();
      // remover a classe 'active' dos demais títulos do accordion
      accordionTitle.not(this).removeClass('active');
    });

    $('.slider-home').slick({
      dots: true,
      fade:true,
      autoplay: true,
      autoplaySpeed: 15000,
      speed: 1500,
      slidesToShow:1,
      slidesToScroll:1,
      arrows: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1
          }
        }
      ]
    });

    $('.slider-depoimentos').slick({
      dots: false,
      autoplay: false,
      autoplaySpeed: 1000,
      speed: 500,
      slidesToShow:3,
      slidesToScroll:1,
      infinite:false,
      arrows: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1,
            centerMode: true,
          }
        }
      ]
    });
    $('.slider-galeria').slick({
      dots: false,
      autoplay: false,
      autoplaySpeed: 1000,
      speed: 500,
      slidesToShow:3,
      slidesToScroll:1,
      infinite:false,
      arrows: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1,
            centerMode: true,
          }
        }
      ]
    });
    $('.slider-projetos').slick({
      dots: false,
      autoplay: false,
      autoplaySpeed: 1000,
      speed: 500,
      slidesToShow:3,
      slidesToScroll:1,
      infinite:false,
      arrows: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1,
            centerMode: true,
          }
        }
      ]
    });
    $('.slider-nosso-fazer').slick({
      dots: false,
      fade:false,
      autoplay: false,
      autoplaySpeed: 2000,
      speed: 1000,
      slidesToShow:2,
      slidesToScroll:1,
      arrows: true,
      infinite:false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            infinite:false,
            slidesToShow: 1
          }
        }
      ]
    });
  });

  // FUNCÃO PARA O MENU ADD A CLASSE QUANDO O SCROLL FOR MAIOR QUE UM VALOR
  $(function () {
    $(window).on("scroll", function () {
      if ($(window).scrollTop() > 0) {
        $("header").addClass("fixed-top");
      } else {
        $("header").removeClass("fixed-top");
      }
    });
  });

  $('header li.menu-item-has-children').on('click', function(){
    $(this).toggleClass('open');
    $(this).children('ul.sub-menu').toggleClass('active');
  });

  $('header .menu-hamburguer-icon').on('click', function(){
    $('.offcanva-menu').addClass('open-offcanva');
  });

  //qunado clicar no .offcanva-menu open-offcanva fechar o offcanva-menu  
  $('header .offcanva-menu button').on('click', function(){
    $('.offcanva-menu').removeClass('open-offcanva');
  });

});
// FIM DO DOCUMENT READY
