document.addEventListener("DOMContentLoaded", function (event) {
  const modal = document.querySelector('.modal');
  const modalBtn = document.querySelectorAll('[data-toggle=modal]');
  const closeBtn = document.querySelector('.modal__close');

  const switchModal = () => {
    modal.classList.toggle('modal--visible');
  }
  modalBtn.forEach(element => {
    element.addEventListener('click', switchModal);
  });

  closeBtn.addEventListener('click', switchModal);


  document.addEventListener('keyup', function (e) {
    let key = e.keyCode;
    if (key == 27 && modal.classList.contains('modal--visible')) {
      switchModal();
    }
  });

  document.addEventListener('click', function (e) {
    if (e.target.classList.contains('modal--visible')) {
      switchModal();
    }
  });


  //                         Button arrow top        
  function scrollArrowTop() {
    var scrolled = window.pageYOffset;
    var coords = document.documentElement.clientHeight;

    if (scrolled > coords) {
      btnToTop.classList.add('arrow__top--on');
    }
    if (scrolled < coords) {
      btnToTop.classList.remove('arrow__top--on');
    }
  }

  function arrowTop() {
    if (window.pageYOffset > 0) {
      window.scrollBy(0, -80);
      setTimeout(arrowTop, 0);
    }
  }
  var btnToTop = document.querySelector('.arrow__top');

  window.addEventListener('scroll', scrollArrowTop);
  btnToTop.addEventListener('click', arrowTop);

  const sliders = document.querySelectorAll('.swiper');

  sliders.forEach((el) => {
    const swiper = new Swiper('.swiper', {
      loop: true,
      // If we need pagination
      pagination: {
        el: el.querySelector('.swiper-pagination'),
      },

      // Navigation arrows
      navigation: {
        nextEl: el.querySelector('.swiper-button-next'),
        prevEl: el.querySelector('.swiper-button-prev'),
      }

    });

    var next = $('.swiper-button-next');
    var prev = $('.swiper-button-prev');
    var bullets = $('.swiper-pagination');

    next.css('left', prev.width() + 10 + bullets.width() + 10)
    bullets.css('left', prev.width() + 10)
  });

  new WOW().init();

  function onEntry(entry) {
    entry.forEach(change => {
      if (change.isIntersecting) {
        change.target.classList.add('control__video--active');
      }
    });
  }

  let options = {
    threshold: [0.5]
  };
  let observer = new IntersectionObserver(onEntry, options);
  let elements = document.querySelectorAll('.control__video');

  for (let elm of elements) {
    observer.observe(elm);
  }

  //                 Валидация формы



  $('.modal__form').validate({
    errorClass: "invalid",
    errorElement: "div",
    rules: {
      userName: {
        required: true,
        minlength: 2
      },
      userPhone: "required",
      userEmail: {
        required: true,
        email: true
      }
    },
    messages: {
      userName: {
        required: "Заполните поле",
        minlength: "Имя не короче двух букв"
      },
      userPhone: "Заполните поле",
      userEmail: {
        required: "Заполните поле",
        email: "Введите корректный email"
      }
    },
    submitHandler: function (form) {
      $.ajax({
        type: "POST",
        url: "send.php",
        data: $(form).serialize(),
        success: function (response) {
          console.log('Ajax ok' + response);
        }
      });
    }
  });


  //                      Маска для телефона

  $('[type=tel]').mask('+7(000) 000-00-00', { placeholder: "+7 (___) ___-__-__" });

  var player;
  $('.video__play').on('click', function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: '465',
      width: '100%',
      videoId: 'JpTvYzbDBZA',
      events: {
        'onReady': videoPlay,
      }
    });
  })

  function videoPlay(event) {
    event.target.playVideo();
  }
});