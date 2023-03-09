<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>988Garage</title>
  <!-- Favicons -->
  <link href="{{ asset('/img/logo/x-icon-2.png') }}" rel="icon">
  <link href="{{ asset('/img/logo/x-icon-2.png') }}" rel="apple-touch-icon">

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <link href="https://kit-pro.fontawesome.com/releases/v6.0.0/css/pro.min.css" rel="stylesheet">

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />

  <style>
    .main-shadow {
      box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.15), 0 4px 10px 0 rgba(0, 0, 0, 0.15);
    }

    .main-radius {
      border-radius: 10px;
    }

    .gold-line {
      border-style: solid;
      border-width: 2px;
      border-image: linear-gradient(to right, black, gold) 1;
      border-radius: 50px;
    }

  </style>

</head>

<body class="index-page bg-gray-200">
  <!-- Navbar -->
  @include ('layouts.nav')
  @include ('layouts.header')
  @include ('layouts.content')
  
  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 ms-auto text-center">
          <div>
            <img src="{{ asset('/img/logo/icon_nav-2.png') }}" style="width:50%;">
            <h6 class="font-weight-bolder mb-4">
              <b>988 Garage</b> by AutoGLYM
            </h6>
          </div>
        </div>
        <div class="col-md-9 ms-auto mt-2">
          <div class="row">
            <div class="col-md-3 col-6 mt-2">
              <img class="w-100 opacity-9" src="{{ asset('/img/logo-partner/1.jpg') }}" alt="logo">
            </div>
            <div class="col-md-3 col-6 mt-2">
              <img class="w-100 opacity-9" src="{{ asset('/img/logo-partner/2.jpg') }}" alt="logo">
            </div>
            <div class="col-md-3 col-6 mt-2">
              <img class="w-100 opacity-9" src="{{ asset('/img/logo-partner/3.jpg') }}" alt="logo">
            </div>
            <div class="col-md-3 col-6 mt-2">
              <img class="w-100 opacity-9" src="{{ asset('/img/logo-partner/4.jpg') }}" alt="logo">
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              <!-- <a href="javascript:;"><i class="fab fa-facebook text-lg opacity-8"></i></a>
              &nbsp;&nbsp;&nbsp;
              <a href="javascript:;"><i class="fab fa-instagram text-lg opacity-8"></i></a>
              &nbsp;&nbsp;&nbsp;
              <a href="javascript:;"><i class="fab fa-twitter text-lg opacity-8"></i></a>
              &nbsp;&nbsp;&nbsp; -->
              <a href="mailto:988garage@gmail.com"><i class="fab fa-google text-lg opacity-8"></i></a>
              &nbsp;&nbsp;&nbsp;
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--   Core JS Files   -->
  <script src="{{ asset('/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="{{ asset('/js/plugins/countup.min.js') }}"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="{{ asset('/js/plugins/parallax.min.js') }}"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('/js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>

  <!-- Google map api -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHrdKXlaset7m3Na7pMCEj8efChb6qJio&callback=initMap&language=th"></script>
  <!-- <script>
    // get the element to animate
    var element = document.getElementById('count-stats');
    var elementHeight = element.clientHeight;

    // listen for scroll event and call animate function

    document.addEventListener('scroll', animate);

    // check if element is in view
    function inView() {
      // get window height
      var windowHeight = window.innerHeight;
      // get number of pixels that the document is scrolled
      var scrollY = window.scrollY || window.pageYOffset;
      // get current scroll position (distance from the top of the page to the bottom of the current viewport)
      var scrollPosition = scrollY + windowHeight;
      // get element position (distance from the top of the page to the bottom of the element)
      var elementPosition = element.getBoundingClientRect().top + scrollY + elementHeight;

      // is scroll position greater than element position? (is element in view?)
      if (scrollPosition > elementPosition) {
        return true;
      }

      return false;
    }

    var animateComplete = true;
    // animate element when it is in view
    function animate() {

      // is element in view?
      if (inView()) {
        if (animateComplete) {
          if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
              countUp.start();
            } else {
              console.error(countUp.error);
            }
          }
          if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
              countUp1.start();
            } else {
              console.error(countUp1.error);
            }
          }
          if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
              countUp2.start();
            } else {
              console.error(countUp2.error);
            };
          }
          animateComplete = false;
        }
      }
    }

    if (document.getElementById('typed')) {
      var typed = new Typed("#typed", {
        stringsElement: '#typed-strings',
        typeSpeed: 90,
        backSpeed: 90,
        backDelay: 200,
        startDelay: 500,
        loop: true
      });
    }
  </script> -->

  <!-- <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script> -->

</body>

</html>
